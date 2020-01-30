<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContractingQuote;
use App\PersonIntegrityPlan;
use App\HealthIntegrity;
use PDF;
use Elibyy\TCPDF\Facades\TCPDF;


class CoizaSaludController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return PersonIntegrityPlan::all();


        if($request->ajax()){
            $plan = PersonIntegrityPlan::get();
            return $plan;

        }else{
            $integrities = HealthIntegrity::get();
            return view('cotizador.cotizadorsaludindex', compact('integrities'));

        }


        // return Estado::all();
        
        // if($request->ajax()){
        // return auth()->user();
        // return Request();
        //$usuarioEmail = auth()->user()->email;
        
        // $request = App\Request::all();
        // return view('request.request',compact('request'));
            // $plan = PersonIntegrityPlan::get();
            // return $plan;
            // return view('cotizador.cotizadorsalud', compact('plan'));
        // }else{
            // return view('home');
        // }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->ajax()){
            $plan = PersonIntegrityPlan::get();
            return $plan;
        }else{
            return view('cotizador.cotizadorsalud');
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $salud = new HealthIntegrity();
        // DATOS ENVIADOS
        $salud->cedule_type = $request->cedule_type;
        $salud->cedule = $request->cedule;
        $salud->name = $request->name;
        $salud->last_name = $request->lastname;
        $salud->phone_local_type = $request->phone_local_type;
        $salud->phone_local = $request->phone_local;
        $salud->phone_movile_type = $request->phone_movile_type;
        $salud->phone_movile = $request->phone_movile;
        $salud->email = $request->email;
        $salud->forma_pago = $request->forma_pago;
        $salud->deducible = $request->deducible;
        $salud->plan_persona_id = $request->plan_persona_id;
        $salud->user_id = auth()->user()->id;
        // POR CONSULTAR PLAN
        $planes = PersonIntegrityPlan::find($request->plan_persona_id);
        $salud->suma = $planes->coverage;
        $salud->cuota = $planes->price;
        // Guardar
        $salud->save();

        // RECOORRE EL ARRAY DE USUARIOS
        foreach ($request{0} as $key => $value) {
            $users = new ContractingQuote();
            foreach ($value as $key => $value) {
                // return $value ;
                // if ($key == 'date') {
                //     $users->$key = \Carbon::createFromFormat('YYYY-mm-dd', $value);
                // }
                // else{
                $users->$key = $value;
                // }
            }
            $users->integrity_saluds_id = $salud->id;
            $users->save();
        }

        return $salud;

        // IMPRIME EN PDF
        // $html_content = '<h1> Impresion de Prueba</h1>';
        // $pdf = new TCPDF();
        // PDF::SetTitle('Sample PDF');
        // PDF::AddPage();
        // PDF::writeHTML($html_content, true, false, true, false, '');

        // PDF::Output(public_path(uniqid().'_cotiza.pdf'), 'D');



        // return back()->with('mensaje', 'Nota Agregada!');
        // return $salud;
         // return view('cotizador.cotizadorsalud');
        // // $salud->id;//id de contizacion guardada
        // $id = $salud['id'];//id de contizacion guardada
        // // hacer foreache

        // $user = $request->users;//llama el array con los dados de contratantes
        // foreach ($user as $key => $value) {
        //     $contractor = new cotiza_contractor();
        //     $contractor->integrity_saluds_id = $id;
        //     $contractor->name = $user['name'];
        //     $contractor->lastname = $user['lastname'];
        //     $contractor->sexo = $user['sexo'];
        //     $contractor->date = $user['date'];
        //     $contractor->parent = $user['parent'];
        //     $contractor->mother = $user['mother'];
        //     $contractor->save();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = HealthIntegrity::findOrFail($id);
        // CONSULTA PLAN SELECCIONADO
        $planes = PersonIntegrityPlan::find($show->plan_persona_id);
        // CONSULTA PERSONAS RESGUARDADAS BAJO EL CONTRATANTE
        $resguardados = ContractingQuote::where('integrity_saluds_id', $show->id)->get();
        // return $resguardados;
        return view('cotizador.cotizadorsaludshow', compact('show','planes','resguardados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //    return view('cotizador.editar');
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
        $destroy = HealthIntegrity::find($id);
        $resguardados = ContractingQuote::where('integrity_saluds_id', $destroy->id)->delete();
        $destroy->delete();
        return back()->with('mensaje', 'Cotización Eliminada Correctamente' );
    }
}
