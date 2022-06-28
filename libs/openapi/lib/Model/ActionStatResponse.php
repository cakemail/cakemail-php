<?php
/**
 * ActionStatResponse
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
 * The version of the OpenAPI document: 1.10.10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
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
 * ActionStatResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActionStatResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActionStatResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bounces' => 'int',
        'bounces_address_changed' => 'int',
        'bounces_challenge_response' => 'int',
        'bounces_dns_failure' => 'int',
        'bounces_full_mailbox' => 'int',
        'bounces_hard' => 'int',
        'bounces_mail_blocked' => 'int',
        'bounces_soft' => 'int',
        'bounces_transient' => 'int',
        'unique_clicks' => 'int',
        'forwards' => 'int',
        'implied_opens' => 'int',
        'unique_opens' => 'int',
        'unopens' => 'int',
        'clicks' => 'int',
        'opens' => 'int',
        'spams' => 'int',
        'spam_rate' => 'float',
        'unsubscribes' => 'int',
        'sent_emails' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bounces' => null,
        'bounces_address_changed' => null,
        'bounces_challenge_response' => null,
        'bounces_dns_failure' => null,
        'bounces_full_mailbox' => null,
        'bounces_hard' => null,
        'bounces_mail_blocked' => null,
        'bounces_soft' => null,
        'bounces_transient' => null,
        'unique_clicks' => null,
        'forwards' => null,
        'implied_opens' => null,
        'unique_opens' => null,
        'unopens' => null,
        'clicks' => null,
        'opens' => null,
        'spams' => null,
        'spam_rate' => null,
        'unsubscribes' => null,
        'sent_emails' => null
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
        'bounces' => 'bounces',
        'bounces_address_changed' => 'bounces_address_changed',
        'bounces_challenge_response' => 'bounces_challenge_response',
        'bounces_dns_failure' => 'bounces_dns_failure',
        'bounces_full_mailbox' => 'bounces_full_mailbox',
        'bounces_hard' => 'bounces_hard',
        'bounces_mail_blocked' => 'bounces_mail_blocked',
        'bounces_soft' => 'bounces_soft',
        'bounces_transient' => 'bounces_transient',
        'unique_clicks' => 'unique_clicks',
        'forwards' => 'forwards',
        'implied_opens' => 'implied_opens',
        'unique_opens' => 'unique_opens',
        'unopens' => 'unopens',
        'clicks' => 'clicks',
        'opens' => 'opens',
        'spams' => 'spams',
        'spam_rate' => 'spam_rate',
        'unsubscribes' => 'unsubscribes',
        'sent_emails' => 'sent_emails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bounces' => 'setBounces',
        'bounces_address_changed' => 'setBouncesAddressChanged',
        'bounces_challenge_response' => 'setBouncesChallengeResponse',
        'bounces_dns_failure' => 'setBouncesDnsFailure',
        'bounces_full_mailbox' => 'setBouncesFullMailbox',
        'bounces_hard' => 'setBouncesHard',
        'bounces_mail_blocked' => 'setBouncesMailBlocked',
        'bounces_soft' => 'setBouncesSoft',
        'bounces_transient' => 'setBouncesTransient',
        'unique_clicks' => 'setUniqueClicks',
        'forwards' => 'setForwards',
        'implied_opens' => 'setImpliedOpens',
        'unique_opens' => 'setUniqueOpens',
        'unopens' => 'setUnopens',
        'clicks' => 'setClicks',
        'opens' => 'setOpens',
        'spams' => 'setSpams',
        'spam_rate' => 'setSpamRate',
        'unsubscribes' => 'setUnsubscribes',
        'sent_emails' => 'setSentEmails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bounces' => 'getBounces',
        'bounces_address_changed' => 'getBouncesAddressChanged',
        'bounces_challenge_response' => 'getBouncesChallengeResponse',
        'bounces_dns_failure' => 'getBouncesDnsFailure',
        'bounces_full_mailbox' => 'getBouncesFullMailbox',
        'bounces_hard' => 'getBouncesHard',
        'bounces_mail_blocked' => 'getBouncesMailBlocked',
        'bounces_soft' => 'getBouncesSoft',
        'bounces_transient' => 'getBouncesTransient',
        'unique_clicks' => 'getUniqueClicks',
        'forwards' => 'getForwards',
        'implied_opens' => 'getImpliedOpens',
        'unique_opens' => 'getUniqueOpens',
        'unopens' => 'getUnopens',
        'clicks' => 'getClicks',
        'opens' => 'getOpens',
        'spams' => 'getSpams',
        'spam_rate' => 'getSpamRate',
        'unsubscribes' => 'getUnsubscribes',
        'sent_emails' => 'getSentEmails'
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
        $this->container['bounces'] = $data['bounces'] ?? null;
        $this->container['bounces_address_changed'] = $data['bounces_address_changed'] ?? null;
        $this->container['bounces_challenge_response'] = $data['bounces_challenge_response'] ?? null;
        $this->container['bounces_dns_failure'] = $data['bounces_dns_failure'] ?? null;
        $this->container['bounces_full_mailbox'] = $data['bounces_full_mailbox'] ?? null;
        $this->container['bounces_hard'] = $data['bounces_hard'] ?? null;
        $this->container['bounces_mail_blocked'] = $data['bounces_mail_blocked'] ?? null;
        $this->container['bounces_soft'] = $data['bounces_soft'] ?? null;
        $this->container['bounces_transient'] = $data['bounces_transient'] ?? null;
        $this->container['unique_clicks'] = $data['unique_clicks'] ?? null;
        $this->container['forwards'] = $data['forwards'] ?? null;
        $this->container['implied_opens'] = $data['implied_opens'] ?? null;
        $this->container['unique_opens'] = $data['unique_opens'] ?? null;
        $this->container['unopens'] = $data['unopens'] ?? null;
        $this->container['clicks'] = $data['clicks'] ?? null;
        $this->container['opens'] = $data['opens'] ?? null;
        $this->container['spams'] = $data['spams'] ?? null;
        $this->container['spam_rate'] = $data['spam_rate'] ?? null;
        $this->container['unsubscribes'] = $data['unsubscribes'] ?? null;
        $this->container['sent_emails'] = $data['sent_emails'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bounces'] === null) {
            $invalidProperties[] = "'bounces' can't be null";
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
        if ($this->container['unique_clicks'] === null) {
            $invalidProperties[] = "'unique_clicks' can't be null";
        }
        if ($this->container['forwards'] === null) {
            $invalidProperties[] = "'forwards' can't be null";
        }
        if ($this->container['implied_opens'] === null) {
            $invalidProperties[] = "'implied_opens' can't be null";
        }
        if ($this->container['unique_opens'] === null) {
            $invalidProperties[] = "'unique_opens' can't be null";
        }
        if ($this->container['unopens'] === null) {
            $invalidProperties[] = "'unopens' can't be null";
        }
        if ($this->container['clicks'] === null) {
            $invalidProperties[] = "'clicks' can't be null";
        }
        if ($this->container['opens'] === null) {
            $invalidProperties[] = "'opens' can't be null";
        }
        if ($this->container['spams'] === null) {
            $invalidProperties[] = "'spams' can't be null";
        }
        if ($this->container['spam_rate'] === null) {
            $invalidProperties[] = "'spam_rate' can't be null";
        }
        if ($this->container['unsubscribes'] === null) {
            $invalidProperties[] = "'unsubscribes' can't be null";
        }
        if ($this->container['sent_emails'] === null) {
            $invalidProperties[] = "'sent_emails' can't be null";
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
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


