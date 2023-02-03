@extends('master')
@section('content')

<p class="h2">Manage Top Students</p><br>

<a class="btn btn-primary position-relative" style="width:160px;text-align:center;margin-left:10px;margin-right:10px;" href="top" role="button">All</a>
<a class="btn btn-primary position-relative" style="width:160px;text-align:center;margin-left:10px;margin-right:10px;" href="PSM1" role="button">PSM 1</a>
<a class="btn btn-primary position-relative" style="width:160px;text-align:center;margin-left:10px;margin-right:10px;" href="PSM2" role="button">PSM 2</a>

<div style="float:right;">
<div class="input-group mb-3">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
  <ul class="dropdown-menu dropdown-menu-end">
  <li><a class="dropdown-item" href="asc">Ascending</a></li>
    <li><a class="dropdown-item" href="desc">Descending</a></li>
    <li><a class="dropdown-item" href="top20">Top20</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="manual">Manual</a></li>
  </ul>
</div>
</div>


	<br><br>

	@if(session('success'))
	<div class ="alert alert-success" role="alert">
	{{session('success')}}
	</div>
@endif
<table class="table table-hover table-bordered" style="border: 2px solid grey;">
  <thead class="table-primary">
  <tr style="text-align:center;">
	<th>No.</th>
    <th>Name</th>
	<th>Matric ID</th>
	<th>PSM Category</th>
	<th>Mark 1</th>
	<th>Mark 2</th>
	<th>Mark 3</th>
	<th>Total Mark</th>
	<th>Action</th>
	</tr>
  </thead>
  <tbody style="background-color:#FFFAF0" >
  @foreach($mydata as $stud)
	<tr>
	<td style="text-align:center;">{{$stud ->id}}</td>
	<td>{{$stud -> student_name}}</td>
	<td style="text-align:center;">{{$stud -> student_ID}}</td>
	<td style="text-align:center;">{{$stud -> category}}</td>
	<td style="text-align:center;">{{$stud -> mark1}}</td>
	<td style="text-align:center;">{{$stud -> mark2}}</td>
	<td style="text-align:center;">{{$stud -> mark3}}</td>
	<td style="text-align:center;">{{$stud -> totalmark}}</td>
	<td style="text-align:center;">
	<center>
	<button type="button" class="btn btn-danger">
	<a style="color:white; text-decoration: none;" href="top20data/{{$stud->id}}/edit">Set Schedule</a>
	</button>
	<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
	<a style="color:white; text-decoration: none;" href="top20data/{{$stud->id}}/view">View</a>
	</button>
	</center></td>
	</tr>
	@endforeach
	
  </tbody>
</table>



@endsection