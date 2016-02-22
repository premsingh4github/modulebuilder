<?php

namespace App\Http\Controllers\Admin;

use App\Educationalqualification;
use App\Industry;
use App\Jobcategory;
use App\JobExtraDetail;
use App\Joblevel;
use App\Jobtype;
use App\JobDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Country;
use App\Job;
use Auth;
use Illuminate\Support\Facades\Session;
use App\Jobaddlayout;
use Input;

class JobController extends Controller
{
    public function getIndex()
    {
        return view('job.index')->with('countries',Country::lists('name', 'id'))
            ->with('educationalqualifications',Educationalqualification::lists('name','id'))
            ->with('joblevels',Joblevel::lists('name','id'))
            ->with('industries',Industry::lists('name','id'))
            ->with('jobtypes',Jobtype::lists('name','id'))
            ->with('jobcategories',Jobcategory::lists('name','id'))->with('level',0);
    }
    public function postIndex(Request $request)
    {
            $request['user_id'] = Auth::user()->id;
            $this->validate($request,Job::$rules);
            $job = Job::create($request->all());
            $details = array();
            foreach ($request['detail'] as $key => $value) {
                $detail = $value;
                $detail['user_id'] = $request['user_id'];
                $job_detail = new JobDetail($detail);
                $details[] = $job_detail;
            }
            $job->job_details()->saveMany($details);
            $jobExtraDetail = new JobExtraDetail($request->all());
            $job->job_extra_details()->save($jobExtraDetail);
            \Session::flash('success_message','Job detail added successfully!.');
            return view('job.index')->with('job',$job)
                ->with('educationalqualifications',Educationalqualification::lists('name','id'))
                ->with('joblevels',Joblevel::lists('name','id'))
                ->with('industries',Industry::lists('name','id'))
                ->with('jobtypes',Jobtype::lists('name','id'))
                ->with('jobcategories',Jobcategory::lists('name','id'))->with('level',1);
    }

    public function getShow($id)
    {
        //
    }
    public  function postAddJobLayout(Request $request){
        $request['user_id'] = Auth::user()->id;
        if($request['logo_image']){
            $destinationPath = 'uploads'; // upload path
            $extension = Input::file('logo_image')->getClientOriginalExtension(); // getting image extension

            $fileName = time() .'.'.$extension; // renameing image
            $request['logo'] = $fileName;
            Input::file('logo_image')->move($destinationPath, $fileName);

        }
        if($request['header_image']){
            $destinationPath = 'uploads'; // upload path
            $extension = Input::file('header_image')->getClientOriginalExtension(); // getting image extension
            $headerfile = (time() +1) .'.'.$extension; // renameing image
            Input::file('header_image')->move($destinationPath, $headerfile);
            $request['header'] = $headerfile;
        }
        $jobaddlayout = Jobaddlayout::create($request->all());
        return view('job.index')->with('job',Job::find($request['job_id']))
            ->with('educationalqualifications',Educationalqualification::lists('name','id'))
            ->with('joblevels',Joblevel::lists('name','id'))
            ->with('industries',Industry::lists('name','id'))
            ->with('jobtypes',Jobtype::lists('name','id'))
            ->with('jobcategories',Jobcategory::lists('name','id'))->with('level',2);

        return $request;
    }
}
