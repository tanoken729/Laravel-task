@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form action="{{url('/posts/update', $posts->id)}}" method="POST">
    @csrf
    @method('PUT')
      タイトル<br>
      <input type="text" name="title" value="{{$posts->title}}"><br>
      コンテンツ<br>
      <input type="textarea" name="content" value="{{$posts->content}}"><br>
      <input type="submit" value="新規投稿">
  </form>
@endsection
