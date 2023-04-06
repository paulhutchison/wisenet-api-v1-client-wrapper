# Phwebs\Wisenet\LocationApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLocations**](LocationApi.md#createlocations) | **POST** /locations | Create Locations
[**getLocation**](LocationApi.md#getlocation) | **GET** /locations/{id} | Get Location by Id
[**getLocations**](LocationApi.md#getlocations) | **GET** /locations | Get Locations
[**getLocationsList**](LocationApi.md#getlocationslist) | **GET** /locations/list | Get list of Locations
[**replaceLocation**](LocationApi.md#replacelocation) | **PUT** /locations/{id} | Replace a Location

# **createLocations**
> \Phwebs\Wisenet\Model\LocationFullItem[] createLocations($body)

Create Locations

Add Location records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\LocationFull()); // \Phwebs\Wisenet\Model\LocationFull[] | Location objects to add

try {
    $result = $apiInstance->createLocations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->createLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LocationFull[]**](../Model/LocationFull.md)| Location objects to add |

### Return type

[**\Phwebs\Wisenet\Model\LocationFullItem[]**](../Model/LocationFullItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocation**
> \Phwebs\Wisenet\Model\LocationFullItem getLocation($id)

Get Location by Id

Returns Location for the given LocationId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Location

try {
    $result = $apiInstance->getLocation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->getLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Location |

### Return type

[**\Phwebs\Wisenet\Model\LocationFullItem**](../Model/LocationFullItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocations**
> \Phwebs\Wisenet\Model\LocationFullItem[] getLocations($last_modified_time_stamp_filter, $skip, $take, $sort, $order, $search)

Get Locations

Returns all Locations with the option to filter by LastModifiedTimeStamp

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$sort = "sort_example"; // string | Field name to sort locations by.  Supported fields are Code, Description and LastModifiedTimeStamp. Default sorting is by Description.
$order = "order_example"; // string | Order in which locations are sorted.  Supported orders are asc and desc. Default sorting is by asc.
$search = "search_example"; // string | This does a string search on Code and Description

try {
    $result = $apiInstance->getLocations($last_modified_time_stamp_filter, $skip, $take, $sort, $order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->getLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **sort** | **string**| Field name to sort locations by.  Supported fields are Code, Description and LastModifiedTimeStamp. Default sorting is by Description. | [optional]
 **order** | **string**| Order in which locations are sorted.  Supported orders are asc and desc. Default sorting is by asc. | [optional]
 **search** | **string**| This does a string search on Code and Description | [optional]

### Return type

[**\Phwebs\Wisenet\Model\LocationFullItem[]**](../Model/LocationFullItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationsList**
> \Phwebs\Wisenet\Model\LocationBasicItem[] getLocationsList($skip, $take, $sort, $order, $search)

Get list of Locations

Returns all locations short info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$sort = "sort_example"; // string | Field name to sort locations by.  Supported fields are Code and Description. Default sorting is by Description.
$order = "order_example"; // string | Order in which locations are sorted.  Supported orders are asc and desc. Default sorting is by asc.
$search = "search_example"; // string | This does a string search on Code and Description

try {
    $result = $apiInstance->getLocationsList($skip, $take, $sort, $order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->getLocationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **sort** | **string**| Field name to sort locations by.  Supported fields are Code and Description. Default sorting is by Description. | [optional]
 **order** | **string**| Order in which locations are sorted.  Supported orders are asc and desc. Default sorting is by asc. | [optional]
 **search** | **string**| This does a string search on Code and Description | [optional]

### Return type

[**\Phwebs\Wisenet\Model\LocationBasicItem[]**](../Model/LocationBasicItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLocation**
> \Phwebs\Wisenet\Model\LocationFullItem replaceLocation($body, $id)

Replace a Location

Replaces a Location record for a given LocationId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\LocationFull(); // \Phwebs\Wisenet\Model\LocationFull | New Location object to replace Location with
$id = 56; // int | Id of the Location

try {
    $result = $apiInstance->replaceLocation($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->replaceLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LocationFull**](../Model/LocationFull.md)| New Location object to replace Location with |
 **id** | **int**| Id of the Location |

### Return type

[**\Phwebs\Wisenet\Model\LocationFullItem**](../Model/LocationFullItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

