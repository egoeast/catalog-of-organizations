<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('locale');
    }

    public function orgList()
    {
        $organizations = Organization::all();
        return view('admin.org-list')->with('organizations', $organizations);
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

    public function store(Request $request)
    {
        Taxonomy::create($request->all());
        return redirect('/category-list');
    }
}
