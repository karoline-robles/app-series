<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use App\Models\categoria;
use App\Models\Pessoa;

class SeriesController extends Controller{
    
    public function index(){
        $series = Serie::all();
        return view('series.index', compact('series'));
    }  

    public function create(){
        $categorias = categoria::All();
        return view('series.create', compact('categorias')); 
    }
    
    public function edit($id){
        $serie = Serie::find($id);
        $categorias = categoria::all(); 
        return view('series.edit', compact('serie', 'categorias'));
    }


    public function store(Request $request){
        Serie::create($request->all());
        return redirect()->route('series.index');
    }


    public function update(Request $request, $id){
        $serie = Serie::find($id);
        $serie->update($request->all());
        return redirect()->route('series.index');
    }

    public function delete($id){
        $serie = Serie::find($id);
        return view('series.delete', compact('serie'));
    }

    public function destroy($id){
        $serie = Serie::find($id);
        $serie->delete();
        return redirect()->route('series.index');
    }
}
