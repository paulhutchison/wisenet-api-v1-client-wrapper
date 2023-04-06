# Phwebs\Wisenet\ChecklistApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChecklists**](ChecklistApi.md#createchecklists) | **POST** /checklists | Create Checklists
[**getChecklist**](ChecklistApi.md#getchecklist) | **GET** /checklists/{id} | Get Checklist by Id
[**getChecklists**](ChecklistApi.md#getchecklists) | **GET** /checklists | Get Checklists
[**replaceChecklist**](ChecklistApi.md#replacechecklist) | **PUT** /checklists/{id} | Replace Checklist

# **createChecklists**
> \Phwebs\Wisenet\Model\ChecklistWrappedItem[] createChecklists($body)

Create Checklists

Creates Checklist records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\Checklist()); // \Phwebs\Wisenet\Model\Checklist[] | Checklists objects to add

try {
    $result = $apiInstance->createChecklists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->createChecklists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\Checklist[]**](../Model/Checklist.md)| Checklists objects to add |

### Return type

[**\Phwebs\Wisenet\Model\ChecklistWrappedItem[]**](../Model/ChecklistWrappedItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChecklist**
> \Phwebs\Wisenet\Model\ChecklistWrappedItem getChecklist($id)

Get Checklist by Id

Returns a single Checklist record for a given ChecklistId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Checklist

try {
    $result = $apiInstance->getChecklist($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->getChecklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Checklist |

### Return type

[**\Phwebs\Wisenet\Model\ChecklistWrappedItem**](../Model/ChecklistWrappedItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChecklists**
> \Phwebs\Wisenet\Model\ChecklistWrappedItem[] getChecklists($checklist_item_id_filter, $entity_name_filter, $record_id_filter, $last_modified_time_stamp_filter, $skip, $take)

Get Checklists

Returns all Checklist records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checklist_item_id_filter = 56; // int | Filter by ChecklistItemId
$entity_name_filter = "entity_name_filter_example"; // string | Filter by EntityName
$record_id_filter = 56; // int | Filter by RecordId
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getChecklists($checklist_item_id_filter, $entity_name_filter, $record_id_filter, $last_modified_time_stamp_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->getChecklists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checklist_item_id_filter** | **int**| Filter by ChecklistItemId | [optional]
 **entity_name_filter** | **string**| Filter by EntityName | [optional]
 **record_id_filter** | **int**| Filter by RecordId | [optional]
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\ChecklistWrappedItem[]**](../Model/ChecklistWrappedItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceChecklist**
> \Phwebs\Wisenet\Model\ChecklistWrappedItem replaceChecklist($body, $id)

Replace Checklist

Replaces a Checklist for the given ChecklistId. Ignores changes to ChecklistItemId and RecordId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\Checklist()); // \Phwebs\Wisenet\Model\Checklist[] | New Checklist object to replace the Checklist with
$id = 56; // int | Id of the Checklist

try {
    $result = $apiInstance->replaceChecklist($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->replaceChecklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\Checklist[]**](../Model/Checklist.md)| New Checklist object to replace the Checklist with |
 **id** | **int**| Id of the Checklist |

### Return type

[**\Phwebs\Wisenet\Model\ChecklistWrappedItem**](../Model/ChecklistWrappedItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

