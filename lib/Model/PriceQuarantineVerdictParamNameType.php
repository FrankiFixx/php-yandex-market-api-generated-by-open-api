<?php
/**
 * PriceQuarantineVerdictParamNameType
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
 * PriceQuarantineVerdictParamNameType Class Doc Comment
 *
 * @category Class
 * @description Имя параметра причины скрытия товара по цене. * &#x60;CURRENT_PRICE&#x60; — цена, из-за которой товар попал в карантин; * &#x60;LAST_VALID_PRICE&#x60; — последняя цена до попадания в карантин (только для карантина типа &#x60;PRICE_CHANGE&#x60;); * &#x60;MIN_PRICE&#x60; — порог попадания в карантин (только для карантина типов &#x60;LOW_PRICE&#x60; и &#x60;LOW_PRICE_PROMO&#x60;); * &#x60;CURRENCY&#x60; — валюта.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PriceQuarantineVerdictParamNameType
{
    /**
     * Possible values of this enum
     */
    public const CURRENT_PRICE = 'CURRENT_PRICE';

    public const LAST_VALID_PRICE = 'LAST_VALID_PRICE';

    public const MIN_PRICE = 'MIN_PRICE';

    public const CURRENCY = 'CURRENCY';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CURRENT_PRICE,
            self::LAST_VALID_PRICE,
            self::MIN_PRICE,
            self::CURRENCY
        ];
    }
}


