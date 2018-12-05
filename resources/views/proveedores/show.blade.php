@extends('layouts.master')

@section('content')
<div class="panel-body">


    {!! $errors->first('erroregistro','
    <div class="alert alert-danger">
        <strong>Warning!</strong>Ocurrio un error, intentelo nuevamente por favor!
    </div>
    ')!!}
    <h2>{{$datos->nombre}}</h2>
    <hr>
    
    <div class="row">
        <div class="col-md-12">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Direccion:</strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->direccion}}</p>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Telefono:</strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->telefono}}</p>

                </div>
            </div>

        </div>

        <div class="panel-footer">
            <a href="{{URL::action('ProveedoresController@edit',$datos->id)}}"><button class="btn btn-primary pull-right">Editar Datos</button></a>
        </div>
        <br>

    </div>
    @endsection
