<?php
/**
 * LearnerAuRelationships
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
 * LearnerAuRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerAuRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerAuRelationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gender' => '\Phwebs\Wisenet\Model\Gender',
'age_category' => '\Phwebs\Wisenet\Model\AgeCategory',
'target_group' => '\Phwebs\Wisenet\Model\TargetGroupClient',
'employment_status' => '\Phwebs\Wisenet\Model\EmploymentStatus',
'occupation_identifier' => '\Phwebs\Wisenet\Model\OccupationIdentifier',
'industry_of_employment' => '\Phwebs\Wisenet\Model\IndustryOfEmployment',
'highest_school_level_completed' => '\Phwebs\Wisenet\Model\HighestSchoolLevel',
'primary_language' => '\Phwebs\Wisenet\Model\Language',
'spoken_english_proficiency' => '\Phwebs\Wisenet\Model\SpokenEnglishProficiency',
'indigenous_status' => '\Phwebs\Wisenet\Model\IndigenousStatus',
'prior_education_flag' => '\Phwebs\Wisenet\Model\PriorEducationFlag',
'prior_educations' => '\Phwebs\Wisenet\Model\PriorEducation[]',
'prior_education_types' => '\Phwebs\Wisenet\Model\PriorEducationType[]',
'disability_flag' => '\Phwebs\Wisenet\Model\DisabilityFlag',
'disabilities' => '\Phwebs\Wisenet\Model\Disability[]',
'english_test_score_type' => '\Phwebs\Wisenet\Model\EnglishTestScoreType',
'survey_status' => '\Phwebs\Wisenet\Model\SurveyStatus',
'fh_citizen_resident' => '\Phwebs\Wisenet\Model\FhCitizenResident',
'citizen_residents' => '\Phwebs\Wisenet\Model\FhCitizenResident[]',
'fh_highest_education_level' => '\Phwebs\Wisenet\Model\FhHighestEducationLevel',
'fh_indigenous_status' => '\Phwebs\Wisenet\Model\FhIndigenousStatus',
'fh_parent_education_level1' => '\Phwebs\Wisenet\Model\FhParentEducationLevel',
'fh_parent_education_level2' => '\Phwebs\Wisenet\Model\FhParentEducationLevel',
'fh_additional_entrance_criteria' => '\Phwebs\Wisenet\Model\FhAdditionalEntranceCriteria',
'fh_basis_for_admission' => '\Phwebs\Wisenet\Model\FhBasisForAdmission',
'visa_type' => '\Phwebs\Wisenet\Model\VisaType',
'countries' => '\Phwebs\Wisenet\Model\Country[]',
'states' => '\Phwebs\Wisenet\Model\State[]',
'next_of_kin_relationships' => '\Phwebs\Wisenet\Model\NextOfKinRelationship[]',
'vaccine_status' => '\Phwebs\Wisenet\Model\VaccineStatus'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gender' => null,
'age_category' => null,
'target_group' => null,
'employment_status' => null,
'occupation_identifier' => null,
'industry_of_employment' => null,
'highest_school_level_completed' => null,
'primary_language' => null,
'spoken_english_proficiency' => null,
'indigenous_status' => null,
'prior_education_flag' => null,
'prior_educations' => null,
'prior_education_types' => null,
'disability_flag' => null,
'disabilities' => null,
'english_test_score_type' => null,
'survey_status' => null,
'fh_citizen_resident' => null,
'citizen_residents' => null,
'fh_highest_education_level' => null,
'fh_indigenous_status' => null,
'fh_parent_education_level1' => null,
'fh_parent_education_level2' => null,
'fh_additional_entrance_criteria' => null,
'fh_basis_for_admission' => null,
'visa_type' => null,
'countries' => null,
'states' => null,
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
'age_category' => 'AgeCategory',
'target_group' => 'TargetGroup',
'employment_status' => 'EmploymentStatus',
'occupation_identifier' => 'OccupationIdentifier',
'industry_of_employment' => 'IndustryOfEmployment',
'highest_school_level_completed' => 'HighestSchoolLevelCompleted',
'primary_language' => 'PrimaryLanguage',
'spoken_english_proficiency' => 'SpokenEnglishProficiency',
'indigenous_status' => 'IndigenousStatus',
'prior_education_flag' => 'PriorEducationFlag',
'prior_educations' => 'PriorEducations',
'prior_education_types' => 'PriorEducationTypes',
'disability_flag' => 'DisabilityFlag',
'disabilities' => 'Disabilities',
'english_test_score_type' => 'EnglishTestScoreType',
'survey_status' => 'SurveyStatus',
'fh_citizen_resident' => 'FhCitizenResident',
'citizen_residents' => 'CitizenResidents',
'fh_highest_education_level' => 'FhHighestEducationLevel',
'fh_indigenous_status' => 'FhIndigenousStatus',
'fh_parent_education_level1' => 'FhParentEducationLevel1',
'fh_parent_education_level2' => 'FhParentEducationLevel2',
'fh_additional_entrance_criteria' => 'FhAdditionalEntranceCriteria',
'fh_basis_for_admission' => 'FhBasisForAdmission',
'visa_type' => 'VisaType',
'countries' => 'Countries',
'states' => 'States',
'next_of_kin_relationships' => 'NextOfKinRelationships',
'vaccine_status' => 'VaccineStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gender' => 'setGender',
'age_category' => 'setAgeCategory',
'target_group' => 'setTargetGroup',
'employment_status' => 'setEmploymentStatus',
'occupation_identifier' => 'setOccupationIdentifier',
'industry_of_employment' => 'setIndustryOfEmployment',
'highest_school_level_completed' => 'setHighestSchoolLevelCompleted',
'primary_language' => 'setPrimaryLanguage',
'spoken_english_proficiency' => 'setSpokenEnglishProficiency',
'indigenous_status' => 'setIndigenousStatus',
'prior_education_flag' => 'setPriorEducationFlag',
'prior_educations' => 'setPriorEducations',
'prior_education_types' => 'setPriorEducationTypes',
'disability_flag' => 'setDisabilityFlag',
'disabilities' => 'setDisabilities',
'english_test_score_type' => 'setEnglishTestScoreType',
'survey_status' => 'setSurveyStatus',
'fh_citizen_resident' => 'setFhCitizenResident',
'citizen_residents' => 'setCitizenResidents',
'fh_highest_education_level' => 'setFhHighestEducationLevel',
'fh_indigenous_status' => 'setFhIndigenousStatus',
'fh_parent_education_level1' => 'setFhParentEducationLevel1',
'fh_parent_education_level2' => 'setFhParentEducationLevel2',
'fh_additional_entrance_criteria' => 'setFhAdditionalEntranceCriteria',
'fh_basis_for_admission' => 'setFhBasisForAdmission',
'visa_type' => 'setVisaType',
'countries' => 'setCountries',
'states' => 'setStates',
'next_of_kin_relationships' => 'setNextOfKinRelationships',
'vaccine_status' => 'setVaccineStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gender' => 'getGender',
'age_category' => 'getAgeCategory',
'target_group' => 'getTargetGroup',
'employment_status' => 'getEmploymentStatus',
'occupation_identifier' => 'getOccupationIdentifier',
'industry_of_employment' => 'getIndustryOfEmployment',
'highest_school_level_completed' => 'getHighestSchoolLevelCompleted',
'primary_language' => 'getPrimaryLanguage',
'spoken_english_proficiency' => 'getSpokenEnglishProficiency',
'indigenous_status' => 'getIndigenousStatus',
'prior_education_flag' => 'getPriorEducationFlag',
'prior_educations' => 'getPriorEducations',
'prior_education_types' => 'getPriorEducationTypes',
'disability_flag' => 'getDisabilityFlag',
'disabilities' => 'getDisabilities',
'english_test_score_type' => 'getEnglishTestScoreType',
'survey_status' => 'getSurveyStatus',
'fh_citizen_resident' => 'getFhCitizenResident',
'citizen_residents' => 'getCitizenResidents',
'fh_highest_education_level' => 'getFhHighestEducationLevel',
'fh_indigenous_status' => 'getFhIndigenousStatus',
'fh_parent_education_level1' => 'getFhParentEducationLevel1',
'fh_parent_education_level2' => 'getFhParentEducationLevel2',
'fh_additional_entrance_criteria' => 'getFhAdditionalEntranceCriteria',
'fh_basis_for_admission' => 'getFhBasisForAdmission',
'visa_type' => 'getVisaType',
'countries' => 'getCountries',
'states' => 'getStates',
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
        $this->container['age_category'] = isset($data['age_category']) ? $data['age_category'] : null;
        $this->container['target_group'] = isset($data['target_group']) ? $data['target_group'] : null;
        $this->container['employment_status'] = isset($data['employment_status']) ? $data['employment_status'] : null;
        $this->container['occupation_identifier'] = isset($data['occupation_identifier']) ? $data['occupation_identifier'] : null;
        $this->container['industry_of_employment'] = isset($data['industry_of_employment']) ? $data['industry_of_employment'] : null;
        $this->container['highest_school_level_completed'] = isset($data['highest_school_level_completed']) ? $data['highest_school_level_completed'] : null;
        $this->container['primary_language'] = isset($data['primary_language']) ? $data['primary_language'] : null;
        $this->container['spoken_english_proficiency'] = isset($data['spoken_english_proficiency']) ? $data['spoken_english_proficiency'] : null;
        $this->container['indigenous_status'] = isset($data['indigenous_status']) ? $data['indigenous_status'] : null;
        $this->container['prior_education_flag'] = isset($data['prior_education_flag']) ? $data['prior_education_flag'] : null;
        $this->container['prior_educations'] = isset($data['prior_educations']) ? $data['prior_educations'] : null;
        $this->container['prior_education_types'] = isset($data['prior_education_types']) ? $data['prior_education_types'] : null;
        $this->container['disability_flag'] = isset($data['disability_flag']) ? $data['disability_flag'] : null;
        $this->container['disabilities'] = isset($data['disabilities']) ? $data['disabilities'] : null;
        $this->container['english_test_score_type'] = isset($data['english_test_score_type']) ? $data['english_test_score_type'] : null;
        $this->container['survey_status'] = isset($data['survey_status']) ? $data['survey_status'] : null;
        $this->container['fh_citizen_resident'] = isset($data['fh_citizen_resident']) ? $data['fh_citizen_resident'] : null;
        $this->container['citizen_residents'] = isset($data['citizen_residents']) ? $data['citizen_residents'] : null;
        $this->container['fh_highest_education_level'] = isset($data['fh_highest_education_level']) ? $data['fh_highest_education_level'] : null;
        $this->container['fh_indigenous_status'] = isset($data['fh_indigenous_status']) ? $data['fh_indigenous_status'] : null;
        $this->container['fh_parent_education_level1'] = isset($data['fh_parent_education_level1']) ? $data['fh_parent_education_level1'] : null;
        $this->container['fh_parent_education_level2'] = isset($data['fh_parent_education_level2']) ? $data['fh_parent_education_level2'] : null;
        $this->container['fh_additional_entrance_criteria'] = isset($data['fh_additional_entrance_criteria']) ? $data['fh_additional_entrance_criteria'] : null;
        $this->container['fh_basis_for_admission'] = isset($data['fh_basis_for_admission']) ? $data['fh_basis_for_admission'] : null;
        $this->container['visa_type'] = isset($data['visa_type']) ? $data['visa_type'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
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
     * Gets age_category
     *
     * @return \Phwebs\Wisenet\Model\AgeCategory
     */
    public function getAgeCategory()
    {
        return $this->container['age_category'];
    }

    /**
     * Sets age_category
     *
     * @param \Phwebs\Wisenet\Model\AgeCategory $age_category age_category
     *
     * @return $this
     */
    public function setAgeCategory($age_category)
    {
        $this->container['age_category'] = $age_category;

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
     * Gets occupation_identifier
     *
     * @return \Phwebs\Wisenet\Model\OccupationIdentifier
     */
    public function getOccupationIdentifier()
    {
        return $this->container['occupation_identifier'];
    }

    /**
     * Sets occupation_identifier
     *
     * @param \Phwebs\Wisenet\Model\OccupationIdentifier $occupation_identifier occupation_identifier
     *
     * @return $this
     */
    public function setOccupationIdentifier($occupation_identifier)
    {
        $this->container['occupation_identifier'] = $occupation_identifier;

        return $this;
    }

    /**
     * Gets industry_of_employment
     *
     * @return \Phwebs\Wisenet\Model\IndustryOfEmployment
     */
    public function getIndustryOfEmployment()
    {
        return $this->container['industry_of_employment'];
    }

    /**
     * Sets industry_of_employment
     *
     * @param \Phwebs\Wisenet\Model\IndustryOfEmployment $industry_of_employment industry_of_employment
     *
     * @return $this
     */
    public function setIndustryOfEmployment($industry_of_employment)
    {
        $this->container['industry_of_employment'] = $industry_of_employment;

        return $this;
    }

    /**
     * Gets highest_school_level_completed
     *
     * @return \Phwebs\Wisenet\Model\HighestSchoolLevel
     */
    public function getHighestSchoolLevelCompleted()
    {
        return $this->container['highest_school_level_completed'];
    }

    /**
     * Sets highest_school_level_completed
     *
     * @param \Phwebs\Wisenet\Model\HighestSchoolLevel $highest_school_level_completed highest_school_level_completed
     *
     * @return $this
     */
    public function setHighestSchoolLevelCompleted($highest_school_level_completed)
    {
        $this->container['highest_school_level_completed'] = $highest_school_level_completed;

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
     * Gets indigenous_status
     *
     * @return \Phwebs\Wisenet\Model\IndigenousStatus
     */
    public function getIndigenousStatus()
    {
        return $this->container['indigenous_status'];
    }

    /**
     * Sets indigenous_status
     *
     * @param \Phwebs\Wisenet\Model\IndigenousStatus $indigenous_status indigenous_status
     *
     * @return $this
     */
    public function setIndigenousStatus($indigenous_status)
    {
        $this->container['indigenous_status'] = $indigenous_status;

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
     * Gets prior_education_types
     *
     * @return \Phwebs\Wisenet\Model\PriorEducationType[]
     */
    public function getPriorEducationTypes()
    {
        return $this->container['prior_education_types'];
    }

    /**
     * Sets prior_education_types
     *
     * @param \Phwebs\Wisenet\Model\PriorEducationType[] $prior_education_types prior_education_types
     *
     * @return $this
     */
    public function setPriorEducationTypes($prior_education_types)
    {
        $this->container['prior_education_types'] = $prior_education_types;

        return $this;
    }

    /**
     * Gets disability_flag
     *
     * @return \Phwebs\Wisenet\Model\DisabilityFlag
     */
    public function getDisabilityFlag()
    {
        return $this->container['disability_flag'];
    }

    /**
     * Sets disability_flag
     *
     * @param \Phwebs\Wisenet\Model\DisabilityFlag $disability_flag disability_flag
     *
     * @return $this
     */
    public function setDisabilityFlag($disability_flag)
    {
        $this->container['disability_flag'] = $disability_flag;

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
     * Gets survey_status
     *
     * @return \Phwebs\Wisenet\Model\SurveyStatus
     */
    public function getSurveyStatus()
    {
        return $this->container['survey_status'];
    }

    /**
     * Sets survey_status
     *
     * @param \Phwebs\Wisenet\Model\SurveyStatus $survey_status survey_status
     *
     * @return $this
     */
    public function setSurveyStatus($survey_status)
    {
        $this->container['survey_status'] = $survey_status;

        return $this;
    }

    /**
     * Gets fh_citizen_resident
     *
     * @return \Phwebs\Wisenet\Model\FhCitizenResident
     */
    public function getFhCitizenResident()
    {
        return $this->container['fh_citizen_resident'];
    }

    /**
     * Sets fh_citizen_resident
     *
     * @param \Phwebs\Wisenet\Model\FhCitizenResident $fh_citizen_resident fh_citizen_resident
     *
     * @return $this
     */
    public function setFhCitizenResident($fh_citizen_resident)
    {
        $this->container['fh_citizen_resident'] = $fh_citizen_resident;

        return $this;
    }

    /**
     * Gets citizen_residents
     *
     * @return \Phwebs\Wisenet\Model\FhCitizenResident[]
     */
    public function getCitizenResidents()
    {
        return $this->container['citizen_residents'];
    }

    /**
     * Sets citizen_residents
     *
     * @param \Phwebs\Wisenet\Model\FhCitizenResident[] $citizen_residents citizen_residents
     *
     * @return $this
     */
    public function setCitizenResidents($citizen_residents)
    {
        $this->container['citizen_residents'] = $citizen_residents;

        return $this;
    }

    /**
     * Gets fh_highest_education_level
     *
     * @return \Phwebs\Wisenet\Model\FhHighestEducationLevel
     */
    public function getFhHighestEducationLevel()
    {
        return $this->container['fh_highest_education_level'];
    }

    /**
     * Sets fh_highest_education_level
     *
     * @param \Phwebs\Wisenet\Model\FhHighestEducationLevel $fh_highest_education_level fh_highest_education_level
     *
     * @return $this
     */
    public function setFhHighestEducationLevel($fh_highest_education_level)
    {
        $this->container['fh_highest_education_level'] = $fh_highest_education_level;

        return $this;
    }

    /**
     * Gets fh_indigenous_status
     *
     * @return \Phwebs\Wisenet\Model\FhIndigenousStatus
     */
    public function getFhIndigenousStatus()
    {
        return $this->container['fh_indigenous_status'];
    }

    /**
     * Sets fh_indigenous_status
     *
     * @param \Phwebs\Wisenet\Model\FhIndigenousStatus $fh_indigenous_status fh_indigenous_status
     *
     * @return $this
     */
    public function setFhIndigenousStatus($fh_indigenous_status)
    {
        $this->container['fh_indigenous_status'] = $fh_indigenous_status;

        return $this;
    }

    /**
     * Gets fh_parent_education_level1
     *
     * @return \Phwebs\Wisenet\Model\FhParentEducationLevel
     */
    public function getFhParentEducationLevel1()
    {
        return $this->container['fh_parent_education_level1'];
    }

    /**
     * Sets fh_parent_education_level1
     *
     * @param \Phwebs\Wisenet\Model\FhParentEducationLevel $fh_parent_education_level1 fh_parent_education_level1
     *
     * @return $this
     */
    public function setFhParentEducationLevel1($fh_parent_education_level1)
    {
        $this->container['fh_parent_education_level1'] = $fh_parent_education_level1;

        return $this;
    }

    /**
     * Gets fh_parent_education_level2
     *
     * @return \Phwebs\Wisenet\Model\FhParentEducationLevel
     */
    public function getFhParentEducationLevel2()
    {
        return $this->container['fh_parent_education_level2'];
    }

    /**
     * Sets fh_parent_education_level2
     *
     * @param \Phwebs\Wisenet\Model\FhParentEducationLevel $fh_parent_education_level2 fh_parent_education_level2
     *
     * @return $this
     */
    public function setFhParentEducationLevel2($fh_parent_education_level2)
    {
        $this->container['fh_parent_education_level2'] = $fh_parent_education_level2;

        return $this;
    }

    /**
     * Gets fh_additional_entrance_criteria
     *
     * @return \Phwebs\Wisenet\Model\FhAdditionalEntranceCriteria
     */
    public function getFhAdditionalEntranceCriteria()
    {
        return $this->container['fh_additional_entrance_criteria'];
    }

    /**
     * Sets fh_additional_entrance_criteria
     *
     * @param \Phwebs\Wisenet\Model\FhAdditionalEntranceCriteria $fh_additional_entrance_criteria fh_additional_entrance_criteria
     *
     * @return $this
     */
    public function setFhAdditionalEntranceCriteria($fh_additional_entrance_criteria)
    {
        $this->container['fh_additional_entrance_criteria'] = $fh_additional_entrance_criteria;

        return $this;
    }

    /**
     * Gets fh_basis_for_admission
     *
     * @return \Phwebs\Wisenet\Model\FhBasisForAdmission
     */
    public function getFhBasisForAdmission()
    {
        return $this->container['fh_basis_for_admission'];
    }

    /**
     * Sets fh_basis_for_admission
     *
     * @param \Phwebs\Wisenet\Model\FhBasisForAdmission $fh_basis_for_admission fh_basis_for_admission
     *
     * @return $this
     */
    public function setFhBasisForAdmission($fh_basis_for_admission)
    {
        $this->container['fh_basis_for_admission'] = $fh_basis_for_admission;

        return $this;
    }

    /**
     * Gets visa_type
     *
     * @return \Phwebs\Wisenet\Model\VisaType
     */
    public function getVisaType()
    {
        return $this->container['visa_type'];
    }

    /**
     * Sets visa_type
     *
     * @param \Phwebs\Wisenet\Model\VisaType $visa_type visa_type
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
