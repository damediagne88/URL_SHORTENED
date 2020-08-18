@extends('layouts.base')


@section('content')

The best url shortener our there

<form method="post" action="#">

<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon">URL</span>
    <input type="text" class="form-control" placeholder="Enter your original URL here">
    <span class="input-group-btn">
      <button class="btn btn-default" type="button">Shortener Url</button>
    </span>
  </div>
</div>

</form>

@endsection