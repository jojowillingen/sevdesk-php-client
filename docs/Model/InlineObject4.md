# # InlineObject4

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice** | [**\OpenAPI\Client\Model\SaveInvoiceInvoiceObject**](.md) |  |
**invoice_pos_save** | [**\OpenAPI\Client\Model\SaveInvoiceInvoicePosObject[]**](SaveInvoiceInvoicePosObject.md) | The invoice positions you want to create. If you don&#39;t have any, set to null. |
**invoice_pos_delete** | [**\OpenAPI\Client\Model\SaveInvoiceInvoicePosDelete[]**](SaveInvoiceInvoicePosDelete.md) | The invoice positions you want to delete. If you don&#39;t have any, set to null. | [optional]
**discount_save** | [**\OpenAPI\Client\Model\SaveInvoiceDiscountSave[]**](SaveInvoiceDiscountSave.md) | The discounts you want to create. If you don&#39;t have any, set to null. | [optional]
**discount_delete** | [**\OpenAPI\Client\Model\SaveInvoiceDiscountDelete[]**](SaveInvoiceDiscountDelete.md) | The discounts you want to delete. If you don&#39;t have any, set to null. | [optional]
**take_default_address** | **bool** | Defines if the address of the supplied contact is automatically filled into the invoice. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
