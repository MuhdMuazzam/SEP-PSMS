<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEvaluationModel extends Model
{
    protected $primaryKey = 'student_ID'; //Change primary key in database
    public $incrementing = false; //Turn off auto incrementing for primary key in database
    use HasFactory;
    protected $table = "studentevaluationmodels";
    protected $fillable = ['student_id','student_name','project_title','psm_type','supervisor_name','first_evaluation','second_evaluation','evaluator_mark'];
    public $timestamps = false;
}
