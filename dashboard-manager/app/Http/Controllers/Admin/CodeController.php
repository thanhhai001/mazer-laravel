<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CodeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('pages.code.index');
    }

    public function show(string $id = null)
    {
        $code = [];
        if (!empty($id)) {
            $code['id'] = $id;
        }
        return view('pages.code.show', compact('code'));
    }

    public function create()
    {
        return redirect()->route('code-list');
    }

    public function update(string $id)
    {
        $code = ['id' => $id];
        return view('pages.code.show', compact('code'));
    }

    public function delete()
    {
        return redirect()->route('code-list');
    }
}
