# OpenAPI\Client\ReportsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateGoodsMovementReport()**](ReportsApi.md#generateGoodsMovementReport) | **POST** /reports/goods-movement/generate | Отчет по движению товаров |
| [**generateGoodsRealizationReport()**](ReportsApi.md#generateGoodsRealizationReport) | **POST** /reports/goods-realization/generate | Отчет по реализации |
| [**generateGoodsTurnoverReport()**](ReportsApi.md#generateGoodsTurnoverReport) | **POST** /reports/goods-turnover/generate | Отчет по оборачиваемости |
| [**generatePricesReport()**](ReportsApi.md#generatePricesReport) | **POST** /reports/prices/generate | Отчет «Цены на рынке» |
| [**generateShowsSalesReport()**](ReportsApi.md#generateShowsSalesReport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж» |
| [**generateStocksOnWarehousesReport()**](ReportsApi.md#generateStocksOnWarehousesReport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах |
| [**generateUnitedMarketplaceServicesReport()**](ReportsApi.md#generateUnitedMarketplaceServicesReport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг |
| [**generateUnitedNettingReport()**](ReportsApi.md#generateUnitedNettingReport) | **POST** /reports/united-netting/generate | Отчет по платежам |
| [**generateUnitedOrdersReport()**](ReportsApi.md#generateUnitedOrdersReport) | **POST** /reports/united-orders/generate | Отчет по заказам |
| [**getReportInfo()**](ReportsApi.md#getReportInfo) | **GET** /reports/info/{reportId} | Статус генерации и скачивание готовых отчетов |


## `generateGoodsMovementReport()`

```php
generateGoodsMovementReport($generate_goods_movement_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по движению товаров

Запускает генерацию **отчета по движению товаров**. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/reports-fby-fbs.html#documents__flow)  {% note warning \"Формат отчета\" %}  Отчет доступен в формате `FILE` — электронная таблица.  {% endnote %}    Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_movement_report_request = new \OpenAPI\Client\Model\GenerateGoodsMovementReportRequest(); // \OpenAPI\Client\Model\GenerateGoodsMovementReportRequest
$format = new \OpenAPI\Client\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateGoodsMovementReport($generate_goods_movement_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsMovementReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_movement_report_request** | [**\OpenAPI\Client\Model\GenerateGoodsMovementReportRequest**](../Model/GenerateGoodsMovementReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsRealizationReport()`

```php
generateGoodsRealizationReport($generate_goods_realization_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по реализации

Запускает генерацию **отчета по реализации** за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/reports-fby-fbs.html#documents__sales-report)  {% note warning \"Формат отчета\" %}  Отчет доступен в формате `FILE` — электронная таблица.  {% endnote %}     Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_realization_report_request = new \OpenAPI\Client\Model\GenerateGoodsRealizationReportRequest(); // \OpenAPI\Client\Model\GenerateGoodsRealizationReportRequest
$format = new \OpenAPI\Client\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateGoodsRealizationReport($generate_goods_realization_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsRealizationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_realization_report_request** | [**\OpenAPI\Client\Model\GenerateGoodsRealizationReportRequest**](../Model/GenerateGoodsRealizationReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsTurnoverReport()`

```php
generateGoodsTurnoverReport($generate_goods_turnover_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по оборачиваемости

Запускает генерацию **отчета по оборачиваемости** за заданный период.  [Что это за отчет](https://yandex.ru/support/marketplace/analytics/turnover.html)  {% note warning \"Формат отчета\" %}  Отчет доступен в формате `FILE` — электронная таблица.  {% endnote %}    Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_turnover_request = new \OpenAPI\Client\Model\GenerateGoodsTurnoverRequest(); // \OpenAPI\Client\Model\GenerateGoodsTurnoverRequest
$format = new \OpenAPI\Client\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateGoodsTurnoverReport($generate_goods_turnover_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsTurnoverReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_turnover_request** | [**\OpenAPI\Client\Model\GenerateGoodsTurnoverRequest**](../Model/GenerateGoodsTurnoverRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePricesReport()`

```php
generatePricesReport($generate_prices_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет «Цены на рынке»

Запускает генерацию **отчета «Цены на рынке»**.  {% note warning \"Формат отчета\" %}  Отчет доступен в формате `FILE` — электронная таблица.  {% endnote %}    Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_prices_report_request = new \OpenAPI\Client\Model\GeneratePricesReportRequest(); // \OpenAPI\Client\Model\GeneratePricesReportRequest
$format = new \OpenAPI\Client\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generatePricesReport($generate_prices_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generatePricesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_prices_report_request** | [**\OpenAPI\Client\Model\GeneratePricesReportRequest**](../Model/GeneratePricesReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShowsSalesReport()`

```php
generateShowsSalesReport($generate_shows_sales_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет «Аналитика продаж»

Запускает генерацию **отчета «Аналитика продаж»** за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/shows-sales.html)  {% note warning \"Формат отчета\" %}  Отчет доступен в формате `FILE` — электронная таблица.  {% endnote %}    Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 10 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shows_sales_report_request = new \OpenAPI\Client\Model\GenerateShowsSalesReportRequest(); // \OpenAPI\Client\Model\GenerateShowsSalesReportRequest
$format = new \OpenAPI\Client\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateShowsSalesReport($generate_shows_sales_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShowsSalesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shows_sales_report_request** | [**\OpenAPI\Client\Model\GenerateShowsSalesReportRequest**](../Model/GenerateShowsSalesReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateStocksOnWarehousesReport()`

```php
generateStocksOnWarehousesReport($generate_stocks_on_warehouses_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по остаткам на складах

Запускает генерацию **отчета по остаткам на складах**. Отчет содержит данные:  * Для модели FBY — об остатках на складах Маркета. Такой отчет поддерживает фильтры. * Для модели FBS — об остатках на соответствующем складе магазина и всегда выводится целиком.  {% note warning \"Формат отчета\" %}  Отчет доступен в формате:  * `FILE` — электронная таблица; * `CSV` — ZIP-архив с CSV-файлами.  {% endnote %}    Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_stocks_on_warehouses_report_request = new \OpenAPI\Client\Model\GenerateStocksOnWarehousesReportRequest(); // \OpenAPI\Client\Model\GenerateStocksOnWarehousesReportRequest
$format = new \OpenAPI\Client\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateStocksOnWarehousesReport($generate_stocks_on_warehouses_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateStocksOnWarehousesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_stocks_on_warehouses_report_request** | [**\OpenAPI\Client\Model\GenerateStocksOnWarehousesReportRequest**](../Model/GenerateStocksOnWarehousesReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedMarketplaceServicesReport()`

```php
generateUnitedMarketplaceServicesReport($generate_united_marketplace_services_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по стоимости услуг

Запускает генерацию **отчета по стоимости услуг** за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/reports.html)  {% note warning \"Формат отчета\" %}  Отчет доступен в формате:  * `FILE` — электронная таблица; * `CSV` — ZIP-архив с CSV-файлами.  {% endnote %}    Тип отчета зависит от того, какие поля заполнены в запросе:  |Тип отчета               |Какие поля нужны             | |-------------------------|-----------------------------| |По дате начисления услуги|`dateTimeFrom` и `dateTimeTo`| |По дате формирования акта|`year` и `month`             |  Заказать отчеты обоих типов одним запросом нельзя.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_marketplace_services_report_request = new \OpenAPI\Client\Model\GenerateUnitedMarketplaceServicesReportRequest(); // \OpenAPI\Client\Model\GenerateUnitedMarketplaceServicesReportRequest
$format = new \OpenAPI\Client\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateUnitedMarketplaceServicesReport($generate_united_marketplace_services_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedMarketplaceServicesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_marketplace_services_report_request** | [**\OpenAPI\Client\Model\GenerateUnitedMarketplaceServicesReportRequest**](../Model/GenerateUnitedMarketplaceServicesReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedNettingReport()`

```php
generateUnitedNettingReport($generate_united_netting_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по платежам

Запускает генерацию **отчета по платежам** за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/transactions.html)  {% note warning \"Формат отчета\" %}  Отчет доступен в формате `FILE` — электронная таблица.  {% endnote %}    Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  Тип отчета зависит от того, какие поля заполнены в запросе:  |Тип отчета           |Какие поля нужны                   | |---------------------|-----------------------------------| |О платежах за период |`dateTimeFrom` и `dateTimeTo`      | |О платежном поручении|`bankOrderId` и `bankOrderDateTime`|  Заказать отчеты обоих типов одним запросом нельзя.  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_netting_report_request = new \OpenAPI\Client\Model\GenerateUnitedNettingReportRequest(); // \OpenAPI\Client\Model\GenerateUnitedNettingReportRequest
$format = new \OpenAPI\Client\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateUnitedNettingReport($generate_united_netting_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedNettingReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_netting_report_request** | [**\OpenAPI\Client\Model\GenerateUnitedNettingReportRequest**](../Model/GenerateUnitedNettingReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedOrdersReport()`

```php
generateUnitedOrdersReport($generate_united_orders_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по заказам

Запускает генерацию **отчета по заказам** за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/orders.html)  {% note info \"\" %}  Это новый отчет. Раньше мы так называли генерацию детальной информации по заказам. [Как получить детальную информацию по заказам](../../reference/stats/getOrdersStats.md)  {% endnote %}  {% note warning \"Формат отчета\" %}  Отчет доступен в формате:  * `FILE` — электронная таблица; * `CSV` — ZIP-архив с CSV-файлами.  {% endnote %}    Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_orders_request = new \OpenAPI\Client\Model\GenerateUnitedOrdersRequest(); // \OpenAPI\Client\Model\GenerateUnitedOrdersRequest
$format = new \OpenAPI\Client\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateUnitedOrdersReport($generate_united_orders_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedOrdersReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_orders_request** | [**\OpenAPI\Client\Model\GenerateUnitedOrdersRequest**](../Model/GenerateUnitedOrdersRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportInfo()`

```php
getReportInfo($report_id): \OpenAPI\Client\Model\GetReportInfoResponse
```

Статус генерации и скачивание готовых отчетов

Возвращает статус генерации заданного отчета и, если отчет готов, ссылку для скачивания.  Чтобы воспользоваться этим запросом, вначале нужно запустить генерацию отчета. [Инструкция](../../step-by-step/reports.md)  |**⚙️ Лимит:** 100 запросов в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | Идентификатор отчета, который вы получили после запуска генерации.

try {
    $result = $apiInstance->getReportInfo($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| Идентификатор отчета, который вы получили после запуска генерации. | |

### Return type

[**\OpenAPI\Client\Model\GetReportInfoResponse**](../Model/GetReportInfoResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
