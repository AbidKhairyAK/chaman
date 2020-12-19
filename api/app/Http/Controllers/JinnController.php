<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JinnController extends Controller
{
    public function __construct()
    {
        $this->table = app('db')->table('jinns');
    }

    public function index()
    {
        return $this->table->orderBy('name')->get();
    }

    public function create(Request $request)
    {
        $this->table->insert($request->all());
    }

    public function show($id)
    {
        $data = $this->table->find($id);
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $this->table->where('id', $request->id)->update($request->all());
    }

    public function delete($id)
    {
        $this->table->where('id', $id)->delete();
    }
}
