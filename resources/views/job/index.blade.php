@extends('admin.layouts.master')
@section('style')
		{!! Html::style('adminlte/css/colorpicker/bootstrap-colorpicker.min.css') !!}
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Post New Job
    </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="<?php echo ($level == 0)? 'active' : '' ; ?>"><a href="#postJob" data-toggle="tab" aria-expanded="true">Post Job</a></li>
      <li class="<?php echo ($level == 1)? 'active' : '' ; ?>"><a href="#jobAddLayout" data-toggle="tab" aria-expanded="false">Job Ad Layout</a></li>
      <li class="<?php echo ($level == 2)? 'active' : '' ; ?>"><a href="#settings" data-toggle="tab" aria-expanded="false">Application Form</a></li>
      <li class="<?php echo ($level == 3)? 'active' : '' ; ?>"><a href="#settings" data-toggle="tab" aria-expanded="false">Pre Screening Questions</a></li>
      <li class="<?php echo ($level == 4)? 'active' : '' ; ?>"><a href="#settings" data-toggle="tab" aria-expanded="false">Job Scheduling</a></li>
      <li class="<?php echo ($level == 5)? 'active' : '' ; ?>"><a href="#settings" data-toggle="tab" aria-expanded="false">Confirm</a></li>
    </ul>
      @if(Session::has('success_message'))
          <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              <strong>Success!</strong> {{Session::get('success_message')}}
          </div>
      @endif
	  @if (count($errors) > 0)
		  <div class="alert alert-danger">
			  <strong>Whoops!</strong> There were some problems with your input.<br><br>
			  <ul>
				  @foreach ($errors->all() as $error)
					  <li>{{ $error }}</li>
				  @endforeach
			  </ul>
		  </div>
	  @endif

    <div class="tab-content">
      <div class="<?php echo ($level == 0)? 'active' : '' ; ?> tab-pane" id="postJob">
      	{!!Form::open(['url'=>url('admin/jobs'),'class'=>'form-horizontal','method'=>'POST'])!!}
          @if(isset($job))
            {!! Form::hidden('job_id',$job->id) !!}
          @endif
      	  <!-- <form class="form-horizontal"> -->
      	    <div class="form-group">
      	      <label for="position" class="col-sm-2 control-label">Vacancy Position <span class="required">*</span></label>
      	      <div class="col-sm-8">
      	        <input type="text" value="{{old('position')}}" name="position" class="form-control" id="position" placeholder="Position"  data-validation="required">
      	      </div>
      	    </div>
      	    <div>
      	    	<div class="box">
	                <div class="box-header with-border">
	                  <h3 class="box-title">Details <span class="required">*</span></h3>
	                </div><!-- /.box-header -->
	                <div class="box-body">
	                  <table class="table table-bordered">
	                  	<thead>
	                  		<tr>
    	                      <th>No. of Positions</th>
    	                      <th>Address</th>
    	                      <th>Country</th>
    	                      <th>District</th>
    	                      <th>Action</th>
    	                    </tr>
	                  	</thead>
	                    <tbody id="detailBody">
	                    	<?php $count = 0; ?>
                        @if(old('detail'))
                          @foreach(old('detail') as $index => $detail)

                          <tr id='detail_{{$index}}'>
                            <td>{!!Form::input('number',"detail[$index][position_no]",$detail['position_no'],['placeholder'=>'No. of Positions','data-validation'=>'required','min'=>1])!!}</td>
                            <td>{!!Form::text("detail[$index][address]",null,['placeholder'=>'Address','data-validation'=>'required'])!!}</td>
                            <td>{!!Form::select("detail[$index][country_id]",$countries,524,['data-validation'=>'required','readonly'=>''])!!}</td>
                             <td>{!!Form::select("detail[$index][district]",Config('job.districts'),$detail['district'],['data-validation'=>'required','readonly'=>''])!!}</td>
                            
                            <td><a href="#" onclick="removeDetail()"><span class="glyphicon glyphicon-trash"></span></a></td>
                          </tr>
                          <?php $count = $index; ?>
                          @endforeach
                        @else
                        <tr id='detail_0'>
                         <td>{!!Form::input('number',"detail[0][position_no]",null,['placeholder'=>'No. of Positions','data-validation'=>'required','min'=>1])!!}</td>
                         <td>{!!Form::text("detail[0][address]",null,['placeholder'=>'Address','data-validation'=>'required'])!!}</td>
                         <td>
                           <select data-validation="required" readonly="" name="detail[0][country_id]">
                              <option value='524' selected='selected'>Nepal</option>
                           </select>
                         </td>
                         <td>{!!Form::select("detail[0][district]",Config::get('job.districts'),524,['data-validation'=>'required','readonly'=>''])!!}</td>
                         <td><a href="#"  onclick="removeDetail()"><span class="glyphicon glyphicon-trash"></span></a></td> 
                        </tr>
                        @endif
	                  	</tbody>
	                  </table>
	                </div><!-- /.box-body -->
	                <div class="box-footer clearfix">
	                  <span class="pull-right btn btn-success" data-count='{{$count}}' id="addDetail" onclick="addDetail()">+ Add New Location</span>
	                </div>
	              </div>
      	    </div>
      	    <div class="form-group">
      	      <label for="address" class="col-sm-2 control-label">No. of Vacant Positions</label>

      	      <div class="col-sm-5">
      	        <input type="text" id="totalVacancy" readonly="" class="form-control"  name="total_number" value="{{old('total_number')}}" placeholder="Autocalculated"  data-validation="required" >
      	      </div>
      	      <div class="col-sm-5">
      	        Autocalculated i.e. Sum of No. of Positions in address details
      	      </div>
      	    </div>
      	    <div class="form-group">
      	      <label for="summary" class="col-sm-2 control-label">Summary Of The Position</label>

      	      <div class="col-sm-10">
      	       {!! Form::textarea('summary', null, ['class' => 'form-control', 'id' => 'summary']) !!}
      	      </div>
      	    </div>

      	    <div class="form-group">
      	      <label for="description" class="col-sm-2 control-label">Job Description<span class="required">*</span></label>
      	      <div class="col-sm-10">
      	      	
      	        {!! Form::textarea('description', null, ['class' => 'form-control ckeditor1', 'id' => 'description', 'data-validation'=>"required"]) !!}
      	      </div>
      	    </div>
      	    <div class="alert flash-message alert-info">
      	       <label >Additional required qualification(Optional)</label><br>
      	       Add extra detail about the job to boost the visibility
      	    </div>
      	    <!-- additional detail -->
      	    <section >
      	    	
      	    	<div class="form-group">
      	    	  <label for="educationalqualification" class="col-sm-2 control-label">Educational Qualification</label>

      	    	  <div class="col-sm-3">

                      {!! Form::select('educationalqualification_id',$educationalqualifications,Old('educationalqualification_id'),array('class'=>'form-control','name'=>'educationalqualification_id')) !!}
      	    	  </div>
      	    	  <label for="joblevel" class="col-sm-2 control-label">Job Level</label>

      	    	  <div class="col-sm-3">
                      {!! Form::select('joblevel_id',$joblevels,Old('joblevel_id'),array('class'=>'form-control','name'=>'joblevel_id')) !!}
      	    	  </div>
      	    	</div>
      	    	<div class="form-group">
      	    	  <label for="industry" class="col-sm-2 control-label">Industry</label>

      	    	  <div class="col-sm-3">
                      {!! Form::select('industry_id',$industries,Old('industry_id'),array('class'=>'form-control','name'=>'industry_id')) !!}
      	    	  </div>
      	    	  <label for="jobtype" class="col-sm-2 control-label">Job Type</label>

      	    	  <div class="col-sm-3">
                      {!! Form::select('jobtype_id',$jobtypes,Old('jobtype_id'),array('class'=>'form-control','name'=>'jobtype_id')) !!}
      	    	  </div>
      	    	</div>
      	    	<div class="form-group">
      	    	  <label for="educationalQualification" class="col-sm-2 control-label">Job Category</label>

      	    	  <div class="col-sm-3">
                      {!! Form::select('jobcategory_id', $jobcategories,Old('jobcategory_id'),array('class'=>'form-control','name'=>'jobcategory_id')) !!}
      	    	  </div>
      	    	  
      	    	</div>
      	    	<div class="form-group">
      	    	  <label for="jobLevel" class="col-sm-2 control-label">Salary Range</label>

        	    	  <div class="col-sm-3">
        	    	    <input type="number" min='0' class="form-control" name="salaryMin" placeholder="Min in Nrs/Month">
        	    	    to
        	    	    <input type="number" min='0' class="form-control" name="salaryMax" placeholder="Max in Nrs/Month">
        	    	  </div>
  	  	    	  <label for="jobLevel" class="col-sm-2 control-label">Year of Experience</label>

  	    	    	  <div class="col-sm-3">
  	    	    	    <input type="number" min='0' class="form-control" name="experienceMin" placeholder="Min in Year">
  	    	    	    to
  	    	    	    <input type="number" min='0' class="form-control" name="experienceMax" placeholder="Max in Year">
  	    	    	  </div>
      	    	</div>
      	    	<div class="form-group">
      	    	  <label for="otherBenefit" class="col-sm-2 control-label">Other Benefits</label>

      	    	  <div class="col-sm-3">
      	    	    <input type="text" class="form-control" name="otherBenefit" placeholder="eg. Commision/Bonuses/Allowances">
      	    	  </div>
      	    	  <label for="skill" class="col-sm-2 control-label">Skills Required</label>

      	    	  <div class="col-sm-3">
      	    	  <textarea name="skill" class="form-control" placeholder="Skills..."></textarea>
      	    	    
      	    	  </div>
      	    	</div>
      	    	<div class="form-group">
      	    	  <label for="inputSkills" class="col-sm-2 control-label">Job Publish Date</label>

      	    	  <div class="col-sm-3">
      	    	    <input name="publishDate" type="text" class="form-control datepicker" data-date-format="yyyy-mm-dd" placeholder="mm/dd/yyyy">
      	    	  </div>
      	    	</div>
      	    	<div class="form-group">
      	    	  <label for="visibility" class="col-sm-2 control-label">Job Post Visibility</label>

      	    	  <div class="col-sm-10">
      	    	    <label><input type="radio" value="0" name="visibility">Public- All individuals will be able to see your job and appy to it.</label>
      	    	    <label><input type="radio" value="1" name="visibility">Search Engines-Make your job visible to other search  engines</label>
      	    	    <label><input type="radio" value="2" name="visibility">Invitation Only- Only the individualsss you invite will be able to view and apply for this job</label>
      	    	  </div>
      	    	</div>
      	    	<div class="form-group">
      	    	  <label for="applyMethod" class="col-sm-2 control-label">How to Apply(Application Method)</label>

      	    	  <div class="col-sm-10">
      	    	     <textarea rows="5" cols="50" name="applyMethod" placeholder="Description.."></textarea>
      	    	  </div>
      	    	</div>
      	    </section>
      	    <div class="form-group">
        	    <label  class="col-sm-2 control-label"> </label>

        	    <div class="col-sm-10">
        	      <label><input type="checkbox" name="coverLetterRequired"  value="1">Must Upload Cover Letter</label><br>
        	      <label><input type="checkbox" name="resumeRequired" value="1">Must Upload Resume/Cv</label>
        	    </div>
      	      <div class="col-sm-offset-2 col-sm-10">
      	        <button type="submit" class="btn btn-danger">Submit</button>
      	      </div>
      	    </div>
      	{!!Form::close()!!}
      </div>
      <!-- /.tab-pane -->
      <div class="<?php echo ($level == 1)? 'active' : '' ; ?> tab-pane" id="jobAddLayout">
		{!! Form::open(['url'=>url('admin/jobs/add-job-layout'),'method'=>'post','onsubmit'=>'return checkJobId()','files'=>true]) !!}
		  @if(isset($job))
			  {!! Form::hidden('job_id',$job->id) !!}
		  @endif
		  {!! Form::hidden('job_id',1,['id'=>'job_id']) !!}
			  <div class=" timeline-item">
				  <div class="box-body box-profile " >
					  <div class="col-md-3">

						  <!-- Profile Image -->
						  <div class="">
							  <div class="box-body box-profile">

								  <h3 class=" text-center">Images</h3>


								  <ul class="list-group list-group-unbordered">
									  <li class="list-group-item">
										  <img id="logo" class="profile-user-img img-responsive img-circle"  alt="Logo Image">
									  </li>
									  <li class="list-group-item">
										  {!! Form::file('logo_image',['class'=>'imgInput','data-target'=>'logo','data-validation' =>'required']) !!}
									  </li>
									  <li class="list-group-item">
										  {!! Form::select('logo_position',Config::get('job.logo_positions')) !!}
									  </li>
									  <li class="list-group-item">
										  <img id="header" class="profile-user-img img-responsive img-circle"  alt="Header Image">
									  </li>
									  <li class="list-group-item">
										  {!! Form::file('header_image',['class'=>'imgInput','data-target'=>'header']) !!}
									  </li>
									  <li class="list-group-item">
										  {!! Form::select('header_position',Config::get('job.header_positions')) !!}
									  </li>
									  <li class="list-group-item">
										  <div class="form-group">
											  <label>Button Color:</label>
											  <input name="button_color" type="text" class="form-control colorpicker colorpicker-element">
										  </div>
									  </li>
									  <li class="list-group-item">
										  <div class="form-group">
											  <label>Background Color:</label>
											  <input name="background_color" type="text" class="form-control colorpicker colorpicker-element">
										  </div>
									  </li>
									  <li class="list-group-item">
										  <div class="form-group">
											  <label>Text Color:</label>
											  <input name="text_color" type="text" class="form-control colorpicker colorpicker-element">
										  </div>
									  </li>
								  </ul>


								  {!! Form::submit('Save',['class'=>'btn btn-primary btn-block']) !!}
							  </div><!-- /.box-body -->
						  </div><!-- /.box -->

						  <!-- About Me Box -->

					  </div>
					  <div class="col-md-8" style="border: solid 1px red">
						  <h3 class="timeline-header">Live Preview</h3>
						  <div class="timeline-body">

							  <div class="">

								  <div class="box-body box-profile">
									  <h3 class="profile-username text-center"> <img  src="data:image/jpeg;base64,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" alt="User profile picture">
									  </h3>
									  <img id="header" class="profile-user-img img-responsive img-circle"  alt="Header Image">
									  <a href="#" class="btn btn-primary btn-block"><b>Save</b></a>
									  <a href="#" class="btn btn-primary btn-block"><b>Apply Online</b></a>


								  </div><!-- /.box-body -->
							  </div>
						  </div>
					  </div>

				  </div>


			  </div>

		  {!! Form::close() !!}
      </div>
      <!-- /.tab-pane -->

      <div class=" <?php echo ($level == 2)? 'active' : '' ; ?> tab-pane" id="settings">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputName" placeholder="Name">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputName" placeholder="Name">
            </div>
          </div>
          <div class="form-group">
            <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

            <div class="col-sm-10">
              <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-danger">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
  </div>
  <!-- /.nav-tabs-custom -->
