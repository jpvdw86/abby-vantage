# jpvdw86\AbbyVantage\CatalogRecordsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRecords**](CatalogRecordsApi.md#addrecords) | **POST** /api/publicapi/v1/catalogs/{catalogId}/records | Adds records to the specified catalog
[**deleteRecords**](CatalogRecordsApi.md#deleterecords) | **POST** /api/publicapi/v1/catalogs/{catalogId}/records/delete | Deletes the specified records from the catalog
[**getRecord**](CatalogRecordsApi.md#getrecord) | **GET** /api/publicapi/v1/catalogs/{catalogId}/records/{recordId} | Gets a record
[**getRecords**](CatalogRecordsApi.md#getrecords) | **GET** /api/publicapi/v1/catalogs/{catalogId}/records | Lists a portion of the records in the specified catalog

# **addRecords**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsAddRecordsResultResult addRecords($catalog_id, $body)

Adds records to the specified catalog

The maximum number of records that can be added at a time is 5000

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\CatalogRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = "catalog_id_example"; // string | Catalog identifier. You can find it in the list of all catalogs.
$body = array(new \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsRequestsRecordModel()); // \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsRequestsRecordModel[] | Records to add

try {
    $result = $apiInstance->addRecords($catalog_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogRecordsApi->addRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| Catalog identifier. You can find it in the list of all catalogs. |
 **body** | [**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsRequestsRecordModel[]**](../Model/AbbyyVantagePublicApiContractCatalogsRequestsRecordModel.md)| Records to add | [optional]

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsAddRecordsResultResult**](../Model/AbbyyVantagePublicApiContractCatalogsResultsAddRecordsResultResult.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecords**
> deleteRecords($catalog_id, $body)

Deletes the specified records from the catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\CatalogRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = "catalog_id_example"; // string | Catalog identifier. You can find it in the list of all catalogs.
$body = array("body_example"); // string[] | An array of record identifiers to delete

try {
    $apiInstance->deleteRecords($catalog_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CatalogRecordsApi->deleteRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| Catalog identifier. You can find it in the list of all catalogs. |
 **body** | [**string[]**](../Model/string.md)| An array of record identifiers to delete | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecord**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsRecordDto getRecord($catalog_id, $record_id)

Gets a record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\CatalogRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = "catalog_id_example"; // string | Catalog identifier. You can find it in the list of all catalogs.
$record_id = "record_id_example"; // string | Record identifier. You can find it in the list of records.

try {
    $result = $apiInstance->getRecord($catalog_id, $record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogRecordsApi->getRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| Catalog identifier. You can find it in the list of all catalogs. |
 **record_id** | **string**| Record identifier. You can find it in the list of records. |

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsRecordDto**](../Model/AbbyyVantagePublicApiContractCatalogsResultsRecordDto.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecords**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsRecordDto[] getRecords($catalog_id, $offset, $limit)

Lists a portion of the records in the specified catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\CatalogRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = "catalog_id_example"; // string | Catalog identifier. You can find it in the list of all catalogs.
$offset = 0; // int | Pagination offset
$limit = 1000; // int | Maximum number of items to return

try {
    $result = $apiInstance->getRecords($catalog_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogRecordsApi->getRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| Catalog identifier. You can find it in the list of all catalogs. |
 **offset** | **int**| Pagination offset | [optional] [default to 0]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 1000]

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractCatalogsResultsRecordDto[]**](../Model/AbbyyVantagePublicApiContractCatalogsResultsRecordDto.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

