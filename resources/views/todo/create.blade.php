@extends('layout.todoapp')
@section('body')
    <br>

    <a href="/todo" class="btn btn-info">Back</a>
    <div class="col-lg-4 col-lg-offset-4">
        <h1>Create new Item</h1>
        <form action="/todo" class="form-horizontal" method="post">
            {{csrf_field()}}
            <fieldset>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="text" name="title" placeholder="Title" class="form-control">
                   <br>
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <textarea class="form-control" name="body" placeholder="Body" rows="5" id="textArea"></textarea>
                       <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <div class="alert alert-danger">
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
        @endif
        </div>
    </div>
    @endsection