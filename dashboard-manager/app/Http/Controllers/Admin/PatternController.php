<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PatternController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('pages.pattern.index');
    }

    public function show(string $id = null)
    {
        $pattern = [];
        if (!empty($id)) {
            $pattern['id'] = $id;
        }
        return view('pages.pattern.show', compact('pattern'));
    }

    public function create()
    {
        return redirect()->route('pattern-list');
    }

    public function update(string $id)
    {
        $pattern = ['id' => $id];
        return view('pages.pattern.show', compact('pattern'));
    }

    public function delete()
    {
        return redirect()->route('pattern-list');
    }
}
