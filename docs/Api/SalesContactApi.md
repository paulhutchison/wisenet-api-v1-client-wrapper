# Phwebs\Wisenet\SalesContactApi

All URIs are relative to *https://api.wisenet.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSalesContacts**](SalesContactApi.md#createsalescontacts) | **POST** /sales-contacts | Create SalesContacts
[**getSalesContact**](SalesContactApi.md#getsalescontact) | **GET** /sales-contacts/{id} | Get SalesContact by Id
[**getSalesContacts**](SalesContactApi.md#getsalescontacts) | **GET** /sales-contacts | Get SalesContacts
[**patchSalesContact**](SalesContactApi.md#patchsalescontact) | **PATCH** /sales-contacts/{id} | Patch SalesContact

# **createSalesContacts**
> \Phwebs\Wisenet\Model\SalesContactItem[] createSalesContacts($body)

Create SalesContacts

Add a Sales Contact record. Minimum required fields FirstName. Email must be unique.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\SalesContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\SalesContact()); // \Phwebs\Wisenet\Model\SalesContact[] | Sales Contact objects to add

try {
    $result = $apiInstance->createSalesContacts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesContactApi->createSalesContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\SalesContact[]**](../Model/SalesContact.md)| Sales Contact objects to add |

### Return type

[**\Phwebs\Wisenet\Model\SalesContactItem[]**](../Model/SalesContactItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesContact**
> \Phwebs\Wisenet\Model\SalesContactItem getSalesContact($id)

Get SalesContact by Id

Returns a single Sales Contact record for a given SalesContactId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\SalesContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the SalesContact

try {
    $result = $apiInstance->getSalesContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesContactApi->getSalesContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the SalesContact |

### Return type

[**\Phwebs\Wisenet\Model\SalesContactItem**](../Model/SalesContactItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesContacts**
> \Phwebs\Wisenet\Model\SalesContactItem[] getSalesContacts($contact_type_id_filter, $search, $relationship_entity_name_filter, $relationship_record_id_filter, $skip, $take, $sort, $order, $email_filter)

Get SalesContacts

Returns all Sales Contact records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\SalesContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_type_id_filter = "contact_type_id_filter_example"; // string | Filter by ContactTypeId
$search = "search_example"; // string | Search Sales Contacts by FirstName, LastName, Email, Company or Mobile
$relationship_entity_name_filter = "relationship_entity_name_filter_example"; // string | Search Sales Contacts that have a Relationship with EntityName eg. 'Learner'
$relationship_record_id_filter = 56; // int | Search Sales Contacts that have a Relationship with RecordId for given EntityName
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take
$sort = "sort_example"; // string | Field name to sort Sales Contacts by. Sales Contacts may only be sorted by LastModifiedTimeStamp
$order = "order_example"; // string | Order in which Sales Contacts are sorted.  Supported orders are asc and desc. Defalt sorting is by desc.
$email_filter = "email_filter_example"; // string | Search Sales Contacts by Email

try {
    $result = $apiInstance->getSalesContacts($contact_type_id_filter, $search, $relationship_entity_name_filter, $relationship_record_id_filter, $skip, $take, $sort, $order, $email_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesContactApi->getSalesContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_type_id_filter** | **string**| Filter by ContactTypeId | [optional]
 **search** | **string**| Search Sales Contacts by FirstName, LastName, Email, Company or Mobile | [optional]
 **relationship_entity_name_filter** | **string**| Search Sales Contacts that have a Relationship with EntityName eg. &#x27;Learner&#x27; | [optional]
 **relationship_record_id_filter** | **int**| Search Sales Contacts that have a Relationship with RecordId for given EntityName | [optional]
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]
 **sort** | **string**| Field name to sort Sales Contacts by. Sales Contacts may only be sorted by LastModifiedTimeStamp | [optional]
 **order** | **string**| Order in which Sales Contacts are sorted.  Supported orders are asc and desc. Defalt sorting is by desc. | [optional]
 **email_filter** | **string**| Search Sales Contacts by Email | [optional]

### Return type

[**\Phwebs\Wisenet\Model\SalesContactItem[]**](../Model/SalesContactItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSalesContact**
> \Phwebs\Wisenet\Model\SalesContactItem patchSalesContact($body, $id)

Patch SalesContact

Updates defined Sales Contact fields for a Sales Contact record for a given SalesContactId. Cannot PATCH SalesContactId or SalesContactRelationships.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Phwebs\Wisenet\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Phwebs\Wisenet\Api\SalesContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Phwebs\Wisenet\Model\PatchDocument()); // \Phwebs\Wisenet\Model\PatchDocument[] | JSON Patch Document operations to perform on sales contact
$id = 56; // int | Id of the SalesContact

try {
    $result = $apiInstance->patchSalesContact($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesContactApi->patchSalesContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Phwebs\Wisenet\Model\PatchDocument[]**](../Model/PatchDocument.md)| JSON Patch Document operations to perform on sales contact |
 **id** | **int**| Id of the SalesContact |

### Return type

[**\Phwebs\Wisenet\Model\SalesContactItem**](../Model/SalesContactItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

