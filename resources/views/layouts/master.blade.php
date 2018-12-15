<!DOCTYPE html>
<html lang="en">
    <head>        
            <!-- META SECTION -->
            <title>Abarrotes Luna</title>            
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            
            <link rel="icon" href="{{ asset('icoluna.jpeg')}}" type="image/x-icon" />
            <!-- END META SECTION -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
            <!-- CSS INCLUDE -->        
            <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('css/theme-default.css')}}"/>
            <!-- EOF CSS INCLUDE -->   
            <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
            
            
            <style>
            
	select{
		font-family: fontAwesome
	}
	.oculto {width:100%;background:#f2f2f2;border-radius:0 0 10px 10px;padding:10px;overflow:auto;max-height:200px;display:none}
		.oculto ul {display:inline;float:left;width:100%;margin:0;padding:0}
			.oculto ul li {margin:0;padding:0;display:block;width:30px;height:30px;text-align:center;font-size:15px;font-family:"fontawesome";float:left;cursor:pointer;color:#666;line-height:30px;transition:0.2s all}
			.oculto ul li:hover {background:#FFF;color:#000}
		.oculto input[type=text] { font-size:10px;padding:5px;margin:0 0 10px 0;border:1px solid #ddd; }
	
</style>                              
    </head>
    

    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home">Abarrotes Luna</a>
                        <a href="/" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{asset('images/icoluna.jpeg')}}" alt="Abarrotes Luna"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{asset('images/icoluna.jpeg')}}" alt="Abarrotes Luna"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">{{ Auth::user()->name }}</div>
                                <div class="profile-data-title">Administrador</div>
                            </div>
                            <div class="profile-controls">
                                <a href="{{  url('administrador/informacion')  }}" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="{{  url('administrador/mensajes')  }}" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Menu de opciones</li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sort-desc"></span> <span class="xn-text">Productos</span></a>
                         <ul>
                            <li><a href="{{  url('tipo_producto')  }}"><span class="fa fa-image"></span> Tipo Producto</a></li>
                            <li><a href="{{  url('productos')  }}"><span class="fa fa-image"></span> Productos</a></li>

                                                             
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sort-desc"></span> <span class="xn-text">Proveedores</span></a>
                         <ul>
                            <li><a href="{{ url('proveedores') }}"><span class="fa fa-image"></span> Lista de proveedores</a></li>
                                                             
                        </ul>
                    </li>     
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sort-desc"></span> <span class="xn-text">Ventas</span></a>
                         <ul>
                            <li><a href="{{  url('ventas')  }}"><span class="fa fa-image"></span> Ventas registradas</a></li>
                                                             
                        </ul>
                    </li>
                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sort-desc"></span> <span class="xn-text">Usuarios</span></a>
                         <ul>
                            <li><a href="{{  url('/usuarios')  }}"><span class="fa fa-image"></span> Usuarios registrados</a></li>
                                                         
                        </ul>
                    </li>      
                         
                    
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                      
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                                               
                                    <a class="mb-control" data-box="#mb-signout">
                                                     <span class="fa fa-sign-out"></span>

                                        
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        
                        <?php
                        
                        /*CODIGO PHP*/ /*CODIGO PHP*//*CODIGO PHP*//*CODIGO PHP*//*CODIGO PHP*//*CODIGO PHP*//*CODIGO PHP*/
                        
                                /*
                                $mensajes=DB::table('tbl_contacto')->where('activo','=',1)->where('visto','=',0)->get();
                                $rows= count($mensajes);
                                if($rows != 0){
                                    session()->put('mensajes', $mensajes);
                                }
                                else{
                                    session()->forget('mensajes');
                                }
                                */
                        /*CODIGO PHP*//*CODIGO PHP*//*CODIGO PHP*//*CODIGO PHP*//*CODIGO PHP*//*CODIGO PHP*//*CODIGO PHP*/
                        ?>
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">{{ session('mensajes')? count(session('mensajes')) : 0 }}</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Mensajes</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">{{ session('mensajes')? count(session('mensajes')) : 0}}</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                   
                                @if( session('mensajes') )
                                @foreach(session('mensajes') as $item)
                                <a href="{{ URL::action('MensajesController@show',$item->id)}}" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="{{asset('images/users/user2.jpg')}}" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">{{$item->nombre}}</span>
                                    <p>{{$item->mensaje}}</p>
                                </a>
                                @endforeach
                                
                                @endif
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="{{  url('administrador/mensajes')  }}">Todos los mensajes</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
               
                <!-- END BREADCRUMB -->    
                
                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                    <div class="panel-heading">                                
                                        <h3 class="panel-title">Abarrotes Luna</h3>
                                        <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                        </ul>                                
                                    </div>

                                
                                    @yield('content')
                               
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Cerrar <strong>Sesion</strong> ?</div>
                    <div class="mb-content">
                    



                        <p>¿Estás seguro de que quieres desconectarte?</p>                    
                        <p>Presione No si desea continuar trabajando. Presione Sí para desconectarse del usuario actual.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right signOutAlert">
                        
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-success btn-lg">Si</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            
                            </form>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="{{asset('audio/alert.mp3')}}" preload="auto"></audio>
        <audio id="audio-fail" src="{{asset('audio/fail.mp3')}}" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/bootstrap/bootstrap.min.js')}}"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{ asset('js/plugins/icheck/icheck.min.js')}}"></script>        
        <script type="text/javascript" src="{{ asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>
        
       

        <script type="text/javascript" src="{{ asset('js/plugins/morris/raphael-min.js')}}"></script>
            
        <script type="text/javascript" src="{{ asset('js/plugins/rickshaw/d3.v3.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/rickshaw/rickshaw.min.js')}}"></script>
        <script type='text/javascript' src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script type='text/javascript' src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>                
        <script type='text/javascript' src="{{ asset('js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                
        <script type="text/javascript" src="{{ asset('js/plugins/owl/owl.carousel.min.js')}}"></script>                 
        <script type="text/javascript" src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
      
        
        <script type="text/javascript" src="{{ asset('js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{ asset('js/actions.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/fileinput/fileinput.min.js')}}"></script>        
        @stack('select')

        @stack('mapa')
        @stack('clickableRow')
        @stack('addElementsToForm')
        @stack('addProductsToPromo')
        @stack('porcentaje')

        <!-- END TEMPLATE -->
        <!-- END SCRIPTS -->         
    </body>
</html>

