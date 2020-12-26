@extends('layouts.parents')

@section('title', 'Home')

@section('content')
    @isset($name)
    <p>{{$name}}</p>
    @endisset
    <table border=1>
    <tr><td>Dashboard</td></tr>
    <tr><td>You are logged in!</td></tr>
    </table>
    <tr><th></th><td><input type="submit" value="Logout"></td></tr>
@endsection
