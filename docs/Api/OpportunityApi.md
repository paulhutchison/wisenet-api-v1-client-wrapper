# Phwebs\Wisenet\OpportunityApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOpportunities**](OpportunityApi.md#createopportunities) | **POST** /opportunities | Create Opportunities
[**getOpportunities**](OpportunityApi.md#getopportunities) | **GET** /opportunities | Get Opportunities
[**getOpportunity**](OpportunityApi.md#getopportunity) | **GET** /opportunities/{id} | Get Opportunity by Id
[**patchOpportunity**](OpportunityApi.md#patchopportunity) | **PATCH** /opportunities/{id} | Patch Opportunity

# **createOpportunities**
> \Phwebs\Wisenet\Model\OpportunityItem[] createOpportunities($body)

Create Opportunities

Add an Opportunity record. Minimum required fields SalesContactId, Description, OpportunityStageId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\Opportunity()); // \Phwebs\Wisenet\Model\Opportunity[] | Opportunity objects to add

try {
    $result = $apiInstance->createOpportunities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->createOpportunities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\Opportunity[]**](../Model/Opportunity.md)| Opportunity objects to add |

### Return type

[**\Phwebs\Wisenet\Model\OpportunityItem[]**](../Model/OpportunityItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunities**
> \Phwebs\Wisenet\Model\OpportunityItem[] getOpportunities($sales_contact_id_filter, $search, $close_date_filter, $opportunity_stage_id_filter, $owner_id_filter, $paging_group, $skip, $take, $sort, $order, $last_modified_time_stamp_filter, $opportunity_stage_win_probability_id_filter, $created_on_filter, $pipeline_id_filter, $tag_id_filter, $amount_filter, $previous_identifier_filter, $opportunity_source_id_filter, $opportunity_type_id_filter, $close_lost_reason_id_filter)

Get Opportunities

Returns all Opportunity records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_contact_id_filter = "sales_contact_id_filter_example"; // string | Filter by SalesContactId
$search = "search_example"; // string | Search Opportunity by Description
$close_date_filter = "close_date_filter_example"; // string | Filter by CloseDate (allows additional filter operators as per above)
$opportunity_stage_id_filter = "opportunity_stage_id_filter_example"; // string | Filter by OpportunityStageId
$owner_id_filter = "owner_id_filter_example"; // string | Filter by OwnerId
$paging_group = "paging_group_example"; // string | Group results by this field. Valid values(s) are 'OpportunityStageId'. Using this parameter means paging will be per pagingGroup. E.g. Take 30 records per OpportunityStageId
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$sort = "sort_example"; // string | Field name to sort opportunities by.  Supported fields are CloseDate, Amount and LastModifiedTimeStamp. Default sorting is by LastModifiedTimeStamp.
$order = "order_example"; // string | Order in which opportunities are sorted.  Supported orders are asc and desc. Default sorting is by asc.
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$opportunity_stage_win_probability_id_filter = "opportunity_stage_win_probability_id_filter_example"; // string | Filter by OpportunityStageWinProbabilityId
$created_on_filter = "created_on_filter_example"; // string | Filter by CreatedOn
$pipeline_id_filter = "pipeline_id_filter_example"; // string | Filter by PipelineId
$tag_id_filter = "tag_id_filter_example"; // string | Filter by tag ids
$amount_filter = "amount_filter_example"; // string | Filter by Amount
$previous_identifier_filter = "previous_identifier_filter_example"; // string | Filter by PreviousIdentifier
$opportunity_source_id_filter = "opportunity_source_id_filter_example"; // string | Filter by OpportunitySourceId
$opportunity_type_id_filter = "opportunity_type_id_filter_example"; // string | Filter by OpportunityTypeId
$close_lost_reason_id_filter = "close_lost_reason_id_filter_example"; // string | Filter by CloseLostReasonId

try {
    $result = $apiInstance->getOpportunities($sales_contact_id_filter, $search, $close_date_filter, $opportunity_stage_id_filter, $owner_id_filter, $paging_group, $skip, $take, $sort, $order, $last_modified_time_stamp_filter, $opportunity_stage_win_probability_id_filter, $created_on_filter, $pipeline_id_filter, $tag_id_filter, $amount_filter, $previous_identifier_filter, $opportunity_source_id_filter, $opportunity_type_id_filter, $close_lost_reason_id_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->getOpportunities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_contact_id_filter** | **string**| Filter by SalesContactId | [optional]
 **search** | **string**| Search Opportunity by Description | [optional]
 **close_date_filter** | **string**| Filter by CloseDate (allows additional filter operators as per above) | [optional]
 **opportunity_stage_id_filter** | **string**| Filter by OpportunityStageId | [optional]
 **owner_id_filter** | **string**| Filter by OwnerId | [optional]
 **paging_group** | **string**| Group results by this field. Valid values(s) are &#x27;OpportunityStageId&#x27;. Using this parameter means paging will be per pagingGroup. E.g. Take 30 records per OpportunityStageId | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **sort** | **string**| Field name to sort opportunities by.  Supported fields are CloseDate, Amount and LastModifiedTimeStamp. Default sorting is by LastModifiedTimeStamp. | [optional]
 **order** | **string**| Order in which opportunities are sorted.  Supported orders are asc and desc. Default sorting is by asc. | [optional]
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **opportunity_stage_win_probability_id_filter** | **string**| Filter by OpportunityStageWinProbabilityId | [optional]
 **created_on_filter** | **string**| Filter by CreatedOn | [optional]
 **pipeline_id_filter** | **string**| Filter by PipelineId | [optional]
 **tag_id_filter** | **string**| Filter by tag ids | [optional]
 **amount_filter** | **string**| Filter by Amount | [optional]
 **previous_identifier_filter** | **string**| Filter by PreviousIdentifier | [optional]
 **opportunity_source_id_filter** | **string**| Filter by OpportunitySourceId | [optional]
 **opportunity_type_id_filter** | **string**| Filter by OpportunityTypeId | [optional]
 **close_lost_reason_id_filter** | **string**| Filter by CloseLostReasonId | [optional]

### Return type

[**\Phwebs\Wisenet\Model\OpportunityItem[]**](../Model/OpportunityItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunity**
> \Phwebs\Wisenet\Model\OpportunityItem getOpportunity($id)

Get Opportunity by Id

Returns a single Opportunity record for a given OpportunityId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Opportunity

try {
    $result = $apiInstance->getOpportunity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->getOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Opportunity |

### Return type

[**\Phwebs\Wisenet\Model\OpportunityItem**](../Model/OpportunityItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchOpportunity**
> \Phwebs\Wisenet\Model\OpportunityItem patchOpportunity($body, $id)

Patch Opportunity

Updates defined Opportunity fields for an Opportunity record for a given OpportunityId. Cannot PATCH OpportunityId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\PatchDocument()); // \Phwebs\Wisenet\Model\PatchDocument[] | JSON Patch Document operations to perform on opportunity
$id = 56; // int | Id of the Opportunity

try {
    $result = $apiInstance->patchOpportunity($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->patchOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\PatchDocument[]**](../Model/PatchDocument.md)| JSON Patch Document operations to perform on opportunity |
 **id** | **int**| Id of the Opportunity |

### Return type

[**\Phwebs\Wisenet\Model\OpportunityItem**](../Model/OpportunityItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

