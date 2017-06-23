<?php

namespace App\Http\Controllers;

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
        $shops = Shop::where([
            ['id', '!=', 0],
        ])->get();

        $terms = Term::where([
            ['id', '!=', 0],
        ])->get();

        return view('katalog', compact('shops', 'terms'));
    }


    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('edit_org')->with('shop', $shop);
    }


    public function show_landing($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shops.show_landing')->with('shop', $shop);
    }

    public function shop_list()
    {
        $shops = Shop::where([
            ['id', '!=', 0],
        ])->get();

        return view('shops.org_list')->with('shops', $shops);
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
