<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndustryEvaluation;
use App\http\Controllers\Controller;

class IndustryEvaluationController extends Controller
{
    public function index(){ //Retrieve Top 20 Students from Database to display in the list
        $data = IndustryEvaluation::select("*")
        ->orderBy("ranking")
        ->get();
        return view('IndustryEvaluation.industry', ['toplist'=>$data]);
    }

    public function addShowProfile($id){ //Retrieve data of the selected student in Industry Add Mark page
        $data = IndustryEvaluation::join('students', 'students.student_ID', '=', 'industryevaluations.student_ID')
                                        ->where('students.student_ID', $id)
                                        ->first('students.*');

        return view('IndustryEvaluation.addStudentIndustryMark',['data'=>$data]);
    }

    public function editShowProfile($id){ //Retrieve data of the selected student in Industry Edit Mark page
        $data = IndustryEvaluation::join('students', 'students.student_ID', '=', 'industryevaluations.student_ID')
                                        ->where('students.student_ID', $id)
                                        ->first('students.*');

        return view('IndustryEvaluation.editStudentIndustryMark',['data'=>$data]);
    }

    public function addIndustryMark(Request $req){ //Update added mark of the student into database

        $data = IndustryEvaluation::find($req->student_ID);

        if(isset($req->addTotalMark)){
            $data->industry_mark = $req->addTotalMark;
            $data->industry_comment = $req->addComment;
            $data->save();
            return redirect('ind')->with('success','Mark Successfully Added!');
        }
        else{
            return redirect('ind')->with('error','Mark is Null, Failed To Save!');
        }
    }

    public function editIndustryMark(Request $req){ //Update added mark of the student into database

        $data = IndustryEvaluation::find($req->student_ID);

        if(isset($req->editTotalMark)){
            $data->industry_mark = $req->editTotalMark;
            $data->industry_comment = $req->editComment;
            $data->save();
            return redirect('ind')->with('success','Mark Successfully Updated!');
        }
        else{
            return redirect('ind')->with('error','Mark is Null, Failed To Update!');
        }

    }
}
