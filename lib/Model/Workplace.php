<?php
/**
 * Workplace
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
 * Workplace Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Workplace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Workplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'workplace_id' => 'int',
'code' => 'string',
'description' => 'string',
'legal_name' => 'string',
'archived_flag' => 'bool',
'phone' => 'string',
'fax' => 'string',
'email' => 'string',
'website' => 'string',
'street_address' => '\Phwebs\Wisenet\Model\WorkplaceStreetAddress',
'postal_address' => '\Phwebs\Wisenet\Model\WorkplacePostalAddress',
'company_number' => 'string',
'business_number' => 'string',
'school_flag' => 'bool',
'school_type_id' => 'int',
'anzsic_id' => 'int',
'general_notes' => 'string',
'workplace_classification_id' => 'int',
'industry_size_id' => 'int',
'head_office_workplace_id' => 'int',
'sync_to_sugar_crm' => 'bool',
'sync_to_xero' => 'bool',
'accreditation_type_id' => 'int',
'location_id' => 'int',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'workplace_id' => 'int32',
'code' => '20',
'description' => '150',
'legal_name' => '100',
'archived_flag' => null,
'phone' => '15',
'fax' => '20',
'email' => '50',
'website' => '500',
'street_address' => null,
'postal_address' => null,
'company_number' => '255',
'business_number' => '255',
'school_flag' => null,
'school_type_id' => 'int32',
'anzsic_id' => 'int32',
'general_notes' => '100',
'workplace_classification_id' => 'int32',
'industry_size_id' => 'int32',
'head_office_workplace_id' => 'int32',
'sync_to_sugar_crm' => null,
'sync_to_xero' => null,
'accreditation_type_id' => 'int32',
'location_id' => 'int32',
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
        'workplace_id' => 'WorkplaceId',
'code' => 'Code',
'description' => 'Description',
'legal_name' => 'LegalName',
'archived_flag' => 'ArchivedFlag',
'phone' => 'Phone',
'fax' => 'Fax',
'email' => 'Email',
'website' => 'Website',
'street_address' => 'StreetAddress',
'postal_address' => 'PostalAddress',
'company_number' => 'CompanyNumber',
'business_number' => 'BusinessNumber',
'school_flag' => 'SchoolFlag',
'school_type_id' => 'SchoolTypeId',
'anzsic_id' => 'AnzsicId',
'general_notes' => 'GeneralNotes',
'workplace_classification_id' => 'WorkplaceClassificationId',
'industry_size_id' => 'IndustrySizeId',
'head_office_workplace_id' => 'HeadOfficeWorkplaceId',
'sync_to_sugar_crm' => 'SyncToSugarCrm',
'sync_to_xero' => 'SyncToXero',
'accreditation_type_id' => 'AccreditationTypeId',
'location_id' => 'LocationId',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'workplace_id' => 'setWorkplaceId',
'code' => 'setCode',
'description' => 'setDescription',
'legal_name' => 'setLegalName',
'archived_flag' => 'setArchivedFlag',
'phone' => 'setPhone',
'fax' => 'setFax',
'email' => 'setEmail',
'website' => 'setWebsite',
'street_address' => 'setStreetAddress',
'postal_address' => 'setPostalAddress',
'company_number' => 'setCompanyNumber',
'business_number' => 'setBusinessNumber',
'school_flag' => 'setSchoolFlag',
'school_type_id' => 'setSchoolTypeId',
'anzsic_id' => 'setAnzsicId',
'general_notes' => 'setGeneralNotes',
'workplace_classification_id' => 'setWorkplaceClassificationId',
'industry_size_id' => 'setIndustrySizeId',
'head_office_workplace_id' => 'setHeadOfficeWorkplaceId',
'sync_to_sugar_crm' => 'setSyncToSugarCrm',
'sync_to_xero' => 'setSyncToXero',
'accreditation_type_id' => 'setAccreditationTypeId',
'location_id' => 'setLocationId',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'workplace_id' => 'getWorkplaceId',
'code' => 'getCode',
'description' => 'getDescription',
'legal_name' => 'getLegalName',
'archived_flag' => 'getArchivedFlag',
'phone' => 'getPhone',
'fax' => 'getFax',
'email' => 'getEmail',
'website' => 'getWebsite',
'street_address' => 'getStreetAddress',
'postal_address' => 'getPostalAddress',
'company_number' => 'getCompanyNumber',
'business_number' => 'getBusinessNumber',
'school_flag' => 'getSchoolFlag',
'school_type_id' => 'getSchoolTypeId',
'anzsic_id' => 'getAnzsicId',
'general_notes' => 'getGeneralNotes',
'workplace_classification_id' => 'getWorkplaceClassificationId',
'industry_size_id' => 'getIndustrySizeId',
'head_office_workplace_id' => 'getHeadOfficeWorkplaceId',
'sync_to_sugar_crm' => 'getSyncToSugarCrm',
'sync_to_xero' => 'getSyncToXero',
'accreditation_type_id' => 'getAccreditationTypeId',
'location_id' => 'getLocationId',
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
        $this->container['workplace_id'] = isset($data['workplace_id']) ? $data['workplace_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['legal_name'] = isset($data['legal_name']) ? $data['legal_name'] : null;
        $this->container['archived_flag'] = isset($data['archived_flag']) ? $data['archived_flag'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
        $this->container['postal_address'] = isset($data['postal_address']) ? $data['postal_address'] : null;
        $this->container['company_number'] = isset($data['company_number']) ? $data['company_number'] : null;
        $this->container['business_number'] = isset($data['business_number']) ? $data['business_number'] : null;
        $this->container['school_flag'] = isset($data['school_flag']) ? $data['school_flag'] : null;
        $this->container['school_type_id'] = isset($data['school_type_id']) ? $data['school_type_id'] : null;
        $this->container['anzsic_id'] = isset($data['anzsic_id']) ? $data['anzsic_id'] : null;
        $this->container['general_notes'] = isset($data['general_notes']) ? $data['general_notes'] : null;
        $this->container['workplace_classification_id'] = isset($data['workplace_classification_id']) ? $data['workplace_classification_id'] : null;
        $this->container['industry_size_id'] = isset($data['industry_size_id']) ? $data['industry_size_id'] : null;
        $this->container['head_office_workplace_id'] = isset($data['head_office_workplace_id']) ? $data['head_office_workplace_id'] : null;
        $this->container['sync_to_sugar_crm'] = isset($data['sync_to_sugar_crm']) ? $data['sync_to_sugar_crm'] : null;
        $this->container['sync_to_xero'] = isset($data['sync_to_xero']) ? $data['sync_to_xero'] : null;
        $this->container['accreditation_type_id'] = isset($data['accreditation_type_id']) ? $data['accreditation_type_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
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
     * Gets workplace_id
     *
     * @return int
     */
    public function getWorkplaceId()
    {
        return $this->container['workplace_id'];
    }

    /**
     * Sets workplace_id
     *
     * @param int $workplace_id Primary Id for Workplace that is auto generated
     *
     * @return $this
     */
    public function setWorkplaceId($workplace_id)
    {
        $this->container['workplace_id'] = $workplace_id;

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
     * @param string $code Code used to identify the Workplace
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
     * @param string $description Description used to identify the Workplace
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets legal_name
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->container['legal_name'];
    }

    /**
     * Sets legal_name
     *
     * @param string $legal_name Legal Name used to identify the Workplace
     *
     * @return $this
     */
    public function setLegalName($legal_name)
    {
        $this->container['legal_name'] = $legal_name;

        return $this;
    }

    /**
     * Gets archived_flag
     *
     * @return bool
     */
    public function getArchivedFlag()
    {
        return $this->container['archived_flag'];
    }

    /**
     * Sets archived_flag
     *
     * @param bool $archived_flag To indicate if Workplace is Archived
     *
     * @return $this
     */
    public function setArchivedFlag($archived_flag)
    {
        $this->container['archived_flag'] = $archived_flag;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Workplace Phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax Workplace Fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Workplace Email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website Workplace Website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return \Phwebs\Wisenet\Model\WorkplaceStreetAddress
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param \Phwebs\Wisenet\Model\WorkplaceStreetAddress $street_address street_address
     *
     * @return $this
     */
    public function setStreetAddress($street_address)
    {
        $this->container['street_address'] = $street_address;

        return $this;
    }

    /**
     * Gets postal_address
     *
     * @return \Phwebs\Wisenet\Model\WorkplacePostalAddress
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \Phwebs\Wisenet\Model\WorkplacePostalAddress $postal_address postal_address
     *
     * @return $this
     */
    public function setPostalAddress($postal_address)
    {
        $this->container['postal_address'] = $postal_address;

        return $this;
    }

    /**
     * Gets company_number
     *
     * @return string
     */
    public function getCompanyNumber()
    {
        return $this->container['company_number'];
    }

    /**
     * Sets company_number
     *
     * @param string $company_number Company Number of the Workplace
     *
     * @return $this
     */
    public function setCompanyNumber($company_number)
    {
        $this->container['company_number'] = $company_number;

        return $this;
    }

    /**
     * Gets business_number
     *
     * @return string
     */
    public function getBusinessNumber()
    {
        return $this->container['business_number'];
    }

    /**
     * Sets business_number
     *
     * @param string $business_number Business Number of the Workplace
     *
     * @return $this
     */
    public function setBusinessNumber($business_number)
    {
        $this->container['business_number'] = $business_number;

        return $this;
    }

    /**
     * Gets school_flag
     *
     * @return bool
     */
    public function getSchoolFlag()
    {
        return $this->container['school_flag'];
    }

    /**
     * Sets school_flag
     *
     * @param bool $school_flag To indicate if the Workplace is a School
     *
     * @return $this
     */
    public function setSchoolFlag($school_flag)
    {
        $this->container['school_flag'] = $school_flag;

        return $this;
    }

    /**
     * Gets school_type_id
     *
     * @return int
     */
    public function getSchoolTypeId()
    {
        return $this->container['school_type_id'];
    }

    /**
     * Sets school_type_id
     *
     * @param int $school_type_id Returns all School Type records. Used in Workplace.
     *
     * @return $this
     */
    public function setSchoolTypeId($school_type_id)
    {
        $this->container['school_type_id'] = $school_type_id;

        return $this;
    }

    /**
     * Gets anzsic_id
     *
     * @return int
     */
    public function getAnzsicId()
    {
        return $this->container['anzsic_id'];
    }

    /**
     * Sets anzsic_id
     *
     * @param int $anzsic_id Notes regarding the Workplace
     *
     * @return $this
     */
    public function setAnzsicId($anzsic_id)
    {
        $this->container['anzsic_id'] = $anzsic_id;

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
     * @param string $general_notes Notes regarding the Workplace
     *
     * @return $this
     */
    public function setGeneralNotes($general_notes)
    {
        $this->container['general_notes'] = $general_notes;

        return $this;
    }

    /**
     * Gets workplace_classification_id
     *
     * @return int
     */
    public function getWorkplaceClassificationId()
    {
        return $this->container['workplace_classification_id'];
    }

    /**
     * Sets workplace_classification_id
     *
     * @param int $workplace_classification_id Returns all Wrokplace Classifications records. Used in Workplace.
     *
     * @return $this
     */
    public function setWorkplaceClassificationId($workplace_classification_id)
    {
        $this->container['workplace_classification_id'] = $workplace_classification_id;

        return $this;
    }

    /**
     * Gets industry_size_id
     *
     * @return int
     */
    public function getIndustrySizeId()
    {
        return $this->container['industry_size_id'];
    }

    /**
     * Sets industry_size_id
     *
     * @param int $industry_size_id Returns all Industry Size records. Used in Workplace.
     *
     * @return $this
     */
    public function setIndustrySizeId($industry_size_id)
    {
        $this->container['industry_size_id'] = $industry_size_id;

        return $this;
    }

    /**
     * Gets head_office_workplace_id
     *
     * @return int
     */
    public function getHeadOfficeWorkplaceId()
    {
        return $this->container['head_office_workplace_id'];
    }

    /**
     * Sets head_office_workplace_id
     *
     * @param int $head_office_workplace_id See entity Workplaces
     *
     * @return $this
     */
    public function setHeadOfficeWorkplaceId($head_office_workplace_id)
    {
        $this->container['head_office_workplace_id'] = $head_office_workplace_id;

        return $this;
    }

    /**
     * Gets sync_to_sugar_crm
     *
     * @return bool
     */
    public function getSyncToSugarCrm()
    {
        return $this->container['sync_to_sugar_crm'];
    }

    /**
     * Sets sync_to_sugar_crm
     *
     * @param bool $sync_to_sugar_crm To indicate if the Workplace should be synced to SugarCrm or not
     *
     * @return $this
     */
    public function setSyncToSugarCrm($sync_to_sugar_crm)
    {
        $this->container['sync_to_sugar_crm'] = $sync_to_sugar_crm;

        return $this;
    }

    /**
     * Gets sync_to_xero
     *
     * @return bool
     */
    public function getSyncToXero()
    {
        return $this->container['sync_to_xero'];
    }

    /**
     * Sets sync_to_xero
     *
     * @param bool $sync_to_xero To indicate if the Workplace should be synced to Xero or not
     *
     * @return $this
     */
    public function setSyncToXero($sync_to_xero)
    {
        $this->container['sync_to_xero'] = $sync_to_xero;

        return $this;
    }

    /**
     * Gets accreditation_type_id
     *
     * @return int
     */
    public function getAccreditationTypeId()
    {
        return $this->container['accreditation_type_id'];
    }

    /**
     * Sets accreditation_type_id
     *
     * @param int $accreditation_type_id Returns all Accreditation Type records. Used in Workplace.
     *
     * @return $this
     */
    public function setAccreditationTypeId($accreditation_type_id)
    {
        $this->container['accreditation_type_id'] = $accreditation_type_id;

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
     * @param int $location_id Indicates that the Workplace is a training delivery location. When LocationId exists, the Location should be updated when changes occur to Workplace address. This field is only editable from the Location endpoint.
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

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
     * @param \DateTime $last_modified_time_stamp Date when the Workplace was last modified
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
