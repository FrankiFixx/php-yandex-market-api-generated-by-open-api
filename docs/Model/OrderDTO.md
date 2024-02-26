# # OrderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор заказа. | [optional]
**status** | [**\OpenAPI\Client\Model\OrderStatusType**](OrderStatusType.md) |  | [optional]
**substatus** | [**\OpenAPI\Client\Model\OrderSubstatusType**](OrderSubstatusType.md) |  | [optional]
**creation_date** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\CurrencyType**](CurrencyType.md) |  | [optional]
**items_total** | **float** | Общая сумма заказа в валюте заказа без учета стоимости доставки и вознаграждения партнеру за скидки по промокодам, купонам и акциям (параметр &#x60;subsidyTotal&#x60;).  Для отделения целой части от дробной используется точка. | [optional]
**total** | **float** | {% note warning \&quot;\&quot; %}  Этот параметр устарел. Чтобы узнать соответствующее значение, сложите значения &#x60;itemsTotal&#x60; и &#x60;deliveryTotal&#x60;.  {% endnote %}  Общая сумма заказа в валюте заказа с учетом стоимости доставки, но без учета вознаграждения партнеру за скидки по промокодам, купонам, кешбэку и акциям (параметр &#x60;subsidyTotal&#x60;).  Для отделения целой части от дробной используется точка. | [optional]
**delivery_total** | **float** | Стоимость доставки в валюте заказа.  Для отделения целой части от дробной используется точка. | [optional]
**subsidy_total** | **float** | {% note warning \&quot;\&quot; %}  Этот параметр устарел. Чтобы узнать соответствующее значение, сложите значения всех субсидий в &#x60;subsidies&#x60;.  {% endnote %}  Общее вознаграждение партнеру за DBS-доставку и все скидки:  * по промокодам; * по купонам; * по баллам Плюса; * по акциям.  Передается в валюте, указанной в параметре &#x60;currency&#x60;.  Для отделения целой части от дробной используется точка. | [optional]
**total_with_subsidy** | **float** | {% note warning \&quot;\&quot; %}  Этот параметр устарел. Чтобы узнать соответствующее значение, сложите значения &#x60;itemsTotal&#x60;, &#x60;deliveryTotal&#x60; и всех субсидий в &#x60;subsidies&#x60;.  {% endnote %}  Сумма стоимости всех товаров в заказе и вознаграждения за них в валюте магазина (сумма параметров &#x60;total&#x60; и &#x60;subsidyTotal&#x60;). | [optional]
**buyer_items_total** | **float** | Стоимость всех товаров в заказе в валюте покупателя после применения скидок и без учета стоимости доставки. | [optional]
**buyer_total** | **float** | Стоимость всех товаров в заказе в валюте покупателя после применения скидок и с учетом стоимости доставки. | [optional]
**buyer_items_total_before_discount** | **float** | Стоимость всех товаров в заказе в валюте покупателя до применения скидок и без учета стоимости доставки. | [optional]
**buyer_total_before_discount** | **float** | Стоимость всех товаров в заказе в валюте покупателя до применения скидок и с учетом стоимости доставки. | [optional]
**payment_type** | [**\OpenAPI\Client\Model\OrderPaymentType**](OrderPaymentType.md) |  | [optional]
**payment_method** | [**\OpenAPI\Client\Model\OrderPaymentMethodType**](OrderPaymentMethodType.md) |  | [optional]
**fake** | **bool** | Тип заказа:  * &#x60;false&#x60; — настоящий заказ покупателя.  * &#x60;true&#x60; — [тестовый](../../pushapi/concepts/sandbox.md) заказ Маркета. | [optional]
**items** | [**\OpenAPI\Client\Model\OrderItemDTO[]**](OrderItemDTO.md) | Список товаров в заказе. | [optional]
**subsidies** | [**\OpenAPI\Client\Model\OrderItemSubsidyDTO[]**](OrderItemSubsidyDTO.md) | Список субсидий по типам. | [optional]
**delivery** | [**\OpenAPI\Client\Model\OrderDeliveryDTO**](OrderDeliveryDTO.md) |  | [optional]
**buyer** | [**\OpenAPI\Client\Model\OrderBuyerDTO**](OrderBuyerDTO.md) |  | [optional]
**notes** | **string** | Комментарий к заказу. | [optional]
**tax_system** | [**\OpenAPI\Client\Model\OrderTaxSystemType**](OrderTaxSystemType.md) |  | [optional]
**cancel_requested** | **bool** | Запрошена ли отмена. | [optional]
**expiry_date** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
