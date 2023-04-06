<?php
/**
 * CourseOffer
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
 * CourseOffer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CourseOffer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CourseOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'course_offer_id' => 'int',
'course_id' => 'int',
'code' => 'string',
'description' => 'string',
'course_offer_status_id' => 'int',
'course_offer_start_date' => '\DateTime',
'course_offer_end_date' => '\DateTime',
'application_start_date' => '\DateTime',
'application_end_date' => '\DateTime',
'expected_award_date' => '\DateTime',
'orientation_date' => '\DateTime',
'max_registrations' => 'int',
'min_registrations' => 'int',
'publish_number' => 'int',
'publish_name' => 'string',
'publish_start_date' => '\DateTime',
'publish_end_date' => '\DateTime',
'publish_flag' => 'bool',
'accept_enrolments_flag' => 'bool',
'coordinator_id' => 'int',
'course_offer_type_id' => 'int',
'delivery_language_id' => 'int',
'duration_type_id' => 'int',
'duration_full_time' => 'double',
'duration_part_time' => 'double',
'delivery_workplace_id' => 'int',
'for_govt_reporting_flag' => 'bool',
'program_status_id' => 'int',
'contract_type_id' => 'int',
'commencing_course_id' => 'int',
'av_study_reason_id' => 'int',
'study_mode_id' => 'int',
'location_id' => 'int',
'delivery_mode_id' => 'int',
'delivery_mode_av8_id' => 'int',
'predominant_delivery_mode_id' => 'int',
'fund_source_national_id' => 'int',
'fund_source_state_id' => 'int',
'contract_id' => 'int',
'fee_exemption_id' => 'int',
'fee_exemption_waiver_id' => 'int',
'concession_flag' => 'bool',
'vet_in_school_flag' => 'bool',
'internet_based_learning_id' => 'int',
'main_subject1_id' => 'int',
'main_subject2_id' => 'int',
'main_subject3_id' => 'int',
'fund_source_id' => 'int',
'fee_assessment_category_id' => 'int',
'mural_attendance_id' => 'int',
'delivery_mode_wa1_id' => 'int',
'delivery_mode_wa2_id' => 'int',
'delivery_mode_wa3_id' => 'int',
'delivery_option_ids' => 'int[]',
'employer_invoiced_flag' => 'string',
'funding_removed_flag' => 'string',
'overseas_student_fee' => 'double',
'domestic_student_fee' => 'double',
'fee_type_indicator_id' => 'int',
'offshore_delivery_indicator_id' => 'int',
'offshore_delivery_mode_id' => 'int',
'campus_operation_type_id' => 'int',
'commencing_student_identifier_id' => 'int',
'estimated_eftsl' => 'string',
'trainer_id' => 'int',
'assessor_id' => 'int',
'assessment_method_id' => 'int',
'venue_id' => 'int',
'what_to_bring' => 'string',
'where_to_go' => 'string',
'unit_hourly_fee' => 'double',
'course_fees' => 'double',
'course_concession_fees' => 'double',
'ecaf_course_loan_cap' => 'int',
'is_gst_free_flag' => 'bool',
'deposit' => 'double',
'fees_code' => 'string',
'qtac_flag' => 'bool',
'department_code_id' => 'int',
'approve1_flag' => 'bool',
'approve2_flag' => 'bool',
'approve3_flag' => 'bool',
'stage' => 'string',
'study_code' => 'int',
'number_of_forms' => 'int',
'funding_code' => 'string',
'program_id' => 'int',
'cricos_code' => 'string',
'general_notes' => 'string',
'hdr_engagement_code' => 'string',
'specialisation_name' => 'string',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'course_offer_id' => 'int32',
'course_id' => 'int32',
'code' => '25',
'description' => '100',
'course_offer_status_id' => 'int32',
'course_offer_start_date' => 'date-time',
'course_offer_end_date' => 'date-time',
'application_start_date' => 'date-time',
'application_end_date' => 'date-time',
'expected_award_date' => 'date-time',
'orientation_date' => 'date-time',
'max_registrations' => 'int32',
'min_registrations' => 'int32',
'publish_number' => 'int32',
'publish_name' => '200',
'publish_start_date' => 'date-time',
'publish_end_date' => 'date-time',
'publish_flag' => null,
'accept_enrolments_flag' => null,
'coordinator_id' => 'int32',
'course_offer_type_id' => 'int32',
'delivery_language_id' => 'int32',
'duration_type_id' => 'int32',
'duration_full_time' => 'double',
'duration_part_time' => 'double',
'delivery_workplace_id' => 'int32',
'for_govt_reporting_flag' => null,
'program_status_id' => 'int32',
'contract_type_id' => 'int32',
'commencing_course_id' => 'int32',
'av_study_reason_id' => 'int32',
'study_mode_id' => 'int32',
'location_id' => 'int32',
'delivery_mode_id' => 'int32',
'delivery_mode_av8_id' => 'int32',
'predominant_delivery_mode_id' => 'int32',
'fund_source_national_id' => 'int32',
'fund_source_state_id' => 'int32',
'contract_id' => 'int32',
'fee_exemption_id' => 'int32',
'fee_exemption_waiver_id' => 'int32',
'concession_flag' => null,
'vet_in_school_flag' => null,
'internet_based_learning_id' => 'int32',
'main_subject1_id' => 'int32',
'main_subject2_id' => 'int32',
'main_subject3_id' => 'int32',
'fund_source_id' => 'int32',
'fee_assessment_category_id' => 'int32',
'mural_attendance_id' => 'int32',
'delivery_mode_wa1_id' => 'int32',
'delivery_mode_wa2_id' => 'int32',
'delivery_mode_wa3_id' => 'int32',
'delivery_option_ids' => 'int32',
'employer_invoiced_flag' => 'Y or N',
'funding_removed_flag' => 'Y or N',
'overseas_student_fee' => 'double',
'domestic_student_fee' => 'double',
'fee_type_indicator_id' => 'int32',
'offshore_delivery_indicator_id' => 'int32',
'offshore_delivery_mode_id' => 'int32',
'campus_operation_type_id' => 'int32',
'commencing_student_identifier_id' => 'int32',
'estimated_eftsl' => '11',
'trainer_id' => 'int32',
'assessor_id' => 'int32',
'assessment_method_id' => 'int32',
'venue_id' => 'int32',
'what_to_bring' => '500',
'where_to_go' => '500',
'unit_hourly_fee' => 'double',
'course_fees' => 'double',
'course_concession_fees' => 'double',
'ecaf_course_loan_cap' => 'int32',
'is_gst_free_flag' => null,
'deposit' => 'double',
'fees_code' => null,
'qtac_flag' => null,
'department_code_id' => 'int32',
'approve1_flag' => null,
'approve2_flag' => null,
'approve3_flag' => null,
'stage' => '5',
'study_code' => 'int32',
'number_of_forms' => 'int32',
'funding_code' => '50',
'program_id' => 'int32',
'cricos_code' => '10',
'general_notes' => '4000',
'hdr_engagement_code' => '10',
'specialisation_name' => null,
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
        'course_offer_id' => 'CourseOfferId',
'course_id' => 'CourseId',
'code' => 'Code',
'description' => 'Description',
'course_offer_status_id' => 'CourseOfferStatusId',
'course_offer_start_date' => 'CourseOfferStartDate',
'course_offer_end_date' => 'CourseOfferEndDate',
'application_start_date' => 'ApplicationStartDate',
'application_end_date' => 'ApplicationEndDate',
'expected_award_date' => 'ExpectedAwardDate',
'orientation_date' => 'OrientationDate',
'max_registrations' => 'MaxRegistrations',
'min_registrations' => 'MinRegistrations',
'publish_number' => 'PublishNumber',
'publish_name' => 'PublishName',
'publish_start_date' => 'PublishStartDate',
'publish_end_date' => 'PublishEndDate',
'publish_flag' => 'PublishFlag',
'accept_enrolments_flag' => 'AcceptEnrolmentsFlag',
'coordinator_id' => 'CoordinatorId',
'course_offer_type_id' => 'CourseOfferTypeId',
'delivery_language_id' => 'DeliveryLanguageId',
'duration_type_id' => 'DurationTypeId',
'duration_full_time' => 'DurationFullTime',
'duration_part_time' => 'DurationPartTime',
'delivery_workplace_id' => 'DeliveryWorkplaceId',
'for_govt_reporting_flag' => 'ForGovtReportingFlag',
'program_status_id' => 'ProgramStatusId',
'contract_type_id' => 'ContractTypeId',
'commencing_course_id' => 'CommencingCourseId',
'av_study_reason_id' => 'AvStudyReasonId',
'study_mode_id' => 'StudyModeId',
'location_id' => 'LocationId',
'delivery_mode_id' => 'DeliveryModeId',
'delivery_mode_av8_id' => 'DeliveryModeAv8Id',
'predominant_delivery_mode_id' => 'PredominantDeliveryModeId',
'fund_source_national_id' => 'FundSourceNationalId',
'fund_source_state_id' => 'FundSourceStateId',
'contract_id' => 'ContractId',
'fee_exemption_id' => 'FeeExemptionId',
'fee_exemption_waiver_id' => 'FeeExemptionWaiverId',
'concession_flag' => 'ConcessionFlag',
'vet_in_school_flag' => 'VetInSchoolFlag',
'internet_based_learning_id' => 'InternetBasedLearningId',
'main_subject1_id' => 'MainSubject1Id',
'main_subject2_id' => 'MainSubject2Id',
'main_subject3_id' => 'MainSubject3Id',
'fund_source_id' => 'FundSourceId',
'fee_assessment_category_id' => 'FeeAssessmentCategoryId',
'mural_attendance_id' => 'MuralAttendanceId',
'delivery_mode_wa1_id' => 'DeliveryModeWa1Id',
'delivery_mode_wa2_id' => 'DeliveryModeWa2Id',
'delivery_mode_wa3_id' => 'DeliveryModeWa3Id',
'delivery_option_ids' => 'DeliveryOptionIds',
'employer_invoiced_flag' => 'EmployerInvoicedFlag',
'funding_removed_flag' => 'FundingRemovedFlag',
'overseas_student_fee' => 'OverseasStudentFee',
'domestic_student_fee' => 'DomesticStudentFee',
'fee_type_indicator_id' => 'FeeTypeIndicatorId',
'offshore_delivery_indicator_id' => 'OffshoreDeliveryIndicatorId',
'offshore_delivery_mode_id' => 'OffshoreDeliveryModeId',
'campus_operation_type_id' => 'CampusOperationTypeId',
'commencing_student_identifier_id' => 'CommencingStudentIdentifierId',
'estimated_eftsl' => 'EstimatedEftsl',
'trainer_id' => 'TrainerId',
'assessor_id' => 'AssessorId',
'assessment_method_id' => 'AssessmentMethodId',
'venue_id' => 'VenueId',
'what_to_bring' => 'WhatToBring',
'where_to_go' => 'WhereToGo',
'unit_hourly_fee' => 'UnitHourlyFee',
'course_fees' => 'CourseFees',
'course_concession_fees' => 'CourseConcessionFees',
'ecaf_course_loan_cap' => 'EcafCourseLoanCap',
'is_gst_free_flag' => 'IsGstFreeFlag',
'deposit' => 'Deposit',
'fees_code' => 'FeesCode',
'qtac_flag' => 'QtacFlag',
'department_code_id' => 'DepartmentCodeId',
'approve1_flag' => 'Approve1Flag',
'approve2_flag' => 'Approve2Flag',
'approve3_flag' => 'Approve3Flag',
'stage' => 'Stage',
'study_code' => 'StudyCode',
'number_of_forms' => 'NumberOfForms',
'funding_code' => 'FundingCode',
'program_id' => 'ProgramId',
'cricos_code' => 'CricosCode',
'general_notes' => 'GeneralNotes',
'hdr_engagement_code' => 'HdrEngagementCode',
'specialisation_name' => 'SpecialisationName',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'course_offer_id' => 'setCourseOfferId',
'course_id' => 'setCourseId',
'code' => 'setCode',
'description' => 'setDescription',
'course_offer_status_id' => 'setCourseOfferStatusId',
'course_offer_start_date' => 'setCourseOfferStartDate',
'course_offer_end_date' => 'setCourseOfferEndDate',
'application_start_date' => 'setApplicationStartDate',
'application_end_date' => 'setApplicationEndDate',
'expected_award_date' => 'setExpectedAwardDate',
'orientation_date' => 'setOrientationDate',
'max_registrations' => 'setMaxRegistrations',
'min_registrations' => 'setMinRegistrations',
'publish_number' => 'setPublishNumber',
'publish_name' => 'setPublishName',
'publish_start_date' => 'setPublishStartDate',
'publish_end_date' => 'setPublishEndDate',
'publish_flag' => 'setPublishFlag',
'accept_enrolments_flag' => 'setAcceptEnrolmentsFlag',
'coordinator_id' => 'setCoordinatorId',
'course_offer_type_id' => 'setCourseOfferTypeId',
'delivery_language_id' => 'setDeliveryLanguageId',
'duration_type_id' => 'setDurationTypeId',
'duration_full_time' => 'setDurationFullTime',
'duration_part_time' => 'setDurationPartTime',
'delivery_workplace_id' => 'setDeliveryWorkplaceId',
'for_govt_reporting_flag' => 'setForGovtReportingFlag',
'program_status_id' => 'setProgramStatusId',
'contract_type_id' => 'setContractTypeId',
'commencing_course_id' => 'setCommencingCourseId',
'av_study_reason_id' => 'setAvStudyReasonId',
'study_mode_id' => 'setStudyModeId',
'location_id' => 'setLocationId',
'delivery_mode_id' => 'setDeliveryModeId',
'delivery_mode_av8_id' => 'setDeliveryModeAv8Id',
'predominant_delivery_mode_id' => 'setPredominantDeliveryModeId',
'fund_source_national_id' => 'setFundSourceNationalId',
'fund_source_state_id' => 'setFundSourceStateId',
'contract_id' => 'setContractId',
'fee_exemption_id' => 'setFeeExemptionId',
'fee_exemption_waiver_id' => 'setFeeExemptionWaiverId',
'concession_flag' => 'setConcessionFlag',
'vet_in_school_flag' => 'setVetInSchoolFlag',
'internet_based_learning_id' => 'setInternetBasedLearningId',
'main_subject1_id' => 'setMainSubject1Id',
'main_subject2_id' => 'setMainSubject2Id',
'main_subject3_id' => 'setMainSubject3Id',
'fund_source_id' => 'setFundSourceId',
'fee_assessment_category_id' => 'setFeeAssessmentCategoryId',
'mural_attendance_id' => 'setMuralAttendanceId',
'delivery_mode_wa1_id' => 'setDeliveryModeWa1Id',
'delivery_mode_wa2_id' => 'setDeliveryModeWa2Id',
'delivery_mode_wa3_id' => 'setDeliveryModeWa3Id',
'delivery_option_ids' => 'setDeliveryOptionIds',
'employer_invoiced_flag' => 'setEmployerInvoicedFlag',
'funding_removed_flag' => 'setFundingRemovedFlag',
'overseas_student_fee' => 'setOverseasStudentFee',
'domestic_student_fee' => 'setDomesticStudentFee',
'fee_type_indicator_id' => 'setFeeTypeIndicatorId',
'offshore_delivery_indicator_id' => 'setOffshoreDeliveryIndicatorId',
'offshore_delivery_mode_id' => 'setOffshoreDeliveryModeId',
'campus_operation_type_id' => 'setCampusOperationTypeId',
'commencing_student_identifier_id' => 'setCommencingStudentIdentifierId',
'estimated_eftsl' => 'setEstimatedEftsl',
'trainer_id' => 'setTrainerId',
'assessor_id' => 'setAssessorId',
'assessment_method_id' => 'setAssessmentMethodId',
'venue_id' => 'setVenueId',
'what_to_bring' => 'setWhatToBring',
'where_to_go' => 'setWhereToGo',
'unit_hourly_fee' => 'setUnitHourlyFee',
'course_fees' => 'setCourseFees',
'course_concession_fees' => 'setCourseConcessionFees',
'ecaf_course_loan_cap' => 'setEcafCourseLoanCap',
'is_gst_free_flag' => 'setIsGstFreeFlag',
'deposit' => 'setDeposit',
'fees_code' => 'setFeesCode',
'qtac_flag' => 'setQtacFlag',
'department_code_id' => 'setDepartmentCodeId',
'approve1_flag' => 'setApprove1Flag',
'approve2_flag' => 'setApprove2Flag',
'approve3_flag' => 'setApprove3Flag',
'stage' => 'setStage',
'study_code' => 'setStudyCode',
'number_of_forms' => 'setNumberOfForms',
'funding_code' => 'setFundingCode',
'program_id' => 'setProgramId',
'cricos_code' => 'setCricosCode',
'general_notes' => 'setGeneralNotes',
'hdr_engagement_code' => 'setHdrEngagementCode',
'specialisation_name' => 'setSpecialisationName',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'course_offer_id' => 'getCourseOfferId',
'course_id' => 'getCourseId',
'code' => 'getCode',
'description' => 'getDescription',
'course_offer_status_id' => 'getCourseOfferStatusId',
'course_offer_start_date' => 'getCourseOfferStartDate',
'course_offer_end_date' => 'getCourseOfferEndDate',
'application_start_date' => 'getApplicationStartDate',
'application_end_date' => 'getApplicationEndDate',
'expected_award_date' => 'getExpectedAwardDate',
'orientation_date' => 'getOrientationDate',
'max_registrations' => 'getMaxRegistrations',
'min_registrations' => 'getMinRegistrations',
'publish_number' => 'getPublishNumber',
'publish_name' => 'getPublishName',
'publish_start_date' => 'getPublishStartDate',
'publish_end_date' => 'getPublishEndDate',
'publish_flag' => 'getPublishFlag',
'accept_enrolments_flag' => 'getAcceptEnrolmentsFlag',
'coordinator_id' => 'getCoordinatorId',
'course_offer_type_id' => 'getCourseOfferTypeId',
'delivery_language_id' => 'getDeliveryLanguageId',
'duration_type_id' => 'getDurationTypeId',
'duration_full_time' => 'getDurationFullTime',
'duration_part_time' => 'getDurationPartTime',
'delivery_workplace_id' => 'getDeliveryWorkplaceId',
'for_govt_reporting_flag' => 'getForGovtReportingFlag',
'program_status_id' => 'getProgramStatusId',
'contract_type_id' => 'getContractTypeId',
'commencing_course_id' => 'getCommencingCourseId',
'av_study_reason_id' => 'getAvStudyReasonId',
'study_mode_id' => 'getStudyModeId',
'location_id' => 'getLocationId',
'delivery_mode_id' => 'getDeliveryModeId',
'delivery_mode_av8_id' => 'getDeliveryModeAv8Id',
'predominant_delivery_mode_id' => 'getPredominantDeliveryModeId',
'fund_source_national_id' => 'getFundSourceNationalId',
'fund_source_state_id' => 'getFundSourceStateId',
'contract_id' => 'getContractId',
'fee_exemption_id' => 'getFeeExemptionId',
'fee_exemption_waiver_id' => 'getFeeExemptionWaiverId',
'concession_flag' => 'getConcessionFlag',
'vet_in_school_flag' => 'getVetInSchoolFlag',
'internet_based_learning_id' => 'getInternetBasedLearningId',
'main_subject1_id' => 'getMainSubject1Id',
'main_subject2_id' => 'getMainSubject2Id',
'main_subject3_id' => 'getMainSubject3Id',
'fund_source_id' => 'getFundSourceId',
'fee_assessment_category_id' => 'getFeeAssessmentCategoryId',
'mural_attendance_id' => 'getMuralAttendanceId',
'delivery_mode_wa1_id' => 'getDeliveryModeWa1Id',
'delivery_mode_wa2_id' => 'getDeliveryModeWa2Id',
'delivery_mode_wa3_id' => 'getDeliveryModeWa3Id',
'delivery_option_ids' => 'getDeliveryOptionIds',
'employer_invoiced_flag' => 'getEmployerInvoicedFlag',
'funding_removed_flag' => 'getFundingRemovedFlag',
'overseas_student_fee' => 'getOverseasStudentFee',
'domestic_student_fee' => 'getDomesticStudentFee',
'fee_type_indicator_id' => 'getFeeTypeIndicatorId',
'offshore_delivery_indicator_id' => 'getOffshoreDeliveryIndicatorId',
'offshore_delivery_mode_id' => 'getOffshoreDeliveryModeId',
'campus_operation_type_id' => 'getCampusOperationTypeId',
'commencing_student_identifier_id' => 'getCommencingStudentIdentifierId',
'estimated_eftsl' => 'getEstimatedEftsl',
'trainer_id' => 'getTrainerId',
'assessor_id' => 'getAssessorId',
'assessment_method_id' => 'getAssessmentMethodId',
'venue_id' => 'getVenueId',
'what_to_bring' => 'getWhatToBring',
'where_to_go' => 'getWhereToGo',
'unit_hourly_fee' => 'getUnitHourlyFee',
'course_fees' => 'getCourseFees',
'course_concession_fees' => 'getCourseConcessionFees',
'ecaf_course_loan_cap' => 'getEcafCourseLoanCap',
'is_gst_free_flag' => 'getIsGstFreeFlag',
'deposit' => 'getDeposit',
'fees_code' => 'getFeesCode',
'qtac_flag' => 'getQtacFlag',
'department_code_id' => 'getDepartmentCodeId',
'approve1_flag' => 'getApprove1Flag',
'approve2_flag' => 'getApprove2Flag',
'approve3_flag' => 'getApprove3Flag',
'stage' => 'getStage',
'study_code' => 'getStudyCode',
'number_of_forms' => 'getNumberOfForms',
'funding_code' => 'getFundingCode',
'program_id' => 'getProgramId',
'cricos_code' => 'getCricosCode',
'general_notes' => 'getGeneralNotes',
'hdr_engagement_code' => 'getHdrEngagementCode',
'specialisation_name' => 'getSpecialisationName',
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
        $this->container['course_offer_id'] = isset($data['course_offer_id']) ? $data['course_offer_id'] : null;
        $this->container['course_id'] = isset($data['course_id']) ? $data['course_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['course_offer_status_id'] = isset($data['course_offer_status_id']) ? $data['course_offer_status_id'] : null;
        $this->container['course_offer_start_date'] = isset($data['course_offer_start_date']) ? $data['course_offer_start_date'] : null;
        $this->container['course_offer_end_date'] = isset($data['course_offer_end_date']) ? $data['course_offer_end_date'] : null;
        $this->container['application_start_date'] = isset($data['application_start_date']) ? $data['application_start_date'] : null;
        $this->container['application_end_date'] = isset($data['application_end_date']) ? $data['application_end_date'] : null;
        $this->container['expected_award_date'] = isset($data['expected_award_date']) ? $data['expected_award_date'] : null;
        $this->container['orientation_date'] = isset($data['orientation_date']) ? $data['orientation_date'] : null;
        $this->container['max_registrations'] = isset($data['max_registrations']) ? $data['max_registrations'] : null;
        $this->container['min_registrations'] = isset($data['min_registrations']) ? $data['min_registrations'] : null;
        $this->container['publish_number'] = isset($data['publish_number']) ? $data['publish_number'] : null;
        $this->container['publish_name'] = isset($data['publish_name']) ? $data['publish_name'] : null;
        $this->container['publish_start_date'] = isset($data['publish_start_date']) ? $data['publish_start_date'] : null;
        $this->container['publish_end_date'] = isset($data['publish_end_date']) ? $data['publish_end_date'] : null;
        $this->container['publish_flag'] = isset($data['publish_flag']) ? $data['publish_flag'] : null;
        $this->container['accept_enrolments_flag'] = isset($data['accept_enrolments_flag']) ? $data['accept_enrolments_flag'] : null;
        $this->container['coordinator_id'] = isset($data['coordinator_id']) ? $data['coordinator_id'] : null;
        $this->container['course_offer_type_id'] = isset($data['course_offer_type_id']) ? $data['course_offer_type_id'] : null;
        $this->container['delivery_language_id'] = isset($data['delivery_language_id']) ? $data['delivery_language_id'] : null;
        $this->container['duration_type_id'] = isset($data['duration_type_id']) ? $data['duration_type_id'] : null;
        $this->container['duration_full_time'] = isset($data['duration_full_time']) ? $data['duration_full_time'] : null;
        $this->container['duration_part_time'] = isset($data['duration_part_time']) ? $data['duration_part_time'] : null;
        $this->container['delivery_workplace_id'] = isset($data['delivery_workplace_id']) ? $data['delivery_workplace_id'] : null;
        $this->container['for_govt_reporting_flag'] = isset($data['for_govt_reporting_flag']) ? $data['for_govt_reporting_flag'] : null;
        $this->container['program_status_id'] = isset($data['program_status_id']) ? $data['program_status_id'] : null;
        $this->container['contract_type_id'] = isset($data['contract_type_id']) ? $data['contract_type_id'] : null;
        $this->container['commencing_course_id'] = isset($data['commencing_course_id']) ? $data['commencing_course_id'] : null;
        $this->container['av_study_reason_id'] = isset($data['av_study_reason_id']) ? $data['av_study_reason_id'] : null;
        $this->container['study_mode_id'] = isset($data['study_mode_id']) ? $data['study_mode_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['delivery_mode_id'] = isset($data['delivery_mode_id']) ? $data['delivery_mode_id'] : null;
        $this->container['delivery_mode_av8_id'] = isset($data['delivery_mode_av8_id']) ? $data['delivery_mode_av8_id'] : null;
        $this->container['predominant_delivery_mode_id'] = isset($data['predominant_delivery_mode_id']) ? $data['predominant_delivery_mode_id'] : null;
        $this->container['fund_source_national_id'] = isset($data['fund_source_national_id']) ? $data['fund_source_national_id'] : null;
        $this->container['fund_source_state_id'] = isset($data['fund_source_state_id']) ? $data['fund_source_state_id'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['fee_exemption_id'] = isset($data['fee_exemption_id']) ? $data['fee_exemption_id'] : null;
        $this->container['fee_exemption_waiver_id'] = isset($data['fee_exemption_waiver_id']) ? $data['fee_exemption_waiver_id'] : null;
        $this->container['concession_flag'] = isset($data['concession_flag']) ? $data['concession_flag'] : null;
        $this->container['vet_in_school_flag'] = isset($data['vet_in_school_flag']) ? $data['vet_in_school_flag'] : null;
        $this->container['internet_based_learning_id'] = isset($data['internet_based_learning_id']) ? $data['internet_based_learning_id'] : null;
        $this->container['main_subject1_id'] = isset($data['main_subject1_id']) ? $data['main_subject1_id'] : null;
        $this->container['main_subject2_id'] = isset($data['main_subject2_id']) ? $data['main_subject2_id'] : null;
        $this->container['main_subject3_id'] = isset($data['main_subject3_id']) ? $data['main_subject3_id'] : null;
        $this->container['fund_source_id'] = isset($data['fund_source_id']) ? $data['fund_source_id'] : null;
        $this->container['fee_assessment_category_id'] = isset($data['fee_assessment_category_id']) ? $data['fee_assessment_category_id'] : null;
        $this->container['mural_attendance_id'] = isset($data['mural_attendance_id']) ? $data['mural_attendance_id'] : null;
        $this->container['delivery_mode_wa1_id'] = isset($data['delivery_mode_wa1_id']) ? $data['delivery_mode_wa1_id'] : null;
        $this->container['delivery_mode_wa2_id'] = isset($data['delivery_mode_wa2_id']) ? $data['delivery_mode_wa2_id'] : null;
        $this->container['delivery_mode_wa3_id'] = isset($data['delivery_mode_wa3_id']) ? $data['delivery_mode_wa3_id'] : null;
        $this->container['delivery_option_ids'] = isset($data['delivery_option_ids']) ? $data['delivery_option_ids'] : null;
        $this->container['employer_invoiced_flag'] = isset($data['employer_invoiced_flag']) ? $data['employer_invoiced_flag'] : null;
        $this->container['funding_removed_flag'] = isset($data['funding_removed_flag']) ? $data['funding_removed_flag'] : null;
        $this->container['overseas_student_fee'] = isset($data['overseas_student_fee']) ? $data['overseas_student_fee'] : null;
        $this->container['domestic_student_fee'] = isset($data['domestic_student_fee']) ? $data['domestic_student_fee'] : null;
        $this->container['fee_type_indicator_id'] = isset($data['fee_type_indicator_id']) ? $data['fee_type_indicator_id'] : null;
        $this->container['offshore_delivery_indicator_id'] = isset($data['offshore_delivery_indicator_id']) ? $data['offshore_delivery_indicator_id'] : null;
        $this->container['offshore_delivery_mode_id'] = isset($data['offshore_delivery_mode_id']) ? $data['offshore_delivery_mode_id'] : null;
        $this->container['campus_operation_type_id'] = isset($data['campus_operation_type_id']) ? $data['campus_operation_type_id'] : null;
        $this->container['commencing_student_identifier_id'] = isset($data['commencing_student_identifier_id']) ? $data['commencing_student_identifier_id'] : null;
        $this->container['estimated_eftsl'] = isset($data['estimated_eftsl']) ? $data['estimated_eftsl'] : null;
        $this->container['trainer_id'] = isset($data['trainer_id']) ? $data['trainer_id'] : null;
        $this->container['assessor_id'] = isset($data['assessor_id']) ? $data['assessor_id'] : null;
        $this->container['assessment_method_id'] = isset($data['assessment_method_id']) ? $data['assessment_method_id'] : null;
        $this->container['venue_id'] = isset($data['venue_id']) ? $data['venue_id'] : null;
        $this->container['what_to_bring'] = isset($data['what_to_bring']) ? $data['what_to_bring'] : null;
        $this->container['where_to_go'] = isset($data['where_to_go']) ? $data['where_to_go'] : null;
        $this->container['unit_hourly_fee'] = isset($data['unit_hourly_fee']) ? $data['unit_hourly_fee'] : null;
        $this->container['course_fees'] = isset($data['course_fees']) ? $data['course_fees'] : null;
        $this->container['course_concession_fees'] = isset($data['course_concession_fees']) ? $data['course_concession_fees'] : null;
        $this->container['ecaf_course_loan_cap'] = isset($data['ecaf_course_loan_cap']) ? $data['ecaf_course_loan_cap'] : null;
        $this->container['is_gst_free_flag'] = isset($data['is_gst_free_flag']) ? $data['is_gst_free_flag'] : null;
        $this->container['deposit'] = isset($data['deposit']) ? $data['deposit'] : null;
        $this->container['fees_code'] = isset($data['fees_code']) ? $data['fees_code'] : null;
        $this->container['qtac_flag'] = isset($data['qtac_flag']) ? $data['qtac_flag'] : null;
        $this->container['department_code_id'] = isset($data['department_code_id']) ? $data['department_code_id'] : null;
        $this->container['approve1_flag'] = isset($data['approve1_flag']) ? $data['approve1_flag'] : null;
        $this->container['approve2_flag'] = isset($data['approve2_flag']) ? $data['approve2_flag'] : null;
        $this->container['approve3_flag'] = isset($data['approve3_flag']) ? $data['approve3_flag'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['study_code'] = isset($data['study_code']) ? $data['study_code'] : null;
        $this->container['number_of_forms'] = isset($data['number_of_forms']) ? $data['number_of_forms'] : null;
        $this->container['funding_code'] = isset($data['funding_code']) ? $data['funding_code'] : null;
        $this->container['program_id'] = isset($data['program_id']) ? $data['program_id'] : null;
        $this->container['cricos_code'] = isset($data['cricos_code']) ? $data['cricos_code'] : null;
        $this->container['general_notes'] = isset($data['general_notes']) ? $data['general_notes'] : null;
        $this->container['hdr_engagement_code'] = isset($data['hdr_engagement_code']) ? $data['hdr_engagement_code'] : null;
        $this->container['specialisation_name'] = isset($data['specialisation_name']) ? $data['specialisation_name'] : null;
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
     * @param int $course_offer_id Primary Id for course offer that is auto generated
     *
     * @return $this
     */
    public function setCourseOfferId($course_offer_id)
    {
        $this->container['course_offer_id'] = $course_offer_id;

        return $this;
    }

    /**
     * Gets course_id
     *
     * @return int
     */
    public function getCourseId()
    {
        return $this->container['course_id'];
    }

    /**
     * Sets course_id
     *
     * @param int $course_id Associated Course Id
     *
     * @return $this
     */
    public function setCourseId($course_id)
    {
        $this->container['course_id'] = $course_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Code used to identify the Course Offer
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the course offer
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets course_offer_status_id
     *
     * @return int
     */
    public function getCourseOfferStatusId()
    {
        return $this->container['course_offer_status_id'];
    }

    /**
     * Sets course_offer_status_id
     *
     * @param int $course_offer_status_id See combo CourseOfferStatuses
     *
     * @return $this
     */
    public function setCourseOfferStatusId($course_offer_status_id)
    {
        $this->container['course_offer_status_id'] = $course_offer_status_id;

        return $this;
    }

    /**
     * Gets course_offer_start_date
     *
     * @return \DateTime
     */
    public function getCourseOfferStartDate()
    {
        return $this->container['course_offer_start_date'];
    }

    /**
     * Sets course_offer_start_date
     *
     * @param \DateTime $course_offer_start_date Date when the course offer starts
     *
     * @return $this
     */
    public function setCourseOfferStartDate($course_offer_start_date)
    {
        $this->container['course_offer_start_date'] = $course_offer_start_date;

        return $this;
    }

    /**
     * Gets course_offer_end_date
     *
     * @return \DateTime
     */
    public function getCourseOfferEndDate()
    {
        return $this->container['course_offer_end_date'];
    }

    /**
     * Sets course_offer_end_date
     *
     * @param \DateTime $course_offer_end_date Date when the course offer is closed
     *
     * @return $this
     */
    public function setCourseOfferEndDate($course_offer_end_date)
    {
        $this->container['course_offer_end_date'] = $course_offer_end_date;

        return $this;
    }

    /**
     * Gets application_start_date
     *
     * @return \DateTime
     */
    public function getApplicationStartDate()
    {
        return $this->container['application_start_date'];
    }

    /**
     * Sets application_start_date
     *
     * @param \DateTime $application_start_date Date from which applications will be accepted
     *
     * @return $this
     */
    public function setApplicationStartDate($application_start_date)
    {
        $this->container['application_start_date'] = $application_start_date;

        return $this;
    }

    /**
     * Gets application_end_date
     *
     * @return \DateTime
     */
    public function getApplicationEndDate()
    {
        return $this->container['application_end_date'];
    }

    /**
     * Sets application_end_date
     *
     * @param \DateTime $application_end_date Date when applications will be closed
     *
     * @return $this
     */
    public function setApplicationEndDate($application_end_date)
    {
        $this->container['application_end_date'] = $application_end_date;

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
     * @param \DateTime $expected_award_date Expected date of when the qualification will be awarded for the course offer
     *
     * @return $this
     */
    public function setExpectedAwardDate($expected_award_date)
    {
        $this->container['expected_award_date'] = $expected_award_date;

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
     * @param \DateTime $orientation_date Orientation Date for the course offer
     *
     * @return $this
     */
    public function setOrientationDate($orientation_date)
    {
        $this->container['orientation_date'] = $orientation_date;

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
     * @param int $max_registrations Maximum number of enrolments that can be created against the course offer
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
     * @param int $min_registrations Minimum number of enrolments that can be created against the course offer
     *
     * @return $this
     */
    public function setMinRegistrations($min_registrations)
    {
        $this->container['min_registrations'] = $min_registrations;

        return $this;
    }

    /**
     * Gets publish_number
     *
     * @return int
     */
    public function getPublishNumber()
    {
        return $this->container['publish_number'];
    }

    /**
     * Sets publish_number
     *
     * @param int $publish_number Publish Number of the course offer
     *
     * @return $this
     */
    public function setPublishNumber($publish_number)
    {
        $this->container['publish_number'] = $publish_number;

        return $this;
    }

    /**
     * Gets publish_name
     *
     * @return string
     */
    public function getPublishName()
    {
        return $this->container['publish_name'];
    }

    /**
     * Sets publish_name
     *
     * @param string $publish_name The course offer description displayed on Online Enrolment
     *
     * @return $this
     */
    public function setPublishName($publish_name)
    {
        $this->container['publish_name'] = $publish_name;

        return $this;
    }

    /**
     * Gets publish_start_date
     *
     * @return \DateTime
     */
    public function getPublishStartDate()
    {
        return $this->container['publish_start_date'];
    }

    /**
     * Sets publish_start_date
     *
     * @param \DateTime $publish_start_date Date from which the course offer is visible on Online Enrolment
     *
     * @return $this
     */
    public function setPublishStartDate($publish_start_date)
    {
        $this->container['publish_start_date'] = $publish_start_date;

        return $this;
    }

    /**
     * Gets publish_end_date
     *
     * @return \DateTime
     */
    public function getPublishEndDate()
    {
        return $this->container['publish_end_date'];
    }

    /**
     * Sets publish_end_date
     *
     * @param \DateTime $publish_end_date Date till when the course offer is visible on Online Enrolment
     *
     * @return $this
     */
    public function setPublishEndDate($publish_end_date)
    {
        $this->container['publish_end_date'] = $publish_end_date;

        return $this;
    }

    /**
     * Gets publish_flag
     *
     * @return bool
     */
    public function getPublishFlag()
    {
        return $this->container['publish_flag'];
    }

    /**
     * Sets publish_flag
     *
     * @param bool $publish_flag To indicate if the course offer is visible on Online Enrolment or not
     *
     * @return $this
     */
    public function setPublishFlag($publish_flag)
    {
        $this->container['publish_flag'] = $publish_flag;

        return $this;
    }

    /**
     * Gets accept_enrolments_flag
     *
     * @return bool
     */
    public function getAcceptEnrolmentsFlag()
    {
        return $this->container['accept_enrolments_flag'];
    }

    /**
     * Sets accept_enrolments_flag
     *
     * @param bool $accept_enrolments_flag To indicate if this course offer accepts enrolments via Online Enrolment
     *
     * @return $this
     */
    public function setAcceptEnrolmentsFlag($accept_enrolments_flag)
    {
        $this->container['accept_enrolments_flag'] = $accept_enrolments_flag;

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
     * Gets course_offer_type_id
     *
     * @return int
     */
    public function getCourseOfferTypeId()
    {
        return $this->container['course_offer_type_id'];
    }

    /**
     * Sets course_offer_type_id
     *
     * @param int $course_offer_type_id See combo CourseOfferTypes
     *
     * @return $this
     */
    public function setCourseOfferTypeId($course_offer_type_id)
    {
        $this->container['course_offer_type_id'] = $course_offer_type_id;

        return $this;
    }

    /**
     * Gets delivery_language_id
     *
     * @return int
     */
    public function getDeliveryLanguageId()
    {
        return $this->container['delivery_language_id'];
    }

    /**
     * Sets delivery_language_id
     *
     * @param int $delivery_language_id See combo Languages
     *
     * @return $this
     */
    public function setDeliveryLanguageId($delivery_language_id)
    {
        $this->container['delivery_language_id'] = $delivery_language_id;

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
     * Gets duration_full_time
     *
     * @return double
     */
    public function getDurationFullTime()
    {
        return $this->container['duration_full_time'];
    }

    /**
     * Sets duration_full_time
     *
     * @param double $duration_full_time The full time enrolment duration
     *
     * @return $this
     */
    public function setDurationFullTime($duration_full_time)
    {
        $this->container['duration_full_time'] = $duration_full_time;

        return $this;
    }

    /**
     * Gets duration_part_time
     *
     * @return double
     */
    public function getDurationPartTime()
    {
        return $this->container['duration_part_time'];
    }

    /**
     * Sets duration_part_time
     *
     * @param double $duration_part_time The part time enrolment duration
     *
     * @return $this
     */
    public function setDurationPartTime($duration_part_time)
    {
        $this->container['duration_part_time'] = $duration_part_time;

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
     * @param int $delivery_workplace_id See entity Workplaces
     *
     * @return $this
     */
    public function setDeliveryWorkplaceId($delivery_workplace_id)
    {
        $this->container['delivery_workplace_id'] = $delivery_workplace_id;

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
     * @param int $study_mode_id AU only. See combo StudyModes
     *
     * @return $this
     */
    public function setStudyModeId($study_mode_id)
    {
        $this->container['study_mode_id'] = $study_mode_id;

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
     * @param int $delivery_mode_id See combo DeliveryModes
     *
     * @return $this
     */
    public function setDeliveryModeId($delivery_mode_id)
    {
        $this->container['delivery_mode_id'] = $delivery_mode_id;

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
     * @param int $contract_id See entity Contract
     *
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

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
     * @param bool $concession_flag To indicate if the course offer is eligible for concession or not
     *
     * @return $this
     */
    public function setConcessionFlag($concession_flag)
    {
        $this->container['concession_flag'] = $concession_flag;

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
     * @param bool $vet_in_school_flag AU only. To indicate if the course offer is part of VET in school program
     *
     * @return $this
     */
    public function setVetInSchoolFlag($vet_in_school_flag)
    {
        $this->container['vet_in_school_flag'] = $vet_in_school_flag;

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
     * Gets delivery_option_ids
     *
     * @return int[]
     */
    public function getDeliveryOptionIds()
    {
        return $this->container['delivery_option_ids'];
    }

    /**
     * Sets delivery_option_ids
     *
     * @param int[] $delivery_option_ids AU only. See combo DeliveryOptions
     *
     * @return $this
     */
    public function setDeliveryOptionIds($delivery_option_ids)
    {
        $this->container['delivery_option_ids'] = $delivery_option_ids;

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
     * @param string $employer_invoiced_flag AU only. To indicate if the employer invoiced flag is given or not
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
     * @param string $funding_removed_flag AU only. To indicate if the funding removed flag is given or not
     *
     * @return $this
     */
    public function setFundingRemovedFlag($funding_removed_flag)
    {
        $this->container['funding_removed_flag'] = $funding_removed_flag;

        return $this;
    }

    /**
     * Gets overseas_student_fee
     *
     * @return double
     */
    public function getOverseasStudentFee()
    {
        return $this->container['overseas_student_fee'];
    }

    /**
     * Sets overseas_student_fee
     *
     * @param double $overseas_student_fee AU FH only. The fees charged for overseas students.
     *
     * @return $this
     */
    public function setOverseasStudentFee($overseas_student_fee)
    {
        $this->container['overseas_student_fee'] = $overseas_student_fee;

        return $this;
    }

    /**
     * Gets domestic_student_fee
     *
     * @return double
     */
    public function getDomesticStudentFee()
    {
        return $this->container['domestic_student_fee'];
    }

    /**
     * Sets domestic_student_fee
     *
     * @param double $domestic_student_fee AU FH only. The fees charged for domestic students.
     *
     * @return $this
     */
    public function setDomesticStudentFee($domestic_student_fee)
    {
        $this->container['domestic_student_fee'] = $domestic_student_fee;

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
     * @param int $fee_type_indicator_id AU FH only. See combo FeeTypeIndicators
     *
     * @return $this
     */
    public function setFeeTypeIndicatorId($fee_type_indicator_id)
    {
        $this->container['fee_type_indicator_id'] = $fee_type_indicator_id;

        return $this;
    }

    /**
     * Gets offshore_delivery_indicator_id
     *
     * @return int
     */
    public function getOffshoreDeliveryIndicatorId()
    {
        return $this->container['offshore_delivery_indicator_id'];
    }

    /**
     * Sets offshore_delivery_indicator_id
     *
     * @param int $offshore_delivery_indicator_id AU FH only. See combo OffshoreDeliveryIndicators
     *
     * @return $this
     */
    public function setOffshoreDeliveryIndicatorId($offshore_delivery_indicator_id)
    {
        $this->container['offshore_delivery_indicator_id'] = $offshore_delivery_indicator_id;

        return $this;
    }

    /**
     * Gets offshore_delivery_mode_id
     *
     * @return int
     */
    public function getOffshoreDeliveryModeId()
    {
        return $this->container['offshore_delivery_mode_id'];
    }

    /**
     * Sets offshore_delivery_mode_id
     *
     * @param int $offshore_delivery_mode_id AU FH only. See combo OffshoreDeliveryModes
     *
     * @return $this
     */
    public function setOffshoreDeliveryModeId($offshore_delivery_mode_id)
    {
        $this->container['offshore_delivery_mode_id'] = $offshore_delivery_mode_id;

        return $this;
    }

    /**
     * Gets campus_operation_type_id
     *
     * @return int
     */
    public function getCampusOperationTypeId()
    {
        return $this->container['campus_operation_type_id'];
    }

    /**
     * Sets campus_operation_type_id
     *
     * @param int $campus_operation_type_id AU FH only. See combo CampusOperationTypes
     *
     * @return $this
     */
    public function setCampusOperationTypeId($campus_operation_type_id)
    {
        $this->container['campus_operation_type_id'] = $campus_operation_type_id;

        return $this;
    }

    /**
     * Gets commencing_student_identifier_id
     *
     * @return int
     */
    public function getCommencingStudentIdentifierId()
    {
        return $this->container['commencing_student_identifier_id'];
    }

    /**
     * Sets commencing_student_identifier_id
     *
     * @param int $commencing_student_identifier_id AU FH only. See combo CommencingStudentIdentifiers
     *
     * @return $this
     */
    public function setCommencingStudentIdentifierId($commencing_student_identifier_id)
    {
        $this->container['commencing_student_identifier_id'] = $commencing_student_identifier_id;

        return $this;
    }

    /**
     * Gets estimated_eftsl
     *
     * @return string
     */
    public function getEstimatedEftsl()
    {
        return $this->container['estimated_eftsl'];
    }

    /**
     * Sets estimated_eftsl
     *
     * @param string $estimated_eftsl AU FH only. The estimated yearly EFTSL
     *
     * @return $this
     */
    public function setEstimatedEftsl($estimated_eftsl)
    {
        $this->container['estimated_eftsl'] = $estimated_eftsl;

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
     * @param string $what_to_bring A description on what the learner is required to bring along to attend the course
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
     * @param string $where_to_go A description on where the course will be held
     *
     * @return $this
     */
    public function setWhereToGo($where_to_go)
    {
        $this->container['where_to_go'] = $where_to_go;

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
     * @param double $unit_hourly_fee AU only. The fees charged for the unit per hour
     *
     * @return $this
     */
    public function setUnitHourlyFee($unit_hourly_fee)
    {
        $this->container['unit_hourly_fee'] = $unit_hourly_fee;

        return $this;
    }

    /**
     * Gets course_fees
     *
     * @return double
     */
    public function getCourseFees()
    {
        return $this->container['course_fees'];
    }

    /**
     * Sets course_fees
     *
     * @param double $course_fees The total course fees
     *
     * @return $this
     */
    public function setCourseFees($course_fees)
    {
        $this->container['course_fees'] = $course_fees;

        return $this;
    }

    /**
     * Gets course_concession_fees
     *
     * @return double
     */
    public function getCourseConcessionFees()
    {
        return $this->container['course_concession_fees'];
    }

    /**
     * Sets course_concession_fees
     *
     * @param double $course_concession_fees The course fees after concession
     *
     * @return $this
     */
    public function setCourseConcessionFees($course_concession_fees)
    {
        $this->container['course_concession_fees'] = $course_concession_fees;

        return $this;
    }

    /**
     * Gets ecaf_course_loan_cap
     *
     * @return int
     */
    public function getEcafCourseLoanCap()
    {
        return $this->container['ecaf_course_loan_cap'];
    }

    /**
     * Sets ecaf_course_loan_cap
     *
     * @param int $ecaf_course_loan_cap AU only. The eCAF Course Loan Cap
     *
     * @return $this
     */
    public function setEcafCourseLoanCap($ecaf_course_loan_cap)
    {
        $this->container['ecaf_course_loan_cap'] = $ecaf_course_loan_cap;

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
     * @param bool $is_gst_free_flag To indicate if the course fees specified is including GST or not
     *
     * @return $this
     */
    public function setIsGstFreeFlag($is_gst_free_flag)
    {
        $this->container['is_gst_free_flag'] = $is_gst_free_flag;

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
     * @param double $deposit The deposit the learner needs to pay to attend the course
     *
     * @return $this
     */
    public function setDeposit($deposit)
    {
        $this->container['deposit'] = $deposit;

        return $this;
    }

    /**
     * Gets fees_code
     *
     * @return string
     */
    public function getFeesCode()
    {
        return $this->container['fees_code'];
    }

    /**
     * Sets fees_code
     *
     * @param string $fees_code AU and NZ only.
     *
     * @return $this
     */
    public function setFeesCode($fees_code)
    {
        $this->container['fees_code'] = $fees_code;

        return $this;
    }

    /**
     * Gets qtac_flag
     *
     * @return bool
     */
    public function getQtacFlag()
    {
        return $this->container['qtac_flag'];
    }

    /**
     * Sets qtac_flag
     *
     * @param bool $qtac_flag AU only. To indicate if course offer is affiliated with QTAC or not. QLD specific
     *
     * @return $this
     */
    public function setQtacFlag($qtac_flag)
    {
        $this->container['qtac_flag'] = $qtac_flag;

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
     * @param int $department_code_id AU only. See combo DepartmentCodes
     *
     * @return $this
     */
    public function setDepartmentCodeId($department_code_id)
    {
        $this->container['department_code_id'] = $department_code_id;

        return $this;
    }

    /**
     * Gets approve1_flag
     *
     * @return bool
     */
    public function getApprove1Flag()
    {
        return $this->container['approve1_flag'];
    }

    /**
     * Sets approve1_flag
     *
     * @param bool $approve1_flag AU and NZ.
     *
     * @return $this
     */
    public function setApprove1Flag($approve1_flag)
    {
        $this->container['approve1_flag'] = $approve1_flag;

        return $this;
    }

    /**
     * Gets approve2_flag
     *
     * @return bool
     */
    public function getApprove2Flag()
    {
        return $this->container['approve2_flag'];
    }

    /**
     * Sets approve2_flag
     *
     * @param bool $approve2_flag AU and NZ.
     *
     * @return $this
     */
    public function setApprove2Flag($approve2_flag)
    {
        $this->container['approve2_flag'] = $approve2_flag;

        return $this;
    }

    /**
     * Gets approve3_flag
     *
     * @return bool
     */
    public function getApprove3Flag()
    {
        return $this->container['approve3_flag'];
    }

    /**
     * Sets approve3_flag
     *
     * @param bool $approve3_flag AU and NZ.
     *
     * @return $this
     */
    public function setApprove3Flag($approve3_flag)
    {
        $this->container['approve3_flag'] = $approve3_flag;

        return $this;
    }

    /**
     * Gets stage
     *
     * @return string
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     *
     * @param string $stage AU and NZ. Stage the course offer is delivered
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;

        return $this;
    }

    /**
     * Gets study_code
     *
     * @return int
     */
    public function getStudyCode()
    {
        return $this->container['study_code'];
    }

    /**
     * Sets study_code
     *
     * @param int $study_code AU and NZ. Study Code of the course offer
     *
     * @return $this
     */
    public function setStudyCode($study_code)
    {
        $this->container['study_code'] = $study_code;

        return $this;
    }

    /**
     * Gets number_of_forms
     *
     * @return int
     */
    public function getNumberOfForms()
    {
        return $this->container['number_of_forms'];
    }

    /**
     * Sets number_of_forms
     *
     * @param int $number_of_forms AU and NZ only. The number of forms that are required
     *
     * @return $this
     */
    public function setNumberOfForms($number_of_forms)
    {
        $this->container['number_of_forms'] = $number_of_forms;

        return $this;
    }

    /**
     * Gets funding_code
     *
     * @return string
     */
    public function getFundingCode()
    {
        return $this->container['funding_code'];
    }

    /**
     * Sets funding_code
     *
     * @param string $funding_code AU and NZ only. Funding Code of the course offer
     *
     * @return $this
     */
    public function setFundingCode($funding_code)
    {
        $this->container['funding_code'] = $funding_code;

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
     * @param int $program_id AU and NZ only. See combos Programs
     *
     * @return $this
     */
    public function setProgramId($program_id)
    {
        $this->container['program_id'] = $program_id;

        return $this;
    }

    /**
     * Gets cricos_code
     *
     * @return string
     */
    public function getCricosCode()
    {
        return $this->container['cricos_code'];
    }

    /**
     * Sets cricos_code
     *
     * @param string $cricos_code AU and NZ only. Specify the applicable CRICOS number
     *
     * @return $this
     */
    public function setCricosCode($cricos_code)
    {
        $this->container['cricos_code'] = $cricos_code;

        return $this;
    }

    /**
     * Gets general_notes
     *
     * @return string
     */
    public function getGeneralNotes()
    {
        return $this->container['general_notes'];
    }

    /**
     * Sets general_notes
     *
     * @param string $general_notes Any further notes specific to the course offer
     *
     * @return $this
     */
    public function setGeneralNotes($general_notes)
    {
        $this->container['general_notes'] = $general_notes;

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
     * @param string $hdr_engagement_code AU FH only. Higher Degree Research Engagement Code
     *
     * @return $this
     */
    public function setHdrEngagementCode($hdr_engagement_code)
    {
        $this->container['hdr_engagement_code'] = $hdr_engagement_code;

        return $this;
    }

    /**
     * Gets specialisation_name
     *
     * @return string
     */
    public function getSpecialisationName()
    {
        return $this->container['specialisation_name'];
    }

    /**
     * Sets specialisation_name
     *
     * @param string $specialisation_name Specialisation name
     *
     * @return $this
     */
    public function setSpecialisationName($specialisation_name)
    {
        $this->container['specialisation_name'] = $specialisation_name;

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
     * @param \DateTime $last_modified_time_stamp Date when the course offer was last modified
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
