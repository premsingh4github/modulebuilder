@extends('admin.layouts.master')

@section('content')
  <div class="panel panel-default">
	<div class="panel-heading">
		All Industries
		<div class="panel-nav pull-right" style="margin-top: -7px;">
			<a href="{!! route('admin.industries.create') !!}" class="btn btn-default">Add New</a>
		</div>
	</div>
	<table class="table table-stripped table-bordered">
		<thead>
			<th class="text-center">#</th>
			<th>Name</th>

			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($industries as $industry)
				<tr>
					<td class="text-center">{!! $no !!}</td>
					<td>{!! $industry->name !!}</td>
		
					<td>{!! $industry->created_at !!}</td>
					<td class="text-center">
						<div class="btn-group">
							{!! Form::open(['method' => 'DELETE', 'route' => ['admin.industries.destroy', $industry->id]]) !!}
							<a href="{!! route('admin.industries.show', $industry->id) !!}" class="btn btn-sm btn-default" title="View" data-toggle="tooltip"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a href="{!! route('admin.industries.edit', $industry->id) !!}" class="btn btn-sm btn-default" title="Edit" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></a>
							<button type="submit" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></button>
							{!! Form::close() !!}
						</div>
					</td>
				</tr>
				<?php $no++; ?>
			@endforeach
		</tbody>
	</table>
	<div class="panel-footer">
		<div class="text-center">{!! $industries !!}</div>
	</div>
</div>
@stop