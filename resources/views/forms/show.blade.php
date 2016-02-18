@extends('layouts.master')
@section('style')
    {!!Html::style('formbuilder/form-render.min.css')!!}
    <style type="text/css">
    #frmb-0-export-xml{
        display: none;
    }
    .fb-button{
        display: none;
    }
    </style>
@endsection
@section('script')
    {!!Html::script('formbuilder/form-render.min.js')!!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/abdmob/x2js/master/xml2json.js"></script>
    <script type="text/javascript">
        
        jQuery(document).ready(function($) {
          'use strict';
          //$(document.getElementById('fields')).formBuilder();
        });
        var customForm = document.createElement('FORM');
        debugger;
        //customForm.value = myForm.value;
        customForm.value = "<?php echo ($form['fields'])  ?>";
        $(customForm).formRender({
            container: $(customForm)
        });
        document.getElementById('showData').appendChild(customForm);
        debugger
    </script>
@endsection
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
                <td><b>Title</b></td>
                <td>{!! $form->title !!}</td>
            </tr>			
            <tr>
                <td><b>Fields</b></td>
                <td><b>
                    <div id="showData">
                    </div>
                </b></td>
            </tr>

            <tr>
                <td><b>Created At</b></td>
                <td>{!! $form->created_at !!}</td>
            </tr>
        </table>
    </div>
@stop