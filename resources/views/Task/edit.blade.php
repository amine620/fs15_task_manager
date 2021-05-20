@extends('layouts.app')




@section('content')


    <form action="{{route('update-task',['id'=>$task->id])}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group col-md-6 mt-5 offset-3">
            <input type="text" class="form-control" placeholder="edit task" value="{{$task->title}}" name="title">
            <button class="btn btn-warning form-control mt-2">save</button>
        </div>
    </form>



@endsection