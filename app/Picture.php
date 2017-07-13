<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'url',
        'title',
        'caption',
        'alt',
        'description',
    ];
//

    public function taxonomies()
    {
        return $this->belongsToMany('App\Organizations', 'image_organization');
    }
}
