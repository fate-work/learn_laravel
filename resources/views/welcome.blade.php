@extends('layout.app')
@section('title','welcome')
@section('body')
    Welcome {{$user->name}}
@endsection