@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('/css/postTop.css') }}">

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
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
        <!-- いいねボタン -->
        <div>
          @if($post->is_liked_by_auth_user())
            <a href="{{ route('likes.unlike', ['id' => $post->id]) }}" class="fa fa-heartbeat fa-2x" style="color:red"></a>
          @else
            <a href="{{ route('likes.like', ['id' => $post->id]) }}" class="fa fa-heart fa-2x" style="color:#778899"></a>
          @endif
        </div>
        <!-- いいねボタン -->
        <div class="btn">
        {{ $post->likes->count() }}
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection
