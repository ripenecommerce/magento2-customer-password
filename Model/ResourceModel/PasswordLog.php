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
namespace Ripen\CustomerPassword\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class PasswordLog
 *
 * @package Ripen\CustomerPassword\Model\ResourceModel
 */
class PasswordLog extends AbstractDb
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('kiwicommerce_customer_password_log', 'passwordlog_id');
    }
}
