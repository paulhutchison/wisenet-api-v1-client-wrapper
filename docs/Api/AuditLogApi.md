# Phwebs\Wisenet\AuditLogApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuditLogs**](AuditLogApi.md#getauditlogs) | **GET** /audit-logs | Get AuditLogs

# **getAuditLogs**
> \Phwebs\Wisenet\Model\AuditLogItem[] getAuditLogs($last_modified_time_stamp_filter, $audit_action_filter, $entity_name_filter, $skip, $take)

Get AuditLogs

Returns all AuditLog records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\AuditLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$audit_action_filter = "audit_action_filter_example"; // string | Filter by audit action. Use I for insert, U for update and D for delete.
$entity_name_filter = "entity_name_filter_example"; // string | Filter by entity name. See entities Entity for list of values.
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getAuditLogs($last_modified_time_stamp_filter, $audit_action_filter, $entity_name_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogApi->getAuditLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **audit_action_filter** | **string**| Filter by audit action. Use I for insert, U for update and D for delete. | [optional]
 **entity_name_filter** | **string**| Filter by entity name. See entities Entity for list of values. | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\AuditLogItem[]**](../Model/AuditLogItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

