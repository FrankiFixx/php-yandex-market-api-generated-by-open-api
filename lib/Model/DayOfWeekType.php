<?php
/**
 * DayOfWeekType
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
 * DayOfWeekType Class Doc Comment
 *
 * @category Class
 * @description День недели:  * &#x60;MONDAY&#x60; — понедельник. * &#x60;TUESDAY&#x60; — вторник. * &#x60;WEDNESDAY&#x60; — среда. * &#x60;THURSDAY&#x60; — четверг. * &#x60;FRIDAY&#x60; — пятница. * &#x60;SATURDAY&#x60; — суббота. * &#x60;SUNDAY&#x60; — воскресенье.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DayOfWeekType
{
    /**
     * Possible values of this enum
     */
    public const MONDAY = 'MONDAY';

    public const TUESDAY = 'TUESDAY';

    public const WEDNESDAY = 'WEDNESDAY';

    public const THURSDAY = 'THURSDAY';

    public const FRIDAY = 'FRIDAY';

    public const SATURDAY = 'SATURDAY';

    public const SUNDAY = 'SUNDAY';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MONDAY,
            self::TUESDAY,
            self::WEDNESDAY,
            self::THURSDAY,
            self::FRIDAY,
            self::SATURDAY,
            self::SUNDAY
        ];
    }
}


