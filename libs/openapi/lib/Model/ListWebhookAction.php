<?php
/**
 * ListWebhookAction
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
    public const ALL = 'all';

    public const SUBSCRIBE = 'subscribe';

    public const UNSUBSCRIBE = 'unsubscribe';

    public const UPDATE = 'update';

    public const DELETE = 'delete';

    public const SPAM = 'spam';

    public const BOUNCE = 'bounce';

    public const BOUNCE_AC = 'bounce_ac';

    public const BOUNCE_CR = 'bounce_cr';

    public const BOUNCE_DF = 'bounce_df';

    public const BOUNCE_FM = 'bounce_fm';

    public const BOUNCE_HB = 'bounce_hb';

    public const BOUNCE_MB = 'bounce_mb';

    public const BOUNCE_SB = 'bounce_sb';

    public const BOUNCE_TR = 'bounce_tr';

    public const BOUNCE_AR = 'bounce_ar';

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
            self::BOUNCE_AR
        ];
    }
}


