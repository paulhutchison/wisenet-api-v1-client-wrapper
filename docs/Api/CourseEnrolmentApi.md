# Phwebs\Wisenet\CourseEnrolmentApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCourseEnrolments**](CourseEnrolmentApi.md#createcourseenrolments) | **POST** /course-enrolments | Create CourseEnrolments
[**getCourseEnrolment**](CourseEnrolmentApi.md#getcourseenrolment) | **GET** /course-enrolments/{id} | Get CourseEnrolment by Id
[**getCourseEnrolments**](CourseEnrolmentApi.md#getcourseenrolments) | **GET** /course-enrolments | Get CourseEnrolments
[**patchCourseEnrolment**](CourseEnrolmentApi.md#patchcourseenrolment) | **PATCH** /course-enrolments/{id} | Patch CourseEnrolment
[**replaceCourseEnrolment**](CourseEnrolmentApi.md#replacecourseenrolment) | **PUT** /course-enrolments/{id} | Replace CourseEnrolment

# **createCourseEnrolments**
> \Phwebs\Wisenet\Model\CourseEnrolmentItem[] createCourseEnrolments($body)

Create CourseEnrolments

Creates a Course Enrolment with a given Course Enrolment object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\CourseEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\CourseEnrolment()); // \Phwebs\Wisenet\Model\CourseEnrolment[] | Course Enrolment objects to add

try {
    $result = $apiInstance->createCourseEnrolments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrolmentApi->createCourseEnrolments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\CourseEnrolment[]**](../Model/CourseEnrolment.md)| Course Enrolment objects to add |

### Return type

[**\Phwebs\Wisenet\Model\CourseEnrolmentItem[]**](../Model/CourseEnrolmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseEnrolment**
> \Phwebs\Wisenet\Model\CourseEnrolmentItem getCourseEnrolment($id)

Get CourseEnrolment by Id

Returns Course Enrolment for the given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\CourseEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the CourseEnrolment

try {
    $result = $apiInstance->getCourseEnrolment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrolmentApi->getCourseEnrolment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the CourseEnrolment |

### Return type

[**\Phwebs\Wisenet\Model\CourseEnrolmentItem**](../Model/CourseEnrolmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseEnrolments**
> \Phwebs\Wisenet\Model\CourseEnrolmentItem[] getCourseEnrolments($search, $learner_id_filter, $learner_number_filter, $course_offer_id_filter, $application_status_id_filter, $last_modified_time_stamp_filter, $skip, $take, $sort, $order, $enrolment_status_id_filter)

Get CourseEnrolments

Returns all Course Enrolment records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\CourseEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | This does a string search on the learner's FirstName, LastName, LearnerNumber and course offer code
$learner_id_filter = 56; // int | Filter by LearnerId
$learner_number_filter = "learner_number_filter_example"; // string | Filter by LearnerNumber
$course_offer_id_filter = 56; // int | Filter by CourseOfferId
$application_status_id_filter = 56; // int | Filter by ApplicationStatusId
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$sort = "sort_example"; // string | Field name to sort course enrolments by.  Supported fields are EndDate, LastModifiedTimeStamp and EnquiryDate. Default sorting is by LastModifiedTimeStamp.
$order = "order_example"; // string | Order in which course enrolments are sorted.  Supported orders are asc and desc. Default sorting is by asc.
$enrolment_status_id_filter = "enrolment_status_id_filter_example"; // string | Filter by EnrolmentStatusId

try {
    $result = $apiInstance->getCourseEnrolments($search, $learner_id_filter, $learner_number_filter, $course_offer_id_filter, $application_status_id_filter, $last_modified_time_stamp_filter, $skip, $take, $sort, $order, $enrolment_status_id_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrolmentApi->getCourseEnrolments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| This does a string search on the learner&#x27;s FirstName, LastName, LearnerNumber and course offer code | [optional]
 **learner_id_filter** | **int**| Filter by LearnerId | [optional]
 **learner_number_filter** | **string**| Filter by LearnerNumber | [optional]
 **course_offer_id_filter** | **int**| Filter by CourseOfferId | [optional]
 **application_status_id_filter** | **int**| Filter by ApplicationStatusId | [optional]
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **sort** | **string**| Field name to sort course enrolments by.  Supported fields are EndDate, LastModifiedTimeStamp and EnquiryDate. Default sorting is by LastModifiedTimeStamp. | [optional]
 **order** | **string**| Order in which course enrolments are sorted.  Supported orders are asc and desc. Default sorting is by asc. | [optional]
 **enrolment_status_id_filter** | **string**| Filter by EnrolmentStatusId | [optional]

### Return type

[**\Phwebs\Wisenet\Model\CourseEnrolmentItem[]**](../Model/CourseEnrolmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCourseEnrolment**
> \Phwebs\Wisenet\Model\CourseEnrolmentItem patchCourseEnrolment($body, $id)

Patch CourseEnrolment

Updates defined Course Enrolment fields for a Course Enrolment record for a given CourseEnrolmentId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\CourseEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\PatchDocument()); // \Phwebs\Wisenet\Model\PatchDocument[] | JSON Patch Document operations to perform on course enrolment
$id = 56; // int | Id of the CourseEnrolment

try {
    $result = $apiInstance->patchCourseEnrolment($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrolmentApi->patchCourseEnrolment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\PatchDocument[]**](../Model/PatchDocument.md)| JSON Patch Document operations to perform on course enrolment |
 **id** | **int**| Id of the CourseEnrolment |

### Return type

[**\Phwebs\Wisenet\Model\CourseEnrolmentItem**](../Model/CourseEnrolmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceCourseEnrolment**
> \Phwebs\Wisenet\Model\CourseEnrolmentItem replaceCourseEnrolment($body, $id)

Replace CourseEnrolment

Replaces a Course Enrolment for a given CourseEnrolmentId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\CourseEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\CourseEnrolment(); // \Phwebs\Wisenet\Model\CourseEnrolment | Course Enrolment object to update with
$id = 56; // int | Id of the CourseEnrolment

try {
    $result = $apiInstance->replaceCourseEnrolment($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrolmentApi->replaceCourseEnrolment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\CourseEnrolment**](../Model/CourseEnrolment.md)| Course Enrolment object to update with |
 **id** | **int**| Id of the CourseEnrolment |

### Return type

[**\Phwebs\Wisenet\Model\CourseEnrolmentItem**](../Model/CourseEnrolmentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

