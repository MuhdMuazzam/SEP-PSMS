@extends('master')
@section('content')
 <div>
 <form class="form-style"action="/data/create" method="POST">
{{csrf_field()}}
	<!-- <div>
		<label for="RubricsID">Rubrics ID</label>
		<input type="text" name="RubricsID" id="RubricsID"style="margin-top:20px;margin-left:-20px" >
	</div> -->
	<br>
	<div class="row" style="background-color:lightblue;margin-left:130px;border:1px solid white">
	<div class="col-6">
	<div class="mb-3">
 	 <label for="RubricsName" class="form-label">Name</label>
	<input type="text" class="form-control" name="RubricsName" placeholder="Rubrics Name">
	</div>
	<div class="mb-3" >
	<label for="RubricsDesc" class="form-label">Description</label>
	<input type="text" class="form-control" name="RubricsDesc" placeholder="Rubrics Desc">
	</div>	</div>

	<div class="col-6">
	<div class="mb-3"style="margin-left:50px">
 	 <label for="RubricsDate" class="form-label">Date</label>
	<input type="date" class="form-control" name="RubricsDate" placeholder="Date">
	</div>
	<div class="mb-3"style="margin-left:50px">
 	 <label for="RubricsSession" class="form-label">Session</label>
	<input type="text" class="form-control" name="RubricsSession" placeholder="Session">
	</div>

</div>
</div>
<br><br>
<ul class="personal-details">
	<li style="margin-top:40px;margin-left:-20px">
		<ul class="column" style="padding-left:80px;padding-right:80px;">
			<li>
				<label for="Criteria">Criteria</label>
			</li>
		</ul>
	</li>
	<li style="margin-left:30px;border:1px solid lightblue">
		<ul class="column">
			<li style="padding-right:20px;padding-left:20px">
				<label for="Scale1">Excellent</label>
				<label for="Scale1" style="margin-top:5px;">4</label>
			</li>
		</ul>
	</li>
	<li>
		<ul class="column">
			<li style="padding-right:35px;padding-left:35px">
				<label for="Scale2">Good</label>
				<label for="Scale2" style="margin-top:5px;">3</label>
			</li>
		</ul>
	</li>
	<li>
		<ul class="column">
			<li style="padding-right:20px;padding-left:20px">
				<label for="Scale3">Moderate</label>
				<label for="Scale3" style="margin-top:5px;">2</label>
				<!-- <input id="DWT" type="text" name="DWT" class="field-style field-split25 align-left" placeholder="DWT" />	 -->
			</li>
		</ul>
	</li>
	<!-- <li>
		<ul class="column">
			<li style="padding-right:20px;padding-left:20px">
				<label for="TypeOfMEkW">Weak</label>
				 <input id="TypeOfMEkW" type="text" name="TypeOfMEkW" class="field-style field-split25 align-left" placeholder="Type of ME/kW" />
			</li>
		</ul>
	</li> -->
	<li>
		<ul class="column">
		<li style="padding-right:35px;padding-left:35px">
				<label for="Scale4">Weak</label>
				<label for="Scale4" style="margin-top:5px;">1</label>
			</li>
		</ul>
	</li>
	<li style="margin-right:50px;">
	<ul class="column">
		<li style="padding-right:41px;padding-left:41px">
				<label for="Scale5"> Fail </label>
				<label for="Scale5" style="margin-top:5px;">0</label>
			</li>
		</ul>
	</li>
    <li style="border:1px solid lightblue">
		<ul class="column">
			<li>
				<label for="weightage">Weightage</label>
				<!-- <input id="CompanyName" type="text" name="CompanyName" class="field-style field-split25 align-left" placeholder="Company Name" />	 -->
			</li>
		</ul>
	</li>
    <li>
		<ul class="column">
			<li style="padding-right:30px;padding-left:30px">
				<label for="marks">Mark Given</label>
				<!-- <input id="CompanyName" type="text" name="CompanyName" class="field-style field-split25 align-left" placeholder="Company Name" />	 -->
			</li>
		</ul>
	</li>
    <li>
		<ul class="column">
			<li style="padding-right:30px;padding-left:30px">
				<label for="final">Final Marks</label>
				<!-- <input id="CompanyName" type="text" name="CompanyName" class="field-style field-split25 align-left" placeholder="Company Name" />	 -->
			</li>
		</ul>
	</li>
</ul>
</div>



