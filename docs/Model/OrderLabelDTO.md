# # OrderLabelDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Идентификатор заказа. |
**places_number** | **int** | Количество грузовых мест в заказе. |
**url** | **string** | URL файла с ярлыками‑наклейками на все грузовые места в заказе.  Соответствует URL, по которому выполняется запрос [GET campaigns/{campaignId}/orders/{orderId}/delivery/labels](../../reference/orders/generateOrderLabels.md). |
**parcel_box_labels** | [**\OpenAPI\Client\Model\ParcelBoxLabelDTO[]**](ParcelBoxLabelDTO.md) | Информация на ярлыке. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
