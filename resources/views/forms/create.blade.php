@extends('layouts.master')
@section('style')
    {!!Html::style('formbuilder/form-builder.min.css')!!}
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
    {!!Html::script('formbuilder/form-builder.min.js')!!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/abdmob/x2js/master/xml2json.js"></script>
    <script type="text/javascript">
        
        jQuery(document).ready(function($) {
          'use strict';
          $(document.getElementById('fields')).formBuilder();
        });
        function getFields(){
            debugger
            var myForm = document.getElementById('fields');
            console.log(myForm.value);
            var x2js = new X2JS;
            debugger
            var jsonObj = x2js.xml_str2json(myForm.value);
            myForm.value =x2js.json2xml_str(jsonObj);
            //var customForm = document.createElement('FORM');
            //console.log(myForm.value);
            debugger;
          //  //customForm.value = myForm.value;
          // // myForm.parentElement.removeChild(myForm);
          //   debugger;
           //  var theForm = document.getElementById("myForm"); 
           //  var newOption = document.createElement("TEXT"); 
           //  newOption.name = "fielddata"; // poll[optionX]
           //  newOption.type = "text";
           //  newOption.value = jsonObj;
           //  theForm.appendChild(newOption);
           //  debugger
           // xhr = new XMLHttpRequest();
           // var url = "url";
           // xhr.open("POST","http://localhost/moduleBuilder.local/public/forms", true);
           // xhr.setRequestHeader("Content-type", "application/json");
           // xhr.onreadystatechange = function () { 
           //  debugger;
           //     if (xhr.readyState == 4 && xhr.status == 200) {
           //      debugger;
           //         var json = JSON.parse(xhr.responseText);
           //         var x2js = new X2JS;
           //         var myxml = x2js.json2xml_str(json.fields);
           //         console.log(myxml);
           //         debugger
           //         console.log(json.email + ", " + json.password)
           //     }
           // }
           // var data = JSON.stringify({"email":"hey@mail.com","fields":jsonObj});
           // xhr.send(data);
           // debugger
            
        }
        
    </script>
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