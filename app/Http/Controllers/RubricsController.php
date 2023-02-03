<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RubricsController extends Controller
{
    public function create(Request $request){
        \App\Models\Rubric::create($request->all());
        return redirect('/rubric') -> with('success','Data Successfully Inserted!'); //with ... for the alert
    }
    //VIEW rubrics
    public function rubric(Request $request){
        $rubrics_data = \App\Models\Rubric::all();
        return view('rubric',['rubrics_data' => $rubrics_data]);
    }
    //Delete Rubrics
    public function delete($id)
    {
        $rubrics_data = \App\Models\Rubric::find($id);
        $rubrics_data -> delete($rubrics_data);
        return redirect('/rubric')->with('success','Data Successfully Deleted! ');
    }
    //Update Rubrics
    public function edit($id){
        $rubrics_data = \App\Models\Rubric::find($id);
        return view('viewRubrics',['rubrics_data' => $rubrics_data]);
    }

    public function update(Request $request ,$id){
        $rubrics_data = \App\Models\Rubric::find($id);
        $rubrics_data->update($request->all());
        return redirect('/rubric')-> with('success','Data Successfully Updated!'); //with ... for the alert
    }
}
