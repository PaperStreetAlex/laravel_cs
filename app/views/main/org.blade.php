@extends('main')
@section('home')
	<script type="text/javascript" src="dist/js/slimscroll.js"></script>
	<script type="text/javascript" src="dist/js/fullpage.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#home').fullpage({
				anchors: ['dynacom','datalogics',''],
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
		<div class="section">
			<div class="slide ">
				<div class="first container">
					<div class="">
						<p class="caption-1 text-center">Dynamic Communication Society</p>
						<p class="paragraph-1 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="paragraph-1 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="first">
					<div class="img-timeline">
						<img src="{{ url()."/dist/img/dynacom-1.png"}}" alt="Dynacom">
					</div>	
					<div class="container">
						<p class="caption-3 text-center">Dynacom 1.0</p>
						<p class="paragraph-1 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="first">
					<div class="img-timeline">
						<img src="{{ url()."/dist/img/dynacom-2.png"}}" alt="Dynacom">
					</div>	
					<div class="container">
						<p class="caption-3 text-center">Dynacom 2.0</p>
						<p class="paragraph-1 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="first">
					<div class="img-timeline">
						<img src="{{ url()."/dist/img/dynacom-3.png"}}" alt="Dynacom">
					</div>	
					<div class="container">
						<p class="caption-3 text-center">Dynacom 3.0</p>
						<p class="paragraph-1 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="slide ">
				<div class="first container">
					<div class="">
						<p class="caption-1 text-center">Datalogics</p>
						<p class="paragraph-1 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="paragraph-1 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="first">
					<div class="img-timeline">
						<img src="{{ url()."/dist/img/dynacom-1.png"}}" alt="Dynacom">
					</div>	
					<div class="container">
						<p class="caption-3 text-center">Datalogics 1.0</p>
						<p class="paragraph-1 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="first">
					<div class="img-timeline">
						<img src="{{ url()."/dist/img/datalogics-2.png"}}" alt="Dynacom">
					</div>	
					<div class="container">
						<p class="caption-3 text-center">Datalogics 2.0</p>
						<p class="paragraph-1 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="first">
					<div class="img-timeline">
						<img src="{{ url()."/dist/img/datalogics-3.png"}}" alt="Dynacom">
					</div>	
					<div class="container">
						<p class="caption-3 text-center">Datalogics 3.0</p>
						<p class="paragraph-1 max-width-750">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
