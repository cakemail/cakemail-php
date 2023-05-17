<?php
/**
 * ContentTypeResponse
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
 * The version of the OpenAPI document: 1.12.17
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
 * ContentTypeResponse Class Doc Comment
 *
 * @category Class
 * @description An enumeration.
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContentTypeResponse
{
    /**
     * Possible values of this enum
     */
    public const HTML = 'html';

    public const BEE = 'bee';

    public const CUSTOM = 'custom';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HTML,
            self::BEE,
            self::CUSTOM
        ];
    }
}


