@extends('master')
@section('content')


<p class="h2">Manage Students Evaluation</p>
<br>

<table class="table table-hover table-bordered" style="border: 2px solid grey;">
  <thead class="table-primary">
  <tr style="text-align:center;">
    <th>Name</th>
	<th>Matric ID</th>
	<th>PSM 1 Mark</th>
	<th>PSM 2 Mark</th>
    <th>Evaluator Mark</th>
	<th>Action</th>
	</tr>
  </thead>
  <tbody style="background-color:#FFFAF0" >
	<tr>
    @foreach ($userdata as $user)
	<td style="text-align:center;">{{$user->student_name}}</td>
	<td style="text-align:center;">{{$user->student_id}}</td>
	<td style="text-align:center;">{{$user->first_evaluation}}</td>
	<td style="text-align:center;">{{$user->second_evaluation}}</td>
    <td style="text-align:center;">{{$user->evaluator_mark}}</td>
	<td style="text-align:center;">

	    <button id="insertMark" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <a href="/InsertMark" class="fontButton">
	        Add Mark
            </a>
	    </button>
        <button id="insertMark" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <a href="insertMark/{{$user['student_id']}}/editMark" class="fontButton">
	        Edit Mark
            </a>
	    </button>

	</tr>
	@endforeach
  </tbody>
</table>

@endsection
