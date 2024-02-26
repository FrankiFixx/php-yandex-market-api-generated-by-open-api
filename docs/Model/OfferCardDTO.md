# # OfferCardDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | Ваш SKU — идентификатор товара в вашей системе.  Разрешена любая последовательность длиной до 80 знаков. В нее могут входить английские и русские буквы, цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * SKU товара нельзя менять — можно только удалить товар и добавить заново с новым SKU.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) |
**mapping** | [**\OpenAPI\Client\Model\GetMappingDTO**](GetMappingDTO.md) |  | [optional]
**card_status** | [**\OpenAPI\Client\Model\OfferCardStatusType**](OfferCardStatusType.md) |  | [optional]
**content_rating** | **int** | Процент заполненности карточки. | [optional]
**recommendations** | [**\OpenAPI\Client\Model\OfferCardRecommendationDTO[]**](OfferCardRecommendationDTO.md) | Список рекомендаций к заполнению карточки.  Рекомендации Маркета помогают заполнять карточку так, чтобы покупателям было проще найти ваш товар и решиться на покупку. | [optional]
**errors** | [**\OpenAPI\Client\Model\OfferErrorDTO[]**](OfferErrorDTO.md) | Ошибки в контенте, препятствующие размещению товара на витрине. | [optional]
**warnings** | [**\OpenAPI\Client\Model\OfferErrorDTO[]**](OfferErrorDTO.md) | Связанные с контентом предупреждения, не препятствующие размещению товара на витрине. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
