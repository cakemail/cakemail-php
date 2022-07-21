<?php
/**
 * DoubleOptIn
 *
 * PHP version 7.4
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
 * The version of the OpenAPI document: 1.11.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cakemail\Lib\Model;
use \Cakemail\Lib\ObjectSerializer;

/**
 * DoubleOptIn Class Doc Comment
 *
 * @category Class
 * @description Default: &#39;false&#39;  Send a double opt-in/confirmation email   - __new__ : send only if the email is new to the list   - __not_active__ : send only if the contact is not already active   - __true__ : send the email regardless of contact status   - __false__ : do not send the email
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DoubleOptIn
{
    /**
     * Possible values of this enum
     */
    public const TRUE = 'true';

    public const FALSE = 'false';

    public const _NEW = 'new';

    public const NOT_ACTIVE = 'not_active';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TRUE,
            self::FALSE,
            self::_NEW,
            self::NOT_ACTIVE
        ];
    }
}


