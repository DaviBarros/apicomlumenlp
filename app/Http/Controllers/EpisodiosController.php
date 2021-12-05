<?php

namespace App\Http\Controllers;

use App\Episodio;

class EpisodiosController extends BaseController
{
    
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->classe = Episodio::class;
    }

    public function buscaPorSerie(int $serieId){

        $episodios= Episodio::query()->where('serie_id', $serieId)->paginate();

        return response(json_encode($episodios, JSON_UNESCAPED_SLASHES))->header('Content-Type', 'application/json');

        //return $episodios;
    }

}


?>