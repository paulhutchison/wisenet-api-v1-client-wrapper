<?php
/**
 * UnitOfferTest
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
 * UnitOfferTest Class Doc Comment
 *
 * @category    Class
 * @description UnitOffer
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UnitOfferTest extends TestCase
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
     * Test "UnitOffer"
     */
    public function testUnitOffer()
    {
    }

    /**
     * Test attribute "unit_offer_id"
     */
    public function testPropertyUnitOfferId()
    {
    }

    /**
     * Test attribute "course_offer_id"
     */
    public function testPropertyCourseOfferId()
    {
    }

    /**
     * Test attribute "unit_id"
     */
    public function testPropertyUnitId()
    {
    }

    /**
     * Test attribute "unit_offer_code"
     */
    public function testPropertyUnitOfferCode()
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
     * Test attribute "census_date"
     */
    public function testPropertyCensusDate()
    {
    }

    /**
     * Test attribute "period_from_start_date"
     */
    public function testPropertyPeriodFromStartDate()
    {
    }

    /**
     * Test attribute "period_type_id"
     */
    public function testPropertyPeriodTypeId()
    {
    }

    /**
     * Test attribute "duration"
     */
    public function testPropertyDuration()
    {
    }

    /**
     * Test attribute "duration_type_id"
     */
    public function testPropertyDurationTypeId()
    {
    }

    /**
     * Test attribute "days_to_census_date"
     */
    public function testPropertyDaysToCensusDate()
    {
    }

    /**
     * Test attribute "day"
     */
    public function testPropertyDay()
    {
    }

    /**
     * Test attribute "start_time"
     */
    public function testPropertyStartTime()
    {
    }

    /**
     * Test attribute "end_time"
     */
    public function testPropertyEndTime()
    {
    }

    /**
     * Test attribute "max_registrations"
     */
    public function testPropertyMaxRegistrations()
    {
    }

    /**
     * Test attribute "min_registrations"
     */
    public function testPropertyMinRegistrations()
    {
    }

    /**
     * Test attribute "location_id"
     */
    public function testPropertyLocationId()
    {
    }

    /**
     * Test attribute "unit_fees"
     */
    public function testPropertyUnitFees()
    {
    }

    /**
     * Test attribute "unit_concession_fees"
     */
    public function testPropertyUnitConcessionFees()
    {
    }

    /**
     * Test attribute "unit_hourly_fee"
     */
    public function testPropertyUnitHourlyFee()
    {
    }

    /**
     * Test attribute "resource_fee"
     */
    public function testPropertyResourceFee()
    {
    }

    /**
     * Test attribute "loan_liability"
     */
    public function testPropertyLoanLiability()
    {
    }

    /**
     * Test attribute "contract_id"
     */
    public function testPropertyContractId()
    {
    }

    /**
     * Test attribute "trainer_id"
     */
    public function testPropertyTrainerId()
    {
    }

    /**
     * Test attribute "what_to_bring"
     */
    public function testPropertyWhatToBring()
    {
    }

    /**
     * Test attribute "where_to_go"
     */
    public function testPropertyWhereToGo()
    {
    }

    /**
     * Test attribute "notes"
     */
    public function testPropertyNotes()
    {
    }

    /**
     * Test attribute "current_flag"
     */
    public function testPropertyCurrentFlag()
    {
    }

    /**
     * Test attribute "fee_status"
     */
    public function testPropertyFeeStatus()
    {
    }

    /**
     * Test attribute "is_gst_free_flag"
     */
    public function testPropertyIsGstFreeFlag()
    {
    }

    /**
     * Test attribute "venue_id"
     */
    public function testPropertyVenueId()
    {
    }

    /**
     * Test attribute "hours_supervised"
     */
    public function testPropertyHoursSupervised()
    {
    }

    /**
     * Test attribute "hours_unsupervised"
     */
    public function testPropertyHoursUnsupervised()
    {
    }

    /**
     * Test attribute "for_govt_reporting_flag"
     */
    public function testPropertyForGovtReportingFlag()
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
     * Test attribute "previous_identifier"
     */
    public function testPropertyPreviousIdentifier()
    {
    }

    /**
     * Test attribute "program_id"
     */
    public function testPropertyProgramId()
    {
    }

    /**
     * Test attribute "assessment_method_id"
     */
    public function testPropertyAssessmentMethodId()
    {
    }

    /**
     * Test attribute "concession_flag"
     */
    public function testPropertyConcessionFlag()
    {
    }

    /**
     * Test attribute "fee_exemption_id"
     */
    public function testPropertyFeeExemptionId()
    {
    }

    /**
     * Test attribute "fee_exemption_waiver_id"
     */
    public function testPropertyFeeExemptionWaiverId()
    {
    }

    /**
     * Test attribute "assessor_id"
     */
    public function testPropertyAssessorId()
    {
    }

    /**
     * Test attribute "department_code_id"
     */
    public function testPropertyDepartmentCodeId()
    {
    }

    /**
     * Test attribute "budgeted_income"
     */
    public function testPropertyBudgetedIncome()
    {
    }

    /**
     * Test attribute "budget_cost"
     */
    public function testPropertyBudgetCost()
    {
    }

    /**
     * Test attribute "actual_cost"
     */
    public function testPropertyActualCost()
    {
    }

    /**
     * Test attribute "vet_in_school_flag"
     */
    public function testPropertyVetInSchoolFlag()
    {
    }

    /**
     * Test attribute "delivery_mode_id"
     */
    public function testPropertyDeliveryModeId()
    {
    }

    /**
     * Test attribute "fund_source_national_id"
     */
    public function testPropertyFundSourceNationalId()
    {
    }

    /**
     * Test attribute "fund_source_state_id"
     */
    public function testPropertyFundSourceStateId()
    {
    }

    /**
     * Test attribute "specific_program_id"
     */
    public function testPropertySpecificProgramId()
    {
    }

    /**
     * Test attribute "delivery_workplace_id"
     */
    public function testPropertyDeliveryWorkplaceId()
    {
    }

    /**
     * Test attribute "efts_factor"
     */
    public function testPropertyEftsFactor()
    {
    }

    /**
     * Test attribute "internet_based_learning_id"
     */
    public function testPropertyInternetBasedLearningId()
    {
    }

    /**
     * Test attribute "complusory_unit_costs_fee"
     */
    public function testPropertyComplusoryUnitCostsFee()
    {
    }

    /**
     * Test attribute "foreign_fee"
     */
    public function testPropertyForeignFee()
    {
    }

    /**
     * Test attribute "maxima_exempt_fee"
     */
    public function testPropertyMaximaExemptFee()
    {
    }

    /**
     * Test attribute "fee_assessment_category_id"
     */
    public function testPropertyFeeAssessmentCategoryId()
    {
    }

    /**
     * Test attribute "mural_attendance_id"
     */
    public function testPropertyMuralAttendanceId()
    {
    }

    /**
     * Test attribute "tuition_weeks"
     */
    public function testPropertyTuitionWeeks()
    {
    }

    /**
     * Test attribute "delivery_mode_av8_id"
     */
    public function testPropertyDeliveryModeAv8Id()
    {
    }

    /**
     * Test attribute "predominant_delivery_mode_id"
     */
    public function testPropertyPredominantDeliveryModeId()
    {
    }

    /**
     * Test attribute "delivery_mode_wa1_id"
     */
    public function testPropertyDeliveryModeWa1Id()
    {
    }

    /**
     * Test attribute "delivery_mode_wa2_id"
     */
    public function testPropertyDeliveryModeWa2Id()
    {
    }

    /**
     * Test attribute "delivery_mode_wa3_id"
     */
    public function testPropertyDeliveryModeWa3Id()
    {
    }

    /**
     * Test attribute "employer_invoiced_flag"
     */
    public function testPropertyEmployerInvoicedFlag()
    {
    }

    /**
     * Test attribute "funding_removed_flag"
     */
    public function testPropertyFundingRemovedFlag()
    {
    }

    /**
     * Test attribute "last_modified_time_stamp"
     */
    public function testPropertyLastModifiedTimeStamp()
    {
    }
}
