<?php
class BlueAcorn_Week2_Model_Cms_Observer extends Mage_Core_Controller_Varien_Action {
	public function cmsRedirect($observer) {
		$condition = $observer['condition'];
		if ($condition->getIdentifier() === "home") {
			Mage::app()->getFrontController()->getResponse()->setRedirect(Mage::getBaseUrl());
		}
	}
}