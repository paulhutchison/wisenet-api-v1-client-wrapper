<?php
/**
 * UnitOfferRelationships
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
 * UnitOfferRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnitOfferRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnitOfferRelationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'course_offer' => '\Phwebs\Wisenet\Model\CourseOfferBasic',
'assessor' => '\Phwebs\Wisenet\Model\Assessor',
'unit' => '\Phwebs\Wisenet\Model\UnitBasic',
'location' => '\Phwebs\Wisenet\Model\LocationBasic',
'contract' => '\Phwebs\Wisenet\Model\Contract',
'trainer' => '\Phwebs\Wisenet\Model\Trainer',
'venue' => '\Phwebs\Wisenet\Model\VenueBasic',
'program' => '\Phwebs\Wisenet\Model\Program',
'assessment_method' => '\Phwebs\Wisenet\Model\AssessmentMethod',
'fee_exemption' => '\Phwebs\Wisenet\Model\FeeExemption',
'fee_exemption_waiver' => '\Phwebs\Wisenet\Model\FeeExemptionWaiver',
'department_code' => '\Phwebs\Wisenet\Model\DepartmentCode',
'delivery_mode' => '\Phwebs\Wisenet\Model\DeliveryMode',
'fund_source_national' => '\Phwebs\Wisenet\Model\FundSourceNational',
'fund_source_state' => '\Phwebs\Wisenet\Model\FundSourceState',
'period_type' => '\Phwebs\Wisenet\Model\PeriodType',
'duration_type' => '\Phwebs\Wisenet\Model\DurationType',
'workplace' => '\Phwebs\Wisenet\Model\WorkplaceBasic',
'internet_based_learning' => '\Phwebs\Wisenet\Model\InternetBasedLearning',
'nz_fee_assessment_category' => '\Phwebs\Wisenet\Model\FeeAssessmentCategory',
'nz_murual_attendance' => '\Phwebs\Wisenet\Model\MuralAttendance',
'delivery_mode_av8' => '\Phwebs\Wisenet\Model\DeliveryModeAv8',
'predominant_delivery_mode' => '\Phwebs\Wisenet\Model\PredominantDeliveryMode',
'delivery_mode_wa1' => '\Phwebs\Wisenet\Model\DeliveryModeWa',
'delivery_mode_wa2' => '\Phwebs\Wisenet\Model\DeliveryModeWa',
'delivery_mode_wa3' => '\Phwebs\Wisenet\Model\DeliveryModeWa'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'course_offer' => null,
'assessor' => null,
'unit' => null,
'location' => null,
'contract' => null,
'trainer' => null,
'venue' => null,
'program' => null,
'assessment_method' => null,
'fee_exemption' => null,
'fee_exemption_waiver' => null,
'department_code' => null,
'delivery_mode' => null,
'fund_source_national' => null,
'fund_source_state' => null,
'period_type' => null,
'duration_type' => null,
'workplace' => null,
'internet_based_learning' => null,
'nz_fee_assessment_category' => null,
'nz_murual_attendance' => null,
'delivery_mode_av8' => null,
'predominant_delivery_mode' => null,
'delivery_mode_wa1' => null,
'delivery_mode_wa2' => null,
'delivery_mode_wa3' => null    ];

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
        'course_offer' => 'CourseOffer',
'assessor' => 'Assessor',
'unit' => 'Unit',
'location' => 'Location',
'contract' => 'Contract',
'trainer' => 'Trainer',
'venue' => 'Venue',
'program' => 'Program',
'assessment_method' => 'AssessmentMethod',
'fee_exemption' => 'FeeExemption',
'fee_exemption_waiver' => 'FeeExemptionWaiver',
'department_code' => 'DepartmentCode',
'delivery_mode' => 'DeliveryMode',
'fund_source_national' => 'FundSourceNational',
'fund_source_state' => 'FundSourceState',
'period_type' => 'PeriodType',
'duration_type' => 'DurationType',
'workplace' => 'Workplace',
'internet_based_learning' => 'InternetBasedLearning',
'nz_fee_assessment_category' => 'NzFeeAssessmentCategory',
'nz_murual_attendance' => 'NzMurualAttendance',
'delivery_mode_av8' => 'DeliveryModeAv8',
'predominant_delivery_mode' => 'PredominantDeliveryMode',
'delivery_mode_wa1' => 'DeliveryModeWa1',
'delivery_mode_wa2' => 'DeliveryModeWa2',
'delivery_mode_wa3' => 'DeliveryModeWa3'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'course_offer' => 'setCourseOffer',
'assessor' => 'setAssessor',
'unit' => 'setUnit',
'location' => 'setLocation',
'contract' => 'setContract',
'trainer' => 'setTrainer',
'venue' => 'setVenue',
'program' => 'setProgram',
'assessment_method' => 'setAssessmentMethod',
'fee_exemption' => 'setFeeExemption',
'fee_exemption_waiver' => 'setFeeExemptionWaiver',
'department_code' => 'setDepartmentCode',
'delivery_mode' => 'setDeliveryMode',
'fund_source_national' => 'setFundSourceNational',
'fund_source_state' => 'setFundSourceState',
'period_type' => 'setPeriodType',
'duration_type' => 'setDurationType',
'workplace' => 'setWorkplace',
'internet_based_learning' => 'setInternetBasedLearning',
'nz_fee_assessment_category' => 'setNzFeeAssessmentCategory',
'nz_murual_attendance' => 'setNzMurualAttendance',
'delivery_mode_av8' => 'setDeliveryModeAv8',
'predominant_delivery_mode' => 'setPredominantDeliveryMode',
'delivery_mode_wa1' => 'setDeliveryModeWa1',
'delivery_mode_wa2' => 'setDeliveryModeWa2',
'delivery_mode_wa3' => 'setDeliveryModeWa3'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'course_offer' => 'getCourseOffer',
'assessor' => 'getAssessor',
'unit' => 'getUnit',
'location' => 'getLocation',
'contract' => 'getContract',
'trainer' => 'getTrainer',
'venue' => 'getVenue',
'program' => 'getProgram',
'assessment_method' => 'getAssessmentMethod',
'fee_exemption' => 'getFeeExemption',
'fee_exemption_waiver' => 'getFeeExemptionWaiver',
'department_code' => 'getDepartmentCode',
'delivery_mode' => 'getDeliveryMode',
'fund_source_national' => 'getFundSourceNational',
'fund_source_state' => 'getFundSourceState',
'period_type' => 'getPeriodType',
'duration_type' => 'getDurationType',
'workplace' => 'getWorkplace',
'internet_based_learning' => 'getInternetBasedLearning',
'nz_fee_assessment_category' => 'getNzFeeAssessmentCategory',
'nz_murual_attendance' => 'getNzMurualAttendance',
'delivery_mode_av8' => 'getDeliveryModeAv8',
'predominant_delivery_mode' => 'getPredominantDeliveryMode',
'delivery_mode_wa1' => 'getDeliveryModeWa1',
'delivery_mode_wa2' => 'getDeliveryModeWa2',
'delivery_mode_wa3' => 'getDeliveryModeWa3'    ];

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
        $this->container['course_offer'] = isset($data['course_offer']) ? $data['course_offer'] : null;
        $this->container['assessor'] = isset($data['assessor']) ? $data['assessor'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['trainer'] = isset($data['trainer']) ? $data['trainer'] : null;
        $this->container['venue'] = isset($data['venue']) ? $data['venue'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['assessment_method'] = isset($data['assessment_method']) ? $data['assessment_method'] : null;
        $this->container['fee_exemption'] = isset($data['fee_exemption']) ? $data['fee_exemption'] : null;
        $this->container['fee_exemption_waiver'] = isset($data['fee_exemption_waiver']) ? $data['fee_exemption_waiver'] : null;
        $this->container['department_code'] = isset($data['department_code']) ? $data['department_code'] : null;
        $this->container['delivery_mode'] = isset($data['delivery_mode']) ? $data['delivery_mode'] : null;
        $this->container['fund_source_national'] = isset($data['fund_source_national']) ? $data['fund_source_national'] : null;
        $this->container['fund_source_state'] = isset($data['fund_source_state']) ? $data['fund_source_state'] : null;
        $this->container['period_type'] = isset($data['period_type']) ? $data['period_type'] : null;
        $this->container['duration_type'] = isset($data['duration_type']) ? $data['duration_type'] : null;
        $this->container['workplace'] = isset($data['workplace']) ? $data['workplace'] : null;
        $this->container['internet_based_learning'] = isset($data['internet_based_learning']) ? $data['internet_based_learning'] : null;
        $this->container['nz_fee_assessment_category'] = isset($data['nz_fee_assessment_category']) ? $data['nz_fee_assessment_category'] : null;
        $this->container['nz_murual_attendance'] = isset($data['nz_murual_attendance']) ? $data['nz_murual_attendance'] : null;
        $this->container['delivery_mode_av8'] = isset($data['delivery_mode_av8']) ? $data['delivery_mode_av8'] : null;
        $this->container['predominant_delivery_mode'] = isset($data['predominant_delivery_mode']) ? $data['predominant_delivery_mode'] : null;
        $this->container['delivery_mode_wa1'] = isset($data['delivery_mode_wa1']) ? $data['delivery_mode_wa1'] : null;
        $this->container['delivery_mode_wa2'] = isset($data['delivery_mode_wa2']) ? $data['delivery_mode_wa2'] : null;
        $this->container['delivery_mode_wa3'] = isset($data['delivery_mode_wa3']) ? $data['delivery_mode_wa3'] : null;
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
     * Gets unit
     *
     * @return \Phwebs\Wisenet\Model\UnitBasic
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \Phwebs\Wisenet\Model\UnitBasic $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Phwebs\Wisenet\Model\LocationBasic
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Phwebs\Wisenet\Model\LocationBasic $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return \Phwebs\Wisenet\Model\Contract
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \Phwebs\Wisenet\Model\Contract $contract contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

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
     * Gets venue
     *
     * @return \Phwebs\Wisenet\Model\VenueBasic
     */
    public function getVenue()
    {
        return $this->container['venue'];
    }

    /**
     * Sets venue
     *
     * @param \Phwebs\Wisenet\Model\VenueBasic $venue venue
     *
     * @return $this
     */
    public function setVenue($venue)
    {
        $this->container['venue'] = $venue;

        return $this;
    }

    /**
     * Gets program
     *
     * @return \Phwebs\Wisenet\Model\Program
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     *
     * @param \Phwebs\Wisenet\Model\Program $program program
     *
     * @return $this
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets assessment_method
     *
     * @return \Phwebs\Wisenet\Model\AssessmentMethod
     */
    public function getAssessmentMethod()
    {
        return $this->container['assessment_method'];
    }

    /**
     * Sets assessment_method
     *
     * @param \Phwebs\Wisenet\Model\AssessmentMethod $assessment_method assessment_method
     *
     * @return $this
     */
    public function setAssessmentMethod($assessment_method)
    {
        $this->container['assessment_method'] = $assessment_method;

        return $this;
    }

    /**
     * Gets fee_exemption
     *
     * @return \Phwebs\Wisenet\Model\FeeExemption
     */
    public function getFeeExemption()
    {
        return $this->container['fee_exemption'];
    }

    /**
     * Sets fee_exemption
     *
     * @param \Phwebs\Wisenet\Model\FeeExemption $fee_exemption fee_exemption
     *
     * @return $this
     */
    public function setFeeExemption($fee_exemption)
    {
        $this->container['fee_exemption'] = $fee_exemption;

        return $this;
    }

    /**
     * Gets fee_exemption_waiver
     *
     * @return \Phwebs\Wisenet\Model\FeeExemptionWaiver
     */
    public function getFeeExemptionWaiver()
    {
        return $this->container['fee_exemption_waiver'];
    }

    /**
     * Sets fee_exemption_waiver
     *
     * @param \Phwebs\Wisenet\Model\FeeExemptionWaiver $fee_exemption_waiver fee_exemption_waiver
     *
     * @return $this
     */
    public function setFeeExemptionWaiver($fee_exemption_waiver)
    {
        $this->container['fee_exemption_waiver'] = $fee_exemption_waiver;

        return $this;
    }

    /**
     * Gets department_code
     *
     * @return \Phwebs\Wisenet\Model\DepartmentCode
     */
    public function getDepartmentCode()
    {
        return $this->container['department_code'];
    }

    /**
     * Sets department_code
     *
     * @param \Phwebs\Wisenet\Model\DepartmentCode $department_code department_code
     *
     * @return $this
     */
    public function setDepartmentCode($department_code)
    {
        $this->container['department_code'] = $department_code;

        return $this;
    }

    /**
     * Gets delivery_mode
     *
     * @return \Phwebs\Wisenet\Model\DeliveryMode
     */
    public function getDeliveryMode()
    {
        return $this->container['delivery_mode'];
    }

    /**
     * Sets delivery_mode
     *
     * @param \Phwebs\Wisenet\Model\DeliveryMode $delivery_mode delivery_mode
     *
     * @return $this
     */
    public function setDeliveryMode($delivery_mode)
    {
        $this->container['delivery_mode'] = $delivery_mode;

        return $this;
    }

    /**
     * Gets fund_source_national
     *
     * @return \Phwebs\Wisenet\Model\FundSourceNational
     */
    public function getFundSourceNational()
    {
        return $this->container['fund_source_national'];
    }

    /**
     * Sets fund_source_national
     *
     * @param \Phwebs\Wisenet\Model\FundSourceNational $fund_source_national fund_source_national
     *
     * @return $this
     */
    public function setFundSourceNational($fund_source_national)
    {
        $this->container['fund_source_national'] = $fund_source_national;

        return $this;
    }

    /**
     * Gets fund_source_state
     *
     * @return \Phwebs\Wisenet\Model\FundSourceState
     */
    public function getFundSourceState()
    {
        return $this->container['fund_source_state'];
    }

    /**
     * Sets fund_source_state
     *
     * @param \Phwebs\Wisenet\Model\FundSourceState $fund_source_state fund_source_state
     *
     * @return $this
     */
    public function setFundSourceState($fund_source_state)
    {
        $this->container['fund_source_state'] = $fund_source_state;

        return $this;
    }

    /**
     * Gets period_type
     *
     * @return \Phwebs\Wisenet\Model\PeriodType
     */
    public function getPeriodType()
    {
        return $this->container['period_type'];
    }

    /**
     * Sets period_type
     *
     * @param \Phwebs\Wisenet\Model\PeriodType $period_type period_type
     *
     * @return $this
     */
    public function setPeriodType($period_type)
    {
        $this->container['period_type'] = $period_type;

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
     * Gets workplace
     *
     * @return \Phwebs\Wisenet\Model\WorkplaceBasic
     */
    public function getWorkplace()
    {
        return $this->container['workplace'];
    }

    /**
     * Sets workplace
     *
     * @param \Phwebs\Wisenet\Model\WorkplaceBasic $workplace workplace
     *
     * @return $this
     */
    public function setWorkplace($workplace)
    {
        $this->container['workplace'] = $workplace;

        return $this;
    }

    /**
     * Gets internet_based_learning
     *
     * @return \Phwebs\Wisenet\Model\InternetBasedLearning
     */
    public function getInternetBasedLearning()
    {
        return $this->container['internet_based_learning'];
    }

    /**
     * Sets internet_based_learning
     *
     * @param \Phwebs\Wisenet\Model\InternetBasedLearning $internet_based_learning internet_based_learning
     *
     * @return $this
     */
    public function setInternetBasedLearning($internet_based_learning)
    {
        $this->container['internet_based_learning'] = $internet_based_learning;

        return $this;
    }

    /**
     * Gets nz_fee_assessment_category
     *
     * @return \Phwebs\Wisenet\Model\FeeAssessmentCategory
     */
    public function getNzFeeAssessmentCategory()
    {
        return $this->container['nz_fee_assessment_category'];
    }

    /**
     * Sets nz_fee_assessment_category
     *
     * @param \Phwebs\Wisenet\Model\FeeAssessmentCategory $nz_fee_assessment_category nz_fee_assessment_category
     *
     * @return $this
     */
    public function setNzFeeAssessmentCategory($nz_fee_assessment_category)
    {
        $this->container['nz_fee_assessment_category'] = $nz_fee_assessment_category;

        return $this;
    }

    /**
     * Gets nz_murual_attendance
     *
     * @return \Phwebs\Wisenet\Model\MuralAttendance
     */
    public function getNzMurualAttendance()
    {
        return $this->container['nz_murual_attendance'];
    }

    /**
     * Sets nz_murual_attendance
     *
     * @param \Phwebs\Wisenet\Model\MuralAttendance $nz_murual_attendance nz_murual_attendance
     *
     * @return $this
     */
    public function setNzMurualAttendance($nz_murual_attendance)
    {
        $this->container['nz_murual_attendance'] = $nz_murual_attendance;

        return $this;
    }

    /**
     * Gets delivery_mode_av8
     *
     * @return \Phwebs\Wisenet\Model\DeliveryModeAv8
     */
    public function getDeliveryModeAv8()
    {
        return $this->container['delivery_mode_av8'];
    }

    /**
     * Sets delivery_mode_av8
     *
     * @param \Phwebs\Wisenet\Model\DeliveryModeAv8 $delivery_mode_av8 delivery_mode_av8
     *
     * @return $this
     */
    public function setDeliveryModeAv8($delivery_mode_av8)
    {
        $this->container['delivery_mode_av8'] = $delivery_mode_av8;

        return $this;
    }

    /**
     * Gets predominant_delivery_mode
     *
     * @return \Phwebs\Wisenet\Model\PredominantDeliveryMode
     */
    public function getPredominantDeliveryMode()
    {
        return $this->container['predominant_delivery_mode'];
    }

    /**
     * Sets predominant_delivery_mode
     *
     * @param \Phwebs\Wisenet\Model\PredominantDeliveryMode $predominant_delivery_mode predominant_delivery_mode
     *
     * @return $this
     */
    public function setPredominantDeliveryMode($predominant_delivery_mode)
    {
        $this->container['predominant_delivery_mode'] = $predominant_delivery_mode;

        return $this;
    }

    /**
     * Gets delivery_mode_wa1
     *
     * @return \Phwebs\Wisenet\Model\DeliveryModeWa
     */
    public function getDeliveryModeWa1()
    {
        return $this->container['delivery_mode_wa1'];
    }

    /**
     * Sets delivery_mode_wa1
     *
     * @param \Phwebs\Wisenet\Model\DeliveryModeWa $delivery_mode_wa1 delivery_mode_wa1
     *
     * @return $this
     */
    public function setDeliveryModeWa1($delivery_mode_wa1)
    {
        $this->container['delivery_mode_wa1'] = $delivery_mode_wa1;

        return $this;
    }

    /**
     * Gets delivery_mode_wa2
     *
     * @return \Phwebs\Wisenet\Model\DeliveryModeWa
     */
    public function getDeliveryModeWa2()
    {
        return $this->container['delivery_mode_wa2'];
    }

    /**
     * Sets delivery_mode_wa2
     *
     * @param \Phwebs\Wisenet\Model\DeliveryModeWa $delivery_mode_wa2 delivery_mode_wa2
     *
     * @return $this
     */
    public function setDeliveryModeWa2($delivery_mode_wa2)
    {
        $this->container['delivery_mode_wa2'] = $delivery_mode_wa2;

        return $this;
    }

    /**
     * Gets delivery_mode_wa3
     *
     * @return \Phwebs\Wisenet\Model\DeliveryModeWa
     */
    public function getDeliveryModeWa3()
    {
        return $this->container['delivery_mode_wa3'];
    }

    /**
     * Sets delivery_mode_wa3
     *
     * @param \Phwebs\Wisenet\Model\DeliveryModeWa $delivery_mode_wa3 delivery_mode_wa3
     *
     * @return $this
     */
    public function setDeliveryModeWa3($delivery_mode_wa3)
    {
        $this->container['delivery_mode_wa3'] = $delivery_mode_wa3;

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
