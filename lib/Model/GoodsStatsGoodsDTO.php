<?php
/**
 * GoodsStatsGoodsDTO
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
 * GoodsStatsGoodsDTO Class Doc Comment
 *
 * @category Class
 * @description Информация о товаре.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GoodsStatsGoodsDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GoodsStatsGoodsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shop_sku' => 'string',
        'market_sku' => 'int',
        'name' => 'string',
        'price' => 'float',
        'category_id' => 'int',
        'category_name' => 'string',
        'weight_dimensions' => '\OpenAPI\Client\Model\GoodsStatsWeightDimensionsDTO',
        'warehouses' => '\OpenAPI\Client\Model\GoodsStatsWarehouseDTO[]',
        'tariffs' => '\OpenAPI\Client\Model\TariffDTO[]',
        'pictures' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shop_sku' => null,
        'market_sku' => 'int64',
        'name' => null,
        'price' => null,
        'category_id' => 'int64',
        'category_name' => null,
        'weight_dimensions' => null,
        'warehouses' => null,
        'tariffs' => null,
        'pictures' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shop_sku' => false,
        'market_sku' => false,
        'name' => false,
        'price' => false,
        'category_id' => false,
        'category_name' => false,
        'weight_dimensions' => false,
        'warehouses' => false,
        'tariffs' => false,
        'pictures' => false
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
        'shop_sku' => 'shopSku',
        'market_sku' => 'marketSku',
        'name' => 'name',
        'price' => 'price',
        'category_id' => 'categoryId',
        'category_name' => 'categoryName',
        'weight_dimensions' => 'weightDimensions',
        'warehouses' => 'warehouses',
        'tariffs' => 'tariffs',
        'pictures' => 'pictures'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shop_sku' => 'setShopSku',
        'market_sku' => 'setMarketSku',
        'name' => 'setName',
        'price' => 'setPrice',
        'category_id' => 'setCategoryId',
        'category_name' => 'setCategoryName',
        'weight_dimensions' => 'setWeightDimensions',
        'warehouses' => 'setWarehouses',
        'tariffs' => 'setTariffs',
        'pictures' => 'setPictures'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shop_sku' => 'getShopSku',
        'market_sku' => 'getMarketSku',
        'name' => 'getName',
        'price' => 'getPrice',
        'category_id' => 'getCategoryId',
        'category_name' => 'getCategoryName',
        'weight_dimensions' => 'getWeightDimensions',
        'warehouses' => 'getWarehouses',
        'tariffs' => 'getTariffs',
        'pictures' => 'getPictures'
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
        $this->setIfExists('shop_sku', $data ?? [], null);
        $this->setIfExists('market_sku', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('category_name', $data ?? [], null);
        $this->setIfExists('weight_dimensions', $data ?? [], null);
        $this->setIfExists('warehouses', $data ?? [], null);
        $this->setIfExists('tariffs', $data ?? [], null);
        $this->setIfExists('pictures', $data ?? [], null);
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

        if (!is_null($this->container['shop_sku']) && (mb_strlen($this->container['shop_sku']) > 80)) {
            $invalidProperties[] = "invalid value for 'shop_sku', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['shop_sku']) && (mb_strlen($this->container['shop_sku']) < 1)) {
            $invalidProperties[] = "invalid value for 'shop_sku', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['shop_sku']) && !preg_match("/^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/", $this->container['shop_sku'])) {
            $invalidProperties[] = "invalid value for 'shop_sku', must be conform to the pattern /^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/.";
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
     * Gets shop_sku
     *
     * @return string|null
     */
    public function getShopSku()
    {
        return $this->container['shop_sku'];
    }

    /**
     * Sets shop_sku
     *
     * @param string|null $shop_sku Ваш SKU — идентификатор товара в вашей системе.  Разрешена любая последовательность длиной до 80 знаков. В нее могут входить английские и русские буквы, цифры и символы `. , / \\ ( ) [ ] - = _`  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * SKU товара нельзя менять — можно только удалить товар и добавить заново с новым SKU.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields)
     *
     * @return self
     */
    public function setShopSku($shop_sku)
    {
        if (is_null($shop_sku)) {
            throw new \InvalidArgumentException('non-nullable shop_sku cannot be null');
        }
        if ((mb_strlen($shop_sku) > 80)) {
            throw new \InvalidArgumentException('invalid length for $shop_sku when calling GoodsStatsGoodsDTO., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($shop_sku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shop_sku when calling GoodsStatsGoodsDTO., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/", ObjectSerializer::toString($shop_sku)))) {
            throw new \InvalidArgumentException("invalid value for \$shop_sku when calling GoodsStatsGoodsDTO., must conform to the pattern /^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/.");
        }

        $this->container['shop_sku'] = $shop_sku;

        return $this;
    }

    /**
     * Gets market_sku
     *
     * @return int|null
     */
    public function getMarketSku()
    {
        return $this->container['market_sku'];
    }

    /**
     * Sets market_sku
     *
     * @param int|null $market_sku SKU на Маркете.
     *
     * @return self
     */
    public function setMarketSku($market_sku)
    {
        if (is_null($market_sku)) {
            throw new \InvalidArgumentException('non-nullable market_sku cannot be null');
        }
        $this->container['market_sku'] = $market_sku;

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
     * @param string|null $name Название товара.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Цена на товар, выставленная партнером.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int|null $category_id Идентификатор категории товара на Маркете.
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        if (is_null($category_id)) {
            throw new \InvalidArgumentException('non-nullable category_id cannot be null');
        }
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets category_name
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     *
     * @param string|null $category_name Название категории товара на Маркете.
     *
     * @return self
     */
    public function setCategoryName($category_name)
    {
        if (is_null($category_name)) {
            throw new \InvalidArgumentException('non-nullable category_name cannot be null');
        }
        $this->container['category_name'] = $category_name;

        return $this;
    }

    /**
     * Gets weight_dimensions
     *
     * @return \OpenAPI\Client\Model\GoodsStatsWeightDimensionsDTO|null
     */
    public function getWeightDimensions()
    {
        return $this->container['weight_dimensions'];
    }

    /**
     * Sets weight_dimensions
     *
     * @param \OpenAPI\Client\Model\GoodsStatsWeightDimensionsDTO|null $weight_dimensions weight_dimensions
     *
     * @return self
     */
    public function setWeightDimensions($weight_dimensions)
    {
        if (is_null($weight_dimensions)) {
            throw new \InvalidArgumentException('non-nullable weight_dimensions cannot be null');
        }
        $this->container['weight_dimensions'] = $weight_dimensions;

        return $this;
    }

    /**
     * Gets warehouses
     *
     * @return \OpenAPI\Client\Model\GoodsStatsWarehouseDTO[]|null
     */
    public function getWarehouses()
    {
        return $this->container['warehouses'];
    }

    /**
     * Sets warehouses
     *
     * @param \OpenAPI\Client\Model\GoodsStatsWarehouseDTO[]|null $warehouses Информация о складах, на которых хранится товар.  Параметр не приходит, если товара нет ни на одном складе.
     *
     * @return self
     */
    public function setWarehouses($warehouses)
    {
        if (is_null($warehouses)) {
            throw new \InvalidArgumentException('non-nullable warehouses cannot be null');
        }
        $this->container['warehouses'] = $warehouses;

        return $this;
    }

    /**
     * Gets tariffs
     *
     * @return \OpenAPI\Client\Model\TariffDTO[]|null
     */
    public function getTariffs()
    {
        return $this->container['tariffs'];
    }

    /**
     * Sets tariffs
     *
     * @param \OpenAPI\Client\Model\TariffDTO[]|null $tariffs Информация о тарифах, по которым нужно заплатить за услуги Маркета.
     *
     * @return self
     */
    public function setTariffs($tariffs)
    {
        if (is_null($tariffs)) {
            throw new \InvalidArgumentException('non-nullable tariffs cannot be null');
        }
        $this->container['tariffs'] = $tariffs;

        return $this;
    }

    /**
     * Gets pictures
     *
     * @return string[]|null
     */
    public function getPictures()
    {
        return $this->container['pictures'];
    }

    /**
     * Sets pictures
     *
     * @param string[]|null $pictures Ссылки (URL) изображений товара в хорошем качестве.
     *
     * @return self
     */
    public function setPictures($pictures)
    {
        if (is_null($pictures)) {
            throw new \InvalidArgumentException('non-nullable pictures cannot be null');
        }
        $this->container['pictures'] = $pictures;

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

