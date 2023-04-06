# Phwebs\Wisenet\ElementEnrolmentApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getElementEnrolments**](ElementEnrolmentApi.md#getelementenrolments) | **GET** /element-enrolments | Get ElementEnrolments
[**patchElementEnrolment**](ElementEnrolmentApi.md#patchelementenrolment) | **PATCH** /element-enrolments/{id} | Patch ElementEnrolment

# **getElementEnrolments**
> \Phwebs\Wisenet\Model\ElementEnrolmentItem[] getElementEnrolments($learner_id_filter, $course_enrolment_id_filter, $unit_enrolment_id_filter, $last_modified_time_stamp_filter, $skip, $take, $learner_number_filter, $unit_code_filter)

Get ElementEnrolments

Returns all ElementEnrolment records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\ElementEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learner_id_filter = 56; // int | Filter by LearnerId
$course_enrolment_id_filter = 56; // int | Filter by CourseEnrolmentId
$unit_enrolment_id_filter = 56; // int | Filter by UnitEnrolmentId
$last_modified_time_stamp_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by LastModifiedTimeStamp
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$learner_number_filter = "learner_number_filter_example"; // string | Filter by Learner Number
$unit_code_filter = "unit_code_filter_example"; // string | Filter by Unit Code

try {
    $result = $apiInstance->getElementEnrolments($learner_id_filter, $course_enrolment_id_filter, $unit_enrolment_id_filter, $last_modified_time_stamp_filter, $skip, $take, $learner_number_filter, $unit_code_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementEnrolmentApi->getElementEnrolments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **learner_id_filter** | **int**| Filter by LearnerId | [optional]
 **course_enrolment_id_filter** | **int**| Filter by CourseEnrolmentId | [optional]
 **unit_enrolment_id_filter** | **int**| Filter by UnitEnrolmentId | [optional]
 **last_modified_time_stamp_filter** | **\DateTime**| Filter by LastModifiedTimeStamp | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **learner_number_filter** | **string**| Filter by Learner Number | [optional]
 **unit_code_filter** | **string**| Filter by Unit Code | [optional]

### Return type

[**\Phwebs\Wisenet\Model\ElementEnrolmentItem[]**](../Model/ElementEnrolmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchElementEnrolment**
> \Phwebs\Wisenet\Model\ElementEnrolmentItem patchElementEnrolment($body, $id)

Patch ElementEnrolment

Updates defined Element Enrolment fields for a Element Enrolment record for a given ElementEnrolmentId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\ElementEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\PatchDocument()); // \Phwebs\Wisenet\Model\PatchDocument[] | JSON Patch Document operations to perform on course enrolment
$id = 56; // int | Id of the ElementEnrolment

try {
    $result = $apiInstance->patchElementEnrolment($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementEnrolmentApi->patchElementEnrolment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\PatchDocument[]**](../Model/PatchDocument.md)| JSON Patch Document operations to perform on course enrolment |
 **id** | **int**| Id of the ElementEnrolment |

### Return type

[**\Phwebs\Wisenet\Model\ElementEnrolmentItem**](../Model/ElementEnrolmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

