# AbbyVantage API php
Environment: Production<br>Product Version: 1.0.0-0.37.11-20220624.1

## Requirements

PHP 5.5 and later
## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/jpvdw86/abby-vantage.git"
    }
  ],
  "require": {
    "jpvdw86/abby-vantage": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CatalogRecordsApi* | [**addRecords**](docs/Api/CatalogRecordsApi.md#addrecords) | **POST** /api/publicapi/v1/catalogs/{catalogId}/records | Adds records to the specified catalog
*CatalogRecordsApi* | [**deleteRecords**](docs/Api/CatalogRecordsApi.md#deleterecords) | **POST** /api/publicapi/v1/catalogs/{catalogId}/records/delete | Deletes the specified records from the catalog
*CatalogRecordsApi* | [**getRecord**](docs/Api/CatalogRecordsApi.md#getrecord) | **GET** /api/publicapi/v1/catalogs/{catalogId}/records/{recordId} | Gets a record
*CatalogRecordsApi* | [**getRecords**](docs/Api/CatalogRecordsApi.md#getrecords) | **GET** /api/publicapi/v1/catalogs/{catalogId}/records | Lists a portion of the records in the specified catalog
*CatalogsApi* | [**clearCatalog**](docs/Api/CatalogsApi.md#clearcatalog) | **POST** /api/publicapi/v1/catalogs/{catalogId}/clear | Deletes all records from the catalog
*CatalogsApi* | [**getCatalog**](docs/Api/CatalogsApi.md#getcatalog) | **GET** /api/publicapi/v1/catalogs/{catalogId} | Gets detailed information about the catalog
*CatalogsApi* | [**getCatalogs**](docs/Api/CatalogsApi.md#getcatalogs) | **GET** /api/publicapi/v1/catalogs | Lists all available catalogs
*CatalogsApi* | [**getReindexOperation**](docs/Api/CatalogsApi.md#getreindexoperation) | **GET** /api/publicapi/v1/catalogs/{catalogId}/reindex/{reindexOperationId} | Gets detailed information of reindex operation
*CatalogsApi* | [**startCatalogReindex**](docs/Api/CatalogsApi.md#startcatalogreindex) | **POST** /api/publicapi/v1/catalogs/{catalogId}/reindex | Starts a catalog reindex operation
*SkillsApi* | [**getAvailableSkills**](docs/Api/SkillsApi.md#getavailableskills) | **GET** /api/publicapi/v1/skills | Lists all available skills
*SkillsApi* | [**getSkillInfo**](docs/Api/SkillsApi.md#getskillinfo) | **GET** /api/publicapi/v1/skills/{skillId} | Gets the detailed information about a skill
*TransactionDocumentsApi* | [**addFilesToTransactionDocument**](docs/Api/TransactionDocumentsApi.md#addfilestotransactiondocument) | **POST** /api/publicapi/v1/transactions/{transactionId}/documents/{documentId}/sourceFiles | Adds files to the transaction document
*TransactionDocumentsApi* | [**createTransactionDocument**](docs/Api/TransactionDocumentsApi.md#createtransactiondocument) | **POST** /api/publicapi/v1/transactions/{transactionId}/documents | Creates a transaction document that will be used to group some files in single processing unit
*TransactionDocumentsApi* | [**deleteTransactionDocument**](docs/Api/TransactionDocumentsApi.md#deletetransactiondocument) | **DELETE** /api/publicapi/v1/transactions/{transactionId}/documents/{documentId} | Deletes the document from specified transaction
*TransactionDocumentsApi* | [**downloadTransactionDocumentSourceFile**](docs/Api/TransactionDocumentsApi.md#downloadtransactiondocumentsourcefile) | **GET** /api/publicapi/v1/transactions/{transactionId}/documents/{documentId}/sourceFiles/{fileId}/download | Downloads the source file of the transaction
*TransactionDocumentsApi* | [**getTransactionDocument**](docs/Api/TransactionDocumentsApi.md#gettransactiondocument) | **GET** /api/publicapi/v1/transactions/{transactionId}/documents/{documentId} | Gets transaction document info
*TransactionDocumentsApi* | [**getTransactionDocuments**](docs/Api/TransactionDocumentsApi.md#gettransactiondocuments) | **GET** /api/publicapi/v1/transactions/{transactionId}/documents | Gets transaction documents
*TransactionsApi* | [**addFilesToTransaction**](docs/Api/TransactionsApi.md#addfilestotransaction) | **POST** /api/publicapi/v1/transactions/{transactionId}/files | Adds files to the transaction
*TransactionsApi* | [**createTransaction**](docs/Api/TransactionsApi.md#createtransaction) | **POST** /api/publicapi/v1/transactions | Creates a processing transaction
*TransactionsApi* | [**deleteTransaction**](docs/Api/TransactionsApi.md#deletetransaction) | **DELETE** /api/publicapi/v1/transactions/{transactionId} | Deletes the transaction
*TransactionsApi* | [**downloadFile**](docs/Api/TransactionsApi.md#downloadfile) | **GET** /api/publicapi/v1/transactions/{transactionId}/files/{fileId}/download | Downloads the result files
*TransactionsApi* | [**generateMobileInputLink**](docs/Api/TransactionsApi.md#generatemobileinputlink) | **POST** /api/publicapi/v1/transactions/{transactionId}/mobileInputLink | Generates link to run mobile input with one time auth token to inject image to specific transaction
*TransactionsApi* | [**getTransactionInfo**](docs/Api/TransactionsApi.md#gettransactioninfo) | **GET** /api/publicapi/v1/transactions/{transactionId} | Gets transaction info
*TransactionsApi* | [**getTransactionRegistrationParameters**](docs/Api/TransactionsApi.md#gettransactionregistrationparameters) | **GET** /api/publicapi/v1/transactions/{transactionId}/registrationParameters | Gets registration parameters for the transaction
*TransactionsApi* | [**launchTransaction**](docs/Api/TransactionsApi.md#launchtransaction) | **POST** /api/publicapi/v1/transactions/launch | Starts processing of the files in new transaction
*TransactionsApi* | [**startTransaction**](docs/Api/TransactionsApi.md#starttransaction) | **POST** /api/publicapi/v1/transactions/{transactionId}/start | Starts the transaction

## Documentation For Models

 - [AbbyyVantagePublicApiContractCatalogsColumnType](docs/Model/AbbyyVantagePublicApiContractCatalogsColumnType.md)
 - [AbbyyVantagePublicApiContractCatalogsReindexState](docs/Model/AbbyyVantagePublicApiContractCatalogsReindexState.md)
 - [AbbyyVantagePublicApiContractCatalogsRequestsRecordModel](docs/Model/AbbyyVantagePublicApiContractCatalogsRequestsRecordModel.md)
 - [AbbyyVantagePublicApiContractCatalogsResultsAddRecordsResultResult](docs/Model/AbbyyVantagePublicApiContractCatalogsResultsAddRecordsResultResult.md)
 - [AbbyyVantagePublicApiContractCatalogsResultsCatalogDto](docs/Model/AbbyyVantagePublicApiContractCatalogsResultsCatalogDto.md)
 - [AbbyyVantagePublicApiContractCatalogsResultsCatalogListItemDto](docs/Model/AbbyyVantagePublicApiContractCatalogsResultsCatalogListItemDto.md)
 - [AbbyyVantagePublicApiContractCatalogsResultsColumnDto](docs/Model/AbbyyVantagePublicApiContractCatalogsResultsColumnDto.md)
 - [AbbyyVantagePublicApiContractCatalogsResultsRecordDto](docs/Model/AbbyyVantagePublicApiContractCatalogsResultsRecordDto.md)
 - [AbbyyVantagePublicApiContractCatalogsResultsReindexOperationResult](docs/Model/AbbyyVantagePublicApiContractCatalogsResultsReindexOperationResult.md)
 - [AbbyyVantagePublicApiContractFieldType](docs/Model/AbbyyVantagePublicApiContractFieldType.md)
 - [AbbyyVantagePublicApiContractSkillsResultsFieldDto](docs/Model/AbbyyVantagePublicApiContractSkillsResultsFieldDto.md)
 - [AbbyyVantagePublicApiContractSkillsResultsInnerSkillDto](docs/Model/AbbyyVantagePublicApiContractSkillsResultsInnerSkillDto.md)
 - [AbbyyVantagePublicApiContractSkillsResultsSkillClassDto](docs/Model/AbbyyVantagePublicApiContractSkillsResultsSkillClassDto.md)
 - [AbbyyVantagePublicApiContractSkillsResultsSkillDto](docs/Model/AbbyyVantagePublicApiContractSkillsResultsSkillDto.md)
 - [AbbyyVantagePublicApiContractSkillsResultsSkillListItemDto](docs/Model/AbbyyVantagePublicApiContractSkillsResultsSkillListItemDto.md)
 - [AbbyyVantagePublicApiContractSkillsSkillType](docs/Model/AbbyyVantagePublicApiContractSkillsSkillType.md)
 - [AbbyyVantagePublicApiContractSkillsTextFieldFormat](docs/Model/AbbyyVantagePublicApiContractSkillsTextFieldFormat.md)
 - [AbbyyVantagePublicApiContractTransactionsRequestsImageProcessingOptions](docs/Model/AbbyyVantagePublicApiContractTransactionsRequestsImageProcessingOptions.md)
 - [AbbyyVantagePublicApiContractTransactionsRequestsPreprocessingOperationSwitcher](docs/Model/AbbyyVantagePublicApiContractTransactionsRequestsPreprocessingOperationSwitcher.md)
 - [AbbyyVantagePublicApiContractTransactionsRequestsTransactionCreateRequest](docs/Model/AbbyyVantagePublicApiContractTransactionsRequestsTransactionCreateRequest.md)
 - [AbbyyVantagePublicApiContractTransactionsRequestsTransactionDocumentCreateRequest](docs/Model/AbbyyVantagePublicApiContractTransactionsRequestsTransactionDocumentCreateRequest.md)
 - [AbbyyVantagePublicApiContractTransactionsRequestsTransactionDocumentFileMetadataDto](docs/Model/AbbyyVantagePublicApiContractTransactionsRequestsTransactionDocumentFileMetadataDto.md)
 - [AbbyyVantagePublicApiContractTransactionsRequestsTransactionDocumentMetadataDto](docs/Model/AbbyyVantagePublicApiContractTransactionsRequestsTransactionDocumentMetadataDto.md)
 - [AbbyyVantagePublicApiContractTransactionsRequestsTransactionFileMetadataDto](docs/Model/AbbyyVantagePublicApiContractTransactionsRequestsTransactionFileMetadataDto.md)
 - [AbbyyVantagePublicApiContractTransactionsRequestsTransactionFileRegistrationParameter](docs/Model/AbbyyVantagePublicApiContractTransactionsRequestsTransactionFileRegistrationParameter.md)
 - [AbbyyVantagePublicApiContractTransactionsRequestsTransactionLaunchMetadataDto](docs/Model/AbbyyVantagePublicApiContractTransactionsRequestsTransactionLaunchMetadataDto.md)
 - [AbbyyVantagePublicApiContractTransactionsRequestsTransactionMetadataDto](docs/Model/AbbyyVantagePublicApiContractTransactionsRequestsTransactionMetadataDto.md)
 - [AbbyyVantagePublicApiContractTransactionsRequestsTransactionRegistrationParameter](docs/Model/AbbyyVantagePublicApiContractTransactionsRequestsTransactionRegistrationParameter.md)
 - [AbbyyVantagePublicApiContractTransactionsResultFileType](docs/Model/AbbyyVantagePublicApiContractTransactionsResultFileType.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsClassDto](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsClassDto.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsClassificationConfidenceDto](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsClassificationConfidenceDto.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsClassificationDto](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsClassificationDto.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsCreatedTransactionResult](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsCreatedTransactionResult.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsDocumentBusinessRulesErrorDto](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsDocumentBusinessRulesErrorDto.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsExtractedDocumentDto](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsExtractedDocumentDto.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsFileDto](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsFileDto.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsMobileInputLinkResult](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsMobileInputLinkResult.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsNewTransactionDocumentResult](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsNewTransactionDocumentResult.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsNewTransactionResult](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsNewTransactionResult.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsResultFileDto](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsResultFileDto.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsTransactionDocumentResult](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsTransactionDocumentResult.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsTransactionDto](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsTransactionDto.md)
 - [AbbyyVantagePublicApiContractTransactionsResultsTransactionRegistrationParameterDto](docs/Model/AbbyyVantagePublicApiContractTransactionsResultsTransactionRegistrationParameterDto.md)
 - [AbbyyVantagePublicApiContractTransactionsTransactionStatus](docs/Model/AbbyyVantagePublicApiContractTransactionsTransactionStatus.md)
 - [Apipublicapiv1transactionslaunchModel](docs/Model/Apipublicapiv1transactionslaunchModel.md)
 - [Apipublicapiv1transactionstransactionIddocumentsdocumentIdsourceFilesModel](docs/Model/Apipublicapiv1transactionstransactionIddocumentsdocumentIdsourceFilesModel.md)
 - [Apipublicapiv1transactionstransactionIdfilesModel](docs/Model/Apipublicapiv1transactionstransactionIdfilesModel.md)
 - [DocumentIdSourceFilesBody](docs/Model/DocumentIdSourceFilesBody.md)
 - [MicrosoftAspNetCoreMvcProblemDetails](docs/Model/MicrosoftAspNetCoreMvcProblemDetails.md)
 - [TransactionIdFilesBody](docs/Model/TransactionIdFilesBody.md)
 - [TransactionsLaunchBody](docs/Model/TransactionsLaunchBody.md)

## Documentation For Authorization


## OAuth2Security

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://vantage-eu.abbyy.com/auth2/connect/authorize
- **Scopes**: 
 - **openid**: User Id
 - **permissions**: User permissions


## Author
Jean-Paul van der Wegen
Generated by swagger-codegen
```
swagger-codegen generate -l php -i https://vantage-eu.abbyy.com/api/swagger/publicapi/v1 --git-repo-id abby-vantage --git-user-id jpvdw86 --invoker-package "jpvdw86\AbbyVantage" -o /Volumes/Development/AbbyVantage
```



