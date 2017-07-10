<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('locale');
    }

    public function show()
    {
        $images = Image::all();
        return view('admin.show-images')->with('images', $images);
    }
}
