<?php
/**
 * AccountStatResponse
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

use \ArrayAccess;
use \Cakemail\Lib\ObjectSerializer;

/**
 * AccountStatResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountStatResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountStatResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active_contacts' => 'int',
        'sent_emails' => 'int',
        'sent_campaign_emails' => 'int',
        'sent_action_emails' => 'int',
        'sent_email_emails' => 'int',
        'open_rate' => 'float',
        'bounce_rate' => 'float',
        'click_rate' => 'float',
        'spam_rate' => 'float',
        'unsubscribe_rate' => 'float',
        'emails_usage' => 'float',
        'contacts_usage' => 'float',
        'bounces_hard' => 'int',
        'bounce_hard_rate' => 'float',
        'spams' => 'int',
        'current_lists' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active_contacts' => null,
        'sent_emails' => null,
        'sent_campaign_emails' => null,
        'sent_action_emails' => null,
        'sent_email_emails' => null,
        'open_rate' => null,
        'bounce_rate' => null,
        'click_rate' => null,
        'spam_rate' => null,
        'unsubscribe_rate' => null,
        'emails_usage' => null,
        'contacts_usage' => null,
        'bounces_hard' => null,
        'bounce_hard_rate' => null,
        'spams' => null,
        'current_lists' => null
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
        'active_contacts' => 'active_contacts',
        'sent_emails' => 'sent_emails',
        'sent_campaign_emails' => 'sent_campaign_emails',
        'sent_action_emails' => 'sent_action_emails',
        'sent_email_emails' => 'sent_email_emails',
        'open_rate' => 'open_rate',
        'bounce_rate' => 'bounce_rate',
        'click_rate' => 'click_rate',
        'spam_rate' => 'spam_rate',
        'unsubscribe_rate' => 'unsubscribe_rate',
        'emails_usage' => 'emails_usage',
        'contacts_usage' => 'contacts_usage',
        'bounces_hard' => 'bounces_hard',
        'bounce_hard_rate' => 'bounce_hard_rate',
        'spams' => 'spams',
        'current_lists' => 'current_lists'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_contacts' => 'setActiveContacts',
        'sent_emails' => 'setSentEmails',
        'sent_campaign_emails' => 'setSentCampaignEmails',
        'sent_action_emails' => 'setSentActionEmails',
        'sent_email_emails' => 'setSentEmailEmails',
        'open_rate' => 'setOpenRate',
        'bounce_rate' => 'setBounceRate',
        'click_rate' => 'setClickRate',
        'spam_rate' => 'setSpamRate',
        'unsubscribe_rate' => 'setUnsubscribeRate',
        'emails_usage' => 'setEmailsUsage',
        'contacts_usage' => 'setContactsUsage',
        'bounces_hard' => 'setBouncesHard',
        'bounce_hard_rate' => 'setBounceHardRate',
        'spams' => 'setSpams',
        'current_lists' => 'setCurrentLists'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_contacts' => 'getActiveContacts',
        'sent_emails' => 'getSentEmails',
        'sent_campaign_emails' => 'getSentCampaignEmails',
        'sent_action_emails' => 'getSentActionEmails',
        'sent_email_emails' => 'getSentEmailEmails',
        'open_rate' => 'getOpenRate',
        'bounce_rate' => 'getBounceRate',
        'click_rate' => 'getClickRate',
        'spam_rate' => 'getSpamRate',
        'unsubscribe_rate' => 'getUnsubscribeRate',
        'emails_usage' => 'getEmailsUsage',
        'contacts_usage' => 'getContactsUsage',
        'bounces_hard' => 'getBouncesHard',
        'bounce_hard_rate' => 'getBounceHardRate',
        'spams' => 'getSpams',
        'current_lists' => 'getCurrentLists'
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
        $this->container['active_contacts'] = $data['active_contacts'] ?? null;
        $this->container['sent_emails'] = $data['sent_emails'] ?? null;
        $this->container['sent_campaign_emails'] = $data['sent_campaign_emails'] ?? null;
        $this->container['sent_action_emails'] = $data['sent_action_emails'] ?? null;
        $this->container['sent_email_emails'] = $data['sent_email_emails'] ?? null;
        $this->container['open_rate'] = $data['open_rate'] ?? null;
        $this->container['bounce_rate'] = $data['bounce_rate'] ?? null;
        $this->container['click_rate'] = $data['click_rate'] ?? null;
        $this->container['spam_rate'] = $data['spam_rate'] ?? null;
        $this->container['unsubscribe_rate'] = $data['unsubscribe_rate'] ?? null;
        $this->container['emails_usage'] = $data['emails_usage'] ?? null;
        $this->container['contacts_usage'] = $data['contacts_usage'] ?? null;
        $this->container['bounces_hard'] = $data['bounces_hard'] ?? null;
        $this->container['bounce_hard_rate'] = $data['bounce_hard_rate'] ?? null;
        $this->container['spams'] = $data['spams'] ?? null;
        $this->container['current_lists'] = $data['current_lists'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['active_contacts'] === null) {
            $invalidProperties[] = "'active_contacts' can't be null";
        }
        if ($this->container['sent_emails'] === null) {
            $invalidProperties[] = "'sent_emails' can't be null";
        }
        if ($this->container['sent_campaign_emails'] === null) {
            $invalidProperties[] = "'sent_campaign_emails' can't be null";
        }
        if ($this->container['sent_action_emails'] === null) {
            $invalidProperties[] = "'sent_action_emails' can't be null";
        }
        if ($this->container['sent_email_emails'] === null) {
            $invalidProperties[] = "'sent_email_emails' can't be null";
        }
        if ($this->container['open_rate'] === null) {
            $invalidProperties[] = "'open_rate' can't be null";
        }
        if ($this->container['bounce_rate'] === null) {
            $invalidProperties[] = "'bounce_rate' can't be null";
        }
        if ($this->container['click_rate'] === null) {
            $invalidProperties[] = "'click_rate' can't be null";
        }
        if ($this->container['spam_rate'] === null) {
            $invalidProperties[] = "'spam_rate' can't be null";
        }
        if ($this->container['unsubscribe_rate'] === null) {
            $invalidProperties[] = "'unsubscribe_rate' can't be null";
        }
        if ($this->container['emails_usage'] === null) {
            $invalidProperties[] = "'emails_usage' can't be null";
        }
        if ($this->container['contacts_usage'] === null) {
            $invalidProperties[] = "'contacts_usage' can't be null";
        }
        if ($this->container['bounces_hard'] === null) {
            $invalidProperties[] = "'bounces_hard' can't be null";
        }
        if ($this->container['bounce_hard_rate'] === null) {
            $invalidProperties[] = "'bounce_hard_rate' can't be null";
        }
        if ($this->container['spams'] === null) {
            $invalidProperties[] = "'spams' can't be null";
        }
        if ($this->container['current_lists'] === null) {
            $invalidProperties[] = "'current_lists' can't be null";
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
     * Gets active_contacts
     *
     * @return int
     */
    public function getActiveContacts()
    {
        return $this->container['active_contacts'];
    }

    /**
     * Sets active_contacts
     *
     * @param int $active_contacts active_contacts
     *
     * @return self
     */
    public function setActiveContacts($active_contacts)
    {
        $this->container['active_contacts'] = $active_contacts;

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
     * Gets sent_campaign_emails
     *
     * @return int
     */
    public function getSentCampaignEmails()
    {
        return $this->container['sent_campaign_emails'];
    }

    /**
     * Sets sent_campaign_emails
     *
     * @param int $sent_campaign_emails sent_campaign_emails
     *
     * @return self
     */
    public function setSentCampaignEmails($sent_campaign_emails)
    {
        $this->container['sent_campaign_emails'] = $sent_campaign_emails;

        return $this;
    }

    /**
     * Gets sent_action_emails
     *
     * @return int
     */
    public function getSentActionEmails()
    {
        return $this->container['sent_action_emails'];
    }

    /**
     * Sets sent_action_emails
     *
     * @param int $sent_action_emails sent_action_emails
     *
     * @return self
     */
    public function setSentActionEmails($sent_action_emails)
    {
        $this->container['sent_action_emails'] = $sent_action_emails;

        return $this;
    }

    /**
     * Gets sent_email_emails
     *
     * @return int
     */
    public function getSentEmailEmails()
    {
        return $this->container['sent_email_emails'];
    }

    /**
     * Sets sent_email_emails
     *
     * @param int $sent_email_emails sent_email_emails
     *
     * @return self
     */
    public function setSentEmailEmails($sent_email_emails)
    {
        $this->container['sent_email_emails'] = $sent_email_emails;

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
     * Gets emails_usage
     *
     * @return float
     */
    public function getEmailsUsage()
    {
        return $this->container['emails_usage'];
    }

    /**
     * Sets emails_usage
     *
     * @param float $emails_usage emails_usage
     *
     * @return self
     */
    public function setEmailsUsage($emails_usage)
    {
        $this->container['emails_usage'] = $emails_usage;

        return $this;
    }

    /**
     * Gets contacts_usage
     *
     * @return float
     */
    public function getContactsUsage()
    {
        return $this->container['contacts_usage'];
    }

    /**
     * Sets contacts_usage
     *
     * @param float $contacts_usage contacts_usage
     *
     * @return self
     */
    public function setContactsUsage($contacts_usage)
    {
        $this->container['contacts_usage'] = $contacts_usage;

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
     * Gets bounce_hard_rate
     *
     * @return float
     */
    public function getBounceHardRate()
    {
        return $this->container['bounce_hard_rate'];
    }

    /**
     * Sets bounce_hard_rate
     *
     * @param float $bounce_hard_rate bounce_hard_rate
     *
     * @return self
     */
    public function setBounceHardRate($bounce_hard_rate)
    {
        $this->container['bounce_hard_rate'] = $bounce_hard_rate;

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
     * Gets current_lists
     *
     * @return int
     */
    public function getCurrentLists()
    {
        return $this->container['current_lists'];
    }

    /**
     * Sets current_lists
     *
     * @param int $current_lists current_lists
     *
     * @return self
     */
    public function setCurrentLists($current_lists)
    {
        $this->container['current_lists'] = $current_lists;

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


