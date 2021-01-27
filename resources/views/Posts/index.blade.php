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
    /* box-shadow: 0 10px 0 #d1483e;
    margin: 30px auto; */

  }
  .delete:hover,
  a.delete:hover {
    color: #fff;
    background: #e95295;
    /* box-shadow: 0 5px 0 #d1483e;
    margin: 35px auto; */

  }

  .box {
    padding: 0.2em 0.5em;
    margin: 2em 100;
    color: #565656;
    background: #fdeff2;
    box-shadow: 0px 0px 0px 10px #fdeff2;
    border: double 8px #e4d2d8;
    /* border-radius: 8px; */
  }
  .box2 {
    text-align:center
  }
  </style>
@section('content')
  @foreach ($posts as $post)
  <div class="box">
    <div class="box2">
      <h1>{{$post->title}}</h1><br>
      <dd>{{$post->content}}</dd>
    <form action="{{url('/posts/edit', $post->id)}}" method="POST">
      @csrf
        <input class="btn edit" type="submit" value="編集する">
    </form>
    <form action="{{url('/posts', $post->id)}}" method="POST">
      @csrf
      @method('DELETE')
        <input class="btn delete" type="submit" value="削除する">
    </form>
    </div>
  </div>
  @endforeach
@endsection
