<?php
/*
 * ��̨�����ļ�
 * 
 * 
 * */

class HoutaiModule extends CWebModule {

    public function init() {
        $this->setImport(array(
            'houtai.models.*',
            'houtai.components.*',
        ));

    }

    public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {
            return true;
        }
        else
            return false;
    }
}
