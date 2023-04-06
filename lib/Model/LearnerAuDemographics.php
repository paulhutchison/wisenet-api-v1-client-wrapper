<?php
/**
 * LearnerAuDemographics
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
 * LearnerAuDemographics Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerAuDemographics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerAuDemographics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employment_status_id' => 'int',
'occupation_identifier_id' => 'int',
'industry_of_employment_id' => 'int',
'is_still_at_school' => 'string',
'highest_school_level_completed_id' => 'int',
'highest_school_level_completed_year' => 'string',
'country_of_birth_id' => 'int',
'has_prior_educational_achievement_id' => 'int',
'prior_education_achievements' => '\Phwebs\Wisenet\Model\LearnerAuDemographicsPriorEducationAchievement[]',
'primary_language_id' => 'int',
'spoken_english_proficiency_id' => 'int',
'english_test_score' => '\Phwebs\Wisenet\Model\LearnerAuDemographicsEnglishTestScore',
'disability_flag_id' => 'int',
'disability_ids' => 'int[]',
'disabilities' => '\Phwebs\Wisenet\Model\LearnerAuDemographicsDisability[]',
'disability_advice_required' => 'bool',
'indigenous_status_id' => 'int',
'fee_help' => '\Phwebs\Wisenet\Model\LearnerAuDemographicsFeeHelp',
'citizenships' => '\Phwebs\Wisenet\Model\LearnerAuDemographicsCitizenship[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'employment_status_id' => 'int32',
'occupation_identifier_id' => 'int32',
'industry_of_employment_id' => 'int32',
'is_still_at_school' => 'Y or N',
'highest_school_level_completed_id' => 'int32',
'highest_school_level_completed_year' => 'Year value',
'country_of_birth_id' => 'int32',
'has_prior_educational_achievement_id' => 'int32',
'prior_education_achievements' => null,
'primary_language_id' => 'int32',
'spoken_english_proficiency_id' => 'int32',
'english_test_score' => null,
'disability_flag_id' => 'int32',
'disability_ids' => 'int32',
'disabilities' => null,
'disability_advice_required' => null,
'indigenous_status_id' => 'int32',
'fee_help' => null,
'citizenships' => null    ];

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
        'employment_status_id' => 'EmploymentStatusId',
'occupation_identifier_id' => 'OccupationIdentifierId',
'industry_of_employment_id' => 'IndustryOfEmploymentId',
'is_still_at_school' => 'IsStillAtSchool',
'highest_school_level_completed_id' => 'HighestSchoolLevelCompletedId',
'highest_school_level_completed_year' => 'HighestSchoolLevelCompletedYear',
'country_of_birth_id' => 'CountryOfBirthId',
'has_prior_educational_achievement_id' => 'HasPriorEducationalAchievementId',
'prior_education_achievements' => 'PriorEducationAchievements',
'primary_language_id' => 'PrimaryLanguageId',
'spoken_english_proficiency_id' => 'SpokenEnglishProficiencyId',
'english_test_score' => 'EnglishTestScore',
'disability_flag_id' => 'DisabilityFlagId',
'disability_ids' => 'DisabilityIds',
'disabilities' => 'Disabilities',
'disability_advice_required' => 'DisabilityAdviceRequired',
'indigenous_status_id' => 'IndigenousStatusId',
'fee_help' => 'FeeHelp',
'citizenships' => 'Citizenships'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employment_status_id' => 'setEmploymentStatusId',
'occupation_identifier_id' => 'setOccupationIdentifierId',
'industry_of_employment_id' => 'setIndustryOfEmploymentId',
'is_still_at_school' => 'setIsStillAtSchool',
'highest_school_level_completed_id' => 'setHighestSchoolLevelCompletedId',
'highest_school_level_completed_year' => 'setHighestSchoolLevelCompletedYear',
'country_of_birth_id' => 'setCountryOfBirthId',
'has_prior_educational_achievement_id' => 'setHasPriorEducationalAchievementId',
'prior_education_achievements' => 'setPriorEducationAchievements',
'primary_language_id' => 'setPrimaryLanguageId',
'spoken_english_proficiency_id' => 'setSpokenEnglishProficiencyId',
'english_test_score' => 'setEnglishTestScore',
'disability_flag_id' => 'setDisabilityFlagId',
'disability_ids' => 'setDisabilityIds',
'disabilities' => 'setDisabilities',
'disability_advice_required' => 'setDisabilityAdviceRequired',
'indigenous_status_id' => 'setIndigenousStatusId',
'fee_help' => 'setFeeHelp',
'citizenships' => 'setCitizenships'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employment_status_id' => 'getEmploymentStatusId',
'occupation_identifier_id' => 'getOccupationIdentifierId',
'industry_of_employment_id' => 'getIndustryOfEmploymentId',
'is_still_at_school' => 'getIsStillAtSchool',
'highest_school_level_completed_id' => 'getHighestSchoolLevelCompletedId',
'highest_school_level_completed_year' => 'getHighestSchoolLevelCompletedYear',
'country_of_birth_id' => 'getCountryOfBirthId',
'has_prior_educational_achievement_id' => 'getHasPriorEducationalAchievementId',
'prior_education_achievements' => 'getPriorEducationAchievements',
'primary_language_id' => 'getPrimaryLanguageId',
'spoken_english_proficiency_id' => 'getSpokenEnglishProficiencyId',
'english_test_score' => 'getEnglishTestScore',
'disability_flag_id' => 'getDisabilityFlagId',
'disability_ids' => 'getDisabilityIds',
'disabilities' => 'getDisabilities',
'disability_advice_required' => 'getDisabilityAdviceRequired',
'indigenous_status_id' => 'getIndigenousStatusId',
'fee_help' => 'getFeeHelp',
'citizenships' => 'getCitizenships'    ];

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
        $this->container['employment_status_id'] = isset($data['employment_status_id']) ? $data['employment_status_id'] : null;
        $this->container['occupation_identifier_id'] = isset($data['occupation_identifier_id']) ? $data['occupation_identifier_id'] : null;
        $this->container['industry_of_employment_id'] = isset($data['industry_of_employment_id']) ? $data['industry_of_employment_id'] : null;
        $this->container['is_still_at_school'] = isset($data['is_still_at_school']) ? $data['is_still_at_school'] : null;
        $this->container['highest_school_level_completed_id'] = isset($data['highest_school_level_completed_id']) ? $data['highest_school_level_completed_id'] : null;
        $this->container['highest_school_level_completed_year'] = isset($data['highest_school_level_completed_year']) ? $data['highest_school_level_completed_year'] : null;
        $this->container['country_of_birth_id'] = isset($data['country_of_birth_id']) ? $data['country_of_birth_id'] : null;
        $this->container['has_prior_educational_achievement_id'] = isset($data['has_prior_educational_achievement_id']) ? $data['has_prior_educational_achievement_id'] : null;
        $this->container['prior_education_achievements'] = isset($data['prior_education_achievements']) ? $data['prior_education_achievements'] : null;
        $this->container['primary_language_id'] = isset($data['primary_language_id']) ? $data['primary_language_id'] : null;
        $this->container['spoken_english_proficiency_id'] = isset($data['spoken_english_proficiency_id']) ? $data['spoken_english_proficiency_id'] : null;
        $this->container['english_test_score'] = isset($data['english_test_score']) ? $data['english_test_score'] : null;
        $this->container['disability_flag_id'] = isset($data['disability_flag_id']) ? $data['disability_flag_id'] : null;
        $this->container['disability_ids'] = isset($data['disability_ids']) ? $data['disability_ids'] : null;
        $this->container['disabilities'] = isset($data['disabilities']) ? $data['disabilities'] : null;
        $this->container['disability_advice_required'] = isset($data['disability_advice_required']) ? $data['disability_advice_required'] : null;
        $this->container['indigenous_status_id'] = isset($data['indigenous_status_id']) ? $data['indigenous_status_id'] : null;
        $this->container['fee_help'] = isset($data['fee_help']) ? $data['fee_help'] : null;
        $this->container['citizenships'] = isset($data['citizenships']) ? $data['citizenships'] : null;
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
     * Gets employment_status_id
     *
     * @return int
     */
    public function getEmploymentStatusId()
    {
        return $this->container['employment_status_id'];
    }

    /**
     * Sets employment_status_id
     *
     * @param int $employment_status_id See combo EmploymentStatuses
     *
     * @return $this
     */
    public function setEmploymentStatusId($employment_status_id)
    {
        $this->container['employment_status_id'] = $employment_status_id;

        return $this;
    }

    /**
     * Gets occupation_identifier_id
     *
     * @return int
     */
    public function getOccupationIdentifierId()
    {
        return $this->container['occupation_identifier_id'];
    }

    /**
     * Sets occupation_identifier_id
     *
     * @param int $occupation_identifier_id See combo OccupationIdentifiers
     *
     * @return $this
     */
    public function setOccupationIdentifierId($occupation_identifier_id)
    {
        $this->container['occupation_identifier_id'] = $occupation_identifier_id;

        return $this;
    }

    /**
     * Gets industry_of_employment_id
     *
     * @return int
     */
    public function getIndustryOfEmploymentId()
    {
        return $this->container['industry_of_employment_id'];
    }

    /**
     * Sets industry_of_employment_id
     *
     * @param int $industry_of_employment_id See combo IndustriesOfEmployment
     *
     * @return $this
     */
    public function setIndustryOfEmploymentId($industry_of_employment_id)
    {
        $this->container['industry_of_employment_id'] = $industry_of_employment_id;

        return $this;
    }

    /**
     * Gets is_still_at_school
     *
     * @return string
     */
    public function getIsStillAtSchool()
    {
        return $this->container['is_still_at_school'];
    }

    /**
     * Sets is_still_at_school
     *
     * @param string $is_still_at_school To indicate if the learner is at secondary school or not
     *
     * @return $this
     */
    public function setIsStillAtSchool($is_still_at_school)
    {
        $this->container['is_still_at_school'] = $is_still_at_school;

        return $this;
    }

    /**
     * Gets highest_school_level_completed_id
     *
     * @return int
     */
    public function getHighestSchoolLevelCompletedId()
    {
        return $this->container['highest_school_level_completed_id'];
    }

    /**
     * Sets highest_school_level_completed_id
     *
     * @param int $highest_school_level_completed_id See combo HighestSchoolLevelCompleted
     *
     * @return $this
     */
    public function setHighestSchoolLevelCompletedId($highest_school_level_completed_id)
    {
        $this->container['highest_school_level_completed_id'] = $highest_school_level_completed_id;

        return $this;
    }

    /**
     * Gets highest_school_level_completed_year
     *
     * @return string
     */
    public function getHighestSchoolLevelCompletedYear()
    {
        return $this->container['highest_school_level_completed_year'];
    }

    /**
     * Sets highest_school_level_completed_year
     *
     * @param string $highest_school_level_completed_year The year the highest school level was completed
     *
     * @return $this
     */
    public function setHighestSchoolLevelCompletedYear($highest_school_level_completed_year)
    {
        $this->container['highest_school_level_completed_year'] = $highest_school_level_completed_year;

        return $this;
    }

    /**
     * Gets country_of_birth_id
     *
     * @return int
     */
    public function getCountryOfBirthId()
    {
        return $this->container['country_of_birth_id'];
    }

    /**
     * Sets country_of_birth_id
     *
     * @param int $country_of_birth_id See combo Countries
     *
     * @return $this
     */
    public function setCountryOfBirthId($country_of_birth_id)
    {
        $this->container['country_of_birth_id'] = $country_of_birth_id;

        return $this;
    }

    /**
     * Gets has_prior_educational_achievement_id
     *
     * @return int
     */
    public function getHasPriorEducationalAchievementId()
    {
        return $this->container['has_prior_educational_achievement_id'];
    }

    /**
     * Sets has_prior_educational_achievement_id
     *
     * @param int $has_prior_educational_achievement_id See combo PriorEducationFlags
     *
     * @return $this
     */
    public function setHasPriorEducationalAchievementId($has_prior_educational_achievement_id)
    {
        $this->container['has_prior_educational_achievement_id'] = $has_prior_educational_achievement_id;

        return $this;
    }

    /**
     * Gets prior_education_achievements
     *
     * @return \Phwebs\Wisenet\Model\LearnerAuDemographicsPriorEducationAchievement[]
     */
    public function getPriorEducationAchievements()
    {
        return $this->container['prior_education_achievements'];
    }

    /**
     * Sets prior_education_achievements
     *
     * @param \Phwebs\Wisenet\Model\LearnerAuDemographicsPriorEducationAchievement[] $prior_education_achievements prior_education_achievements
     *
     * @return $this
     */
    public function setPriorEducationAchievements($prior_education_achievements)
    {
        $this->container['prior_education_achievements'] = $prior_education_achievements;

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
     * @return \Phwebs\Wisenet\Model\LearnerAuDemographicsEnglishTestScore
     */
    public function getEnglishTestScore()
    {
        return $this->container['english_test_score'];
    }

    /**
     * Sets english_test_score
     *
     * @param \Phwebs\Wisenet\Model\LearnerAuDemographicsEnglishTestScore $english_test_score english_test_score
     *
     * @return $this
     */
    public function setEnglishTestScore($english_test_score)
    {
        $this->container['english_test_score'] = $english_test_score;

        return $this;
    }

    /**
     * Gets disability_flag_id
     *
     * @return int
     */
    public function getDisabilityFlagId()
    {
        return $this->container['disability_flag_id'];
    }

    /**
     * Sets disability_flag_id
     *
     * @param int $disability_flag_id See combo DisabilityFlags
     *
     * @return $this
     */
    public function setDisabilityFlagId($disability_flag_id)
    {
        $this->container['disability_flag_id'] = $disability_flag_id;

        return $this;
    }

    /**
     * Gets disability_ids
     *
     * @return int[]
     */
    public function getDisabilityIds()
    {
        return $this->container['disability_ids'];
    }

    /**
     * Sets disability_ids
     *
     * @param int[] $disability_ids Obsolete. Use Disabilities instead
     *
     * @return $this
     */
    public function setDisabilityIds($disability_ids)
    {
        $this->container['disability_ids'] = $disability_ids;

        return $this;
    }

    /**
     * Gets disabilities
     *
     * @return \Phwebs\Wisenet\Model\LearnerAuDemographicsDisability[]
     */
    public function getDisabilities()
    {
        return $this->container['disabilities'];
    }

    /**
     * Sets disabilities
     *
     * @param \Phwebs\Wisenet\Model\LearnerAuDemographicsDisability[] $disabilities disabilities
     *
     * @return $this
     */
    public function setDisabilities($disabilities)
    {
        $this->container['disabilities'] = $disabilities;

        return $this;
    }

    /**
     * Gets disability_advice_required
     *
     * @return bool
     */
    public function getDisabilityAdviceRequired()
    {
        return $this->container['disability_advice_required'];
    }

    /**
     * Sets disability_advice_required
     *
     * @param bool $disability_advice_required To indicate if the learner opted for advice on support services, equipment and facilities
     *
     * @return $this
     */
    public function setDisabilityAdviceRequired($disability_advice_required)
    {
        $this->container['disability_advice_required'] = $disability_advice_required;

        return $this;
    }

    /**
     * Gets indigenous_status_id
     *
     * @return int
     */
    public function getIndigenousStatusId()
    {
        return $this->container['indigenous_status_id'];
    }

    /**
     * Sets indigenous_status_id
     *
     * @param int $indigenous_status_id See combo FhIndigenousStatuses
     *
     * @return $this
     */
    public function setIndigenousStatusId($indigenous_status_id)
    {
        $this->container['indigenous_status_id'] = $indigenous_status_id;

        return $this;
    }

    /**
     * Gets fee_help
     *
     * @return \Phwebs\Wisenet\Model\LearnerAuDemographicsFeeHelp
     */
    public function getFeeHelp()
    {
        return $this->container['fee_help'];
    }

    /**
     * Sets fee_help
     *
     * @param \Phwebs\Wisenet\Model\LearnerAuDemographicsFeeHelp $fee_help fee_help
     *
     * @return $this
     */
    public function setFeeHelp($fee_help)
    {
        $this->container['fee_help'] = $fee_help;

        return $this;
    }

    /**
     * Gets citizenships
     *
     * @return \Phwebs\Wisenet\Model\LearnerAuDemographicsCitizenship[]
     */
    public function getCitizenships()
    {
        return $this->container['citizenships'];
    }

    /**
     * Sets citizenships
     *
     * @param \Phwebs\Wisenet\Model\LearnerAuDemographicsCitizenship[] $citizenships citizenships
     *
     * @return $this
     */
    public function setCitizenships($citizenships)
    {
        $this->container['citizenships'] = $citizenships;

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
