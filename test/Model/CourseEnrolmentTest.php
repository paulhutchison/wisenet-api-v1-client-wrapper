<?php
/**
 * CourseEnrolmentTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

use PHPUnit\Framework\TestCase;

/**
 * CourseEnrolmentTest Class Doc Comment
 *
 * @category    Class
 * @description CourseEnrolment
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CourseEnrolmentTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "CourseEnrolment"
     */
    public function testCourseEnrolment()
    {
    }

    /**
     * Test attribute "course_enrolment_id"
     */
    public function testPropertyCourseEnrolmentId()
    {
    }

    /**
     * Test attribute "learner_id"
     */
    public function testPropertyLearnerId()
    {
    }

    /**
     * Test attribute "learner_number_id"
     */
    public function testPropertyLearnerNumberId()
    {
    }

    /**
     * Test attribute "course_offer_id"
     */
    public function testPropertyCourseOfferId()
    {
    }

    /**
     * Test attribute "previous_identifier"
     */
    public function testPropertyPreviousIdentifier()
    {
    }

    /**
     * Test attribute "opportunity_id"
     */
    public function testPropertyOpportunityId()
    {
    }

    /**
     * Test attribute "enrolment_status_id"
     */
    public function testPropertyEnrolmentStatusId()
    {
    }

    /**
     * Test attribute "enrolment_status_reason_id"
     */
    public function testPropertyEnrolmentStatusReasonId()
    {
    }

    /**
     * Test attribute "study_mode_id"
     */
    public function testPropertyStudyModeId()
    {
    }

    /**
     * Test attribute "target_group_id"
     */
    public function testPropertyTargetGroupId()
    {
    }

    /**
     * Test attribute "coordinator_id"
     */
    public function testPropertyCoordinatorId()
    {
    }

    /**
     * Test attribute "trainer_id"
     */
    public function testPropertyTrainerId()
    {
    }

    /**
     * Test attribute "assessor_id"
     */
    public function testPropertyAssessorId()
    {
    }

    /**
     * Test attribute "completion_pathway_id"
     */
    public function testPropertyCompletionPathwayId()
    {
    }

    /**
     * Test attribute "commenced_at_school_flag_id"
     */
    public function testPropertyCommencedAtSchoolFlagId()
    {
    }

    /**
     * Test attribute "ecoe_number"
     */
    public function testPropertyEcoeNumber()
    {
    }

    /**
     * Test attribute "student_number"
     */
    public function testPropertyStudentNumber()
    {
    }

    /**
     * Test attribute "learner_position_id"
     */
    public function testPropertyLearnerPositionId()
    {
    }

    /**
     * Test attribute "studylink_status_id"
     */
    public function testPropertyStudylinkStatusId()
    {
    }

    /**
     * Test attribute "studylink_status_reason_id"
     */
    public function testPropertyStudylinkStatusReasonId()
    {
    }

    /**
     * Test attribute "start_date"
     */
    public function testPropertyStartDate()
    {
    }

    /**
     * Test attribute "end_date"
     */
    public function testPropertyEndDate()
    {
    }

    /**
     * Test attribute "enrolment_duration"
     */
    public function testPropertyEnrolmentDuration()
    {
    }

    /**
     * Test attribute "duration_type_id"
     */
    public function testPropertyDurationTypeId()
    {
    }

    /**
     * Test attribute "actual_end_date"
     */
    public function testPropertyActualEndDate()
    {
    }

    /**
     * Test attribute "course_commencement_date"
     */
    public function testPropertyCourseCommencementDate()
    {
    }

    /**
     * Test attribute "tuition_duration"
     */
    public function testPropertyTuitionDuration()
    {
    }

    /**
     * Test attribute "expiry_date"
     */
    public function testPropertyExpiryDate()
    {
    }

    /**
     * Test attribute "expected_award_date"
     */
    public function testPropertyExpectedAwardDate()
    {
    }

    /**
     * Test attribute "qualification_issued_flag"
     */
    public function testPropertyQualificationIssuedFlag()
    {
    }

    /**
     * Test attribute "qualification_issued_date"
     */
    public function testPropertyQualificationIssuedDate()
    {
    }

    /**
     * Test attribute "training_plan_issued_flag"
     */
    public function testPropertyTrainingPlanIssuedFlag()
    {
    }

    /**
     * Test attribute "training_plan_sign_date"
     */
    public function testPropertyTrainingPlanSignDate()
    {
    }

    /**
     * Test attribute "unique_training_hours"
     */
    public function testPropertyUniqueTrainingHours()
    {
    }

    /**
     * Test attribute "invoice_date"
     */
    public function testPropertyInvoiceDate()
    {
    }

    /**
     * Test attribute "parchment_number"
     */
    public function testPropertyParchmentNumber()
    {
    }

    /**
     * Test attribute "enquiry_date"
     */
    public function testPropertyEnquiryDate()
    {
    }

    /**
     * Test attribute "enrolment_date"
     */
    public function testPropertyEnrolmentDate()
    {
    }

    /**
     * Test attribute "re_enrolment_date"
     */
    public function testPropertyReEnrolmentDate()
    {
    }

    /**
     * Test attribute "orientation_date"
     */
    public function testPropertyOrientationDate()
    {
    }

    /**
     * Test attribute "for_avetmiss_flag"
     */
    public function testPropertyForAvetmissFlag()
    {
    }

    /**
     * Test attribute "previous_course_identifier"
     */
    public function testPropertyPreviousCourseIdentifier()
    {
    }

    /**
     * Test attribute "registration_number"
     */
    public function testPropertyRegistrationNumber()
    {
    }

    /**
     * Test attribute "program_status_id"
     */
    public function testPropertyProgramStatusId()
    {
    }

    /**
     * Test attribute "contract_type_id"
     */
    public function testPropertyContractTypeId()
    {
    }

    /**
     * Test attribute "av_study_reason_id"
     */
    public function testPropertyAvStudyReasonId()
    {
    }

    /**
     * Test attribute "commencing_course_id"
     */
    public function testPropertyCommencingCourseId()
    {
    }

    /**
     * Test attribute "eligibility_exemption_flag"
     */
    public function testPropertyEligibilityExemptionFlag()
    {
    }

    /**
     * Test attribute "funding_eligible_flag"
     */
    public function testPropertyFundingEligibleFlag()
    {
    }

    /**
     * Test attribute "learner_fees_other"
     */
    public function testPropertyLearnerFeesOther()
    {
    }

    /**
     * Test attribute "individual_contract_id"
     */
    public function testPropertyIndividualContractId()
    {
    }

    /**
     * Test attribute "individual_contract_expiry_date"
     */
    public function testPropertyIndividualContractExpiryDate()
    {
    }

    /**
     * Test attribute "fh_accessed_flag"
     */
    public function testPropertyFhAccessedFlag()
    {
    }

    /**
     * Test attribute "fh_eligible_flag"
     */
    public function testPropertyFhEligibleFlag()
    {
    }

    /**
     * Test attribute "estimated_yearly_eftsl"
     */
    public function testPropertyEstimatedYearlyEftsl()
    {
    }

    /**
     * Test attribute "commencing_student_identifier"
     */
    public function testPropertyCommencingStudentIdentifier()
    {
    }

    /**
     * Test attribute "fee_type_indicator_id"
     */
    public function testPropertyFeeTypeIndicatorId()
    {
    }

    /**
     * Test attribute "admission_basis_id"
     */
    public function testPropertyAdmissionBasisId()
    {
    }

    /**
     * Test attribute "attendance_type_id"
     */
    public function testPropertyAttendanceTypeId()
    {
    }

    /**
     * Test attribute "fh_study_reason_id"
     */
    public function testPropertyFhStudyReasonId()
    {
    }

    /**
     * Test attribute "specialisation_field_of_education_id"
     */
    public function testPropertySpecialisationFieldOfEducationId()
    {
    }

    /**
     * Test attribute "scholarship_type_id"
     */
    public function testPropertyScholarshipTypeId()
    {
    }

    /**
     * Test attribute "previous_rts_efts"
     */
    public function testPropertyPreviousRtsEfts()
    {
    }

    /**
     * Test attribute "completion_percentage"
     */
    public function testPropertyCompletionPercentage()
    {
    }

    /**
     * Test attribute "joint_degree_provider_code"
     */
    public function testPropertyJointDegreeProviderCode()
    {
    }

    /**
     * Test attribute "separation_status_id"
     */
    public function testPropertySeparationStatusId()
    {
    }

    /**
     * Test attribute "ecaf_id"
     */
    public function testPropertyEcafId()
    {
    }

    /**
     * Test attribute "ecaf_status"
     */
    public function testPropertyEcafStatus()
    {
    }

    /**
     * Test attribute "ecaf_status_reason"
     */
    public function testPropertyEcafStatusReason()
    {
    }

    /**
     * Test attribute "ecaf_notes"
     */
    public function testPropertyEcafNotes()
    {
    }

    /**
     * Test attribute "ecaf_last_modified_date"
     */
    public function testPropertyEcafLastModifiedDate()
    {
    }

    /**
     * Test attribute "ecaf_census_date"
     */
    public function testPropertyEcafCensusDate()
    {
    }

    /**
     * Test attribute "for_uip_flag"
     */
    public function testPropertyForUipFlag()
    {
    }

    /**
     * Test attribute "fund_source_id"
     */
    public function testPropertyFundSourceId()
    {
    }

    /**
     * Test attribute "foreign_fee"
     */
    public function testPropertyForeignFee()
    {
    }

    /**
     * Test attribute "main_subject1_id"
     */
    public function testPropertyMainSubject1Id()
    {
    }

    /**
     * Test attribute "main_subject2_id"
     */
    public function testPropertyMainSubject2Id()
    {
    }

    /**
     * Test attribute "main_subject3_id"
     */
    public function testPropertyMainSubject3Id()
    {
    }

    /**
     * Test attribute "nzqa_return_to_provider_flag"
     */
    public function testPropertyNzqaReturnToProviderFlag()
    {
    }

    /**
     * Test attribute "nzqa_awarding_provider_id"
     */
    public function testPropertyNzqaAwardingProviderId()
    {
    }

    /**
     * Test attribute "nzqa_strand"
     */
    public function testPropertyNzqaStrand()
    {
    }

    /**
     * Test attribute "nzqa_optional_strand"
     */
    public function testPropertyNzqaOptionalStrand()
    {
    }

    /**
     * Test attribute "nzqa_request_type_id"
     */
    public function testPropertyNzqaRequestTypeId()
    {
    }

    /**
     * Test attribute "managed_apprenticeship_id"
     */
    public function testPropertyManagedApprenticeshipId()
    {
    }

    /**
     * Test attribute "aac_id"
     */
    public function testPropertyAacId()
    {
    }

    /**
     * Test attribute "aac_sales_officer"
     */
    public function testPropertyAacSalesOfficer()
    {
    }

    /**
     * Test attribute "aac_sign_date"
     */
    public function testPropertyAacSignDate()
    {
    }

    /**
     * Test attribute "sales_person_id"
     */
    public function testPropertySalesPersonId()
    {
    }

    /**
     * Test attribute "certificate1"
     */
    public function testPropertyCertificate1()
    {
    }

    /**
     * Test attribute "certificate2"
     */
    public function testPropertyCertificate2()
    {
    }

    /**
     * Test attribute "rto_status_id"
     */
    public function testPropertyRtoStatusId()
    {
    }

    /**
     * Test attribute "invoice_number"
     */
    public function testPropertyInvoiceNumber()
    {
    }

    /**
     * Test attribute "invoice_hours"
     */
    public function testPropertyInvoiceHours()
    {
    }

    /**
     * Test attribute "payment_type_id"
     */
    public function testPropertyPaymentTypeId()
    {
    }

    /**
     * Test attribute "deposit"
     */
    public function testPropertyDeposit()
    {
    }

    /**
     * Test attribute "rate_id"
     */
    public function testPropertyRateId()
    {
    }

    /**
     * Test attribute "privacy_flag"
     */
    public function testPropertyPrivacyFlag()
    {
    }

    /**
     * Test attribute "lln_flag"
     */
    public function testPropertyLlnFlag()
    {
    }

    /**
     * Test attribute "fees_collected1"
     */
    public function testPropertyFeesCollected1()
    {
    }

    /**
     * Test attribute "fees_collected2"
     */
    public function testPropertyFeesCollected2()
    {
    }

    /**
     * Test attribute "fees_collected3"
     */
    public function testPropertyFeesCollected3()
    {
    }

    /**
     * Test attribute "student_arrival_date"
     */
    public function testPropertyStudentArrivalDate()
    {
    }

    /**
     * Test attribute "medical_insurance_provider"
     */
    public function testPropertyMedicalInsuranceProvider()
    {
    }

    /**
     * Test attribute "student_pass_requirement_id"
     */
    public function testPropertyStudentPassRequirementId()
    {
    }

    /**
     * Test attribute "student_pass_application_date"
     */
    public function testPropertyStudentPassApplicationDate()
    {
    }

    /**
     * Test attribute "student_pass_in_principle_date"
     */
    public function testPropertyStudentPassInPrincipleDate()
    {
    }

    /**
     * Test attribute "student_pass_issue_date"
     */
    public function testPropertyStudentPassIssueDate()
    {
    }

    /**
     * Test attribute "student_pass_expiry_date"
     */
    public function testPropertyStudentPassExpiryDate()
    {
    }

    /**
     * Test attribute "student_pass_cancellation_date"
     */
    public function testPropertyStudentPassCancellationDate()
    {
    }

    /**
     * Test attribute "public_notes"
     */
    public function testPropertyPublicNotes()
    {
    }

    /**
     * Test attribute "private_notes"
     */
    public function testPropertyPrivateNotes()
    {
    }

    /**
     * Test attribute "agent"
     */
    public function testPropertyAgent()
    {
    }

    /**
     * Test attribute "tag_ids"
     */
    public function testPropertyTagIds()
    {
    }

    /**
     * Test attribute "learner_app_access_flag"
     */
    public function testPropertyLearnerAppAccessFlag()
    {
    }

    /**
     * Test attribute "e_learning_access_flag"
     */
    public function testPropertyELearningAccessFlag()
    {
    }

    /**
     * Test attribute "hdr_engagement_code"
     */
    public function testPropertyHdrEngagementCode()
    {
    }

    /**
     * Test attribute "hdr_thesis_submission_date"
     */
    public function testPropertyHdrThesisSubmissionDate()
    {
    }

    /**
     * Test attribute "ecoe_issue_date"
     */
    public function testPropertyEcoeIssueDate()
    {
    }

    /**
     * Test attribute "public_trust_number"
     */
    public function testPropertyPublicTrustNumber()
    {
    }

    /**
     * Test attribute "application_status_id"
     */
    public function testPropertyApplicationStatusId()
    {
    }

    /**
     * Test attribute "application_expiry_date"
     */
    public function testPropertyApplicationExpiryDate()
    {
    }

    /**
     * Test attribute "application_notes"
     */
    public function testPropertyApplicationNotes()
    {
    }

    /**
     * Test attribute "application_status_reason_id"
     */
    public function testPropertyApplicationStatusReasonId()
    {
    }

    /**
     * Test attribute "last_modified_time_stamp"
     */
    public function testPropertyLastModifiedTimeStamp()
    {
    }

    /**
     * Test attribute "created_on"
     */
    public function testPropertyCreatedOn()
    {
    }

    /**
     * Test attribute "commencing_program_cohort1_id"
     */
    public function testPropertyCommencingProgramCohort1Id()
    {
    }

    /**
     * Test attribute "commencing_program_cohort2_id"
     */
    public function testPropertyCommencingProgramCohort2Id()
    {
    }

    /**
     * Test attribute "commencing_program_cohort3_id"
     */
    public function testPropertyCommencingProgramCohort3Id()
    {
    }
}
