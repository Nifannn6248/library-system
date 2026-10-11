<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = ['windah', 'Reza', 'Jeremy', 'Devin', 'Dimas'];
        return view('members.index', compact('members'));
    }
}
