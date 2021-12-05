<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Episodio;

class Serie extends Model
{

    public $timestamps = false;
    protected $fillable = ['nome'];
    protected $appends = ['links'];

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    public function getLinksAttribute($links):array
    {
         return [
             'episodios' => "/api/series/" . $this->id . "/episodios"
         ];
        
    }

}


?>