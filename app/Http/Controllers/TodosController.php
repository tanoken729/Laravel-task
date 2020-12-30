<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //DBにあるレコードを表示する
    public function add(Request $request)
    {
        $todos =Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    //レコードを追加する
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $todo = new Todo;
        $form = $request->all();
        unset($form['_token']);
        $todo->fill($form)->save();
        return redirect('todos');
    }

}
