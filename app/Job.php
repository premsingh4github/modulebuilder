<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    
	/**
	* The attributes that are mass assignable.
	*/
	protected $fillable = ['position','total_number','summary','description','user_id'];
	/**
	* Validation rules
	*/
	public static $rules = array(
			'position' => 'required',
			'total_number' => 'required|integer|min:1',
			'description' => 'required',
			'user_id' => 'required|exists:users,id'
		);
	/**
	* Get the user record associated with the job.
	*/
    public function user(){
    	return $this->belongsTo('App\User');
    }
    /**
    * Get job details associated with the job.
    */
    public function job_details(){
    	return $this->hasMany('App\JobDetail');
    }
	/**
	 * Get job extra details associated with the job.
	 */
	public function job_extra_details(){
		return $this->hasOne('App\JobExtraDetail');
	}

}

