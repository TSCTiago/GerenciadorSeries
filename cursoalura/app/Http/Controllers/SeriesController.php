<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;

use App\Models\Serie;

use App\Services\CriadordeSerie;
use App\Services\RemovedorDeSerie;
use Illuminate\Http\Request;
use App\Models\User;

class SeriesController extends Controller
{


    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        $users = User::query()->orderBy('name')->get();
        
        // $user = User::select([
        //     'users.name'
        // ])->get();
  

        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem', 'users'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request, CriadordeSerie $criadordeSerie)
    {
        $serie = $criadordeSerie->criarSerie(
            $request->nome,
            $request->qtd_temporadas,
            $request->ep_por_temporada
        );

        $request->session()
            ->flash(
                'mensagem',
                "Série {$serie->nome}  suas temporadas e episódios criados com sucesso"
            );


        return redirect('/series');
    }


    public function destroy(Request $request, RemovedorDeSerie $removedorDeSerie)
    {
        $nomeSerie = $removedorDeSerie->removerSerie($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Série $nomeSerie removida com sucesso"
            );
        return redirect('/series');
    }


    public function editaNome($id, Request $request)
    {
        $novoNome = $request->nome;
        $serie = Serie::find($id);
        $serie->nome = $novoNome;
        $serie->save();
    }
}
