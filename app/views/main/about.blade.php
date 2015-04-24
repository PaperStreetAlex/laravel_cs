@extends('main')
@section('home')
	<script type="text/javascript" src="dist/js/slimscroll.js"></script>
	<script type="text/javascript" src="dist/js/fullpage.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#home').fullpage({
				navigation: true,
				navigationPosition: 'left',
				navigationTooltips: ['', ''],
				scrollOverflow: true
			});
				
		});
	</script>
@stop

@section('content')
	<div id="home">
	<div class="section" id="section1">
		<div class="first container">
			<p class="caption-1 text-center">Overview</p>
			<div class="max-width-750">
				<p class="paragraph-1">The Department of Computer Science was established in June 2010. The department used to belong to the former Department of Mathematics and Computer Science. The department is one of the ten departments under the College of Arts and Sciences. It is composed of three academic sections namely: Computer Science, Information Technology, and Information and Communications Technology.  The department is offering one (1) graduate program, that is, Master of Science in Information Technology (MSIT), and four (4) undergraduate programs, namely: Bachelor of Science in Computer Science (BSCS), Bachelor of Science in Information Technology (BSIT), Bachelor of Science in Information and Communications Technology (BSICT), and Associate in Computer Technology major in Multimedia Technology (ACT MT). Today, the department is located at Room LB463TC, 4th Floor, Lawrence Bunzel Building, Talamban Campus.</p>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.8522574525236!2d123.91146871166409!3d10.353696051244142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99894d1b6ae25%3A0xc2d9b9e99316c59d!2sUniversity+of+San+Carlos!5e0!3m2!1sen!2sph!4v1427793116405" width="100%" height="500" frameborder="0" style="border:0" scrolling="no"></iframe>
		</div>
		
@stop
