<!DOCTYPE html>
<html lang="en">
	<head>
		<title>{{ ($page == 'home')?"Department of Computer Science":ucwords($page)." - Department of Computer Science"; }}</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link href="{{ url()."/favicon.ico" }}" rel="shortcut icon">
		<link href="{{ url()."/dist/css/spretche.css" }}" rel="stylesheet">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ url()."/dist/css/css.css" }}">
		<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
		<![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> 
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		@yield('home');
	</head>
	<body>
		{{ "<input type='hidden' id='url' value='".url()."'>" }}
		<div class="nav">
			<div class="">
				<a href="{{ url('/'); }}" class="logo"><img src="dist/img/logo.png" alt="USC-DCS"></a>
				<div class="navlinks">
					<ul>
						<li <?php echo ($page == 'home')?'class="active"':''; ?> ><a href="{{ url()."/" }}">&nbsp; Home &nbsp;</a></li>
						<li <?php echo ($page == 'about')?'class="active"':''; ?> ><a href="{{ url()."/about" }}">About us</a></li>
						<li <?php echo ($page == 'curriculum')?'class="active"':''; ?> ><a href="{{ url()."/curriculum" }}">Curriculum</a>
							<ul class="dropdown">
								<li><a href="{{ url()."/curriculum#curriculum" }}">BS-CS</a></li>
								<li><a href="{{ url()."/curriculum#curriculum/1" }}">BS-IT</a></li>
								<li><a href="{{ url()."/curriculum#curriculum/2" }}">BS-ICT</a></li>
								<li><a href="{{ url()."/curriculum#curriculum/3" }}">ACT-MT</a></li>
								<li><a href="{{ url()."/curriculum#curriculum/4" }}">MS-IT</a></li>
							</ul>
						</li>
						<li <?php echo ($page == 'faculties')?'class="active"':''; ?> ><a href="{{ url().'/faculties' }}">Faculties</a></li>
						<li <?php echo ($page == 'student organization')?'class="active"':''; ?> ><a href="{{ url().'/org' }}">Student Orgs</a></li>
						<li><a href="{{ url('/#signin') }}">Sign In</a></li>
					</ul>
				</div>
			</div>
		</div>
		@yield('content')
		<div class="footer">
			<div class="col-10"><a href="" target="_blank"><i class="fa fa-facebook-square"></i> <small>USC-DCS FB PAGE</small></a></div>
			<div class="col-10"><a href="" target="_blank"><i class="fa fa-facebook-square"></i> <small>DYNACOM FB PAGE</small></a></div>
			<div class="col-10"><a href="" target="_blank"><i class="fa fa-facebook-square"></i> <small>DATALOGICS FB PAGE</small></a></div>
			<div class="col-10"><a href="" target="_blank"><i class="fa fa-institution"></i> <small>USC WEBSITE</small></a></div>
			<div class="foot col-100">
				<div class="container padding-b-20 text-center">
					A Laravel / CES Project by : | All Rights Reserved 2015 | University of SAN carlos - Department of Computer Science
				</div>
			</div>
		</div>
	</div>
</div>
	</body>
</html>