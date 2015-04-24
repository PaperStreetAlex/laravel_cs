<?php

class FacultyController extends \BaseController {
	function index(){
		return View::make('faculty.home');
	}
}
