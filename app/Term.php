<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'term_group'
    ];
    public function taxonomy()
    {
        return $this->hasOne('App\Taxonomy');
    }

}
