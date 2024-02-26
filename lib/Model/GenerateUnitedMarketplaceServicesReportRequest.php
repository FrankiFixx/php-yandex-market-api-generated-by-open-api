<?php
/**
 * GenerateUnitedMarketplaceServicesReportRequest
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
 * GenerateUnitedMarketplaceServicesReportRequest Class Doc Comment
 *
 * @category Class
 * @description Данные, необходимые для генерации отчета: идентификатор магазина, период, за который нужен отчет, а также фильтры.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GenerateUnitedMarketplaceServicesReportRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GenerateUnitedMarketplaceServicesReportRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_id' => 'int',
        'date_time_from' => '\DateTime',
        'date_time_to' => '\DateTime',
        'year_from' => 'int',
        'month_from' => 'int',
        'year_to' => 'int',
        'month_to' => 'int',
        'placement_programs' => '\OpenAPI\Client\Model\PlacementType[]',
        'inns' => 'string[]',
        'campaign_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'business_id' => 'int64',
        'date_time_from' => 'date-time',
        'date_time_to' => 'date-time',
        'year_from' => 'int32',
        'month_from' => 'int32',
        'year_to' => 'int32',
        'month_to' => 'int32',
        'placement_programs' => null,
        'inns' => null,
        'campaign_ids' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_id' => false,
        'date_time_from' => false,
        'date_time_to' => false,
        'year_from' => false,
        'month_from' => false,
        'year_to' => false,
        'month_to' => false,
        'placement_programs' => false,
        'inns' => false,
        'campaign_ids' => false
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
        'business_id' => 'businessId',
        'date_time_from' => 'dateTimeFrom',
        'date_time_to' => 'dateTimeTo',
        'year_from' => 'yearFrom',
        'month_from' => 'monthFrom',
        'year_to' => 'yearTo',
        'month_to' => 'monthTo',
        'placement_programs' => 'placementPrograms',
        'inns' => 'inns',
        'campaign_ids' => 'campaignIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_id' => 'setBusinessId',
        'date_time_from' => 'setDateTimeFrom',
        'date_time_to' => 'setDateTimeTo',
        'year_from' => 'setYearFrom',
        'month_from' => 'setMonthFrom',
        'year_to' => 'setYearTo',
        'month_to' => 'setMonthTo',
        'placement_programs' => 'setPlacementPrograms',
        'inns' => 'setInns',
        'campaign_ids' => 'setCampaignIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_id' => 'getBusinessId',
        'date_time_from' => 'getDateTimeFrom',
        'date_time_to' => 'getDateTimeTo',
        'year_from' => 'getYearFrom',
        'month_from' => 'getMonthFrom',
        'year_to' => 'getYearTo',
        'month_to' => 'getMonthTo',
        'placement_programs' => 'getPlacementPrograms',
        'inns' => 'getInns',
        'campaign_ids' => 'getCampaignIds'
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
        $this->setIfExists('business_id', $data ?? [], null);
        $this->setIfExists('date_time_from', $data ?? [], null);
        $this->setIfExists('date_time_to', $data ?? [], null);
        $this->setIfExists('year_from', $data ?? [], null);
        $this->setIfExists('month_from', $data ?? [], null);
        $this->setIfExists('year_to', $data ?? [], null);
        $this->setIfExists('month_to', $data ?? [], null);
        $this->setIfExists('placement_programs', $data ?? [], null);
        $this->setIfExists('inns', $data ?? [], null);
        $this->setIfExists('campaign_ids', $data ?? [], null);
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

        if ($this->container['business_id'] === null) {
            $invalidProperties[] = "'business_id' can't be null";
        }
        if (!is_null($this->container['month_from']) && ($this->container['month_from'] > 12)) {
            $invalidProperties[] = "invalid value for 'month_from', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['month_from']) && ($this->container['month_from'] < 1)) {
            $invalidProperties[] = "invalid value for 'month_from', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['month_to']) && ($this->container['month_to'] > 12)) {
            $invalidProperties[] = "invalid value for 'month_to', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['month_to']) && ($this->container['month_to'] < 1)) {
            $invalidProperties[] = "invalid value for 'month_to', must be bigger than or equal to 1.";
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
     * Gets business_id
     *
     * @return int
     */
    public function getBusinessId()
    {
        return $this->container['business_id'];
    }

    /**
     * Sets business_id
     *
     * @param int $business_id Идентификатор бизнеса.
     *
     * @return self
     */
    public function setBusinessId($business_id)
    {
        if (is_null($business_id)) {
            throw new \InvalidArgumentException('non-nullable business_id cannot be null');
        }
        $this->container['business_id'] = $business_id;

        return $this;
    }

    /**
     * Gets date_time_from
     *
     * @return \DateTime|null
     */
    public function getDateTimeFrom()
    {
        return $this->container['date_time_from'];
    }

    /**
     * Sets date_time_from
     *
     * @param \DateTime|null $date_time_from Начало периода, включительно.
     *
     * @return self
     */
    public function setDateTimeFrom($date_time_from)
    {
        if (is_null($date_time_from)) {
            throw new \InvalidArgumentException('non-nullable date_time_from cannot be null');
        }
        $this->container['date_time_from'] = $date_time_from;

        return $this;
    }

    /**
     * Gets date_time_to
     *
     * @return \DateTime|null
     */
    public function getDateTimeTo()
    {
        return $this->container['date_time_to'];
    }

    /**
     * Sets date_time_to
     *
     * @param \DateTime|null $date_time_to Конец периода, включительно. Максимальный период — 1 год.
     *
     * @return self
     */
    public function setDateTimeTo($date_time_to)
    {
        if (is_null($date_time_to)) {
            throw new \InvalidArgumentException('non-nullable date_time_to cannot be null');
        }
        $this->container['date_time_to'] = $date_time_to;

        return $this;
    }

    /**
     * Gets year_from
     *
     * @return int|null
     */
    public function getYearFrom()
    {
        return $this->container['year_from'];
    }

    /**
     * Sets year_from
     *
     * @param int|null $year_from Начальный год формирования акта.
     *
     * @return self
     */
    public function setYearFrom($year_from)
    {
        if (is_null($year_from)) {
            throw new \InvalidArgumentException('non-nullable year_from cannot be null');
        }
        $this->container['year_from'] = $year_from;

        return $this;
    }

    /**
     * Gets month_from
     *
     * @return int|null
     */
    public function getMonthFrom()
    {
        return $this->container['month_from'];
    }

    /**
     * Sets month_from
     *
     * @param int|null $month_from Начальный номер месяца формирования акта.
     *
     * @return self
     */
    public function setMonthFrom($month_from)
    {
        if (is_null($month_from)) {
            throw new \InvalidArgumentException('non-nullable month_from cannot be null');
        }

        if (($month_from > 12)) {
            throw new \InvalidArgumentException('invalid value for $month_from when calling GenerateUnitedMarketplaceServicesReportRequest., must be smaller than or equal to 12.');
        }
        if (($month_from < 1)) {
            throw new \InvalidArgumentException('invalid value for $month_from when calling GenerateUnitedMarketplaceServicesReportRequest., must be bigger than or equal to 1.');
        }

        $this->container['month_from'] = $month_from;

        return $this;
    }

    /**
     * Gets year_to
     *
     * @return int|null
     */
    public function getYearTo()
    {
        return $this->container['year_to'];
    }

    /**
     * Sets year_to
     *
     * @param int|null $year_to Конечный год формирования акта.
     *
     * @return self
     */
    public function setYearTo($year_to)
    {
        if (is_null($year_to)) {
            throw new \InvalidArgumentException('non-nullable year_to cannot be null');
        }
        $this->container['year_to'] = $year_to;

        return $this;
    }

    /**
     * Gets month_to
     *
     * @return int|null
     */
    public function getMonthTo()
    {
        return $this->container['month_to'];
    }

    /**
     * Sets month_to
     *
     * @param int|null $month_to Конечный номер месяца формирования акта.
     *
     * @return self
     */
    public function setMonthTo($month_to)
    {
        if (is_null($month_to)) {
            throw new \InvalidArgumentException('non-nullable month_to cannot be null');
        }

        if (($month_to > 12)) {
            throw new \InvalidArgumentException('invalid value for $month_to when calling GenerateUnitedMarketplaceServicesReportRequest., must be smaller than or equal to 12.');
        }
        if (($month_to < 1)) {
            throw new \InvalidArgumentException('invalid value for $month_to when calling GenerateUnitedMarketplaceServicesReportRequest., must be bigger than or equal to 1.');
        }

        $this->container['month_to'] = $month_to;

        return $this;
    }

    /**
     * Gets placement_programs
     *
     * @return \OpenAPI\Client\Model\PlacementType[]|null
     */
    public function getPlacementPrograms()
    {
        return $this->container['placement_programs'];
    }

    /**
     * Sets placement_programs
     *
     * @param \OpenAPI\Client\Model\PlacementType[]|null $placement_programs Список моделей, которые нужны в отчете.
     *
     * @return self
     */
    public function setPlacementPrograms($placement_programs)
    {
        if (is_null($placement_programs)) {
            throw new \InvalidArgumentException('non-nullable placement_programs cannot be null');
        }
        $this->container['placement_programs'] = $placement_programs;

        return $this;
    }

    /**
     * Gets inns
     *
     * @return string[]|null
     */
    public function getInns()
    {
        return $this->container['inns'];
    }

    /**
     * Sets inns
     *
     * @param string[]|null $inns Список ИНН, которые нужны в отчете.
     *
     * @return self
     */
    public function setInns($inns)
    {
        if (is_null($inns)) {
            throw new \InvalidArgumentException('non-nullable inns cannot be null');
        }
        $this->container['inns'] = $inns;

        return $this;
    }

    /**
     * Gets campaign_ids
     *
     * @return int[]|null
     */
    public function getCampaignIds()
    {
        return $this->container['campaign_ids'];
    }

    /**
     * Sets campaign_ids
     *
     * @param int[]|null $campaign_ids Список магазинов, которые нужны в отчете.
     *
     * @return self
     */
    public function setCampaignIds($campaign_ids)
    {
        if (is_null($campaign_ids)) {
            throw new \InvalidArgumentException('non-nullable campaign_ids cannot be null');
        }
        $this->container['campaign_ids'] = $campaign_ids;

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


