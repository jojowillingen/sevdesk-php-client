# # ModelContactUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The organization name.&lt;br&gt; Be aware that the type of contact will depend on this attribute.&lt;br&gt; If it holds a value, the contact will be regarded as an organization. | [optional]
**customer_number** | **string** | The customer number | [optional]
**parent** | [**\OpenAPI\Client\Model\ModelContactUpdateParent**](ModelContactUpdateParent.md) |  | [optional]
**surename** | **string** | The &lt;b&gt;first&lt;/b&gt; name of the contact.&lt;br&gt; Yeah... not quite right in literally every way. We know.&lt;br&gt; Not to be used for organizations. | [optional]
**familyname** | **string** | The last name of the contact.&lt;br&gt; Not to be used for organizations. | [optional]
**titel** | **string** | A non-academic title for the contact. Not to be used for organizations. | [optional]
**category** | [**\OpenAPI\Client\Model\ModelContactUpdateCategory**](ModelContactUpdateCategory.md) |  | [optional]
**description** | **string** | A description for the contact. | [optional]
**academic_title** | **string** | A academic title for the contact. Not to be used for organizations. | [optional]
**gender** | **string** | Gender of the contact.&lt;br&gt; Not to be used for organizations. | [optional]
**name2** | **string** | Second name of the contact.&lt;br&gt; Not to be used for organizations. | [optional]
**birthday** | **\DateTime** | Birthday of the contact.&lt;br&gt; Not to be used for organizations. | [optional]
**vat_number** | **string** | Vat number of the contact. | [optional]
**bank_account** | **string** | Bank account number (IBAN) of the contact. | [optional]
**bank_number** | **string** | Bank number of the bank used by the contact. | [optional]
**default_cashback_time** | **int** | Absolute time in days which the contact has to pay his invoices and subsequently get a cashback. | [optional]
**default_cashback_percent** | **float** | Percentage of the invoice sum the contact gets back if he payed invoices in time. | [optional]
**default_time_to_pay** | **int** | The payment goal in days which is set for every invoice of the contact. | [optional]
**tax_number** | **string** | The tax number of the contact. | [optional]
**exempt_vat** | **bool** | Defines if the contact is freed from paying vat. | [optional]
**tax_type** | **string** | Defines which tax regulation the contact is using. | [optional]
**tax_set** | [**\OpenAPI\Client\Model\ModelContactTaxSet**](ModelContactTaxSet.md) |  | [optional]
**default_discount_amount** | **float** | The default discount the contact gets for every invoice.&lt;br&gt; Depending on defaultDiscountPercentage attribute, in percent or absolute value. | [optional]
**default_discount_percentage** | **bool** | Defines if the discount is a percentage (true) or an absolute value (false). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
