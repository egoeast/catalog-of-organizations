<?php

namespace App\Http\Controllers\Admin;

use App\Organization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $org = Organization::findOrFail($id);
        return view('admin.org-edit')->with('org', $org);
    }

    public function update($id, Request $request)
    {
        $org = Organization::findOrFail($id);
        $org->update($request->all());
        return redirect('/org-list');
    }

    public function create()
    {
        return view('admin.org-create');
    }

    public function store(Request $request)
    {
        Organization::create($request->all());
        return redirect('/org-list');
    }

    public function delete($id)
    {
        $org = Organization::findOrFail($id);
        $org->delete();
        return redirect()->back();
    }
}
