<?php
/**
 * Course
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
 * Course Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Course implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Course';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'course_id' => 'int',
'coordinator_id' => 'int',
'course_desc' => 'string',
'course_code' => 'string',
'nominal_hours' => 'string',
'duration_type_id' => 'int',
'duration_full_time' => 'double',
'duration_part_time' => 'double',
'recognition_status_id' => 'int',
'asco_id' => 'int',
'vet_flag' => 'string',
'core_business_flag' => 'bool',
'cooperation' => 'string',
'points' => 'int',
'entry_requirements' => 'string',
'learning_outcomes' => 'string',
'general_notes' => 'string',
'target_group_id' => 'int',
'business_area_id' => 'int',
'internal_qualification_id' => 'int',
'qualification_field_of_education_id' => 'int',
'level_of_education_id' => 'int',
'anzsco_id' => 'int',
'associated_course_code' => 'string',
'course_designer' => 'string',
'awarding_provider' => 'string',
'sg_qualification_category_id' => 'int',
'sg_schedule1' => 'string',
'sg_wsq_flag' => 'bool',
'sg_cpe_flag' => 'bool',
'fh_course_type_id' => 'int',
'fh_field_of_education_id' => 'int',
'fh_eligibility_type_id' => 'int',
'fh_eftsl' => 'string',
'effective_from_date' => '\DateTime',
'effective_to_date' => '\DateTime',
'qualification_category_id' => 'int',
'course_code_nzqa_alternative' => 'string',
'nz_qualification_award_category_id' => 'int',
'fh_course_duration' => 'double',
'industry_id' => 'int',
'publish_details' => '\Phwebs\Wisenet\Model\PublishDetailsCourse',
'last_customer_user_id' => 'int',
'last_audit_time_stamp' => '\DateTime',
'last_audit_action' => 'string',
'nz_source_id' => 'int',
'course_guid' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'course_id' => 'int32',
'coordinator_id' => 'int32',
'course_desc' => null,
'course_code' => null,
'nominal_hours' => null,
'duration_type_id' => 'int32',
'duration_full_time' => 'double',
'duration_part_time' => 'double',
'recognition_status_id' => 'int32',
'asco_id' => 'int32',
'vet_flag' => null,
'core_business_flag' => null,
'cooperation' => null,
'points' => 'int32',
'entry_requirements' => null,
'learning_outcomes' => null,
'general_notes' => null,
'target_group_id' => 'int32',
'business_area_id' => 'int32',
'internal_qualification_id' => 'int32',
'qualification_field_of_education_id' => 'int32',
'level_of_education_id' => 'int32',
'anzsco_id' => 'int32',
'associated_course_code' => null,
'course_designer' => null,
'awarding_provider' => null,
'sg_qualification_category_id' => 'int32',
'sg_schedule1' => null,
'sg_wsq_flag' => null,
'sg_cpe_flag' => null,
'fh_course_type_id' => 'int32',
'fh_field_of_education_id' => 'int32',
'fh_eligibility_type_id' => 'int32',
'fh_eftsl' => null,
'effective_from_date' => 'date-time',
'effective_to_date' => 'date-time',
'qualification_category_id' => 'int32',
'course_code_nzqa_alternative' => null,
'nz_qualification_award_category_id' => 'int32',
'fh_course_duration' => 'double',
'industry_id' => 'int32',
'publish_details' => null,
'last_customer_user_id' => 'int32',
'last_audit_time_stamp' => 'date-time',
'last_audit_action' => null,
'nz_source_id' => 'int32',
'course_guid' => 'uuid'    ];

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
        'course_id' => 'CourseId',
'coordinator_id' => 'CoordinatorId',
'course_desc' => 'CourseDesc',
'course_code' => 'CourseCode',
'nominal_hours' => 'NominalHours',
'duration_type_id' => 'DurationTypeId',
'duration_full_time' => 'DurationFullTime',
'duration_part_time' => 'DurationPartTime',
'recognition_status_id' => 'RecognitionStatusId',
'asco_id' => 'AscoId',
'vet_flag' => 'VetFlag',
'core_business_flag' => 'CoreBusinessFlag',
'cooperation' => 'Cooperation',
'points' => 'Points',
'entry_requirements' => 'EntryRequirements',
'learning_outcomes' => 'LearningOutcomes',
'general_notes' => 'GeneralNotes',
'target_group_id' => 'TargetGroupId',
'business_area_id' => 'BusinessAreaId',
'internal_qualification_id' => 'InternalQualificationId',
'qualification_field_of_education_id' => 'QualificationFieldOfEducationId',
'level_of_education_id' => 'LevelOfEducationId',
'anzsco_id' => 'AnzscoId',
'associated_course_code' => 'AssociatedCourseCode',
'course_designer' => 'CourseDesigner',
'awarding_provider' => 'AwardingProvider',
'sg_qualification_category_id' => 'SgQualificationCategoryId',
'sg_schedule1' => 'SgSchedule1',
'sg_wsq_flag' => 'SgWsqFlag',
'sg_cpe_flag' => 'SgCpeFlag',
'fh_course_type_id' => 'FhCourseTypeId',
'fh_field_of_education_id' => 'FhFieldOfEducationId',
'fh_eligibility_type_id' => 'FhEligibilityTypeId',
'fh_eftsl' => 'FhEftsl',
'effective_from_date' => 'EffectiveFromDate',
'effective_to_date' => 'EffectiveToDate',
'qualification_category_id' => 'QualificationCategoryId',
'course_code_nzqa_alternative' => 'CourseCodeNzqaAlternative',
'nz_qualification_award_category_id' => 'NzQualificationAwardCategoryId',
'fh_course_duration' => 'FhCourseDuration',
'industry_id' => 'IndustryId',
'publish_details' => 'PublishDetails',
'last_customer_user_id' => 'LastCustomerUserId',
'last_audit_time_stamp' => 'LastAuditTimeStamp',
'last_audit_action' => 'LastAuditAction',
'nz_source_id' => 'NzSourceId',
'course_guid' => 'CourseGuid'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'course_id' => 'setCourseId',
'coordinator_id' => 'setCoordinatorId',
'course_desc' => 'setCourseDesc',
'course_code' => 'setCourseCode',
'nominal_hours' => 'setNominalHours',
'duration_type_id' => 'setDurationTypeId',
'duration_full_time' => 'setDurationFullTime',
'duration_part_time' => 'setDurationPartTime',
'recognition_status_id' => 'setRecognitionStatusId',
'asco_id' => 'setAscoId',
'vet_flag' => 'setVetFlag',
'core_business_flag' => 'setCoreBusinessFlag',
'cooperation' => 'setCooperation',
'points' => 'setPoints',
'entry_requirements' => 'setEntryRequirements',
'learning_outcomes' => 'setLearningOutcomes',
'general_notes' => 'setGeneralNotes',
'target_group_id' => 'setTargetGroupId',
'business_area_id' => 'setBusinessAreaId',
'internal_qualification_id' => 'setInternalQualificationId',
'qualification_field_of_education_id' => 'setQualificationFieldOfEducationId',
'level_of_education_id' => 'setLevelOfEducationId',
'anzsco_id' => 'setAnzscoId',
'associated_course_code' => 'setAssociatedCourseCode',
'course_designer' => 'setCourseDesigner',
'awarding_provider' => 'setAwardingProvider',
'sg_qualification_category_id' => 'setSgQualificationCategoryId',
'sg_schedule1' => 'setSgSchedule1',
'sg_wsq_flag' => 'setSgWsqFlag',
'sg_cpe_flag' => 'setSgCpeFlag',
'fh_course_type_id' => 'setFhCourseTypeId',
'fh_field_of_education_id' => 'setFhFieldOfEducationId',
'fh_eligibility_type_id' => 'setFhEligibilityTypeId',
'fh_eftsl' => 'setFhEftsl',
'effective_from_date' => 'setEffectiveFromDate',
'effective_to_date' => 'setEffectiveToDate',
'qualification_category_id' => 'setQualificationCategoryId',
'course_code_nzqa_alternative' => 'setCourseCodeNzqaAlternative',
'nz_qualification_award_category_id' => 'setNzQualificationAwardCategoryId',
'fh_course_duration' => 'setFhCourseDuration',
'industry_id' => 'setIndustryId',
'publish_details' => 'setPublishDetails',
'last_customer_user_id' => 'setLastCustomerUserId',
'last_audit_time_stamp' => 'setLastAuditTimeStamp',
'last_audit_action' => 'setLastAuditAction',
'nz_source_id' => 'setNzSourceId',
'course_guid' => 'setCourseGuid'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'course_id' => 'getCourseId',
'coordinator_id' => 'getCoordinatorId',
'course_desc' => 'getCourseDesc',
'course_code' => 'getCourseCode',
'nominal_hours' => 'getNominalHours',
'duration_type_id' => 'getDurationTypeId',
'duration_full_time' => 'getDurationFullTime',
'duration_part_time' => 'getDurationPartTime',
'recognition_status_id' => 'getRecognitionStatusId',
'asco_id' => 'getAscoId',
'vet_flag' => 'getVetFlag',
'core_business_flag' => 'getCoreBusinessFlag',
'cooperation' => 'getCooperation',
'points' => 'getPoints',
'entry_requirements' => 'getEntryRequirements',
'learning_outcomes' => 'getLearningOutcomes',
'general_notes' => 'getGeneralNotes',
'target_group_id' => 'getTargetGroupId',
'business_area_id' => 'getBusinessAreaId',
'internal_qualification_id' => 'getInternalQualificationId',
'qualification_field_of_education_id' => 'getQualificationFieldOfEducationId',
'level_of_education_id' => 'getLevelOfEducationId',
'anzsco_id' => 'getAnzscoId',
'associated_course_code' => 'getAssociatedCourseCode',
'course_designer' => 'getCourseDesigner',
'awarding_provider' => 'getAwardingProvider',
'sg_qualification_category_id' => 'getSgQualificationCategoryId',
'sg_schedule1' => 'getSgSchedule1',
'sg_wsq_flag' => 'getSgWsqFlag',
'sg_cpe_flag' => 'getSgCpeFlag',
'fh_course_type_id' => 'getFhCourseTypeId',
'fh_field_of_education_id' => 'getFhFieldOfEducationId',
'fh_eligibility_type_id' => 'getFhEligibilityTypeId',
'fh_eftsl' => 'getFhEftsl',
'effective_from_date' => 'getEffectiveFromDate',
'effective_to_date' => 'getEffectiveToDate',
'qualification_category_id' => 'getQualificationCategoryId',
'course_code_nzqa_alternative' => 'getCourseCodeNzqaAlternative',
'nz_qualification_award_category_id' => 'getNzQualificationAwardCategoryId',
'fh_course_duration' => 'getFhCourseDuration',
'industry_id' => 'getIndustryId',
'publish_details' => 'getPublishDetails',
'last_customer_user_id' => 'getLastCustomerUserId',
'last_audit_time_stamp' => 'getLastAuditTimeStamp',
'last_audit_action' => 'getLastAuditAction',
'nz_source_id' => 'getNzSourceId',
'course_guid' => 'getCourseGuid'    ];

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
        $this->container['course_id'] = isset($data['course_id']) ? $data['course_id'] : null;
        $this->container['coordinator_id'] = isset($data['coordinator_id']) ? $data['coordinator_id'] : null;
        $this->container['course_desc'] = isset($data['course_desc']) ? $data['course_desc'] : null;
        $this->container['course_code'] = isset($data['course_code']) ? $data['course_code'] : null;
        $this->container['nominal_hours'] = isset($data['nominal_hours']) ? $data['nominal_hours'] : null;
        $this->container['duration_type_id'] = isset($data['duration_type_id']) ? $data['duration_type_id'] : null;
        $this->container['duration_full_time'] = isset($data['duration_full_time']) ? $data['duration_full_time'] : null;
        $this->container['duration_part_time'] = isset($data['duration_part_time']) ? $data['duration_part_time'] : null;
        $this->container['recognition_status_id'] = isset($data['recognition_status_id']) ? $data['recognition_status_id'] : null;
        $this->container['asco_id'] = isset($data['asco_id']) ? $data['asco_id'] : null;
        $this->container['vet_flag'] = isset($data['vet_flag']) ? $data['vet_flag'] : null;
        $this->container['core_business_flag'] = isset($data['core_business_flag']) ? $data['core_business_flag'] : null;
        $this->container['cooperation'] = isset($data['cooperation']) ? $data['cooperation'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['entry_requirements'] = isset($data['entry_requirements']) ? $data['entry_requirements'] : null;
        $this->container['learning_outcomes'] = isset($data['learning_outcomes']) ? $data['learning_outcomes'] : null;
        $this->container['general_notes'] = isset($data['general_notes']) ? $data['general_notes'] : null;
        $this->container['target_group_id'] = isset($data['target_group_id']) ? $data['target_group_id'] : null;
        $this->container['business_area_id'] = isset($data['business_area_id']) ? $data['business_area_id'] : null;
        $this->container['internal_qualification_id'] = isset($data['internal_qualification_id']) ? $data['internal_qualification_id'] : null;
        $this->container['qualification_field_of_education_id'] = isset($data['qualification_field_of_education_id']) ? $data['qualification_field_of_education_id'] : null;
        $this->container['level_of_education_id'] = isset($data['level_of_education_id']) ? $data['level_of_education_id'] : null;
        $this->container['anzsco_id'] = isset($data['anzsco_id']) ? $data['anzsco_id'] : null;
        $this->container['associated_course_code'] = isset($data['associated_course_code']) ? $data['associated_course_code'] : null;
        $this->container['course_designer'] = isset($data['course_designer']) ? $data['course_designer'] : null;
        $this->container['awarding_provider'] = isset($data['awarding_provider']) ? $data['awarding_provider'] : null;
        $this->container['sg_qualification_category_id'] = isset($data['sg_qualification_category_id']) ? $data['sg_qualification_category_id'] : null;
        $this->container['sg_schedule1'] = isset($data['sg_schedule1']) ? $data['sg_schedule1'] : null;
        $this->container['sg_wsq_flag'] = isset($data['sg_wsq_flag']) ? $data['sg_wsq_flag'] : null;
        $this->container['sg_cpe_flag'] = isset($data['sg_cpe_flag']) ? $data['sg_cpe_flag'] : null;
        $this->container['fh_course_type_id'] = isset($data['fh_course_type_id']) ? $data['fh_course_type_id'] : null;
        $this->container['fh_field_of_education_id'] = isset($data['fh_field_of_education_id']) ? $data['fh_field_of_education_id'] : null;
        $this->container['fh_eligibility_type_id'] = isset($data['fh_eligibility_type_id']) ? $data['fh_eligibility_type_id'] : null;
        $this->container['fh_eftsl'] = isset($data['fh_eftsl']) ? $data['fh_eftsl'] : null;
        $this->container['effective_from_date'] = isset($data['effective_from_date']) ? $data['effective_from_date'] : null;
        $this->container['effective_to_date'] = isset($data['effective_to_date']) ? $data['effective_to_date'] : null;
        $this->container['qualification_category_id'] = isset($data['qualification_category_id']) ? $data['qualification_category_id'] : null;
        $this->container['course_code_nzqa_alternative'] = isset($data['course_code_nzqa_alternative']) ? $data['course_code_nzqa_alternative'] : null;
        $this->container['nz_qualification_award_category_id'] = isset($data['nz_qualification_award_category_id']) ? $data['nz_qualification_award_category_id'] : null;
        $this->container['fh_course_duration'] = isset($data['fh_course_duration']) ? $data['fh_course_duration'] : null;
        $this->container['industry_id'] = isset($data['industry_id']) ? $data['industry_id'] : null;
        $this->container['publish_details'] = isset($data['publish_details']) ? $data['publish_details'] : null;
        $this->container['last_customer_user_id'] = isset($data['last_customer_user_id']) ? $data['last_customer_user_id'] : null;
        $this->container['last_audit_time_stamp'] = isset($data['last_audit_time_stamp']) ? $data['last_audit_time_stamp'] : null;
        $this->container['last_audit_action'] = isset($data['last_audit_action']) ? $data['last_audit_action'] : null;
        $this->container['nz_source_id'] = isset($data['nz_source_id']) ? $data['nz_source_id'] : null;
        $this->container['course_guid'] = isset($data['course_guid']) ? $data['course_guid'] : null;
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
     * Gets course_id
     *
     * @return int
     */
    public function getCourseId()
    {
        return $this->container['course_id'];
    }

    /**
     * Sets course_id
     *
     * @param int $course_id course_id
     *
     * @return $this
     */
    public function setCourseId($course_id)
    {
        $this->container['course_id'] = $course_id;

        return $this;
    }

    /**
     * Gets coordinator_id
     *
     * @return int
     */
    public function getCoordinatorId()
    {
        return $this->container['coordinator_id'];
    }

    /**
     * Sets coordinator_id
     *
     * @param int $coordinator_id coordinator_id
     *
     * @return $this
     */
    public function setCoordinatorId($coordinator_id)
    {
        $this->container['coordinator_id'] = $coordinator_id;

        return $this;
    }

    /**
     * Gets course_desc
     *
     * @return string
     */
    public function getCourseDesc()
    {
        return $this->container['course_desc'];
    }

    /**
     * Sets course_desc
     *
     * @param string $course_desc course_desc
     *
     * @return $this
     */
    public function setCourseDesc($course_desc)
    {
        $this->container['course_desc'] = $course_desc;

        return $this;
    }

    /**
     * Gets course_code
     *
     * @return string
     */
    public function getCourseCode()
    {
        return $this->container['course_code'];
    }

    /**
     * Sets course_code
     *
     * @param string $course_code course_code
     *
     * @return $this
     */
    public function setCourseCode($course_code)
    {
        $this->container['course_code'] = $course_code;

        return $this;
    }

    /**
     * Gets nominal_hours
     *
     * @return string
     */
    public function getNominalHours()
    {
        return $this->container['nominal_hours'];
    }

    /**
     * Sets nominal_hours
     *
     * @param string $nominal_hours nominal_hours
     *
     * @return $this
     */
    public function setNominalHours($nominal_hours)
    {
        $this->container['nominal_hours'] = $nominal_hours;

        return $this;
    }

    /**
     * Gets duration_type_id
     *
     * @return int
     */
    public function getDurationTypeId()
    {
        return $this->container['duration_type_id'];
    }

    /**
     * Sets duration_type_id
     *
     * @param int $duration_type_id duration_type_id
     *
     * @return $this
     */
    public function setDurationTypeId($duration_type_id)
    {
        $this->container['duration_type_id'] = $duration_type_id;

        return $this;
    }

    /**
     * Gets duration_full_time
     *
     * @return double
     */
    public function getDurationFullTime()
    {
        return $this->container['duration_full_time'];
    }

    /**
     * Sets duration_full_time
     *
     * @param double $duration_full_time duration_full_time
     *
     * @return $this
     */
    public function setDurationFullTime($duration_full_time)
    {
        $this->container['duration_full_time'] = $duration_full_time;

        return $this;
    }

    /**
     * Gets duration_part_time
     *
     * @return double
     */
    public function getDurationPartTime()
    {
        return $this->container['duration_part_time'];
    }

    /**
     * Sets duration_part_time
     *
     * @param double $duration_part_time duration_part_time
     *
     * @return $this
     */
    public function setDurationPartTime($duration_part_time)
    {
        $this->container['duration_part_time'] = $duration_part_time;

        return $this;
    }

    /**
     * Gets recognition_status_id
     *
     * @return int
     */
    public function getRecognitionStatusId()
    {
        return $this->container['recognition_status_id'];
    }

    /**
     * Sets recognition_status_id
     *
     * @param int $recognition_status_id recognition_status_id
     *
     * @return $this
     */
    public function setRecognitionStatusId($recognition_status_id)
    {
        $this->container['recognition_status_id'] = $recognition_status_id;

        return $this;
    }

    /**
     * Gets asco_id
     *
     * @return int
     */
    public function getAscoId()
    {
        return $this->container['asco_id'];
    }

    /**
     * Sets asco_id
     *
     * @param int $asco_id asco_id
     *
     * @return $this
     */
    public function setAscoId($asco_id)
    {
        $this->container['asco_id'] = $asco_id;

        return $this;
    }

    /**
     * Gets vet_flag
     *
     * @return string
     */
    public function getVetFlag()
    {
        return $this->container['vet_flag'];
    }

    /**
     * Sets vet_flag
     *
     * @param string $vet_flag vet_flag
     *
     * @return $this
     */
    public function setVetFlag($vet_flag)
    {
        $this->container['vet_flag'] = $vet_flag;

        return $this;
    }

    /**
     * Gets core_business_flag
     *
     * @return bool
     */
    public function getCoreBusinessFlag()
    {
        return $this->container['core_business_flag'];
    }

    /**
     * Sets core_business_flag
     *
     * @param bool $core_business_flag core_business_flag
     *
     * @return $this
     */
    public function setCoreBusinessFlag($core_business_flag)
    {
        $this->container['core_business_flag'] = $core_business_flag;

        return $this;
    }

    /**
     * Gets cooperation
     *
     * @return string
     */
    public function getCooperation()
    {
        return $this->container['cooperation'];
    }

    /**
     * Sets cooperation
     *
     * @param string $cooperation cooperation
     *
     * @return $this
     */
    public function setCooperation($cooperation)
    {
        $this->container['cooperation'] = $cooperation;

        return $this;
    }

    /**
     * Gets points
     *
     * @return int
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param int $points points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets entry_requirements
     *
     * @return string
     */
    public function getEntryRequirements()
    {
        return $this->container['entry_requirements'];
    }

    /**
     * Sets entry_requirements
     *
     * @param string $entry_requirements entry_requirements
     *
     * @return $this
     */
    public function setEntryRequirements($entry_requirements)
    {
        $this->container['entry_requirements'] = $entry_requirements;

        return $this;
    }

    /**
     * Gets learning_outcomes
     *
     * @return string
     */
    public function getLearningOutcomes()
    {
        return $this->container['learning_outcomes'];
    }

    /**
     * Sets learning_outcomes
     *
     * @param string $learning_outcomes learning_outcomes
     *
     * @return $this
     */
    public function setLearningOutcomes($learning_outcomes)
    {
        $this->container['learning_outcomes'] = $learning_outcomes;

        return $this;
    }

    /**
     * Gets general_notes
     *
     * @return string
     */
    public function getGeneralNotes()
    {
        return $this->container['general_notes'];
    }

    /**
     * Sets general_notes
     *
     * @param string $general_notes general_notes
     *
     * @return $this
     */
    public function setGeneralNotes($general_notes)
    {
        $this->container['general_notes'] = $general_notes;

        return $this;
    }

    /**
     * Gets target_group_id
     *
     * @return int
     */
    public function getTargetGroupId()
    {
        return $this->container['target_group_id'];
    }

    /**
     * Sets target_group_id
     *
     * @param int $target_group_id target_group_id
     *
     * @return $this
     */
    public function setTargetGroupId($target_group_id)
    {
        $this->container['target_group_id'] = $target_group_id;

        return $this;
    }

    /**
     * Gets business_area_id
     *
     * @return int
     */
    public function getBusinessAreaId()
    {
        return $this->container['business_area_id'];
    }

    /**
     * Sets business_area_id
     *
     * @param int $business_area_id business_area_id
     *
     * @return $this
     */
    public function setBusinessAreaId($business_area_id)
    {
        $this->container['business_area_id'] = $business_area_id;

        return $this;
    }

    /**
     * Gets internal_qualification_id
     *
     * @return int
     */
    public function getInternalQualificationId()
    {
        return $this->container['internal_qualification_id'];
    }

    /**
     * Sets internal_qualification_id
     *
     * @param int $internal_qualification_id internal_qualification_id
     *
     * @return $this
     */
    public function setInternalQualificationId($internal_qualification_id)
    {
        $this->container['internal_qualification_id'] = $internal_qualification_id;

        return $this;
    }

    /**
     * Gets qualification_field_of_education_id
     *
     * @return int
     */
    public function getQualificationFieldOfEducationId()
    {
        return $this->container['qualification_field_of_education_id'];
    }

    /**
     * Sets qualification_field_of_education_id
     *
     * @param int $qualification_field_of_education_id qualification_field_of_education_id
     *
     * @return $this
     */
    public function setQualificationFieldOfEducationId($qualification_field_of_education_id)
    {
        $this->container['qualification_field_of_education_id'] = $qualification_field_of_education_id;

        return $this;
    }

    /**
     * Gets level_of_education_id
     *
     * @return int
     */
    public function getLevelOfEducationId()
    {
        return $this->container['level_of_education_id'];
    }

    /**
     * Sets level_of_education_id
     *
     * @param int $level_of_education_id level_of_education_id
     *
     * @return $this
     */
    public function setLevelOfEducationId($level_of_education_id)
    {
        $this->container['level_of_education_id'] = $level_of_education_id;

        return $this;
    }

    /**
     * Gets anzsco_id
     *
     * @return int
     */
    public function getAnzscoId()
    {
        return $this->container['anzsco_id'];
    }

    /**
     * Sets anzsco_id
     *
     * @param int $anzsco_id anzsco_id
     *
     * @return $this
     */
    public function setAnzscoId($anzsco_id)
    {
        $this->container['anzsco_id'] = $anzsco_id;

        return $this;
    }

    /**
     * Gets associated_course_code
     *
     * @return string
     */
    public function getAssociatedCourseCode()
    {
        return $this->container['associated_course_code'];
    }

    /**
     * Sets associated_course_code
     *
     * @param string $associated_course_code associated_course_code
     *
     * @return $this
     */
    public function setAssociatedCourseCode($associated_course_code)
    {
        $this->container['associated_course_code'] = $associated_course_code;

        return $this;
    }

    /**
     * Gets course_designer
     *
     * @return string
     */
    public function getCourseDesigner()
    {
        return $this->container['course_designer'];
    }

    /**
     * Sets course_designer
     *
     * @param string $course_designer course_designer
     *
     * @return $this
     */
    public function setCourseDesigner($course_designer)
    {
        $this->container['course_designer'] = $course_designer;

        return $this;
    }

    /**
     * Gets awarding_provider
     *
     * @return string
     */
    public function getAwardingProvider()
    {
        return $this->container['awarding_provider'];
    }

    /**
     * Sets awarding_provider
     *
     * @param string $awarding_provider awarding_provider
     *
     * @return $this
     */
    public function setAwardingProvider($awarding_provider)
    {
        $this->container['awarding_provider'] = $awarding_provider;

        return $this;
    }

    /**
     * Gets sg_qualification_category_id
     *
     * @return int
     */
    public function getSgQualificationCategoryId()
    {
        return $this->container['sg_qualification_category_id'];
    }

    /**
     * Sets sg_qualification_category_id
     *
     * @param int $sg_qualification_category_id sg_qualification_category_id
     *
     * @return $this
     */
    public function setSgQualificationCategoryId($sg_qualification_category_id)
    {
        $this->container['sg_qualification_category_id'] = $sg_qualification_category_id;

        return $this;
    }

    /**
     * Gets sg_schedule1
     *
     * @return string
     */
    public function getSgSchedule1()
    {
        return $this->container['sg_schedule1'];
    }

    /**
     * Sets sg_schedule1
     *
     * @param string $sg_schedule1 sg_schedule1
     *
     * @return $this
     */
    public function setSgSchedule1($sg_schedule1)
    {
        $this->container['sg_schedule1'] = $sg_schedule1;

        return $this;
    }

    /**
     * Gets sg_wsq_flag
     *
     * @return bool
     */
    public function getSgWsqFlag()
    {
        return $this->container['sg_wsq_flag'];
    }

    /**
     * Sets sg_wsq_flag
     *
     * @param bool $sg_wsq_flag sg_wsq_flag
     *
     * @return $this
     */
    public function setSgWsqFlag($sg_wsq_flag)
    {
        $this->container['sg_wsq_flag'] = $sg_wsq_flag;

        return $this;
    }

    /**
     * Gets sg_cpe_flag
     *
     * @return bool
     */
    public function getSgCpeFlag()
    {
        return $this->container['sg_cpe_flag'];
    }

    /**
     * Sets sg_cpe_flag
     *
     * @param bool $sg_cpe_flag sg_cpe_flag
     *
     * @return $this
     */
    public function setSgCpeFlag($sg_cpe_flag)
    {
        $this->container['sg_cpe_flag'] = $sg_cpe_flag;

        return $this;
    }

    /**
     * Gets fh_course_type_id
     *
     * @return int
     */
    public function getFhCourseTypeId()
    {
        return $this->container['fh_course_type_id'];
    }

    /**
     * Sets fh_course_type_id
     *
     * @param int $fh_course_type_id fh_course_type_id
     *
     * @return $this
     */
    public function setFhCourseTypeId($fh_course_type_id)
    {
        $this->container['fh_course_type_id'] = $fh_course_type_id;

        return $this;
    }

    /**
     * Gets fh_field_of_education_id
     *
     * @return int
     */
    public function getFhFieldOfEducationId()
    {
        return $this->container['fh_field_of_education_id'];
    }

    /**
     * Sets fh_field_of_education_id
     *
     * @param int $fh_field_of_education_id fh_field_of_education_id
     *
     * @return $this
     */
    public function setFhFieldOfEducationId($fh_field_of_education_id)
    {
        $this->container['fh_field_of_education_id'] = $fh_field_of_education_id;

        return $this;
    }

    /**
     * Gets fh_eligibility_type_id
     *
     * @return int
     */
    public function getFhEligibilityTypeId()
    {
        return $this->container['fh_eligibility_type_id'];
    }

    /**
     * Sets fh_eligibility_type_id
     *
     * @param int $fh_eligibility_type_id fh_eligibility_type_id
     *
     * @return $this
     */
    public function setFhEligibilityTypeId($fh_eligibility_type_id)
    {
        $this->container['fh_eligibility_type_id'] = $fh_eligibility_type_id;

        return $this;
    }

    /**
     * Gets fh_eftsl
     *
     * @return string
     */
    public function getFhEftsl()
    {
        return $this->container['fh_eftsl'];
    }

    /**
     * Sets fh_eftsl
     *
     * @param string $fh_eftsl fh_eftsl
     *
     * @return $this
     */
    public function setFhEftsl($fh_eftsl)
    {
        $this->container['fh_eftsl'] = $fh_eftsl;

        return $this;
    }

    /**
     * Gets effective_from_date
     *
     * @return \DateTime
     */
    public function getEffectiveFromDate()
    {
        return $this->container['effective_from_date'];
    }

    /**
     * Sets effective_from_date
     *
     * @param \DateTime $effective_from_date effective_from_date
     *
     * @return $this
     */
    public function setEffectiveFromDate($effective_from_date)
    {
        $this->container['effective_from_date'] = $effective_from_date;

        return $this;
    }

    /**
     * Gets effective_to_date
     *
     * @return \DateTime
     */
    public function getEffectiveToDate()
    {
        return $this->container['effective_to_date'];
    }

    /**
     * Sets effective_to_date
     *
     * @param \DateTime $effective_to_date effective_to_date
     *
     * @return $this
     */
    public function setEffectiveToDate($effective_to_date)
    {
        $this->container['effective_to_date'] = $effective_to_date;

        return $this;
    }

    /**
     * Gets qualification_category_id
     *
     * @return int
     */
    public function getQualificationCategoryId()
    {
        return $this->container['qualification_category_id'];
    }

    /**
     * Sets qualification_category_id
     *
     * @param int $qualification_category_id qualification_category_id
     *
     * @return $this
     */
    public function setQualificationCategoryId($qualification_category_id)
    {
        $this->container['qualification_category_id'] = $qualification_category_id;

        return $this;
    }

    /**
     * Gets course_code_nzqa_alternative
     *
     * @return string
     */
    public function getCourseCodeNzqaAlternative()
    {
        return $this->container['course_code_nzqa_alternative'];
    }

    /**
     * Sets course_code_nzqa_alternative
     *
     * @param string $course_code_nzqa_alternative course_code_nzqa_alternative
     *
     * @return $this
     */
    public function setCourseCodeNzqaAlternative($course_code_nzqa_alternative)
    {
        $this->container['course_code_nzqa_alternative'] = $course_code_nzqa_alternative;

        return $this;
    }

    /**
     * Gets nz_qualification_award_category_id
     *
     * @return int
     */
    public function getNzQualificationAwardCategoryId()
    {
        return $this->container['nz_qualification_award_category_id'];
    }

    /**
     * Sets nz_qualification_award_category_id
     *
     * @param int $nz_qualification_award_category_id nz_qualification_award_category_id
     *
     * @return $this
     */
    public function setNzQualificationAwardCategoryId($nz_qualification_award_category_id)
    {
        $this->container['nz_qualification_award_category_id'] = $nz_qualification_award_category_id;

        return $this;
    }

    /**
     * Gets fh_course_duration
     *
     * @return double
     */
    public function getFhCourseDuration()
    {
        return $this->container['fh_course_duration'];
    }

    /**
     * Sets fh_course_duration
     *
     * @param double $fh_course_duration fh_course_duration
     *
     * @return $this
     */
    public function setFhCourseDuration($fh_course_duration)
    {
        $this->container['fh_course_duration'] = $fh_course_duration;

        return $this;
    }

    /**
     * Gets industry_id
     *
     * @return int
     */
    public function getIndustryId()
    {
        return $this->container['industry_id'];
    }

    /**
     * Sets industry_id
     *
     * @param int $industry_id industry_id
     *
     * @return $this
     */
    public function setIndustryId($industry_id)
    {
        $this->container['industry_id'] = $industry_id;

        return $this;
    }

    /**
     * Gets publish_details
     *
     * @return \Phwebs\Wisenet\Model\PublishDetailsCourse
     */
    public function getPublishDetails()
    {
        return $this->container['publish_details'];
    }

    /**
     * Sets publish_details
     *
     * @param \Phwebs\Wisenet\Model\PublishDetailsCourse $publish_details publish_details
     *
     * @return $this
     */
    public function setPublishDetails($publish_details)
    {
        $this->container['publish_details'] = $publish_details;

        return $this;
    }

    /**
     * Gets last_customer_user_id
     *
     * @return int
     */
    public function getLastCustomerUserId()
    {
        return $this->container['last_customer_user_id'];
    }

    /**
     * Sets last_customer_user_id
     *
     * @param int $last_customer_user_id last_customer_user_id
     *
     * @return $this
     */
    public function setLastCustomerUserId($last_customer_user_id)
    {
        $this->container['last_customer_user_id'] = $last_customer_user_id;

        return $this;
    }

    /**
     * Gets last_audit_time_stamp
     *
     * @return \DateTime
     */
    public function getLastAuditTimeStamp()
    {
        return $this->container['last_audit_time_stamp'];
    }

    /**
     * Sets last_audit_time_stamp
     *
     * @param \DateTime $last_audit_time_stamp last_audit_time_stamp
     *
     * @return $this
     */
    public function setLastAuditTimeStamp($last_audit_time_stamp)
    {
        $this->container['last_audit_time_stamp'] = $last_audit_time_stamp;

        return $this;
    }

    /**
     * Gets last_audit_action
     *
     * @return string
     */
    public function getLastAuditAction()
    {
        return $this->container['last_audit_action'];
    }

    /**
     * Sets last_audit_action
     *
     * @param string $last_audit_action last_audit_action
     *
     * @return $this
     */
    public function setLastAuditAction($last_audit_action)
    {
        $this->container['last_audit_action'] = $last_audit_action;

        return $this;
    }

    /**
     * Gets nz_source_id
     *
     * @return int
     */
    public function getNzSourceId()
    {
        return $this->container['nz_source_id'];
    }

    /**
     * Sets nz_source_id
     *
     * @param int $nz_source_id nz_source_id
     *
     * @return $this
     */
    public function setNzSourceId($nz_source_id)
    {
        $this->container['nz_source_id'] = $nz_source_id;

        return $this;
    }

    /**
     * Gets course_guid
     *
     * @return string
     */
    public function getCourseGuid()
    {
        return $this->container['course_guid'];
    }

    /**
     * Sets course_guid
     *
     * @param string $course_guid course_guid
     *
     * @return $this
     */
    public function setCourseGuid($course_guid)
    {
        $this->container['course_guid'] = $course_guid;

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
