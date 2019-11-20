<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cotiza_contractor;
use App\Integrity_plan_persona;
use App\Integrity_Salud;
use App\Estado;
use App\Municipio;
use App\Parroquia;

class CoizaSaludController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return Integrity_plan_persona::all();


        if($request->ajax()){
            $plan = Integrity_plan_persona::get();
            return $plan;

        }else{
            return view('cotizador.cotizadorsaludindex');

        }



        // return Estado::all();
        
        // if($request->ajax()){
        // return auth()->user();
        // return Request();
        //$usuarioEmail = auth()->user()->email;
        
        // $request = App\Request::all();
        // return view('request.request',compact('request'));
            // $plan = Integrity_plan_persona::get();
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
            $plan = Integrity_plan_persona::get();
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

        return back()->with('mensaje', 'entraste!');


        $salud = new integrity_salud();
        // DATOS ENVIADOS
        $salud->cedule_type = $request->cedule_type;
        $salud->cedule = $request->cedule;
        $salud->name = $request->name;
        $salud->lastname = $request->lastname;
        $salud->phone_local_type = $request->phone_local_type;
        $salud->phone_local = $request->phone_local;
        $salud->phone_movile_type = $request->phone_movile_type;
        $salud->phone_movile = $request->phone_movile;
        $salud->email = $request->email;
        $salud->forma_pago = $request->forma_pago;
        $salud->deducible = $request->deducible;
        $salud->plan_persona_id = $request->plan_persona_id;
        $salud->user_id = auth()->user()->email;

        // POR CONSULTAR
        // $plan = Integrity_plan_persona::findByid($request->plan_persona_id)->id;
        // $plan = Integrity_plan_persona::where('id', $request->plan_persona_id)->get();
        // $salud->suma = $plan->suma;
        // $salud->cuota = $plan->cuota;
        // $salud->user_id = "1";
        $salud->save();
        return back()->with('mensaje', 'Nota Agregada!');
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
        //
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
        $request = integrity_salud::find($id);
        $request->delete();
    }
}
