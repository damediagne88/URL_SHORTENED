@extends('layouts.base')


@section('content')


<a href="{{config('app.url')}}/{{$shortener}}">
{{config('app.url')}}/{{$shortener}}
</a>



@endsection