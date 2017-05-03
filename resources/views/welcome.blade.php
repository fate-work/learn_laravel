@extends('layout.app')
@section('title','welcome')
@section('body')
    Welcome
    {{--{{$user->name}}--}}
    @foreach($user as $mobiles)
        <h4>{{$mobiles->number}}</h4>
    @endforeach
@endsection