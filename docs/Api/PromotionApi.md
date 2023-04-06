# Phwebs\Wisenet\PromotionApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPromotions**](PromotionApi.md#createpromotions) | **POST** /promotions | Post Promotions
[**getPromotion**](PromotionApi.md#getpromotion) | **GET** /promotions/{id} | Get Promotion by Id
[**getPromotions**](PromotionApi.md#getpromotions) | **GET** /promotions | Get Promotions
[**replacePromotion**](PromotionApi.md#replacepromotion) | **PUT** /promotions/{id} | Put Promotion by Id

# **createPromotions**
> \Phwebs\Wisenet\Model\PromotionItem[] createPromotions($body)

Post Promotions

Create Promotions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\Promotion()); // \Phwebs\Wisenet\Model\Promotion[] | Promotion objects to add

try {
    $result = $apiInstance->createPromotions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->createPromotions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\Promotion[]**](../Model/Promotion.md)| Promotion objects to add |

### Return type

[**\Phwebs\Wisenet\Model\PromotionItem[]**](../Model/PromotionItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromotion**
> \Phwebs\Wisenet\Model\PromotionItem getPromotion($id)

Get Promotion by Id

Returns an Promotion for the given Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Promotion

try {
    $result = $apiInstance->getPromotion($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->getPromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Promotion |

### Return type

[**\Phwebs\Wisenet\Model\PromotionItem**](../Model/PromotionItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromotions**
> \Phwebs\Wisenet\Model\PromotionItem[] getPromotions($skip, $take, $sort, $order, $last_modified_time_stamp_filter)

Get Promotions

Returns all Promotion records. Used in Agent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$sort = "sort_example"; // string | Field name to sort promotions by.  Supported fields are LastModifiedTimeStamp and PromotionId. Default sorting is by LastModifiedTimeStamp.
$order = "order_example"; // string | Order in which promotions are sorted.  Supported orders are asc and desc. Default sorting is by asc.
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)

try {
    $result = $apiInstance->getPromotions($skip, $take, $sort, $order, $last_modified_time_stamp_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->getPromotions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **sort** | **string**| Field name to sort promotions by.  Supported fields are LastModifiedTimeStamp and PromotionId. Default sorting is by LastModifiedTimeStamp. | [optional]
 **order** | **string**| Order in which promotions are sorted.  Supported orders are asc and desc. Default sorting is by asc. | [optional]
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]

### Return type

[**\Phwebs\Wisenet\Model\PromotionItem[]**](../Model/PromotionItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replacePromotion**
> \Phwebs\Wisenet\Model\PromotionItem replacePromotion($body, $id)

Put Promotion by Id

Successfully updated, returns the updated Promotion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\Promotion(); // \Phwebs\Wisenet\Model\Promotion | New Promotion object update with
$id = 56; // int | Id of the Promotion

try {
    $result = $apiInstance->replacePromotion($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->replacePromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\Promotion**](../Model/Promotion.md)| New Promotion object update with |
 **id** | **int**| Id of the Promotion |

### Return type

[**\Phwebs\Wisenet\Model\PromotionItem**](../Model/PromotionItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

