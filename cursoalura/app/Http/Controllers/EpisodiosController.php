<?php

namespace App\Http\Controllers;

use App\Models\Episodio;
use App\Models\Temporada;
use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
<<<<<<< HEAD
    public function index(Temporada $temporada, Request $request)
=======
    public function index(Temporada $temporada)
>>>>>>> 6ed9448c3102befc2f8ef150d77e181079cd42b9
    {

       return view('episodios.index', [
           'episodios' => $temporada->episodios,
<<<<<<< HEAD
        'temporadaId' => $temporada->id,
        'mensagem' => $request->session()->get('mensagem')
=======
        'temporadaId' => $temporada->id
>>>>>>> 6ed9448c3102befc2f8ef150d77e181079cd42b9
        ]);
    }
    public function assistir(Temporada $temporada, Request $request)
    {
        $episodiosAssistidos = $request->episodios;
        $temporada->episodios->each(function (Episodio $episodio)
        use ($episodiosAssistidos) {
            $episodio->assistido = in_array(
                $episodio->id,
                $episodiosAssistidos
            );
        });

        $temporada->push();
<<<<<<< HEAD
        $request->session()->flash('mensagem', 'Episódios marcados como assistidos');

        return redirect()->back();
=======
        
>>>>>>> 6ed9448c3102befc2f8ef150d77e181079cd42b9
    }
}
