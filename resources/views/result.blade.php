@extends('layouts.base')


@section('content')
<h1>Find your shortened URL below: </h1>
<a href="{{config('app.url')}}/{{$shortener}}">
{{config('app.url')}}/{{$shortener}}
</a>



@endsection