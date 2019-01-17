<?php
/**
 * Ffuenf_CheckoutHideShipping extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2019 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

class Ffuenf_CheckoutHideShipping_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     */
    public function controllerActionPostdispatchCheckoutOnepageSaveBilling(Varien_Event_Observer $observer)
    {
        if (!Mage::helper('ffuenf_checkouthideshipping')->isExtensionActive()) {
            return;
        }
        /* @var $controller Mage_Checkout_OnepageController */
        $controller = $observer->getEvent()->getControllerAction();
        $response = Mage::app()->getFrontController()->getResponse()->getBody(true);
        if (!isset($response['default'])) {
            return;
        }
        $response = Mage::helper('core')->jsonDecode($response['default']);
        if (isset($response['goto_section']) && $response['goto_section'] == 'shipping_method') {
            $response['goto_section'] = 'payment';
            $response['update_section'] = array(
                'name' => 'payment-method',
                'html' => $this->_getPaymentMethodsHtml()
            );
            $controller->getResponse()->setBody(Mage::helper('core')->jsonEncode($response));
        }
    }

    /**
     * @return string
     * @throws Mage_Core_Exception
     */
    protected function _getPaymentMethodsHtml()
    {
        $layout = Mage::getModel('core/layout');
        $update = $layout->getUpdate();
        $update->load('checkout_onepage_paymentmethod');
        $layout->generateXml();
        $layout->generateBlocks();
        return $layout->getOutput();
    }
}
