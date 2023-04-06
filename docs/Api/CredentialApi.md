# Phwebs\Wisenet\CredentialApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCredentials**](CredentialApi.md#getcredentials) | **GET** /credentials | Get Credentials
[**getCredentialsById**](CredentialApi.md#getcredentialsbyid) | **GET** /credentials/{id} | Get Credential by Id

# **getCredentials**
> \Phwebs\Wisenet\Model\CredentialItem[] getCredentials($credential_id_filter, $course_enrolment_id_filter, $credential_number_filter, $skip, $take, $learner_id_filter, $credential_status_id_filter)

Get Credentials

Returns all credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\CredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_id_filter = "credential_id_filter_example"; // string | Filter by CredentialId
$course_enrolment_id_filter = 56; // int | Filter by CourseEnrolmentId
$credential_number_filter = "credential_number_filter_example"; // string | Filter by CredentialNumber
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$learner_id_filter = "learner_id_filter_example"; // string | Filter by LearnerId
$credential_status_id_filter = "credential_status_id_filter_example"; // string | Filter by CredentialStatusId

try {
    $result = $apiInstance->getCredentials($credential_id_filter, $course_enrolment_id_filter, $credential_number_filter, $skip, $take, $learner_id_filter, $credential_status_id_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialApi->getCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential_id_filter** | **string**| Filter by CredentialId | [optional]
 **course_enrolment_id_filter** | **int**| Filter by CourseEnrolmentId | [optional]
 **credential_number_filter** | **string**| Filter by CredentialNumber | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **learner_id_filter** | **string**| Filter by LearnerId | [optional]
 **credential_status_id_filter** | **string**| Filter by CredentialStatusId | [optional]

### Return type

[**\Phwebs\Wisenet\Model\CredentialItem[]**](../Model/CredentialItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCredentialsById**
> \Phwebs\Wisenet\Model\CredentialItem getCredentialsById($id)

Get Credential by Id

Returns Credentials for the given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\CredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Credentials

try {
    $result = $apiInstance->getCredentialsById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialApi->getCredentialsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Credentials |

### Return type

[**\Phwebs\Wisenet\Model\CredentialItem**](../Model/CredentialItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

