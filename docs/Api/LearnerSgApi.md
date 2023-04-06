# Phwebs\Wisenet\LearnerSgApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLearnerSG**](LearnerSgApi.md#getlearnersg) | **GET** /learnersSG/{id} | Get LearnerSg by Id
[**getLearnerSGPersonal**](LearnerSgApi.md#getlearnersgpersonal) | **GET** /learnersSG/{id}/personal | Get LearnerSgPersonal by Id
[**getLearnerSgList**](LearnerSgApi.md#getlearnersglist) | **GET** /learnersSG/list | Get Basic Learner List
[**getLearnersSG**](LearnerSgApi.md#getlearnerssg) | **GET** /learnersSG | Get LearnersSG
[**patchLearnerSG**](LearnerSgApi.md#patchlearnersg) | **PATCH** /learnersSG/{id} | Patch LearnerSG
[**postLearnersSG**](LearnerSgApi.md#postlearnerssg) | **POST** /learnersSG | Post LearnersSG
[**replaceLearnerSG**](LearnerSgApi.md#replacelearnersg) | **PUT** /learnersSG/{id} | Replace LearnerSG
[**replaceLearnerSGPersonal**](LearnerSgApi.md#replacelearnersgpersonal) | **PUT** /learnersSG/{id}/personal | Replace LearnerSGPersonal

# **getLearnerSG**
> \Phwebs\Wisenet\Model\LearnerSgItem getLearnerSG($id)

Get LearnerSg by Id

Returns a single LearnerSG record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the LearnerSG

try {
    $result = $apiInstance->getLearnerSG($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSgApi->getLearnerSG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the LearnerSG |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSgItem**](../Model/LearnerSgItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerSGPersonal**
> \Phwebs\Wisenet\Model\LearnerSgPersonal getLearnerSGPersonal($id)

Get LearnerSgPersonal by Id

Returns a single LearnerSG record’s personal details for a given LearnerId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the LearnerSGPersonal

try {
    $result = $apiInstance->getLearnerSGPersonal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSgApi->getLearnerSGPersonal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the LearnerSGPersonal |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSgPersonal**](../Model/LearnerSgPersonal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerSgList**
> \Phwebs\Wisenet\Model\LearnerBasic[] getLearnerSgList($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $skip, $take)

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

$apiInstance = new Phwebs\Wisenet\Api\LearnerSgApi(
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
    $result = $apiInstance->getLearnerSgList($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSgApi->getLearnerSgList: ', $e->getMessage(), PHP_EOL;
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

# **getLearnersSG**
> \Phwebs\Wisenet\Model\LearnerSgItem[] getLearnersSG($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $skip, $take)

Get LearnersSG

Returns all LearnerSG records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | This does a string search on the FirstName and LastName.
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
    $result = $apiInstance->getLearnersSG($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSgApi->getLearnersSG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| This does a string search on the FirstName and LastName. | [optional]
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

[**\Phwebs\Wisenet\Model\LearnerSgItem[]**](../Model/LearnerSgItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchLearnerSG**
> \Phwebs\Wisenet\Model\LearnerSgItem patchLearnerSG($body, $id)

Patch LearnerSG

Updates defined LearnerSG fields for a LearnerSG record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\PatchDocument()); // \Phwebs\Wisenet\Model\PatchDocument[] | Json Patch Document operations to perform on learner
$id = 56; // int | Id of the LearnerSG

try {
    $result = $apiInstance->patchLearnerSG($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSgApi->patchLearnerSG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\PatchDocument[]**](../Model/PatchDocument.md)| Json Patch Document operations to perform on learner |
 **id** | **int**| Id of the LearnerSG |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSgItem**](../Model/LearnerSgItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLearnersSG**
> \Phwebs\Wisenet\Model\LearnerSgItem[] postLearnersSG($body)

Post LearnersSG

Add a LearnerSG record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\LearnerSg()); // \Phwebs\Wisenet\Model\LearnerSg[] | The learners.

try {
    $result = $apiInstance->postLearnersSG($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSgApi->postLearnersSG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerSg[]**](../Model/LearnerSg.md)| The learners. |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSgItem[]**](../Model/LearnerSgItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLearnerSG**
> \Phwebs\Wisenet\Model\LearnerSgItem replaceLearnerSG($body, $id)

Replace LearnerSG

Replace a LearnerSG record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\LearnerSg(); // \Phwebs\Wisenet\Model\LearnerSg | New learner object to replace learner with
$id = 56; // int | Id of the LearnerSG

try {
    $result = $apiInstance->replaceLearnerSG($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSgApi->replaceLearnerSG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerSg**](../Model/LearnerSg.md)| New learner object to replace learner with |
 **id** | **int**| Id of the LearnerSG |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSgItem**](../Model/LearnerSgItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLearnerSGPersonal**
> \Phwebs\Wisenet\Model\LearnerSgPersonalItem replaceLearnerSGPersonal($body, $id)

Replace LearnerSGPersonal

Replace a LearnerSG record’s personal details for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\LearnerSgPersonal(); // \Phwebs\Wisenet\Model\LearnerSgPersonal | Source learner personal object to replace target learner's personal fields
$id = 56; // int | Id of the LearnerSGPersonal

try {
    $result = $apiInstance->replaceLearnerSGPersonal($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSgApi->replaceLearnerSGPersonal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerSgPersonal**](../Model/LearnerSgPersonal.md)| Source learner personal object to replace target learner&#x27;s personal fields |
 **id** | **int**| Id of the LearnerSGPersonal |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSgPersonalItem**](../Model/LearnerSgPersonalItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

