<?php
/**
 * Filenote
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
 * Filenote Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Filenote implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Filenote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filenote_id' => 'int',
'record_id' => 'int',
'entity_name' => 'string',
'record_info' => 'string',
'name' => 'string',
'description' => 'string',
'created_on' => '\DateTime',
'created_by_user_id' => 'int',
'assigned_to' => '\Phwebs\Wisenet\Model\AssignedToFilenote',
'learner_visibility' => '\Phwebs\Wisenet\Model\LearnerVisibilityFilenote',
'trainer_visibility' => '\Phwebs\Wisenet\Model\TrainerVisibilityFilenote',
'online_enrolment_visibility' => '\Phwebs\Wisenet\Model\OnlineEnrolmentVisibilityFilenote',
'documents' => '\Phwebs\Wisenet\Model\Document[]',
'last_modified_time_stamp' => '\DateTime',
'last_modified_user_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filenote_id' => 'int32',
'record_id' => 'int32',
'entity_name' => null,
'record_info' => null,
'name' => null,
'description' => null,
'created_on' => 'date-time',
'created_by_user_id' => 'int32',
'assigned_to' => null,
'learner_visibility' => null,
'trainer_visibility' => null,
'online_enrolment_visibility' => null,
'documents' => null,
'last_modified_time_stamp' => 'date-time',
'last_modified_user_id' => 'int32'    ];

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
        'filenote_id' => 'FilenoteId',
'record_id' => 'RecordId',
'entity_name' => 'EntityName',
'record_info' => 'RecordInfo',
'name' => 'Name',
'description' => 'Description',
'created_on' => 'CreatedOn',
'created_by_user_id' => 'CreatedByUserId',
'assigned_to' => 'AssignedTo',
'learner_visibility' => 'LearnerVisibility',
'trainer_visibility' => 'TrainerVisibility',
'online_enrolment_visibility' => 'OnlineEnrolmentVisibility',
'documents' => 'Documents',
'last_modified_time_stamp' => 'LastModifiedTimeStamp',
'last_modified_user_id' => 'LastModifiedUserId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filenote_id' => 'setFilenoteId',
'record_id' => 'setRecordId',
'entity_name' => 'setEntityName',
'record_info' => 'setRecordInfo',
'name' => 'setName',
'description' => 'setDescription',
'created_on' => 'setCreatedOn',
'created_by_user_id' => 'setCreatedByUserId',
'assigned_to' => 'setAssignedTo',
'learner_visibility' => 'setLearnerVisibility',
'trainer_visibility' => 'setTrainerVisibility',
'online_enrolment_visibility' => 'setOnlineEnrolmentVisibility',
'documents' => 'setDocuments',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp',
'last_modified_user_id' => 'setLastModifiedUserId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filenote_id' => 'getFilenoteId',
'record_id' => 'getRecordId',
'entity_name' => 'getEntityName',
'record_info' => 'getRecordInfo',
'name' => 'getName',
'description' => 'getDescription',
'created_on' => 'getCreatedOn',
'created_by_user_id' => 'getCreatedByUserId',
'assigned_to' => 'getAssignedTo',
'learner_visibility' => 'getLearnerVisibility',
'trainer_visibility' => 'getTrainerVisibility',
'online_enrolment_visibility' => 'getOnlineEnrolmentVisibility',
'documents' => 'getDocuments',
'last_modified_time_stamp' => 'getLastModifiedTimeStamp',
'last_modified_user_id' => 'getLastModifiedUserId'    ];

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
        $this->container['filenote_id'] = isset($data['filenote_id']) ? $data['filenote_id'] : null;
        $this->container['record_id'] = isset($data['record_id']) ? $data['record_id'] : null;
        $this->container['entity_name'] = isset($data['entity_name']) ? $data['entity_name'] : null;
        $this->container['record_info'] = isset($data['record_info']) ? $data['record_info'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['created_by_user_id'] = isset($data['created_by_user_id']) ? $data['created_by_user_id'] : null;
        $this->container['assigned_to'] = isset($data['assigned_to']) ? $data['assigned_to'] : null;
        $this->container['learner_visibility'] = isset($data['learner_visibility']) ? $data['learner_visibility'] : null;
        $this->container['trainer_visibility'] = isset($data['trainer_visibility']) ? $data['trainer_visibility'] : null;
        $this->container['online_enrolment_visibility'] = isset($data['online_enrolment_visibility']) ? $data['online_enrolment_visibility'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['last_modified_time_stamp'] = isset($data['last_modified_time_stamp']) ? $data['last_modified_time_stamp'] : null;
        $this->container['last_modified_user_id'] = isset($data['last_modified_user_id']) ? $data['last_modified_user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['record_id'] === null) {
            $invalidProperties[] = "'record_id' can't be null";
        }
        if ($this->container['entity_name'] === null) {
            $invalidProperties[] = "'entity_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
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
     * Gets filenote_id
     *
     * @return int
     */
    public function getFilenoteId()
    {
        return $this->container['filenote_id'];
    }

    /**
     * Sets filenote_id
     *
     * @param int $filenote_id Primary Id for FilenoteId that is auto generated.
     *
     * @return $this
     */
    public function setFilenoteId($filenote_id)
    {
        $this->container['filenote_id'] = $filenote_id;

        return $this;
    }

    /**
     * Gets record_id
     *
     * @return int
     */
    public function getRecordId()
    {
        return $this->container['record_id'];
    }

    /**
     * Sets record_id
     *
     * @param int $record_id The RecordId for the EntityName. E.g. The LearnerId if EntityName = Learner.
     *
     * @return $this
     */
    public function setRecordId($record_id)
    {
        $this->container['record_id'] = $record_id;

        return $this;
    }

    /**
     * Gets entity_name
     *
     * @return string
     */
    public function getEntityName()
    {
        return $this->container['entity_name'];
    }

    /**
     * Sets entity_name
     *
     * @param string $entity_name See entity Entities.
     *
     * @return $this
     */
    public function setEntityName($entity_name)
    {
        $this->container['entity_name'] = $entity_name;

        return $this;
    }

    /**
     * Gets record_info
     *
     * @return string
     */
    public function getRecordInfo()
    {
        return $this->container['record_info'];
    }

    /**
     * Sets record_info
     *
     * @param string $record_info Read only field. Returns info about the record.
     *
     * @return $this
     */
    public function setRecordInfo($record_info)
    {
        $this->container['record_info'] = $record_info;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name used to identify the Filenote.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $description Body of the Filenote in HTML format.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on The date the Filenote was created
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets created_by_user_id
     *
     * @return int
     */
    public function getCreatedByUserId()
    {
        return $this->container['created_by_user_id'];
    }

    /**
     * Sets created_by_user_id
     *
     * @param int $created_by_user_id The Id of the User who created the Filenote
     *
     * @return $this
     */
    public function setCreatedByUserId($created_by_user_id)
    {
        $this->container['created_by_user_id'] = $created_by_user_id;

        return $this;
    }

    /**
     * Gets assigned_to
     *
     * @return \Phwebs\Wisenet\Model\AssignedToFilenote
     */
    public function getAssignedTo()
    {
        return $this->container['assigned_to'];
    }

    /**
     * Sets assigned_to
     *
     * @param \Phwebs\Wisenet\Model\AssignedToFilenote $assigned_to assigned_to
     *
     * @return $this
     */
    public function setAssignedTo($assigned_to)
    {
        $this->container['assigned_to'] = $assigned_to;

        return $this;
    }

    /**
     * Gets learner_visibility
     *
     * @return \Phwebs\Wisenet\Model\LearnerVisibilityFilenote
     */
    public function getLearnerVisibility()
    {
        return $this->container['learner_visibility'];
    }

    /**
     * Sets learner_visibility
     *
     * @param \Phwebs\Wisenet\Model\LearnerVisibilityFilenote $learner_visibility learner_visibility
     *
     * @return $this
     */
    public function setLearnerVisibility($learner_visibility)
    {
        $this->container['learner_visibility'] = $learner_visibility;

        return $this;
    }

    /**
     * Gets trainer_visibility
     *
     * @return \Phwebs\Wisenet\Model\TrainerVisibilityFilenote
     */
    public function getTrainerVisibility()
    {
        return $this->container['trainer_visibility'];
    }

    /**
     * Sets trainer_visibility
     *
     * @param \Phwebs\Wisenet\Model\TrainerVisibilityFilenote $trainer_visibility trainer_visibility
     *
     * @return $this
     */
    public function setTrainerVisibility($trainer_visibility)
    {
        $this->container['trainer_visibility'] = $trainer_visibility;

        return $this;
    }

    /**
     * Gets online_enrolment_visibility
     *
     * @return \Phwebs\Wisenet\Model\OnlineEnrolmentVisibilityFilenote
     */
    public function getOnlineEnrolmentVisibility()
    {
        return $this->container['online_enrolment_visibility'];
    }

    /**
     * Sets online_enrolment_visibility
     *
     * @param \Phwebs\Wisenet\Model\OnlineEnrolmentVisibilityFilenote $online_enrolment_visibility online_enrolment_visibility
     *
     * @return $this
     */
    public function setOnlineEnrolmentVisibility($online_enrolment_visibility)
    {
        $this->container['online_enrolment_visibility'] = $online_enrolment_visibility;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Phwebs\Wisenet\Model\Document[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Phwebs\Wisenet\Model\Document[] $documents See Documents and Files section above
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

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
     * @param \DateTime $last_modified_time_stamp Date when the Filenote was last modified
     *
     * @return $this
     */
    public function setLastModifiedTimeStamp($last_modified_time_stamp)
    {
        $this->container['last_modified_time_stamp'] = $last_modified_time_stamp;

        return $this;
    }

    /**
     * Gets last_modified_user_id
     *
     * @return int
     */
    public function getLastModifiedUserId()
    {
        return $this->container['last_modified_user_id'];
    }

    /**
     * Sets last_modified_user_id
     *
     * @param int $last_modified_user_id The UserId of the user who last modified the Filenote
     *
     * @return $this
     */
    public function setLastModifiedUserId($last_modified_user_id)
    {
        $this->container['last_modified_user_id'] = $last_modified_user_id;

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
