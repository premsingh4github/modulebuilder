@extends('layouts.master')

@section('content')
  <div class="panel panel-default">
	<div class="panel-heading">
		All Forms
		<div class="panel-nav pull-right" style="margin-top: -7px;">
			<a href="{!! route('forms.create') !!}" class="btn btn-default">Add New</a>
		</div>
	</div>
	<table class="table table-stripped table-bordered">
		<thead>
			<th class="text-center">#</th>
			<th>Title</th>
			<!-- <th>Fields</th> -->

			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($forms as $form)
				<tr>
					<td class="text-center">{!! $no !!}</td>
					<td>{!! $form->title !!}</td>
					<!-- <td>{!! $form->fields !!}</td> -->
		
					<td>{!! $form->created_at !!}</td>
					<td class="text-center">
						<div class="btn-group">
							{!! Form::open(['method' => 'DELETE', 'route' => ['forms.destroy', $form->id]]) !!}
							<a href="{!! route('forms.show', $form->id) !!}" class="btn btn-sm btn-default" title="View" data-toggle="tooltip"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a href="{!! route('forms.edit', $form->id) !!}" class="btn btn-sm btn-default" title="Edit" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></a>
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
		<div class="text-center">{!! $forms !!}</div>
	</div>
</div>
@stop