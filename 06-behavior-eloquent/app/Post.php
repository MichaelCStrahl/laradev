<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';

    public $timestamps = true;

    /**
     * Informa todos os campos que podem ser utilizados
     * em um array associativo
     *
     * O guarded permite informar os campos que
     * não podemos ser modificados através do array
     * associativo
     */
    protected $fillable = [
        'title',
        'subtitle',
        'description'
    ];

    // protected $guarded = [];
}
