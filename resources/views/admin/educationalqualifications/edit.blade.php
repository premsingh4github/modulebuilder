@extends('admin.layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Educationalqualification
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('admin.educationalqualifications.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <div class="panel-body">
            @include('admin.educationalqualifications.form', ['model' => $educationalqualification])
        </div>
    </div>

@stop