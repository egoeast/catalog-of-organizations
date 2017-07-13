<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Picture;
use Intervention\Image;

class MediaController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('locale');
    }

    public function show()
    {
        $images = Picture::firstOrFail()->get();
        //dd(public_path());
        //dd('/public'.$images[0]->url);
        $img = Image\Facades\Image::make(public_path().'/img/'.'Logotip-magazina-Gemma-v-Grodno.jpg');

        // now you are able to resize the instance
        $img->resize(100);

// and insert a watermark for example
        //$img->insert('public/watermark.png');

// finally we save the image as a new file
        $img->save(public_path().'/bar.jpg');

        //dd($img);
        return view('admin.show-images')->with('images', $images);
    }
}
