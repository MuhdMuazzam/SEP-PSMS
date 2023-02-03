@extends('master')
@section('content')

<div class="row-2">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner" style="height:500px;">
			<div class="carousel-item active">
			  <img src="https://fk.ump.edu.my/images/academic/img-bcs.jpg" height="600" class="d-block w-100" alt="1">
			</div>
			<div class="carousel-item">
			  <img src="https://fk.ump.edu.my/images/academic/img-bcn.jpg" height="600" class="d-block w-100" alt="2">
			</div>
			<div class="carousel-item">
			  <img src="https://fk.ump.edu.my/images/academic/img-bcg.jpg"  height="600" class="d-block w-100" alt="3">
			</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
		
		<div class="container">
		<br>
		<div class="row row-cols-1 row-cols-md-2 g-4">
		  <div class="col">
			<div class="card" style="background-color:#DCDCDC;">
			  <div class="card-body">
				 <a href="user";  style="text-align:center;text-decoration: none;"><h3 class="card-title">Manage User</h3></a>
			  </div>
			</div>
		  </div>
		  <div class="col">
			<div class="card" style="background-color:#DCDCDC;">
			 <div class="card-body">
			 <a href="ind";  style="text-align:center;text-decoration: none;"><h3 class="card-title">Manage Internal Evaluation</h3></a>
			  </div>
			</div>
		  </div>
		  <div class="col">
			<div class="card" style="background-color:#DCDCDC;">
			  <div class="card-body">
				<a href="rub";  style="text-align:center;text-decoration: none;"><h3 class="card-title">Manage Rubric</h3></a>
			  </div>
			</div>
		  </div>
		  <div class="col">
			<div class="card" style="background-color:#DCDCDC;">
			 <div class="card-body">
				<a href="ind";  style="text-align:center;text-decoration: none;"><h3 class="card-title">Manage Industry Evaluation</h3></a>
			  </div>
			</div>
		  </div>
		  <div class="col">
			<div class="card" style="background-color:#DCDCDC;">
			  <div class="card-body">
				<a href="top";  style="text-align:center;text-decoration: none;"><h3 class="card-title">Set Schedule</h3></a>
			  </div>
			</div>
		  </div>
		  <div class="col">
			<div class="card" style="background-color:#DCDCDC;">
			  <div class="card-body">
			  <a href="rep";  style="text-align:center;text-decoration: none;"><h3 class="card-title">Report & Progress</h3></a>
			  </div>
			</div>
		  </div>
		</div>
		</div>
		
		<div class="container">
		<br>
		
		<div class="card text-center">
		  <div class="card-header" style="color:#00008B;font-weight: bold;font-size:40px;">
			FK PSM MANAGEMENT SYSTEM
		  </div>
		  <div class="card-body" style="background-color: #4169E1">
			<h5 class="card-title" style="color:white;font-weight:bold;font-size:20px;">About PSMS</h5>
			<br>
		
			<p class="card-text" style="color:white;font-size:18px;">PSM Management System to enable FK to manage PSM students in systematic way. They focus to the process of SV hunting and SV title proposal. This includes the management of PSM title, 
                lecturer expertise and student interest and skill as well as to manage student request tool to develop the PSM system. </p>
			<br>
<!-- 		
		  </div>
		  <div class="card-footer text-muted">
			<div class="copyright text-center">
              <p>
                &copy; Copyright <strong>FK PSM</strong>. All Rights Reserved
              </p>
            </div>
		  </div> -->
		</div>
		</div>
		</div><hr>
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