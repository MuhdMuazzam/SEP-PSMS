@extends('master')
@section('content')

<style>

</style>


<p class="h2">REPORT & PROGRESS</p>
<br>

<table class="table">
<thead class="table-dark">
<h4>List of Report</h4>
</thead>
<br>
<tbody>
  <tr>
    <th>STUDENT NAME : </th>
    <th>STUDENT ID : </th>
    <th>SUPERVISOR NAME : </th>
    <th>SUPERVISOR ID : </th>
    <th>PROJECT TITLE : </th>
    <th>PROJECT MARK : </th>
    <th>PROJECT REVIEW : </th>
  </tr>
  @foreach ($mainrep as $mairep)
  <tr>
    <td>{{$mairep->student_name}}</td>
    <td>{{$mairep->student_ID}}</td>
    <td>{{$mairep->supervisor_name}}</td>
    <td>{{$mairep->supervisor_ID}}</td>
    <td>{{$mairep->project_title}}</td>
    <td>{{$mairep->project_mark}}</td>
    <td>{{$mairep->project_review}}</td>
  </tr>
  @endforeach
</tbody>
</table>
<br>

<!-- <div class="card" style="width: 18x;">
  <div class="card-body">
    <h5 class="card-title">List of Report & Progress</h5>
    <br>
    <h6 class="card-subtitle mb-2 text-muted" style="font-color:grey"><i>Any report or progress will be updated here...</i></h6> 
    buat if else untuk report & progress
    <br>
  </div>
</div>
<br> -->

<div class="container">
    <a href="rpt" class="btn btn-primary">Generate Report</a>
    <a href="pgrs" class="btn btn-primary">Generate Progress</a>
</div>
</div>

@endsection