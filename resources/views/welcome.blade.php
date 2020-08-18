@extends('layouts.base')


@section('content')

The best url shortener our there

<form method="post" action="/">
@csrf

<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon">URL</span>
    <input type="text" class="form-control" name="url"  placeholder="Enter your original URL here">
    <span class="input-group-btn">
      <input class="btn btn-default" type="submit" value="Shortener url">
    </span>
  </div>
</div>

</form>

@endsection