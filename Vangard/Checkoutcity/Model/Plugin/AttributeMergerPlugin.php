<?php

namespace Vangard\Checkoutcity\Model\Plugin;

class AttributeMergerPlugin
{
    public function afterMerge(\Magento\Checkout\Block\Checkout\AttributeMerger $subject, $result)
    {
        if (array_key_exists('city', $result)) {
            $result['city']['additionalClasses'] = 'vangard-city';
        }

        return $result;
    }
}