# jpvdw86\AbbyVantage\SkillsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableSkills**](SkillsApi.md#getavailableskills) | **GET** /api/publicapi/v1/skills | Lists all available skills
[**getSkillInfo**](SkillsApi.md#getskillinfo) | **GET** /api/publicapi/v1/skills/{skillId} | Gets the detailed information about a skill

# **getAvailableSkills**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsSkillListItemDto[] getAvailableSkills()

Lists all available skills

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\SkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableSkills();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillsApi->getAvailableSkills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsSkillListItemDto[]**](../Model/AbbyyVantagePublicApiContractSkillsResultsSkillListItemDto.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSkillInfo**
> \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsSkillDto getSkillInfo($skill_id)

Gets the detailed information about a skill

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2Security
$config = jpvdw86\AbbyVantage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new jpvdw86\AbbyVantage\Api\SkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skill_id = "skill_id_example"; // string | Skill identifier. You can find it in the list of all skills.

try {
    $result = $apiInstance->getSkillInfo($skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillsApi->getSkillInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skill_id** | **string**| Skill identifier. You can find it in the list of all skills. |

### Return type

[**\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsSkillDto**](../Model/AbbyyVantagePublicApiContractSkillsResultsSkillDto.md)

### Authorization

[OAuth2Security](../../README.md#OAuth2Security)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

