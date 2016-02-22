@extends('admin.layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Add New Educationalqualification
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('admin.educationalqualifications.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <div class="panel-body">
            @include('admin.educationalqualifications.form')
        </div>
    </div>

@stop