<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Produto;
use App\Model\Editora;
use App\Model\Autor;


class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        $total = Produto::all()->count();
        return view('list-produtos', compact('produtos', 'total'));
    }

    public function create() {

        $editoras = Editora::all();
        $autores = Autor::all();
        return view('include-produto', compact('editoras', 'autores'));
    }

    public function store(Request $request) {
        $product = new Produto;

        $editora = Editora::findOrFail($request->editora_id);
        //$product->editora()->associate($editora);
        //$product->name = $request->name;
        $product->create($request->all());
        // dd($editora);
        
        //$product->save();
        return redirect()->route('product.index')->with('message', 'Produto criado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $editoras = Editora::all();
        $autores = Autor::all();
        $product = Produto::findOrFail($id);
        return view('alter-produto', compact('product','editoras', 'autores'));
        dd($autores);
    }

    public function update(Request $request, $id) {
        $product = Produto::findOrFail($id);
        $editora = Editora::findOrFail($request->editora_id);
       $product->editora()->associate($editora);

        $autor = Autor::findOrFail($request->autor_id);
        $product->autor()->associate($autor);


        $product->name = $request->name;
        $product->save();
        return redirect()->route('product.index')->with('message', 'Produto alterado com sucesso!');
    }

    public function destroy($id) {
        $product = Produto::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Produto excluído com sucesso!');
    }

}
