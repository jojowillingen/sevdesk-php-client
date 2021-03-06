# OpenAPI\Client\ContactFieldApi

All URIs are relative to https://my.sevdesk.de/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContactField()**](ContactFieldApi.md#createContactField) | **POST** /ContactCustomField | Create contact field
[**createContactFieldSetting()**](ContactFieldApi.md#createContactFieldSetting) | **POST** /ContactCustomFieldSetting | Create contact field setting
[**deleteContactCustomFieldId()**](ContactFieldApi.md#deleteContactCustomFieldId) | **DELETE** /ContactCustomField/{contactCustomFieldId} | delete a contact field
[**deleteContactFieldSetting()**](ContactFieldApi.md#deleteContactFieldSetting) | **DELETE** /ContactCustomFieldSetting/{contactCustomFieldSettingId} | Deletes a contact field setting
[**getContactFieldSettingById()**](ContactFieldApi.md#getContactFieldSettingById) | **GET** /ContactCustomFieldSetting/{contactCustomFieldSettingId} | Find contact field setting by ID
[**getContactFieldSettings()**](ContactFieldApi.md#getContactFieldSettings) | **GET** /ContactCustomFieldSetting | Retrieve contact field settings
[**getContactFields()**](ContactFieldApi.md#getContactFields) | **GET** /ContactCustomField | Retrieve contact fields
[**getContactFieldsById()**](ContactFieldApi.md#getContactFieldsById) | **GET** /ContactCustomField/{contactCustomFieldId} | Retrieve contact fields
[**getPlaceholder()**](ContactFieldApi.md#getPlaceholder) | **GET** /Textparser/fetchDictionaryEntriesByType | Retrieve Placeholders
[**getReferenceCount()**](ContactFieldApi.md#getReferenceCount) | **GET** /ContactCustomFieldSetting/{contactCustomFieldSettingId}/getReferenceCount | Receive count reference
[**updateContactFieldSetting()**](ContactFieldApi.md#updateContactFieldSetting) | **PUT** /ContactCustomFieldSetting/{contactCustomFieldSettingId} | Update contact field setting
[**updateContactfield()**](ContactFieldApi.md#updateContactfield) | **PUT** /ContactCustomField/{contactCustomFieldId} | Update a contact field


## `createContactField()`

```php
createContactField($model_contact_custom_field): object
```

Create contact field

Create contact field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_contact_custom_field = new \OpenAPI\Client\Model\ModelContactCustomField(); // \OpenAPI\Client\Model\ModelContactCustomField

try {
    $result = $apiInstance->createContactField($model_contact_custom_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->createContactField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_contact_custom_field** | [**\OpenAPI\Client\Model\ModelContactCustomField**](../Model/ModelContactCustomField.md)|  | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContactFieldSetting()`

```php
createContactFieldSetting($model_contact_custom_field_setting): object
```

Create contact field setting

Create contact field setting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_contact_custom_field_setting = new \OpenAPI\Client\Model\ModelContactCustomFieldSetting(); // \OpenAPI\Client\Model\ModelContactCustomFieldSetting

try {
    $result = $apiInstance->createContactFieldSetting($model_contact_custom_field_setting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->createContactFieldSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_contact_custom_field_setting** | [**\OpenAPI\Client\Model\ModelContactCustomFieldSetting**](../Model/ModelContactCustomFieldSetting.md)|  | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactCustomFieldId()`

```php
deleteContactCustomFieldId($contact_custom_field_id): \OpenAPI\Client\Model\InlineResponse2004
```

delete a contact field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_id = 56; // int | Id of contact field

try {
    $result = $apiInstance->deleteContactCustomFieldId($contact_custom_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->deleteContactCustomFieldId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_custom_field_id** | **int**| Id of contact field |

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

## `deleteContactFieldSetting()`

```php
deleteContactFieldSetting($contact_custom_field_setting_id): \OpenAPI\Client\Model\InlineResponse2004
```

Deletes a contact field setting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_setting_id = 56; // int | Id of contact field to delete

try {
    $result = $apiInstance->deleteContactFieldSetting($contact_custom_field_setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->deleteContactFieldSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_custom_field_setting_id** | **int**| Id of contact field to delete |

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

## `getContactFieldSettingById()`

```php
getContactFieldSettingById($contact_custom_field_setting_id): object
```

Find contact field setting by ID

Returns a single contact field setting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_setting_id = 56; // int | ID of contact field to return

try {
    $result = $apiInstance->getContactFieldSettingById($contact_custom_field_setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getContactFieldSettingById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_custom_field_setting_id** | **int**| ID of contact field to return |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactFieldSettings()`

```php
getContactFieldSettings(): object
```

Retrieve contact field settings

Retrieve all contact field settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getContactFieldSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getContactFieldSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactFields()`

```php
getContactFields(): object
```

Retrieve contact fields

Retrieve all contact fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getContactFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getContactFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactFieldsById()`

```php
getContactFieldsById($contact_custom_field_id): object
```

Retrieve contact fields

Retrieve all contact fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_id = 3.4; // float | id of the contact field

try {
    $result = $apiInstance->getContactFieldsById($contact_custom_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getContactFieldsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_custom_field_id** | **float**| id of the contact field |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlaceholder()`

```php
getPlaceholder($object_name, $sub_object_name): \OpenAPI\Client\Model\InlineResponse20046
```

Retrieve Placeholders

Retrieve all Placeholders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_name = 'object_name_example'; // string | Model name
$sub_object_name = 'sub_object_name_example'; // string | Sub model name, required if you have \"Email\" at objectName

try {
    $result = $apiInstance->getPlaceholder($object_name, $sub_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getPlaceholder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| Model name |
 **sub_object_name** | **string**| Sub model name, required if you have \&quot;Email\&quot; at objectName | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReferenceCount()`

```php
getReferenceCount($contact_custom_field_setting_id): \OpenAPI\Client\Model\InlineResponse20062
```

Receive count reference

Receive count reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_setting_id = 56; // int | ID of contact field you want to get the reference count

try {
    $result = $apiInstance->getReferenceCount($contact_custom_field_setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getReferenceCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_custom_field_setting_id** | **int**| ID of contact field you want to get the reference count |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContactFieldSetting()`

```php
updateContactFieldSetting($contact_custom_field_setting_id, $model_contact_custom_field_setting_update): object
```

Update contact field setting

Update an existing contact field  setting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_setting_id = 56; // int | ID of contact field setting you want to update
$model_contact_custom_field_setting_update = new \OpenAPI\Client\Model\ModelContactCustomFieldSettingUpdate(); // \OpenAPI\Client\Model\ModelContactCustomFieldSettingUpdate

try {
    $result = $apiInstance->updateContactFieldSetting($contact_custom_field_setting_id, $model_contact_custom_field_setting_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->updateContactFieldSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_custom_field_setting_id** | **int**| ID of contact field setting you want to update |
 **model_contact_custom_field_setting_update** | [**\OpenAPI\Client\Model\ModelContactCustomFieldSettingUpdate**](../Model/ModelContactCustomFieldSettingUpdate.md)|  | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContactfield()`

```php
updateContactfield($contact_custom_field_id, $model_contact_custom_field_update): object
```

Update a contact field

Update a contact field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_id = 3.4; // float | id of the contact field
$model_contact_custom_field_update = new \OpenAPI\Client\Model\ModelContactCustomFieldUpdate(); // \OpenAPI\Client\Model\ModelContactCustomFieldUpdate | Update data

try {
    $result = $apiInstance->updateContactfield($contact_custom_field_id, $model_contact_custom_field_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->updateContactfield: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_custom_field_id** | **float**| id of the contact field |
 **model_contact_custom_field_update** | [**\OpenAPI\Client\Model\ModelContactCustomFieldUpdate**](../Model/ModelContactCustomFieldUpdate.md)| Update data | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
