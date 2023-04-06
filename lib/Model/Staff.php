<?php
/**
 * Staff
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
 * Staff Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Staff implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Staff';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'staff_id' => 'int',
'first_name' => 'string',
'middle_name' => 'string',
'last_name' => 'string',
'start_date' => '\DateTime',
'end_date' => '\DateTime',
'archived_flag' => 'bool',
'title' => 'string',
'date_of_birth' => '\DateTime',
'gender_id' => 'int',
'mobile' => 'string',
'email' => 'string',
'phone' => 'string',
'fax' => 'string',
'accreditation_number' => 'string',
'registration_number' => 'string',
'workplace' => 'string',
'profile' => 'string',
'street_address' => '\Phwebs\Wisenet\Model\StaffStreetAddress',
'postal_address' => '\Phwebs\Wisenet\Model\StaffPostalAddress',
'assessor_flag' => 'bool',
'assessor_id' => 'int',
'trainer_flag' => 'bool',
'trainer_id' => 'int',
'coordinator_flag' => 'bool',
'coordinator_id' => 'int',
'sales_person_flag' => 'bool',
'sales_person_id' => 'int',
'issuing_officer_flag' => 'bool',
'contract_flag' => 'bool',
'sa_highest_qualification_type_id' => 'int',
'vaccine_status_id' => 'int',
'vaccine_status_notes' => 'string',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'staff_id' => 'int32',
'first_name' => null,
'middle_name' => null,
'last_name' => null,
'start_date' => 'date-time',
'end_date' => 'date-time',
'archived_flag' => null,
'title' => null,
'date_of_birth' => 'date-time',
'gender_id' => 'int32',
'mobile' => null,
'email' => null,
'phone' => null,
'fax' => null,
'accreditation_number' => null,
'registration_number' => null,
'workplace' => null,
'profile' => null,
'street_address' => null,
'postal_address' => null,
'assessor_flag' => null,
'assessor_id' => 'int32',
'trainer_flag' => null,
'trainer_id' => 'int32',
'coordinator_flag' => null,
'coordinator_id' => 'int32',
'sales_person_flag' => null,
'sales_person_id' => 'int32',
'issuing_officer_flag' => null,
'contract_flag' => null,
'sa_highest_qualification_type_id' => 'int32',
'vaccine_status_id' => 'int32',
'vaccine_status_notes' => '1000',
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
        'staff_id' => 'StaffId',
'first_name' => 'FirstName',
'middle_name' => 'MiddleName',
'last_name' => 'LastName',
'start_date' => 'StartDate',
'end_date' => 'EndDate',
'archived_flag' => 'ArchivedFlag',
'title' => 'Title',
'date_of_birth' => 'DateOfBirth',
'gender_id' => 'GenderId',
'mobile' => 'Mobile',
'email' => 'Email',
'phone' => 'Phone',
'fax' => 'Fax',
'accreditation_number' => 'AccreditationNumber',
'registration_number' => 'RegistrationNumber',
'workplace' => 'Workplace',
'profile' => 'Profile',
'street_address' => 'StreetAddress',
'postal_address' => 'PostalAddress',
'assessor_flag' => 'AssessorFlag',
'assessor_id' => 'AssessorId',
'trainer_flag' => 'TrainerFlag',
'trainer_id' => 'TrainerId',
'coordinator_flag' => 'CoordinatorFlag',
'coordinator_id' => 'CoordinatorId',
'sales_person_flag' => 'SalesPersonFlag',
'sales_person_id' => 'SalesPersonId',
'issuing_officer_flag' => 'IssuingOfficerFlag',
'contract_flag' => 'ContractFlag',
'sa_highest_qualification_type_id' => 'SaHighestQualificationTypeId',
'vaccine_status_id' => 'VaccineStatusId',
'vaccine_status_notes' => 'VaccineStatusNotes',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'staff_id' => 'setStaffId',
'first_name' => 'setFirstName',
'middle_name' => 'setMiddleName',
'last_name' => 'setLastName',
'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'archived_flag' => 'setArchivedFlag',
'title' => 'setTitle',
'date_of_birth' => 'setDateOfBirth',
'gender_id' => 'setGenderId',
'mobile' => 'setMobile',
'email' => 'setEmail',
'phone' => 'setPhone',
'fax' => 'setFax',
'accreditation_number' => 'setAccreditationNumber',
'registration_number' => 'setRegistrationNumber',
'workplace' => 'setWorkplace',
'profile' => 'setProfile',
'street_address' => 'setStreetAddress',
'postal_address' => 'setPostalAddress',
'assessor_flag' => 'setAssessorFlag',
'assessor_id' => 'setAssessorId',
'trainer_flag' => 'setTrainerFlag',
'trainer_id' => 'setTrainerId',
'coordinator_flag' => 'setCoordinatorFlag',
'coordinator_id' => 'setCoordinatorId',
'sales_person_flag' => 'setSalesPersonFlag',
'sales_person_id' => 'setSalesPersonId',
'issuing_officer_flag' => 'setIssuingOfficerFlag',
'contract_flag' => 'setContractFlag',
'sa_highest_qualification_type_id' => 'setSaHighestQualificationTypeId',
'vaccine_status_id' => 'setVaccineStatusId',
'vaccine_status_notes' => 'setVaccineStatusNotes',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'staff_id' => 'getStaffId',
'first_name' => 'getFirstName',
'middle_name' => 'getMiddleName',
'last_name' => 'getLastName',
'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'archived_flag' => 'getArchivedFlag',
'title' => 'getTitle',
'date_of_birth' => 'getDateOfBirth',
'gender_id' => 'getGenderId',
'mobile' => 'getMobile',
'email' => 'getEmail',
'phone' => 'getPhone',
'fax' => 'getFax',
'accreditation_number' => 'getAccreditationNumber',
'registration_number' => 'getRegistrationNumber',
'workplace' => 'getWorkplace',
'profile' => 'getProfile',
'street_address' => 'getStreetAddress',
'postal_address' => 'getPostalAddress',
'assessor_flag' => 'getAssessorFlag',
'assessor_id' => 'getAssessorId',
'trainer_flag' => 'getTrainerFlag',
'trainer_id' => 'getTrainerId',
'coordinator_flag' => 'getCoordinatorFlag',
'coordinator_id' => 'getCoordinatorId',
'sales_person_flag' => 'getSalesPersonFlag',
'sales_person_id' => 'getSalesPersonId',
'issuing_officer_flag' => 'getIssuingOfficerFlag',
'contract_flag' => 'getContractFlag',
'sa_highest_qualification_type_id' => 'getSaHighestQualificationTypeId',
'vaccine_status_id' => 'getVaccineStatusId',
'vaccine_status_notes' => 'getVaccineStatusNotes',
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
        $this->container['staff_id'] = isset($data['staff_id']) ? $data['staff_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['archived_flag'] = isset($data['archived_flag']) ? $data['archived_flag'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['gender_id'] = isset($data['gender_id']) ? $data['gender_id'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['accreditation_number'] = isset($data['accreditation_number']) ? $data['accreditation_number'] : null;
        $this->container['registration_number'] = isset($data['registration_number']) ? $data['registration_number'] : null;
        $this->container['workplace'] = isset($data['workplace']) ? $data['workplace'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
        $this->container['postal_address'] = isset($data['postal_address']) ? $data['postal_address'] : null;
        $this->container['assessor_flag'] = isset($data['assessor_flag']) ? $data['assessor_flag'] : null;
        $this->container['assessor_id'] = isset($data['assessor_id']) ? $data['assessor_id'] : null;
        $this->container['trainer_flag'] = isset($data['trainer_flag']) ? $data['trainer_flag'] : null;
        $this->container['trainer_id'] = isset($data['trainer_id']) ? $data['trainer_id'] : null;
        $this->container['coordinator_flag'] = isset($data['coordinator_flag']) ? $data['coordinator_flag'] : null;
        $this->container['coordinator_id'] = isset($data['coordinator_id']) ? $data['coordinator_id'] : null;
        $this->container['sales_person_flag'] = isset($data['sales_person_flag']) ? $data['sales_person_flag'] : null;
        $this->container['sales_person_id'] = isset($data['sales_person_id']) ? $data['sales_person_id'] : null;
        $this->container['issuing_officer_flag'] = isset($data['issuing_officer_flag']) ? $data['issuing_officer_flag'] : null;
        $this->container['contract_flag'] = isset($data['contract_flag']) ? $data['contract_flag'] : null;
        $this->container['sa_highest_qualification_type_id'] = isset($data['sa_highest_qualification_type_id']) ? $data['sa_highest_qualification_type_id'] : null;
        $this->container['vaccine_status_id'] = isset($data['vaccine_status_id']) ? $data['vaccine_status_id'] : null;
        $this->container['vaccine_status_notes'] = isset($data['vaccine_status_notes']) ? $data['vaccine_status_notes'] : null;
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
     * Gets staff_id
     *
     * @return int
     */
    public function getStaffId()
    {
        return $this->container['staff_id'];
    }

    /**
     * Sets staff_id
     *
     * @param int $staff_id Primary Id for Staff that is auto generated
     *
     * @return $this
     */
    public function setStaffId($staff_id)
    {
        $this->container['staff_id'] = $staff_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First Name of the Staff
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string $middle_name Middle Name of the Staff
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last Name of the Staff
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Active Start Date of the Staff
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date Active End Date of the Staff
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * @param bool $archived_flag To indicate if Staff is Archived
     *
     * @return $this
     */
    public function setArchivedFlag($archived_flag)
    {
        $this->container['archived_flag'] = $archived_flag;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of the staff
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth Date of Birth of the Staff
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets gender_id
     *
     * @return int
     */
    public function getGenderId()
    {
        return $this->container['gender_id'];
    }

    /**
     * Sets gender_id
     *
     * @param int $gender_id gender_id
     *
     * @return $this
     */
    public function setGenderId($gender_id)
    {
        $this->container['gender_id'] = $gender_id;

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
     * @param string $mobile Mobile number of the Staff. Accepts numbers only. International format is preferable eg. +614xxxxxxxxx\".
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

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
     * @param string $email Email address of the Staff
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * @param string $phone Phone Number of the Staff
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
     * @param string $fax Fax Number of the Staff
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets accreditation_number
     *
     * @return string
     */
    public function getAccreditationNumber()
    {
        return $this->container['accreditation_number'];
    }

    /**
     * Sets accreditation_number
     *
     * @param string $accreditation_number Accreditation Number of theStaff
     *
     * @return $this
     */
    public function setAccreditationNumber($accreditation_number)
    {
        $this->container['accreditation_number'] = $accreditation_number;

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
     * @param string $registration_number Registration Number of the Staff
     *
     * @return $this
     */
    public function setRegistrationNumber($registration_number)
    {
        $this->container['registration_number'] = $registration_number;

        return $this;
    }

    /**
     * Gets workplace
     *
     * @return string
     */
    public function getWorkplace()
    {
        return $this->container['workplace'];
    }

    /**
     * Sets workplace
     *
     * @param string $workplace Workplace of the Staff
     *
     * @return $this
     */
    public function setWorkplace($workplace)
    {
        $this->container['workplace'] = $workplace;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string $profile Profile information of the Staff
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return \Phwebs\Wisenet\Model\StaffStreetAddress
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param \Phwebs\Wisenet\Model\StaffStreetAddress $street_address street_address
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
     * @return \Phwebs\Wisenet\Model\StaffPostalAddress
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \Phwebs\Wisenet\Model\StaffPostalAddress $postal_address postal_address
     *
     * @return $this
     */
    public function setPostalAddress($postal_address)
    {
        $this->container['postal_address'] = $postal_address;

        return $this;
    }

    /**
     * Gets assessor_flag
     *
     * @return bool
     */
    public function getAssessorFlag()
    {
        return $this->container['assessor_flag'];
    }

    /**
     * Sets assessor_flag
     *
     * @param bool $assessor_flag assessor_flag
     *
     * @return $this
     */
    public function setAssessorFlag($assessor_flag)
    {
        $this->container['assessor_flag'] = $assessor_flag;

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
     * @param int $assessor_id assessor_id
     *
     * @return $this
     */
    public function setAssessorId($assessor_id)
    {
        $this->container['assessor_id'] = $assessor_id;

        return $this;
    }

    /**
     * Gets trainer_flag
     *
     * @return bool
     */
    public function getTrainerFlag()
    {
        return $this->container['trainer_flag'];
    }

    /**
     * Sets trainer_flag
     *
     * @param bool $trainer_flag To indicate if Staff is Trainer
     *
     * @return $this
     */
    public function setTrainerFlag($trainer_flag)
    {
        $this->container['trainer_flag'] = $trainer_flag;

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
     * @param int $trainer_id trainer_id
     *
     * @return $this
     */
    public function setTrainerId($trainer_id)
    {
        $this->container['trainer_id'] = $trainer_id;

        return $this;
    }

    /**
     * Gets coordinator_flag
     *
     * @return bool
     */
    public function getCoordinatorFlag()
    {
        return $this->container['coordinator_flag'];
    }

    /**
     * Sets coordinator_flag
     *
     * @param bool $coordinator_flag To indicate if Staff is Coordinator
     *
     * @return $this
     */
    public function setCoordinatorFlag($coordinator_flag)
    {
        $this->container['coordinator_flag'] = $coordinator_flag;

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
     * @param int $coordinator_id coordinator_id
     *
     * @return $this
     */
    public function setCoordinatorId($coordinator_id)
    {
        $this->container['coordinator_id'] = $coordinator_id;

        return $this;
    }

    /**
     * Gets sales_person_flag
     *
     * @return bool
     */
    public function getSalesPersonFlag()
    {
        return $this->container['sales_person_flag'];
    }

    /**
     * Sets sales_person_flag
     *
     * @param bool $sales_person_flag To indicate if Staff is Sales Person
     *
     * @return $this
     */
    public function setSalesPersonFlag($sales_person_flag)
    {
        $this->container['sales_person_flag'] = $sales_person_flag;

        return $this;
    }

    /**
     * Gets sales_person_id
     *
     * @return int
     */
    public function getSalesPersonId()
    {
        return $this->container['sales_person_id'];
    }

    /**
     * Sets sales_person_id
     *
     * @param int $sales_person_id sales_person_id
     *
     * @return $this
     */
    public function setSalesPersonId($sales_person_id)
    {
        $this->container['sales_person_id'] = $sales_person_id;

        return $this;
    }

    /**
     * Gets issuing_officer_flag
     *
     * @return bool
     */
    public function getIssuingOfficerFlag()
    {
        return $this->container['issuing_officer_flag'];
    }

    /**
     * Sets issuing_officer_flag
     *
     * @param bool $issuing_officer_flag To indicate if Staff is Issuing Officer
     *
     * @return $this
     */
    public function setIssuingOfficerFlag($issuing_officer_flag)
    {
        $this->container['issuing_officer_flag'] = $issuing_officer_flag;

        return $this;
    }

    /**
     * Gets contract_flag
     *
     * @return bool
     */
    public function getContractFlag()
    {
        return $this->container['contract_flag'];
    }

    /**
     * Sets contract_flag
     *
     * @param bool $contract_flag To indicate if Staff has Contract
     *
     * @return $this
     */
    public function setContractFlag($contract_flag)
    {
        $this->container['contract_flag'] = $contract_flag;

        return $this;
    }

    /**
     * Gets sa_highest_qualification_type_id
     *
     * @return int
     */
    public function getSaHighestQualificationTypeId()
    {
        return $this->container['sa_highest_qualification_type_id'];
    }

    /**
     * Sets sa_highest_qualification_type_id
     *
     * @param int $sa_highest_qualification_type_id South Africa only. See SaHighestQualificationTypes
     *
     * @return $this
     */
    public function setSaHighestQualificationTypeId($sa_highest_qualification_type_id)
    {
        $this->container['sa_highest_qualification_type_id'] = $sa_highest_qualification_type_id;

        return $this;
    }

    /**
     * Gets vaccine_status_id
     *
     * @return int
     */
    public function getVaccineStatusId()
    {
        return $this->container['vaccine_status_id'];
    }

    /**
     * Sets vaccine_status_id
     *
     * @param int $vaccine_status_id Vaccine Status Id
     *
     * @return $this
     */
    public function setVaccineStatusId($vaccine_status_id)
    {
        $this->container['vaccine_status_id'] = $vaccine_status_id;

        return $this;
    }

    /**
     * Gets vaccine_status_notes
     *
     * @return string
     */
    public function getVaccineStatusNotes()
    {
        return $this->container['vaccine_status_notes'];
    }

    /**
     * Sets vaccine_status_notes
     *
     * @param string $vaccine_status_notes Vaccination notes
     *
     * @return $this
     */
    public function setVaccineStatusNotes($vaccine_status_notes)
    {
        $this->container['vaccine_status_notes'] = $vaccine_status_notes;

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
     * @param \DateTime $last_modified_time_stamp Date when the Staff was last modified
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
