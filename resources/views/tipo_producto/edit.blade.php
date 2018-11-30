@extends('layouts.master')

@section('content')
{!!Form::model($datos,array('method'=>'PATCH','action'=>['TipoProductoController@update',$datos->id]))!!} 
{{Form::token()}}
                <div class="form-horizontal">
                <div class="panel panel-default">
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Nombre</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nombre" value="{{$datos->nombre}}"/>
                                            </div>                                            
                                            {!! $errors->first('nombre','<span class="help-block">:message</span>')!!}
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('descripcion') ? 'has-error':''}}">
                                            <label class="col-md-3 col-xs-12 control-label">Descripcion</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <textarea class="form-control" rows="5" name="descripcion">{{$datos->descripcion}}</textarea>
                                                </div>
                                                {!! $errors->first('descripcion','<span class="help-block">:message</span>')!!}
                                            </div>
                                    </div>

                            
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-primary pull-right" type="submit">Guardar</button>
                                </div>
                 </div>
                </div>
{!!Form::close()!!}	

@endsection

@push('porcentaje')

<script>

function updateTextInput(value){
    $(".porcentaje").text(value + "%");
}
</script>

@endpush