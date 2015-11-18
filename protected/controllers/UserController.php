<?php
/*
 * 
 *user控制器 
 * */
class UserController extends Controller{
	/*
	 * 用户注册方法
	 * 
	 * */	
	function actionRegister(){
		
	  $this -> render('register');
		
	}
	/*
	 * 用户登陆方法
	 * 
	 * */
    function actionLogin(){
    	$this -> render('login');
    }
}
?>
