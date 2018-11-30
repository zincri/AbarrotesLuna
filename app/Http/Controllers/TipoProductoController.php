<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\TipoProducto;

class TipoProductoController extends Controller
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
        $datos = TipoProducto::all()->where('activo','=',1);
        return view('tipo_producto.index', ['datos' => $datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_producto.create');
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
            'descripcion' => 'required|string|max:999'
        ]);

        $activo=(int)1;
        //$nombre=$request->get('nombre');
        //$descripcion=$request->get('descripcion');
        /*
        return TipoProducto::create([
            'activo' => $activo,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
        ]);*/
        $tipo_producto = new TipoProducto;
        $tipo_producto->activo = $activo;
        $tipo_producto->descripcion = $request->get('descripcion');
        $tipo_producto->nombre = $request->get('nombre');
        $tipo_producto->save();
        return Redirect::to('/tipo_producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
        $datos = TipoProducto::all()->where('activo','=',1)->where('id','=',$id)->first();
        if($datos==null){
            return Redirect::to('/tipo_producto')->withErrors(['erroregistro'=> 'Error']);
        }
        return view('tipo_producto.edit',['datos'=>$datos]);
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
        $credentials=$this->validate(request(),[
            'nombre' => 'required|string|max:49',
            'descripcion' => 'required|string|max:999'
        ]);
        $tipo_producto =  TipoProducto::findOrFail($id);
        if($tipo_producto==null){
            return Redirect::to('/tipo_producto');
        }
        $tipo_producto->descripcion = $request->get('descripcion');
        $tipo_producto->nombre = $request->get('nombre');
        $tipo_producto->update();
        return Redirect::to('/tipo_producto');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_producto =  TipoProducto::findOrFail($id);
        if($tipo_producto==null){
            return Redirect::to('/tipo_producto');
        }
        $tipo_producto->activo = 0;
        $tipo_producto->update();
        return Redirect::to('/tipo_producto');
    }
}
