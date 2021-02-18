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
namespace Ripen\CustomerPassword\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface PasswordLogRepositoryInterface
 *
 * @package Ripen\CustomerPassword\Api
 */
interface PasswordLogRepositoryInterface
{
    /**
     * Save PasswordLog
     *
     * @param  \Ripen\CustomerPassword\Api\Data\PasswordLogInterface $passwordLog
     * @return \Ripen\CustomerPassword\Api\Data\PasswordLogInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Ripen\CustomerPassword\Api\Data\PasswordLogInterface $passwordLog
    );

    /**
     * Retrieve PasswordLog
     *
     * @param  string $passwordlogId
     * @return \Ripen\CustomerPassword\Api\Data\PasswordLogInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($passwordlogId);

    /**
     * Retrieve PasswordLog matching the specified criteria.
     *
     * @param  \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Ripen\CustomerPassword\Api\Data\PasswordLogSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    );
}
