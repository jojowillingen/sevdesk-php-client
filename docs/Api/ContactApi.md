# OpenAPI\Client\ContactApi

All URIs are relative to https://my.sevdesk.de/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactCustomerNumberAvailabilityCheck()**](ContactApi.md#contactCustomerNumberAvailabilityCheck) | **GET** /Contact/Mapper/checkCustomerNumberAvailability | Check if a customer number is available
[**createContact()**](ContactApi.md#createContact) | **POST** /Contact | Create a new contact
[**deleteContact()**](ContactApi.md#deleteContact) | **DELETE** /Contact/{contactId} | Deletes a contact
[**getContactById()**](ContactApi.md#getContactById) | **GET** /Contact/{contactId} | Find contact by ID
[**getContactTabsItemCountById()**](ContactApi.md#getContactTabsItemCountById) | **GET** /Contact/{contactId}/getTabsItemCount | Get number of all items
[**getContacts()**](ContactApi.md#getContacts) | **GET** /Contact | Retrieve contacts
[**getNextCustomerNumber()**](ContactApi.md#getNextCustomerNumber) | **GET** /Contact/Factory/getNextCustomerNumber | Get next free customer number
[**updateContact()**](ContactApi.md#updateContact) | **PUT** /Contact/{contactId} | Update a existing contact


## `contactCustomerNumberAvailabilityCheck()`

```php
contactCustomerNumberAvailabilityCheck($customer_number): \OpenAPI\Client\Model\InlineResponse20013
```

Check if a customer number is available

Checks if a given customer number is available or already used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_number = 'customer_number_example'; // string | The customer number to be checked.

try {
    $result = $apiInstance->contactCustomerNumberAvailabilityCheck($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactCustomerNumberAvailabilityCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| The customer number to be checked. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContact()`

```php
createContact($model_contact): \OpenAPI\Client\Model\InlineResponse20037
```

Create a new contact

Creates a new contact.<br>       For adding addresses and communication ways, you will need to use the ContactAddress and CommunicationWay endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_contact = new \OpenAPI\Client\Model\ModelContact(); // \OpenAPI\Client\Model\ModelContact | Creation data

try {
    $result = $apiInstance->createContact($model_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_contact** | [**\OpenAPI\Client\Model\ModelContact**](../Model/ModelContact.md)| Creation data | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($contact_id): \OpenAPI\Client\Model\InlineResponse2004
```

Deletes a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | Id of contact resource to delete

try {
    $result = $apiInstance->deleteContact($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| Id of contact resource to delete |

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

## `getContactById()`

```php
getContactById($contact_id): \OpenAPI\Client\Model\InlineResponse20037
```

Find contact by ID

Returns a single contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | ID of contact to return

try {
    $result = $apiInstance->getContactById($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| ID of contact to return |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactTabsItemCountById()`

```php
getContactTabsItemCountById($contact_id): \OpenAPI\Client\Model\InlineResponse20028
```

Get number of all items

Get number of all invoices, orders, etc. of a specified contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | ID of contact to return

try {
    $result = $apiInstance->getContactTabsItemCountById($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactTabsItemCountById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| ID of contact to return |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContacts()`

```php
getContacts($depth, $customer_number): \OpenAPI\Client\Model\InlineResponse20037
```

Retrieve contacts

There are a multitude of parameter which can be used to filter.<br>       A few of them are attached but       for a complete list please check out <a href='https://api.sevdesk.de/#section/How-to-filter-for-certain-contacts'>this</a> list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$depth = 'depth_example'; // string | Defines if both organizations <b>and</b> persons should be returned.<br>       '0' -> only organizations, '1' -> organizations and persons
$customer_number = 'customer_number_example'; // string | Retrieve all contacts with this customer number

try {
    $result = $apiInstance->getContacts($depth, $customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **depth** | **string**| Defines if both organizations &lt;b&gt;and&lt;/b&gt; persons should be returned.&lt;br&gt;       &#39;0&#39; -&gt; only organizations, &#39;1&#39; -&gt; organizations and persons | [optional]
 **customer_number** | **string**| Retrieve all contacts with this customer number | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNextCustomerNumber()`

```php
getNextCustomerNumber(): \OpenAPI\Client\Model\InlineResponse20063
```

Get next free customer number

Retrieves the next available customer number. Avoids duplicates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNextCustomerNumber();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getNextCustomerNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($contact_id, $model_contact_update): \OpenAPI\Client\Model\InlineResponse20037
```

Update a existing contact

Update a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | ID of contact to update
$model_contact_update = new \OpenAPI\Client\Model\ModelContactUpdate(); // \OpenAPI\Client\Model\ModelContactUpdate | Update data

try {
    $result = $apiInstance->updateContact($contact_id, $model_contact_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| ID of contact to update |
 **model_contact_update** | [**\OpenAPI\Client\Model\ModelContactUpdate**](../Model/ModelContactUpdate.md)| Update data | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
