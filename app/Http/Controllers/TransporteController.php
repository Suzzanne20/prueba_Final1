<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
    public function index(){
        //Pagina de inicio
        $datos = Transporte::orderBy('id','asc')->paginate(25); //Transporte=> Modelo
        return view('Transporte/transporte', compact('datos'));//datos es un parametro que contiene los datos de transporte
    }
    public function create(){
        //el formulario donde agregamos los datos
        return view('Transporte/agregar');
    }
    public function store(Request $request){
        //Sirve para guardar datos en la base de datos
        $transporte = new Transporte(); //creamos un objeto del modelo (clase)
        $transporte -> nombre = $request->post('nombre');
        $transporte -> razon_social = $request->post('razon_social');
        $transporte -> save();

        return redirect() -> route("transporte.index") -> with("success", "Agregado con exito!");
    }
    public function show($id){
        //Servirá para obtener un registro de nuestra tabla
        $transporte = Transporte::find($id);
        return view('Transporte/eliminar', compact('transporte'));
    }
    public function edit($id){
        //Este metodo nos sirve para traer los datos que se vna a editar y
        //los coloca en un formulario.
        $transporte = Transporte::find($id);
        return view('Transporte/actualizar', compact('transporte'));
    }
    public function update(Request $request, $id){
        //Este método actualiza los datos en la bd
        $transporte = Transporte::find($id);
        $transporte -> nombre = $request->post('nombre');
        $transporte -> razon_social = $request->post('razon_social');
        $transporte -> save();

        return redirect() -> route("transporte.index") -> with("success", "Actualizado con exito!");
    }
    public function destroy($id){
        //Elimina un registro
        $transporte = Transporte::find($id);
        $transporte->delete();
        return redirect()->route("transporte.index")->with("success", "Eliminado con exito!");
    }
}
