<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Autor;

class AutorController extends Controller
{


    public function index() {

        $autores = Autor::all();
        $total = Autor::all()->count();


        return view('list-autores', compact('autores', 'total'));
    }

    public function create(Request $request) {
        $autor = new Autor;
        $autor->name = $request->name;
        $autor->save();
        return redirect()->route('autor.index')->with('message', 'Autor criado com sucesso!');
    }

    public function store(Request $request) {
        return redirect()->route('autor.index');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $product_autor = Autor::findOrFail($id);
        return view('alterar-autor', compact('product_autor'));
    }

    public function update(Request $request ) {
        
        $autor = Autor::findOrFail($request->id_autor); 
        $autor->name = $request->nome_autor;
        $autor->update();
        return redirect()->route('autor.index')->with('message', 'Autor alterado com sucesso!');
    }

    public function destroy($id) {
        $autor = Autor::findOrFail($id);
        $autor->delete();
        //return redirect()->route('autor.index')->with('message', 'Autor excluído com sucesso!');
       
    }

    public function localiza($id) {
        $autorlocalizado = Autor::findOrFail($id);
        return $autorlocalizado;
    }



}
