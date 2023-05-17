<?php
/**
 * RemoveInterestsFromContacts
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
 * RemoveInterestsFromContacts Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RemoveInterestsFromContacts implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemoveInterestsFromContacts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'interests' => 'string[]',
        'contact_ids' => 'int[]',
        'query' => 'string',
        'fiql' => 'string',
        'json' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'interests' => null,
        'contact_ids' => null,
        'query' => null,
        'fiql' => null,
        'json' => null
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
        'interests' => 'interests',
        'contact_ids' => 'contact_ids',
        'query' => 'query',
        'fiql' => 'fiql',
        'json' => 'json'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interests' => 'setInterests',
        'contact_ids' => 'setContactIds',
        'query' => 'setQuery',
        'fiql' => 'setFiql',
        'json' => 'setJson'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interests' => 'getInterests',
        'contact_ids' => 'getContactIds',
        'query' => 'getQuery',
        'fiql' => 'getFiql',
        'json' => 'getJson'
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
        $this->container['interests'] = $data['interests'] ?? null;
        $this->container['contact_ids'] = $data['contact_ids'] ?? null;
        $this->container['query'] = $data['query'] ?? null;
        $this->container['fiql'] = $data['fiql'] ?? null;
        $this->container['json'] = $data['json'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['interests'] === null) {
            $invalidProperties[] = "'interests' can't be null";
        }
        if ((count($this->container['interests']) > 16)) {
            $invalidProperties[] = "invalid value for 'interests', number of items must be less than or equal to 16.";
        }

        if (!is_null($this->container['contact_ids']) && (count($this->container['contact_ids']) > 1024)) {
            $invalidProperties[] = "invalid value for 'contact_ids', number of items must be less than or equal to 1024.";
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
     * Gets interests
     *
     * @return string[]
     */
    public function getInterests()
    {
        return $this->container['interests'];
    }

    /**
     * Sets interests
     *
     * @param string[] $interests interests
     *
     * @return self
     */
    public function setInterests($interests)
    {

        if ((count($interests) > 16)) {
            throw new \InvalidArgumentException('invalid value for $interests when calling RemoveInterestsFromContacts., number of items must be less than or equal to 16.');
        }
        $this->container['interests'] = $interests;

        return $this;
    }

    /**
     * Gets contact_ids
     *
     * @return int[]|null
     */
    public function getContactIds()
    {
        return $this->container['contact_ids'];
    }

    /**
     * Sets contact_ids
     *
     * @param int[]|null $contact_ids contact_ids
     *
     * @return self
     */
    public function setContactIds($contact_ids)
    {

        if (!is_null($contact_ids) && (count($contact_ids) > 1024)) {
            throw new \InvalidArgumentException('invalid value for $contact_ids when calling RemoveInterestsFromContacts., number of items must be less than or equal to 1024.');
        }
        $this->container['contact_ids'] = $contact_ids;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string|null $query query
     *
     * @return self
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets fiql
     *
     * @return string|null
     */
    public function getFiql()
    {
        return $this->container['fiql'];
    }

    /**
     * Sets fiql
     *
     * @param string|null $fiql fiql
     *
     * @return self
     */
    public function setFiql($fiql)
    {
        $this->container['fiql'] = $fiql;

        return $this;
    }

    /**
     * Gets json
     *
     * @return object|null
     */
    public function getJson()
    {
        return $this->container['json'];
    }

    /**
     * Sets json
     *
     * @param object|null $json json
     *
     * @return self
     */
    public function setJson($json)
    {
        $this->container['json'] = $json;

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


