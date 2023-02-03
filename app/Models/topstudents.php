<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topstudents extends Model
{
    use HasFactory;
    protected $fillable = ['id','student_ID','student_name','category','mark1','mark2','mark3','totalmark','date','time','selection'];
}