</section>
@endsection
@section('script')
	{!! Html::script('adminlte/js/plugins/colorpicker/bootstrap-colorpicker.min.js') !!}
<script type="text/javascript">
    function addDetail() {
        $('#addDetail').attr('data-count',parseInt($('#addDetail').attr('data-count')) + 1);
        var temp = "<tr id='detail_"+parseInt($('#addDetail').attr('data-count'))+"'>" + 
                        "<td><input placeholder='No. of Positions' name='detail["+parseInt($('#addDetail').attr('data-count'))+"][position_no]' type='number' min='1' data-validation='required'></td>" +
                        "<td><input placeholder='Address' name='detail["+parseInt($('#addDetail').attr('data-count'))+"][address]' type='text' data-validation='required'></td>" +
                        "<td><select readonly data-validation='required' name='detail["+parseInt($('#addDetail').attr('data-count'))+"][country_id]' >"+
                            "<option value='524' selected='selected'>Nepal</option>" +
                            "<?php
                                // $option = '';
                                // foreach ($countries as $index => $value) {
                                //     $option .= "<option value='".$index."'>".$value."</option>";
                                // }
                                // echo $option;
                             ?>"
                        +"</select></td>" +
                        "<td><select readonly data-validation='required' name='detail["+parseInt($('#addDetail').attr('data-count'))+"][district]' >"+
                            "<?php
                              $option = '';
                              foreach (Config::get('job.districts') as $index => $value) {
                                $option .= "<option value='".$index."'>".$value."</option>";
                              }
                              echo $option;
                             ?>"
                          + "</select></td>" +
                        "<td><a href='#' onclick='removeDetail()'><span class='glyphicon glyphicon-trash'></span></a></td>" +

                    "</tr>";
        $('#detailBody').append(temp);
    }

</script>
@endsection