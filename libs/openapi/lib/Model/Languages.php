<?php
/**
 * Languages
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
    public const DA = 'da';

    public const DA_DK = 'da_DK';

    public const DE = 'de';

    public const DE_DE = 'de_DE';

    public const EL = 'el';

    public const EL_GR = 'el_GR';

    public const EN = 'en';

    public const EN_US = 'en_US';

    public const EN_GB = 'en_GB';

    public const EN_UK = 'en_UK';

    public const ES = 'es';

    public const ES_US = 'es_US';

    public const ES_ES = 'es_ES';

    public const ET = 'et';

    public const ET_EE = 'et_EE';

    public const FI = 'fi';

    public const FI_FI = 'fi_FI';

    public const FR = 'fr';

    public const FR_CA = 'fr_CA';

    public const FR_FR = 'fr_FR';

    public const HE = 'he';

    public const HE_IL = 'he_IL';

    public const ID = 'id';

    public const ID_ID = 'id_ID';

    public const IT = 'it';

    public const IT_IT = 'it_IT';

    public const JA = 'ja';

    public const JA_JP = 'ja_JP';

    public const NL = 'nl';

    public const NL_NL = 'nl_NL';

    public const NO = 'no';

    public const NO_NO = 'no_NO';

    public const PT = 'pt';

    public const PT_BR = 'pt_BR';

    public const RO = 'ro';

    public const RO_RO = 'ro_RO';

    public const RU = 'ru';

    public const RU_RU = 'ru_RU';

    public const SV = 'sv';

    public const SV_SE = 'sv_SE';

    public const TH = 'th';

    public const TH_TH = 'th_TH';

    public const TR = 'tr';

    public const TR_TR = 'tr_TR';

    public const VI = 'vi';

    public const VI_VN = 'vi_VN';

    public const ZH = 'zh';

    public const ZH_CN = 'zh_CN';

    public const AA = 'aa';

    public const AB = 'ab';

    public const AE = 'ae';

    public const AF = 'af';

    public const AK = 'ak';

    public const AM = 'am';

    public const AN = 'an';

    public const AR = 'ar';

    public const AV = 'av';

    public const AY = 'ay';

    public const AZ = 'az';

    public const BA = 'ba';

    public const BE = 'be';

    public const BG = 'bg';

    public const BH = 'bh';

    public const BI = 'bi';

    public const BM = 'bm';

    public const BN = 'bn';

    public const BO = 'bo';

    public const BR = 'br';

    public const BS = 'bs';

    public const CA = 'ca';

    public const CE = 'ce';

    public const CH = 'ch';

    public const CO = 'co';

    public const CR = 'cr';

    public const CS = 'cs';

    public const CU = 'cu';

    public const CV = 'cv';

    public const CY = 'cy';

    public const DV = 'dv';

    public const DZ = 'dz';

    public const EE = 'ee';

    public const EO = 'eo';

    public const EU = 'eu';

    public const FA = 'fa';

    public const FF = 'ff';

    public const FJ = 'fj';

    public const FO = 'fo';

    public const FY = 'fy';

    public const GA = 'ga';

    public const GD = 'gd';

    public const GL = 'gl';

    public const GN = 'gn';

    public const GU = 'gu';

    public const GV = 'gv';

    public const HA = 'ha';

    public const HI = 'hi';

    public const HO = 'ho';

    public const HR = 'hr';

    public const HT = 'ht';

    public const HU = 'hu';

    public const HY = 'hy';

    public const HZ = 'hz';

    public const IA = 'ia';

    public const IE = 'ie';

    public const IG = 'ig';

    public const II = 'ii';

    public const IK = 'ik';

    public const IO = 'io';

    public const IS_IS = 'is_IS';

    public const IU = 'iu';

    public const JV = 'jv';

    public const KA = 'ka';

    public const KG = 'kg';

    public const KI = 'ki';

    public const KJ = 'kj';

    public const KK = 'kk';

    public const KL = 'kl';

    public const KM = 'km';

    public const KN = 'kn';

    public const KO = 'ko';

    public const KR = 'kr';

    public const KS = 'ks';

    public const KU = 'ku';

    public const KV = 'kv';

    public const KW = 'kw';

    public const KY = 'ky';

    public const LA = 'la';

    public const LB = 'lb';

    public const LG = 'lg';

    public const LI = 'li';

    public const LN = 'ln';

    public const LO = 'lo';

    public const LT = 'lt';

    public const LU = 'lu';

    public const LV = 'lv';

    public const MG = 'mg';

    public const MH = 'mh';

    public const MI = 'mi';

    public const MK = 'mk';

    public const ML = 'ml';

    public const MN = 'mn';

    public const MR = 'mr';

    public const MS = 'ms';

    public const MT = 'mt';

    public const MY = 'my';

    public const NA = 'na';

    public const NB = 'nb';

    public const ND = 'nd';

    public const NE = 'ne';

    public const NG = 'ng';

    public const NN = 'nn';

    public const NR = 'nr';

    public const NV = 'nv';

    public const NY = 'ny';

    public const OC = 'oc';

    public const OJ = 'oj';

    public const OM = 'om';

    public const OS = 'os';

    public const PA = 'pa';

    public const PI = 'pi';

    public const PL = 'pl';

    public const PS = 'ps';

    public const QU = 'qu';

    public const RM = 'rm';

    public const RN = 'rn';

    public const RW = 'rw';

    public const SA = 'sa';

    public const SC = 'sc';

    public const SD = 'sd';

    public const SE = 'se';

    public const SG = 'sg';

    public const SI = 'si';

    public const SK = 'sk';

    public const SL = 'sl';

    public const SM = 'sm';

    public const SN = 'sn';

    public const SO = 'so';

    public const SQ = 'sq';

    public const SR = 'sr';

    public const SS = 'ss';

    public const ST = 'st';

    public const SU = 'su';

    public const SW = 'sw';

    public const TA = 'ta';

    public const TE = 'te';

    public const TG = 'tg';

    public const TI = 'ti';

    public const TK = 'tk';

    public const TL = 'tl';

    public const TN = 'tn';

    public const TO = 'to';

    public const TS = 'ts';

    public const TT = 'tt';

    public const TW = 'tw';

    public const TY = 'ty';

    public const UG = 'ug';

    public const UK = 'uk';

    public const UR = 'ur';

    public const UZ = 'uz';

    public const VE = 've';

    public const VO = 'vo';

    public const WA = 'wa';

    public const WO = 'wo';

    public const XH = 'xh';

    public const YI = 'yi';

    public const YO = 'yo';

    public const ZA = 'za';

    public const ZU = 'zu';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DA,
            self::DA_DK,
            self::DE,
            self::DE_DE,
            self::EL,
            self::EL_GR,
            self::EN,
            self::EN_US,
            self::EN_GB,
            self::EN_UK,
            self::ES,
            self::ES_US,
            self::ES_ES,
            self::ET,
            self::ET_EE,
            self::FI,
            self::FI_FI,
            self::FR,
            self::FR_CA,
            self::FR_FR,
            self::HE,
            self::HE_IL,
            self::ID,
            self::ID_ID,
            self::IT,
            self::IT_IT,
            self::JA,
            self::JA_JP,
            self::NL,
            self::NL_NL,
            self::NO,
            self::NO_NO,
            self::PT,
            self::PT_BR,
            self::RO,
            self::RO_RO,
            self::RU,
            self::RU_RU,
            self::SV,
            self::SV_SE,
            self::TH,
            self::TH_TH,
            self::TR,
            self::TR_TR,
            self::VI,
            self::VI_VN,
            self::ZH,
            self::ZH_CN,
            self::AA,
            self::AB,
            self::AE,
            self::AF,
            self::AK,
            self::AM,
            self::AN,
            self::AR,
            self::AV,
            self::AY,
            self::AZ,
            self::BA,
            self::BE,
            self::BG,
            self::BH,
            self::BI,
            self::BM,
            self::BN,
            self::BO,
            self::BR,
            self::BS,
            self::CA,
            self::CE,
            self::CH,
            self::CO,
            self::CR,
            self::CS,
            self::CU,
            self::CV,
            self::CY,
            self::DV,
            self::DZ,
            self::EE,
            self::EO,
            self::EU,
            self::FA,
            self::FF,
            self::FJ,
            self::FO,
            self::FY,
            self::GA,
            self::GD,
            self::GL,
            self::GN,
            self::GU,
            self::GV,
            self::HA,
            self::HI,
            self::HO,
            self::HR,
            self::HT,
            self::HU,
            self::HY,
            self::HZ,
            self::IA,
            self::IE,
            self::IG,
            self::II,
            self::IK,
            self::IO,
            self::IS_IS,
            self::IU,
            self::JV,
            self::KA,
            self::KG,
            self::KI,
            self::KJ,
            self::KK,
            self::KL,
            self::KM,
            self::KN,
            self::KO,
            self::KR,
            self::KS,
            self::KU,
            self::KV,
            self::KW,
            self::KY,
            self::LA,
            self::LB,
            self::LG,
            self::LI,
            self::LN,
            self::LO,
            self::LT,
            self::LU,
            self::LV,
            self::MG,
            self::MH,
            self::MI,
            self::MK,
            self::ML,
            self::MN,
            self::MR,
            self::MS,
            self::MT,
            self::MY,
            self::NA,
            self::NB,
            self::ND,
            self::NE,
            self::NG,
            self::NN,
            self::NR,
            self::NV,
            self::NY,
            self::OC,
            self::OJ,
            self::OM,
            self::OS,
            self::PA,
            self::PI,
            self::PL,
            self::PS,
            self::QU,
            self::RM,
            self::RN,
            self::RW,
            self::SA,
            self::SC,
            self::SD,
            self::SE,
            self::SG,
            self::SI,
            self::SK,
            self::SL,
            self::SM,
            self::SN,
            self::SO,
            self::SQ,
            self::SR,
            self::SS,
            self::ST,
            self::SU,
            self::SW,
            self::TA,
            self::TE,
            self::TG,
            self::TI,
            self::TK,
            self::TL,
            self::TN,
            self::TO,
            self::TS,
            self::TT,
            self::TW,
            self::TY,
            self::UG,
            self::UK,
            self::UR,
            self::UZ,
            self::VE,
            self::VO,
            self::WA,
            self::WO,
            self::XH,
            self::YI,
            self::YO,
            self::ZA,
            self::ZU
        ];
    }
}


