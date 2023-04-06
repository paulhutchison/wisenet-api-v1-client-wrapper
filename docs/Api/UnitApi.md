# Phwebs\Wisenet\UnitApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUnit**](UnitApi.md#getunit) | **GET** /units/{id} | Get Unit by Id
[**getUnits**](UnitApi.md#getunits) | **GET** /units | Get Units

# **getUnit**
> \Phwebs\Wisenet\Model\UnitItem getUnit($id)

Get Unit by Id

Returns Unit for the given UnitId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Unit

try {
    $result = $apiInstance->getUnit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->getUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Unit |

### Return type

[**\Phwebs\Wisenet\Model\UnitItem**](../Model/UnitItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnits**
> \Phwebs\Wisenet\Model\UnitItem[] getUnits($search, $unit_code_filter, $course_id_filter, $skip, $take, $last_modified_time_stamp_filter)

Get Units

Returns all units with the option to filter by a string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | Search string
$unit_code_filter = "unit_code_filter_example"; // string | Filter by Unit Code
$course_id_filter = "course_id_filter_example"; // string | Filter by CourseId
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)

try {
    $result = $apiInstance->getUnits($search, $unit_code_filter, $course_id_filter, $skip, $take, $last_modified_time_stamp_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->getUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search string | [optional]
 **unit_code_filter** | **string**| Filter by Unit Code | [optional]
 **course_id_filter** | **string**| Filter by CourseId | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]

### Return type

[**\Phwebs\Wisenet\Model\UnitItem[]**](../Model/UnitItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

