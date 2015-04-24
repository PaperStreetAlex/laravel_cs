<?php

class StudentController extends \BaseController {
	function index(){
		return View::make('faculty.home');
	}
}
