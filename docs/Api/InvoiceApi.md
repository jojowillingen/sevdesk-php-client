# OpenAPI\Client\InvoiceApi

All URIs are relative to https://my.sevdesk.de/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookInvoice()**](InvoiceApi.md#bookInvoice) | **PUT** /Invoice/{invoiceId}/bookAmount | Book an invoice
[**cancelInvoice()**](InvoiceApi.md#cancelInvoice) | **POST** /Invoice/{invoiceId}/cancelInvoice | Cancel an invoice / Create cancellation invoice
[**createInvoiceByFactory()**](InvoiceApi.md#createInvoiceByFactory) | **POST** /Invoice/Factory/saveInvoice | Create a new invoice
[**createInvoiceFromOrder()**](InvoiceApi.md#createInvoiceFromOrder) | **POST** /Invoice/Factory/createInvoiceFromOrder | Create invoice from order
[**createInvoiceReminder()**](InvoiceApi.md#createInvoiceReminder) | **POST** /Invoice/Factory/createInvoiceReminder | Create invoice reminder
[**getInvoiceById()**](InvoiceApi.md#getInvoiceById) | **GET** /Invoice/{invoiceId} | Find invoice by ID
[**getInvoicePositionsById()**](InvoiceApi.md#getInvoicePositionsById) | **GET** /Invoice/{invoiceId}/getPositions | Find invoice positions
[**getInvoices()**](InvoiceApi.md#getInvoices) | **GET** /Invoice | Retrieve invoices
[**getIsInvoicePartiallyPaid()**](InvoiceApi.md#getIsInvoicePartiallyPaid) | **GET** /Invoice/{invoiceId}/getIsPartiallyPaid | Check if an invoice is already partially paid
[**invoiceGetPdf()**](InvoiceApi.md#invoiceGetPdf) | **GET** /Invoice/{invoiceId}/getPdf | Retrieve pdf document of an invoice
[**invoiceRender()**](InvoiceApi.md#invoiceRender) | **POST** /Invoice/{invoiceId}/render | Render the pdf document of an invoice
[**invoiceSendBy()**](InvoiceApi.md#invoiceSendBy) | **PUT** /Invoice/{invoiceId}/sendBy | Mark invoice as sent
[**sendInvoiceViaEMail()**](InvoiceApi.md#sendInvoiceViaEMail) | **POST** /Invoice/{invoiceId}/sendViaEmail | Send invoice via email


## `bookInvoice()`

```php
bookInvoice($invoice_id, $inline_object2): \OpenAPI\Client\Model\InlineResponse20010
```

Book an invoice

This endpoint can be used to book invoices.<br>      Invoices are booked on payment accounts where (bank) transactions are located and might be linked to the transactions      by using this endpoint.<br><br> Booking the invoice with a transaction is probably the most important part in the bookkeeping process.<br> There are several ways on correctly booking an invoice, all by using the same endpoint.<br><br> The first way of correctly booking an invoice is to book it on the standard check account which is provided by sevDesk.<br> This is perhaps the easiest way, as no transaction needs to be manually created or searched.<br> The fitting transaction will automatically be created on the standard account and the invoice will be booked with it.<br> This works the same way with the register check account.<br><br> The second way of correctly booking an invoice is to book it with an existing transaction on some check account.<br> Here the check account transactions mentioned earlier come into play.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to book
$inline_object2 = new \OpenAPI\Client\Model\InlineObject2(); // \OpenAPI\Client\Model\InlineObject2

try {
    $result = $apiInstance->bookInvoice($invoice_id, $inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->bookInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| ID of invoice to book |
 **inline_object2** | [**\OpenAPI\Client\Model\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelInvoice()`

```php
cancelInvoice($invoice_id): \OpenAPI\Client\Model\InlineResponse20015
```

Cancel an invoice / Create cancellation invoice

This endpoint will cancel the specified invoice therefor creating a cancellation invoice.<br>       The cancellation invoice will be automatically paid and the source invoices status will change to 'cancelled'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to be cancelled

try {
    $result = $apiInstance->cancelInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| ID of invoice to be cancelled |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoiceByFactory()`

```php
createInvoiceByFactory($inline_object4): \OpenAPI\Client\Model\InlineResponse2015
```

Create a new invoice

This endpoint offers you the following functionality.       <ul>          <li>Create invoices together with positions and discounts</li>          <li>Delete positions while adding new ones</li>          <li>Delete or add discounts, or both at the same time</li>          <li>Automatically fill the address of the supplied contact into the invoice address</li>       </ul>       To make your own request sample slimmer, you can omit all parameters which are not required and nullable.       However, for a valid and logical bookkeeping document, you will also need some of them to ensure that all the necessary data is in the invoice.<br><br> The list of parameters starts with the invoice array.<br> This array contains all required attributes for a complete invoice.<br> Most of the attributes are covered in the invoice attribute list, there are only two parameters standing out, namely <b>mapAll</b> and <b>objectName</b>.<br> These are just needed for our system and you always need to provide them.<br><br> The list of parameters then continues with the invoice position array.<br> With this array you have the possibility to add multiple positions at once.<br> In the example it only contains one position, again together with the parameters <b>mapAll</b> and <b>objectName</b>, however, you can add more invoice positions by extending the array.<br> So if you wanted to add another position, you would add the same list of parameters with an incremented array index of \"1\" instead of \"0\".<br><br> The list ends with the four parameters invoicePosDelete, discountSave, discountDelete and takeDefaultAddress.<br> They only play a minor role if you only want to create an invoice but we will shortly explain what they can do.<br> With invoicePosDelete you have to option to delete invoice positions as this request can also be used to update invoices.<br> With discountSave you can add discounts to your invoice.<br> With discountDelete you can delete discounts from your invoice.<br> With takeDefaultAddress you can specify that the first address of the contact you are using for the invoice is taken for the invoice address attribute automatically, so you don't need to provide the address yourself.<br> If you want to know more about these parameters, for example if you want to use this request to update invoices, feel free to contact our support.<br><br> Finally, after covering all parameters, they only important information left, is that the order of the last four attributes always needs to be kept.<br> You will also always need to provide all of them, as otherwise the request won't work properly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object4 = new \OpenAPI\Client\Model\InlineObject4(); // \OpenAPI\Client\Model\InlineObject4

try {
    $result = $apiInstance->createInvoiceByFactory($inline_object4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createInvoiceByFactory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object4** | [**\OpenAPI\Client\Model\InlineObject4**](../Model/InlineObject4.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoiceFromOrder()`

```php
createInvoiceFromOrder($invoice_id, $invoice_object_name, $model_create_invoice_from_order): \OpenAPI\Client\Model\InlineResponse20015
```

Create invoice from order

Create an invoice from an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | the id of the invoice
$invoice_object_name = Invoice; // string | Model name, which is 'Invoice'
$model_create_invoice_from_order = new \OpenAPI\Client\Model\ModelCreateInvoiceFromOrder(); // \OpenAPI\Client\Model\ModelCreateInvoiceFromOrder | Create invoice

try {
    $result = $apiInstance->createInvoiceFromOrder($invoice_id, $invoice_object_name, $model_create_invoice_from_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createInvoiceFromOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| the id of the invoice |
 **invoice_object_name** | **string**| Model name, which is &#39;Invoice&#39; |
 **model_create_invoice_from_order** | [**\OpenAPI\Client\Model\ModelCreateInvoiceFromOrder**](../Model/ModelCreateInvoiceFromOrder.md)| Create invoice | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoiceReminder()`

```php
createInvoiceReminder($invoice_id, $invoice_object_name, $inline_object10): \OpenAPI\Client\Model\InlineResponse20015
```

Create invoice reminder

Create an reminder from an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | the id of the invoice
$invoice_object_name = Invoice; // string | Model name, which is 'Invoice'
$inline_object10 = new \OpenAPI\Client\Model\InlineObject10(); // \OpenAPI\Client\Model\InlineObject10

try {
    $result = $apiInstance->createInvoiceReminder($invoice_id, $invoice_object_name, $inline_object10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createInvoiceReminder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| the id of the invoice |
 **invoice_object_name** | **string**| Model name, which is &#39;Invoice&#39; |
 **inline_object10** | [**\OpenAPI\Client\Model\InlineObject10**](../Model/InlineObject10.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceById()`

```php
getInvoiceById($invoice_id): \OpenAPI\Client\Model\InlineResponse20015
```

Find invoice by ID

Returns a single invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to return

try {
    $result = $apiInstance->getInvoiceById($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoiceById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| ID of invoice to return |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoicePositionsById()`

```php
getInvoicePositionsById($invoice_id, $limit, $offset, $embed): \OpenAPI\Client\Model\InlineResponse20036
```

Find invoice positions

Returns all positions of an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to return the positions
$limit = 56; // int | limits the number of entries returned
$offset = 56; // int | set the index where the returned entries start
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getInvoicePositionsById($invoice_id, $limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoicePositionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| ID of invoice to return the positions |
 **limit** | **int**| limits the number of entries returned | [optional]
 **offset** | **int**| set the index where the returned entries start | [optional]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoices()`

```php
getInvoices($status, $invoice_number, $start_date, $end_date, $contact_id, $contact_object_name): \OpenAPI\Client\Model\InlineResponse20015
```

Retrieve invoices

There are a multitude of parameter which can be used to filter. A few of them are attached but       for a complete list please check out <a href='https://api.sevdesk.de/#section/How-to-filter-for-certain-invoices'>this</a> list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 3.4; // float | Status of the invoices
$invoice_number = 'invoice_number_example'; // string | Retrieve all invoices with this invoice number
$start_date = 56; // int | Retrieve all invoices with a date equal or higher
$end_date = 56; // int | Retrieve all invoices with a date equal or lower
$contact_id = 56; // int | Retrieve all invoices with this contact. Must be provided with contact[objectName]
$contact_object_name = 'contact_object_name_example'; // string | Only required if contact[id] was provided. 'Contact' should be used as value.

try {
    $result = $apiInstance->getInvoices($status, $invoice_number, $start_date, $end_date, $contact_id, $contact_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **float**| Status of the invoices | [optional]
 **invoice_number** | **string**| Retrieve all invoices with this invoice number | [optional]
 **start_date** | **int**| Retrieve all invoices with a date equal or higher | [optional]
 **end_date** | **int**| Retrieve all invoices with a date equal or lower | [optional]
 **contact_id** | **int**| Retrieve all invoices with this contact. Must be provided with contact[objectName] | [optional]
 **contact_object_name** | **string**| Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIsInvoicePartiallyPaid()`

```php
getIsInvoicePartiallyPaid($invoice_id): \OpenAPI\Client\Model\InlineResponse20013
```

Check if an invoice is already partially paid

Returns 'true' if the given invoice is partially paid - 'false' if it is not.      Invoices which are completely paid are regarded as not partially paid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to return

try {
    $result = $apiInstance->getIsInvoicePartiallyPaid($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getIsInvoicePartiallyPaid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| ID of invoice to return |

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

## `invoiceGetPdf()`

```php
invoiceGetPdf($invoice_id, $unknown_base_type): \OpenAPI\Client\Model\InlineResponse2001
```

Retrieve pdf document of an invoice

Retrieves the pdf document of an invoice with additional metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice from which you want the pdf
$unknown_base_type = new \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Model\UNKNOWN_BASE_TYPE | Specify the send type

try {
    $result = $apiInstance->invoiceGetPdf($invoice_id, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| ID of invoice from which you want the pdf |
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

## `invoiceRender()`

```php
invoiceRender($invoice_id, $inline_object5): \OpenAPI\Client\Model\InlineResponse2016
```

Render the pdf document of an invoice

Using this endpoint you can render the pdf document of an invoice.<br>       Use cases for this are the retrieval of the pdf location or the forceful re-render of a already sent invoice.<br>       Please be aware that changing an invoice after it has been sent to a customer is not an allowed bookkeeping process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to render
$inline_object5 = new \OpenAPI\Client\Model\InlineObject5(); // \OpenAPI\Client\Model\InlineObject5

try {
    $result = $apiInstance->invoiceRender($invoice_id, $inline_object5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceRender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| ID of invoice to render |
 **inline_object5** | [**\OpenAPI\Client\Model\InlineObject5**](../Model/InlineObject5.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2016**](../Model/InlineResponse2016.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceSendBy()`

```php
invoiceSendBy($invoice_id, $inline_object7): \OpenAPI\Client\Model\InlineResponse20048
```

Mark invoice as sent

Marks an invoice as sent by a chosen send type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to mark as sent
$inline_object7 = new \OpenAPI\Client\Model\InlineObject7(); // \OpenAPI\Client\Model\InlineObject7

try {
    $result = $apiInstance->invoiceSendBy($invoice_id, $inline_object7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceSendBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| ID of invoice to mark as sent |
 **inline_object7** | [**\OpenAPI\Client\Model\InlineObject7**](../Model/InlineObject7.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendInvoiceViaEMail()`

```php
sendInvoiceViaEMail($invoice_id, $inline_object1): \OpenAPI\Client\Model\InlineResponse201
```

Send invoice via email

This endpoint sends the specified invoice to a customer via email.<br>      This will automatically mark the invoice as sent.<br>      Please note, that in production an invoice is not allowed to be changed after this happened!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to be sent via email
$inline_object1 = new \OpenAPI\Client\Model\InlineObject1(); // \OpenAPI\Client\Model\InlineObject1

try {
    $result = $apiInstance->sendInvoiceViaEMail($invoice_id, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->sendInvoiceViaEMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| ID of invoice to be sent via email |
 **inline_object1** | [**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
