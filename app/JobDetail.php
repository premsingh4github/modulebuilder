<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobDetail extends Model
{
    /**
	* The attributes that are mass assignable.
	*/
	protected $fillable = ['position_no','address','country_id','district','job_id','user_id'];
	/**
	* Validation rules
	*/
	public static $rules = array(
			'position_no' => 'required',
			'district' => 'required',
			'address' => 'required',
			'user_id' => 'required|exists:users,id',
			'country_id' => 'required|exists:countries,id',
			'job_id' => 'required|exists:jobs,id',
		);
	/**
	* Get the user record associated with the job detail.
	*/
    public function user(){
    	return $this->belongsTo('App\User');
    }
    /**
	* Get the job  record associated with the job detail.
	*/
    public function job(){
    	return $this->belongsTo('App\job');
    }
    /**
    * Get the country associated with the job detail
    */
    public function country(){
    	return $this->belongsTo('App\Country');
    }
}
