<?php

class HomeController extends BaseController{
	function __construct(){
		$this->beforeFilter('@filterauth');
	}
	function filterauth(){
		if(Auth::user()->check()){
			return Redirect::to('student');
		}
		if(Auth::teacher()->check()){
			return Redirect::to('faculty');
		}
	}
	function index(){
		$body['page'] = 'home';
		return View::make('main.home',$body);
	}
	function about(){
		$body['page'] = 'about';
		return View::make('main.about',$body);
	}
	function curriculum(){
		$body['page'] = 'curriculum';
		return View::make('main.curriculum',$body);
	}
	function faculties(){
		$body['page'] = 'faculties';
		$body['teachers'] = Teacher::orderBy('position','desc')->get();
		$body['total'] = count($body['teachers']);
		return View::make('main.faculty',$body);	
	}
	function org(){
		$body['page'] = 'student organization';
		return View::make('main.org',$body);	
	}
}
