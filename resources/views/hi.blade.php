@extends('layout.master')

@section('title', 'Laravel course')

@section('header')
	@parent
	<h1>Hi header!</h1>
@stop

@section('content')
	<p>this is the content</p>
@stop