<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('pages.member.index');
    }

    public function show(string $id = null)
    {
        $member = [];
        if (!empty($id)) {
            $member['id'] = $id;
        }
        return view('pages.member.show', compact('member'));
    }

    public function create()
    {
        return redirect()->route('member-list');
    }

    public function update(string $id)
    {
        $member = ['id' => $id];
        return view('pages.member.show', compact(['member']));
    }

    public function delete()
    {
        return redirect()->route('member-list');
    }
}
