<?php
/**
 * CampaignContent
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
 * The version of the OpenAPI document: 1.2.0
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
 * CampaignContent Class Doc Comment
 *
 * @category Class
 * @package  Cakemail\Lib
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subject' => 'string',
        'html' => 'string',
        'text' => 'string',
        'json' => 'object',
        'template' => 'TemplateId',
        'type' => '\Cakemail\Lib\Model\ContentType',
        'encoding' => '\Cakemail\Lib\Model\Encoding',
        'default_unsubscribe_link' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'subject' => null,
        'html' => null,
        'text' => null,
        'json' => null,
        'template' => null,
        'type' => null,
        'encoding' => null,
        'default_unsubscribe_link' => null
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
        'subject' => 'subject',
        'html' => 'html',
        'text' => 'text',
        'json' => 'json',
        'template' => 'template',
        'type' => 'type',
        'encoding' => 'encoding',
        'default_unsubscribe_link' => 'default_unsubscribe_link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject' => 'setSubject',
        'html' => 'setHtml',
        'text' => 'setText',
        'json' => 'setJson',
        'template' => 'setTemplate',
        'type' => 'setType',
        'encoding' => 'setEncoding',
        'default_unsubscribe_link' => 'setDefaultUnsubscribeLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject' => 'getSubject',
        'html' => 'getHtml',
        'text' => 'getText',
        'json' => 'getJson',
        'template' => 'getTemplate',
        'type' => 'getType',
        'encoding' => 'getEncoding',
        'default_unsubscribe_link' => 'getDefaultUnsubscribeLink'
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
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['json'] = isset($data['json']) ? $data['json'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['default_unsubscribe_link'] = isset($data['default_unsubscribe_link']) ? $data['default_unsubscribe_link'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) < 1)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['html']) && (mb_strlen($this->container['html']) < 1)) {
            $invalidProperties[] = "invalid value for 'html', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) < 1)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 1.";
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
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {

        if (!is_null($subject) && (mb_strlen($subject) < 1)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling CampaignContent., must be bigger than or equal to 1.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string|null
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string|null $html html
     *
     * @return $this
     */
    public function setHtml($html)
    {

        if (!is_null($html) && (mb_strlen($html) < 1)) {
            throw new \InvalidArgumentException('invalid length for $html when calling CampaignContent., must be bigger than or equal to 1.');
        }

        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text text
     *
     * @return $this
     */
    public function setText($text)
    {

        if (!is_null($text) && (mb_strlen($text) < 1)) {
            throw new \InvalidArgumentException('invalid length for $text when calling CampaignContent., must be bigger than or equal to 1.');
        }

        $this->container['text'] = $text;

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
     * @return $this
     */
    public function setJson($json)
    {
        $this->container['json'] = $json;

        return $this;
    }

    /**
     * Gets template
     *
     * @return TemplateId|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param TemplateId|null $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Cakemail\Lib\Model\ContentType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Cakemail\Lib\Model\ContentType|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return \Cakemail\Lib\Model\Encoding|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param \Cakemail\Lib\Model\Encoding|null $encoding encoding
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets default_unsubscribe_link
     *
     * @return bool|null
     */
    public function getDefaultUnsubscribeLink()
    {
        return $this->container['default_unsubscribe_link'];
    }

    /**
     * Sets default_unsubscribe_link
     *
     * @param bool|null $default_unsubscribe_link default_unsubscribe_link
     *
     * @return $this
     */
    public function setDefaultUnsubscribeLink($default_unsubscribe_link)
    {
        $this->container['default_unsubscribe_link'] = $default_unsubscribe_link;

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


