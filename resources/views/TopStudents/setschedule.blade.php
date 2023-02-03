@extends('master')
@section('content')

<p class="h2">Manage Top Students</p><br>


<!-- Modal -->

<br>
<div class="card">
  <div class="card-header">
    Set Schedule
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <form action="/top20data/{{$mydata->id}}/update" method="POST">
			{{csrf_field()}}
            <div class="mb-3">
				<label for="name" class="form-label">Name :</label>
				<input name="name" type="text" class="form-control" id="exampleInputID" value="{{$mydata->student_name}}" readonly>
			  </div>
			  <div class="mb-3">
				<label for="matricID" class="form-label">Matric Number :</label>
				<input name="matricID" type="text" class="form-control" id="exampleInputDetails" value="{{$mydata->student_ID}}" readonly>
			  </div>
			  <div class="mb-3">
				<label for="total" class="form-label">Total Mark :</label>
				<input name="total" type="text" class="form-control" id="exampleInputType" value="{{$mydata->totalmark}}" readonly>
			  </div>
			  <div class="mb-3">
				<label for="date" class="form-label">Date :</label>
				<input name="date" type="date" class="form-control" id="exampleInputAmount" placeholder="date" value="{{$mydata->date}}">
			  </div>
			  <div class="mb-3">
				<label for="time" class="form-label">Time :</label>
				<input name="time" type="time" class="form-control" id="exampleInputVendorIDID" placeholder="time" value="{{$mydata->time}}">
			  </div>
			<button type="submit" class="btn btn-primary">Save</button>
			</form>
    </blockquote>
  </div>
</div>
		  
	
		
			
		

    @endsection