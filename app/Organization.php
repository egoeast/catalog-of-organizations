<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'adress',
        'phone'
    ];
//

    public function taxonomies()
    {
        return $this->belongsToMany('App\Taxonomy', 'taxonomy_organization');
    }
}
