@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            @if(session()->has('message'))
                <section class="alert alert-success">
                    <div class="alert-inner">
                        {{session('message')}}
                    </div>
                </section>
            @endif
        </div>
        <div class="col-md-12" >
            <div class='col-md-2' style="padding-top: 100px;">
                <a href="{{url('/tasks/create')}}" class='btn btn-success'>Add Task</a>

            </div>
            
            <div class="panel col-md-10">
                <div class="panel-heading">
                    <h3 class='text-center'>All Task</h3>
                </div>
                <div class="panel-body">
                    @foreach($data['tasks'] as $task)
                        <div class=" list-group col-md-9 ">
                            <li class="list-group-item">{{$task->title}}</li>
                        </div>
                        <div class=" col-md-3" style="padding-top: 6px;">
                            
                            <form action="{{url('tasks/'.$task->id.'/delete')}}" method="post">
                                <a class="btn btn-primary" href="{{ url('tasks/edit', $task->id) }}">Edit</a>
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input  class="btn btn-danger" type="submit" value="Delete" >   
                            </form>             
                        </div>
                    @endforeach    

                </div>
            </div>
        </div>
    </div>
@endsection



      
          
     