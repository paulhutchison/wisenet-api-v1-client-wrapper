<?php
/**
 * Checklist
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
 * Checklist Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Checklist implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Checklist';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'checklist_id' => 'int',
'checklist_item_id' => 'int',
'entity_name' => 'string',
'record_id' => 'int',
'date_due' => '\DateTime',
'date_completed' => '\DateTime',
'completed_flag' => 'bool',
'staff_name' => 'string',
'notes' => 'string',
'amount' => 'double',
'tax_exempt_flag' => 'bool',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'checklist_id' => 'int32',
'checklist_item_id' => 'int32',
'entity_name' => null,
'record_id' => 'int32',
'date_due' => 'date-time',
'date_completed' => 'date-time',
'completed_flag' => null,
'staff_name' => null,
'notes' => null,
'amount' => 'double',
'tax_exempt_flag' => null,
'last_modified_time_stamp' => 'date-time'    ];

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
        'checklist_id' => 'ChecklistId',
'checklist_item_id' => 'ChecklistItemId',
'entity_name' => 'EntityName',
'record_id' => 'RecordId',
'date_due' => 'DateDue',
'date_completed' => 'DateCompleted',
'completed_flag' => 'CompletedFlag',
'staff_name' => 'StaffName',
'notes' => 'Notes',
'amount' => 'Amount',
'tax_exempt_flag' => 'TaxExemptFlag',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checklist_id' => 'setChecklistId',
'checklist_item_id' => 'setChecklistItemId',
'entity_name' => 'setEntityName',
'record_id' => 'setRecordId',
'date_due' => 'setDateDue',
'date_completed' => 'setDateCompleted',
'completed_flag' => 'setCompletedFlag',
'staff_name' => 'setStaffName',
'notes' => 'setNotes',
'amount' => 'setAmount',
'tax_exempt_flag' => 'setTaxExemptFlag',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checklist_id' => 'getChecklistId',
'checklist_item_id' => 'getChecklistItemId',
'entity_name' => 'getEntityName',
'record_id' => 'getRecordId',
'date_due' => 'getDateDue',
'date_completed' => 'getDateCompleted',
'completed_flag' => 'getCompletedFlag',
'staff_name' => 'getStaffName',
'notes' => 'getNotes',
'amount' => 'getAmount',
'tax_exempt_flag' => 'getTaxExemptFlag',
'last_modified_time_stamp' => 'getLastModifiedTimeStamp'    ];

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
        $this->container['checklist_id'] = isset($data['checklist_id']) ? $data['checklist_id'] : null;
        $this->container['checklist_item_id'] = isset($data['checklist_item_id']) ? $data['checklist_item_id'] : null;
        $this->container['entity_name'] = isset($data['entity_name']) ? $data['entity_name'] : null;
        $this->container['record_id'] = isset($data['record_id']) ? $data['record_id'] : null;
        $this->container['date_due'] = isset($data['date_due']) ? $data['date_due'] : null;
        $this->container['date_completed'] = isset($data['date_completed']) ? $data['date_completed'] : null;
        $this->container['completed_flag'] = isset($data['completed_flag']) ? $data['completed_flag'] : null;
        $this->container['staff_name'] = isset($data['staff_name']) ? $data['staff_name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['tax_exempt_flag'] = isset($data['tax_exempt_flag']) ? $data['tax_exempt_flag'] : null;
        $this->container['last_modified_time_stamp'] = isset($data['last_modified_time_stamp']) ? $data['last_modified_time_stamp'] : null;
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
     * Gets checklist_id
     *
     * @return int
     */
    public function getChecklistId()
    {
        return $this->container['checklist_id'];
    }

    /**
     * Sets checklist_id
     *
     * @param int $checklist_id Primary Id for checklist that is auto generated
     *
     * @return $this
     */
    public function setChecklistId($checklist_id)
    {
        $this->container['checklist_id'] = $checklist_id;

        return $this;
    }

    /**
     * Gets checklist_item_id
     *
     * @return int
     */
    public function getChecklistItemId()
    {
        return $this->container['checklist_item_id'];
    }

    /**
     * Sets checklist_item_id
     *
     * @param int $checklist_item_id Associated Checklist Item Id
     *
     * @return $this
     */
    public function setChecklistItemId($checklist_item_id)
    {
        $this->container['checklist_item_id'] = $checklist_item_id;

        return $this;
    }

    /**
     * Gets entity_name
     *
     * @return string
     */
    public function getEntityName()
    {
        return $this->container['entity_name'];
    }

    /**
     * Sets entity_name
     *
     * @param string $entity_name See entity Entities
     *
     * @return $this
     */
    public function setEntityName($entity_name)
    {
        $this->container['entity_name'] = $entity_name;

        return $this;
    }

    /**
     * Gets record_id
     *
     * @return int
     */
    public function getRecordId()
    {
        return $this->container['record_id'];
    }

    /**
     * Sets record_id
     *
     * @param int $record_id The RecordId for the EntityName. E.g. The LearnerId if EntityName = Learner.
     *
     * @return $this
     */
    public function setRecordId($record_id)
    {
        $this->container['record_id'] = $record_id;

        return $this;
    }

    /**
     * Gets date_due
     *
     * @return \DateTime
     */
    public function getDateDue()
    {
        return $this->container['date_due'];
    }

    /**
     * Sets date_due
     *
     * @param \DateTime $date_due The due date for the checklist
     *
     * @return $this
     */
    public function setDateDue($date_due)
    {
        $this->container['date_due'] = $date_due;

        return $this;
    }

    /**
     * Gets date_completed
     *
     * @return \DateTime
     */
    public function getDateCompleted()
    {
        return $this->container['date_completed'];
    }

    /**
     * Sets date_completed
     *
     * @param \DateTime $date_completed The date checklist was completed
     *
     * @return $this
     */
    public function setDateCompleted($date_completed)
    {
        $this->container['date_completed'] = $date_completed;

        return $this;
    }

    /**
     * Gets completed_flag
     *
     * @return bool
     */
    public function getCompletedFlag()
    {
        return $this->container['completed_flag'];
    }

    /**
     * Sets completed_flag
     *
     * @param bool $completed_flag To indicate if the checklist has been completed or not
     *
     * @return $this
     */
    public function setCompletedFlag($completed_flag)
    {
        $this->container['completed_flag'] = $completed_flag;

        return $this;
    }

    /**
     * Gets staff_name
     *
     * @return string
     */
    public function getStaffName()
    {
        return $this->container['staff_name'];
    }

    /**
     * Sets staff_name
     *
     * @param string $staff_name Free text field for staff name associated with checklist
     *
     * @return $this
     */
    public function setStaffName($staff_name)
    {
        $this->container['staff_name'] = $staff_name;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Notes for checklist
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Checklist amount used for dollars
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets tax_exempt_flag
     *
     * @return bool
     */
    public function getTaxExemptFlag()
    {
        return $this->container['tax_exempt_flag'];
    }

    /**
     * Sets tax_exempt_flag
     *
     * @param bool $tax_exempt_flag To indicate if the checklist amount is tax exempt or not
     *
     * @return $this
     */
    public function setTaxExemptFlag($tax_exempt_flag)
    {
        $this->container['tax_exempt_flag'] = $tax_exempt_flag;

        return $this;
    }

    /**
     * Gets last_modified_time_stamp
     *
     * @return \DateTime
     */
    public function getLastModifiedTimeStamp()
    {
        return $this->container['last_modified_time_stamp'];
    }

    /**
     * Sets last_modified_time_stamp
     *
     * @param \DateTime $last_modified_time_stamp Date when the checklist was last modified
     *
     * @return $this
     */
    public function setLastModifiedTimeStamp($last_modified_time_stamp)
    {
        $this->container['last_modified_time_stamp'] = $last_modified_time_stamp;

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
