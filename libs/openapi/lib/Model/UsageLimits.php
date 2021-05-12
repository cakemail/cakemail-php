<?php
/**
 * UsageLimits
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
 * The version of the OpenAPI document: 1.4.23
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

use \ArrayAccess;
use \Cakemail\Lib\ObjectSerializer;

/**
 * UsageLimits Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UsageLimits implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UsageLimits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'per_campaign' => 'int',
        'per_month' => 'int',
        'maximum_contacts' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'per_campaign' => null,
        'per_month' => null,
        'maximum_contacts' => null
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
        'per_campaign' => 'per_campaign',
        'per_month' => 'per_month',
        'maximum_contacts' => 'maximum_contacts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'per_campaign' => 'setPerCampaign',
        'per_month' => 'setPerMonth',
        'maximum_contacts' => 'setMaximumContacts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'per_campaign' => 'getPerCampaign',
        'per_month' => 'getPerMonth',
        'maximum_contacts' => 'getMaximumContacts'
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
        $this->container['per_campaign'] = isset($data['per_campaign']) ? $data['per_campaign'] : null;
        $this->container['per_month'] = isset($data['per_month']) ? $data['per_month'] : null;
        $this->container['maximum_contacts'] = isset($data['maximum_contacts']) ? $data['maximum_contacts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['per_campaign']) && ($this->container['per_campaign'] < 0)) {
            $invalidProperties[] = "invalid value for 'per_campaign', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['per_month']) && ($this->container['per_month'] < 0)) {
            $invalidProperties[] = "invalid value for 'per_month', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['maximum_contacts']) && ($this->container['maximum_contacts'] < 0)) {
            $invalidProperties[] = "invalid value for 'maximum_contacts', must be bigger than or equal to 0.";
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
     * Gets per_campaign
     *
     * @return int|null
     */
    public function getPerCampaign()
    {
        return $this->container['per_campaign'];
    }

    /**
     * Sets per_campaign
     *
     * @param int|null $per_campaign per_campaign
     *
     * @return $this
     */
    public function setPerCampaign($per_campaign)
    {

        if (!is_null($per_campaign) && ($per_campaign < 0)) {
            throw new \InvalidArgumentException('invalid value for $per_campaign when calling UsageLimits., must be bigger than or equal to 0.');
        }

        $this->container['per_campaign'] = $per_campaign;

        return $this;
    }

    /**
     * Gets per_month
     *
     * @return int|null
     */
    public function getPerMonth()
    {
        return $this->container['per_month'];
    }

    /**
     * Sets per_month
     *
     * @param int|null $per_month per_month
     *
     * @return $this
     */
    public function setPerMonth($per_month)
    {

        if (!is_null($per_month) && ($per_month < 0)) {
            throw new \InvalidArgumentException('invalid value for $per_month when calling UsageLimits., must be bigger than or equal to 0.');
        }

        $this->container['per_month'] = $per_month;

        return $this;
    }

    /**
     * Gets maximum_contacts
     *
     * @return int|null
     */
    public function getMaximumContacts()
    {
        return $this->container['maximum_contacts'];
    }

    /**
     * Sets maximum_contacts
     *
     * @param int|null $maximum_contacts maximum_contacts
     *
     * @return $this
     */
    public function setMaximumContacts($maximum_contacts)
    {

        if (!is_null($maximum_contacts) && ($maximum_contacts < 0)) {
            throw new \InvalidArgumentException('invalid value for $maximum_contacts when calling UsageLimits., must be bigger than or equal to 0.');
        }

        $this->container['maximum_contacts'] = $maximum_contacts;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


