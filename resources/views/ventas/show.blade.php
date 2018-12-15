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
    <div class="gallery" id="links">
        <a class="gallery-item" href="{{$datos->imagen}}" title="Girls Image 1" data-gallery>
            <div class="image">
                <img src="{{$datos->imagen}}" alt="Girls Image 1" />
                <ul class="gallery-item-controls">
                    <li><label class="check"><input type="checkbox" class="icheckbox" /></label></li>
                    <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                </ul>
            </div>
            <div class="meta">
                <strong>Imagen principal</strong>
            </div>
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Descripcion:</strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->descripcion}}</p>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Proveedor:</strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->proveedor}}</p>

                </div>
            </div>

        </div>

        <div class="col-md-6">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Tipo de producto: </strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->tipo}}</p>

                </div>
            </div>
            <div>
                <div>
                    <h3 class="panel-title"><strong>Stock:</strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->existencia}}</p>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Precio: </strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->precio}}</p>

                </div>
            </div>
            <div>
                <div>
                    <h3 class="panel-title"><strong>Costo:</strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->costo}}</p>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Fecha caducidad: </strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->fecha_caducidad}}</p>
                </div>
            </div>
        </div>



        <div class="panel-footer">
            <a href="{{URL::action('VentasController@edit',$datos->id)}}"><button class="btn btn-primary pull-right">Editar
                    Datos</button></a>
        </div>
        <br>

    </div>
    @endsection
