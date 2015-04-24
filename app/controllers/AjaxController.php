<?php
class AjaxController extends BaseController {
	function index(){

	}
	function ajax($action = NULL){
		if($action == 'login'){
			if (Auth::user()->attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))){
  	  			return "<script>window.location.href='".url()."/student'</script>";
			}else{
				if (Auth::teacher()->attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))){
  	  				return "<script>window.location.href='".url()."/faculty'</script>";
				}else{
					return "Incorrect ID number / Password";
				}
			}
		}
	}
}
