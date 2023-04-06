# Phwebs\Wisenet\TagApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTags**](TagApi.md#createtags) | **POST** /tags | Add Tag records
[**getTag**](TagApi.md#gettag) | **GET** /tags/{id} | Get Tag by Id
[**getTags**](TagApi.md#gettags) | **GET** /tags | Returns all Tag records
[**replaceTag**](TagApi.md#replacetag) | **PUT** /tags/{id} | Replaces a Tag record for a given TagId

# **createTags**
> \Phwebs\Wisenet\Model\Tag[] createTags($body)

Add Tag records

Creates Tags with from the given Tag list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\Tag()); // \Phwebs\Wisenet\Model\Tag[] | Tag objects to add.

try {
    $result = $apiInstance->createTags($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->createTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\Tag[]**](../Model/Tag.md)| Tag objects to add. |

### Return type

[**\Phwebs\Wisenet\Model\Tag[]**](../Model/Tag.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTag**
> \Phwebs\Wisenet\Model\TagItem getTag($id)

Get Tag by Id

Returns a Tag for the given Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Tag

try {
    $result = $apiInstance->getTag($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Tag |

### Return type

[**\Phwebs\Wisenet\Model\TagItem**](../Model/TagItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTags**
> \Phwebs\Wisenet\Model\TagItem[] getTags($entity_name_filter, $search, $archived_flag_filter)

Returns all Tag records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_name_filter = "entity_name_filter_example"; // string | See entity Entities. Only 'CourseEnrolment' and 'Opportunity'
$search = "search_example"; // string | Name used to identify the Tag
$archived_flag_filter = true; // bool | To indicate if Tag is Archived

try {
    $result = $apiInstance->getTags($entity_name_filter, $search, $archived_flag_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_name_filter** | **string**| See entity Entities. Only &#x27;CourseEnrolment&#x27; and &#x27;Opportunity&#x27; | [optional]
 **search** | **string**| Name used to identify the Tag | [optional]
 **archived_flag_filter** | **bool**| To indicate if Tag is Archived | [optional]

### Return type

[**\Phwebs\Wisenet\Model\TagItem[]**](../Model/TagItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceTag**
> \Phwebs\Wisenet\Model\TagItem replaceTag($body, $id)

Replaces a Tag record for a given TagId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\Tag(); // \Phwebs\Wisenet\Model\Tag | New tag object to replace tag with
$id = 56; // int | Id of tag to replace

try {
    $result = $apiInstance->replaceTag($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->replaceTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\Tag**](../Model/Tag.md)| New tag object to replace tag with |
 **id** | **int**| Id of tag to replace |

### Return type

[**\Phwebs\Wisenet\Model\TagItem**](../Model/TagItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

