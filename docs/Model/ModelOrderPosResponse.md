# # ModelOrderPosResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The order position id | [optional] [readonly]
**object_name** | **string** | The order position object name | [optional] [readonly]
**create** | **\DateTime** | Date of order position creation | [optional] [readonly]
**update** | **\DateTime** | Date of last order position update | [optional] [readonly]
**order** | [**\OpenAPI\Client\Model\ModelOrderPosResponseOrder**](ModelOrderPosResponseOrder.md) |  | [optional]
**part** | [**\OpenAPI\Client\Model\ModelCreditNotePosResponsePart**](ModelCreditNotePosResponsePart.md) |  | [optional]
**quantity** | **string** | Quantity of the article/part | [optional]
**price** | **string** | Price of the article/part. Is either gross or net, depending on the sevDesk account setting. | [optional]
**price_net** | **string** | Net price of the part | [optional] [readonly]
**price_tax** | **string** | Tax on the price of the part | [optional]
**price_gross** | **string** | Gross price of the part | [optional]
**name** | **string** | Name of the article/part. | [optional]
**unity** | [**\OpenAPI\Client\Model\ModelCreditNotePosResponseUnity**](ModelCreditNotePosResponseUnity.md) |  | [optional]
**sev_client** | [**\OpenAPI\Client\Model\ModelOrderPosResponseSevClient**](ModelOrderPosResponseSevClient.md) |  | [optional]
**position_number** | **string** | Position number of your position. Can be used to order multiple positions. | [optional] [default to '1000']
**text** | **string** | A text describing your position. | [optional]
**discount** | **string** | An optional discount of the position. | [optional]
**optional** | **bool** | Defines if the position is optional. | [optional]
**tax_rate** | **string** | Tax rate of the position. | [optional]
**sum_discount** | **string** | Discount sum of the position | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
