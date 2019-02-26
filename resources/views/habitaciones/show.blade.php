@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <a href="{{ url('/habitaciones/show/' . $habitacion->id ) }}">
                <img src="/hotelRoom.jpg" title="https://www.flickr.com/photos/briherbst/5773971531/in/photolist-9Ne7zi-4M1qi3-bnpk5W-dfsHHh-4DVgL9-aX65Ac-4Qn9eM-adf2mg-2zYZZx-9PUVZv-6pUYS9-sSETk4-9WRgH8-7VKKfd-7z6dvQ-awkGVV-b1R4bp-5BVX1F-a5sf6j-ceyJFY-84tZwH-581qcp-68CPGx-6snBLz-6REhxN-6HTz3o-4QcK7i-76YVoQ-51DXrJ-yHSgP-4zMMHr-57NCir-5isQZy-eTUSZJ-3yJ7bw-8keyKL-dY54Ri-51zJer-7bdKH-8MNG9C-3QZ2hu-9xxtjS-544mu8-48DEWg-dxVqwC-4j7Biy-9whysU-5w4yJw-5bEx96-486gkW" style="height:200px"/>
            </a>

        </div>
        <div class="col-sm-8">

            <h4>{{$habitacion->numero}}</h4>
            <h6>Categoria: {{$habitacion->categoria}}</h6>
            <h6>Precio: {{$habitacion->precio}}</h6>
            <p><strong>Estado: </strong>
                @if($habitacion->reserva)
                    Habitación reservada.
                    @php
                    $class = "btn btn-danger";
                    $texto = "Eliminar reserva";
                    @endphp
                @else
                    Habitación libre.
                    @php
                        $class = "btn btn-success";
                        $texto = "Reservar";
                    @endphp
                @endif
            </p>

            <form action="{{ url('habitaciones/cambiaReservada/' . $habitacion->id) }}" method="POST">
                {{ method_field('PUT') }}
                @csrf
                <input type="submit"  class="{{$class}}" value="{{$texto}}" />
            </form>


            <a class="btn btn-warning" href="{{ url('/habitaciones/edit/' . $habitacion->id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar habitación</a>
            <a class="btn btn-outline-info" href="{{ action('HabitacionesController@getIndex') }}">Volver al listado</a>

        </div>
    </div>


@stop
