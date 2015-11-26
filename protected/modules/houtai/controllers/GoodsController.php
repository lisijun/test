<?php 
/*
 * 后台商品管理控制器
 * */
class GoodsController extends Controller{
	/**
	 * 商品列表信息展示
	 */
	function actionShow(){
		$this->renderPartial('show');
	}
	/*
	 * 添加商品
	 * */
	function actionAdd(){
		$this->renderPartial('add');
	}
	/*
	 * 修改商品
	 * */
	function actionUpdate(){
		$this->renderPartial('update');
	}
	/*
	 * 删除商品
	 * */
	function actionDel(){
		$this->renderPartial('del');
	}
}
?>