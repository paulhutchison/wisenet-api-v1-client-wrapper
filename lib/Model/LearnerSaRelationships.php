<?php
/**
 * LearnerSaRelationships
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
 * LearnerSaRelationships Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerSaRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerSaRelationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gender' => '\Phwebs\Wisenet\Model\Gender',
'target_group' => '\Phwebs\Wisenet\Model\TargetGroupClient',
'spoken_english_proficiency' => '\Phwebs\Wisenet\Model\SpokenEnglishProficiency',
'english_test_score_type' => '\Phwebs\Wisenet\Model\EnglishTestScoreType',
'home_language' => '\Phwebs\Wisenet\Model\SaLanguage',
'alternative_identifier_type' => '\Phwebs\Wisenet\Model\SaAlternativeIdentifierType',
'previous_alternative_identifier_type' => '\Phwebs\Wisenet\Model\SaAlternativeIdentifierType',
'seeing_health_rating' => '\Phwebs\Wisenet\Model\SaHealthRating',
'hearing_health_rating' => '\Phwebs\Wisenet\Model\SaHealthRating',
'communicating_health_rating' => '\Phwebs\Wisenet\Model\SaHealthRating',
'walking_health_rating' => '\Phwebs\Wisenet\Model\SaHealthRating',
'remembering_health_rating' => '\Phwebs\Wisenet\Model\SaHealthRating',
'selfcare_health_rating' => '\Phwebs\Wisenet\Model\SaHealthRating',
'equity' => '\Phwebs\Wisenet\Model\SaEquity',
'nationality' => '\Phwebs\Wisenet\Model\SaNationality',
'citizen_resident_status' => '\Phwebs\Wisenet\Model\SaCitizenResidentStatus',
'province' => '\Phwebs\Wisenet\Model\SaProvince',
'socioeconomic_status' => '\Phwebs\Wisenet\Model\SaSocioeconomicStatus',
'visa' => '\Phwebs\Wisenet\Model\Visa',
'visa_type' => '\Phwebs\Wisenet\Model\NzVisaType',
'countries' => '\Phwebs\Wisenet\Model\Country[]',
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
'spoken_english_proficiency' => null,
'english_test_score_type' => null,
'home_language' => null,
'alternative_identifier_type' => null,
'previous_alternative_identifier_type' => null,
'seeing_health_rating' => null,
'hearing_health_rating' => null,
'communicating_health_rating' => null,
'walking_health_rating' => null,
'remembering_health_rating' => null,
'selfcare_health_rating' => null,
'equity' => null,
'nationality' => null,
'citizen_resident_status' => null,
'province' => null,
'socioeconomic_status' => null,
'visa' => null,
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
'spoken_english_proficiency' => 'SpokenEnglishProficiency',
'english_test_score_type' => 'EnglishTestScoreType',
'home_language' => 'HomeLanguage',
'alternative_identifier_type' => 'AlternativeIdentifierType',
'previous_alternative_identifier_type' => 'PreviousAlternativeIdentifierType',
'seeing_health_rating' => 'SeeingHealthRating',
'hearing_health_rating' => 'HearingHealthRating',
'communicating_health_rating' => 'CommunicatingHealthRating',
'walking_health_rating' => 'WalkingHealthRating',
'remembering_health_rating' => 'RememberingHealthRating',
'selfcare_health_rating' => 'SelfcareHealthRating',
'equity' => 'Equity',
'nationality' => 'Nationality',
'citizen_resident_status' => 'CitizenResidentStatus',
'province' => 'Province',
'socioeconomic_status' => 'SocioeconomicStatus',
'visa' => 'Visa',
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
'spoken_english_proficiency' => 'setSpokenEnglishProficiency',
'english_test_score_type' => 'setEnglishTestScoreType',
'home_language' => 'setHomeLanguage',
'alternative_identifier_type' => 'setAlternativeIdentifierType',
'previous_alternative_identifier_type' => 'setPreviousAlternativeIdentifierType',
'seeing_health_rating' => 'setSeeingHealthRating',
'hearing_health_rating' => 'setHearingHealthRating',
'communicating_health_rating' => 'setCommunicatingHealthRating',
'walking_health_rating' => 'setWalkingHealthRating',
'remembering_health_rating' => 'setRememberingHealthRating',
'selfcare_health_rating' => 'setSelfcareHealthRating',
'equity' => 'setEquity',
'nationality' => 'setNationality',
'citizen_resident_status' => 'setCitizenResidentStatus',
'province' => 'setProvince',
'socioeconomic_status' => 'setSocioeconomicStatus',
'visa' => 'setVisa',
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
'spoken_english_proficiency' => 'getSpokenEnglishProficiency',
'english_test_score_type' => 'getEnglishTestScoreType',
'home_language' => 'getHomeLanguage',
'alternative_identifier_type' => 'getAlternativeIdentifierType',
'previous_alternative_identifier_type' => 'getPreviousAlternativeIdentifierType',
'seeing_health_rating' => 'getSeeingHealthRating',
'hearing_health_rating' => 'getHearingHealthRating',
'communicating_health_rating' => 'getCommunicatingHealthRating',
'walking_health_rating' => 'getWalkingHealthRating',
'remembering_health_rating' => 'getRememberingHealthRating',
'selfcare_health_rating' => 'getSelfcareHealthRating',
'equity' => 'getEquity',
'nationality' => 'getNationality',
'citizen_resident_status' => 'getCitizenResidentStatus',
'province' => 'getProvince',
'socioeconomic_status' => 'getSocioeconomicStatus',
'visa' => 'getVisa',
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
        $this->container['spoken_english_proficiency'] = isset($data['spoken_english_proficiency']) ? $data['spoken_english_proficiency'] : null;
        $this->container['english_test_score_type'] = isset($data['english_test_score_type']) ? $data['english_test_score_type'] : null;
        $this->container['home_language'] = isset($data['home_language']) ? $data['home_language'] : null;
        $this->container['alternative_identifier_type'] = isset($data['alternative_identifier_type']) ? $data['alternative_identifier_type'] : null;
        $this->container['previous_alternative_identifier_type'] = isset($data['previous_alternative_identifier_type']) ? $data['previous_alternative_identifier_type'] : null;
        $this->container['seeing_health_rating'] = isset($data['seeing_health_rating']) ? $data['seeing_health_rating'] : null;
        $this->container['hearing_health_rating'] = isset($data['hearing_health_rating']) ? $data['hearing_health_rating'] : null;
        $this->container['communicating_health_rating'] = isset($data['communicating_health_rating']) ? $data['communicating_health_rating'] : null;
        $this->container['walking_health_rating'] = isset($data['walking_health_rating']) ? $data['walking_health_rating'] : null;
        $this->container['remembering_health_rating'] = isset($data['remembering_health_rating']) ? $data['remembering_health_rating'] : null;
        $this->container['selfcare_health_rating'] = isset($data['selfcare_health_rating']) ? $data['selfcare_health_rating'] : null;
        $this->container['equity'] = isset($data['equity']) ? $data['equity'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['citizen_resident_status'] = isset($data['citizen_resident_status']) ? $data['citizen_resident_status'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['socioeconomic_status'] = isset($data['socioeconomic_status']) ? $data['socioeconomic_status'] : null;
        $this->container['visa'] = isset($data['visa']) ? $data['visa'] : null;
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
     * Gets home_language
     *
     * @return \Phwebs\Wisenet\Model\SaLanguage
     */
    public function getHomeLanguage()
    {
        return $this->container['home_language'];
    }

    /**
     * Sets home_language
     *
     * @param \Phwebs\Wisenet\Model\SaLanguage $home_language home_language
     *
     * @return $this
     */
    public function setHomeLanguage($home_language)
    {
        $this->container['home_language'] = $home_language;

        return $this;
    }

    /**
     * Gets alternative_identifier_type
     *
     * @return \Phwebs\Wisenet\Model\SaAlternativeIdentifierType
     */
    public function getAlternativeIdentifierType()
    {
        return $this->container['alternative_identifier_type'];
    }

    /**
     * Sets alternative_identifier_type
     *
     * @param \Phwebs\Wisenet\Model\SaAlternativeIdentifierType $alternative_identifier_type alternative_identifier_type
     *
     * @return $this
     */
    public function setAlternativeIdentifierType($alternative_identifier_type)
    {
        $this->container['alternative_identifier_type'] = $alternative_identifier_type;

        return $this;
    }

    /**
     * Gets previous_alternative_identifier_type
     *
     * @return \Phwebs\Wisenet\Model\SaAlternativeIdentifierType
     */
    public function getPreviousAlternativeIdentifierType()
    {
        return $this->container['previous_alternative_identifier_type'];
    }

    /**
     * Sets previous_alternative_identifier_type
     *
     * @param \Phwebs\Wisenet\Model\SaAlternativeIdentifierType $previous_alternative_identifier_type previous_alternative_identifier_type
     *
     * @return $this
     */
    public function setPreviousAlternativeIdentifierType($previous_alternative_identifier_type)
    {
        $this->container['previous_alternative_identifier_type'] = $previous_alternative_identifier_type;

        return $this;
    }

    /**
     * Gets seeing_health_rating
     *
     * @return \Phwebs\Wisenet\Model\SaHealthRating
     */
    public function getSeeingHealthRating()
    {
        return $this->container['seeing_health_rating'];
    }

    /**
     * Sets seeing_health_rating
     *
     * @param \Phwebs\Wisenet\Model\SaHealthRating $seeing_health_rating seeing_health_rating
     *
     * @return $this
     */
    public function setSeeingHealthRating($seeing_health_rating)
    {
        $this->container['seeing_health_rating'] = $seeing_health_rating;

        return $this;
    }

    /**
     * Gets hearing_health_rating
     *
     * @return \Phwebs\Wisenet\Model\SaHealthRating
     */
    public function getHearingHealthRating()
    {
        return $this->container['hearing_health_rating'];
    }

    /**
     * Sets hearing_health_rating
     *
     * @param \Phwebs\Wisenet\Model\SaHealthRating $hearing_health_rating hearing_health_rating
     *
     * @return $this
     */
    public function setHearingHealthRating($hearing_health_rating)
    {
        $this->container['hearing_health_rating'] = $hearing_health_rating;

        return $this;
    }

    /**
     * Gets communicating_health_rating
     *
     * @return \Phwebs\Wisenet\Model\SaHealthRating
     */
    public function getCommunicatingHealthRating()
    {
        return $this->container['communicating_health_rating'];
    }

    /**
     * Sets communicating_health_rating
     *
     * @param \Phwebs\Wisenet\Model\SaHealthRating $communicating_health_rating communicating_health_rating
     *
     * @return $this
     */
    public function setCommunicatingHealthRating($communicating_health_rating)
    {
        $this->container['communicating_health_rating'] = $communicating_health_rating;

        return $this;
    }

    /**
     * Gets walking_health_rating
     *
     * @return \Phwebs\Wisenet\Model\SaHealthRating
     */
    public function getWalkingHealthRating()
    {
        return $this->container['walking_health_rating'];
    }

    /**
     * Sets walking_health_rating
     *
     * @param \Phwebs\Wisenet\Model\SaHealthRating $walking_health_rating walking_health_rating
     *
     * @return $this
     */
    public function setWalkingHealthRating($walking_health_rating)
    {
        $this->container['walking_health_rating'] = $walking_health_rating;

        return $this;
    }

    /**
     * Gets remembering_health_rating
     *
     * @return \Phwebs\Wisenet\Model\SaHealthRating
     */
    public function getRememberingHealthRating()
    {
        return $this->container['remembering_health_rating'];
    }

    /**
     * Sets remembering_health_rating
     *
     * @param \Phwebs\Wisenet\Model\SaHealthRating $remembering_health_rating remembering_health_rating
     *
     * @return $this
     */
    public function setRememberingHealthRating($remembering_health_rating)
    {
        $this->container['remembering_health_rating'] = $remembering_health_rating;

        return $this;
    }

    /**
     * Gets selfcare_health_rating
     *
     * @return \Phwebs\Wisenet\Model\SaHealthRating
     */
    public function getSelfcareHealthRating()
    {
        return $this->container['selfcare_health_rating'];
    }

    /**
     * Sets selfcare_health_rating
     *
     * @param \Phwebs\Wisenet\Model\SaHealthRating $selfcare_health_rating selfcare_health_rating
     *
     * @return $this
     */
    public function setSelfcareHealthRating($selfcare_health_rating)
    {
        $this->container['selfcare_health_rating'] = $selfcare_health_rating;

        return $this;
    }

    /**
     * Gets equity
     *
     * @return \Phwebs\Wisenet\Model\SaEquity
     */
    public function getEquity()
    {
        return $this->container['equity'];
    }

    /**
     * Sets equity
     *
     * @param \Phwebs\Wisenet\Model\SaEquity $equity equity
     *
     * @return $this
     */
    public function setEquity($equity)
    {
        $this->container['equity'] = $equity;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return \Phwebs\Wisenet\Model\SaNationality
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param \Phwebs\Wisenet\Model\SaNationality $nationality nationality
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets citizen_resident_status
     *
     * @return \Phwebs\Wisenet\Model\SaCitizenResidentStatus
     */
    public function getCitizenResidentStatus()
    {
        return $this->container['citizen_resident_status'];
    }

    /**
     * Sets citizen_resident_status
     *
     * @param \Phwebs\Wisenet\Model\SaCitizenResidentStatus $citizen_resident_status citizen_resident_status
     *
     * @return $this
     */
    public function setCitizenResidentStatus($citizen_resident_status)
    {
        $this->container['citizen_resident_status'] = $citizen_resident_status;

        return $this;
    }

    /**
     * Gets province
     *
     * @return \Phwebs\Wisenet\Model\SaProvince
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param \Phwebs\Wisenet\Model\SaProvince $province province
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets socioeconomic_status
     *
     * @return \Phwebs\Wisenet\Model\SaSocioeconomicStatus
     */
    public function getSocioeconomicStatus()
    {
        return $this->container['socioeconomic_status'];
    }

    /**
     * Sets socioeconomic_status
     *
     * @param \Phwebs\Wisenet\Model\SaSocioeconomicStatus $socioeconomic_status socioeconomic_status
     *
     * @return $this
     */
    public function setSocioeconomicStatus($socioeconomic_status)
    {
        $this->container['socioeconomic_status'] = $socioeconomic_status;

        return $this;
    }

    /**
     * Gets visa
     *
     * @return \Phwebs\Wisenet\Model\Visa
     */
    public function getVisa()
    {
        return $this->container['visa'];
    }

    /**
     * Sets visa
     *
     * @param \Phwebs\Wisenet\Model\Visa $visa visa
     *
     * @return $this
     */
    public function setVisa($visa)
    {
        $this->container['visa'] = $visa;

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
