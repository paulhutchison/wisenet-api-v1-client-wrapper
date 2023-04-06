<?php
/**
 * LearnerSgDemographicsEnglishTestScore
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
 * LearnerSgDemographicsEnglishTestScore Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerSgDemographicsEnglishTestScore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerSgDemographicsEnglishTestScore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'overall' => 'int',
'overall_decimal' => 'float',
'type_id' => 'int',
'listening' => 'int',
'listening_decimal' => 'float',
'speaking' => 'int',
'speaking_decimal' => 'float',
'reading' => 'int',
'reading_decimal' => 'float',
'writing' => 'int',
'writing_decimal' => 'float',
'expiry_date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'overall' => 'int32',
'overall_decimal' => null,
'type_id' => 'int32',
'listening' => 'int32',
'listening_decimal' => null,
'speaking' => 'int32',
'speaking_decimal' => null,
'reading' => 'int32',
'reading_decimal' => null,
'writing' => 'int32',
'writing_decimal' => null,
'expiry_date' => 'date-time'    ];

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
        'overall' => 'Overall',
'overall_decimal' => 'OverallDecimal',
'type_id' => 'TypeId',
'listening' => 'Listening',
'listening_decimal' => 'ListeningDecimal',
'speaking' => 'Speaking',
'speaking_decimal' => 'SpeakingDecimal',
'reading' => 'Reading',
'reading_decimal' => 'ReadingDecimal',
'writing' => 'Writing',
'writing_decimal' => 'WritingDecimal',
'expiry_date' => 'ExpiryDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'overall' => 'setOverall',
'overall_decimal' => 'setOverallDecimal',
'type_id' => 'setTypeId',
'listening' => 'setListening',
'listening_decimal' => 'setListeningDecimal',
'speaking' => 'setSpeaking',
'speaking_decimal' => 'setSpeakingDecimal',
'reading' => 'setReading',
'reading_decimal' => 'setReadingDecimal',
'writing' => 'setWriting',
'writing_decimal' => 'setWritingDecimal',
'expiry_date' => 'setExpiryDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'overall' => 'getOverall',
'overall_decimal' => 'getOverallDecimal',
'type_id' => 'getTypeId',
'listening' => 'getListening',
'listening_decimal' => 'getListeningDecimal',
'speaking' => 'getSpeaking',
'speaking_decimal' => 'getSpeakingDecimal',
'reading' => 'getReading',
'reading_decimal' => 'getReadingDecimal',
'writing' => 'getWriting',
'writing_decimal' => 'getWritingDecimal',
'expiry_date' => 'getExpiryDate'    ];

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
        $this->container['overall'] = isset($data['overall']) ? $data['overall'] : null;
        $this->container['overall_decimal'] = isset($data['overall_decimal']) ? $data['overall_decimal'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['listening'] = isset($data['listening']) ? $data['listening'] : null;
        $this->container['listening_decimal'] = isset($data['listening_decimal']) ? $data['listening_decimal'] : null;
        $this->container['speaking'] = isset($data['speaking']) ? $data['speaking'] : null;
        $this->container['speaking_decimal'] = isset($data['speaking_decimal']) ? $data['speaking_decimal'] : null;
        $this->container['reading'] = isset($data['reading']) ? $data['reading'] : null;
        $this->container['reading_decimal'] = isset($data['reading_decimal']) ? $data['reading_decimal'] : null;
        $this->container['writing'] = isset($data['writing']) ? $data['writing'] : null;
        $this->container['writing_decimal'] = isset($data['writing_decimal']) ? $data['writing_decimal'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
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
     * Gets overall
     *
     * @return int
     */
    public function getOverall()
    {
        return $this->container['overall'];
    }

    /**
     * Sets overall
     *
     * @param int $overall The overall english score achieved
     *
     * @return $this
     */
    public function setOverall($overall)
    {
        $this->container['overall'] = $overall;

        return $this;
    }

    /**
     * Gets overall_decimal
     *
     * @return float
     */
    public function getOverallDecimal()
    {
        return $this->container['overall_decimal'];
    }

    /**
     * Sets overall_decimal
     *
     * @param float $overall_decimal The overall english score achieved (decimal)
     *
     * @return $this
     */
    public function setOverallDecimal($overall_decimal)
    {
        $this->container['overall_decimal'] = $overall_decimal;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id See combo EnglishTestScoreTypes
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets listening
     *
     * @return int
     */
    public function getListening()
    {
        return $this->container['listening'];
    }

    /**
     * Sets listening
     *
     * @param int $listening Listening score
     *
     * @return $this
     */
    public function setListening($listening)
    {
        $this->container['listening'] = $listening;

        return $this;
    }

    /**
     * Gets listening_decimal
     *
     * @return float
     */
    public function getListeningDecimal()
    {
        return $this->container['listening_decimal'];
    }

    /**
     * Sets listening_decimal
     *
     * @param float $listening_decimal Listening score  (decimal)
     *
     * @return $this
     */
    public function setListeningDecimal($listening_decimal)
    {
        $this->container['listening_decimal'] = $listening_decimal;

        return $this;
    }

    /**
     * Gets speaking
     *
     * @return int
     */
    public function getSpeaking()
    {
        return $this->container['speaking'];
    }

    /**
     * Sets speaking
     *
     * @param int $speaking Speaking score
     *
     * @return $this
     */
    public function setSpeaking($speaking)
    {
        $this->container['speaking'] = $speaking;

        return $this;
    }

    /**
     * Gets speaking_decimal
     *
     * @return float
     */
    public function getSpeakingDecimal()
    {
        return $this->container['speaking_decimal'];
    }

    /**
     * Sets speaking_decimal
     *
     * @param float $speaking_decimal Speaking score (decimal)
     *
     * @return $this
     */
    public function setSpeakingDecimal($speaking_decimal)
    {
        $this->container['speaking_decimal'] = $speaking_decimal;

        return $this;
    }

    /**
     * Gets reading
     *
     * @return int
     */
    public function getReading()
    {
        return $this->container['reading'];
    }

    /**
     * Sets reading
     *
     * @param int $reading Reading score
     *
     * @return $this
     */
    public function setReading($reading)
    {
        $this->container['reading'] = $reading;

        return $this;
    }

    /**
     * Gets reading_decimal
     *
     * @return float
     */
    public function getReadingDecimal()
    {
        return $this->container['reading_decimal'];
    }

    /**
     * Sets reading_decimal
     *
     * @param float $reading_decimal Reading score (decimal)
     *
     * @return $this
     */
    public function setReadingDecimal($reading_decimal)
    {
        $this->container['reading_decimal'] = $reading_decimal;

        return $this;
    }

    /**
     * Gets writing
     *
     * @return int
     */
    public function getWriting()
    {
        return $this->container['writing'];
    }

    /**
     * Sets writing
     *
     * @param int $writing Writing score
     *
     * @return $this
     */
    public function setWriting($writing)
    {
        $this->container['writing'] = $writing;

        return $this;
    }

    /**
     * Gets writing_decimal
     *
     * @return float
     */
    public function getWritingDecimal()
    {
        return $this->container['writing_decimal'];
    }

    /**
     * Sets writing_decimal
     *
     * @param float $writing_decimal Writing score (decimal)
     *
     * @return $this
     */
    public function setWritingDecimal($writing_decimal)
    {
        $this->container['writing_decimal'] = $writing_decimal;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime $expiry_date Expiry Date of the english test scores
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

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
