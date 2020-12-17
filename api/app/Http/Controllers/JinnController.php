<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JinnController extends Controller
{
    public function index()
    {
        $data = app('db')->table('jinns')->orderBy('name')->get();

        return response()->json($data);
    }
}
