# OpenAPI\Client\CreditNoteApi

All URIs are relative to https://my.sevdesk.de/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createcreditNote()**](CreditNoteApi.md#createcreditNote) | **POST** /CreditNote/Factory/saveCreditNote | Create a new creditNote
[**creditNoteGetPdf()**](CreditNoteApi.md#creditNoteGetPdf) | **GET** /CreditNote/{creditNoteId}/getPdf | Retrieve pdf document of a credit note
[**creditNoteSendBy()**](CreditNoteApi.md#creditNoteSendBy) | **PUT** /CreditNote/{creditNoteId}/sendBy | Mark credit note as sent
[**deletecreditNote()**](CreditNoteApi.md#deletecreditNote) | **DELETE** /creditNote/{creditNoteId} | Deletes an creditNote
[**getCreditNotes()**](CreditNoteApi.md#getCreditNotes) | **GET** /CreditNote | Retrieve CreditNote
[**getcreditNoteById()**](CreditNoteApi.md#getcreditNoteById) | **GET** /creditNote/{creditNoteId} | Find creditNote by ID
[**sendCreditNoteByPrinting()**](CreditNoteApi.md#sendCreditNoteByPrinting) | **GET** /creditNote/{creditNoteId}/sendByWithRender | Send credit note by printing
[**sendCreditNoteViaEMail()**](CreditNoteApi.md#sendCreditNoteViaEMail) | **POST** /CreditNote/{creditNoteId}/sendViaEmail | Send credit note via email
[**updatecreditNote()**](CreditNoteApi.md#updatecreditNote) | **PUT** /creditNote/{creditNoteId} | Update an existing creditNote


## `createcreditNote()`

```php
createcreditNote($unknown_base_type): \OpenAPI\Client\Model\InlineResponse20110
```

Create a new creditNote

The list of parameters starts with the credit note array.<br> This array contains all required attributes for a complete credit note.<br> Most of the attributes are covered in the credit note attribute list, there are only two parameters standing out, namely <b>mapAll</b> and <b>objectName</b>.<br> These are just needed for our system and you always need to provide them.<br> The list of parameters then continues with the credit note position array.<br> With this array you have the possibility to add multiple positions at once.<br> In the example it only contains one position, again together with the parameters <b>mapAll</b> and <b>objectName</b>, however, you can add more credit note positions by extending the array.<br> So if you wanted to add another position, you would add the same list of parameters with an incremented array index of \"1\" instead of \"0\".<br><br> The list ends with the five parameters creditNotePosDelete, discountSave, discountDelete, takeDefaultAddress and forCashRegister.<br> They only play a minor role if you only want to create a credit note but we will shortly explain what they can do.<br> With creditNotePosDelete you have to option to delete credit note positions as this request can also be used to update credit notes.<br> Both discount parameters are deprecated and have no use for credit notes, however they need to be provided in case you want to use the following two parameters.<br> With takeDefaultAddress you can specify that the first address of the contact you are using for the credit note is taken for the credit note address attribute automatically, so you don't need to provide the address yourself.<br> Finally, the forCashRegister parameter needs to be set to <b>true</b> if your credit note is to be booked on the cash register.<br> If you want to know more about these parameters, for example if you want to use this request to update credit notes, feel free to contact our support.<br> Finally, after covering all parameters, they only important information left, is that the order of the last five attributes always needs to be kept.<br> You will also always need to provide all of them, as otherwise the request won't work properly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE | Creation data. Please be aware, that you need to provide at least all required parameter      of the creditNote model!

try {
    $result = $apiInstance->createcreditNote($unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->createcreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)| Creation data. Please be aware, that you need to provide at least all required parameter      of the creditNote model! | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20110**](../Model/InlineResponse20110.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditNoteGetPdf()`

```php
creditNoteGetPdf($credit_note_id, $unknown_base_type): \OpenAPI\Client\Model\InlineResponse2001
```

Retrieve pdf document of a credit note

Retrieves the pdf document of a credit note with additional metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of credit note from which you want the pdf
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE | Specify the send type

try {
    $result = $apiInstance->creditNoteGetPdf($credit_note_id, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->creditNoteGetPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | **int**| ID of credit note from which you want the pdf |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)| Specify the send type | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditNoteSendBy()`

```php
creditNoteSendBy($credit_note_id, $inline_object9): \OpenAPI\Client\Model\InlineResponse20055
```

Mark credit note as sent

Marks an credit note as sent by a chosen send type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of credit note to mark as sent
$inline_object9 = new \OpenAPI\Client\Model\InlineObject9(); // \OpenAPI\Client\Model\InlineObject9

try {
    $result = $apiInstance->creditNoteSendBy($credit_note_id, $inline_object9);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->creditNoteSendBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | **int**| ID of credit note to mark as sent |
 **inline_object9** | [**\OpenAPI\Client\Model\InlineObject9**](../Model/InlineObject9.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletecreditNote()`

```php
deletecreditNote($credit_note_id): \OpenAPI\Client\Model\InlineResponse2008
```

Deletes an creditNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | Id of creditNote resource to delete

try {
    $result = $apiInstance->deletecreditNote($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->deletecreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | **int**| Id of creditNote resource to delete |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditNotes()`

```php
getCreditNotes($status, $credit_note_number, $start_date, $end_date, $contact_id, $contact_object_name): \OpenAPI\Client\Model\InlineResponse2008
```

Retrieve CreditNote

There are a multitude of parameter which can be used to filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Status of the CreditNote
$credit_note_number = 'credit_note_number_example'; // string | Retrieve all CreditNotes with this creditNote number
$start_date = 01.01.2020; // int | Retrieve all CreditNotes with a date equal or higher
$end_date = 01.01.2021; // int | Retrieve all CreditNotes with a date equal or lower
$contact_id = 56; // int | Retrieve all CreditNotes with this contact. Must be provided with contact[objectName]
$contact_object_name = 'contact_object_name_example'; // string | Only required if contact[id] was provided. 'Contact' should be used as value.

try {
    $result = $apiInstance->getCreditNotes($status, $credit_note_number, $start_date, $end_date, $contact_id, $contact_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->getCreditNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Status of the CreditNote | [optional]
 **credit_note_number** | **string**| Retrieve all CreditNotes with this creditNote number | [optional]
 **start_date** | **int**| Retrieve all CreditNotes with a date equal or higher | [optional]
 **end_date** | **int**| Retrieve all CreditNotes with a date equal or lower | [optional]
 **contact_id** | **int**| Retrieve all CreditNotes with this contact. Must be provided with contact[objectName] | [optional]
 **contact_object_name** | **string**| Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getcreditNoteById()`

```php
getcreditNoteById($credit_note_id): \OpenAPI\Client\Model\InlineResponse2008
```

Find creditNote by ID

Returns a single creditNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of creditNote to return

try {
    $result = $apiInstance->getcreditNoteById($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->getcreditNoteById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | **int**| ID of creditNote to return |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendCreditNoteByPrinting()`

```php
sendCreditNoteByPrinting($credit_note_id, $unknown_base_type): \OpenAPI\Client\Model\InlineResponse2008
```

Send credit note by printing

Sending a credit note to end-customers is an important part of the bookkeeping process.<br> Depending on the way you want to send the credit note, you need to use different endpoints.<br> Let's start with just printing out the credit note, meaning we only need to render the pdf.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of creditNote to return
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE | Mail data

try {
    $result = $apiInstance->sendCreditNoteByPrinting($credit_note_id, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->sendCreditNoteByPrinting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | **int**| ID of creditNote to return |
 **unknown_base_type** | [**\OpenAPI\Client\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)| Mail data | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendCreditNoteViaEMail()`

```php
sendCreditNoteViaEMail($credit_note_id, $inline_object8): \OpenAPI\Client\Model\InlineResponse2008
```

Send credit note via email

This endpoint sends the specified credit note to a customer via email.<br>      This will automatically mark the credit note as sent.<br>      Please note, that in production an credit note is not allowed to be changed after this happened!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of credit note to be sent via email
$inline_object8 = new \OpenAPI\Client\Model\InlineObject8(); // \OpenAPI\Client\Model\InlineObject8

try {
    $result = $apiInstance->sendCreditNoteViaEMail($credit_note_id, $inline_object8);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->sendCreditNoteViaEMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | **int**| ID of credit note to be sent via email |
 **inline_object8** | [**\OpenAPI\Client\Model\InlineObject8**](../Model/InlineObject8.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatecreditNote()`

```php
updatecreditNote($credit_note_id, $model_credit_note_update): \OpenAPI\Client\Model\InlineResponse2008
```

Update an existing creditNote

Update a creditNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of creditNote to update
$model_credit_note_update = new \OpenAPI\Client\Model\ModelCreditNoteUpdate(); // \OpenAPI\Client\Model\ModelCreditNoteUpdate | Update data

try {
    $result = $apiInstance->updatecreditNote($credit_note_id, $model_credit_note_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->updatecreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_note_id** | **int**| ID of creditNote to update |
 **model_credit_note_update** | [**\OpenAPI\Client\Model\ModelCreditNoteUpdate**](../Model/ModelCreditNoteUpdate.md)| Update data | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
