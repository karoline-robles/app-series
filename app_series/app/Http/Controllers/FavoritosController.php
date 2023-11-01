<?php
namespace App\Http\Controllers;

use App\Models\Favoritos;
use App\Models\serie;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FavoritosController extends Controller
{
    public function index(Request $request){
        $pessoas = Pessoa::all();
        $series = Serie::All();
        return view('favoritos.index', compact(['pessoas', 'series']));
    }

    public function favoritar(Request $request) {              
        $favorito = new Favoritos();
        $favorito->id_pessoa = $request->id_pessoa;
        $favorito->id_serie = $request->id_serie;
        $favorito->save();
        return redirect()->route('series.index');
    }

    public function getByPessoa(Request $request, Pessoa $pessoa){
        $indicacoes = DB::select('SELECT SE.NOME, 
                SE.SINOPSE, 
                SE.DATA_LANCAMENTO 
                FROM SERIES SE 
                LEFT JOIN FAVORITOS FA 
                ON SE.ID = FA.ID_SERIE 
                WHERE FA.ID_PESSOA = :ID_PESSOA', ['ID_PESSOA' => $pessoa->id]);
                    return view('favoritos.listar', compact(['indicacoes']));
    }
}