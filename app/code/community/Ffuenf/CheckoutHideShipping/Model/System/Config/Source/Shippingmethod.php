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
 * @copyright  Copyright (c) 2016 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

class Ffuenf_CheckoutHideShipping_Model_System_Config_Source_Shippingmethod
{
    public function toOptionArray()
    {
        $methods = array(array('value' => '', 'label' => Mage::helper('adminhtml')->__('--Please Select--')));
        $activeCarriers = Mage::getSingleton('shipping/config')->getActiveCarriers();
        foreach ($activeCarriers as $carrierCode => $carrierModel) {
            $options = array();
            if ($carrierMethods = $carrierModel->getAllowedMethods()) {
                foreach ($carrierMethods as $methodCode => $method) {
                    $code = $carrierCode . '_' . $methodCode;
                    $options[] = array('value' => $code, 'label' => $method . " ($code)");
                }
            }
            $carrierTitle = Mage::getStoreConfig('carriers/' . $carrierCode . '/title');
            $methods[] = array('value' => $options, 'label' => $carrierTitle);
        }
        return $methods;
    }
}
