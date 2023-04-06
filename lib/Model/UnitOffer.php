<?php
/**
 * UnitOffer
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
 * UnitOffer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnitOffer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnitOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unit_offer_id' => 'int',
'course_offer_id' => 'int',
'unit_id' => 'int',
'unit_offer_code' => 'string',
'start_date' => '\DateTime',
'end_date' => '\DateTime',
'census_date' => '\DateTime',
'period_from_start_date' => 'double',
'period_type_id' => 'int',
'duration' => 'double',
'duration_type_id' => 'int',
'days_to_census_date' => 'int',
'day' => 'string',
'start_time' => '\DateTime',
'end_time' => '\DateTime',
'max_registrations' => 'int',
'min_registrations' => 'int',
'location_id' => 'int',
'unit_fees' => 'double',
'unit_concession_fees' => 'double',
'unit_hourly_fee' => 'double',
'resource_fee' => 'double',
'loan_liability' => 'double',
'contract_id' => 'int',
'trainer_id' => 'int',
'what_to_bring' => 'string',
'where_to_go' => 'string',
'notes' => 'string',
'current_flag' => 'bool',
'fee_status' => 'string',
'is_gst_free_flag' => 'bool',
'venue_id' => 'int',
'hours_supervised' => 'int',
'hours_unsupervised' => 'int',
'for_govt_reporting_flag' => 'bool',
'stage' => 'int',
'points' => 'int',
'previous_identifier' => 'string',
'program_id' => 'int',
'assessment_method_id' => 'int',
'concession_flag' => 'bool',
'fee_exemption_id' => 'int',
'fee_exemption_waiver_id' => 'int',
'assessor_id' => 'int',
'department_code_id' => 'int',
'budgeted_income' => 'double',
'budget_cost' => 'double',
'actual_cost' => 'double',
'vet_in_school_flag' => 'bool',
'delivery_mode_id' => 'int',
'fund_source_national_id' => 'int',
'fund_source_state_id' => 'int',
'specific_program_id' => 'int',
'delivery_workplace_id' => 'int',
'efts_factor' => 'string',
'internet_based_learning_id' => 'int',
'complusory_unit_costs_fee' => 'double',
'foreign_fee' => 'double',
'maxima_exempt_fee' => 'double',
'fee_assessment_category_id' => 'int',
'mural_attendance_id' => 'int',
'tuition_weeks' => 'double',
'delivery_mode_av8_id' => 'int',
'predominant_delivery_mode_id' => 'int',
'delivery_mode_wa1_id' => 'int',
'delivery_mode_wa2_id' => 'int',
'delivery_mode_wa3_id' => 'int',
'employer_invoiced_flag' => 'string',
'funding_removed_flag' => 'string',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unit_offer_id' => 'int32',
'course_offer_id' => 'int32',
'unit_id' => 'int32',
'unit_offer_code' => '50',
'start_date' => 'date-time',
'end_date' => 'date-time',
'census_date' => 'date-time',
'period_from_start_date' => 'double',
'period_type_id' => 'int32',
'duration' => 'double',
'duration_type_id' => 'int32',
'days_to_census_date' => 'int32',
'day' => '50',
'start_time' => 'date-time',
'end_time' => 'date-time',
'max_registrations' => 'int32',
'min_registrations' => 'int32',
'location_id' => 'int32',
'unit_fees' => 'double',
'unit_concession_fees' => 'double',
'unit_hourly_fee' => 'double',
'resource_fee' => 'double',
'loan_liability' => 'double',
'contract_id' => 'int32',
'trainer_id' => 'int32',
'what_to_bring' => '1000',
'where_to_go' => '1000',
'notes' => '1000',
'current_flag' => null,
'fee_status' => '50',
'is_gst_free_flag' => null,
'venue_id' => 'int32',
'hours_supervised' => 'int32',
'hours_unsupervised' => 'int32',
'for_govt_reporting_flag' => null,
'stage' => 'int32',
'points' => 'int32',
'previous_identifier' => null,
'program_id' => 'int32',
'assessment_method_id' => 'int32',
'concession_flag' => null,
'fee_exemption_id' => 'int32',
'fee_exemption_waiver_id' => 'int32',
'assessor_id' => 'int32',
'department_code_id' => 'int32',
'budgeted_income' => 'double',
'budget_cost' => 'double',
'actual_cost' => 'double',
'vet_in_school_flag' => null,
'delivery_mode_id' => 'int32',
'fund_source_national_id' => 'int32',
'fund_source_state_id' => 'int32',
'specific_program_id' => 'int32',
'delivery_workplace_id' => 'int32',
'efts_factor' => '6',
'internet_based_learning_id' => 'int32',
'complusory_unit_costs_fee' => 'double',
'foreign_fee' => 'double',
'maxima_exempt_fee' => 'double',
'fee_assessment_category_id' => 'int32',
'mural_attendance_id' => 'int32',
'tuition_weeks' => 'double',
'delivery_mode_av8_id' => 'int32',
'predominant_delivery_mode_id' => 'int32',
'delivery_mode_wa1_id' => 'int32',
'delivery_mode_wa2_id' => 'int32',
'delivery_mode_wa3_id' => 'int32',
'employer_invoiced_flag' => 'Y or N',
'funding_removed_flag' => 'Y or N',
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
        'unit_offer_id' => 'UnitOfferId',
'course_offer_id' => 'CourseOfferId',
'unit_id' => 'UnitId',
'unit_offer_code' => 'UnitOfferCode',
'start_date' => 'StartDate',
'end_date' => 'EndDate',
'census_date' => 'CensusDate',
'period_from_start_date' => 'PeriodFromStartDate',
'period_type_id' => 'PeriodTypeId',
'duration' => 'Duration',
'duration_type_id' => 'DurationTypeId',
'days_to_census_date' => 'DaysToCensusDate',
'day' => 'Day',
'start_time' => 'StartTime',
'end_time' => 'EndTime',
'max_registrations' => 'MaxRegistrations',
'min_registrations' => 'MinRegistrations',
'location_id' => 'LocationId',
'unit_fees' => 'UnitFees',
'unit_concession_fees' => 'UnitConcessionFees',
'unit_hourly_fee' => 'UnitHourlyFee',
'resource_fee' => 'ResourceFee',
'loan_liability' => 'LoanLiability',
'contract_id' => 'ContractId',
'trainer_id' => 'TrainerId',
'what_to_bring' => 'WhatToBring',
'where_to_go' => 'WhereToGo',
'notes' => 'Notes',
'current_flag' => 'CurrentFlag',
'fee_status' => 'FeeStatus',
'is_gst_free_flag' => 'IsGstFreeFlag',
'venue_id' => 'VenueId',
'hours_supervised' => 'HoursSupervised',
'hours_unsupervised' => 'HoursUnsupervised',
'for_govt_reporting_flag' => 'ForGovtReportingFlag',
'stage' => 'Stage',
'points' => 'Points',
'previous_identifier' => 'PreviousIdentifier',
'program_id' => 'ProgramId',
'assessment_method_id' => 'AssessmentMethodId',
'concession_flag' => 'ConcessionFlag',
'fee_exemption_id' => 'FeeExemptionId',
'fee_exemption_waiver_id' => 'FeeExemptionWaiverId',
'assessor_id' => 'AssessorId',
'department_code_id' => 'DepartmentCodeId',
'budgeted_income' => 'BudgetedIncome',
'budget_cost' => 'BudgetCost',
'actual_cost' => 'ActualCost',
'vet_in_school_flag' => 'VetInSchoolFlag',
'delivery_mode_id' => 'DeliveryModeId',
'fund_source_national_id' => 'FundSourceNationalId',
'fund_source_state_id' => 'FundSourceStateId',
'specific_program_id' => 'SpecificProgramId',
'delivery_workplace_id' => 'DeliveryWorkplaceId',
'efts_factor' => 'EftsFactor',
'internet_based_learning_id' => 'InternetBasedLearningId',
'complusory_unit_costs_fee' => 'ComplusoryUnitCostsFee',
'foreign_fee' => 'ForeignFee',
'maxima_exempt_fee' => 'MaximaExemptFee',
'fee_assessment_category_id' => 'FeeAssessmentCategoryId',
'mural_attendance_id' => 'MuralAttendanceId',
'tuition_weeks' => 'TuitionWeeks',
'delivery_mode_av8_id' => 'DeliveryModeAV8Id',
'predominant_delivery_mode_id' => 'PredominantDeliveryModeId',
'delivery_mode_wa1_id' => 'DeliveryModeWa1Id',
'delivery_mode_wa2_id' => 'DeliveryModeWa2Id',
'delivery_mode_wa3_id' => 'DeliveryModeWa3Id',
'employer_invoiced_flag' => 'EmployerInvoicedFlag',
'funding_removed_flag' => 'FundingRemovedFlag',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unit_offer_id' => 'setUnitOfferId',
'course_offer_id' => 'setCourseOfferId',
'unit_id' => 'setUnitId',
'unit_offer_code' => 'setUnitOfferCode',
'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'census_date' => 'setCensusDate',
'period_from_start_date' => 'setPeriodFromStartDate',
'period_type_id' => 'setPeriodTypeId',
'duration' => 'setDuration',
'duration_type_id' => 'setDurationTypeId',
'days_to_census_date' => 'setDaysToCensusDate',
'day' => 'setDay',
'start_time' => 'setStartTime',
'end_time' => 'setEndTime',
'max_registrations' => 'setMaxRegistrations',
'min_registrations' => 'setMinRegistrations',
'location_id' => 'setLocationId',
'unit_fees' => 'setUnitFees',
'unit_concession_fees' => 'setUnitConcessionFees',
'unit_hourly_fee' => 'setUnitHourlyFee',
'resource_fee' => 'setResourceFee',
'loan_liability' => 'setLoanLiability',
'contract_id' => 'setContractId',
'trainer_id' => 'setTrainerId',
'what_to_bring' => 'setWhatToBring',
'where_to_go' => 'setWhereToGo',
'notes' => 'setNotes',
'current_flag' => 'setCurrentFlag',
'fee_status' => 'setFeeStatus',
'is_gst_free_flag' => 'setIsGstFreeFlag',
'venue_id' => 'setVenueId',
'hours_supervised' => 'setHoursSupervised',
'hours_unsupervised' => 'setHoursUnsupervised',
'for_govt_reporting_flag' => 'setForGovtReportingFlag',
'stage' => 'setStage',
'points' => 'setPoints',
'previous_identifier' => 'setPreviousIdentifier',
'program_id' => 'setProgramId',
'assessment_method_id' => 'setAssessmentMethodId',
'concession_flag' => 'setConcessionFlag',
'fee_exemption_id' => 'setFeeExemptionId',
'fee_exemption_waiver_id' => 'setFeeExemptionWaiverId',
'assessor_id' => 'setAssessorId',
'department_code_id' => 'setDepartmentCodeId',
'budgeted_income' => 'setBudgetedIncome',
'budget_cost' => 'setBudgetCost',
'actual_cost' => 'setActualCost',
'vet_in_school_flag' => 'setVetInSchoolFlag',
'delivery_mode_id' => 'setDeliveryModeId',
'fund_source_national_id' => 'setFundSourceNationalId',
'fund_source_state_id' => 'setFundSourceStateId',
'specific_program_id' => 'setSpecificProgramId',
'delivery_workplace_id' => 'setDeliveryWorkplaceId',
'efts_factor' => 'setEftsFactor',
'internet_based_learning_id' => 'setInternetBasedLearningId',
'complusory_unit_costs_fee' => 'setComplusoryUnitCostsFee',
'foreign_fee' => 'setForeignFee',
'maxima_exempt_fee' => 'setMaximaExemptFee',
'fee_assessment_category_id' => 'setFeeAssessmentCategoryId',
'mural_attendance_id' => 'setMuralAttendanceId',
'tuition_weeks' => 'setTuitionWeeks',
'delivery_mode_av8_id' => 'setDeliveryModeAv8Id',
'predominant_delivery_mode_id' => 'setPredominantDeliveryModeId',
'delivery_mode_wa1_id' => 'setDeliveryModeWa1Id',
'delivery_mode_wa2_id' => 'setDeliveryModeWa2Id',
'delivery_mode_wa3_id' => 'setDeliveryModeWa3Id',
'employer_invoiced_flag' => 'setEmployerInvoicedFlag',
'funding_removed_flag' => 'setFundingRemovedFlag',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unit_offer_id' => 'getUnitOfferId',
'course_offer_id' => 'getCourseOfferId',
'unit_id' => 'getUnitId',
'unit_offer_code' => 'getUnitOfferCode',
'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'census_date' => 'getCensusDate',
'period_from_start_date' => 'getPeriodFromStartDate',
'period_type_id' => 'getPeriodTypeId',
'duration' => 'getDuration',
'duration_type_id' => 'getDurationTypeId',
'days_to_census_date' => 'getDaysToCensusDate',
'day' => 'getDay',
'start_time' => 'getStartTime',
'end_time' => 'getEndTime',
'max_registrations' => 'getMaxRegistrations',
'min_registrations' => 'getMinRegistrations',
'location_id' => 'getLocationId',
'unit_fees' => 'getUnitFees',
'unit_concession_fees' => 'getUnitConcessionFees',
'unit_hourly_fee' => 'getUnitHourlyFee',
'resource_fee' => 'getResourceFee',
'loan_liability' => 'getLoanLiability',
'contract_id' => 'getContractId',
'trainer_id' => 'getTrainerId',
'what_to_bring' => 'getWhatToBring',
'where_to_go' => 'getWhereToGo',
'notes' => 'getNotes',
'current_flag' => 'getCurrentFlag',
'fee_status' => 'getFeeStatus',
'is_gst_free_flag' => 'getIsGstFreeFlag',
'venue_id' => 'getVenueId',
'hours_supervised' => 'getHoursSupervised',
'hours_unsupervised' => 'getHoursUnsupervised',
'for_govt_reporting_flag' => 'getForGovtReportingFlag',
'stage' => 'getStage',
'points' => 'getPoints',
'previous_identifier' => 'getPreviousIdentifier',
'program_id' => 'getProgramId',
'assessment_method_id' => 'getAssessmentMethodId',
'concession_flag' => 'getConcessionFlag',
'fee_exemption_id' => 'getFeeExemptionId',
'fee_exemption_waiver_id' => 'getFeeExemptionWaiverId',
'assessor_id' => 'getAssessorId',
'department_code_id' => 'getDepartmentCodeId',
'budgeted_income' => 'getBudgetedIncome',
'budget_cost' => 'getBudgetCost',
'actual_cost' => 'getActualCost',
'vet_in_school_flag' => 'getVetInSchoolFlag',
'delivery_mode_id' => 'getDeliveryModeId',
'fund_source_national_id' => 'getFundSourceNationalId',
'fund_source_state_id' => 'getFundSourceStateId',
'specific_program_id' => 'getSpecificProgramId',
'delivery_workplace_id' => 'getDeliveryWorkplaceId',
'efts_factor' => 'getEftsFactor',
'internet_based_learning_id' => 'getInternetBasedLearningId',
'complusory_unit_costs_fee' => 'getComplusoryUnitCostsFee',
'foreign_fee' => 'getForeignFee',
'maxima_exempt_fee' => 'getMaximaExemptFee',
'fee_assessment_category_id' => 'getFeeAssessmentCategoryId',
'mural_attendance_id' => 'getMuralAttendanceId',
'tuition_weeks' => 'getTuitionWeeks',
'delivery_mode_av8_id' => 'getDeliveryModeAv8Id',
'predominant_delivery_mode_id' => 'getPredominantDeliveryModeId',
'delivery_mode_wa1_id' => 'getDeliveryModeWa1Id',
'delivery_mode_wa2_id' => 'getDeliveryModeWa2Id',
'delivery_mode_wa3_id' => 'getDeliveryModeWa3Id',
'employer_invoiced_flag' => 'getEmployerInvoicedFlag',
'funding_removed_flag' => 'getFundingRemovedFlag',
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
        $this->container['unit_offer_id'] = isset($data['unit_offer_id']) ? $data['unit_offer_id'] : null;
        $this->container['course_offer_id'] = isset($data['course_offer_id']) ? $data['course_offer_id'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['unit_offer_code'] = isset($data['unit_offer_code']) ? $data['unit_offer_code'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['census_date'] = isset($data['census_date']) ? $data['census_date'] : null;
        $this->container['period_from_start_date'] = isset($data['period_from_start_date']) ? $data['period_from_start_date'] : null;
        $this->container['period_type_id'] = isset($data['period_type_id']) ? $data['period_type_id'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['duration_type_id'] = isset($data['duration_type_id']) ? $data['duration_type_id'] : null;
        $this->container['days_to_census_date'] = isset($data['days_to_census_date']) ? $data['days_to_census_date'] : null;
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['max_registrations'] = isset($data['max_registrations']) ? $data['max_registrations'] : null;
        $this->container['min_registrations'] = isset($data['min_registrations']) ? $data['min_registrations'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['unit_fees'] = isset($data['unit_fees']) ? $data['unit_fees'] : null;
        $this->container['unit_concession_fees'] = isset($data['unit_concession_fees']) ? $data['unit_concession_fees'] : null;
        $this->container['unit_hourly_fee'] = isset($data['unit_hourly_fee']) ? $data['unit_hourly_fee'] : null;
        $this->container['resource_fee'] = isset($data['resource_fee']) ? $data['resource_fee'] : null;
        $this->container['loan_liability'] = isset($data['loan_liability']) ? $data['loan_liability'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['trainer_id'] = isset($data['trainer_id']) ? $data['trainer_id'] : null;
        $this->container['what_to_bring'] = isset($data['what_to_bring']) ? $data['what_to_bring'] : null;
        $this->container['where_to_go'] = isset($data['where_to_go']) ? $data['where_to_go'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['current_flag'] = isset($data['current_flag']) ? $data['current_flag'] : null;
        $this->container['fee_status'] = isset($data['fee_status']) ? $data['fee_status'] : null;
        $this->container['is_gst_free_flag'] = isset($data['is_gst_free_flag']) ? $data['is_gst_free_flag'] : null;
        $this->container['venue_id'] = isset($data['venue_id']) ? $data['venue_id'] : null;
        $this->container['hours_supervised'] = isset($data['hours_supervised']) ? $data['hours_supervised'] : null;
        $this->container['hours_unsupervised'] = isset($data['hours_unsupervised']) ? $data['hours_unsupervised'] : null;
        $this->container['for_govt_reporting_flag'] = isset($data['for_govt_reporting_flag']) ? $data['for_govt_reporting_flag'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['previous_identifier'] = isset($data['previous_identifier']) ? $data['previous_identifier'] : null;
        $this->container['program_id'] = isset($data['program_id']) ? $data['program_id'] : null;
        $this->container['assessment_method_id'] = isset($data['assessment_method_id']) ? $data['assessment_method_id'] : null;
        $this->container['concession_flag'] = isset($data['concession_flag']) ? $data['concession_flag'] : null;
        $this->container['fee_exemption_id'] = isset($data['fee_exemption_id']) ? $data['fee_exemption_id'] : null;
        $this->container['fee_exemption_waiver_id'] = isset($data['fee_exemption_waiver_id']) ? $data['fee_exemption_waiver_id'] : null;
        $this->container['assessor_id'] = isset($data['assessor_id']) ? $data['assessor_id'] : null;
        $this->container['department_code_id'] = isset($data['department_code_id']) ? $data['department_code_id'] : null;
        $this->container['budgeted_income'] = isset($data['budgeted_income']) ? $data['budgeted_income'] : null;
        $this->container['budget_cost'] = isset($data['budget_cost']) ? $data['budget_cost'] : null;
        $this->container['actual_cost'] = isset($data['actual_cost']) ? $data['actual_cost'] : null;
        $this->container['vet_in_school_flag'] = isset($data['vet_in_school_flag']) ? $data['vet_in_school_flag'] : null;
        $this->container['delivery_mode_id'] = isset($data['delivery_mode_id']) ? $data['delivery_mode_id'] : null;
        $this->container['fund_source_national_id'] = isset($data['fund_source_national_id']) ? $data['fund_source_national_id'] : null;
        $this->container['fund_source_state_id'] = isset($data['fund_source_state_id']) ? $data['fund_source_state_id'] : null;
        $this->container['specific_program_id'] = isset($data['specific_program_id']) ? $data['specific_program_id'] : null;
        $this->container['delivery_workplace_id'] = isset($data['delivery_workplace_id']) ? $data['delivery_workplace_id'] : null;
        $this->container['efts_factor'] = isset($data['efts_factor']) ? $data['efts_factor'] : null;
        $this->container['internet_based_learning_id'] = isset($data['internet_based_learning_id']) ? $data['internet_based_learning_id'] : null;
        $this->container['complusory_unit_costs_fee'] = isset($data['complusory_unit_costs_fee']) ? $data['complusory_unit_costs_fee'] : null;
        $this->container['foreign_fee'] = isset($data['foreign_fee']) ? $data['foreign_fee'] : null;
        $this->container['maxima_exempt_fee'] = isset($data['maxima_exempt_fee']) ? $data['maxima_exempt_fee'] : null;
        $this->container['fee_assessment_category_id'] = isset($data['fee_assessment_category_id']) ? $data['fee_assessment_category_id'] : null;
        $this->container['mural_attendance_id'] = isset($data['mural_attendance_id']) ? $data['mural_attendance_id'] : null;
        $this->container['tuition_weeks'] = isset($data['tuition_weeks']) ? $data['tuition_weeks'] : null;
        $this->container['delivery_mode_av8_id'] = isset($data['delivery_mode_av8_id']) ? $data['delivery_mode_av8_id'] : null;
        $this->container['predominant_delivery_mode_id'] = isset($data['predominant_delivery_mode_id']) ? $data['predominant_delivery_mode_id'] : null;
        $this->container['delivery_mode_wa1_id'] = isset($data['delivery_mode_wa1_id']) ? $data['delivery_mode_wa1_id'] : null;
        $this->container['delivery_mode_wa2_id'] = isset($data['delivery_mode_wa2_id']) ? $data['delivery_mode_wa2_id'] : null;
        $this->container['delivery_mode_wa3_id'] = isset($data['delivery_mode_wa3_id']) ? $data['delivery_mode_wa3_id'] : null;
        $this->container['employer_invoiced_flag'] = isset($data['employer_invoiced_flag']) ? $data['employer_invoiced_flag'] : null;
        $this->container['funding_removed_flag'] = isset($data['funding_removed_flag']) ? $data['funding_removed_flag'] : null;
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
     * @param int $unit_offer_id Primary Id for unit offer that is auto generated
     *
     * @return $this
     */
    public function setUnitOfferId($unit_offer_id)
    {
        $this->container['unit_offer_id'] = $unit_offer_id;

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
     * @param int $unit_id See entity Units
     *
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets unit_offer_code
     *
     * @return string
     */
    public function getUnitOfferCode()
    {
        return $this->container['unit_offer_code'];
    }

    /**
     * Sets unit_offer_code
     *
     * @param string $unit_offer_code Code used to identify the Unit Offer
     *
     * @return $this
     */
    public function setUnitOfferCode($unit_offer_code)
    {
        $this->container['unit_offer_code'] = $unit_offer_code;

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
     * @param \DateTime $start_date Date when the unit offer starts
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
     * @param \DateTime $end_date Date when the unit offer is closed
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * @param \DateTime $census_date AU only. Census Date of the unit offer
     *
     * @return $this
     */
    public function setCensusDate($census_date)
    {
        $this->container['census_date'] = $census_date;

        return $this;
    }

    /**
     * Gets period_from_start_date
     *
     * @return double
     */
    public function getPeriodFromStartDate()
    {
        return $this->container['period_from_start_date'];
    }

    /**
     * Sets period_from_start_date
     *
     * @param double $period_from_start_date Start Date used for the calculation of the associated unit enrolments
     *
     * @return $this
     */
    public function setPeriodFromStartDate($period_from_start_date)
    {
        $this->container['period_from_start_date'] = $period_from_start_date;

        return $this;
    }

    /**
     * Gets period_type_id
     *
     * @return int
     */
    public function getPeriodTypeId()
    {
        return $this->container['period_type_id'];
    }

    /**
     * Sets period_type_id
     *
     * @param int $period_type_id See combo PeriodTypes
     *
     * @return $this
     */
    public function setPeriodTypeId($period_type_id)
    {
        $this->container['period_type_id'] = $period_type_id;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return double
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param double $duration Duration for the calculation of the associated unit enrolments
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

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
     * Gets days_to_census_date
     *
     * @return int
     */
    public function getDaysToCensusDate()
    {
        return $this->container['days_to_census_date'];
    }

    /**
     * Sets days_to_census_date
     *
     * @param int $days_to_census_date Used to calculate Census Date based on days from Unit Enrolment Start Date
     *
     * @return $this
     */
    public function setDaysToCensusDate($days_to_census_date)
    {
        $this->container['days_to_census_date'] = $days_to_census_date;

        return $this;
    }

    /**
     * Gets day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param string $day Day the unit is offered within the unit offer
     *
     * @return $this
     */
    public function setDay($day)
    {
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time Start Time of the unit offer
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time End Time of the unit offer
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets max_registrations
     *
     * @return int
     */
    public function getMaxRegistrations()
    {
        return $this->container['max_registrations'];
    }

    /**
     * Sets max_registrations
     *
     * @param int $max_registrations Maximum Number of registrations allowed within the unit offer
     *
     * @return $this
     */
    public function setMaxRegistrations($max_registrations)
    {
        $this->container['max_registrations'] = $max_registrations;

        return $this;
    }

    /**
     * Gets min_registrations
     *
     * @return int
     */
    public function getMinRegistrations()
    {
        return $this->container['min_registrations'];
    }

    /**
     * Sets min_registrations
     *
     * @param int $min_registrations Minimum Number of registrations allowed within the unit offer
     *
     * @return $this
     */
    public function setMinRegistrations($min_registrations)
    {
        $this->container['min_registrations'] = $min_registrations;

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
     * @param int $location_id See entity Location
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

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
     * @param double $unit_fees Total Fees charged for the unit offer
     *
     * @return $this
     */
    public function setUnitFees($unit_fees)
    {
        $this->container['unit_fees'] = $unit_fees;

        return $this;
    }

    /**
     * Gets unit_concession_fees
     *
     * @return double
     */
    public function getUnitConcessionFees()
    {
        return $this->container['unit_concession_fees'];
    }

    /**
     * Sets unit_concession_fees
     *
     * @param double $unit_concession_fees AU only. Concession Fees charged for the unit offer
     *
     * @return $this
     */
    public function setUnitConcessionFees($unit_concession_fees)
    {
        $this->container['unit_concession_fees'] = $unit_concession_fees;

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
     * @param double $unit_hourly_fee AU only. Unit hourly fee of the unit offer
     *
     * @return $this
     */
    public function setUnitHourlyFee($unit_hourly_fee)
    {
        $this->container['unit_hourly_fee'] = $unit_hourly_fee;

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
     * @param double $resource_fee AU only. Non tuition fee charged for the unit offer
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
     * @param double $loan_liability AU only. Loan Liability for enrolments this unit offer would incur
     *
     * @return $this
     */
    public function setLoanLiability($loan_liability)
    {
        $this->container['loan_liability'] = $loan_liability;

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
     * Gets what_to_bring
     *
     * @return string
     */
    public function getWhatToBring()
    {
        return $this->container['what_to_bring'];
    }

    /**
     * Sets what_to_bring
     *
     * @param string $what_to_bring Details for learner outlining what to bring
     *
     * @return $this
     */
    public function setWhatToBring($what_to_bring)
    {
        $this->container['what_to_bring'] = $what_to_bring;

        return $this;
    }

    /**
     * Gets where_to_go
     *
     * @return string
     */
    public function getWhereToGo()
    {
        return $this->container['where_to_go'];
    }

    /**
     * Sets where_to_go
     *
     * @param string $where_to_go Details for learner outlining where to go
     *
     * @return $this
     */
    public function setWhereToGo($where_to_go)
    {
        $this->container['where_to_go'] = $where_to_go;

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
     * @param string $notes Additional notes related to the unit offer
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets current_flag
     *
     * @return bool
     */
    public function getCurrentFlag()
    {
        return $this->container['current_flag'];
    }

    /**
     * Sets current_flag
     *
     * @param bool $current_flag AU and NZ only. To indicate if the unit offer is currently being taught or not
     *
     * @return $this
     */
    public function setCurrentFlag($current_flag)
    {
        $this->container['current_flag'] = $current_flag;

        return $this;
    }

    /**
     * Gets fee_status
     *
     * @return string
     */
    public function getFeeStatus()
    {
        return $this->container['fee_status'];
    }

    /**
     * Sets fee_status
     *
     * @param string $fee_status AU only. Fee Status of the unit offer
     *
     * @return $this
     */
    public function setFeeStatus($fee_status)
    {
        $this->container['fee_status'] = $fee_status;

        return $this;
    }

    /**
     * Gets is_gst_free_flag
     *
     * @return bool
     */
    public function getIsGstFreeFlag()
    {
        return $this->container['is_gst_free_flag'];
    }

    /**
     * Sets is_gst_free_flag
     *
     * @param bool $is_gst_free_flag AU only. To indicate if the unit offer fees are GST free or not
     *
     * @return $this
     */
    public function setIsGstFreeFlag($is_gst_free_flag)
    {
        $this->container['is_gst_free_flag'] = $is_gst_free_flag;

        return $this;
    }

    /**
     * Gets venue_id
     *
     * @return int
     */
    public function getVenueId()
    {
        return $this->container['venue_id'];
    }

    /**
     * Sets venue_id
     *
     * @param int $venue_id See combo Venues
     *
     * @return $this
     */
    public function setVenueId($venue_id)
    {
        $this->container['venue_id'] = $venue_id;

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
     * @param int $hours_supervised Supervised Nominal Hours of the unit offer
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
     * @param int $hours_unsupervised Unsupervised Nominal Hours of the unit offer
     *
     * @return $this
     */
    public function setHoursUnsupervised($hours_unsupervised)
    {
        $this->container['hours_unsupervised'] = $hours_unsupervised;

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
     * @param int $stage Stage the unit offer is delivered
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
     * @param int $points Points achieved in the unit offer
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

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
     * @param string $previous_identifier The previous identifier associated with the unit offer
     *
     * @return $this
     */
    public function setPreviousIdentifier($previous_identifier)
    {
        $this->container['previous_identifier'] = $previous_identifier;

        return $this;
    }

    /**
     * Gets program_id
     *
     * @return int
     */
    public function getProgramId()
    {
        return $this->container['program_id'];
    }

    /**
     * Sets program_id
     *
     * @param int $program_id AU and NZ only. See combo Programs
     *
     * @return $this
     */
    public function setProgramId($program_id)
    {
        $this->container['program_id'] = $program_id;

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
     * @param bool $concession_flag AU only. To indicate if the unit offer is eligible for concession or not
     *
     * @return $this
     */
    public function setConcessionFlag($concession_flag)
    {
        $this->container['concession_flag'] = $concession_flag;

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
     * @param int $fee_exemption_id AU only. See combo FeeExemptions
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
     * @param int $fee_exemption_waiver_id AU only. See combo FeeExemptionWaivers
     *
     * @return $this
     */
    public function setFeeExemptionWaiverId($fee_exemption_waiver_id)
    {
        $this->container['fee_exemption_waiver_id'] = $fee_exemption_waiver_id;

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
     * Gets department_code_id
     *
     * @return int
     */
    public function getDepartmentCodeId()
    {
        return $this->container['department_code_id'];
    }

    /**
     * Sets department_code_id
     *
     * @param int $department_code_id AU and NZ only. See combo DepartmentCodes
     *
     * @return $this
     */
    public function setDepartmentCodeId($department_code_id)
    {
        $this->container['department_code_id'] = $department_code_id;

        return $this;
    }

    /**
     * Gets budgeted_income
     *
     * @return double
     */
    public function getBudgetedIncome()
    {
        return $this->container['budgeted_income'];
    }

    /**
     * Sets budgeted_income
     *
     * @param double $budgeted_income AU and NZ only. Budgted Income of the unit offer
     *
     * @return $this
     */
    public function setBudgetedIncome($budgeted_income)
    {
        $this->container['budgeted_income'] = $budgeted_income;

        return $this;
    }

    /**
     * Gets budget_cost
     *
     * @return double
     */
    public function getBudgetCost()
    {
        return $this->container['budget_cost'];
    }

    /**
     * Sets budget_cost
     *
     * @param double $budget_cost AU and NZ only. Budgted Cost of the unit offer
     *
     * @return $this
     */
    public function setBudgetCost($budget_cost)
    {
        $this->container['budget_cost'] = $budget_cost;

        return $this;
    }

    /**
     * Gets actual_cost
     *
     * @return double
     */
    public function getActualCost()
    {
        return $this->container['actual_cost'];
    }

    /**
     * Sets actual_cost
     *
     * @param double $actual_cost AU and NZ only. Actual Cose of the unit offer
     *
     * @return $this
     */
    public function setActualCost($actual_cost)
    {
        $this->container['actual_cost'] = $actual_cost;

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
     * @param bool $vet_in_school_flag AU only. To indicate if the learner is completing this unit through a school
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
     * Gets internet_based_learning_id
     *
     * @return int
     */
    public function getInternetBasedLearningId()
    {
        return $this->container['internet_based_learning_id'];
    }

    /**
     * Sets internet_based_learning_id
     *
     * @param int $internet_based_learning_id NZ only. See combo InternetBasedLearnings
     *
     * @return $this
     */
    public function setInternetBasedLearningId($internet_based_learning_id)
    {
        $this->container['internet_based_learning_id'] = $internet_based_learning_id;

        return $this;
    }

    /**
     * Gets complusory_unit_costs_fee
     *
     * @return double
     */
    public function getComplusoryUnitCostsFee()
    {
        return $this->container['complusory_unit_costs_fee'];
    }

    /**
     * Sets complusory_unit_costs_fee
     *
     * @param double $complusory_unit_costs_fee NZ only. Compulsory costs fee associated with the unit offer
     *
     * @return $this
     */
    public function setComplusoryUnitCostsFee($complusory_unit_costs_fee)
    {
        $this->container['complusory_unit_costs_fee'] = $complusory_unit_costs_fee;

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
     * @param string $employer_invoiced_flag AU only. To indicate if the employer is invoiced for the unit offer
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
     * @param string $funding_removed_flag AU only. To indicate if the funding is removed for the unit offer
     *
     * @return $this
     */
    public function setFundingRemovedFlag($funding_removed_flag)
    {
        $this->container['funding_removed_flag'] = $funding_removed_flag;

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
     * @param \DateTime $last_modified_time_stamp Date when the unit offer was last modified
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
