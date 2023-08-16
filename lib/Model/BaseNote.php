<?php
/**
 * BaseNote
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
 * BaseNote Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BaseNote implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BaseNote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'active_flag' => 'bool',
        'add_time' => 'string',
        'content' => 'string',
        'deal' => '\Pipedrive\Model\BaseNoteDealTitle',
        'lead_id' => 'string',
        'deal_id' => 'int',
        'last_update_user_id' => 'int',
        'org_id' => 'int',
        'organization' => '\Pipedrive\Model\BaseNoteOrganization',
        'person' => '\Pipedrive\Model\BaseNotePerson',
        'person_id' => 'int',
        'pinned_to_deal_flag' => 'bool',
        'pinned_to_organization_flag' => 'bool',
        'pinned_to_person_flag' => 'bool',
        'update_time' => 'string',
        'user' => '\Pipedrive\Model\NoteCreatorUser',
        'user_id' => 'int'
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
        'active_flag' => null,
        'add_time' => null,
        'content' => null,
        'deal' => null,
        'lead_id' => 'uuid',
        'deal_id' => null,
        'last_update_user_id' => null,
        'org_id' => null,
        'organization' => null,
        'person' => null,
        'person_id' => null,
        'pinned_to_deal_flag' => null,
        'pinned_to_organization_flag' => null,
        'pinned_to_person_flag' => null,
        'update_time' => null,
        'user' => null,
        'user_id' => null
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
        'active_flag' => 'active_flag',
        'add_time' => 'add_time',
        'content' => 'content',
        'deal' => 'deal',
        'lead_id' => 'lead_id',
        'deal_id' => 'deal_id',
        'last_update_user_id' => 'last_update_user_id',
        'org_id' => 'org_id',
        'organization' => 'organization',
        'person' => 'person',
        'person_id' => 'person_id',
        'pinned_to_deal_flag' => 'pinned_to_deal_flag',
        'pinned_to_organization_flag' => 'pinned_to_organization_flag',
        'pinned_to_person_flag' => 'pinned_to_person_flag',
        'update_time' => 'update_time',
        'user' => 'user',
        'user_id' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'active_flag' => 'setActiveFlag',
        'add_time' => 'setAddTime',
        'content' => 'setContent',
        'deal' => 'setDeal',
        'lead_id' => 'setLeadId',
        'deal_id' => 'setDealId',
        'last_update_user_id' => 'setLastUpdateUserId',
        'org_id' => 'setOrgId',
        'organization' => 'setOrganization',
        'person' => 'setPerson',
        'person_id' => 'setPersonId',
        'pinned_to_deal_flag' => 'setPinnedToDealFlag',
        'pinned_to_organization_flag' => 'setPinnedToOrganizationFlag',
        'pinned_to_person_flag' => 'setPinnedToPersonFlag',
        'update_time' => 'setUpdateTime',
        'user' => 'setUser',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'active_flag' => 'getActiveFlag',
        'add_time' => 'getAddTime',
        'content' => 'getContent',
        'deal' => 'getDeal',
        'lead_id' => 'getLeadId',
        'deal_id' => 'getDealId',
        'last_update_user_id' => 'getLastUpdateUserId',
        'org_id' => 'getOrgId',
        'organization' => 'getOrganization',
        'person' => 'getPerson',
        'person_id' => 'getPersonId',
        'pinned_to_deal_flag' => 'getPinnedToDealFlag',
        'pinned_to_organization_flag' => 'getPinnedToOrganizationFlag',
        'pinned_to_person_flag' => 'getPinnedToPersonFlag',
        'update_time' => 'getUpdateTime',
        'user' => 'getUser',
        'user_id' => 'getUserId'
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
        $this->container['active_flag'] = $data['active_flag'] ?? null;
        $this->container['add_time'] = $data['add_time'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['deal'] = $data['deal'] ?? null;
        $this->container['lead_id'] = $data['lead_id'] ?? null;
        $this->container['deal_id'] = $data['deal_id'] ?? null;
        $this->container['last_update_user_id'] = $data['last_update_user_id'] ?? null;
        $this->container['org_id'] = $data['org_id'] ?? null;
        $this->container['organization'] = $data['organization'] ?? null;
        $this->container['person'] = $data['person'] ?? null;
        $this->container['person_id'] = $data['person_id'] ?? null;
        $this->container['pinned_to_deal_flag'] = $data['pinned_to_deal_flag'] ?? null;
        $this->container['pinned_to_organization_flag'] = $data['pinned_to_organization_flag'] ?? null;
        $this->container['pinned_to_person_flag'] = $data['pinned_to_person_flag'] ?? null;
        $this->container['update_time'] = $data['update_time'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
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
     * @param int|null $id The ID of the note
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->container['id'] = $id;

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
     * @param bool|null $active_flag Whether the note is active or deleted
     *
     * @return self
     */
    public function setActiveFlag($active_flag): self
    {
        $this->container['active_flag'] = $active_flag;

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
     * @param string|null $add_time The creation date and time of the note
     *
     * @return self
     */
    public function setAddTime($add_time): self
    {
        $this->container['add_time'] = $add_time;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content The content of the note in HTML format. Subject to sanitization on the back-end.
     *
     * @return self
     */
    public function setContent($content): self
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets deal
     *
     * @return \Pipedrive\Model\BaseNoteDealTitle|null
     */
    public function getDeal()
    {
        return $this->container['deal'];
    }

    /**
     * Sets deal
     *
     * @param \Pipedrive\Model\BaseNoteDealTitle|null $deal deal
     *
     * @return self
     */
    public function setDeal($deal): self
    {
        $this->container['deal'] = $deal;

        return $this;
    }

    /**
     * Gets lead_id
     *
     * @return string|null
     */
    public function getLeadId()
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     *
     * @param string|null $lead_id The ID of the lead the note is attached to
     *
     * @return self
     */
    public function setLeadId($lead_id): self
    {
        $this->container['lead_id'] = $lead_id;

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
     * @param int|null $deal_id The ID of the deal the note is attached to
     *
     * @return self
     */
    public function setDealId($deal_id): self
    {
        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets last_update_user_id
     *
     * @return int|null
     */
    public function getLastUpdateUserId()
    {
        return $this->container['last_update_user_id'];
    }

    /**
     * Sets last_update_user_id
     *
     * @param int|null $last_update_user_id The ID of the user who last updated the note
     *
     * @return self
     */
    public function setLastUpdateUserId($last_update_user_id): self
    {
        $this->container['last_update_user_id'] = $last_update_user_id;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return int|null
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param int|null $org_id The ID of the organization the note is attached to
     *
     * @return self
     */
    public function setOrgId($org_id): self
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \Pipedrive\Model\BaseNoteOrganization|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \Pipedrive\Model\BaseNoteOrganization|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization): self
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets person
     *
     * @return \Pipedrive\Model\BaseNotePerson|null
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param \Pipedrive\Model\BaseNotePerson|null $person person
     *
     * @return self
     */
    public function setPerson($person): self
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets person_id
     *
     * @return int|null
     */
    public function getPersonId()
    {
        return $this->container['person_id'];
    }

    /**
     * Sets person_id
     *
     * @param int|null $person_id The ID of the person the note is attached to
     *
     * @return self
     */
    public function setPersonId($person_id): self
    {
        $this->container['person_id'] = $person_id;

        return $this;
    }

    /**
     * Gets pinned_to_deal_flag
     *
     * @return bool|null
     */
    public function getPinnedToDealFlag()
    {
        return $this->container['pinned_to_deal_flag'];
    }

    /**
     * Sets pinned_to_deal_flag
     *
     * @param bool|null $pinned_to_deal_flag If true, the results are filtered by note to deal pinning state
     *
     * @return self
     */
    public function setPinnedToDealFlag($pinned_to_deal_flag): self
    {
        $this->container['pinned_to_deal_flag'] = $pinned_to_deal_flag;

        return $this;
    }

    /**
     * Gets pinned_to_organization_flag
     *
     * @return bool|null
     */
    public function getPinnedToOrganizationFlag()
    {
        return $this->container['pinned_to_organization_flag'];
    }

    /**
     * Sets pinned_to_organization_flag
     *
     * @param bool|null $pinned_to_organization_flag If true, the results are filtered by note to organization pinning state
     *
     * @return self
     */
    public function setPinnedToOrganizationFlag($pinned_to_organization_flag): self
    {
        $this->container['pinned_to_organization_flag'] = $pinned_to_organization_flag;

        return $this;
    }

    /**
     * Gets pinned_to_person_flag
     *
     * @return bool|null
     */
    public function getPinnedToPersonFlag()
    {
        return $this->container['pinned_to_person_flag'];
    }

    /**
     * Sets pinned_to_person_flag
     *
     * @param bool|null $pinned_to_person_flag If true, the results are filtered by note to person pinning state
     *
     * @return self
     */
    public function setPinnedToPersonFlag($pinned_to_person_flag): self
    {
        $this->container['pinned_to_person_flag'] = $pinned_to_person_flag;

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
     * @param string|null $update_time The last updated date and time of the note
     *
     * @return self
     */
    public function setUpdateTime($update_time): self
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Pipedrive\Model\NoteCreatorUser|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Pipedrive\Model\NoteCreatorUser|null $user user
     *
     * @return self
     */
    public function setUser($user): self
    {
        $this->container['user'] = $user;

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
     * @param int|null $user_id The ID of the note creator
     *
     * @return self
     */
    public function setUserId($user_id): self
    {
        $this->container['user_id'] = $user_id;

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


