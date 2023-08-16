<?php
/**
 * ProductAttachmentDetails
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
 * ProductAttachmentDetails Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductAttachmentDetails implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ProductAttachmentDetails';

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
        'duration_unit' => 'string',
        'product_variation_id' => 'int',
        'comments' => 'string',
        'tax' => 'float',
        'tax_method' => 'string',
        'enabled_flag' => 'bool',
        'id' => 'int',
        'company_id' => 'int',
        'deal_id' => 'int',
        'sum_no_discount' => 'float',
        'sum' => 'float',
        'currency' => 'string',
        'add_time' => 'string',
        'last_edit' => 'string',
        'active_flag' => 'bool',
        'name' => 'string'
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
        'enabled_flag' => null,
        'id' => null,
        'company_id' => null,
        'deal_id' => null,
        'sum_no_discount' => null,
        'sum' => null,
        'currency' => null,
        'add_time' => null,
        'last_edit' => null,
        'active_flag' => null,
        'name' => null
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
        'enabled_flag' => 'enabled_flag',
        'id' => 'id',
        'company_id' => 'company_id',
        'deal_id' => 'deal_id',
        'sum_no_discount' => 'sum_no_discount',
        'sum' => 'sum',
        'currency' => 'currency',
        'add_time' => 'add_time',
        'last_edit' => 'last_edit',
        'active_flag' => 'active_flag',
        'name' => 'name'
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
        'enabled_flag' => 'setEnabledFlag',
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'deal_id' => 'setDealId',
        'sum_no_discount' => 'setSumNoDiscount',
        'sum' => 'setSum',
        'currency' => 'setCurrency',
        'add_time' => 'setAddTime',
        'last_edit' => 'setLastEdit',
        'active_flag' => 'setActiveFlag',
        'name' => 'setName'
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
        'enabled_flag' => 'getEnabledFlag',
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'deal_id' => 'getDealId',
        'sum_no_discount' => 'getSumNoDiscount',
        'sum' => 'getSum',
        'currency' => 'getCurrency',
        'add_time' => 'getAddTime',
        'last_edit' => 'getLastEdit',
        'active_flag' => 'getActiveFlag',
        'name' => 'getName'
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
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['tax_method'] = $data['tax_method'] ?? null;
        $this->container['enabled_flag'] = $data['enabled_flag'] ?? true;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['deal_id'] = $data['deal_id'] ?? null;
        $this->container['sum_no_discount'] = $data['sum_no_discount'] ?? null;
        $this->container['sum'] = $data['sum'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['add_time'] = $data['add_time'] ?? null;
        $this->container['last_edit'] = $data['last_edit'] ?? null;
        $this->container['active_flag'] = $data['active_flag'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
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
     * @param int $product_id The ID of the product
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
     * @return string|null
     */
    public function getDurationUnit()
    {
        return $this->container['duration_unit'];
    }

    /**
     * Sets duration_unit
     *
     * @param string|null $duration_unit The type of the duration. (For example hourly, daily, etc.)
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
     * @param float|null $tax The product tax
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
     * @param int|null $id The ID of the deal-product (the ID of the product attached to the deal)
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int|null $company_id The ID of the company
     *
     * @return self
     */
    public function setCompanyId($company_id): self
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets deal_id
     *
     * @return int|null
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param int|null $deal_id The ID of the deal
     *
     * @return self
     */
    public function setDealId($deal_id): self
    {
        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets sum_no_discount
     *
     * @return float|null
     */
    public function getSumNoDiscount()
    {
        return $this->container['sum_no_discount'];
    }

    /**
     * Sets sum_no_discount
     *
     * @param float|null $sum_no_discount The product sum without the discount
     *
     * @return self
     */
    public function setSumNoDiscount($sum_no_discount): self
    {
        $this->container['sum_no_discount'] = $sum_no_discount;

        return $this;
    }

    /**
     * Gets sum
     *
     * @return float|null
     */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
     * Sets sum
     *
     * @param float|null $sum The sum of all the products attached to the deal
     *
     * @return self
     */
    public function setSum($sum): self
    {
        $this->container['sum'] = $sum;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency associated with the deal product
     *
     * @return self
     */
    public function setCurrency($currency): self
    {
        $this->container['currency'] = $currency;

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
     * @param string|null $add_time The date and time when the product was added to the deal
     *
     * @return self
     */
    public function setAddTime($add_time): self
    {
        $this->container['add_time'] = $add_time;

        return $this;
    }

    /**
     * Gets last_edit
     *
     * @return string|null
     */
    public function getLastEdit()
    {
        return $this->container['last_edit'];
    }

    /**
     * Sets last_edit
     *
     * @param string|null $last_edit The date and time when the deal product was last edited
     *
     * @return self
     */
    public function setLastEdit($last_edit): self
    {
        $this->container['last_edit'] = $last_edit;

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
     * @param bool|null $active_flag Whether the product is active or not
     *
     * @return self
     */
    public function setActiveFlag($active_flag): self
    {
        $this->container['active_flag'] = $active_flag;

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
     * @param string|null $name The product name
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->container['name'] = $name;

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


