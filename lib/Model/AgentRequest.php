<?php
/**
 * AgentRequest
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
 * AgentRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agent_id' => 'int',
'name' => 'string',
'code' => 'string',
'agent_status_id' => 'int',
'archived_flag' => 'bool',
'assigned_to_staff_id' => 'int',
'region_id' => 'int',
'agent_alt_number' => 'string',
'agent_classification_id' => 'int',
'main_contact_first_name' => 'string',
'main_contact_middle_name' => 'string',
'main_contact_last_name' => 'string',
'email' => 'string',
'mobile' => 'string',
'phone' => 'string',
'phone_other' => 'string',
'fax' => 'string',
'website' => 'string',
'business_number' => 'string',
'company_number' => 'string',
'registration_number' => 'string',
'street_address' => '\Phwebs\Wisenet\Model\AgentStreetAddress',
'postal_address' => '\Phwebs\Wisenet\Model\AgentPostalAddress',
'vet_commission' => 'int',
'elicos_commission' => 'int',
'enrolment_fee_flag' => 'bool',
'regional_scholarship_flag' => 'bool',
'regional_scholarship_code' => 'string',
'last_visit_date' => '\DateTime',
'agent_start_date' => '\DateTime',
'agreement_sign_date' => '\DateTime',
'agreement_expiry_date' => '\DateTime',
'general_notes' => 'string',
'agent_agreement_status_id' => 'int',
'primary_sales_contact_id' => 'int',
'promotion_ids' => 'int[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agent_id' => 'int32',
'name' => '100',
'code' => '50',
'agent_status_id' => 'int32',
'archived_flag' => null,
'assigned_to_staff_id' => 'int32',
'region_id' => 'int32',
'agent_alt_number' => '100',
'agent_classification_id' => 'int32',
'main_contact_first_name' => '20',
'main_contact_middle_name' => '20',
'main_contact_last_name' => '50',
'email' => '80',
'mobile' => '20',
'phone' => '20',
'phone_other' => '20',
'fax' => '20',
'website' => '100',
'business_number' => '50',
'company_number' => '50',
'registration_number' => '50',
'street_address' => null,
'postal_address' => null,
'vet_commission' => 'int32',
'elicos_commission' => 'int32',
'enrolment_fee_flag' => null,
'regional_scholarship_flag' => null,
'regional_scholarship_code' => '50',
'last_visit_date' => 'date-time',
'agent_start_date' => 'date-time',
'agreement_sign_date' => 'date-time',
'agreement_expiry_date' => 'date-time',
'general_notes' => '1000',
'agent_agreement_status_id' => 'int32',
'primary_sales_contact_id' => 'int32',
'promotion_ids' => null    ];

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
        'agent_id' => 'AgentId',
'name' => 'Name',
'code' => 'Code',
'agent_status_id' => 'AgentStatusId',
'archived_flag' => 'ArchivedFlag',
'assigned_to_staff_id' => 'AssignedToStaffId',
'region_id' => 'RegionId',
'agent_alt_number' => 'AgentAltNumber',
'agent_classification_id' => 'AgentClassificationId',
'main_contact_first_name' => 'MainContactFirstName',
'main_contact_middle_name' => 'MainContactMiddleName',
'main_contact_last_name' => 'MainContactLastName',
'email' => 'Email',
'mobile' => 'Mobile',
'phone' => 'Phone',
'phone_other' => 'PhoneOther',
'fax' => 'Fax',
'website' => 'Website',
'business_number' => 'BusinessNumber',
'company_number' => 'CompanyNumber',
'registration_number' => 'RegistrationNumber',
'street_address' => 'StreetAddress',
'postal_address' => 'PostalAddress',
'vet_commission' => 'VetCommission',
'elicos_commission' => 'ElicosCommission',
'enrolment_fee_flag' => 'EnrolmentFeeFlag',
'regional_scholarship_flag' => 'RegionalScholarshipFlag',
'regional_scholarship_code' => 'RegionalScholarshipCode',
'last_visit_date' => 'LastVisitDate',
'agent_start_date' => 'AgentStartDate',
'agreement_sign_date' => 'AgreementSignDate',
'agreement_expiry_date' => 'AgreementExpiryDate',
'general_notes' => 'GeneralNotes',
'agent_agreement_status_id' => 'AgentAgreementStatusId',
'primary_sales_contact_id' => 'PrimarySalesContactId',
'promotion_ids' => 'PromotionIds'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agent_id' => 'setAgentId',
'name' => 'setName',
'code' => 'setCode',
'agent_status_id' => 'setAgentStatusId',
'archived_flag' => 'setArchivedFlag',
'assigned_to_staff_id' => 'setAssignedToStaffId',
'region_id' => 'setRegionId',
'agent_alt_number' => 'setAgentAltNumber',
'agent_classification_id' => 'setAgentClassificationId',
'main_contact_first_name' => 'setMainContactFirstName',
'main_contact_middle_name' => 'setMainContactMiddleName',
'main_contact_last_name' => 'setMainContactLastName',
'email' => 'setEmail',
'mobile' => 'setMobile',
'phone' => 'setPhone',
'phone_other' => 'setPhoneOther',
'fax' => 'setFax',
'website' => 'setWebsite',
'business_number' => 'setBusinessNumber',
'company_number' => 'setCompanyNumber',
'registration_number' => 'setRegistrationNumber',
'street_address' => 'setStreetAddress',
'postal_address' => 'setPostalAddress',
'vet_commission' => 'setVetCommission',
'elicos_commission' => 'setElicosCommission',
'enrolment_fee_flag' => 'setEnrolmentFeeFlag',
'regional_scholarship_flag' => 'setRegionalScholarshipFlag',
'regional_scholarship_code' => 'setRegionalScholarshipCode',
'last_visit_date' => 'setLastVisitDate',
'agent_start_date' => 'setAgentStartDate',
'agreement_sign_date' => 'setAgreementSignDate',
'agreement_expiry_date' => 'setAgreementExpiryDate',
'general_notes' => 'setGeneralNotes',
'agent_agreement_status_id' => 'setAgentAgreementStatusId',
'primary_sales_contact_id' => 'setPrimarySalesContactId',
'promotion_ids' => 'setPromotionIds'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agent_id' => 'getAgentId',
'name' => 'getName',
'code' => 'getCode',
'agent_status_id' => 'getAgentStatusId',
'archived_flag' => 'getArchivedFlag',
'assigned_to_staff_id' => 'getAssignedToStaffId',
'region_id' => 'getRegionId',
'agent_alt_number' => 'getAgentAltNumber',
'agent_classification_id' => 'getAgentClassificationId',
'main_contact_first_name' => 'getMainContactFirstName',
'main_contact_middle_name' => 'getMainContactMiddleName',
'main_contact_last_name' => 'getMainContactLastName',
'email' => 'getEmail',
'mobile' => 'getMobile',
'phone' => 'getPhone',
'phone_other' => 'getPhoneOther',
'fax' => 'getFax',
'website' => 'getWebsite',
'business_number' => 'getBusinessNumber',
'company_number' => 'getCompanyNumber',
'registration_number' => 'getRegistrationNumber',
'street_address' => 'getStreetAddress',
'postal_address' => 'getPostalAddress',
'vet_commission' => 'getVetCommission',
'elicos_commission' => 'getElicosCommission',
'enrolment_fee_flag' => 'getEnrolmentFeeFlag',
'regional_scholarship_flag' => 'getRegionalScholarshipFlag',
'regional_scholarship_code' => 'getRegionalScholarshipCode',
'last_visit_date' => 'getLastVisitDate',
'agent_start_date' => 'getAgentStartDate',
'agreement_sign_date' => 'getAgreementSignDate',
'agreement_expiry_date' => 'getAgreementExpiryDate',
'general_notes' => 'getGeneralNotes',
'agent_agreement_status_id' => 'getAgentAgreementStatusId',
'primary_sales_contact_id' => 'getPrimarySalesContactId',
'promotion_ids' => 'getPromotionIds'    ];

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
        $this->container['agent_id'] = isset($data['agent_id']) ? $data['agent_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['agent_status_id'] = isset($data['agent_status_id']) ? $data['agent_status_id'] : null;
        $this->container['archived_flag'] = isset($data['archived_flag']) ? $data['archived_flag'] : null;
        $this->container['assigned_to_staff_id'] = isset($data['assigned_to_staff_id']) ? $data['assigned_to_staff_id'] : null;
        $this->container['region_id'] = isset($data['region_id']) ? $data['region_id'] : null;
        $this->container['agent_alt_number'] = isset($data['agent_alt_number']) ? $data['agent_alt_number'] : null;
        $this->container['agent_classification_id'] = isset($data['agent_classification_id']) ? $data['agent_classification_id'] : null;
        $this->container['main_contact_first_name'] = isset($data['main_contact_first_name']) ? $data['main_contact_first_name'] : null;
        $this->container['main_contact_middle_name'] = isset($data['main_contact_middle_name']) ? $data['main_contact_middle_name'] : null;
        $this->container['main_contact_last_name'] = isset($data['main_contact_last_name']) ? $data['main_contact_last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['phone_other'] = isset($data['phone_other']) ? $data['phone_other'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['business_number'] = isset($data['business_number']) ? $data['business_number'] : null;
        $this->container['company_number'] = isset($data['company_number']) ? $data['company_number'] : null;
        $this->container['registration_number'] = isset($data['registration_number']) ? $data['registration_number'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
        $this->container['postal_address'] = isset($data['postal_address']) ? $data['postal_address'] : null;
        $this->container['vet_commission'] = isset($data['vet_commission']) ? $data['vet_commission'] : null;
        $this->container['elicos_commission'] = isset($data['elicos_commission']) ? $data['elicos_commission'] : null;
        $this->container['enrolment_fee_flag'] = isset($data['enrolment_fee_flag']) ? $data['enrolment_fee_flag'] : null;
        $this->container['regional_scholarship_flag'] = isset($data['regional_scholarship_flag']) ? $data['regional_scholarship_flag'] : null;
        $this->container['regional_scholarship_code'] = isset($data['regional_scholarship_code']) ? $data['regional_scholarship_code'] : null;
        $this->container['last_visit_date'] = isset($data['last_visit_date']) ? $data['last_visit_date'] : null;
        $this->container['agent_start_date'] = isset($data['agent_start_date']) ? $data['agent_start_date'] : null;
        $this->container['agreement_sign_date'] = isset($data['agreement_sign_date']) ? $data['agreement_sign_date'] : null;
        $this->container['agreement_expiry_date'] = isset($data['agreement_expiry_date']) ? $data['agreement_expiry_date'] : null;
        $this->container['general_notes'] = isset($data['general_notes']) ? $data['general_notes'] : null;
        $this->container['agent_agreement_status_id'] = isset($data['agent_agreement_status_id']) ? $data['agent_agreement_status_id'] : null;
        $this->container['primary_sales_contact_id'] = isset($data['primary_sales_contact_id']) ? $data['primary_sales_contact_id'] : null;
        $this->container['promotion_ids'] = isset($data['promotion_ids']) ? $data['promotion_ids'] : null;
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
     * Gets agent_id
     *
     * @return int
     */
    public function getAgentId()
    {
        return $this->container['agent_id'];
    }

    /**
     * Sets agent_id
     *
     * @param int $agent_id Primary Id for Agent that is auto generated
     *
     * @return $this
     */
    public function setAgentId($agent_id)
    {
        $this->container['agent_id'] = $agent_id;

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
     * @param string $name Name used to identify the Agent
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $code Code used to identify the Agent
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets agent_status_id
     *
     * @return int
     */
    public function getAgentStatusId()
    {
        return $this->container['agent_status_id'];
    }

    /**
     * Sets agent_status_id
     *
     * @param int $agent_status_id See combo AgentStatuses
     *
     * @return $this
     */
    public function setAgentStatusId($agent_status_id)
    {
        $this->container['agent_status_id'] = $agent_status_id;

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
     * @param bool $archived_flag To indicate if Agent is Archived
     *
     * @return $this
     */
    public function setArchivedFlag($archived_flag)
    {
        $this->container['archived_flag'] = $archived_flag;

        return $this;
    }

    /**
     * Gets assigned_to_staff_id
     *
     * @return int
     */
    public function getAssignedToStaffId()
    {
        return $this->container['assigned_to_staff_id'];
    }

    /**
     * Sets assigned_to_staff_id
     *
     * @param int $assigned_to_staff_id See entity Staff
     *
     * @return $this
     */
    public function setAssignedToStaffId($assigned_to_staff_id)
    {
        $this->container['assigned_to_staff_id'] = $assigned_to_staff_id;

        return $this;
    }

    /**
     * Gets region_id
     *
     * @return int
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param int $region_id See combo Regions
     *
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets agent_alt_number
     *
     * @return string
     */
    public function getAgentAltNumber()
    {
        return $this->container['agent_alt_number'];
    }

    /**
     * Sets agent_alt_number
     *
     * @param string $agent_alt_number Alternative number to identify the Agent
     *
     * @return $this
     */
    public function setAgentAltNumber($agent_alt_number)
    {
        $this->container['agent_alt_number'] = $agent_alt_number;

        return $this;
    }

    /**
     * Gets agent_classification_id
     *
     * @return int
     */
    public function getAgentClassificationId()
    {
        return $this->container['agent_classification_id'];
    }

    /**
     * Sets agent_classification_id
     *
     * @param int $agent_classification_id See combo AgentClassifications
     *
     * @return $this
     */
    public function setAgentClassificationId($agent_classification_id)
    {
        $this->container['agent_classification_id'] = $agent_classification_id;

        return $this;
    }

    /**
     * Gets main_contact_first_name
     *
     * @return string
     */
    public function getMainContactFirstName()
    {
        return $this->container['main_contact_first_name'];
    }

    /**
     * Sets main_contact_first_name
     *
     * @param string $main_contact_first_name Main Contact First Name for Agent
     *
     * @return $this
     */
    public function setMainContactFirstName($main_contact_first_name)
    {
        $this->container['main_contact_first_name'] = $main_contact_first_name;

        return $this;
    }

    /**
     * Gets main_contact_middle_name
     *
     * @return string
     */
    public function getMainContactMiddleName()
    {
        return $this->container['main_contact_middle_name'];
    }

    /**
     * Sets main_contact_middle_name
     *
     * @param string $main_contact_middle_name Main Contact Middle Name for Agent
     *
     * @return $this
     */
    public function setMainContactMiddleName($main_contact_middle_name)
    {
        $this->container['main_contact_middle_name'] = $main_contact_middle_name;

        return $this;
    }

    /**
     * Gets main_contact_last_name
     *
     * @return string
     */
    public function getMainContactLastName()
    {
        return $this->container['main_contact_last_name'];
    }

    /**
     * Sets main_contact_last_name
     *
     * @param string $main_contact_last_name Main Contact Last Name for Agent
     *
     * @return $this
     */
    public function setMainContactLastName($main_contact_last_name)
    {
        $this->container['main_contact_last_name'] = $main_contact_last_name;

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
     * @param string $email Agent Email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile Agent Mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

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
     * @param string $phone Agent Phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets phone_other
     *
     * @return string
     */
    public function getPhoneOther()
    {
        return $this->container['phone_other'];
    }

    /**
     * Sets phone_other
     *
     * @param string $phone_other Agent Phone Other
     *
     * @return $this
     */
    public function setPhoneOther($phone_other)
    {
        $this->container['phone_other'] = $phone_other;

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
     * @param string $fax Agent Fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

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
     * @param string $website Agent Website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

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
     * @param string $business_number Agent Business Number
     *
     * @return $this
     */
    public function setBusinessNumber($business_number)
    {
        $this->container['business_number'] = $business_number;

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
     * @param string $company_number Agent Company Number
     *
     * @return $this
     */
    public function setCompanyNumber($company_number)
    {
        $this->container['company_number'] = $company_number;

        return $this;
    }

    /**
     * Gets registration_number
     *
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->container['registration_number'];
    }

    /**
     * Sets registration_number
     *
     * @param string $registration_number Agent Registration Number
     *
     * @return $this
     */
    public function setRegistrationNumber($registration_number)
    {
        $this->container['registration_number'] = $registration_number;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return \Phwebs\Wisenet\Model\AgentStreetAddress
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param \Phwebs\Wisenet\Model\AgentStreetAddress $street_address street_address
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
     * @return \Phwebs\Wisenet\Model\AgentPostalAddress
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \Phwebs\Wisenet\Model\AgentPostalAddress $postal_address postal_address
     *
     * @return $this
     */
    public function setPostalAddress($postal_address)
    {
        $this->container['postal_address'] = $postal_address;

        return $this;
    }

    /**
     * Gets vet_commission
     *
     * @return int
     */
    public function getVetCommission()
    {
        return $this->container['vet_commission'];
    }

    /**
     * Sets vet_commission
     *
     * @param int $vet_commission Agent VET Commission rate as a percentage
     *
     * @return $this
     */
    public function setVetCommission($vet_commission)
    {
        $this->container['vet_commission'] = $vet_commission;

        return $this;
    }

    /**
     * Gets elicos_commission
     *
     * @return int
     */
    public function getElicosCommission()
    {
        return $this->container['elicos_commission'];
    }

    /**
     * Sets elicos_commission
     *
     * @param int $elicos_commission Agent ELICOS Commission rate as a percentage
     *
     * @return $this
     */
    public function setElicosCommission($elicos_commission)
    {
        $this->container['elicos_commission'] = $elicos_commission;

        return $this;
    }

    /**
     * Gets enrolment_fee_flag
     *
     * @return bool
     */
    public function getEnrolmentFeeFlag()
    {
        return $this->container['enrolment_fee_flag'];
    }

    /**
     * Sets enrolment_fee_flag
     *
     * @param bool $enrolment_fee_flag To indicate if Agent receives Enrolment Fee
     *
     * @return $this
     */
    public function setEnrolmentFeeFlag($enrolment_fee_flag)
    {
        $this->container['enrolment_fee_flag'] = $enrolment_fee_flag;

        return $this;
    }

    /**
     * Gets regional_scholarship_flag
     *
     * @return bool
     */
    public function getRegionalScholarshipFlag()
    {
        return $this->container['regional_scholarship_flag'];
    }

    /**
     * Sets regional_scholarship_flag
     *
     * @param bool $regional_scholarship_flag To indicate if Agent receives Regional Scholarship
     *
     * @return $this
     */
    public function setRegionalScholarshipFlag($regional_scholarship_flag)
    {
        $this->container['regional_scholarship_flag'] = $regional_scholarship_flag;

        return $this;
    }

    /**
     * Gets regional_scholarship_code
     *
     * @return string
     */
    public function getRegionalScholarshipCode()
    {
        return $this->container['regional_scholarship_code'];
    }

    /**
     * Sets regional_scholarship_code
     *
     * @param string $regional_scholarship_code Regional Scholarship Code
     *
     * @return $this
     */
    public function setRegionalScholarshipCode($regional_scholarship_code)
    {
        $this->container['regional_scholarship_code'] = $regional_scholarship_code;

        return $this;
    }

    /**
     * Gets last_visit_date
     *
     * @return \DateTime
     */
    public function getLastVisitDate()
    {
        return $this->container['last_visit_date'];
    }

    /**
     * Sets last_visit_date
     *
     * @param \DateTime $last_visit_date Date Agent was last visited
     *
     * @return $this
     */
    public function setLastVisitDate($last_visit_date)
    {
        $this->container['last_visit_date'] = $last_visit_date;

        return $this;
    }

    /**
     * Gets agent_start_date
     *
     * @return \DateTime
     */
    public function getAgentStartDate()
    {
        return $this->container['agent_start_date'];
    }

    /**
     * Sets agent_start_date
     *
     * @param \DateTime $agent_start_date Date Agent Started
     *
     * @return $this
     */
    public function setAgentStartDate($agent_start_date)
    {
        $this->container['agent_start_date'] = $agent_start_date;

        return $this;
    }

    /**
     * Gets agreement_sign_date
     *
     * @return \DateTime
     */
    public function getAgreementSignDate()
    {
        return $this->container['agreement_sign_date'];
    }

    /**
     * Sets agreement_sign_date
     *
     * @param \DateTime $agreement_sign_date Date last agreement was signed
     *
     * @return $this
     */
    public function setAgreementSignDate($agreement_sign_date)
    {
        $this->container['agreement_sign_date'] = $agreement_sign_date;

        return $this;
    }

    /**
     * Gets agreement_expiry_date
     *
     * @return \DateTime
     */
    public function getAgreementExpiryDate()
    {
        return $this->container['agreement_expiry_date'];
    }

    /**
     * Sets agreement_expiry_date
     *
     * @param \DateTime $agreement_expiry_date Date last agreement expires
     *
     * @return $this
     */
    public function setAgreementExpiryDate($agreement_expiry_date)
    {
        $this->container['agreement_expiry_date'] = $agreement_expiry_date;

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
     * @param string $general_notes Notes regarding the Agent
     *
     * @return $this
     */
    public function setGeneralNotes($general_notes)
    {
        $this->container['general_notes'] = $general_notes;

        return $this;
    }

    /**
     * Gets agent_agreement_status_id
     *
     * @return int
     */
    public function getAgentAgreementStatusId()
    {
        return $this->container['agent_agreement_status_id'];
    }

    /**
     * Sets agent_agreement_status_id
     *
     * @param int $agent_agreement_status_id See combo AgentAgreementStatuses
     *
     * @return $this
     */
    public function setAgentAgreementStatusId($agent_agreement_status_id)
    {
        $this->container['agent_agreement_status_id'] = $agent_agreement_status_id;

        return $this;
    }

    /**
     * Gets primary_sales_contact_id
     *
     * @return int
     */
    public function getPrimarySalesContactId()
    {
        return $this->container['primary_sales_contact_id'];
    }

    /**
     * Sets primary_sales_contact_id
     *
     * @param int $primary_sales_contact_id See entity SalesContacts. This allows a primary Sales Contact to be defined.
     *
     * @return $this
     */
    public function setPrimarySalesContactId($primary_sales_contact_id)
    {
        $this->container['primary_sales_contact_id'] = $primary_sales_contact_id;

        return $this;
    }

    /**
     * Gets promotion_ids
     *
     * @return int[]
     */
    public function getPromotionIds()
    {
        return $this->container['promotion_ids'];
    }

    /**
     * Sets promotion_ids
     *
     * @param int[] $promotion_ids promotion_ids
     *
     * @return $this
     */
    public function setPromotionIds($promotion_ids)
    {
        $this->container['promotion_ids'] = $promotion_ids;

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
