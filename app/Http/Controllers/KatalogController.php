<?php

namespace App\Http\Controllers;

use App\Organization;
use App\Shop;
use App\Term;
use App\Taxonomy;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Mail;
use Intervention\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class KatalogController extends Controller
{

    protected $file_max_size = 10;

    /**
     * FileStorageController constructor.
     */
    public function __construct()
    {

    }



    public function show()
    {
        $organizations = Organization::all();
        $terms = Taxonomy::where([
            ['taxonomy', '=', 'category'],
        ])->get();
        return view('katalog', compact('organizations', 'terms'));
    }


    public function edit($id)
    {
        $organization = Shop::findOrFail($id);
        return view('edit')->with('organization', $organization);
    }


    public function landing($id)
    {
        $organization = Organization::findOrFail($id);
        return view('shops.show_landing')->with('organization', $organization);
    }

    public function orgList()
    {
        $organizations = Organization::all();

        return view('admin.org-list')->with('organizations', $organizations);
    }

    public function updateOrg($id,Request $request)
    {
        return $id;
    }

    public function category($slug)
    {
        $term = Term::where([
           ['slug', '=', $slug],
        ])->get()->first();

        $category = Term::find($term->id)->taxonomy()->first();
        //dd($category);
        $shops = Taxonomy::find($category->id)->shops()->get();
        //$shop = Shop::find(1);
        //dd($shops);
        return view('organizations.category',compact('term', 'category','shops'));
    }
    public function test()
    {
        return view('test');
    }
}
