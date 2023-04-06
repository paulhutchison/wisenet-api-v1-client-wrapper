# Phwebs\Wisenet\LearnerAuApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLearnerAU**](LearnerAuApi.md#getlearnerau) | **GET** /learnersAU/{id} | Get LearnerAu by Id
[**getLearnerAUPersonal**](LearnerAuApi.md#getlearneraupersonal) | **GET** /learnersAU/{id}/personal | Get LearnerAuPersonal by Id
[**getLearnerAuList**](LearnerAuApi.md#getlearneraulist) | **GET** /learnersAU/list | Get Basic Learner List
[**getLearnersAU**](LearnerAuApi.md#getlearnersau) | **GET** /learnersAU | Returns all LearnerAU records.
[**patchLearnerAU**](LearnerAuApi.md#patchlearnerau) | **PATCH** /learnersAU/{id} | Patch LearnerAU
[**postLearnersAU**](LearnerAuApi.md#postlearnersau) | **POST** /learnersAU | Post LearnersAU
[**replaceLearnerAU**](LearnerAuApi.md#replacelearnerau) | **PUT** /learnersAU/{id} | Replace LearnerAU
[**replaceLearnerAUPersonal**](LearnerAuApi.md#replacelearneraupersonal) | **PUT** /learnersAU/{id}/personal | Replace LearnerAUPersonal

# **getLearnerAU**
> \Phwebs\Wisenet\Model\LearnerAuItem getLearnerAU($id)

Get LearnerAu by Id

Returns a single LearnerAU record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerAuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the LearnerAU

try {
    $result = $apiInstance->getLearnerAU($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerAuApi->getLearnerAU: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the LearnerAU |

### Return type

[**\Phwebs\Wisenet\Model\LearnerAuItem**](../Model/LearnerAuItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerAUPersonal**
> \Phwebs\Wisenet\Model\LearnerAuPersonalItem getLearnerAUPersonal($id)

Get LearnerAuPersonal by Id

Returns a single LearnerAU record’s personal details for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerAuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the LearnerAUPersonal

try {
    $result = $apiInstance->getLearnerAUPersonal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerAuApi->getLearnerAUPersonal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the LearnerAUPersonal |

### Return type

[**\Phwebs\Wisenet\Model\LearnerAuPersonalItem**](../Model/LearnerAuPersonalItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerAuList**
> \Phwebs\Wisenet\Model\LearnerBasic[] getLearnerAuList($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $is_active_filter, $usi_requires_validation_filter, $search, $unique_student_identifier_filter, $skip, $take)

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

$apiInstance = new Phwebs\Wisenet\Api\LearnerAuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_number_filter = "learner_number_filter_example"; // string | Filter by LearnerNumber (RefInternal)
$learner_username_filter = "learner_username_filter_example"; // string | Filter by LearnerUsername (PortalUsername)
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$sync_to_xero_filter = "sync_to_xero_filter_example"; // string | Filter by SyncToXero
$is_active_filter = "is_active_filter_example"; // string | Filter by IsActive
$usi_requires_validation_filter = "usi_requires_validation_filter_example"; // string | Filter by Usi validation
$search = "search_example"; // string | This does a string search on the FirstName and LastName
$unique_student_identifier_filter = "unique_student_identifier_filter_example"; // string | Filter by UniqueStudentIdentifierFilter
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getLearnerAuList($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $is_active_filter, $usi_requires_validation_filter, $search, $unique_student_identifier_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerAuApi->getLearnerAuList: ', $e->getMessage(), PHP_EOL;
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
 **is_active_filter** | **string**| Filter by IsActive | [optional]
 **usi_requires_validation_filter** | **string**| Filter by Usi validation | [optional]
 **search** | **string**| This does a string search on the FirstName and LastName | [optional]
 **unique_student_identifier_filter** | **string**| Filter by UniqueStudentIdentifierFilter | [optional]
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

# **getLearnersAU**
> \Phwebs\Wisenet\Model\LearnerAuItem[] getLearnersAU($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $unique_student_identifier_filter, $skip, $take)

Returns all LearnerAU records.

Returns all LearnerAU records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerAuApi(
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
$unique_student_identifier_filter = "unique_student_identifier_filter_example"; // string | Filter by UniqueStudentIdentifierFilter
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getLearnersAU($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $unique_student_identifier_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerAuApi->getLearnersAU: ', $e->getMessage(), PHP_EOL;
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
 **unique_student_identifier_filter** | **string**| Filter by UniqueStudentIdentifierFilter | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\LearnerAuItem[]**](../Model/LearnerAuItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchLearnerAU**
> \Phwebs\Wisenet\Model\LearnerAu patchLearnerAU($body, $id)

Patch LearnerAU

Updates defined LearnerAU fields for a LearnerAU record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerAuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\PatchDocument()); // \Phwebs\Wisenet\Model\PatchDocument[] | Json Patch Document operations to perform on learner
$id = 56; // int | Id of the LearnerAU

try {
    $result = $apiInstance->patchLearnerAU($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerAuApi->patchLearnerAU: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\PatchDocument[]**](../Model/PatchDocument.md)| Json Patch Document operations to perform on learner |
 **id** | **int**| Id of the LearnerAU |

### Return type

[**\Phwebs\Wisenet\Model\LearnerAu**](../Model/LearnerAu.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLearnersAU**
> \Phwebs\Wisenet\Model\LearnerAuItem[] postLearnersAU($body)

Post LearnersAU

Add a LearnerAU record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerAuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\LearnerAu()); // \Phwebs\Wisenet\Model\LearnerAu[] | The learners.

try {
    $result = $apiInstance->postLearnersAU($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerAuApi->postLearnersAU: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerAu[]**](../Model/LearnerAu.md)| The learners. |

### Return type

[**\Phwebs\Wisenet\Model\LearnerAuItem[]**](../Model/LearnerAuItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLearnerAU**
> \Phwebs\Wisenet\Model\LearnerAuItem replaceLearnerAU($body, $id)

Replace LearnerAU

Replaces a LearnerAU record for a given LearnerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerAuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\LearnerAu(); // \Phwebs\Wisenet\Model\LearnerAu | New learner object to replace learner with
$id = 56; // int | Id of the LearnerAU

try {
    $result = $apiInstance->replaceLearnerAU($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerAuApi->replaceLearnerAU: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerAu**](../Model/LearnerAu.md)| New learner object to replace learner with |
 **id** | **int**| Id of the LearnerAU |

### Return type

[**\Phwebs\Wisenet\Model\LearnerAuItem**](../Model/LearnerAuItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLearnerAUPersonal**
> \Phwebs\Wisenet\Model\LearnerAuPersonalItem replaceLearnerAUPersonal($body, $id)

Replace LearnerAUPersonal

Replace a LearnerAU record’s personal details for a given LearnerId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerAuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\LearnerAuPersonal(); // \Phwebs\Wisenet\Model\LearnerAuPersonal | Source learner personal object to replace target learner's personal fields
$id = 56; // int | Id of the LearnerAUPersonal

try {
    $result = $apiInstance->replaceLearnerAUPersonal($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerAuApi->replaceLearnerAUPersonal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerAuPersonal**](../Model/LearnerAuPersonal.md)| Source learner personal object to replace target learner&#x27;s personal fields |
 **id** | **int**| Id of the LearnerAUPersonal |

### Return type

[**\Phwebs\Wisenet\Model\LearnerAuPersonalItem**](../Model/LearnerAuPersonalItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

