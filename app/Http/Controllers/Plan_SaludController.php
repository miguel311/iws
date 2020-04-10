<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonIntegrityPlan;


class Plan_SaludController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            //lsita de planes que se mostrara en vue
            $plan = PersonIntegrityPlan::paginate(10);
            //return response()->json(['plan' => $plan]);

            return $plan;
        }else{
            //lsita de planes que se mostrara en vue
            $plan = PersonIntegrityPlan::paginate(10);
            return view('plan.plan_index', compact('plan'));
        }
    }

   /**
     * Display a listing  the search result.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search_field = $request->input('search_field');
        if($search_field){
          $search = PersonIntegrityPlan::where('id','LIKE',"%$search_field%")
          ->orWhere('name','LIKE',"%$search_field%")
          ->orWhere('description','LIKE',"%$search_field%")
          ->orWhere('coverage','LIKE',"%$search_field%")
          ->orWhere('price','LIKE',"%$search_field%")
          ->orWhere('deductible','LIKE',"%$search_field%")
          ->paginate(10);
          return view('plan.plan_index',array('plan'=>$search));
        }else{
         //llama toda la informacion de solicitantes.
         $plan = PersonIntegrityPlan::paginate(10);
         return view('plan.plan_index', compact('plan'));
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    // VALIDACIÓN DE CAMPOS DE CAMPOS
    $v = \Validator::make($request->all(), [
        'name' => 'required',
        'descrip' => 'required',
        'suma' => 'required',
        'costo' => 'required',
        'name' => 'required',
        'dedu' => 'required'
    ]);

    if ($v->fails())
    {
        return back()->with('mensaje', 'ERROR! Plan No Agregado!');
    }

    $plan = new PersonIntegrityPlan();
    $plan->name = $request->name;
    $plan->description = $request->descrip;
    $plan->coverage = $request->suma;
    $plan->price = $request->costo;
    $plan->deductible = $request->dedu;
    $plan->save();
    return back()->with('mensajefine', 'Plan Agregado Correctamente N°: '.$plan->id);

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
        $plan = PersonIntegrityPlan::find($id);
        $plan->delete();
        return back()->with('mensaje', 'Plan Eliminado Correctamente!' );
    }
}
