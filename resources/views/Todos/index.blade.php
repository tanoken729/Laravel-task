@extends('layouts.parents')

@section('title', 'Todoリスト')

@section('content')
  @if(count($errors) > 0)
    <div>
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
   @endif
<h1>Todoリスト</h1>
  <label><input type="radio" checked>すべて</label>
  <label><input type="radio">作業中</label>
  <label><input type="radio">完了</label>
    <table>
      <tr>
        <th>ID</th>
        <th>コメント</th>
        <th>状態</th>
      </tr>
      @foreach($todos as $todo)
        <tr>
        <!-- findで検索されたIDを取得 -->
          <input type="hidden" name="id" value="{{$todo->id}}">
          <td>{{$loop->iteration}}</td>
          <td>{{$todo->comment}}</td>
          <form action="{{url('/todos', $todo->id)}}" method="POST">
            @method('PATCH')
            @csrf
          @if($todo->state > 0)
            <!-- 作業中ボタン -->
            <td><input type="submit" value="作業中"></td>
            <input type="hidden" name="state" value="0">
          @else
            <!-- 完了ボタン -->
            <td><input type="submit" value="完了"></td>
            <input type="hidden" name="state" value="1">
          @endif
          </form>
          <form action="{{url('/todos', $todo->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <!-- 削除ボタン -->
            <td><button type="submit">削除</button></td>
          </form>
        </tr>
      @endforeach
    </table>
<h1>新規タスクの追加</h1>
<form action="todos" method="POST">
  @csrf
    <input type="text" name="comment" value="{{old('comment')}}">
    <!-- 追加ボタン -->
    <input type="submit" value="追加">
</form>
@endsection
