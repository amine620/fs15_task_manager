

@extends('layouts.app')


@section('content')
  <div class="container mt-5 parent">
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
          {{session()->get('message')}}
        </div>
    @endif
      <div class="row">

          @foreach ($tasks as $task)
          
           <div class="card border-primary mb-3 col-md-4">

              <div class="card-header d-flex justify-content-between">
                <h3 class="text-secondary">
                {{$task->title}}
                </h3>
                <a href="{{route('edit-task',['id'=>$task->id])}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>

              </div>
              <div class="card-body text-primary">

                @foreach ($task->sub_tasks as $sub)


                <div class=" d-flex justify-content-between ">

                  <p class="card-text">
                    {{$sub->content}}
                  </p>

                  <form action="{{route('update-subTask',['id'=>$sub->id])}}" method="post" class="d-none">
                    @csrf
                    @method('PUT')
                    <input type="text" value="{{$sub->content}}" name="content">
                  </form>


                  <div class="form-and-button d-flex">

                    <form action="{{route('deleteSubTask',['id'=>$sub->id])}}" method="post" class="mr-2">
                      @csrf
                      @method('DELETE')
  
                        <button class="btn btn-danger">
                          <i class="fa fa-trash"></i>
                        </button>
  
                    </form>
                    <div>
                      <button class="btn btn-warning btn-edit"><i class="fa fa-edit"></i></button>
                    </div>


                  </div>

                </div>
                @endforeach

              </div>
              <form action="{{route('saveSubTask')}}" method="post">
                @csrf
                  <div class="form-group">
                      <input name="content" type="text" placeholder="add sub task" class="form-control mt-2">
                      <input type="hidden" value="{{$task->id}}" name="task_id">
                      <button class="btn btn-primary form-control mt-2">add</button>
                  </div>
              </form>
              <form action="{{route('deleteTask',['id'=>$task->id])}}" method="post">
                @csrf
                @method("DELETE")
                <div class="form-group">
                    <button class="btn btn-danger form-control mt-2">delete</button>
                </div>
            </form>
            </div>
          
          @endforeach

      </div>
  </div>  

@endsection