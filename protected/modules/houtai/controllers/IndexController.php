<?php
/*
 * ��̨����frameset���
 * 
 * */
class IndexController extends Controller{
	
	/*
	 * ��̨ͷ��
	 * */
	function actionHead(){
		
		$this->renderPartial('head');
	}
	/*
	 * ��̨���
	 * */
	function actionLeft(){
		
		$this->renderPartial('left');
		
	}
	/*
	 * ��̨�Ҳ�
	 * */
	function actionRight(){
		
		$this->renderPartial('right');
	}
	/*
	 * ����һ����������index,����framesetģ��
	 * */
	function actionIndex(){
		
		$this->renderPartial('index');
	}
}

?>