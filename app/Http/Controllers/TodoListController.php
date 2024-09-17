<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        return view('welcome', ['listItems' => ['One', 'Two', 'Three']]);
    }

    public function markComplete($id)
    {
        \Log::info($id);

        // Update item in db

        return redirect('/');
    }

    public function saveItem(Request $request)
    {
        \Log::info(json_encode($request->all()));

        // Save item to db

        return redirect('/');
    }
}
