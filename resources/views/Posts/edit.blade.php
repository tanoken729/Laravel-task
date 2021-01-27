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
<div class="container mt-5 p-lg-5 bg-light">
  <form action="{{url('/posts/update', $posts->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">タイトル</label>
      <input type="text" name="title" value="{{$posts->title}}" id="title" class="form-control">
    </div>
    <div class="form-group">
      <label for="content">コンテンツ</label>
      <input type="textarea" name="content" value="{{$posts->content}}" id="content" class="form-control">
    </div>
      <button type="submit" class="btn btn-success">編集完了</button>
    </form>
 </div>

@endsection
