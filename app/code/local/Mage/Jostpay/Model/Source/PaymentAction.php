<?php

class Mage_Jostpay_Model_Source_PaymentAction
{
    public function toOptionArray()
    {
        return array(
            array('value' => Mage_Jostpay_Model_Config::PAYMENT_TYPE_PAYMENT, 'label' => Mage::helper('jostpay')->__('PAYMENT')),
            array('value' => Mage_Jostpay_Model_Config::PAYMENT_TYPE_DEFERRED, 'label' => Mage::helper('jostpay')->__('DEFERRED')),
            array('value' => Mage_Jostpay_Model_Config::PAYMENT_TYPE_AUTHENTICATE, 'label' => Mage::helper('jostpay')->__('AUTHENTICATE')),
        );
    }
}