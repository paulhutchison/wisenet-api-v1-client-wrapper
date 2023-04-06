# Phwebs\Wisenet\ChecklistItemApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChecklistItems**](ChecklistItemApi.md#getchecklistitems) | **GET** /checklist-items | Get ChecklistItems

# **getChecklistItems**
> \Phwebs\Wisenet\Model\ChecklistItemItem[] getChecklistItems($entity_name_filter, $type_filter, $description_filter, $is_active_filter, $last_modified_time_stamp_filter, $skip, $take)

Get ChecklistItems

Returns all Checklist Item records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\ChecklistItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_name_filter = "entity_name_filter_example"; // string | Filter by EntityName
$type_filter = "type_filter_example"; // string | Filter by Type
$description_filter = "description_filter_example"; // string | Filter by Description
$is_active_filter = true; // bool | Filter by IsActive
$last_modified_time_stamp_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by LastModifiedTimeStamp
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getChecklistItems($entity_name_filter, $type_filter, $description_filter, $is_active_filter, $last_modified_time_stamp_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistItemApi->getChecklistItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_name_filter** | **string**| Filter by EntityName | [optional]
 **type_filter** | **string**| Filter by Type | [optional]
 **description_filter** | **string**| Filter by Description | [optional]
 **is_active_filter** | **bool**| Filter by IsActive | [optional]
 **last_modified_time_stamp_filter** | **\DateTime**| Filter by LastModifiedTimeStamp | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\ChecklistItemItem[]**](../Model/ChecklistItemItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

