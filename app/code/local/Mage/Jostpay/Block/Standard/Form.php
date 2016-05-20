<?php


class Mage_Jostpay_Block_Standard_Form extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        $this->setTemplate('jostpay/standard/form.phtml');
        parent::_construct();
    }
}