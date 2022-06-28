<?php
/**
 * Redirections1
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
 * Redirections1 Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Redirections1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'redirections_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'after_opt_in' => 'string',
        'after_double_opt_in' => 'string',
        'after_opt_out' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'after_opt_in' => 'uri',
        'after_double_opt_in' => 'uri',
        'after_opt_out' => 'uri'
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
        'after_opt_in' => 'after_opt_in',
        'after_double_opt_in' => 'after_double_opt_in',
        'after_opt_out' => 'after_opt_out'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'after_opt_in' => 'setAfterOptIn',
        'after_double_opt_in' => 'setAfterDoubleOptIn',
        'after_opt_out' => 'setAfterOptOut'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'after_opt_in' => 'getAfterOptIn',
        'after_double_opt_in' => 'getAfterDoubleOptIn',
        'after_opt_out' => 'getAfterOptOut'
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
        $this->container['after_opt_in'] = $data['after_opt_in'] ?? null;
        $this->container['after_double_opt_in'] = $data['after_double_opt_in'] ?? null;
        $this->container['after_opt_out'] = $data['after_opt_out'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['after_opt_in']) && (mb_strlen($this->container['after_opt_in']) > 2083)) {
            $invalidProperties[] = "invalid value for 'after_opt_in', the character length must be smaller than or equal to 2083.";
        }

        if (!is_null($this->container['after_opt_in']) && (mb_strlen($this->container['after_opt_in']) < 1)) {
            $invalidProperties[] = "invalid value for 'after_opt_in', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['after_double_opt_in']) && (mb_strlen($this->container['after_double_opt_in']) > 2083)) {
            $invalidProperties[] = "invalid value for 'after_double_opt_in', the character length must be smaller than or equal to 2083.";
        }

        if (!is_null($this->container['after_double_opt_in']) && (mb_strlen($this->container['after_double_opt_in']) < 1)) {
            $invalidProperties[] = "invalid value for 'after_double_opt_in', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['after_opt_out']) && (mb_strlen($this->container['after_opt_out']) > 2083)) {
            $invalidProperties[] = "invalid value for 'after_opt_out', the character length must be smaller than or equal to 2083.";
        }

        if (!is_null($this->container['after_opt_out']) && (mb_strlen($this->container['after_opt_out']) < 1)) {
            $invalidProperties[] = "invalid value for 'after_opt_out', the character length must be bigger than or equal to 1.";
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
     * Gets after_opt_in
     *
     * @return string|null
     */
    public function getAfterOptIn()
    {
        return $this->container['after_opt_in'];
    }

    /**
     * Sets after_opt_in
     *
     * @param string|null $after_opt_in Redirection after Opt In
     *
     * @return self
     */
    public function setAfterOptIn($after_opt_in)
    {
        if (!is_null($after_opt_in) && (mb_strlen($after_opt_in) > 2083)) {
            throw new \InvalidArgumentException('invalid length for $after_opt_in when calling Redirections1., must be smaller than or equal to 2083.');
        }
        if (!is_null($after_opt_in) && (mb_strlen($after_opt_in) < 1)) {
            throw new \InvalidArgumentException('invalid length for $after_opt_in when calling Redirections1., must be bigger than or equal to 1.');
        }

        $this->container['after_opt_in'] = $after_opt_in;

        return $this;
    }

    /**
     * Gets after_double_opt_in
     *
     * @return string|null
     */
    public function getAfterDoubleOptIn()
    {
        return $this->container['after_double_opt_in'];
    }

    /**
     * Sets after_double_opt_in
     *
     * @param string|null $after_double_opt_in Redirection after Double Opt In
     *
     * @return self
     */
    public function setAfterDoubleOptIn($after_double_opt_in)
    {
        if (!is_null($after_double_opt_in) && (mb_strlen($after_double_opt_in) > 2083)) {
            throw new \InvalidArgumentException('invalid length for $after_double_opt_in when calling Redirections1., must be smaller than or equal to 2083.');
        }
        if (!is_null($after_double_opt_in) && (mb_strlen($after_double_opt_in) < 1)) {
            throw new \InvalidArgumentException('invalid length for $after_double_opt_in when calling Redirections1., must be bigger than or equal to 1.');
        }

        $this->container['after_double_opt_in'] = $after_double_opt_in;

        return $this;
    }

    /**
     * Gets after_opt_out
     *
     * @return string|null
     */
    public function getAfterOptOut()
    {
        return $this->container['after_opt_out'];
    }

    /**
     * Sets after_opt_out
     *
     * @param string|null $after_opt_out Redirection after Opt Out
     *
     * @return self
     */
    public function setAfterOptOut($after_opt_out)
    {
        if (!is_null($after_opt_out) && (mb_strlen($after_opt_out) > 2083)) {
            throw new \InvalidArgumentException('invalid length for $after_opt_out when calling Redirections1., must be smaller than or equal to 2083.');
        }
        if (!is_null($after_opt_out) && (mb_strlen($after_opt_out) < 1)) {
            throw new \InvalidArgumentException('invalid length for $after_opt_out when calling Redirections1., must be bigger than or equal to 1.');
        }

        $this->container['after_opt_out'] = $after_opt_out;

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


