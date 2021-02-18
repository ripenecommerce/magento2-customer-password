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
namespace Ripen\CustomerPassword\Api\Data;

/**
 * Interface PasswordLogSearchResultsInterface
 *
 * @package Ripen\CustomerPassword\Api\Data
 */
interface PasswordLogSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get PasswordLog list.
     *
     * @return \Ripen\CustomerPassword\Api\Data\PasswordLogInterface[]
     */
    public function getItems();

    /**
     * Set customer_id list.
     *
     * @param  \Ripen\CustomerPassword\Api\Data\PasswordLogInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
