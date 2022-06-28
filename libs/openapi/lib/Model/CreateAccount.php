<?php
/**
 * CreateAccount
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
 * CreateAccount Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'address' => '\Cakemail\Lib\Model\Address',
        'account_owner' => '\Cakemail\Lib\Model\AccountOwner',
        'fax' => 'string',
        'phone' => 'string',
        'website' => 'string',
        'usage_limits' => '\Cakemail\Lib\Model\UsageLimits',
        'domains' => '\Cakemail\Lib\Model\Domains',
        'trial' => 'bool',
        'partner' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'address' => null,
        'account_owner' => null,
        'fax' => null,
        'phone' => null,
        'website' => 'uri',
        'usage_limits' => null,
        'domains' => null,
        'trial' => null,
        'partner' => null
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
        'name' => 'name',
        'address' => 'address',
        'account_owner' => 'account_owner',
        'fax' => 'fax',
        'phone' => 'phone',
        'website' => 'website',
        'usage_limits' => 'usage_limits',
        'domains' => 'domains',
        'trial' => 'trial',
        'partner' => 'partner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'address' => 'setAddress',
        'account_owner' => 'setAccountOwner',
        'fax' => 'setFax',
        'phone' => 'setPhone',
        'website' => 'setWebsite',
        'usage_limits' => 'setUsageLimits',
        'domains' => 'setDomains',
        'trial' => 'setTrial',
        'partner' => 'setPartner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'address' => 'getAddress',
        'account_owner' => 'getAccountOwner',
        'fax' => 'getFax',
        'phone' => 'getPhone',
        'website' => 'getWebsite',
        'usage_limits' => 'getUsageLimits',
        'domains' => 'getDomains',
        'trial' => 'getTrial',
        'partner' => 'getPartner'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['account_owner'] = $data['account_owner'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['website'] = $data['website'] ?? null;
        $this->container['usage_limits'] = $data['usage_limits'] ?? null;
        $this->container['domains'] = $data['domains'] ?? null;
        $this->container['trial'] = $data['trial'] ?? false;
        $this->container['partner'] = $data['partner'] ?? false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['account_owner'] === null) {
            $invalidProperties[] = "'account_owner' can't be null";
        }
        if (!is_null($this->container['fax']) && (mb_strlen($this->container['fax']) < 1)) {
            $invalidProperties[] = "invalid value for 'fax', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 1)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['website']) && (mb_strlen($this->container['website']) > 2083)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be smaller than or equal to 2083.";
        }

        if (!is_null($this->container['website']) && (mb_strlen($this->container['website']) < 1)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be bigger than or equal to 1.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateAccount., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Cakemail\Lib\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Cakemail\Lib\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets account_owner
     *
     * @return \Cakemail\Lib\Model\AccountOwner
     */
    public function getAccountOwner()
    {
        return $this->container['account_owner'];
    }

    /**
     * Sets account_owner
     *
     * @param \Cakemail\Lib\Model\AccountOwner $account_owner account_owner
     *
     * @return self
     */
    public function setAccountOwner($account_owner)
    {
        $this->container['account_owner'] = $account_owner;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax fax
     *
     * @return self
     */
    public function setFax($fax)
    {

        if (!is_null($fax) && (mb_strlen($fax) < 1)) {
            throw new \InvalidArgumentException('invalid length for $fax when calling CreateAccount., must be bigger than or equal to 1.');
        }

        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {

        if (!is_null($phone) && (mb_strlen($phone) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling CreateAccount., must be bigger than or equal to 1.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website website
     *
     * @return self
     */
    public function setWebsite($website)
    {
        if (!is_null($website) && (mb_strlen($website) > 2083)) {
            throw new \InvalidArgumentException('invalid length for $website when calling CreateAccount., must be smaller than or equal to 2083.');
        }
        if (!is_null($website) && (mb_strlen($website) < 1)) {
            throw new \InvalidArgumentException('invalid length for $website when calling CreateAccount., must be bigger than or equal to 1.');
        }

        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets usage_limits
     *
     * @return \Cakemail\Lib\Model\UsageLimits|null
     */
    public function getUsageLimits()
    {
        return $this->container['usage_limits'];
    }

    /**
     * Sets usage_limits
     *
     * @param \Cakemail\Lib\Model\UsageLimits|null $usage_limits usage_limits
     *
     * @return self
     */
    public function setUsageLimits($usage_limits)
    {
        $this->container['usage_limits'] = $usage_limits;

        return $this;
    }

    /**
     * Gets domains
     *
     * @return \Cakemail\Lib\Model\Domains|null
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param \Cakemail\Lib\Model\Domains|null $domains domains
     *
     * @return self
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets trial
     *
     * @return bool|null
     */
    public function getTrial()
    {
        return $this->container['trial'];
    }

    /**
     * Sets trial
     *
     * @param bool|null $trial trial
     *
     * @return self
     */
    public function setTrial($trial)
    {
        $this->container['trial'] = $trial;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return bool|null
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param bool|null $partner partner
     *
     * @return self
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

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


