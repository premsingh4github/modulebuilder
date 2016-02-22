@extends('admin.layouts.master')

@section('content')
  <div class="panel panel-default">
	<div class="panel-heading">
		All Educationalqualifications
		<div class="panel-nav pull-right" style="margin-top: -7px;">
			<a href="{!! route('admin.educationalqualifications.create') !!}" class="btn btn-default">Add New</a>
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
			@foreach ($educationalqualifications as $educationalqualification)
				<tr>
					<td class="text-center">{!! $no !!}</td>
					<td>{!! $educationalqualification->name !!}</td>
		
					<td>{!! $educationalqualification->created_at !!}</td>
					<td class="text-center">
						<div class="btn-group">
							{!! Form::open(['method' => 'DELETE', 'route' => ['admin.educationalqualifications.destroy', $educationalqualification->id]]) !!}
							<a href="{!! route('admin.educationalqualifications.show', $educationalqualification->id) !!}" class="btn btn-sm btn-default" title="View" data-toggle="tooltip"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a href="{!! route('admin.educationalqualifications.edit', $educationalqualification->id) !!}" class="btn btn-sm btn-default" title="Edit" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></a>
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
		<div class="text-center">{!! $educationalqualifications !!}</div>
	</div>
</div>
@stop