<?php
/**
 * CourseOfferRelationships
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
 * CourseOfferRelationships Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CourseOfferRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CourseOfferRelationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'course' => '\Phwebs\Wisenet\Model\CourseBasic',
'coordinator' => '\Phwebs\Wisenet\Model\Coordinator',
'course_offer_status' => '\Phwebs\Wisenet\Model\CourseOfferStatus',
'course_offer_type' => '\Phwebs\Wisenet\Model\CourseOfferType',
'delivery_language' => '\Phwebs\Wisenet\Model\Language',
'delivery_workplace' => '\Phwebs\Wisenet\Model\WorkplaceBasic',
'program_status' => '\Phwebs\Wisenet\Model\ProgramStatus',
'contract_type' => '\Phwebs\Wisenet\Model\ContractType',
'commencing_course' => '\Phwebs\Wisenet\Model\CommencingCourse',
'av_study_reason' => '\Phwebs\Wisenet\Model\AvStudyReason',
'study_mode' => '\Phwebs\Wisenet\Model\StudyMode',
'location' => '\Phwebs\Wisenet\Model\LocationBasic',
'delivery_mode' => '\Phwebs\Wisenet\Model\DeliveryMode',
'delivery_mode_av8' => '\Phwebs\Wisenet\Model\DeliveryModeAv8',
'delivery_options' => '\Phwebs\Wisenet\Model\DeliveryOption[]',
'predominant_delivery_mode' => '\Phwebs\Wisenet\Model\PredominantDeliveryMode',
'fund_source_national' => '\Phwebs\Wisenet\Model\FundSourceNational',
'fund_source_state' => '\Phwebs\Wisenet\Model\FundSourceState',
'contract' => '\Phwebs\Wisenet\Model\Contract',
'fee_exemption' => '\Phwebs\Wisenet\Model\FeeExemption',
'fee_exemption_waiver' => '\Phwebs\Wisenet\Model\FeeExemptionWaiver',
'internet_based_learning' => '\Phwebs\Wisenet\Model\InternetBasedLearning',
'main_subject1' => '\Phwebs\Wisenet\Model\MainSubject',
'main_subject2' => '\Phwebs\Wisenet\Model\MainSubject',
'main_subject3' => '\Phwebs\Wisenet\Model\MainSubject',
'fund_source' => '\Phwebs\Wisenet\Model\FundSource',
'fee_assessment_category' => '\Phwebs\Wisenet\Model\FeeAssessmentCategory',
'mural_attendance' => '\Phwebs\Wisenet\Model\MuralAttendance',
'delivery_mode_wa1' => '\Phwebs\Wisenet\Model\DeliveryModeWa',
'delivery_mode_wa2' => '\Phwebs\Wisenet\Model\DeliveryModeWa',
'delivery_mode_wa3' => '\Phwebs\Wisenet\Model\DeliveryModeWa',
'fee_type_indicator' => '\Phwebs\Wisenet\Model\FeeTypeIndicator',
'offshore_delivery_indicator' => '\Phwebs\Wisenet\Model\OffshoreDeliveryIndicator',
'offshore_delivery_mode' => '\Phwebs\Wisenet\Model\OffshoreDeliveryMode',
'campus_operation_type' => '\Phwebs\Wisenet\Model\CampusOperationType',
'commencing_student_identifier' => '\Phwebs\Wisenet\Model\CommencingStudentIdentifier',
'trainer' => '\Phwebs\Wisenet\Model\Trainer',
'assessor' => '\Phwebs\Wisenet\Model\Assessor',
'assessment_method' => '\Phwebs\Wisenet\Model\AssessmentMethod',
'venue' => '\Phwebs\Wisenet\Model\VenueBasic',
'duration_type' => '\Phwebs\Wisenet\Model\DurationType',
'department_code' => '\Phwebs\Wisenet\Model\DepartmentCode',
'program' => '\Phwebs\Wisenet\Model\Program'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'course' => null,
'coordinator' => null,
'course_offer_status' => null,
'course_offer_type' => null,
'delivery_language' => null,
'delivery_workplace' => null,
'program_status' => null,
'contract_type' => null,
'commencing_course' => null,
'av_study_reason' => null,
'study_mode' => null,
'location' => null,
'delivery_mode' => null,
'delivery_mode_av8' => null,
'delivery_options' => null,
'predominant_delivery_mode' => null,
'fund_source_national' => null,
'fund_source_state' => null,
'contract' => null,
'fee_exemption' => null,
'fee_exemption_waiver' => null,
'internet_based_learning' => null,
'main_subject1' => null,
'main_subject2' => null,
'main_subject3' => null,
'fund_source' => null,
'fee_assessment_category' => null,
'mural_attendance' => null,
'delivery_mode_wa1' => null,
'delivery_mode_wa2' => null,
'delivery_mode_wa3' => null,
'fee_type_indicator' => null,
'offshore_delivery_indicator' => null,
'offshore_delivery_mode' => null,
'campus_operation_type' => null,
'commencing_student_identifier' => null,
'trainer' => null,
'assessor' => null,
'assessment_method' => null,
'venue' => null,
'duration_type' => null,
'department_code' => null,
'program' => null    ];

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
        'course' => 'Course',
'coordinator' => 'Coordinator',
'course_offer_status' => 'CourseOfferStatus',
'course_offer_type' => 'CourseOfferType',
'delivery_language' => 'DeliveryLanguage',
'delivery_workplace' => 'DeliveryWorkplace',
'program_status' => 'ProgramStatus',
'contract_type' => 'ContractType',
'commencing_course' => 'CommencingCourse',
'av_study_reason' => 'AvStudyReason',
'study_mode' => 'StudyMode',
'location' => 'Location',
'delivery_mode' => 'DeliveryMode',
'delivery_mode_av8' => 'DeliveryModeAv8',
'delivery_options' => 'DeliveryOptions',
'predominant_delivery_mode' => 'PredominantDeliveryMode',
'fund_source_national' => 'FundSourceNational',
'fund_source_state' => 'FundSourceState',
'contract' => 'Contract',
'fee_exemption' => 'FeeExemption',
'fee_exemption_waiver' => 'FeeExemptionWaiver',
'internet_based_learning' => 'InternetBasedLearning',
'main_subject1' => 'MainSubject1',
'main_subject2' => 'MainSubject2',
'main_subject3' => 'MainSubject3',
'fund_source' => 'FundSource',
'fee_assessment_category' => 'FeeAssessmentCategory',
'mural_attendance' => 'MuralAttendance',
'delivery_mode_wa1' => 'DeliveryModeWa1',
'delivery_mode_wa2' => 'DeliveryModeWa2',
'delivery_mode_wa3' => 'DeliveryModeWa3',
'fee_type_indicator' => 'FeeTypeIndicator',
'offshore_delivery_indicator' => 'OffshoreDeliveryIndicator',
'offshore_delivery_mode' => 'OffshoreDeliveryMode',
'campus_operation_type' => 'CampusOperationType',
'commencing_student_identifier' => 'CommencingStudentIdentifier',
'trainer' => 'Trainer',
'assessor' => 'Assessor',
'assessment_method' => 'AssessmentMethod',
'venue' => 'Venue',
'duration_type' => 'DurationType',
'department_code' => 'DepartmentCode',
'program' => 'Program'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'course' => 'setCourse',
'coordinator' => 'setCoordinator',
'course_offer_status' => 'setCourseOfferStatus',
'course_offer_type' => 'setCourseOfferType',
'delivery_language' => 'setDeliveryLanguage',
'delivery_workplace' => 'setDeliveryWorkplace',
'program_status' => 'setProgramStatus',
'contract_type' => 'setContractType',
'commencing_course' => 'setCommencingCourse',
'av_study_reason' => 'setAvStudyReason',
'study_mode' => 'setStudyMode',
'location' => 'setLocation',
'delivery_mode' => 'setDeliveryMode',
'delivery_mode_av8' => 'setDeliveryModeAv8',
'delivery_options' => 'setDeliveryOptions',
'predominant_delivery_mode' => 'setPredominantDeliveryMode',
'fund_source_national' => 'setFundSourceNational',
'fund_source_state' => 'setFundSourceState',
'contract' => 'setContract',
'fee_exemption' => 'setFeeExemption',
'fee_exemption_waiver' => 'setFeeExemptionWaiver',
'internet_based_learning' => 'setInternetBasedLearning',
'main_subject1' => 'setMainSubject1',
'main_subject2' => 'setMainSubject2',
'main_subject3' => 'setMainSubject3',
'fund_source' => 'setFundSource',
'fee_assessment_category' => 'setFeeAssessmentCategory',
'mural_attendance' => 'setMuralAttendance',
'delivery_mode_wa1' => 'setDeliveryModeWa1',
'delivery_mode_wa2' => 'setDeliveryModeWa2',
'delivery_mode_wa3' => 'setDeliveryModeWa3',
'fee_type_indicator' => 'setFeeTypeIndicator',
'offshore_delivery_indicator' => 'setOffshoreDeliveryIndicator',
'offshore_delivery_mode' => 'setOffshoreDeliveryMode',
'campus_operation_type' => 'setCampusOperationType',
'commencing_student_identifier' => 'setCommencingStudentIdentifier',
'trainer' => 'setTrainer',
'assessor' => 'setAssessor',
'assessment_method' => 'setAssessmentMethod',
'venue' => 'setVenue',
'duration_type' => 'setDurationType',
'department_code' => 'setDepartmentCode',
'program' => 'setProgram'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'course' => 'getCourse',
'coordinator' => 'getCoordinator',
'course_offer_status' => 'getCourseOfferStatus',
'course_offer_type' => 'getCourseOfferType',
'delivery_language' => 'getDeliveryLanguage',
'delivery_workplace' => 'getDeliveryWorkplace',
'program_status' => 'getProgramStatus',
'contract_type' => 'getContractType',
'commencing_course' => 'getCommencingCourse',
'av_study_reason' => 'getAvStudyReason',
'study_mode' => 'getStudyMode',
'location' => 'getLocation',
'delivery_mode' => 'getDeliveryMode',
'delivery_mode_av8' => 'getDeliveryModeAv8',
'delivery_options' => 'getDeliveryOptions',
'predominant_delivery_mode' => 'getPredominantDeliveryMode',
'fund_source_national' => 'getFundSourceNational',
'fund_source_state' => 'getFundSourceState',
'contract' => 'getContract',
'fee_exemption' => 'getFeeExemption',
'fee_exemption_waiver' => 'getFeeExemptionWaiver',
'internet_based_learning' => 'getInternetBasedLearning',
'main_subject1' => 'getMainSubject1',
'main_subject2' => 'getMainSubject2',
'main_subject3' => 'getMainSubject3',
'fund_source' => 'getFundSource',
'fee_assessment_category' => 'getFeeAssessmentCategory',
'mural_attendance' => 'getMuralAttendance',
'delivery_mode_wa1' => 'getDeliveryModeWa1',
'delivery_mode_wa2' => 'getDeliveryModeWa2',
'delivery_mode_wa3' => 'getDeliveryModeWa3',
'fee_type_indicator' => 'getFeeTypeIndicator',
'offshore_delivery_indicator' => 'getOffshoreDeliveryIndicator',
'offshore_delivery_mode' => 'getOffshoreDeliveryMode',
'campus_operation_type' => 'getCampusOperationType',
'commencing_student_identifier' => 'getCommencingStudentIdentifier',
'trainer' => 'getTrainer',
'assessor' => 'getAssessor',
'assessment_method' => 'getAssessmentMethod',
'venue' => 'getVenue',
'duration_type' => 'getDurationType',
'department_code' => 'getDepartmentCode',
'program' => 'getProgram'    ];

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
        $this->container['course'] = isset($data['course']) ? $data['course'] : null;
        $this->container['coordinator'] = isset($data['coordinator']) ? $data['coordinator'] : null;
        $this->container['course_offer_status'] = isset($data['course_offer_status']) ? $data['course_offer_status'] : null;
        $this->container['course_offer_type'] = isset($data['course_offer_type']) ? $data['course_offer_type'] : null;
        $this->container['delivery_language'] = isset($data['delivery_language']) ? $data['delivery_language'] : null;
        $this->container['delivery_workplace'] = isset($data['delivery_workplace']) ? $data['delivery_workplace'] : null;
        $this->container['program_status'] = isset($data['program_status']) ? $data['program_status'] : null;
        $this->container['contract_type'] = isset($data['contract_type']) ? $data['contract_type'] : null;
        $this->container['commencing_course'] = isset($data['commencing_course']) ? $data['commencing_course'] : null;
        $this->container['av_study_reason'] = isset($data['av_study_reason']) ? $data['av_study_reason'] : null;
        $this->container['study_mode'] = isset($data['study_mode']) ? $data['study_mode'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['delivery_mode'] = isset($data['delivery_mode']) ? $data['delivery_mode'] : null;
        $this->container['delivery_mode_av8'] = isset($data['delivery_mode_av8']) ? $data['delivery_mode_av8'] : null;
        $this->container['delivery_options'] = isset($data['delivery_options']) ? $data['delivery_options'] : null;
        $this->container['predominant_delivery_mode'] = isset($data['predominant_delivery_mode']) ? $data['predominant_delivery_mode'] : null;
        $this->container['fund_source_national'] = isset($data['fund_source_national']) ? $data['fund_source_national'] : null;
        $this->container['fund_source_state'] = isset($data['fund_source_state']) ? $data['fund_source_state'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['fee_exemption'] = isset($data['fee_exemption']) ? $data['fee_exemption'] : null;
        $this->container['fee_exemption_waiver'] = isset($data['fee_exemption_waiver']) ? $data['fee_exemption_waiver'] : null;
        $this->container['internet_based_learning'] = isset($data['internet_based_learning']) ? $data['internet_based_learning'] : null;
        $this->container['main_subject1'] = isset($data['main_subject1']) ? $data['main_subject1'] : null;
        $this->container['main_subject2'] = isset($data['main_subject2']) ? $data['main_subject2'] : null;
        $this->container['main_subject3'] = isset($data['main_subject3']) ? $data['main_subject3'] : null;
        $this->container['fund_source'] = isset($data['fund_source']) ? $data['fund_source'] : null;
        $this->container['fee_assessment_category'] = isset($data['fee_assessment_category']) ? $data['fee_assessment_category'] : null;
        $this->container['mural_attendance'] = isset($data['mural_attendance']) ? $data['mural_attendance'] : null;
        $this->container['delivery_mode_wa1'] = isset($data['delivery_mode_wa1']) ? $data['delivery_mode_wa1'] : null;
        $this->container['delivery_mode_wa2'] = isset($data['delivery_mode_wa2']) ? $data['delivery_mode_wa2'] : null;
        $this->container['delivery_mode_wa3'] = isset($data['delivery_mode_wa3']) ? $data['delivery_mode_wa3'] : null;
        $this->container['fee_type_indicator'] = isset($data['fee_type_indicator']) ? $data['fee_type_indicator'] : null;
        $this->container['offshore_delivery_indicator'] = isset($data['offshore_delivery_indicator']) ? $data['offshore_delivery_indicator'] : null;
        $this->container['offshore_delivery_mode'] = isset($data['offshore_delivery_mode']) ? $data['offshore_delivery_mode'] : null;
        $this->container['campus_operation_type'] = isset($data['campus_operation_type']) ? $data['campus_operation_type'] : null;
        $this->container['commencing_student_identifier'] = isset($data['commencing_student_identifier']) ? $data['commencing_student_identifier'] : null;
        $this->container['trainer'] = isset($data['trainer']) ? $data['trainer'] : null;
        $this->container['assessor'] = isset($data['assessor']) ? $data['assessor'] : null;
        $this->container['assessment_method'] = isset($data['assessment_method']) ? $data['assessment_method'] : null;
        $this->container['venue'] = isset($data['venue']) ? $data['venue'] : null;
        $this->container['duration_type'] = isset($data['duration_type']) ? $data['duration_type'] : null;
        $this->container['department_code'] = isset($data['department_code']) ? $data['department_code'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
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
     * Gets course
     *
     * @return \Phwebs\Wisenet\Model\CourseBasic
     */
    public function getCourse()
    {
        return $this->container['course'];
    }

    /**
     * Sets course
     *
     * @param \Phwebs\Wisenet\Model\CourseBasic $course course
     *
     * @return $this
     */
    public function setCourse($course)
    {
        $this->container['course'] = $course;

        return $this;
    }

    /**
     * Gets coordinator
     *
     * @return \Phwebs\Wisenet\Model\Coordinator
     */
    public function getCoordinator()
    {
        return $this->container['coordinator'];
    }

    /**
     * Sets coordinator
     *
     * @param \Phwebs\Wisenet\Model\Coordinator $coordinator coordinator
     *
     * @return $this
     */
    public function setCoordinator($coordinator)
    {
        $this->container['coordinator'] = $coordinator;

        return $this;
    }

    /**
     * Gets course_offer_status
     *
     * @return \Phwebs\Wisenet\Model\CourseOfferStatus
     */
    public function getCourseOfferStatus()
    {
        return $this->container['course_offer_status'];
    }

    /**
     * Sets course_offer_status
     *
     * @param \Phwebs\Wisenet\Model\CourseOfferStatus $course_offer_status course_offer_status
     *
     * @return $this
     */
    public function setCourseOfferStatus($course_offer_status)
    {
        $this->container['course_offer_status'] = $course_offer_status;

        return $this;
    }

    /**
     * Gets course_offer_type
     *
     * @return \Phwebs\Wisenet\Model\CourseOfferType
     */
    public function getCourseOfferType()
    {
        return $this->container['course_offer_type'];
    }

    /**
     * Sets course_offer_type
     *
     * @param \Phwebs\Wisenet\Model\CourseOfferType $course_offer_type course_offer_type
     *
     * @return $this
     */
    public function setCourseOfferType($course_offer_type)
    {
        $this->container['course_offer_type'] = $course_offer_type;

        return $this;
    }

    /**
     * Gets delivery_language
     *
     * @return \Phwebs\Wisenet\Model\Language
     */
    public function getDeliveryLanguage()
    {
        return $this->container['delivery_language'];
    }

    /**
     * Sets delivery_language
     *
     * @param \Phwebs\Wisenet\Model\Language $delivery_language delivery_language
     *
     * @return $this
     */
    public function setDeliveryLanguage($delivery_language)
    {
        $this->container['delivery_language'] = $delivery_language;

        return $this;
    }

    /**
     * Gets delivery_workplace
     *
     * @return \Phwebs\Wisenet\Model\WorkplaceBasic
     */
    public function getDeliveryWorkplace()
    {
        return $this->container['delivery_workplace'];
    }

    /**
     * Sets delivery_workplace
     *
     * @param \Phwebs\Wisenet\Model\WorkplaceBasic $delivery_workplace delivery_workplace
     *
     * @return $this
     */
    public function setDeliveryWorkplace($delivery_workplace)
    {
        $this->container['delivery_workplace'] = $delivery_workplace;

        return $this;
    }

    /**
     * Gets program_status
     *
     * @return \Phwebs\Wisenet\Model\ProgramStatus
     */
    public function getProgramStatus()
    {
        return $this->container['program_status'];
    }

    /**
     * Sets program_status
     *
     * @param \Phwebs\Wisenet\Model\ProgramStatus $program_status program_status
     *
     * @return $this
     */
    public function setProgramStatus($program_status)
    {
        $this->container['program_status'] = $program_status;

        return $this;
    }

    /**
     * Gets contract_type
     *
     * @return \Phwebs\Wisenet\Model\ContractType
     */
    public function getContractType()
    {
        return $this->container['contract_type'];
    }

    /**
     * Sets contract_type
     *
     * @param \Phwebs\Wisenet\Model\ContractType $contract_type contract_type
     *
     * @return $this
     */
    public function setContractType($contract_type)
    {
        $this->container['contract_type'] = $contract_type;

        return $this;
    }

    /**
     * Gets commencing_course
     *
     * @return \Phwebs\Wisenet\Model\CommencingCourse
     */
    public function getCommencingCourse()
    {
        return $this->container['commencing_course'];
    }

    /**
     * Sets commencing_course
     *
     * @param \Phwebs\Wisenet\Model\CommencingCourse $commencing_course commencing_course
     *
     * @return $this
     */
    public function setCommencingCourse($commencing_course)
    {
        $this->container['commencing_course'] = $commencing_course;

        return $this;
    }

    /**
     * Gets av_study_reason
     *
     * @return \Phwebs\Wisenet\Model\AvStudyReason
     */
    public function getAvStudyReason()
    {
        return $this->container['av_study_reason'];
    }

    /**
     * Sets av_study_reason
     *
     * @param \Phwebs\Wisenet\Model\AvStudyReason $av_study_reason av_study_reason
     *
     * @return $this
     */
    public function setAvStudyReason($av_study_reason)
    {
        $this->container['av_study_reason'] = $av_study_reason;

        return $this;
    }

    /**
     * Gets study_mode
     *
     * @return \Phwebs\Wisenet\Model\StudyMode
     */
    public function getStudyMode()
    {
        return $this->container['study_mode'];
    }

    /**
     * Sets study_mode
     *
     * @param \Phwebs\Wisenet\Model\StudyMode $study_mode study_mode
     *
     * @return $this
     */
    public function setStudyMode($study_mode)
    {
        $this->container['study_mode'] = $study_mode;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Phwebs\Wisenet\Model\LocationBasic
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Phwebs\Wisenet\Model\LocationBasic $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets delivery_mode
     *
     * @return \Phwebs\Wisenet\Model\DeliveryMode
     */
    public function getDeliveryMode()
    {
        return $this->container['delivery_mode'];
    }

    /**
     * Sets delivery_mode
     *
     * @param \Phwebs\Wisenet\Model\DeliveryMode $delivery_mode delivery_mode
     *
     * @return $this
     */
    public function setDeliveryMode($delivery_mode)
    {
        $this->container['delivery_mode'] = $delivery_mode;

        return $this;
    }

    /**
     * Gets delivery_mode_av8
     *
     * @return \Phwebs\Wisenet\Model\DeliveryModeAv8
     */
    public function getDeliveryModeAv8()
    {
        return $this->container['delivery_mode_av8'];
    }

    /**
     * Sets delivery_mode_av8
     *
     * @param \Phwebs\Wisenet\Model\DeliveryModeAv8 $delivery_mode_av8 delivery_mode_av8
     *
     * @return $this
     */
    public function setDeliveryModeAv8($delivery_mode_av8)
    {
        $this->container['delivery_mode_av8'] = $delivery_mode_av8;

        return $this;
    }

    /**
     * Gets delivery_options
     *
     * @return \Phwebs\Wisenet\Model\DeliveryOption[]
     */
    public function getDeliveryOptions()
    {
        return $this->container['delivery_options'];
    }

    /**
     * Sets delivery_options
     *
     * @param \Phwebs\Wisenet\Model\DeliveryOption[] $delivery_options delivery_options
     *
     * @return $this
     */
    public function setDeliveryOptions($delivery_options)
    {
        $this->container['delivery_options'] = $delivery_options;

        return $this;
    }

    /**
     * Gets predominant_delivery_mode
     *
     * @return \Phwebs\Wisenet\Model\PredominantDeliveryMode
     */
    public function getPredominantDeliveryMode()
    {
        return $this->container['predominant_delivery_mode'];
    }

    /**
     * Sets predominant_delivery_mode
     *
     * @param \Phwebs\Wisenet\Model\PredominantDeliveryMode $predominant_delivery_mode predominant_delivery_mode
     *
     * @return $this
     */
    public function setPredominantDeliveryMode($predominant_delivery_mode)
    {
        $this->container['predominant_delivery_mode'] = $predominant_delivery_mode;

        return $this;
    }

    /**
     * Gets fund_source_national
     *
     * @return \Phwebs\Wisenet\Model\FundSourceNational
     */
    public function getFundSourceNational()
    {
        return $this->container['fund_source_national'];
    }

    /**
     * Sets fund_source_national
     *
     * @param \Phwebs\Wisenet\Model\FundSourceNational $fund_source_national fund_source_national
     *
     * @return $this
     */
    public function setFundSourceNational($fund_source_national)
    {
        $this->container['fund_source_national'] = $fund_source_national;

        return $this;
    }

    /**
     * Gets fund_source_state
     *
     * @return \Phwebs\Wisenet\Model\FundSourceState
     */
    public function getFundSourceState()
    {
        return $this->container['fund_source_state'];
    }

    /**
     * Sets fund_source_state
     *
     * @param \Phwebs\Wisenet\Model\FundSourceState $fund_source_state fund_source_state
     *
     * @return $this
     */
    public function setFundSourceState($fund_source_state)
    {
        $this->container['fund_source_state'] = $fund_source_state;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return \Phwebs\Wisenet\Model\Contract
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \Phwebs\Wisenet\Model\Contract $contract contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets fee_exemption
     *
     * @return \Phwebs\Wisenet\Model\FeeExemption
     */
    public function getFeeExemption()
    {
        return $this->container['fee_exemption'];
    }

    /**
     * Sets fee_exemption
     *
     * @param \Phwebs\Wisenet\Model\FeeExemption $fee_exemption fee_exemption
     *
     * @return $this
     */
    public function setFeeExemption($fee_exemption)
    {
        $this->container['fee_exemption'] = $fee_exemption;

        return $this;
    }

    /**
     * Gets fee_exemption_waiver
     *
     * @return \Phwebs\Wisenet\Model\FeeExemptionWaiver
     */
    public function getFeeExemptionWaiver()
    {
        return $this->container['fee_exemption_waiver'];
    }

    /**
     * Sets fee_exemption_waiver
     *
     * @param \Phwebs\Wisenet\Model\FeeExemptionWaiver $fee_exemption_waiver fee_exemption_waiver
     *
     * @return $this
     */
    public function setFeeExemptionWaiver($fee_exemption_waiver)
    {
        $this->container['fee_exemption_waiver'] = $fee_exemption_waiver;

        return $this;
    }

    /**
     * Gets internet_based_learning
     *
     * @return \Phwebs\Wisenet\Model\InternetBasedLearning
     */
    public function getInternetBasedLearning()
    {
        return $this->container['internet_based_learning'];
    }

    /**
     * Sets internet_based_learning
     *
     * @param \Phwebs\Wisenet\Model\InternetBasedLearning $internet_based_learning internet_based_learning
     *
     * @return $this
     */
    public function setInternetBasedLearning($internet_based_learning)
    {
        $this->container['internet_based_learning'] = $internet_based_learning;

        return $this;
    }

    /**
     * Gets main_subject1
     *
     * @return \Phwebs\Wisenet\Model\MainSubject
     */
    public function getMainSubject1()
    {
        return $this->container['main_subject1'];
    }

    /**
     * Sets main_subject1
     *
     * @param \Phwebs\Wisenet\Model\MainSubject $main_subject1 main_subject1
     *
     * @return $this
     */
    public function setMainSubject1($main_subject1)
    {
        $this->container['main_subject1'] = $main_subject1;

        return $this;
    }

    /**
     * Gets main_subject2
     *
     * @return \Phwebs\Wisenet\Model\MainSubject
     */
    public function getMainSubject2()
    {
        return $this->container['main_subject2'];
    }

    /**
     * Sets main_subject2
     *
     * @param \Phwebs\Wisenet\Model\MainSubject $main_subject2 main_subject2
     *
     * @return $this
     */
    public function setMainSubject2($main_subject2)
    {
        $this->container['main_subject2'] = $main_subject2;

        return $this;
    }

    /**
     * Gets main_subject3
     *
     * @return \Phwebs\Wisenet\Model\MainSubject
     */
    public function getMainSubject3()
    {
        return $this->container['main_subject3'];
    }

    /**
     * Sets main_subject3
     *
     * @param \Phwebs\Wisenet\Model\MainSubject $main_subject3 main_subject3
     *
     * @return $this
     */
    public function setMainSubject3($main_subject3)
    {
        $this->container['main_subject3'] = $main_subject3;

        return $this;
    }

    /**
     * Gets fund_source
     *
     * @return \Phwebs\Wisenet\Model\FundSource
     */
    public function getFundSource()
    {
        return $this->container['fund_source'];
    }

    /**
     * Sets fund_source
     *
     * @param \Phwebs\Wisenet\Model\FundSource $fund_source fund_source
     *
     * @return $this
     */
    public function setFundSource($fund_source)
    {
        $this->container['fund_source'] = $fund_source;

        return $this;
    }

    /**
     * Gets fee_assessment_category
     *
     * @return \Phwebs\Wisenet\Model\FeeAssessmentCategory
     */
    public function getFeeAssessmentCategory()
    {
        return $this->container['fee_assessment_category'];
    }

    /**
     * Sets fee_assessment_category
     *
     * @param \Phwebs\Wisenet\Model\FeeAssessmentCategory $fee_assessment_category fee_assessment_category
     *
     * @return $this
     */
    public function setFeeAssessmentCategory($fee_assessment_category)
    {
        $this->container['fee_assessment_category'] = $fee_assessment_category;

        return $this;
    }

    /**
     * Gets mural_attendance
     *
     * @return \Phwebs\Wisenet\Model\MuralAttendance
     */
    public function getMuralAttendance()
    {
        return $this->container['mural_attendance'];
    }

    /**
     * Sets mural_attendance
     *
     * @param \Phwebs\Wisenet\Model\MuralAttendance $mural_attendance mural_attendance
     *
     * @return $this
     */
    public function setMuralAttendance($mural_attendance)
    {
        $this->container['mural_attendance'] = $mural_attendance;

        return $this;
    }

    /**
     * Gets delivery_mode_wa1
     *
     * @return \Phwebs\Wisenet\Model\DeliveryModeWa
     */
    public function getDeliveryModeWa1()
    {
        return $this->container['delivery_mode_wa1'];
    }

    /**
     * Sets delivery_mode_wa1
     *
     * @param \Phwebs\Wisenet\Model\DeliveryModeWa $delivery_mode_wa1 delivery_mode_wa1
     *
     * @return $this
     */
    public function setDeliveryModeWa1($delivery_mode_wa1)
    {
        $this->container['delivery_mode_wa1'] = $delivery_mode_wa1;

        return $this;
    }

    /**
     * Gets delivery_mode_wa2
     *
     * @return \Phwebs\Wisenet\Model\DeliveryModeWa
     */
    public function getDeliveryModeWa2()
    {
        return $this->container['delivery_mode_wa2'];
    }

    /**
     * Sets delivery_mode_wa2
     *
     * @param \Phwebs\Wisenet\Model\DeliveryModeWa $delivery_mode_wa2 delivery_mode_wa2
     *
     * @return $this
     */
    public function setDeliveryModeWa2($delivery_mode_wa2)
    {
        $this->container['delivery_mode_wa2'] = $delivery_mode_wa2;

        return $this;
    }

    /**
     * Gets delivery_mode_wa3
     *
     * @return \Phwebs\Wisenet\Model\DeliveryModeWa
     */
    public function getDeliveryModeWa3()
    {
        return $this->container['delivery_mode_wa3'];
    }

    /**
     * Sets delivery_mode_wa3
     *
     * @param \Phwebs\Wisenet\Model\DeliveryModeWa $delivery_mode_wa3 delivery_mode_wa3
     *
     * @return $this
     */
    public function setDeliveryModeWa3($delivery_mode_wa3)
    {
        $this->container['delivery_mode_wa3'] = $delivery_mode_wa3;

        return $this;
    }

    /**
     * Gets fee_type_indicator
     *
     * @return \Phwebs\Wisenet\Model\FeeTypeIndicator
     */
    public function getFeeTypeIndicator()
    {
        return $this->container['fee_type_indicator'];
    }

    /**
     * Sets fee_type_indicator
     *
     * @param \Phwebs\Wisenet\Model\FeeTypeIndicator $fee_type_indicator fee_type_indicator
     *
     * @return $this
     */
    public function setFeeTypeIndicator($fee_type_indicator)
    {
        $this->container['fee_type_indicator'] = $fee_type_indicator;

        return $this;
    }

    /**
     * Gets offshore_delivery_indicator
     *
     * @return \Phwebs\Wisenet\Model\OffshoreDeliveryIndicator
     */
    public function getOffshoreDeliveryIndicator()
    {
        return $this->container['offshore_delivery_indicator'];
    }

    /**
     * Sets offshore_delivery_indicator
     *
     * @param \Phwebs\Wisenet\Model\OffshoreDeliveryIndicator $offshore_delivery_indicator offshore_delivery_indicator
     *
     * @return $this
     */
    public function setOffshoreDeliveryIndicator($offshore_delivery_indicator)
    {
        $this->container['offshore_delivery_indicator'] = $offshore_delivery_indicator;

        return $this;
    }

    /**
     * Gets offshore_delivery_mode
     *
     * @return \Phwebs\Wisenet\Model\OffshoreDeliveryMode
     */
    public function getOffshoreDeliveryMode()
    {
        return $this->container['offshore_delivery_mode'];
    }

    /**
     * Sets offshore_delivery_mode
     *
     * @param \Phwebs\Wisenet\Model\OffshoreDeliveryMode $offshore_delivery_mode offshore_delivery_mode
     *
     * @return $this
     */
    public function setOffshoreDeliveryMode($offshore_delivery_mode)
    {
        $this->container['offshore_delivery_mode'] = $offshore_delivery_mode;

        return $this;
    }

    /**
     * Gets campus_operation_type
     *
     * @return \Phwebs\Wisenet\Model\CampusOperationType
     */
    public function getCampusOperationType()
    {
        return $this->container['campus_operation_type'];
    }

    /**
     * Sets campus_operation_type
     *
     * @param \Phwebs\Wisenet\Model\CampusOperationType $campus_operation_type campus_operation_type
     *
     * @return $this
     */
    public function setCampusOperationType($campus_operation_type)
    {
        $this->container['campus_operation_type'] = $campus_operation_type;

        return $this;
    }

    /**
     * Gets commencing_student_identifier
     *
     * @return \Phwebs\Wisenet\Model\CommencingStudentIdentifier
     */
    public function getCommencingStudentIdentifier()
    {
        return $this->container['commencing_student_identifier'];
    }

    /**
     * Sets commencing_student_identifier
     *
     * @param \Phwebs\Wisenet\Model\CommencingStudentIdentifier $commencing_student_identifier commencing_student_identifier
     *
     * @return $this
     */
    public function setCommencingStudentIdentifier($commencing_student_identifier)
    {
        $this->container['commencing_student_identifier'] = $commencing_student_identifier;

        return $this;
    }

    /**
     * Gets trainer
     *
     * @return \Phwebs\Wisenet\Model\Trainer
     */
    public function getTrainer()
    {
        return $this->container['trainer'];
    }

    /**
     * Sets trainer
     *
     * @param \Phwebs\Wisenet\Model\Trainer $trainer trainer
     *
     * @return $this
     */
    public function setTrainer($trainer)
    {
        $this->container['trainer'] = $trainer;

        return $this;
    }

    /**
     * Gets assessor
     *
     * @return \Phwebs\Wisenet\Model\Assessor
     */
    public function getAssessor()
    {
        return $this->container['assessor'];
    }

    /**
     * Sets assessor
     *
     * @param \Phwebs\Wisenet\Model\Assessor $assessor assessor
     *
     * @return $this
     */
    public function setAssessor($assessor)
    {
        $this->container['assessor'] = $assessor;

        return $this;
    }

    /**
     * Gets assessment_method
     *
     * @return \Phwebs\Wisenet\Model\AssessmentMethod
     */
    public function getAssessmentMethod()
    {
        return $this->container['assessment_method'];
    }

    /**
     * Sets assessment_method
     *
     * @param \Phwebs\Wisenet\Model\AssessmentMethod $assessment_method assessment_method
     *
     * @return $this
     */
    public function setAssessmentMethod($assessment_method)
    {
        $this->container['assessment_method'] = $assessment_method;

        return $this;
    }

    /**
     * Gets venue
     *
     * @return \Phwebs\Wisenet\Model\VenueBasic
     */
    public function getVenue()
    {
        return $this->container['venue'];
    }

    /**
     * Sets venue
     *
     * @param \Phwebs\Wisenet\Model\VenueBasic $venue venue
     *
     * @return $this
     */
    public function setVenue($venue)
    {
        $this->container['venue'] = $venue;

        return $this;
    }

    /**
     * Gets duration_type
     *
     * @return \Phwebs\Wisenet\Model\DurationType
     */
    public function getDurationType()
    {
        return $this->container['duration_type'];
    }

    /**
     * Sets duration_type
     *
     * @param \Phwebs\Wisenet\Model\DurationType $duration_type duration_type
     *
     * @return $this
     */
    public function setDurationType($duration_type)
    {
        $this->container['duration_type'] = $duration_type;

        return $this;
    }

    /**
     * Gets department_code
     *
     * @return \Phwebs\Wisenet\Model\DepartmentCode
     */
    public function getDepartmentCode()
    {
        return $this->container['department_code'];
    }

    /**
     * Sets department_code
     *
     * @param \Phwebs\Wisenet\Model\DepartmentCode $department_code department_code
     *
     * @return $this
     */
    public function setDepartmentCode($department_code)
    {
        $this->container['department_code'] = $department_code;

        return $this;
    }

    /**
     * Gets program
     *
     * @return \Phwebs\Wisenet\Model\Program
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     *
     * @param \Phwebs\Wisenet\Model\Program $program program
     *
     * @return $this
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

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
