@extends('template')
@section('content')
<div class="clearfix"></div>
<div class="col-xs-12">

	<div class="box">
	<div class="box-body table-responsive no-padding">
	<a href="../public/add_sidebar" class="btn btn-default"> Add Sidebar | <span><i class="glyphicon glyphicon-plus"></i> </span> </a>
	<table class="table table-hover">
		<tr>
		<th>id</th>
		<th>Link</th>
		<th>Menu</th>
		<th>icon</th>
		<th>status</th>
		<th>Opsi</th>
		</tr>
		@foreach ($link as $l)
		<tr>
			<td>{{$l->id}}</td>
			<td>{{$l->link}}</td>
			<td>{{$l->menu}}</td>
			<td>{{$l->icon}}</td>
			<td>{{$l->status}}</td>
			<td>
				<div class="btn-group">
					<a href="" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></a>
					<a href="" class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
					<a href="../public/sidebar_delete/{{$l->id}}" class="btn btn-default"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
			</td>
		</tr>
		@endforeach
	</table>
</div>
</div>
</div>
<div class="clearfix"></div>
@stop