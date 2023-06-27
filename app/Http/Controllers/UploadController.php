<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->file('image')->storePublicly('images', 'public');

        (new Image())->setPath($path)->save();

        return redirect()->route('home');
    }
}
