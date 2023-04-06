<?php
/**
 * PublishDetailsCourse
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
 * PublishDetailsCourse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublishDetailsCourse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PublishDetailsCourse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'publish_flag' => 'bool',
'publish_code' => 'string',
'publish_name' => 'string',
'publish_short_info' => 'string',
'publish_info' => 'string',
'publish_calendar_view_flag' => 'bool',
'publish_image_flag' => 'bool',
'publish_sites' => '\Phwebs\Wisenet\Model\PublishSitesCourse[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'publish_flag' => null,
'publish_code' => null,
'publish_name' => null,
'publish_short_info' => null,
'publish_info' => null,
'publish_calendar_view_flag' => null,
'publish_image_flag' => null,
'publish_sites' => null    ];

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
        'publish_flag' => 'PublishFlag',
'publish_code' => 'PublishCode',
'publish_name' => 'PublishName',
'publish_short_info' => 'PublishShortInfo',
'publish_info' => 'PublishInfo',
'publish_calendar_view_flag' => 'PublishCalendarViewFlag',
'publish_image_flag' => 'PublishImageFlag',
'publish_sites' => 'PublishSites'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'publish_flag' => 'setPublishFlag',
'publish_code' => 'setPublishCode',
'publish_name' => 'setPublishName',
'publish_short_info' => 'setPublishShortInfo',
'publish_info' => 'setPublishInfo',
'publish_calendar_view_flag' => 'setPublishCalendarViewFlag',
'publish_image_flag' => 'setPublishImageFlag',
'publish_sites' => 'setPublishSites'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'publish_flag' => 'getPublishFlag',
'publish_code' => 'getPublishCode',
'publish_name' => 'getPublishName',
'publish_short_info' => 'getPublishShortInfo',
'publish_info' => 'getPublishInfo',
'publish_calendar_view_flag' => 'getPublishCalendarViewFlag',
'publish_image_flag' => 'getPublishImageFlag',
'publish_sites' => 'getPublishSites'    ];

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
        $this->container['publish_flag'] = isset($data['publish_flag']) ? $data['publish_flag'] : null;
        $this->container['publish_code'] = isset($data['publish_code']) ? $data['publish_code'] : null;
        $this->container['publish_name'] = isset($data['publish_name']) ? $data['publish_name'] : null;
        $this->container['publish_short_info'] = isset($data['publish_short_info']) ? $data['publish_short_info'] : null;
        $this->container['publish_info'] = isset($data['publish_info']) ? $data['publish_info'] : null;
        $this->container['publish_calendar_view_flag'] = isset($data['publish_calendar_view_flag']) ? $data['publish_calendar_view_flag'] : null;
        $this->container['publish_image_flag'] = isset($data['publish_image_flag']) ? $data['publish_image_flag'] : null;
        $this->container['publish_sites'] = isset($data['publish_sites']) ? $data['publish_sites'] : null;
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
     * Gets publish_flag
     *
     * @return bool
     */
    public function getPublishFlag()
    {
        return $this->container['publish_flag'];
    }

    /**
     * Sets publish_flag
     *
     * @param bool $publish_flag publish_flag
     *
     * @return $this
     */
    public function setPublishFlag($publish_flag)
    {
        $this->container['publish_flag'] = $publish_flag;

        return $this;
    }

    /**
     * Gets publish_code
     *
     * @return string
     */
    public function getPublishCode()
    {
        return $this->container['publish_code'];
    }

    /**
     * Sets publish_code
     *
     * @param string $publish_code publish_code
     *
     * @return $this
     */
    public function setPublishCode($publish_code)
    {
        $this->container['publish_code'] = $publish_code;

        return $this;
    }

    /**
     * Gets publish_name
     *
     * @return string
     */
    public function getPublishName()
    {
        return $this->container['publish_name'];
    }

    /**
     * Sets publish_name
     *
     * @param string $publish_name publish_name
     *
     * @return $this
     */
    public function setPublishName($publish_name)
    {
        $this->container['publish_name'] = $publish_name;

        return $this;
    }

    /**
     * Gets publish_short_info
     *
     * @return string
     */
    public function getPublishShortInfo()
    {
        return $this->container['publish_short_info'];
    }

    /**
     * Sets publish_short_info
     *
     * @param string $publish_short_info publish_short_info
     *
     * @return $this
     */
    public function setPublishShortInfo($publish_short_info)
    {
        $this->container['publish_short_info'] = $publish_short_info;

        return $this;
    }

    /**
     * Gets publish_info
     *
     * @return string
     */
    public function getPublishInfo()
    {
        return $this->container['publish_info'];
    }

    /**
     * Sets publish_info
     *
     * @param string $publish_info publish_info
     *
     * @return $this
     */
    public function setPublishInfo($publish_info)
    {
        $this->container['publish_info'] = $publish_info;

        return $this;
    }

    /**
     * Gets publish_calendar_view_flag
     *
     * @return bool
     */
    public function getPublishCalendarViewFlag()
    {
        return $this->container['publish_calendar_view_flag'];
    }

    /**
     * Sets publish_calendar_view_flag
     *
     * @param bool $publish_calendar_view_flag publish_calendar_view_flag
     *
     * @return $this
     */
    public function setPublishCalendarViewFlag($publish_calendar_view_flag)
    {
        $this->container['publish_calendar_view_flag'] = $publish_calendar_view_flag;

        return $this;
    }

    /**
     * Gets publish_image_flag
     *
     * @return bool
     */
    public function getPublishImageFlag()
    {
        return $this->container['publish_image_flag'];
    }

    /**
     * Sets publish_image_flag
     *
     * @param bool $publish_image_flag publish_image_flag
     *
     * @return $this
     */
    public function setPublishImageFlag($publish_image_flag)
    {
        $this->container['publish_image_flag'] = $publish_image_flag;

        return $this;
    }

    /**
     * Gets publish_sites
     *
     * @return \Phwebs\Wisenet\Model\PublishSitesCourse[]
     */
    public function getPublishSites()
    {
        return $this->container['publish_sites'];
    }

    /**
     * Sets publish_sites
     *
     * @param \Phwebs\Wisenet\Model\PublishSitesCourse[] $publish_sites publish_sites
     *
     * @return $this
     */
    public function setPublishSites($publish_sites)
    {
        $this->container['publish_sites'] = $publish_sites;

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
