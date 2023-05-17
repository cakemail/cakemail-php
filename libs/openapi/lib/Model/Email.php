<?php
/**
 * Email
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
 * Email Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Email implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Email';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'group_id' => 'int',
        'tracking' => '\Cakemail\Lib\Model\Tracking2',
        'sender' => '\Cakemail\Lib\Model\Sender',
        'additional_headers' => '\Cakemail\Lib\Model\AdditionalEmailHeader[]',
        'attachment' => '\Cakemail\Lib\Model\Attachment',
        'content' => '\Cakemail\Lib\Model\Content2'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => 'email',
        'group_id' => null,
        'tracking' => null,
        'sender' => null,
        'additional_headers' => null,
        'attachment' => null,
        'content' => null
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
        'email' => 'email',
        'group_id' => 'group_id',
        'tracking' => 'tracking',
        'sender' => 'sender',
        'additional_headers' => 'additional_headers',
        'attachment' => 'attachment',
        'content' => 'content'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'group_id' => 'setGroupId',
        'tracking' => 'setTracking',
        'sender' => 'setSender',
        'additional_headers' => 'setAdditionalHeaders',
        'attachment' => 'setAttachment',
        'content' => 'setContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'group_id' => 'getGroupId',
        'tracking' => 'getTracking',
        'sender' => 'getSender',
        'additional_headers' => 'getAdditionalHeaders',
        'attachment' => 'getAttachment',
        'content' => 'getContent'
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
        $this->container['email'] = $data['email'] ?? null;
        $this->container['group_id'] = $data['group_id'] ?? null;
        $this->container['tracking'] = $data['tracking'] ?? null;
        $this->container['sender'] = $data['sender'] ?? null;
        $this->container['additional_headers'] = $data['additional_headers'] ?? null;
        $this->container['attachment'] = $data['attachment'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if (!is_null($this->container['group_id']) && ($this->container['group_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'group_id', must be bigger than or equal to 1.";
        }

        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * @param int|null $group_id Allows you to group multiple transaction emails together for analytics
     *
     * @return self
     */
    public function setGroupId($group_id)
    {

        if (!is_null($group_id) && ($group_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $group_id when calling Email., must be bigger than or equal to 1.');
        }

        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets tracking
     *
     * @return \Cakemail\Lib\Model\Tracking2|null
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param \Cakemail\Lib\Model\Tracking2|null $tracking tracking
     *
     * @return self
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \Cakemail\Lib\Model\Sender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Cakemail\Lib\Model\Sender $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

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
     * Gets attachment
     *
     * @return \Cakemail\Lib\Model\Attachment|null
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param \Cakemail\Lib\Model\Attachment|null $attachment attachment
     *
     * @return self
     */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets content
     *
     * @return \Cakemail\Lib\Model\Content2
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \Cakemail\Lib\Model\Content2 $content content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

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


