@extends('layouts.master')

@section('content')
{!!Form::model($datos,array('method'=>'PATCH','action'=>['ProveedoresController@update',$datos->id],'files' => 'true'))!!} 
{{Form::token()}}
                <div class="form-horizontal">
                <div class="panel panel-default">
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Nombre del producto</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nombre" value="{{$datos->nombre}}"/>
                                            </div>                                            
                                            {!! $errors->first('nombre','<span class="help-block">:message</span>')!!}
                                            
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('telefono') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Telefono</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="telefono" value="{{$datos->telefono}}"/>
                                            </div>                                            
                                            {!! $errors->first('telefono','<span class="help-block">:message</span>')!!}
                                            
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('direccion') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Direccion</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="direccion" value="{{$datos->direccion}}"/>
                                            </div>                                            
                                            {!! $errors->first('direccion','<span class="help-block">:message</span>')!!}
                                            
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