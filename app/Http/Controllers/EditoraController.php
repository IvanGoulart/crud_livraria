<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Editora;

class EditoraController extends Controller
{
    public function index() {
        $editoras = Editora::all();
        $total = Editora::all()->count();
        return view('list-editoras', compact('editoras', 'total'));
    }

    public function create() {
        return view('include-editora');
    }

    public function store(Request $request) {
        $product_editora = new Editora;
        $product_editora->name = $request->name;
        $product_editora->save();
        return redirect()->route('editora.index')->with('message', 'Editora criada com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $product_editora = Editora::findOrFail($id);
        return view('alter-editora', compact('product_editora'));
    }

    public function update(Request $request, $id) {
        $product_editora = Editora::findOrFail($id); 
        $product_editora->name = $request->name;
        $product_editora->save();
        return redirect()->route('editora.index')->with('message', 'Editora alterado com sucesso!');
    }

    public function destroy($id) {
        $product_editora = Editora::findOrFail($id);
        $product_editora->delete();
        return redirect()->route('editora.index')->with('message', 'Editora excluído com sucesso!');
    }

}
