<?php
/**
 * Languages
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
 * The version of the OpenAPI document: 1.4.5
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
 * Languages Class Doc Comment
 *
 * @category Class
 * @description Supported Locales
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Languages
{
    /**
     * Possible values of this enum
     */
    const EN_US = 'en_US';
    const DE_DE = 'de_DE';
    const EL_GR = 'el_GR';
    const ES_US = 'es_US';
    const ET_EE = 'et_EE';
    const FR_CA = 'fr_CA';
    const NL_NL = 'nl_NL';
    const RO_RO = 'ro_RO';
    const RU_RU = 'ru_RU';
    const TH_TH = 'th_TH';
    const ZH_CN = 'zh_CN';
    const FI_FI = 'fi_FI';
    const SV_SE = 'sv_SE';
    const ES_ES = 'es_ES';
    const FR_FR = 'fr_FR';
    const TR_TR = 'tr_TR';
    const PT_BR = 'pt_BR';
    const DA_DK = 'da_DK';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EN_US,
            self::DE_DE,
            self::EL_GR,
            self::ES_US,
            self::ET_EE,
            self::FR_CA,
            self::NL_NL,
            self::RO_RO,
            self::RU_RU,
            self::TH_TH,
            self::ZH_CN,
            self::FI_FI,
            self::SV_SE,
            self::ES_ES,
            self::FR_FR,
            self::TR_TR,
            self::PT_BR,
            self::DA_DK,
        ];
    }
}

