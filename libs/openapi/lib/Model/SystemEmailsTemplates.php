<?php
/**
 * SystemEmailsTemplates
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
 * SystemEmailsTemplates Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SystemEmailsTemplates implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SystemEmailsTemplates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_confirm' => '\Cakemail\Lib\Model\SystemEmailTemplate[]',
        'user_confirm' => '\Cakemail\Lib\Model\SystemEmailTemplate[]',
        'sender_confirm' => '\Cakemail\Lib\Model\SystemEmailTemplate[]',
        'password_reset' => '\Cakemail\Lib\Model\SystemEmailTemplate[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_confirm' => null,
        'user_confirm' => null,
        'sender_confirm' => null,
        'password_reset' => null
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
        'account_confirm' => 'account_confirm',
        'user_confirm' => 'user_confirm',
        'sender_confirm' => 'sender_confirm',
        'password_reset' => 'password_reset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_confirm' => 'setAccountConfirm',
        'user_confirm' => 'setUserConfirm',
        'sender_confirm' => 'setSenderConfirm',
        'password_reset' => 'setPasswordReset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_confirm' => 'getAccountConfirm',
        'user_confirm' => 'getUserConfirm',
        'sender_confirm' => 'getSenderConfirm',
        'password_reset' => 'getPasswordReset'
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
        $this->container['account_confirm'] = $data['account_confirm'] ?? null;
        $this->container['user_confirm'] = $data['user_confirm'] ?? null;
        $this->container['sender_confirm'] = $data['sender_confirm'] ?? null;
        $this->container['password_reset'] = $data['password_reset'] ?? null;
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
     * Gets account_confirm
     *
     * @return \Cakemail\Lib\Model\SystemEmailTemplate[]|null
     */
    public function getAccountConfirm()
    {
        return $this->container['account_confirm'];
    }

    /**
     * Sets account_confirm
     *
     * @param \Cakemail\Lib\Model\SystemEmailTemplate[]|null $account_confirm account_confirm
     *
     * @return self
     */
    public function setAccountConfirm($account_confirm)
    {
        $this->container['account_confirm'] = $account_confirm;

        return $this;
    }

    /**
     * Gets user_confirm
     *
     * @return \Cakemail\Lib\Model\SystemEmailTemplate[]|null
     */
    public function getUserConfirm()
    {
        return $this->container['user_confirm'];
    }

    /**
     * Sets user_confirm
     *
     * @param \Cakemail\Lib\Model\SystemEmailTemplate[]|null $user_confirm user_confirm
     *
     * @return self
     */
    public function setUserConfirm($user_confirm)
    {
        $this->container['user_confirm'] = $user_confirm;

        return $this;
    }

    /**
     * Gets sender_confirm
     *
     * @return \Cakemail\Lib\Model\SystemEmailTemplate[]|null
     */
    public function getSenderConfirm()
    {
        return $this->container['sender_confirm'];
    }

    /**
     * Sets sender_confirm
     *
     * @param \Cakemail\Lib\Model\SystemEmailTemplate[]|null $sender_confirm sender_confirm
     *
     * @return self
     */
    public function setSenderConfirm($sender_confirm)
    {
        $this->container['sender_confirm'] = $sender_confirm;

        return $this;
    }

    /**
     * Gets password_reset
     *
     * @return \Cakemail\Lib\Model\SystemEmailTemplate[]|null
     */
    public function getPasswordReset()
    {
        return $this->container['password_reset'];
    }

    /**
     * Sets password_reset
     *
     * @param \Cakemail\Lib\Model\SystemEmailTemplate[]|null $password_reset password_reset
     *
     * @return self
     */
    public function setPasswordReset($password_reset)
    {
        $this->container['password_reset'] = $password_reset;

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


