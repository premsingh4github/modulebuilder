<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobExtraDetail extends Model
{
    protected  $fillable = ['job_id','educationalqualification_id','joblevel_id','industry_id','jobtype_id','jobcategory_id','salaryMin','salaryMax','experienceMin','experienceMax','otherBenefit','skill','publishDate','visibility','applyMethod','coverLetterRequired','resumeRequired'];
}
