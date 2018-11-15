@extends('layout')


@section('contentdata')
some content will be here
@endsection


@section('url')
http://www.google.com
@endsection


@section('menu')
<a href="https://laravel.com/docs">Documentation</a>
<a href="https://laracasts.com">Laracasts</a>
<a href="https://laravel-news.com">News</a>
<a href="https://nova.laravel.com">Nova</a>
<a href="https://forge.laravel.com">Forge</a>
<a href="https://github.com/laravel/laravel">GitHub</a>
<a href="{{ url('test') }}">Test</a>
@endsection