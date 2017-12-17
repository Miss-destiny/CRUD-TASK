
@extends('layouts.master')
@section('content')
<div class="container">
	<div class="panel col-md-10 col-md-offset-1">
		<div class="panel-headind">
			<h1 class="text-center">Create a new task</h1>
		</div>
		<div class="panel-body">
			<div>
				<form action="{{ url('/tasks/'.$task->id.'/update') }}" method="post">
			    {{ csrf_field() }}
				 {{ method_field('PUT') }}
			    <textarea name="title" class='col-md-8 col-md-offset-2' > {{$task->title}} </textarea>

			    <BR>
			    <input type="submit" style="margin-top: 20px;" class='col-md-8 col-md-offset-2 btn btn-primary' name='update' value="Update" >

			</form>
			</div>	
		</div>
		
	</div>
</div>
@endsection