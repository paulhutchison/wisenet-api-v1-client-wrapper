<?php
/**
 * UnitEnrolment
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
 * UnitEnrolment Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnitEnrolment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnitEnrolment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unit_enrolment_id' => 'int',
'unit_offer_id' => 'int',
'course_enrolment_id' => 'int',
'assessment_method_id' => 'int',
'contract_id' => 'int',
'assessor_id' => 'int',
'trainer_id' => 'int',
'location_id' => 'int',
'specific_program_id' => 'int',
'proposed_start_date' => '\DateTime',
'proposed_end_date' => '\DateTime',
'start_date' => '\DateTime',
'end_date' => '\DateTime',
'actual_end_date' => '\DateTime',
'expiry_date' => '\DateTime',
'census_date' => '\DateTime',
'concession_flag' => 'bool',
'for_govt_reporting_flag' => 'bool',
'final_score' => 'string',
'theory_score' => 'string',
'practical_score' => 'string',
'unit_hourly_fee' => 'double',
'hours_supervised' => 'int',
'hours_unsupervised' => 'int',
'actual_hours' => 'int',
'unit_fees' => 'double',
'resource_fee' => 'double',
'loan_liability' => 'double',
'previous_identifier' => 'string',
'notes' => 'string',
'fee_exemption_id' => 'int',
'fee_exemption_waiver_id' => 'int',
'stage' => 'int',
'points' => 'int',
'result_id' => 'int',
'outcome_id' => 'int',
'vet_in_school_flag' => 'bool',
'delivery_mode_id' => 'int',
'delivery_workplace_id' => 'int',
'fund_source_national_id' => 'int',
'fund_source_state_id' => 'int',
'efts_factor' => 'string',
'foreign_fee' => 'double',
'maxima_exempt_fee' => 'double',
'fee_assessment_category_id' => 'int',
'mural_attendance_id' => 'int',
'nz_outcome_id' => 'int',
'nzqa_result_id' => 'int',
'grade_point' => 'double',
'extension_date' => '\DateTime',
'tuition_weeks' => 'double',
'fund_source_id' => 'int',
'delivery_mode_av8_id' => 'int',
'predominant_delivery_mode_id' => 'int',
'delivery_mode_wa1_id' => 'int',
'delivery_mode_wa2_id' => 'int',
'delivery_mode_wa3_id' => 'int',
'employer_invoiced_flag' => 'string',
'funding_removed_flag' => 'string',
'assessment_url' => 'string',
'is_locked_flag' => 'bool',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unit_enrolment_id' => 'int32',
'unit_offer_id' => 'int32',
'course_enrolment_id' => 'int32',
'assessment_method_id' => 'int32',
'contract_id' => 'int32',
'assessor_id' => 'int32',
'trainer_id' => 'int32',
'location_id' => 'int32',
'specific_program_id' => 'int32',
'proposed_start_date' => 'date-time',
'proposed_end_date' => 'date-time',
'start_date' => 'date-time',
'end_date' => 'date-time',
'actual_end_date' => 'date-time',
'expiry_date' => 'date-time',
'census_date' => 'date-time',
'concession_flag' => null,
'for_govt_reporting_flag' => null,
'final_score' => '50',
'theory_score' => '50',
'practical_score' => '50',
'unit_hourly_fee' => 'double',
'hours_supervised' => 'int32',
'hours_unsupervised' => 'int32',
'actual_hours' => 'int32',
'unit_fees' => 'double',
'resource_fee' => 'double',
'loan_liability' => 'double',
'previous_identifier' => '100',
'notes' => '4000',
'fee_exemption_id' => 'int32',
'fee_exemption_waiver_id' => 'int32',
'stage' => 'int32',
'points' => 'int32',
'result_id' => 'int32',
'outcome_id' => 'int32',
'vet_in_school_flag' => null,
'delivery_mode_id' => 'int32',
'delivery_workplace_id' => 'int32',
'fund_source_national_id' => 'int32',
'fund_source_state_id' => 'int32',
'efts_factor' => '6',
'foreign_fee' => 'double',
'maxima_exempt_fee' => 'double',
'fee_assessment_category_id' => 'int32',
'mural_attendance_id' => 'int32',
'nz_outcome_id' => 'int32',
'nzqa_result_id' => 'int32',
'grade_point' => 'double',
'extension_date' => 'date-time',
'tuition_weeks' => 'double',
'fund_source_id' => 'int32',
'delivery_mode_av8_id' => 'int32',
'predominant_delivery_mode_id' => 'int32',
'delivery_mode_wa1_id' => 'int32',
'delivery_mode_wa2_id' => 'int32',
'delivery_mode_wa3_id' => 'int32',
'employer_invoiced_flag' => 'Y or N',
'funding_removed_flag' => 'Y or N',
'assessment_url' => '400',
'is_locked_flag' => null,
'last_modified_time_stamp' => 'date-time'    ];

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
        'unit_enrolment_id' => 'UnitEnrolmentId',
'unit_offer_id' => 'UnitOfferId',
'course_enrolment_id' => 'CourseEnrolmentId',
'assessment_method_id' => 'AssessmentMethodId',
'contract_id' => 'ContractId',
'assessor_id' => 'AssessorId',
'trainer_id' => 'TrainerId',
'location_id' => 'LocationId',
'specific_program_id' => 'SpecificProgramId',
'proposed_start_date' => 'ProposedStartDate',
'proposed_end_date' => 'ProposedEndDate',
'start_date' => 'StartDate',
'end_date' => 'EndDate',
'actual_end_date' => 'ActualEndDate',
'expiry_date' => 'ExpiryDate',
'census_date' => 'CensusDate',
'concession_flag' => 'ConcessionFlag',
'for_govt_reporting_flag' => 'ForGovtReportingFlag',
'final_score' => 'FinalScore',
'theory_score' => 'TheoryScore',
'practical_score' => 'PracticalScore',
'unit_hourly_fee' => 'UnitHourlyFee',
'hours_supervised' => 'HoursSupervised',
'hours_unsupervised' => 'HoursUnsupervised',
'actual_hours' => 'ActualHours',
'unit_fees' => 'UnitFees',
'resource_fee' => 'ResourceFee',
'loan_liability' => 'LoanLiability',
'previous_identifier' => 'PreviousIdentifier',
'notes' => 'Notes',
'fee_exemption_id' => 'FeeExemptionId',
'fee_exemption_waiver_id' => 'FeeExemptionWaiverId',
'stage' => 'Stage',
'points' => 'Points',
'result_id' => 'ResultId',
'outcome_id' => 'OutcomeId',
'vet_in_school_flag' => 'VetInSchoolFlag',
'delivery_mode_id' => 'DeliveryModeId',
'delivery_workplace_id' => 'DeliveryWorkplaceId',
'fund_source_national_id' => 'FundSourceNationalId',
'fund_source_state_id' => 'FundSourceStateId',
'efts_factor' => 'EftsFactor',
'foreign_fee' => 'ForeignFee',
'maxima_exempt_fee' => 'MaximaExemptFee',
'fee_assessment_category_id' => 'FeeAssessmentCategoryId',
'mural_attendance_id' => 'MuralAttendanceId',
'nz_outcome_id' => 'NzOutcomeId',
'nzqa_result_id' => 'NzqaResultId',
'grade_point' => 'GradePoint',
'extension_date' => 'ExtensionDate',
'tuition_weeks' => 'TuitionWeeks',
'fund_source_id' => 'FundSourceId',
'delivery_mode_av8_id' => 'DeliveryModeAv8Id',
'predominant_delivery_mode_id' => 'PredominantDeliveryModeId',
'delivery_mode_wa1_id' => 'DeliveryModeWa1Id',
'delivery_mode_wa2_id' => 'DeliveryModeWa2Id',
'delivery_mode_wa3_id' => 'DeliveryModeWa3Id',
'employer_invoiced_flag' => 'EmployerInvoicedFlag',
'funding_removed_flag' => 'FundingRemovedFlag',
'assessment_url' => 'AssessmentUrl',
'is_locked_flag' => 'IsLockedFlag',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unit_enrolment_id' => 'setUnitEnrolmentId',
'unit_offer_id' => 'setUnitOfferId',
'course_enrolment_id' => 'setCourseEnrolmentId',
'assessment_method_id' => 'setAssessmentMethodId',
'contract_id' => 'setContractId',
'assessor_id' => 'setAssessorId',
'trainer_id' => 'setTrainerId',
'location_id' => 'setLocationId',
'specific_program_id' => 'setSpecificProgramId',
'proposed_start_date' => 'setProposedStartDate',
'proposed_end_date' => 'setProposedEndDate',
'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'actual_end_date' => 'setActualEndDate',
'expiry_date' => 'setExpiryDate',
'census_date' => 'setCensusDate',
'concession_flag' => 'setConcessionFlag',
'for_govt_reporting_flag' => 'setForGovtReportingFlag',
'final_score' => 'setFinalScore',
'theory_score' => 'setTheoryScore',
'practical_score' => 'setPracticalScore',
'unit_hourly_fee' => 'setUnitHourlyFee',
'hours_supervised' => 'setHoursSupervised',
'hours_unsupervised' => 'setHoursUnsupervised',
'actual_hours' => 'setActualHours',
'unit_fees' => 'setUnitFees',
'resource_fee' => 'setResourceFee',
'loan_liability' => 'setLoanLiability',
'previous_identifier' => 'setPreviousIdentifier',
'notes' => 'setNotes',
'fee_exemption_id' => 'setFeeExemptionId',
'fee_exemption_waiver_id' => 'setFeeExemptionWaiverId',
'stage' => 'setStage',
'points' => 'setPoints',
'result_id' => 'setResultId',
'outcome_id' => 'setOutcomeId',
'vet_in_school_flag' => 'setVetInSchoolFlag',
'delivery_mode_id' => 'setDeliveryModeId',
'delivery_workplace_id' => 'setDeliveryWorkplaceId',
'fund_source_national_id' => 'setFundSourceNationalId',
'fund_source_state_id' => 'setFundSourceStateId',
'efts_factor' => 'setEftsFactor',
'foreign_fee' => 'setForeignFee',
'maxima_exempt_fee' => 'setMaximaExemptFee',
'fee_assessment_category_id' => 'setFeeAssessmentCategoryId',
'mural_attendance_id' => 'setMuralAttendanceId',
'nz_outcome_id' => 'setNzOutcomeId',
'nzqa_result_id' => 'setNzqaResultId',
'grade_point' => 'setGradePoint',
'extension_date' => 'setExtensionDate',
'tuition_weeks' => 'setTuitionWeeks',
'fund_source_id' => 'setFundSourceId',
'delivery_mode_av8_id' => 'setDeliveryModeAv8Id',
'predominant_delivery_mode_id' => 'setPredominantDeliveryModeId',
'delivery_mode_wa1_id' => 'setDeliveryModeWa1Id',
'delivery_mode_wa2_id' => 'setDeliveryModeWa2Id',
'delivery_mode_wa3_id' => 'setDeliveryModeWa3Id',
'employer_invoiced_flag' => 'setEmployerInvoicedFlag',
'funding_removed_flag' => 'setFundingRemovedFlag',
'assessment_url' => 'setAssessmentUrl',
'is_locked_flag' => 'setIsLockedFlag',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unit_enrolment_id' => 'getUnitEnrolmentId',
'unit_offer_id' => 'getUnitOfferId',
'course_enrolment_id' => 'getCourseEnrolmentId',
'assessment_method_id' => 'getAssessmentMethodId',
'contract_id' => 'getContractId',
'assessor_id' => 'getAssessorId',
'trainer_id' => 'getTrainerId',
'location_id' => 'getLocationId',
'specific_program_id' => 'getSpecificProgramId',
'proposed_start_date' => 'getProposedStartDate',
'proposed_end_date' => 'getProposedEndDate',
'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'actual_end_date' => 'getActualEndDate',
'expiry_date' => 'getExpiryDate',
'census_date' => 'getCensusDate',
'concession_flag' => 'getConcessionFlag',
'for_govt_reporting_flag' => 'getForGovtReportingFlag',
'final_score' => 'getFinalScore',
'theory_score' => 'getTheoryScore',
'practical_score' => 'getPracticalScore',
'unit_hourly_fee' => 'getUnitHourlyFee',
'hours_supervised' => 'getHoursSupervised',
'hours_unsupervised' => 'getHoursUnsupervised',
'actual_hours' => 'getActualHours',
'unit_fees' => 'getUnitFees',
'resource_fee' => 'getResourceFee',
'loan_liability' => 'getLoanLiability',
'previous_identifier' => 'getPreviousIdentifier',
'notes' => 'getNotes',
'fee_exemption_id' => 'getFeeExemptionId',
'fee_exemption_waiver_id' => 'getFeeExemptionWaiverId',
'stage' => 'getStage',
'points' => 'getPoints',
'result_id' => 'getResultId',
'outcome_id' => 'getOutcomeId',
'vet_in_school_flag' => 'getVetInSchoolFlag',
'delivery_mode_id' => 'getDeliveryModeId',
'delivery_workplace_id' => 'getDeliveryWorkplaceId',
'fund_source_national_id' => 'getFundSourceNationalId',
'fund_source_state_id' => 'getFundSourceStateId',
'efts_factor' => 'getEftsFactor',
'foreign_fee' => 'getForeignFee',
'maxima_exempt_fee' => 'getMaximaExemptFee',
'fee_assessment_category_id' => 'getFeeAssessmentCategoryId',
'mural_attendance_id' => 'getMuralAttendanceId',
'nz_outcome_id' => 'getNzOutcomeId',
'nzqa_result_id' => 'getNzqaResultId',
'grade_point' => 'getGradePoint',
'extension_date' => 'getExtensionDate',
'tuition_weeks' => 'getTuitionWeeks',
'fund_source_id' => 'getFundSourceId',
'delivery_mode_av8_id' => 'getDeliveryModeAv8Id',
'predominant_delivery_mode_id' => 'getPredominantDeliveryModeId',
'delivery_mode_wa1_id' => 'getDeliveryModeWa1Id',
'delivery_mode_wa2_id' => 'getDeliveryModeWa2Id',
'delivery_mode_wa3_id' => 'getDeliveryModeWa3Id',
'employer_invoiced_flag' => 'getEmployerInvoicedFlag',
'funding_removed_flag' => 'getFundingRemovedFlag',
'assessment_url' => 'getAssessmentUrl',
'is_locked_flag' => 'getIsLockedFlag',
'last_modified_time_stamp' => 'getLastModifiedTimeStamp'    ];

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
        $this->container['unit_enrolment_id'] = isset($data['unit_enrolment_id']) ? $data['unit_enrolment_id'] : null;
        $this->container['unit_offer_id'] = isset($data['unit_offer_id']) ? $data['unit_offer_id'] : null;
        $this->container['course_enrolment_id'] = isset($data['course_enrolment_id']) ? $data['course_enrolment_id'] : null;
        $this->container['assessment_method_id'] = isset($data['assessment_method_id']) ? $data['assessment_method_id'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['assessor_id'] = isset($data['assessor_id']) ? $data['assessor_id'] : null;
        $this->container['trainer_id'] = isset($data['trainer_id']) ? $data['trainer_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['specific_program_id'] = isset($data['specific_program_id']) ? $data['specific_program_id'] : null;
        $this->container['proposed_start_date'] = isset($data['proposed_start_date']) ? $data['proposed_start_date'] : null;
        $this->container['proposed_end_date'] = isset($data['proposed_end_date']) ? $data['proposed_end_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['actual_end_date'] = isset($data['actual_end_date']) ? $data['actual_end_date'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['census_date'] = isset($data['census_date']) ? $data['census_date'] : null;
        $this->container['concession_flag'] = isset($data['concession_flag']) ? $data['concession_flag'] : null;
        $this->container['for_govt_reporting_flag'] = isset($data['for_govt_reporting_flag']) ? $data['for_govt_reporting_flag'] : null;
        $this->container['final_score'] = isset($data['final_score']) ? $data['final_score'] : null;
        $this->container['theory_score'] = isset($data['theory_score']) ? $data['theory_score'] : null;
        $this->container['practical_score'] = isset($data['practical_score']) ? $data['practical_score'] : null;
        $this->container['unit_hourly_fee'] = isset($data['unit_hourly_fee']) ? $data['unit_hourly_fee'] : null;
        $this->container['hours_supervised'] = isset($data['hours_supervised']) ? $data['hours_supervised'] : null;
        $this->container['hours_unsupervised'] = isset($data['hours_unsupervised']) ? $data['hours_unsupervised'] : null;
        $this->container['actual_hours'] = isset($data['actual_hours']) ? $data['actual_hours'] : null;
        $this->container['unit_fees'] = isset($data['unit_fees']) ? $data['unit_fees'] : null;
        $this->container['resource_fee'] = isset($data['resource_fee']) ? $data['resource_fee'] : null;
        $this->container['loan_liability'] = isset($data['loan_liability']) ? $data['loan_liability'] : null;
        $this->container['previous_identifier'] = isset($data['previous_identifier']) ? $data['previous_identifier'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['fee_exemption_id'] = isset($data['fee_exemption_id']) ? $data['fee_exemption_id'] : null;
        $this->container['fee_exemption_waiver_id'] = isset($data['fee_exemption_waiver_id']) ? $data['fee_exemption_waiver_id'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['result_id'] = isset($data['result_id']) ? $data['result_id'] : null;
        $this->container['outcome_id'] = isset($data['outcome_id']) ? $data['outcome_id'] : null;
        $this->container['vet_in_school_flag'] = isset($data['vet_in_school_flag']) ? $data['vet_in_school_flag'] : null;
        $this->container['delivery_mode_id'] = isset($data['delivery_mode_id']) ? $data['delivery_mode_id'] : null;
        $this->container['delivery_workplace_id'] = isset($data['delivery_workplace_id']) ? $data['delivery_workplace_id'] : null;
        $this->container['fund_source_national_id'] = isset($data['fund_source_national_id']) ? $data['fund_source_national_id'] : null;
        $this->container['fund_source_state_id'] = isset($data['fund_source_state_id']) ? $data['fund_source_state_id'] : null;
        $this->container['efts_factor'] = isset($data['efts_factor']) ? $data['efts_factor'] : null;
        $this->container['foreign_fee'] = isset($data['foreign_fee']) ? $data['foreign_fee'] : null;
        $this->container['maxima_exempt_fee'] = isset($data['maxima_exempt_fee']) ? $data['maxima_exempt_fee'] : null;
        $this->container['fee_assessment_category_id'] = isset($data['fee_assessment_category_id']) ? $data['fee_assessment_category_id'] : null;
        $this->container['mural_attendance_id'] = isset($data['mural_attendance_id']) ? $data['mural_attendance_id'] : null;
        $this->container['nz_outcome_id'] = isset($data['nz_outcome_id']) ? $data['nz_outcome_id'] : null;
        $this->container['nzqa_result_id'] = isset($data['nzqa_result_id']) ? $data['nzqa_result_id'] : null;
        $this->container['grade_point'] = isset($data['grade_point']) ? $data['grade_point'] : null;
        $this->container['extension_date'] = isset($data['extension_date']) ? $data['extension_date'] : null;
        $this->container['tuition_weeks'] = isset($data['tuition_weeks']) ? $data['tuition_weeks'] : null;
        $this->container['fund_source_id'] = isset($data['fund_source_id']) ? $data['fund_source_id'] : null;
        $this->container['delivery_mode_av8_id'] = isset($data['delivery_mode_av8_id']) ? $data['delivery_mode_av8_id'] : null;
        $this->container['predominant_delivery_mode_id'] = isset($data['predominant_delivery_mode_id']) ? $data['predominant_delivery_mode_id'] : null;
        $this->container['delivery_mode_wa1_id'] = isset($data['delivery_mode_wa1_id']) ? $data['delivery_mode_wa1_id'] : null;
        $this->container['delivery_mode_wa2_id'] = isset($data['delivery_mode_wa2_id']) ? $data['delivery_mode_wa2_id'] : null;
        $this->container['delivery_mode_wa3_id'] = isset($data['delivery_mode_wa3_id']) ? $data['delivery_mode_wa3_id'] : null;
        $this->container['employer_invoiced_flag'] = isset($data['employer_invoiced_flag']) ? $data['employer_invoiced_flag'] : null;
        $this->container['funding_removed_flag'] = isset($data['funding_removed_flag']) ? $data['funding_removed_flag'] : null;
        $this->container['assessment_url'] = isset($data['assessment_url']) ? $data['assessment_url'] : null;
        $this->container['is_locked_flag'] = isset($data['is_locked_flag']) ? $data['is_locked_flag'] : null;
        $this->container['last_modified_time_stamp'] = isset($data['last_modified_time_stamp']) ? $data['last_modified_time_stamp'] : null;
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
     * Gets unit_enrolment_id
     *
     * @return int
     */
    public function getUnitEnrolmentId()
    {
        return $this->container['unit_enrolment_id'];
    }

    /**
     * Sets unit_enrolment_id
     *
     * @param int $unit_enrolment_id Primary Id for unit enrolment that is auto generated
     *
     * @return $this
     */
    public function setUnitEnrolmentId($unit_enrolment_id)
    {
        $this->container['unit_enrolment_id'] = $unit_enrolment_id;

        return $this;
    }

    /**
     * Gets unit_offer_id
     *
     * @return int
     */
    public function getUnitOfferId()
    {
        return $this->container['unit_offer_id'];
    }

    /**
     * Sets unit_offer_id
     *
     * @param int $unit_offer_id See entity UnitOffers
     *
     * @return $this
     */
    public function setUnitOfferId($unit_offer_id)
    {
        $this->container['unit_offer_id'] = $unit_offer_id;

        return $this;
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
     * @param int $course_enrolment_id See entity CourseEnrolments
     *
     * @return $this
     */
    public function setCourseEnrolmentId($course_enrolment_id)
    {
        $this->container['course_enrolment_id'] = $course_enrolment_id;

        return $this;
    }

    /**
     * Gets assessment_method_id
     *
     * @return int
     */
    public function getAssessmentMethodId()
    {
        return $this->container['assessment_method_id'];
    }

    /**
     * Sets assessment_method_id
     *
     * @param int $assessment_method_id See combo AssessmentMethods
     *
     * @return $this
     */
    public function setAssessmentMethodId($assessment_method_id)
    {
        $this->container['assessment_method_id'] = $assessment_method_id;

        return $this;
    }

    /**
     * Gets contract_id
     *
     * @return int
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     *
     * @param int $contract_id AU only. See entity Contracts
     *
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

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
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id See entity Locations
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets specific_program_id
     *
     * @return int
     */
    public function getSpecificProgramId()
    {
        return $this->container['specific_program_id'];
    }

    /**
     * Sets specific_program_id
     *
     * @param int $specific_program_id AU only. See combo SpecificPrograms
     *
     * @return $this
     */
    public function setSpecificProgramId($specific_program_id)
    {
        $this->container['specific_program_id'] = $specific_program_id;

        return $this;
    }

    /**
     * Gets proposed_start_date
     *
     * @return \DateTime
     */
    public function getProposedStartDate()
    {
        return $this->container['proposed_start_date'];
    }

    /**
     * Sets proposed_start_date
     *
     * @param \DateTime $proposed_start_date Proposed Start Date of the unit enrolment
     *
     * @return $this
     */
    public function setProposedStartDate($proposed_start_date)
    {
        $this->container['proposed_start_date'] = $proposed_start_date;

        return $this;
    }

    /**
     * Gets proposed_end_date
     *
     * @return \DateTime
     */
    public function getProposedEndDate()
    {
        return $this->container['proposed_end_date'];
    }

    /**
     * Sets proposed_end_date
     *
     * @param \DateTime $proposed_end_date Proposed End Date of the unit enrolment
     *
     * @return $this
     */
    public function setProposedEndDate($proposed_end_date)
    {
        $this->container['proposed_end_date'] = $proposed_end_date;

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
     * @param \DateTime $start_date Start Date of the unit enrolment
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
     * @param \DateTime $end_date End Date of the unit enrolment
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * @param \DateTime $actual_end_date Actual End Date of the unit enrolment
     *
     * @return $this
     */
    public function setActualEndDate($actual_end_date)
    {
        $this->container['actual_end_date'] = $actual_end_date;

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
     * @param \DateTime $expiry_date Expiry Date of the unit enrolment
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets census_date
     *
     * @return \DateTime
     */
    public function getCensusDate()
    {
        return $this->container['census_date'];
    }

    /**
     * Sets census_date
     *
     * @param \DateTime $census_date Census Date of the unit enrolment
     *
     * @return $this
     */
    public function setCensusDate($census_date)
    {
        $this->container['census_date'] = $census_date;

        return $this;
    }

    /**
     * Gets concession_flag
     *
     * @return bool
     */
    public function getConcessionFlag()
    {
        return $this->container['concession_flag'];
    }

    /**
     * Sets concession_flag
     *
     * @param bool $concession_flag To indicate if the learner is eligible for a concession or not
     *
     * @return $this
     */
    public function setConcessionFlag($concession_flag)
    {
        $this->container['concession_flag'] = $concession_flag;

        return $this;
    }

    /**
     * Gets for_govt_reporting_flag
     *
     * @return bool
     */
    public function getForGovtReportingFlag()
    {
        return $this->container['for_govt_reporting_flag'];
    }

    /**
     * Sets for_govt_reporting_flag
     *
     * @param bool $for_govt_reporting_flag For AVETMISS flag (AU), For SDR flag (NZ), For Reporting flag (SG)
     *
     * @return $this
     */
    public function setForGovtReportingFlag($for_govt_reporting_flag)
    {
        $this->container['for_govt_reporting_flag'] = $for_govt_reporting_flag;

        return $this;
    }

    /**
     * Gets final_score
     *
     * @return string
     */
    public function getFinalScore()
    {
        return $this->container['final_score'];
    }

    /**
     * Sets final_score
     *
     * @param string $final_score Final Score of the unit enrolment
     *
     * @return $this
     */
    public function setFinalScore($final_score)
    {
        $this->container['final_score'] = $final_score;

        return $this;
    }

    /**
     * Gets theory_score
     *
     * @return string
     */
    public function getTheoryScore()
    {
        return $this->container['theory_score'];
    }

    /**
     * Sets theory_score
     *
     * @param string $theory_score Theory Score of the unit enrolment
     *
     * @return $this
     */
    public function setTheoryScore($theory_score)
    {
        $this->container['theory_score'] = $theory_score;

        return $this;
    }

    /**
     * Gets practical_score
     *
     * @return string
     */
    public function getPracticalScore()
    {
        return $this->container['practical_score'];
    }

    /**
     * Sets practical_score
     *
     * @param string $practical_score Practical Score of the unit enrolment
     *
     * @return $this
     */
    public function setPracticalScore($practical_score)
    {
        $this->container['practical_score'] = $practical_score;

        return $this;
    }

    /**
     * Gets unit_hourly_fee
     *
     * @return double
     */
    public function getUnitHourlyFee()
    {
        return $this->container['unit_hourly_fee'];
    }

    /**
     * Sets unit_hourly_fee
     *
     * @param double $unit_hourly_fee Hourly Fee of the unit enrolment
     *
     * @return $this
     */
    public function setUnitHourlyFee($unit_hourly_fee)
    {
        $this->container['unit_hourly_fee'] = $unit_hourly_fee;

        return $this;
    }

    /**
     * Gets hours_supervised
     *
     * @return int
     */
    public function getHoursSupervised()
    {
        return $this->container['hours_supervised'];
    }

    /**
     * Sets hours_supervised
     *
     * @param int $hours_supervised Supervised Hours of the unit enrolment
     *
     * @return $this
     */
    public function setHoursSupervised($hours_supervised)
    {
        $this->container['hours_supervised'] = $hours_supervised;

        return $this;
    }

    /**
     * Gets hours_unsupervised
     *
     * @return int
     */
    public function getHoursUnsupervised()
    {
        return $this->container['hours_unsupervised'];
    }

    /**
     * Sets hours_unsupervised
     *
     * @param int $hours_unsupervised Unsupervised Hours of the unit enrolment
     *
     * @return $this
     */
    public function setHoursUnsupervised($hours_unsupervised)
    {
        $this->container['hours_unsupervised'] = $hours_unsupervised;

        return $this;
    }

    /**
     * Gets actual_hours
     *
     * @return int
     */
    public function getActualHours()
    {
        return $this->container['actual_hours'];
    }

    /**
     * Sets actual_hours
     *
     * @param int $actual_hours Actual Hours of the unit enrolment
     *
     * @return $this
     */
    public function setActualHours($actual_hours)
    {
        $this->container['actual_hours'] = $actual_hours;

        return $this;
    }

    /**
     * Gets unit_fees
     *
     * @return double
     */
    public function getUnitFees()
    {
        return $this->container['unit_fees'];
    }

    /**
     * Sets unit_fees
     *
     * @param double $unit_fees Total Unit Fees of the unit enrolment
     *
     * @return $this
     */
    public function setUnitFees($unit_fees)
    {
        $this->container['unit_fees'] = $unit_fees;

        return $this;
    }

    /**
     * Gets resource_fee
     *
     * @return double
     */
    public function getResourceFee()
    {
        return $this->container['resource_fee'];
    }

    /**
     * Sets resource_fee
     *
     * @param double $resource_fee AU only. Non tuition fee amount charged for enrolments in this Unit Offer(WA)
     *
     * @return $this
     */
    public function setResourceFee($resource_fee)
    {
        $this->container['resource_fee'] = $resource_fee;

        return $this;
    }

    /**
     * Gets loan_liability
     *
     * @return double
     */
    public function getLoanLiability()
    {
        return $this->container['loan_liability'];
    }

    /**
     * Sets loan_liability
     *
     * @param double $loan_liability AU only. Loan Liability of the unit enrolment(WA)
     *
     * @return $this
     */
    public function setLoanLiability($loan_liability)
    {
        $this->container['loan_liability'] = $loan_liability;

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
     * @param string $previous_identifier The previous identifier associated with the unit enrolment
     *
     * @return $this
     */
    public function setPreviousIdentifier($previous_identifier)
    {
        $this->container['previous_identifier'] = $previous_identifier;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Additional Notes related to the unit enrolment
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets fee_exemption_id
     *
     * @return int
     */
    public function getFeeExemptionId()
    {
        return $this->container['fee_exemption_id'];
    }

    /**
     * Sets fee_exemption_id
     *
     * @param int $fee_exemption_id See combo FeeExemptions
     *
     * @return $this
     */
    public function setFeeExemptionId($fee_exemption_id)
    {
        $this->container['fee_exemption_id'] = $fee_exemption_id;

        return $this;
    }

    /**
     * Gets fee_exemption_waiver_id
     *
     * @return int
     */
    public function getFeeExemptionWaiverId()
    {
        return $this->container['fee_exemption_waiver_id'];
    }

    /**
     * Sets fee_exemption_waiver_id
     *
     * @param int $fee_exemption_waiver_id See combo FeeExemptionWaivers
     *
     * @return $this
     */
    public function setFeeExemptionWaiverId($fee_exemption_waiver_id)
    {
        $this->container['fee_exemption_waiver_id'] = $fee_exemption_waiver_id;

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
     * @param int $stage Stage the unit enrolment is delivered
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
     * @param int $points Points achieved in the unit enrolment
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets result_id
     *
     * @return int
     */
    public function getResultId()
    {
        return $this->container['result_id'];
    }

    /**
     * Sets result_id
     *
     * @param int $result_id See combo Results
     *
     * @return $this
     */
    public function setResultId($result_id)
    {
        $this->container['result_id'] = $result_id;

        return $this;
    }

    /**
     * Gets outcome_id
     *
     * @return int
     */
    public function getOutcomeId()
    {
        return $this->container['outcome_id'];
    }

    /**
     * Sets outcome_id
     *
     * @param int $outcome_id AU only. See combo Outcomes
     *
     * @return $this
     */
    public function setOutcomeId($outcome_id)
    {
        $this->container['outcome_id'] = $outcome_id;

        return $this;
    }

    /**
     * Gets vet_in_school_flag
     *
     * @return bool
     */
    public function getVetInSchoolFlag()
    {
        return $this->container['vet_in_school_flag'];
    }

    /**
     * Sets vet_in_school_flag
     *
     * @param bool $vet_in_school_flag AU only. To indicate if the learner is completing the unit through a school
     *
     * @return $this
     */
    public function setVetInSchoolFlag($vet_in_school_flag)
    {
        $this->container['vet_in_school_flag'] = $vet_in_school_flag;

        return $this;
    }

    /**
     * Gets delivery_mode_id
     *
     * @return int
     */
    public function getDeliveryModeId()
    {
        return $this->container['delivery_mode_id'];
    }

    /**
     * Sets delivery_mode_id
     *
     * @param int $delivery_mode_id AU only. See combo DeliveryModes
     *
     * @return $this
     */
    public function setDeliveryModeId($delivery_mode_id)
    {
        $this->container['delivery_mode_id'] = $delivery_mode_id;

        return $this;
    }

    /**
     * Gets delivery_workplace_id
     *
     * @return int
     */
    public function getDeliveryWorkplaceId()
    {
        return $this->container['delivery_workplace_id'];
    }

    /**
     * Sets delivery_workplace_id
     *
     * @param int $delivery_workplace_id AU only. See entity Workplaces
     *
     * @return $this
     */
    public function setDeliveryWorkplaceId($delivery_workplace_id)
    {
        $this->container['delivery_workplace_id'] = $delivery_workplace_id;

        return $this;
    }

    /**
     * Gets fund_source_national_id
     *
     * @return int
     */
    public function getFundSourceNationalId()
    {
        return $this->container['fund_source_national_id'];
    }

    /**
     * Sets fund_source_national_id
     *
     * @param int $fund_source_national_id AU only. See combo FundSourceNationals
     *
     * @return $this
     */
    public function setFundSourceNationalId($fund_source_national_id)
    {
        $this->container['fund_source_national_id'] = $fund_source_national_id;

        return $this;
    }

    /**
     * Gets fund_source_state_id
     *
     * @return int
     */
    public function getFundSourceStateId()
    {
        return $this->container['fund_source_state_id'];
    }

    /**
     * Sets fund_source_state_id
     *
     * @param int $fund_source_state_id AU only. See combo FundSourceStates
     *
     * @return $this
     */
    public function setFundSourceStateId($fund_source_state_id)
    {
        $this->container['fund_source_state_id'] = $fund_source_state_id;

        return $this;
    }

    /**
     * Gets efts_factor
     *
     * @return string
     */
    public function getEftsFactor()
    {
        return $this->container['efts_factor'];
    }

    /**
     * Sets efts_factor
     *
     * @param string $efts_factor NZ only. EFTS Factor which should be between 0.0000 and 1.0000
     *
     * @return $this
     */
    public function setEftsFactor($efts_factor)
    {
        $this->container['efts_factor'] = $efts_factor;

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
     * @param double $foreign_fee NZ only. Tuition Fees paid by international fee-paying student
     *
     * @return $this
     */
    public function setForeignFee($foreign_fee)
    {
        $this->container['foreign_fee'] = $foreign_fee;

        return $this;
    }

    /**
     * Gets maxima_exempt_fee
     *
     * @return double
     */
    public function getMaximaExemptFee()
    {
        return $this->container['maxima_exempt_fee'];
    }

    /**
     * Sets maxima_exempt_fee
     *
     * @param double $maxima_exempt_fee NZ only. Sum of all non maxima fees charged to the learner
     *
     * @return $this
     */
    public function setMaximaExemptFee($maxima_exempt_fee)
    {
        $this->container['maxima_exempt_fee'] = $maxima_exempt_fee;

        return $this;
    }

    /**
     * Gets fee_assessment_category_id
     *
     * @return int
     */
    public function getFeeAssessmentCategoryId()
    {
        return $this->container['fee_assessment_category_id'];
    }

    /**
     * Sets fee_assessment_category_id
     *
     * @param int $fee_assessment_category_id NZ only. See combo FeeAssessmentCategories
     *
     * @return $this
     */
    public function setFeeAssessmentCategoryId($fee_assessment_category_id)
    {
        $this->container['fee_assessment_category_id'] = $fee_assessment_category_id;

        return $this;
    }

    /**
     * Gets mural_attendance_id
     *
     * @return int
     */
    public function getMuralAttendanceId()
    {
        return $this->container['mural_attendance_id'];
    }

    /**
     * Sets mural_attendance_id
     *
     * @param int $mural_attendance_id NZ only. See combo MuralAttendances
     *
     * @return $this
     */
    public function setMuralAttendanceId($mural_attendance_id)
    {
        $this->container['mural_attendance_id'] = $mural_attendance_id;

        return $this;
    }

    /**
     * Gets nz_outcome_id
     *
     * @return int
     */
    public function getNzOutcomeId()
    {
        return $this->container['nz_outcome_id'];
    }

    /**
     * Sets nz_outcome_id
     *
     * @param int $nz_outcome_id NZ only. See combo NzOutcomes
     *
     * @return $this
     */
    public function setNzOutcomeId($nz_outcome_id)
    {
        $this->container['nz_outcome_id'] = $nz_outcome_id;

        return $this;
    }

    /**
     * Gets nzqa_result_id
     *
     * @return int
     */
    public function getNzqaResultId()
    {
        return $this->container['nzqa_result_id'];
    }

    /**
     * Sets nzqa_result_id
     *
     * @param int $nzqa_result_id NZ only. See combo NzqaResults
     *
     * @return $this
     */
    public function setNzqaResultId($nzqa_result_id)
    {
        $this->container['nzqa_result_id'] = $nzqa_result_id;

        return $this;
    }

    /**
     * Gets grade_point
     *
     * @return double
     */
    public function getGradePoint()
    {
        return $this->container['grade_point'];
    }

    /**
     * Sets grade_point
     *
     * @param double $grade_point Grade point
     *
     * @return $this
     */
    public function setGradePoint($grade_point)
    {
        $this->container['grade_point'] = $grade_point;

        return $this;
    }

    /**
     * Gets extension_date
     *
     * @return \DateTime
     */
    public function getExtensionDate()
    {
        return $this->container['extension_date'];
    }

    /**
     * Sets extension_date
     *
     * @param \DateTime $extension_date NZ only. The date the unit enrolment has been extended to
     *
     * @return $this
     */
    public function setExtensionDate($extension_date)
    {
        $this->container['extension_date'] = $extension_date;

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
     * @param double $tuition_weeks NZ only. Number of weeks for this unit enrolment
     *
     * @return $this
     */
    public function setTuitionWeeks($tuition_weeks)
    {
        $this->container['tuition_weeks'] = $tuition_weeks;

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
     * Gets delivery_mode_av8_id
     *
     * @return int
     */
    public function getDeliveryModeAv8Id()
    {
        return $this->container['delivery_mode_av8_id'];
    }

    /**
     * Sets delivery_mode_av8_id
     *
     * @param int $delivery_mode_av8_id AU only. See combo DeliveryModesAv8
     *
     * @return $this
     */
    public function setDeliveryModeAv8Id($delivery_mode_av8_id)
    {
        $this->container['delivery_mode_av8_id'] = $delivery_mode_av8_id;

        return $this;
    }

    /**
     * Gets predominant_delivery_mode_id
     *
     * @return int
     */
    public function getPredominantDeliveryModeId()
    {
        return $this->container['predominant_delivery_mode_id'];
    }

    /**
     * Sets predominant_delivery_mode_id
     *
     * @param int $predominant_delivery_mode_id AU only. See combo PredominantDeliveryModes
     *
     * @return $this
     */
    public function setPredominantDeliveryModeId($predominant_delivery_mode_id)
    {
        $this->container['predominant_delivery_mode_id'] = $predominant_delivery_mode_id;

        return $this;
    }

    /**
     * Gets delivery_mode_wa1_id
     *
     * @return int
     */
    public function getDeliveryModeWa1Id()
    {
        return $this->container['delivery_mode_wa1_id'];
    }

    /**
     * Sets delivery_mode_wa1_id
     *
     * @param int $delivery_mode_wa1_id AU only. See combo DeliveryModesWa
     *
     * @return $this
     */
    public function setDeliveryModeWa1Id($delivery_mode_wa1_id)
    {
        $this->container['delivery_mode_wa1_id'] = $delivery_mode_wa1_id;

        return $this;
    }

    /**
     * Gets delivery_mode_wa2_id
     *
     * @return int
     */
    public function getDeliveryModeWa2Id()
    {
        return $this->container['delivery_mode_wa2_id'];
    }

    /**
     * Sets delivery_mode_wa2_id
     *
     * @param int $delivery_mode_wa2_id AU only. See combo DeliveryModesWa
     *
     * @return $this
     */
    public function setDeliveryModeWa2Id($delivery_mode_wa2_id)
    {
        $this->container['delivery_mode_wa2_id'] = $delivery_mode_wa2_id;

        return $this;
    }

    /**
     * Gets delivery_mode_wa3_id
     *
     * @return int
     */
    public function getDeliveryModeWa3Id()
    {
        return $this->container['delivery_mode_wa3_id'];
    }

    /**
     * Sets delivery_mode_wa3_id
     *
     * @param int $delivery_mode_wa3_id AU only. See combo DeliveryModesWa
     *
     * @return $this
     */
    public function setDeliveryModeWa3Id($delivery_mode_wa3_id)
    {
        $this->container['delivery_mode_wa3_id'] = $delivery_mode_wa3_id;

        return $this;
    }

    /**
     * Gets employer_invoiced_flag
     *
     * @return string
     */
    public function getEmployerInvoicedFlag()
    {
        return $this->container['employer_invoiced_flag'];
    }

    /**
     * Sets employer_invoiced_flag
     *
     * @param string $employer_invoiced_flag AU only. To indicate if the employer is invoiced for the unit enrolment
     *
     * @return $this
     */
    public function setEmployerInvoicedFlag($employer_invoiced_flag)
    {
        $this->container['employer_invoiced_flag'] = $employer_invoiced_flag;

        return $this;
    }

    /**
     * Gets funding_removed_flag
     *
     * @return string
     */
    public function getFundingRemovedFlag()
    {
        return $this->container['funding_removed_flag'];
    }

    /**
     * Sets funding_removed_flag
     *
     * @param string $funding_removed_flag AU only. To indicate if the funding is removed for the unit enrolment
     *
     * @return $this
     */
    public function setFundingRemovedFlag($funding_removed_flag)
    {
        $this->container['funding_removed_flag'] = $funding_removed_flag;

        return $this;
    }

    /**
     * Gets assessment_url
     *
     * @return string
     */
    public function getAssessmentUrl()
    {
        return $this->container['assessment_url'];
    }

    /**
     * Sets assessment_url
     *
     * @param string $assessment_url Related assessment URL if applicable
     *
     * @return $this
     */
    public function setAssessmentUrl($assessment_url)
    {
        $this->container['assessment_url'] = $assessment_url;

        return $this;
    }

    /**
     * Gets is_locked_flag
     *
     * @return bool
     */
    public function getIsLockedFlag()
    {
        return $this->container['is_locked_flag'];
    }

    /**
     * Sets is_locked_flag
     *
     * @param bool $is_locked_flag To indicate of the unit enrolment is locked or not
     *
     * @return $this
     */
    public function setIsLockedFlag($is_locked_flag)
    {
        $this->container['is_locked_flag'] = $is_locked_flag;

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
     * @param \DateTime $last_modified_time_stamp Date when the unit enrolment was last modified
     *
     * @return $this
     */
    public function setLastModifiedTimeStamp($last_modified_time_stamp)
    {
        $this->container['last_modified_time_stamp'] = $last_modified_time_stamp;

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
