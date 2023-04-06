<?php
/**
 * LearnerPosition
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
 * LearnerPosition Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerPosition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'learner_position_id' => 'int',
'learner_id' => 'int',
'workplace_id' => 'int',
'position_id' => 'int',
'sales_contact_id' => 'int',
'workplace_type_id' => 'int',
'start_date' => '\DateTime',
'end_date' => '\DateTime',
'sub_group' => 'string',
'organisational_unit' => 'string',
'pay_level_id' => 'int',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'learner_position_id' => 'int32',
'learner_id' => 'int32',
'workplace_id' => 'int32',
'position_id' => 'int32',
'sales_contact_id' => 'int32',
'workplace_type_id' => 'int32',
'start_date' => 'date-time',
'end_date' => 'date-time',
'sub_group' => '50',
'organisational_unit' => '50',
'pay_level_id' => 'int32',
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
        'learner_position_id' => 'LearnerPositionId',
'learner_id' => 'LearnerId',
'workplace_id' => 'WorkplaceId',
'position_id' => 'PositionId',
'sales_contact_id' => 'SalesContactId',
'workplace_type_id' => 'WorkplaceTypeId',
'start_date' => 'StartDate',
'end_date' => 'EndDate',
'sub_group' => 'SubGroup',
'organisational_unit' => 'OrganisationalUnit',
'pay_level_id' => 'PayLevelId',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'learner_position_id' => 'setLearnerPositionId',
'learner_id' => 'setLearnerId',
'workplace_id' => 'setWorkplaceId',
'position_id' => 'setPositionId',
'sales_contact_id' => 'setSalesContactId',
'workplace_type_id' => 'setWorkplaceTypeId',
'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'sub_group' => 'setSubGroup',
'organisational_unit' => 'setOrganisationalUnit',
'pay_level_id' => 'setPayLevelId',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'learner_position_id' => 'getLearnerPositionId',
'learner_id' => 'getLearnerId',
'workplace_id' => 'getWorkplaceId',
'position_id' => 'getPositionId',
'sales_contact_id' => 'getSalesContactId',
'workplace_type_id' => 'getWorkplaceTypeId',
'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'sub_group' => 'getSubGroup',
'organisational_unit' => 'getOrganisationalUnit',
'pay_level_id' => 'getPayLevelId',
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
        $this->container['learner_position_id'] = isset($data['learner_position_id']) ? $data['learner_position_id'] : null;
        $this->container['learner_id'] = isset($data['learner_id']) ? $data['learner_id'] : null;
        $this->container['workplace_id'] = isset($data['workplace_id']) ? $data['workplace_id'] : null;
        $this->container['position_id'] = isset($data['position_id']) ? $data['position_id'] : null;
        $this->container['sales_contact_id'] = isset($data['sales_contact_id']) ? $data['sales_contact_id'] : null;
        $this->container['workplace_type_id'] = isset($data['workplace_type_id']) ? $data['workplace_type_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['sub_group'] = isset($data['sub_group']) ? $data['sub_group'] : null;
        $this->container['organisational_unit'] = isset($data['organisational_unit']) ? $data['organisational_unit'] : null;
        $this->container['pay_level_id'] = isset($data['pay_level_id']) ? $data['pay_level_id'] : null;
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
     * Gets learner_position_id
     *
     * @return int
     */
    public function getLearnerPositionId()
    {
        return $this->container['learner_position_id'];
    }

    /**
     * Sets learner_position_id
     *
     * @param int $learner_position_id Primary Id for Learner Position that is auto generated
     *
     * @return $this
     */
    public function setLearnerPositionId($learner_position_id)
    {
        $this->container['learner_position_id'] = $learner_position_id;

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
     * @param int $learner_id See entity Learners
     *
     * @return $this
     */
    public function setLearnerId($learner_id)
    {
        $this->container['learner_id'] = $learner_id;

        return $this;
    }

    /**
     * Gets workplace_id
     *
     * @return int
     */
    public function getWorkplaceId()
    {
        return $this->container['workplace_id'];
    }

    /**
     * Sets workplace_id
     *
     * @param int $workplace_id See entity Workplaces
     *
     * @return $this
     */
    public function setWorkplaceId($workplace_id)
    {
        $this->container['workplace_id'] = $workplace_id;

        return $this;
    }

    /**
     * Gets position_id
     *
     * @return int
     */
    public function getPositionId()
    {
        return $this->container['position_id'];
    }

    /**
     * Sets position_id
     *
     * @param int $position_id See combo Positions
     *
     * @return $this
     */
    public function setPositionId($position_id)
    {
        $this->container['position_id'] = $position_id;

        return $this;
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
     * @param int $sales_contact_id See entity Sales Contacts
     *
     * @return $this
     */
    public function setSalesContactId($sales_contact_id)
    {
        $this->container['sales_contact_id'] = $sales_contact_id;

        return $this;
    }

    /**
     * Gets workplace_type_id
     *
     * @return int
     */
    public function getWorkplaceTypeId()
    {
        return $this->container['workplace_type_id'];
    }

    /**
     * Sets workplace_type_id
     *
     * @param int $workplace_type_id See combo Workplace Types
     *
     * @return $this
     */
    public function setWorkplaceTypeId($workplace_type_id)
    {
        $this->container['workplace_type_id'] = $workplace_type_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Date Learner Position starts
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date Date Learner Position ends
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets sub_group
     *
     * @return string
     */
    public function getSubGroup()
    {
        return $this->container['sub_group'];
    }

    /**
     * Sets sub_group
     *
     * @param string $sub_group Sub Group free text field
     *
     * @return $this
     */
    public function setSubGroup($sub_group)
    {
        $this->container['sub_group'] = $sub_group;

        return $this;
    }

    /**
     * Gets organisational_unit
     *
     * @return string
     */
    public function getOrganisationalUnit()
    {
        return $this->container['organisational_unit'];
    }

    /**
     * Sets organisational_unit
     *
     * @param string $organisational_unit Organisational Unit free text field
     *
     * @return $this
     */
    public function setOrganisationalUnit($organisational_unit)
    {
        $this->container['organisational_unit'] = $organisational_unit;

        return $this;
    }

    /**
     * Gets pay_level_id
     *
     * @return int
     */
    public function getPayLevelId()
    {
        return $this->container['pay_level_id'];
    }

    /**
     * Sets pay_level_id
     *
     * @param int $pay_level_id See combo Pay Levels
     *
     * @return $this
     */
    public function setPayLevelId($pay_level_id)
    {
        $this->container['pay_level_id'] = $pay_level_id;

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
     * @param \DateTime $last_modified_time_stamp Date when the Learner Position was last modified
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
