<?php
/**
 * Do not edit or add to this file if you wish to upgrade to newer versions in the future.
 * If you wish to customise this module for your needs.
  *
 * @category  Ripen
 * @package   Ripen_CustomerPassword
 * @copyright Copyright (c) 2018 Kiwi Commerce Ltd (https://kiwicommerce.co.uk/)
 * @copyright Copyright (c) Ripen, LLC (https://ripen.com/)
 * @license   https://opensource.org/licenses/OSL-3.0
 */
namespace Ripen\CustomerPassword\Observer\Backend;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Message\ManagerInterface;
use Ripen\CustomerPassword\Model\PasswordManagement;
use Ripen\CustomerPassword\Helper\Data;

/**
 * Class CustomerSaveObserver
 *
 * @package Ripen\CustomerPassword\Observer\Backend
 */
class CustomerSaveObserver implements ObserverInterface
{
    /**
     * @var PasswordManagement
     */
    protected $passwordManagement;

    /**
     * @var ManagerInterface
     */
    protected $messageManager;

    /**
     * Current customer
     */
    private $customer;

    /**
     * CustomerPassword data
     *
     * @var Data
     */
    protected $helper;

    /**
     * CustomerSaveObserver constructor.
     *
     * @param Context            $context
     * @param PasswordManagement $passwordManagement
     * @param Data               $helper
     */
    public function __construct(
        Context $context,
        PasswordManagement $passwordManagement,
        Data $helper
    ) {
        $this->passwordManagement = $passwordManagement;
        $this->messageManager = $context->getMessageManager();
        $this->helper = $helper;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        if (!$this->helper->isEnablePasswordSection()) {
            return;
        }
        $this->customer = $observer->getData('customer');
        $customer = $observer->getData('request')->getParam('customer');

        try {
            $customerId = $this->customer->getId();
            $passwords = isset($customer['password_section']) ? $customer['password_section'] : '';

            $password = isset($passwords['password']) ? $passwords['password'] : '';
            if (empty($password)) {
                return;
            }
            if (!$customerId) {
                throw new LocalizedException(
                    __('Customer ID should be specified.')
                );
            }
            $this->passwordManagement->changePasswordById($customerId, $password);
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }
    }
}
