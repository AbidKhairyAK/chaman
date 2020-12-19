<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JinnController extends Controller
{
    public function index()
    {
        $data = app('db')->table('jinns')->orderBy('name')->get();
        return $data;
    }

    public function create(Request $request)
    {
        app('db')->table('jinns')->insert($request->all());
    }
}
