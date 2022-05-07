# # SaveCreditNoteCreditNotePosObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The creditNote position id. | [optional] [readonly]
**object_name** | **string** |  | [default to 'CreditNotePos']
**create** | **string** | Date of creditNote position creation | [optional] [readonly]
**update** | **string** | Date of last creditNote position update | [optional] [readonly]
**credit_note** | [**\OpenAPI\Client\Model\ModelCreditNotePosCreditNote**](ModelCreditNotePosCreditNote.md) |  | [optional]
**part** | [**\OpenAPI\Client\Model\ModelInvoicePosPart**](ModelInvoicePosPart.md) |  | [optional]
**quantity** | **float** | Quantity of the article/part |
**price** | **float** | Price of the article/part. Is either gross or net, depending on the sevDesk account setting. | [optional]
**price_net** | **float** | Net price of the part | [optional] [readonly]
**price_tax** | **float** | Tax on the price of the part | [optional] [default to 19]
**price_gross** | **float** | Gross price of the part | [optional] [default to 119]
**name** | **string** | Name of the article/part. | [optional]
**unity** | [**\OpenAPI\Client\Model\ModelCreditNotePosUnity**](ModelCreditNotePosUnity.md) |  |
**sev_client** | [**\OpenAPI\Client\Model\ModelCreditNotePosSevClient**](ModelCreditNotePosSevClient.md) |  | [optional]
**position_number** | **int** | Position number of your position. Can be used to creditNote multiple positions. | [optional] [default to 1000]
**text** | **string** | A text describing your position. | [optional]
**discount** | **float** | An optional discount of the position. | [optional]
**optional** | **bool** | Defines if the position is optional. | [optional]
**tax_rate** | **float** | Tax rate of the position. |
**sum_discount** | **float** | Discount sum of the position | [optional] [readonly]
**map_all** | **bool** |  | [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
