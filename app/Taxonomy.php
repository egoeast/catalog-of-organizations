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

    public function organizations()
    {
        return $this->belongsToMany('App\Organization','taxonomy_organization');
    }
}
