@extends('layouts.master')
@section('style')
{!!Html::style('style.css')!!}
@endsection
@section('script')
this is script part
@endsection
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Add New Form
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('forms.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <div class="panel-body">
            @include('forms.form')
        </div>
    </div>

@stop