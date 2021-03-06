# OpenAPI\Client\AccountingContactApi

All URIs are relative to https://my.sevdesk.de/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccountingContact()**](AccountingContactApi.md#createAccountingContact) | **POST** /AccountingContact | Create a new accounting contact
[**deleteAccountingContact()**](AccountingContactApi.md#deleteAccountingContact) | **DELETE** /AccountingContact/{accountingContactId} | Deletes an accounting contact
[**getAccountingContact()**](AccountingContactApi.md#getAccountingContact) | **GET** /AccountingContact | Retrieve accounting contact
[**getAccountingContactById()**](AccountingContactApi.md#getAccountingContactById) | **GET** /AccountingContact/{accountingContactId} | Find accounting contact by ID
[**updateAccountingContact()**](AccountingContactApi.md#updateAccountingContact) | **PUT** /AccountingContact/{accountingContactId} | Update an existing accounting contact


## `createAccountingContact()`

```php
createAccountingContact($model_accounting_contact): \OpenAPI\Client\Model\InlineResponse2002
```

Create a new accounting contact

Creates a new accounting contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountingContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_accounting_contact = new \OpenAPI\Client\Model\ModelAccountingContact(); // \OpenAPI\Client\Model\ModelAccountingContact | Creation data

try {
    $result = $apiInstance->createAccountingContact($model_accounting_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingContactApi->createAccountingContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_accounting_contact** | [**\OpenAPI\Client\Model\ModelAccountingContact**](../Model/ModelAccountingContact.md)| Creation data | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountingContact()`

```php
deleteAccountingContact($accounting_contact_id): \OpenAPI\Client\Model\InlineResponse2004
```

Deletes an accounting contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountingContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_contact_id = 56; // int | Id of accounting contact resource to delete

try {
    $result = $apiInstance->deleteAccountingContact($accounting_contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingContactApi->deleteAccountingContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_contact_id** | **int**| Id of accounting contact resource to delete |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountingContact()`

```php
getAccountingContact($contact_id, $contact_object_name): \OpenAPI\Client\Model\InlineResponse2002
```

Retrieve accounting contact

Returns all accounting contact which have been added up until now. Filters can be added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountingContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | ID of contact for which you want the accounting contact.
$contact_object_name = 'Contact'; // string | Object name. Only needed if you also defined the ID of a contact.

try {
    $result = $apiInstance->getAccountingContact($contact_id, $contact_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingContactApi->getAccountingContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **string**| ID of contact for which you want the accounting contact. | [optional]
 **contact_object_name** | **string**| Object name. Only needed if you also defined the ID of a contact. | [optional] [default to &#39;Contact&#39;]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountingContactById()`

```php
getAccountingContactById($accounting_contact_id): \OpenAPI\Client\Model\InlineResponse2002
```

Find accounting contact by ID

Returns a single accounting contac

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountingContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_contact_id = 56; // int | ID of accounting contact to return

try {
    $result = $apiInstance->getAccountingContactById($accounting_contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingContactApi->getAccountingContactById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_contact_id** | **int**| ID of accounting contact to return |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountingContact()`

```php
updateAccountingContact($accounting_contact_id, $model_accounting_contact_update): \OpenAPI\Client\Model\InlineResponse2002
```

Update an existing accounting contact

Update an accounting contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountingContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_contact_id = 56; // int | ID of accounting contact to update
$model_accounting_contact_update = new \OpenAPI\Client\Model\ModelAccountingContactUpdate(); // \OpenAPI\Client\Model\ModelAccountingContactUpdate | Update data

try {
    $result = $apiInstance->updateAccountingContact($accounting_contact_id, $model_accounting_contact_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingContactApi->updateAccountingContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_contact_id** | **int**| ID of accounting contact to update |
 **model_accounting_contact_update** | [**\OpenAPI\Client\Model\ModelAccountingContactUpdate**](../Model/ModelAccountingContactUpdate.md)| Update data | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
