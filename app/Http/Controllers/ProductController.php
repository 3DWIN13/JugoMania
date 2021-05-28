<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
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
        $productos = Producto::all();
        return view('productos.index', [
            'productos' => $productos,
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProduct = new Producto();

        $validated = $request->validate([
            'nombre' => 'required|unique:productos,nombre_p|max:255',
            'precio' => 'required|numeric',
            'descripcion' => 'required|max:255',
            'imagen' => 'nullable|mimes:jpg,jpeg,png|max:1024',
        ]);

        if($request->hasFile('imagen')){
            $request->file('imagen')->store('public/imagenes_p');
            $path = $request->file('imagen')->hashName();
        }else{
            $path = "";
        }

        $newProduct->nombre_p = $validated['nombre'];
        $newProduct->precio_p = $validated['precio'];
        $newProduct->descripcion_p = $validated['descripcion'];
        $newProduct->imagen_p = $path;
        $newProduct->save();

        return redirect()->back()->with('status', 'Producto creado correctamente.');
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
        $producto = Producto::find($id);

        // dd($request->hasFile('imagen'));

        $validated = $request->validate([
            'nombre' => 'required|max:255',
            'precio' => 'required|numeric',
            'descripcion' => 'required|max:255',
            'imagen' => 'nullable|mimes:jpg,jpeg,png|max:1024',
        ]);

        if($request->hasFile('imagen')){
            $request->file('imagen')->store('public/imagenes_p');
            $path = $request->file('imagen')->hashName();
        }else{
            $path = $producto->imagen_p;
        }

        $producto->nombre_p = $validated['nombre'];
        $producto->precio_p = $validated['precio'];
        $producto->descripcion_p = $validated['descripcion'];
        $producto->imagen_p = $path;
        $producto->save();

        return redirect()->back()->with('status', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        return redirect()->back()->with('status', 'Producto eliminado exitosamente');
    }
}
