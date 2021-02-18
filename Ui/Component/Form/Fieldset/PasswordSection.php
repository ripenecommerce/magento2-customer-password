<?php
/**
 * Do not edit or add to this file if you wish to upgrade to newer versions in the future.
 * If you wish to customise this module for your needs.
  *
 * @category   Ripen
 * @package    Ripen_CustomerPassword
 * @copyright  Copyright (c) 2018 Kiwi Commerce Ltd (https://kiwicommerce.co.uk/)
 * @copyright  Copyright (c) Ripen (https://ripen.com/)
 * @license    https://opensource.org/licenses/OSL-3.0
 */

//@codingStandardsIgnoreFile

namespace Ripen\CustomerPassword\Ui\Component\Form\Fieldset;

use Ripen\CustomerPassword\Helper\Data;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Ui\Component\Form\Fieldset;

class PasswordSection extends Fieldset
{
    /**
     * CustomerPassword data
     *
     * @var Data
     */
    protected $helper;

    /**
     * PasswordSection constructor.
     * @param ContextInterface $context
     * @param array $components
     * @param array $data
     * @param Data $helper
     */
    public function __construct(
        ContextInterface $context,
        $components = [],
        array $data = [],
        Data $helper
    ) {
        parent::__construct($context, $components, $data);
        $this->helper = $helper;
    }

    /**
     * @throws LocalizedException
     */
    public function prepare()
    {
        parent::prepare();
        if (!$this->helper->isEnablePasswordSection()) {
            $this->_data['config']['componentDisabled'] = true;
        }
    }
}
