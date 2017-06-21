<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'id',
        'name',
        'adress',
        'phone'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function taxonomies()
    {
        return $this->belongsToMany('App\Taxonomy', 'taxonomy_shop');
    }
}

