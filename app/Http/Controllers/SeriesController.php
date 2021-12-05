<?php

namespace App\Http\Controllers;

use App\Serie;


class SeriesController extends BaseController
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->classe = Serie::class;
    }

}


?>