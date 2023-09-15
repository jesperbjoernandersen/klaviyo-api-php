<?php
/**
 * CampaignCreateQueryResourceObjectAttributes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klaviyo API
 *
 * The Klaviyo REST API. Please visit https://developers.klaviyo.com for more details.
 *
 * The version of the OpenAPI document: 2023-09-15
 * Contact: developers@klaviyo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KlaviyoAPI\Model;

use \ArrayAccess;
use \KlaviyoAPI\ObjectSerializer;

/**
 * CampaignCreateQueryResourceObjectAttributes Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CampaignCreateQueryResourceObjectAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignCreateQueryResourceObject_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'audiences' => '\KlaviyoAPI\Model\AudiencesSubObject',
        'send_strategy' => '\KlaviyoAPI\Model\SendStrategySubObject',
        'send_options' => '\KlaviyoAPI\Model\CampaignCreateQueryResourceObjectAttributesSendOptions',
        'tracking_options' => '\KlaviyoAPI\Model\CampaignCreateQueryResourceObjectAttributesTrackingOptions',
        'campaign_messages' => '\KlaviyoAPI\Model\CampaignCreateQueryResourceObjectAttributesCampaignMessages'
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
        'audiences' => null,
        'send_strategy' => null,
        'send_options' => null,
        'tracking_options' => null,
        'campaign_messages' => null
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
        'audiences' => 'audiences',
        'send_strategy' => 'send_strategy',
        'send_options' => 'send_options',
        'tracking_options' => 'tracking_options',
        'campaign_messages' => 'campaign-messages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'audiences' => 'setAudiences',
        'send_strategy' => 'setSendStrategy',
        'send_options' => 'setSendOptions',
        'tracking_options' => 'setTrackingOptions',
        'campaign_messages' => 'setCampaignMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'audiences' => 'getAudiences',
        'send_strategy' => 'getSendStrategy',
        'send_options' => 'getSendOptions',
        'tracking_options' => 'getTrackingOptions',
        'campaign_messages' => 'getCampaignMessages'
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
        $this->container['audiences'] = $data['audiences'] ?? null;
        $this->container['send_strategy'] = $data['send_strategy'] ?? null;
        $this->container['send_options'] = $data['send_options'] ?? null;
        $this->container['tracking_options'] = $data['tracking_options'] ?? null;
        $this->container['campaign_messages'] = $data['campaign_messages'] ?? null;
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
        if ($this->container['audiences'] === null) {
            $invalidProperties[] = "'audiences' can't be null";
        }
        if ($this->container['send_strategy'] === null) {
            $invalidProperties[] = "'send_strategy' can't be null";
        }
        if ($this->container['campaign_messages'] === null) {
            $invalidProperties[] = "'campaign_messages' can't be null";
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
     * @param string $name The campaign name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets audiences
     *
     * @return \KlaviyoAPI\Model\AudiencesSubObject
     */
    public function getAudiences()
    {
        return $this->container['audiences'];
    }

    /**
     * Sets audiences
     *
     * @param \KlaviyoAPI\Model\AudiencesSubObject $audiences audiences
     *
     * @return self
     */
    public function setAudiences($audiences)
    {
        $this->container['audiences'] = $audiences;

        return $this;
    }

    /**
     * Gets send_strategy
     *
     * @return \KlaviyoAPI\Model\SendStrategySubObject
     */
    public function getSendStrategy()
    {
        return $this->container['send_strategy'];
    }

    /**
     * Sets send_strategy
     *
     * @param \KlaviyoAPI\Model\SendStrategySubObject $send_strategy send_strategy
     *
     * @return self
     */
    public function setSendStrategy($send_strategy)
    {
        $this->container['send_strategy'] = $send_strategy;

        return $this;
    }

    /**
     * Gets send_options
     *
     * @return \KlaviyoAPI\Model\CampaignCreateQueryResourceObjectAttributesSendOptions|null
     */
    public function getSendOptions()
    {
        return $this->container['send_options'];
    }

    /**
     * Sets send_options
     *
     * @param \KlaviyoAPI\Model\CampaignCreateQueryResourceObjectAttributesSendOptions|null $send_options send_options
     *
     * @return self
     */
    public function setSendOptions($send_options)
    {
        $this->container['send_options'] = $send_options;

        return $this;
    }

    /**
     * Gets tracking_options
     *
     * @return \KlaviyoAPI\Model\CampaignCreateQueryResourceObjectAttributesTrackingOptions|null
     */
    public function getTrackingOptions()
    {
        return $this->container['tracking_options'];
    }

    /**
     * Sets tracking_options
     *
     * @param \KlaviyoAPI\Model\CampaignCreateQueryResourceObjectAttributesTrackingOptions|null $tracking_options tracking_options
     *
     * @return self
     */
    public function setTrackingOptions($tracking_options)
    {
        $this->container['tracking_options'] = $tracking_options;

        return $this;
    }

    /**
     * Gets campaign_messages
     *
     * @return \KlaviyoAPI\Model\CampaignCreateQueryResourceObjectAttributesCampaignMessages
     */
    public function getCampaignMessages()
    {
        return $this->container['campaign_messages'];
    }

    /**
     * Sets campaign_messages
     *
     * @param \KlaviyoAPI\Model\CampaignCreateQueryResourceObjectAttributesCampaignMessages $campaign_messages campaign_messages
     *
     * @return self
     */
    public function setCampaignMessages($campaign_messages)
    {
        $this->container['campaign_messages'] = $campaign_messages;

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


