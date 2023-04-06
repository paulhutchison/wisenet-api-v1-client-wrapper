<?php
/**
 * LearnerAuPersonalPostalAddress
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
 * LearnerAuPersonalPostalAddress Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerAuPersonalPostalAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerAuPersonalPostalAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'building_name' => 'string',
'po_box' => 'string',
'unit_details' => 'string',
'street_number' => 'string',
'street_name' => 'string',
'extra_address_line' => 'string',
'suburb_town_city' => 'string',
'state_id' => 'int',
'postcode' => 'string',
'country_id' => 'int',
'postal_address' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'building_name' => '50',
'po_box' => '22',
'unit_details' => '30',
'street_number' => '15',
'street_name' => '70',
'extra_address_line' => '50',
'suburb_town_city' => '50',
'state_id' => 'int32',
'postcode' => '20',
'country_id' => 'int32',
'postal_address' => null    ];

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
        'building_name' => 'BuildingName',
'po_box' => 'PoBox',
'unit_details' => 'UnitDetails',
'street_number' => 'StreetNumber',
'street_name' => 'StreetName',
'extra_address_line' => 'ExtraAddressLine',
'suburb_town_city' => 'SuburbTownCity',
'state_id' => 'StateId',
'postcode' => 'Postcode',
'country_id' => 'CountryId',
'postal_address' => 'PostalAddress'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'building_name' => 'setBuildingName',
'po_box' => 'setPoBox',
'unit_details' => 'setUnitDetails',
'street_number' => 'setStreetNumber',
'street_name' => 'setStreetName',
'extra_address_line' => 'setExtraAddressLine',
'suburb_town_city' => 'setSuburbTownCity',
'state_id' => 'setStateId',
'postcode' => 'setPostcode',
'country_id' => 'setCountryId',
'postal_address' => 'setPostalAddress'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'building_name' => 'getBuildingName',
'po_box' => 'getPoBox',
'unit_details' => 'getUnitDetails',
'street_number' => 'getStreetNumber',
'street_name' => 'getStreetName',
'extra_address_line' => 'getExtraAddressLine',
'suburb_town_city' => 'getSuburbTownCity',
'state_id' => 'getStateId',
'postcode' => 'getPostcode',
'country_id' => 'getCountryId',
'postal_address' => 'getPostalAddress'    ];

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
        $this->container['building_name'] = isset($data['building_name']) ? $data['building_name'] : null;
        $this->container['po_box'] = isset($data['po_box']) ? $data['po_box'] : null;
        $this->container['unit_details'] = isset($data['unit_details']) ? $data['unit_details'] : null;
        $this->container['street_number'] = isset($data['street_number']) ? $data['street_number'] : null;
        $this->container['street_name'] = isset($data['street_name']) ? $data['street_name'] : null;
        $this->container['extra_address_line'] = isset($data['extra_address_line']) ? $data['extra_address_line'] : null;
        $this->container['suburb_town_city'] = isset($data['suburb_town_city']) ? $data['suburb_town_city'] : null;
        $this->container['state_id'] = isset($data['state_id']) ? $data['state_id'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['postal_address'] = isset($data['postal_address']) ? $data['postal_address'] : null;
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
     * @param string $building_name Building name of learner's postal address
     *
     * @return $this
     */
    public function setBuildingName($building_name)
    {
        $this->container['building_name'] = $building_name;

        return $this;
    }

    /**
     * Gets po_box
     *
     * @return string
     */
    public function getPoBox()
    {
        return $this->container['po_box'];
    }

    /**
     * Sets po_box
     *
     * @param string $po_box PO Box number of learner's postal address
     *
     * @return $this
     */
    public function setPoBox($po_box)
    {
        $this->container['po_box'] = $po_box;

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
     * @param string $unit_details Unit details of learner's postal address
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
     * @param string $street_number Street number of learner's postal address
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
     * @param string $street_name Street name of learner's postal address
     *
     * @return $this
     */
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets extra_address_line
     *
     * @return string
     */
    public function getExtraAddressLine()
    {
        return $this->container['extra_address_line'];
    }

    /**
     * Sets extra_address_line
     *
     * @param string $extra_address_line Additional address details of learner's postal address
     *
     * @return $this
     */
    public function setExtraAddressLine($extra_address_line)
    {
        $this->container['extra_address_line'] = $extra_address_line;

        return $this;
    }

    /**
     * Gets suburb_town_city
     *
     * @return string
     */
    public function getSuburbTownCity()
    {
        return $this->container['suburb_town_city'];
    }

    /**
     * Sets suburb_town_city
     *
     * @param string $suburb_town_city Suburb of learner's postal address
     *
     * @return $this
     */
    public function setSuburbTownCity($suburb_town_city)
    {
        $this->container['suburb_town_city'] = $suburb_town_city;

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
     * @param int $state_id See combo States
     *
     * @return $this
     */
    public function setStateId($state_id)
    {
        $this->container['state_id'] = $state_id;

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
     * @param string $postcode Postcode of learner's postal address
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

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
     * @param int $country_id See combo Countries
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets postal_address
     *
     * @return string
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param string $postal_address Read only. Address Line1 of learner's postal address
     *
     * @return $this
     */
    public function setPostalAddress($postal_address)
    {
        $this->container['postal_address'] = $postal_address;

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
