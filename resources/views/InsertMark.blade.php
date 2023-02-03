@extends('master')
@section('content')

<p class="h2">Student Info</p>
<br>
<form action="/InsertMark" method="POST">

            <div class="mb-3">
                <label for="name" class="form-label">Name :</label>
                <input name="name" type="text" class="form-control" id="name"  value="">
              </div>
              <div class="mb-3">
                <label for="matricID" class="form-label">Matric Id :</label>
                <input name="matricId" type="text" class="form-control" id="matricId"  value="">
              </div>
              <div class="mb-3">
                <label for="total" class="form-label">PSM Title :</label>
                <input name="PSMtitle" type="text" class="form-control" id="PSMTitle"  value="">
              </div>
              <div class="mb-3">
                <label for="PSM" class="form-label">PSM :</label>
                <input name="PSM" type="text" class="form-control" id="PSM"  value="">
              </div>
              <div class="mb-3">
                <label for="FirstEv" class="form-label">SV First Evaluation :</label>
                <input name="FirtEv" type="number" class="form-control" id="FirstEv"  value="">
              </div>
              <div class="mb-3">
                <label for="SecEv" class="form-label">SV Second Evaluation :</label>
                <input name="SecEv" type="number" class="form-control" id="SecEv"  value="">
              </div>
              <div class="mb-3">
                <label for="EvaluatorEv" class="form-label">Evaluator Evaluation :</label>
                <input name="EvaluatorEv" type="number" class="form-control" id="EvaluatorEv"  value="">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- <form>
<table class="table table-bordered">
    <tr>
      <th scope="row" style="background-color:#b3daff">Name</th>
      <td style="background-color:#FFFAF0"></td>
    </tr>
    <tr>
      <th scope="row" style="background-color:#b3daff">Matric Id</th>
      <td style="background-color:#FFFAF0"></td>
    </tr>
    <tr>
      <th scope="row" style="background-color:#b3daff">PSM Title</th>
      <td style="background-color:#FFFAF0"></td>
    </tr>
    <tr>
      <th scope="row" style="background-color:#b3daff">PSM</th>
      <td style="background-color:#FFFAF0"></td>
    </tr>
    <tr>
      <th scope="row" style="background-color:#b3daff">SV First Evaluation</th>
      <td style="background-color:#FFFAF0"></td>
    </tr>
    <tr>
      <th scope="row" style="background-color:#b3daff">SV Second Evaluation</th>
      <td style="background-color:#FFFAF0"></td>
    </tr>
    <tr>
      <th scope="row" style="background-color:#b3daff">Evaluator Evaluation</th>
      <td style="background-color:#FFFAF0"></td>
</table>
</form> -->

<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
	  Submit
</button>

@endsection
