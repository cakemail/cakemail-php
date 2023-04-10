<?php
/**
 * EmailLogResponse
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
 * The version of the OpenAPI document: 1.12.11
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
 * EmailLogResponse Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EmailLogResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailLogResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'sent_id' => 'int',
        'email_id' => 'int',
        'group_id' => 'int',
        'email' => 'string',
        'type' => '\Cakemail\Lib\Model\EventTypeResponse',
        'timestamp' => 'int',
        'user_agent' => '\Cakemail\Lib\Model\UserInfo',
        'clickthru_url' => 'string',
        'dsn_message' => 'string',
        'sender_name' => 'string',
        'sender_email' => 'string',
        'source_ip' => 'string',
        'envelope_from' => 'string',
        'additional_headers' => '\Cakemail\Lib\Model\AdditionalEmailHeader[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'sent_id' => null,
        'email_id' => null,
        'group_id' => null,
        'email' => null,
        'type' => null,
        'timestamp' => null,
        'user_agent' => null,
        'clickthru_url' => null,
        'dsn_message' => null,
        'sender_name' => null,
        'sender_email' => null,
        'source_ip' => null,
        'envelope_from' => null,
        'additional_headers' => null
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
        'id' => 'id',
        'sent_id' => 'sent_id',
        'email_id' => 'email_id',
        'group_id' => 'group_id',
        'email' => 'email',
        'type' => 'type',
        'timestamp' => 'timestamp',
        'user_agent' => 'user_agent',
        'clickthru_url' => 'clickthru_url',
        'dsn_message' => 'dsn_message',
        'sender_name' => 'sender_name',
        'sender_email' => 'sender_email',
        'source_ip' => 'source_ip',
        'envelope_from' => 'envelope_from',
        'additional_headers' => 'additional_headers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sent_id' => 'setSentId',
        'email_id' => 'setEmailId',
        'group_id' => 'setGroupId',
        'email' => 'setEmail',
        'type' => 'setType',
        'timestamp' => 'setTimestamp',
        'user_agent' => 'setUserAgent',
        'clickthru_url' => 'setClickthruUrl',
        'dsn_message' => 'setDsnMessage',
        'sender_name' => 'setSenderName',
        'sender_email' => 'setSenderEmail',
        'source_ip' => 'setSourceIp',
        'envelope_from' => 'setEnvelopeFrom',
        'additional_headers' => 'setAdditionalHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sent_id' => 'getSentId',
        'email_id' => 'getEmailId',
        'group_id' => 'getGroupId',
        'email' => 'getEmail',
        'type' => 'getType',
        'timestamp' => 'getTimestamp',
        'user_agent' => 'getUserAgent',
        'clickthru_url' => 'getClickthruUrl',
        'dsn_message' => 'getDsnMessage',
        'sender_name' => 'getSenderName',
        'sender_email' => 'getSenderEmail',
        'source_ip' => 'getSourceIp',
        'envelope_from' => 'getEnvelopeFrom',
        'additional_headers' => 'getAdditionalHeaders'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['sent_id'] = $data['sent_id'] ?? null;
        $this->container['email_id'] = $data['email_id'] ?? null;
        $this->container['group_id'] = $data['group_id'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['user_agent'] = $data['user_agent'] ?? null;
        $this->container['clickthru_url'] = $data['clickthru_url'] ?? null;
        $this->container['dsn_message'] = $data['dsn_message'] ?? null;
        $this->container['sender_name'] = $data['sender_name'] ?? null;
        $this->container['sender_email'] = $data['sender_email'] ?? null;
        $this->container['source_ip'] = $data['source_ip'] ?? null;
        $this->container['envelope_from'] = $data['envelope_from'] ?? null;
        $this->container['additional_headers'] = $data['additional_headers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sent_id
     *
     * @return int|null
     * @deprecated
     */
    public function getSentId()
    {
        return $this->container['sent_id'];
    }

    /**
     * Sets sent_id
     *
     * @param int|null $sent_id sent_id
     *
     * @return self
     * @deprecated
     */
    public function setSentId($sent_id)
    {
        $this->container['sent_id'] = $sent_id;

        return $this;
    }

    /**
     * Gets email_id
     *
     * @return int|null
     */
    public function getEmailId()
    {
        return $this->container['email_id'];
    }

    /**
     * Sets email_id
     *
     * @param int|null $email_id email_id
     *
     * @return self
     */
    public function setEmailId($email_id)
    {
        $this->container['email_id'] = $email_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int|null $group_id group_id
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Cakemail\Lib\Model\EventTypeResponse|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Cakemail\Lib\Model\EventTypeResponse|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int|null $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return \Cakemail\Lib\Model\UserInfo|null
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param \Cakemail\Lib\Model\UserInfo|null $user_agent user_agent
     *
     * @return self
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets clickthru_url
     *
     * @return string|null
     */
    public function getClickthruUrl()
    {
        return $this->container['clickthru_url'];
    }

    /**
     * Sets clickthru_url
     *
     * @param string|null $clickthru_url clickthru_url
     *
     * @return self
     */
    public function setClickthruUrl($clickthru_url)
    {
        $this->container['clickthru_url'] = $clickthru_url;

        return $this;
    }

    /**
     * Gets dsn_message
     *
     * @return string|null
     */
    public function getDsnMessage()
    {
        return $this->container['dsn_message'];
    }

    /**
     * Sets dsn_message
     *
     * @param string|null $dsn_message dsn_message
     *
     * @return self
     */
    public function setDsnMessage($dsn_message)
    {
        $this->container['dsn_message'] = $dsn_message;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string|null
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string|null $sender_name sender_name
     *
     * @return self
     */
    public function setSenderName($sender_name)
    {
        $this->container['sender_name'] = $sender_name;

        return $this;
    }

    /**
     * Gets sender_email
     *
     * @return string|null
     */
    public function getSenderEmail()
    {
        return $this->container['sender_email'];
    }

    /**
     * Sets sender_email
     *
     * @param string|null $sender_email sender_email
     *
     * @return self
     */
    public function setSenderEmail($sender_email)
    {
        $this->container['sender_email'] = $sender_email;

        return $this;
    }

    /**
     * Gets source_ip
     *
     * @return string|null
     */
    public function getSourceIp()
    {
        return $this->container['source_ip'];
    }

    /**
     * Sets source_ip
     *
     * @param string|null $source_ip source_ip
     *
     * @return self
     */
    public function setSourceIp($source_ip)
    {
        $this->container['source_ip'] = $source_ip;

        return $this;
    }

    /**
     * Gets envelope_from
     *
     * @return string|null
     */
    public function getEnvelopeFrom()
    {
        return $this->container['envelope_from'];
    }

    /**
     * Sets envelope_from
     *
     * @param string|null $envelope_from envelope_from
     *
     * @return self
     */
    public function setEnvelopeFrom($envelope_from)
    {
        $this->container['envelope_from'] = $envelope_from;

        return $this;
    }

    /**
     * Gets additional_headers
     *
     * @return \Cakemail\Lib\Model\AdditionalEmailHeader[]|null
     */
    public function getAdditionalHeaders()
    {
        return $this->container['additional_headers'];
    }

    /**
     * Sets additional_headers
     *
     * @param \Cakemail\Lib\Model\AdditionalEmailHeader[]|null $additional_headers additional_headers
     *
     * @return self
     */
    public function setAdditionalHeaders($additional_headers)
    {
        $this->container['additional_headers'] = $additional_headers;

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


