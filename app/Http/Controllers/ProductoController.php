<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Proveedor;
use App\TipoProducto;
use App\Producto;
use DB;


class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=
        DB::table('productos')
        ->select('productos.nombre as nombre',
                 'productos.id as id',
                 'tipo_productos.nombre as tipo')
        ->join('tipo_productos', 'productos.tipo_producto', '=', 'tipo_productos.id')
        ->where('productos.activo','=',1)->where('tipo_productos.activo','=',1)->get();
       return view('productos.index', ['datos' => $datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        $tipos = TipoProducto::all();
        return view('productos.create', ['proveedores' => $proveedores, 'tipos' => $tipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials=$this->validate(request(),[
            'nombre' => 'required|string|max:49',
            'descripcion' => 'required|string|max:999',
            'tipo' => 'required',
            'proveedor' => 'required',
            'costo' => 'required|numeric',
            'precio' => 'required|numeric',
            'existencia' => 'required|integer',
            'fecha_caducidad' => 'required|date',
            'file'=>'required|mimes:jpg,jpeg,png|max:500'
        ]);
        if($request->file('file')){
            $activo=(int)1;
            $usuario=Auth::user()->id;
            $nombre=$request->get('nombre');
            $descripcion=$request->get('descripcion');
            $tipo=(int)$request->get('tipo');
            $proveedor=(int)$request->get('proveedor');
            $usuario=Auth::user()->id;
            $path= Storage::disk('public')->put('imageupload/productos/principales', $request->file('file'));
            $imagen=asset($path);
            $costo=$request->get('costo');
            $precio=$request->get('precio');
            $existencia=$request->get('existencia');
            $fecha_caducidad=$request->get('fecha_caducidad');

            $producto = new Producto;
            $producto->activo = $activo;
            $producto->costo = $costo;
            $producto->descripcion = $descripcion;
            $producto->existencia = $existencia;
            $producto->fecha_caducidad = $fecha_caducidad;
            $producto->imagen = $imagen;
            $producto->nombre = $nombre;
            $producto->precio = $precio;
            $producto->proveedor = $proveedor; 
            $producto->tipo_producto = $tipo;
            $producto->usuario_ins = $usuario;
            $producto->usuario_upd = $usuario;
            $producto->save();
            return Redirect::to('productos');
        }
        else{
            return Redirect::to('productos')->withErrors(['erroregistro'=> 'Error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos=
        DB::table('productos')
        ->select('productos.nombre as nombre',
                 'productos.id as id',
                 'productos.costo as costo',
                 'productos.descripcion as descripcion',
                 'productos.existencia as existencia',
                 'productos.fecha_caducidad as fecha_caducidad',
                 'productos.imagen as imagen',
                 'productos.precio as precio',
                 'proveedors.nombre as proveedor',
                 'tipo_productos.nombre as tipo')
        ->join('tipo_productos', 'productos.tipo_producto', '=', 'tipo_productos.id')
        ->where('productos.activo','=',1)->where('tipo_productos.activo','=',1)
        ->join('proveedors', 'productos.proveedor', '=', 'proveedors.id')
        ->where('productos.activo','=',1)->where('proveedors.activo','=',1)
        ->where('productos.id','=',$id)->first();
        return view('productos.show', ['datos' => $datos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
