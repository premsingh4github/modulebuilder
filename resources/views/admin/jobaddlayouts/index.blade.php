@extends('admin.layouts.master')

@section('content')
  <div class="panel panel-default">
	<div class="panel-heading">
		All Jobaddlayouts
		<div class="panel-nav pull-right" style="margin-top: -7px;">
			<a href="{!! route('admin.jobaddlayouts.create') !!}" class="btn btn-default">Add New</a>
		</div>
	</div>
	<table class="table table-stripped table-bordered">
		<thead>
			<th class="text-center">#</th>
			<th>Job_id</th>
			<th>User_id</th>
			<th>Logo</th>
			<th>Logo_position</th>
			<th>Header</th>
			<th>Header_position</th>
			<th>Button_color</th>
			<th>Background_color</th>
			<th>Text_color</th>

			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($jobaddlayouts as $jobaddlayout)
				<tr>
					<td class="text-center">{!! $no !!}</td>
					<td>{!! $jobaddlayout->job_id !!}</td>
					<td>{!! $jobaddlayout->user_id !!}</td>
					<td>{!! $jobaddlayout->logo !!}</td>
					<td>{!! $jobaddlayout->logo_position !!}</td>
					<td>{!! $jobaddlayout->header !!}</td>
					<td>{!! $jobaddlayout->header_position !!}</td>
					<td>{!! $jobaddlayout->button_color !!}</td>
					<td>{!! $jobaddlayout->background_color !!}</td>
					<td>{!! $jobaddlayout->text_color !!}</td>
		
					<td>{!! $jobaddlayout->created_at !!}</td>
					<td class="text-center">
						<div class="btn-group">
							{!! Form::open(['method' => 'DELETE', 'route' => ['admin.jobaddlayouts.destroy', $jobaddlayout->id]]) !!}
							<a href="{!! route('admin.jobaddlayouts.show', $jobaddlayout->id) !!}" class="btn btn-sm btn-default" title="View" data-toggle="tooltip"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a href="{!! route('admin.jobaddlayouts.edit', $jobaddlayout->id) !!}" class="btn btn-sm btn-default" title="Edit" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></a>
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
		<div class="text-center">{!! $jobaddlayouts !!}</div>
	</div>
</div>
@stop