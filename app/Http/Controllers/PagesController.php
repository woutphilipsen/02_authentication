<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{

    public function home() 
    {
        return View::make('welcome');
        // ---------------FACADES---------------------
            // Cache::remember('foo', 60, function() {
            //    return 'foobar';
            // });
            // return Cache::get('foo');
            
            // return File::get(public_path('index.php'));
            // return Request::input('name'); 
            // return View::make('welcome');
        // ---------------FACADES---------------------
    }

}