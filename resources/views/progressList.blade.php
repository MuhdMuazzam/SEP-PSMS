@extends('master')
@section('content')

<p class="h2">REPORT & PROGRESS</p>
<br>

<table class="table">
<thead class="table-dark">
<h4>List of Progress</h4>
<!-- </thead>
<br>
<tbody>
  @foreach($progress as $prog)
  <tr>
    <th>STUDENT NAME : </th>
    <td>{{$prog->student_name}}</td>
  </tr>
  <tr>
    <th>STUDENT ID : </th>
    <td>{{$prog->student_ID}}</td>
  </tr>
  <tr>
    <th>PROJECT TITLE : </th>
    <td>{{$prog->project_title}}</td>
  </tr>
  <tr>
    <th>SUPERVISOR NAME : </th>
    <td>{{$prog->supervisor_name}}</td>
  </tr>
  <tr>
    <th>SUPERVISOR ID : </th>
    <td>{{$prog->supervisor_ID}}</td>
  </tr>
  @endforeach
</tbody>
</table>
<br> -->

<thead>
  <tr>
    <th>STUDENT NAME : </th>
    <th>STUDENT ID : </th>
    <th>SUPERVISOR NAME : </th>
    <th>SUPERVISOR ID : </th>
    <th>PROJECT TITLE : </th>
    <th>PROJECT MARK : </th>
    <th>PROJECT REVIEW : </th>
</thead>
@foreach ($progress as $prog)
<tbody>
</tr>
  <tr>
    <td>{{$prog->student_name}}</td>
    <td>{{$prog->student_ID}}</td>
    <td>{{$prog->supervisor_name}}</td>
    <td>{{$prog->supervisor_ID}}</td>
    <td>{{$prog->project_title}}</td>
    <td>{{$prog->project_mark}}</td>
    <td>{{$prog->project_review}}</td>
  </tr>
</tbody>  
  @endforeach

<!-- <div class="card" style="width: 18x;">
  <div class="card-body">
  <div class="card-header">
    List of Progress
  </div>
    <br>
    <p class="card-text">STUDENT NAME: </p>
    <p class="card-text">STUDENT ID: </p>
    <p class="card-text">PROJECT TITLE: </p>
    <p class="card-text">SUPERVISOR NAME: </p>
    <p class="card-text">SUPERVISOR ID: </p>
    <br>
  </div>
</div>
<br> -->
<br><br>
<h5>Progress Completion</h5>
<br>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
  80%
</div>
</div>
<br><br>

<div class="container">
    <div class="vertical-center">
    <a href="#" class="btn btn-primary">Download Progress</a>
    <!-- <a href="path_to_file" class="btn btn-primary" download="Progress PSM">Save Progress</a> -->
</div>
</div>
<br>

@endsection