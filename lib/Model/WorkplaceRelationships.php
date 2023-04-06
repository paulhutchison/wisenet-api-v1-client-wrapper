<?php
/**
 * WorkplaceRelationships
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
 * WorkplaceRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkplaceRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkplaceRelationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'anzsic' => '\Phwebs\Wisenet\Model\Anzsic',
'states' => '\Phwebs\Wisenet\Model\State[]',
'countries' => '\Phwebs\Wisenet\Model\Country[]',
'location' => '\Phwebs\Wisenet\Model\Location',
'school_type' => '\Phwebs\Wisenet\Model\SchoolType',
'workplace_classification' => '\Phwebs\Wisenet\Model\WorkplaceClassification',
'industry_size' => '\Phwebs\Wisenet\Model\IndustrySize',
'accreditation_type' => '\Phwebs\Wisenet\Model\AccreditationType',
'head_office_workplace' => '\Phwebs\Wisenet\Model\WorkplaceBasic'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'anzsic' => null,
'states' => null,
'countries' => null,
'location' => null,
'school_type' => null,
'workplace_classification' => null,
'industry_size' => null,
'accreditation_type' => null,
'head_office_workplace' => null    ];

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
        'anzsic' => 'Anzsic',
'states' => 'States',
'countries' => 'Countries',
'location' => 'Location',
'school_type' => 'SchoolType',
'workplace_classification' => 'WorkplaceClassification',
'industry_size' => 'IndustrySize',
'accreditation_type' => 'AccreditationType',
'head_office_workplace' => 'HeadOfficeWorkplace'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anzsic' => 'setAnzsic',
'states' => 'setStates',
'countries' => 'setCountries',
'location' => 'setLocation',
'school_type' => 'setSchoolType',
'workplace_classification' => 'setWorkplaceClassification',
'industry_size' => 'setIndustrySize',
'accreditation_type' => 'setAccreditationType',
'head_office_workplace' => 'setHeadOfficeWorkplace'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anzsic' => 'getAnzsic',
'states' => 'getStates',
'countries' => 'getCountries',
'location' => 'getLocation',
'school_type' => 'getSchoolType',
'workplace_classification' => 'getWorkplaceClassification',
'industry_size' => 'getIndustrySize',
'accreditation_type' => 'getAccreditationType',
'head_office_workplace' => 'getHeadOfficeWorkplace'    ];

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
        $this->container['anzsic'] = isset($data['anzsic']) ? $data['anzsic'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['school_type'] = isset($data['school_type']) ? $data['school_type'] : null;
        $this->container['workplace_classification'] = isset($data['workplace_classification']) ? $data['workplace_classification'] : null;
        $this->container['industry_size'] = isset($data['industry_size']) ? $data['industry_size'] : null;
        $this->container['accreditation_type'] = isset($data['accreditation_type']) ? $data['accreditation_type'] : null;
        $this->container['head_office_workplace'] = isset($data['head_office_workplace']) ? $data['head_office_workplace'] : null;
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
     * Gets anzsic
     *
     * @return \Phwebs\Wisenet\Model\Anzsic
     */
    public function getAnzsic()
    {
        return $this->container['anzsic'];
    }

    /**
     * Sets anzsic
     *
     * @param \Phwebs\Wisenet\Model\Anzsic $anzsic anzsic
     *
     * @return $this
     */
    public function setAnzsic($anzsic)
    {
        $this->container['anzsic'] = $anzsic;

        return $this;
    }

    /**
     * Gets states
     *
     * @return \Phwebs\Wisenet\Model\State[]
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param \Phwebs\Wisenet\Model\State[] $states states
     *
     * @return $this
     */
    public function setStates($states)
    {
        $this->container['states'] = $states;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return \Phwebs\Wisenet\Model\Country[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \Phwebs\Wisenet\Model\Country[] $countries countries
     *
     * @return $this
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Phwebs\Wisenet\Model\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Phwebs\Wisenet\Model\Location $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets school_type
     *
     * @return \Phwebs\Wisenet\Model\SchoolType
     */
    public function getSchoolType()
    {
        return $this->container['school_type'];
    }

    /**
     * Sets school_type
     *
     * @param \Phwebs\Wisenet\Model\SchoolType $school_type school_type
     *
     * @return $this
     */
    public function setSchoolType($school_type)
    {
        $this->container['school_type'] = $school_type;

        return $this;
    }

    /**
     * Gets workplace_classification
     *
     * @return \Phwebs\Wisenet\Model\WorkplaceClassification
     */
    public function getWorkplaceClassification()
    {
        return $this->container['workplace_classification'];
    }

    /**
     * Sets workplace_classification
     *
     * @param \Phwebs\Wisenet\Model\WorkplaceClassification $workplace_classification workplace_classification
     *
     * @return $this
     */
    public function setWorkplaceClassification($workplace_classification)
    {
        $this->container['workplace_classification'] = $workplace_classification;

        return $this;
    }

    /**
     * Gets industry_size
     *
     * @return \Phwebs\Wisenet\Model\IndustrySize
     */
    public function getIndustrySize()
    {
        return $this->container['industry_size'];
    }

    /**
     * Sets industry_size
     *
     * @param \Phwebs\Wisenet\Model\IndustrySize $industry_size industry_size
     *
     * @return $this
     */
    public function setIndustrySize($industry_size)
    {
        $this->container['industry_size'] = $industry_size;

        return $this;
    }

    /**
     * Gets accreditation_type
     *
     * @return \Phwebs\Wisenet\Model\AccreditationType
     */
    public function getAccreditationType()
    {
        return $this->container['accreditation_type'];
    }

    /**
     * Sets accreditation_type
     *
     * @param \Phwebs\Wisenet\Model\AccreditationType $accreditation_type accreditation_type
     *
     * @return $this
     */
    public function setAccreditationType($accreditation_type)
    {
        $this->container['accreditation_type'] = $accreditation_type;

        return $this;
    }

    /**
     * Gets head_office_workplace
     *
     * @return \Phwebs\Wisenet\Model\WorkplaceBasic
     */
    public function getHeadOfficeWorkplace()
    {
        return $this->container['head_office_workplace'];
    }

    /**
     * Sets head_office_workplace
     *
     * @param \Phwebs\Wisenet\Model\WorkplaceBasic $head_office_workplace head_office_workplace
     *
     * @return $this
     */
    public function setHeadOfficeWorkplace($head_office_workplace)
    {
        $this->container['head_office_workplace'] = $head_office_workplace;

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
