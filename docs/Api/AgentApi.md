# Phwebs\Wisenet\AgentApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAgents**](AgentApi.md#createagents) | **POST** /agents | Post Agents
[**getAgent**](AgentApi.md#getagent) | **GET** /agents/{id} | Get Agent by Id
[**getAgents**](AgentApi.md#getagents) | **GET** /agents | Get Agents
[**replaceAgent**](AgentApi.md#replaceagent) | **PUT** /agents/{id} | Put Agent by Id

# **createAgents**
> \Phwebs\Wisenet\Model\AgentItem[] createAgents($body)

Post Agents

Create Agents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\AgentRequest()); // \Phwebs\Wisenet\Model\AgentRequest[] | Agent objects to add

try {
    $result = $apiInstance->createAgents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->createAgents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\AgentRequest[]**](../Model/AgentRequest.md)| Agent objects to add |

### Return type

[**\Phwebs\Wisenet\Model\AgentItem[]**](../Model/AgentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgent**
> \Phwebs\Wisenet\Model\AgentItem getAgent($id)

Get Agent by Id

Returns an Agent for the given Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Agent

try {
    $result = $apiInstance->getAgent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Agent |

### Return type

[**\Phwebs\Wisenet\Model\AgentItem**](../Model/AgentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgents**
> \Phwebs\Wisenet\Model\AgentItem[] getAgents($last_modified_time_stamp_filter, $search, $agent_status_id_filter, $skip, $take, $sort, $order, $archived_flag_filter)

Get Agents

Returns all Agent records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$search = "search_example"; // string | This does a string search on Name and Code
$agent_status_id_filter = "agent_status_id_filter_example"; // string | Filter by AgentStatusId
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$sort = "sort_example"; // string | Field name to sort agents by.  Supported fields are Name and AgentId. Default sorting is by AgentId.
$order = "order_example"; // string | Order in which agents are sorted.  Supported orders are asc and desc. Default sorting is by asc.
$archived_flag_filter = true; // bool | Filter by ArchivedFlag

try {
    $result = $apiInstance->getAgents($last_modified_time_stamp_filter, $search, $agent_status_id_filter, $skip, $take, $sort, $order, $archived_flag_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getAgents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **search** | **string**| This does a string search on Name and Code | [optional]
 **agent_status_id_filter** | **string**| Filter by AgentStatusId | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **sort** | **string**| Field name to sort agents by.  Supported fields are Name and AgentId. Default sorting is by AgentId. | [optional]
 **order** | **string**| Order in which agents are sorted.  Supported orders are asc and desc. Default sorting is by asc. | [optional]
 **archived_flag_filter** | **bool**| Filter by ArchivedFlag | [optional]

### Return type

[**\Phwebs\Wisenet\Model\AgentItem[]**](../Model/AgentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAgent**
> \Phwebs\Wisenet\Model\AgentItem replaceAgent($body, $id)

Put Agent by Id

Successfully updated, returns the updated Agent

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\AgentRequest(); // \Phwebs\Wisenet\Model\AgentRequest | New Agent object update with
$id = 56; // int | Id of the Agent

try {
    $result = $apiInstance->replaceAgent($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->replaceAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\AgentRequest**](../Model/AgentRequest.md)| New Agent object update with |
 **id** | **int**| Id of the Agent |

### Return type

[**\Phwebs\Wisenet\Model\AgentItem**](../Model/AgentItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

