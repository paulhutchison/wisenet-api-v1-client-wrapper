<?php
/**
 * LocationFull
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
 * LocationFull Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocationFull implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocationFull';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'location_id' => 'int',
'code' => 'string',
'description' => 'string',
'building_name' => 'string',
'unit_details' => 'string',
'street_number' => 'string',
'street_name' => 'string',
'suburb' => 'string',
'postcode' => 'string',
'state_id' => 'int',
'country_id' => 'int',
'effective_from_date' => '\DateTime',
'effective_to_date' => '\DateTime',
'capacity' => 'int',
'location_code_nzqa_alternative' => 'string',
'reference_workplace_id' => 'int',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'location_id' => 'int32',
'code' => '10',
'description' => '100',
'building_name' => '50',
'unit_details' => '30',
'street_number' => '15',
'street_name' => '70',
'suburb' => '60',
'postcode' => '20',
'state_id' => 'int32',
'country_id' => 'int32',
'effective_from_date' => 'date-time',
'effective_to_date' => 'date-time',
'capacity' => 'int32',
'location_code_nzqa_alternative' => '5',
'reference_workplace_id' => 'int32',
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
        'location_id' => 'LocationId',
'code' => 'Code',
'description' => 'Description',
'building_name' => 'BuildingName',
'unit_details' => 'UnitDetails',
'street_number' => 'StreetNumber',
'street_name' => 'StreetName',
'suburb' => 'Suburb',
'postcode' => 'Postcode',
'state_id' => 'StateId',
'country_id' => 'CountryId',
'effective_from_date' => 'EffectiveFromDate',
'effective_to_date' => 'EffectiveToDate',
'capacity' => 'Capacity',
'location_code_nzqa_alternative' => 'LocationCodeNzqaAlternative',
'reference_workplace_id' => 'ReferenceWorkplaceId',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location_id' => 'setLocationId',
'code' => 'setCode',
'description' => 'setDescription',
'building_name' => 'setBuildingName',
'unit_details' => 'setUnitDetails',
'street_number' => 'setStreetNumber',
'street_name' => 'setStreetName',
'suburb' => 'setSuburb',
'postcode' => 'setPostcode',
'state_id' => 'setStateId',
'country_id' => 'setCountryId',
'effective_from_date' => 'setEffectiveFromDate',
'effective_to_date' => 'setEffectiveToDate',
'capacity' => 'setCapacity',
'location_code_nzqa_alternative' => 'setLocationCodeNzqaAlternative',
'reference_workplace_id' => 'setReferenceWorkplaceId',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location_id' => 'getLocationId',
'code' => 'getCode',
'description' => 'getDescription',
'building_name' => 'getBuildingName',
'unit_details' => 'getUnitDetails',
'street_number' => 'getStreetNumber',
'street_name' => 'getStreetName',
'suburb' => 'getSuburb',
'postcode' => 'getPostcode',
'state_id' => 'getStateId',
'country_id' => 'getCountryId',
'effective_from_date' => 'getEffectiveFromDate',
'effective_to_date' => 'getEffectiveToDate',
'capacity' => 'getCapacity',
'location_code_nzqa_alternative' => 'getLocationCodeNzqaAlternative',
'reference_workplace_id' => 'getReferenceWorkplaceId',
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
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['building_name'] = isset($data['building_name']) ? $data['building_name'] : null;
        $this->container['unit_details'] = isset($data['unit_details']) ? $data['unit_details'] : null;
        $this->container['street_number'] = isset($data['street_number']) ? $data['street_number'] : null;
        $this->container['street_name'] = isset($data['street_name']) ? $data['street_name'] : null;
        $this->container['suburb'] = isset($data['suburb']) ? $data['suburb'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['state_id'] = isset($data['state_id']) ? $data['state_id'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['effective_from_date'] = isset($data['effective_from_date']) ? $data['effective_from_date'] : null;
        $this->container['effective_to_date'] = isset($data['effective_to_date']) ? $data['effective_to_date'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['location_code_nzqa_alternative'] = isset($data['location_code_nzqa_alternative']) ? $data['location_code_nzqa_alternative'] : null;
        $this->container['reference_workplace_id'] = isset($data['reference_workplace_id']) ? $data['reference_workplace_id'] : null;
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
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id Primary Id for Location that is auto generated
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Code used to identify the Location
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description used to identify the Location
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets building_name
     *
     * @return string
     */
    public function getBuildingName()
    {
        return $this->container['building_name'];
    }

    /**
     * Sets building_name
     *
     * @param string $building_name Building Name of the Location Street Address
     *
     * @return $this
     */
    public function setBuildingName($building_name)
    {
        $this->container['building_name'] = $building_name;

        return $this;
    }

    /**
     * Gets unit_details
     *
     * @return string
     */
    public function getUnitDetails()
    {
        return $this->container['unit_details'];
    }

    /**
     * Sets unit_details
     *
     * @param string $unit_details Unit Details of the Location Street Address
     *
     * @return $this
     */
    public function setUnitDetails($unit_details)
    {
        $this->container['unit_details'] = $unit_details;

        return $this;
    }

    /**
     * Gets street_number
     *
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->container['street_number'];
    }

    /**
     * Sets street_number
     *
     * @param string $street_number Street Number of the Location Street Address
     *
     * @return $this
     */
    public function setStreetNumber($street_number)
    {
        $this->container['street_number'] = $street_number;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string $street_name Street Name of the Location Street Address
     *
     * @return $this
     */
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets suburb
     *
     * @return string
     */
    public function getSuburb()
    {
        return $this->container['suburb'];
    }

    /**
     * Sets suburb
     *
     * @param string $suburb Suburb of the Location Street Address
     *
     * @return $this
     */
    public function setSuburb($suburb)
    {
        $this->container['suburb'] = $suburb;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postcode of the Location Street Address
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets state_id
     *
     * @return int
     */
    public function getStateId()
    {
        return $this->container['state_id'];
    }

    /**
     * Sets state_id
     *
     * @param int $state_id See combo States. State of the Location Street Address
     *
     * @return $this
     */
    public function setStateId($state_id)
    {
        $this->container['state_id'] = $state_id;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param int $country_id See combo Countries. Country of the Location Street Address
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets effective_from_date
     *
     * @return \DateTime
     */
    public function getEffectiveFromDate()
    {
        return $this->container['effective_from_date'];
    }

    /**
     * Sets effective_from_date
     *
     * @param \DateTime $effective_from_date Date Location is effective from
     *
     * @return $this
     */
    public function setEffectiveFromDate($effective_from_date)
    {
        $this->container['effective_from_date'] = $effective_from_date;

        return $this;
    }

    /**
     * Gets effective_to_date
     *
     * @return \DateTime
     */
    public function getEffectiveToDate()
    {
        return $this->container['effective_to_date'];
    }

    /**
     * Sets effective_to_date
     *
     * @param \DateTime $effective_to_date Date Location is effective to
     *
     * @return $this
     */
    public function setEffectiveToDate($effective_to_date)
    {
        $this->container['effective_to_date'] = $effective_to_date;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param int $capacity Number of people the Location can hold
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets location_code_nzqa_alternative
     *
     * @return string
     */
    public function getLocationCodeNzqaAlternative()
    {
        return $this->container['location_code_nzqa_alternative'];
    }

    /**
     * Sets location_code_nzqa_alternative
     *
     * @param string $location_code_nzqa_alternative NZ only. An alternative Code used to identify the Location for NZQA if different to the main Code
     *
     * @return $this
     */
    public function setLocationCodeNzqaAlternative($location_code_nzqa_alternative)
    {
        $this->container['location_code_nzqa_alternative'] = $location_code_nzqa_alternative;

        return $this;
    }

    /**
     * Gets reference_workplace_id
     *
     * @return int
     */
    public function getReferenceWorkplaceId()
    {
        return $this->container['reference_workplace_id'];
    }

    /**
     * Sets reference_workplace_id
     *
     * @param int $reference_workplace_id See entity Workplaces. Indicates that this Location is a training delivery location reference for the Workplace.  When WorkplaceId exists, the Location should be updated when changes occur to Workplace address.
     *
     * @return $this
     */
    public function setReferenceWorkplaceId($reference_workplace_id)
    {
        $this->container['reference_workplace_id'] = $reference_workplace_id;

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
     * @param \DateTime $last_modified_time_stamp Date when the Location was last modified
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
