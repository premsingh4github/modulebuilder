@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Form
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('forms.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <div class="panel-body">
            @include('forms.form', ['model' => $form])
        </div>
    </div>

@stop