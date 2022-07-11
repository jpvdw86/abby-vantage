# jpvdw86\AbbyVantage\TransactionsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFilesToTransaction**](TransactionsApi.md#addfilestotransaction) | **POST** /api/publicapi/v1/transactions/{transactionId}/files | Adds files to the transaction
[**createTransaction**](TransactionsApi.md#createtransaction) | **POST** /api/publicapi/v1/transactions | Creates a processing transaction
[**deleteTransaction**](TransactionsApi.md#deletetransaction) | **DELETE** /api/publicapi/v1/transactions/{transactionId} | Deletes the transaction
[**downloadFile**](TransactionsApi.md#downloadfile) | **GET** /api/publicapi/v1/transactions/{transactionId}/files/{fileId}/download | Downloads the result files
[**generateMobileInputLink**](TransactionsApi.md#generatemobileinputlink) | **POST** /api/publicapi/v1/transactions/{transactionId}/mobileInputLink | Generates link to run mobile input with one time auth token to inject image to specific transaction
[**getTransactionInfo**](TransactionsApi.md#gettransactioninfo) | **GET** /api/publicapi/v1/transactions/{transactionId} | Gets transaction info
[**getTransactionRegistrationParameters**](TransactionsApi.md#gettransactionregistrationparameters) | **GET** /api/publicapi/v1/transactions/{transactionId}/registrationParameters | Gets registration parameters for the transaction
[**launchTransaction**](TransactionsApi.md#launchtransaction) | **POST** /api/publicapi/v1/transactions/launch | Starts processing of the files in new transaction
[**startTransaction**](TransactionsApi.md#starttransaction) | **POST** /api/publicapi/v1/transactions/{transactionId}/start | Starts the transaction

# **addFilesToTransaction**
> addFilesToTransaction($transaction_id, $model, $files)

Adds files to the transaction

Uploads a set of files to be processed in the specified transaction.  The maximum size of processed files should not exceed 2 GB.  The maximum count per transaction should not exceed 1000 for process skill.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier. You receive it in the response after the transaction has been  successfully created.
$model = new \jpvdw86\AbbyVantage\Model\Apipublicapiv1transactionstransactionIdfilesModel(); // \jpvdw86\AbbyVantage\Model\Apipublicapiv1transactionstransactionIdfilesModel | 
$files = array("files_example"); // string[] | 

try {
    $apiInstance->addFilesToTransaction($transaction_id, $model, $files);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->addFilesToTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier. You receive it in the response after the transaction has been  successfully created. |
 **model** | [**\jpvdw86\AbbyVantage\Model\Apipublicapiv1transactionstransactionIdfilesModel**](../Model/.md)|  | [optional]
 **files** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTransaction**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsNewTransactionResult createTransaction($body)

Creates a processing transaction

Creates a transaction that will be used to process some files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsTransactionCreateRequest(); // \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsTransactionCreateRequest | 

try {
    $result = $apiInstance->createTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsTransactionCreateRequest**](../Model/AbbyyVantagePublicApiContractTransactionsRequestsTransactionCreateRequest.md)|  | [optional]

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsNewTransactionResult**](../Model/AbbyyVantagePublicApiContractTransactionsResultsNewTransactionResult.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTransaction**
> deleteTransaction($transaction_id)

Deletes the transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier. You receive it in the response after the transaction has been  successfully created.

try {
    $apiInstance->deleteTransaction($transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->deleteTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier. You receive it in the response after the transaction has been  successfully created. |

### Return type

void (empty response body)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFile**
> string downloadFile($transaction_id, $file_id)

Downloads the result files

Downloads the result file of the transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier. You receive it in the response after the transaction has been successfully created.
$file_id = "file_id_example"; // string | File identifier. You can find it in the transaction details, under documents - resultFiles.

try {
    $result = $apiInstance->downloadFile($transaction_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier. You receive it in the response after the transaction has been successfully created. |
 **file_id** | **string**| File identifier. You can find it in the transaction details, under documents - resultFiles. |

### Return type

**string**

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateMobileInputLink**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsMobileInputLinkResult generateMobileInputLink($transaction_id)

Generates link to run mobile input with one time auth token to inject image to specific transaction

Link can be requested for a non-running transaction.  The token in the link gives the right to add files and start a specific transaction without the ability to get processing results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier. You receive it in the response after the transaction has been  successfully created.

try {
    $result = $apiInstance->generateMobileInputLink($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->generateMobileInputLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier. You receive it in the response after the transaction has been  successfully created. |

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsMobileInputLinkResult**](../Model/AbbyyVantagePublicApiContractTransactionsResultsMobileInputLinkResult.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionInfo**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsTransactionDto getTransactionInfo($transaction_id)

Gets transaction info

Gets the details of the transaction, including the link to the results if processing has finished, or the manual  review link if manual review is needed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier. You receive it in the response after the transaction has been  successfully created.

try {
    $result = $apiInstance->getTransactionInfo($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier. You receive it in the response after the transaction has been  successfully created. |

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsTransactionDto**](../Model/AbbyyVantagePublicApiContractTransactionsResultsTransactionDto.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionRegistrationParameters**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsTransactionRegistrationParameterDto[] getTransactionRegistrationParameters($transaction_id)

Gets registration parameters for the transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier. You receive it in the response after the transaction has been  successfully created.

try {
    $result = $apiInstance->getTransactionRegistrationParameters($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionRegistrationParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier. You receive it in the response after the transaction has been  successfully created. |

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsTransactionRegistrationParameterDto[]**](../Model/AbbyyVantagePublicApiContractTransactionsResultsTransactionRegistrationParameterDto.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **launchTransaction**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsCreatedTransactionResult launchTransaction($model, $files, $skill_id)

Starts processing of the files in new transaction

Creates a transaction that will be used to process some files.  The maximum size of request body should not exceed 2 GB.  The transaction will start automatically.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \jpvdw86\AbbyVantage\Model\Apipublicapiv1transactionslaunchModel(); // \jpvdw86\AbbyVantage\Model\Apipublicapiv1transactionslaunchModel | 
$files = array("files_example"); // string[] | 
$skill_id = "skill_id_example"; // string | 

try {
    $result = $apiInstance->launchTransaction($model, $files, $skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->launchTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\jpvdw86\AbbyVantage\Model\Apipublicapiv1transactionslaunchModel**](../Model/.md)|  | [optional]
 **files** | [**string[]**](../Model/string.md)|  | [optional]
 **skill_id** | **string**|  | [optional]

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsCreatedTransactionResult**](../Model/AbbyyVantagePublicApiContractTransactionsResultsCreatedTransactionResult.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startTransaction**
> startTransaction($transaction_id)

Starts the transaction

Starts processing with the specified transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Transaction identifier. You receive it in the response after the transaction has been  successfully created.

try {
    $apiInstance->startTransaction($transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->startTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| Transaction identifier. You receive it in the response after the transaction has been  successfully created. |

### Return type

void (empty response body)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

