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
    <table>
    <tr><td><input type="radio"></td><th>すべて</th><td><input type="radio"></td><th>作業中</th><td><input type="radio"></td><th>完了</th>
    </table>
    <table>
    <tr><th>ID</th><th>コメント</th><th>状態</th></tr>
    @foreach($todos as $todo)
        <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->comment}}</td>
            @if($todo->state > 0)
            <td><input type="submit" value="作業中"></td>
            @else
            <td><input type="submit" value="完了"></td>
            @endif
            <!-- 削除ボタン -->
            <td><input type="submit" value="削除"></td>
        </tr>
    @endforeach
    </table>

<h1>新規タスクの追加</h1>
    <form action="todos" method="POST">
    @csrf
       <input type="text" name="comment" value="{{old('comment')}}">
       <input type="submit" value="追加">
    </form>
@endsection