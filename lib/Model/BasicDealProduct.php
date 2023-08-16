<?php
/**
 * BasicDealProduct
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
 * BasicDealProduct Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BasicDealProduct implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BasicDealProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'product_id' => 'int',
        'item_price' => 'float',
        'quantity' => 'int',
        'discount' => 'float',
        'discount_type' => 'string',
        'duration' => 'float',
        'duration_unit' => 'DealProductUnitDuration',
        'product_variation_id' => 'int',
        'comments' => 'string',
        'tax' => 'float',
        'tax_method' => 'string',
        'enabled_flag' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_id' => null,
        'item_price' => null,
        'quantity' => null,
        'discount' => null,
        'discount_type' => null,
        'duration' => null,
        'duration_unit' => null,
        'product_variation_id' => null,
        'comments' => null,
        'tax' => null,
        'tax_method' => null,
        'enabled_flag' => null
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
        'product_id' => 'product_id',
        'item_price' => 'item_price',
        'quantity' => 'quantity',
        'discount' => 'discount',
        'discount_type' => 'discount_type',
        'duration' => 'duration',
        'duration_unit' => 'duration_unit',
        'product_variation_id' => 'product_variation_id',
        'comments' => 'comments',
        'tax' => 'tax',
        'tax_method' => 'tax_method',
        'enabled_flag' => 'enabled_flag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'item_price' => 'setItemPrice',
        'quantity' => 'setQuantity',
        'discount' => 'setDiscount',
        'discount_type' => 'setDiscountType',
        'duration' => 'setDuration',
        'duration_unit' => 'setDurationUnit',
        'product_variation_id' => 'setProductVariationId',
        'comments' => 'setComments',
        'tax' => 'setTax',
        'tax_method' => 'setTaxMethod',
        'enabled_flag' => 'setEnabledFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'item_price' => 'getItemPrice',
        'quantity' => 'getQuantity',
        'discount' => 'getDiscount',
        'discount_type' => 'getDiscountType',
        'duration' => 'getDuration',
        'duration_unit' => 'getDurationUnit',
        'product_variation_id' => 'getProductVariationId',
        'comments' => 'getComments',
        'tax' => 'getTax',
        'tax_method' => 'getTaxMethod',
        'enabled_flag' => 'getEnabledFlag'
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

    const DISCOUNT_TYPE_PERCENTAGE = 'percentage';
    const DISCOUNT_TYPE_AMOUNT = 'amount';
    const TAX_METHOD_EXCLUSIVE = 'exclusive';
    const TAX_METHOD_INCLUSIVE = 'inclusive';
    const TAX_METHOD_NONE = 'none';

    /**
     * Gets allowable values of the enum
     *
     * @phpstan-return  array<string|int>
     * @phpsalm-return  array<string|int>
     * @return (string|int)[]
     */
    public function getDiscountTypeAllowableValues(): array
    {
        return [
            self::DISCOUNT_TYPE_PERCENTAGE,
            self::DISCOUNT_TYPE_AMOUNT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @phpstan-return  array<string|int>
     * @phpsalm-return  array<string|int>
     * @return (string|int)[]
     */
    public function getTaxMethodAllowableValues(): array
    {
        return [
            self::TAX_METHOD_EXCLUSIVE,
            self::TAX_METHOD_INCLUSIVE,
            self::TAX_METHOD_NONE,
        ];
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
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['item_price'] = $data['item_price'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['discount'] = $data['discount'] ?? 0;
        $this->container['discount_type'] = $data['discount_type'] ?? 'percentage';
        $this->container['duration'] = $data['duration'] ?? 1;
        $this->container['duration_unit'] = $data['duration_unit'] ?? null;
        $this->container['product_variation_id'] = $data['product_variation_id'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['tax'] = $data['tax'] ?? 0;
        $this->container['tax_method'] = $data['tax_method'] ?? null;
        $this->container['enabled_flag'] = $data['enabled_flag'] ?? true;
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

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['item_price'] === null) {
            $invalidProperties[] = "'item_price' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        $allowedValues = $this->getDiscountTypeAllowableValues();
        if (!is_null($this->container['discount_type']) && !in_array($this->container['discount_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'discount_type', must be one of '%s'",
                $this->container['discount_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTaxMethodAllowableValues();
        if (!is_null($this->container['tax_method']) && !in_array($this->container['tax_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tax_method', must be one of '%s'",
                $this->container['tax_method'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id The ID of the product to use
     *
     * @return self
     */
    public function setProductId($product_id): self
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets item_price
     *
     * @return float
     */
    public function getItemPrice()
    {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price
     *
     * @param float $item_price The price at which this product will be added to the deal
     *
     * @return self
     */
    public function setItemPrice($item_price): self
    {
        $this->container['item_price'] = $item_price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Quantity – e.g. how many items of this product will be added to the deal
     *
     * @return self
     */
    public function setQuantity($quantity): self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float|null $discount The value of the discount. The `discount_type` field can be used to specify whether the value is an amount or a percentage.
     *
     * @return self
     */
    public function setDiscount($discount): self
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets discount_type
     *
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     *
     * @param string|null $discount_type The type of the discount's value.
     *
     * @return self
     */
    public function setDiscountType($discount_type): self
    {
        $allowedValues = $this->getDiscountTypeAllowableValues();
        if (!is_null($discount_type) && !in_array($discount_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'discount_type', must be one of '%s'",
                    $discount_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['discount_type'] = $discount_type;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return float|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param float|null $duration The duration of the product. If omitted, will be set to 1.
     *
     * @return self
     */
    public function setDuration($duration): self
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets duration_unit
     *
     * @return DealProductUnitDuration|null
     */
    public function getDurationUnit()
    {
        return $this->container['duration_unit'];
    }

    /**
     * Sets duration_unit
     *
     * @param DealProductUnitDuration|null $duration_unit The unit duration of the product
     *
     * @return self
     */
    public function setDurationUnit($duration_unit): self
    {
        $this->container['duration_unit'] = $duration_unit;

        return $this;
    }

    /**
     * Gets product_variation_id
     *
     * @return int|null
     */
    public function getProductVariationId()
    {
        return $this->container['product_variation_id'];
    }

    /**
     * Sets product_variation_id
     *
     * @param int|null $product_variation_id The ID of the product variation to use. When omitted, no variation will be used.
     *
     * @return self
     */
    public function setProductVariationId($product_variation_id): self
    {
        $this->container['product_variation_id'] = $product_variation_id;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments A textual comment associated with this product-deal attachment
     *
     * @return self
     */
    public function setComments($comments): self
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return float|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param float|null $tax The tax percentage
     *
     * @return self
     */
    public function setTax($tax): self
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets tax_method
     *
     * @return string|null
     */
    public function getTaxMethod()
    {
        return $this->container['tax_method'];
    }

    /**
     * Sets tax_method
     *
     * @param string|null $tax_method The tax option to be applied to the products. When using `inclusive`, the tax percentage will already be included in the price. When using `exclusive`, the tax will not be included in the price. When using `none`, no tax will be added. Use the `tax` field for defining the tax percentage amount. By default, the user setting value for tax options will be used. Changing this in one product affects the rest of the products attached to the deal.
     *
     * @return self
     */
    public function setTaxMethod($tax_method): self
    {
        $allowedValues = $this->getTaxMethodAllowableValues();
        if (!is_null($tax_method) && !in_array($tax_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tax_method', must be one of '%s'",
                    $tax_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_method'] = $tax_method;

        return $this;
    }

    /**
     * Gets enabled_flag
     *
     * @return bool|null
     */
    public function getEnabledFlag()
    {
        return $this->container['enabled_flag'];
    }

    /**
     * Sets enabled_flag
     *
     * @param bool|null $enabled_flag Whether the product is enabled for a deal or not. This makes it possible to add products to a deal with a specific price and discount criteria, but keep them disabled, which refrains them from being included in the deal value calculation. When omitted, the product will be marked as enabled by default.
     *
     * @return self
     */
    public function setEnabledFlag($enabled_flag): self
    {
        $this->container['enabled_flag'] = $enabled_flag;

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


