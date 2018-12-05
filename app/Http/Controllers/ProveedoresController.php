<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Proveedor;

class ProveedoresController extends Controller
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
        $datos = Proveedor::all()->where('activo','=',1);
        return view('proveedores.index', ['datos' => $datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
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
            'direccion' => 'required|string|max:99',
            'telefono' => 'required|string|max:29'
        ]);

        $activo=(int)1;
        $usuario=Auth::user()->id;
        
        $proveedor = new Proveedor;
        $proveedor->activo = $activo;
        $proveedor->direccion = $request->get('direccion');
        $proveedor->nombre = $request->get('nombre');
        $proveedor->telefono = $request->get('telefono');
        $proveedor->usuario_ins = $usuario;
        $proveedor->usuario_upd = $usuario;
        $proveedor->save();
        return Redirect::to('proveedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor =  Proveedor::findOrFail($id);
        return view('proveedores.show',['datos'=>$proveedor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = Proveedor::all()->where('activo','=',1)->where('id','=',$id)->first();
        if($datos==null){
            return Redirect::to('proveedores')->withErrors(['erroregistro'=> 'Error']);
        }
        return view('proveedores.edit',['datos'=>$datos]);
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
            'direccion' => 'required|string|max:99',
            'telefono' => 'required|string|max:29'
        ]);

        $proveedor =  Proveedor::findOrFail($id);
        $usuario=Auth::user()->id;
        if($proveedor==null){
            return Redirect::to('proveedores')->withErrors(['erroregistro'=> 'Error']);
        }
        $proveedor->direccion = $request->get('direccion');
        $proveedor->nombre = $request->get('nombre');
        $proveedor->telefono = $request->get('telefono');
        $proveedor->usuario_upd = $usuario;
        $proveedor->update();
        return Redirect::to('proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor =  Proveedor::findOrFail($id);
        $usuario=Auth::user()->id;
        if($proveedor==null){
            return Redirect::to('proveedores')->withErrors(['erroregistro'=> 'Error']);
        }
        $proveedor->activo = 0;
        $proveedor->usuario_upd = $usuario;
        $proveedor->update();
        return Redirect::to('proveedores');
    }
}
