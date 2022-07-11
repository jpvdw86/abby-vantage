# jpvdw86\AbbyVantage\CatalogsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearCatalog**](CatalogsApi.md#clearcatalog) | **POST** /api/publicapi/v1/catalogs/{catalogId}/clear | Deletes all records from the catalog
[**getCatalog**](CatalogsApi.md#getcatalog) | **GET** /api/publicapi/v1/catalogs/{catalogId} | Gets detailed information about the catalog
[**getCatalogs**](CatalogsApi.md#getcatalogs) | **GET** /api/publicapi/v1/catalogs | Lists all available catalogs
[**getReindexOperation**](CatalogsApi.md#getreindexoperation) | **GET** /api/publicapi/v1/catalogs/{catalogId}/reindex/{reindexOperationId} | Gets detailed information of reindex operation
[**startCatalogReindex**](CatalogsApi.md#startcatalogreindex) | **POST** /api/publicapi/v1/catalogs/{catalogId}/reindex | Starts a catalog reindex operation

# **clearCatalog**
> clearCatalog($catalog_id)

Deletes all records from the catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\CatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = "catalog_id_example"; // string | Catalog identifier. You can find it in the list of all catalogs.

try {
    $apiInstance->clearCatalog($catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsApi->clearCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| Catalog identifier. You can find it in the list of all catalogs. |

### Return type

void (empty response body)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCatalog**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsCatalogDto getCatalog($catalog_id)

Gets detailed information about the catalog

Gets detailed information about the catalog structure, e.g. required column set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\CatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = "catalog_id_example"; // string | Catalog identifier. You can find it in the list of all catalogs.

try {
    $result = $apiInstance->getCatalog($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsApi->getCatalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| Catalog identifier. You can find it in the list of all catalogs. |

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsCatalogDto**](../Model/AbbyyVantagePublicApiContractCatalogsResultsCatalogDto.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCatalogs**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsCatalogListItemDto[] getCatalogs()

Lists all available catalogs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\CatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCatalogs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsApi->getCatalogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsCatalogListItemDto[]**](../Model/AbbyyVantagePublicApiContractCatalogsResultsCatalogListItemDto.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReindexOperation**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsReindexOperationResult getReindexOperation($catalog_id, $reindex_operation_id)

Gets detailed information of reindex operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\CatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = "catalog_id_example"; // string | Catalog identifier. You can find it in the list of all catalogs.
$reindex_operation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Operation identifier. You can find it in response to start reindex operation.

try {
    $result = $apiInstance->getReindexOperation($catalog_id, $reindex_operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsApi->getReindexOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| Catalog identifier. You can find it in the list of all catalogs. |
 **reindex_operation_id** | [**string**](../Model/.md)| Operation identifier. You can find it in response to start reindex operation. |

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsReindexOperationResult**](../Model/AbbyyVantagePublicApiContractCatalogsResultsReindexOperationResult.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startCatalogReindex**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsReindexOperationResult startCatalogReindex($catalog_id)

Starts a catalog reindex operation

If indexing was started earlier, and there was no reindex operation, then the extraction search will be based on the previously indexed data.  If indexing has never been started, the extraction search will not be carried out.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\CatalogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = "catalog_id_example"; // string | Catalog identifier. You can find it in the list of all catalogs.

try {
    $result = $apiInstance->startCatalogReindex($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogsApi->startCatalogReindex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| Catalog identifier. You can find it in the list of all catalogs. |

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsReindexOperationResult**](../Model/AbbyyVantagePublicApiContractCatalogsResultsReindexOperationResult.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

