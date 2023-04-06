<?php
/**
 * LearnerSgRelationships
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
 * LearnerSgRelationships Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerSgRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerSgRelationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gender' => '\Phwebs\Wisenet\Model\NzGender',
'target_group' => '\Phwebs\Wisenet\Model\TargetGroupClient',
'nric_type' => '\Phwebs\Wisenet\Model\SgNricType',
'prior_education' => '\Phwebs\Wisenet\Model\SgPriorEducation',
'prior_education_wsq' => '\Phwebs\Wisenet\Model\SgPriorEducationWsq',
'primary_language' => '\Phwebs\Wisenet\Model\Language',
'spoken_english_proficiency' => '\Phwebs\Wisenet\Model\SpokenEnglishProficiency',
'english_test_score_type' => '\Phwebs\Wisenet\Model\EnglishTestScoreType',
'race' => '\Phwebs\Wisenet\Model\SgRace',
'nationality' => '\Phwebs\Wisenet\Model\SgNationality',
'residential_status' => '\Phwebs\Wisenet\Model\SgCitizenPrStatus',
'identity_document_type' => '\Phwebs\Wisenet\Model\SgIdentityDocumentType',
'visa_type' => '\Phwebs\Wisenet\Model\NzVisaType',
'countries' => '\Phwebs\Wisenet\Model\NzCountry[]',
'next_of_kin_relationships' => '\Phwebs\Wisenet\Model\NextOfKinRelationship[]',
'vaccine_status' => '\Phwebs\Wisenet\Model\VaccineStatus'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gender' => null,
'target_group' => null,
'nric_type' => null,
'prior_education' => null,
'prior_education_wsq' => null,
'primary_language' => null,
'spoken_english_proficiency' => null,
'english_test_score_type' => null,
'race' => null,
'nationality' => null,
'residential_status' => null,
'identity_document_type' => null,
'visa_type' => null,
'countries' => null,
'next_of_kin_relationships' => null,
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
'target_group' => 'TargetGroup',
'nric_type' => 'NRICType',
'prior_education' => 'PriorEducation',
'prior_education_wsq' => 'PriorEducationWsq',
'primary_language' => 'PrimaryLanguage',
'spoken_english_proficiency' => 'SpokenEnglishProficiency',
'english_test_score_type' => 'EnglishTestScoreType',
'race' => 'Race',
'nationality' => 'Nationality',
'residential_status' => 'ResidentialStatus',
'identity_document_type' => 'IdentityDocumentType',
'visa_type' => 'VisaType',
'countries' => 'Countries',
'next_of_kin_relationships' => 'NextOfKinRelationships',
'vaccine_status' => 'VaccineStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gender' => 'setGender',
'target_group' => 'setTargetGroup',
'nric_type' => 'setNricType',
'prior_education' => 'setPriorEducation',
'prior_education_wsq' => 'setPriorEducationWsq',
'primary_language' => 'setPrimaryLanguage',
'spoken_english_proficiency' => 'setSpokenEnglishProficiency',
'english_test_score_type' => 'setEnglishTestScoreType',
'race' => 'setRace',
'nationality' => 'setNationality',
'residential_status' => 'setResidentialStatus',
'identity_document_type' => 'setIdentityDocumentType',
'visa_type' => 'setVisaType',
'countries' => 'setCountries',
'next_of_kin_relationships' => 'setNextOfKinRelationships',
'vaccine_status' => 'setVaccineStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gender' => 'getGender',
'target_group' => 'getTargetGroup',
'nric_type' => 'getNricType',
'prior_education' => 'getPriorEducation',
'prior_education_wsq' => 'getPriorEducationWsq',
'primary_language' => 'getPrimaryLanguage',
'spoken_english_proficiency' => 'getSpokenEnglishProficiency',
'english_test_score_type' => 'getEnglishTestScoreType',
'race' => 'getRace',
'nationality' => 'getNationality',
'residential_status' => 'getResidentialStatus',
'identity_document_type' => 'getIdentityDocumentType',
'visa_type' => 'getVisaType',
'countries' => 'getCountries',
'next_of_kin_relationships' => 'getNextOfKinRelationships',
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
        $this->container['target_group'] = isset($data['target_group']) ? $data['target_group'] : null;
        $this->container['nric_type'] = isset($data['nric_type']) ? $data['nric_type'] : null;
        $this->container['prior_education'] = isset($data['prior_education']) ? $data['prior_education'] : null;
        $this->container['prior_education_wsq'] = isset($data['prior_education_wsq']) ? $data['prior_education_wsq'] : null;
        $this->container['primary_language'] = isset($data['primary_language']) ? $data['primary_language'] : null;
        $this->container['spoken_english_proficiency'] = isset($data['spoken_english_proficiency']) ? $data['spoken_english_proficiency'] : null;
        $this->container['english_test_score_type'] = isset($data['english_test_score_type']) ? $data['english_test_score_type'] : null;
        $this->container['race'] = isset($data['race']) ? $data['race'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['residential_status'] = isset($data['residential_status']) ? $data['residential_status'] : null;
        $this->container['identity_document_type'] = isset($data['identity_document_type']) ? $data['identity_document_type'] : null;
        $this->container['visa_type'] = isset($data['visa_type']) ? $data['visa_type'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
        $this->container['next_of_kin_relationships'] = isset($data['next_of_kin_relationships']) ? $data['next_of_kin_relationships'] : null;
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
     * @return \Phwebs\Wisenet\Model\NzGender
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Phwebs\Wisenet\Model\NzGender $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets target_group
     *
     * @return \Phwebs\Wisenet\Model\TargetGroupClient
     */
    public function getTargetGroup()
    {
        return $this->container['target_group'];
    }

    /**
     * Sets target_group
     *
     * @param \Phwebs\Wisenet\Model\TargetGroupClient $target_group target_group
     *
     * @return $this
     */
    public function setTargetGroup($target_group)
    {
        $this->container['target_group'] = $target_group;

        return $this;
    }

    /**
     * Gets nric_type
     *
     * @return \Phwebs\Wisenet\Model\SgNricType
     */
    public function getNricType()
    {
        return $this->container['nric_type'];
    }

    /**
     * Sets nric_type
     *
     * @param \Phwebs\Wisenet\Model\SgNricType $nric_type nric_type
     *
     * @return $this
     */
    public function setNricType($nric_type)
    {
        $this->container['nric_type'] = $nric_type;

        return $this;
    }

    /**
     * Gets prior_education
     *
     * @return \Phwebs\Wisenet\Model\SgPriorEducation
     */
    public function getPriorEducation()
    {
        return $this->container['prior_education'];
    }

    /**
     * Sets prior_education
     *
     * @param \Phwebs\Wisenet\Model\SgPriorEducation $prior_education prior_education
     *
     * @return $this
     */
    public function setPriorEducation($prior_education)
    {
        $this->container['prior_education'] = $prior_education;

        return $this;
    }

    /**
     * Gets prior_education_wsq
     *
     * @return \Phwebs\Wisenet\Model\SgPriorEducationWsq
     */
    public function getPriorEducationWsq()
    {
        return $this->container['prior_education_wsq'];
    }

    /**
     * Sets prior_education_wsq
     *
     * @param \Phwebs\Wisenet\Model\SgPriorEducationWsq $prior_education_wsq prior_education_wsq
     *
     * @return $this
     */
    public function setPriorEducationWsq($prior_education_wsq)
    {
        $this->container['prior_education_wsq'] = $prior_education_wsq;

        return $this;
    }

    /**
     * Gets primary_language
     *
     * @return \Phwebs\Wisenet\Model\Language
     */
    public function getPrimaryLanguage()
    {
        return $this->container['primary_language'];
    }

    /**
     * Sets primary_language
     *
     * @param \Phwebs\Wisenet\Model\Language $primary_language primary_language
     *
     * @return $this
     */
    public function setPrimaryLanguage($primary_language)
    {
        $this->container['primary_language'] = $primary_language;

        return $this;
    }

    /**
     * Gets spoken_english_proficiency
     *
     * @return \Phwebs\Wisenet\Model\SpokenEnglishProficiency
     */
    public function getSpokenEnglishProficiency()
    {
        return $this->container['spoken_english_proficiency'];
    }

    /**
     * Sets spoken_english_proficiency
     *
     * @param \Phwebs\Wisenet\Model\SpokenEnglishProficiency $spoken_english_proficiency spoken_english_proficiency
     *
     * @return $this
     */
    public function setSpokenEnglishProficiency($spoken_english_proficiency)
    {
        $this->container['spoken_english_proficiency'] = $spoken_english_proficiency;

        return $this;
    }

    /**
     * Gets english_test_score_type
     *
     * @return \Phwebs\Wisenet\Model\EnglishTestScoreType
     */
    public function getEnglishTestScoreType()
    {
        return $this->container['english_test_score_type'];
    }

    /**
     * Sets english_test_score_type
     *
     * @param \Phwebs\Wisenet\Model\EnglishTestScoreType $english_test_score_type english_test_score_type
     *
     * @return $this
     */
    public function setEnglishTestScoreType($english_test_score_type)
    {
        $this->container['english_test_score_type'] = $english_test_score_type;

        return $this;
    }

    /**
     * Gets race
     *
     * @return \Phwebs\Wisenet\Model\SgRace
     */
    public function getRace()
    {
        return $this->container['race'];
    }

    /**
     * Sets race
     *
     * @param \Phwebs\Wisenet\Model\SgRace $race race
     *
     * @return $this
     */
    public function setRace($race)
    {
        $this->container['race'] = $race;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return \Phwebs\Wisenet\Model\SgNationality
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param \Phwebs\Wisenet\Model\SgNationality $nationality nationality
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets residential_status
     *
     * @return \Phwebs\Wisenet\Model\SgCitizenPrStatus
     */
    public function getResidentialStatus()
    {
        return $this->container['residential_status'];
    }

    /**
     * Sets residential_status
     *
     * @param \Phwebs\Wisenet\Model\SgCitizenPrStatus $residential_status residential_status
     *
     * @return $this
     */
    public function setResidentialStatus($residential_status)
    {
        $this->container['residential_status'] = $residential_status;

        return $this;
    }

    /**
     * Gets identity_document_type
     *
     * @return \Phwebs\Wisenet\Model\SgIdentityDocumentType
     */
    public function getIdentityDocumentType()
    {
        return $this->container['identity_document_type'];
    }

    /**
     * Sets identity_document_type
     *
     * @param \Phwebs\Wisenet\Model\SgIdentityDocumentType $identity_document_type identity_document_type
     *
     * @return $this
     */
    public function setIdentityDocumentType($identity_document_type)
    {
        $this->container['identity_document_type'] = $identity_document_type;

        return $this;
    }

    /**
     * Gets visa_type
     *
     * @return \Phwebs\Wisenet\Model\NzVisaType
     */
    public function getVisaType()
    {
        return $this->container['visa_type'];
    }

    /**
     * Sets visa_type
     *
     * @param \Phwebs\Wisenet\Model\NzVisaType $visa_type visa_type
     *
     * @return $this
     */
    public function setVisaType($visa_type)
    {
        $this->container['visa_type'] = $visa_type;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return \Phwebs\Wisenet\Model\NzCountry[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \Phwebs\Wisenet\Model\NzCountry[] $countries countries
     *
     * @return $this
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets next_of_kin_relationships
     *
     * @return \Phwebs\Wisenet\Model\NextOfKinRelationship[]
     */
    public function getNextOfKinRelationships()
    {
        return $this->container['next_of_kin_relationships'];
    }

    /**
     * Sets next_of_kin_relationships
     *
     * @param \Phwebs\Wisenet\Model\NextOfKinRelationship[] $next_of_kin_relationships next_of_kin_relationships
     *
     * @return $this
     */
    public function setNextOfKinRelationships($next_of_kin_relationships)
    {
        $this->container['next_of_kin_relationships'] = $next_of_kin_relationships;

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
