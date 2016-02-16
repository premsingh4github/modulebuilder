@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Show Form
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('forms.edit', $form->id) !!}" class="btn btn-default">Edit</a>
                <a href="{!! route('forms.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <table class="table table-stripped table-bordered">
            <tr>
                <td><b>ID</b></td>
                <td>{!! $form->id !!}</td>
            </tr>

			
            <tr>
                <td><b>Name</b></td>
                <td>{!! $form->name !!}</td>
            </tr>			
            <tr>
                <td><b>Description</b></td>
                <td>{!! $form->description !!}</td>
            </tr>			
            <tr>
                <td><b>Fields</b></td>
                <td>{!! $form->fields !!}</td>
            </tr>

            <tr>
                <td><b>Created At</b></td>
                <td>{!! $form->created_at !!}</td>
            </tr>
        </table>
    </div>
@stop