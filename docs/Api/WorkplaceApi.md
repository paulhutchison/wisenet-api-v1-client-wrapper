# Phwebs\Wisenet\WorkplaceApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorkplaces**](WorkplaceApi.md#createworkplaces) | **POST** /workplaces | Create Workplaces
[**getWorkplace**](WorkplaceApi.md#getworkplace) | **GET** /workplaces/{id} | Get Workplace by Id
[**getWorkplaces**](WorkplaceApi.md#getworkplaces) | **GET** /workplaces | Get Workplaces
[**replaceWorkplace**](WorkplaceApi.md#replaceworkplace) | **PUT** /workplaces/{id} | Replace Workplace

# **createWorkplaces**
> \Phwebs\Wisenet\Model\WorkplaceItem[] createWorkplaces($body)

Create Workplaces

Add a Workplace record. Minimum required fields: Description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\WorkplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\Workplace()); // \Phwebs\Wisenet\Model\Workplace[] | Workplace objects to add

try {
    $result = $apiInstance->createWorkplaces($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkplaceApi->createWorkplaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\Workplace[]**](../Model/Workplace.md)| Workplace objects to add |

### Return type

[**\Phwebs\Wisenet\Model\WorkplaceItem[]**](../Model/WorkplaceItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkplace**
> \Phwebs\Wisenet\Model\WorkplaceItem getWorkplace($id)

Get Workplace by Id

Returns a single Workplace record for a given WorkplaceId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\WorkplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Workplace

try {
    $result = $apiInstance->getWorkplace($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkplaceApi->getWorkplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Workplace |

### Return type

[**\Phwebs\Wisenet\Model\WorkplaceItem**](../Model/WorkplaceItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkplaces**
> \Phwebs\Wisenet\Model\WorkplaceItem[] getWorkplaces($last_modified_time_stamp_filter, $search, $skip, $take)

Get Workplaces

Returns all Workplace records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\WorkplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$search = "search_example"; // string | This does a string search on Code and Description.
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getWorkplaces($last_modified_time_stamp_filter, $search, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkplaceApi->getWorkplaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **search** | **string**| This does a string search on Code and Description. | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\WorkplaceItem[]**](../Model/WorkplaceItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceWorkplace**
> \Phwebs\Wisenet\Model\WorkplaceItem replaceWorkplace($body, $id)

Replace Workplace

Replaces a Workplace for the given WorkplaceId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\WorkplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\Workplace(); // \Phwebs\Wisenet\Model\Workplace | The source.
$id = 56; // int | Id of the Workplace

try {
    $result = $apiInstance->replaceWorkplace($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkplaceApi->replaceWorkplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\Workplace**](../Model/Workplace.md)| The source. |
 **id** | **int**| Id of the Workplace |

### Return type

[**\Phwebs\Wisenet\Model\WorkplaceItem**](../Model/WorkplaceItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

