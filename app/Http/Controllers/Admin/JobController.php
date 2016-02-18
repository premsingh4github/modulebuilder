<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Country;

class JobController extends Controller
{
    public function getIndex()
        {
            return view('job.index')->with('countries',Country::lists('name', 'id'));
        }
    public function postIndex(Request $request){
        return $request->all();
    }

        /**
         * Responds to requests to GET /users/show/1
         */
        public function getShow($id)
        {
            //
        }

}
