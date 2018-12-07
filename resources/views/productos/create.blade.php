@extends('layouts.master')

@section('content')
{!!Form::open(array('url'=>'productos','method'=>'POST','autocomplete'=>'off','files' => 'true'))!!}
{{Form::token()}}
                <div class="form-horizontal">
                <div class="panel panel-default">
                                
                               
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Nombre del producto</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}"/>
                                            </div>                                            
                                            {!! $errors->first('nombre','<span class="help-block">:message</span>')!!}
                                            
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('tipo') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Categoria del producto</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="tipo">
                                            <option value=""> SELECCIONA UNA CATEGORIA </option>
                                                @foreach($tipos as $item)
                                                    @if(old('tipo') == $item->id)
                                                        <option value="{{$item->id}}" selected>{{$item->nombre}}</option>
                                                    @else
                                                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                                                    @endif
                                                @endforeach   
                                            </select>
                                            {!! $errors->first('tipo','<span class="help-block">:message</span>')!!}
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('proveedor') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Tipo del producto</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="proveedor">
                                            <option value=""> SELECCIONA UN TIPO </option>
                                                @foreach($proveedores as $item)
                                                    @if(old('proveedor') == $item->id)
                                                        <option value="{{$item->id}}" selected>{{$item->nombre}}</option>
                                                    @else
                                                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                                                    @endif
                                                @endforeach   
                                            </select>
                                            {!! $errors->first('proveedor','<span class="help-block">:message</span>')!!}
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('descripcion') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Descripcion</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" rows="5" cols="50" name="descripcion">{{old('descripcion')}}</textarea>
                                            {!! $errors->first('descripcion','<span class="help-block">:message</span>')!!}
                                        </div>
                                        
                                    </div>

                                    <div class="form-group {{$errors->has('costo') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Costo</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="costo" value="{{old('costo')}}"/>
                                            </div>                                            
                                            {!! $errors->first('costo','<span class="help-block">:message</span>')!!}
                                            
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('precio') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Precio</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="precio" value="{{old('precio')}}"/>
                                            </div>                                            
                                            {!! $errors->first('precio','<span class="help-block">:message</span>')!!}
                                            
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('existencia') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Stock</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="existencia" value="{{old('existencia')}}"/>
                                            </div>                                            
                                            {!! $errors->first('existencia','<span class="help-block">:message</span>')!!}
                                            
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('fecha_caducidad') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Fecha de caducidad</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
                                                <input type="text" name="fecha_caducidad" class="form-control datepicker" value="2018-12-07"/>                                                
                                            </div>                                             
                                            {!! $errors->first('fecha_caducidad','<span class="help-block">:message</span>')!!}
                                            
                                        </div>
                                    </div>


                                    <div class="form-group {{$errors->has('file') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Imagen</label>
                                        <div class="col-md-6 col-xs-12">                               
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="file"  name="file" id="file"  class="file" accept="image/*" data-preview-file-type="any"/>
                                                        {!! $errors->first('file','<span class="help-block">:message</span>')!!}
                                                    </div>
                                                </div>                                                            
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