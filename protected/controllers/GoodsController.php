<?php 
/*
 * ǰ̨goods������
 * 
 * 
 * */
class GoodsController extends Controller{
	/*
	 * ��Ʒ��ϸ��Ϣ
	 * 
	 * */
	
	function actionDetail(){

	//	$this->renderpartial('detail');   renderpartial����Ⱦ��ͼ
	$this->render('detail');
	}
	
	/*
	 * ��Ʒ�б���Ϣ
	 * */
	function actionCategory(){
		
	//	$this->renderpartial('category');   renderpartial����Ⱦ��ͼ
	$this->render('category');   
   
	}
}
?>