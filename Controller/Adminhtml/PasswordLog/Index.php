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
namespace Ripen\CustomerPassword\Controller\Adminhtml\PasswordLog;

use Ripen\CustomerPassword\Controller\Adminhtml\AbstractPasswordLog;
use Magento\Framework\Controller\ResultInterface;

/**
 * Class Index
 *
 * @package Ripen\CustomerPassword\Controller\Adminhtml\PasswordLog
 */
class Index extends AbstractPasswordLog
{
    /**
     * Index action
     *
     * @return ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu("Magento_Backend::system");
        $resultPage->getConfig()->getTitle()->prepend(__("Password Log"));
        return $resultPage;
    }
}
