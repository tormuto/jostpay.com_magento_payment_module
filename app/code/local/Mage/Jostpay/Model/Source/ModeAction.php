<?php

class Mage_Jostpay_Model_Source_ModeAction
{
    public function toOptionArray()
    {
        return array(
            array('value' => Mage_Jostpay_Model_Config::MODE_LIVE, 'label' => Mage::helper('jostpay')->__('Live')),
            array('value' => Mage_Jostpay_Model_Config::MODE_TEST, 'label' => Mage::helper('jostpay')->__('Test')),
        );
    }
}



