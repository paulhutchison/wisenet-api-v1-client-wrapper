<?php
/**
 * UnitTest
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
 * UnitTest Class Doc Comment
 *
 * @category    Class
 * @description Unit
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UnitTest extends TestCase
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
     * Test "Unit"
     */
    public function testUnit()
    {
    }

    /**
     * Test attribute "unit_id"
     */
    public function testPropertyUnitId()
    {
    }

    /**
     * Test attribute "course_id"
     */
    public function testPropertyCourseId()
    {
    }

    /**
     * Test attribute "unit_type_id"
     */
    public function testPropertyUnitTypeId()
    {
    }

    /**
     * Test attribute "unit_code"
     */
    public function testPropertyUnitCode()
    {
    }

    /**
     * Test attribute "unit_desc"
     */
    public function testPropertyUnitDesc()
    {
    }

    /**
     * Test attribute "unit_of_competency_id"
     */
    public function testPropertyUnitOfCompetencyId()
    {
    }

    /**
     * Test attribute "vet_flag"
     */
    public function testPropertyVetFlag()
    {
    }

    /**
     * Test attribute "stage"
     */
    public function testPropertyStage()
    {
    }

    /**
     * Test attribute "points"
     */
    public function testPropertyPoints()
    {
    }

    /**
     * Test attribute "pre_req"
     */
    public function testPropertyPreReq()
    {
    }

    /**
     * Test attribute "tuition_weeks"
     */
    public function testPropertyTuitionWeeks()
    {
    }

    /**
     * Test attribute "comments"
     */
    public function testPropertyComments()
    {
    }

    /**
     * Test attribute "outline"
     */
    public function testPropertyOutline()
    {
    }

    /**
     * Test attribute "unit_field_of_education_id"
     */
    public function testPropertyUnitFieldOfEducationId()
    {
    }

    /**
     * Test attribute "nominal_hours_supervised"
     */
    public function testPropertyNominalHoursSupervised()
    {
    }

    /**
     * Test attribute "nominal_hours_unsupervised"
     */
    public function testPropertyNominalHoursUnsupervised()
    {
    }

    /**
     * Test attribute "nz_funding_cat_id"
     */
    public function testPropertyNzFundingCatId()
    {
    }

    /**
     * Test attribute "nz_degree_research_status_id"
     */
    public function testPropertyNzDegreeResearchStatusId()
    {
    }

    /**
     * Test attribute "nz_unit_classification_id"
     */
    public function testPropertyNzUnitClassificationId()
    {
    }

    /**
     * Test attribute "nz_sced_field_of_study_id"
     */
    public function testPropertyNzScedFieldOfStudyId()
    {
    }

    /**
     * Test attribute "nz_efts_factor"
     */
    public function testPropertyNzEftsFactor()
    {
    }

    /**
     * Test attribute "nz_credit"
     */
    public function testPropertyNzCredit()
    {
    }

    /**
     * Test attribute "nz_register_level_id"
     */
    public function testPropertyNzRegisterLevelId()
    {
    }

    /**
     * Test attribute "nz_research_level_id"
     */
    public function testPropertyNzResearchLevelId()
    {
    }

    /**
     * Test attribute "nz_unit_exemption_fccmid"
     */
    public function testPropertyNzUnitExemptionFccmid()
    {
    }

    /**
     * Test attribute "nz_embedded_lit_num_id"
     */
    public function testPropertyNzEmbeddedLitNumId()
    {
    }

    /**
     * Test attribute "nz_standard_type_id"
     */
    public function testPropertyNzStandardTypeId()
    {
    }

    /**
     * Test attribute "nz_for_nzqa"
     */
    public function testPropertyNzForNzqa()
    {
    }

    /**
     * Test attribute "last_customer_user_id"
     */
    public function testPropertyLastCustomerUserId()
    {
    }

    /**
     * Test attribute "last_audit_time_stamp"
     */
    public function testPropertyLastAuditTimeStamp()
    {
    }

    /**
     * Test attribute "last_audit_action"
     */
    public function testPropertyLastAuditAction()
    {
    }

    /**
     * Test attribute "active_start_date"
     */
    public function testPropertyActiveStartDate()
    {
    }

    /**
     * Test attribute "active_end_date"
     */
    public function testPropertyActiveEndDate()
    {
    }

    /**
     * Test attribute "unit_guid"
     */
    public function testPropertyUnitGuid()
    {
    }

    /**
     * Test attribute "is_uip"
     */
    public function testPropertyIsUip()
    {
    }
}
