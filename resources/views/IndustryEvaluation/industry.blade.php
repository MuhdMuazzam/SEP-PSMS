@extends('master')
@section('content')

<center>

        <div class="container">
            <!-- to alert the users -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-warning" role="alert">
                    {{session('error')}}
                </div>
            @endif

</center>

<style>
    .fixedbutton {
        position: fixed;
        bottom: 30px;
        right: 30px;
    }

    .fontButton {
        color: black;
        text-decoration:none
    }
</style>

<p class="h2">Manage Industry Evaluation</p>

<table class="table table-hover table-bordered" style="border: 2px solid grey;">
  <thead class="table-primary">
  <tr style="text-align:center;">
	<th>No.</th>
    <th>Name</th>
	<th>Matric ID</th>
	<th>Industry Mark</th>
	<th>Action</th>
	</tr>
  </thead>
  <tbody style="background-color:#FFFAF0" >
    @foreach ($toplist as $i)
	<tr>
	<td style="text-align:center;">{{$i['ranking']}}</td>
	<td>{{$i['student_name']}}</td>
	<td style="text-align:center;">{{$i['student_ID']}}</td>
	<td style="text-align:center;">{{$i['industry_mark']}}</td>
	<td style="text-align:center;">
    <div class="btn-group">

        @if ($i['industry_mark'] == null)
	    <button id="indAddMark" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <a href="indAddMark/{{$i['student_ID']}}/add" class="fontButton">
	        Add Mark
            </a>
	    </button>
        <button id="indEditMark" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>
            <a href="indAddMark/{{$i['student_ID']}}/edit" class="fontButton">
	        Edit Mark
            </a>
	    </button>
        @elseif ($i['industry_mark'] != null)
	    <button id="indAddMark" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>
            <a href="indAddMark/{{$i['student_ID']}}/add" class="fontButton">
	        Add Mark
            </a>
	    </button>
        <button id="indEditMark" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <a href="indAddMark/{{$i['student_ID']}}/edit" class="fontButton">
	        Edit Mark
            </a>
	    </button>
        @endif
    </div>
    </td>
	</tr>
    @endforeach
  </tbody>
</table>

<a href="/">
    <button id="indBack" type="button" class="btn btn-primary fixedbutton">Back to Homepage</button>
</a>

<center>
		<footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo"><br>
                  <h2><span>FK</span> PSM</h2>
                </div>

                <p class="mt-4">Centre of excellence for management</p>
                <p style="margin-top:-10px;"> and human capital development </p>
                <div class="footer-icons">

                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head"><br>
			  <h2><span>CONTACT</span> US</h2>
                <p class="mt-4">
                  DEVELOPED BY PRIME 2.0
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +08 345 2312</p>
                  <p><span>Email:</span> fk@mail.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="img">
                  <a href="#"><img style="width:300px;height:300px;" src="logo.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>PRIME</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->
  </center>

@endsection
