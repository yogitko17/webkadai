<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index ()
    {
        $items = Todo::all();
        return view('index',[
            'items' => $items,
        ]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $todo = new Todo;
        $form = $request->all();
        unset($form['_token']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $todo = Todo::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $todo = Todo::find($request->id);
        $todo->delete();
        return redirect('/');
    }
}
