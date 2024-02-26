<?php
/**
 * OrderSubsidyType
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
 * OrderSubsidyType Class Doc Comment
 *
 * @category Class
 * @description Тип субсидии, которые дает Маркет:  * &#x60;SBER_SPASIBO&#x60; — компенсация при оплате заказа бонусами СберСпасибо. Не используется с июля 2021 года. * &#x60;YANDEX_CASHBACK&#x60; — компенсация при оплате заказа баллами Плюса. * &#x60;SUBSIDY&#x60; — компенсация скидки:   * по промокодам;   * по купонам;   * по акциям. * &#x60;DELIVERY&#x60; — компенсация стоимости доставки магазину, который работает по модели DBS.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderSubsidyType
{
    /**
     * Possible values of this enum
     */
    public const NOT_SUBSIDY = 'NOT_SUBSIDY';

    public const SBER_SPASIBO = 'SBER_SPASIBO';

    public const YANDEX_CASHBACK = 'YANDEX_CASHBACK';

    public const SUBSIDY = 'SUBSIDY';

    public const DELIVERY = 'DELIVERY';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_SUBSIDY,
            self::SBER_SPASIBO,
            self::YANDEX_CASHBACK,
            self::SUBSIDY,
            self::DELIVERY
        ];
    }
}

