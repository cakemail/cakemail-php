<?php
/**
 * AccountStatus
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cakemail API
 *
 * The Cakemail API exposes multiple APIs including Authentication, Marketing, Contact, Transactional, Analytic, Content, Account and Partner.
 *
 * The version of the OpenAPI document: 1.10.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cakemail\Lib\Model;
use \Cakemail\Lib\ObjectSerializer;

/**
 * AccountStatus Class Doc Comment
 *
 * @category Class
 * @description An enumeration.
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountStatus
{
    /**
     * Possible values of this enum
     */
    const TRIAL = 'trial';
    const ACTIVE = 'active';
    const SUSPENDED = 'suspended';
    const SUSPENDED_BY_PARTNER = 'suspended_by_partner';
    const DELETED = 'deleted';
    const INCOMPLETE = 'incomplete';
    const PENDING = 'pending';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TRIAL,
            self::ACTIVE,
            self::SUSPENDED,
            self::SUSPENDED_BY_PARTNER,
            self::DELETED,
            self::INCOMPLETE,
            self::PENDING,
        ];
    }
}


