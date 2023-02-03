<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class progressreport extends Model
{
    use HasFactory;
    protected $fillable = ['student_ID', 'student_name', 'supervisor_ID', 'supervisor_name', 'project_title', 'project_mark', 'project_review'];
}
