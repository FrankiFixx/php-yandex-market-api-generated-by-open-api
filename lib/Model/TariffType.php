<?php
/**
 * TariffType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * TariffType Class Doc Comment
 *
 * @category Class
 * @description Услуга Маркета, за которую начисляется тариф:  * &#x60;AGENCY_COMMISSION&#x60; — прием платежа покупателя.  * &#x60;PAYMENT_TRANSFER&#x60; — перевод платежа покупателя.  * &#x60;FULFILLMENT&#x60; — обработка товара на складе Маркета.  * &#x60;STORAGE&#x60; — хранение товара на складе Маркета в течение суток.  * &#x60;SURPLUS&#x60; — хранение излишков на складе Маркета.  * &#x60;WITHDRAW&#x60; — вывоз товара со склада Маркета.  * &#x60;FEE&#x60; — размещение товара на Маркете.  * &#x60;CANCELLED_ORDER_FEE&#x60; — отмена заказа продавцом.  * &#x60;DELIVERY_TO_CUSTOMER&#x60; — доставка покупателю.  * &#x60;CROSSREGIONAL_DELIVERY&#x60; — доставка в федеральный округ, город или населенный пункт.  * &#x60;DISPOSAL&#x60; — утилизация.  * &#x60;SORTING_CENTER_STORAGE&#x60; — хранение невыкупов и возвратов.  * &#x60;EXPRESS_DELIVERY&#x60; — экспресс-доставка покупателю.  * &#x60;TRANSIT_BOX&#x60; — поставка товара через транзитный склад (за короб).  * &#x60;TRANSIT_PALLET&#x60; — поставка товара через транзитный склад (за палету).  * &#x60;SORTING&#x60; — обработка заказа.  Подробнее о тарифах читайте [в Справке для продавцов](https://yandex.ru/support/marketplace/introduction/rates/index.html).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TariffType
{
    /**
     * Possible values of this enum
     */
    public const AGENCY_COMMISSION = 'AGENCY_COMMISSION';

    public const PAYMENT_TRANSFER = 'PAYMENT_TRANSFER';

    public const FULFILLMENT = 'FULFILLMENT';

    public const STORAGE = 'STORAGE';

    public const WITHDRAW = 'WITHDRAW';

    public const SURPLUS = 'SURPLUS';

    public const FEE = 'FEE';

    public const CANCELLED_ORDER_FEE = 'CANCELLED_ORDER_FEE';

    public const DELIVERY_TO_CUSTOMER = 'DELIVERY_TO_CUSTOMER';

    public const CROSSREGIONAL_DELIVERY = 'CROSSREGIONAL_DELIVERY';

    public const DISPOSAL = 'DISPOSAL';

    public const SORTING_CENTER_STORAGE = 'SORTING_CENTER_STORAGE';

    public const EXPRESS_DELIVERY = 'EXPRESS_DELIVERY';

    public const TRANSIT_BOX = 'TRANSIT_BOX';

    public const TRANSIT_PALLET = 'TRANSIT_PALLET';

    public const SORTING = 'SORTING';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AGENCY_COMMISSION,
            self::PAYMENT_TRANSFER,
            self::FULFILLMENT,
            self::STORAGE,
            self::WITHDRAW,
            self::SURPLUS,
            self::FEE,
            self::CANCELLED_ORDER_FEE,
            self::DELIVERY_TO_CUSTOMER,
            self::CROSSREGIONAL_DELIVERY,
            self::DISPOSAL,
            self::SORTING_CENTER_STORAGE,
            self::EXPRESS_DELIVERY,
            self::TRANSIT_BOX,
            self::TRANSIT_PALLET,
            self::SORTING
        ];
    }
}


