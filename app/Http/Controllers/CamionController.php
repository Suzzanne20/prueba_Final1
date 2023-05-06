<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use Illuminate\Http\Request;

class CamionController extends Controller
{
    public function index2(){
        //Pagina de inicio
        $datos = Camion::orderBy('id','asc')->paginate(25); //Camion=> Modelo
        return view('camion', compact('datos'));//datos es un parametro que contiene datos de camiones
    }
    public function create2(){
        //el formulario donde agregamos los datos
        return view('agregar2');
    }
    public function store2(Request $request){
        //Sirve para guardar datos en la base de datos
        $camion = new Camion(); //creamos un objeto del modelo (clase)
        $camion -> placa_camion = $request->post('placa_camion');
        $camion -> marca = $request->post('marca');
        $camion -> color = $request->post('color');
        $camion -> modelo = $request->post('modelo');
        $camion -> capacidad_toneladas = $request->post('capacidad_toneladas');
        $camion -> save();

        return redirect() -> route("camion.index") -> with("success", "Agregado con exito!");
    }
    public function show2($id){
        //Servirá para obtener un registro de nuestra tabla
        $camion = Camion::find($id);
        return view('eliminar2', compact('camion'));
    }
    public function edit2($id){
        //Este metodo nos sirve para traer los datos que se vna a editar y
        //los coloca en un formulario.
        $camion = Camion::find($id);
        return view('actualizar2', compact('camion'));
    }
    public function update2(Request $request, $id){
        //Este método actualiza los datos en la bd
        $camion = Camion::find($id);
        $camion -> placa_camion = $request->post('placa_camion');
        $camion -> marca = $request->post('marca');
        $camion -> color = $request->post('color');
        $camion -> modelo = $request->post('modelo');
        $camion -> capacidad_toneladas = $request->post('capacidad_toneladas');
        $camion -> save();

        return redirect() -> route("camion.index") -> with("success", "Actualizado con exito!");
    }
    public function destroy2($id){
        //Elimina un registro
        $camion = Camion::find($id);
        $camion->delete();
        return redirect()->route("camion.index")->with("success", "Eliminado con exito!");
    }
}
