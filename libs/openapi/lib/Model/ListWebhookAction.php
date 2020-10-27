<?php
/**
 * ListWebhookAction
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
 * The version of the OpenAPI document: 1.2.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cakemail\Lib\Model;
use \Cakemail\Lib\ObjectSerializer;

/**
 * ListWebhookAction Class Doc Comment
 *
 * @category Class
 * @description An enumeration.
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListWebhookAction
{
    /**
     * Possible values of this enum
     */
    const ALL = 'all';
    const SUBSCRIBE = 'subscribe';
    const UNSUBSCRIBE = 'unsubscribe';
    const UPDATE = 'update';
    const DELETE = 'delete';
    const SPAM = 'spam';
    const BOUNCE = 'bounce';
    const BOUNCE_AC = 'bounce_ac';
    const BOUNCE_CR = 'bounce_cr';
    const BOUNCE_DF = 'bounce_df';
    const BOUNCE_FM = 'bounce_fm';
    const BOUNCE_HB = 'bounce_hb';
    const BOUNCE_MB = 'bounce_mb';
    const BOUNCE_SB = 'bounce_sb';
    const BOUNCE_TR = 'bounce_tr';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
            self::SUBSCRIBE,
            self::UNSUBSCRIBE,
            self::UPDATE,
            self::DELETE,
            self::SPAM,
            self::BOUNCE,
            self::BOUNCE_AC,
            self::BOUNCE_CR,
            self::BOUNCE_DF,
            self::BOUNCE_FM,
            self::BOUNCE_HB,
            self::BOUNCE_MB,
            self::BOUNCE_SB,
            self::BOUNCE_TR,
        ];
    }
}


