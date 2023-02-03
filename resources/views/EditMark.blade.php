@extends('master')
@section('content')

<p class="h2">Student Info</p>
<br>
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
    </tr>
</table>
</form> -->
<form action="/top20data/{{$mydata->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="mb-3">
                <label for="name" class="form-label">Name :</label>

              </div>
              <div class="mb-3">
                <label for="matricID" class="form-label">Matric Id :</label>

              </div>
              <div class="mb-3">
                <label for="total" class="form-label">PSM Title :</label>
              </div>
              <div class="mb-3">
                <label for="date" class="form-label">PSM :</label>
                <input name="date" type="date" class="form-control" id="exampleInputAmount" placeholder="date" value="{{$mydata->date}}">
              </div>
              <div class="mb-3">
                <label for="time" class="form-label">SV First Evaluation :</label>
                <input name="time" type="time" class="form-control" id="exampleInputVendorIDID" placeholder="time" value="{{$mydata->time}}">
              </div>
              <div class="mb-3">
                <label for="time" class="form-label">SV Second Evaluation :</label>
                <input name="time" type="time" class="form-control" id="exampleInputVendorIDID" placeholder="time" value="{{$mydata->time}}">
              </div>
              <div class="mb-3">
                <label for="time" class="form-label">Evaluator Evaluation :</label>
                <input name="time" type="time" class="form-control" id="exampleInputVendorIDID" placeholder="time" value="{{$mydata->time}}">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

@endsection
