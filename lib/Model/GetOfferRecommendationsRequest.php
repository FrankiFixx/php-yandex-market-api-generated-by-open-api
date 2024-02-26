<?php
/**
 * GetOfferRecommendationsRequest
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
 * GetOfferRecommendationsRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetOfferRecommendationsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetOfferRecommendationsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offer_ids' => 'string[]',
        'cofinance_price_filter' => '\OpenAPI\Client\Model\FieldStateType',
        'recommended_cofinance_price_filter' => '\OpenAPI\Client\Model\FieldStateType',
        'competitiveness_filter' => '\OpenAPI\Client\Model\PriceCompetitivenessType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offer_ids' => null,
        'cofinance_price_filter' => null,
        'recommended_cofinance_price_filter' => null,
        'competitiveness_filter' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offer_ids' => false,
        'cofinance_price_filter' => false,
        'recommended_cofinance_price_filter' => false,
        'competitiveness_filter' => false
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
        'offer_ids' => 'offerIds',
        'cofinance_price_filter' => 'cofinancePriceFilter',
        'recommended_cofinance_price_filter' => 'recommendedCofinancePriceFilter',
        'competitiveness_filter' => 'competitivenessFilter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_ids' => 'setOfferIds',
        'cofinance_price_filter' => 'setCofinancePriceFilter',
        'recommended_cofinance_price_filter' => 'setRecommendedCofinancePriceFilter',
        'competitiveness_filter' => 'setCompetitivenessFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_ids' => 'getOfferIds',
        'cofinance_price_filter' => 'getCofinancePriceFilter',
        'recommended_cofinance_price_filter' => 'getRecommendedCofinancePriceFilter',
        'competitiveness_filter' => 'getCompetitivenessFilter'
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
        $this->setIfExists('offer_ids', $data ?? [], null);
        $this->setIfExists('cofinance_price_filter', $data ?? [], null);
        $this->setIfExists('recommended_cofinance_price_filter', $data ?? [], null);
        $this->setIfExists('competitiveness_filter', $data ?? [], null);
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
     * Gets offer_ids
     *
     * @return string[]|null
     */
    public function getOfferIds()
    {
        return $this->container['offer_ids'];
    }

    /**
     * Sets offer_ids
     *
     * @param string[]|null $offer_ids Идентификаторы товаров, информация о которых нужна. ⚠️ Не используйте это поле одновременно с остальными фильтрами. Если вы хотите воспользоваться фильтрами, оставьте поле пустым.
     *
     * @return self
     */
    public function setOfferIds($offer_ids)
    {
        if (is_null($offer_ids)) {
            throw new \InvalidArgumentException('non-nullable offer_ids cannot be null');
        }
        $this->container['offer_ids'] = $offer_ids;

        return $this;
    }

    /**
     * Gets cofinance_price_filter
     *
     * @return \OpenAPI\Client\Model\FieldStateType|null
     */
    public function getCofinancePriceFilter()
    {
        return $this->container['cofinance_price_filter'];
    }

    /**
     * Sets cofinance_price_filter
     *
     * @param \OpenAPI\Client\Model\FieldStateType|null $cofinance_price_filter cofinance_price_filter
     *
     * @return self
     */
    public function setCofinancePriceFilter($cofinance_price_filter)
    {
        if (is_null($cofinance_price_filter)) {
            throw new \InvalidArgumentException('non-nullable cofinance_price_filter cannot be null');
        }
        $this->container['cofinance_price_filter'] = $cofinance_price_filter;

        return $this;
    }

    /**
     * Gets recommended_cofinance_price_filter
     *
     * @return \OpenAPI\Client\Model\FieldStateType|null
     */
    public function getRecommendedCofinancePriceFilter()
    {
        return $this->container['recommended_cofinance_price_filter'];
    }

    /**
     * Sets recommended_cofinance_price_filter
     *
     * @param \OpenAPI\Client\Model\FieldStateType|null $recommended_cofinance_price_filter recommended_cofinance_price_filter
     *
     * @return self
     */
    public function setRecommendedCofinancePriceFilter($recommended_cofinance_price_filter)
    {
        if (is_null($recommended_cofinance_price_filter)) {
            throw new \InvalidArgumentException('non-nullable recommended_cofinance_price_filter cannot be null');
        }
        $this->container['recommended_cofinance_price_filter'] = $recommended_cofinance_price_filter;

        return $this;
    }

    /**
     * Gets competitiveness_filter
     *
     * @return \OpenAPI\Client\Model\PriceCompetitivenessType|null
     */
    public function getCompetitivenessFilter()
    {
        return $this->container['competitiveness_filter'];
    }

    /**
     * Sets competitiveness_filter
     *
     * @param \OpenAPI\Client\Model\PriceCompetitivenessType|null $competitiveness_filter competitiveness_filter
     *
     * @return self
     */
    public function setCompetitivenessFilter($competitiveness_filter)
    {
        if (is_null($competitiveness_filter)) {
            throw new \InvalidArgumentException('non-nullable competitiveness_filter cannot be null');
        }
        $this->container['competitiveness_filter'] = $competitiveness_filter;

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


