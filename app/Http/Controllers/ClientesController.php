<?php

namespace App\Http\Controllers;

use App\Models\clientes;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //metodo para guardar
    public function store(Request $request){
        $cliente=new clientes();  //nuevo objeto del modelo clientes
        $cliente->nombre=$request['Nombre'];
        $cliente->apellido=$request['Apellido'];
        $cliente->telefono=$request['Telefono'];
        $cliente->save();
        $mensaje="datos guardados";
        return view ("clientes",compact("mensaje"));
    }

    //funcion para mostrar los datos
    public function index()
    {
        $clientes=clientes::paginate();
        return view("consulta",compact("clientes"));
    }

    public function editar($id)
    {   //consultar registro para mostrarlo al editar
        $cliente=clientes::find($id);
        return view("editar",compact("cliente"));
    }
public function update(Request $request,clientes $cliente){
        //obtener los datos a modificar  hacer la actualización
        $cliente->nombre=$request['nombre'];
        $cliente->fecha=$request['fecha'];
        $cliente->saldo=$request['saldo'];
        $cliente->save();
        $mensaje="datos actualizados";
        return redirect()->route("consulta")->with('mensaje','Se actualizó correctamente');

    }

    public function delete($id)
    {   //borrar un registro
        $cliente=clientes::find($id);
        $cliente->delete();
        return redirect()->route("consulta")->with('mensaje','Se borro el registro');

         
    }


}
