<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Serie;

class Episodio extends Model
{
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido', 'serie_id'];
    protected $appends= ['links'];
    public function serie(){
        return $this->belongsTo(Serie::class);
    }

    public function getAssistidoAttribute($assistido): bool{
        return $assistido;
    }

    public function getLinksAttribute($links):array
    {
        return[
            'serie' => "/api/series/" . $this->serie_id
        ];
    }


}

?>

