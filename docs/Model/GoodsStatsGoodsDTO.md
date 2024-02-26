# # GoodsStatsGoodsDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shop_sku** | **string** | Ваш SKU — идентификатор товара в вашей системе.  Разрешена любая последовательность длиной до 80 знаков. В нее могут входить английские и русские буквы, цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * SKU товара нельзя менять — можно только удалить товар и добавить заново с новым SKU.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) | [optional]
**market_sku** | **int** | SKU на Маркете. | [optional]
**name** | **string** | Название товара. | [optional]
**price** | **float** | Цена на товар, выставленная партнером. | [optional]
**category_id** | **int** | Идентификатор категории товара на Маркете. | [optional]
**category_name** | **string** | Название категории товара на Маркете. | [optional]
**weight_dimensions** | [**\OpenAPI\Client\Model\GoodsStatsWeightDimensionsDTO**](GoodsStatsWeightDimensionsDTO.md) |  | [optional]
**warehouses** | [**\OpenAPI\Client\Model\GoodsStatsWarehouseDTO[]**](GoodsStatsWarehouseDTO.md) | Информация о складах, на которых хранится товар.  Параметр не приходит, если товара нет ни на одном складе. | [optional]
**tariffs** | [**\OpenAPI\Client\Model\TariffDTO[]**](TariffDTO.md) | Информация о тарифах, по которым нужно заплатить за услуги Маркета. | [optional]
**pictures** | **string[]** | Ссылки (URL) изображений товара в хорошем качестве. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
