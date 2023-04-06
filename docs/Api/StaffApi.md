# Phwebs\Wisenet\StaffApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStaff**](StaffApi.md#getstaff) | **GET** /staff | Get Staff

# **getStaff**
> \Phwebs\Wisenet\Model\StaffItem[] getStaff($search, $last_modified_time_stamp_filter, $archived_flag_filter, $trainer_id_filter, $assessor_id_filter, $coordinator_id_filter, $sales_person_id_filter, $skip, $take)

Get Staff

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | This does a string search on the FirstName and LastName
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$archived_flag_filter = "archived_flag_filter_example"; // string | Filter by ArchivedFlag
$trainer_id_filter = "trainer_id_filter_example"; // string | Filter by TrainerId
$assessor_id_filter = "assessor_id_filter_example"; // string | Filter by AssessorId
$coordinator_id_filter = "coordinator_id_filter_example"; // string | Filter by CoordinatorId
$sales_person_id_filter = "sales_person_id_filter_example"; // string | Filter by SalesPersonId
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getStaff($search, $last_modified_time_stamp_filter, $archived_flag_filter, $trainer_id_filter, $assessor_id_filter, $coordinator_id_filter, $sales_person_id_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->getStaff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| This does a string search on the FirstName and LastName | [optional]
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **archived_flag_filter** | **string**| Filter by ArchivedFlag | [optional]
 **trainer_id_filter** | **string**| Filter by TrainerId | [optional]
 **assessor_id_filter** | **string**| Filter by AssessorId | [optional]
 **coordinator_id_filter** | **string**| Filter by CoordinatorId | [optional]
 **sales_person_id_filter** | **string**| Filter by SalesPersonId | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\StaffItem[]**](../Model/StaffItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

