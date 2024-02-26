# # GetWarehouseStocksRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**with_turnover** | **bool** | Возвращать ли информацию по оборачиваемости (FBY).  Значение по умолчанию — &#x60;false&#x60;. Передавайте &#x60;true&#x60;, если информация нужна. | [optional] [default to false]
**archived** | **bool** | Фильтр по нахождению в архиве.  Передайте &#x60;true&#x60;, чтобы получить информацию об остатках товаров, которые находятся в архиве. Если фильтр не заполнен или передано &#x60;false&#x60;, в ответе возвращается информация о товарах, которые не находятся в архиве. | [optional]
**offer_ids** | **string[]** | Фильтр по вашим SKU товаров.  Возвращается информация об остатках всех переданных SKU, включая товары в архиве.  {% note warning \&quot;Такой список возвращается только целиком\&quot; %}  Если вы запрашиваете информацию по конкретным SKU, не заполняйте:  * &#x60;page_token&#x60;; * &#x60;limit&#x60;; * &#x60;archived&#x60;.  {% endnote %}    | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
