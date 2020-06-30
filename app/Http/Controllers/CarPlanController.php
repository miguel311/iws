<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\CommercialPlan;

class CarPlanController extends Controller
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
            'name'        => ['required', 'max:100'],
            'description' => ['required', 'max:200'],
            'coverage'    => ['required'],
            'price'       => ['required'],
            'deductible'  => ['required']
        ];

        /** Define los mensajes de validación para las reglas del formulario */
        $this->messages = [
            'name.required'        => 'El campo nombre es obligatorio.',
            'description.required' => 'El campo descripción es obligatorio.',
            'coverage.required'    => 'El campo cobertura es obligatorio.',
            'price.required'       => 'El campo precio es obligatorio.',
            'deductible.required'  => 'El campo deducible es obligatorio.'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('car_plans.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_plans.create');
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
         * Objeto asociado al modelo CommercialPlan
         * @var Object $commercialPlan
         */
        $commercialPlan = CommercialPlan::create([
            'name'        => $request->name,
            'description' => $request->description,
            'coverage'    => $request->coverage,
            'price'       => $request->price,
            'deductible'  => $request->deductible,
            'type'        => 'RCV'
        ]);
        $request->session()->flash('message', ['type' => 'store']);
        return response()->json(['result' => true, 'redirect' => route('plan-car.index')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commercialPlan = CommercialPlan::find($id);
        return response()->json(['record' => $commercialPlan], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commercialPlan = CommercialPlan::find($id);
        return view('car_plans.create', compact('commercialPlan'));
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
        $this->validate($request, $this->validateRules, $this->messages);

        /**
         * Objeto asociado al modelo CommercialPlan
         * @var Object $commercialPlan
         */
        $commercialPlan = CommercialPlan::find($id)->update(
            [
                'name'        => $request->name,
                'description' => $request->description,
                'coverage'    => $request->coverage,
                'price'       => $request->price,
                'deductible'  => $request->deductible
            ]
        );
        $request->session()->flash('message', ['type' => 'update']);
        return response()->json(['result' => true, 'redirect' => route('plan-car.index')], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commercialPlan = CommercialPlan::find($id);
        $commercialPlan->delete();
        return response()->json(['record' => $commercialPlan, 'message' => 'Success'], 200);
    }

    public function vueList()
    {
        return response()->json(['records' => CommercialPlan::where('type', 'RCV')->get()]);
    }
}

