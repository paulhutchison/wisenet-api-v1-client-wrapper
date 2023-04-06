<?php
/**
 * ComboApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use Phwebs\Wisenet\Configuration;
use Phwebs\Wisenet\ApiException;
use Phwebs\Wisenet\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * ComboApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComboApiTest extends TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for createNextOfKinRelationships
     *
     * Create NextOfKinRelationships.
     *
     */
    public function testCreateNextOfKinRelationships()
    {
    }

    /**
     * Test case for createVisas
     *
     * Create Visas.
     *
     */
    public function testCreateVisas()
    {
    }

    /**
     * Test case for getAacs
     *
     * Get Aacs.
     *
     */
    public function testGetAacs()
    {
    }

    /**
     * Test case for getAccreditationTypes
     *
     * Get AccreditationTypes.
     *
     */
    public function testGetAccreditationTypes()
    {
    }

    /**
     * Test case for getAdmissionBasis
     *
     * Get AdmissionBasis.
     *
     */
    public function testGetAdmissionBasis()
    {
    }

    /**
     * Test case for getAgeCategories
     *
     * Get AgeCategories.
     *
     */
    public function testGetAgeCategories()
    {
    }

    /**
     * Test case for getAgentAgreementStatuses
     *
     * Get AgentAgreementStatuses.
     *
     */
    public function testGetAgentAgreementStatuses()
    {
    }

    /**
     * Test case for getAgentClassifications
     *
     * Get AgentClassifications.
     *
     */
    public function testGetAgentClassifications()
    {
    }

    /**
     * Test case for getAgentStatuses
     *
     * Get AgentStatuses.
     *
     */
    public function testGetAgentStatuses()
    {
    }

    /**
     * Test case for getAlertTypes
     *
     * Get AlertTypes.
     *
     */
    public function testGetAlertTypes()
    {
    }

    /**
     * Test case for getAnzscos
     *
     * Get Anzscos.
     *
     */
    public function testGetAnzscos()
    {
    }

    /**
     * Test case for getAnzsicTypes
     *
     * Get Anzsics.
     *
     */
    public function testGetAnzsicTypes()
    {
    }

    /**
     * Test case for getApplicationPaymentTypes
     *
     * Get PaymentTypes.
     *
     */
    public function testGetApplicationPaymentTypes()
    {
    }

    /**
     * Test case for getApplicationStatusReasons
     *
     * Get ApplicationStatusReasons.
     *
     */
    public function testGetApplicationStatusReasons()
    {
    }

    /**
     * Test case for getApplicationStatuses
     *
     * Get ApplicationStatuses.
     *
     */
    public function testGetApplicationStatuses()
    {
    }

    /**
     * Test case for getAscos
     *
     * Get Ascos.
     *
     */
    public function testGetAscos()
    {
    }

    /**
     * Test case for getAssessmentMethods
     *
     * Get AssessmentMethods.
     *
     */
    public function testGetAssessmentMethods()
    {
    }

    /**
     * Test case for getAttendanceTypes
     *
     * Get AttendanceTypes.
     *
     */
    public function testGetAttendanceTypes()
    {
    }

    /**
     * Test case for getAutoGradeActivityStatuses
     *
     * Get AutoGradeActivityStatuses.
     *
     */
    public function testGetAutoGradeActivityStatuses()
    {
    }

    /**
     * Test case for getAutoGradeRuleTypes
     *
     * Get AutoGradeRuleTypes.
     *
     */
    public function testGetAutoGradeRuleTypes()
    {
    }

    /**
     * Test case for getAvStudyReasons
     *
     * Get AvStudyReasons.
     *
     */
    public function testGetAvStudyReasons()
    {
    }

    /**
     * Test case for getCampusOperationTypes
     *
     * Get CampusOperationTypes.
     *
     */
    public function testGetCampusOperationTypes()
    {
    }

    /**
     * Test case for getCloseLostReasons
     *
     * Get CloseLostReasons.
     *
     */
    public function testGetCloseLostReasons()
    {
    }

    /**
     * Test case for getCommencedAtSchoolFlag
     *
     * Get CommencedAtSchoolFlag.
     *
     */
    public function testGetCommencedAtSchoolFlag()
    {
    }

    /**
     * Test case for getCommencingCourses
     *
     * Get CommencingCourses.
     *
     */
    public function testGetCommencingCourses()
    {
    }

    /**
     * Test case for getCommencingProgramCohorts
     *
     * Get CommencingProgramCohorts.
     *
     */
    public function testGetCommencingProgramCohorts()
    {
    }

    /**
     * Test case for getCommencingStudentIdentifiers
     *
     * Get CommencingStudentIdentifiers.
     *
     */
    public function testGetCommencingStudentIdentifiers()
    {
    }

    /**
     * Test case for getCompletionPathways
     *
     * Get CompletionPathways.
     *
     */
    public function testGetCompletionPathways()
    {
    }

    /**
     * Test case for getContractTypes
     *
     * Get ContractTypes.
     *
     */
    public function testGetContractTypes()
    {
    }

    /**
     * Test case for getCountries
     *
     * Get Countries.
     *
     */
    public function testGetCountries()
    {
    }

    /**
     * Test case for getCourseOfferStatuses
     *
     * Get CourseOfferStatuses.
     *
     */
    public function testGetCourseOfferStatuses()
    {
    }

    /**
     * Test case for getCourseOfferTypes
     *
     * Get CourseOfferTypes.
     *
     */
    public function testGetCourseOfferTypes()
    {
    }

    /**
     * Test case for getCredentialStatuses
     *
     * Get CredentialStatuses.
     *
     */
    public function testGetCredentialStatuses()
    {
    }

    /**
     * Test case for getCurrencies
     *
     * Get Currencies.
     *
     */
    public function testGetCurrencies()
    {
    }

    /**
     * Test case for getDeliveryModes
     *
     * Get DeliveryModes.
     *
     */
    public function testGetDeliveryModes()
    {
    }

    /**
     * Test case for getDeliveryModesAv8
     *
     * Get DeliveryModesAv8.
     *
     */
    public function testGetDeliveryModesAv8()
    {
    }

    /**
     * Test case for getDeliveryModesWa
     *
     * Get DeliveryModesWa.
     *
     */
    public function testGetDeliveryModesWa()
    {
    }

    /**
     * Test case for getDeliveryOptions
     *
     * Get DeliveryOptions.
     *
     */
    public function testGetDeliveryOptions()
    {
    }

    /**
     * Test case for getDepartmentCodes
     *
     * Get DepartmentCodes.
     *
     */
    public function testGetDepartmentCodes()
    {
    }

    /**
     * Test case for getDisabilities
     *
     * Get Disabilities.
     *
     */
    public function testGetDisabilities()
    {
    }

    /**
     * Test case for getDisabilityFlags
     *
     * Get DisabilityFlags.
     *
     */
    public function testGetDisabilityFlags()
    {
    }

    /**
     * Test case for getDurationTypes
     *
     * Get DurationTypes.
     *
     */
    public function testGetDurationTypes()
    {
    }

    /**
     * Test case for getElearningCourseStatuses
     *
     * Get ElearningCourseStatuses.
     *
     */
    public function testGetElearningCourseStatuses()
    {
    }

    /**
     * Test case for getElearningEnrolmentStatuses
     *
     * Get ElearningEnrolmentStatuses.
     *
     */
    public function testGetElearningEnrolmentStatuses()
    {
    }

    /**
     * Test case for getElementEnrolmentStatuses
     *
     * Get ElementEnrolmentStatuses.
     *
     */
    public function testGetElementEnrolmentStatuses()
    {
    }

    /**
     * Test case for getEmploymentStatuses
     *
     * Get EmploymentStatuses.
     *
     */
    public function testGetEmploymentStatuses()
    {
    }

    /**
     * Test case for getEnglishTestScoreTypes
     *
     * Get EnglishTestScoreTypes.
     *
     */
    public function testGetEnglishTestScoreTypes()
    {
    }

    /**
     * Test case for getEnrolmentStatusReasons
     *
     * Get EnrolmentStatusReasons.
     *
     */
    public function testGetEnrolmentStatusReasons()
    {
    }

    /**
     * Test case for getEnrolmentStatuses
     *
     * Get EnrolmentStatuses.
     *
     */
    public function testGetEnrolmentStatuses()
    {
    }

    /**
     * Test case for getEventTypes
     *
     * Get EventTypes.
     *
     */
    public function testGetEventTypes()
    {
    }

    /**
     * Test case for getFeeAssessmentCategories
     *
     * Get FeeAssessmentCategories.
     *
     */
    public function testGetFeeAssessmentCategories()
    {
    }

    /**
     * Test case for getFeeExemptionWaivers
     *
     * Get FeeExemptionWaivers.
     *
     */
    public function testGetFeeExemptionWaivers()
    {
    }

    /**
     * Test case for getFeeExemptions
     *
     * Get FeeExemptions.
     *
     */
    public function testGetFeeExemptions()
    {
    }

    /**
     * Test case for getFeeTypeIndicators
     *
     * Get FeeTypeIndicators.
     *
     */
    public function testGetFeeTypeIndicators()
    {
    }

    /**
     * Test case for getFeesFreeEligibles
     *
     * Get FeesFreeEligibles.
     *
     */
    public function testGetFeesFreeEligibles()
    {
    }

    /**
     * Test case for getFhAdditionalEntranceCriteria
     *
     * Get FhAdditionalEntranceCriteria.
     *
     */
    public function testGetFhAdditionalEntranceCriteria()
    {
    }

    /**
     * Test case for getFhBasisForAdmission
     *
     * Get FhBasisForAdmission.
     *
     */
    public function testGetFhBasisForAdmission()
    {
    }

    /**
     * Test case for getFhCitizenshipResidents
     *
     * Get FhCitizenshipResidents.
     *
     */
    public function testGetFhCitizenshipResidents()
    {
    }

    /**
     * Test case for getFhFieldOfEducations
     *
     * Get FhFieldOfEducations.
     *
     */
    public function testGetFhFieldOfEducations()
    {
    }

    /**
     * Test case for getFhHighestEducationLevels
     *
     * Get FhHighestEducationLevels.
     *
     */
    public function testGetFhHighestEducationLevels()
    {
    }

    /**
     * Test case for getFhIndigenousStatuses
     *
     * Get FhIndigenousStatuses.
     *
     */
    public function testGetFhIndigenousStatuses()
    {
    }

    /**
     * Test case for getFhParentEducationLevels
     *
     * Get FhParentEducationLevels.
     *
     */
    public function testGetFhParentEducationLevels()
    {
    }

    /**
     * Test case for getFhStudyReasons
     *
     * Get FhStudyReasons.
     *
     */
    public function testGetFhStudyReasons()
    {
    }

    /**
     * Test case for getFpsStatuses
     *
     * Get FpsStatuses.
     *
     */
    public function testGetFpsStatuses()
    {
    }

    /**
     * Test case for getFpsWaiverReasons
     *
     * Get FpsWaiverReasons.
     *
     */
    public function testGetFpsWaiverReasons()
    {
    }

    /**
     * Test case for getFundSourceNationals
     *
     * Get FundSourceNationals.
     *
     */
    public function testGetFundSourceNationals()
    {
    }

    /**
     * Test case for getFundSourceStates
     *
     * Get FundSourceStates.
     *
     */
    public function testGetFundSourceStates()
    {
    }

    /**
     * Test case for getFundSources
     *
     * Get FundSources.
     *
     */
    public function testGetFundSources()
    {
    }

    /**
     * Test case for getGenders
     *
     * Get Genders.
     *
     */
    public function testGetGenders()
    {
    }

    /**
     * Test case for getHighestQualificationTypes
     *
     * Get HighestQualificationTypes.
     *
     */
    public function testGetHighestQualificationTypes()
    {
    }

    /**
     * Test case for getHighestSchoolLevelCompleted
     *
     * Get HighestSchoolLevelCompleted.
     *
     */
    public function testGetHighestSchoolLevelCompleted()
    {
    }

    /**
     * Test case for getIndigenousStatuses
     *
     * Get IndigenousStatuses.
     *
     */
    public function testGetIndigenousStatuses()
    {
    }

    /**
     * Test case for getIndustries
     *
     * Get Industries.
     *
     */
    public function testGetIndustries()
    {
    }

    /**
     * Test case for getIndustriesOfEmployment
     *
     * Get IndustriesOfEmployment.
     *
     */
    public function testGetIndustriesOfEmployment()
    {
    }

    /**
     * Test case for getIndustrySizes
     *
     * Get IndustrySizes.
     *
     */
    public function testGetIndustrySizes()
    {
    }

    /**
     * Test case for getInternetBasedLearnings
     *
     * Get InternetBasedLearnings.
     *
     */
    public function testGetInternetBasedLearnings()
    {
    }

    /**
     * Test case for getLanguages
     *
     * Get Languages.
     *
     */
    public function testGetLanguages()
    {
    }

    /**
     * Test case for getLevelOfEducations
     *
     * Get LevelOfEducations.
     *
     */
    public function testGetLevelOfEducations()
    {
    }

    /**
     * Test case for getLlnBenefits
     *
     * Get LlnBenefits.
     *
     */
    public function testGetLlnBenefits()
    {
    }

    /**
     * Test case for getLlnLevels
     *
     * Get LlnLevels.
     *
     */
    public function testGetLlnLevels()
    {
    }

    /**
     * Test case for getLlnPostAssesses
     *
     * Get LlnPostAssesses.
     *
     */
    public function testGetLlnPostAssesses()
    {
    }

    /**
     * Test case for getLlnPreAssesses
     *
     * Get LlnPreAssesses.
     *
     */
    public function testGetLlnPreAssesses()
    {
    }

    /**
     * Test case for getMainSubjects
     *
     * Get MainSubjects.
     *
     */
    public function testGetMainSubjects()
    {
    }

    /**
     * Test case for getManagedApprenticeships
     *
     * Get ManagedApprenticeships.
     *
     */
    public function testGetManagedApprenticeships()
    {
    }

    /**
     * Test case for getMaritalStatuses
     *
     * Get MaritalStatuses.
     *
     */
    public function testGetMaritalStatuses()
    {
    }

    /**
     * Test case for getMuralAttendances
     *
     * Get MuralAttendances.
     *
     */
    public function testGetMuralAttendances()
    {
    }

    /**
     * Test case for getNextOfKinRelationships
     *
     * Get NextOfKinRelationships.
     *
     */
    public function testGetNextOfKinRelationships()
    {
    }

    /**
     * Test case for getNzCountries
     *
     * Get NzCountries.
     *
     */
    public function testGetNzCountries()
    {
    }

    /**
     * Test case for getNzDisabilityAccessed
     *
     * Get NzDisabilityAccessed.
     *
     */
    public function testGetNzDisabilityAccessed()
    {
    }

    /**
     * Test case for getNzDisabilityFlags
     *
     * Get NzDisabilityFlags.
     *
     */
    public function testGetNzDisabilityFlags()
    {
    }

    /**
     * Test case for getNzEthnicities
     *
     * Get NzEthnicities.
     *
     */
    public function testGetNzEthnicities()
    {
    }

    /**
     * Test case for getNzGenders
     *
     * Get NzGenders.
     *
     */
    public function testGetNzGenders()
    {
    }

    /**
     * Test case for getNzIwiAffiliations
     *
     * Get NzIwiAffiliations.
     *
     */
    public function testGetNzIwiAffiliations()
    {
    }

    /**
     * Test case for getNzLastSchoolsAttended
     *
     * Get NzLastSchoolsAttended.
     *
     */
    public function testGetNzLastSchoolsAttended()
    {
    }

    /**
     * Test case for getNzMainActivitiesPriorToStudy
     *
     * Get NzMainActivitiesPriorToStudy.
     *
     */
    public function testGetNzMainActivitiesPriorToStudy()
    {
    }

    /**
     * Test case for getNzOutcomes
     *
     * Get NzOutcomes.
     *
     */
    public function testGetNzOutcomes()
    {
    }

    /**
     * Test case for getNzResidentialStatuses
     *
     * Get NzResidentialStatuses.
     *
     */
    public function testGetNzResidentialStatuses()
    {
    }

    /**
     * Test case for getNzSecondaryQualifications
     *
     * Get NzSecondaryQualifications.
     *
     */
    public function testGetNzSecondaryQualifications()
    {
    }

    /**
     * Test case for getNzVisaTypes
     *
     * Get NzVisaTypes.
     *
     */
    public function testGetNzVisaTypes()
    {
    }

    /**
     * Test case for getNzqaAwardingProviders
     *
     * Get NzqaAwardingProviders.
     *
     */
    public function testGetNzqaAwardingProviders()
    {
    }

    /**
     * Test case for getNzqaRequestTypes
     *
     * Get NzqaRequestTypes.
     *
     */
    public function testGetNzqaRequestTypes()
    {
    }

    /**
     * Test case for getNzqaResults
     *
     * Get NzqaResults.
     *
     */
    public function testGetNzqaResults()
    {
    }

    /**
     * Test case for getOccupationIdentifiers
     *
     * Get OccupationIdentifiers.
     *
     */
    public function testGetOccupationIdentifiers()
    {
    }

    /**
     * Test case for getOffshoreDeliveryIndicators
     *
     * Get OffshoreDeliveryIndicators.
     *
     */
    public function testGetOffshoreDeliveryIndicators()
    {
    }

    /**
     * Test case for getOffshoreDeliveryModes
     *
     * Get OffshoreDeliveryModes.
     *
     */
    public function testGetOffshoreDeliveryModes()
    {
    }

    /**
     * Test case for getOpportunitySources
     *
     * Get OpportunitySources.
     *
     */
    public function testGetOpportunitySources()
    {
    }

    /**
     * Test case for getOpportunityStages
     *
     * Get OpportunityStages.
     *
     */
    public function testGetOpportunityStages()
    {
    }

    /**
     * Test case for getOpportunityTypes
     *
     * Get OpportunityTypes.
     *
     */
    public function testGetOpportunityTypes()
    {
    }

    /**
     * Test case for getOutcomes
     *
     * Get Outcomes.
     *
     */
    public function testGetOutcomes()
    {
    }

    /**
     * Test case for getPayLevels
     *
     * Get PayLevels.
     *
     */
    public function testGetPayLevels()
    {
    }

    /**
     * Test case for getPaymentTypes
     *
     * Get PaymentTypes.
     *
     */
    public function testGetPaymentTypes()
    {
    }

    /**
     * Test case for getPeriodTypes
     *
     * Get PeriodTypes.
     *
     */
    public function testGetPeriodTypes()
    {
    }

    /**
     * Test case for getPipelines
     *
     * Get pipelines.
     *
     */
    public function testGetPipelines()
    {
    }

    /**
     * Test case for getPositions
     *
     * Get Positions.
     *
     */
    public function testGetPositions()
    {
    }

    /**
     * Test case for getPredominantDeliveryModes
     *
     * Get PredominantDeliveryModes.
     *
     */
    public function testGetPredominantDeliveryModes()
    {
    }

    /**
     * Test case for getPriorEducationFlags
     *
     * Get PriorEducationFlags.
     *
     */
    public function testGetPriorEducationFlags()
    {
    }

    /**
     * Test case for getPriorEducationTypes
     *
     * Get PriorEducationTypes.
     *
     */
    public function testGetPriorEducationTypes()
    {
    }

    /**
     * Test case for getPriorEducations
     *
     * Get PriorEducations.
     *
     */
    public function testGetPriorEducations()
    {
    }

    /**
     * Test case for getProgramStatuses
     *
     * Get ProgramStatuses.
     *
     */
    public function testGetProgramStatuses()
    {
    }

    /**
     * Test case for getPrograms
     *
     * Get Programs.
     *
     */
    public function testGetPrograms()
    {
    }

    /**
     * Test case for getPublishTypes
     *
     * Get PublishTypes.
     *
     */
    public function testGetPublishTypes()
    {
    }

    /**
     * Test case for getQualificationFieldOfEducations
     *
     * Get QualificationFieldOfEducations.
     *
     */
    public function testGetQualificationFieldOfEducations()
    {
    }

    /**
     * Test case for getRecipientTypes
     *
     * Get RecipientTypes.
     *
     */
    public function testGetRecipientTypes()
    {
    }

    /**
     * Test case for getRecognitionStatuses
     *
     * Get RecognitionStatuses.
     *
     */
    public function testGetRecognitionStatuses()
    {
    }

    /**
     * Test case for getRegions
     *
     * Get Regions.
     *
     */
    public function testGetRegions()
    {
    }

    /**
     * Test case for getResults
     *
     * Get Results.
     *
     */
    public function testGetResults()
    {
    }

    /**
     * Test case for getRtoStatuses
     *
     * Get RtoStatuses.
     *
     */
    public function testGetRtoStatuses()
    {
    }

    /**
     * Test case for getSaAlternativeIdentifierTypes
     *
     * Get SaAlternativeIdentifierTypes.
     *
     */
    public function testGetSaAlternativeIdentifierTypes()
    {
    }

    /**
     * Test case for getSaCitizenResidentStatuses
     *
     * Get SaCitizenResidentStatuses.
     *
     */
    public function testGetSaCitizenResidentStatuses()
    {
    }

    /**
     * Test case for getSaEquities
     *
     * Get SaEquities.
     *
     */
    public function testGetSaEquities()
    {
    }

    /**
     * Test case for getSaHealthRatings
     *
     * Get SaHealthRatings.
     *
     */
    public function testGetSaHealthRatings()
    {
    }

    /**
     * Test case for getSaLanguages
     *
     * Get SaLanguages.
     *
     */
    public function testGetSaLanguages()
    {
    }

    /**
     * Test case for getSaNationalities
     *
     * Get SaNationalities.
     *
     */
    public function testGetSaNationalities()
    {
    }

    /**
     * Test case for getSaProvinces
     *
     * Get SaProvinces.
     *
     */
    public function testGetSaProvinces()
    {
    }

    /**
     * Test case for getSaSocioeconomicStatuses
     *
     * Get SaSocioeconomicStatuses.
     *
     */
    public function testGetSaSocioeconomicStatuses()
    {
    }

    /**
     * Test case for getSalesContactStages
     *
     * Get SalesContactStages.
     *
     */
    public function testGetSalesContactStages()
    {
    }

    /**
     * Test case for getSalesContactTypes
     *
     * Get SalesContactTypes.
     *
     */
    public function testGetSalesContactTypes()
    {
    }

    /**
     * Test case for getScholarshipTypes
     *
     * Get ScholarshipTypes.
     *
     */
    public function testGetScholarshipTypes()
    {
    }

    /**
     * Test case for getSchoolTypes
     *
     * Get SchoolTypes.
     *
     */
    public function testGetSchoolTypes()
    {
    }

    /**
     * Test case for getSeparationStatuses
     *
     * Get SeparationStatuses.
     *
     */
    public function testGetSeparationStatuses()
    {
    }

    /**
     * Test case for getSgIdentityDocumentTypes
     *
     * Get SgIdentityDocumentTypes.
     *
     */
    public function testGetSgIdentityDocumentTypes()
    {
    }

    /**
     * Test case for getSgNationalities
     *
     * Get SgNationalities.
     *
     */
    public function testGetSgNationalities()
    {
    }

    /**
     * Test case for getSgNricTypes
     *
     * Get SgNricTypes.
     *
     */
    public function testGetSgNricTypes()
    {
    }

    /**
     * Test case for getSgPriorEducations
     *
     * Get SgPriorEducations.
     *
     */
    public function testGetSgPriorEducations()
    {
    }

    /**
     * Test case for getSgRaces
     *
     * Get SgRaces.
     *
     */
    public function testGetSgRaces()
    {
    }

    /**
     * Test case for getSgResidentialStatuses
     *
     * Get SgResidentialStatuses.
     *
     */
    public function testGetSgResidentialStatuses()
    {
    }

    /**
     * Test case for getSgWsqPriorEducations
     *
     * Get SgWsqPriorEducations.
     *
     */
    public function testGetSgWsqPriorEducations()
    {
    }

    /**
     * Test case for getSpecificProgramIdentifiers
     *
     * Get SpecificProgramIdentifiers.
     *
     */
    public function testGetSpecificProgramIdentifiers()
    {
    }

    /**
     * Test case for getSpokenEnglishProficiencies
     *
     * Get SpokenEnglishProficiencies.
     *
     */
    public function testGetSpokenEnglishProficiencies()
    {
    }

    /**
     * Test case for getStates
     *
     * Get States.
     *
     */
    public function testGetStates()
    {
    }

    /**
     * Test case for getStudentPassRequirements
     *
     * Get StudentPassRequirements.
     *
     */
    public function testGetStudentPassRequirements()
    {
    }

    /**
     * Test case for getStudyModes
     *
     * Get StudyModes.
     *
     */
    public function testGetStudyModes()
    {
    }

    /**
     * Test case for getStudylinkStatusReasons
     *
     * Get StudylinkStatusReasons.
     *
     */
    public function testGetStudylinkStatusReasons()
    {
    }

    /**
     * Test case for getStudylinkStatuses
     *
     * Get StudylinkStatuses.
     *
     */
    public function testGetStudylinkStatuses()
    {
    }

    /**
     * Test case for getSurveyStatuses
     *
     * Get SurveyStatuses.
     *
     */
    public function testGetSurveyStatuses()
    {
    }

    /**
     * Test case for getTargetGroupsCourseEnrolment
     *
     * Get TargetGroupsCourseEnrolment.
     *
     */
    public function testGetTargetGroupsCourseEnrolment()
    {
    }

    /**
     * Test case for getTargetGroupsLearner
     *
     * Get TargetGroupsLearner.
     *
     */
    public function testGetTargetGroupsLearner()
    {
    }

    /**
     * Test case for getTaskCompletionStatuses
     *
     * Get TaskCompletionStatuses.
     *
     */
    public function testGetTaskCompletionStatuses()
    {
    }

    /**
     * Test case for getTaskPriorities
     *
     * Get TaskPriorities.
     *
     */
    public function testGetTaskPriorities()
    {
    }

    /**
     * Test case for getUReportTemplateTypes
     *
     * Get UReportTemplateTypes.
     *
     */
    public function testGetUReportTemplateTypes()
    {
    }

    /**
     * Test case for getUnitFieldOfEducations
     *
     * Get UnitFieldOfEducations.
     *
     */
    public function testGetUnitFieldOfEducations()
    {
    }

    /**
     * Test case for getUnitOfCompetencyFlags
     *
     * Get UnitOfCompetencyFlags.
     *
     */
    public function testGetUnitOfCompetencyFlags()
    {
    }

    /**
     * Test case for getUnitTypes
     *
     * Get UnitTypes.
     *
     */
    public function testGetUnitTypes()
    {
    }

    /**
     * Test case for getVaccineStatuses
     *
     * Get VaccineStatuses.
     *
     */
    public function testGetVaccineStatuses()
    {
    }

    /**
     * Test case for getVenues
     *
     * Get Venues.
     *
     */
    public function testGetVenues()
    {
    }

    /**
     * Test case for getVisaTypes
     *
     * Get VisaTypes.
     *
     */
    public function testGetVisaTypes()
    {
    }

    /**
     * Test case for getVisas
     *
     * Get Visas.
     *
     */
    public function testGetVisas()
    {
    }

    /**
     * Test case for getWinProbabilities
     *
     * Get WinProbabilities.
     *
     */
    public function testGetWinProbabilities()
    {
    }

    /**
     * Test case for getWorkplaceClassifications
     *
     * Get WorkplaceClassifications.
     *
     */
    public function testGetWorkplaceClassifications()
    {
    }

    /**
     * Test case for getWorkplaceTypes
     *
     * Get WorkplaceTypes.
     *
     */
    public function testGetWorkplaceTypes()
    {
    }

    /**
     * Test case for replaceNextOfKinRelationships
     *
     * Replace NextOfKinRelationship.
     *
     */
    public function testReplaceNextOfKinRelationships()
    {
    }

    /**
     * Test case for replaceVisa
     *
     * Replace Visa.
     *
     */
    public function testReplaceVisa()
    {
    }
}
