<?php
/**
 * AddWebhookRequest
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
 * AddWebhookRequest Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddWebhookRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'addWebhookRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'subscription_url' => 'string',
        'event_action' => 'string',
        'event_object' => 'string',
        'user_id' => 'int',
        'http_auth_user' => 'string',
        'http_auth_password' => 'string',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'subscription_url' => null,
        'event_action' => null,
        'event_object' => null,
        'user_id' => null,
        'http_auth_user' => null,
        'http_auth_password' => null,
        'version' => null
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
        'subscription_url' => 'subscription_url',
        'event_action' => 'event_action',
        'event_object' => 'event_object',
        'user_id' => 'user_id',
        'http_auth_user' => 'http_auth_user',
        'http_auth_password' => 'http_auth_password',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subscription_url' => 'setSubscriptionUrl',
        'event_action' => 'setEventAction',
        'event_object' => 'setEventObject',
        'user_id' => 'setUserId',
        'http_auth_user' => 'setHttpAuthUser',
        'http_auth_password' => 'setHttpAuthPassword',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subscription_url' => 'getSubscriptionUrl',
        'event_action' => 'getEventAction',
        'event_object' => 'getEventObject',
        'user_id' => 'getUserId',
        'http_auth_user' => 'getHttpAuthUser',
        'http_auth_password' => 'getHttpAuthPassword',
        'version' => 'getVersion'
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

    const EVENT_ACTION_ADDED = 'added';
    const EVENT_ACTION_UPDATED = 'updated';
    const EVENT_ACTION_MERGED = 'merged';
    const EVENT_ACTION_DELETED = 'deleted';
    const EVENT_ACTION_STAR = '*';
    const EVENT_OBJECT_ACTIVITY = 'activity';
    const EVENT_OBJECT_ACTIVITY_TYPE = 'activityType';
    const EVENT_OBJECT_DEAL = 'deal';
    const EVENT_OBJECT_NOTE = 'note';
    const EVENT_OBJECT_ORGANIZATION = 'organization';
    const EVENT_OBJECT_PERSON = 'person';
    const EVENT_OBJECT_PIPELINE = 'pipeline';
    const EVENT_OBJECT_PRODUCT = 'product';
    const EVENT_OBJECT_STAGE = 'stage';
    const EVENT_OBJECT_USER = 'user';
    const EVENT_OBJECT_STAR = '*';
    const VERSION__1_0 = '1.0';
    const VERSION__2_0 = '2.0';

    /**
     * Gets allowable values of the enum
     *
     * @phpstan-return  array<string|int>
     * @phpsalm-return  array<string|int>
     * @return (string|int)[]
     */
    public function getEventActionAllowableValues(): array
    {
        return [
            self::EVENT_ACTION_ADDED,
            self::EVENT_ACTION_UPDATED,
            self::EVENT_ACTION_MERGED,
            self::EVENT_ACTION_DELETED,
            self::EVENT_ACTION_STAR,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @phpstan-return  array<string|int>
     * @phpsalm-return  array<string|int>
     * @return (string|int)[]
     */
    public function getEventObjectAllowableValues(): array
    {
        return [
            self::EVENT_OBJECT_ACTIVITY,
            self::EVENT_OBJECT_ACTIVITY_TYPE,
            self::EVENT_OBJECT_DEAL,
            self::EVENT_OBJECT_NOTE,
            self::EVENT_OBJECT_ORGANIZATION,
            self::EVENT_OBJECT_PERSON,
            self::EVENT_OBJECT_PIPELINE,
            self::EVENT_OBJECT_PRODUCT,
            self::EVENT_OBJECT_STAGE,
            self::EVENT_OBJECT_USER,
            self::EVENT_OBJECT_STAR,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @phpstan-return  array<string|int>
     * @phpsalm-return  array<string|int>
     * @return (string|int)[]
     */
    public function getVersionAllowableValues(): array
    {
        return [
            self::VERSION__1_0,
            self::VERSION__2_0,
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
        $this->container['subscription_url'] = $data['subscription_url'] ?? null;
        $this->container['event_action'] = $data['event_action'] ?? null;
        $this->container['event_object'] = $data['event_object'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['http_auth_user'] = $data['http_auth_user'] ?? null;
        $this->container['http_auth_password'] = $data['http_auth_password'] ?? null;
        $this->container['version'] = $data['version'] ?? '1.0';
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

        if ($this->container['subscription_url'] === null) {
            $invalidProperties[] = "'subscription_url' can't be null";
        }
        if ($this->container['event_action'] === null) {
            $invalidProperties[] = "'event_action' can't be null";
        }
        $allowedValues = $this->getEventActionAllowableValues();
        if (!is_null($this->container['event_action']) && !in_array($this->container['event_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_action', must be one of '%s'",
                $this->container['event_action'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['event_object'] === null) {
            $invalidProperties[] = "'event_object' can't be null";
        }
        $allowedValues = $this->getEventObjectAllowableValues();
        if (!is_null($this->container['event_object']) && !in_array($this->container['event_object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_object', must be one of '%s'",
                $this->container['event_object'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVersionAllowableValues();
        if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'version', must be one of '%s'",
                $this->container['version'],
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
     * Gets subscription_url
     *
     * @return string
     */
    public function getSubscriptionUrl()
    {
        return $this->container['subscription_url'];
    }

    /**
     * Sets subscription_url
     *
     * @param string $subscription_url A full, valid, publicly accessible URL which determines where to send the notifications. Please note that you cannot use Pipedrive API endpoints as the `subscription_url` and the chosen URL must not redirect to another link.
     *
     * @return self
     */
    public function setSubscriptionUrl($subscription_url): self
    {
        $this->container['subscription_url'] = $subscription_url;

        return $this;
    }

    /**
     * Gets event_action
     *
     * @return string
     */
    public function getEventAction()
    {
        return $this->container['event_action'];
    }

    /**
     * Sets event_action
     *
     * @param string $event_action The type of action to receive notifications about. Wildcard will match all supported actions.
     *
     * @return self
     */
    public function setEventAction($event_action): self
    {
        $allowedValues = $this->getEventActionAllowableValues();
        if (!in_array($event_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_action', must be one of '%s'",
                    $event_action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_action'] = $event_action;

        return $this;
    }

    /**
     * Gets event_object
     *
     * @return string
     */
    public function getEventObject()
    {
        return $this->container['event_object'];
    }

    /**
     * Sets event_object
     *
     * @param string $event_object The type of object to receive notifications about. Wildcard will match all supported objects.
     *
     * @return self
     */
    public function setEventObject($event_object): self
    {
        $allowedValues = $this->getEventObjectAllowableValues();
        if (!in_array($event_object, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_object', must be one of '%s'",
                    $event_object,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_object'] = $event_object;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id The ID of the user that this webhook will be authorized with. You have the option to use a different user's `user_id`. If it is not set, the current user's `user_id` will be used. As each webhook event is checked against a user’s permissions, the webhook will only be sent if the user has access to the specified object(s). If you want to receive notifications for all events, please use a top-level admin user’s `user_id`.
     *
     * @return self
     */
    public function setUserId($user_id): self
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets http_auth_user
     *
     * @return string|null
     */
    public function getHttpAuthUser()
    {
        return $this->container['http_auth_user'];
    }

    /**
     * Sets http_auth_user
     *
     * @param string|null $http_auth_user The HTTP basic auth username of the subscription URL endpoint (if required)
     *
     * @return self
     */
    public function setHttpAuthUser($http_auth_user): self
    {
        $this->container['http_auth_user'] = $http_auth_user;

        return $this;
    }

    /**
     * Gets http_auth_password
     *
     * @return string|null
     */
    public function getHttpAuthPassword()
    {
        return $this->container['http_auth_password'];
    }

    /**
     * Sets http_auth_password
     *
     * @param string|null $http_auth_password The HTTP basic auth password of the subscription URL endpoint (if required)
     *
     * @return self
     */
    public function setHttpAuthPassword($http_auth_password): self
    {
        $this->container['http_auth_password'] = $http_auth_password;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version The webhook's version
     *
     * @return self
     */
    public function setVersion($version): self
    {
        $allowedValues = $this->getVersionAllowableValues();
        if (!is_null($version) && !in_array($version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'version', must be one of '%s'",
                    $version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['version'] = $version;

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

