<?php
/**
 * ReturnRequestDecisionType
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
 * ReturnRequestDecisionType Class Doc Comment
 *
 * @category Class
 * @description Решение по возврату.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnRequestDecisionType
{
    /**
     * Possible values of this enum
     */
    public const REFUND_MONEY = 'REFUND_MONEY';

    public const REFUND_MONEY_INCLUDING_SHIPMENT = 'REFUND_MONEY_INCLUDING_SHIPMENT';

    public const REPAIR = 'REPAIR';

    public const REPLACE = 'REPLACE';

    public const SEND_TO_EXAMINATION = 'SEND_TO_EXAMINATION';

    public const DECLINE_REFUND = 'DECLINE_REFUND';

    public const OTHER_DECISION = 'OTHER_DECISION';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REFUND_MONEY,
            self::REFUND_MONEY_INCLUDING_SHIPMENT,
            self::REPAIR,
            self::REPLACE,
            self::SEND_TO_EXAMINATION,
            self::DECLINE_REFUND,
            self::OTHER_DECISION
        ];
    }
}


