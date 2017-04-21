@extends('layout.app')
@section('title','Songs')
@section('body')
    {{'Songs are everything!'}}
    @foreach($songs as $value)
        {{$value->title}}
    @endforeach
@endsection