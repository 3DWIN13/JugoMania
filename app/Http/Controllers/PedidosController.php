<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use App\Models\Pedido;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        
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
        //id:id,
     /*  Jugo:jugoselecionado,
      cantidad: parseInt(cantidad),
      precio:precio,
      CantidadElementos:1 */
        if (isset($_POST['comprar'])) {
            # code...
            $arrayRecibido=json_decode($_POST["eljson"], true );
            foreach ($arrayRecibido as $key) {
                # code...
               $datos = new Pedido();
               $datos->id_user = 1;
               $datos->cantidad = $key['cantidad'];
               $datos->estatus='pendiente';
               $datos->id_producto = $key['id'];
                
              //  $datos -> nombre = $key['Jugo'];
              $datos->save();
            }
            
          //  $datos = new stdClass();
           // $datos -> id = $arrayRecibido[0];

            return redirect('/')->with('vaciar','');
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
