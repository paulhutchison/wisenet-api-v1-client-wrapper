<?php
/**
 * LearnerAuDemographicsFeeHelp
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
 * LearnerAuDemographicsFeeHelp Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerAuDemographicsFeeHelp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerAuDemographicsFeeHelp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tertiary_entrance_score' => 'int',
'year12_postcode' => 'string',
'year12_suburb' => 'string',
'year_left_school' => 'string',
'indigenous_status_id' => 'int',
'citizen_resident_id' => 'int',
'year_arrived_in_australia' => 'int',
'highest_education_level_id' => 'int',
'highest_education_level_year' => 'int',
'parent_education_level_id1' => 'int',
'parent_education_level_id2' => 'int',
'additional_entrance_criteria_id' => 'int',
'atar' => 'double',
'selection_rank' => 'double',
'basis_for_admission_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tertiary_entrance_score' => 'int32',
'year12_postcode' => '20',
'year12_suburb' => '50',
'year_left_school' => '4',
'indigenous_status_id' => 'int32',
'citizen_resident_id' => 'int32',
'year_arrived_in_australia' => 'int32',
'highest_education_level_id' => 'int32',
'highest_education_level_year' => 'int32',
'parent_education_level_id1' => 'int32',
'parent_education_level_id2' => 'int32',
'additional_entrance_criteria_id' => 'int32',
'atar' => 'double',
'selection_rank' => 'double',
'basis_for_admission_id' => 'int32'    ];

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
        'tertiary_entrance_score' => 'TertiaryEntranceScore',
'year12_postcode' => 'Year12Postcode',
'year12_suburb' => 'Year12Suburb',
'year_left_school' => 'YearLeftSchool',
'indigenous_status_id' => 'IndigenousStatusId',
'citizen_resident_id' => 'CitizenResidentId',
'year_arrived_in_australia' => 'YearArrivedInAustralia',
'highest_education_level_id' => 'HighestEducationLevelId',
'highest_education_level_year' => 'HighestEducationLevelYear',
'parent_education_level_id1' => 'ParentEducationLevelId1',
'parent_education_level_id2' => 'ParentEducationLevelId2',
'additional_entrance_criteria_id' => 'AdditionalEntranceCriteriaId',
'atar' => 'Atar',
'selection_rank' => 'SelectionRank',
'basis_for_admission_id' => 'BasisForAdmissionId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tertiary_entrance_score' => 'setTertiaryEntranceScore',
'year12_postcode' => 'setYear12Postcode',
'year12_suburb' => 'setYear12Suburb',
'year_left_school' => 'setYearLeftSchool',
'indigenous_status_id' => 'setIndigenousStatusId',
'citizen_resident_id' => 'setCitizenResidentId',
'year_arrived_in_australia' => 'setYearArrivedInAustralia',
'highest_education_level_id' => 'setHighestEducationLevelId',
'highest_education_level_year' => 'setHighestEducationLevelYear',
'parent_education_level_id1' => 'setParentEducationLevelId1',
'parent_education_level_id2' => 'setParentEducationLevelId2',
'additional_entrance_criteria_id' => 'setAdditionalEntranceCriteriaId',
'atar' => 'setAtar',
'selection_rank' => 'setSelectionRank',
'basis_for_admission_id' => 'setBasisForAdmissionId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tertiary_entrance_score' => 'getTertiaryEntranceScore',
'year12_postcode' => 'getYear12Postcode',
'year12_suburb' => 'getYear12Suburb',
'year_left_school' => 'getYearLeftSchool',
'indigenous_status_id' => 'getIndigenousStatusId',
'citizen_resident_id' => 'getCitizenResidentId',
'year_arrived_in_australia' => 'getYearArrivedInAustralia',
'highest_education_level_id' => 'getHighestEducationLevelId',
'highest_education_level_year' => 'getHighestEducationLevelYear',
'parent_education_level_id1' => 'getParentEducationLevelId1',
'parent_education_level_id2' => 'getParentEducationLevelId2',
'additional_entrance_criteria_id' => 'getAdditionalEntranceCriteriaId',
'atar' => 'getAtar',
'selection_rank' => 'getSelectionRank',
'basis_for_admission_id' => 'getBasisForAdmissionId'    ];

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
        $this->container['tertiary_entrance_score'] = isset($data['tertiary_entrance_score']) ? $data['tertiary_entrance_score'] : null;
        $this->container['year12_postcode'] = isset($data['year12_postcode']) ? $data['year12_postcode'] : null;
        $this->container['year12_suburb'] = isset($data['year12_suburb']) ? $data['year12_suburb'] : null;
        $this->container['year_left_school'] = isset($data['year_left_school']) ? $data['year_left_school'] : null;
        $this->container['indigenous_status_id'] = isset($data['indigenous_status_id']) ? $data['indigenous_status_id'] : null;
        $this->container['citizen_resident_id'] = isset($data['citizen_resident_id']) ? $data['citizen_resident_id'] : null;
        $this->container['year_arrived_in_australia'] = isset($data['year_arrived_in_australia']) ? $data['year_arrived_in_australia'] : null;
        $this->container['highest_education_level_id'] = isset($data['highest_education_level_id']) ? $data['highest_education_level_id'] : null;
        $this->container['highest_education_level_year'] = isset($data['highest_education_level_year']) ? $data['highest_education_level_year'] : null;
        $this->container['parent_education_level_id1'] = isset($data['parent_education_level_id1']) ? $data['parent_education_level_id1'] : null;
        $this->container['parent_education_level_id2'] = isset($data['parent_education_level_id2']) ? $data['parent_education_level_id2'] : null;
        $this->container['additional_entrance_criteria_id'] = isset($data['additional_entrance_criteria_id']) ? $data['additional_entrance_criteria_id'] : null;
        $this->container['atar'] = isset($data['atar']) ? $data['atar'] : null;
        $this->container['selection_rank'] = isset($data['selection_rank']) ? $data['selection_rank'] : null;
        $this->container['basis_for_admission_id'] = isset($data['basis_for_admission_id']) ? $data['basis_for_admission_id'] : null;
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
     * Gets tertiary_entrance_score
     *
     * @return int
     */
    public function getTertiaryEntranceScore()
    {
        return $this->container['tertiary_entrance_score'];
    }

    /**
     * Sets tertiary_entrance_score
     *
     * @param int $tertiary_entrance_score Code that indicates the tertiary entrance score
     *
     * @return $this
     */
    public function setTertiaryEntranceScore($tertiary_entrance_score)
    {
        $this->container['tertiary_entrance_score'] = $tertiary_entrance_score;

        return $this;
    }

    /**
     * Gets year12_postcode
     *
     * @return string
     */
    public function getYear12Postcode()
    {
        return $this->container['year12_postcode'];
    }

    /**
     * Sets year12_postcode
     *
     * @param string $year12_postcode Year 12 Postcode
     *
     * @return $this
     */
    public function setYear12Postcode($year12_postcode)
    {
        $this->container['year12_postcode'] = $year12_postcode;

        return $this;
    }

    /**
     * Gets year12_suburb
     *
     * @return string
     */
    public function getYear12Suburb()
    {
        return $this->container['year12_suburb'];
    }

    /**
     * Sets year12_suburb
     *
     * @param string $year12_suburb Year 12 Suburb
     *
     * @return $this
     */
    public function setYear12Suburb($year12_suburb)
    {
        $this->container['year12_suburb'] = $year12_suburb;

        return $this;
    }

    /**
     * Gets year_left_school
     *
     * @return string
     */
    public function getYearLeftSchool()
    {
        return $this->container['year_left_school'];
    }

    /**
     * Sets year_left_school
     *
     * @param string $year_left_school Year learner left school
     *
     * @return $this
     */
    public function setYearLeftSchool($year_left_school)
    {
        $this->container['year_left_school'] = $year_left_school;

        return $this;
    }

    /**
     * Gets indigenous_status_id
     *
     * @return int
     */
    public function getIndigenousStatusId()
    {
        return $this->container['indigenous_status_id'];
    }

    /**
     * Sets indigenous_status_id
     *
     * @param int $indigenous_status_id See combo IndigenousStatuses
     *
     * @return $this
     */
    public function setIndigenousStatusId($indigenous_status_id)
    {
        $this->container['indigenous_status_id'] = $indigenous_status_id;

        return $this;
    }

    /**
     * Gets citizen_resident_id
     *
     * @return int
     */
    public function getCitizenResidentId()
    {
        return $this->container['citizen_resident_id'];
    }

    /**
     * Sets citizen_resident_id
     *
     * @param int $citizen_resident_id Obsolete. Use Citizenships instead
     *
     * @return $this
     */
    public function setCitizenResidentId($citizen_resident_id)
    {
        $this->container['citizen_resident_id'] = $citizen_resident_id;

        return $this;
    }

    /**
     * Gets year_arrived_in_australia
     *
     * @return int
     */
    public function getYearArrivedInAustralia()
    {
        return $this->container['year_arrived_in_australia'];
    }

    /**
     * Sets year_arrived_in_australia
     *
     * @param int $year_arrived_in_australia Year learner arrived in Australia
     *
     * @return $this
     */
    public function setYearArrivedInAustralia($year_arrived_in_australia)
    {
        $this->container['year_arrived_in_australia'] = $year_arrived_in_australia;

        return $this;
    }

    /**
     * Gets highest_education_level_id
     *
     * @return int
     */
    public function getHighestEducationLevelId()
    {
        return $this->container['highest_education_level_id'];
    }

    /**
     * Sets highest_education_level_id
     *
     * @param int $highest_education_level_id See combo FhHighestEducationLevels
     *
     * @return $this
     */
    public function setHighestEducationLevelId($highest_education_level_id)
    {
        $this->container['highest_education_level_id'] = $highest_education_level_id;

        return $this;
    }

    /**
     * Gets highest_education_level_year
     *
     * @return int
     */
    public function getHighestEducationLevelYear()
    {
        return $this->container['highest_education_level_year'];
    }

    /**
     * Sets highest_education_level_year
     *
     * @param int $highest_education_level_year Year the highest education level was completed
     *
     * @return $this
     */
    public function setHighestEducationLevelYear($highest_education_level_year)
    {
        $this->container['highest_education_level_year'] = $highest_education_level_year;

        return $this;
    }

    /**
     * Gets parent_education_level_id1
     *
     * @return int
     */
    public function getParentEducationLevelId1()
    {
        return $this->container['parent_education_level_id1'];
    }

    /**
     * Sets parent_education_level_id1
     *
     * @param int $parent_education_level_id1 See combo FhParentEducationLevels
     *
     * @return $this
     */
    public function setParentEducationLevelId1($parent_education_level_id1)
    {
        $this->container['parent_education_level_id1'] = $parent_education_level_id1;

        return $this;
    }

    /**
     * Gets parent_education_level_id2
     *
     * @return int
     */
    public function getParentEducationLevelId2()
    {
        return $this->container['parent_education_level_id2'];
    }

    /**
     * Sets parent_education_level_id2
     *
     * @param int $parent_education_level_id2 See combo FhParentEducationLevels
     *
     * @return $this
     */
    public function setParentEducationLevelId2($parent_education_level_id2)
    {
        $this->container['parent_education_level_id2'] = $parent_education_level_id2;

        return $this;
    }

    /**
     * Gets additional_entrance_criteria_id
     *
     * @return int
     */
    public function getAdditionalEntranceCriteriaId()
    {
        return $this->container['additional_entrance_criteria_id'];
    }

    /**
     * Sets additional_entrance_criteria_id
     *
     * @param int $additional_entrance_criteria_id See combo FhAdditionalEntranceCriteria
     *
     * @return $this
     */
    public function setAdditionalEntranceCriteriaId($additional_entrance_criteria_id)
    {
        $this->container['additional_entrance_criteria_id'] = $additional_entrance_criteria_id;

        return $this;
    }

    /**
     * Gets atar
     *
     * @return double
     */
    public function getAtar()
    {
        return $this->container['atar'];
    }

    /**
     * Sets atar
     *
     * @param double $atar Value that indicates Atar. Between 0 and 99.99
     *
     * @return $this
     */
    public function setAtar($atar)
    {
        $this->container['atar'] = $atar;

        return $this;
    }

    /**
     * Gets selection_rank
     *
     * @return double
     */
    public function getSelectionRank()
    {
        return $this->container['selection_rank'];
    }

    /**
     * Sets selection_rank
     *
     * @param double $selection_rank Value that indicates Selection Rank. Between 0 and 99.99
     *
     * @return $this
     */
    public function setSelectionRank($selection_rank)
    {
        $this->container['selection_rank'] = $selection_rank;

        return $this;
    }

    /**
     * Gets basis_for_admission_id
     *
     * @return int
     */
    public function getBasisForAdmissionId()
    {
        return $this->container['basis_for_admission_id'];
    }

    /**
     * Sets basis_for_admission_id
     *
     * @param int $basis_for_admission_id See combo FhBasisForAdmission
     *
     * @return $this
     */
    public function setBasisForAdmissionId($basis_for_admission_id)
    {
        $this->container['basis_for_admission_id'] = $basis_for_admission_id;

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
