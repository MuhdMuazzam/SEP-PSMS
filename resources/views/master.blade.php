<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>PSMS</title>

		<style>
		body {
			background-image: url('https://t4.ftcdn.net/jpg/01/37/47/83/360_F_137478365_Hqd1xK6UdA0jyvpATtgwChSLsG9eVlRc.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;

		}
			.dropbtn {
			  background-color: #FFFACD;
			  color: black;
			  font-weight: bold;
			  padding: 10px;
			  padding-left: 25px;
			  padding-right: 25px;
			  font-size: 15px;
			  border-style: 2px outset;
			  cursor: pointer;
			}

			.dropdown {
			  position: relative;
			  display: inline-block;
			}

			.dropdown-content {
			  display: none;
			  position: absolute;
			  right: 0;
			  background-color: #f9f9f9;
			  min-width: 160px;
			  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			  z-index: 1;
			}

			.dropdown-content a {
			  color: black;
			  background-color: #FFF8DC;
			  padding: 10px 16px;
			  text-decoration: none;
			  border: 1px solid black;
			  display: block;
			}

			.dropdown-content a:hover {background-color: #f1f1f1;}

			.dropdown:hover .dropdown-content {
			  display: block;
			}

			.dropdown:hover .dropbtn {
			  background-color: #F5DEB3;
			}
		</style>

    </head>
    <body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#F8F8FF">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV5vj7-OoD68ja4_3_Ocyp86-yJ86_My7LDNHI5nTvk3ZfgjhHdcKsVWGWbGNQWkSlGEs&usqp=CAU" alt="" width="60" height="60" class="d-inline-block align-text-top">
			<center><a class="navbar-brand" style="color: black;font-style: oblique;font-weight: bold;font-size:25px;" >PSM Management System</a>
			</a></center>
		</div>
		</div>
	</nav>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#4169E1">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">

				 <a class="nav-link active" aria-current="page" style="color:white;font-size:17px;" href="/">Home</a>
				</li>
				<li class="nav-item">

				  <a class="nav-link active" aria-current="page" style="color:white;font-size:17px;" href="rub">Rubrics</a>
				</li>
				<li class="nav-item">

				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#"  style="color:white;font-size:17px;" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Evaluation
				  </a>
				  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
					<li><a class="dropdown-item" href="eva">Student Evaluation</a></li>
					<li><a class="dropdown-item" href="/ind">Industry Evaluation</a></li>
					<li><a class="dropdown-item" href="top">Set Schedule</a></li>
				  </ul>
				</li>

				<li class="nav-item">

				  <a class="nav-link active" aria-current="page" style="color:white;font-size:17px;" href="rep">Report</a>
				</li>

				<li class="nav-item">

				  <a class="nav-link active" aria-current="page" style="color:white;font-size:17px;float:right;" href="user">User</a>
				</li>
				<li class="nav-item">
				@if (Route::has('login'))
				<li class="nav-item">
                    @auth
                        <a href="{{ url('/home') }}" class="nav-link active" aria-current="page" style="color:white;font-size:17px;" >Log Out</a>
				</li>
                    @else
					<li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link active" aria-current="page" style="color:white;font-size:17px;" >Log in</a>
					</li>
                        @if (Route::has('register'))
							<li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link active" aria-current="page" style="color:white;font-size:17px;" >Register</a>

						</li>
						@endif
                    @endauth
                </div>
            @endif

		</div>


	</nav>
	<article>
		<div class="container">
		<br>
		@yield('content')

		</div>
	</article>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	</body>

</html>
