<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habitacion;
use App\HabitacionUser;
use Illuminate\Support\Facades\Auth;

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
    public function getCreate()
    {
        return view('habitaciones.create');
    }

    public function postCreate(Request $request)
    {
        $categoria= $request->categoria;
        $indi = 'individual';
        $doble = 'doble';
        $triple = 'triple';

        if(strcmp($categoria,$indi) === 0){
            $habitacion = new Habitacion();
            $habitacion->numero = $request->numero;
            $habitacion->categoria = "Individual";
            $habitacion->precio = 55;
            $habitacion->save();
            return redirect('/habitaciones');
        }elseif (strcmp($categoria,$doble) === 0){
            $habitacion = new Habitacion();
            $habitacion->numero = $request->numero;
            $habitacion->categoria = "Doble";
            $habitacion->precio = 70;
            $habitacion->save();
            return redirect('/habitaciones');
        }elseif (strcmp($categoria,$triple) === 0){
            $habitacion = new Habitacion();
            $habitacion->numero = $request->numero;
            $habitacion->categoria = "Triple";
            $habitacion->precio = 80;
            $habitacion->save();
            return redirect('/habitaciones');
        }else{
            return redirect('/habitaciones/create');
        }
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
       // $kk = auth()->user()->id;

        if ($habitacion->reserva){
            if ($habitacion->user_id == Auth::user()->id){
                $habitacion->reserva = !$habitacion->reserva;
                $habitacion->user_id = null;
            }
        } else {
            $habitacion->reserva = !$habitacion->reserva;
            $habitacion->user_id = Auth::user()->id;
        }

        $habitacion->save();
        return back();

    }


}
