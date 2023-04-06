<?php
/**
 * CourseEnrolmentRelationshipsTest
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
 * CourseEnrolmentRelationshipsTest Class Doc Comment
 *
 * @category    Class
 * @description CourseEnrolmentRelationships
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CourseEnrolmentRelationshipsTest extends TestCase
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
     * Test "CourseEnrolmentRelationships"
     */
    public function testCourseEnrolmentRelationships()
    {
    }

    /**
     * Test attribute "opportunity"
     */
    public function testPropertyOpportunity()
    {
    }

    /**
     * Test attribute "enrolment_status"
     */
    public function testPropertyEnrolmentStatus()
    {
    }

    /**
     * Test attribute "enrolment_status_reason"
     */
    public function testPropertyEnrolmentStatusReason()
    {
    }

    /**
     * Test attribute "study_mode"
     */
    public function testPropertyStudyMode()
    {
    }

    /**
     * Test attribute "target_group"
     */
    public function testPropertyTargetGroup()
    {
    }

    /**
     * Test attribute "studylink_status"
     */
    public function testPropertyStudylinkStatus()
    {
    }

    /**
     * Test attribute "studylink_status_reason"
     */
    public function testPropertyStudylinkStatusReason()
    {
    }

    /**
     * Test attribute "duration_type"
     */
    public function testPropertyDurationType()
    {
    }

    /**
     * Test attribute "program_status"
     */
    public function testPropertyProgramStatus()
    {
    }

    /**
     * Test attribute "contract_type"
     */
    public function testPropertyContractType()
    {
    }

    /**
     * Test attribute "av_study_reason"
     */
    public function testPropertyAvStudyReason()
    {
    }

    /**
     * Test attribute "commencing_course"
     */
    public function testPropertyCommencingCourse()
    {
    }

    /**
     * Test attribute "commencing_student_identifier"
     */
    public function testPropertyCommencingStudentIdentifier()
    {
    }

    /**
     * Test attribute "fee_type_indicator"
     */
    public function testPropertyFeeTypeIndicator()
    {
    }

    /**
     * Test attribute "admission_basis"
     */
    public function testPropertyAdmissionBasis()
    {
    }

    /**
     * Test attribute "attendance_type"
     */
    public function testPropertyAttendanceType()
    {
    }

    /**
     * Test attribute "fh_study_reason"
     */
    public function testPropertyFhStudyReason()
    {
    }

    /**
     * Test attribute "specialisation_field_of_education"
     */
    public function testPropertySpecialisationFieldOfEducation()
    {
    }

    /**
     * Test attribute "scholarship_type"
     */
    public function testPropertyScholarshipType()
    {
    }

    /**
     * Test attribute "separation_status"
     */
    public function testPropertySeparationStatus()
    {
    }

    /**
     * Test attribute "fund_source"
     */
    public function testPropertyFundSource()
    {
    }

    /**
     * Test attribute "main_subject1"
     */
    public function testPropertyMainSubject1()
    {
    }

    /**
     * Test attribute "main_subject2"
     */
    public function testPropertyMainSubject2()
    {
    }

    /**
     * Test attribute "main_subject3"
     */
    public function testPropertyMainSubject3()
    {
    }

    /**
     * Test attribute "nzqa_awarding_provider"
     */
    public function testPropertyNzqaAwardingProvider()
    {
    }

    /**
     * Test attribute "nzqa_request_type"
     */
    public function testPropertyNzqaRequestType()
    {
    }

    /**
     * Test attribute "managed_apprenticeship"
     */
    public function testPropertyManagedApprenticeship()
    {
    }

    /**
     * Test attribute "aac"
     */
    public function testPropertyAac()
    {
    }

    /**
     * Test attribute "rto_status"
     */
    public function testPropertyRtoStatus()
    {
    }

    /**
     * Test attribute "payment_type"
     */
    public function testPropertyPaymentType()
    {
    }

    /**
     * Test attribute "student_pass_requirement"
     */
    public function testPropertyStudentPassRequirement()
    {
    }

    /**
     * Test attribute "fps_status"
     */
    public function testPropertyFpsStatus()
    {
    }

    /**
     * Test attribute "fps_waiver_reason"
     */
    public function testPropertyFpsWaiverReason()
    {
    }

    /**
     * Test attribute "trainer"
     */
    public function testPropertyTrainer()
    {
    }

    /**
     * Test attribute "assessor"
     */
    public function testPropertyAssessor()
    {
    }

    /**
     * Test attribute "coordinator"
     */
    public function testPropertyCoordinator()
    {
    }

    /**
     * Test attribute "sales_person"
     */
    public function testPropertySalesPerson()
    {
    }

    /**
     * Test attribute "learner"
     */
    public function testPropertyLearner()
    {
    }

    /**
     * Test attribute "course_offer"
     */
    public function testPropertyCourseOffer()
    {
    }

    /**
     * Test attribute "agent"
     */
    public function testPropertyAgent()
    {
    }

    /**
     * Test attribute "tags"
     */
    public function testPropertyTags()
    {
    }

    /**
     * Test attribute "promotion"
     */
    public function testPropertyPromotion()
    {
    }

    /**
     * Test attribute "sales_contact"
     */
    public function testPropertySalesContact()
    {
    }

    /**
     * Test attribute "application_status"
     */
    public function testPropertyApplicationStatus()
    {
    }

    /**
     * Test attribute "application_status_reason"
     */
    public function testPropertyApplicationStatusReason()
    {
    }

    /**
     * Test attribute "completion_pathway"
     */
    public function testPropertyCompletionPathway()
    {
    }

    /**
     * Test attribute "commenced_at_school_flag"
     */
    public function testPropertyCommencedAtSchoolFlag()
    {
    }

    /**
     * Test attribute "commencing_program_cohort1"
     */
    public function testPropertyCommencingProgramCohort1()
    {
    }

    /**
     * Test attribute "commencing_program_cohort2"
     */
    public function testPropertyCommencingProgramCohort2()
    {
    }

    /**
     * Test attribute "commencing_program_cohort3"
     */
    public function testPropertyCommencingProgramCohort3()
    {
    }
}
