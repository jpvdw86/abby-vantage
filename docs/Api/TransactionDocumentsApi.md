# jpvdw86\AbbyVantage\TransactionDocumentsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFilesToTransactionDocument**](TransactionDocumentsApi.md#addfilestotransactiondocument) | **POST** /api/publicapi/v1/transactions/{transactionId}/documents/{documentId}/sourceFiles | Adds files to the transaction document
[**createTransactionDocument**](TransactionDocumentsApi.md#createtransactiondocument) | **POST** /api/publicapi/v1/transactions/{transactionId}/documents | Creates a transaction document that will be used to group some files in single processing unit
[**deleteTransactionDocument**](TransactionDocumentsApi.md#deletetransactiondocument) | **DELETE** /api/publicapi/v1/transactions/{transactionId}/documents/{documentId} | Deletes the document from specified transaction
[**downloadTransactionDocumentSourceFile**](TransactionDocumentsApi.md#downloadtransactiondocumentsourcefile) | **GET** /api/publicapi/v1/transactions/{transactionId}/documents/{documentId}/sourceFiles/{fileId}/download | Downloads the source file of the transaction
[**getTransactionDocument**](TransactionDocumentsApi.md#gettransactiondocument) | **GET** /api/publicapi/v1/transactions/{transactionId}/documents/{documentId} | Gets transaction document info
[**getTransactionDocuments**](TransactionDocumentsApi.md#gettransactiondocuments) | **GET** /api/publicapi/v1/transactions/{transactionId}/documents | Gets transaction documents

# **addFilesToTransactionDocument**
> addFilesToTransactionDocument($transaction_id, $document_id, $model, $files)

Adds files to the transaction document

Uploads a set of files to be processed in the specified transaction document.  The maximum size of processed files should not exceed 2 GB.  The maximum count per transaction should not exceed 1000 for process skill.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier
$document_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction document identifier
$model = new \jpvdw86\AbbyVantage\Model\Apipublicapiv1transactionstransactionIddocumentsdocumentIdsourceFilesModel(); // \jpvdw86\AbbyVantage\Model\Apipublicapiv1transactionstransactionIddocumentsdocumentIdsourceFilesModel | 
$files = array("files_example"); // string[] | 

try {
    $apiInstance->addFilesToTransactionDocument($transaction_id, $document_id, $model, $files);
} catch (Exception $e) {
    echo 'Exception when calling TransactionDocumentsApi->addFilesToTransactionDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier |
 **document_id** | [**string**](../Model/.md)| Transaction document identifier |
 **model** | [**\jpvdw86\AbbyVantage\Model\Apipublicapiv1transactionstransactionIddocumentsdocumentIdsourceFilesModel**](../Model/.md)|  | [optional]
 **files** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTransactionDocument**
> createTransactionDocument($transaction_id, $body)

Creates a transaction document that will be used to group some files in single processing unit

Non-process skills allow only one document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier. You receive it in the response after the transaction has been  successfully created.
$body = new \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsTransactionDocumentCreateRequest(); // \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsTransactionDocumentCreateRequest | 

try {
    $apiInstance->createTransactionDocument($transaction_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TransactionDocumentsApi->createTransactionDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier. You receive it in the response after the transaction has been  successfully created. |
 **body** | [**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsTransactionDocumentCreateRequest**](../Model/AbbyyVantagePublicApiContractTransactionsRequestsTransactionDocumentCreateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTransactionDocument**
> deleteTransactionDocument($transaction_id, $document_id)

Deletes the document from specified transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier
$document_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction document identifier

try {
    $apiInstance->deleteTransactionDocument($transaction_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionDocumentsApi->deleteTransactionDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier |
 **document_id** | [**string**](../Model/.md)| Transaction document identifier |

### Return type

void (empty response body)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadTransactionDocumentSourceFile**
> string downloadTransactionDocumentSourceFile($transaction_id, $document_id, $file_id)

Downloads the source file of the transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier
$document_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction document identifier
$file_id = "file_id_example"; // string | Blob identifier

try {
    $result = $apiInstance->downloadTransactionDocumentSourceFile($transaction_id, $document_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionDocumentsApi->downloadTransactionDocumentSourceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier |
 **document_id** | [**string**](../Model/.md)| Transaction document identifier |
 **file_id** | **string**| Blob identifier |

### Return type

**string**

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionDocument**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsTransactionDocumentResult getTransactionDocument($transaction_id, $document_id)

Gets transaction document info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier
$document_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction document identifier

try {
    $result = $apiInstance->getTransactionDocument($transaction_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionDocumentsApi->getTransactionDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier |
 **document_id** | [**string**](../Model/.md)| Transaction document identifier |

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsTransactionDocumentResult**](../Model/AbbyyVantagePublicApiContractTransactionsResultsTransactionDocumentResult.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionDocuments**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsTransactionDocumentResult[] getTransactionDocuments($transaction_id)

Gets transaction documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier. You receive it in the response after the transaction has been  successfully created.

try {
    $result = $apiInstance->getTransactionDocuments($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionDocumentsApi->getTransactionDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier. You receive it in the response after the transaction has been  successfully created. |

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsTransactionDocumentResult[]**](../Model/AbbyyVantagePublicApiContractTransactionsResultsTransactionDocumentResult.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

