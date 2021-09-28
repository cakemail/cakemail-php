<?php
/**
 * CampaignStatResponse
 *
 * PHP version 7.3
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
 * The version of the OpenAPI document: 1.6.10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cakemail\Lib\Model;

use \ArrayAccess;
use \Cakemail\Lib\ObjectSerializer;

/**
 * CampaignStatResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CampaignStatResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignStatResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active_emails' => 'int',
        'bounces' => 'int',
        'bounce_rate' => 'float',
        'bounces_address_changed' => 'int',
        'bounces_challenge_response' => 'int',
        'bounces_dns_failure' => 'int',
        'bounces_full_mailbox' => 'int',
        'bounces_hard' => 'int',
        'bounces_mail_blocked' => 'int',
        'bounces_soft' => 'int',
        'bounces_transient' => 'int',
        'clicks' => 'int',
        'click_rate' => 'float',
        'forwards' => 'int',
        'implied_opens' => 'int',
        'opens' => 'int',
        'open_rate' => 'float',
        'spams' => 'int',
        'unique_clicks' => 'int',
        'unique_opens' => 'int',
        'unopens' => 'int',
        'unopen_rate' => 'float',
        'unsubscribes' => 'int',
        'unsubscribe_rate' => 'float',
        'spam_rate' => 'float',
        'sent_emails' => 'int',
        'sent_rate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active_emails' => null,
        'bounces' => null,
        'bounce_rate' => null,
        'bounces_address_changed' => null,
        'bounces_challenge_response' => null,
        'bounces_dns_failure' => null,
        'bounces_full_mailbox' => null,
        'bounces_hard' => null,
        'bounces_mail_blocked' => null,
        'bounces_soft' => null,
        'bounces_transient' => null,
        'clicks' => null,
        'click_rate' => null,
        'forwards' => null,
        'implied_opens' => null,
        'opens' => null,
        'open_rate' => null,
        'spams' => null,
        'unique_clicks' => null,
        'unique_opens' => null,
        'unopens' => null,
        'unopen_rate' => null,
        'unsubscribes' => null,
        'unsubscribe_rate' => null,
        'spam_rate' => null,
        'sent_emails' => null,
        'sent_rate' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'active_emails' => 'active_emails',
        'bounces' => 'bounces',
        'bounce_rate' => 'bounce_rate',
        'bounces_address_changed' => 'bounces_address_changed',
        'bounces_challenge_response' => 'bounces_challenge_response',
        'bounces_dns_failure' => 'bounces_dns_failure',
        'bounces_full_mailbox' => 'bounces_full_mailbox',
        'bounces_hard' => 'bounces_hard',
        'bounces_mail_blocked' => 'bounces_mail_blocked',
        'bounces_soft' => 'bounces_soft',
        'bounces_transient' => 'bounces_transient',
        'clicks' => 'clicks',
        'click_rate' => 'click_rate',
        'forwards' => 'forwards',
        'implied_opens' => 'implied_opens',
        'opens' => 'opens',
        'open_rate' => 'open_rate',
        'spams' => 'spams',
        'unique_clicks' => 'unique_clicks',
        'unique_opens' => 'unique_opens',
        'unopens' => 'unopens',
        'unopen_rate' => 'unopen_rate',
        'unsubscribes' => 'unsubscribes',
        'unsubscribe_rate' => 'unsubscribe_rate',
        'spam_rate' => 'spam_rate',
        'sent_emails' => 'sent_emails',
        'sent_rate' => 'sent_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_emails' => 'setActiveEmails',
        'bounces' => 'setBounces',
        'bounce_rate' => 'setBounceRate',
        'bounces_address_changed' => 'setBouncesAddressChanged',
        'bounces_challenge_response' => 'setBouncesChallengeResponse',
        'bounces_dns_failure' => 'setBouncesDnsFailure',
        'bounces_full_mailbox' => 'setBouncesFullMailbox',
        'bounces_hard' => 'setBouncesHard',
        'bounces_mail_blocked' => 'setBouncesMailBlocked',
        'bounces_soft' => 'setBouncesSoft',
        'bounces_transient' => 'setBouncesTransient',
        'clicks' => 'setClicks',
        'click_rate' => 'setClickRate',
        'forwards' => 'setForwards',
        'implied_opens' => 'setImpliedOpens',
        'opens' => 'setOpens',
        'open_rate' => 'setOpenRate',
        'spams' => 'setSpams',
        'unique_clicks' => 'setUniqueClicks',
        'unique_opens' => 'setUniqueOpens',
        'unopens' => 'setUnopens',
        'unopen_rate' => 'setUnopenRate',
        'unsubscribes' => 'setUnsubscribes',
        'unsubscribe_rate' => 'setUnsubscribeRate',
        'spam_rate' => 'setSpamRate',
        'sent_emails' => 'setSentEmails',
        'sent_rate' => 'setSentRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_emails' => 'getActiveEmails',
        'bounces' => 'getBounces',
        'bounce_rate' => 'getBounceRate',
        'bounces_address_changed' => 'getBouncesAddressChanged',
        'bounces_challenge_response' => 'getBouncesChallengeResponse',
        'bounces_dns_failure' => 'getBouncesDnsFailure',
        'bounces_full_mailbox' => 'getBouncesFullMailbox',
        'bounces_hard' => 'getBouncesHard',
        'bounces_mail_blocked' => 'getBouncesMailBlocked',
        'bounces_soft' => 'getBouncesSoft',
        'bounces_transient' => 'getBouncesTransient',
        'clicks' => 'getClicks',
        'click_rate' => 'getClickRate',
        'forwards' => 'getForwards',
        'implied_opens' => 'getImpliedOpens',
        'opens' => 'getOpens',
        'open_rate' => 'getOpenRate',
        'spams' => 'getSpams',
        'unique_clicks' => 'getUniqueClicks',
        'unique_opens' => 'getUniqueOpens',
        'unopens' => 'getUnopens',
        'unopen_rate' => 'getUnopenRate',
        'unsubscribes' => 'getUnsubscribes',
        'unsubscribe_rate' => 'getUnsubscribeRate',
        'spam_rate' => 'getSpamRate',
        'sent_emails' => 'getSentEmails',
        'sent_rate' => 'getSentRate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['active_emails'] = $data['active_emails'] ?? null;
        $this->container['bounces'] = $data['bounces'] ?? null;
        $this->container['bounce_rate'] = $data['bounce_rate'] ?? null;
        $this->container['bounces_address_changed'] = $data['bounces_address_changed'] ?? null;
        $this->container['bounces_challenge_response'] = $data['bounces_challenge_response'] ?? null;
        $this->container['bounces_dns_failure'] = $data['bounces_dns_failure'] ?? null;
        $this->container['bounces_full_mailbox'] = $data['bounces_full_mailbox'] ?? null;
        $this->container['bounces_hard'] = $data['bounces_hard'] ?? null;
        $this->container['bounces_mail_blocked'] = $data['bounces_mail_blocked'] ?? null;
        $this->container['bounces_soft'] = $data['bounces_soft'] ?? null;
        $this->container['bounces_transient'] = $data['bounces_transient'] ?? null;
        $this->container['clicks'] = $data['clicks'] ?? null;
        $this->container['click_rate'] = $data['click_rate'] ?? null;
        $this->container['forwards'] = $data['forwards'] ?? null;
        $this->container['implied_opens'] = $data['implied_opens'] ?? null;
        $this->container['opens'] = $data['opens'] ?? null;
        $this->container['open_rate'] = $data['open_rate'] ?? null;
        $this->container['spams'] = $data['spams'] ?? null;
        $this->container['unique_clicks'] = $data['unique_clicks'] ?? null;
        $this->container['unique_opens'] = $data['unique_opens'] ?? null;
        $this->container['unopens'] = $data['unopens'] ?? null;
        $this->container['unopen_rate'] = $data['unopen_rate'] ?? null;
        $this->container['unsubscribes'] = $data['unsubscribes'] ?? null;
        $this->container['unsubscribe_rate'] = $data['unsubscribe_rate'] ?? null;
        $this->container['spam_rate'] = $data['spam_rate'] ?? null;
        $this->container['sent_emails'] = $data['sent_emails'] ?? null;
        $this->container['sent_rate'] = $data['sent_rate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['active_emails'] === null) {
            $invalidProperties[] = "'active_emails' can't be null";
        }
        if ($this->container['bounces'] === null) {
            $invalidProperties[] = "'bounces' can't be null";
        }
        if ($this->container['bounce_rate'] === null) {
            $invalidProperties[] = "'bounce_rate' can't be null";
        }
        if ($this->container['bounces_address_changed'] === null) {
            $invalidProperties[] = "'bounces_address_changed' can't be null";
        }
        if ($this->container['bounces_challenge_response'] === null) {
            $invalidProperties[] = "'bounces_challenge_response' can't be null";
        }
        if ($this->container['bounces_dns_failure'] === null) {
            $invalidProperties[] = "'bounces_dns_failure' can't be null";
        }
        if ($this->container['bounces_full_mailbox'] === null) {
            $invalidProperties[] = "'bounces_full_mailbox' can't be null";
        }
        if ($this->container['bounces_hard'] === null) {
            $invalidProperties[] = "'bounces_hard' can't be null";
        }
        if ($this->container['bounces_mail_blocked'] === null) {
            $invalidProperties[] = "'bounces_mail_blocked' can't be null";
        }
        if ($this->container['bounces_soft'] === null) {
            $invalidProperties[] = "'bounces_soft' can't be null";
        }
        if ($this->container['bounces_transient'] === null) {
            $invalidProperties[] = "'bounces_transient' can't be null";
        }
        if ($this->container['clicks'] === null) {
            $invalidProperties[] = "'clicks' can't be null";
        }
        if ($this->container['click_rate'] === null) {
            $invalidProperties[] = "'click_rate' can't be null";
        }
        if ($this->container['forwards'] === null) {
            $invalidProperties[] = "'forwards' can't be null";
        }
        if ($this->container['implied_opens'] === null) {
            $invalidProperties[] = "'implied_opens' can't be null";
        }
        if ($this->container['opens'] === null) {
            $invalidProperties[] = "'opens' can't be null";
        }
        if ($this->container['open_rate'] === null) {
            $invalidProperties[] = "'open_rate' can't be null";
        }
        if ($this->container['spams'] === null) {
            $invalidProperties[] = "'spams' can't be null";
        }
        if ($this->container['unique_clicks'] === null) {
            $invalidProperties[] = "'unique_clicks' can't be null";
        }
        if ($this->container['unique_opens'] === null) {
            $invalidProperties[] = "'unique_opens' can't be null";
        }
        if ($this->container['unopens'] === null) {
            $invalidProperties[] = "'unopens' can't be null";
        }
        if ($this->container['unopen_rate'] === null) {
            $invalidProperties[] = "'unopen_rate' can't be null";
        }
        if ($this->container['unsubscribes'] === null) {
            $invalidProperties[] = "'unsubscribes' can't be null";
        }
        if ($this->container['unsubscribe_rate'] === null) {
            $invalidProperties[] = "'unsubscribe_rate' can't be null";
        }
        if ($this->container['spam_rate'] === null) {
            $invalidProperties[] = "'spam_rate' can't be null";
        }
        if ($this->container['sent_emails'] === null) {
            $invalidProperties[] = "'sent_emails' can't be null";
        }
        if ($this->container['sent_rate'] === null) {
            $invalidProperties[] = "'sent_rate' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets active_emails
     *
     * @return int
     */
    public function getActiveEmails()
    {
        return $this->container['active_emails'];
    }

    /**
     * Sets active_emails
     *
     * @param int $active_emails active_emails
     *
     * @return self
     */
    public function setActiveEmails($active_emails)
    {
        $this->container['active_emails'] = $active_emails;

        return $this;
    }

    /**
     * Gets bounces
     *
     * @return int
     */
    public function getBounces()
    {
        return $this->container['bounces'];
    }

    /**
     * Sets bounces
     *
     * @param int $bounces bounces
     *
     * @return self
     */
    public function setBounces($bounces)
    {
        $this->container['bounces'] = $bounces;

        return $this;
    }

    /**
     * Gets bounce_rate
     *
     * @return float
     */
    public function getBounceRate()
    {
        return $this->container['bounce_rate'];
    }

    /**
     * Sets bounce_rate
     *
     * @param float $bounce_rate bounce_rate
     *
     * @return self
     */
    public function setBounceRate($bounce_rate)
    {
        $this->container['bounce_rate'] = $bounce_rate;

        return $this;
    }

    /**
     * Gets bounces_address_changed
     *
     * @return int
     */
    public function getBouncesAddressChanged()
    {
        return $this->container['bounces_address_changed'];
    }

    /**
     * Sets bounces_address_changed
     *
     * @param int $bounces_address_changed bounces_address_changed
     *
     * @return self
     */
    public function setBouncesAddressChanged($bounces_address_changed)
    {
        $this->container['bounces_address_changed'] = $bounces_address_changed;

        return $this;
    }

    /**
     * Gets bounces_challenge_response
     *
     * @return int
     */
    public function getBouncesChallengeResponse()
    {
        return $this->container['bounces_challenge_response'];
    }

    /**
     * Sets bounces_challenge_response
     *
     * @param int $bounces_challenge_response bounces_challenge_response
     *
     * @return self
     */
    public function setBouncesChallengeResponse($bounces_challenge_response)
    {
        $this->container['bounces_challenge_response'] = $bounces_challenge_response;

        return $this;
    }

    /**
     * Gets bounces_dns_failure
     *
     * @return int
     */
    public function getBouncesDnsFailure()
    {
        return $this->container['bounces_dns_failure'];
    }

    /**
     * Sets bounces_dns_failure
     *
     * @param int $bounces_dns_failure bounces_dns_failure
     *
     * @return self
     */
    public function setBouncesDnsFailure($bounces_dns_failure)
    {
        $this->container['bounces_dns_failure'] = $bounces_dns_failure;

        return $this;
    }

    /**
     * Gets bounces_full_mailbox
     *
     * @return int
     */
    public function getBouncesFullMailbox()
    {
        return $this->container['bounces_full_mailbox'];
    }

    /**
     * Sets bounces_full_mailbox
     *
     * @param int $bounces_full_mailbox bounces_full_mailbox
     *
     * @return self
     */
    public function setBouncesFullMailbox($bounces_full_mailbox)
    {
        $this->container['bounces_full_mailbox'] = $bounces_full_mailbox;

        return $this;
    }

    /**
     * Gets bounces_hard
     *
     * @return int
     */
    public function getBouncesHard()
    {
        return $this->container['bounces_hard'];
    }

    /**
     * Sets bounces_hard
     *
     * @param int $bounces_hard bounces_hard
     *
     * @return self
     */
    public function setBouncesHard($bounces_hard)
    {
        $this->container['bounces_hard'] = $bounces_hard;

        return $this;
    }

    /**
     * Gets bounces_mail_blocked
     *
     * @return int
     */
    public function getBouncesMailBlocked()
    {
        return $this->container['bounces_mail_blocked'];
    }

    /**
     * Sets bounces_mail_blocked
     *
     * @param int $bounces_mail_blocked bounces_mail_blocked
     *
     * @return self
     */
    public function setBouncesMailBlocked($bounces_mail_blocked)
    {
        $this->container['bounces_mail_blocked'] = $bounces_mail_blocked;

        return $this;
    }

    /**
     * Gets bounces_soft
     *
     * @return int
     */
    public function getBouncesSoft()
    {
        return $this->container['bounces_soft'];
    }

    /**
     * Sets bounces_soft
     *
     * @param int $bounces_soft bounces_soft
     *
     * @return self
     */
    public function setBouncesSoft($bounces_soft)
    {
        $this->container['bounces_soft'] = $bounces_soft;

        return $this;
    }

    /**
     * Gets bounces_transient
     *
     * @return int
     */
    public function getBouncesTransient()
    {
        return $this->container['bounces_transient'];
    }

    /**
     * Sets bounces_transient
     *
     * @param int $bounces_transient bounces_transient
     *
     * @return self
     */
    public function setBouncesTransient($bounces_transient)
    {
        $this->container['bounces_transient'] = $bounces_transient;

        return $this;
    }

    /**
     * Gets clicks
     *
     * @return int
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param int $clicks clicks
     *
     * @return self
     */
    public function setClicks($clicks)
    {
        $this->container['clicks'] = $clicks;

        return $this;
    }

    /**
     * Gets click_rate
     *
     * @return float
     */
    public function getClickRate()
    {
        return $this->container['click_rate'];
    }

    /**
     * Sets click_rate
     *
     * @param float $click_rate click_rate
     *
     * @return self
     */
    public function setClickRate($click_rate)
    {
        $this->container['click_rate'] = $click_rate;

        return $this;
    }

    /**
     * Gets forwards
     *
     * @return int
     */
    public function getForwards()
    {
        return $this->container['forwards'];
    }

    /**
     * Sets forwards
     *
     * @param int $forwards forwards
     *
     * @return self
     */
    public function setForwards($forwards)
    {
        $this->container['forwards'] = $forwards;

        return $this;
    }

    /**
     * Gets implied_opens
     *
     * @return int
     */
    public function getImpliedOpens()
    {
        return $this->container['implied_opens'];
    }

    /**
     * Sets implied_opens
     *
     * @param int $implied_opens implied_opens
     *
     * @return self
     */
    public function setImpliedOpens($implied_opens)
    {
        $this->container['implied_opens'] = $implied_opens;

        return $this;
    }

    /**
     * Gets opens
     *
     * @return int
     */
    public function getOpens()
    {
        return $this->container['opens'];
    }

    /**
     * Sets opens
     *
     * @param int $opens opens
     *
     * @return self
     */
    public function setOpens($opens)
    {
        $this->container['opens'] = $opens;

        return $this;
    }

    /**
     * Gets open_rate
     *
     * @return float
     */
    public function getOpenRate()
    {
        return $this->container['open_rate'];
    }

    /**
     * Sets open_rate
     *
     * @param float $open_rate open_rate
     *
     * @return self
     */
    public function setOpenRate($open_rate)
    {
        $this->container['open_rate'] = $open_rate;

        return $this;
    }

    /**
     * Gets spams
     *
     * @return int
     */
    public function getSpams()
    {
        return $this->container['spams'];
    }

    /**
     * Sets spams
     *
     * @param int $spams spams
     *
     * @return self
     */
    public function setSpams($spams)
    {
        $this->container['spams'] = $spams;

        return $this;
    }

    /**
     * Gets unique_clicks
     *
     * @return int
     */
    public function getUniqueClicks()
    {
        return $this->container['unique_clicks'];
    }

    /**
     * Sets unique_clicks
     *
     * @param int $unique_clicks unique_clicks
     *
     * @return self
     */
    public function setUniqueClicks($unique_clicks)
    {
        $this->container['unique_clicks'] = $unique_clicks;

        return $this;
    }

    /**
     * Gets unique_opens
     *
     * @return int
     */
    public function getUniqueOpens()
    {
        return $this->container['unique_opens'];
    }

    /**
     * Sets unique_opens
     *
     * @param int $unique_opens unique_opens
     *
     * @return self
     */
    public function setUniqueOpens($unique_opens)
    {
        $this->container['unique_opens'] = $unique_opens;

        return $this;
    }

    /**
     * Gets unopens
     *
     * @return int
     */
    public function getUnopens()
    {
        return $this->container['unopens'];
    }

    /**
     * Sets unopens
     *
     * @param int $unopens unopens
     *
     * @return self
     */
    public function setUnopens($unopens)
    {
        $this->container['unopens'] = $unopens;

        return $this;
    }

    /**
     * Gets unopen_rate
     *
     * @return float
     */
    public function getUnopenRate()
    {
        return $this->container['unopen_rate'];
    }

    /**
     * Sets unopen_rate
     *
     * @param float $unopen_rate unopen_rate
     *
     * @return self
     */
    public function setUnopenRate($unopen_rate)
    {
        $this->container['unopen_rate'] = $unopen_rate;

        return $this;
    }

    /**
     * Gets unsubscribes
     *
     * @return int
     */
    public function getUnsubscribes()
    {
        return $this->container['unsubscribes'];
    }

    /**
     * Sets unsubscribes
     *
     * @param int $unsubscribes unsubscribes
     *
     * @return self
     */
    public function setUnsubscribes($unsubscribes)
    {
        $this->container['unsubscribes'] = $unsubscribes;

        return $this;
    }

    /**
     * Gets unsubscribe_rate
     *
     * @return float
     */
    public function getUnsubscribeRate()
    {
        return $this->container['unsubscribe_rate'];
    }

    /**
     * Sets unsubscribe_rate
     *
     * @param float $unsubscribe_rate unsubscribe_rate
     *
     * @return self
     */
    public function setUnsubscribeRate($unsubscribe_rate)
    {
        $this->container['unsubscribe_rate'] = $unsubscribe_rate;

        return $this;
    }

    /**
     * Gets spam_rate
     *
     * @return float
     */
    public function getSpamRate()
    {
        return $this->container['spam_rate'];
    }

    /**
     * Sets spam_rate
     *
     * @param float $spam_rate spam_rate
     *
     * @return self
     */
    public function setSpamRate($spam_rate)
    {
        $this->container['spam_rate'] = $spam_rate;

        return $this;
    }

    /**
     * Gets sent_emails
     *
     * @return int
     */
    public function getSentEmails()
    {
        return $this->container['sent_emails'];
    }

    /**
     * Sets sent_emails
     *
     * @param int $sent_emails sent_emails
     *
     * @return self
     */
    public function setSentEmails($sent_emails)
    {
        $this->container['sent_emails'] = $sent_emails;

        return $this;
    }

    /**
     * Gets sent_rate
     *
     * @return float
     */
    public function getSentRate()
    {
        return $this->container['sent_rate'];
    }

    /**
     * Sets sent_rate
     *
     * @param float $sent_rate sent_rate
     *
     * @return self
     */
    public function setSentRate($sent_rate)
    {
        $this->container['sent_rate'] = $sent_rate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


