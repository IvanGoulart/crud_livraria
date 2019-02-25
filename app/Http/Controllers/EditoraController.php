<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Editora;

class EditoraController extends Controller
{
    public function index() {
        $editoras = Editora::all();
        $total = Editora::all()->count();
        return view('listar-editoras', compact('editoras', 'total'));
    }

    public function create(Request $request) {
        $editora = new Editora;
        $editora->name = $request->name;
        $editora->save();
        return redirect()->route('editora.index')->with('message', 'Editora criada com sucesso!');
    }

    public function store(Request $request) {
        $editora = new Editora;
        $editora->name = $request->name;
        $editora->save();
        return redirect()->route('editora.index')->with('message', 'Editora criada com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $editora = Editora::findOrFail($id);
        return view('alterar-editora', compact('editora'));
    }

    public function update(Request $request ) {
        
        $editora = Editora::findOrFail($request->id_editora); 
        $editora->name = $request->nome_editora;
        $editora->update();
        return redirect()->route('editora.index')->with('message', 'Editora alterado com sucesso!');
    }
    public function localiza($id) {
        $editoralocalizado = Editora::findOrFail($id);
        return $editoralocalizado;
    }
    public function destroy($id) {
        $editora = Editora::findOrFail($id);
        $editora->delete();
    }

}
