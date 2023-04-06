# Phwebs\Wisenet\LearnerSaApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLearnerSA**](LearnerSaApi.md#getlearnersa) | **GET** /learnersSA/{id} | Get LearnerSA by Id
[**getLearnerSAPersonal**](LearnerSaApi.md#getlearnersapersonal) | **GET** /learnersSA/{id}/personal | Get LearnerSAPersonal by Id
[**getLearnerSaList**](LearnerSaApi.md#getlearnersalist) | **GET** /learnersSA/list | Get Basic Learner List
[**getLearnersSA**](LearnerSaApi.md#getlearnerssa) | **GET** /learnersSA | Get LearnersSA
[**patchLearnerSA**](LearnerSaApi.md#patchlearnersa) | **PATCH** /learnersSA/{id} | Patch LearnerSA
[**postLearnersSA**](LearnerSaApi.md#postlearnerssa) | **POST** /learnersSA | Post LearnersSA
[**replaceLearnerSA**](LearnerSaApi.md#replacelearnersa) | **PUT** /learnersSA/{id} | Replace LearnerSA
[**replaceLearnerSAPersonal**](LearnerSaApi.md#replacelearnersapersonal) | **PUT** /learnersSA/{id}/personal | Replace LearnerSAPersonal

# **getLearnerSA**
> \Phwebs\Wisenet\Model\LearnerSaItem getLearnerSA($id)

Get LearnerSA by Id

Returns a single LearnerSA record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the LearnerSA

try {
    $result = $apiInstance->getLearnerSA($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSaApi->getLearnerSA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the LearnerSA |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSaItem**](../Model/LearnerSaItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerSAPersonal**
> \Phwebs\Wisenet\Model\LearnerSaPersonal getLearnerSAPersonal($id)

Get LearnerSAPersonal by Id

Returns a single LearnerSA record’s personal details for a given LearnerId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the LearnerSAPersonal

try {
    $result = $apiInstance->getLearnerSAPersonal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSaApi->getLearnerSAPersonal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the LearnerSAPersonal |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSaPersonal**](../Model/LearnerSaPersonal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerSaList**
> \Phwebs\Wisenet\Model\LearnerBasicSa[] getLearnerSaList($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $skip, $take)

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

$apiInstance = new Phwebs\Wisenet\Api\LearnerSaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_number_filter = "learner_number_filter_example"; // string | Filter by LearnerNumber (RefInternal)
$learner_username_filter = "learner_username_filter_example"; // string | Filter by LearnerUsername (PortalUsername)
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getLearnerSaList($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSaApi->getLearnerSaList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **learner_number_filter** | **string**| Filter by LearnerNumber (RefInternal) | [optional]
 **learner_username_filter** | **string**| Filter by LearnerUsername (PortalUsername) | [optional]
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\LearnerBasicSa[]**](../Model/LearnerBasicSa.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnersSA**
> \Phwebs\Wisenet\Model\LearnerSaItem[] getLearnersSA($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $skip, $take)

Get LearnersSA

Returns all LearnerSA records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSaApi(
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
    $result = $apiInstance->getLearnersSA($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSaApi->getLearnersSA: ', $e->getMessage(), PHP_EOL;
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

[**\Phwebs\Wisenet\Model\LearnerSaItem[]**](../Model/LearnerSaItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchLearnerSA**
> \Phwebs\Wisenet\Model\LearnerSaItem patchLearnerSA($body, $id)

Patch LearnerSA

Updates defined LearnerSA fields for a LearnerSA record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\PatchDocument()); // \Phwebs\Wisenet\Model\PatchDocument[] | Json Patch Document operations to perform on learner
$id = 56; // int | Id of the LearnerSA

try {
    $result = $apiInstance->patchLearnerSA($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSaApi->patchLearnerSA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\PatchDocument[]**](../Model/PatchDocument.md)| Json Patch Document operations to perform on learner |
 **id** | **int**| Id of the LearnerSA |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSaItem**](../Model/LearnerSaItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLearnersSA**
> \Phwebs\Wisenet\Model\LearnerSaItem[] postLearnersSA($body)

Post LearnersSA

Add a LearnerSA record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\LearnerSa()); // \Phwebs\Wisenet\Model\LearnerSa[] | The learners.

try {
    $result = $apiInstance->postLearnersSA($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSaApi->postLearnersSA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerSa[]**](../Model/LearnerSa.md)| The learners. |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSaItem[]**](../Model/LearnerSaItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLearnerSA**
> \Phwebs\Wisenet\Model\LearnerSaItem replaceLearnerSA($body, $id)

Replace LearnerSA

Replace a LearnerSA record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\LearnerSa(); // \Phwebs\Wisenet\Model\LearnerSa | New learner object to replace learner with
$id = 56; // int | Id of the LearnerSA

try {
    $result = $apiInstance->replaceLearnerSA($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSaApi->replaceLearnerSA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerSa**](../Model/LearnerSa.md)| New learner object to replace learner with |
 **id** | **int**| Id of the LearnerSA |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSaItem**](../Model/LearnerSaItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLearnerSAPersonal**
> \Phwebs\Wisenet\Model\LearnerSaPersonalItem replaceLearnerSAPersonal($body, $id)

Replace LearnerSAPersonal

Replace a LearnerSA record’s personal details for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerSaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\LearnerSaPersonal(); // \Phwebs\Wisenet\Model\LearnerSaPersonal | Source learner personal object to replace target learner's personal fields
$id = 56; // int | Id of the LearnerSAPersonal

try {
    $result = $apiInstance->replaceLearnerSAPersonal($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerSaApi->replaceLearnerSAPersonal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerSaPersonal**](../Model/LearnerSaPersonal.md)| Source learner personal object to replace target learner&#x27;s personal fields |
 **id** | **int**| Id of the LearnerSAPersonal |

### Return type

[**\Phwebs\Wisenet\Model\LearnerSaPersonalItem**](../Model/LearnerSaPersonalItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

