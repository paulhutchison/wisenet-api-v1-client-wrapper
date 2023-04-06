# Phwebs\Wisenet\CourseOfferApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCourseOffer**](CourseOfferApi.md#getcourseoffer) | **GET** /course-offers/{id} | Get CourseOffer by Id
[**getCourseOfferList**](CourseOfferApi.md#getcourseofferlist) | **GET** /course-offers/list/{id} | Get CourseOffer by Id
[**getCourseOffers**](CourseOfferApi.md#getcourseoffers) | **GET** /course-offers | Get CourseOffers

# **getCourseOffer**
> \Phwebs\Wisenet\Model\CourseOfferItem getCourseOffer($id)

Get CourseOffer by Id

Returns a single Course Offer record for a given CourseOfferId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\CourseOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the CourseOffer

try {
    $result = $apiInstance->getCourseOffer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseOfferApi->getCourseOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the CourseOffer |

### Return type

[**\Phwebs\Wisenet\Model\CourseOfferItem**](../Model/CourseOfferItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseOfferList**
> \Phwebs\Wisenet\Model\CourseOfferBasicItem getCourseOfferList($id)

Get CourseOffer by Id

Returns a single short Course Offer record for a given CourseOfferId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\CourseOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the CourseOffer

try {
    $result = $apiInstance->getCourseOfferList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseOfferApi->getCourseOfferList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the CourseOffer |

### Return type

[**\Phwebs\Wisenet\Model\CourseOfferBasicItem**](../Model/CourseOfferBasicItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseOffers**
> \Phwebs\Wisenet\Model\CourseOfferItem[] getCourseOffers($search, $last_modified_time_stamp_filter, $publish_flag_filter, $course_offer_start_date_filter, $skip, $take)

Get CourseOffers

Returns all Course Offer records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\CourseOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | This does a string search on the Code and Description
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$publish_flag_filter = "publish_flag_filter_example"; // string | Filter by PublishFlag
$course_offer_start_date_filter = "course_offer_start_date_filter_example"; // string | Filter by CourseOfferStartDate (allows additional filter operators as per above)
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getCourseOffers($search, $last_modified_time_stamp_filter, $publish_flag_filter, $course_offer_start_date_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseOfferApi->getCourseOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| This does a string search on the Code and Description | [optional]
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **publish_flag_filter** | **string**| Filter by PublishFlag | [optional]
 **course_offer_start_date_filter** | **string**| Filter by CourseOfferStartDate (allows additional filter operators as per above) | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\CourseOfferItem[]**](../Model/CourseOfferItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

