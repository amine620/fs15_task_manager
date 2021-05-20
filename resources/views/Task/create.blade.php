@extends('layouts.app')




@section('content')


    <form action="{{route('save')}}" method="post">
        @csrf
        <div class="form-group col-md-6 mt-5 offset-3">
            <input type="text" class="form-control" placeholder="add new task" name="title">
            <button class="btn btn-primary form-control mt-2">add</button>
        </div>
    </form>



@endsection