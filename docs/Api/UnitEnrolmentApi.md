# Phwebs\Wisenet\UnitEnrolmentApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUnitEnrolments**](UnitEnrolmentApi.md#createunitenrolments) | **POST** /unit-enrolments | Create UnitEnrolments
[**getUnitEnrolment**](UnitEnrolmentApi.md#getunitenrolment) | **GET** /unit-enrolments/{id} | Get UnitEnrolment by Id
[**getUnitEnrolments**](UnitEnrolmentApi.md#getunitenrolments) | **GET** /unit-enrolments | Get UnitEnrolments
[**patchUnitEnrolment**](UnitEnrolmentApi.md#patchunitenrolment) | **PATCH** /unit-enrolments/{id} | Patch UnitEnrolment

# **createUnitEnrolments**
> \Phwebs\Wisenet\Model\UnitEnrolmentItem[] createUnitEnrolments($body)

Create UnitEnrolments

Add a Unit Enrolment record. Minimum required fields CourseEnrolmentId and UnitOfferId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\UnitEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\UnitEnrolment()); // \Phwebs\Wisenet\Model\UnitEnrolment[] | Unit Enrolment objects to add

try {
    $result = $apiInstance->createUnitEnrolments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitEnrolmentApi->createUnitEnrolments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\UnitEnrolment[]**](../Model/UnitEnrolment.md)| Unit Enrolment objects to add |

### Return type

[**\Phwebs\Wisenet\Model\UnitEnrolmentItem[]**](../Model/UnitEnrolmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnitEnrolment**
> \Phwebs\Wisenet\Model\UnitEnrolmentItem getUnitEnrolment($id)

Get UnitEnrolment by Id

Returns a single Unit Enrolment record for a given UnitEnrolmentId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\UnitEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Unit Enrolment

try {
    $result = $apiInstance->getUnitEnrolment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitEnrolmentApi->getUnitEnrolment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Unit Enrolment |

### Return type

[**\Phwebs\Wisenet\Model\UnitEnrolmentItem**](../Model/UnitEnrolmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnitEnrolments**
> \Phwebs\Wisenet\Model\UnitEnrolmentItem[] getUnitEnrolments($course_enrolment_id_filter, $unit_offer_id_filter, $learner_id_filter, $last_modified_timestamp_filter, $skip, $take, $enrolment_status_id_filter)

Get UnitEnrolments

Returns all Unit Enrolment records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\UnitEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_enrolment_id_filter = "course_enrolment_id_filter_example"; // string | Filter by CourseEnrolmentId
$unit_offer_id_filter = "unit_offer_id_filter_example"; // string | Filter by UnitOfferId
$learner_id_filter = 56; // int | Filter by LearnerId
$last_modified_timestamp_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$enrolment_status_id_filter = "enrolment_status_id_filter_example"; // string | Filter by EnrolmentStatusId

try {
    $result = $apiInstance->getUnitEnrolments($course_enrolment_id_filter, $unit_offer_id_filter, $learner_id_filter, $last_modified_timestamp_filter, $skip, $take, $enrolment_status_id_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitEnrolmentApi->getUnitEnrolments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_enrolment_id_filter** | **string**| Filter by CourseEnrolmentId | [optional]
 **unit_offer_id_filter** | **string**| Filter by UnitOfferId | [optional]
 **learner_id_filter** | **int**| Filter by LearnerId | [optional]
 **last_modified_timestamp_filter** | **\DateTime**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **enrolment_status_id_filter** | **string**| Filter by EnrolmentStatusId | [optional]

### Return type

[**\Phwebs\Wisenet\Model\UnitEnrolmentItem[]**](../Model/UnitEnrolmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUnitEnrolment**
> \Phwebs\Wisenet\Model\UnitEnrolmentItem patchUnitEnrolment($body, $id)

Patch UnitEnrolment

Updates defined Unit Enrolment fields for a Unit Enrolment record for a given UnitEnrolmentId. Cannot PATCH UnitEnrolmentId, UnitOfferID or CourseEnrolmentId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\UnitEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\PatchDocument()); // \Phwebs\Wisenet\Model\PatchDocument[] | JSON Patch Document operations to perform on Unit Enrolment
$id = 56; // int | Id of Unit Enrolment to perform patch operations on

try {
    $result = $apiInstance->patchUnitEnrolment($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitEnrolmentApi->patchUnitEnrolment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\PatchDocument[]**](../Model/PatchDocument.md)| JSON Patch Document operations to perform on Unit Enrolment |
 **id** | **int**| Id of Unit Enrolment to perform patch operations on |

### Return type

[**\Phwebs\Wisenet\Model\UnitEnrolmentItem**](../Model/UnitEnrolmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

