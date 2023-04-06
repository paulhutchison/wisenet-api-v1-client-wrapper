# Phwebs\Wisenet\SalesPersonApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSalesPersons**](SalesPersonApi.md#getsalespersons) | **GET** /sales-persons | Get SalesPersons

# **getSalesPersons**
> \Phwebs\Wisenet\Model\SalesPersonItem[] getSalesPersons($sales_person_id_filter, $is_active_filter, $skip, $take, $first_name_filter, $last_name_filter)

Get SalesPersons

Returns all Sales Person records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\SalesPersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_person_id_filter = "sales_person_id_filter_example"; // string | Filter by SalesPersonId
$is_active_filter = "is_active_filter_example"; // string | Filter by IsActive
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$first_name_filter = "first_name_filter_example"; // string | Search Sales Persons by FirstName
$last_name_filter = "last_name_filter_example"; // string | Search Sales Persons by LastName

try {
    $result = $apiInstance->getSalesPersons($sales_person_id_filter, $is_active_filter, $skip, $take, $first_name_filter, $last_name_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPersonApi->getSalesPersons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_person_id_filter** | **string**| Filter by SalesPersonId | [optional]
 **is_active_filter** | **string**| Filter by IsActive | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **first_name_filter** | **string**| Search Sales Persons by FirstName | [optional]
 **last_name_filter** | **string**| Search Sales Persons by LastName | [optional]

### Return type

[**\Phwebs\Wisenet\Model\SalesPersonItem[]**](../Model/SalesPersonItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

