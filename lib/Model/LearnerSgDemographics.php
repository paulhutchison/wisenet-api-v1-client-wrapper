<?php
/**
 * LearnerSgDemographics
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
 * LearnerSgDemographics Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerSgDemographics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerSgDemographics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'prior_education_id' => 'int',
'prior_education_wsqid' => 'int',
'primary_language_id' => 'int',
'spoken_english_proficiency_id' => 'int',
'english_test_score' => '\Phwebs\Wisenet\Model\LearnerSgDemographicsEnglishTestScore',
'race_id' => 'int',
'country_of_nationality_id' => 'int',
'nationality_id' => 'int',
'residential_status_id' => 'int',
'identity_document_type_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'prior_education_id' => 'int32',
'prior_education_wsqid' => 'int32',
'primary_language_id' => 'int32',
'spoken_english_proficiency_id' => 'int32',
'english_test_score' => null,
'race_id' => 'int32',
'country_of_nationality_id' => 'int32',
'nationality_id' => 'int32',
'residential_status_id' => 'int32',
'identity_document_type_id' => 'int32'    ];

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
        'prior_education_id' => 'PriorEducationId',
'prior_education_wsqid' => 'PriorEducationWSQId',
'primary_language_id' => 'PrimaryLanguageId',
'spoken_english_proficiency_id' => 'SpokenEnglishProficiencyId',
'english_test_score' => 'EnglishTestScore',
'race_id' => 'RaceId',
'country_of_nationality_id' => 'CountryOfNationalityId',
'nationality_id' => 'NationalityId',
'residential_status_id' => 'ResidentialStatusId',
'identity_document_type_id' => 'IdentityDocumentTypeId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prior_education_id' => 'setPriorEducationId',
'prior_education_wsqid' => 'setPriorEducationWsqid',
'primary_language_id' => 'setPrimaryLanguageId',
'spoken_english_proficiency_id' => 'setSpokenEnglishProficiencyId',
'english_test_score' => 'setEnglishTestScore',
'race_id' => 'setRaceId',
'country_of_nationality_id' => 'setCountryOfNationalityId',
'nationality_id' => 'setNationalityId',
'residential_status_id' => 'setResidentialStatusId',
'identity_document_type_id' => 'setIdentityDocumentTypeId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prior_education_id' => 'getPriorEducationId',
'prior_education_wsqid' => 'getPriorEducationWsqid',
'primary_language_id' => 'getPrimaryLanguageId',
'spoken_english_proficiency_id' => 'getSpokenEnglishProficiencyId',
'english_test_score' => 'getEnglishTestScore',
'race_id' => 'getRaceId',
'country_of_nationality_id' => 'getCountryOfNationalityId',
'nationality_id' => 'getNationalityId',
'residential_status_id' => 'getResidentialStatusId',
'identity_document_type_id' => 'getIdentityDocumentTypeId'    ];

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
        $this->container['prior_education_id'] = isset($data['prior_education_id']) ? $data['prior_education_id'] : null;
        $this->container['prior_education_wsqid'] = isset($data['prior_education_wsqid']) ? $data['prior_education_wsqid'] : null;
        $this->container['primary_language_id'] = isset($data['primary_language_id']) ? $data['primary_language_id'] : null;
        $this->container['spoken_english_proficiency_id'] = isset($data['spoken_english_proficiency_id']) ? $data['spoken_english_proficiency_id'] : null;
        $this->container['english_test_score'] = isset($data['english_test_score']) ? $data['english_test_score'] : null;
        $this->container['race_id'] = isset($data['race_id']) ? $data['race_id'] : null;
        $this->container['country_of_nationality_id'] = isset($data['country_of_nationality_id']) ? $data['country_of_nationality_id'] : null;
        $this->container['nationality_id'] = isset($data['nationality_id']) ? $data['nationality_id'] : null;
        $this->container['residential_status_id'] = isset($data['residential_status_id']) ? $data['residential_status_id'] : null;
        $this->container['identity_document_type_id'] = isset($data['identity_document_type_id']) ? $data['identity_document_type_id'] : null;
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
     * Gets prior_education_id
     *
     * @return int
     */
    public function getPriorEducationId()
    {
        return $this->container['prior_education_id'];
    }

    /**
     * Sets prior_education_id
     *
     * @param int $prior_education_id See combo SgPriorEducations
     *
     * @return $this
     */
    public function setPriorEducationId($prior_education_id)
    {
        $this->container['prior_education_id'] = $prior_education_id;

        return $this;
    }

    /**
     * Gets prior_education_wsqid
     *
     * @return int
     */
    public function getPriorEducationWsqid()
    {
        return $this->container['prior_education_wsqid'];
    }

    /**
     * Sets prior_education_wsqid
     *
     * @param int $prior_education_wsqid See combo SgWsqPriorEducations
     *
     * @return $this
     */
    public function setPriorEducationWsqid($prior_education_wsqid)
    {
        $this->container['prior_education_wsqid'] = $prior_education_wsqid;

        return $this;
    }

    /**
     * Gets primary_language_id
     *
     * @return int
     */
    public function getPrimaryLanguageId()
    {
        return $this->container['primary_language_id'];
    }

    /**
     * Sets primary_language_id
     *
     * @param int $primary_language_id See combo Languages
     *
     * @return $this
     */
    public function setPrimaryLanguageId($primary_language_id)
    {
        $this->container['primary_language_id'] = $primary_language_id;

        return $this;
    }

    /**
     * Gets spoken_english_proficiency_id
     *
     * @return int
     */
    public function getSpokenEnglishProficiencyId()
    {
        return $this->container['spoken_english_proficiency_id'];
    }

    /**
     * Sets spoken_english_proficiency_id
     *
     * @param int $spoken_english_proficiency_id See combo SpokenEnglishProficiencies
     *
     * @return $this
     */
    public function setSpokenEnglishProficiencyId($spoken_english_proficiency_id)
    {
        $this->container['spoken_english_proficiency_id'] = $spoken_english_proficiency_id;

        return $this;
    }

    /**
     * Gets english_test_score
     *
     * @return \Phwebs\Wisenet\Model\LearnerSgDemographicsEnglishTestScore
     */
    public function getEnglishTestScore()
    {
        return $this->container['english_test_score'];
    }

    /**
     * Sets english_test_score
     *
     * @param \Phwebs\Wisenet\Model\LearnerSgDemographicsEnglishTestScore $english_test_score english_test_score
     *
     * @return $this
     */
    public function setEnglishTestScore($english_test_score)
    {
        $this->container['english_test_score'] = $english_test_score;

        return $this;
    }

    /**
     * Gets race_id
     *
     * @return int
     */
    public function getRaceId()
    {
        return $this->container['race_id'];
    }

    /**
     * Sets race_id
     *
     * @param int $race_id See combo SgRaces
     *
     * @return $this
     */
    public function setRaceId($race_id)
    {
        $this->container['race_id'] = $race_id;

        return $this;
    }

    /**
     * Gets country_of_nationality_id
     *
     * @return int
     */
    public function getCountryOfNationalityId()
    {
        return $this->container['country_of_nationality_id'];
    }

    /**
     * Sets country_of_nationality_id
     *
     * @param int $country_of_nationality_id See combo NzCountries
     *
     * @return $this
     */
    public function setCountryOfNationalityId($country_of_nationality_id)
    {
        $this->container['country_of_nationality_id'] = $country_of_nationality_id;

        return $this;
    }

    /**
     * Gets nationality_id
     *
     * @return int
     */
    public function getNationalityId()
    {
        return $this->container['nationality_id'];
    }

    /**
     * Sets nationality_id
     *
     * @param int $nationality_id See combo SgNationalities
     *
     * @return $this
     */
    public function setNationalityId($nationality_id)
    {
        $this->container['nationality_id'] = $nationality_id;

        return $this;
    }

    /**
     * Gets residential_status_id
     *
     * @return int
     */
    public function getResidentialStatusId()
    {
        return $this->container['residential_status_id'];
    }

    /**
     * Sets residential_status_id
     *
     * @param int $residential_status_id See combo SgResidentialStatuses
     *
     * @return $this
     */
    public function setResidentialStatusId($residential_status_id)
    {
        $this->container['residential_status_id'] = $residential_status_id;

        return $this;
    }

    /**
     * Gets identity_document_type_id
     *
     * @return int
     */
    public function getIdentityDocumentTypeId()
    {
        return $this->container['identity_document_type_id'];
    }

    /**
     * Sets identity_document_type_id
     *
     * @param int $identity_document_type_id See combo SgIdentityDocumentTypes
     *
     * @return $this
     */
    public function setIdentityDocumentTypeId($identity_document_type_id)
    {
        $this->container['identity_document_type_id'] = $identity_document_type_id;

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
