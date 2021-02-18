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

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface PasswordLogSearchResultsInterface
 *
 * @package Ripen\CustomerPassword\Api\Data
 */
interface PasswordLogSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get PasswordLog list.
     *
     * @return PasswordLogInterface[]
     */
    public function getItems();

    /**
     * Set customer_id list.
     *
     * @param PasswordLogInterface[] $items
     *
     * @return $this
     */
    public function setItems(array $items);
}
