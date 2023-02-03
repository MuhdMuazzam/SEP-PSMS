<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustryEvaluation extends Model
{
    use HasFactory;
    protected $table = 'industryevaluations'; //Table Name
    public $timestamps=false; //Turn off timestamp generator for database
    protected $primaryKey = 'student_ID'; //Change primary key in database
    public $incrementing = false; //Turn off auto incrementing for primary key in database
    protected $fillable = [
        'ranking',
        'student_ID',
        'student_name',
        'industry_mark',
        'industry_comment'
    ];
}
