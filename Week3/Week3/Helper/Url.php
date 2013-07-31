<?php

class BlueAcorn_Week3_Helper_Url extends Mage_Checkout_Helper_Url {
		/**
     * Retrieve checkout url
     *
     * @return string
     */
    public function getCheckoutUrl()
    {
        return $this->_getUrl('checkout');
    }
}