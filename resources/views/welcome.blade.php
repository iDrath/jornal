@extends('footer')
@extends('layout')
@extends('header')
@section('title', 'Page Title')


@section('header')
    @parent
@stop

@section('logo')
    @parent
@stop

@section('body')
  @parent
    <p>This is my body content.</p>
@stop

@section('footer')
    @parent
    <p>This is appended to the footer sidebar.</p>
@stop
