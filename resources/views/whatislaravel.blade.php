@extends('layout.base')

@section("title")
  Czym jest Laravel?
@stop

@section("header")
<header>
  <h1 class='alert alert-success'>Czym jest Laravel?</h1>
</header>
@stop

@section("appContent")
    <video width="50%" height="75%" controls>
        <source src="video/whatislaravel.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
@stop