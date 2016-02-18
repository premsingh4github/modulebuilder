@extends('admin.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Post New Job
    </h1>
</section>
<!-- Main content -->
<section class="content">
    <div>
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#postJob" data-toggle="tab" aria-expanded="true">Post Job</a></li>
                  <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Job Ad Layout</a></li>
                  <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Application Form</a></li>
                  <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Pre Screening Questions</a></li>
                  <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Job Scheduling</a></li>
                  <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Confirm</a></li>
                </ul>
                <div class="tab-content">
                <div class="active tab-pane" id="postJob">
                	{!!Form::open(['url'=>url('admin/jobs'),'class'=>'form-horizontal','method'=>'POST'])!!}
                	  <!-- <form class="form-horizontal"> -->
                	    <div class="form-group">
                	      <label for="position" class="col-sm-2 control-label">Vacancy Position <span class="required">*</span></label>
                	      <div class="col-sm-8">
                	        <input type="text" name="position" class="form-control" id="position" placeholder="Position"  data-validation="required">
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
    	    	                    <tbody id="detailBody" data-count='0'>
    	    	                    	<tr id='detail_0'>
    	    	                    		<td>{!!Form::input('number',"detail[0][noOfPosition]",null,['placeholder'=>'No. of Positions','data-validation'=>'required','min'=>1])!!}</td>
    	    	                    		<td>{!!Form::text("detail[0][address]",null,['placeholder'=>'Address','data-validation'=>'required'])!!}</td>
    	    	                    		<td>{!!Form::select("detail[0][country]",$countries,null,['data-validation'=>'required'])!!}</td>
    	    	                    		<td>{!!Form::text("detail[0][district]",null,['placeholder'=>'District','data-validation'=>'required'])!!}</td>
    	    	                    		<td><a href="#" onclick="removeDetail()"><span class="glyphicon glyphicon-trash"></span></a></td>
    	    	                    	</tr>
    	    	                  	</tbody>
    	    	                  </table>
    	    	                </div><!-- /.box-body -->
    	    	                <div class="box-footer clearfix">
    	    	                  <span class="pull-right btn btn-success" id="addDetail" onclick="addDetail()">+ Add New Location</span>
    	    	                </div>
    	    	              </div>
                	    </div>
                	    <div class="form-group">
                	      <label for="address" class="col-sm-2 control-label">No. of Vacant Positions</label>

                	      <div class="col-sm-5">
                	        <input type="text" id="totalVacancy" readonly="" class="form-control"  name="totalVacancy" placeholder="Autocalculated"  data-validation="required" >
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
                	    <div class="alert flash-message alert-info alert-dismissable">
                	       <label >Additional required qualification(Optional)</label><br>
                	       Add extra detail about the job to boost the visibility
                	    </div>
                	    <!-- additional detail -->
                	    <section >
                	    	
                	    	<div class="form-group">
                	    	  <label for="educationalQualification" class="col-sm-2 control-label">Educational Qualification</label>

                	    	  <div class="col-sm-3">
                	    	    <select name="educationalQualification" class="form-control">
                	    	    	<option >Select</option>
                	    	    </select>
                	    	  </div>
                	    	  <label for="jobLevel" class="col-sm-2 control-label">Job Level</label>

                	    	  <div class="col-sm-3">
                	    	    <select name="jobLevel" class="form-control">
                	    	    	<option >Select</option>
                	    	    </select>
                	    	  </div>
                	    	</div>
                	    	<div class="form-group">
                	    	  <label for="industry" class="col-sm-2 control-label">Industry</label>

                	    	  <div class="col-sm-3">
                	    	    <select name="industry" class="form-control">
                	    	    	<option >Select</option>
                	    	    </select>
                	    	  </div>
                	    	  <label for="jobType" class="col-sm-2 control-label">Job Type</label>

                	    	  <div class="col-sm-3">
                	    	    <select name="jobType" class="form-control">
                	    	    	<option >Select</option>
                	    	    </select>
                	    	  </div>
                	    	</div>
                	    	<div class="form-group">
                	    	  <label for="educationalQualification" class="col-sm-2 control-label">Job Category</label>

                	    	  <div class="col-sm-3">
                	    	    <select name="educationalQualification" class="form-control">
                	    	    	<option >Select</option>
                	    	    </select>
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
      	    	    	    	    <input type="number" min='0' class="form-control" name="yearMin" placeholder="Min in Year">
      	    	    	    	    to
      	    	    	    	    <input type="number" min='0' class="form-control" name="yearMax" placeholder="Max in Year">
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
                	    	    <input type="text" class="form-control datepicker" id="inputSkills" placeholder="mm/dd/yyyy">
                	    	  </div>
                	    	</div>
                	    	<div class="form-group">
                	    	  <label for="visibility" class="col-sm-2 control-label">Job Post Visibility</label>

                	    	  <div class="col-sm-10">
                	    	    <label><input type="radio" name="visibility">Public- All individuals will be able to see your job and appy to it.</label>
                	    	    <label><input type="radio" name="visibility">Search Engines-Make your job visible to other search  engines</label>
                	    	    <label><input type="radio" name="visibility">Invitation Only- Only the individualsss you invite will be able to view and apply for this job</label>
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
                	  </form>
                	</div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <li class="time-label">
                            <span class="bg-red">
                              10 Feb. 2014
                            </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-envelope bg-blue"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a class="btn btn-primary btn-xs">Read more</a>
                            <a class="btn btn-danger btn-xs">Delete</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-user bg-aqua"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                          <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-comments bg-yellow"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <li class="time-label">
                            <span class="bg-green">
                              3 Jan. 2014
                            </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                      </li>
                    </ul>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
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
            </div>
</section>
@endsection