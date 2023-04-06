<?php
/**
 * CourseEnrolmentRelationships
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
 * CourseEnrolmentRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CourseEnrolmentRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CourseEnrolmentRelationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'opportunity' => '\Phwebs\Wisenet\Model\OpportunityBasic',
'enrolment_status' => '\Phwebs\Wisenet\Model\EnrolmentStatus',
'enrolment_status_reason' => '\Phwebs\Wisenet\Model\EnrolmentStatusReason',
'study_mode' => '\Phwebs\Wisenet\Model\StudyMode',
'target_group' => '\Phwebs\Wisenet\Model\TargetGroupCourseEnrolment',
'studylink_status' => '\Phwebs\Wisenet\Model\StudylinkStatus',
'studylink_status_reason' => '\Phwebs\Wisenet\Model\StudylinkStatusReason',
'duration_type' => '\Phwebs\Wisenet\Model\DurationType',
'program_status' => '\Phwebs\Wisenet\Model\ProgramStatus',
'contract_type' => '\Phwebs\Wisenet\Model\ContractType',
'av_study_reason' => '\Phwebs\Wisenet\Model\AvStudyReason',
'commencing_course' => '\Phwebs\Wisenet\Model\CommencingCourse',
'commencing_student_identifier' => '\Phwebs\Wisenet\Model\CommencingStudentIdentifier',
'fee_type_indicator' => '\Phwebs\Wisenet\Model\FeeTypeIndicator',
'admission_basis' => '\Phwebs\Wisenet\Model\AdmissionBasis',
'attendance_type' => '\Phwebs\Wisenet\Model\AttendanceType',
'fh_study_reason' => '\Phwebs\Wisenet\Model\FhStudyReason',
'specialisation_field_of_education' => '\Phwebs\Wisenet\Model\FhFieldOfEducation',
'scholarship_type' => '\Phwebs\Wisenet\Model\ScholarshipType',
'separation_status' => '\Phwebs\Wisenet\Model\SeparationStatus',
'fund_source' => '\Phwebs\Wisenet\Model\FundSource',
'main_subject1' => '\Phwebs\Wisenet\Model\MainSubject',
'main_subject2' => '\Phwebs\Wisenet\Model\MainSubject',
'main_subject3' => '\Phwebs\Wisenet\Model\MainSubject',
'nzqa_awarding_provider' => '\Phwebs\Wisenet\Model\NzqaAwardingProvider',
'nzqa_request_type' => '\Phwebs\Wisenet\Model\NzqaRequestType',
'managed_apprenticeship' => '\Phwebs\Wisenet\Model\ManagedApprenticeship',
'aac' => '\Phwebs\Wisenet\Model\Aac',
'rto_status' => '\Phwebs\Wisenet\Model\RtoStatus',
'payment_type' => '\Phwebs\Wisenet\Model\PaymentType',
'student_pass_requirement' => '\Phwebs\Wisenet\Model\StudentPassRequirement',
'fps_status' => '\Phwebs\Wisenet\Model\FpsStatus',
'fps_waiver_reason' => '\Phwebs\Wisenet\Model\FpsWaiverReason',
'trainer' => '\Phwebs\Wisenet\Model\Trainer',
'assessor' => '\Phwebs\Wisenet\Model\Assessor',
'coordinator' => '\Phwebs\Wisenet\Model\Coordinator',
'sales_person' => '\Phwebs\Wisenet\Model\SalesPerson',
'learner' => '\Phwebs\Wisenet\Model\LearnerBasic',
'course_offer' => '\Phwebs\Wisenet\Model\CourseOfferBasic',
'agent' => '\Phwebs\Wisenet\Model\AgentBasic',
'tags' => '\Phwebs\Wisenet\Model\Tag[]',
'promotion' => '\Phwebs\Wisenet\Model\PromotionBasic',
'sales_contact' => '\Phwebs\Wisenet\Model\SalesContactShort',
'application_status' => '\Phwebs\Wisenet\Model\ApplicationStatus',
'application_status_reason' => '\Phwebs\Wisenet\Model\ApplicationStatusReason',
'completion_pathway' => '\Phwebs\Wisenet\Model\CompletionPathway',
'commenced_at_school_flag' => '\Phwebs\Wisenet\Model\CommencedAtSchoolFlag',
'commencing_program_cohort1' => '\Phwebs\Wisenet\Model\CommencingProgramCohort',
'commencing_program_cohort2' => '\Phwebs\Wisenet\Model\CommencingProgramCohort',
'commencing_program_cohort3' => '\Phwebs\Wisenet\Model\CommencingProgramCohort'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'opportunity' => null,
'enrolment_status' => null,
'enrolment_status_reason' => null,
'study_mode' => null,
'target_group' => null,
'studylink_status' => null,
'studylink_status_reason' => null,
'duration_type' => null,
'program_status' => null,
'contract_type' => null,
'av_study_reason' => null,
'commencing_course' => null,
'commencing_student_identifier' => null,
'fee_type_indicator' => null,
'admission_basis' => null,
'attendance_type' => null,
'fh_study_reason' => null,
'specialisation_field_of_education' => null,
'scholarship_type' => null,
'separation_status' => null,
'fund_source' => null,
'main_subject1' => null,
'main_subject2' => null,
'main_subject3' => null,
'nzqa_awarding_provider' => null,
'nzqa_request_type' => null,
'managed_apprenticeship' => null,
'aac' => null,
'rto_status' => null,
'payment_type' => null,
'student_pass_requirement' => null,
'fps_status' => null,
'fps_waiver_reason' => null,
'trainer' => null,
'assessor' => null,
'coordinator' => null,
'sales_person' => null,
'learner' => null,
'course_offer' => null,
'agent' => null,
'tags' => null,
'promotion' => null,
'sales_contact' => null,
'application_status' => null,
'application_status_reason' => null,
'completion_pathway' => null,
'commenced_at_school_flag' => null,
'commencing_program_cohort1' => null,
'commencing_program_cohort2' => null,
'commencing_program_cohort3' => null    ];

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
        'opportunity' => 'Opportunity',
'enrolment_status' => 'EnrolmentStatus',
'enrolment_status_reason' => 'EnrolmentStatusReason',
'study_mode' => 'StudyMode',
'target_group' => 'TargetGroup',
'studylink_status' => 'StudylinkStatus',
'studylink_status_reason' => 'StudylinkStatusReason',
'duration_type' => 'DurationType',
'program_status' => 'ProgramStatus',
'contract_type' => 'ContractType',
'av_study_reason' => 'AvStudyReason',
'commencing_course' => 'CommencingCourse',
'commencing_student_identifier' => 'CommencingStudentIdentifier',
'fee_type_indicator' => 'FeeTypeIndicator',
'admission_basis' => 'AdmissionBasis',
'attendance_type' => 'AttendanceType',
'fh_study_reason' => 'FhStudyReason',
'specialisation_field_of_education' => 'SpecialisationFieldOfEducation',
'scholarship_type' => 'ScholarshipType',
'separation_status' => 'SeparationStatus',
'fund_source' => 'FundSource',
'main_subject1' => 'MainSubject1',
'main_subject2' => 'MainSubject2',
'main_subject3' => 'MainSubject3',
'nzqa_awarding_provider' => 'NzqaAwardingProvider',
'nzqa_request_type' => 'NzqaRequestType',
'managed_apprenticeship' => 'ManagedApprenticeship',
'aac' => 'Aac',
'rto_status' => 'RtoStatus',
'payment_type' => 'PaymentType',
'student_pass_requirement' => 'StudentPassRequirement',
'fps_status' => 'FpsStatus',
'fps_waiver_reason' => 'FpsWaiverReason',
'trainer' => 'Trainer',
'assessor' => 'Assessor',
'coordinator' => 'Coordinator',
'sales_person' => 'SalesPerson',
'learner' => 'Learner',
'course_offer' => 'CourseOffer',
'agent' => 'Agent',
'tags' => 'Tags',
'promotion' => 'Promotion',
'sales_contact' => 'SalesContact',
'application_status' => 'ApplicationStatus',
'application_status_reason' => 'ApplicationStatusReason',
'completion_pathway' => 'CompletionPathway',
'commenced_at_school_flag' => 'CommencedAtSchoolFlag',
'commencing_program_cohort1' => 'CommencingProgramCohort1',
'commencing_program_cohort2' => 'CommencingProgramCohort2',
'commencing_program_cohort3' => 'CommencingProgramCohort3'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opportunity' => 'setOpportunity',
'enrolment_status' => 'setEnrolmentStatus',
'enrolment_status_reason' => 'setEnrolmentStatusReason',
'study_mode' => 'setStudyMode',
'target_group' => 'setTargetGroup',
'studylink_status' => 'setStudylinkStatus',
'studylink_status_reason' => 'setStudylinkStatusReason',
'duration_type' => 'setDurationType',
'program_status' => 'setProgramStatus',
'contract_type' => 'setContractType',
'av_study_reason' => 'setAvStudyReason',
'commencing_course' => 'setCommencingCourse',
'commencing_student_identifier' => 'setCommencingStudentIdentifier',
'fee_type_indicator' => 'setFeeTypeIndicator',
'admission_basis' => 'setAdmissionBasis',
'attendance_type' => 'setAttendanceType',
'fh_study_reason' => 'setFhStudyReason',
'specialisation_field_of_education' => 'setSpecialisationFieldOfEducation',
'scholarship_type' => 'setScholarshipType',
'separation_status' => 'setSeparationStatus',
'fund_source' => 'setFundSource',
'main_subject1' => 'setMainSubject1',
'main_subject2' => 'setMainSubject2',
'main_subject3' => 'setMainSubject3',
'nzqa_awarding_provider' => 'setNzqaAwardingProvider',
'nzqa_request_type' => 'setNzqaRequestType',
'managed_apprenticeship' => 'setManagedApprenticeship',
'aac' => 'setAac',
'rto_status' => 'setRtoStatus',
'payment_type' => 'setPaymentType',
'student_pass_requirement' => 'setStudentPassRequirement',
'fps_status' => 'setFpsStatus',
'fps_waiver_reason' => 'setFpsWaiverReason',
'trainer' => 'setTrainer',
'assessor' => 'setAssessor',
'coordinator' => 'setCoordinator',
'sales_person' => 'setSalesPerson',
'learner' => 'setLearner',
'course_offer' => 'setCourseOffer',
'agent' => 'setAgent',
'tags' => 'setTags',
'promotion' => 'setPromotion',
'sales_contact' => 'setSalesContact',
'application_status' => 'setApplicationStatus',
'application_status_reason' => 'setApplicationStatusReason',
'completion_pathway' => 'setCompletionPathway',
'commenced_at_school_flag' => 'setCommencedAtSchoolFlag',
'commencing_program_cohort1' => 'setCommencingProgramCohort1',
'commencing_program_cohort2' => 'setCommencingProgramCohort2',
'commencing_program_cohort3' => 'setCommencingProgramCohort3'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opportunity' => 'getOpportunity',
'enrolment_status' => 'getEnrolmentStatus',
'enrolment_status_reason' => 'getEnrolmentStatusReason',
'study_mode' => 'getStudyMode',
'target_group' => 'getTargetGroup',
'studylink_status' => 'getStudylinkStatus',
'studylink_status_reason' => 'getStudylinkStatusReason',
'duration_type' => 'getDurationType',
'program_status' => 'getProgramStatus',
'contract_type' => 'getContractType',
'av_study_reason' => 'getAvStudyReason',
'commencing_course' => 'getCommencingCourse',
'commencing_student_identifier' => 'getCommencingStudentIdentifier',
'fee_type_indicator' => 'getFeeTypeIndicator',
'admission_basis' => 'getAdmissionBasis',
'attendance_type' => 'getAttendanceType',
'fh_study_reason' => 'getFhStudyReason',
'specialisation_field_of_education' => 'getSpecialisationFieldOfEducation',
'scholarship_type' => 'getScholarshipType',
'separation_status' => 'getSeparationStatus',
'fund_source' => 'getFundSource',
'main_subject1' => 'getMainSubject1',
'main_subject2' => 'getMainSubject2',
'main_subject3' => 'getMainSubject3',
'nzqa_awarding_provider' => 'getNzqaAwardingProvider',
'nzqa_request_type' => 'getNzqaRequestType',
'managed_apprenticeship' => 'getManagedApprenticeship',
'aac' => 'getAac',
'rto_status' => 'getRtoStatus',
'payment_type' => 'getPaymentType',
'student_pass_requirement' => 'getStudentPassRequirement',
'fps_status' => 'getFpsStatus',
'fps_waiver_reason' => 'getFpsWaiverReason',
'trainer' => 'getTrainer',
'assessor' => 'getAssessor',
'coordinator' => 'getCoordinator',
'sales_person' => 'getSalesPerson',
'learner' => 'getLearner',
'course_offer' => 'getCourseOffer',
'agent' => 'getAgent',
'tags' => 'getTags',
'promotion' => 'getPromotion',
'sales_contact' => 'getSalesContact',
'application_status' => 'getApplicationStatus',
'application_status_reason' => 'getApplicationStatusReason',
'completion_pathway' => 'getCompletionPathway',
'commenced_at_school_flag' => 'getCommencedAtSchoolFlag',
'commencing_program_cohort1' => 'getCommencingProgramCohort1',
'commencing_program_cohort2' => 'getCommencingProgramCohort2',
'commencing_program_cohort3' => 'getCommencingProgramCohort3'    ];

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
        $this->container['opportunity'] = isset($data['opportunity']) ? $data['opportunity'] : null;
        $this->container['enrolment_status'] = isset($data['enrolment_status']) ? $data['enrolment_status'] : null;
        $this->container['enrolment_status_reason'] = isset($data['enrolment_status_reason']) ? $data['enrolment_status_reason'] : null;
        $this->container['study_mode'] = isset($data['study_mode']) ? $data['study_mode'] : null;
        $this->container['target_group'] = isset($data['target_group']) ? $data['target_group'] : null;
        $this->container['studylink_status'] = isset($data['studylink_status']) ? $data['studylink_status'] : null;
        $this->container['studylink_status_reason'] = isset($data['studylink_status_reason']) ? $data['studylink_status_reason'] : null;
        $this->container['duration_type'] = isset($data['duration_type']) ? $data['duration_type'] : null;
        $this->container['program_status'] = isset($data['program_status']) ? $data['program_status'] : null;
        $this->container['contract_type'] = isset($data['contract_type']) ? $data['contract_type'] : null;
        $this->container['av_study_reason'] = isset($data['av_study_reason']) ? $data['av_study_reason'] : null;
        $this->container['commencing_course'] = isset($data['commencing_course']) ? $data['commencing_course'] : null;
        $this->container['commencing_student_identifier'] = isset($data['commencing_student_identifier']) ? $data['commencing_student_identifier'] : null;
        $this->container['fee_type_indicator'] = isset($data['fee_type_indicator']) ? $data['fee_type_indicator'] : null;
        $this->container['admission_basis'] = isset($data['admission_basis']) ? $data['admission_basis'] : null;
        $this->container['attendance_type'] = isset($data['attendance_type']) ? $data['attendance_type'] : null;
        $this->container['fh_study_reason'] = isset($data['fh_study_reason']) ? $data['fh_study_reason'] : null;
        $this->container['specialisation_field_of_education'] = isset($data['specialisation_field_of_education']) ? $data['specialisation_field_of_education'] : null;
        $this->container['scholarship_type'] = isset($data['scholarship_type']) ? $data['scholarship_type'] : null;
        $this->container['separation_status'] = isset($data['separation_status']) ? $data['separation_status'] : null;
        $this->container['fund_source'] = isset($data['fund_source']) ? $data['fund_source'] : null;
        $this->container['main_subject1'] = isset($data['main_subject1']) ? $data['main_subject1'] : null;
        $this->container['main_subject2'] = isset($data['main_subject2']) ? $data['main_subject2'] : null;
        $this->container['main_subject3'] = isset($data['main_subject3']) ? $data['main_subject3'] : null;
        $this->container['nzqa_awarding_provider'] = isset($data['nzqa_awarding_provider']) ? $data['nzqa_awarding_provider'] : null;
        $this->container['nzqa_request_type'] = isset($data['nzqa_request_type']) ? $data['nzqa_request_type'] : null;
        $this->container['managed_apprenticeship'] = isset($data['managed_apprenticeship']) ? $data['managed_apprenticeship'] : null;
        $this->container['aac'] = isset($data['aac']) ? $data['aac'] : null;
        $this->container['rto_status'] = isset($data['rto_status']) ? $data['rto_status'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['student_pass_requirement'] = isset($data['student_pass_requirement']) ? $data['student_pass_requirement'] : null;
        $this->container['fps_status'] = isset($data['fps_status']) ? $data['fps_status'] : null;
        $this->container['fps_waiver_reason'] = isset($data['fps_waiver_reason']) ? $data['fps_waiver_reason'] : null;
        $this->container['trainer'] = isset($data['trainer']) ? $data['trainer'] : null;
        $this->container['assessor'] = isset($data['assessor']) ? $data['assessor'] : null;
        $this->container['coordinator'] = isset($data['coordinator']) ? $data['coordinator'] : null;
        $this->container['sales_person'] = isset($data['sales_person']) ? $data['sales_person'] : null;
        $this->container['learner'] = isset($data['learner']) ? $data['learner'] : null;
        $this->container['course_offer'] = isset($data['course_offer']) ? $data['course_offer'] : null;
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['promotion'] = isset($data['promotion']) ? $data['promotion'] : null;
        $this->container['sales_contact'] = isset($data['sales_contact']) ? $data['sales_contact'] : null;
        $this->container['application_status'] = isset($data['application_status']) ? $data['application_status'] : null;
        $this->container['application_status_reason'] = isset($data['application_status_reason']) ? $data['application_status_reason'] : null;
        $this->container['completion_pathway'] = isset($data['completion_pathway']) ? $data['completion_pathway'] : null;
        $this->container['commenced_at_school_flag'] = isset($data['commenced_at_school_flag']) ? $data['commenced_at_school_flag'] : null;
        $this->container['commencing_program_cohort1'] = isset($data['commencing_program_cohort1']) ? $data['commencing_program_cohort1'] : null;
        $this->container['commencing_program_cohort2'] = isset($data['commencing_program_cohort2']) ? $data['commencing_program_cohort2'] : null;
        $this->container['commencing_program_cohort3'] = isset($data['commencing_program_cohort3']) ? $data['commencing_program_cohort3'] : null;
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
     * Gets opportunity
     *
     * @return \Phwebs\Wisenet\Model\OpportunityBasic
     */
    public function getOpportunity()
    {
        return $this->container['opportunity'];
    }

    /**
     * Sets opportunity
     *
     * @param \Phwebs\Wisenet\Model\OpportunityBasic $opportunity opportunity
     *
     * @return $this
     */
    public function setOpportunity($opportunity)
    {
        $this->container['opportunity'] = $opportunity;

        return $this;
    }

    /**
     * Gets enrolment_status
     *
     * @return \Phwebs\Wisenet\Model\EnrolmentStatus
     */
    public function getEnrolmentStatus()
    {
        return $this->container['enrolment_status'];
    }

    /**
     * Sets enrolment_status
     *
     * @param \Phwebs\Wisenet\Model\EnrolmentStatus $enrolment_status enrolment_status
     *
     * @return $this
     */
    public function setEnrolmentStatus($enrolment_status)
    {
        $this->container['enrolment_status'] = $enrolment_status;

        return $this;
    }

    /**
     * Gets enrolment_status_reason
     *
     * @return \Phwebs\Wisenet\Model\EnrolmentStatusReason
     */
    public function getEnrolmentStatusReason()
    {
        return $this->container['enrolment_status_reason'];
    }

    /**
     * Sets enrolment_status_reason
     *
     * @param \Phwebs\Wisenet\Model\EnrolmentStatusReason $enrolment_status_reason enrolment_status_reason
     *
     * @return $this
     */
    public function setEnrolmentStatusReason($enrolment_status_reason)
    {
        $this->container['enrolment_status_reason'] = $enrolment_status_reason;

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
     * Gets target_group
     *
     * @return \Phwebs\Wisenet\Model\TargetGroupCourseEnrolment
     */
    public function getTargetGroup()
    {
        return $this->container['target_group'];
    }

    /**
     * Sets target_group
     *
     * @param \Phwebs\Wisenet\Model\TargetGroupCourseEnrolment $target_group target_group
     *
     * @return $this
     */
    public function setTargetGroup($target_group)
    {
        $this->container['target_group'] = $target_group;

        return $this;
    }

    /**
     * Gets studylink_status
     *
     * @return \Phwebs\Wisenet\Model\StudylinkStatus
     */
    public function getStudylinkStatus()
    {
        return $this->container['studylink_status'];
    }

    /**
     * Sets studylink_status
     *
     * @param \Phwebs\Wisenet\Model\StudylinkStatus $studylink_status studylink_status
     *
     * @return $this
     */
    public function setStudylinkStatus($studylink_status)
    {
        $this->container['studylink_status'] = $studylink_status;

        return $this;
    }

    /**
     * Gets studylink_status_reason
     *
     * @return \Phwebs\Wisenet\Model\StudylinkStatusReason
     */
    public function getStudylinkStatusReason()
    {
        return $this->container['studylink_status_reason'];
    }

    /**
     * Sets studylink_status_reason
     *
     * @param \Phwebs\Wisenet\Model\StudylinkStatusReason $studylink_status_reason studylink_status_reason
     *
     * @return $this
     */
    public function setStudylinkStatusReason($studylink_status_reason)
    {
        $this->container['studylink_status_reason'] = $studylink_status_reason;

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
     * Gets admission_basis
     *
     * @return \Phwebs\Wisenet\Model\AdmissionBasis
     */
    public function getAdmissionBasis()
    {
        return $this->container['admission_basis'];
    }

    /**
     * Sets admission_basis
     *
     * @param \Phwebs\Wisenet\Model\AdmissionBasis $admission_basis admission_basis
     *
     * @return $this
     */
    public function setAdmissionBasis($admission_basis)
    {
        $this->container['admission_basis'] = $admission_basis;

        return $this;
    }

    /**
     * Gets attendance_type
     *
     * @return \Phwebs\Wisenet\Model\AttendanceType
     */
    public function getAttendanceType()
    {
        return $this->container['attendance_type'];
    }

    /**
     * Sets attendance_type
     *
     * @param \Phwebs\Wisenet\Model\AttendanceType $attendance_type attendance_type
     *
     * @return $this
     */
    public function setAttendanceType($attendance_type)
    {
        $this->container['attendance_type'] = $attendance_type;

        return $this;
    }

    /**
     * Gets fh_study_reason
     *
     * @return \Phwebs\Wisenet\Model\FhStudyReason
     */
    public function getFhStudyReason()
    {
        return $this->container['fh_study_reason'];
    }

    /**
     * Sets fh_study_reason
     *
     * @param \Phwebs\Wisenet\Model\FhStudyReason $fh_study_reason fh_study_reason
     *
     * @return $this
     */
    public function setFhStudyReason($fh_study_reason)
    {
        $this->container['fh_study_reason'] = $fh_study_reason;

        return $this;
    }

    /**
     * Gets specialisation_field_of_education
     *
     * @return \Phwebs\Wisenet\Model\FhFieldOfEducation
     */
    public function getSpecialisationFieldOfEducation()
    {
        return $this->container['specialisation_field_of_education'];
    }

    /**
     * Sets specialisation_field_of_education
     *
     * @param \Phwebs\Wisenet\Model\FhFieldOfEducation $specialisation_field_of_education specialisation_field_of_education
     *
     * @return $this
     */
    public function setSpecialisationFieldOfEducation($specialisation_field_of_education)
    {
        $this->container['specialisation_field_of_education'] = $specialisation_field_of_education;

        return $this;
    }

    /**
     * Gets scholarship_type
     *
     * @return \Phwebs\Wisenet\Model\ScholarshipType
     */
    public function getScholarshipType()
    {
        return $this->container['scholarship_type'];
    }

    /**
     * Sets scholarship_type
     *
     * @param \Phwebs\Wisenet\Model\ScholarshipType $scholarship_type scholarship_type
     *
     * @return $this
     */
    public function setScholarshipType($scholarship_type)
    {
        $this->container['scholarship_type'] = $scholarship_type;

        return $this;
    }

    /**
     * Gets separation_status
     *
     * @return \Phwebs\Wisenet\Model\SeparationStatus
     */
    public function getSeparationStatus()
    {
        return $this->container['separation_status'];
    }

    /**
     * Sets separation_status
     *
     * @param \Phwebs\Wisenet\Model\SeparationStatus $separation_status separation_status
     *
     * @return $this
     */
    public function setSeparationStatus($separation_status)
    {
        $this->container['separation_status'] = $separation_status;

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
     * Gets nzqa_awarding_provider
     *
     * @return \Phwebs\Wisenet\Model\NzqaAwardingProvider
     */
    public function getNzqaAwardingProvider()
    {
        return $this->container['nzqa_awarding_provider'];
    }

    /**
     * Sets nzqa_awarding_provider
     *
     * @param \Phwebs\Wisenet\Model\NzqaAwardingProvider $nzqa_awarding_provider nzqa_awarding_provider
     *
     * @return $this
     */
    public function setNzqaAwardingProvider($nzqa_awarding_provider)
    {
        $this->container['nzqa_awarding_provider'] = $nzqa_awarding_provider;

        return $this;
    }

    /**
     * Gets nzqa_request_type
     *
     * @return \Phwebs\Wisenet\Model\NzqaRequestType
     */
    public function getNzqaRequestType()
    {
        return $this->container['nzqa_request_type'];
    }

    /**
     * Sets nzqa_request_type
     *
     * @param \Phwebs\Wisenet\Model\NzqaRequestType $nzqa_request_type nzqa_request_type
     *
     * @return $this
     */
    public function setNzqaRequestType($nzqa_request_type)
    {
        $this->container['nzqa_request_type'] = $nzqa_request_type;

        return $this;
    }

    /**
     * Gets managed_apprenticeship
     *
     * @return \Phwebs\Wisenet\Model\ManagedApprenticeship
     */
    public function getManagedApprenticeship()
    {
        return $this->container['managed_apprenticeship'];
    }

    /**
     * Sets managed_apprenticeship
     *
     * @param \Phwebs\Wisenet\Model\ManagedApprenticeship $managed_apprenticeship managed_apprenticeship
     *
     * @return $this
     */
    public function setManagedApprenticeship($managed_apprenticeship)
    {
        $this->container['managed_apprenticeship'] = $managed_apprenticeship;

        return $this;
    }

    /**
     * Gets aac
     *
     * @return \Phwebs\Wisenet\Model\Aac
     */
    public function getAac()
    {
        return $this->container['aac'];
    }

    /**
     * Sets aac
     *
     * @param \Phwebs\Wisenet\Model\Aac $aac aac
     *
     * @return $this
     */
    public function setAac($aac)
    {
        $this->container['aac'] = $aac;

        return $this;
    }

    /**
     * Gets rto_status
     *
     * @return \Phwebs\Wisenet\Model\RtoStatus
     */
    public function getRtoStatus()
    {
        return $this->container['rto_status'];
    }

    /**
     * Sets rto_status
     *
     * @param \Phwebs\Wisenet\Model\RtoStatus $rto_status rto_status
     *
     * @return $this
     */
    public function setRtoStatus($rto_status)
    {
        $this->container['rto_status'] = $rto_status;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return \Phwebs\Wisenet\Model\PaymentType
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param \Phwebs\Wisenet\Model\PaymentType $payment_type payment_type
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets student_pass_requirement
     *
     * @return \Phwebs\Wisenet\Model\StudentPassRequirement
     */
    public function getStudentPassRequirement()
    {
        return $this->container['student_pass_requirement'];
    }

    /**
     * Sets student_pass_requirement
     *
     * @param \Phwebs\Wisenet\Model\StudentPassRequirement $student_pass_requirement student_pass_requirement
     *
     * @return $this
     */
    public function setStudentPassRequirement($student_pass_requirement)
    {
        $this->container['student_pass_requirement'] = $student_pass_requirement;

        return $this;
    }

    /**
     * Gets fps_status
     *
     * @return \Phwebs\Wisenet\Model\FpsStatus
     */
    public function getFpsStatus()
    {
        return $this->container['fps_status'];
    }

    /**
     * Sets fps_status
     *
     * @param \Phwebs\Wisenet\Model\FpsStatus $fps_status fps_status
     *
     * @return $this
     */
    public function setFpsStatus($fps_status)
    {
        $this->container['fps_status'] = $fps_status;

        return $this;
    }

    /**
     * Gets fps_waiver_reason
     *
     * @return \Phwebs\Wisenet\Model\FpsWaiverReason
     */
    public function getFpsWaiverReason()
    {
        return $this->container['fps_waiver_reason'];
    }

    /**
     * Sets fps_waiver_reason
     *
     * @param \Phwebs\Wisenet\Model\FpsWaiverReason $fps_waiver_reason fps_waiver_reason
     *
     * @return $this
     */
    public function setFpsWaiverReason($fps_waiver_reason)
    {
        $this->container['fps_waiver_reason'] = $fps_waiver_reason;

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
     * Gets sales_person
     *
     * @return \Phwebs\Wisenet\Model\SalesPerson
     */
    public function getSalesPerson()
    {
        return $this->container['sales_person'];
    }

    /**
     * Sets sales_person
     *
     * @param \Phwebs\Wisenet\Model\SalesPerson $sales_person sales_person
     *
     * @return $this
     */
    public function setSalesPerson($sales_person)
    {
        $this->container['sales_person'] = $sales_person;

        return $this;
    }

    /**
     * Gets learner
     *
     * @return \Phwebs\Wisenet\Model\LearnerBasic
     */
    public function getLearner()
    {
        return $this->container['learner'];
    }

    /**
     * Sets learner
     *
     * @param \Phwebs\Wisenet\Model\LearnerBasic $learner learner
     *
     * @return $this
     */
    public function setLearner($learner)
    {
        $this->container['learner'] = $learner;

        return $this;
    }

    /**
     * Gets course_offer
     *
     * @return \Phwebs\Wisenet\Model\CourseOfferBasic
     */
    public function getCourseOffer()
    {
        return $this->container['course_offer'];
    }

    /**
     * Sets course_offer
     *
     * @param \Phwebs\Wisenet\Model\CourseOfferBasic $course_offer course_offer
     *
     * @return $this
     */
    public function setCourseOffer($course_offer)
    {
        $this->container['course_offer'] = $course_offer;

        return $this;
    }

    /**
     * Gets agent
     *
     * @return \Phwebs\Wisenet\Model\AgentBasic
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param \Phwebs\Wisenet\Model\AgentBasic $agent agent
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Phwebs\Wisenet\Model\Tag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Phwebs\Wisenet\Model\Tag[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets promotion
     *
     * @return \Phwebs\Wisenet\Model\PromotionBasic
     */
    public function getPromotion()
    {
        return $this->container['promotion'];
    }

    /**
     * Sets promotion
     *
     * @param \Phwebs\Wisenet\Model\PromotionBasic $promotion promotion
     *
     * @return $this
     */
    public function setPromotion($promotion)
    {
        $this->container['promotion'] = $promotion;

        return $this;
    }

    /**
     * Gets sales_contact
     *
     * @return \Phwebs\Wisenet\Model\SalesContactShort
     */
    public function getSalesContact()
    {
        return $this->container['sales_contact'];
    }

    /**
     * Sets sales_contact
     *
     * @param \Phwebs\Wisenet\Model\SalesContactShort $sales_contact sales_contact
     *
     * @return $this
     */
    public function setSalesContact($sales_contact)
    {
        $this->container['sales_contact'] = $sales_contact;

        return $this;
    }

    /**
     * Gets application_status
     *
     * @return \Phwebs\Wisenet\Model\ApplicationStatus
     */
    public function getApplicationStatus()
    {
        return $this->container['application_status'];
    }

    /**
     * Sets application_status
     *
     * @param \Phwebs\Wisenet\Model\ApplicationStatus $application_status application_status
     *
     * @return $this
     */
    public function setApplicationStatus($application_status)
    {
        $this->container['application_status'] = $application_status;

        return $this;
    }

    /**
     * Gets application_status_reason
     *
     * @return \Phwebs\Wisenet\Model\ApplicationStatusReason
     */
    public function getApplicationStatusReason()
    {
        return $this->container['application_status_reason'];
    }

    /**
     * Sets application_status_reason
     *
     * @param \Phwebs\Wisenet\Model\ApplicationStatusReason $application_status_reason application_status_reason
     *
     * @return $this
     */
    public function setApplicationStatusReason($application_status_reason)
    {
        $this->container['application_status_reason'] = $application_status_reason;

        return $this;
    }

    /**
     * Gets completion_pathway
     *
     * @return \Phwebs\Wisenet\Model\CompletionPathway
     */
    public function getCompletionPathway()
    {
        return $this->container['completion_pathway'];
    }

    /**
     * Sets completion_pathway
     *
     * @param \Phwebs\Wisenet\Model\CompletionPathway $completion_pathway completion_pathway
     *
     * @return $this
     */
    public function setCompletionPathway($completion_pathway)
    {
        $this->container['completion_pathway'] = $completion_pathway;

        return $this;
    }

    /**
     * Gets commenced_at_school_flag
     *
     * @return \Phwebs\Wisenet\Model\CommencedAtSchoolFlag
     */
    public function getCommencedAtSchoolFlag()
    {
        return $this->container['commenced_at_school_flag'];
    }

    /**
     * Sets commenced_at_school_flag
     *
     * @param \Phwebs\Wisenet\Model\CommencedAtSchoolFlag $commenced_at_school_flag commenced_at_school_flag
     *
     * @return $this
     */
    public function setCommencedAtSchoolFlag($commenced_at_school_flag)
    {
        $this->container['commenced_at_school_flag'] = $commenced_at_school_flag;

        return $this;
    }

    /**
     * Gets commencing_program_cohort1
     *
     * @return \Phwebs\Wisenet\Model\CommencingProgramCohort
     */
    public function getCommencingProgramCohort1()
    {
        return $this->container['commencing_program_cohort1'];
    }

    /**
     * Sets commencing_program_cohort1
     *
     * @param \Phwebs\Wisenet\Model\CommencingProgramCohort $commencing_program_cohort1 commencing_program_cohort1
     *
     * @return $this
     */
    public function setCommencingProgramCohort1($commencing_program_cohort1)
    {
        $this->container['commencing_program_cohort1'] = $commencing_program_cohort1;

        return $this;
    }

    /**
     * Gets commencing_program_cohort2
     *
     * @return \Phwebs\Wisenet\Model\CommencingProgramCohort
     */
    public function getCommencingProgramCohort2()
    {
        return $this->container['commencing_program_cohort2'];
    }

    /**
     * Sets commencing_program_cohort2
     *
     * @param \Phwebs\Wisenet\Model\CommencingProgramCohort $commencing_program_cohort2 commencing_program_cohort2
     *
     * @return $this
     */
    public function setCommencingProgramCohort2($commencing_program_cohort2)
    {
        $this->container['commencing_program_cohort2'] = $commencing_program_cohort2;

        return $this;
    }

    /**
     * Gets commencing_program_cohort3
     *
     * @return \Phwebs\Wisenet\Model\CommencingProgramCohort
     */
    public function getCommencingProgramCohort3()
    {
        return $this->container['commencing_program_cohort3'];
    }

    /**
     * Sets commencing_program_cohort3
     *
     * @param \Phwebs\Wisenet\Model\CommencingProgramCohort $commencing_program_cohort3 commencing_program_cohort3
     *
     * @return $this
     */
    public function setCommencingProgramCohort3($commencing_program_cohort3)
    {
        $this->container['commencing_program_cohort3'] = $commencing_program_cohort3;

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
