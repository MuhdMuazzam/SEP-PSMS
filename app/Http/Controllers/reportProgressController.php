<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\progressreport;

class reportProgressController extends Controller
{
    //progress
    public function abc() {

        $progress = \App\Models\progressreport::all();

        return view ('progressList', ['progress' => $progress]);

    }

    //report
    public function def() {

        $report = \App\Models\progressreport::all();

        return view ('reportList', ['report' => $report]);
    }

    //main report
    public function ghi() {

        $mainrep =\App\Models\progressreport::all();

        return view ('report', ['mainrep' => $mainrep]);
    }

    
}
