<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habitacion;

class HabitacionesController extends Controller
{

    public function getIndex()
    {
        $arrayHabitaciones = Habitacion::all();
        return view('habitaciones.index', array('arrayHabitaciones'=> $arrayHabitaciones));
    }

    public function getShow($id)
    {
        $habitacion = Habitacion::findOrFail($id);
        return view('habitaciones.show', array(
            'habitacion' => $habitacion
        ));
    }

    public function postCreate(Request $request)
    {
        $habitacion = new Habitacion();
        $habitacion->numero = $request->numero;
        $habitacion->categoria = $request->categoria;
        $habitacion->precio = $request->precio;
        $habitacion->save();
        return redirect('/habitaciones');
    }    

    public function getEdit($id)
    {
        $habitacion = Habitacion::findOrFail($id);
        return view('habitaciones.edit', array(
            'habitacion' => $habitacion
        ));
    }

    public function putEdit(Request $request, $id)
    {
        $habitacion = Habitacion::findOrFail($id);
        $habitacion->numero = $request->numero;
        $habitacion->categoria = $request->categoria;
        $habitacion->precio = $request->precio;
        $habitacion->save();
        return redirect('/habitaciones/show/' . $habitacion->id);
    }

    public function cambiaReservada($id)
    {
        $habitacion = Habitacion::findOrFail($id);
        $habitacion->reservada = !$habitacion->reservada;
        $habitacion->save();
        return back();
    }

}
