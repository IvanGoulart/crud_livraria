<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Livro;
use App\Model\Editora;
use App\Model\Autor;

class LivroController extends Controller
{
    public function index() {
        $total = Livro::all()->count();
        $livros = Livro::with('editora', 'autor')->get();
       
        return view('listar-livros', compact('livros', 'total'));
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
        $livro = Livro::findOrFail($id);
        return view('alterar-livro', compact('livro','editoras', 'autores'));
    }

    public function update(Request $request) {
        $livro = Livro::findOrFail($request->id_livro);
        $editora = Editora::findOrFail($request->id_editora);
       $livro->editora()->associate($editora);

        $autor = Autor::findOrFail($request->id_autor);
        $livro->autor()->associate($autor);

        $livro->name = $request->nome_livro;
        $livro->update();
        return redirect()->route('livro.index')->with('message', 'Produto alterado com sucesso!');
    }
    public function localiza($id) {
       // $livrolocalizado = Livro::findOrFail($id);
        $livrolocalizado = Livro::with('editora', 'autor')->findOrFail($id);
        return $livrolocalizado;
    }

    public function destroy($id) {
        $product = Produto::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Produto excluído com sucesso!');
    }

}
