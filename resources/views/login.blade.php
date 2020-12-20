@extends('layouts.parents')

@section('title', 'Login')

@section('content')
<form action="/register">
        @csrf
        <table border=1>
        <tr><th>E-Mail Address：</th><td><input type="mail"></td></tr>
        <tr><th>Password：</th><td><input type="password"></td></tr>
        <tr><th></th><td><input type="radio">Remember me</td></tr>
        <tr><th></th><td><input type="submit" value="Login"> <a href="">Forget Your Password</a></td></tr>
        </table>
    </form>
@endsection
