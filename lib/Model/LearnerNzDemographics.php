<?php
/**
 * LearnerNzDemographics
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
 * LearnerNzDemographics Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerNzDemographics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerNzDemographics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employment_status_id' => 'int',
'is_still_at_school' => 'string',
'last_school_attended_id' => 'int',
'last_year_at_secondary_school' => 'string',
'secondary_qualification_id' => 'int',
'first_year_of_formal_education' => 'string',
'main_activity_prior_to_study_id' => 'int',
'has_prior_educational_achievement_id' => 'int',
'prior_education_achievements' => '\Phwebs\Wisenet\Model\LearnerNzDemographicsPriorEducationAchievement[]',
'primary_language_id' => 'int',
'spoken_english_proficiency_id' => 'int',
'english_test_score' => '\Phwebs\Wisenet\Model\LearnerNzDemographicsEnglishTestScore',
'citizenship_country_id' => 'int',
'residential_status_id' => 'int',
'australian_residential_status' => 'string',
'iwi_affiliation1_id' => 'int',
'iwi_affiliation2_id' => 'int',
'iwi_affiliation3_id' => 'int',
'ethnicity1_id' => 'int',
'ethnicity2_id' => 'int',
'ethnicity3_id' => 'int',
'disability_flag_id' => 'int',
'disability_ids' => 'int[]',
'disabilities' => '\Phwebs\Wisenet\Model\LearnerNzDemographicsDisability[]',
'disability_accessed_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'employment_status_id' => 'int32',
'is_still_at_school' => 'Y or N',
'last_school_attended_id' => 'int32',
'last_year_at_secondary_school' => 'Year value',
'secondary_qualification_id' => 'int32',
'first_year_of_formal_education' => 'Year value',
'main_activity_prior_to_study_id' => 'int32',
'has_prior_educational_achievement_id' => 'int32',
'prior_education_achievements' => null,
'primary_language_id' => 'int32',
'spoken_english_proficiency_id' => 'int32',
'english_test_score' => null,
'citizenship_country_id' => 'int32',
'residential_status_id' => 'int32',
'australian_residential_status' => 'Y or N',
'iwi_affiliation1_id' => 'int32',
'iwi_affiliation2_id' => 'int32',
'iwi_affiliation3_id' => 'int32',
'ethnicity1_id' => 'int32',
'ethnicity2_id' => 'int32',
'ethnicity3_id' => 'int32',
'disability_flag_id' => 'int32',
'disability_ids' => 'int32',
'disabilities' => null,
'disability_accessed_id' => 'int32'    ];

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
'is_still_at_school' => 'IsStillAtSchool',
'last_school_attended_id' => 'LastSchoolAttendedId',
'last_year_at_secondary_school' => 'LastYearAtSecondarySchool',
'secondary_qualification_id' => 'SecondaryQualificationId',
'first_year_of_formal_education' => 'FirstYearOfFormalEducation',
'main_activity_prior_to_study_id' => 'MainActivityPriorToStudyId',
'has_prior_educational_achievement_id' => 'HasPriorEducationalAchievementId',
'prior_education_achievements' => 'PriorEducationAchievements',
'primary_language_id' => 'PrimaryLanguageId',
'spoken_english_proficiency_id' => 'SpokenEnglishProficiencyId',
'english_test_score' => 'EnglishTestScore',
'citizenship_country_id' => 'CitizenshipCountryId',
'residential_status_id' => 'ResidentialStatusId',
'australian_residential_status' => 'AustralianResidentialStatus',
'iwi_affiliation1_id' => 'IwiAffiliation1Id',
'iwi_affiliation2_id' => 'IwiAffiliation2Id',
'iwi_affiliation3_id' => 'IwiAffiliation3Id',
'ethnicity1_id' => 'Ethnicity1Id',
'ethnicity2_id' => 'Ethnicity2Id',
'ethnicity3_id' => 'Ethnicity3Id',
'disability_flag_id' => 'DisabilityFlagId',
'disability_ids' => 'DisabilityIds',
'disabilities' => 'Disabilities',
'disability_accessed_id' => 'DisabilityAccessedId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employment_status_id' => 'setEmploymentStatusId',
'is_still_at_school' => 'setIsStillAtSchool',
'last_school_attended_id' => 'setLastSchoolAttendedId',
'last_year_at_secondary_school' => 'setLastYearAtSecondarySchool',
'secondary_qualification_id' => 'setSecondaryQualificationId',
'first_year_of_formal_education' => 'setFirstYearOfFormalEducation',
'main_activity_prior_to_study_id' => 'setMainActivityPriorToStudyId',
'has_prior_educational_achievement_id' => 'setHasPriorEducationalAchievementId',
'prior_education_achievements' => 'setPriorEducationAchievements',
'primary_language_id' => 'setPrimaryLanguageId',
'spoken_english_proficiency_id' => 'setSpokenEnglishProficiencyId',
'english_test_score' => 'setEnglishTestScore',
'citizenship_country_id' => 'setCitizenshipCountryId',
'residential_status_id' => 'setResidentialStatusId',
'australian_residential_status' => 'setAustralianResidentialStatus',
'iwi_affiliation1_id' => 'setIwiAffiliation1Id',
'iwi_affiliation2_id' => 'setIwiAffiliation2Id',
'iwi_affiliation3_id' => 'setIwiAffiliation3Id',
'ethnicity1_id' => 'setEthnicity1Id',
'ethnicity2_id' => 'setEthnicity2Id',
'ethnicity3_id' => 'setEthnicity3Id',
'disability_flag_id' => 'setDisabilityFlagId',
'disability_ids' => 'setDisabilityIds',
'disabilities' => 'setDisabilities',
'disability_accessed_id' => 'setDisabilityAccessedId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employment_status_id' => 'getEmploymentStatusId',
'is_still_at_school' => 'getIsStillAtSchool',
'last_school_attended_id' => 'getLastSchoolAttendedId',
'last_year_at_secondary_school' => 'getLastYearAtSecondarySchool',
'secondary_qualification_id' => 'getSecondaryQualificationId',
'first_year_of_formal_education' => 'getFirstYearOfFormalEducation',
'main_activity_prior_to_study_id' => 'getMainActivityPriorToStudyId',
'has_prior_educational_achievement_id' => 'getHasPriorEducationalAchievementId',
'prior_education_achievements' => 'getPriorEducationAchievements',
'primary_language_id' => 'getPrimaryLanguageId',
'spoken_english_proficiency_id' => 'getSpokenEnglishProficiencyId',
'english_test_score' => 'getEnglishTestScore',
'citizenship_country_id' => 'getCitizenshipCountryId',
'residential_status_id' => 'getResidentialStatusId',
'australian_residential_status' => 'getAustralianResidentialStatus',
'iwi_affiliation1_id' => 'getIwiAffiliation1Id',
'iwi_affiliation2_id' => 'getIwiAffiliation2Id',
'iwi_affiliation3_id' => 'getIwiAffiliation3Id',
'ethnicity1_id' => 'getEthnicity1Id',
'ethnicity2_id' => 'getEthnicity2Id',
'ethnicity3_id' => 'getEthnicity3Id',
'disability_flag_id' => 'getDisabilityFlagId',
'disability_ids' => 'getDisabilityIds',
'disabilities' => 'getDisabilities',
'disability_accessed_id' => 'getDisabilityAccessedId'    ];

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
        $this->container['is_still_at_school'] = isset($data['is_still_at_school']) ? $data['is_still_at_school'] : null;
        $this->container['last_school_attended_id'] = isset($data['last_school_attended_id']) ? $data['last_school_attended_id'] : null;
        $this->container['last_year_at_secondary_school'] = isset($data['last_year_at_secondary_school']) ? $data['last_year_at_secondary_school'] : null;
        $this->container['secondary_qualification_id'] = isset($data['secondary_qualification_id']) ? $data['secondary_qualification_id'] : null;
        $this->container['first_year_of_formal_education'] = isset($data['first_year_of_formal_education']) ? $data['first_year_of_formal_education'] : null;
        $this->container['main_activity_prior_to_study_id'] = isset($data['main_activity_prior_to_study_id']) ? $data['main_activity_prior_to_study_id'] : null;
        $this->container['has_prior_educational_achievement_id'] = isset($data['has_prior_educational_achievement_id']) ? $data['has_prior_educational_achievement_id'] : null;
        $this->container['prior_education_achievements'] = isset($data['prior_education_achievements']) ? $data['prior_education_achievements'] : null;
        $this->container['primary_language_id'] = isset($data['primary_language_id']) ? $data['primary_language_id'] : null;
        $this->container['spoken_english_proficiency_id'] = isset($data['spoken_english_proficiency_id']) ? $data['spoken_english_proficiency_id'] : null;
        $this->container['english_test_score'] = isset($data['english_test_score']) ? $data['english_test_score'] : null;
        $this->container['citizenship_country_id'] = isset($data['citizenship_country_id']) ? $data['citizenship_country_id'] : null;
        $this->container['residential_status_id'] = isset($data['residential_status_id']) ? $data['residential_status_id'] : null;
        $this->container['australian_residential_status'] = isset($data['australian_residential_status']) ? $data['australian_residential_status'] : null;
        $this->container['iwi_affiliation1_id'] = isset($data['iwi_affiliation1_id']) ? $data['iwi_affiliation1_id'] : null;
        $this->container['iwi_affiliation2_id'] = isset($data['iwi_affiliation2_id']) ? $data['iwi_affiliation2_id'] : null;
        $this->container['iwi_affiliation3_id'] = isset($data['iwi_affiliation3_id']) ? $data['iwi_affiliation3_id'] : null;
        $this->container['ethnicity1_id'] = isset($data['ethnicity1_id']) ? $data['ethnicity1_id'] : null;
        $this->container['ethnicity2_id'] = isset($data['ethnicity2_id']) ? $data['ethnicity2_id'] : null;
        $this->container['ethnicity3_id'] = isset($data['ethnicity3_id']) ? $data['ethnicity3_id'] : null;
        $this->container['disability_flag_id'] = isset($data['disability_flag_id']) ? $data['disability_flag_id'] : null;
        $this->container['disability_ids'] = isset($data['disability_ids']) ? $data['disability_ids'] : null;
        $this->container['disabilities'] = isset($data['disabilities']) ? $data['disabilities'] : null;
        $this->container['disability_accessed_id'] = isset($data['disability_accessed_id']) ? $data['disability_accessed_id'] : null;
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
     * Gets last_school_attended_id
     *
     * @return int
     */
    public function getLastSchoolAttendedId()
    {
        return $this->container['last_school_attended_id'];
    }

    /**
     * Sets last_school_attended_id
     *
     * @param int $last_school_attended_id See combo NzLastSchoolsAttended
     *
     * @return $this
     */
    public function setLastSchoolAttendedId($last_school_attended_id)
    {
        $this->container['last_school_attended_id'] = $last_school_attended_id;

        return $this;
    }

    /**
     * Gets last_year_at_secondary_school
     *
     * @return string
     */
    public function getLastYearAtSecondarySchool()
    {
        return $this->container['last_year_at_secondary_school'];
    }

    /**
     * Sets last_year_at_secondary_school
     *
     * @param string $last_year_at_secondary_school Year the learner last attended secondary school
     *
     * @return $this
     */
    public function setLastYearAtSecondarySchool($last_year_at_secondary_school)
    {
        $this->container['last_year_at_secondary_school'] = $last_year_at_secondary_school;

        return $this;
    }

    /**
     * Gets secondary_qualification_id
     *
     * @return int
     */
    public function getSecondaryQualificationId()
    {
        return $this->container['secondary_qualification_id'];
    }

    /**
     * Sets secondary_qualification_id
     *
     * @param int $secondary_qualification_id See combo NzSecondaryQualifications
     *
     * @return $this
     */
    public function setSecondaryQualificationId($secondary_qualification_id)
    {
        $this->container['secondary_qualification_id'] = $secondary_qualification_id;

        return $this;
    }

    /**
     * Gets first_year_of_formal_education
     *
     * @return string
     */
    public function getFirstYearOfFormalEducation()
    {
        return $this->container['first_year_of_formal_education'];
    }

    /**
     * Sets first_year_of_formal_education
     *
     * @param string $first_year_of_formal_education Year of the learner's first formal education
     *
     * @return $this
     */
    public function setFirstYearOfFormalEducation($first_year_of_formal_education)
    {
        $this->container['first_year_of_formal_education'] = $first_year_of_formal_education;

        return $this;
    }

    /**
     * Gets main_activity_prior_to_study_id
     *
     * @return int
     */
    public function getMainActivityPriorToStudyId()
    {
        return $this->container['main_activity_prior_to_study_id'];
    }

    /**
     * Sets main_activity_prior_to_study_id
     *
     * @param int $main_activity_prior_to_study_id See combo NzMainActivitiesPriorToStudy
     *
     * @return $this
     */
    public function setMainActivityPriorToStudyId($main_activity_prior_to_study_id)
    {
        $this->container['main_activity_prior_to_study_id'] = $main_activity_prior_to_study_id;

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
     * @return \Phwebs\Wisenet\Model\LearnerNzDemographicsPriorEducationAchievement[]
     */
    public function getPriorEducationAchievements()
    {
        return $this->container['prior_education_achievements'];
    }

    /**
     * Sets prior_education_achievements
     *
     * @param \Phwebs\Wisenet\Model\LearnerNzDemographicsPriorEducationAchievement[] $prior_education_achievements prior_education_achievements
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
     * @return \Phwebs\Wisenet\Model\LearnerNzDemographicsEnglishTestScore
     */
    public function getEnglishTestScore()
    {
        return $this->container['english_test_score'];
    }

    /**
     * Sets english_test_score
     *
     * @param \Phwebs\Wisenet\Model\LearnerNzDemographicsEnglishTestScore $english_test_score english_test_score
     *
     * @return $this
     */
    public function setEnglishTestScore($english_test_score)
    {
        $this->container['english_test_score'] = $english_test_score;

        return $this;
    }

    /**
     * Gets citizenship_country_id
     *
     * @return int
     */
    public function getCitizenshipCountryId()
    {
        return $this->container['citizenship_country_id'];
    }

    /**
     * Sets citizenship_country_id
     *
     * @param int $citizenship_country_id See combo NzCountries
     *
     * @return $this
     */
    public function setCitizenshipCountryId($citizenship_country_id)
    {
        $this->container['citizenship_country_id'] = $citizenship_country_id;

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
     * @param int $residential_status_id See combo NzResidentialStatuses
     *
     * @return $this
     */
    public function setResidentialStatusId($residential_status_id)
    {
        $this->container['residential_status_id'] = $residential_status_id;

        return $this;
    }

    /**
     * Gets australian_residential_status
     *
     * @return string
     */
    public function getAustralianResidentialStatus()
    {
        return $this->container['australian_residential_status'];
    }

    /**
     * Sets australian_residential_status
     *
     * @param string $australian_residential_status To indicate if the learner has a residential status or not
     *
     * @return $this
     */
    public function setAustralianResidentialStatus($australian_residential_status)
    {
        $this->container['australian_residential_status'] = $australian_residential_status;

        return $this;
    }

    /**
     * Gets iwi_affiliation1_id
     *
     * @return int
     */
    public function getIwiAffiliation1Id()
    {
        return $this->container['iwi_affiliation1_id'];
    }

    /**
     * Sets iwi_affiliation1_id
     *
     * @param int $iwi_affiliation1_id See combo NzIwiAffiliations
     *
     * @return $this
     */
    public function setIwiAffiliation1Id($iwi_affiliation1_id)
    {
        $this->container['iwi_affiliation1_id'] = $iwi_affiliation1_id;

        return $this;
    }

    /**
     * Gets iwi_affiliation2_id
     *
     * @return int
     */
    public function getIwiAffiliation2Id()
    {
        return $this->container['iwi_affiliation2_id'];
    }

    /**
     * Sets iwi_affiliation2_id
     *
     * @param int $iwi_affiliation2_id See combo NzIwiAffiliations
     *
     * @return $this
     */
    public function setIwiAffiliation2Id($iwi_affiliation2_id)
    {
        $this->container['iwi_affiliation2_id'] = $iwi_affiliation2_id;

        return $this;
    }

    /**
     * Gets iwi_affiliation3_id
     *
     * @return int
     */
    public function getIwiAffiliation3Id()
    {
        return $this->container['iwi_affiliation3_id'];
    }

    /**
     * Sets iwi_affiliation3_id
     *
     * @param int $iwi_affiliation3_id See combo NzIwiAffiliations
     *
     * @return $this
     */
    public function setIwiAffiliation3Id($iwi_affiliation3_id)
    {
        $this->container['iwi_affiliation3_id'] = $iwi_affiliation3_id;

        return $this;
    }

    /**
     * Gets ethnicity1_id
     *
     * @return int
     */
    public function getEthnicity1Id()
    {
        return $this->container['ethnicity1_id'];
    }

    /**
     * Sets ethnicity1_id
     *
     * @param int $ethnicity1_id See combo NzEthnicities
     *
     * @return $this
     */
    public function setEthnicity1Id($ethnicity1_id)
    {
        $this->container['ethnicity1_id'] = $ethnicity1_id;

        return $this;
    }

    /**
     * Gets ethnicity2_id
     *
     * @return int
     */
    public function getEthnicity2Id()
    {
        return $this->container['ethnicity2_id'];
    }

    /**
     * Sets ethnicity2_id
     *
     * @param int $ethnicity2_id See combo NzEthnicities
     *
     * @return $this
     */
    public function setEthnicity2Id($ethnicity2_id)
    {
        $this->container['ethnicity2_id'] = $ethnicity2_id;

        return $this;
    }

    /**
     * Gets ethnicity3_id
     *
     * @return int
     */
    public function getEthnicity3Id()
    {
        return $this->container['ethnicity3_id'];
    }

    /**
     * Sets ethnicity3_id
     *
     * @param int $ethnicity3_id See combo NzEthnicities
     *
     * @return $this
     */
    public function setEthnicity3Id($ethnicity3_id)
    {
        $this->container['ethnicity3_id'] = $ethnicity3_id;

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
     * @param int $disability_flag_id See combo NzDisabilityFlags
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
     * @return \Phwebs\Wisenet\Model\LearnerNzDemographicsDisability[]
     */
    public function getDisabilities()
    {
        return $this->container['disabilities'];
    }

    /**
     * Sets disabilities
     *
     * @param \Phwebs\Wisenet\Model\LearnerNzDemographicsDisability[] $disabilities See combo Disabilities
     *
     * @return $this
     */
    public function setDisabilities($disabilities)
    {
        $this->container['disabilities'] = $disabilities;

        return $this;
    }

    /**
     * Gets disability_accessed_id
     *
     * @return int
     */
    public function getDisabilityAccessedId()
    {
        return $this->container['disability_accessed_id'];
    }

    /**
     * Sets disability_accessed_id
     *
     * @param int $disability_accessed_id See combo NzDisabilityAccessed
     *
     * @return $this
     */
    public function setDisabilityAccessedId($disability_accessed_id)
    {
        $this->container['disability_accessed_id'] = $disability_accessed_id;

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
