<?php 
/*
 * ��̨��Ʒ���������
 * */
class GoodsController extends Controller{
	/**
	 * ��Ʒ�б���Ϣչʾ
	 */
	function actionShow(){
		$this->renderPartial('show');
	}
	/*
	 * �����Ʒ
	 * */
	function actionAdd(){
		$this->renderPartial('add');
	}
	/*
	 * �޸���Ʒ
	 * */
	function actionUpdate(){
		$this->renderPartial('update');
	}
	/*
	 * ɾ����Ʒ
	 * */
	function actionDel(){
		$this->renderPartial('del');
	}
}
?>