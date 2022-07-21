<?php
/**
 * Tracking3
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
 * The version of the OpenAPI document: 1.11.0
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
 * Tracking3 Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Tracking3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tracking_3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'opens' => 'bool',
        'clicks_html' => 'bool',
        'clicks_text' => 'bool',
        'additional_params' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'opens' => null,
        'clicks_html' => null,
        'clicks_text' => null,
        'additional_params' => null
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
        'opens' => 'opens',
        'clicks_html' => 'clicks_html',
        'clicks_text' => 'clicks_text',
        'additional_params' => 'additional_params'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opens' => 'setOpens',
        'clicks_html' => 'setClicksHtml',
        'clicks_text' => 'setClicksText',
        'additional_params' => 'setAdditionalParams'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opens' => 'getOpens',
        'clicks_html' => 'getClicksHtml',
        'clicks_text' => 'getClicksText',
        'additional_params' => 'getAdditionalParams'
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
        $this->container['opens'] = $data['opens'] ?? null;
        $this->container['clicks_html'] = $data['clicks_html'] ?? null;
        $this->container['clicks_text'] = $data['clicks_text'] ?? null;
        $this->container['additional_params'] = $data['additional_params'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['additional_params']) && (mb_strlen($this->container['additional_params']) < 1)) {
            $invalidProperties[] = "invalid value for 'additional_params', the character length must be bigger than or equal to 1.";
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
     * Gets opens
     *
     * @return bool|null
     */
    public function getOpens()
    {
        return $this->container['opens'];
    }

    /**
     * Sets opens
     *
     * @param bool|null $opens Enable the tracking of opens (only available for the HTML version)
     *
     * @return self
     */
    public function setOpens($opens)
    {
        $this->container['opens'] = $opens;

        return $this;
    }

    /**
     * Gets clicks_html
     *
     * @return bool|null
     */
    public function getClicksHtml()
    {
        return $this->container['clicks_html'];
    }

    /**
     * Sets clicks_html
     *
     * @param bool|null $clicks_html Enable the tracking of link clicks in the HTML version
     *
     * @return self
     */
    public function setClicksHtml($clicks_html)
    {
        $this->container['clicks_html'] = $clicks_html;

        return $this;
    }

    /**
     * Gets clicks_text
     *
     * @return bool|null
     */
    public function getClicksText()
    {
        return $this->container['clicks_text'];
    }

    /**
     * Sets clicks_text
     *
     * @param bool|null $clicks_text Enable the tracking of link clicks in the text version
     *
     * @return self
     */
    public function setClicksText($clicks_text)
    {
        $this->container['clicks_text'] = $clicks_text;

        return $this;
    }

    /**
     * Gets additional_params
     *
     * @return string|null
     */
    public function getAdditionalParams()
    {
        return $this->container['additional_params'];
    }

    /**
     * Sets additional_params
     *
     * @param string|null $additional_params Append additional tracking parameters on all link (should be URL encoded)
     *
     * @return self
     */
    public function setAdditionalParams($additional_params)
    {

        if (!is_null($additional_params) && (mb_strlen($additional_params) < 1)) {
            throw new \InvalidArgumentException('invalid length for $additional_params when calling Tracking3., must be bigger than or equal to 1.');
        }

        $this->container['additional_params'] = $additional_params;

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


