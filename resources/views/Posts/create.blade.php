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
  <form action="/posts" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{Auth::id()}}">
    <input type="hidden" name="user_name" value="{{ Auth::User()->name }}">
    <div class="form-group">
      <label for="title">タイトル</label>
      <input type="text" name="title" value="{{old('title')}}" id="title" class="form-control">
    </div>
    <div class="form-group">
      <label for="content">コンテンツ</label>
      <input type="textarea" name="content" value="{{old('content')}}" id="content" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">新規投稿</button>
  </form>
</div>
@endsection