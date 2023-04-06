<?php
/**
 * OpportunityRelationships
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
 * OpportunityRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OpportunityRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OpportunityRelationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sales_contact' => '\Phwebs\Wisenet\Model\SalesContactShort',
'opportunity_stage' => '\Phwebs\Wisenet\Model\OpportunityStage',
'owner' => '\Phwebs\Wisenet\Model\SalesPerson',
'opportunity_source' => '\Phwebs\Wisenet\Model\OpportunitySource',
'opportunity_type' => '\Phwebs\Wisenet\Model\OpportunityType',
'close_lost_reason' => '\Phwebs\Wisenet\Model\CloseLostReason',
'referring_sales_contact' => '\Phwebs\Wisenet\Model\SalesContactShort',
'pipeline' => '\Phwebs\Wisenet\Model\Pipeline',
'tags' => '\Phwebs\Wisenet\Model\Tag[]',
'sales_contact_types' => '\Phwebs\Wisenet\Model\SalesContactType[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sales_contact' => null,
'opportunity_stage' => null,
'owner' => null,
'opportunity_source' => null,
'opportunity_type' => null,
'close_lost_reason' => null,
'referring_sales_contact' => null,
'pipeline' => null,
'tags' => null,
'sales_contact_types' => null    ];

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
        'sales_contact' => 'SalesContact',
'opportunity_stage' => 'OpportunityStage',
'owner' => 'Owner',
'opportunity_source' => 'OpportunitySource',
'opportunity_type' => 'OpportunityType',
'close_lost_reason' => 'CloseLostReason',
'referring_sales_contact' => 'ReferringSalesContact',
'pipeline' => 'Pipeline',
'tags' => 'Tags',
'sales_contact_types' => 'SalesContactTypes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales_contact' => 'setSalesContact',
'opportunity_stage' => 'setOpportunityStage',
'owner' => 'setOwner',
'opportunity_source' => 'setOpportunitySource',
'opportunity_type' => 'setOpportunityType',
'close_lost_reason' => 'setCloseLostReason',
'referring_sales_contact' => 'setReferringSalesContact',
'pipeline' => 'setPipeline',
'tags' => 'setTags',
'sales_contact_types' => 'setSalesContactTypes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales_contact' => 'getSalesContact',
'opportunity_stage' => 'getOpportunityStage',
'owner' => 'getOwner',
'opportunity_source' => 'getOpportunitySource',
'opportunity_type' => 'getOpportunityType',
'close_lost_reason' => 'getCloseLostReason',
'referring_sales_contact' => 'getReferringSalesContact',
'pipeline' => 'getPipeline',
'tags' => 'getTags',
'sales_contact_types' => 'getSalesContactTypes'    ];

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
        $this->container['sales_contact'] = isset($data['sales_contact']) ? $data['sales_contact'] : null;
        $this->container['opportunity_stage'] = isset($data['opportunity_stage']) ? $data['opportunity_stage'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['opportunity_source'] = isset($data['opportunity_source']) ? $data['opportunity_source'] : null;
        $this->container['opportunity_type'] = isset($data['opportunity_type']) ? $data['opportunity_type'] : null;
        $this->container['close_lost_reason'] = isset($data['close_lost_reason']) ? $data['close_lost_reason'] : null;
        $this->container['referring_sales_contact'] = isset($data['referring_sales_contact']) ? $data['referring_sales_contact'] : null;
        $this->container['pipeline'] = isset($data['pipeline']) ? $data['pipeline'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['sales_contact_types'] = isset($data['sales_contact_types']) ? $data['sales_contact_types'] : null;
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
     * Gets sales_contact
     *
     * @return \Phwebs\Wisenet\Model\SalesContactShort
     */
    public function getSalesContact()
    {
        return $this->container['sales_contact'];
    }

    /**
     * Sets sales_contact
     *
     * @param \Phwebs\Wisenet\Model\SalesContactShort $sales_contact sales_contact
     *
     * @return $this
     */
    public function setSalesContact($sales_contact)
    {
        $this->container['sales_contact'] = $sales_contact;

        return $this;
    }

    /**
     * Gets opportunity_stage
     *
     * @return \Phwebs\Wisenet\Model\OpportunityStage
     */
    public function getOpportunityStage()
    {
        return $this->container['opportunity_stage'];
    }

    /**
     * Sets opportunity_stage
     *
     * @param \Phwebs\Wisenet\Model\OpportunityStage $opportunity_stage opportunity_stage
     *
     * @return $this
     */
    public function setOpportunityStage($opportunity_stage)
    {
        $this->container['opportunity_stage'] = $opportunity_stage;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Phwebs\Wisenet\Model\SalesPerson
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Phwebs\Wisenet\Model\SalesPerson $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets opportunity_source
     *
     * @return \Phwebs\Wisenet\Model\OpportunitySource
     */
    public function getOpportunitySource()
    {
        return $this->container['opportunity_source'];
    }

    /**
     * Sets opportunity_source
     *
     * @param \Phwebs\Wisenet\Model\OpportunitySource $opportunity_source opportunity_source
     *
     * @return $this
     */
    public function setOpportunitySource($opportunity_source)
    {
        $this->container['opportunity_source'] = $opportunity_source;

        return $this;
    }

    /**
     * Gets opportunity_type
     *
     * @return \Phwebs\Wisenet\Model\OpportunityType
     */
    public function getOpportunityType()
    {
        return $this->container['opportunity_type'];
    }

    /**
     * Sets opportunity_type
     *
     * @param \Phwebs\Wisenet\Model\OpportunityType $opportunity_type opportunity_type
     *
     * @return $this
     */
    public function setOpportunityType($opportunity_type)
    {
        $this->container['opportunity_type'] = $opportunity_type;

        return $this;
    }

    /**
     * Gets close_lost_reason
     *
     * @return \Phwebs\Wisenet\Model\CloseLostReason
     */
    public function getCloseLostReason()
    {
        return $this->container['close_lost_reason'];
    }

    /**
     * Sets close_lost_reason
     *
     * @param \Phwebs\Wisenet\Model\CloseLostReason $close_lost_reason close_lost_reason
     *
     * @return $this
     */
    public function setCloseLostReason($close_lost_reason)
    {
        $this->container['close_lost_reason'] = $close_lost_reason;

        return $this;
    }

    /**
     * Gets referring_sales_contact
     *
     * @return \Phwebs\Wisenet\Model\SalesContactShort
     */
    public function getReferringSalesContact()
    {
        return $this->container['referring_sales_contact'];
    }

    /**
     * Sets referring_sales_contact
     *
     * @param \Phwebs\Wisenet\Model\SalesContactShort $referring_sales_contact referring_sales_contact
     *
     * @return $this
     */
    public function setReferringSalesContact($referring_sales_contact)
    {
        $this->container['referring_sales_contact'] = $referring_sales_contact;

        return $this;
    }

    /**
     * Gets pipeline
     *
     * @return \Phwebs\Wisenet\Model\Pipeline
     */
    public function getPipeline()
    {
        return $this->container['pipeline'];
    }

    /**
     * Sets pipeline
     *
     * @param \Phwebs\Wisenet\Model\Pipeline $pipeline pipeline
     *
     * @return $this
     */
    public function setPipeline($pipeline)
    {
        $this->container['pipeline'] = $pipeline;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Phwebs\Wisenet\Model\Tag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Phwebs\Wisenet\Model\Tag[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets sales_contact_types
     *
     * @return \Phwebs\Wisenet\Model\SalesContactType[]
     */
    public function getSalesContactTypes()
    {
        return $this->container['sales_contact_types'];
    }

    /**
     * Sets sales_contact_types
     *
     * @param \Phwebs\Wisenet\Model\SalesContactType[] $sales_contact_types sales_contact_types
     *
     * @return $this
     */
    public function setSalesContactTypes($sales_contact_types)
    {
        $this->container['sales_contact_types'] = $sales_contact_types;

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
