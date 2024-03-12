<?php
/**
 * Created by Ashish Ranade
 * Developed by Ashish Ranade
 * File: Info.php
 * Date: 5/9/2021
 * Time: 10:56 AM
 */

namespace ASolutions\CustomPaymentGateway\Block;

use Magento\Framework\Phrase;

class Info extends \Magento\Payment\Block\ConfigurableInfo
{
    /**
     * Created By: ASolutions Ranade
     * getLabel
     * @param string $field
     * @return Phrase|string
     */
    protected function getLabel($field)
    {
        return __($field);
    }

    /**
     * Created By: Ashish Ranade
     * getValueView
     * @param string $field
     * @param string $value
     * @return Phrase|string
     */
    protected function getValueView($field, $value)
    {
        return parent::getValueView($field, $value);
    }

}
