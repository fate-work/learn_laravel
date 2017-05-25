@extends('layout.todoapp')
@section('body')
    <br>

    <a href="/todo" class="btn btn-info">Back</a>
    <div class="col-lg-4 col-lg-offset-4">
        <h1>{{substr(Route::currentRouteName(),5 )}} Item</h1>
        <form action="/todo/@yield('editId')" class="form-horizontal" method="post">
            {{csrf_field()}}
            @section('editMethod')
                @show
            <fieldset>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="text" value="@yield('editTitle')" name="title" placeholder="Title" class="form-control">
                   <br>
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <textarea class="form-control" name="body" placeholder="Body" rows="5" id="textArea">@yield('editBody')</textarea>
                       <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
        @if(count($errors)>0)
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
            </div>
        @endif

    </div>
    @endsection