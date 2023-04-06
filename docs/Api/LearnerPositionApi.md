# Phwebs\Wisenet\LearnerPositionApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLearnerPositions**](LearnerPositionApi.md#createlearnerpositions) | **POST** /learner-positions | Create Learner Positions
[**deleteLearnerPosition**](LearnerPositionApi.md#deletelearnerposition) | **DELETE** /learner-positions/{id} | Delete a Learner Position
[**getLearnerPosition**](LearnerPositionApi.md#getlearnerposition) | **GET** /learner-positions/{id} | Get Learner Position by Id
[**getLearnerPositions**](LearnerPositionApi.md#getlearnerpositions) | **GET** /learner-positions | Get Learner Positions
[**replaceLearnerPosition**](LearnerPositionApi.md#replacelearnerposition) | **PUT** /learner-positions/{id} | Replace a Learner Position

# **createLearnerPositions**
> \Phwebs\Wisenet\Model\LearnerPositionItem[] createLearnerPositions($body)

Create Learner Positions

Add a Learner Position record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\LearnerPosition()); // \Phwebs\Wisenet\Model\LearnerPosition[] | Learner Position objects to add

try {
    $result = $apiInstance->createLearnerPositions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerPositionApi->createLearnerPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerPosition[]**](../Model/LearnerPosition.md)| Learner Position objects to add |

### Return type

[**\Phwebs\Wisenet\Model\LearnerPositionItem[]**](../Model/LearnerPositionItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLearnerPosition**
> deleteLearnerPosition($id)

Delete a Learner Position

Deletes a Learner Position for the given LearnerPositionId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Learner Position

try {
    $apiInstance->deleteLearnerPosition($id);
} catch (Exception $e) {
    echo 'Exception when calling LearnerPositionApi->deleteLearnerPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Learner Position |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerPosition**
> \Phwebs\Wisenet\Model\LearnerPositionItem getLearnerPosition($id)

Get Learner Position by Id

Returns a single Learner Position record for a given LearnerPositionId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Learner Position

try {
    $result = $apiInstance->getLearnerPosition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerPositionApi->getLearnerPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Learner Position |

### Return type

[**\Phwebs\Wisenet\Model\LearnerPositionItem**](../Model/LearnerPositionItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerPositions**
> \Phwebs\Wisenet\Model\LearnerPositionItem[] getLearnerPositions($last_modified_time_stamp_filter, $learner_id_filter, $workplace_id_filter, $skip, $take)

Get Learner Positions

Returns all Learner Position records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_modified_time_stamp_filter = "last_modified_time_stamp_filter_example"; // string | Filter by LastModifiedTimeStamp (allows additional filter operators as per above)
$learner_id_filter = "learner_id_filter_example"; // string | Filter by LearnerId.
$workplace_id_filter = "workplace_id_filter_example"; // string | Filter by WorkplaceId.
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->getLearnerPositions($last_modified_time_stamp_filter, $learner_id_filter, $workplace_id_filter, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerPositionApi->getLearnerPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified_time_stamp_filter** | **string**| Filter by LastModifiedTimeStamp (allows additional filter operators as per above) | [optional]
 **learner_id_filter** | **string**| Filter by LearnerId. | [optional]
 **workplace_id_filter** | **string**| Filter by WorkplaceId. | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\Phwebs\Wisenet\Model\LearnerPositionItem[]**](../Model/LearnerPositionItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLearnerPosition**
> \Phwebs\Wisenet\Model\LearnerPositionItem replaceLearnerPosition($body, $id)

Replace a Learner Position

Replaces a Learner Position for the given LearnerPositionId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\LearnerPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\LearnerPosition(); // \Phwebs\Wisenet\Model\LearnerPosition | The source.
$id = 56; // int | Id of the Learner Position

try {
    $result = $apiInstance->replaceLearnerPosition($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearnerPositionApi->replaceLearnerPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\LearnerPosition**](../Model/LearnerPosition.md)| The source. |
 **id** | **int**| Id of the Learner Position |

### Return type

[**\Phwebs\Wisenet\Model\LearnerPositionItem**](../Model/LearnerPositionItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

