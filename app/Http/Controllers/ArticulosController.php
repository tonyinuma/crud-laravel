<?php

namespace App\Http\Controllers;

use App\Articulos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['articulos'] = Articulos::paginate(5);  
        return view('articulos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$article_data = request()->all();
        $article_data = request()->except('_token');
        if ($request->hasFile('foto')) {
            $article_data['foto'] = $request->file('foto')->store('uploads','public');
        }

        Articulos::insert($article_data);

        /* return response()->json($article_data); */
        return redirect('articulos')->with('msg','Articulo agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function show(Articulos $articulos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $articulo = Articulos::findOrFail($id);
        return view('articulos.edit', compact('articulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $article_data = request()->except(['_token','_method']);

        if ($request->hasFile('foto')) {

            $articulo = Articulos::findOrFail($id);
            
            //Elimina foto anterior
            Storage::delete('public/'.$articulo->foto);

            // Guarda foto nueva
            $article_data['foto'] = $request->file('foto')->store('uploads','public');
        }
        Articulos::where('id','=',$id)->update($article_data);

        /* $articulo = Articulos::findOrFail($id);
        return view('articulos.edit', compact('articulo')); */
        return redirect('articulos')->with('msg','Articulo Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $articulo = Articulos::findOrFail($id);
            
        //Elimina foto anterior
        if (Storage::delete('public/'.$articulo->foto)) {
            Articulos::destroy($id);
        }

        return redirect('articulos')->with('msg','Articulo Eliminado');
    }
}
