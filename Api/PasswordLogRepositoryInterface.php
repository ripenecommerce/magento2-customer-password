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

use Ripen\CustomerPassword\Api\Data\PasswordLogInterface;
use Ripen\CustomerPassword\Api\Data\PasswordLogSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;

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
     * @param  PasswordLogInterface $passwordLog
     * @return PasswordLogInterface
     * @throws LocalizedException
     */
    public function save(
        PasswordLogInterface $passwordLog
    );

    /**
     * Retrieve PasswordLog
     *
     * @param  string $passwordlogId
     * @return PasswordLogInterface
     * @throws LocalizedException
     */
    public function getById($passwordlogId);

    /**
     * Retrieve PasswordLog matching the specified criteria.
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return PasswordLogSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    );
}
