@extends('layouts.base')


@section('content')

<form method="post" action="/">
@csrf

<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon">URL</span>
    
    <input type="text" class="form-control" name="url" value="{{ old('url')}}"  placeholder="Enter your original URL here">
    
    <span class="input-group-btn">
      <input class="btn btn-default" type="submit" value="Shortener url">
    </span>
    
  </div>
</div>

@if($errors->has('url'))
     
     <p style="color:red;">{{ $errors->first('url')}}</p>

    @endif

</form>

@endsection