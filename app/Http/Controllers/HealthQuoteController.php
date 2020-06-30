<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\HealthQuote;
use App\Models\QuoteContractor;
use App\Models\Phone;
use Auth;

/** Revisar */

use App\ContractingQuote;
use App\PersonIntegrityPlan;
use App\HealthIntegrity;
use PDF;
use App\User;
use Elibyy\TCPDF\Facades\TCPDF;


class HealthQuoteController extends Controller
{
  use ValidatesRequests;

  /**
     * Arreglo con las reglas de validación sobre los datos de un formulario
     * @var Array $validateRules
     */
    protected $validateRules;

    /**
     * Arreglo con los mensajes para las reglas de validación
     * @var Array $messages
     */
    protected $messages;

    /**
     * Define la configuración de la clase
     *
     * @author
     */
    public function __construct()
    {
        /** Define las reglas de validación para el formulario */
        $this->validateRules = [
            'name'            => ['required', 'max:100'],
            'last_name'       => ['required', 'max:100'],
            'document_type'   => ['required', 'max:200'],
            'document_number' => ['required', 'max:200'],
            'email'           => ['required'],
            'way_to_pay'      => ['required']
        ];

        /** Define los mensajes de validación para las reglas del formulario */
        $this->messages = [
            'name.required'            => 'El campo nombre es obligatorio.',
            'last_name.required'       => 'El campo apellido es obligatorio.',
            'document_type.required'   => 'El campo tipo de documento es obligatorio.',
            'document_number.required' => 'El campo número del documento es obligatorio.',
            'email.required'           => 'El campo email es obligatorio.',
            'way_to_pay.required'      => 'El campo forma de pago es obligatorio.'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('health_quotes.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('health_quotes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->validateRules, $this->messages);

        /**
         * Objeto asociado al modelo Phone
         * @var Object $localPhone
         */
        $localPhone = Phone::create([
            'area_code' => $request->local_phone['area_code'],
            'number'    => $request->local_phone['number'],
            'type'      => $request->local_phone['type']
        ]);

        /**
         * Objeto asociado al modelo Phone
         * @var Object $mobilePhone
         */
        $mobilePhone = Phone::create([
            'area_code' => $request->mobile_phone['area_code'],
            'number'    => $request->mobile_phone['number'],
            'type'      => $request->mobile_phone['type']
        ]);

        /**
         * Objeto asociado al modelo HealthQuote
         * @var Object $healthQuote
         */
        $healthQuote = HealthQuote::create([
            'name'               => $request->name,
            'last_name'          => $request->last_name,
            'document_type'      => $request->document_type,
            'document_number'    => $request->document_number,
            'email'              => $request->email,
            'local_phone_id'     => $localPhone->id,
            'mobile_phone_id'    => $mobilePhone->id,
            'commercial_plan_id' => $request->commercial_plan_id,
            'user_id'            => Auth::id(),
            'way_to_pay'         => $request->way_to_pay
        ]);

        foreach ($request->quote_contractors as $quote_contractor) {
            /**
             * Objeto asociado al modelo QuoteContractor
             * @var Object $quoteContractor
             */
            $quoteContractor = QuoteContractor::create([
                'name'            => $quote_contractor['name'],
                'last_name'       => $quote_contractor['last_name'],
                'gender'          => $quote_contractor['gender'],
                'birthdate'       => $quote_contractor['birthdate'],
                'parent'          => $quote_contractor['parent'],
                'maternity'       => $quote_contractor['maternity'] ?? false,
                'health_quote_id' => $healthQuote->id
            ]);
        }
        $request->session()->flash('message', ['type' => 'store']);
        return response()->json(['result' => true, 'redirect' => route('cotiza-salud.index')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $healthQuote = HealthQuote::find($id);
        return response()->json(['record' => $healthQuote], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $healthQuote = HealthQuote::find($id);
        return view('health_quotes.create', compact('healthQuote'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $healthQuote = HealthQuote::find($id);
        $healthQuote->delete();
        return response()->json(['message' => 'destroy'], 200);
    }

    //imprimir
    public function print($id)
    {   
    //CONSULTA DATOS  
    $show = HealthIntegrity::findOrFail($id);
    //return $show;
    // CONSULTA PLAN SELECCIONADO incluso los borrados
    $planes = PersonIntegrityPlan::withTrashed()->find($show->plan_persona_id);
    // CONSULTA PERSONAS RESGUARDADAS BAJO EL CONTRATANTE
    $resguardados = ContractingQuote::where('integrity_saluds_id', $show->id)->get();
    //Aliado comercial 
    $user = User::find($show->user_id);

    //CONFIGURACIÓN PARA IMPRIMIR
    /** @var string Familia de fuente a utilizar en el reporte */
    $fontFamily = 'helvetica';
    /** @var string Ruta en donde se encuentra ubicada la imagen del logotipo institucional */
    $imageFile = "images/logo.png";
    /** @var string Ruta en donde se encuentra el cintillo o banner institucional */
    //$bannerFile = K_PATH_IMAGES."/cintillo.png";
    /** @var array Estilos a implementar en el código QR a generar */
    $qrCodeStyle = [
        'border' => false,
        'padding' => 0,
        'fgcolor' => [0,0,0],
        'bgcolor' => false
    ];
    $barCodeStyle = [
        'border' => 0,
        'vpadding' => 'auto',
        'hpadding' => 'auto',
        'fgcolor' => [0,0,0],
        'bgcolor' => false, //array(255,255,255)
        'module_width' => 1, // width of a single module in points
        'module_height' => 1 // height of a single module in points
    ];

    /** @var string Ruta de verificación del reporte mediante el código QR */
    $urlVerifyReport = 'http://iws.test/cotizasalud/'.$show->id;
    /** @var string Título a mostrar en el reporte */
    $reportTitle = 'Solicitud Cotización de Prevención';
    /** @var string Descripción o subtítulo del reporte */
    $reportDescription = 'Aliado Comercial N°: 000000'.$user->id.' Nombre: '.$user->name.' Email: '.$user->email.' ';
    /** @var array Estilos a implementar en las líneas de separación entre las secciones del reporte */
    $lineStyle = ['width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => [0, 0, 0]];

 /** Configuración del encabezado del reporte */
    PDF::setHeaderCallback(function ($pdf) use (
        $fontFamily,
        $imageFile,
        //$bannerFile,
        $barCodeStyle,
        $qrCodeStyle,
        $urlVerifyReport,
        $reportTitle,
        $reportDescription,
        $lineStyle
    ) {
        /** Imagen del banner institucional a implementar en el reporte */
       // $pdf->Image($bannerFile, 10, 10, '', 10, '', '', 'T', false, 300, 'C', false, false, 0, false, false, true);
        /** Imagen del logotipo institucional a implementar en el reporte */
        $pdf->Image($imageFile, 10, 20, 25, '', '', '', 'T', false, 300, '', false, false, 0, false, false, false);
        /** Configuración de la fuente para el título del reporte */
        $pdf->SetFont($fontFamily, 'B', 15);
        /** Título del reporte */
        $pdf->MultiCell(145, 7, $reportTitle, 0, 'C', false, 1, 35, 22, true, 0, false, true, 0, 'T', true);
        /** Código QR con enlace de verificación del reporte */
        $pdf->write2DBarcode($urlVerifyReport, 'QRCODE,H', 190, 22, 12, 12, $qrCodeStyle, 'T');
        /** Configuración de la fuente para la breve descripción del reporte */
        $pdf->SetFont($fontFamily, 'B', 12);
        /** Descripción breve del reporte */
        $pdf->MultiCell(72, 4, $reportDescription, 0, 'L', false, 1, 40, 30, true, 1, false, true, 0, 'T', true);
        /** Fecha de emisión del reporte */
        $pdf->MultiCell(72, 4, \Carbon\Carbon::now(), 0, 'R', false, 1, 113, 30, true, 1, false, true, 0, 'T', true);
        /** Línea de separación entre el encabezado del reporte y el cuerpo */
        $pdf->Line(7, 35, 205, 35, $lineStyle);

        /*$pdf->write1DBarcode(
        '$2y$10$syg39jYYUGB/PDi/i9MI5u53FMza75uWPaBmU8XtYrBgWuloA8Xva', 'C128', 80, 90, 60, 10, '', $barCodeStyle, 'N'
        );*/
        /*$pdf->write1DBarcode('1234567890', 'UPCA', 80, 90, 60, 10, '', $barCodeStyle, 'N');*/
        /*$pdf->write1DBarcode('1234567890', 'CODABAR', 80, 90, 60, 10, '', $barCodeStyle, 'N');*/
        /*$pdf->write1DBarcode('1234567890', 'CODE11', 80, 90, 60, 10, '', $barCodeStyle, 'N');*/
        //$pdf->Text(80, 85, 'PDF417 (ISO/IEC 15438:2006)');
        //
        //ESTE DE ACA ABAJO
        /*$pdf->write2DBarcode('www.tcpdf.org', 'PDF417,4,6,1,99998,,filename.txt', 80, 90, 60, 15, $barCodeStyle, 'N');
        $pdf->Text(80, 85, 'PDF417 (ISO/IEC 15438:2006)');*/
    });

        // IMPRIME EN PDF
        $html_content = '
        <br><br><br><br><br><br>
           
        <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
        .tg .tg-b3su{font-size:20px;background-color:#f0f0f0;color:#000000;border-color:inherit;text-align:center;vertical-align:top}
        .tg .tg-kwiq{color:#000000;border-color:inherit;text-align:left;vertical-align:top}
        .tg .tg-d0st{font-size:20px;color:#000000;border-color:#000000;text-align:center;vertical-align:top}
        .tg .tg-pjk6{color:#000000;border-color:#000000;text-align:left;vertical-align:top}
        </style>
        
        <table class="tg">
          <tr>
            <td class="tg-b3su" colspan="4"><span style="font-weight:bold">Solicitante y Plan</span></td>
          </tr>
          <tr>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Solicitante: '.$show->name.' '.$show->last_name.'</span></td>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Solicitud N°: 000000'.$show->id.'</span></td>
          </tr>
          <tr>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Cédula:'.$show->cedule_type.' '.$show->cedule.'</span></td>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Email: '.$show->email.'</span></td>
          </tr>
          <tr>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Teléfono Fijo: '.$show->phone_local_type.'-'.$show->phone_local.'</span><span style="font-weight:700"></span></td>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Teléfono Movil: '.$show->phone_movile_type.'-'.$show->phone_movile.'</span></td>
          </tr>
          <tr>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Plan: '.$planes->name.'</span><span style="font-weight:700"></span></td>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Descripción de Plan: '.$planes->description.'</span></td>
          </tr>
          <tr>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Suma de Resguardo: '.$show->suma.'</span><span style="font-weight:700"></span></td>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Cuota a Cancelar: '.$show->cuota.'</span></td>
          </tr>
          <tr>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Deducible :'.$show->deducible.'</span></td>
            <td class="tg-pjk6" colspan="2"><span style="font-weight:bold">Forma de Pago: '.$show->forma_pago.'</span></td>
          </tr>
          <tr>
            <td class="tg-pjk6" colspan="4"><span style="font-weight:bold">Vigencia de Cotización: '.\Carbon\Carbon::now()->addday(15).'</span></td>
          </tr>

          <tr>
            <td class="tg-kwiq"></td>
            <td class="tg-kwiq" colspan="2"></td>
            <td class="tg-kwiq"></td>
          </tr>
          <tr>
            <td class="tg-b3su" colspan="4"><span style="font-weight:bold">Beneficiarios</span></td>
          </tr>
        </table>
        ';
        $html_content .= '
        <table>
          <tr>
            <th style="font-weight:bold">Nombre</th>
            <th style="font-weight:bold">Edad</th>
            <th style="font-weight:bold">Fecha NAC.</th>
            <th style="font-weight:bold">Maternidad</th>
            <th style="font-weight:bold">Sexo</th>
            <th style="font-weight:bold">Parentesco</th>
          </tr>
        ';
        foreach ($resguardados as $key => $value) {
            /** Sexo de la persona */
            $sexo = ($value->sexo == 'M') ? 'Masculino' : 'Femenino';
            /** Maternidad */
            $maternidad = ($value->mother == 1) ? 'Si' : 'No';
            /** Fecha de nacimiento */
            $birth = \Carbon\Carbon::parse($value->date)->format('d-m-Y');
            /** Cantidad de años meses y dias */
            $age = \Carbon\Carbon::parse($value->date)->diff(\Carbon\Carbon::now())->format('%y Años');
            $html_content .= '
            <tr>
              <th>'.$value->name.' '.$value->last_name.'</th>
              <th>'.$age.'</th>
              <th>'.$birth.'</th>
              <th>'.$maternidad.'</th>
              <th>'.$sexo.'</th>
              <th>'.$value->parent.'</th>
            </tr>
            ';
        }
        $html_content .= '</table><br><br>';

        $html_content .= '
            <p>
            Fecha de Cobro: ______________________<br>
            Forma de Pago Efectivo: ___ Cheque N°: ___________________<br>
            Banco: ______________________<br>
            Fecha: </p>
        ';
        $html_content .= '


          <table >
          <tr>
            <th colspan="4">Día Cancelación</th>
            <th>Firma Autorizada</center></th>
          </tr>
          <tr><br>
            <th colspan="4">FAVOR EMITIR CHEQUE NO ENDOSABLE A NOMBRE DE <strong>INTEGRITY WEB SERVICES C.A</strong>, ESTE TENDRÁ VALIDEZ SI ESTÁ FECHADO Y FIRMADO POR LA PERSONA AUTORIZADA Y SE CONSIDERA ANULADO AUTOMÁTICAMENTE SI A LOS 15 DÍAS DE SU EMISIÓN NO HA SIDO PAGADO. LAS COBERTURAS REFLEJADAS EN ESTE CUADRO RECIBO SOLO SURTIRÁN EFECTO SI SON PAGADAS CON CHEQUE NO ENDOSABLE A FAVOR DE <strong>INTEGRITY WEB SERVICES C.A</strong>
            </th>
            <td><br><br><img class="card-img-top" src="images/firmajj2.png"></td>
          </tr>
          <tr>
            <th>Cancelado con:</th>
            <td>Banco:</td>
            <td>Cheque:</td>
            <td colspan="2">Firma de Cobrador</td>
          </tr>
          <tr>
            <th><br>
            Cheque: [ ]<br>
            Efectivo: [ ]<br>
            Otros: [ ]
            </th>
            <td></td>
            <td></td>
            <td colspan="2"><br>Fecha: _____/_____/_______</td>
          </tr>
        </table>

        ';

        $footerText = 'Integrity Web Services, compruebe el estatus de su cotización con el codigo QR o por el enlace: http://iws.test/cotizasalud/'.$show->id;
        PDF::setFooterCallback(function ($pdf) use ($fontFamily, $footerText, $lineStyle) {
            /** @var Número de página del reporte [description] */
            $pageNumber = 'Pág. '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages();
            /** Posición a 14 mm del borde inferior de la página*/
            $pdf->SetY(-14);
            /** Configuración de la fuenta a utilizar */
            $pdf->SetFont($fontFamily, 'I', 8);
            /** Texto a mostrar en el pie de página del reporte */
            $pdf->MultiCell(198, 8, $footerText, 0, 'C', false, 1, 7, -12, true, 1, false, true, 0, 'T', true);
            /** Texto a mostrar para el número de página */
            $pdf->MultiCell(20, 4, $pageNumber, 0, 'R', false, 1, 185, -8, true, 1, false, true, 1, 'T', true);
            /** Línea de separación entre el cuerpo del reporte y el pie de página */
            $pdf->Line(7, 265, 205, 265, $lineStyle);
        });

        $pdf = new TCPDF();
        PDF::SetTitle('Solicitud Cotización Prevención 000000'.$show->id);
        PDF::AddPage();
        PDF::writeHTML($html_content, true, false, true, false, '');
        PDF::Output('Cotizacion_Salud_'.$show->id.'_'.uniqid().'.pdf', 'D');
    }

    public function vueList() {
      return response()->json(['records' => HealthQuote::all()]);
    }
}