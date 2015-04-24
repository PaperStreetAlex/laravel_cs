@extends('main')
@section('home')
	<script type="text/javascript" src="dist/js/slimscroll.js"></script>
	<script type="text/javascript" src="dist/js/fullpage.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#home').fullpage({
				anchors: ['curriculum',''],
				navigation: true,
				navigationPosition: 'left',
				navigationTooltips: ['', ''],
				scrollOverflow: true,
				slidesNavigation: true,
			});
				
		});
	</script>
@stop

@section('content')
	<div id="home">
	<div class="section section-1">
		<div class="slide slide-1">
			<div class="first container">
				<div class="curriculum">
					<p class="caption-7 text-center">BS-CS</p>
					<p class="caption-5 text-center">(Bachelor of Science in Computer Science)</p>
					<p class="paragraph-2 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="paragraph-2 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
				</div>
			</div>
		</div>
		<div class="slide slide-1">
			<div class="first container">
				<div class="curriculum">
					<p class="caption-7 text-center">BS-IT</p>
					<p class="caption-5 text-center">(Bachelor of Science in Information Technology)</p>
					<p class="paragraph-2 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="paragraph-2 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				</div>
			</div>
		</div>
		<div class="slide slide-1">
			<div class="first container">
				<div class="curriculum">
					<p class="caption-7 text-center">BS-ICT</p>
					<p class="caption-5 text-center">(Bachelor of Science in Information and Communication Technology)</p>
					<p class="paragraph-2 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="paragraph-2 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
		<div class="slide slide-1">
			<div class="first container">
				<div class="curriculum">
					<p class="caption-7 text-center">ACT-MT</p>
					<p class="caption-5 text-center">(Bachelor of Science in Computer Science)</p>
					<p class="paragraph-2 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="paragraph-2 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
		<div class="slide slide-1">
			<div class="first container">
				<div class="curriculum">
					<p class="caption-7 text-center">MS-IT</p>
					<p class="caption-5 text-center">(Bachelor of Science in Computer Science)</p>
					<p class="paragraph-2 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="paragraph-2 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="section3">
		<div class="first container">
			<p class="caption-2 text-center">Student Orgs</p>
			<p class="paragraph-3 text-center">Every undergraduate course belongs to an organization, Check the organization you are under. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
			<p class="padding-50 text-center"><a href="{{ url()."/org" }}" class="btn-special">Student Orgs</a></p>
		</div>
		
@stop
