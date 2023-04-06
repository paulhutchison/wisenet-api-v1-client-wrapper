# Phwebs\Wisenet\LearnerNzApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLearnerNZ**](LearnerNzApi.md#getlearnernz) | **GET** /learnersNZ/{id} | Get LearnerNz by Id
[**getLearnerNZPersonal**](LearnerNzApi.md#getlearnernzpersonal) | **GET** /learnersNZ/{id}/personal | Get LearnerNzPersonal by Id
[**getLearnerNzList**](LearnerNzApi.md#getlearnernzlist) | **GET** /learnersNZ/list | Get Basic Learner List
[**getLearnersNZ**](LearnerNzApi.md#getlearnersnz) | **GET** /learnersNZ | Get LearnersNZ
[**patchLearnerNZ**](LearnerNzApi.md#patchlearnernz) | **PATCH** /learnersNZ/{id} | Patch LearnerNZ
[**postLearnersNZ**](LearnerNzApi.md#postlearnersnz) | **POST** /learnersNZ | Post LearnersNZ
[**replaceLearnerNZ**](LearnerNzApi.md#replacelearnernz) | **PUT** /learnersNZ/{id} | Replace LearnerNZ
[**replaceLearnerNZPersonal**](LearnerNzApi.md#replacelearnernzpersonal) | **PUT** /learnersNZ/{id}/personal | Replace LearnerNZPersonal

# **getLearnerNZ**
> \Phwebs\Wisenet\Model\LearnerNzItem getLearnerNZ($id)

Get LearnerNz by Id

Returns a single LearnerNZ record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerNzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the LearnerNZ

try {
    $result = $apiInstance->getLearnerNZ($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerNzApi->getLearnerNZ: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the LearnerNZ |

### Return type

[**\Phwebs\Wisenet\Model\LearnerNzItem**](../Model/LearnerNzItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerNZPersonal**
> \Phwebs\Wisenet\Model\LearnerNzPersonal getLearnerNZPersonal($id)

Get LearnerNzPersonal by Id

Returns a single LearnerNZ record’s personal details for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerNzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the LearnerNZPersonal

try {
    $result = $apiInstance->getLearnerNZPersonal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerNzApi->getLearnerNZPersonal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the LearnerNZPersonal |

### Return type

[**\Phwebs\Wisenet\Model\LearnerNzPersonal**](../Model/LearnerNzPersonal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerNzList**
> \Phwebs\Wisenet\Model\LearnerBasic[] getLearnerNzList($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $skip, $take)

Get Basic Learner List

Returns a list of basic learners with the option to filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerNzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_number_filter = "learner_number_filter_example"; // string | Filter by LearnerNumber (RefInternal)
$learner_username_filter = "learner_username_filter_example"; // string | Filter by LearnerUsername (PortalUsername)
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$sync_to_xero_filter = "sync_to_xero_filter_example"; // string | Filter by SyncToXero
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getLearnerNzList($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerNzApi->getLearnerNzList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **learner_number_filter** | **string**| Filter by LearnerNumber (RefInternal) | [optional]
 **learner_username_filter** | **string**| Filter by LearnerUsername (PortalUsername) | [optional]
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **sync_to_xero_filter** | **string**| Filter by SyncToXero | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\LearnerBasic[]**](../Model/LearnerBasic.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnersNZ**
> \Phwebs\Wisenet\Model\LearnerNzItem[] getLearnersNZ($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $skip, $take)

Get LearnersNZ

Returns all LearnerNZ records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerNzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | This does a string search on the FirstName and LastName
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$is_active_filter = "is_active_filter_example"; // string | Filter by IsActive
$sync_to_xero_filter = "sync_to_xero_filter_example"; // string | Filter by SyncToXero
$learner_number_filter = "learner_number_filter_example"; // string | Filter by LearnerNumber (RefInternal)
$email_address_filter = "email_address_filter_example"; // string | Filter by Email Address
$mobile_filter = "mobile_filter_example"; // string | Filter by Mobile Number
$learner_alt1_number_filter = "learner_alt1_number_filter_example"; // string | Filter by Learner Alt 1 Number
$learner_alt2_number_filter = "learner_alt2_number_filter_example"; // string | Filter by Learner Alt 2 Number
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getLearnersNZ($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerNzApi->getLearnersNZ: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| This does a string search on the FirstName and LastName | [optional]
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **is_active_filter** | **string**| Filter by IsActive | [optional]
 **sync_to_xero_filter** | **string**| Filter by SyncToXero | [optional]
 **learner_number_filter** | **string**| Filter by LearnerNumber (RefInternal) | [optional]
 **email_address_filter** | **string**| Filter by Email Address | [optional]
 **mobile_filter** | **string**| Filter by Mobile Number | [optional]
 **learner_alt1_number_filter** | **string**| Filter by Learner Alt 1 Number | [optional]
 **learner_alt2_number_filter** | **string**| Filter by Learner Alt 2 Number | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\LearnerNzItem[]**](../Model/LearnerNzItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchLearnerNZ**
> \Phwebs\Wisenet\Model\LearnerNzItem patchLearnerNZ($body, $id)

Patch LearnerNZ

Updates defined LearnerNZ fields for a LearnerNZ record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerNzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\PatchDocument()); // \Phwebs\Wisenet\Model\PatchDocument[] | Json Patch Document operations to perform on learner
$id = 56; // int | Id of the LearnerNZ

try {
    $result = $apiInstance->patchLearnerNZ($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerNzApi->patchLearnerNZ: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\PatchDocument[]**](../Model/PatchDocument.md)| Json Patch Document operations to perform on learner |
 **id** | **int**| Id of the LearnerNZ |

### Return type

[**\Phwebs\Wisenet\Model\LearnerNzItem**](../Model/LearnerNzItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLearnersNZ**
> \Phwebs\Wisenet\Model\LearnerNzItem[] postLearnersNZ($body)

Post LearnersNZ

Add a LearnerNZ record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerNzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\LearnerNz()); // \Phwebs\Wisenet\Model\LearnerNz[] | The learners.

try {
    $result = $apiInstance->postLearnersNZ($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerNzApi->postLearnersNZ: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerNz[]**](../Model/LearnerNz.md)| The learners. |

### Return type

[**\Phwebs\Wisenet\Model\LearnerNzItem[]**](../Model/LearnerNzItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLearnerNZ**
> \Phwebs\Wisenet\Model\LearnerNzItem replaceLearnerNZ($body, $id)

Replace LearnerNZ

Replace a LearnerNZ record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerNzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\LearnerNz(); // \Phwebs\Wisenet\Model\LearnerNz | New learner object to replace learner with
$id = 56; // int | Id of the LearnerNZ

try {
    $result = $apiInstance->replaceLearnerNZ($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerNzApi->replaceLearnerNZ: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerNz**](../Model/LearnerNz.md)| New learner object to replace learner with |
 **id** | **int**| Id of the LearnerNZ |

### Return type

[**\Phwebs\Wisenet\Model\LearnerNzItem**](../Model/LearnerNzItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLearnerNZPersonal**
> \Phwebs\Wisenet\Model\LearnerNzPersonalItem replaceLearnerNZPersonal($body, $id)

Replace LearnerNZPersonal

Replace a LearnerNZ record’s personal details for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerNzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\LearnerNzPersonal(); // \Phwebs\Wisenet\Model\LearnerNzPersonal | Source learner personal object to replace target learner's personal fields
$id = 56; // int | Id of the LearnerNZPersonal

try {
    $result = $apiInstance->replaceLearnerNZPersonal($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerNzApi->replaceLearnerNZPersonal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerNzPersonal**](../Model/LearnerNzPersonal.md)| Source learner personal object to replace target learner&#x27;s personal fields |
 **id** | **int**| Id of the LearnerNZPersonal |

### Return type

[**\Phwebs\Wisenet\Model\LearnerNzPersonalItem**](../Model/LearnerNzPersonalItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

