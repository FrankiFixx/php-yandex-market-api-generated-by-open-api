<?php
/**
 * OrderDeliveryAddressDTO
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
 * OrderDeliveryAddressDTO Class Doc Comment
 *
 * @category Class
 * @description Адрес доставки.  Указывается, если &#x60;type&#x3D;DELIVERY&#x60; или &#x60;type&#x3D;POST&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderDeliveryAddressDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDeliveryAddressDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'postcode' => 'string',
        'city' => 'string',
        'district' => 'string',
        'subway' => 'string',
        'street' => 'string',
        'house' => 'string',
        'block' => 'string',
        'entrance' => 'string',
        'entryphone' => 'string',
        'floor' => 'string',
        'apartment' => 'string',
        'phone' => 'string',
        'recipient' => 'string',
        'gps' => '\OpenAPI\Client\Model\GpsDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country' => null,
        'postcode' => null,
        'city' => null,
        'district' => null,
        'subway' => null,
        'street' => null,
        'house' => null,
        'block' => null,
        'entrance' => null,
        'entryphone' => null,
        'floor' => null,
        'apartment' => null,
        'phone' => null,
        'recipient' => null,
        'gps' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country' => false,
        'postcode' => false,
        'city' => false,
        'district' => false,
        'subway' => false,
        'street' => false,
        'house' => false,
        'block' => false,
        'entrance' => false,
        'entryphone' => false,
        'floor' => false,
        'apartment' => false,
        'phone' => false,
        'recipient' => false,
        'gps' => false
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
        'country' => 'country',
        'postcode' => 'postcode',
        'city' => 'city',
        'district' => 'district',
        'subway' => 'subway',
        'street' => 'street',
        'house' => 'house',
        'block' => 'block',
        'entrance' => 'entrance',
        'entryphone' => 'entryphone',
        'floor' => 'floor',
        'apartment' => 'apartment',
        'phone' => 'phone',
        'recipient' => 'recipient',
        'gps' => 'gps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'postcode' => 'setPostcode',
        'city' => 'setCity',
        'district' => 'setDistrict',
        'subway' => 'setSubway',
        'street' => 'setStreet',
        'house' => 'setHouse',
        'block' => 'setBlock',
        'entrance' => 'setEntrance',
        'entryphone' => 'setEntryphone',
        'floor' => 'setFloor',
        'apartment' => 'setApartment',
        'phone' => 'setPhone',
        'recipient' => 'setRecipient',
        'gps' => 'setGps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'postcode' => 'getPostcode',
        'city' => 'getCity',
        'district' => 'getDistrict',
        'subway' => 'getSubway',
        'street' => 'getStreet',
        'house' => 'getHouse',
        'block' => 'getBlock',
        'entrance' => 'getEntrance',
        'entryphone' => 'getEntryphone',
        'floor' => 'getFloor',
        'apartment' => 'getApartment',
        'phone' => 'getPhone',
        'recipient' => 'getRecipient',
        'gps' => 'getGps'
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
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('postcode', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('district', $data ?? [], null);
        $this->setIfExists('subway', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('house', $data ?? [], null);
        $this->setIfExists('block', $data ?? [], null);
        $this->setIfExists('entrance', $data ?? [], null);
        $this->setIfExists('entryphone', $data ?? [], null);
        $this->setIfExists('floor', $data ?? [], null);
        $this->setIfExists('apartment', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('recipient', $data ?? [], null);
        $this->setIfExists('gps', $data ?? [], null);
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
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Страна.  Обязательный параметр.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string|null $postcode Почтовый индекс.  Указывается, если выбрана доставка почтой (`delivery type=POST`).
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        if (is_null($postcode)) {
            throw new \InvalidArgumentException('non-nullable postcode cannot be null');
        }
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city Город или населенный пункт.  Обязательный параметр.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string|null $district Район.
     *
     * @return self
     */
    public function setDistrict($district)
    {
        if (is_null($district)) {
            throw new \InvalidArgumentException('non-nullable district cannot be null');
        }
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets subway
     *
     * @return string|null
     */
    public function getSubway()
    {
        return $this->container['subway'];
    }

    /**
     * Sets subway
     *
     * @param string|null $subway Станция метро.
     *
     * @return self
     */
    public function setSubway($subway)
    {
        if (is_null($subway)) {
            throw new \InvalidArgumentException('non-nullable subway cannot be null');
        }
        $this->container['subway'] = $subway;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street Улица.  Обязательный параметр.
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets house
     *
     * @return string|null
     */
    public function getHouse()
    {
        return $this->container['house'];
    }

    /**
     * Sets house
     *
     * @param string|null $house Дом или владение.  Обязательный параметр.
     *
     * @return self
     */
    public function setHouse($house)
    {
        if (is_null($house)) {
            throw new \InvalidArgumentException('non-nullable house cannot be null');
        }
        $this->container['house'] = $house;

        return $this;
    }

    /**
     * Gets block
     *
     * @return string|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param string|null $block Корпус или строение.
     *
     * @return self
     */
    public function setBlock($block)
    {
        if (is_null($block)) {
            throw new \InvalidArgumentException('non-nullable block cannot be null');
        }
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets entrance
     *
     * @return string|null
     */
    public function getEntrance()
    {
        return $this->container['entrance'];
    }

    /**
     * Sets entrance
     *
     * @param string|null $entrance Подъезд.
     *
     * @return self
     */
    public function setEntrance($entrance)
    {
        if (is_null($entrance)) {
            throw new \InvalidArgumentException('non-nullable entrance cannot be null');
        }
        $this->container['entrance'] = $entrance;

        return $this;
    }

    /**
     * Gets entryphone
     *
     * @return string|null
     */
    public function getEntryphone()
    {
        return $this->container['entryphone'];
    }

    /**
     * Sets entryphone
     *
     * @param string|null $entryphone Код домофона.
     *
     * @return self
     */
    public function setEntryphone($entryphone)
    {
        if (is_null($entryphone)) {
            throw new \InvalidArgumentException('non-nullable entryphone cannot be null');
        }
        $this->container['entryphone'] = $entryphone;

        return $this;
    }

    /**
     * Gets floor
     *
     * @return string|null
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor
     *
     * @param string|null $floor Этаж.
     *
     * @return self
     */
    public function setFloor($floor)
    {
        if (is_null($floor)) {
            throw new \InvalidArgumentException('non-nullable floor cannot be null');
        }
        $this->container['floor'] = $floor;

        return $this;
    }

    /**
     * Gets apartment
     *
     * @return string|null
     */
    public function getApartment()
    {
        return $this->container['apartment'];
    }

    /**
     * Sets apartment
     *
     * @param string|null $apartment Квартира или офис.
     *
     * @return self
     */
    public function setApartment($apartment)
    {
        if (is_null($apartment)) {
            throw new \InvalidArgumentException('non-nullable apartment cannot be null');
        }
        $this->container['apartment'] = $apartment;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Телефон получателя заказа.  Обязательный параметр.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string|null
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string|null $recipient Фамилия, имя и отчество получателя заказа.  Обязательный параметр.
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        if (is_null($recipient)) {
            throw new \InvalidArgumentException('non-nullable recipient cannot be null');
        }
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets gps
     *
     * @return \OpenAPI\Client\Model\GpsDTO|null
     */
    public function getGps()
    {
        return $this->container['gps'];
    }

    /**
     * Sets gps
     *
     * @param \OpenAPI\Client\Model\GpsDTO|null $gps gps
     *
     * @return self
     */
    public function setGps($gps)
    {
        if (is_null($gps)) {
            throw new \InvalidArgumentException('non-nullable gps cannot be null');
        }
        $this->container['gps'] = $gps;

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


