<?php
/**
 * CourseEnrolmentBasic
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
 * CourseEnrolmentBasic Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CourseEnrolmentBasic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CourseEnrolmentBasic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'course_enrolment_id' => 'int',
'learner_id' => 'int',
'course_offer_id' => 'int',
'start_date' => '\DateTime',
'end_date' => '\DateTime',
'actual_end_date' => '\DateTime',
'enrolment_status_id' => 'int',
'enrolment_status_description' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'course_enrolment_id' => 'int32',
'learner_id' => 'int32',
'course_offer_id' => 'int32',
'start_date' => 'date-time',
'end_date' => 'date-time',
'actual_end_date' => 'date-time',
'enrolment_status_id' => 'int32',
'enrolment_status_description' => null    ];

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
        'course_enrolment_id' => 'CourseEnrolmentId',
'learner_id' => 'LearnerId',
'course_offer_id' => 'CourseOfferId',
'start_date' => 'StartDate',
'end_date' => 'EndDate',
'actual_end_date' => 'ActualEndDate',
'enrolment_status_id' => 'EnrolmentStatusId',
'enrolment_status_description' => 'EnrolmentStatusDescription'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'course_enrolment_id' => 'setCourseEnrolmentId',
'learner_id' => 'setLearnerId',
'course_offer_id' => 'setCourseOfferId',
'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'actual_end_date' => 'setActualEndDate',
'enrolment_status_id' => 'setEnrolmentStatusId',
'enrolment_status_description' => 'setEnrolmentStatusDescription'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'course_enrolment_id' => 'getCourseEnrolmentId',
'learner_id' => 'getLearnerId',
'course_offer_id' => 'getCourseOfferId',
'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'actual_end_date' => 'getActualEndDate',
'enrolment_status_id' => 'getEnrolmentStatusId',
'enrolment_status_description' => 'getEnrolmentStatusDescription'    ];

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
        $this->container['course_enrolment_id'] = isset($data['course_enrolment_id']) ? $data['course_enrolment_id'] : null;
        $this->container['learner_id'] = isset($data['learner_id']) ? $data['learner_id'] : null;
        $this->container['course_offer_id'] = isset($data['course_offer_id']) ? $data['course_offer_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['actual_end_date'] = isset($data['actual_end_date']) ? $data['actual_end_date'] : null;
        $this->container['enrolment_status_id'] = isset($data['enrolment_status_id']) ? $data['enrolment_status_id'] : null;
        $this->container['enrolment_status_description'] = isset($data['enrolment_status_description']) ? $data['enrolment_status_description'] : null;
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
     * Gets course_enrolment_id
     *
     * @return int
     */
    public function getCourseEnrolmentId()
    {
        return $this->container['course_enrolment_id'];
    }

    /**
     * Sets course_enrolment_id
     *
     * @param int $course_enrolment_id course_enrolment_id
     *
     * @return $this
     */
    public function setCourseEnrolmentId($course_enrolment_id)
    {
        $this->container['course_enrolment_id'] = $course_enrolment_id;

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
     * Gets course_offer_id
     *
     * @return int
     */
    public function getCourseOfferId()
    {
        return $this->container['course_offer_id'];
    }

    /**
     * Sets course_offer_id
     *
     * @param int $course_offer_id course_offer_id
     *
     * @return $this
     */
    public function setCourseOfferId($course_offer_id)
    {
        $this->container['course_offer_id'] = $course_offer_id;

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
     * @param \DateTime $start_date start_date
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
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets actual_end_date
     *
     * @return \DateTime
     */
    public function getActualEndDate()
    {
        return $this->container['actual_end_date'];
    }

    /**
     * Sets actual_end_date
     *
     * @param \DateTime $actual_end_date actual_end_date
     *
     * @return $this
     */
    public function setActualEndDate($actual_end_date)
    {
        $this->container['actual_end_date'] = $actual_end_date;

        return $this;
    }

    /**
     * Gets enrolment_status_id
     *
     * @return int
     */
    public function getEnrolmentStatusId()
    {
        return $this->container['enrolment_status_id'];
    }

    /**
     * Sets enrolment_status_id
     *
     * @param int $enrolment_status_id enrolment_status_id
     *
     * @return $this
     */
    public function setEnrolmentStatusId($enrolment_status_id)
    {
        $this->container['enrolment_status_id'] = $enrolment_status_id;

        return $this;
    }

    /**
     * Gets enrolment_status_description
     *
     * @return string
     */
    public function getEnrolmentStatusDescription()
    {
        return $this->container['enrolment_status_description'];
    }

    /**
     * Sets enrolment_status_description
     *
     * @param string $enrolment_status_description enrolment_status_description
     *
     * @return $this
     */
    public function setEnrolmentStatusDescription($enrolment_status_description)
    {
        $this->container['enrolment_status_description'] = $enrolment_status_description;

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
