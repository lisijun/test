<?php
/*
 * 
 *user������ 
 * */
class UserController extends Controller{
	/*
	 * �û�ע�᷽��
	 * 
	 * */	
	function actionRegister(){
		
	  $this -> render('register');
		
	}
	/*
	 * �û���½����
	 * 
	 * */
    function actionLogin(){
    	$this -> render('login');
    }
}
?>
