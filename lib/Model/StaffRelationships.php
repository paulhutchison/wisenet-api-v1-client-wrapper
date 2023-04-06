<?php
/**
 * StaffRelationships
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
 * StaffRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StaffRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StaffRelationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gender' => '\Phwebs\Wisenet\Model\Gender',
'assessor' => '\Phwebs\Wisenet\Model\Assessor',
'trainer' => '\Phwebs\Wisenet\Model\Trainer',
'coordinator' => '\Phwebs\Wisenet\Model\Coordinator',
'sales_person' => '\Phwebs\Wisenet\Model\SalesPerson',
'street_address_state' => '\Phwebs\Wisenet\Model\State',
'postal_address_state' => '\Phwebs\Wisenet\Model\State',
'street_address_country' => '\Phwebs\Wisenet\Model\Country',
'postal_address_country' => '\Phwebs\Wisenet\Model\Country',
'sa_highest_qualification_type' => '\Phwebs\Wisenet\Model\SaHighestQualificationType',
'vaccine_status' => '\Phwebs\Wisenet\Model\VaccineStatus'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gender' => null,
'assessor' => null,
'trainer' => null,
'coordinator' => null,
'sales_person' => null,
'street_address_state' => null,
'postal_address_state' => null,
'street_address_country' => null,
'postal_address_country' => null,
'sa_highest_qualification_type' => null,
'vaccine_status' => null    ];

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
        'gender' => 'Gender',
'assessor' => 'Assessor',
'trainer' => 'Trainer',
'coordinator' => 'Coordinator',
'sales_person' => 'SalesPerson',
'street_address_state' => 'StreetAddressState',
'postal_address_state' => 'PostalAddressState',
'street_address_country' => 'StreetAddressCountry',
'postal_address_country' => 'PostalAddressCountry',
'sa_highest_qualification_type' => 'SaHighestQualificationType',
'vaccine_status' => 'VaccineStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gender' => 'setGender',
'assessor' => 'setAssessor',
'trainer' => 'setTrainer',
'coordinator' => 'setCoordinator',
'sales_person' => 'setSalesPerson',
'street_address_state' => 'setStreetAddressState',
'postal_address_state' => 'setPostalAddressState',
'street_address_country' => 'setStreetAddressCountry',
'postal_address_country' => 'setPostalAddressCountry',
'sa_highest_qualification_type' => 'setSaHighestQualificationType',
'vaccine_status' => 'setVaccineStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gender' => 'getGender',
'assessor' => 'getAssessor',
'trainer' => 'getTrainer',
'coordinator' => 'getCoordinator',
'sales_person' => 'getSalesPerson',
'street_address_state' => 'getStreetAddressState',
'postal_address_state' => 'getPostalAddressState',
'street_address_country' => 'getStreetAddressCountry',
'postal_address_country' => 'getPostalAddressCountry',
'sa_highest_qualification_type' => 'getSaHighestQualificationType',
'vaccine_status' => 'getVaccineStatus'    ];

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
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['assessor'] = isset($data['assessor']) ? $data['assessor'] : null;
        $this->container['trainer'] = isset($data['trainer']) ? $data['trainer'] : null;
        $this->container['coordinator'] = isset($data['coordinator']) ? $data['coordinator'] : null;
        $this->container['sales_person'] = isset($data['sales_person']) ? $data['sales_person'] : null;
        $this->container['street_address_state'] = isset($data['street_address_state']) ? $data['street_address_state'] : null;
        $this->container['postal_address_state'] = isset($data['postal_address_state']) ? $data['postal_address_state'] : null;
        $this->container['street_address_country'] = isset($data['street_address_country']) ? $data['street_address_country'] : null;
        $this->container['postal_address_country'] = isset($data['postal_address_country']) ? $data['postal_address_country'] : null;
        $this->container['sa_highest_qualification_type'] = isset($data['sa_highest_qualification_type']) ? $data['sa_highest_qualification_type'] : null;
        $this->container['vaccine_status'] = isset($data['vaccine_status']) ? $data['vaccine_status'] : null;
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
     * Gets gender
     *
     * @return \Phwebs\Wisenet\Model\Gender
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Phwebs\Wisenet\Model\Gender $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets assessor
     *
     * @return \Phwebs\Wisenet\Model\Assessor
     */
    public function getAssessor()
    {
        return $this->container['assessor'];
    }

    /**
     * Sets assessor
     *
     * @param \Phwebs\Wisenet\Model\Assessor $assessor assessor
     *
     * @return $this
     */
    public function setAssessor($assessor)
    {
        $this->container['assessor'] = $assessor;

        return $this;
    }

    /**
     * Gets trainer
     *
     * @return \Phwebs\Wisenet\Model\Trainer
     */
    public function getTrainer()
    {
        return $this->container['trainer'];
    }

    /**
     * Sets trainer
     *
     * @param \Phwebs\Wisenet\Model\Trainer $trainer trainer
     *
     * @return $this
     */
    public function setTrainer($trainer)
    {
        $this->container['trainer'] = $trainer;

        return $this;
    }

    /**
     * Gets coordinator
     *
     * @return \Phwebs\Wisenet\Model\Coordinator
     */
    public function getCoordinator()
    {
        return $this->container['coordinator'];
    }

    /**
     * Sets coordinator
     *
     * @param \Phwebs\Wisenet\Model\Coordinator $coordinator coordinator
     *
     * @return $this
     */
    public function setCoordinator($coordinator)
    {
        $this->container['coordinator'] = $coordinator;

        return $this;
    }

    /**
     * Gets sales_person
     *
     * @return \Phwebs\Wisenet\Model\SalesPerson
     */
    public function getSalesPerson()
    {
        return $this->container['sales_person'];
    }

    /**
     * Sets sales_person
     *
     * @param \Phwebs\Wisenet\Model\SalesPerson $sales_person sales_person
     *
     * @return $this
     */
    public function setSalesPerson($sales_person)
    {
        $this->container['sales_person'] = $sales_person;

        return $this;
    }

    /**
     * Gets street_address_state
     *
     * @return \Phwebs\Wisenet\Model\State
     */
    public function getStreetAddressState()
    {
        return $this->container['street_address_state'];
    }

    /**
     * Sets street_address_state
     *
     * @param \Phwebs\Wisenet\Model\State $street_address_state street_address_state
     *
     * @return $this
     */
    public function setStreetAddressState($street_address_state)
    {
        $this->container['street_address_state'] = $street_address_state;

        return $this;
    }

    /**
     * Gets postal_address_state
     *
     * @return \Phwebs\Wisenet\Model\State
     */
    public function getPostalAddressState()
    {
        return $this->container['postal_address_state'];
    }

    /**
     * Sets postal_address_state
     *
     * @param \Phwebs\Wisenet\Model\State $postal_address_state postal_address_state
     *
     * @return $this
     */
    public function setPostalAddressState($postal_address_state)
    {
        $this->container['postal_address_state'] = $postal_address_state;

        return $this;
    }

    /**
     * Gets street_address_country
     *
     * @return \Phwebs\Wisenet\Model\Country
     */
    public function getStreetAddressCountry()
    {
        return $this->container['street_address_country'];
    }

    /**
     * Sets street_address_country
     *
     * @param \Phwebs\Wisenet\Model\Country $street_address_country street_address_country
     *
     * @return $this
     */
    public function setStreetAddressCountry($street_address_country)
    {
        $this->container['street_address_country'] = $street_address_country;

        return $this;
    }

    /**
     * Gets postal_address_country
     *
     * @return \Phwebs\Wisenet\Model\Country
     */
    public function getPostalAddressCountry()
    {
        return $this->container['postal_address_country'];
    }

    /**
     * Sets postal_address_country
     *
     * @param \Phwebs\Wisenet\Model\Country $postal_address_country postal_address_country
     *
     * @return $this
     */
    public function setPostalAddressCountry($postal_address_country)
    {
        $this->container['postal_address_country'] = $postal_address_country;

        return $this;
    }

    /**
     * Gets sa_highest_qualification_type
     *
     * @return \Phwebs\Wisenet\Model\SaHighestQualificationType
     */
    public function getSaHighestQualificationType()
    {
        return $this->container['sa_highest_qualification_type'];
    }

    /**
     * Sets sa_highest_qualification_type
     *
     * @param \Phwebs\Wisenet\Model\SaHighestQualificationType $sa_highest_qualification_type sa_highest_qualification_type
     *
     * @return $this
     */
    public function setSaHighestQualificationType($sa_highest_qualification_type)
    {
        $this->container['sa_highest_qualification_type'] = $sa_highest_qualification_type;

        return $this;
    }

    /**
     * Gets vaccine_status
     *
     * @return \Phwebs\Wisenet\Model\VaccineStatus
     */
    public function getVaccineStatus()
    {
        return $this->container['vaccine_status'];
    }

    /**
     * Sets vaccine_status
     *
     * @param \Phwebs\Wisenet\Model\VaccineStatus $vaccine_status vaccine_status
     *
     * @return $this
     */
    public function setVaccineStatus($vaccine_status)
    {
        $this->container['vaccine_status'] = $vaccine_status;

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
