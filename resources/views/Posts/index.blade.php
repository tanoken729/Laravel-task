@extends('layouts.app')
<style>

  .edit,
  a.edit {
    color: #fff;
    background-color: #3e62ad;
  }
  .edit:hover,
  a.edit:hover {
    color: #fff;
    background: #007bbb;
  }
  .delete,
  a.delete {
    color: #fff;
    background-color: #ee827c;

  }
  .delete:hover,
  a.delete:hover {
    color: #fff;
    background: #e95295;

  }

  .box {
    padding: 2em 0.5em;
    margin: 2em 100;
    color: #565656;
    background: #fdeff2;
    border: double 8px #e4d2d8;
    box-shadow: 0 10px 25px 0 #e95295;
  }
  .box2 {
    text-align:center
  }
  .h1 {
    font-family: 'Noto Sans JP', sans-serif;
  }

</style>
@section('content')
  @foreach ($posts as $post)
  <div class="box">
    <div class="box2">
      <h1>{{$post->title}}</h1>
      <dd class="card">{{$post->content}}</dd>
      <div style="display:inline-flex">
        <p>投稿者：{{$post->user->name}}</p>
        @if(Auth::id() === $post->user_id)
        <form action="{{url('/posts/edit', $post->id)}}" method="GET">
          @csrf
            <input class="btn edit" type="submit" value="編集する">
        </form>
        <form action="{{url('/posts', $post->id)}}" method="POST">
          @csrf
          @method('DELETE')
            <input class="btn delete" type="submit" value="削除する">
        </form>
        @endif
        <p>❤️</p>
        <p>数字</p>
      </div>
    </div>
  </div>
  @endforeach
@endsection
