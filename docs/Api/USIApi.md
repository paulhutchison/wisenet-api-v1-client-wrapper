# Phwebs\Wisenet\USIApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**verifyUsi**](USIApi.md#verifyusi) | **POST** /usi/verify-usi | Verify USI

# **verifyUsi**
> \Phwebs\Wisenet\Model\USIValidationResponse verifyUsi($body)

Verify USI

Verify USI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\USIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Phwebs\Wisenet\Model\USIValidation(); // \Phwebs\Wisenet\Model\USIValidation | The USI to be verified.

try {
    $result = $apiInstance->verifyUsi($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USIApi->verifyUsi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\USIValidation**](../Model/USIValidation.md)| The USI to be verified. |

### Return type

[**\Phwebs\Wisenet\Model\USIValidationResponse**](../Model/USIValidationResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

