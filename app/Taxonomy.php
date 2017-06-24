<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'term',
        'slug',
        'taxonomy',
        'description',
        'parrent',
        'count',
    ];
    public function term()
    {
        return $this->belongsTo('App\Term');
    }

    public function shops()
    {
        return $this->belongsToMany('App\Shop','taxonomy_shop');
    }
}
