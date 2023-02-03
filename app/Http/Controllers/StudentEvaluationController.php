<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentEvaluationModel;

class StudentEvaluationController extends Controller
{
    public function StudentList(Request $request){
        $userdata = \App\Models\StudentEvaluationModel::all();
		return view('StudentList',['userdata' => $userdata]);
    }

    /*public function edit($student_id){
        $mydata= \App\Models\StudentEvaluationModel::find($student_id);
        return view('InsertMark',['userdata' => $userdata]);
    }*/


    public function addMark(Request $request){

        $data = StudentEvaluationModel::find($request->student_id);
        $data->first_evaluation = $request->first_evaluation;
        $data->second_evaluation = $request->second_evaluation;
        $data->evaluator_mark = $request->evaluator_mark;
        $data->save();
    }

    // public function editMark(Request $request){

    //     $data = StudentEvaluationModel::find($request->student_id);
    //     $data->first_evaluation = $request->first_evaluation;
    //     $data->second_evaluation = $request->second_evaluation;
    //     $data->evaluator_mark = $request->evaluator_mark;
    //     $data->save();
    //     return redirect('eva')->with('success','Mark Successfully Edited!');
    // }
}
