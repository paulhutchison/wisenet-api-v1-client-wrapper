<?php
/**
 * CourseEnrolment
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
 * CourseEnrolment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CourseEnrolment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CourseEnrolment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'course_enrolment_id' => 'int',
'learner_id' => 'int',
'learner_number_id' => 'int',
'course_offer_id' => 'int',
'previous_identifier' => 'string',
'opportunity_id' => 'int',
'enrolment_status_id' => 'int',
'enrolment_status_reason_id' => 'int',
'study_mode_id' => 'int',
'target_group_id' => 'int',
'coordinator_id' => 'int',
'trainer_id' => 'int',
'assessor_id' => 'int',
'completion_pathway_id' => 'int',
'commenced_at_school_flag_id' => 'string',
'ecoe_number' => 'string',
'student_number' => 'string',
'learner_position_id' => 'int',
'studylink_status_id' => 'int',
'studylink_status_reason_id' => 'int',
'start_date' => '\DateTime',
'end_date' => '\DateTime',
'enrolment_duration' => 'string',
'duration_type_id' => 'int',
'actual_end_date' => '\DateTime',
'course_commencement_date' => '\DateTime',
'tuition_duration' => 'double',
'expiry_date' => '\DateTime',
'expected_award_date' => '\DateTime',
'qualification_issued_flag' => 'bool',
'qualification_issued_date' => '\DateTime',
'training_plan_issued_flag' => 'bool',
'training_plan_sign_date' => '\DateTime',
'unique_training_hours' => 'int',
'invoice_date' => '\DateTime',
'parchment_number' => 'string',
'enquiry_date' => '\DateTime',
'enrolment_date' => '\DateTime',
're_enrolment_date' => '\DateTime',
'orientation_date' => '\DateTime',
'for_avetmiss_flag' => 'bool',
'previous_course_identifier' => 'string',
'registration_number' => 'string',
'program_status_id' => 'int',
'contract_type_id' => 'int',
'av_study_reason_id' => 'int',
'commencing_course_id' => 'int',
'eligibility_exemption_flag' => 'string',
'funding_eligible_flag' => 'bool',
'learner_fees_other' => 'double',
'individual_contract_id' => 'string',
'individual_contract_expiry_date' => '\DateTime',
'fh_accessed_flag' => 'string',
'fh_eligible_flag' => 'bool',
'estimated_yearly_eftsl' => 'string',
'commencing_student_identifier' => 'int',
'fee_type_indicator_id' => 'int',
'admission_basis_id' => 'int',
'attendance_type_id' => 'int',
'fh_study_reason_id' => 'int',
'specialisation_field_of_education_id' => 'int',
'scholarship_type_id' => 'int',
'previous_rts_efts' => 'double',
'completion_percentage' => 'int',
'joint_degree_provider_code' => 'string',
'separation_status_id' => 'int',
'ecaf_id' => 'int',
'ecaf_status' => 'string',
'ecaf_status_reason' => 'string',
'ecaf_notes' => 'string',
'ecaf_last_modified_date' => '\DateTime',
'ecaf_census_date' => '\DateTime',
'for_uip_flag' => 'bool',
'fund_source_id' => 'int',
'foreign_fee' => 'double',
'main_subject1_id' => 'int',
'main_subject2_id' => 'int',
'main_subject3_id' => 'int',
'nzqa_return_to_provider_flag' => 'bool',
'nzqa_awarding_provider_id' => 'int',
'nzqa_strand' => 'string',
'nzqa_optional_strand' => 'string',
'nzqa_request_type_id' => 'int',
'managed_apprenticeship_id' => 'int',
'aac_id' => 'int',
'aac_sales_officer' => 'string',
'aac_sign_date' => '\DateTime',
'sales_person_id' => 'int',
'certificate1' => 'string',
'certificate2' => 'string',
'rto_status_id' => 'int',
'invoice_number' => 'string',
'invoice_hours' => 'int',
'payment_type_id' => 'int',
'deposit' => 'double',
'rate_id' => 'int',
'privacy_flag' => 'bool',
'lln_flag' => 'bool',
'fees_collected1' => 'double',
'fees_collected2' => 'double',
'fees_collected3' => 'double',
'student_arrival_date' => '\DateTime',
'medical_insurance_provider' => 'string',
'student_pass_requirement_id' => 'int',
'student_pass_application_date' => '\DateTime',
'student_pass_in_principle_date' => '\DateTime',
'student_pass_issue_date' => '\DateTime',
'student_pass_expiry_date' => '\DateTime',
'student_pass_cancellation_date' => '\DateTime',
'public_notes' => 'string',
'private_notes' => 'string',
'agent' => '\Phwebs\Wisenet\Model\CourseEnrolmentAgent',
'tag_ids' => '\Phwebs\Wisenet\Model\TagBasic[]',
'learner_app_access_flag' => 'bool',
'e_learning_access_flag' => 'bool',
'hdr_engagement_code' => 'string',
'hdr_thesis_submission_date' => '\DateTime',
'ecoe_issue_date' => '\DateTime',
'public_trust_number' => 'string',
'application_status_id' => 'int',
'application_expiry_date' => '\DateTime',
'application_notes' => 'string',
'application_status_reason_id' => 'int',
'last_modified_time_stamp' => '\DateTime',
'created_on' => '\DateTime',
'commencing_program_cohort1_id' => 'int',
'commencing_program_cohort2_id' => 'int',
'commencing_program_cohort3_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'course_enrolment_id' => 'int32',
'learner_id' => 'int32',
'learner_number_id' => 'int32',
'course_offer_id' => 'int32',
'previous_identifier' => '10',
'opportunity_id' => 'int32',
'enrolment_status_id' => 'int32',
'enrolment_status_reason_id' => 'int32',
'study_mode_id' => 'int32',
'target_group_id' => 'int32',
'coordinator_id' => 'int32',
'trainer_id' => 'int32',
'assessor_id' => 'int32',
'completion_pathway_id' => 'int32',
'commenced_at_school_flag_id' => 'int32',
'ecoe_number' => '20',
'student_number' => '255',
'learner_position_id' => 'int32',
'studylink_status_id' => 'int32',
'studylink_status_reason_id' => 'int32',
'start_date' => 'date-time',
'end_date' => 'date-time',
'enrolment_duration' => null,
'duration_type_id' => 'int32',
'actual_end_date' => 'date-time',
'course_commencement_date' => 'date-time',
'tuition_duration' => 'double',
'expiry_date' => 'date-time',
'expected_award_date' => 'date-time',
'qualification_issued_flag' => null,
'qualification_issued_date' => 'date-time',
'training_plan_issued_flag' => null,
'training_plan_sign_date' => 'date-time',
'unique_training_hours' => 'int32',
'invoice_date' => 'date-time',
'parchment_number' => '25',
'enquiry_date' => 'date-time',
'enrolment_date' => 'date-time',
're_enrolment_date' => 'date-time',
'orientation_date' => 'date-time',
'for_avetmiss_flag' => null,
'previous_course_identifier' => '10',
'registration_number' => '20',
'program_status_id' => 'int32',
'contract_type_id' => 'int32',
'av_study_reason_id' => 'int32',
'commencing_course_id' => 'int32',
'eligibility_exemption_flag' => 'Y or N',
'funding_eligible_flag' => null,
'learner_fees_other' => 'double',
'individual_contract_id' => '20',
'individual_contract_expiry_date' => 'date-time',
'fh_accessed_flag' => 'Y or N',
'fh_eligible_flag' => null,
'estimated_yearly_eftsl' => '11',
'commencing_student_identifier' => 'int32',
'fee_type_indicator_id' => 'int32',
'admission_basis_id' => 'int32',
'attendance_type_id' => 'int32',
'fh_study_reason_id' => 'int32',
'specialisation_field_of_education_id' => 'int32',
'scholarship_type_id' => 'int32',
'previous_rts_efts' => 'double',
'completion_percentage' => 'int32',
'joint_degree_provider_code' => '50',
'separation_status_id' => 'int32',
'ecaf_id' => 'int32',
'ecaf_status' => '100',
'ecaf_status_reason' => '300',
'ecaf_notes' => '300',
'ecaf_last_modified_date' => 'date-time',
'ecaf_census_date' => 'date-time',
'for_uip_flag' => null,
'fund_source_id' => 'int32',
'foreign_fee' => 'double',
'main_subject1_id' => 'int32',
'main_subject2_id' => 'int32',
'main_subject3_id' => 'int32',
'nzqa_return_to_provider_flag' => null,
'nzqa_awarding_provider_id' => 'int32',
'nzqa_strand' => '2',
'nzqa_optional_strand' => '50',
'nzqa_request_type_id' => 'int32',
'managed_apprenticeship_id' => 'int32',
'aac_id' => 'int32',
'aac_sales_officer' => '50',
'aac_sign_date' => 'date-time',
'sales_person_id' => 'int32',
'certificate1' => '255',
'certificate2' => '255',
'rto_status_id' => 'int32',
'invoice_number' => '20',
'invoice_hours' => 'int32',
'payment_type_id' => 'int32',
'deposit' => 'double',
'rate_id' => 'int32',
'privacy_flag' => null,
'lln_flag' => null,
'fees_collected1' => 'double',
'fees_collected2' => 'double',
'fees_collected3' => 'double',
'student_arrival_date' => 'date-time',
'medical_insurance_provider' => '200',
'student_pass_requirement_id' => 'int32',
'student_pass_application_date' => 'date-time',
'student_pass_in_principle_date' => 'date-time',
'student_pass_issue_date' => 'date-time',
'student_pass_expiry_date' => 'date-time',
'student_pass_cancellation_date' => 'date-time',
'public_notes' => null,
'private_notes' => null,
'agent' => null,
'tag_ids' => null,
'learner_app_access_flag' => null,
'e_learning_access_flag' => null,
'hdr_engagement_code' => '10',
'hdr_thesis_submission_date' => 'date-time',
'ecoe_issue_date' => 'date-time',
'public_trust_number' => '50',
'application_status_id' => 'int32',
'application_expiry_date' => 'date-time',
'application_notes' => null,
'application_status_reason_id' => 'int32',
'last_modified_time_stamp' => 'date-time',
'created_on' => 'date-time',
'commencing_program_cohort1_id' => 'int32',
'commencing_program_cohort2_id' => 'int32',
'commencing_program_cohort3_id' => 'int32'    ];

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
        'course_enrolment_id' => 'CourseEnrolmentId',
'learner_id' => 'LearnerId',
'learner_number_id' => 'LearnerNumberId',
'course_offer_id' => 'CourseOfferId',
'previous_identifier' => 'PreviousIdentifier',
'opportunity_id' => 'OpportunityId',
'enrolment_status_id' => 'EnrolmentStatusId',
'enrolment_status_reason_id' => 'EnrolmentStatusReasonId',
'study_mode_id' => 'StudyModeId',
'target_group_id' => 'TargetGroupId',
'coordinator_id' => 'CoordinatorId',
'trainer_id' => 'TrainerId',
'assessor_id' => 'AssessorId',
'completion_pathway_id' => 'CompletionPathwayId',
'commenced_at_school_flag_id' => 'CommencedAtSchoolFlagId',
'ecoe_number' => 'EcoeNumber',
'student_number' => 'StudentNumber',
'learner_position_id' => 'LearnerPositionId',
'studylink_status_id' => 'StudylinkStatusId',
'studylink_status_reason_id' => 'StudylinkStatusReasonId',
'start_date' => 'StartDate',
'end_date' => 'EndDate',
'enrolment_duration' => 'EnrolmentDuration',
'duration_type_id' => 'DurationTypeId',
'actual_end_date' => 'ActualEndDate',
'course_commencement_date' => 'CourseCommencementDate',
'tuition_duration' => 'TuitionDuration',
'expiry_date' => 'ExpiryDate',
'expected_award_date' => 'ExpectedAwardDate',
'qualification_issued_flag' => 'QualificationIssuedFlag',
'qualification_issued_date' => 'QualificationIssuedDate',
'training_plan_issued_flag' => 'TrainingPlanIssuedFlag',
'training_plan_sign_date' => 'TrainingPlanSignDate',
'unique_training_hours' => 'UniqueTrainingHours',
'invoice_date' => 'InvoiceDate',
'parchment_number' => 'ParchmentNumber',
'enquiry_date' => 'EnquiryDate',
'enrolment_date' => 'EnrolmentDate',
're_enrolment_date' => 'ReEnrolmentDate',
'orientation_date' => 'OrientationDate',
'for_avetmiss_flag' => 'ForAvetmissFlag',
'previous_course_identifier' => 'PreviousCourseIdentifier',
'registration_number' => 'RegistrationNumber',
'program_status_id' => 'ProgramStatusId',
'contract_type_id' => 'ContractTypeId',
'av_study_reason_id' => 'AvStudyReasonId',
'commencing_course_id' => 'CommencingCourseId',
'eligibility_exemption_flag' => 'EligibilityExemptionFlag',
'funding_eligible_flag' => 'FundingEligibleFlag',
'learner_fees_other' => 'LearnerFeesOther',
'individual_contract_id' => 'IndividualContractId',
'individual_contract_expiry_date' => 'IndividualContractExpiryDate',
'fh_accessed_flag' => 'FhAccessedFlag',
'fh_eligible_flag' => 'FhEligibleFlag',
'estimated_yearly_eftsl' => 'EstimatedYearlyEftsl',
'commencing_student_identifier' => 'CommencingStudentIdentifier',
'fee_type_indicator_id' => 'FeeTypeIndicatorId',
'admission_basis_id' => 'AdmissionBasisId',
'attendance_type_id' => 'AttendanceTypeId',
'fh_study_reason_id' => 'FhStudyReasonId',
'specialisation_field_of_education_id' => 'SpecialisationFieldOfEducationId',
'scholarship_type_id' => 'ScholarshipTypeId',
'previous_rts_efts' => 'PreviousRtsEfts',
'completion_percentage' => 'CompletionPercentage',
'joint_degree_provider_code' => 'JointDegreeProviderCode',
'separation_status_id' => 'SeparationStatusId',
'ecaf_id' => 'EcafId',
'ecaf_status' => 'EcafStatus',
'ecaf_status_reason' => 'EcafStatusReason',
'ecaf_notes' => 'EcafNotes',
'ecaf_last_modified_date' => 'EcafLastModifiedDate',
'ecaf_census_date' => 'EcafCensusDate',
'for_uip_flag' => 'ForUipFlag',
'fund_source_id' => 'FundSourceId',
'foreign_fee' => 'ForeignFee',
'main_subject1_id' => 'MainSubject1Id',
'main_subject2_id' => 'MainSubject2Id',
'main_subject3_id' => 'MainSubject3Id',
'nzqa_return_to_provider_flag' => 'NzqaReturnToProviderFlag',
'nzqa_awarding_provider_id' => 'NzqaAwardingProviderId',
'nzqa_strand' => 'NzqaStrand',
'nzqa_optional_strand' => 'NzqaOptionalStrand',
'nzqa_request_type_id' => 'NzqaRequestTypeId',
'managed_apprenticeship_id' => 'ManagedApprenticeshipId',
'aac_id' => 'AacId',
'aac_sales_officer' => 'AacSalesOfficer',
'aac_sign_date' => 'AacSignDate',
'sales_person_id' => 'SalesPersonId',
'certificate1' => 'Certificate1',
'certificate2' => 'Certificate2',
'rto_status_id' => 'RtoStatusId',
'invoice_number' => 'InvoiceNumber',
'invoice_hours' => 'InvoiceHours',
'payment_type_id' => 'PaymentTypeId',
'deposit' => 'Deposit',
'rate_id' => 'RateId',
'privacy_flag' => 'PrivacyFlag',
'lln_flag' => 'LlnFlag',
'fees_collected1' => 'FeesCollected1',
'fees_collected2' => 'FeesCollected2',
'fees_collected3' => 'FeesCollected3',
'student_arrival_date' => 'StudentArrivalDate',
'medical_insurance_provider' => 'MedicalInsuranceProvider',
'student_pass_requirement_id' => 'StudentPassRequirementId',
'student_pass_application_date' => 'StudentPassApplicationDate',
'student_pass_in_principle_date' => 'StudentPassInPrincipleDate',
'student_pass_issue_date' => 'StudentPassIssueDate',
'student_pass_expiry_date' => 'StudentPassExpiryDate',
'student_pass_cancellation_date' => 'StudentPassCancellationDate',
'public_notes' => 'PublicNotes',
'private_notes' => 'PrivateNotes',
'agent' => 'Agent',
'tag_ids' => 'TagIds',
'learner_app_access_flag' => 'LearnerAppAccessFlag',
'e_learning_access_flag' => 'ELearningAccessFlag',
'hdr_engagement_code' => 'HdrEngagementCode',
'hdr_thesis_submission_date' => 'HdrThesisSubmissionDate',
'ecoe_issue_date' => 'EcoeIssueDate',
'public_trust_number' => 'PublicTrustNumber',
'application_status_id' => 'ApplicationStatusId',
'application_expiry_date' => 'ApplicationExpiryDate',
'application_notes' => 'ApplicationNotes',
'application_status_reason_id' => 'ApplicationStatusReasonId',
'last_modified_time_stamp' => 'LastModifiedTimeStamp',
'created_on' => 'CreatedOn',
'commencing_program_cohort1_id' => 'CommencingProgramCohort1Id',
'commencing_program_cohort2_id' => 'CommencingProgramCohort2Id',
'commencing_program_cohort3_id' => 'CommencingProgramCohort3Id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'course_enrolment_id' => 'setCourseEnrolmentId',
'learner_id' => 'setLearnerId',
'learner_number_id' => 'setLearnerNumberId',
'course_offer_id' => 'setCourseOfferId',
'previous_identifier' => 'setPreviousIdentifier',
'opportunity_id' => 'setOpportunityId',
'enrolment_status_id' => 'setEnrolmentStatusId',
'enrolment_status_reason_id' => 'setEnrolmentStatusReasonId',
'study_mode_id' => 'setStudyModeId',
'target_group_id' => 'setTargetGroupId',
'coordinator_id' => 'setCoordinatorId',
'trainer_id' => 'setTrainerId',
'assessor_id' => 'setAssessorId',
'completion_pathway_id' => 'setCompletionPathwayId',
'commenced_at_school_flag_id' => 'setCommencedAtSchoolFlagId',
'ecoe_number' => 'setEcoeNumber',
'student_number' => 'setStudentNumber',
'learner_position_id' => 'setLearnerPositionId',
'studylink_status_id' => 'setStudylinkStatusId',
'studylink_status_reason_id' => 'setStudylinkStatusReasonId',
'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'enrolment_duration' => 'setEnrolmentDuration',
'duration_type_id' => 'setDurationTypeId',
'actual_end_date' => 'setActualEndDate',
'course_commencement_date' => 'setCourseCommencementDate',
'tuition_duration' => 'setTuitionDuration',
'expiry_date' => 'setExpiryDate',
'expected_award_date' => 'setExpectedAwardDate',
'qualification_issued_flag' => 'setQualificationIssuedFlag',
'qualification_issued_date' => 'setQualificationIssuedDate',
'training_plan_issued_flag' => 'setTrainingPlanIssuedFlag',
'training_plan_sign_date' => 'setTrainingPlanSignDate',
'unique_training_hours' => 'setUniqueTrainingHours',
'invoice_date' => 'setInvoiceDate',
'parchment_number' => 'setParchmentNumber',
'enquiry_date' => 'setEnquiryDate',
'enrolment_date' => 'setEnrolmentDate',
're_enrolment_date' => 'setReEnrolmentDate',
'orientation_date' => 'setOrientationDate',
'for_avetmiss_flag' => 'setForAvetmissFlag',
'previous_course_identifier' => 'setPreviousCourseIdentifier',
'registration_number' => 'setRegistrationNumber',
'program_status_id' => 'setProgramStatusId',
'contract_type_id' => 'setContractTypeId',
'av_study_reason_id' => 'setAvStudyReasonId',
'commencing_course_id' => 'setCommencingCourseId',
'eligibility_exemption_flag' => 'setEligibilityExemptionFlag',
'funding_eligible_flag' => 'setFundingEligibleFlag',
'learner_fees_other' => 'setLearnerFeesOther',
'individual_contract_id' => 'setIndividualContractId',
'individual_contract_expiry_date' => 'setIndividualContractExpiryDate',
'fh_accessed_flag' => 'setFhAccessedFlag',
'fh_eligible_flag' => 'setFhEligibleFlag',
'estimated_yearly_eftsl' => 'setEstimatedYearlyEftsl',
'commencing_student_identifier' => 'setCommencingStudentIdentifier',
'fee_type_indicator_id' => 'setFeeTypeIndicatorId',
'admission_basis_id' => 'setAdmissionBasisId',
'attendance_type_id' => 'setAttendanceTypeId',
'fh_study_reason_id' => 'setFhStudyReasonId',
'specialisation_field_of_education_id' => 'setSpecialisationFieldOfEducationId',
'scholarship_type_id' => 'setScholarshipTypeId',
'previous_rts_efts' => 'setPreviousRtsEfts',
'completion_percentage' => 'setCompletionPercentage',
'joint_degree_provider_code' => 'setJointDegreeProviderCode',
'separation_status_id' => 'setSeparationStatusId',
'ecaf_id' => 'setEcafId',
'ecaf_status' => 'setEcafStatus',
'ecaf_status_reason' => 'setEcafStatusReason',
'ecaf_notes' => 'setEcafNotes',
'ecaf_last_modified_date' => 'setEcafLastModifiedDate',
'ecaf_census_date' => 'setEcafCensusDate',
'for_uip_flag' => 'setForUipFlag',
'fund_source_id' => 'setFundSourceId',
'foreign_fee' => 'setForeignFee',
'main_subject1_id' => 'setMainSubject1Id',
'main_subject2_id' => 'setMainSubject2Id',
'main_subject3_id' => 'setMainSubject3Id',
'nzqa_return_to_provider_flag' => 'setNzqaReturnToProviderFlag',
'nzqa_awarding_provider_id' => 'setNzqaAwardingProviderId',
'nzqa_strand' => 'setNzqaStrand',
'nzqa_optional_strand' => 'setNzqaOptionalStrand',
'nzqa_request_type_id' => 'setNzqaRequestTypeId',
'managed_apprenticeship_id' => 'setManagedApprenticeshipId',
'aac_id' => 'setAacId',
'aac_sales_officer' => 'setAacSalesOfficer',
'aac_sign_date' => 'setAacSignDate',
'sales_person_id' => 'setSalesPersonId',
'certificate1' => 'setCertificate1',
'certificate2' => 'setCertificate2',
'rto_status_id' => 'setRtoStatusId',
'invoice_number' => 'setInvoiceNumber',
'invoice_hours' => 'setInvoiceHours',
'payment_type_id' => 'setPaymentTypeId',
'deposit' => 'setDeposit',
'rate_id' => 'setRateId',
'privacy_flag' => 'setPrivacyFlag',
'lln_flag' => 'setLlnFlag',
'fees_collected1' => 'setFeesCollected1',
'fees_collected2' => 'setFeesCollected2',
'fees_collected3' => 'setFeesCollected3',
'student_arrival_date' => 'setStudentArrivalDate',
'medical_insurance_provider' => 'setMedicalInsuranceProvider',
'student_pass_requirement_id' => 'setStudentPassRequirementId',
'student_pass_application_date' => 'setStudentPassApplicationDate',
'student_pass_in_principle_date' => 'setStudentPassInPrincipleDate',
'student_pass_issue_date' => 'setStudentPassIssueDate',
'student_pass_expiry_date' => 'setStudentPassExpiryDate',
'student_pass_cancellation_date' => 'setStudentPassCancellationDate',
'public_notes' => 'setPublicNotes',
'private_notes' => 'setPrivateNotes',
'agent' => 'setAgent',
'tag_ids' => 'setTagIds',
'learner_app_access_flag' => 'setLearnerAppAccessFlag',
'e_learning_access_flag' => 'setELearningAccessFlag',
'hdr_engagement_code' => 'setHdrEngagementCode',
'hdr_thesis_submission_date' => 'setHdrThesisSubmissionDate',
'ecoe_issue_date' => 'setEcoeIssueDate',
'public_trust_number' => 'setPublicTrustNumber',
'application_status_id' => 'setApplicationStatusId',
'application_expiry_date' => 'setApplicationExpiryDate',
'application_notes' => 'setApplicationNotes',
'application_status_reason_id' => 'setApplicationStatusReasonId',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp',
'created_on' => 'setCreatedOn',
'commencing_program_cohort1_id' => 'setCommencingProgramCohort1Id',
'commencing_program_cohort2_id' => 'setCommencingProgramCohort2Id',
'commencing_program_cohort3_id' => 'setCommencingProgramCohort3Id'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'course_enrolment_id' => 'getCourseEnrolmentId',
'learner_id' => 'getLearnerId',
'learner_number_id' => 'getLearnerNumberId',
'course_offer_id' => 'getCourseOfferId',
'previous_identifier' => 'getPreviousIdentifier',
'opportunity_id' => 'getOpportunityId',
'enrolment_status_id' => 'getEnrolmentStatusId',
'enrolment_status_reason_id' => 'getEnrolmentStatusReasonId',
'study_mode_id' => 'getStudyModeId',
'target_group_id' => 'getTargetGroupId',
'coordinator_id' => 'getCoordinatorId',
'trainer_id' => 'getTrainerId',
'assessor_id' => 'getAssessorId',
'completion_pathway_id' => 'getCompletionPathwayId',
'commenced_at_school_flag_id' => 'getCommencedAtSchoolFlagId',
'ecoe_number' => 'getEcoeNumber',
'student_number' => 'getStudentNumber',
'learner_position_id' => 'getLearnerPositionId',
'studylink_status_id' => 'getStudylinkStatusId',
'studylink_status_reason_id' => 'getStudylinkStatusReasonId',
'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'enrolment_duration' => 'getEnrolmentDuration',
'duration_type_id' => 'getDurationTypeId',
'actual_end_date' => 'getActualEndDate',
'course_commencement_date' => 'getCourseCommencementDate',
'tuition_duration' => 'getTuitionDuration',
'expiry_date' => 'getExpiryDate',
'expected_award_date' => 'getExpectedAwardDate',
'qualification_issued_flag' => 'getQualificationIssuedFlag',
'qualification_issued_date' => 'getQualificationIssuedDate',
'training_plan_issued_flag' => 'getTrainingPlanIssuedFlag',
'training_plan_sign_date' => 'getTrainingPlanSignDate',
'unique_training_hours' => 'getUniqueTrainingHours',
'invoice_date' => 'getInvoiceDate',
'parchment_number' => 'getParchmentNumber',
'enquiry_date' => 'getEnquiryDate',
'enrolment_date' => 'getEnrolmentDate',
're_enrolment_date' => 'getReEnrolmentDate',
'orientation_date' => 'getOrientationDate',
'for_avetmiss_flag' => 'getForAvetmissFlag',
'previous_course_identifier' => 'getPreviousCourseIdentifier',
'registration_number' => 'getRegistrationNumber',
'program_status_id' => 'getProgramStatusId',
'contract_type_id' => 'getContractTypeId',
'av_study_reason_id' => 'getAvStudyReasonId',
'commencing_course_id' => 'getCommencingCourseId',
'eligibility_exemption_flag' => 'getEligibilityExemptionFlag',
'funding_eligible_flag' => 'getFundingEligibleFlag',
'learner_fees_other' => 'getLearnerFeesOther',
'individual_contract_id' => 'getIndividualContractId',
'individual_contract_expiry_date' => 'getIndividualContractExpiryDate',
'fh_accessed_flag' => 'getFhAccessedFlag',
'fh_eligible_flag' => 'getFhEligibleFlag',
'estimated_yearly_eftsl' => 'getEstimatedYearlyEftsl',
'commencing_student_identifier' => 'getCommencingStudentIdentifier',
'fee_type_indicator_id' => 'getFeeTypeIndicatorId',
'admission_basis_id' => 'getAdmissionBasisId',
'attendance_type_id' => 'getAttendanceTypeId',
'fh_study_reason_id' => 'getFhStudyReasonId',
'specialisation_field_of_education_id' => 'getSpecialisationFieldOfEducationId',
'scholarship_type_id' => 'getScholarshipTypeId',
'previous_rts_efts' => 'getPreviousRtsEfts',
'completion_percentage' => 'getCompletionPercentage',
'joint_degree_provider_code' => 'getJointDegreeProviderCode',
'separation_status_id' => 'getSeparationStatusId',
'ecaf_id' => 'getEcafId',
'ecaf_status' => 'getEcafStatus',
'ecaf_status_reason' => 'getEcafStatusReason',
'ecaf_notes' => 'getEcafNotes',
'ecaf_last_modified_date' => 'getEcafLastModifiedDate',
'ecaf_census_date' => 'getEcafCensusDate',
'for_uip_flag' => 'getForUipFlag',
'fund_source_id' => 'getFundSourceId',
'foreign_fee' => 'getForeignFee',
'main_subject1_id' => 'getMainSubject1Id',
'main_subject2_id' => 'getMainSubject2Id',
'main_subject3_id' => 'getMainSubject3Id',
'nzqa_return_to_provider_flag' => 'getNzqaReturnToProviderFlag',
'nzqa_awarding_provider_id' => 'getNzqaAwardingProviderId',
'nzqa_strand' => 'getNzqaStrand',
'nzqa_optional_strand' => 'getNzqaOptionalStrand',
'nzqa_request_type_id' => 'getNzqaRequestTypeId',
'managed_apprenticeship_id' => 'getManagedApprenticeshipId',
'aac_id' => 'getAacId',
'aac_sales_officer' => 'getAacSalesOfficer',
'aac_sign_date' => 'getAacSignDate',
'sales_person_id' => 'getSalesPersonId',
'certificate1' => 'getCertificate1',
'certificate2' => 'getCertificate2',
'rto_status_id' => 'getRtoStatusId',
'invoice_number' => 'getInvoiceNumber',
'invoice_hours' => 'getInvoiceHours',
'payment_type_id' => 'getPaymentTypeId',
'deposit' => 'getDeposit',
'rate_id' => 'getRateId',
'privacy_flag' => 'getPrivacyFlag',
'lln_flag' => 'getLlnFlag',
'fees_collected1' => 'getFeesCollected1',
'fees_collected2' => 'getFeesCollected2',
'fees_collected3' => 'getFeesCollected3',
'student_arrival_date' => 'getStudentArrivalDate',
'medical_insurance_provider' => 'getMedicalInsuranceProvider',
'student_pass_requirement_id' => 'getStudentPassRequirementId',
'student_pass_application_date' => 'getStudentPassApplicationDate',
'student_pass_in_principle_date' => 'getStudentPassInPrincipleDate',
'student_pass_issue_date' => 'getStudentPassIssueDate',
'student_pass_expiry_date' => 'getStudentPassExpiryDate',
'student_pass_cancellation_date' => 'getStudentPassCancellationDate',
'public_notes' => 'getPublicNotes',
'private_notes' => 'getPrivateNotes',
'agent' => 'getAgent',
'tag_ids' => 'getTagIds',
'learner_app_access_flag' => 'getLearnerAppAccessFlag',
'e_learning_access_flag' => 'getELearningAccessFlag',
'hdr_engagement_code' => 'getHdrEngagementCode',
'hdr_thesis_submission_date' => 'getHdrThesisSubmissionDate',
'ecoe_issue_date' => 'getEcoeIssueDate',
'public_trust_number' => 'getPublicTrustNumber',
'application_status_id' => 'getApplicationStatusId',
'application_expiry_date' => 'getApplicationExpiryDate',
'application_notes' => 'getApplicationNotes',
'application_status_reason_id' => 'getApplicationStatusReasonId',
'last_modified_time_stamp' => 'getLastModifiedTimeStamp',
'created_on' => 'getCreatedOn',
'commencing_program_cohort1_id' => 'getCommencingProgramCohort1Id',
'commencing_program_cohort2_id' => 'getCommencingProgramCohort2Id',
'commencing_program_cohort3_id' => 'getCommencingProgramCohort3Id'    ];

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
        $this->container['course_enrolment_id'] = isset($data['course_enrolment_id']) ? $data['course_enrolment_id'] : null;
        $this->container['learner_id'] = isset($data['learner_id']) ? $data['learner_id'] : null;
        $this->container['learner_number_id'] = isset($data['learner_number_id']) ? $data['learner_number_id'] : null;
        $this->container['course_offer_id'] = isset($data['course_offer_id']) ? $data['course_offer_id'] : null;
        $this->container['previous_identifier'] = isset($data['previous_identifier']) ? $data['previous_identifier'] : null;
        $this->container['opportunity_id'] = isset($data['opportunity_id']) ? $data['opportunity_id'] : null;
        $this->container['enrolment_status_id'] = isset($data['enrolment_status_id']) ? $data['enrolment_status_id'] : null;
        $this->container['enrolment_status_reason_id'] = isset($data['enrolment_status_reason_id']) ? $data['enrolment_status_reason_id'] : null;
        $this->container['study_mode_id'] = isset($data['study_mode_id']) ? $data['study_mode_id'] : null;
        $this->container['target_group_id'] = isset($data['target_group_id']) ? $data['target_group_id'] : null;
        $this->container['coordinator_id'] = isset($data['coordinator_id']) ? $data['coordinator_id'] : null;
        $this->container['trainer_id'] = isset($data['trainer_id']) ? $data['trainer_id'] : null;
        $this->container['assessor_id'] = isset($data['assessor_id']) ? $data['assessor_id'] : null;
        $this->container['completion_pathway_id'] = isset($data['completion_pathway_id']) ? $data['completion_pathway_id'] : null;
        $this->container['commenced_at_school_flag_id'] = isset($data['commenced_at_school_flag_id']) ? $data['commenced_at_school_flag_id'] : null;
        $this->container['ecoe_number'] = isset($data['ecoe_number']) ? $data['ecoe_number'] : null;
        $this->container['student_number'] = isset($data['student_number']) ? $data['student_number'] : null;
        $this->container['learner_position_id'] = isset($data['learner_position_id']) ? $data['learner_position_id'] : null;
        $this->container['studylink_status_id'] = isset($data['studylink_status_id']) ? $data['studylink_status_id'] : null;
        $this->container['studylink_status_reason_id'] = isset($data['studylink_status_reason_id']) ? $data['studylink_status_reason_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['enrolment_duration'] = isset($data['enrolment_duration']) ? $data['enrolment_duration'] : null;
        $this->container['duration_type_id'] = isset($data['duration_type_id']) ? $data['duration_type_id'] : null;
        $this->container['actual_end_date'] = isset($data['actual_end_date']) ? $data['actual_end_date'] : null;
        $this->container['course_commencement_date'] = isset($data['course_commencement_date']) ? $data['course_commencement_date'] : null;
        $this->container['tuition_duration'] = isset($data['tuition_duration']) ? $data['tuition_duration'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['expected_award_date'] = isset($data['expected_award_date']) ? $data['expected_award_date'] : null;
        $this->container['qualification_issued_flag'] = isset($data['qualification_issued_flag']) ? $data['qualification_issued_flag'] : null;
        $this->container['qualification_issued_date'] = isset($data['qualification_issued_date']) ? $data['qualification_issued_date'] : null;
        $this->container['training_plan_issued_flag'] = isset($data['training_plan_issued_flag']) ? $data['training_plan_issued_flag'] : null;
        $this->container['training_plan_sign_date'] = isset($data['training_plan_sign_date']) ? $data['training_plan_sign_date'] : null;
        $this->container['unique_training_hours'] = isset($data['unique_training_hours']) ? $data['unique_training_hours'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['parchment_number'] = isset($data['parchment_number']) ? $data['parchment_number'] : null;
        $this->container['enquiry_date'] = isset($data['enquiry_date']) ? $data['enquiry_date'] : null;
        $this->container['enrolment_date'] = isset($data['enrolment_date']) ? $data['enrolment_date'] : null;
        $this->container['re_enrolment_date'] = isset($data['re_enrolment_date']) ? $data['re_enrolment_date'] : null;
        $this->container['orientation_date'] = isset($data['orientation_date']) ? $data['orientation_date'] : null;
        $this->container['for_avetmiss_flag'] = isset($data['for_avetmiss_flag']) ? $data['for_avetmiss_flag'] : null;
        $this->container['previous_course_identifier'] = isset($data['previous_course_identifier']) ? $data['previous_course_identifier'] : null;
        $this->container['registration_number'] = isset($data['registration_number']) ? $data['registration_number'] : null;
        $this->container['program_status_id'] = isset($data['program_status_id']) ? $data['program_status_id'] : null;
        $this->container['contract_type_id'] = isset($data['contract_type_id']) ? $data['contract_type_id'] : null;
        $this->container['av_study_reason_id'] = isset($data['av_study_reason_id']) ? $data['av_study_reason_id'] : null;
        $this->container['commencing_course_id'] = isset($data['commencing_course_id']) ? $data['commencing_course_id'] : null;
        $this->container['eligibility_exemption_flag'] = isset($data['eligibility_exemption_flag']) ? $data['eligibility_exemption_flag'] : null;
        $this->container['funding_eligible_flag'] = isset($data['funding_eligible_flag']) ? $data['funding_eligible_flag'] : null;
        $this->container['learner_fees_other'] = isset($data['learner_fees_other']) ? $data['learner_fees_other'] : null;
        $this->container['individual_contract_id'] = isset($data['individual_contract_id']) ? $data['individual_contract_id'] : null;
        $this->container['individual_contract_expiry_date'] = isset($data['individual_contract_expiry_date']) ? $data['individual_contract_expiry_date'] : null;
        $this->container['fh_accessed_flag'] = isset($data['fh_accessed_flag']) ? $data['fh_accessed_flag'] : null;
        $this->container['fh_eligible_flag'] = isset($data['fh_eligible_flag']) ? $data['fh_eligible_flag'] : null;
        $this->container['estimated_yearly_eftsl'] = isset($data['estimated_yearly_eftsl']) ? $data['estimated_yearly_eftsl'] : null;
        $this->container['commencing_student_identifier'] = isset($data['commencing_student_identifier']) ? $data['commencing_student_identifier'] : null;
        $this->container['fee_type_indicator_id'] = isset($data['fee_type_indicator_id']) ? $data['fee_type_indicator_id'] : null;
        $this->container['admission_basis_id'] = isset($data['admission_basis_id']) ? $data['admission_basis_id'] : null;
        $this->container['attendance_type_id'] = isset($data['attendance_type_id']) ? $data['attendance_type_id'] : null;
        $this->container['fh_study_reason_id'] = isset($data['fh_study_reason_id']) ? $data['fh_study_reason_id'] : null;
        $this->container['specialisation_field_of_education_id'] = isset($data['specialisation_field_of_education_id']) ? $data['specialisation_field_of_education_id'] : null;
        $this->container['scholarship_type_id'] = isset($data['scholarship_type_id']) ? $data['scholarship_type_id'] : null;
        $this->container['previous_rts_efts'] = isset($data['previous_rts_efts']) ? $data['previous_rts_efts'] : null;
        $this->container['completion_percentage'] = isset($data['completion_percentage']) ? $data['completion_percentage'] : null;
        $this->container['joint_degree_provider_code'] = isset($data['joint_degree_provider_code']) ? $data['joint_degree_provider_code'] : null;
        $this->container['separation_status_id'] = isset($data['separation_status_id']) ? $data['separation_status_id'] : null;
        $this->container['ecaf_id'] = isset($data['ecaf_id']) ? $data['ecaf_id'] : null;
        $this->container['ecaf_status'] = isset($data['ecaf_status']) ? $data['ecaf_status'] : null;
        $this->container['ecaf_status_reason'] = isset($data['ecaf_status_reason']) ? $data['ecaf_status_reason'] : null;
        $this->container['ecaf_notes'] = isset($data['ecaf_notes']) ? $data['ecaf_notes'] : null;
        $this->container['ecaf_last_modified_date'] = isset($data['ecaf_last_modified_date']) ? $data['ecaf_last_modified_date'] : null;
        $this->container['ecaf_census_date'] = isset($data['ecaf_census_date']) ? $data['ecaf_census_date'] : null;
        $this->container['for_uip_flag'] = isset($data['for_uip_flag']) ? $data['for_uip_flag'] : null;
        $this->container['fund_source_id'] = isset($data['fund_source_id']) ? $data['fund_source_id'] : null;
        $this->container['foreign_fee'] = isset($data['foreign_fee']) ? $data['foreign_fee'] : null;
        $this->container['main_subject1_id'] = isset($data['main_subject1_id']) ? $data['main_subject1_id'] : null;
        $this->container['main_subject2_id'] = isset($data['main_subject2_id']) ? $data['main_subject2_id'] : null;
        $this->container['main_subject3_id'] = isset($data['main_subject3_id']) ? $data['main_subject3_id'] : null;
        $this->container['nzqa_return_to_provider_flag'] = isset($data['nzqa_return_to_provider_flag']) ? $data['nzqa_return_to_provider_flag'] : null;
        $this->container['nzqa_awarding_provider_id'] = isset($data['nzqa_awarding_provider_id']) ? $data['nzqa_awarding_provider_id'] : null;
        $this->container['nzqa_strand'] = isset($data['nzqa_strand']) ? $data['nzqa_strand'] : null;
        $this->container['nzqa_optional_strand'] = isset($data['nzqa_optional_strand']) ? $data['nzqa_optional_strand'] : null;
        $this->container['nzqa_request_type_id'] = isset($data['nzqa_request_type_id']) ? $data['nzqa_request_type_id'] : null;
        $this->container['managed_apprenticeship_id'] = isset($data['managed_apprenticeship_id']) ? $data['managed_apprenticeship_id'] : null;
        $this->container['aac_id'] = isset($data['aac_id']) ? $data['aac_id'] : null;
        $this->container['aac_sales_officer'] = isset($data['aac_sales_officer']) ? $data['aac_sales_officer'] : null;
        $this->container['aac_sign_date'] = isset($data['aac_sign_date']) ? $data['aac_sign_date'] : null;
        $this->container['sales_person_id'] = isset($data['sales_person_id']) ? $data['sales_person_id'] : null;
        $this->container['certificate1'] = isset($data['certificate1']) ? $data['certificate1'] : null;
        $this->container['certificate2'] = isset($data['certificate2']) ? $data['certificate2'] : null;
        $this->container['rto_status_id'] = isset($data['rto_status_id']) ? $data['rto_status_id'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['invoice_hours'] = isset($data['invoice_hours']) ? $data['invoice_hours'] : null;
        $this->container['payment_type_id'] = isset($data['payment_type_id']) ? $data['payment_type_id'] : null;
        $this->container['deposit'] = isset($data['deposit']) ? $data['deposit'] : null;
        $this->container['rate_id'] = isset($data['rate_id']) ? $data['rate_id'] : null;
        $this->container['privacy_flag'] = isset($data['privacy_flag']) ? $data['privacy_flag'] : null;
        $this->container['lln_flag'] = isset($data['lln_flag']) ? $data['lln_flag'] : null;
        $this->container['fees_collected1'] = isset($data['fees_collected1']) ? $data['fees_collected1'] : null;
        $this->container['fees_collected2'] = isset($data['fees_collected2']) ? $data['fees_collected2'] : null;
        $this->container['fees_collected3'] = isset($data['fees_collected3']) ? $data['fees_collected3'] : null;
        $this->container['student_arrival_date'] = isset($data['student_arrival_date']) ? $data['student_arrival_date'] : null;
        $this->container['medical_insurance_provider'] = isset($data['medical_insurance_provider']) ? $data['medical_insurance_provider'] : null;
        $this->container['student_pass_requirement_id'] = isset($data['student_pass_requirement_id']) ? $data['student_pass_requirement_id'] : null;
        $this->container['student_pass_application_date'] = isset($data['student_pass_application_date']) ? $data['student_pass_application_date'] : null;
        $this->container['student_pass_in_principle_date'] = isset($data['student_pass_in_principle_date']) ? $data['student_pass_in_principle_date'] : null;
        $this->container['student_pass_issue_date'] = isset($data['student_pass_issue_date']) ? $data['student_pass_issue_date'] : null;
        $this->container['student_pass_expiry_date'] = isset($data['student_pass_expiry_date']) ? $data['student_pass_expiry_date'] : null;
        $this->container['student_pass_cancellation_date'] = isset($data['student_pass_cancellation_date']) ? $data['student_pass_cancellation_date'] : null;
        $this->container['public_notes'] = isset($data['public_notes']) ? $data['public_notes'] : null;
        $this->container['private_notes'] = isset($data['private_notes']) ? $data['private_notes'] : null;
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['learner_app_access_flag'] = isset($data['learner_app_access_flag']) ? $data['learner_app_access_flag'] : null;
        $this->container['e_learning_access_flag'] = isset($data['e_learning_access_flag']) ? $data['e_learning_access_flag'] : null;
        $this->container['hdr_engagement_code'] = isset($data['hdr_engagement_code']) ? $data['hdr_engagement_code'] : null;
        $this->container['hdr_thesis_submission_date'] = isset($data['hdr_thesis_submission_date']) ? $data['hdr_thesis_submission_date'] : null;
        $this->container['ecoe_issue_date'] = isset($data['ecoe_issue_date']) ? $data['ecoe_issue_date'] : null;
        $this->container['public_trust_number'] = isset($data['public_trust_number']) ? $data['public_trust_number'] : null;
        $this->container['application_status_id'] = isset($data['application_status_id']) ? $data['application_status_id'] : null;
        $this->container['application_expiry_date'] = isset($data['application_expiry_date']) ? $data['application_expiry_date'] : null;
        $this->container['application_notes'] = isset($data['application_notes']) ? $data['application_notes'] : null;
        $this->container['application_status_reason_id'] = isset($data['application_status_reason_id']) ? $data['application_status_reason_id'] : null;
        $this->container['last_modified_time_stamp'] = isset($data['last_modified_time_stamp']) ? $data['last_modified_time_stamp'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['commencing_program_cohort1_id'] = isset($data['commencing_program_cohort1_id']) ? $data['commencing_program_cohort1_id'] : null;
        $this->container['commencing_program_cohort2_id'] = isset($data['commencing_program_cohort2_id']) ? $data['commencing_program_cohort2_id'] : null;
        $this->container['commencing_program_cohort3_id'] = isset($data['commencing_program_cohort3_id']) ? $data['commencing_program_cohort3_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['learner_id'] === null) {
            $invalidProperties[] = "'learner_id' can't be null";
        }
        if ($this->container['course_offer_id'] === null) {
            $invalidProperties[] = "'course_offer_id' can't be null";
        }
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
     * Gets course_enrolment_id
     *
     * @return int
     */
    public function getCourseEnrolmentId()
    {
        return $this->container['course_enrolment_id'];
    }

    /**
     * Sets course_enrolment_id
     *
     * @param int $course_enrolment_id Primary Id for course enrolment that is auto generated
     *
     * @return $this
     */
    public function setCourseEnrolmentId($course_enrolment_id)
    {
        $this->container['course_enrolment_id'] = $course_enrolment_id;

        return $this;
    }

    /**
     * Gets learner_id
     *
     * @return int
     */
    public function getLearnerId()
    {
        return $this->container['learner_id'];
    }

    /**
     * Sets learner_id
     *
     * @param int $learner_id See entity Learner
     *
     * @return $this
     */
    public function setLearnerId($learner_id)
    {
        $this->container['learner_id'] = $learner_id;

        return $this;
    }

    /**
     * Gets learner_number_id
     *
     * @return int
     */
    public function getLearnerNumberId()
    {
        return $this->container['learner_number_id'];
    }

    /**
     * Sets learner_number_id
     *
     * @param int $learner_number_id See entity Learner
     *
     * @return $this
     */
    public function setLearnerNumberId($learner_number_id)
    {
        $this->container['learner_number_id'] = $learner_number_id;

        return $this;
    }

    /**
     * Gets course_offer_id
     *
     * @return int
     */
    public function getCourseOfferId()
    {
        return $this->container['course_offer_id'];
    }

    /**
     * Sets course_offer_id
     *
     * @param int $course_offer_id See entity CourseOffers
     *
     * @return $this
     */
    public function setCourseOfferId($course_offer_id)
    {
        $this->container['course_offer_id'] = $course_offer_id;

        return $this;
    }

    /**
     * Gets previous_identifier
     *
     * @return string
     */
    public function getPreviousIdentifier()
    {
        return $this->container['previous_identifier'];
    }

    /**
     * Sets previous_identifier
     *
     * @param string $previous_identifier The previous identifier associated with the course enrolment
     *
     * @return $this
     */
    public function setPreviousIdentifier($previous_identifier)
    {
        $this->container['previous_identifier'] = $previous_identifier;

        return $this;
    }

    /**
     * Gets opportunity_id
     *
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->container['opportunity_id'];
    }

    /**
     * Sets opportunity_id
     *
     * @param int $opportunity_id See entity Opportunity
     *
     * @return $this
     */
    public function setOpportunityId($opportunity_id)
    {
        $this->container['opportunity_id'] = $opportunity_id;

        return $this;
    }

    /**
     * Gets enrolment_status_id
     *
     * @return int
     */
    public function getEnrolmentStatusId()
    {
        return $this->container['enrolment_status_id'];
    }

    /**
     * Sets enrolment_status_id
     *
     * @param int $enrolment_status_id See combo EnrolmentStatuses
     *
     * @return $this
     */
    public function setEnrolmentStatusId($enrolment_status_id)
    {
        $this->container['enrolment_status_id'] = $enrolment_status_id;

        return $this;
    }

    /**
     * Gets enrolment_status_reason_id
     *
     * @return int
     */
    public function getEnrolmentStatusReasonId()
    {
        return $this->container['enrolment_status_reason_id'];
    }

    /**
     * Sets enrolment_status_reason_id
     *
     * @param int $enrolment_status_reason_id See combo EnrolmentStatusReasons
     *
     * @return $this
     */
    public function setEnrolmentStatusReasonId($enrolment_status_reason_id)
    {
        $this->container['enrolment_status_reason_id'] = $enrolment_status_reason_id;

        return $this;
    }

    /**
     * Gets study_mode_id
     *
     * @return int
     */
    public function getStudyModeId()
    {
        return $this->container['study_mode_id'];
    }

    /**
     * Sets study_mode_id
     *
     * @param int $study_mode_id See combo StudyModes
     *
     * @return $this
     */
    public function setStudyModeId($study_mode_id)
    {
        $this->container['study_mode_id'] = $study_mode_id;

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
     * @param int $target_group_id AU and NZ. See combo TargetGroupsCourseEnrolment
     *
     * @return $this
     */
    public function setTargetGroupId($target_group_id)
    {
        $this->container['target_group_id'] = $target_group_id;

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
     * @param int $coordinator_id See entity Coordinators
     *
     * @return $this
     */
    public function setCoordinatorId($coordinator_id)
    {
        $this->container['coordinator_id'] = $coordinator_id;

        return $this;
    }

    /**
     * Gets trainer_id
     *
     * @return int
     */
    public function getTrainerId()
    {
        return $this->container['trainer_id'];
    }

    /**
     * Sets trainer_id
     *
     * @param int $trainer_id See entity Trainers
     *
     * @return $this
     */
    public function setTrainerId($trainer_id)
    {
        $this->container['trainer_id'] = $trainer_id;

        return $this;
    }

    /**
     * Gets assessor_id
     *
     * @return int
     */
    public function getAssessorId()
    {
        return $this->container['assessor_id'];
    }

    /**
     * Sets assessor_id
     *
     * @param int $assessor_id See entity Assessors
     *
     * @return $this
     */
    public function setAssessorId($assessor_id)
    {
        $this->container['assessor_id'] = $assessor_id;

        return $this;
    }

    /**
     * Gets completion_pathway_id
     *
     * @return int
     */
    public function getCompletionPathwayId()
    {
        return $this->container['completion_pathway_id'];
    }

    /**
     * Sets completion_pathway_id
     *
     * @param int $completion_pathway_id See combo Completion Pathway
     *
     * @return $this
     */
    public function setCompletionPathwayId($completion_pathway_id)
    {
        $this->container['completion_pathway_id'] = $completion_pathway_id;

        return $this;
    }

    /**
     * Gets commenced_at_school_flag_id
     *
     * @return string
     */
    public function getCommencedAtSchoolFlagId()
    {
        return $this->container['commenced_at_school_flag_id'];
    }

    /**
     * Sets commenced_at_school_flag_id
     *
     * @param string $commenced_at_school_flag_id Commenced at School Flag Id
     *
     * @return $this
     */
    public function setCommencedAtSchoolFlagId($commenced_at_school_flag_id)
    {
        $this->container['commenced_at_school_flag_id'] = $commenced_at_school_flag_id;

        return $this;
    }

    /**
     * Gets ecoe_number
     *
     * @return string
     */
    public function getEcoeNumber()
    {
        return $this->container['ecoe_number'];
    }

    /**
     * Sets ecoe_number
     *
     * @param string $ecoe_number AU only. Electronic Confirmation of Enrolment number
     *
     * @return $this
     */
    public function setEcoeNumber($ecoe_number)
    {
        $this->container['ecoe_number'] = $ecoe_number;

        return $this;
    }

    /**
     * Gets student_number
     *
     * @return string
     */
    public function getStudentNumber()
    {
        return $this->container['student_number'];
    }

    /**
     * Sets student_number
     *
     * @param string $student_number AU and NZ. Student Number for internal use
     *
     * @return $this
     */
    public function setStudentNumber($student_number)
    {
        $this->container['student_number'] = $student_number;

        return $this;
    }

    /**
     * Gets learner_position_id
     *
     * @return int
     */
    public function getLearnerPositionId()
    {
        return $this->container['learner_position_id'];
    }

    /**
     * Sets learner_position_id
     *
     * @param int $learner_position_id See entity LearnerPositions
     *
     * @return $this
     */
    public function setLearnerPositionId($learner_position_id)
    {
        $this->container['learner_position_id'] = $learner_position_id;

        return $this;
    }

    /**
     * Gets studylink_status_id
     *
     * @return int
     */
    public function getStudylinkStatusId()
    {
        return $this->container['studylink_status_id'];
    }

    /**
     * Sets studylink_status_id
     *
     * @param int $studylink_status_id NZ Only. See combo StudylinkStatuses
     *
     * @return $this
     */
    public function setStudylinkStatusId($studylink_status_id)
    {
        $this->container['studylink_status_id'] = $studylink_status_id;

        return $this;
    }

    /**
     * Gets studylink_status_reason_id
     *
     * @return int
     */
    public function getStudylinkStatusReasonId()
    {
        return $this->container['studylink_status_reason_id'];
    }

    /**
     * Sets studylink_status_reason_id
     *
     * @param int $studylink_status_reason_id NZ Only. See combo StudylinkStatusReasons
     *
     * @return $this
     */
    public function setStudylinkStatusReasonId($studylink_status_reason_id)
    {
        $this->container['studylink_status_reason_id'] = $studylink_status_reason_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Course Enrolment Start Date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date Course Enrolment End Date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets enrolment_duration
     *
     * @return string
     */
    public function getEnrolmentDuration()
    {
        return $this->container['enrolment_duration'];
    }

    /**
     * Sets enrolment_duration
     *
     * @param string $enrolment_duration Enrolment duration
     *
     * @return $this
     */
    public function setEnrolmentDuration($enrolment_duration)
    {
        $this->container['enrolment_duration'] = $enrolment_duration;

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
     * @param int $duration_type_id See combo DurationTypes
     *
     * @return $this
     */
    public function setDurationTypeId($duration_type_id)
    {
        $this->container['duration_type_id'] = $duration_type_id;

        return $this;
    }

    /**
     * Gets actual_end_date
     *
     * @return \DateTime
     */
    public function getActualEndDate()
    {
        return $this->container['actual_end_date'];
    }

    /**
     * Sets actual_end_date
     *
     * @param \DateTime $actual_end_date Course Enrolment Actual End Date
     *
     * @return $this
     */
    public function setActualEndDate($actual_end_date)
    {
        $this->container['actual_end_date'] = $actual_end_date;

        return $this;
    }

    /**
     * Gets course_commencement_date
     *
     * @return \DateTime
     */
    public function getCourseCommencementDate()
    {
        return $this->container['course_commencement_date'];
    }

    /**
     * Sets course_commencement_date
     *
     * @param \DateTime $course_commencement_date Course Enrolment Commencement Date
     *
     * @return $this
     */
    public function setCourseCommencementDate($course_commencement_date)
    {
        $this->container['course_commencement_date'] = $course_commencement_date;

        return $this;
    }

    /**
     * Gets tuition_duration
     *
     * @return double
     */
    public function getTuitionDuration()
    {
        return $this->container['tuition_duration'];
    }

    /**
     * Sets tuition_duration
     *
     * @param double $tuition_duration Enrolment Duration
     *
     * @return $this
     */
    public function setTuitionDuration($tuition_duration)
    {
        $this->container['tuition_duration'] = $tuition_duration;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime $expiry_date Date the course enrolment expires
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets expected_award_date
     *
     * @return \DateTime
     */
    public function getExpectedAwardDate()
    {
        return $this->container['expected_award_date'];
    }

    /**
     * Sets expected_award_date
     *
     * @param \DateTime $expected_award_date Expected date of when the qualification will be awarded
     *
     * @return $this
     */
    public function setExpectedAwardDate($expected_award_date)
    {
        $this->container['expected_award_date'] = $expected_award_date;

        return $this;
    }

    /**
     * Gets qualification_issued_flag
     *
     * @return bool
     */
    public function getQualificationIssuedFlag()
    {
        return $this->container['qualification_issued_flag'];
    }

    /**
     * Sets qualification_issued_flag
     *
     * @param bool $qualification_issued_flag To indicate if a qualification has been issued or not
     *
     * @return $this
     */
    public function setQualificationIssuedFlag($qualification_issued_flag)
    {
        $this->container['qualification_issued_flag'] = $qualification_issued_flag;

        return $this;
    }

    /**
     * Gets qualification_issued_date
     *
     * @return \DateTime
     */
    public function getQualificationIssuedDate()
    {
        return $this->container['qualification_issued_date'];
    }

    /**
     * Sets qualification_issued_date
     *
     * @param \DateTime $qualification_issued_date Date the qualification has been issued
     *
     * @return $this
     */
    public function setQualificationIssuedDate($qualification_issued_date)
    {
        $this->container['qualification_issued_date'] = $qualification_issued_date;

        return $this;
    }

    /**
     * Gets training_plan_issued_flag
     *
     * @return bool
     */
    public function getTrainingPlanIssuedFlag()
    {
        return $this->container['training_plan_issued_flag'];
    }

    /**
     * Sets training_plan_issued_flag
     *
     * @param bool $training_plan_issued_flag AU only. To indicate if the training plan has been issued or not
     *
     * @return $this
     */
    public function setTrainingPlanIssuedFlag($training_plan_issued_flag)
    {
        $this->container['training_plan_issued_flag'] = $training_plan_issued_flag;

        return $this;
    }

    /**
     * Gets training_plan_sign_date
     *
     * @return \DateTime
     */
    public function getTrainingPlanSignDate()
    {
        return $this->container['training_plan_sign_date'];
    }

    /**
     * Sets training_plan_sign_date
     *
     * @param \DateTime $training_plan_sign_date AU only. Date the training plan is signed
     *
     * @return $this
     */
    public function setTrainingPlanSignDate($training_plan_sign_date)
    {
        $this->container['training_plan_sign_date'] = $training_plan_sign_date;

        return $this;
    }

    /**
     * Gets unique_training_hours
     *
     * @return int
     */
    public function getUniqueTrainingHours()
    {
        return $this->container['unique_training_hours'];
    }

    /**
     * Sets unique_training_hours
     *
     * @param int $unique_training_hours AU and NZ. AU: Program Unique Supervised Hours NZ: The training hours
     *
     * @return $this
     */
    public function setUniqueTrainingHours($unique_training_hours)
    {
        $this->container['unique_training_hours'] = $unique_training_hours;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date AU only. Earliest date the learner incurred cost
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets parchment_number
     *
     * @return string
     */
    public function getParchmentNumber()
    {
        return $this->container['parchment_number'];
    }

    /**
     * Sets parchment_number
     *
     * @param string $parchment_number AU and NZ. The parchment number
     *
     * @return $this
     */
    public function setParchmentNumber($parchment_number)
    {
        $this->container['parchment_number'] = $parchment_number;

        return $this;
    }

    /**
     * Gets enquiry_date
     *
     * @return \DateTime
     */
    public function getEnquiryDate()
    {
        return $this->container['enquiry_date'];
    }

    /**
     * Sets enquiry_date
     *
     * @param \DateTime $enquiry_date Date an enquiry for the enrolment was made
     *
     * @return $this
     */
    public function setEnquiryDate($enquiry_date)
    {
        $this->container['enquiry_date'] = $enquiry_date;

        return $this;
    }

    /**
     * Gets enrolment_date
     *
     * @return \DateTime
     */
    public function getEnrolmentDate()
    {
        return $this->container['enrolment_date'];
    }

    /**
     * Sets enrolment_date
     *
     * @param \DateTime $enrolment_date Date when the enrolment was created
     *
     * @return $this
     */
    public function setEnrolmentDate($enrolment_date)
    {
        $this->container['enrolment_date'] = $enrolment_date;

        return $this;
    }

    /**
     * Gets re_enrolment_date
     *
     * @return \DateTime
     */
    public function getReEnrolmentDate()
    {
        return $this->container['re_enrolment_date'];
    }

    /**
     * Sets re_enrolment_date
     *
     * @param \DateTime $re_enrolment_date AU and NZ. Date when the learner was re-enrolled
     *
     * @return $this
     */
    public function setReEnrolmentDate($re_enrolment_date)
    {
        $this->container['re_enrolment_date'] = $re_enrolment_date;

        return $this;
    }

    /**
     * Gets orientation_date
     *
     * @return \DateTime
     */
    public function getOrientationDate()
    {
        return $this->container['orientation_date'];
    }

    /**
     * Sets orientation_date
     *
     * @param \DateTime $orientation_date AU and NZ. Orientation Date of the enrolment
     *
     * @return $this
     */
    public function setOrientationDate($orientation_date)
    {
        $this->container['orientation_date'] = $orientation_date;

        return $this;
    }

    /**
     * Gets for_avetmiss_flag
     *
     * @return bool
     */
    public function getForAvetmissFlag()
    {
        return $this->container['for_avetmiss_flag'];
    }

    /**
     * Sets for_avetmiss_flag
     *
     * @param bool $for_avetmiss_flag AU only. To indicate if the enrolment is for AVETMISS reporting
     *
     * @return $this
     */
    public function setForAvetmissFlag($for_avetmiss_flag)
    {
        $this->container['for_avetmiss_flag'] = $for_avetmiss_flag;

        return $this;
    }

    /**
     * Gets previous_course_identifier
     *
     * @return string
     */
    public function getPreviousCourseIdentifier()
    {
        return $this->container['previous_course_identifier'];
    }

    /**
     * Sets previous_course_identifier
     *
     * @param string $previous_course_identifier AU only. The superseded course identifier, if applicable
     *
     * @return $this
     */
    public function setPreviousCourseIdentifier($previous_course_identifier)
    {
        $this->container['previous_course_identifier'] = $previous_course_identifier;

        return $this;
    }

    /**
     * Gets registration_number
     *
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->container['registration_number'];
    }

    /**
     * Sets registration_number
     *
     * @param string $registration_number AU only. Traineeship number for Course Enrolment
     *
     * @return $this
     */
    public function setRegistrationNumber($registration_number)
    {
        $this->container['registration_number'] = $registration_number;

        return $this;
    }

    /**
     * Gets program_status_id
     *
     * @return int
     */
    public function getProgramStatusId()
    {
        return $this->container['program_status_id'];
    }

    /**
     * Sets program_status_id
     *
     * @param int $program_status_id AU only. See combo ProgramStatuses
     *
     * @return $this
     */
    public function setProgramStatusId($program_status_id)
    {
        $this->container['program_status_id'] = $program_status_id;

        return $this;
    }

    /**
     * Gets contract_type_id
     *
     * @return int
     */
    public function getContractTypeId()
    {
        return $this->container['contract_type_id'];
    }

    /**
     * Sets contract_type_id
     *
     * @param int $contract_type_id AU only. See combo ContractTypes
     *
     * @return $this
     */
    public function setContractTypeId($contract_type_id)
    {
        $this->container['contract_type_id'] = $contract_type_id;

        return $this;
    }

    /**
     * Gets av_study_reason_id
     *
     * @return int
     */
    public function getAvStudyReasonId()
    {
        return $this->container['av_study_reason_id'];
    }

    /**
     * Sets av_study_reason_id
     *
     * @param int $av_study_reason_id AU only. See combo AvStudyReasons
     *
     * @return $this
     */
    public function setAvStudyReasonId($av_study_reason_id)
    {
        $this->container['av_study_reason_id'] = $av_study_reason_id;

        return $this;
    }

    /**
     * Gets commencing_course_id
     *
     * @return int
     */
    public function getCommencingCourseId()
    {
        return $this->container['commencing_course_id'];
    }

    /**
     * Sets commencing_course_id
     *
     * @param int $commencing_course_id AU only. See combo CommencingCourses
     *
     * @return $this
     */
    public function setCommencingCourseId($commencing_course_id)
    {
        $this->container['commencing_course_id'] = $commencing_course_id;

        return $this;
    }

    /**
     * Gets eligibility_exemption_flag
     *
     * @return string
     */
    public function getEligibilityExemptionFlag()
    {
        return $this->container['eligibility_exemption_flag'];
    }

    /**
     * Sets eligibility_exemption_flag
     *
     * @param string $eligibility_exemption_flag AU only. To indicate if the learner is eligible for an exemption
     *
     * @return $this
     */
    public function setEligibilityExemptionFlag($eligibility_exemption_flag)
    {
        $this->container['eligibility_exemption_flag'] = $eligibility_exemption_flag;

        return $this;
    }

    /**
     * Gets funding_eligible_flag
     *
     * @return bool
     */
    public function getFundingEligibleFlag()
    {
        return $this->container['funding_eligible_flag'];
    }

    /**
     * Sets funding_eligible_flag
     *
     * @param bool $funding_eligible_flag AU only. To indicate if the learner is eligible for funding or not
     *
     * @return $this
     */
    public function setFundingEligibleFlag($funding_eligible_flag)
    {
        $this->container['funding_eligible_flag'] = $funding_eligible_flag;

        return $this;
    }

    /**
     * Gets learner_fees_other
     *
     * @return double
     */
    public function getLearnerFeesOther()
    {
        return $this->container['learner_fees_other'];
    }

    /**
     * Sets learner_fees_other
     *
     * @param double $learner_fees_other AU only. Other fees incurred by the learner
     *
     * @return $this
     */
    public function setLearnerFeesOther($learner_fees_other)
    {
        $this->container['learner_fees_other'] = $learner_fees_other;

        return $this;
    }

    /**
     * Gets individual_contract_id
     *
     * @return string
     */
    public function getIndividualContractId()
    {
        return $this->container['individual_contract_id'];
    }

    /**
     * Sets individual_contract_id
     *
     * @param string $individual_contract_id AU only. The individual contract ID
     *
     * @return $this
     */
    public function setIndividualContractId($individual_contract_id)
    {
        $this->container['individual_contract_id'] = $individual_contract_id;

        return $this;
    }

    /**
     * Gets individual_contract_expiry_date
     *
     * @return \DateTime
     */
    public function getIndividualContractExpiryDate()
    {
        return $this->container['individual_contract_expiry_date'];
    }

    /**
     * Sets individual_contract_expiry_date
     *
     * @param \DateTime $individual_contract_expiry_date AU only. Date when the individual contract ID expires
     *
     * @return $this
     */
    public function setIndividualContractExpiryDate($individual_contract_expiry_date)
    {
        $this->container['individual_contract_expiry_date'] = $individual_contract_expiry_date;

        return $this;
    }

    /**
     * Gets fh_accessed_flag
     *
     * @return string
     */
    public function getFhAccessedFlag()
    {
        return $this->container['fh_accessed_flag'];
    }

    /**
     * Sets fh_accessed_flag
     *
     * @param string $fh_accessed_flag AU only. To indicate if the learner is receiving VSL or FeeHelp assistance
     *
     * @return $this
     */
    public function setFhAccessedFlag($fh_accessed_flag)
    {
        $this->container['fh_accessed_flag'] = $fh_accessed_flag;

        return $this;
    }

    /**
     * Gets fh_eligible_flag
     *
     * @return bool
     */
    public function getFhEligibleFlag()
    {
        return $this->container['fh_eligible_flag'];
    }

    /**
     * Sets fh_eligible_flag
     *
     * @param bool $fh_eligible_flag AU only. To indicate if the learner is eligible for VSL or FeeHelp
     *
     * @return $this
     */
    public function setFhEligibleFlag($fh_eligible_flag)
    {
        $this->container['fh_eligible_flag'] = $fh_eligible_flag;

        return $this;
    }

    /**
     * Gets estimated_yearly_eftsl
     *
     * @return string
     */
    public function getEstimatedYearlyEftsl()
    {
        return $this->container['estimated_yearly_eftsl'];
    }

    /**
     * Sets estimated_yearly_eftsl
     *
     * @param string $estimated_yearly_eftsl AU FH/VSL only. Estimated EFTSL per year
     *
     * @return $this
     */
    public function setEstimatedYearlyEftsl($estimated_yearly_eftsl)
    {
        $this->container['estimated_yearly_eftsl'] = $estimated_yearly_eftsl;

        return $this;
    }

    /**
     * Gets commencing_student_identifier
     *
     * @return int
     */
    public function getCommencingStudentIdentifier()
    {
        return $this->container['commencing_student_identifier'];
    }

    /**
     * Sets commencing_student_identifier
     *
     * @param int $commencing_student_identifier AU FH/VSL only. See combo CommencingStudentIdentifiers
     *
     * @return $this
     */
    public function setCommencingStudentIdentifier($commencing_student_identifier)
    {
        $this->container['commencing_student_identifier'] = $commencing_student_identifier;

        return $this;
    }

    /**
     * Gets fee_type_indicator_id
     *
     * @return int
     */
    public function getFeeTypeIndicatorId()
    {
        return $this->container['fee_type_indicator_id'];
    }

    /**
     * Sets fee_type_indicator_id
     *
     * @param int $fee_type_indicator_id AU FH/VSL only. See combo FeeTypeIndicators
     *
     * @return $this
     */
    public function setFeeTypeIndicatorId($fee_type_indicator_id)
    {
        $this->container['fee_type_indicator_id'] = $fee_type_indicator_id;

        return $this;
    }

    /**
     * Gets admission_basis_id
     *
     * @return int
     */
    public function getAdmissionBasisId()
    {
        return $this->container['admission_basis_id'];
    }

    /**
     * Sets admission_basis_id
     *
     * @param int $admission_basis_id AU FH/VSL only. See combo AdmissionBasis
     *
     * @return $this
     */
    public function setAdmissionBasisId($admission_basis_id)
    {
        $this->container['admission_basis_id'] = $admission_basis_id;

        return $this;
    }

    /**
     * Gets attendance_type_id
     *
     * @return int
     */
    public function getAttendanceTypeId()
    {
        return $this->container['attendance_type_id'];
    }

    /**
     * Sets attendance_type_id
     *
     * @param int $attendance_type_id AU FH/VSL only. See combo AttendanceTypes
     *
     * @return $this
     */
    public function setAttendanceTypeId($attendance_type_id)
    {
        $this->container['attendance_type_id'] = $attendance_type_id;

        return $this;
    }

    /**
     * Gets fh_study_reason_id
     *
     * @return int
     */
    public function getFhStudyReasonId()
    {
        return $this->container['fh_study_reason_id'];
    }

    /**
     * Sets fh_study_reason_id
     *
     * @param int $fh_study_reason_id AU FH/VSL only. See combo FhStudyReasons
     *
     * @return $this
     */
    public function setFhStudyReasonId($fh_study_reason_id)
    {
        $this->container['fh_study_reason_id'] = $fh_study_reason_id;

        return $this;
    }

    /**
     * Gets specialisation_field_of_education_id
     *
     * @return int
     */
    public function getSpecialisationFieldOfEducationId()
    {
        return $this->container['specialisation_field_of_education_id'];
    }

    /**
     * Sets specialisation_field_of_education_id
     *
     * @param int $specialisation_field_of_education_id AU FH only. See combo FhFieldOfEducations
     *
     * @return $this
     */
    public function setSpecialisationFieldOfEducationId($specialisation_field_of_education_id)
    {
        $this->container['specialisation_field_of_education_id'] = $specialisation_field_of_education_id;

        return $this;
    }

    /**
     * Gets scholarship_type_id
     *
     * @return int
     */
    public function getScholarshipTypeId()
    {
        return $this->container['scholarship_type_id'];
    }

    /**
     * Sets scholarship_type_id
     *
     * @param int $scholarship_type_id AU FH only. See combo ScholarshipTypes
     *
     * @return $this
     */
    public function setScholarshipTypeId($scholarship_type_id)
    {
        $this->container['scholarship_type_id'] = $scholarship_type_id;

        return $this;
    }

    /**
     * Gets previous_rts_efts
     *
     * @return double
     */
    public function getPreviousRtsEfts()
    {
        return $this->container['previous_rts_efts'];
    }

    /**
     * Sets previous_rts_efts
     *
     * @param double $previous_rts_efts AU FH only. The previous EFTSL value of Higher Education provider under the Research Training Scheme
     *
     * @return $this
     */
    public function setPreviousRtsEfts($previous_rts_efts)
    {
        $this->container['previous_rts_efts'] = $previous_rts_efts;

        return $this;
    }

    /**
     * Gets completion_percentage
     *
     * @return int
     */
    public function getCompletionPercentage()
    {
        return $this->container['completion_percentage'];
    }

    /**
     * Sets completion_percentage
     *
     * @param int $completion_percentage AU FH only. The percentage of course completion
     *
     * @return $this
     */
    public function setCompletionPercentage($completion_percentage)
    {
        $this->container['completion_percentage'] = $completion_percentage;

        return $this;
    }

    /**
     * Gets joint_degree_provider_code
     *
     * @return string
     */
    public function getJointDegreeProviderCode()
    {
        return $this->container['joint_degree_provider_code'];
    }

    /**
     * Sets joint_degree_provider_code
     *
     * @param string $joint_degree_provider_code AU FH only. Provider code if joint degree was undertaken
     *
     * @return $this
     */
    public function setJointDegreeProviderCode($joint_degree_provider_code)
    {
        $this->container['joint_degree_provider_code'] = $joint_degree_provider_code;

        return $this;
    }

    /**
     * Gets separation_status_id
     *
     * @return int
     */
    public function getSeparationStatusId()
    {
        return $this->container['separation_status_id'];
    }

    /**
     * Sets separation_status_id
     *
     * @param int $separation_status_id AU FH only. See combo SeparationStatuses
     *
     * @return $this
     */
    public function setSeparationStatusId($separation_status_id)
    {
        $this->container['separation_status_id'] = $separation_status_id;

        return $this;
    }

    /**
     * Gets ecaf_id
     *
     * @return int
     */
    public function getEcafId()
    {
        return $this->container['ecaf_id'];
    }

    /**
     * Sets ecaf_id
     *
     * @param int $ecaf_id AU FH/VSL only. ECAF Identifier
     *
     * @return $this
     */
    public function setEcafId($ecaf_id)
    {
        $this->container['ecaf_id'] = $ecaf_id;

        return $this;
    }

    /**
     * Gets ecaf_status
     *
     * @return string
     */
    public function getEcafStatus()
    {
        return $this->container['ecaf_status'];
    }

    /**
     * Sets ecaf_status
     *
     * @param string $ecaf_status AU FH/VSL only. Current ECAF Status
     *
     * @return $this
     */
    public function setEcafStatus($ecaf_status)
    {
        $this->container['ecaf_status'] = $ecaf_status;

        return $this;
    }

    /**
     * Gets ecaf_status_reason
     *
     * @return string
     */
    public function getEcafStatusReason()
    {
        return $this->container['ecaf_status_reason'];
    }

    /**
     * Sets ecaf_status_reason
     *
     * @param string $ecaf_status_reason AU FH/VSL only. The ECAF status reason
     *
     * @return $this
     */
    public function setEcafStatusReason($ecaf_status_reason)
    {
        $this->container['ecaf_status_reason'] = $ecaf_status_reason;

        return $this;
    }

    /**
     * Gets ecaf_notes
     *
     * @return string
     */
    public function getEcafNotes()
    {
        return $this->container['ecaf_notes'];
    }

    /**
     * Sets ecaf_notes
     *
     * @param string $ecaf_notes AU FH/VSL only. Any related ECAF notes
     *
     * @return $this
     */
    public function setEcafNotes($ecaf_notes)
    {
        $this->container['ecaf_notes'] = $ecaf_notes;

        return $this;
    }

    /**
     * Gets ecaf_last_modified_date
     *
     * @return \DateTime
     */
    public function getEcafLastModifiedDate()
    {
        return $this->container['ecaf_last_modified_date'];
    }

    /**
     * Sets ecaf_last_modified_date
     *
     * @param \DateTime $ecaf_last_modified_date AU FH/VSL only. Date when ECAF record was last modified
     *
     * @return $this
     */
    public function setEcafLastModifiedDate($ecaf_last_modified_date)
    {
        $this->container['ecaf_last_modified_date'] = $ecaf_last_modified_date;

        return $this;
    }

    /**
     * Gets ecaf_census_date
     *
     * @return \DateTime
     */
    public function getEcafCensusDate()
    {
        return $this->container['ecaf_census_date'];
    }

    /**
     * Sets ecaf_census_date
     *
     * @param \DateTime $ecaf_census_date AU FH/VSL only. ECAF census date
     *
     * @return $this
     */
    public function setEcafCensusDate($ecaf_census_date)
    {
        $this->container['ecaf_census_date'] = $ecaf_census_date;

        return $this;
    }

    /**
     * Gets for_uip_flag
     *
     * @return bool
     */
    public function getForUipFlag()
    {
        return $this->container['for_uip_flag'];
    }

    /**
     * Sets for_uip_flag
     *
     * @param bool $for_uip_flag NZ only. To indicate if the enrolment is for UIP reporting
     *
     * @return $this
     */
    public function setForUipFlag($for_uip_flag)
    {
        $this->container['for_uip_flag'] = $for_uip_flag;

        return $this;
    }

    /**
     * Gets fund_source_id
     *
     * @return int
     */
    public function getFundSourceId()
    {
        return $this->container['fund_source_id'];
    }

    /**
     * Sets fund_source_id
     *
     * @param int $fund_source_id NZ only. See combo FundSources
     *
     * @return $this
     */
    public function setFundSourceId($fund_source_id)
    {
        $this->container['fund_source_id'] = $fund_source_id;

        return $this;
    }

    /**
     * Gets foreign_fee
     *
     * @return double
     */
    public function getForeignFee()
    {
        return $this->container['foreign_fee'];
    }

    /**
     * Sets foreign_fee
     *
     * @param double $foreign_fee NZ only. Fees paid by international fee-paying students
     *
     * @return $this
     */
    public function setForeignFee($foreign_fee)
    {
        $this->container['foreign_fee'] = $foreign_fee;

        return $this;
    }

    /**
     * Gets main_subject1_id
     *
     * @return int
     */
    public function getMainSubject1Id()
    {
        return $this->container['main_subject1_id'];
    }

    /**
     * Sets main_subject1_id
     *
     * @param int $main_subject1_id NZ only. See combo MainSubjects
     *
     * @return $this
     */
    public function setMainSubject1Id($main_subject1_id)
    {
        $this->container['main_subject1_id'] = $main_subject1_id;

        return $this;
    }

    /**
     * Gets main_subject2_id
     *
     * @return int
     */
    public function getMainSubject2Id()
    {
        return $this->container['main_subject2_id'];
    }

    /**
     * Sets main_subject2_id
     *
     * @param int $main_subject2_id NZ only. See combo MainSubjects
     *
     * @return $this
     */
    public function setMainSubject2Id($main_subject2_id)
    {
        $this->container['main_subject2_id'] = $main_subject2_id;

        return $this;
    }

    /**
     * Gets main_subject3_id
     *
     * @return int
     */
    public function getMainSubject3Id()
    {
        return $this->container['main_subject3_id'];
    }

    /**
     * Sets main_subject3_id
     *
     * @param int $main_subject3_id NZ only. See combo MainSubjects
     *
     * @return $this
     */
    public function setMainSubject3Id($main_subject3_id)
    {
        $this->container['main_subject3_id'] = $main_subject3_id;

        return $this;
    }

    /**
     * Gets nzqa_return_to_provider_flag
     *
     * @return bool
     */
    public function getNzqaReturnToProviderFlag()
    {
        return $this->container['nzqa_return_to_provider_flag'];
    }

    /**
     * Sets nzqa_return_to_provider_flag
     *
     * @param bool $nzqa_return_to_provider_flag NZ only. To indicate if the certificate should be returned to the PTE
     *
     * @return $this
     */
    public function setNzqaReturnToProviderFlag($nzqa_return_to_provider_flag)
    {
        $this->container['nzqa_return_to_provider_flag'] = $nzqa_return_to_provider_flag;

        return $this;
    }

    /**
     * Gets nzqa_awarding_provider_id
     *
     * @return int
     */
    public function getNzqaAwardingProviderId()
    {
        return $this->container['nzqa_awarding_provider_id'];
    }

    /**
     * Sets nzqa_awarding_provider_id
     *
     * @param int $nzqa_awarding_provider_id NZ only. See combo NzqaAwardingProviders
     *
     * @return $this
     */
    public function setNzqaAwardingProviderId($nzqa_awarding_provider_id)
    {
        $this->container['nzqa_awarding_provider_id'] = $nzqa_awarding_provider_id;

        return $this;
    }

    /**
     * Gets nzqa_strand
     *
     * @return string
     */
    public function getNzqaStrand()
    {
        return $this->container['nzqa_strand'];
    }

    /**
     * Sets nzqa_strand
     *
     * @param string $nzqa_strand NZ only. Strand for NZQA reporting
     *
     * @return $this
     */
    public function setNzqaStrand($nzqa_strand)
    {
        $this->container['nzqa_strand'] = $nzqa_strand;

        return $this;
    }

    /**
     * Gets nzqa_optional_strand
     *
     * @return string
     */
    public function getNzqaOptionalStrand()
    {
        return $this->container['nzqa_optional_strand'];
    }

    /**
     * Sets nzqa_optional_strand
     *
     * @param string $nzqa_optional_strand NZ only. Optional Strand for NZQA reporting
     *
     * @return $this
     */
    public function setNzqaOptionalStrand($nzqa_optional_strand)
    {
        $this->container['nzqa_optional_strand'] = $nzqa_optional_strand;

        return $this;
    }

    /**
     * Gets nzqa_request_type_id
     *
     * @return int
     */
    public function getNzqaRequestTypeId()
    {
        return $this->container['nzqa_request_type_id'];
    }

    /**
     * Sets nzqa_request_type_id
     *
     * @param int $nzqa_request_type_id NZ only. See combo NzqaRequestTypes
     *
     * @return $this
     */
    public function setNzqaRequestTypeId($nzqa_request_type_id)
    {
        $this->container['nzqa_request_type_id'] = $nzqa_request_type_id;

        return $this;
    }

    /**
     * Gets managed_apprenticeship_id
     *
     * @return int
     */
    public function getManagedApprenticeshipId()
    {
        return $this->container['managed_apprenticeship_id'];
    }

    /**
     * Sets managed_apprenticeship_id
     *
     * @param int $managed_apprenticeship_id NZ only. See combo ManagedApprenticeships
     *
     * @return $this
     */
    public function setManagedApprenticeshipId($managed_apprenticeship_id)
    {
        $this->container['managed_apprenticeship_id'] = $managed_apprenticeship_id;

        return $this;
    }

    /**
     * Gets aac_id
     *
     * @return int
     */
    public function getAacId()
    {
        return $this->container['aac_id'];
    }

    /**
     * Sets aac_id
     *
     * @param int $aac_id AU only. See combo Aacs
     *
     * @return $this
     */
    public function setAacId($aac_id)
    {
        $this->container['aac_id'] = $aac_id;

        return $this;
    }

    /**
     * Gets aac_sales_officer
     *
     * @return string
     */
    public function getAacSalesOfficer()
    {
        return $this->container['aac_sales_officer'];
    }

    /**
     * Sets aac_sales_officer
     *
     * @param string $aac_sales_officer AU only. Name of the AAC Sales Officer
     *
     * @return $this
     */
    public function setAacSalesOfficer($aac_sales_officer)
    {
        $this->container['aac_sales_officer'] = $aac_sales_officer;

        return $this;
    }

    /**
     * Gets aac_sign_date
     *
     * @return \DateTime
     */
    public function getAacSignDate()
    {
        return $this->container['aac_sign_date'];
    }

    /**
     * Sets aac_sign_date
     *
     * @param \DateTime $aac_sign_date AU only. AAC Sign Date
     *
     * @return $this
     */
    public function setAacSignDate($aac_sign_date)
    {
        $this->container['aac_sign_date'] = $aac_sign_date;

        return $this;
    }

    /**
     * Gets sales_person_id
     *
     * @return int
     */
    public function getSalesPersonId()
    {
        return $this->container['sales_person_id'];
    }

    /**
     * Sets sales_person_id
     *
     * @param int $sales_person_id See entity SalesPerson
     *
     * @return $this
     */
    public function setSalesPersonId($sales_person_id)
    {
        $this->container['sales_person_id'] = $sales_person_id;

        return $this;
    }

    /**
     * Gets certificate1
     *
     * @return string
     */
    public function getCertificate1()
    {
        return $this->container['certificate1'];
    }

    /**
     * Sets certificate1
     *
     * @param string $certificate1 AU and SG only. Certificate 1 details
     *
     * @return $this
     */
    public function setCertificate1($certificate1)
    {
        $this->container['certificate1'] = $certificate1;

        return $this;
    }

    /**
     * Gets certificate2
     *
     * @return string
     */
    public function getCertificate2()
    {
        return $this->container['certificate2'];
    }

    /**
     * Sets certificate2
     *
     * @param string $certificate2 AU and SG only. Certificate 2 details
     *
     * @return $this
     */
    public function setCertificate2($certificate2)
    {
        $this->container['certificate2'] = $certificate2;

        return $this;
    }

    /**
     * Gets rto_status_id
     *
     * @return int
     */
    public function getRtoStatusId()
    {
        return $this->container['rto_status_id'];
    }

    /**
     * Sets rto_status_id
     *
     * @param int $rto_status_id AU only. See combo RtoStatuses
     *
     * @return $this
     */
    public function setRtoStatusId($rto_status_id)
    {
        $this->container['rto_status_id'] = $rto_status_id;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number AU only. Invoice number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_hours
     *
     * @return int
     */
    public function getInvoiceHours()
    {
        return $this->container['invoice_hours'];
    }

    /**
     * Sets invoice_hours
     *
     * @param int $invoice_hours AU only. Number of hours invoiced
     *
     * @return $this
     */
    public function setInvoiceHours($invoice_hours)
    {
        $this->container['invoice_hours'] = $invoice_hours;

        return $this;
    }

    /**
     * Gets payment_type_id
     *
     * @return int
     */
    public function getPaymentTypeId()
    {
        return $this->container['payment_type_id'];
    }

    /**
     * Sets payment_type_id
     *
     * @param int $payment_type_id AU only. See combo PaymentTypes
     *
     * @return $this
     */
    public function setPaymentTypeId($payment_type_id)
    {
        $this->container['payment_type_id'] = $payment_type_id;

        return $this;
    }

    /**
     * Gets deposit
     *
     * @return double
     */
    public function getDeposit()
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit
     *
     * @param double $deposit AU only. Deposit paid by the learner
     *
     * @return $this
     */
    public function setDeposit($deposit)
    {
        $this->container['deposit'] = $deposit;

        return $this;
    }

    /**
     * Gets rate_id
     *
     * @return int
     */
    public function getRateId()
    {
        return $this->container['rate_id'];
    }

    /**
     * Sets rate_id
     *
     * @param int $rate_id See entity Rates
     *
     * @return $this
     */
    public function setRateId($rate_id)
    {
        $this->container['rate_id'] = $rate_id;

        return $this;
    }

    /**
     * Gets privacy_flag
     *
     * @return bool
     */
    public function getPrivacyFlag()
    {
        return $this->container['privacy_flag'];
    }

    /**
     * Sets privacy_flag
     *
     * @param bool $privacy_flag AU and NZ only. To indicate if the privacy flag is given or not
     *
     * @return $this
     */
    public function setPrivacyFlag($privacy_flag)
    {
        $this->container['privacy_flag'] = $privacy_flag;

        return $this;
    }

    /**
     * Gets lln_flag
     *
     * @return bool
     */
    public function getLlnFlag()
    {
        return $this->container['lln_flag'];
    }

    /**
     * Sets lln_flag
     *
     * @param bool $lln_flag AU and NZ only. To indicate if the Language, Literacy & Numeracy flag is given or not
     *
     * @return $this
     */
    public function setLlnFlag($lln_flag)
    {
        $this->container['lln_flag'] = $lln_flag;

        return $this;
    }

    /**
     * Gets fees_collected1
     *
     * @return double
     */
    public function getFeesCollected1()
    {
        return $this->container['fees_collected1'];
    }

    /**
     * Sets fees_collected1
     *
     * @param double $fees_collected1 AU only. Fees collected in the first year
     *
     * @return $this
     */
    public function setFeesCollected1($fees_collected1)
    {
        $this->container['fees_collected1'] = $fees_collected1;

        return $this;
    }

    /**
     * Gets fees_collected2
     *
     * @return double
     */
    public function getFeesCollected2()
    {
        return $this->container['fees_collected2'];
    }

    /**
     * Sets fees_collected2
     *
     * @param double $fees_collected2 AU only. Fees collected in the second year
     *
     * @return $this
     */
    public function setFeesCollected2($fees_collected2)
    {
        $this->container['fees_collected2'] = $fees_collected2;

        return $this;
    }

    /**
     * Gets fees_collected3
     *
     * @return double
     */
    public function getFeesCollected3()
    {
        return $this->container['fees_collected3'];
    }

    /**
     * Sets fees_collected3
     *
     * @param double $fees_collected3 AU only. Fees collected in the third year
     *
     * @return $this
     */
    public function setFeesCollected3($fees_collected3)
    {
        $this->container['fees_collected3'] = $fees_collected3;

        return $this;
    }

    /**
     * Gets student_arrival_date
     *
     * @return \DateTime
     */
    public function getStudentArrivalDate()
    {
        return $this->container['student_arrival_date'];
    }

    /**
     * Sets student_arrival_date
     *
     * @param \DateTime $student_arrival_date SG only. Date when the learner arrived to commence study
     *
     * @return $this
     */
    public function setStudentArrivalDate($student_arrival_date)
    {
        $this->container['student_arrival_date'] = $student_arrival_date;

        return $this;
    }

    /**
     * Gets medical_insurance_provider
     *
     * @return string
     */
    public function getMedicalInsuranceProvider()
    {
        return $this->container['medical_insurance_provider'];
    }

    /**
     * Sets medical_insurance_provider
     *
     * @param string $medical_insurance_provider SG only. Details of the medical insurance provider
     *
     * @return $this
     */
    public function setMedicalInsuranceProvider($medical_insurance_provider)
    {
        $this->container['medical_insurance_provider'] = $medical_insurance_provider;

        return $this;
    }

    /**
     * Gets student_pass_requirement_id
     *
     * @return int
     */
    public function getStudentPassRequirementId()
    {
        return $this->container['student_pass_requirement_id'];
    }

    /**
     * Sets student_pass_requirement_id
     *
     * @param int $student_pass_requirement_id SG only. See combo StudentPassRequirements
     *
     * @return $this
     */
    public function setStudentPassRequirementId($student_pass_requirement_id)
    {
        $this->container['student_pass_requirement_id'] = $student_pass_requirement_id;

        return $this;
    }

    /**
     * Gets student_pass_application_date
     *
     * @return \DateTime
     */
    public function getStudentPassApplicationDate()
    {
        return $this->container['student_pass_application_date'];
    }

    /**
     * Sets student_pass_application_date
     *
     * @param \DateTime $student_pass_application_date SG only. Application Date of student pass enrolment
     *
     * @return $this
     */
    public function setStudentPassApplicationDate($student_pass_application_date)
    {
        $this->container['student_pass_application_date'] = $student_pass_application_date;

        return $this;
    }

    /**
     * Gets student_pass_in_principle_date
     *
     * @return \DateTime
     */
    public function getStudentPassInPrincipleDate()
    {
        return $this->container['student_pass_in_principle_date'];
    }

    /**
     * Sets student_pass_in_principle_date
     *
     * @param \DateTime $student_pass_in_principle_date SG only. Approved In Principle Date of student pass enrolment
     *
     * @return $this
     */
    public function setStudentPassInPrincipleDate($student_pass_in_principle_date)
    {
        $this->container['student_pass_in_principle_date'] = $student_pass_in_principle_date;

        return $this;
    }

    /**
     * Gets student_pass_issue_date
     *
     * @return \DateTime
     */
    public function getStudentPassIssueDate()
    {
        return $this->container['student_pass_issue_date'];
    }

    /**
     * Sets student_pass_issue_date
     *
     * @param \DateTime $student_pass_issue_date SG only. Issue Date of student pass enrolment
     *
     * @return $this
     */
    public function setStudentPassIssueDate($student_pass_issue_date)
    {
        $this->container['student_pass_issue_date'] = $student_pass_issue_date;

        return $this;
    }

    /**
     * Gets student_pass_expiry_date
     *
     * @return \DateTime
     */
    public function getStudentPassExpiryDate()
    {
        return $this->container['student_pass_expiry_date'];
    }

    /**
     * Sets student_pass_expiry_date
     *
     * @param \DateTime $student_pass_expiry_date SG only. Expiry Date of student pass enrolment
     *
     * @return $this
     */
    public function setStudentPassExpiryDate($student_pass_expiry_date)
    {
        $this->container['student_pass_expiry_date'] = $student_pass_expiry_date;

        return $this;
    }

    /**
     * Gets student_pass_cancellation_date
     *
     * @return \DateTime
     */
    public function getStudentPassCancellationDate()
    {
        return $this->container['student_pass_cancellation_date'];
    }

    /**
     * Sets student_pass_cancellation_date
     *
     * @param \DateTime $student_pass_cancellation_date SG only. Cancellation Date of student pass enrolment
     *
     * @return $this
     */
    public function setStudentPassCancellationDate($student_pass_cancellation_date)
    {
        $this->container['student_pass_cancellation_date'] = $student_pass_cancellation_date;

        return $this;
    }

    /**
     * Gets public_notes
     *
     * @return string
     */
    public function getPublicNotes()
    {
        return $this->container['public_notes'];
    }

    /**
     * Sets public_notes
     *
     * @param string $public_notes Notes that will be displayed on the training plan
     *
     * @return $this
     */
    public function setPublicNotes($public_notes)
    {
        $this->container['public_notes'] = $public_notes;

        return $this;
    }

    /**
     * Gets private_notes
     *
     * @return string
     */
    public function getPrivateNotes()
    {
        return $this->container['private_notes'];
    }

    /**
     * Sets private_notes
     *
     * @param string $private_notes Private Notes that will NOT be displayed on the training plan
     *
     * @return $this
     */
    public function setPrivateNotes($private_notes)
    {
        $this->container['private_notes'] = $private_notes;

        return $this;
    }

    /**
     * Gets agent
     *
     * @return \Phwebs\Wisenet\Model\CourseEnrolmentAgent
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param \Phwebs\Wisenet\Model\CourseEnrolmentAgent $agent agent
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return \Phwebs\Wisenet\Model\TagBasic[]
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param \Phwebs\Wisenet\Model\TagBasic[] $tag_ids Ids used to identify Tags
     *
     * @return $this
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets learner_app_access_flag
     *
     * @return bool
     */
    public function getLearnerAppAccessFlag()
    {
        return $this->container['learner_app_access_flag'];
    }

    /**
     * Sets learner_app_access_flag
     *
     * @param bool $learner_app_access_flag To indicate if learner will have access to the enrolment from LearnerApp
     *
     * @return $this
     */
    public function setLearnerAppAccessFlag($learner_app_access_flag)
    {
        $this->container['learner_app_access_flag'] = $learner_app_access_flag;

        return $this;
    }

    /**
     * Gets e_learning_access_flag
     *
     * @return bool
     */
    public function getELearningAccessFlag()
    {
        return $this->container['e_learning_access_flag'];
    }

    /**
     * Sets e_learning_access_flag
     *
     * @param bool $e_learning_access_flag To indicate if learner will have access to the enrolment in your LMS
     *
     * @return $this
     */
    public function setELearningAccessFlag($e_learning_access_flag)
    {
        $this->container['e_learning_access_flag'] = $e_learning_access_flag;

        return $this;
    }

    /**
     * Gets hdr_engagement_code
     *
     * @return string
     */
    public function getHdrEngagementCode()
    {
        return $this->container['hdr_engagement_code'];
    }

    /**
     * Sets hdr_engagement_code
     *
     * @param string $hdr_engagement_code AU FH only. HDR Engagement Code
     *
     * @return $this
     */
    public function setHdrEngagementCode($hdr_engagement_code)
    {
        $this->container['hdr_engagement_code'] = $hdr_engagement_code;

        return $this;
    }

    /**
     * Gets hdr_thesis_submission_date
     *
     * @return \DateTime
     */
    public function getHdrThesisSubmissionDate()
    {
        return $this->container['hdr_thesis_submission_date'];
    }

    /**
     * Sets hdr_thesis_submission_date
     *
     * @param \DateTime $hdr_thesis_submission_date AU FH only. Submission Date of HDR Thesis
     *
     * @return $this
     */
    public function setHdrThesisSubmissionDate($hdr_thesis_submission_date)
    {
        $this->container['hdr_thesis_submission_date'] = $hdr_thesis_submission_date;

        return $this;
    }

    /**
     * Gets ecoe_issue_date
     *
     * @return \DateTime
     */
    public function getEcoeIssueDate()
    {
        return $this->container['ecoe_issue_date'];
    }

    /**
     * Sets ecoe_issue_date
     *
     * @param \DateTime $ecoe_issue_date AU only. Electronic Confirmation of Enrolment Issue Date
     *
     * @return $this
     */
    public function setEcoeIssueDate($ecoe_issue_date)
    {
        $this->container['ecoe_issue_date'] = $ecoe_issue_date;

        return $this;
    }

    /**
     * Gets public_trust_number
     *
     * @return string
     */
    public function getPublicTrustNumber()
    {
        return $this->container['public_trust_number'];
    }

    /**
     * Sets public_trust_number
     *
     * @param string $public_trust_number NZ only. Public Trust Number
     *
     * @return $this
     */
    public function setPublicTrustNumber($public_trust_number)
    {
        $this->container['public_trust_number'] = $public_trust_number;

        return $this;
    }

    /**
     * Gets application_status_id
     *
     * @return int
     */
    public function getApplicationStatusId()
    {
        return $this->container['application_status_id'];
    }

    /**
     * Sets application_status_id
     *
     * @param int $application_status_id See entity ApplicationStatus
     *
     * @return $this
     */
    public function setApplicationStatusId($application_status_id)
    {
        $this->container['application_status_id'] = $application_status_id;

        return $this;
    }

    /**
     * Gets application_expiry_date
     *
     * @return \DateTime
     */
    public function getApplicationExpiryDate()
    {
        return $this->container['application_expiry_date'];
    }

    /**
     * Sets application_expiry_date
     *
     * @param \DateTime $application_expiry_date Application expiry date
     *
     * @return $this
     */
    public function setApplicationExpiryDate($application_expiry_date)
    {
        $this->container['application_expiry_date'] = $application_expiry_date;

        return $this;
    }

    /**
     * Gets application_notes
     *
     * @return string
     */
    public function getApplicationNotes()
    {
        return $this->container['application_notes'];
    }

    /**
     * Sets application_notes
     *
     * @param string $application_notes Application notes
     *
     * @return $this
     */
    public function setApplicationNotes($application_notes)
    {
        $this->container['application_notes'] = $application_notes;

        return $this;
    }

    /**
     * Gets application_status_reason_id
     *
     * @return int
     */
    public function getApplicationStatusReasonId()
    {
        return $this->container['application_status_reason_id'];
    }

    /**
     * Sets application_status_reason_id
     *
     * @param int $application_status_reason_id See entity ApplicationStatusReason
     *
     * @return $this
     */
    public function setApplicationStatusReasonId($application_status_reason_id)
    {
        $this->container['application_status_reason_id'] = $application_status_reason_id;

        return $this;
    }

    /**
     * Gets last_modified_time_stamp
     *
     * @return \DateTime
     */
    public function getLastModifiedTimeStamp()
    {
        return $this->container['last_modified_time_stamp'];
    }

    /**
     * Sets last_modified_time_stamp
     *
     * @param \DateTime $last_modified_time_stamp Date when the course enrolment was last modified
     *
     * @return $this
     */
    public function setLastModifiedTimeStamp($last_modified_time_stamp)
    {
        $this->container['last_modified_time_stamp'] = $last_modified_time_stamp;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on The date the course enrolment was created on
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets commencing_program_cohort1_id
     *
     * @return int
     */
    public function getCommencingProgramCohort1Id()
    {
        return $this->container['commencing_program_cohort1_id'];
    }

    /**
     * Sets commencing_program_cohort1_id
     *
     * @param int $commencing_program_cohort1_id See entity CommencingProgramCohort
     *
     * @return $this
     */
    public function setCommencingProgramCohort1Id($commencing_program_cohort1_id)
    {
        $this->container['commencing_program_cohort1_id'] = $commencing_program_cohort1_id;

        return $this;
    }

    /**
     * Gets commencing_program_cohort2_id
     *
     * @return int
     */
    public function getCommencingProgramCohort2Id()
    {
        return $this->container['commencing_program_cohort2_id'];
    }

    /**
     * Sets commencing_program_cohort2_id
     *
     * @param int $commencing_program_cohort2_id See entity CommencingProgramCohort
     *
     * @return $this
     */
    public function setCommencingProgramCohort2Id($commencing_program_cohort2_id)
    {
        $this->container['commencing_program_cohort2_id'] = $commencing_program_cohort2_id;

        return $this;
    }

    /**
     * Gets commencing_program_cohort3_id
     *
     * @return int
     */
    public function getCommencingProgramCohort3Id()
    {
        return $this->container['commencing_program_cohort3_id'];
    }

    /**
     * Sets commencing_program_cohort3_id
     *
     * @param int $commencing_program_cohort3_id See entity CommencingProgramCohort
     *
     * @return $this
     */
    public function setCommencingProgramCohort3Id($commencing_program_cohort3_id)
    {
        $this->container['commencing_program_cohort3_id'] = $commencing_program_cohort3_id;

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
