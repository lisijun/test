<?php 
/*
 * 前台goods控制器
 * 
 * 
 * */
class GoodsController extends Controller{
	/*
	 * 商品详细信息
	 * 
	 * */
	
	function actionDetail(){

	//	$this->renderpartial('detail');   renderpartial不渲染视图
	$this->render('detail');
	}
	
	/*
	 * 商品列表信息
	 * */
	function actionCategory(){
		
	//	$this->renderpartial('category');   renderpartial不渲染视图
	$this->render('category');   
   
	}
}
?>