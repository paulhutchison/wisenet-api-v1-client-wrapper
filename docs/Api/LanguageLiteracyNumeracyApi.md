# Phwebs\Wisenet\LanguageLiteracyNumeracyApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLanguageLiteracyNumeracies**](LanguageLiteracyNumeracyApi.md#createlanguageliteracynumeracies) | **POST** /language-literacy-numeracy | Create LanguageLiteracyNumeracies
[**getLanguageLiteracyNumeracies**](LanguageLiteracyNumeracyApi.md#getlanguageliteracynumeracies) | **GET** /language-literacy-numeracy | Get LanguageLiteracyNumeracies
[**replaceLanguageLiteracyNumeracy**](LanguageLiteracyNumeracyApi.md#replacelanguageliteracynumeracy) | **PUT** /language-literacy-numeracy/{id} | Replace LanguageLiteracyNumeracy

# **createLanguageLiteracyNumeracies**
> \Phwebs\Wisenet\Model\LanguageLiteracyNumeracyItem[] createLanguageLiteracyNumeracies($body)

Create LanguageLiteracyNumeracies

Creates LanguageLiteracyNumeracy records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LanguageLiteracyNumeracyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\LanguageLiteracyNumeracy()); // \Phwebs\Wisenet\Model\LanguageLiteracyNumeracy[] | LanguageLiteracyNumeracies objects to add

try {
    $result = $apiInstance->createLanguageLiteracyNumeracies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguageLiteracyNumeracyApi->createLanguageLiteracyNumeracies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LanguageLiteracyNumeracy[]**](../Model/LanguageLiteracyNumeracy.md)| LanguageLiteracyNumeracies objects to add |

### Return type

[**\Phwebs\Wisenet\Model\LanguageLiteracyNumeracyItem[]**](../Model/LanguageLiteracyNumeracyItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLanguageLiteracyNumeracies**
> \Phwebs\Wisenet\Model\LanguageLiteracyNumeracyItem[] getLanguageLiteracyNumeracies($course_enrolment_id_filter, $last_modified_time_stamp_filter, $skip, $take)

Get LanguageLiteracyNumeracies

Returns all LanguageLiteracyNumeracy records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LanguageLiteracyNumeracyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_enrolment_id_filter = 56; // int | Filter by CourseEnrolmentId
$last_modified_time_stamp_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by LastModifiedTimeStamp
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getLanguageLiteracyNumeracies($course_enrolment_id_filter, $last_modified_time_stamp_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguageLiteracyNumeracyApi->getLanguageLiteracyNumeracies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_enrolment_id_filter** | **int**| Filter by CourseEnrolmentId | [optional]
 **last_modified_time_stamp_filter** | **\DateTime**| Filter by LastModifiedTimeStamp | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\LanguageLiteracyNumeracyItem[]**](../Model/LanguageLiteracyNumeracyItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLanguageLiteracyNumeracy**
> \Phwebs\Wisenet\Model\LanguageLiteracyNumeracyItem replaceLanguageLiteracyNumeracy($body, $id)

Replace LanguageLiteracyNumeracy

Replaces a LanguageLiteracyNumeracy for the given LanguageLiteracyNumeracyId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LanguageLiteracyNumeracyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\LanguageLiteracyNumeracy(); // \Phwebs\Wisenet\Model\LanguageLiteracyNumeracy | New object to replace LanguageLiteracyNumeracy with
$id = 56; // int | Id of the LanguageLiteracyNumeracy

try {
    $result = $apiInstance->replaceLanguageLiteracyNumeracy($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguageLiteracyNumeracyApi->replaceLanguageLiteracyNumeracy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LanguageLiteracyNumeracy**](../Model/LanguageLiteracyNumeracy.md)| New object to replace LanguageLiteracyNumeracy with |
 **id** | **int**| Id of the LanguageLiteracyNumeracy |

### Return type

[**\Phwebs\Wisenet\Model\LanguageLiteracyNumeracyItem**](../Model/LanguageLiteracyNumeracyItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

