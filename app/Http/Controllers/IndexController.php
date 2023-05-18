<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index()
    {
        return inertia(
            'Index/Index',//bu index.vue sayfası
            ['message' => 'Hello from laravel'] //buda data
        );
    }
    public function show()
    {
        return inertia('Index/Show');
    }
}
