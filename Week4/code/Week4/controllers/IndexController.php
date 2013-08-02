<?php
class BlueAcorn_Week4_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        $comments = Mage::getModel('ba_week4/comment')->getCollection();
        foreach($comments as $comment) {
            echo $comment->getId() . '<br>';
        }
    }
}