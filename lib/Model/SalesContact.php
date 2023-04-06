<?php
/**
 * SalesContact
 *
 * PHP version 5
 *
 * @category Class
 * @package  Phwebs\Wisenet
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
 * SalesContact Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesContact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sales_contact_id' => 'int',
'sales_contact_guid' => 'string',
'first_name' => 'string',
'last_name' => 'string',
'email' => 'string',
'mobile' => 'string',
'phone' => 'string',
'position' => 'string',
'company' => 'string',
'owner_id' => 'int',
'sales_contact_stage_id' => 'int',
'sales_contact_type_id' => 'int',
'notes' => 'string',
'sales_contact_relationships' => '\Phwebs\Wisenet\Model\SalesContactRelationship[]',
'created_on' => '\DateTime',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sales_contact_id' => 'int32',
'sales_contact_guid' => 'uuid',
'first_name' => '50',
'last_name' => '50',
'email' => '80',
'mobile' => '20',
'phone' => '15',
'position' => '100',
'company' => '100',
'owner_id' => 'int32',
'sales_contact_stage_id' => 'int32',
'sales_contact_type_id' => 'int32',
'notes' => '1000',
'sales_contact_relationships' => null,
'created_on' => 'date-time',
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
        'sales_contact_id' => 'SalesContactId',
'sales_contact_guid' => 'SalesContactGuid',
'first_name' => 'FirstName',
'last_name' => 'LastName',
'email' => 'Email',
'mobile' => 'Mobile',
'phone' => 'Phone',
'position' => 'Position',
'company' => 'Company',
'owner_id' => 'OwnerId',
'sales_contact_stage_id' => 'SalesContactStageId',
'sales_contact_type_id' => 'SalesContactTypeId',
'notes' => 'Notes',
'sales_contact_relationships' => 'SalesContactRelationships',
'created_on' => 'CreatedOn',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales_contact_id' => 'setSalesContactId',
'sales_contact_guid' => 'setSalesContactGuid',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'email' => 'setEmail',
'mobile' => 'setMobile',
'phone' => 'setPhone',
'position' => 'setPosition',
'company' => 'setCompany',
'owner_id' => 'setOwnerId',
'sales_contact_stage_id' => 'setSalesContactStageId',
'sales_contact_type_id' => 'setSalesContactTypeId',
'notes' => 'setNotes',
'sales_contact_relationships' => 'setSalesContactRelationships',
'created_on' => 'setCreatedOn',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales_contact_id' => 'getSalesContactId',
'sales_contact_guid' => 'getSalesContactGuid',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'email' => 'getEmail',
'mobile' => 'getMobile',
'phone' => 'getPhone',
'position' => 'getPosition',
'company' => 'getCompany',
'owner_id' => 'getOwnerId',
'sales_contact_stage_id' => 'getSalesContactStageId',
'sales_contact_type_id' => 'getSalesContactTypeId',
'notes' => 'getNotes',
'sales_contact_relationships' => 'getSalesContactRelationships',
'created_on' => 'getCreatedOn',
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
        $this->container['sales_contact_id'] = isset($data['sales_contact_id']) ? $data['sales_contact_id'] : null;
        $this->container['sales_contact_guid'] = isset($data['sales_contact_guid']) ? $data['sales_contact_guid'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['sales_contact_stage_id'] = isset($data['sales_contact_stage_id']) ? $data['sales_contact_stage_id'] : null;
        $this->container['sales_contact_type_id'] = isset($data['sales_contact_type_id']) ? $data['sales_contact_type_id'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['sales_contact_relationships'] = isset($data['sales_contact_relationships']) ? $data['sales_contact_relationships'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
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
     * Gets sales_contact_id
     *
     * @return int
     */
    public function getSalesContactId()
    {
        return $this->container['sales_contact_id'];
    }

    /**
     * Sets sales_contact_id
     *
     * @param int $sales_contact_id Primary Id for sales contact that is auto generated
     *
     * @return $this
     */
    public function setSalesContactId($sales_contact_id)
    {
        $this->container['sales_contact_id'] = $sales_contact_id;

        return $this;
    }

    /**
     * Gets sales_contact_guid
     *
     * @return string
     */
    public function getSalesContactGuid()
    {
        return $this->container['sales_contact_guid'];
    }

    /**
     * Sets sales_contact_guid
     *
     * @param string $sales_contact_guid The GUID of the sales contact
     *
     * @return $this
     */
    public function setSalesContactGuid($sales_contact_guid)
    {
        $this->container['sales_contact_guid'] = $sales_contact_guid;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First Name of the sales contact
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last Name of the sales contact
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email of the sales contact
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile Mobile Number of the sales contact. Accepts numbers only. International format is preferable eg. +614xxxxxxxxx\".
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone Number of the sales contact
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string $position Position of the sales contact
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company Company of the sales contact
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int $owner_id See entity SalesPersons
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets sales_contact_stage_id
     *
     * @return int
     */
    public function getSalesContactStageId()
    {
        return $this->container['sales_contact_stage_id'];
    }

    /**
     * Sets sales_contact_stage_id
     *
     * @param int $sales_contact_stage_id See combo SalesContactStages
     *
     * @return $this
     */
    public function setSalesContactStageId($sales_contact_stage_id)
    {
        $this->container['sales_contact_stage_id'] = $sales_contact_stage_id;

        return $this;
    }

    /**
     * Gets sales_contact_type_id
     *
     * @return int
     */
    public function getSalesContactTypeId()
    {
        return $this->container['sales_contact_type_id'];
    }

    /**
     * Sets sales_contact_type_id
     *
     * @param int $sales_contact_type_id See combo SalesContactTypes
     *
     * @return $this
     */
    public function setSalesContactTypeId($sales_contact_type_id)
    {
        $this->container['sales_contact_type_id'] = $sales_contact_type_id;

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
     * @param string $notes Any additional notes related to the sales contact
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets sales_contact_relationships
     *
     * @return \Phwebs\Wisenet\Model\SalesContactRelationship[]
     */
    public function getSalesContactRelationships()
    {
        return $this->container['sales_contact_relationships'];
    }

    /**
     * Sets sales_contact_relationships
     *
     * @param \Phwebs\Wisenet\Model\SalesContactRelationship[] $sales_contact_relationships sales_contact_relationships
     *
     * @return $this
     */
    public function setSalesContactRelationships($sales_contact_relationships)
    {
        $this->container['sales_contact_relationships'] = $sales_contact_relationships;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on Date when the sales contact was created
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

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
     * @param \DateTime $last_modified_time_stamp Date when the sales contact was last modified
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
