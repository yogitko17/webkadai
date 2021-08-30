<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function create(Request $request)
    {
       
        return redirect('/');
    }
    public function update(Request $request)
    {
        return redirect('/');
    }
    public function delete(Request $request)
    {
        return redirect('/');
    }
}
