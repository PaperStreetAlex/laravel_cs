@extends('main')
@section('home')
	<script type="text/javascript" src="dist/js/slimscroll.js"></script>
	<script type="text/javascript" src="dist/js/fullpage.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#home').fullpage({
				anchors: ['home', 'about','org','signin'],
				navigation: true,
				navigationPosition: 'left',
				navigationTooltips: ['', '', ''],
				scrollOverflow: true,
				slidesNavigation: true,
			});
			$("#sign-in").submit(function() {
				var url = $("#url").val();
				$.ajax({
		           type: "POST",
		           url: url+"/ajax/login",
		           data: $("#sign-in").serialize(),
		           beforeSend: function(){ $("#sign-in button").html('<i class="fa fa-spin"><i class="fa fa-circle-o-notch fa-2x"></fa></i>'); $("#sign-in input[type='password']").val('');},
		           success: function(data){$("#sign-in button").html('Sign In'); $(".error").html(data);}
        		});
				return false; 
			});			
		});
	</script>
@stop

@section('content')
<div id="home">
	<div class="section" id="section0">
		<div class="coat">
			<div class="first">
				<div class="container">
					<div class="hero">
						<img src="{{ url()."/dist/img/hero.png"; }}">
						<p> University of San Carlos </p>
						<div class="hero-option">
							<ul>
								<li><a href="#signin"><i class="fa fa-user"></i> Sign In</a></li>
								<li><a href="#about"> Read More <i class="fa fa-arrow-circle-down"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="section1">
		<div class="first container">
			<p class="caption-1 text-center">What we are & What we offer</p>
			<div class="max-width-750">
				<p class="paragraph-1">The Department of Computer Science was established in June 2010. The department used to belong to the former Department of Mathematics and Computer Science. The department is one of the ten departments under the College of Arts and Sciences. It is composed of three academic sections namely: Computer Science, Information Technology, and Information and Communications Technology.  The department is offering one (1) graduate program, that is, Master of Science in Information Technology (MSIT), and four (4) undergraduate programs, namely: Bachelor of Science in Computer Science (BSCS), Bachelor of Science in Information Technology (BSIT), Bachelor of Science in Information and Communications Technology (BSICT), and Associate in Computer Technology major in Multimedia Technology (ACT MT). Today, the department is located at Room LB463TC, 4th Floor, Lawrence Bunzel Building, Talamban Campus.</p>
			</div>
			<p class="text-center padding-50">
				<a href="{{ url()."/about";}}" class="btn btn-transparent btn-large">Read More</a>
			</p>
		</div>
	</div>

	<div class="section" id="section2">
		<div class="slide" id="slide1">
			<div class="section2-special"></div>
			<div class="first proirity-top">
				<div class="clearfix">
					<div class="col-50">
						<div class="img-frame">
							<div class="plastic">
								<p class="title">Dynacom</p>
								<p>2012 - 2013</p>
							</div>
							<img src="{{ url()."/dist/img/dynacom-1.png"; }}">
						</div>
					</div>
					<div class="col-50">
						<div class="img-frame">
							<div class="plastic">
								<p class="title">Dynacom</p>
								<p>2013 - 2014</p>
							</div>
							<img src="{{ url()."/dist/img/dynacom-2.png"; }}">
						</div>
					</div>
					<div class="col-50">
						<div class="img-frame">
							<div class="plastic">
								<p class="title">DATALOGICS</p>
								<p>2012 - 2013</p>
							</div>
							<img src="{{ url()."/dist/img/dynacom-2.png"; }}">
						</div>
					</div>
					<div class="col-50">
						<div class="img-frame">
							<div class="plastic">
								<p class="title">DATALOGICS</p>
								<p>2013 - 2014</p>
							</div>
							<img src="{{ url()."/dist/img/datalogics-2.png"; }}">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slide" id="slide2">
			<div class="section2-special"></div>
			<div class="first proirity-top">
				<div class="clearfix">
					<div class="col-50">
						<div class="img-frame">
							<div class="plastic">
								<p class="title">Dynacom</p>
								<p>2014 - 2015</p>
							</div>
							<img src="{{ url()."/dist/img/dynacom-3.png"; }}">
						</div>
					</div>
					<div class="col-50">
						<div class="img-frame">
							<div class="plastic">
								<p class="title">Datalogics</p>
								<p>2014 - 2015</p>
							</div>
							<img src="{{ url()."/dist/img/datalogics-3.png"; }}">
						</div>
					</div>
					<div class="col-100">
						<p class="caption-3 text-center">Student Organization</p>
						<p class="paragraph-1 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						<p class="text-center padding-30">
							<a href="{{ url()."/about";}}" class="btn btn-transparent btn-large">Read More</a>
						</p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="section" id="section3" style="position:relative;top:-15px;z-index:11">
		<div class="first container">
			<p class="caption-2 text-center">Sign In</p>
			<div class="max-width-500 form-block">
				<form id="sign-in">
					<p class="error"></p>
					<input type="text" name="username" placeholder="ID Number" required>
					<input type="password" name="password" placeholder="Password" required>
					<p class="text-center"><button class="btn btn-white">Sign In</button></p>
				</form>
			</div>
		</div>
@stop


<!--<div class="slide" id="slide1">
			<div class="intro">
				<h1>Clickable</h1>
				<p>
					You can even click on the navigation and jump directly to another section.
				</p>
			</div>
		</div>

	    <div class="slide" id="slide2">
			<h1>Slide 2</h1>
		</div>-->