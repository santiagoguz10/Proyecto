<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes as Clientes;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

//agregar modelo
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consulto todos los registros de la tabla clientes
        $clientes = Clientes::all();
        //llamo la vista que se va a cargar
        return \View::make('listarCliente', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {

        return \View::make('CrearCliente');

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
                    'name'     => 'required',
                    'last_name'      => 'required',
                    'phone'   => 'required',
                    'cc'  => 'required|unique:clientes'
                ) ;
        
        $validator = Validator::make($data,$rule);

          if ($validator->fails())
            {

    return Redirect::to('clientes')->withErrors($validator->messages());

            }else{

    Clientes::storeClient( $data );
    
    return Redirect::to('clientes')->withMessage('Se ha creado con éxito.');

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
        $cliente = Clientes::where('cc', $id)->first(); 

        return \View::make('EditarCliente', compact('cliente'));

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
                    'name'     => 'required',
                    'last_name'      => 'required',
                    'phone'   => 'required',
                    'cc'  => 'required'
                ) ;
        
        $validator = Validator::make($data,$rule);

          if ($validator->fails())
            {

    return Redirect::to('clientes')->withErrors($validator->messages());

            }else{

    Clientes::updateClient( $data );
    
    return Redirect::to('clientes')->withMessage('Se ha editado con éxito.');

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

        $clientes = Clientes::where('cc', $id)->first(); 
         Clientes::where('cc', $id)->delete();

        $mensaje = "Se ha eliminado el cliente ".$clientes->name;
        $return = array('result' =>   
            array('id'=> $clientes->cc, 'mensaje'=>$mensaje) 
                                    );
        return  $return;
    }  


        }
}
