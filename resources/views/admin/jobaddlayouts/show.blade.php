@extends('admin.layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Show Jobaddlayout
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('admin.jobaddlayouts.edit', $jobaddlayout->id) !!}" class="btn btn-default">Edit</a>
                <a href="{!! route('admin.jobaddlayouts.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <table class="table table-stripped table-bordered">
            <tr>
                <td><b>ID</b></td>
                <td>{!! $jobaddlayout->id !!}</td>
            </tr>

			
            <tr>
                <td><b>Job_id</b></td>
                <td>{!! $jobaddlayout->job_id !!}</td>
            </tr>			
            <tr>
                <td><b>User_id</b></td>
                <td>{!! $jobaddlayout->user_id !!}</td>
            </tr>			
            <tr>
                <td><b>Logo</b></td>
                <td>{!! $jobaddlayout->logo !!}</td>
            </tr>			
            <tr>
                <td><b>Logo_position</b></td>
                <td>{!! $jobaddlayout->logo_position !!}</td>
            </tr>			
            <tr>
                <td><b>Header</b></td>
                <td>{!! $jobaddlayout->header !!}</td>
            </tr>			
            <tr>
                <td><b>Header_position</b></td>
                <td>{!! $jobaddlayout->header_position !!}</td>
            </tr>			
            <tr>
                <td><b>Button_color</b></td>
                <td>{!! $jobaddlayout->button_color !!}</td>
            </tr>			
            <tr>
                <td><b>Background_color</b></td>
                <td>{!! $jobaddlayout->background_color !!}</td>
            </tr>			
            <tr>
                <td><b>Text_color</b></td>
                <td>{!! $jobaddlayout->text_color !!}</td>
            </tr>

            <tr>
                <td><b>Created At</b></td>
                <td>{!! $jobaddlayout->created_at !!}</td>
            </tr>
        </table>
    </div>
@stop