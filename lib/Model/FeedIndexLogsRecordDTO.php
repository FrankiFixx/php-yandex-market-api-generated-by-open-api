<?php
/**
 * FeedIndexLogsRecordDTO
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FeedIndexLogsRecordDTO Class Doc Comment
 *
 * @category Class
 * @description Список отчетов по индексации прайс-листа.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FeedIndexLogsRecordDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedIndexLogsRecordDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'download_time' => '\DateTime',
        'file_time' => '\DateTime',
        'generation_id' => 'int',
        'index_type' => '\OpenAPI\Client\Model\FeedIndexLogsIndexType',
        'published_time' => '\DateTime',
        'status' => '\OpenAPI\Client\Model\FeedIndexLogsStatusType',
        'error' => '\OpenAPI\Client\Model\FeedIndexLogsErrorDTO',
        'offers' => '\OpenAPI\Client\Model\FeedIndexLogsOffersDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'download_time' => 'date-time',
        'file_time' => 'date-time',
        'generation_id' => 'int64',
        'index_type' => null,
        'published_time' => 'date-time',
        'status' => null,
        'error' => null,
        'offers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'download_time' => false,
        'file_time' => false,
        'generation_id' => false,
        'index_type' => false,
        'published_time' => false,
        'status' => false,
        'error' => false,
        'offers' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'download_time' => 'downloadTime',
        'file_time' => 'fileTime',
        'generation_id' => 'generationId',
        'index_type' => 'indexType',
        'published_time' => 'publishedTime',
        'status' => 'status',
        'error' => 'error',
        'offers' => 'offers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'download_time' => 'setDownloadTime',
        'file_time' => 'setFileTime',
        'generation_id' => 'setGenerationId',
        'index_type' => 'setIndexType',
        'published_time' => 'setPublishedTime',
        'status' => 'setStatus',
        'error' => 'setError',
        'offers' => 'setOffers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'download_time' => 'getDownloadTime',
        'file_time' => 'getFileTime',
        'generation_id' => 'getGenerationId',
        'index_type' => 'getIndexType',
        'published_time' => 'getPublishedTime',
        'status' => 'getStatus',
        'error' => 'getError',
        'offers' => 'getOffers'
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
        $this->setIfExists('download_time', $data ?? [], null);
        $this->setIfExists('file_time', $data ?? [], null);
        $this->setIfExists('generation_id', $data ?? [], null);
        $this->setIfExists('index_type', $data ?? [], null);
        $this->setIfExists('published_time', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('offers', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets download_time
     *
     * @return \DateTime|null
     */
    public function getDownloadTime()
    {
        return $this->container['download_time'];
    }

    /**
     * Sets download_time
     *
     * @param \DateTime|null $download_time Дата и время загрузки прайс-листа.  Формат даты: ISO 8601 со смещением относительно UTC. Например, `2017-11-21T00:42:42+03:00`.
     *
     * @return self
     */
    public function setDownloadTime($download_time)
    {
        if (is_null($download_time)) {
            throw new \InvalidArgumentException('non-nullable download_time cannot be null');
        }
        $this->container['download_time'] = $download_time;

        return $this;
    }

    /**
     * Gets file_time
     *
     * @return \DateTime|null
     */
    public function getFileTime()
    {
        return $this->container['file_time'];
    }

    /**
     * Sets file_time
     *
     * @param \DateTime|null $file_time Дата и время, которые магазин указал в прайс-листе.  Формат даты: ISO 8601 со смещением относительно UTC. Например, `2017-11-21T00:42:42+03:00`.
     *
     * @return self
     */
    public function setFileTime($file_time)
    {
        if (is_null($file_time)) {
            throw new \InvalidArgumentException('non-nullable file_time cannot be null');
        }
        $this->container['file_time'] = $file_time;

        return $this;
    }

    /**
     * Gets generation_id
     *
     * @return int|null
     */
    public function getGenerationId()
    {
        return $this->container['generation_id'];
    }

    /**
     * Sets generation_id
     *
     * @param int|null $generation_id Идентификатор индексации.
     *
     * @return self
     */
    public function setGenerationId($generation_id)
    {
        if (is_null($generation_id)) {
            throw new \InvalidArgumentException('non-nullable generation_id cannot be null');
        }
        $this->container['generation_id'] = $generation_id;

        return $this;
    }

    /**
     * Gets index_type
     *
     * @return \OpenAPI\Client\Model\FeedIndexLogsIndexType|null
     */
    public function getIndexType()
    {
        return $this->container['index_type'];
    }

    /**
     * Sets index_type
     *
     * @param \OpenAPI\Client\Model\FeedIndexLogsIndexType|null $index_type index_type
     *
     * @return self
     */
    public function setIndexType($index_type)
    {
        if (is_null($index_type)) {
            throw new \InvalidArgumentException('non-nullable index_type cannot be null');
        }
        $this->container['index_type'] = $index_type;

        return $this;
    }

    /**
     * Gets published_time
     *
     * @return \DateTime|null
     */
    public function getPublishedTime()
    {
        return $this->container['published_time'];
    }

    /**
     * Sets published_time
     *
     * @param \DateTime|null $published_time Дата и время публикации предложений из прайс-листа на Яндекс Маркете.  Формат даты: ISO 8601 со смещением относительно UTC. Например, `2017-11-21T00:42:42+03:00`.
     *
     * @return self
     */
    public function setPublishedTime($published_time)
    {
        if (is_null($published_time)) {
            throw new \InvalidArgumentException('non-nullable published_time cannot be null');
        }
        $this->container['published_time'] = $published_time;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\FeedIndexLogsStatusType|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\FeedIndexLogsStatusType|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \OpenAPI\Client\Model\FeedIndexLogsErrorDTO|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \OpenAPI\Client\Model\FeedIndexLogsErrorDTO|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return \OpenAPI\Client\Model\FeedIndexLogsOffersDTO|null
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \OpenAPI\Client\Model\FeedIndexLogsOffersDTO|null $offers offers
     *
     * @return self
     */
    public function setOffers($offers)
    {
        if (is_null($offers)) {
            throw new \InvalidArgumentException('non-nullable offers cannot be null');
        }
        $this->container['offers'] = $offers;

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


