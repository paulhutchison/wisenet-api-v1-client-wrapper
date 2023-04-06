<?php
/**
 * Unit
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
 * Unit Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Unit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Unit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unit_id' => 'int',
'course_id' => 'int',
'unit_type_id' => 'int',
'unit_code' => 'string',
'unit_desc' => 'string',
'unit_of_competency_id' => 'int',
'vet_flag' => 'string',
'stage' => 'int',
'points' => 'int',
'pre_req' => 'string',
'tuition_weeks' => 'double',
'comments' => 'string',
'outline' => 'string',
'unit_field_of_education_id' => 'int',
'nominal_hours_supervised' => 'int',
'nominal_hours_unsupervised' => 'int',
'nz_funding_cat_id' => 'int',
'nz_degree_research_status_id' => 'int',
'nz_unit_classification_id' => 'int',
'nz_sced_field_of_study_id' => 'int',
'nz_efts_factor' => 'string',
'nz_credit' => 'string',
'nz_register_level_id' => 'int',
'nz_research_level_id' => 'int',
'nz_unit_exemption_fccmid' => 'int',
'nz_embedded_lit_num_id' => 'int',
'nz_standard_type_id' => 'int',
'nz_for_nzqa' => 'bool',
'last_customer_user_id' => 'int',
'last_audit_time_stamp' => '\DateTime',
'last_audit_action' => 'string',
'active_start_date' => '\DateTime',
'active_end_date' => '\DateTime',
'unit_guid' => 'string',
'is_uip' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unit_id' => 'int32',
'course_id' => 'int32',
'unit_type_id' => 'int32',
'unit_code' => null,
'unit_desc' => null,
'unit_of_competency_id' => 'int32',
'vet_flag' => null,
'stage' => 'int32',
'points' => 'int32',
'pre_req' => null,
'tuition_weeks' => 'double',
'comments' => null,
'outline' => null,
'unit_field_of_education_id' => 'int32',
'nominal_hours_supervised' => 'int32',
'nominal_hours_unsupervised' => 'int32',
'nz_funding_cat_id' => 'int32',
'nz_degree_research_status_id' => 'int32',
'nz_unit_classification_id' => 'int32',
'nz_sced_field_of_study_id' => 'int32',
'nz_efts_factor' => null,
'nz_credit' => null,
'nz_register_level_id' => 'int32',
'nz_research_level_id' => 'int32',
'nz_unit_exemption_fccmid' => 'int32',
'nz_embedded_lit_num_id' => 'int32',
'nz_standard_type_id' => 'int32',
'nz_for_nzqa' => null,
'last_customer_user_id' => 'int32',
'last_audit_time_stamp' => 'date-time',
'last_audit_action' => null,
'active_start_date' => 'date-time',
'active_end_date' => 'date-time',
'unit_guid' => 'uuid',
'is_uip' => null    ];

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
        'unit_id' => 'UnitId',
'course_id' => 'CourseId',
'unit_type_id' => 'UnitTypeId',
'unit_code' => 'UnitCode',
'unit_desc' => 'UnitDesc',
'unit_of_competency_id' => 'UnitOfCompetencyId',
'vet_flag' => 'VetFlag',
'stage' => 'Stage',
'points' => 'Points',
'pre_req' => 'PreReq',
'tuition_weeks' => 'TuitionWeeks',
'comments' => 'Comments',
'outline' => 'Outline',
'unit_field_of_education_id' => 'UnitFieldOfEducationId',
'nominal_hours_supervised' => 'NominalHoursSupervised',
'nominal_hours_unsupervised' => 'NominalHoursUnsupervised',
'nz_funding_cat_id' => 'NzFundingCatId',
'nz_degree_research_status_id' => 'NzDegreeResearchStatusId',
'nz_unit_classification_id' => 'NzUnitClassificationId',
'nz_sced_field_of_study_id' => 'NzScedFieldOfStudyId',
'nz_efts_factor' => 'NzEftsFactor',
'nz_credit' => 'NzCredit',
'nz_register_level_id' => 'NzRegisterLevelId',
'nz_research_level_id' => 'NzResearchLevelId',
'nz_unit_exemption_fccmid' => 'NzUnitExemptionFccmid',
'nz_embedded_lit_num_id' => 'NzEmbeddedLitNumId',
'nz_standard_type_id' => 'NzStandardTypeId',
'nz_for_nzqa' => 'NzForNzqa',
'last_customer_user_id' => 'LastCustomerUserId',
'last_audit_time_stamp' => 'LastAuditTimeStamp',
'last_audit_action' => 'LastAuditAction',
'active_start_date' => 'ActiveStartDate',
'active_end_date' => 'ActiveEndDate',
'unit_guid' => 'UnitGuid',
'is_uip' => 'IsUip'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unit_id' => 'setUnitId',
'course_id' => 'setCourseId',
'unit_type_id' => 'setUnitTypeId',
'unit_code' => 'setUnitCode',
'unit_desc' => 'setUnitDesc',
'unit_of_competency_id' => 'setUnitOfCompetencyId',
'vet_flag' => 'setVetFlag',
'stage' => 'setStage',
'points' => 'setPoints',
'pre_req' => 'setPreReq',
'tuition_weeks' => 'setTuitionWeeks',
'comments' => 'setComments',
'outline' => 'setOutline',
'unit_field_of_education_id' => 'setUnitFieldOfEducationId',
'nominal_hours_supervised' => 'setNominalHoursSupervised',
'nominal_hours_unsupervised' => 'setNominalHoursUnsupervised',
'nz_funding_cat_id' => 'setNzFundingCatId',
'nz_degree_research_status_id' => 'setNzDegreeResearchStatusId',
'nz_unit_classification_id' => 'setNzUnitClassificationId',
'nz_sced_field_of_study_id' => 'setNzScedFieldOfStudyId',
'nz_efts_factor' => 'setNzEftsFactor',
'nz_credit' => 'setNzCredit',
'nz_register_level_id' => 'setNzRegisterLevelId',
'nz_research_level_id' => 'setNzResearchLevelId',
'nz_unit_exemption_fccmid' => 'setNzUnitExemptionFccmid',
'nz_embedded_lit_num_id' => 'setNzEmbeddedLitNumId',
'nz_standard_type_id' => 'setNzStandardTypeId',
'nz_for_nzqa' => 'setNzForNzqa',
'last_customer_user_id' => 'setLastCustomerUserId',
'last_audit_time_stamp' => 'setLastAuditTimeStamp',
'last_audit_action' => 'setLastAuditAction',
'active_start_date' => 'setActiveStartDate',
'active_end_date' => 'setActiveEndDate',
'unit_guid' => 'setUnitGuid',
'is_uip' => 'setIsUip'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unit_id' => 'getUnitId',
'course_id' => 'getCourseId',
'unit_type_id' => 'getUnitTypeId',
'unit_code' => 'getUnitCode',
'unit_desc' => 'getUnitDesc',
'unit_of_competency_id' => 'getUnitOfCompetencyId',
'vet_flag' => 'getVetFlag',
'stage' => 'getStage',
'points' => 'getPoints',
'pre_req' => 'getPreReq',
'tuition_weeks' => 'getTuitionWeeks',
'comments' => 'getComments',
'outline' => 'getOutline',
'unit_field_of_education_id' => 'getUnitFieldOfEducationId',
'nominal_hours_supervised' => 'getNominalHoursSupervised',
'nominal_hours_unsupervised' => 'getNominalHoursUnsupervised',
'nz_funding_cat_id' => 'getNzFundingCatId',
'nz_degree_research_status_id' => 'getNzDegreeResearchStatusId',
'nz_unit_classification_id' => 'getNzUnitClassificationId',
'nz_sced_field_of_study_id' => 'getNzScedFieldOfStudyId',
'nz_efts_factor' => 'getNzEftsFactor',
'nz_credit' => 'getNzCredit',
'nz_register_level_id' => 'getNzRegisterLevelId',
'nz_research_level_id' => 'getNzResearchLevelId',
'nz_unit_exemption_fccmid' => 'getNzUnitExemptionFccmid',
'nz_embedded_lit_num_id' => 'getNzEmbeddedLitNumId',
'nz_standard_type_id' => 'getNzStandardTypeId',
'nz_for_nzqa' => 'getNzForNzqa',
'last_customer_user_id' => 'getLastCustomerUserId',
'last_audit_time_stamp' => 'getLastAuditTimeStamp',
'last_audit_action' => 'getLastAuditAction',
'active_start_date' => 'getActiveStartDate',
'active_end_date' => 'getActiveEndDate',
'unit_guid' => 'getUnitGuid',
'is_uip' => 'getIsUip'    ];

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
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['course_id'] = isset($data['course_id']) ? $data['course_id'] : null;
        $this->container['unit_type_id'] = isset($data['unit_type_id']) ? $data['unit_type_id'] : null;
        $this->container['unit_code'] = isset($data['unit_code']) ? $data['unit_code'] : null;
        $this->container['unit_desc'] = isset($data['unit_desc']) ? $data['unit_desc'] : null;
        $this->container['unit_of_competency_id'] = isset($data['unit_of_competency_id']) ? $data['unit_of_competency_id'] : null;
        $this->container['vet_flag'] = isset($data['vet_flag']) ? $data['vet_flag'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['pre_req'] = isset($data['pre_req']) ? $data['pre_req'] : null;
        $this->container['tuition_weeks'] = isset($data['tuition_weeks']) ? $data['tuition_weeks'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['outline'] = isset($data['outline']) ? $data['outline'] : null;
        $this->container['unit_field_of_education_id'] = isset($data['unit_field_of_education_id']) ? $data['unit_field_of_education_id'] : null;
        $this->container['nominal_hours_supervised'] = isset($data['nominal_hours_supervised']) ? $data['nominal_hours_supervised'] : null;
        $this->container['nominal_hours_unsupervised'] = isset($data['nominal_hours_unsupervised']) ? $data['nominal_hours_unsupervised'] : null;
        $this->container['nz_funding_cat_id'] = isset($data['nz_funding_cat_id']) ? $data['nz_funding_cat_id'] : null;
        $this->container['nz_degree_research_status_id'] = isset($data['nz_degree_research_status_id']) ? $data['nz_degree_research_status_id'] : null;
        $this->container['nz_unit_classification_id'] = isset($data['nz_unit_classification_id']) ? $data['nz_unit_classification_id'] : null;
        $this->container['nz_sced_field_of_study_id'] = isset($data['nz_sced_field_of_study_id']) ? $data['nz_sced_field_of_study_id'] : null;
        $this->container['nz_efts_factor'] = isset($data['nz_efts_factor']) ? $data['nz_efts_factor'] : null;
        $this->container['nz_credit'] = isset($data['nz_credit']) ? $data['nz_credit'] : null;
        $this->container['nz_register_level_id'] = isset($data['nz_register_level_id']) ? $data['nz_register_level_id'] : null;
        $this->container['nz_research_level_id'] = isset($data['nz_research_level_id']) ? $data['nz_research_level_id'] : null;
        $this->container['nz_unit_exemption_fccmid'] = isset($data['nz_unit_exemption_fccmid']) ? $data['nz_unit_exemption_fccmid'] : null;
        $this->container['nz_embedded_lit_num_id'] = isset($data['nz_embedded_lit_num_id']) ? $data['nz_embedded_lit_num_id'] : null;
        $this->container['nz_standard_type_id'] = isset($data['nz_standard_type_id']) ? $data['nz_standard_type_id'] : null;
        $this->container['nz_for_nzqa'] = isset($data['nz_for_nzqa']) ? $data['nz_for_nzqa'] : null;
        $this->container['last_customer_user_id'] = isset($data['last_customer_user_id']) ? $data['last_customer_user_id'] : null;
        $this->container['last_audit_time_stamp'] = isset($data['last_audit_time_stamp']) ? $data['last_audit_time_stamp'] : null;
        $this->container['last_audit_action'] = isset($data['last_audit_action']) ? $data['last_audit_action'] : null;
        $this->container['active_start_date'] = isset($data['active_start_date']) ? $data['active_start_date'] : null;
        $this->container['active_end_date'] = isset($data['active_end_date']) ? $data['active_end_date'] : null;
        $this->container['unit_guid'] = isset($data['unit_guid']) ? $data['unit_guid'] : null;
        $this->container['is_uip'] = isset($data['is_uip']) ? $data['is_uip'] : null;
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
     * Gets unit_id
     *
     * @return int
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param int $unit_id unit_id
     *
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        $this->container['unit_id'] = $unit_id;

        return $this;
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
     * Gets unit_type_id
     *
     * @return int
     */
    public function getUnitTypeId()
    {
        return $this->container['unit_type_id'];
    }

    /**
     * Sets unit_type_id
     *
     * @param int $unit_type_id unit_type_id
     *
     * @return $this
     */
    public function setUnitTypeId($unit_type_id)
    {
        $this->container['unit_type_id'] = $unit_type_id;

        return $this;
    }

    /**
     * Gets unit_code
     *
     * @return string
     */
    public function getUnitCode()
    {
        return $this->container['unit_code'];
    }

    /**
     * Sets unit_code
     *
     * @param string $unit_code unit_code
     *
     * @return $this
     */
    public function setUnitCode($unit_code)
    {
        $this->container['unit_code'] = $unit_code;

        return $this;
    }

    /**
     * Gets unit_desc
     *
     * @return string
     */
    public function getUnitDesc()
    {
        return $this->container['unit_desc'];
    }

    /**
     * Sets unit_desc
     *
     * @param string $unit_desc unit_desc
     *
     * @return $this
     */
    public function setUnitDesc($unit_desc)
    {
        $this->container['unit_desc'] = $unit_desc;

        return $this;
    }

    /**
     * Gets unit_of_competency_id
     *
     * @return int
     */
    public function getUnitOfCompetencyId()
    {
        return $this->container['unit_of_competency_id'];
    }

    /**
     * Sets unit_of_competency_id
     *
     * @param int $unit_of_competency_id unit_of_competency_id
     *
     * @return $this
     */
    public function setUnitOfCompetencyId($unit_of_competency_id)
    {
        $this->container['unit_of_competency_id'] = $unit_of_competency_id;

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
     * Gets stage
     *
     * @return int
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     *
     * @param int $stage stage
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;

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
     * Gets pre_req
     *
     * @return string
     */
    public function getPreReq()
    {
        return $this->container['pre_req'];
    }

    /**
     * Sets pre_req
     *
     * @param string $pre_req pre_req
     *
     * @return $this
     */
    public function setPreReq($pre_req)
    {
        $this->container['pre_req'] = $pre_req;

        return $this;
    }

    /**
     * Gets tuition_weeks
     *
     * @return double
     */
    public function getTuitionWeeks()
    {
        return $this->container['tuition_weeks'];
    }

    /**
     * Sets tuition_weeks
     *
     * @param double $tuition_weeks tuition_weeks
     *
     * @return $this
     */
    public function setTuitionWeeks($tuition_weeks)
    {
        $this->container['tuition_weeks'] = $tuition_weeks;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets outline
     *
     * @return string
     */
    public function getOutline()
    {
        return $this->container['outline'];
    }

    /**
     * Sets outline
     *
     * @param string $outline outline
     *
     * @return $this
     */
    public function setOutline($outline)
    {
        $this->container['outline'] = $outline;

        return $this;
    }

    /**
     * Gets unit_field_of_education_id
     *
     * @return int
     */
    public function getUnitFieldOfEducationId()
    {
        return $this->container['unit_field_of_education_id'];
    }

    /**
     * Sets unit_field_of_education_id
     *
     * @param int $unit_field_of_education_id unit_field_of_education_id
     *
     * @return $this
     */
    public function setUnitFieldOfEducationId($unit_field_of_education_id)
    {
        $this->container['unit_field_of_education_id'] = $unit_field_of_education_id;

        return $this;
    }

    /**
     * Gets nominal_hours_supervised
     *
     * @return int
     */
    public function getNominalHoursSupervised()
    {
        return $this->container['nominal_hours_supervised'];
    }

    /**
     * Sets nominal_hours_supervised
     *
     * @param int $nominal_hours_supervised nominal_hours_supervised
     *
     * @return $this
     */
    public function setNominalHoursSupervised($nominal_hours_supervised)
    {
        $this->container['nominal_hours_supervised'] = $nominal_hours_supervised;

        return $this;
    }

    /**
     * Gets nominal_hours_unsupervised
     *
     * @return int
     */
    public function getNominalHoursUnsupervised()
    {
        return $this->container['nominal_hours_unsupervised'];
    }

    /**
     * Sets nominal_hours_unsupervised
     *
     * @param int $nominal_hours_unsupervised nominal_hours_unsupervised
     *
     * @return $this
     */
    public function setNominalHoursUnsupervised($nominal_hours_unsupervised)
    {
        $this->container['nominal_hours_unsupervised'] = $nominal_hours_unsupervised;

        return $this;
    }

    /**
     * Gets nz_funding_cat_id
     *
     * @return int
     */
    public function getNzFundingCatId()
    {
        return $this->container['nz_funding_cat_id'];
    }

    /**
     * Sets nz_funding_cat_id
     *
     * @param int $nz_funding_cat_id nz_funding_cat_id
     *
     * @return $this
     */
    public function setNzFundingCatId($nz_funding_cat_id)
    {
        $this->container['nz_funding_cat_id'] = $nz_funding_cat_id;

        return $this;
    }

    /**
     * Gets nz_degree_research_status_id
     *
     * @return int
     */
    public function getNzDegreeResearchStatusId()
    {
        return $this->container['nz_degree_research_status_id'];
    }

    /**
     * Sets nz_degree_research_status_id
     *
     * @param int $nz_degree_research_status_id nz_degree_research_status_id
     *
     * @return $this
     */
    public function setNzDegreeResearchStatusId($nz_degree_research_status_id)
    {
        $this->container['nz_degree_research_status_id'] = $nz_degree_research_status_id;

        return $this;
    }

    /**
     * Gets nz_unit_classification_id
     *
     * @return int
     */
    public function getNzUnitClassificationId()
    {
        return $this->container['nz_unit_classification_id'];
    }

    /**
     * Sets nz_unit_classification_id
     *
     * @param int $nz_unit_classification_id nz_unit_classification_id
     *
     * @return $this
     */
    public function setNzUnitClassificationId($nz_unit_classification_id)
    {
        $this->container['nz_unit_classification_id'] = $nz_unit_classification_id;

        return $this;
    }

    /**
     * Gets nz_sced_field_of_study_id
     *
     * @return int
     */
    public function getNzScedFieldOfStudyId()
    {
        return $this->container['nz_sced_field_of_study_id'];
    }

    /**
     * Sets nz_sced_field_of_study_id
     *
     * @param int $nz_sced_field_of_study_id nz_sced_field_of_study_id
     *
     * @return $this
     */
    public function setNzScedFieldOfStudyId($nz_sced_field_of_study_id)
    {
        $this->container['nz_sced_field_of_study_id'] = $nz_sced_field_of_study_id;

        return $this;
    }

    /**
     * Gets nz_efts_factor
     *
     * @return string
     */
    public function getNzEftsFactor()
    {
        return $this->container['nz_efts_factor'];
    }

    /**
     * Sets nz_efts_factor
     *
     * @param string $nz_efts_factor nz_efts_factor
     *
     * @return $this
     */
    public function setNzEftsFactor($nz_efts_factor)
    {
        $this->container['nz_efts_factor'] = $nz_efts_factor;

        return $this;
    }

    /**
     * Gets nz_credit
     *
     * @return string
     */
    public function getNzCredit()
    {
        return $this->container['nz_credit'];
    }

    /**
     * Sets nz_credit
     *
     * @param string $nz_credit nz_credit
     *
     * @return $this
     */
    public function setNzCredit($nz_credit)
    {
        $this->container['nz_credit'] = $nz_credit;

        return $this;
    }

    /**
     * Gets nz_register_level_id
     *
     * @return int
     */
    public function getNzRegisterLevelId()
    {
        return $this->container['nz_register_level_id'];
    }

    /**
     * Sets nz_register_level_id
     *
     * @param int $nz_register_level_id nz_register_level_id
     *
     * @return $this
     */
    public function setNzRegisterLevelId($nz_register_level_id)
    {
        $this->container['nz_register_level_id'] = $nz_register_level_id;

        return $this;
    }

    /**
     * Gets nz_research_level_id
     *
     * @return int
     */
    public function getNzResearchLevelId()
    {
        return $this->container['nz_research_level_id'];
    }

    /**
     * Sets nz_research_level_id
     *
     * @param int $nz_research_level_id nz_research_level_id
     *
     * @return $this
     */
    public function setNzResearchLevelId($nz_research_level_id)
    {
        $this->container['nz_research_level_id'] = $nz_research_level_id;

        return $this;
    }

    /**
     * Gets nz_unit_exemption_fccmid
     *
     * @return int
     */
    public function getNzUnitExemptionFccmid()
    {
        return $this->container['nz_unit_exemption_fccmid'];
    }

    /**
     * Sets nz_unit_exemption_fccmid
     *
     * @param int $nz_unit_exemption_fccmid nz_unit_exemption_fccmid
     *
     * @return $this
     */
    public function setNzUnitExemptionFccmid($nz_unit_exemption_fccmid)
    {
        $this->container['nz_unit_exemption_fccmid'] = $nz_unit_exemption_fccmid;

        return $this;
    }

    /**
     * Gets nz_embedded_lit_num_id
     *
     * @return int
     */
    public function getNzEmbeddedLitNumId()
    {
        return $this->container['nz_embedded_lit_num_id'];
    }

    /**
     * Sets nz_embedded_lit_num_id
     *
     * @param int $nz_embedded_lit_num_id nz_embedded_lit_num_id
     *
     * @return $this
     */
    public function setNzEmbeddedLitNumId($nz_embedded_lit_num_id)
    {
        $this->container['nz_embedded_lit_num_id'] = $nz_embedded_lit_num_id;

        return $this;
    }

    /**
     * Gets nz_standard_type_id
     *
     * @return int
     */
    public function getNzStandardTypeId()
    {
        return $this->container['nz_standard_type_id'];
    }

    /**
     * Sets nz_standard_type_id
     *
     * @param int $nz_standard_type_id nz_standard_type_id
     *
     * @return $this
     */
    public function setNzStandardTypeId($nz_standard_type_id)
    {
        $this->container['nz_standard_type_id'] = $nz_standard_type_id;

        return $this;
    }

    /**
     * Gets nz_for_nzqa
     *
     * @return bool
     */
    public function getNzForNzqa()
    {
        return $this->container['nz_for_nzqa'];
    }

    /**
     * Sets nz_for_nzqa
     *
     * @param bool $nz_for_nzqa nz_for_nzqa
     *
     * @return $this
     */
    public function setNzForNzqa($nz_for_nzqa)
    {
        $this->container['nz_for_nzqa'] = $nz_for_nzqa;

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
     * Gets active_start_date
     *
     * @return \DateTime
     */
    public function getActiveStartDate()
    {
        return $this->container['active_start_date'];
    }

    /**
     * Sets active_start_date
     *
     * @param \DateTime $active_start_date active_start_date
     *
     * @return $this
     */
    public function setActiveStartDate($active_start_date)
    {
        $this->container['active_start_date'] = $active_start_date;

        return $this;
    }

    /**
     * Gets active_end_date
     *
     * @return \DateTime
     */
    public function getActiveEndDate()
    {
        return $this->container['active_end_date'];
    }

    /**
     * Sets active_end_date
     *
     * @param \DateTime $active_end_date active_end_date
     *
     * @return $this
     */
    public function setActiveEndDate($active_end_date)
    {
        $this->container['active_end_date'] = $active_end_date;

        return $this;
    }

    /**
     * Gets unit_guid
     *
     * @return string
     */
    public function getUnitGuid()
    {
        return $this->container['unit_guid'];
    }

    /**
     * Sets unit_guid
     *
     * @param string $unit_guid unit_guid
     *
     * @return $this
     */
    public function setUnitGuid($unit_guid)
    {
        $this->container['unit_guid'] = $unit_guid;

        return $this;
    }

    /**
     * Gets is_uip
     *
     * @return bool
     */
    public function getIsUip()
    {
        return $this->container['is_uip'];
    }

    /**
     * Sets is_uip
     *
     * @param bool $is_uip is_uip
     *
     * @return $this
     */
    public function setIsUip($is_uip)
    {
        $this->container['is_uip'] = $is_uip;

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
