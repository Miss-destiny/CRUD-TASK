@extends('layouts.master')
@section('content')
<div class="container">
	<div class="panel col-md-10 col-md-offset-1">
		<div class="panel-headind">
			<h1 class="text-center">Create a new task</h1>
		</div>
		<div class="panel-body">
			<div>
				<form action="{{ url('/tasks/store') }}" method="post">
			    {{ csrf_field() }}

			    <textarea name="title" class='col-md-8 col-md-offset-2 ' ></textarea>

			    <BR>
			    <input class='btn btn-success' style="margin-left: 6px;" type="submit" value="Create Task">

			</form>
			</div>	
		</div>
		
	</div>
</div>
@endsection