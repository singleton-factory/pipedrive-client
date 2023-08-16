<?php
/**
 * ActivityPostObjectAllOf
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
 * ActivityPostObjectAllOf Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActivityPostObjectAllOf implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ActivityPostObject_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'note' => 'string',
        'subject' => 'string',
        'type' => 'string',
        'user_id' => 'int',
        'participants' => 'object[]',
        'busy_flag' => 'bool',
        'attendees' => 'object[]',
        'done' => '\Pipedrive\Model\NumberBoolean'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'note' => null,
        'subject' => null,
        'type' => null,
        'user_id' => null,
        'participants' => null,
        'busy_flag' => null,
        'attendees' => null,
        'done' => null
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
        'note' => 'note',
        'subject' => 'subject',
        'type' => 'type',
        'user_id' => 'user_id',
        'participants' => 'participants',
        'busy_flag' => 'busy_flag',
        'attendees' => 'attendees',
        'done' => 'done'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'note' => 'setNote',
        'subject' => 'setSubject',
        'type' => 'setType',
        'user_id' => 'setUserId',
        'participants' => 'setParticipants',
        'busy_flag' => 'setBusyFlag',
        'attendees' => 'setAttendees',
        'done' => 'setDone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'note' => 'getNote',
        'subject' => 'getSubject',
        'type' => 'getType',
        'user_id' => 'getUserId',
        'participants' => 'getParticipants',
        'busy_flag' => 'getBusyFlag',
        'attendees' => 'getAttendees',
        'done' => 'getDone'
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
        $this->container['note'] = $data['note'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['participants'] = $data['participants'] ?? null;
        $this->container['busy_flag'] = $data['busy_flag'] ?? null;
        $this->container['attendees'] = $data['attendees'] ?? null;
        $this->container['done'] = $data['done'] ?? null;
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
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note The note of the activity (HTML format)
     *
     * @return self
     */
    public function setNote($note): self
    {
        $this->container['note'] = $note;

        return $this;
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
     * @param string|null $subject The subject of the activity. When value for subject is not set, it will be given a default value `Call`.
     *
     * @return self
     */
    public function setSubject($subject): self
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the activity. This is in correlation with the `key_string` parameter of ActivityTypes. When value for type is not set, it will be given a default value `Call`.
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->container['type'] = $type;

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
     * @param int|null $user_id The ID of the user whom the activity is assigned to. If omitted, the activity is assigned to the authorized user.
     *
     * @return self
     */
    public function setUserId($user_id): self
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return object[]|null
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param object[]|null $participants List of multiple persons (participants) this activity is associated with. If omitted, single participant from `person_id` field is used. It requires a structure as follows: `[{\"person_id\":1,\"primary_flag\":true}]`
     *
     * @return self
     */
    public function setParticipants($participants): self
    {
        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets busy_flag
     *
     * @return bool|null
     */
    public function getBusyFlag()
    {
        return $this->container['busy_flag'];
    }

    /**
     * Sets busy_flag
     *
     * @param bool|null $busy_flag Set the activity as 'Busy' or 'Free'. If the flag is set to `true`, your customers will not be able to book that time slot through any Scheduler links. The flag can also be unset by never setting it or overriding it with `null`. When the value of the flag is unset (`null`), the flag defaults to 'Busy' if it has a time set, and 'Free' if it is an all-day event without specified time.
     *
     * @return self
     */
    public function setBusyFlag($busy_flag): self
    {
        $this->container['busy_flag'] = $busy_flag;

        return $this;
    }

    /**
     * Gets attendees
     *
     * @return object[]|null
     */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
     * Sets attendees
     *
     * @param object[]|null $attendees The attendees of the activity. This can be either your existing Pipedrive contacts or an external email address. It requires a structure as follows: `[{\"email_address\":\"mail@example.org\"}]` or `[{\"person_id\":1, \"email_address\":\"mail@example.org\"}]`
     *
     * @return self
     */
    public function setAttendees($attendees): self
    {
        $this->container['attendees'] = $attendees;

        return $this;
    }

    /**
     * Gets done
     *
     * @return \Pipedrive\Model\NumberBoolean|null
     */
    public function getDone()
    {
        return $this->container['done'];
    }

    /**
     * Sets done
     *
     * @param \Pipedrive\Model\NumberBoolean|null $done Whether the activity is done or not. 0 = Not done, 1 = Done
     *
     * @return self
     */
    public function setDone($done): self
    {
        $this->container['done'] = $done;

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


