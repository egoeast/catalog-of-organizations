<?php

namespace App\Http\Controllers\Admin;

use App\Taxonomy;
use App\Http\Controllers\Controller;
use App\Shop;
use Illuminate\Http\Request;
use Mail;

class CategoryController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('locale');
    }

    public function categoryList()
    {
        $categories = Taxonomy::all();
        return view('admin.category-list')->with('categories', $categories);
    }
    public function edit($id)
    {
        $category = Taxonomy::findOrFail($id);
        return view('admin.category-edit')->with('category', $category);
    }

    public function update($id, Request $request)
    {
        $category = Taxonomy::findOrFail($id);
        $category->update($request->all());
        return redirect('/category-list');
    }

    public function create()
    {
        return view('admin.category-create');
    }
}
