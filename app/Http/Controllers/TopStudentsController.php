<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\topstudents;

class TopStudentsController extends Controller
{
    // function to view all the students
	public function abc(){
        $mydata= \App\Models\topstudents::all();
        return view('TopStudents.MainTopStudent',['mydata'=>$mydata]);
    }
    
	 // function to view the PSM1 students
    public function FilterPSM1(){
		$mydata = topstudents::all()
		->where('category','=','PSM 1');
		return view('TopStudents.MainTopStudent',['mydata' => $mydata]);
	}

	// function to view the PSM2 students
    public function FilterPSM2(){
		$mydata = topstudents::all()
		->where('category','=','PSM 2');
		return view('TopStudents.MainTopStudent',['mydata' => $mydata]);
	}

	// function to sort the students ascending order
    public function sortAsc(){
		$mydata =  topstudents::orderBy('totalmark', 'ASC')->where('category','=','PSM 2')->get();
		return view('TopStudents.MainTopStudent',['mydata' => $mydata]);
	}

	// function to sort the students descending order
    public function sortDesc(){
		$mydata =  topstudents::orderBy('totalmark', 'DESC')->where('category','=','PSM 2')->get();
		return view('TopStudents.MainTopStudent',['mydata' => $mydata]);
	}

	// function to sort the top 20 students
    public function top20(){
		$mydata =  topstudents::orderBy('totalmark', 'DESC')->limit(20)->get();
		return view('TopStudents.MainTopStudent',['mydata' => $mydata]);
	}

	// function to view a student in edit form
    public function edit($id){
		$mydata= \App\Models\topstudents::find($id);
		return view('TopStudents.setschedule',['mydata' => $mydata]);
	}

	// function to update student data
    public function update(Request $request, $id)
	{
		$mydata = topstudents::find($id);
		$mydata -> update($request->all());
		return redirect('top')->with('success','Date and Time is successfully set');
	}

	// function to view a student information
	public function view($id){
        $mydata= \App\Models\topstudents::find($id);
		return view('TopStudents.setschedule',['mydata' => $mydata]);
    }

	// function to view a student for manual selection
	public function manual(){
        $mydata= \App\Models\topstudents::all();
        return view('TopStudents.ManualSelection',['mydata'=>$mydata]);
    }
	

}
