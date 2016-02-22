<?php namespace App;
   
use Illuminate\Database\Eloquent\Model;

class Jobaddlayout extends Model
{
    protected $fillable = [
		'logo',
		'logo_position',
		'header',
		'header_position',
		'button_color',
		'background_color',
		'text_color',
		'job_id',
		'user_id',
	];
}