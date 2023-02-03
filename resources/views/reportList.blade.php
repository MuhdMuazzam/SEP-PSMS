@extends('master')
@section('content')

<p class="h2">REPORT & PROGRESS</p>
<br>

<table class="table">
<thead class="table-dark">
<h4>List of Report</h4>
</thead>
<br>

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
@foreach ($report as $rep)
<tbody>
</tr>
  <tr>
    <td>{{$rep->student_name}}</td>
    <td>{{$rep->student_ID}}</td>
    <td>{{$rep->supervisor_name}}</td>
    <td>{{$rep->supervisor_ID}}</td>
    <td>{{$rep->project_title}}</td>
    <td>{{$rep->project_mark}}</td>
    <td>{{$rep->project_review}}</td>
  </tr>
</tbody>  
  @endforeach

</table>
<br>

<!-- <div class="card" style="width: 18x;">
  <div class="card-body">
  <div class="card-header">
    List of Report
  </div>
    <br>
    <p class="card-text">STUDENT NAME: </p>
    <p class="card-text">STUDENT ID: </p>
    <p class="card-text">SUPERVISOR NAME: </p>
    <p class="card-text">SUPERVISOR ID: </p>
    <br>
    <p class="card-text">PROJECT TITLE: </p>
    <p class="card-text">PROJECT MARK: </p>
    <p class="card-text">PROJECT REVIEW: </p>

  </div>
</div>
<br> -->

<div class="container">
    <div class="vertical-center">
    <a href="#" class="btn btn-primary">Download Full Report</a>
    <!-- <a href="#" class="btn btn-primary">Save Full Report</a> -->
</div>
</div>

@endsection