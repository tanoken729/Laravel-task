<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{
    public function store($id)
    {
        Like::create([
            'post_id' => $id,
            'user_id' => Auth::id(),
        ]);

        session()->flash('success', '投稿にいいねしました');

        return redirect('posts');
    }

    public function destroy($id)
    {
        $like = Like::where('post_id', $id)->where('user_id', Auth::id())->first()->delete();

        session()->flash('success', 'いいねを取り消しました'); //セッションを使ってステータスメッセージを渡す

        return redirect('posts');
        // return redirect('posts')->with('success', 'いいねを取り消しました'); //withを使ってステータスメッセージを渡す
    }
}
