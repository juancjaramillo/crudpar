<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Info_personas;
use Illuminate\Http\Request;

class InfoPersonasController extends Controller
{

    public function index()
    {
        $datos = Info_personas::orderBy('Lastname','desc')->paginate(3);

        return view('welcome', compact('datos'));
    }

    public function create()
    {
        return view('agregar');
    }

    public function store(Request $request)
    {
        $infoPersona = new Info_personas();
        $infoPersona->Name = $request->post('Name');
        $infoPersona->Lastname = $request->post('Lastname');
        $infoPersona->identification = $request->post('identification');
        $infoPersona->birthdate = $request->post('birthdate');
        $infoPersona->gender = $request->post('gender');
        $infoPersona->idVehiculo = $request->post('idVehiculo');
        $infoPersona->address = $request->post('address');
        $infoPersona->save();

        return redirect()->route("InfoPersonas.index")->with('success', "Agregado con exito!");
    }

    public function show($id)
    {
        $infoPersona = Info_personas::find($id);

        return view('eliminar', compact('infoPersona'));
    }

    public function edit($id)
    {
        $infoPersona = Info_personas::find($id);

        return view('actualizar', compact('infoPersona'));
    }

    public function update(Request $request, $id)
    {
        $infoPersona = Info_personas::find($id);
        $infoPersona->Name = $request->post('Name');
        $infoPersona->Lastname = $request->post('Lastname');
        $infoPersona->identification = $request->post('identification');
        $infoPersona->birthdate = $request->post('birthdate');
        $infoPersona->gender = $request->post('gender');
        $infoPersona->idVehiculo = $request->post('idVehiculo');
        $infoPersona->address = $request->post('address');
        $infoPersona->save();

        return redirect()->route("InfoPersonas.index")->with('success', "Actualizado con exito!");
    }

    public function destroy($id)
    {
        $infoPersona = Info_personas::find($id);
        $infoPersona->delete();
        return redirect()->route("InfoPersonas.index")->with('success', "Eliminado con exito!");
    }
}
