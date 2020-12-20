@extends('layouts.parents')

@section('title', 'Register')

@section('content')
    <form action="/login">
        @csrf
        <table border=1>
        <tr><th>Name：</th><td><input type="text"></td></tr>
        <tr><th>E-Mail Address：</th><td><input type="mail"></td></tr>
        <tr><th>Password：</th><td><input type="password"></td></tr>
        <tr><th>Confirm Password：</th><td><input type="password"></td></tr>
        <tr><th></th><td><input type="submit" value="Register"></td></tr>
    </form>
@endsection
