<?php
/*
 *后台控制器 
 * 
 * */
class ManagerController extends Controller{
	
	function actionLogin(){
		//echo "this is houtai";
		/*
		 * 渲染视图
		 * */
		$this->renderPartial('login');
	}
} 



?>