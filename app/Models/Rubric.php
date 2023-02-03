<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    use HasFactory;
    protected $table = "rubrics";
    protected $fillable = ['RubricsName','RubricsDesc','RubricsDate','RubricsSession','Criteria','Scale1','Scale2','Scale3','Scale4','Scale5','weightage','marks','final'];
    public $timestamps = false;
}
