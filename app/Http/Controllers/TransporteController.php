<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
    public function index(){
        //Pagina de inicio
        $datos = Transporte::all(); //Transporte=> Modelo
        return view('home', compact('datos'));//datos es un parametro que contiene todo lo de transporte
    }
    public function create(){
        //el formulario donde agregamos los datos
        return view('agregar');
    }
    public function store(Request $request){
        //Sirve para guardar datos en la base de datos
        $transporte = new Transporte(); //creamos un objeto del modelo (clase)
        $transporte -> nombre = $request->post('nombre');
        $transporte -> razon_social = $request->post('razon_social');
        $transporte -> save();

        return redirect() -> route("transporte.index") -> with("success", "Agregado con exito!");
    }
    public function show(Transporte $transporte){
        //Servirá para obtener un registro de nuestra tabla
        return view('eliminar');
    }
    public function edit(Transporte $transporte){
        //Este metodo nos sirve para traer los datos que se vna a editar y
        //los coloca en un formulario.
        $transporte = Transporte::find($id);

        return view('actualizar', compact('transporte'));
    }
    public function update(Request $request, $id){
        //Este método actualiza los datos en la bd
        $transporte = Transporte::find($id);
        $transporte -> nombre = $request->post('nombre');
        $transporte -> razon_social = $request->post('razon_social');
        $transporte -> save();

        return redirect() -> route("transporte.index") -> with("success", "Actualizado con exito!");
    }
    public function destroy(Transporte $transporte){
        //Elimina un registro
    }
}
