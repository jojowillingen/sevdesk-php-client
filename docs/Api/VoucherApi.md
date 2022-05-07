# OpenAPI\Client\VoucherApi

All URIs are relative to https://my.sevdesk.de/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookVoucher()**](VoucherApi.md#bookVoucher) | **PUT** /Voucher/{voucherId}/bookAmount | Book a voucher
[**createVoucherByFactory()**](VoucherApi.md#createVoucherByFactory) | **POST** /Voucher/Factory/saveVoucher | Create a new voucher
[**getVoucherById()**](VoucherApi.md#getVoucherById) | **GET** /Voucher/{voucherId} | Find voucher by ID
[**getVouchers()**](VoucherApi.md#getVouchers) | **GET** /Voucher | Retrieve vouchers
[**updateVoucher()**](VoucherApi.md#updateVoucher) | **PUT** /Voucher/{voucherId} | Update an existing voucher
[**voucherUploadFile()**](VoucherApi.md#voucherUploadFile) | **POST** /Voucher/Factory/uploadTempFile | Upload voucher file


## `bookVoucher()`

```php
bookVoucher($voucher_id, $inline_object): \OpenAPI\Client\Model\InlineResponse200
```

Book a voucher

This endpoint can be used to book vouchers.<br>      Vouchers are booked on payment accounts where (bank) transactions are located and might be linked to the transactions      by using this endpoint.<br><br> Booking the voucher with a transaction is probably the most important part in the bookkeeping process.<br> There are several ways on correctly booking an voucher, all by using the same endpoint.<br><br> The first way of correctly booking an voucher is to book it on the standard check account which is provided by sevDesk.<br> This is perhaps the easiest way, as no transaction needs to be manually created or searched.<br> The fitting transaction will automatically be created on the standard account and the voucher will be booked with it.<br> This works the same way with the register check account.<br><br> The second way of correctly booking an voucher is to book it with an existing transaction on some check account.<br> Here the check account transactions mentioned earlier come into play.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of voucher to book
$inline_object = new \OpenAPI\Client\Model\InlineObject(); // \OpenAPI\Client\Model\InlineObject

try {
    $result = $apiInstance->bookVoucher($voucher_id, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->bookVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **int**| ID of voucher to book |
 **inline_object** | [**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVoucherByFactory()`

```php
createVoucherByFactory($inline_object3): \OpenAPI\Client\Model\InlineResponse2012
```

Create a new voucher

Generally there are two ways to create vouchers.<br> You can create vouchers by either POSTing to the <b>Voucher</b> and <b>VoucherPos</b> endpoints with the necessary parameters (see attribute lists) or you can use a special endpoint which bundles the requests in one.<br> <br> The list of parameters starts with the voucher array.<br> This array contains all required attributes for a complete voucher.<br> Most of the attributes are covered in the voucher attribute list, there are only two parameters standing out, namely <b>mapAll</b> and <b>objectName</b>.<br> These are just needed for our system and you always need to provide them.<br><br> The list of parameters then continues with the voucher position array.<br> With this array you have the possibility to add multiple positions at once.<br> In the example it only contains one position, again together with the parameters <b>mapAll</b> and <b>objectName</b>, however, you can add more voucher positions by extending the array.<br> So if you wanted to add another position, you would add the same list of parameters with an incremented array index of \\\"1\\\" instead of \\\"0\\\".<br><br> The list ends with the two parameters voucherPosDelete and filename.<br> We will shortly explain what they can do.<br> With voucherPosDelete you have to option to delete voucher positions as this request can also be used to update vouchers.<br> With filename you can attach a file to the voucher.<br> For most of our customers this is a really important step, as they need to digitize their receipts.<br> Finally, after covering all parameters, they only important information left, is that the order of the last two attributes always needs to be kept.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object3 = new \OpenAPI\Client\Model\InlineObject3(); // \OpenAPI\Client\Model\InlineObject3

try {
    $result = $apiInstance->createVoucherByFactory($inline_object3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createVoucherByFactory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object3** | [**\OpenAPI\Client\Model\InlineObject3**](../Model/InlineObject3.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoucherById()`

```php
getVoucherById($voucher_id): \OpenAPI\Client\Model\InlineResponse20031
```

Find voucher by ID

Returns a single voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of voucher to return

try {
    $result = $apiInstance->getVoucherById($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getVoucherById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **int**| ID of voucher to return |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVouchers()`

```php
getVouchers($status, $credit_debit, $description_like, $start_date, $end_date, $contact_id, $contact_object_name): \OpenAPI\Client\Model\InlineResponse20031
```

Retrieve vouchers

There are a multitude of parameter which can be used to filter. A few of them are attached but      for a complete list please check out <a href='https://api.sevdesk.de/#section/How-to-filter-for-certain-vouchers'>this</a> list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 3.4; // float | Status of the vouchers to retrieve.
$credit_debit = 'credit_debit_example'; // string | Define if you only want credit or debit vouchers.
$description_like = 'description_like_example'; // string | Retrieve all vouchers with a description like this.
$start_date = 01.01.2020; // int | Retrieve all vouchers with a date equal or higher
$end_date = 01.01.2020; // int | Retrieve all vouchers with a date equal or lower
$contact_id = 56; // int | Retrieve all vouchers with this contact. Must be provided with contact[objectName]
$contact_object_name = 'contact_object_name_example'; // string | Only required if contact[id] was provided. 'Contact' should be used as value.

try {
    $result = $apiInstance->getVouchers($status, $credit_debit, $description_like, $start_date, $end_date, $contact_id, $contact_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **float**| Status of the vouchers to retrieve. | [optional]
 **credit_debit** | **string**| Define if you only want credit or debit vouchers. | [optional]
 **description_like** | **string**| Retrieve all vouchers with a description like this. | [optional]
 **start_date** | **int**| Retrieve all vouchers with a date equal or higher | [optional]
 **end_date** | **int**| Retrieve all vouchers with a date equal or lower | [optional]
 **contact_id** | **int**| Retrieve all vouchers with this contact. Must be provided with contact[objectName] | [optional]
 **contact_object_name** | **string**| Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVoucher()`

```php
updateVoucher($voucher_id, $model_voucher_update): \OpenAPI\Client\Model\InlineResponse20031
```

Update an existing voucher

Update a voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of voucher to update
$model_voucher_update = new \OpenAPI\Client\Model\ModelVoucherUpdate(); // \OpenAPI\Client\Model\ModelVoucherUpdate | Update data

try {
    $result = $apiInstance->updateVoucher($voucher_id, $model_voucher_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->updateVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **int**| ID of voucher to update |
 **model_voucher_update** | [**\OpenAPI\Client\Model\ModelVoucherUpdate**](../Model/ModelVoucherUpdate.md)| Update data | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voucherUploadFile()`

```php
voucherUploadFile($inline_object11): \OpenAPI\Client\Model\InlineResponse20112
```

Upload voucher file

To attach a document to a voucher, you will need to upload it first for later use.<br> To do this, you can use this request.<br> When you successfully uploaded the file, you will get a sevDesk internal filename in the response.<br> The filename will be a hash generated from your uploaded file. You will need it in the next request!<br> After you got the just mentioned filename, you can enter it as a value for the filename parameter of the saveVoucher request.<br> If you provided all necessary parameters and kept all of them in the right order, the file will be attached to your voucher.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object11 = new \OpenAPI\Client\Model\InlineObject11(); // \OpenAPI\Client\Model\InlineObject11

try {
    $result = $apiInstance->voucherUploadFile($inline_object11);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherUploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object11** | [**\OpenAPI\Client\Model\InlineObject11**](../Model/InlineObject11.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20112**](../Model/InlineResponse20112.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
