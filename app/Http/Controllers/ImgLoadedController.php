<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImgLoadedController extends Controller
{
    public function store(Request $request) {
        $img_loaded = $request->file('img_loaded')->store('public/img_loaded');

        return redirect('load_img');
    }
}
