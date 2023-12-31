<?php
/**
 * SaveVoucherVoucherObject
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * sevDesk API
 *
 * # General information  Welcome to our API!<br>  sevDesk offers you the possibility of retrieving data using an interface, namely the sevDesk API, and making changes without having to use the web UI. The sevDesk interface is a REST-Full API. All sevDesk data and functions that are used in the web UI can also be controlled through the API.   # Cross-Origin Resource Sharing  This API features Cross-Origin Resource Sharing (CORS).<br>  It enables cross-domain communication from the browser.<br>  All responses have a wildcard same-origin which makes them completely public and accessible to everyone, including any code on any site.    # Embedding resources  When retrieving resources by using this API, you might encounter nested resources in the resources you requested.<br>  For example, an invoice always contains a contact, of which you can see the ID and the object name.<br>  This API gives you the possibility to embed these resources completely into the resources you originally requested.<br>  Taking our invoice example, this would mean, that you would not only see the ID and object name of a contact, but rather the complete contact resource.    To embed resources, all you need to do is to add the query parameter 'embed' to your GET request.<br>  As values, you can provide the name of the nested resource.<br>  Multiple nested resources are also possible by providing multiple names, separated by a comma.    # Authentication and Authorization   The sevDesk API uses a token authentication to authorize calls. For this purpose every sevDesk administrator has one API token, which is a <b>hexadecimal string</b> containing <b>32 characters</b>. The following clip shows where you can find the API token if this is your first time with our API.<br><br> <video src='OpenAPI/img/findingTheApiToken.mp4' controls width='640' height='360'> Ihr Browser kann dieses Video nicht wiedergeben.<br/> Dieses Video zeigt wie sie Ihr sevDesk API Token finden. </video> <br> The token will be needed in every request that you want to send and needs to be attached to the request url as a <b>Query Parameter</b><br> or provided as a value of an <b>Authorization Header</b>.<br> For security reasons, we suggest putting the API Token in the Authorization Header and not in the query string.<br> However, in the request examples in this documentation, we will keep it in the query string, as it is easier for you to copy them and try them yourself.<br> The following url is an example that shows where your token needs to be placed as a query parameter.<br> In this case, we used some random API token. <ul> <li><span>ht</span>tps://my.sevdesk.de/api/v1/Contact?token=<span style='color:red'>b7794de0085f5cd00560f160f290af38</span></li> </ul> The next example shows the token in the Authorization Header. <ul> <li>\"Authorization\" :<span style='color:red'>\"b7794de0085f5cd00560f160f290af38\"</span></li> </ul> The api tokens have an infinite lifetime and, in other words, exist as long as the sevDesk user exists.<br> For this reason, the user should <b>NEVER</b> be deleted.<br> If really necessary, it is advisable to save the api token as we will <b>NOT</b> be able to retrieve it afterwards!<br> It is also possible to generate a new API token, for example, if you want to prevent the usage of your sevDesk account by other people who got your current API token.<br> To achieve this, you just need to click on the \"generate new\" symbol to the right of your token and confirm it with your password.  # API Requests   In our case, REST API requests need to be build by combining the following components. <table> <tr> <th><b>Component</b></th> <th><b>Description</b></th> </tr> <tr> <td>HTTP-Methods</td> <td> <ul> <li>GET (retrieve a resource)</li> <li>POST (create a resource)</li> <li>PUT (update a resource)</li> <li>DELETE (delete a resource)</li> </ul> </td> </tr> <tr> <td>URL of the API</td> <td><span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span></td> </tr> <tr> <td>URI of the resource</td> <td>The resource to query.<br>For example contacts in sevDesk:<br><br> <span style='color:red'>/Contact</span><br><br> Which will result in the following complete URL:<br><br> <span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span> </td> </tr> <tr> <td>Query parameters</td> <td>Are attached by using the connectives <b>?</b> and <b>&</b> in the URL.<br></td> </tr> <tr> <td>Request headers</td> <td>Typical request headers are for example:<br> <div> <br> <ul> <li>Content-type</li> <li>Authorization</li> <li>Accept-Encoding</li> <li>...</li> </ul> </div> </td> </tr> <tr> <td>Request body</td> <td>Mostly required in POST and PUT requests.<br> Often the request body contains json, in our case, it also accepts url-encoded data. </td> </tr> </table> This is a sample request for retrieving existing contacts in sevDesk using curl:<br><br> <img src='OpenAPI/img/GETRequest.PNG' alt='Get Request' height='150'><br><br> As you can see, the request contains all the components mentioned above.<br> It's HTTP method is GET, it has a correct endpoint (<span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span>), query parameters like <b>token</b> and additional <b>header</b> information!<br><br> <b>Query Parameters</b><br><br> As you might have seen in the sample request above, there are several other parameters besides \"token\", located in the url.<br> Those are mostly optional but prove to be very useful for a lot of requests as they can limit, extend, sort or filter the data you will get as a response.<br><br> These are the three most used query parameter for the sevDesk API. <table> <tr> <th><b>Parameter</b></th> <th><b>Description</b></th> </tr> <tr> <td>limit</td> <td>Limits the number of entries that are returned.<br> Most useful in GET requests which will most likely deliver big sets of data like country or currency lists.<br> In this case, you can bypass the default limitation on returned entries by providing a high number. </td> </tr> <tr> <td>offset</td> <td>Specifies a certain offset for the data that will be returned.<br> As an example, you can specify \"offset=2\" if you want all entries except for the first two.</td> </tr> <tr> <td>embed</td> <td>Will extend some of the returned data.<br> A brief example can be found below.</td> </tr> </table> This is an example for the usage of the embed parameter.<br> The following first request will return all company contact entries in sevDesk up to a limit of 100 without any additional information and no offset.<br><br> <img src='OpenAPI/img/ContactQueryWithoutEmbed.PNG' width='900' height='850'><br><br> Now have a look at the category attribute located in the response.<br> Naturally, it just contains the id and the object name of the object but no further information.<br> We will now use the parameter embed with the value \"category\".<br><br> <img src='OpenAPI/img/ContactQueryWithEmbed.PNG' width='900' height='850'><br><br> As you can see, the category object is now extended and shows all the attributes and their corresponding values.<br><br> There are lot of other query parameters that can be used to filter the returned data for objects that match a certain pattern, however, those will not be mentioned here and instead can be found at the detail documentation of the most used API endpoints like contact, invoice or voucher.<br><br> <b>Request Headers</b><br><br> The HTTP request (response) headers allow the client as well as the server to pass additional information with the request.<br> They transfer the parameters and arguments which are important for transmitting data over HTTP.<br> Three headers which are useful / necessary when using the sevDesk API are \"Authorization, \"Accept\" and \"Content-type\".<br> Underneath is a brief description of why and how they should be used.<br><br> <b>Authorization</b><br><br> Can be used if you want to provide your API token in the header instead of having it in the url. <ul> <li>Authorization:<span style='color:red'>yourApiToken</span></li> </ul> <b>Accept</b><br><br> Specifies the format of the response.<br> Required for operations with a response body. <ul> <li>Accept:application/<span style='color:red'>format</span> </li> </ul> In our case, <code><span style='color:red'>format</span></code> could be replaced with <code>json</code> or <code>xml</code><br><br> <b>Content-type</b><br><br> Specifies which format is used in the request.<br> Is required for operations with a request body. <ul> <li>Content-type:application/<span style='color:red'>format</span></li> </ul> In our case,<code><span style='color:red'>format</span></code>could be replaced with <code>json</code> or <code>x-www-form-urlencoded</code> <br><br><b>API Responses</b><br><br> HTTP status codes<br> When calling the sevDesk API it is very likely that you will get a HTTP status code in the response.<br> Some API calls will also return JSON response bodies which will contain information about the resource.<br> Each status code which is returned will either be a <b>success</b> code or an <b>error</b> code.<br><br> Success codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>200 OK</code></td> <td>The request was successful</td> </tr> <tr> <td><code>201 Created</code></td> <td>Most likely to be found in the response of a <b>POST</b> request.<br> This code indicates that the desired resource was successfully created.</td> </tr> </table> <br>Error codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>400 Bad request</code></td> <td>The request you sent is most likely syntactically incorrect.<br> You should check if the parameters in the request body or the url are correct.</td> </tr> <tr> <td><code>401 Unauthorized</code></td> <td>The authentication failed.<br> Most likely caused by a missing or wrong API token.</td> </tr> <tr> <td><code>403 Forbidden</code></td> <td>You do not have the permission the access the resource which is requested.</td> </tr> <tr> <td><code>404 Not found</code></td> <td>The resource you specified does not exist.</td> </tr> <tr> <td><code>500 Internal server error</code></td> <td>An internal server error has occurred.<br> Normally this means that something went wrong on our side.<br> However, sometimes this error will appear if we missed to catch an error which is normally a 400 status code! </td> </tr> </table>  # Your First Request   After reading the introduction to our API, you should now be able to make your first call.<br> For testing our API, we would always recommend to create a trial account for sevDesk to prevent unwanted changes to your main account.<br> A trial account will be in the highest tariff (materials management), so every sevDesk function can be tested! <br><br>To start testing we would recommend one of the following tools: <ul> <li><a href='https://www.getpostman.com/'>Postman</a></li> <li><a href='https://curl.haxx.se/download.html'>cURL</a></li> </ul> This example will illustrate your first request, which is creating a new Contact in sevDesk.<br> <ol> <li>Download <a href='https://www.getpostman.com/'><b>Postman</b></a> for your desired system and start the application</li> <li>Enter <span><b>ht</span>tps://my.sevdesk.de/api/v1/Contact</b> as the url</li> <li>Use the connective <b>?</b> to append <b>token=</b> to the end of the url, or create an authorization header. Insert your API token as the value</li> <li>For this test, select <b>POST</b> as the HTTP method</li> <li>Go to <b>Headers</b> and enter the key-value pair <b>Content-type</b> + <b>application/x-www-form-urlencoded</b><br> As an alternative, you can just go to <b>Body</b> and select <b>x-www-form-urlencoded</b></li> <li>Now go to <b>Body</b> (if you are not there yet) and enter the key-value pairs as shown in the following picture<br><br> <img src='OpenAPI/img/FirstRequestPostman.PNG' width='900'><br><br></li> <li>Click on <b>Send</b>. Your response should now look like this:<br><br> <img src='OpenAPI/img/FirstRequestResponse.PNG' width='900'></li> </ol> As you can see, a successful response in this case returns a JSON-formatted response body containing the contact you just created.<br> For keeping it simple, this was only a minimal example of creating a contact.<br> There are however numerous combinations of parameters that you can provide which add information to your contact.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@sevdesk.de
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SaveVoucherVoucherObject Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SaveVoucherVoucherObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'saveVoucherVoucherObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'object_name' => 'string',
        'create' => '\DateTime',
        'update' => '\DateTime',
        'sev_client' => '\OpenAPI\Client\Model\ModelVoucherUpdateSevClient',
        'create_user' => '\OpenAPI\Client\Model\ModelVoucherUpdateCreateUser',
        'voucher_date' => '\DateTime',
        'supplier' => '\OpenAPI\Client\Model\ModelVoucherUpdateSupplier',
        'supplier_name' => 'string',
        'description' => 'string',
        'document' => '\OpenAPI\Client\Model\ModelVoucherUpdateDocument',
        'pay_date' => '\DateTime',
        'status' => 'float',
        'sum_net' => 'float',
        'sum_tax' => 'float',
        'sum_gross' => 'float',
        'sum_net_accounting' => 'float',
        'sum_tax_accounting' => 'float',
        'sum_gross_accounting' => 'float',
        'sum_discounts' => 'float',
        'sum_discounts_foreign_currency' => 'float',
        'paid_amount' => 'float',
        'tax_type' => 'string',
        'credit_debit' => 'string',
        'cost_centre' => '\OpenAPI\Client\Model\ModelVoucherCostCentre',
        'voucher_type' => 'string',
        'currency' => 'string',
        'property_foreign_currency_deadline' => '\DateTime',
        'property_exchange_rate' => 'float',
        'recurring_interval' => 'string',
        'recurring_start_date' => '\DateTime',
        'recurring_next_voucher' => '\DateTime',
        'recurring_last_voucher' => '\DateTime',
        'recurring_end_date' => '\DateTime',
        'enshrined' => '\DateTime',
        'tax_set' => '\OpenAPI\Client\Model\ModelVoucherUpdateTaxSet',
        'payment_deadline' => '\DateTime',
        'delivery_date' => '\DateTime',
        'delivery_date_until' => '\DateTime',
        'map_all' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'object_name' => null,
        'create' => 'date-time',
        'update' => 'date-time',
        'sev_client' => null,
        'create_user' => null,
        'voucher_date' => 'date-time',
        'supplier' => null,
        'supplier_name' => null,
        'description' => null,
        'document' => null,
        'pay_date' => 'date-time',
        'status' => null,
        'sum_net' => 'float',
        'sum_tax' => 'float',
        'sum_gross' => 'float',
        'sum_net_accounting' => 'float',
        'sum_tax_accounting' => 'float',
        'sum_gross_accounting' => 'float',
        'sum_discounts' => 'float',
        'sum_discounts_foreign_currency' => 'float',
        'paid_amount' => 'float',
        'tax_type' => null,
        'credit_debit' => null,
        'cost_centre' => null,
        'voucher_type' => null,
        'currency' => null,
        'property_foreign_currency_deadline' => 'date-time',
        'property_exchange_rate' => 'float',
        'recurring_interval' => null,
        'recurring_start_date' => 'date-time',
        'recurring_next_voucher' => 'date-time',
        'recurring_last_voucher' => 'date-time',
        'recurring_end_date' => 'date-time',
        'enshrined' => 'date-time',
        'tax_set' => null,
        'payment_deadline' => 'date-time',
        'delivery_date' => 'date-time',
        'delivery_date_until' => 'date-time',
        'map_all' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'object_name' => 'objectName',
        'create' => 'create',
        'update' => 'update',
        'sev_client' => 'sevClient',
        'create_user' => 'createUser',
        'voucher_date' => 'voucherDate',
        'supplier' => 'supplier',
        'supplier_name' => 'supplierName',
        'description' => 'description',
        'document' => 'document',
        'pay_date' => 'payDate',
        'status' => 'status',
        'sum_net' => 'sumNet',
        'sum_tax' => 'sumTax',
        'sum_gross' => 'sumGross',
        'sum_net_accounting' => 'sumNetAccounting',
        'sum_tax_accounting' => 'sumTaxAccounting',
        'sum_gross_accounting' => 'sumGrossAccounting',
        'sum_discounts' => 'sumDiscounts',
        'sum_discounts_foreign_currency' => 'sumDiscountsForeignCurrency',
        'paid_amount' => 'paidAmount',
        'tax_type' => 'taxType',
        'credit_debit' => 'creditDebit',
        'cost_centre' => 'costCentre',
        'voucher_type' => 'voucherType',
        'currency' => 'currency',
        'property_foreign_currency_deadline' => 'propertyForeignCurrencyDeadline',
        'property_exchange_rate' => 'propertyExchangeRate',
        'recurring_interval' => 'recurringInterval',
        'recurring_start_date' => 'recurringStartDate',
        'recurring_next_voucher' => 'recurringNextVoucher',
        'recurring_last_voucher' => 'recurringLastVoucher',
        'recurring_end_date' => 'recurringEndDate',
        'enshrined' => 'enshrined',
        'tax_set' => 'taxSet',
        'payment_deadline' => 'paymentDeadline',
        'delivery_date' => 'deliveryDate',
        'delivery_date_until' => 'deliveryDateUntil',
        'map_all' => 'mapAll'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'object_name' => 'setObjectName',
        'create' => 'setCreate',
        'update' => 'setUpdate',
        'sev_client' => 'setSevClient',
        'create_user' => 'setCreateUser',
        'voucher_date' => 'setVoucherDate',
        'supplier' => 'setSupplier',
        'supplier_name' => 'setSupplierName',
        'description' => 'setDescription',
        'document' => 'setDocument',
        'pay_date' => 'setPayDate',
        'status' => 'setStatus',
        'sum_net' => 'setSumNet',
        'sum_tax' => 'setSumTax',
        'sum_gross' => 'setSumGross',
        'sum_net_accounting' => 'setSumNetAccounting',
        'sum_tax_accounting' => 'setSumTaxAccounting',
        'sum_gross_accounting' => 'setSumGrossAccounting',
        'sum_discounts' => 'setSumDiscounts',
        'sum_discounts_foreign_currency' => 'setSumDiscountsForeignCurrency',
        'paid_amount' => 'setPaidAmount',
        'tax_type' => 'setTaxType',
        'credit_debit' => 'setCreditDebit',
        'cost_centre' => 'setCostCentre',
        'voucher_type' => 'setVoucherType',
        'currency' => 'setCurrency',
        'property_foreign_currency_deadline' => 'setPropertyForeignCurrencyDeadline',
        'property_exchange_rate' => 'setPropertyExchangeRate',
        'recurring_interval' => 'setRecurringInterval',
        'recurring_start_date' => 'setRecurringStartDate',
        'recurring_next_voucher' => 'setRecurringNextVoucher',
        'recurring_last_voucher' => 'setRecurringLastVoucher',
        'recurring_end_date' => 'setRecurringEndDate',
        'enshrined' => 'setEnshrined',
        'tax_set' => 'setTaxSet',
        'payment_deadline' => 'setPaymentDeadline',
        'delivery_date' => 'setDeliveryDate',
        'delivery_date_until' => 'setDeliveryDateUntil',
        'map_all' => 'setMapAll'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'object_name' => 'getObjectName',
        'create' => 'getCreate',
        'update' => 'getUpdate',
        'sev_client' => 'getSevClient',
        'create_user' => 'getCreateUser',
        'voucher_date' => 'getVoucherDate',
        'supplier' => 'getSupplier',
        'supplier_name' => 'getSupplierName',
        'description' => 'getDescription',
        'document' => 'getDocument',
        'pay_date' => 'getPayDate',
        'status' => 'getStatus',
        'sum_net' => 'getSumNet',
        'sum_tax' => 'getSumTax',
        'sum_gross' => 'getSumGross',
        'sum_net_accounting' => 'getSumNetAccounting',
        'sum_tax_accounting' => 'getSumTaxAccounting',
        'sum_gross_accounting' => 'getSumGrossAccounting',
        'sum_discounts' => 'getSumDiscounts',
        'sum_discounts_foreign_currency' => 'getSumDiscountsForeignCurrency',
        'paid_amount' => 'getPaidAmount',
        'tax_type' => 'getTaxType',
        'credit_debit' => 'getCreditDebit',
        'cost_centre' => 'getCostCentre',
        'voucher_type' => 'getVoucherType',
        'currency' => 'getCurrency',
        'property_foreign_currency_deadline' => 'getPropertyForeignCurrencyDeadline',
        'property_exchange_rate' => 'getPropertyExchangeRate',
        'recurring_interval' => 'getRecurringInterval',
        'recurring_start_date' => 'getRecurringStartDate',
        'recurring_next_voucher' => 'getRecurringNextVoucher',
        'recurring_last_voucher' => 'getRecurringLastVoucher',
        'recurring_end_date' => 'getRecurringEndDate',
        'enshrined' => 'getEnshrined',
        'tax_set' => 'getTaxSet',
        'payment_deadline' => 'getPaymentDeadline',
        'delivery_date' => 'getDeliveryDate',
        'delivery_date_until' => 'getDeliveryDateUntil',
        'map_all' => 'getMapAll'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const STATUS_50 = 50;
    const STATUS_100 = 100;
    const STATUS_1000 = 1000;
    const CREDIT_DEBIT_C = 'C';
    const CREDIT_DEBIT_D = 'D';
    const VOUCHER_TYPE_VOU = 'VOU';
    const VOUCHER_TYPE_RV = 'RV';
    const RECURRING_INTERVAL_P0_Y0_M1_W = 'P0Y0M1W';
    const RECURRING_INTERVAL_P0_Y0_M2_W = 'P0Y0M2W';
    const RECURRING_INTERVAL_P0_Y1_M0_W = 'P0Y1M0W';
    const RECURRING_INTERVAL_P0_Y3_M0_W = 'P0Y3M0W';
    const RECURRING_INTERVAL_P0_Y6_M0_W = 'P0Y6M0W';
    const RECURRING_INTERVAL_P1_Y0_M0_W = 'P1Y0M0W';
    const RECURRING_INTERVAL_P2_Y0_M0_W = 'P2Y0M0W';
    const RECURRING_INTERVAL_P3_Y0_M0_W = 'P3Y0M0W';
    const RECURRING_INTERVAL_P4_Y0_M0_W = 'P4Y0M0W';
    const RECURRING_INTERVAL_P5_Y0_M0_W = 'P5Y0M0W';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_50,
            self::STATUS_100,
            self::STATUS_1000,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCreditDebitAllowableValues()
    {
        return [
            self::CREDIT_DEBIT_C,
            self::CREDIT_DEBIT_D,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoucherTypeAllowableValues()
    {
        return [
            self::VOUCHER_TYPE_VOU,
            self::VOUCHER_TYPE_RV,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecurringIntervalAllowableValues()
    {
        return [
            self::RECURRING_INTERVAL_P0_Y0_M1_W,
            self::RECURRING_INTERVAL_P0_Y0_M2_W,
            self::RECURRING_INTERVAL_P0_Y1_M0_W,
            self::RECURRING_INTERVAL_P0_Y3_M0_W,
            self::RECURRING_INTERVAL_P0_Y6_M0_W,
            self::RECURRING_INTERVAL_P1_Y0_M0_W,
            self::RECURRING_INTERVAL_P2_Y0_M0_W,
            self::RECURRING_INTERVAL_P3_Y0_M0_W,
            self::RECURRING_INTERVAL_P4_Y0_M0_W,
            self::RECURRING_INTERVAL_P5_Y0_M0_W,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['object_name'] = $data['object_name'] ?? 'Voucher';
        $this->container['create'] = $data['create'] ?? null;
        $this->container['update'] = $data['update'] ?? null;
        $this->container['sev_client'] = $data['sev_client'] ?? null;
        $this->container['create_user'] = $data['create_user'] ?? null;
        $this->container['voucher_date'] = $data['voucher_date'] ?? null;
        $this->container['supplier'] = $data['supplier'] ?? null;
        $this->container['supplier_name'] = $data['supplier_name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['document'] = $data['document'] ?? null;
        $this->container['pay_date'] = $data['pay_date'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['sum_net'] = $data['sum_net'] ?? null;
        $this->container['sum_tax'] = $data['sum_tax'] ?? null;
        $this->container['sum_gross'] = $data['sum_gross'] ?? null;
        $this->container['sum_net_accounting'] = $data['sum_net_accounting'] ?? null;
        $this->container['sum_tax_accounting'] = $data['sum_tax_accounting'] ?? null;
        $this->container['sum_gross_accounting'] = $data['sum_gross_accounting'] ?? null;
        $this->container['sum_discounts'] = $data['sum_discounts'] ?? null;
        $this->container['sum_discounts_foreign_currency'] = $data['sum_discounts_foreign_currency'] ?? null;
        $this->container['paid_amount'] = $data['paid_amount'] ?? null;
        $this->container['tax_type'] = $data['tax_type'] ?? 'default';
        $this->container['credit_debit'] = $data['credit_debit'] ?? null;
        $this->container['cost_centre'] = $data['cost_centre'] ?? null;
        $this->container['voucher_type'] = $data['voucher_type'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['property_foreign_currency_deadline'] = $data['property_foreign_currency_deadline'] ?? null;
        $this->container['property_exchange_rate'] = $data['property_exchange_rate'] ?? null;
        $this->container['recurring_interval'] = $data['recurring_interval'] ?? null;
        $this->container['recurring_start_date'] = $data['recurring_start_date'] ?? null;
        $this->container['recurring_next_voucher'] = $data['recurring_next_voucher'] ?? null;
        $this->container['recurring_last_voucher'] = $data['recurring_last_voucher'] ?? null;
        $this->container['recurring_end_date'] = $data['recurring_end_date'] ?? null;
        $this->container['enshrined'] = $data['enshrined'] ?? null;
        $this->container['tax_set'] = $data['tax_set'] ?? null;
        $this->container['payment_deadline'] = $data['payment_deadline'] ?? null;
        $this->container['delivery_date'] = $data['delivery_date'] ?? null;
        $this->container['delivery_date_until'] = $data['delivery_date_until'] ?? null;
        $this->container['map_all'] = $data['map_all'] ?? true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['object_name'] === null) {
            $invalidProperties[] = "'object_name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tax_type'] === null) {
            $invalidProperties[] = "'tax_type' can't be null";
        }
        if ($this->container['credit_debit'] === null) {
            $invalidProperties[] = "'credit_debit' can't be null";
        }
        $allowedValues = $this->getCreditDebitAllowableValues();
        if (!is_null($this->container['credit_debit']) && !in_array($this->container['credit_debit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'credit_debit', must be one of '%s'",
                $this->container['credit_debit'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['voucher_type'] === null) {
            $invalidProperties[] = "'voucher_type' can't be null";
        }
        $allowedValues = $this->getVoucherTypeAllowableValues();
        if (!is_null($this->container['voucher_type']) && !in_array($this->container['voucher_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'voucher_type', must be one of '%s'",
                $this->container['voucher_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRecurringIntervalAllowableValues();
        if (!is_null($this->container['recurring_interval']) && !in_array($this->container['recurring_interval'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'recurring_interval', must be one of '%s'",
                $this->container['recurring_interval'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['map_all'] === null) {
            $invalidProperties[] = "'map_all' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The voucher id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object_name
     *
     * @return string
     */
    public function getObjectName()
    {
        return $this->container['object_name'];
    }

    /**
     * Sets object_name
     *
     * @param string $object_name object_name
     *
     * @return self
     */
    public function setObjectName($object_name)
    {
        $this->container['object_name'] = $object_name;

        return $this;
    }

    /**
     * Gets create
     *
     * @return \DateTime|null
     */
    public function getCreate()
    {
        return $this->container['create'];
    }

    /**
     * Sets create
     *
     * @param \DateTime|null $create Date of voucher creation
     *
     * @return self
     */
    public function setCreate($create)
    {
        $this->container['create'] = $create;

        return $this;
    }

    /**
     * Gets update
     *
     * @return \DateTime|null
     */
    public function getUpdate()
    {
        return $this->container['update'];
    }

    /**
     * Sets update
     *
     * @param \DateTime|null $update Date of last voucher update
     *
     * @return self
     */
    public function setUpdate($update)
    {
        $this->container['update'] = $update;

        return $this;
    }

    /**
     * Gets sev_client
     *
     * @return \OpenAPI\Client\Model\ModelVoucherUpdateSevClient|null
     */
    public function getSevClient()
    {
        return $this->container['sev_client'];
    }

    /**
     * Sets sev_client
     *
     * @param \OpenAPI\Client\Model\ModelVoucherUpdateSevClient|null $sev_client sev_client
     *
     * @return self
     */
    public function setSevClient($sev_client)
    {
        $this->container['sev_client'] = $sev_client;

        return $this;
    }

    /**
     * Gets create_user
     *
     * @return \OpenAPI\Client\Model\ModelVoucherUpdateCreateUser|null
     */
    public function getCreateUser()
    {
        return $this->container['create_user'];
    }

    /**
     * Sets create_user
     *
     * @param \OpenAPI\Client\Model\ModelVoucherUpdateCreateUser|null $create_user create_user
     *
     * @return self
     */
    public function setCreateUser($create_user)
    {
        $this->container['create_user'] = $create_user;

        return $this;
    }

    /**
     * Gets voucher_date
     *
     * @return \DateTime|null
     */
    public function getVoucherDate()
    {
        return $this->container['voucher_date'];
    }

    /**
     * Sets voucher_date
     *
     * @param \DateTime|null $voucher_date Needs to be provided as timestamp or dd.mm.yyyy
     *
     * @return self
     */
    public function setVoucherDate($voucher_date)
    {
        $this->container['voucher_date'] = $voucher_date;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return \OpenAPI\Client\Model\ModelVoucherUpdateSupplier|null
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param \OpenAPI\Client\Model\ModelVoucherUpdateSupplier|null $supplier supplier
     *
     * @return self
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets supplier_name
     *
     * @return string|null
     */
    public function getSupplierName()
    {
        return $this->container['supplier_name'];
    }

    /**
     * Sets supplier_name
     *
     * @param string|null $supplier_name The supplier name.<br>       The value you provide here will determine what supplier name is shown for the voucher in case you did not provide a supplier.
     *
     * @return self
     */
    public function setSupplierName($supplier_name)
    {
        $this->container['supplier_name'] = $supplier_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the voucher. Essentially the voucher number.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets document
     *
     * @return \OpenAPI\Client\Model\ModelVoucherUpdateDocument|null
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param \OpenAPI\Client\Model\ModelVoucherUpdateDocument|null $document document
     *
     * @return self
     */
    public function setDocument($document)
    {
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets pay_date
     *
     * @return \DateTime|null
     */
    public function getPayDate()
    {
        return $this->container['pay_date'];
    }

    /**
     * Sets pay_date
     *
     * @param \DateTime|null $pay_date Needs to be timestamp or dd.mm.yyyy
     *
     * @return self
     */
    public function setPayDate($pay_date)
    {
        $this->container['pay_date'] = $pay_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return float
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param float $status Please have a look in       <a href='https://api.sevdesk.de/#section/Types-and-status-of-vouchers'>status of vouchers</a>      to see what the different status codes mean
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets sum_net
     *
     * @return float|null
     */
    public function getSumNet()
    {
        return $this->container['sum_net'];
    }

    /**
     * Sets sum_net
     *
     * @param float|null $sum_net Net sum of the voucher
     *
     * @return self
     */
    public function setSumNet($sum_net)
    {
        $this->container['sum_net'] = $sum_net;

        return $this;
    }

    /**
     * Gets sum_tax
     *
     * @return float|null
     */
    public function getSumTax()
    {
        return $this->container['sum_tax'];
    }

    /**
     * Sets sum_tax
     *
     * @param float|null $sum_tax Tax sum of the voucher
     *
     * @return self
     */
    public function setSumTax($sum_tax)
    {
        $this->container['sum_tax'] = $sum_tax;

        return $this;
    }

    /**
     * Gets sum_gross
     *
     * @return float|null
     */
    public function getSumGross()
    {
        return $this->container['sum_gross'];
    }

    /**
     * Sets sum_gross
     *
     * @param float|null $sum_gross Gross sum of the voucher
     *
     * @return self
     */
    public function setSumGross($sum_gross)
    {
        $this->container['sum_gross'] = $sum_gross;

        return $this;
    }

    /**
     * Gets sum_net_accounting
     *
     * @return float|null
     */
    public function getSumNetAccounting()
    {
        return $this->container['sum_net_accounting'];
    }

    /**
     * Sets sum_net_accounting
     *
     * @param float|null $sum_net_accounting Net accounting sum of the voucher. Is usually the same as sumNet
     *
     * @return self
     */
    public function setSumNetAccounting($sum_net_accounting)
    {
        $this->container['sum_net_accounting'] = $sum_net_accounting;

        return $this;
    }

    /**
     * Gets sum_tax_accounting
     *
     * @return float|null
     */
    public function getSumTaxAccounting()
    {
        return $this->container['sum_tax_accounting'];
    }

    /**
     * Sets sum_tax_accounting
     *
     * @param float|null $sum_tax_accounting Tax accounting sum of the voucher. Is usually the same as sumTax
     *
     * @return self
     */
    public function setSumTaxAccounting($sum_tax_accounting)
    {
        $this->container['sum_tax_accounting'] = $sum_tax_accounting;

        return $this;
    }

    /**
     * Gets sum_gross_accounting
     *
     * @return float|null
     */
    public function getSumGrossAccounting()
    {
        return $this->container['sum_gross_accounting'];
    }

    /**
     * Sets sum_gross_accounting
     *
     * @param float|null $sum_gross_accounting Gross accounting sum of the voucher. Is usually the same as sumGross
     *
     * @return self
     */
    public function setSumGrossAccounting($sum_gross_accounting)
    {
        $this->container['sum_gross_accounting'] = $sum_gross_accounting;

        return $this;
    }

    /**
     * Gets sum_discounts
     *
     * @return float|null
     */
    public function getSumDiscounts()
    {
        return $this->container['sum_discounts'];
    }

    /**
     * Sets sum_discounts
     *
     * @param float|null $sum_discounts Sum of all discounts in the voucher
     *
     * @return self
     */
    public function setSumDiscounts($sum_discounts)
    {
        $this->container['sum_discounts'] = $sum_discounts;

        return $this;
    }

    /**
     * Gets sum_discounts_foreign_currency
     *
     * @return float|null
     */
    public function getSumDiscountsForeignCurrency()
    {
        return $this->container['sum_discounts_foreign_currency'];
    }

    /**
     * Sets sum_discounts_foreign_currency
     *
     * @param float|null $sum_discounts_foreign_currency Discounts sum of the voucher in the foreign currency
     *
     * @return self
     */
    public function setSumDiscountsForeignCurrency($sum_discounts_foreign_currency)
    {
        $this->container['sum_discounts_foreign_currency'] = $sum_discounts_foreign_currency;

        return $this;
    }

    /**
     * Gets paid_amount
     *
     * @return float|null
     */
    public function getPaidAmount()
    {
        return $this->container['paid_amount'];
    }

    /**
     * Sets paid_amount
     *
     * @param float|null $paid_amount Amount which has already been paid for this voucher by the customer
     *
     * @return self
     */
    public function setPaidAmount($paid_amount)
    {
        $this->container['paid_amount'] = $paid_amount;

        return $this;
    }

    /**
     * Gets tax_type
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string $tax_type Tax type of the voucher. There are four tax types: 1. default - Umsatzsteuer ausweisen 2. eu - Steuerfreie innergemeinschaftliche Lieferung (Europäische Union) 3. noteu - Steuerschuldnerschaft des Leistungsempfängers (außerhalb EU, z. B. Schweiz) 4. custom - Using custom tax set Tax rates are heavily connected to the tax type used.
     *
     * @return self
     */
    public function setTaxType($tax_type)
    {
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets credit_debit
     *
     * @return string
     */
    public function getCreditDebit()
    {
        return $this->container['credit_debit'];
    }

    /**
     * Sets credit_debit
     *
     * @param string $credit_debit Defines if your voucher is a credit (C) or debit (D)
     *
     * @return self
     */
    public function setCreditDebit($credit_debit)
    {
        $allowedValues = $this->getCreditDebitAllowableValues();
        if (!in_array($credit_debit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'credit_debit', must be one of '%s'",
                    $credit_debit,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['credit_debit'] = $credit_debit;

        return $this;
    }

    /**
     * Gets cost_centre
     *
     * @return \OpenAPI\Client\Model\ModelVoucherCostCentre|null
     */
    public function getCostCentre()
    {
        return $this->container['cost_centre'];
    }

    /**
     * Sets cost_centre
     *
     * @param \OpenAPI\Client\Model\ModelVoucherCostCentre|null $cost_centre cost_centre
     *
     * @return self
     */
    public function setCostCentre($cost_centre)
    {
        $this->container['cost_centre'] = $cost_centre;

        return $this;
    }

    /**
     * Gets voucher_type
     *
     * @return string
     */
    public function getVoucherType()
    {
        return $this->container['voucher_type'];
    }

    /**
     * Sets voucher_type
     *
     * @param string $voucher_type Type of the voucher. For more information on the different types, check       <a href='https://api.sevdesk.de/#section/Types-and-status-of-vouchers'>this</a>
     *
     * @return self
     */
    public function setVoucherType($voucher_type)
    {
        $allowedValues = $this->getVoucherTypeAllowableValues();
        if (!in_array($voucher_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'voucher_type', must be one of '%s'",
                    $voucher_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voucher_type'] = $voucher_type;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency specifies which currency the voucher should have. Attention: If the currency differs from the default currency stored in the account, then either the \"propertyForeignCurrencyDeadline\" or \"propertyExchangeRate\" parameter must be specified. If both parameters are specified, then the \"propertyForeignCurrencyDeadline\" parameter is preferred
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets property_foreign_currency_deadline
     *
     * @return \DateTime|null
     */
    public function getPropertyForeignCurrencyDeadline()
    {
        return $this->container['property_foreign_currency_deadline'];
    }

    /**
     * Sets property_foreign_currency_deadline
     *
     * @param \DateTime|null $property_foreign_currency_deadline Defines the exchange rate day and and then the exchange rate is set from sevDesk. Needs to be provided as timestamp or dd.mm.yyyy
     *
     * @return self
     */
    public function setPropertyForeignCurrencyDeadline($property_foreign_currency_deadline)
    {
        $this->container['property_foreign_currency_deadline'] = $property_foreign_currency_deadline;

        return $this;
    }

    /**
     * Gets property_exchange_rate
     *
     * @return float|null
     */
    public function getPropertyExchangeRate()
    {
        return $this->container['property_exchange_rate'];
    }

    /**
     * Sets property_exchange_rate
     *
     * @param float|null $property_exchange_rate Defines the exchange rate
     *
     * @return self
     */
    public function setPropertyExchangeRate($property_exchange_rate)
    {
        $this->container['property_exchange_rate'] = $property_exchange_rate;

        return $this;
    }

    /**
     * Gets recurring_interval
     *
     * @return string|null
     */
    public function getRecurringInterval()
    {
        return $this->container['recurring_interval'];
    }

    /**
     * Sets recurring_interval
     *
     * @param string|null $recurring_interval The DateInterval in which recurring vouchers are generated.<br>       Necessary attribute for all recurring vouchers.
     *
     * @return self
     */
    public function setRecurringInterval($recurring_interval)
    {
        $allowedValues = $this->getRecurringIntervalAllowableValues();
        if (!is_null($recurring_interval) && !in_array($recurring_interval, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'recurring_interval', must be one of '%s'",
                    $recurring_interval,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurring_interval'] = $recurring_interval;

        return $this;
    }

    /**
     * Gets recurring_start_date
     *
     * @return \DateTime|null
     */
    public function getRecurringStartDate()
    {
        return $this->container['recurring_start_date'];
    }

    /**
     * Sets recurring_start_date
     *
     * @param \DateTime|null $recurring_start_date The date when the recurring vouchers start being generated.<br>       Necessary attribute for all recurring vouchers.
     *
     * @return self
     */
    public function setRecurringStartDate($recurring_start_date)
    {
        $this->container['recurring_start_date'] = $recurring_start_date;

        return $this;
    }

    /**
     * Gets recurring_next_voucher
     *
     * @return \DateTime|null
     */
    public function getRecurringNextVoucher()
    {
        return $this->container['recurring_next_voucher'];
    }

    /**
     * Sets recurring_next_voucher
     *
     * @param \DateTime|null $recurring_next_voucher The date when the next voucher should be generated.<br>       Necessary attribute for all recurring vouchers.
     *
     * @return self
     */
    public function setRecurringNextVoucher($recurring_next_voucher)
    {
        $this->container['recurring_next_voucher'] = $recurring_next_voucher;

        return $this;
    }

    /**
     * Gets recurring_last_voucher
     *
     * @return \DateTime|null
     */
    public function getRecurringLastVoucher()
    {
        return $this->container['recurring_last_voucher'];
    }

    /**
     * Sets recurring_last_voucher
     *
     * @param \DateTime|null $recurring_last_voucher The date when the last voucher was generated.
     *
     * @return self
     */
    public function setRecurringLastVoucher($recurring_last_voucher)
    {
        $this->container['recurring_last_voucher'] = $recurring_last_voucher;

        return $this;
    }

    /**
     * Gets recurring_end_date
     *
     * @return \DateTime|null
     */
    public function getRecurringEndDate()
    {
        return $this->container['recurring_end_date'];
    }

    /**
     * Sets recurring_end_date
     *
     * @param \DateTime|null $recurring_end_date The date when the recurring vouchers end being generated.<br>      Necessary attribute for all recurring vouchers.
     *
     * @return self
     */
    public function setRecurringEndDate($recurring_end_date)
    {
        $this->container['recurring_end_date'] = $recurring_end_date;

        return $this;
    }

    /**
     * Gets enshrined
     *
     * @return \DateTime|null
     */
    public function getEnshrined()
    {
        return $this->container['enshrined'];
    }

    /**
     * Sets enshrined
     *
     * @param \DateTime|null $enshrined Defines if and when voucher was enshrined. Enshrined vouchers can not be manipulated.
     *
     * @return self
     */
    public function setEnshrined($enshrined)
    {
        $this->container['enshrined'] = $enshrined;

        return $this;
    }

    /**
     * Gets tax_set
     *
     * @return \OpenAPI\Client\Model\ModelVoucherUpdateTaxSet|null
     */
    public function getTaxSet()
    {
        return $this->container['tax_set'];
    }

    /**
     * Sets tax_set
     *
     * @param \OpenAPI\Client\Model\ModelVoucherUpdateTaxSet|null $tax_set tax_set
     *
     * @return self
     */
    public function setTaxSet($tax_set)
    {
        $this->container['tax_set'] = $tax_set;

        return $this;
    }

    /**
     * Gets payment_deadline
     *
     * @return \DateTime|null
     */
    public function getPaymentDeadline()
    {
        return $this->container['payment_deadline'];
    }

    /**
     * Sets payment_deadline
     *
     * @param \DateTime|null $payment_deadline Payment deadline of the voucher.
     *
     * @return self
     */
    public function setPaymentDeadline($payment_deadline)
    {
        $this->container['payment_deadline'] = $payment_deadline;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return \DateTime|null
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param \DateTime|null $delivery_date Needs to be provided as timestamp or dd.mm.yyyy
     *
     * @return self
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets delivery_date_until
     *
     * @return \DateTime|null
     */
    public function getDeliveryDateUntil()
    {
        return $this->container['delivery_date_until'];
    }

    /**
     * Sets delivery_date_until
     *
     * @param \DateTime|null $delivery_date_until Needs to be provided as timestamp or dd.mm.yyyy
     *
     * @return self
     */
    public function setDeliveryDateUntil($delivery_date_until)
    {
        $this->container['delivery_date_until'] = $delivery_date_until;

        return $this;
    }

    /**
     * Gets map_all
     *
     * @return bool
     */
    public function getMapAll()
    {
        return $this->container['map_all'];
    }

    /**
     * Sets map_all
     *
     * @param bool $map_all map_all
     *
     * @return self
     */
    public function setMapAll($map_all)
    {
        $this->container['map_all'] = $map_all;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