<!-- FORM UNTUK ADD -->
<div class="AddNew">
<ul class="input" id="input"style="margin-top:20px;margin-left:-20px">
	<li>
		<textarea name="Criteria" id="" cols="26" rows="4"></textarea>
	</li>
	<li style="margin-left:30px;border:1px solid lightblue">
		<ul class="column">
			<li >
			<textarea name="Scale1" id="Scale1" cols="12" rows="4"></textarea>
			</li>
		</ul>
	</li>
	<li>
		<ul class="column">
			<li>
			<textarea name="Scale2" id="Scale2" cols="12" rows="4"></textarea>
			</li>
		</ul>
	</li>
	<li>
		<ul class="column">
		<li>
			<textarea name="Scale3" id="Scale3" cols="12" rows="4"></textarea>
			</li>
		</ul>
	</li>
	<li>
		<ul class="column">
		<li>
			<textarea name="Scale4" id="Scale4" cols="12" rows="4"></textarea>
			</li>
		</ul>
	</li>
	<li style="margin-right:50px;">
		<ul class="column">
		<li>
			<textarea name="Scale5" id="Scale5" cols="12" rows="4"></textarea>
			</li>
		</ul>
	</li>
    <li style="border:1px solid lightblue">
		<ul class="column">
		<li style="padding-right:25px;padding-left:25px"><br>
				<input type="text" name="weightage" id="weightage"style="width:220%;margin-left:-20px;float:left;padding-right:50px">
			</li>
		</ul>
	</li>
    <li>
		<ul class="column">
			<li style="padding-right:30px;padding-left:30px"><br>
				<input type="text" name="marks" id="marks"style="width:220%;margin-left:-20px;float:left;padding-right:50px">
			</li>
		</ul>
	</li>
    <li>
		<ul class="column">
		<li style="padding-right:30px;padding-left:40px"><br>
				<input type="text" name="final" id="final"style="width:220%;margin-left:-20px;float:left;padding-right:50px">
			</li>
		</ul>
	</li>
</ul>
	<div>
		<div class="add">
			<br>
			<button type="button"href="#"class="btn-primary">+</button>
		</div>
	</div>
<div>
	<br><br>
	<div class="text-center">
			<input type="submit" value="Submit" class="btn-success" style="padding:10px;margin-left:50px;width:50%" />
	</div>
</div>
</div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

  <script type="text/javascript">
	//   $('.addNew').on('click',function(){
	// 	addNew();
	//   });
	//   function addNew(){
	// 	  var addNew= '<div><ul class="input" id="input"style="margin-top:20px;margin-left:-20px"><li><textarea name="Criteria[]" id="" cols="26" rows="4"></textarea></li><li style="margin-left:30px;border:1px solid lightblue"><ul class="column"><li ><textarea name="Scale1[]" id="Scale1" cols="12" rows="4"></textarea></li></ul></li><li><ul class="column"><li><textarea name="Scale2[]" id="Scale2" cols="12" rows="4"></textarea></li></ul></li><li><ul class="column"><li><textarea name="Scale3[]" id="Scale3" cols="12" rows="4"></textarea></li></ul></li><li><ul class="column"><li><textarea name="Scale4[]" id="Scale4" cols="12" rows="4"></textarea></li></ul></li><li style="margin-right:50px;"><ul class="column"><li><textarea name="Scale5[]" id="Scale5" cols="12" rows="4"></textarea></li></ul></li> <li style="border:1px solid lightblue"><ul class="column"><li style="padding-right:25px;padding-left:25px"><br><input type="text" name="weightage[]" id="weightage"style="width:220%;margin-left:-20px;float:left;padding-right:50px"></li></ul></li><li><ul class="column"><li style="padding-right:30px;padding-left:30px"><br><input type="text" name="marks[]" id="marks"style="width:220%;margin-left:-20px;float:left;padding-right:50px"></li></ul></li> <li><ul class="column"><li style="padding-right:30px;padding-left:40px"><br><input type="text" name="final[]" id="final"style="width:220%;margin-left:-20px;float:left;padding-right:50px"></li></ul></li></ul><div><div class="remove"><br><button type="button" class="remove btn btn-danger">-</button> </div></div><div><br><br></div></div>';
	//   $('.addNew').append(addNew);
	//   };
	//   $('.remove').live('click',function(){
	// 	  $(this).parent().remove();
	//   });

	$(document).ready(function(){
   $( ".btn-primary" ).click(function(){
      var $clone = $( "ul.input" ).first().clone();
      $clone.append( "<button type='button' class='remove-row'>-</button>" );
      $clone.insertBefore( "div.add" );
   });

   $( ".AddNew" ).on("click", ".remove-row", function(){
      $(this).parent().remove();
   });
});
  </script>
@endsection
