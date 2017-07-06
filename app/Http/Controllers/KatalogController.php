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
        $organization = Organization::findOrFail($id);
        return view('organization.edit')->with('organization', $organization);
    }


    public function showCard($slug)
    {
        $organization = Organization::where('slug','=', $slug)->firstOrFail();
        $terms = Organization::find($organization->id)->taxonomies()->get();

        return view('organization.card',compact('terms', 'organization'));

    }

    public function orgList()
    {
        $organizations = Organization::all();

        return view('admin.org-list')->with('organizations', $organizations);
    }

    public function updateOrg($id,Request $request)
    {
        $org = Organization::findOrFail($id);
        $org->update($request->all());
        return redirect('/org-list');
    }

    public function category($slug)
    {
        $category = Term::where('slug', '=', $slug)->firstOrFail();
        $organizations = Taxonomy::find($category->id)->organizations()->get();
        return view('organization.category',compact('category','organizations'));
    }
    public function test()
    {
        return view('test');
    }
}
