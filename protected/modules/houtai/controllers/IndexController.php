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
	/*
	 * 制作一个索引方法index,引入frameset模板
	 * */
	function actionIndex(){
		
		$this->renderPartial('index');
	}
}

?>