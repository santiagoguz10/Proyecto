<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas as Ventas;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

//agregar modelo
class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consulto todos los registros de la tabla ventas
        $ventas = Ventas::all();
        //llamo la vista que se va a cargar
        return \View::make('ListarVentas', compact('ventas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {

        return \View::make('CrearVenta');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data =  $request->except(['_token']);

        $rule  =  array(
                    'code'     => 'required',
                    'cc_clients'      => 'required',
                    'date'   => 'required',

                ) ;
        
        $validator = Validator::make($data,$rule);

          if ($validator->fails())
            {

    return Redirect::to('ventas')->withErrors($validator->messages());

            }else{

    Ventas::storeVentas( $data );
    
    return Redirect::to('ventas')->withMessage('Se ha creado con éxito.');

            }
       

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
        $ventas = Ventas::where('code', $id)->first(); 

        return \View::make('EditarVenta', compact('ventas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
    $data =  $request->except(['_token']);

        $rule  =  array(
                   'code'     => 'required',
                    'cc_clients'      => 'required',
                    'date'   => 'required',
                ) ;
        
        $validator = Validator::make($data,$rule);

          if ($validator->fails())
            {

    return Redirect::to('ventas')->withErrors($validator->messages());

            }else{

    Ventas::updateVentas( $data );
    
    return Redirect::to('ventas')->withMessage('Se ha editado con éxito.');

            }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
       // abort(500);
    if ($request->ajax()) {

        $ventas = Ventas::where('code', $id)->first(); 
         Ventas::where('code', $id)->delete();

        $mensaje = "Se ha eliminado la venta ".$ventas->name;
        $return = array('result' =>   
            array('id'=> $ventas->code, 'mensaje'=>$mensaje) 
                                    );
        return  $return;
    }  


        }
}
