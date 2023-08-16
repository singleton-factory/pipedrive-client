<?php
/**
 * BaseStage
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pipedrive API v1
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Pipedrive\Model;

use ArrayAccess;
use JsonException;
use JsonSerializable;
use Pipedrive\ObjectSerializer;

/**
 * BaseStage Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BaseStage implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BaseStage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'order_nr' => 'int',
        'name' => 'string',
        'active_flag' => 'bool',
        'deal_probability' => 'int',
        'pipeline_id' => 'int',
        'rotten_flag' => 'bool',
        'rotten_days' => 'int',
        'add_time' => 'string',
        'update_time' => 'string'
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
        'order_nr' => null,
        'name' => null,
        'active_flag' => null,
        'deal_probability' => null,
        'pipeline_id' => null,
        'rotten_flag' => null,
        'rotten_days' => null,
        'add_time' => null,
        'update_time' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string|null>
     * @psalm-return array<string, string|null>
     * @return array
     */
    public static function openAPIFormats(): array
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
        'order_nr' => 'order_nr',
        'name' => 'name',
        'active_flag' => 'active_flag',
        'deal_probability' => 'deal_probability',
        'pipeline_id' => 'pipeline_id',
        'rotten_flag' => 'rotten_flag',
        'rotten_days' => 'rotten_days',
        'add_time' => 'add_time',
        'update_time' => 'update_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'order_nr' => 'setOrderNr',
        'name' => 'setName',
        'active_flag' => 'setActiveFlag',
        'deal_probability' => 'setDealProbability',
        'pipeline_id' => 'setPipelineId',
        'rotten_flag' => 'setRottenFlag',
        'rotten_days' => 'setRottenDays',
        'add_time' => 'setAddTime',
        'update_time' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'order_nr' => 'getOrderNr',
        'name' => 'getName',
        'active_flag' => 'getActiveFlag',
        'deal_probability' => 'getDealProbability',
        'pipeline_id' => 'getPipelineId',
        'rotten_flag' => 'getRottenFlag',
        'rotten_days' => 'getRottenDays',
        'add_time' => 'getAddTime',
        'update_time' => 'getUpdateTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     * @phpstan-var array<int|string, mixed>
     * @psalm-var array<int|string, mixed>
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @phpstan-param array<string, mixed>|null $data
     * @psalm-param array<string, mixed>|null $data
     * @param array|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['order_nr'] = $data['order_nr'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['active_flag'] = $data['active_flag'] ?? null;
        $this->container['deal_probability'] = $data['deal_probability'] ?? null;
        $this->container['pipeline_id'] = $data['pipeline_id'] ?? null;
        $this->container['rotten_flag'] = $data['rotten_flag'] ?? null;
        $this->container['rotten_days'] = $data['rotten_days'] ?? null;
        $this->container['add_time'] = $data['add_time'] ?? null;
        $this->container['update_time'] = $data['update_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     * @phpstan-return array<int, string>
     * @psalm-return array<int, string>
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
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
     * @param int|null $id The ID of the stage
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets order_nr
     *
     * @return int|null
     */
    public function getOrderNr()
    {
        return $this->container['order_nr'];
    }

    /**
     * Sets order_nr
     *
     * @param int|null $order_nr Defines the order of the stage
     *
     * @return self
     */
    public function setOrderNr($order_nr): self
    {
        $this->container['order_nr'] = $order_nr;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the stage
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets active_flag
     *
     * @return bool|null
     */
    public function getActiveFlag()
    {
        return $this->container['active_flag'];
    }

    /**
     * Sets active_flag
     *
     * @param bool|null $active_flag Whether the stage is active or deleted
     *
     * @return self
     */
    public function setActiveFlag($active_flag): self
    {
        $this->container['active_flag'] = $active_flag;

        return $this;
    }

    /**
     * Gets deal_probability
     *
     * @return int|null
     */
    public function getDealProbability()
    {
        return $this->container['deal_probability'];
    }

    /**
     * Sets deal_probability
     *
     * @param int|null $deal_probability The success probability percentage of the deal. Used/shown when the deal weighted values are used.
     *
     * @return self
     */
    public function setDealProbability($deal_probability): self
    {
        $this->container['deal_probability'] = $deal_probability;

        return $this;
    }

    /**
     * Gets pipeline_id
     *
     * @return int|null
     */
    public function getPipelineId()
    {
        return $this->container['pipeline_id'];
    }

    /**
     * Sets pipeline_id
     *
     * @param int|null $pipeline_id The ID of the pipeline to add the stage to
     *
     * @return self
     */
    public function setPipelineId($pipeline_id): self
    {
        $this->container['pipeline_id'] = $pipeline_id;

        return $this;
    }

    /**
     * Gets rotten_flag
     *
     * @return bool|null
     */
    public function getRottenFlag()
    {
        return $this->container['rotten_flag'];
    }

    /**
     * Sets rotten_flag
     *
     * @param bool|null $rotten_flag Whether deals in this stage can become rotten
     *
     * @return self
     */
    public function setRottenFlag($rotten_flag): self
    {
        $this->container['rotten_flag'] = $rotten_flag;

        return $this;
    }

    /**
     * Gets rotten_days
     *
     * @return int|null
     */
    public function getRottenDays()
    {
        return $this->container['rotten_days'];
    }

    /**
     * Sets rotten_days
     *
     * @param int|null $rotten_days The number of days the deals not updated in this stage would become rotten. Applies only if the `rotten_flag` is set.
     *
     * @return self
     */
    public function setRottenDays($rotten_days): self
    {
        $this->container['rotten_days'] = $rotten_days;

        return $this;
    }

    /**
     * Gets add_time
     *
     * @return string|null
     */
    public function getAddTime()
    {
        return $this->container['add_time'];
    }

    /**
     * Sets add_time
     *
     * @param string|null $add_time The stage creation time. Format: YYYY-MM-DD HH:MM:SS.
     *
     * @return self
     */
    public function setAddTime($add_time): self
    {
        $this->container['add_time'] = $add_time;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string|null $update_time The stage update time. Format: YYYY-MM-DD HH:MM:SS.
     *
     * @return self
     */
    public function setUpdateTime($update_time): self
    {
        $this->container['update_time'] = $update_time;

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
     * @return mixed
     */
    public function offsetGet($offset): mixed
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
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}


