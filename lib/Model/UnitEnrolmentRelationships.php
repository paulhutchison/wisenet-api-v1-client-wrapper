<?php
/**
 * UnitEnrolmentRelationships
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
 * UnitEnrolmentRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnitEnrolmentRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnitEnrolmentRelationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assessment_method' => '\Phwebs\Wisenet\Model\AssessmentMethod',
'unit' => '\Phwebs\Wisenet\Model\UnitBasic',
'unit_offer' => '\Phwebs\Wisenet\Model\UnitOfferBasic',
'course_enrolment' => '\Phwebs\Wisenet\Model\CourseEnrolmentBasic',
'learner' => '\Phwebs\Wisenet\Model\LearnerBasic',
'course_offer' => '\Phwebs\Wisenet\Model\CourseOfferBasic',
'contract' => '\Phwebs\Wisenet\Model\Contract',
'location' => '\Phwebs\Wisenet\Model\LocationBasic',
'assessor' => '\Phwebs\Wisenet\Model\Assessor',
'trainer' => '\Phwebs\Wisenet\Model\Trainer',
'specific_program_identifier' => '\Phwebs\Wisenet\Model\SpecificProgramIdentifier',
'fee_exemption' => '\Phwebs\Wisenet\Model\FeeExemption',
'fee_exemption_waiver' => '\Phwebs\Wisenet\Model\FeeExemptionWaiver',
'result' => '\Phwebs\Wisenet\Model\Result',
'outcome' => '\Phwebs\Wisenet\Model\Outcome',
'delivery_mode' => '\Phwebs\Wisenet\Model\DeliveryMode',
'fund_source_national' => '\Phwebs\Wisenet\Model\FundSourceNational',
'fund_source_state' => '\Phwebs\Wisenet\Model\FundSourceState',
'nz_fee_assessment_category' => '\Phwebs\Wisenet\Model\FeeAssessmentCategory',
'nz_murual_attendance' => '\Phwebs\Wisenet\Model\MuralAttendance',
'nz_outcome' => '\Phwebs\Wisenet\Model\NzOutcome',
'nz_result' => '\Phwebs\Wisenet\Model\NzqaResult',
'nz_fund_source' => '\Phwebs\Wisenet\Model\NzFundSource',
'work_place' => '\Phwebs\Wisenet\Model\WorkplaceBasic',
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
        'assessment_method' => null,
'unit' => null,
'unit_offer' => null,
'course_enrolment' => null,
'learner' => null,
'course_offer' => null,
'contract' => null,
'location' => null,
'assessor' => null,
'trainer' => null,
'specific_program_identifier' => null,
'fee_exemption' => null,
'fee_exemption_waiver' => null,
'result' => null,
'outcome' => null,
'delivery_mode' => null,
'fund_source_national' => null,
'fund_source_state' => null,
'nz_fee_assessment_category' => null,
'nz_murual_attendance' => null,
'nz_outcome' => null,
'nz_result' => null,
'nz_fund_source' => null,
'work_place' => null,
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
        'assessment_method' => 'AssessmentMethod',
'unit' => 'Unit',
'unit_offer' => 'UnitOffer',
'course_enrolment' => 'CourseEnrolment',
'learner' => 'Learner',
'course_offer' => 'CourseOffer',
'contract' => 'Contract',
'location' => 'Location',
'assessor' => 'Assessor',
'trainer' => 'Trainer',
'specific_program_identifier' => 'SpecificProgramIdentifier',
'fee_exemption' => 'FeeExemption',
'fee_exemption_waiver' => 'FeeExemptionWaiver',
'result' => 'Result',
'outcome' => 'Outcome',
'delivery_mode' => 'DeliveryMode',
'fund_source_national' => 'FundSourceNational',
'fund_source_state' => 'FundSourceState',
'nz_fee_assessment_category' => 'NzFeeAssessmentCategory',
'nz_murual_attendance' => 'NzMurualAttendance',
'nz_outcome' => 'NzOutcome',
'nz_result' => 'NzResult',
'nz_fund_source' => 'NzFundSource',
'work_place' => 'WorkPlace',
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
        'assessment_method' => 'setAssessmentMethod',
'unit' => 'setUnit',
'unit_offer' => 'setUnitOffer',
'course_enrolment' => 'setCourseEnrolment',
'learner' => 'setLearner',
'course_offer' => 'setCourseOffer',
'contract' => 'setContract',
'location' => 'setLocation',
'assessor' => 'setAssessor',
'trainer' => 'setTrainer',
'specific_program_identifier' => 'setSpecificProgramIdentifier',
'fee_exemption' => 'setFeeExemption',
'fee_exemption_waiver' => 'setFeeExemptionWaiver',
'result' => 'setResult',
'outcome' => 'setOutcome',
'delivery_mode' => 'setDeliveryMode',
'fund_source_national' => 'setFundSourceNational',
'fund_source_state' => 'setFundSourceState',
'nz_fee_assessment_category' => 'setNzFeeAssessmentCategory',
'nz_murual_attendance' => 'setNzMurualAttendance',
'nz_outcome' => 'setNzOutcome',
'nz_result' => 'setNzResult',
'nz_fund_source' => 'setNzFundSource',
'work_place' => 'setWorkPlace',
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
        'assessment_method' => 'getAssessmentMethod',
'unit' => 'getUnit',
'unit_offer' => 'getUnitOffer',
'course_enrolment' => 'getCourseEnrolment',
'learner' => 'getLearner',
'course_offer' => 'getCourseOffer',
'contract' => 'getContract',
'location' => 'getLocation',
'assessor' => 'getAssessor',
'trainer' => 'getTrainer',
'specific_program_identifier' => 'getSpecificProgramIdentifier',
'fee_exemption' => 'getFeeExemption',
'fee_exemption_waiver' => 'getFeeExemptionWaiver',
'result' => 'getResult',
'outcome' => 'getOutcome',
'delivery_mode' => 'getDeliveryMode',
'fund_source_national' => 'getFundSourceNational',
'fund_source_state' => 'getFundSourceState',
'nz_fee_assessment_category' => 'getNzFeeAssessmentCategory',
'nz_murual_attendance' => 'getNzMurualAttendance',
'nz_outcome' => 'getNzOutcome',
'nz_result' => 'getNzResult',
'nz_fund_source' => 'getNzFundSource',
'work_place' => 'getWorkPlace',
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
        $this->container['assessment_method'] = isset($data['assessment_method']) ? $data['assessment_method'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['unit_offer'] = isset($data['unit_offer']) ? $data['unit_offer'] : null;
        $this->container['course_enrolment'] = isset($data['course_enrolment']) ? $data['course_enrolment'] : null;
        $this->container['learner'] = isset($data['learner']) ? $data['learner'] : null;
        $this->container['course_offer'] = isset($data['course_offer']) ? $data['course_offer'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['assessor'] = isset($data['assessor']) ? $data['assessor'] : null;
        $this->container['trainer'] = isset($data['trainer']) ? $data['trainer'] : null;
        $this->container['specific_program_identifier'] = isset($data['specific_program_identifier']) ? $data['specific_program_identifier'] : null;
        $this->container['fee_exemption'] = isset($data['fee_exemption']) ? $data['fee_exemption'] : null;
        $this->container['fee_exemption_waiver'] = isset($data['fee_exemption_waiver']) ? $data['fee_exemption_waiver'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['delivery_mode'] = isset($data['delivery_mode']) ? $data['delivery_mode'] : null;
        $this->container['fund_source_national'] = isset($data['fund_source_national']) ? $data['fund_source_national'] : null;
        $this->container['fund_source_state'] = isset($data['fund_source_state']) ? $data['fund_source_state'] : null;
        $this->container['nz_fee_assessment_category'] = isset($data['nz_fee_assessment_category']) ? $data['nz_fee_assessment_category'] : null;
        $this->container['nz_murual_attendance'] = isset($data['nz_murual_attendance']) ? $data['nz_murual_attendance'] : null;
        $this->container['nz_outcome'] = isset($data['nz_outcome']) ? $data['nz_outcome'] : null;
        $this->container['nz_result'] = isset($data['nz_result']) ? $data['nz_result'] : null;
        $this->container['nz_fund_source'] = isset($data['nz_fund_source']) ? $data['nz_fund_source'] : null;
        $this->container['work_place'] = isset($data['work_place']) ? $data['work_place'] : null;
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
     * Gets unit_offer
     *
     * @return \Phwebs\Wisenet\Model\UnitOfferBasic
     */
    public function getUnitOffer()
    {
        return $this->container['unit_offer'];
    }

    /**
     * Sets unit_offer
     *
     * @param \Phwebs\Wisenet\Model\UnitOfferBasic $unit_offer unit_offer
     *
     * @return $this
     */
    public function setUnitOffer($unit_offer)
    {
        $this->container['unit_offer'] = $unit_offer;

        return $this;
    }

    /**
     * Gets course_enrolment
     *
     * @return \Phwebs\Wisenet\Model\CourseEnrolmentBasic
     */
    public function getCourseEnrolment()
    {
        return $this->container['course_enrolment'];
    }

    /**
     * Sets course_enrolment
     *
     * @param \Phwebs\Wisenet\Model\CourseEnrolmentBasic $course_enrolment course_enrolment
     *
     * @return $this
     */
    public function setCourseEnrolment($course_enrolment)
    {
        $this->container['course_enrolment'] = $course_enrolment;

        return $this;
    }

    /**
     * Gets learner
     *
     * @return \Phwebs\Wisenet\Model\LearnerBasic
     */
    public function getLearner()
    {
        return $this->container['learner'];
    }

    /**
     * Sets learner
     *
     * @param \Phwebs\Wisenet\Model\LearnerBasic $learner learner
     *
     * @return $this
     */
    public function setLearner($learner)
    {
        $this->container['learner'] = $learner;

        return $this;
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
     * Gets specific_program_identifier
     *
     * @return \Phwebs\Wisenet\Model\SpecificProgramIdentifier
     */
    public function getSpecificProgramIdentifier()
    {
        return $this->container['specific_program_identifier'];
    }

    /**
     * Sets specific_program_identifier
     *
     * @param \Phwebs\Wisenet\Model\SpecificProgramIdentifier $specific_program_identifier specific_program_identifier
     *
     * @return $this
     */
    public function setSpecificProgramIdentifier($specific_program_identifier)
    {
        $this->container['specific_program_identifier'] = $specific_program_identifier;

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
     * Gets result
     *
     * @return \Phwebs\Wisenet\Model\Result
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \Phwebs\Wisenet\Model\Result $result result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets outcome
     *
     * @return \Phwebs\Wisenet\Model\Outcome
     */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param \Phwebs\Wisenet\Model\Outcome $outcome outcome
     *
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;

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
     * Gets nz_outcome
     *
     * @return \Phwebs\Wisenet\Model\NzOutcome
     */
    public function getNzOutcome()
    {
        return $this->container['nz_outcome'];
    }

    /**
     * Sets nz_outcome
     *
     * @param \Phwebs\Wisenet\Model\NzOutcome $nz_outcome nz_outcome
     *
     * @return $this
     */
    public function setNzOutcome($nz_outcome)
    {
        $this->container['nz_outcome'] = $nz_outcome;

        return $this;
    }

    /**
     * Gets nz_result
     *
     * @return \Phwebs\Wisenet\Model\NzqaResult
     */
    public function getNzResult()
    {
        return $this->container['nz_result'];
    }

    /**
     * Sets nz_result
     *
     * @param \Phwebs\Wisenet\Model\NzqaResult $nz_result nz_result
     *
     * @return $this
     */
    public function setNzResult($nz_result)
    {
        $this->container['nz_result'] = $nz_result;

        return $this;
    }

    /**
     * Gets nz_fund_source
     *
     * @return \Phwebs\Wisenet\Model\NzFundSource
     */
    public function getNzFundSource()
    {
        return $this->container['nz_fund_source'];
    }

    /**
     * Sets nz_fund_source
     *
     * @param \Phwebs\Wisenet\Model\NzFundSource $nz_fund_source nz_fund_source
     *
     * @return $this
     */
    public function setNzFundSource($nz_fund_source)
    {
        $this->container['nz_fund_source'] = $nz_fund_source;

        return $this;
    }

    /**
     * Gets work_place
     *
     * @return \Phwebs\Wisenet\Model\WorkplaceBasic
     */
    public function getWorkPlace()
    {
        return $this->container['work_place'];
    }

    /**
     * Sets work_place
     *
     * @param \Phwebs\Wisenet\Model\WorkplaceBasic $work_place work_place
     *
     * @return $this
     */
    public function setWorkPlace($work_place)
    {
        $this->container['work_place'] = $work_place;

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
