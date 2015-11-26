<?php
/*
 * 后台整体frameset框架
 * 
 * */
class IndexController extends Controller{
	
	/*
	 * 后台头部
	 * */
	function actionHead(){
		
		$this->renderPartial('head');
	}
	/*
	 * 后台左侧
	 * */
	function actionLeft(){
		
		$this->renderPartial('left');
		
	}
	/*
	 * 后台右侧
	 * */
	function actionRight(){
		
		$this->renderPartial('right');
	}
}

?>