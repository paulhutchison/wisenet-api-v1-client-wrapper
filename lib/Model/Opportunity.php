<?php
/**
 * Opportunity
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
 * Opportunity Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Opportunity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Opportunity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'opportunity_id' => 'int',
'opportunity_guid' => 'string',
'sales_contact_id' => 'int',
'description' => 'string',
'notes' => 'string',
'opportunity_stage_id' => 'int',
'owner_id' => 'int',
'opportunity_source_id' => 'int',
'opportunity_type_id' => 'int',
'amount' => 'double',
'close_date' => '\DateTime',
'close_lost_reason_id' => 'int',
'referring_sales_contact_id' => 'int',
'referring_entity_name' => 'string',
'referring_record_id' => 'int',
'documents' => '\Phwebs\Wisenet\Model\Document[]',
'pipeline_id' => 'int',
'previous_identifier' => 'string',
'tag_ids' => '\Phwebs\Wisenet\Model\TagBasic[]',
'created_on' => '\DateTime',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'opportunity_id' => 'int32',
'opportunity_guid' => 'uuid',
'sales_contact_id' => 'int32',
'description' => '150',
'notes' => '1000',
'opportunity_stage_id' => 'int32',
'owner_id' => 'int32',
'opportunity_source_id' => 'int32',
'opportunity_type_id' => 'int32',
'amount' => 'double',
'close_date' => 'date-time',
'close_lost_reason_id' => 'int32',
'referring_sales_contact_id' => 'int32',
'referring_entity_name' => null,
'referring_record_id' => 'int32',
'documents' => null,
'pipeline_id' => 'int32',
'previous_identifier' => '50',
'tag_ids' => null,
'created_on' => 'date-time',
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
        'opportunity_id' => 'OpportunityId',
'opportunity_guid' => 'OpportunityGuid',
'sales_contact_id' => 'SalesContactId',
'description' => 'Description',
'notes' => 'Notes',
'opportunity_stage_id' => 'OpportunityStageId',
'owner_id' => 'OwnerId',
'opportunity_source_id' => 'OpportunitySourceId',
'opportunity_type_id' => 'OpportunityTypeId',
'amount' => 'Amount',
'close_date' => 'CloseDate',
'close_lost_reason_id' => 'CloseLostReasonId',
'referring_sales_contact_id' => 'ReferringSalesContactId',
'referring_entity_name' => 'ReferringEntityName',
'referring_record_id' => 'ReferringRecordId',
'documents' => 'Documents',
'pipeline_id' => 'PipelineId',
'previous_identifier' => 'PreviousIdentifier',
'tag_ids' => 'TagIds',
'created_on' => 'CreatedOn',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opportunity_id' => 'setOpportunityId',
'opportunity_guid' => 'setOpportunityGuid',
'sales_contact_id' => 'setSalesContactId',
'description' => 'setDescription',
'notes' => 'setNotes',
'opportunity_stage_id' => 'setOpportunityStageId',
'owner_id' => 'setOwnerId',
'opportunity_source_id' => 'setOpportunitySourceId',
'opportunity_type_id' => 'setOpportunityTypeId',
'amount' => 'setAmount',
'close_date' => 'setCloseDate',
'close_lost_reason_id' => 'setCloseLostReasonId',
'referring_sales_contact_id' => 'setReferringSalesContactId',
'referring_entity_name' => 'setReferringEntityName',
'referring_record_id' => 'setReferringRecordId',
'documents' => 'setDocuments',
'pipeline_id' => 'setPipelineId',
'previous_identifier' => 'setPreviousIdentifier',
'tag_ids' => 'setTagIds',
'created_on' => 'setCreatedOn',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opportunity_id' => 'getOpportunityId',
'opportunity_guid' => 'getOpportunityGuid',
'sales_contact_id' => 'getSalesContactId',
'description' => 'getDescription',
'notes' => 'getNotes',
'opportunity_stage_id' => 'getOpportunityStageId',
'owner_id' => 'getOwnerId',
'opportunity_source_id' => 'getOpportunitySourceId',
'opportunity_type_id' => 'getOpportunityTypeId',
'amount' => 'getAmount',
'close_date' => 'getCloseDate',
'close_lost_reason_id' => 'getCloseLostReasonId',
'referring_sales_contact_id' => 'getReferringSalesContactId',
'referring_entity_name' => 'getReferringEntityName',
'referring_record_id' => 'getReferringRecordId',
'documents' => 'getDocuments',
'pipeline_id' => 'getPipelineId',
'previous_identifier' => 'getPreviousIdentifier',
'tag_ids' => 'getTagIds',
'created_on' => 'getCreatedOn',
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
        $this->container['opportunity_id'] = isset($data['opportunity_id']) ? $data['opportunity_id'] : null;
        $this->container['opportunity_guid'] = isset($data['opportunity_guid']) ? $data['opportunity_guid'] : null;
        $this->container['sales_contact_id'] = isset($data['sales_contact_id']) ? $data['sales_contact_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['opportunity_stage_id'] = isset($data['opportunity_stage_id']) ? $data['opportunity_stage_id'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['opportunity_source_id'] = isset($data['opportunity_source_id']) ? $data['opportunity_source_id'] : null;
        $this->container['opportunity_type_id'] = isset($data['opportunity_type_id']) ? $data['opportunity_type_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['close_date'] = isset($data['close_date']) ? $data['close_date'] : null;
        $this->container['close_lost_reason_id'] = isset($data['close_lost_reason_id']) ? $data['close_lost_reason_id'] : null;
        $this->container['referring_sales_contact_id'] = isset($data['referring_sales_contact_id']) ? $data['referring_sales_contact_id'] : null;
        $this->container['referring_entity_name'] = isset($data['referring_entity_name']) ? $data['referring_entity_name'] : null;
        $this->container['referring_record_id'] = isset($data['referring_record_id']) ? $data['referring_record_id'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['pipeline_id'] = isset($data['pipeline_id']) ? $data['pipeline_id'] : null;
        $this->container['previous_identifier'] = isset($data['previous_identifier']) ? $data['previous_identifier'] : null;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
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
     * Gets opportunity_id
     *
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->container['opportunity_id'];
    }

    /**
     * Sets opportunity_id
     *
     * @param int $opportunity_id Primary Id for opportunity that is auto generated
     *
     * @return $this
     */
    public function setOpportunityId($opportunity_id)
    {
        $this->container['opportunity_id'] = $opportunity_id;

        return $this;
    }

    /**
     * Gets opportunity_guid
     *
     * @return string
     */
    public function getOpportunityGuid()
    {
        return $this->container['opportunity_guid'];
    }

    /**
     * Sets opportunity_guid
     *
     * @param string $opportunity_guid The GUID of the record
     *
     * @return $this
     */
    public function setOpportunityGuid($opportunity_guid)
    {
        $this->container['opportunity_guid'] = $opportunity_guid;

        return $this;
    }

    /**
     * Gets sales_contact_id
     *
     * @return int
     */
    public function getSalesContactId()
    {
        return $this->container['sales_contact_id'];
    }

    /**
     * Sets sales_contact_id
     *
     * @param int $sales_contact_id See entity SalesContacts
     *
     * @return $this
     */
    public function setSalesContactId($sales_contact_id)
    {
        $this->container['sales_contact_id'] = $sales_contact_id;

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
     * @param string $description Brief description of the opportunity
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $notes Additional Notes related to the opportunity
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets opportunity_stage_id
     *
     * @return int
     */
    public function getOpportunityStageId()
    {
        return $this->container['opportunity_stage_id'];
    }

    /**
     * Sets opportunity_stage_id
     *
     * @param int $opportunity_stage_id See combo OpportunityStages
     *
     * @return $this
     */
    public function setOpportunityStageId($opportunity_stage_id)
    {
        $this->container['opportunity_stage_id'] = $opportunity_stage_id;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int $owner_id See entity SalesPersons
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets opportunity_source_id
     *
     * @return int
     */
    public function getOpportunitySourceId()
    {
        return $this->container['opportunity_source_id'];
    }

    /**
     * Sets opportunity_source_id
     *
     * @param int $opportunity_source_id See combo OpportunitySources
     *
     * @return $this
     */
    public function setOpportunitySourceId($opportunity_source_id)
    {
        $this->container['opportunity_source_id'] = $opportunity_source_id;

        return $this;
    }

    /**
     * Gets opportunity_type_id
     *
     * @return int
     */
    public function getOpportunityTypeId()
    {
        return $this->container['opportunity_type_id'];
    }

    /**
     * Sets opportunity_type_id
     *
     * @param int $opportunity_type_id See combo OpportunityTypes
     *
     * @return $this
     */
    public function setOpportunityTypeId($opportunity_type_id)
    {
        $this->container['opportunity_type_id'] = $opportunity_type_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Amount of the opportunity
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets close_date
     *
     * @return \DateTime
     */
    public function getCloseDate()
    {
        return $this->container['close_date'];
    }

    /**
     * Sets close_date
     *
     * @param \DateTime $close_date Close Date of the opportunity
     *
     * @return $this
     */
    public function setCloseDate($close_date)
    {
        $this->container['close_date'] = $close_date;

        return $this;
    }

    /**
     * Gets close_lost_reason_id
     *
     * @return int
     */
    public function getCloseLostReasonId()
    {
        return $this->container['close_lost_reason_id'];
    }

    /**
     * Sets close_lost_reason_id
     *
     * @param int $close_lost_reason_id See combo CloseLostReasons
     *
     * @return $this
     */
    public function setCloseLostReasonId($close_lost_reason_id)
    {
        $this->container['close_lost_reason_id'] = $close_lost_reason_id;

        return $this;
    }

    /**
     * Gets referring_sales_contact_id
     *
     * @return int
     */
    public function getReferringSalesContactId()
    {
        return $this->container['referring_sales_contact_id'];
    }

    /**
     * Sets referring_sales_contact_id
     *
     * @param int $referring_sales_contact_id See entity Sales Contact
     *
     * @return $this
     */
    public function setReferringSalesContactId($referring_sales_contact_id)
    {
        $this->container['referring_sales_contact_id'] = $referring_sales_contact_id;

        return $this;
    }

    /**
     * Gets referring_entity_name
     *
     * @return string
     */
    public function getReferringEntityName()
    {
        return $this->container['referring_entity_name'];
    }

    /**
     * Sets referring_entity_name
     *
     * @param string $referring_entity_name Allows either 'Workplace' or 'Agent'
     *
     * @return $this
     */
    public function setReferringEntityName($referring_entity_name)
    {
        $this->container['referring_entity_name'] = $referring_entity_name;

        return $this;
    }

    /**
     * Gets referring_record_id
     *
     * @return int
     */
    public function getReferringRecordId()
    {
        return $this->container['referring_record_id'];
    }

    /**
     * Sets referring_record_id
     *
     * @param int $referring_record_id Either the WorkplaceId or AgentId depending on provided ReferringEntityName
     *
     * @return $this
     */
    public function setReferringRecordId($referring_record_id)
    {
        $this->container['referring_record_id'] = $referring_record_id;

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
     * Gets pipeline_id
     *
     * @return int
     */
    public function getPipelineId()
    {
        return $this->container['pipeline_id'];
    }

    /**
     * Sets pipeline_id
     *
     * @param int $pipeline_id Id of related pipeline
     *
     * @return $this
     */
    public function setPipelineId($pipeline_id)
    {
        $this->container['pipeline_id'] = $pipeline_id;

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
     * @param string $previous_identifier Previoius identifier
     *
     * @return $this
     */
    public function setPreviousIdentifier($previous_identifier)
    {
        $this->container['previous_identifier'] = $previous_identifier;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return \Phwebs\Wisenet\Model\TagBasic[]
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param \Phwebs\Wisenet\Model\TagBasic[] $tag_ids Ids used to identify Tags
     *
     * @return $this
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

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
     * @param \DateTime $created_on Date when the opportunity was created
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

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
     * @param \DateTime $last_modified_time_stamp Date when the opportunity was last modified
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
