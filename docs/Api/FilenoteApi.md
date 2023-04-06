# Phwebs\Wisenet\FilenoteApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFilenote**](FilenoteApi.md#createfilenote) | **POST** /filenotes | Create Filenote
[**getFilenote**](FilenoteApi.md#getfilenote) | **GET** /filenotes/{id} | Get Filenote by Id
[**getFilenotes**](FilenoteApi.md#getfilenotes) | **GET** /filenotes | Get Filenotes
[**replaceFilenote**](FilenoteApi.md#replacefilenote) | **PUT** /filenotes/{id} | Replace a Filenote

# **createFilenote**
> \Phwebs\Wisenet\Model\FilenoteItem[] createFilenote($body)

Create Filenote

Add a Filenote record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\FilenoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\Filenote()); // \Phwebs\Wisenet\Model\Filenote[] | Filenotes objects to add.

try {
    $result = $apiInstance->createFilenote($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilenoteApi->createFilenote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\Filenote[]**](../Model/Filenote.md)| Filenotes objects to add. |

### Return type

[**\Phwebs\Wisenet\Model\FilenoteItem[]**](../Model/FilenoteItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilenote**
> \Phwebs\Wisenet\Model\FilenoteItem getFilenote($id)

Get Filenote by Id

Returns a single Filenote record for a given FilenoteId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\FilenoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Filenote

try {
    $result = $apiInstance->getFilenote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilenoteApi->getFilenote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Filenote |

### Return type

[**\Phwebs\Wisenet\Model\FilenoteItem**](../Model/FilenoteItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilenotes**
> \Phwebs\Wisenet\Model\FilenoteItem[] getFilenotes($last_modified_time_stamp_filter, $entity_name_filter, $record_id_filter, $skip, $take)

Get Filenotes

Returns all Filenotes for a given EntityName and RecordId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\FilenoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$entity_name_filter = "entity_name_filter_example"; // string | Filter by EntityName
$record_id_filter = "record_id_filter_example"; // string | Filter by RecordId
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getFilenotes($last_modified_time_stamp_filter, $entity_name_filter, $record_id_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilenoteApi->getFilenotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **entity_name_filter** | **string**| Filter by EntityName | [optional]
 **record_id_filter** | **string**| Filter by RecordId | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\FilenoteItem[]**](../Model/FilenoteItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceFilenote**
> \Phwebs\Wisenet\Model\FilenoteItem replaceFilenote($body, $id)

Replace a Filenote

Replaces a Filenote for the given FilenoteId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\FilenoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\Filenote(); // \Phwebs\Wisenet\Model\Filenote | New Filenote object to replace Filenote with
$id = 56; // int | Id of Filenote to replace

try {
    $result = $apiInstance->replaceFilenote($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilenoteApi->replaceFilenote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\Filenote**](../Model/Filenote.md)| New Filenote object to replace Filenote with |
 **id** | **int**| Id of Filenote to replace |

### Return type

[**\Phwebs\Wisenet\Model\FilenoteItem**](../Model/FilenoteItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

