# Phwebs\Wisenet\UnitOfferApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUnitOffer**](UnitOfferApi.md#getunitoffer) | **GET** /unit-offers/{id} | Get UnitOffer by Id
[**getUnitOffers**](UnitOfferApi.md#getunitoffers) | **GET** /unit-offers | Get UnitOffers

# **getUnitOffer**
> \Phwebs\Wisenet\Model\UnitOfferItem getUnitOffer($id)

Get UnitOffer by Id

Returns the Unit Offer for the given UnitOfferId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\UnitOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the UnitOffer

try {
    $result = $apiInstance->getUnitOffer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitOfferApi->getUnitOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the UnitOffer |

### Return type

[**\Phwebs\Wisenet\Model\UnitOfferItem**](../Model/UnitOfferItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnitOffers**
> \Phwebs\Wisenet\Model\UnitOfferItem[] getUnitOffers($search, $last_modified_time_stamp_filter, $course_offer_id_filter, $skip, $take)

Get UnitOffers

Returns all units offered with the option to filter by a string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\UnitOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | This does a string search on the Code
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$course_offer_id_filter = "course_offer_id_filter_example"; // string | Filter by CourseOfferId
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getUnitOffers($search, $last_modified_time_stamp_filter, $course_offer_id_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitOfferApi->getUnitOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| This does a string search on the Code | [optional]
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **course_offer_id_filter** | **string**| Filter by CourseOfferId | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\UnitOfferItem[]**](../Model/UnitOfferItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

