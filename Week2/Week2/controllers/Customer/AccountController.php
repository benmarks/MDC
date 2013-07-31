<?php
require_once 'Mage/Customer/controllers/AccountController.php';
class BlueAcorn_Week2_Customer_AccountController extends Mage_Customer_AccountController {
	public function logoutAction()
	{
		$this->_getSession()->logout()
				->setBeforeAuthUrl(Mage::getUrl("furniture.html"));

		$this->_redirect('*/*/logoutSuccess');
	}
}