<?php
/**
 * LogType
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
 * The version of the OpenAPI document: 1.12.26
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
 * LogType Class Doc Comment
 *
 * @category Class
 * @description An enumeration.
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LogType
{
    /**
     * Possible values of this enum
     */
    public const BOUNCE = 'bounce';

    public const CLICKTHRU = 'clickthru';

    public const SENT = 'sent';

    public const OPEN = 'open';

    public const UNSUBSCRIBE = 'unsubscribe';

    public const RESUBSCRIBE = 'resubscribe';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOUNCE,
            self::CLICKTHRU,
            self::SENT,
            self::OPEN,
            self::UNSUBSCRIBE,
            self::RESUBSCRIBE
        ];
    }
}


