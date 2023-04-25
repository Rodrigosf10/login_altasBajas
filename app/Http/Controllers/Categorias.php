<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class Categorias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth'])->only(['index']);
    }

    public function index()
    {
        $titulo = "Inicio";
        $items = Categoria::all();
        $totalGanancias = 0;
        $totalGastos = 0;
        foreach ($items as $item) {
            if ($item->tipo == "Ganancia") {
                $totalGanancias += $item->cantidad;
            } else if ($item->tipo == "Gasto") {
                $totalGastos += $item->cantidad;
            }
        }
        return view('modules/clientes/index', compact('titulo', 'items', 'totalGanancias', 'totalGastos'));
    }

    public function servicios()
    {
        $titulo = "Servicios";
        return view('servicios', compact('titulo'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = "Agregar";
        return view('create', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Categoria();
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->fecha = $request->fecha;
        if($item->save()){
            alert()->success('Exito', 'Los datos se han registrado exitosamente.');
            return redirect('/');
        }else{
            alert()->error('Error', 'Los datos no se han registrado.');
            return redirect('/create');
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
        $titulo = "Eliminar";
        $items =  Categoria::find($id);
        return view('delete', compact('titulo', 'items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = "Actualizar";
        $items = Categoria::find($id);
        return view('edit', compact('titulo', 'items'));
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
        $item = Categoria::find($id);
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->fecha = $request->fecha;
        if($item->save()){
            alert()->warning('Advertencia', 'Los datos se han actualizado exitosamente.');
            return redirect('/');
        }else{
            alert()->error('Error', 'Los datos no se han actualizado.');
            return redirect('/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Categoria::find($id);
        if($item->delete()){
            alert()->success('Exito', 'Los datos se han eliminado exitosamente.');
            return redirect('/');
        }else{
            alert()->error('Error', 'Los datos no se han eliminado.');
            return redirect('/delete');
        }
        
    }
}
