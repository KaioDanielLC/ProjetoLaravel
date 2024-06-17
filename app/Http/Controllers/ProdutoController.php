<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{


    public readonly Produto $produto;

    public function __construct() {
        $this->produto = new Produto();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = categoria::all();
        $produtos = $this->produto->all();
        
        return view('pages/produtos/list', ['produtos' => $produtos], ['categoria' => $categoria]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categoria = categoria::all();
        
        return view('pages/produtos/create', ['categoria' => $categoria]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created= $this->produto->create([
            'nome'=>$request->input('nome'),
            'categoria_id'=>$request->input('categoria_id'),
        ]);
        if($created){
            return redirect()->route('produtos.index')->with('message', 'Produto criado');
        };

        return redirect()->back()->with('message', 'erro');
    }

    /**
     * Display the specified resource.
     */
    public function show(produto $produto)
    {
        
        return view('pages/produtos/show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produto $produto)
    {
        $id = $produto->id;
        $this->produto->where('id', $id)->delete();
        return redirect()->route('produtos.index')->with('message', 'Produto deletado');
    }
}
