<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Snippet;

class CodeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'required|string'
        ]);

        Snippet::create([
            'title' => $request->title,
            'code' => $request->code
        ]);

        return redirect()->route('code.create')->with('success', 'Код сохранён!');
    }
}
