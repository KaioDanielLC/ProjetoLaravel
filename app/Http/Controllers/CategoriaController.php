<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public readonly Categoria $categoria;

    public function __construct() {
        $this->categoria = new categoria();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = $this->categoria->all();

        return view('pages/categorias/list', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/categorias/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created= $this->categoria->create([
            'nome'=>$request->input('nome'),
            
        ]);
        if($created){
            return redirect()->route('categorias.index')->with('message', 'Categoria criado');
        };

        return redirect()->back()->with('message', 'erro');
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        return view('pages/categorias/show', ['categoria'=>$categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria $categoria)
    {
        return view('pages/categorias/edit',['categoria' =>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categoria $categoria)
    {
        $id = $categoria->id;
        $update = $this->categoria->where('id', $id)->update($request->except(['_token', '_method']));
        if($update){
            
            return redirect()->route('categorias.index')->with('message', 'Update feito');
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria $categoria)
    {
        $id = $categoria->id;
        $this->categoria->where('id', $id)->delete();
        return redirect()->route('categorias.index')->with('message', 'categoria deletado');
    }
}
