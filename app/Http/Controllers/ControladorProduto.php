<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ControladorProduto extends Controller
{    
    public function indexView()
    {
        $cats = Categoria::all();
        $prods = Produto::all();
        return view('produtos', compact('prods', 'cats'));
    }

    public function index()
    {
        $prods = Produto::all();
        return $prods->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Categoria::all();
        return view('novoproduto', compact('cats'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$cats = Categoria::all();
        $prod = new Produto();
        $prod->nome = $request->input('nome');
        $prod->estoque = $request->input('estoque');
        $prod->preco = $request->input('preco');
        $prod->categoria_id = $request->input('categoria_id');
        $prod->save();
        return json_encode($prod);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = Produto::find($id);
        if (isset($prod)) {
            return json_encode($prod);         
        }
        return response('Produto não encontrado', 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cats = Categoria::all();
        $prod = Produto::find($id);
        if (isset($prod)) {
            return view('editarprodutos', compact('prod', 'cats'));
        }
        return redirect('/produtos');
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
        $prod = Produto::find($id);
        if (isset($prod)) {
            $prod->nome = $request->input('nome');
            $prod->estoque = $request->input('estoque');
            $prod->preco = $request->input('preco');
            $prod->categoria_id = $request->input('categoria_id');
            $prod->save();
            return json_encode($prod);         
        }
        return response('Produto não encontrado', 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Produto::find($id);
        if (isset($prod)) {
            $prod->delete();
            return response('OK', 200);
        }
        return response('Produto não encontrado', 404);
        
    }
}
