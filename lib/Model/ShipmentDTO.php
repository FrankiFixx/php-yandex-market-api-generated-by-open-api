<?php
/**
 * ShipmentDTO
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
 * ShipmentDTO Class Doc Comment
 *
 * @category Class
 * @description Информация об отгрузке.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'plan_interval_from' => '\DateTime',
        'plan_interval_to' => '\DateTime',
        'shipment_type' => '\OpenAPI\Client\Model\ShipmentType',
        'warehouse' => '\OpenAPI\Client\Model\PartnerShipmentWarehouseDTO',
        'warehouse_to' => '\OpenAPI\Client\Model\PartnerShipmentWarehouseDTO',
        'delivery_service' => '\OpenAPI\Client\Model\DeliveryServiceDTO',
        'pallets_count' => '\OpenAPI\Client\Model\PalletsCountDTO',
        'current_status' => '\OpenAPI\Client\Model\ShipmentStatusChangeDTO',
        'order_ids' => 'int[]',
        'available_actions' => '\OpenAPI\Client\Model\ShipmentActionType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'plan_interval_from' => 'date-time',
        'plan_interval_to' => 'date-time',
        'shipment_type' => null,
        'warehouse' => null,
        'warehouse_to' => null,
        'delivery_service' => null,
        'pallets_count' => null,
        'current_status' => null,
        'order_ids' => 'int64',
        'available_actions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'plan_interval_from' => false,
        'plan_interval_to' => false,
        'shipment_type' => false,
        'warehouse' => false,
        'warehouse_to' => false,
        'delivery_service' => false,
        'pallets_count' => false,
        'current_status' => false,
        'order_ids' => false,
        'available_actions' => false
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
        'id' => 'id',
        'plan_interval_from' => 'planIntervalFrom',
        'plan_interval_to' => 'planIntervalTo',
        'shipment_type' => 'shipmentType',
        'warehouse' => 'warehouse',
        'warehouse_to' => 'warehouseTo',
        'delivery_service' => 'deliveryService',
        'pallets_count' => 'palletsCount',
        'current_status' => 'currentStatus',
        'order_ids' => 'orderIds',
        'available_actions' => 'availableActions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'plan_interval_from' => 'setPlanIntervalFrom',
        'plan_interval_to' => 'setPlanIntervalTo',
        'shipment_type' => 'setShipmentType',
        'warehouse' => 'setWarehouse',
        'warehouse_to' => 'setWarehouseTo',
        'delivery_service' => 'setDeliveryService',
        'pallets_count' => 'setPalletsCount',
        'current_status' => 'setCurrentStatus',
        'order_ids' => 'setOrderIds',
        'available_actions' => 'setAvailableActions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'plan_interval_from' => 'getPlanIntervalFrom',
        'plan_interval_to' => 'getPlanIntervalTo',
        'shipment_type' => 'getShipmentType',
        'warehouse' => 'getWarehouse',
        'warehouse_to' => 'getWarehouseTo',
        'delivery_service' => 'getDeliveryService',
        'pallets_count' => 'getPalletsCount',
        'current_status' => 'getCurrentStatus',
        'order_ids' => 'getOrderIds',
        'available_actions' => 'getAvailableActions'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('plan_interval_from', $data ?? [], null);
        $this->setIfExists('plan_interval_to', $data ?? [], null);
        $this->setIfExists('shipment_type', $data ?? [], null);
        $this->setIfExists('warehouse', $data ?? [], null);
        $this->setIfExists('warehouse_to', $data ?? [], null);
        $this->setIfExists('delivery_service', $data ?? [], null);
        $this->setIfExists('pallets_count', $data ?? [], null);
        $this->setIfExists('current_status', $data ?? [], null);
        $this->setIfExists('order_ids', $data ?? [], null);
        $this->setIfExists('available_actions', $data ?? [], null);
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
     * @param int|null $id Идентификатор отгрузки.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets plan_interval_from
     *
     * @return \DateTime|null
     */
    public function getPlanIntervalFrom()
    {
        return $this->container['plan_interval_from'];
    }

    /**
     * Sets plan_interval_from
     *
     * @param \DateTime|null $plan_interval_from Начало планового интервала отгрузки.
     *
     * @return self
     */
    public function setPlanIntervalFrom($plan_interval_from)
    {
        if (is_null($plan_interval_from)) {
            throw new \InvalidArgumentException('non-nullable plan_interval_from cannot be null');
        }
        $this->container['plan_interval_from'] = $plan_interval_from;

        return $this;
    }

    /**
     * Gets plan_interval_to
     *
     * @return \DateTime|null
     */
    public function getPlanIntervalTo()
    {
        return $this->container['plan_interval_to'];
    }

    /**
     * Sets plan_interval_to
     *
     * @param \DateTime|null $plan_interval_to Конец планового интервала отгрузки.
     *
     * @return self
     */
    public function setPlanIntervalTo($plan_interval_to)
    {
        if (is_null($plan_interval_to)) {
            throw new \InvalidArgumentException('non-nullable plan_interval_to cannot be null');
        }
        $this->container['plan_interval_to'] = $plan_interval_to;

        return $this;
    }

    /**
     * Gets shipment_type
     *
     * @return \OpenAPI\Client\Model\ShipmentType|null
     */
    public function getShipmentType()
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type
     *
     * @param \OpenAPI\Client\Model\ShipmentType|null $shipment_type shipment_type
     *
     * @return self
     */
    public function setShipmentType($shipment_type)
    {
        if (is_null($shipment_type)) {
            throw new \InvalidArgumentException('non-nullable shipment_type cannot be null');
        }
        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }

    /**
     * Gets warehouse
     *
     * @return \OpenAPI\Client\Model\PartnerShipmentWarehouseDTO|null
     */
    public function getWarehouse()
    {
        return $this->container['warehouse'];
    }

    /**
     * Sets warehouse
     *
     * @param \OpenAPI\Client\Model\PartnerShipmentWarehouseDTO|null $warehouse warehouse
     *
     * @return self
     */
    public function setWarehouse($warehouse)
    {
        if (is_null($warehouse)) {
            throw new \InvalidArgumentException('non-nullable warehouse cannot be null');
        }
        $this->container['warehouse'] = $warehouse;

        return $this;
    }

    /**
     * Gets warehouse_to
     *
     * @return \OpenAPI\Client\Model\PartnerShipmentWarehouseDTO|null
     */
    public function getWarehouseTo()
    {
        return $this->container['warehouse_to'];
    }

    /**
     * Sets warehouse_to
     *
     * @param \OpenAPI\Client\Model\PartnerShipmentWarehouseDTO|null $warehouse_to warehouse_to
     *
     * @return self
     */
    public function setWarehouseTo($warehouse_to)
    {
        if (is_null($warehouse_to)) {
            throw new \InvalidArgumentException('non-nullable warehouse_to cannot be null');
        }
        $this->container['warehouse_to'] = $warehouse_to;

        return $this;
    }

    /**
     * Gets delivery_service
     *
     * @return \OpenAPI\Client\Model\DeliveryServiceDTO|null
     */
    public function getDeliveryService()
    {
        return $this->container['delivery_service'];
    }

    /**
     * Sets delivery_service
     *
     * @param \OpenAPI\Client\Model\DeliveryServiceDTO|null $delivery_service delivery_service
     *
     * @return self
     */
    public function setDeliveryService($delivery_service)
    {
        if (is_null($delivery_service)) {
            throw new \InvalidArgumentException('non-nullable delivery_service cannot be null');
        }
        $this->container['delivery_service'] = $delivery_service;

        return $this;
    }

    /**
     * Gets pallets_count
     *
     * @return \OpenAPI\Client\Model\PalletsCountDTO|null
     */
    public function getPalletsCount()
    {
        return $this->container['pallets_count'];
    }

    /**
     * Sets pallets_count
     *
     * @param \OpenAPI\Client\Model\PalletsCountDTO|null $pallets_count pallets_count
     *
     * @return self
     */
    public function setPalletsCount($pallets_count)
    {
        if (is_null($pallets_count)) {
            throw new \InvalidArgumentException('non-nullable pallets_count cannot be null');
        }
        $this->container['pallets_count'] = $pallets_count;

        return $this;
    }

    /**
     * Gets current_status
     *
     * @return \OpenAPI\Client\Model\ShipmentStatusChangeDTO|null
     */
    public function getCurrentStatus()
    {
        return $this->container['current_status'];
    }

    /**
     * Sets current_status
     *
     * @param \OpenAPI\Client\Model\ShipmentStatusChangeDTO|null $current_status current_status
     *
     * @return self
     */
    public function setCurrentStatus($current_status)
    {
        if (is_null($current_status)) {
            throw new \InvalidArgumentException('non-nullable current_status cannot be null');
        }
        $this->container['current_status'] = $current_status;

        return $this;
    }

    /**
     * Gets order_ids
     *
     * @return int[]|null
     */
    public function getOrderIds()
    {
        return $this->container['order_ids'];
    }

    /**
     * Sets order_ids
     *
     * @param int[]|null $order_ids Идентификаторы заказов в отгрузке.
     *
     * @return self
     */
    public function setOrderIds($order_ids)
    {
        if (is_null($order_ids)) {
            throw new \InvalidArgumentException('non-nullable order_ids cannot be null');
        }


        $this->container['order_ids'] = $order_ids;

        return $this;
    }

    /**
     * Gets available_actions
     *
     * @return \OpenAPI\Client\Model\ShipmentActionType[]|null
     */
    public function getAvailableActions()
    {
        return $this->container['available_actions'];
    }

    /**
     * Sets available_actions
     *
     * @param \OpenAPI\Client\Model\ShipmentActionType[]|null $available_actions Доступные действия над отгрузкой.
     *
     * @return self
     */
    public function setAvailableActions($available_actions)
    {
        if (is_null($available_actions)) {
            throw new \InvalidArgumentException('non-nullable available_actions cannot be null');
        }


        $this->container['available_actions'] = $available_actions;

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


