@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Show Task
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('tasks.edit', $task->id) !!}" class="btn btn-default">Edit</a>
                <a href="{!! route('tasks.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <table class="table table-stripped table-bordered">
            <tr>
                <td><b>ID</b></td>
                <td>{!! $task->id !!}</td>
            </tr>

			
            <tr>
                <td><b>Name</b></td>
                <td>{!! $task->name !!}</td>
            </tr>			
            <tr>
                <td><b>Description</b></td>
                <td>{!! $task->description !!}</td>
            </tr>

            <tr>
                <td><b>Created At</b></td>
                <td>{!! $task->created_at !!}</td>
            </tr>
        </table>
    </div>
@stop