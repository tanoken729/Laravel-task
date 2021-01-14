<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodosController extends Controller
{
    //DBにあるレコードを表示する
    public function index(Request $request)
    {
        $todos =Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    //レコードを追加する
    public function store(TodoRequest $request)
    {
        $todo = new Todo;
        $form = $request->all();
        unset($form['_token']);
        $todo->fill($form)->save();
        return redirect('todos');
    }

    //stateを更新する
    public function stateChange(Request $request)
    {
        Todo::find($request->id)
        ->update(['state' => $request->state]);
        return redirect('todos');
    }

    // レコードを削除する
    public function remove(Request $request)
    {
        Todo::find($request->id)
        ->delete();
        return redirect('todos');
    }

}
