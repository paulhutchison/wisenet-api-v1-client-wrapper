<?php
/**
 * LanguageLiteracyNumeracy
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
 * LanguageLiteracyNumeracy Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LanguageLiteracyNumeracy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LanguageLiteracyNumeracy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'language_literacy_numeracy_id' => 'int',
'course_enrolment_id' => 'int',
'lln_benefit_id' => 'int',
'lln_level_id' => 'int',
'lln_post_assessment_id' => 'int',
'lln_pre_assessment_id' => 'int',
'assessment_date1' => '\DateTime',
'assessment_date2' => '\DateTime',
'assessment_date3' => '\DateTime',
'post_assessment_date' => '\DateTime',
'assessment_comment' => 'string',
'recommended_hours' => 'int',
'midpoint_hours' => 'int',
'attended_hours' => 'int',
'completed_hours' => 'int',
'commencement_date' => '\DateTime',
'midpoint_date' => '\DateTime',
'completion_date' => '\DateTime',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'language_literacy_numeracy_id' => 'int32',
'course_enrolment_id' => 'int32',
'lln_benefit_id' => 'int32',
'lln_level_id' => 'int32',
'lln_post_assessment_id' => 'int32',
'lln_pre_assessment_id' => 'int32',
'assessment_date1' => 'date-time',
'assessment_date2' => 'date-time',
'assessment_date3' => 'date-time',
'post_assessment_date' => 'date-time',
'assessment_comment' => null,
'recommended_hours' => 'int32',
'midpoint_hours' => 'int32',
'attended_hours' => 'int32',
'completed_hours' => 'int32',
'commencement_date' => 'date-time',
'midpoint_date' => 'date-time',
'completion_date' => 'date-time',
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
        'language_literacy_numeracy_id' => 'LanguageLiteracyNumeracyId',
'course_enrolment_id' => 'CourseEnrolmentId',
'lln_benefit_id' => 'LlnBenefitId',
'lln_level_id' => 'LlnLevelId',
'lln_post_assessment_id' => 'LlnPostAssessmentId',
'lln_pre_assessment_id' => 'LlnPreAssessmentId',
'assessment_date1' => 'AssessmentDate1',
'assessment_date2' => 'AssessmentDate2',
'assessment_date3' => 'AssessmentDate3',
'post_assessment_date' => 'PostAssessmentDate',
'assessment_comment' => 'AssessmentComment',
'recommended_hours' => 'RecommendedHours',
'midpoint_hours' => 'MidpointHours',
'attended_hours' => 'AttendedHours',
'completed_hours' => 'CompletedHours',
'commencement_date' => 'CommencementDate',
'midpoint_date' => 'MidpointDate',
'completion_date' => 'CompletionDate',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language_literacy_numeracy_id' => 'setLanguageLiteracyNumeracyId',
'course_enrolment_id' => 'setCourseEnrolmentId',
'lln_benefit_id' => 'setLlnBenefitId',
'lln_level_id' => 'setLlnLevelId',
'lln_post_assessment_id' => 'setLlnPostAssessmentId',
'lln_pre_assessment_id' => 'setLlnPreAssessmentId',
'assessment_date1' => 'setAssessmentDate1',
'assessment_date2' => 'setAssessmentDate2',
'assessment_date3' => 'setAssessmentDate3',
'post_assessment_date' => 'setPostAssessmentDate',
'assessment_comment' => 'setAssessmentComment',
'recommended_hours' => 'setRecommendedHours',
'midpoint_hours' => 'setMidpointHours',
'attended_hours' => 'setAttendedHours',
'completed_hours' => 'setCompletedHours',
'commencement_date' => 'setCommencementDate',
'midpoint_date' => 'setMidpointDate',
'completion_date' => 'setCompletionDate',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language_literacy_numeracy_id' => 'getLanguageLiteracyNumeracyId',
'course_enrolment_id' => 'getCourseEnrolmentId',
'lln_benefit_id' => 'getLlnBenefitId',
'lln_level_id' => 'getLlnLevelId',
'lln_post_assessment_id' => 'getLlnPostAssessmentId',
'lln_pre_assessment_id' => 'getLlnPreAssessmentId',
'assessment_date1' => 'getAssessmentDate1',
'assessment_date2' => 'getAssessmentDate2',
'assessment_date3' => 'getAssessmentDate3',
'post_assessment_date' => 'getPostAssessmentDate',
'assessment_comment' => 'getAssessmentComment',
'recommended_hours' => 'getRecommendedHours',
'midpoint_hours' => 'getMidpointHours',
'attended_hours' => 'getAttendedHours',
'completed_hours' => 'getCompletedHours',
'commencement_date' => 'getCommencementDate',
'midpoint_date' => 'getMidpointDate',
'completion_date' => 'getCompletionDate',
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
        $this->container['language_literacy_numeracy_id'] = isset($data['language_literacy_numeracy_id']) ? $data['language_literacy_numeracy_id'] : null;
        $this->container['course_enrolment_id'] = isset($data['course_enrolment_id']) ? $data['course_enrolment_id'] : null;
        $this->container['lln_benefit_id'] = isset($data['lln_benefit_id']) ? $data['lln_benefit_id'] : null;
        $this->container['lln_level_id'] = isset($data['lln_level_id']) ? $data['lln_level_id'] : null;
        $this->container['lln_post_assessment_id'] = isset($data['lln_post_assessment_id']) ? $data['lln_post_assessment_id'] : null;
        $this->container['lln_pre_assessment_id'] = isset($data['lln_pre_assessment_id']) ? $data['lln_pre_assessment_id'] : null;
        $this->container['assessment_date1'] = isset($data['assessment_date1']) ? $data['assessment_date1'] : null;
        $this->container['assessment_date2'] = isset($data['assessment_date2']) ? $data['assessment_date2'] : null;
        $this->container['assessment_date3'] = isset($data['assessment_date3']) ? $data['assessment_date3'] : null;
        $this->container['post_assessment_date'] = isset($data['post_assessment_date']) ? $data['post_assessment_date'] : null;
        $this->container['assessment_comment'] = isset($data['assessment_comment']) ? $data['assessment_comment'] : null;
        $this->container['recommended_hours'] = isset($data['recommended_hours']) ? $data['recommended_hours'] : null;
        $this->container['midpoint_hours'] = isset($data['midpoint_hours']) ? $data['midpoint_hours'] : null;
        $this->container['attended_hours'] = isset($data['attended_hours']) ? $data['attended_hours'] : null;
        $this->container['completed_hours'] = isset($data['completed_hours']) ? $data['completed_hours'] : null;
        $this->container['commencement_date'] = isset($data['commencement_date']) ? $data['commencement_date'] : null;
        $this->container['midpoint_date'] = isset($data['midpoint_date']) ? $data['midpoint_date'] : null;
        $this->container['completion_date'] = isset($data['completion_date']) ? $data['completion_date'] : null;
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
     * Gets language_literacy_numeracy_id
     *
     * @return int
     */
    public function getLanguageLiteracyNumeracyId()
    {
        return $this->container['language_literacy_numeracy_id'];
    }

    /**
     * Sets language_literacy_numeracy_id
     *
     * @param int $language_literacy_numeracy_id Primary Id for LanguageLiteracyNumeracy that is auto generated
     *
     * @return $this
     */
    public function setLanguageLiteracyNumeracyId($language_literacy_numeracy_id)
    {
        $this->container['language_literacy_numeracy_id'] = $language_literacy_numeracy_id;

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
     * Gets lln_benefit_id
     *
     * @return int
     */
    public function getLlnBenefitId()
    {
        return $this->container['lln_benefit_id'];
    }

    /**
     * Sets lln_benefit_id
     *
     * @param int $lln_benefit_id See combo LanguageLiteracyNumeracyBenefit
     *
     * @return $this
     */
    public function setLlnBenefitId($lln_benefit_id)
    {
        $this->container['lln_benefit_id'] = $lln_benefit_id;

        return $this;
    }

    /**
     * Gets lln_level_id
     *
     * @return int
     */
    public function getLlnLevelId()
    {
        return $this->container['lln_level_id'];
    }

    /**
     * Sets lln_level_id
     *
     * @param int $lln_level_id See combo LanguageLiteracyNumeracyLevel
     *
     * @return $this
     */
    public function setLlnLevelId($lln_level_id)
    {
        $this->container['lln_level_id'] = $lln_level_id;

        return $this;
    }

    /**
     * Gets lln_post_assessment_id
     *
     * @return int
     */
    public function getLlnPostAssessmentId()
    {
        return $this->container['lln_post_assessment_id'];
    }

    /**
     * Sets lln_post_assessment_id
     *
     * @param int $lln_post_assessment_id See combo LanguageLiteracyNumeracyPostAssessments
     *
     * @return $this
     */
    public function setLlnPostAssessmentId($lln_post_assessment_id)
    {
        $this->container['lln_post_assessment_id'] = $lln_post_assessment_id;

        return $this;
    }

    /**
     * Gets lln_pre_assessment_id
     *
     * @return int
     */
    public function getLlnPreAssessmentId()
    {
        return $this->container['lln_pre_assessment_id'];
    }

    /**
     * Sets lln_pre_assessment_id
     *
     * @param int $lln_pre_assessment_id See combo LanguageLiteracyNumeracyPreAssessments
     *
     * @return $this
     */
    public function setLlnPreAssessmentId($lln_pre_assessment_id)
    {
        $this->container['lln_pre_assessment_id'] = $lln_pre_assessment_id;

        return $this;
    }

    /**
     * Gets assessment_date1
     *
     * @return \DateTime
     */
    public function getAssessmentDate1()
    {
        return $this->container['assessment_date1'];
    }

    /**
     * Sets assessment_date1
     *
     * @param \DateTime $assessment_date1 Date of Assessment 1 for LanguageLiteracyNumeracy
     *
     * @return $this
     */
    public function setAssessmentDate1($assessment_date1)
    {
        $this->container['assessment_date1'] = $assessment_date1;

        return $this;
    }

    /**
     * Gets assessment_date2
     *
     * @return \DateTime
     */
    public function getAssessmentDate2()
    {
        return $this->container['assessment_date2'];
    }

    /**
     * Sets assessment_date2
     *
     * @param \DateTime $assessment_date2 Date of Assessment 2 for LanguageLiteracyNumeracy
     *
     * @return $this
     */
    public function setAssessmentDate2($assessment_date2)
    {
        $this->container['assessment_date2'] = $assessment_date2;

        return $this;
    }

    /**
     * Gets assessment_date3
     *
     * @return \DateTime
     */
    public function getAssessmentDate3()
    {
        return $this->container['assessment_date3'];
    }

    /**
     * Sets assessment_date3
     *
     * @param \DateTime $assessment_date3 Date of Assessment 3 for LanguageLiteracyNumeracy
     *
     * @return $this
     */
    public function setAssessmentDate3($assessment_date3)
    {
        $this->container['assessment_date3'] = $assessment_date3;

        return $this;
    }

    /**
     * Gets post_assessment_date
     *
     * @return \DateTime
     */
    public function getPostAssessmentDate()
    {
        return $this->container['post_assessment_date'];
    }

    /**
     * Sets post_assessment_date
     *
     * @param \DateTime $post_assessment_date Date of Post Assessment for LanguageLiteracyNumeracy
     *
     * @return $this
     */
    public function setPostAssessmentDate($post_assessment_date)
    {
        $this->container['post_assessment_date'] = $post_assessment_date;

        return $this;
    }

    /**
     * Gets assessment_comment
     *
     * @return string
     */
    public function getAssessmentComment()
    {
        return $this->container['assessment_comment'];
    }

    /**
     * Sets assessment_comment
     *
     * @param string $assessment_comment Assessment Comments for LanguageLiteracyNumeracy
     *
     * @return $this
     */
    public function setAssessmentComment($assessment_comment)
    {
        $this->container['assessment_comment'] = $assessment_comment;

        return $this;
    }

    /**
     * Gets recommended_hours
     *
     * @return int
     */
    public function getRecommendedHours()
    {
        return $this->container['recommended_hours'];
    }

    /**
     * Sets recommended_hours
     *
     * @param int $recommended_hours Recommended Hours for LanguageLiteracyNumeracy
     *
     * @return $this
     */
    public function setRecommendedHours($recommended_hours)
    {
        $this->container['recommended_hours'] = $recommended_hours;

        return $this;
    }

    /**
     * Gets midpoint_hours
     *
     * @return int
     */
    public function getMidpointHours()
    {
        return $this->container['midpoint_hours'];
    }

    /**
     * Sets midpoint_hours
     *
     * @param int $midpoint_hours Midpoint Hours for LanguageLiteracyNumeracy
     *
     * @return $this
     */
    public function setMidpointHours($midpoint_hours)
    {
        $this->container['midpoint_hours'] = $midpoint_hours;

        return $this;
    }

    /**
     * Gets attended_hours
     *
     * @return int
     */
    public function getAttendedHours()
    {
        return $this->container['attended_hours'];
    }

    /**
     * Sets attended_hours
     *
     * @param int $attended_hours Attended Hours for LanguageLiteracyNumeracy
     *
     * @return $this
     */
    public function setAttendedHours($attended_hours)
    {
        $this->container['attended_hours'] = $attended_hours;

        return $this;
    }

    /**
     * Gets completed_hours
     *
     * @return int
     */
    public function getCompletedHours()
    {
        return $this->container['completed_hours'];
    }

    /**
     * Sets completed_hours
     *
     * @param int $completed_hours Completed Hours
     *
     * @return $this
     */
    public function setCompletedHours($completed_hours)
    {
        $this->container['completed_hours'] = $completed_hours;

        return $this;
    }

    /**
     * Gets commencement_date
     *
     * @return \DateTime
     */
    public function getCommencementDate()
    {
        return $this->container['commencement_date'];
    }

    /**
     * Sets commencement_date
     *
     * @param \DateTime $commencement_date Date LanguageLiteracyNumeracy is commenced
     *
     * @return $this
     */
    public function setCommencementDate($commencement_date)
    {
        $this->container['commencement_date'] = $commencement_date;

        return $this;
    }

    /**
     * Gets midpoint_date
     *
     * @return \DateTime
     */
    public function getMidpointDate()
    {
        return $this->container['midpoint_date'];
    }

    /**
     * Sets midpoint_date
     *
     * @param \DateTime $midpoint_date Date LanguageLiteracyNumeracy is midpoint
     *
     * @return $this
     */
    public function setMidpointDate($midpoint_date)
    {
        $this->container['midpoint_date'] = $midpoint_date;

        return $this;
    }

    /**
     * Gets completion_date
     *
     * @return \DateTime
     */
    public function getCompletionDate()
    {
        return $this->container['completion_date'];
    }

    /**
     * Sets completion_date
     *
     * @param \DateTime $completion_date Date LanguageLiteracyNumeracy is completed
     *
     * @return $this
     */
    public function setCompletionDate($completion_date)
    {
        $this->container['completion_date'] = $completion_date;

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
     * @param \DateTime $last_modified_time_stamp Date when the LanguageLiteracyNumeracy record was last modified
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
