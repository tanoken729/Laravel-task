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
  <div>
    <form class="" action="/posts" method="POST">
      @csrf
      <div class="form-group">
        <label for="title">タイトル</label>
        <input type="text" name="title" value="{{old('title')}}" id="title" class="form-control"><br>
      </div>
      <div class="form-group">
        <label for="content">コンテンツ</label>
        <textarea name="content" value="{{old('content')}}" id="content" class="form-control"></textarea>
      </div>

      <button type="submit" class="btn btn-success">新規投稿</button>
    </form>
  </div>
</div>
@endsection