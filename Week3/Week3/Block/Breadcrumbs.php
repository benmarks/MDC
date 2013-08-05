<?php
class BlueAcorn_Week3_Block_Breadcrumbs extends Mage_Page_Block_Html_Breadcrumbs
{
    public function _construct()
    {
        $this->addCrumb('week3Crumb', array('label'=>'Google', 'title'=>'google', 'link'=>'http://google.com'));
        parent::_construct();
    }
}
