<?php
/**
 * LearnerNzRelationships
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
 * LearnerNzRelationships Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerNzRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerNzRelationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gender' => '\Phwebs\Wisenet\Model\NzGender',
'target_group' => '\Phwebs\Wisenet\Model\TargetGroupClient',
'fees_free_eligile' => '\Phwebs\Wisenet\Model\FeesFreeEligible',
'employment_status' => '\Phwebs\Wisenet\Model\EmploymentStatus',
'last_school_attended' => '\Phwebs\Wisenet\Model\NzLastSchoolAttended',
'secondary_qualification' => '\Phwebs\Wisenet\Model\NzSecondaryQualification',
'main_activity_prior_to_study' => '\Phwebs\Wisenet\Model\NzMainActivityPriorToStudy',
'prior_education_flag' => '\Phwebs\Wisenet\Model\PriorEducationFlag',
'prior_educations' => '\Phwebs\Wisenet\Model\PriorEducation[]',
'primary_language' => '\Phwebs\Wisenet\Model\Language',
'spoken_english_proficiency' => '\Phwebs\Wisenet\Model\SpokenEnglishProficiency',
'english_test_score_type' => '\Phwebs\Wisenet\Model\EnglishTestScoreType',
'residential_status' => '\Phwebs\Wisenet\Model\NzResidentialStatus',
'iwi_affiliation1' => '\Phwebs\Wisenet\Model\NzIwiAffiliation',
'iwi_affiliation2' => '\Phwebs\Wisenet\Model\NzIwiAffiliation',
'iwi_affiliation3' => '\Phwebs\Wisenet\Model\NzIwiAffiliation',
'ethnicity1' => '\Phwebs\Wisenet\Model\NzEthnicity',
'ethnicity2' => '\Phwebs\Wisenet\Model\NzEthnicity',
'ethnicity3' => '\Phwebs\Wisenet\Model\NzEthnicity',
'disability_flag' => '\Phwebs\Wisenet\Model\NzDisabilityFlag',
'disability_accessed' => '\Phwebs\Wisenet\Model\NzDisabilityAccessedFlag',
'disabilities' => '\Phwebs\Wisenet\Model\Disability[]',
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
'fees_free_eligile' => null,
'employment_status' => null,
'last_school_attended' => null,
'secondary_qualification' => null,
'main_activity_prior_to_study' => null,
'prior_education_flag' => null,
'prior_educations' => null,
'primary_language' => null,
'spoken_english_proficiency' => null,
'english_test_score_type' => null,
'residential_status' => null,
'iwi_affiliation1' => null,
'iwi_affiliation2' => null,
'iwi_affiliation3' => null,
'ethnicity1' => null,
'ethnicity2' => null,
'ethnicity3' => null,
'disability_flag' => null,
'disability_accessed' => null,
'disabilities' => null,
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
'fees_free_eligile' => 'FeesFreeEligile',
'employment_status' => 'EmploymentStatus',
'last_school_attended' => 'LastSchoolAttended',
'secondary_qualification' => 'SecondaryQualification',
'main_activity_prior_to_study' => 'MainActivityPriorToStudy',
'prior_education_flag' => 'PriorEducationFlag',
'prior_educations' => 'PriorEducations',
'primary_language' => 'PrimaryLanguage',
'spoken_english_proficiency' => 'SpokenEnglishProficiency',
'english_test_score_type' => 'EnglishTestScoreType',
'residential_status' => 'ResidentialStatus',
'iwi_affiliation1' => 'IwiAffiliation1',
'iwi_affiliation2' => 'IwiAffiliation2',
'iwi_affiliation3' => 'IwiAffiliation3',
'ethnicity1' => 'Ethnicity1',
'ethnicity2' => 'Ethnicity2',
'ethnicity3' => 'Ethnicity3',
'disability_flag' => 'DisabilityFlag',
'disability_accessed' => 'DisabilityAccessed',
'disabilities' => 'Disabilities',
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
'fees_free_eligile' => 'setFeesFreeEligile',
'employment_status' => 'setEmploymentStatus',
'last_school_attended' => 'setLastSchoolAttended',
'secondary_qualification' => 'setSecondaryQualification',
'main_activity_prior_to_study' => 'setMainActivityPriorToStudy',
'prior_education_flag' => 'setPriorEducationFlag',
'prior_educations' => 'setPriorEducations',
'primary_language' => 'setPrimaryLanguage',
'spoken_english_proficiency' => 'setSpokenEnglishProficiency',
'english_test_score_type' => 'setEnglishTestScoreType',
'residential_status' => 'setResidentialStatus',
'iwi_affiliation1' => 'setIwiAffiliation1',
'iwi_affiliation2' => 'setIwiAffiliation2',
'iwi_affiliation3' => 'setIwiAffiliation3',
'ethnicity1' => 'setEthnicity1',
'ethnicity2' => 'setEthnicity2',
'ethnicity3' => 'setEthnicity3',
'disability_flag' => 'setDisabilityFlag',
'disability_accessed' => 'setDisabilityAccessed',
'disabilities' => 'setDisabilities',
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
'fees_free_eligile' => 'getFeesFreeEligile',
'employment_status' => 'getEmploymentStatus',
'last_school_attended' => 'getLastSchoolAttended',
'secondary_qualification' => 'getSecondaryQualification',
'main_activity_prior_to_study' => 'getMainActivityPriorToStudy',
'prior_education_flag' => 'getPriorEducationFlag',
'prior_educations' => 'getPriorEducations',
'primary_language' => 'getPrimaryLanguage',
'spoken_english_proficiency' => 'getSpokenEnglishProficiency',
'english_test_score_type' => 'getEnglishTestScoreType',
'residential_status' => 'getResidentialStatus',
'iwi_affiliation1' => 'getIwiAffiliation1',
'iwi_affiliation2' => 'getIwiAffiliation2',
'iwi_affiliation3' => 'getIwiAffiliation3',
'ethnicity1' => 'getEthnicity1',
'ethnicity2' => 'getEthnicity2',
'ethnicity3' => 'getEthnicity3',
'disability_flag' => 'getDisabilityFlag',
'disability_accessed' => 'getDisabilityAccessed',
'disabilities' => 'getDisabilities',
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
        $this->container['fees_free_eligile'] = isset($data['fees_free_eligile']) ? $data['fees_free_eligile'] : null;
        $this->container['employment_status'] = isset($data['employment_status']) ? $data['employment_status'] : null;
        $this->container['last_school_attended'] = isset($data['last_school_attended']) ? $data['last_school_attended'] : null;
        $this->container['secondary_qualification'] = isset($data['secondary_qualification']) ? $data['secondary_qualification'] : null;
        $this->container['main_activity_prior_to_study'] = isset($data['main_activity_prior_to_study']) ? $data['main_activity_prior_to_study'] : null;
        $this->container['prior_education_flag'] = isset($data['prior_education_flag']) ? $data['prior_education_flag'] : null;
        $this->container['prior_educations'] = isset($data['prior_educations']) ? $data['prior_educations'] : null;
        $this->container['primary_language'] = isset($data['primary_language']) ? $data['primary_language'] : null;
        $this->container['spoken_english_proficiency'] = isset($data['spoken_english_proficiency']) ? $data['spoken_english_proficiency'] : null;
        $this->container['english_test_score_type'] = isset($data['english_test_score_type']) ? $data['english_test_score_type'] : null;
        $this->container['residential_status'] = isset($data['residential_status']) ? $data['residential_status'] : null;
        $this->container['iwi_affiliation1'] = isset($data['iwi_affiliation1']) ? $data['iwi_affiliation1'] : null;
        $this->container['iwi_affiliation2'] = isset($data['iwi_affiliation2']) ? $data['iwi_affiliation2'] : null;
        $this->container['iwi_affiliation3'] = isset($data['iwi_affiliation3']) ? $data['iwi_affiliation3'] : null;
        $this->container['ethnicity1'] = isset($data['ethnicity1']) ? $data['ethnicity1'] : null;
        $this->container['ethnicity2'] = isset($data['ethnicity2']) ? $data['ethnicity2'] : null;
        $this->container['ethnicity3'] = isset($data['ethnicity3']) ? $data['ethnicity3'] : null;
        $this->container['disability_flag'] = isset($data['disability_flag']) ? $data['disability_flag'] : null;
        $this->container['disability_accessed'] = isset($data['disability_accessed']) ? $data['disability_accessed'] : null;
        $this->container['disabilities'] = isset($data['disabilities']) ? $data['disabilities'] : null;
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
     * Gets fees_free_eligile
     *
     * @return \Phwebs\Wisenet\Model\FeesFreeEligible
     */
    public function getFeesFreeEligile()
    {
        return $this->container['fees_free_eligile'];
    }

    /**
     * Sets fees_free_eligile
     *
     * @param \Phwebs\Wisenet\Model\FeesFreeEligible $fees_free_eligile fees_free_eligile
     *
     * @return $this
     */
    public function setFeesFreeEligile($fees_free_eligile)
    {
        $this->container['fees_free_eligile'] = $fees_free_eligile;

        return $this;
    }

    /**
     * Gets employment_status
     *
     * @return \Phwebs\Wisenet\Model\EmploymentStatus
     */
    public function getEmploymentStatus()
    {
        return $this->container['employment_status'];
    }

    /**
     * Sets employment_status
     *
     * @param \Phwebs\Wisenet\Model\EmploymentStatus $employment_status employment_status
     *
     * @return $this
     */
    public function setEmploymentStatus($employment_status)
    {
        $this->container['employment_status'] = $employment_status;

        return $this;
    }

    /**
     * Gets last_school_attended
     *
     * @return \Phwebs\Wisenet\Model\NzLastSchoolAttended
     */
    public function getLastSchoolAttended()
    {
        return $this->container['last_school_attended'];
    }

    /**
     * Sets last_school_attended
     *
     * @param \Phwebs\Wisenet\Model\NzLastSchoolAttended $last_school_attended last_school_attended
     *
     * @return $this
     */
    public function setLastSchoolAttended($last_school_attended)
    {
        $this->container['last_school_attended'] = $last_school_attended;

        return $this;
    }

    /**
     * Gets secondary_qualification
     *
     * @return \Phwebs\Wisenet\Model\NzSecondaryQualification
     */
    public function getSecondaryQualification()
    {
        return $this->container['secondary_qualification'];
    }

    /**
     * Sets secondary_qualification
     *
     * @param \Phwebs\Wisenet\Model\NzSecondaryQualification $secondary_qualification secondary_qualification
     *
     * @return $this
     */
    public function setSecondaryQualification($secondary_qualification)
    {
        $this->container['secondary_qualification'] = $secondary_qualification;

        return $this;
    }

    /**
     * Gets main_activity_prior_to_study
     *
     * @return \Phwebs\Wisenet\Model\NzMainActivityPriorToStudy
     */
    public function getMainActivityPriorToStudy()
    {
        return $this->container['main_activity_prior_to_study'];
    }

    /**
     * Sets main_activity_prior_to_study
     *
     * @param \Phwebs\Wisenet\Model\NzMainActivityPriorToStudy $main_activity_prior_to_study main_activity_prior_to_study
     *
     * @return $this
     */
    public function setMainActivityPriorToStudy($main_activity_prior_to_study)
    {
        $this->container['main_activity_prior_to_study'] = $main_activity_prior_to_study;

        return $this;
    }

    /**
     * Gets prior_education_flag
     *
     * @return \Phwebs\Wisenet\Model\PriorEducationFlag
     */
    public function getPriorEducationFlag()
    {
        return $this->container['prior_education_flag'];
    }

    /**
     * Sets prior_education_flag
     *
     * @param \Phwebs\Wisenet\Model\PriorEducationFlag $prior_education_flag prior_education_flag
     *
     * @return $this
     */
    public function setPriorEducationFlag($prior_education_flag)
    {
        $this->container['prior_education_flag'] = $prior_education_flag;

        return $this;
    }

    /**
     * Gets prior_educations
     *
     * @return \Phwebs\Wisenet\Model\PriorEducation[]
     */
    public function getPriorEducations()
    {
        return $this->container['prior_educations'];
    }

    /**
     * Sets prior_educations
     *
     * @param \Phwebs\Wisenet\Model\PriorEducation[] $prior_educations prior_educations
     *
     * @return $this
     */
    public function setPriorEducations($prior_educations)
    {
        $this->container['prior_educations'] = $prior_educations;

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
     * Gets residential_status
     *
     * @return \Phwebs\Wisenet\Model\NzResidentialStatus
     */
    public function getResidentialStatus()
    {
        return $this->container['residential_status'];
    }

    /**
     * Sets residential_status
     *
     * @param \Phwebs\Wisenet\Model\NzResidentialStatus $residential_status residential_status
     *
     * @return $this
     */
    public function setResidentialStatus($residential_status)
    {
        $this->container['residential_status'] = $residential_status;

        return $this;
    }

    /**
     * Gets iwi_affiliation1
     *
     * @return \Phwebs\Wisenet\Model\NzIwiAffiliation
     */
    public function getIwiAffiliation1()
    {
        return $this->container['iwi_affiliation1'];
    }

    /**
     * Sets iwi_affiliation1
     *
     * @param \Phwebs\Wisenet\Model\NzIwiAffiliation $iwi_affiliation1 iwi_affiliation1
     *
     * @return $this
     */
    public function setIwiAffiliation1($iwi_affiliation1)
    {
        $this->container['iwi_affiliation1'] = $iwi_affiliation1;

        return $this;
    }

    /**
     * Gets iwi_affiliation2
     *
     * @return \Phwebs\Wisenet\Model\NzIwiAffiliation
     */
    public function getIwiAffiliation2()
    {
        return $this->container['iwi_affiliation2'];
    }

    /**
     * Sets iwi_affiliation2
     *
     * @param \Phwebs\Wisenet\Model\NzIwiAffiliation $iwi_affiliation2 iwi_affiliation2
     *
     * @return $this
     */
    public function setIwiAffiliation2($iwi_affiliation2)
    {
        $this->container['iwi_affiliation2'] = $iwi_affiliation2;

        return $this;
    }

    /**
     * Gets iwi_affiliation3
     *
     * @return \Phwebs\Wisenet\Model\NzIwiAffiliation
     */
    public function getIwiAffiliation3()
    {
        return $this->container['iwi_affiliation3'];
    }

    /**
     * Sets iwi_affiliation3
     *
     * @param \Phwebs\Wisenet\Model\NzIwiAffiliation $iwi_affiliation3 iwi_affiliation3
     *
     * @return $this
     */
    public function setIwiAffiliation3($iwi_affiliation3)
    {
        $this->container['iwi_affiliation3'] = $iwi_affiliation3;

        return $this;
    }

    /**
     * Gets ethnicity1
     *
     * @return \Phwebs\Wisenet\Model\NzEthnicity
     */
    public function getEthnicity1()
    {
        return $this->container['ethnicity1'];
    }

    /**
     * Sets ethnicity1
     *
     * @param \Phwebs\Wisenet\Model\NzEthnicity $ethnicity1 ethnicity1
     *
     * @return $this
     */
    public function setEthnicity1($ethnicity1)
    {
        $this->container['ethnicity1'] = $ethnicity1;

        return $this;
    }

    /**
     * Gets ethnicity2
     *
     * @return \Phwebs\Wisenet\Model\NzEthnicity
     */
    public function getEthnicity2()
    {
        return $this->container['ethnicity2'];
    }

    /**
     * Sets ethnicity2
     *
     * @param \Phwebs\Wisenet\Model\NzEthnicity $ethnicity2 ethnicity2
     *
     * @return $this
     */
    public function setEthnicity2($ethnicity2)
    {
        $this->container['ethnicity2'] = $ethnicity2;

        return $this;
    }

    /**
     * Gets ethnicity3
     *
     * @return \Phwebs\Wisenet\Model\NzEthnicity
     */
    public function getEthnicity3()
    {
        return $this->container['ethnicity3'];
    }

    /**
     * Sets ethnicity3
     *
     * @param \Phwebs\Wisenet\Model\NzEthnicity $ethnicity3 ethnicity3
     *
     * @return $this
     */
    public function setEthnicity3($ethnicity3)
    {
        $this->container['ethnicity3'] = $ethnicity3;

        return $this;
    }

    /**
     * Gets disability_flag
     *
     * @return \Phwebs\Wisenet\Model\NzDisabilityFlag
     */
    public function getDisabilityFlag()
    {
        return $this->container['disability_flag'];
    }

    /**
     * Sets disability_flag
     *
     * @param \Phwebs\Wisenet\Model\NzDisabilityFlag $disability_flag disability_flag
     *
     * @return $this
     */
    public function setDisabilityFlag($disability_flag)
    {
        $this->container['disability_flag'] = $disability_flag;

        return $this;
    }

    /**
     * Gets disability_accessed
     *
     * @return \Phwebs\Wisenet\Model\NzDisabilityAccessedFlag
     */
    public function getDisabilityAccessed()
    {
        return $this->container['disability_accessed'];
    }

    /**
     * Sets disability_accessed
     *
     * @param \Phwebs\Wisenet\Model\NzDisabilityAccessedFlag $disability_accessed disability_accessed
     *
     * @return $this
     */
    public function setDisabilityAccessed($disability_accessed)
    {
        $this->container['disability_accessed'] = $disability_accessed;

        return $this;
    }

    /**
     * Gets disabilities
     *
     * @return \Phwebs\Wisenet\Model\Disability[]
     */
    public function getDisabilities()
    {
        return $this->container['disabilities'];
    }

    /**
     * Sets disabilities
     *
     * @param \Phwebs\Wisenet\Model\Disability[] $disabilities disabilities
     *
     * @return $this
     */
    public function setDisabilities($disabilities)
    {
        $this->container['disabilities'] = $disabilities;

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
