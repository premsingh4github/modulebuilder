@extends('admin.layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Show Question
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('admin.questions.edit', $question->id) !!}" class="btn btn-default">Edit</a>
                <a href="{!! route('admin.questions.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <table class="table table-stripped table-bordered">
            <tr>
                <td><b>ID</b></td>
                <td>{!! $question->id !!}</td>
            </tr>

			
            <tr>
                <td><b>Questioncategory_id</b></td>
                <td>{!! $question->questioncategory_id !!}</td>
            </tr>			
            <tr>
                <td><b>Type</b></td>
                <td>{!! $question->type !!}</td>
            </tr>			
            <tr>
                <td><b>Title</b></td>
                <td>{!! $question->title !!}</td>
            </tr>

            <tr>
                <td><b>Created At</b></td>
                <td>{!! $question->created_at !!}</td>
            </tr>
        </table>
    </div>
@stop