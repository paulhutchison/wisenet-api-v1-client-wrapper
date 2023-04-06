# Phwebs\Wisenet\DocumentFileApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocumentFile**](DocumentFileApi.md#createdocumentfile) | **POST** /document-file/ | Create a File
[**getDocumentFile**](DocumentFileApi.md#getdocumentfile) | **GET** /document-file/{id} | Get a URL for Downloading a File

# **createDocumentFile**
> \Phwebs\Wisenet\Model\DocumentFileUploadResponse createDocumentFile($body)

Create a File

Get a URL for uploading files. See Documents and Files section above.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\DocumentFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\DocumentFileUploadRequest(); // \Phwebs\Wisenet\Model\DocumentFileUploadRequest | File upload information

try {
    $result = $apiInstance->createDocumentFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentFileApi->createDocumentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\DocumentFileUploadRequest**](../Model/DocumentFileUploadRequest.md)| File upload information |

### Return type

[**\Phwebs\Wisenet\Model\DocumentFileUploadResponse**](../Model/DocumentFileUploadResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentFile**
> \Phwebs\Wisenet\Model\DocumentFile getDocumentFile($id)

Get a URL for Downloading a File

Returns response containing a URL to download the file for the given documentId. See Documents and Files section above.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\DocumentFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the Document

try {
    $result = $apiInstance->getDocumentFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentFileApi->getDocumentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the Document |

### Return type

[**\Phwebs\Wisenet\Model\DocumentFile**](../Model/DocumentFile.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

