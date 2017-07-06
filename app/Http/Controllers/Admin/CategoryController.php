<?php

namespace App\Http\Controllers\Admin;

use App\Taxonomy;
use App\Http\Controllers\Controller;
use App\Shop;
use App\Http\Requests;
use Mail;

class CategoryController extends Controller
{
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
}
