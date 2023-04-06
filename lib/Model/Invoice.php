<?php
/**
 * Invoice
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wisenet Api
 *
 * # Introduction Welcome to Wisenet’s API documentation. The instructions will assist you in how to best use the API. Our API is RESTful and designed to simplify the integration between your 3rd party applications and Wisenet. Because the API taps into our workflow automation, it reduces the need for developers to build complex integrations that generates documents, sends emails or creates tasks. We recommend using a test environment when developing an integration with the API. The API is only available on specific Wisenet licenses. Please contact us if you require access.         # Authentication An API key is required to make an authorised request with the Wisenet API. We recommend using Postman for testing your API development.    - API keys can be generated from within Wisenet LRM > Settings by a Portal Admin user that has the API license enabled. [See instructions](https://learn.wisenet.co/how-to-generate-an-api-key/)    - You must add the API key as an ‘x-api-key’ header in requests to the API.    - Configure ‘Content-Type’ key with corresponding value ‘application/json’ in the header for POST, PUT and PATCH requests.     # Usage Limits Usage limits are designed to reduce excess usage of the API and to encourage more efficient usage. A response of 429: Too Many Requests, will be returned if the limit is reached. The API Usage Limits are:   - Basic Usage Plan: 1000 per day   - Full Usage Plan: 10000 per day # Rate Limiting Rate limiting is designed to prevent individual API users spiking our services. The limit is per API key. A response of 429: Too Many Requests, will be returned if the limit is reached. The API Rate Limits are:   - Basic Usage Plan: 10 requests per second   - Full Usage Plan: 10 requests per second # Paging Paging is implemented within most of our endpoints to control the number of records returned. We have limited the result set to contain up to 1000 records. Combos do not have paging. It is encouraged to use paging to prevent missing records. This is achieved using skip and take parameters. Append the following to an endpoint ?skip={SkipRecordCount}&take={TakeRecordCount}     # Filtering Most filtering will use simple equals syntax (=) such as https://api.wisenet.co/v1/course-enrolments?courseOfferIdFilter={CourseOfferID}    Some field filtering however can be implemented as a query parameter depending on your requirements. The operators available are:   - Greater Than (=gt:)   - Lesser Than (=lt:)   - Greater Than Or Equal (=ge:)   - Lesser Than Or Equal (=le:)   - Equal (=eq:)   - Not Equal (=ne:)   - Between (=bt:)   - In (=in:)   - Not In (=ni:)   - Contains (=ct:)   - Not Contains (=nc:)  For example: To get all course enrolments with the last modified timestamp greater than 02 November 2018 10:15AM  https://api.wisenet.co/v1/course-enrolments?lastModifiedTimeStampFilter=gt:2018-11-02T10:15:00.000  # PATCH The PATCH endpoint allows patching of individual fields. When calling the endpoint provide a list of patch operations you want to be performed.   Each patch operation consists of the following:   - op = Which operation you want to be performed on the field. This is usually set to \"replace\".   - path = Path to the field in model's Data section including all nested nodes. Note that only fields under Data section of the model can be modified.   - value = The value to update the field with. Note the format requirements for the selected field.  Example: Replace the IsActive field in LearnersAU endpoint to False. ``` [   {     \"op\": \"replace\",     \"path\": \"Personal/IsActive\",     \"value\": false   } ] ```  # Formatting Each field has a datatype and information regarding allowable values. You can see this by expanding the responses 200 ok section for any endpoint. There you will find the response schema data array.  Special notes:  Mobile number - It is best to supply an international format if possible as this ensures that it is SMS ready. E.g. in Australia \"+61412345678\"  # Documents and Files A document can be attached to a Filenote by performing the following the steps below. The maximum size for a file is 10MB. The file name must contain a file extension. The file size must be greater than zero.      1. Use the [document-file](#tag/DocumentFile) endpoint to return a DocumentId and a DocumentPreSignedUrl.    2. Use the DocumentPreSignedUrl returned from step 1 to upload the actual file. An example request is as follows:      ```       curl -X PUT \"<Insert DocumentPreSignedUrl>\" -H \"content-length: <Insert content-length>\" --data-binary \"<path to file eg. @path/to/filename.txt>\"      ```   3. Use the retrieved DocumentId to link the Document to the Filenote using the [Filenote](#tag/Filenote) endpoint.  A document can be downloaded from a Filenote by performing the following steps:    1. Use the relevant [Filenote](#tag/Filenote) endpoint to retrieve the DocumentId to download      2. Use the [document-file](#tag/DocumentFile) endpoint to return a DocumentUrl to download the file.    3. Download the file using the DocumentUrl returned from step 2 using a standard GET request or from a browser such as Chrome or Firefox etc.  # SDKs [View and download](https://www.myget.org/gallery/wisenet-public) Wisenet SDKs.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.42
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Phwebs\Wisenet\Model;

use \ArrayAccess;
use \Phwebs\Wisenet\ObjectSerializer;

/**
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoice_id' => 'string',
'learner_id' => 'int',
'invoice_number' => 'string',
'invoice_reference' => 'string',
'source_app_key' => 'string',
'status' => 'string',
'date' => '\DateTime',
'due_date' => '\DateTime',
'line_items' => '\Phwebs\Wisenet\Model\LineItem[]',
'amount_total' => 'double',
'update_date_utc' => '\DateTime',
'payments' => '\Phwebs\Wisenet\Model\Payment[]',
'amount_due' => 'double',
'amount_paid' => 'double',
'amount_credited' => 'double'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoice_id' => null,
'learner_id' => 'int32',
'invoice_number' => null,
'invoice_reference' => null,
'source_app_key' => null,
'status' => null,
'date' => 'date-time',
'due_date' => 'date-time',
'line_items' => null,
'amount_total' => 'double',
'update_date_utc' => 'date-time',
'payments' => null,
'amount_due' => 'double',
'amount_paid' => 'double',
'amount_credited' => 'double'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'invoice_id' => 'InvoiceId',
'learner_id' => 'LearnerId',
'invoice_number' => 'InvoiceNumber',
'invoice_reference' => 'InvoiceReference',
'source_app_key' => 'SourceAppKey',
'status' => 'Status',
'date' => 'Date',
'due_date' => 'DueDate',
'line_items' => 'LineItems',
'amount_total' => 'AmountTotal',
'update_date_utc' => 'UpdateDateUtc',
'payments' => 'Payments',
'amount_due' => 'AmountDue',
'amount_paid' => 'AmountPaid',
'amount_credited' => 'AmountCredited'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_id' => 'setInvoiceId',
'learner_id' => 'setLearnerId',
'invoice_number' => 'setInvoiceNumber',
'invoice_reference' => 'setInvoiceReference',
'source_app_key' => 'setSourceAppKey',
'status' => 'setStatus',
'date' => 'setDate',
'due_date' => 'setDueDate',
'line_items' => 'setLineItems',
'amount_total' => 'setAmountTotal',
'update_date_utc' => 'setUpdateDateUtc',
'payments' => 'setPayments',
'amount_due' => 'setAmountDue',
'amount_paid' => 'setAmountPaid',
'amount_credited' => 'setAmountCredited'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_id' => 'getInvoiceId',
'learner_id' => 'getLearnerId',
'invoice_number' => 'getInvoiceNumber',
'invoice_reference' => 'getInvoiceReference',
'source_app_key' => 'getSourceAppKey',
'status' => 'getStatus',
'date' => 'getDate',
'due_date' => 'getDueDate',
'line_items' => 'getLineItems',
'amount_total' => 'getAmountTotal',
'update_date_utc' => 'getUpdateDateUtc',
'payments' => 'getPayments',
'amount_due' => 'getAmountDue',
'amount_paid' => 'getAmountPaid',
'amount_credited' => 'getAmountCredited'    ];

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
        return self::$swaggerModelName;
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
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['learner_id'] = isset($data['learner_id']) ? $data['learner_id'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['invoice_reference'] = isset($data['invoice_reference']) ? $data['invoice_reference'] : null;
        $this->container['source_app_key'] = isset($data['source_app_key']) ? $data['source_app_key'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['amount_total'] = isset($data['amount_total']) ? $data['amount_total'] : null;
        $this->container['update_date_utc'] = isset($data['update_date_utc']) ? $data['update_date_utc'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
        $this->container['amount_due'] = isset($data['amount_due']) ? $data['amount_due'] : null;
        $this->container['amount_paid'] = isset($data['amount_paid']) ? $data['amount_paid'] : null;
        $this->container['amount_credited'] = isset($data['amount_credited']) ? $data['amount_credited'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets invoice_id
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string $invoice_id invoice_id
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets learner_id
     *
     * @return int
     */
    public function getLearnerId()
    {
        return $this->container['learner_id'];
    }

    /**
     * Sets learner_id
     *
     * @param int $learner_id learner_id
     *
     * @return $this
     */
    public function setLearnerId($learner_id)
    {
        $this->container['learner_id'] = $learner_id;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_reference
     *
     * @return string
     */
    public function getInvoiceReference()
    {
        return $this->container['invoice_reference'];
    }

    /**
     * Sets invoice_reference
     *
     * @param string $invoice_reference invoice_reference
     *
     * @return $this
     */
    public function setInvoiceReference($invoice_reference)
    {
        $this->container['invoice_reference'] = $invoice_reference;

        return $this;
    }

    /**
     * Gets source_app_key
     *
     * @return string
     */
    public function getSourceAppKey()
    {
        return $this->container['source_app_key'];
    }

    /**
     * Sets source_app_key
     *
     * @param string $source_app_key source_app_key
     *
     * @return $this
     */
    public function setSourceAppKey($source_app_key)
    {
        $this->container['source_app_key'] = $source_app_key;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Phwebs\Wisenet\Model\LineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Phwebs\Wisenet\Model\LineItem[] $line_items line_items
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets amount_total
     *
     * @return double
     */
    public function getAmountTotal()
    {
        return $this->container['amount_total'];
    }

    /**
     * Sets amount_total
     *
     * @param double $amount_total amount_total
     *
     * @return $this
     */
    public function setAmountTotal($amount_total)
    {
        $this->container['amount_total'] = $amount_total;

        return $this;
    }

    /**
     * Gets update_date_utc
     *
     * @return \DateTime
     */
    public function getUpdateDateUtc()
    {
        return $this->container['update_date_utc'];
    }

    /**
     * Sets update_date_utc
     *
     * @param \DateTime $update_date_utc update_date_utc
     *
     * @return $this
     */
    public function setUpdateDateUtc($update_date_utc)
    {
        $this->container['update_date_utc'] = $update_date_utc;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \Phwebs\Wisenet\Model\Payment[]
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Phwebs\Wisenet\Model\Payment[] $payments payments
     *
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets amount_due
     *
     * @return double
     */
    public function getAmountDue()
    {
        return $this->container['amount_due'];
    }

    /**
     * Sets amount_due
     *
     * @param double $amount_due amount_due
     *
     * @return $this
     */
    public function setAmountDue($amount_due)
    {
        $this->container['amount_due'] = $amount_due;

        return $this;
    }

    /**
     * Gets amount_paid
     *
     * @return double
     */
    public function getAmountPaid()
    {
        return $this->container['amount_paid'];
    }

    /**
     * Sets amount_paid
     *
     * @param double $amount_paid amount_paid
     *
     * @return $this
     */
    public function setAmountPaid($amount_paid)
    {
        $this->container['amount_paid'] = $amount_paid;

        return $this;
    }

    /**
     * Gets amount_credited
     *
     * @return double
     */
    public function getAmountCredited()
    {
        return $this->container['amount_credited'];
    }

    /**
     * Sets amount_credited
     *
     * @param double $amount_credited amount_credited
     *
     * @return $this
     */
    public function setAmountCredited($amount_credited)
    {
        $this->container['amount_credited'] = $amount_credited;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
