<?php


class Mage_Jostpay_Block_Standard_Redirect extends Mage_Core_Block_Abstract
{
    protected function _toHtml()
    {
        $standard = Mage::getModel('jostpay/standard');
        $form = new Varien_Data_Form();
        $form->setAction($standard->getJostpayUrl())
            ->setId('jostpay_standard_checkout')
            ->setName('jostpay_standard_checkout')
            ->setMethod('POST')
            ->setUseContainer(true);
		$form_fields=$standard->setOrder($this->getOrder())->getStandardCheckoutFormFields();
        foreach ($form_fields as $field => $value) {
            $form->addField($field, 'hidden', array('name' => $field, 'value' => $value));
        }
        $html = '<html><body>
        ';
        $html.= $this->__('You will be redirected to Jostpay in a few seconds.');
        $html.= $form->toHtml();
        $html.= '
        <script type="text/javascript">document.getElementById("jostpay_standard_checkout").submit();</script>';
        $html.= '</body></html>';

        return $html;
    }
}