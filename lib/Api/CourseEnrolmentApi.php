<?php
/**
 * CourseEnrolmentApi
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

namespace Phwebs\Wisenet\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Phwebs\Wisenet\ApiException;
use Phwebs\Wisenet\Configuration;
use Phwebs\Wisenet\HeaderSelector;
use Phwebs\Wisenet\ObjectSerializer;

/**
 * CourseEnrolmentApi Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CourseEnrolmentApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createCourseEnrolments
     *
     * Create CourseEnrolments
     *
     * @param  \Phwebs\Wisenet\Model\CourseEnrolment[] $body Course Enrolment objects to add (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\CourseEnrolmentItem[]
     */
    public function createCourseEnrolments($body)
    {
        list($response) = $this->createCourseEnrolmentsWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createCourseEnrolmentsWithHttpInfo
     *
     * Create CourseEnrolments
     *
     * @param  \Phwebs\Wisenet\Model\CourseEnrolment[] $body Course Enrolment objects to add (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\CourseEnrolmentItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function createCourseEnrolmentsWithHttpInfo($body)
    {
        $returnType = '\Phwebs\Wisenet\Model\CourseEnrolmentItem[]';
        $request = $this->createCourseEnrolmentsRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phwebs\Wisenet\Model\CourseEnrolmentItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createCourseEnrolmentsAsync
     *
     * Create CourseEnrolments
     *
     * @param  \Phwebs\Wisenet\Model\CourseEnrolment[] $body Course Enrolment objects to add (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCourseEnrolmentsAsync($body)
    {
        return $this->createCourseEnrolmentsAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createCourseEnrolmentsAsyncWithHttpInfo
     *
     * Create CourseEnrolments
     *
     * @param  \Phwebs\Wisenet\Model\CourseEnrolment[] $body Course Enrolment objects to add (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCourseEnrolmentsAsyncWithHttpInfo($body)
    {
        $returnType = '\Phwebs\Wisenet\Model\CourseEnrolmentItem[]';
        $request = $this->createCourseEnrolmentsRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createCourseEnrolments'
     *
     * @param  \Phwebs\Wisenet\Model\CourseEnrolment[] $body Course Enrolment objects to add (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createCourseEnrolmentsRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createCourseEnrolments'
            );
        }

        $resourcePath = '/course-enrolments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCourseEnrolment
     *
     * Get CourseEnrolment by Id
     *
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\CourseEnrolmentItem
     */
    public function getCourseEnrolment($id)
    {
        list($response) = $this->getCourseEnrolmentWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getCourseEnrolmentWithHttpInfo
     *
     * Get CourseEnrolment by Id
     *
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\CourseEnrolmentItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCourseEnrolmentWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\CourseEnrolmentItem';
        $request = $this->getCourseEnrolmentRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phwebs\Wisenet\Model\CourseEnrolmentItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCourseEnrolmentAsync
     *
     * Get CourseEnrolment by Id
     *
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCourseEnrolmentAsync($id)
    {
        return $this->getCourseEnrolmentAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCourseEnrolmentAsyncWithHttpInfo
     *
     * Get CourseEnrolment by Id
     *
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCourseEnrolmentAsyncWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\CourseEnrolmentItem';
        $request = $this->getCourseEnrolmentRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCourseEnrolment'
     *
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCourseEnrolmentRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getCourseEnrolment'
            );
        }

        $resourcePath = '/course-enrolments/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCourseEnrolments
     *
     * Get CourseEnrolments
     *
     * @param  string $search This does a string search on the learner&#x27;s FirstName, LastName, LearnerNumber and course offer code (optional)
     * @param  int $learner_id_filter Filter by LearnerId (optional)
     * @param  string $learner_number_filter Filter by LearnerNumber (optional)
     * @param  int $course_offer_id_filter Filter by CourseOfferId (optional)
     * @param  int $application_status_id_filter Filter by ApplicationStatusId (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $sort Field name to sort course enrolments by.  Supported fields are EndDate, LastModifiedTimeStamp and EnquiryDate. Default sorting is by LastModifiedTimeStamp. (optional)
     * @param  string $order Order in which course enrolments are sorted.  Supported orders are asc and desc. Default sorting is by asc. (optional)
     * @param  string $enrolment_status_id_filter Filter by EnrolmentStatusId (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\CourseEnrolmentItem[]
     */
    public function getCourseEnrolments($search = null, $learner_id_filter = null, $learner_number_filter = null, $course_offer_id_filter = null, $application_status_id_filter = null, $last_modified_time_stamp_filter = null, $skip = null, $take = null, $sort = null, $order = null, $enrolment_status_id_filter = null)
    {
        list($response) = $this->getCourseEnrolmentsWithHttpInfo($search, $learner_id_filter, $learner_number_filter, $course_offer_id_filter, $application_status_id_filter, $last_modified_time_stamp_filter, $skip, $take, $sort, $order, $enrolment_status_id_filter);
        return $response;
    }

    /**
     * Operation getCourseEnrolmentsWithHttpInfo
     *
     * Get CourseEnrolments
     *
     * @param  string $search This does a string search on the learner&#x27;s FirstName, LastName, LearnerNumber and course offer code (optional)
     * @param  int $learner_id_filter Filter by LearnerId (optional)
     * @param  string $learner_number_filter Filter by LearnerNumber (optional)
     * @param  int $course_offer_id_filter Filter by CourseOfferId (optional)
     * @param  int $application_status_id_filter Filter by ApplicationStatusId (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $sort Field name to sort course enrolments by.  Supported fields are EndDate, LastModifiedTimeStamp and EnquiryDate. Default sorting is by LastModifiedTimeStamp. (optional)
     * @param  string $order Order in which course enrolments are sorted.  Supported orders are asc and desc. Default sorting is by asc. (optional)
     * @param  string $enrolment_status_id_filter Filter by EnrolmentStatusId (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\CourseEnrolmentItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCourseEnrolmentsWithHttpInfo($search = null, $learner_id_filter = null, $learner_number_filter = null, $course_offer_id_filter = null, $application_status_id_filter = null, $last_modified_time_stamp_filter = null, $skip = null, $take = null, $sort = null, $order = null, $enrolment_status_id_filter = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\CourseEnrolmentItem[]';
        $request = $this->getCourseEnrolmentsRequest($search, $learner_id_filter, $learner_number_filter, $course_offer_id_filter, $application_status_id_filter, $last_modified_time_stamp_filter, $skip, $take, $sort, $order, $enrolment_status_id_filter);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phwebs\Wisenet\Model\CourseEnrolmentItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCourseEnrolmentsAsync
     *
     * Get CourseEnrolments
     *
     * @param  string $search This does a string search on the learner&#x27;s FirstName, LastName, LearnerNumber and course offer code (optional)
     * @param  int $learner_id_filter Filter by LearnerId (optional)
     * @param  string $learner_number_filter Filter by LearnerNumber (optional)
     * @param  int $course_offer_id_filter Filter by CourseOfferId (optional)
     * @param  int $application_status_id_filter Filter by ApplicationStatusId (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $sort Field name to sort course enrolments by.  Supported fields are EndDate, LastModifiedTimeStamp and EnquiryDate. Default sorting is by LastModifiedTimeStamp. (optional)
     * @param  string $order Order in which course enrolments are sorted.  Supported orders are asc and desc. Default sorting is by asc. (optional)
     * @param  string $enrolment_status_id_filter Filter by EnrolmentStatusId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCourseEnrolmentsAsync($search = null, $learner_id_filter = null, $learner_number_filter = null, $course_offer_id_filter = null, $application_status_id_filter = null, $last_modified_time_stamp_filter = null, $skip = null, $take = null, $sort = null, $order = null, $enrolment_status_id_filter = null)
    {
        return $this->getCourseEnrolmentsAsyncWithHttpInfo($search, $learner_id_filter, $learner_number_filter, $course_offer_id_filter, $application_status_id_filter, $last_modified_time_stamp_filter, $skip, $take, $sort, $order, $enrolment_status_id_filter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCourseEnrolmentsAsyncWithHttpInfo
     *
     * Get CourseEnrolments
     *
     * @param  string $search This does a string search on the learner&#x27;s FirstName, LastName, LearnerNumber and course offer code (optional)
     * @param  int $learner_id_filter Filter by LearnerId (optional)
     * @param  string $learner_number_filter Filter by LearnerNumber (optional)
     * @param  int $course_offer_id_filter Filter by CourseOfferId (optional)
     * @param  int $application_status_id_filter Filter by ApplicationStatusId (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $sort Field name to sort course enrolments by.  Supported fields are EndDate, LastModifiedTimeStamp and EnquiryDate. Default sorting is by LastModifiedTimeStamp. (optional)
     * @param  string $order Order in which course enrolments are sorted.  Supported orders are asc and desc. Default sorting is by asc. (optional)
     * @param  string $enrolment_status_id_filter Filter by EnrolmentStatusId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCourseEnrolmentsAsyncWithHttpInfo($search = null, $learner_id_filter = null, $learner_number_filter = null, $course_offer_id_filter = null, $application_status_id_filter = null, $last_modified_time_stamp_filter = null, $skip = null, $take = null, $sort = null, $order = null, $enrolment_status_id_filter = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\CourseEnrolmentItem[]';
        $request = $this->getCourseEnrolmentsRequest($search, $learner_id_filter, $learner_number_filter, $course_offer_id_filter, $application_status_id_filter, $last_modified_time_stamp_filter, $skip, $take, $sort, $order, $enrolment_status_id_filter);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCourseEnrolments'
     *
     * @param  string $search This does a string search on the learner&#x27;s FirstName, LastName, LearnerNumber and course offer code (optional)
     * @param  int $learner_id_filter Filter by LearnerId (optional)
     * @param  string $learner_number_filter Filter by LearnerNumber (optional)
     * @param  int $course_offer_id_filter Filter by CourseOfferId (optional)
     * @param  int $application_status_id_filter Filter by ApplicationStatusId (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $sort Field name to sort course enrolments by.  Supported fields are EndDate, LastModifiedTimeStamp and EnquiryDate. Default sorting is by LastModifiedTimeStamp. (optional)
     * @param  string $order Order in which course enrolments are sorted.  Supported orders are asc and desc. Default sorting is by asc. (optional)
     * @param  string $enrolment_status_id_filter Filter by EnrolmentStatusId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCourseEnrolmentsRequest($search = null, $learner_id_filter = null, $learner_number_filter = null, $course_offer_id_filter = null, $application_status_id_filter = null, $last_modified_time_stamp_filter = null, $skip = null, $take = null, $sort = null, $order = null, $enrolment_status_id_filter = null)
    {

        $resourcePath = '/course-enrolments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search, null);
        }
        // query params
        if ($learner_id_filter !== null) {
            $queryParams['learnerIdFilter'] = ObjectSerializer::toQueryValue($learner_id_filter, 'int32');
        }
        // query params
        if ($learner_number_filter !== null) {
            $queryParams['learnerNumberFilter'] = ObjectSerializer::toQueryValue($learner_number_filter, null);
        }
        // query params
        if ($course_offer_id_filter !== null) {
            $queryParams['courseOfferIdFilter'] = ObjectSerializer::toQueryValue($course_offer_id_filter, 'int32');
        }
        // query params
        if ($application_status_id_filter !== null) {
            $queryParams['applicationStatusIdFilter'] = ObjectSerializer::toQueryValue($application_status_id_filter, 'int32');
        }
        // query params
        if ($last_modified_time_stamp_filter !== null) {
            $queryParams['lastModifiedTimeStampFilter'] = ObjectSerializer::toQueryValue($last_modified_time_stamp_filter, null);
        }
        // query params
        if ($skip !== null) {
            $queryParams['skip'] = ObjectSerializer::toQueryValue($skip, 'int32');
        }
        // query params
        if ($take !== null) {
            $queryParams['take'] = ObjectSerializer::toQueryValue($take, 'int32');
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort, null);
        }
        // query params
        if ($order !== null) {
            $queryParams['order'] = ObjectSerializer::toQueryValue($order, null);
        }
        // query params
        if ($enrolment_status_id_filter !== null) {
            $queryParams['enrolmentStatusIdFilter'] = ObjectSerializer::toQueryValue($enrolment_status_id_filter, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchCourseEnrolment
     *
     * Patch CourseEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on course enrolment (required)
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\CourseEnrolmentItem
     */
    public function patchCourseEnrolment($body, $id)
    {
        list($response) = $this->patchCourseEnrolmentWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation patchCourseEnrolmentWithHttpInfo
     *
     * Patch CourseEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on course enrolment (required)
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\CourseEnrolmentItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchCourseEnrolmentWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\CourseEnrolmentItem';
        $request = $this->patchCourseEnrolmentRequest($body, $id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phwebs\Wisenet\Model\CourseEnrolmentItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchCourseEnrolmentAsync
     *
     * Patch CourseEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on course enrolment (required)
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchCourseEnrolmentAsync($body, $id)
    {
        return $this->patchCourseEnrolmentAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchCourseEnrolmentAsyncWithHttpInfo
     *
     * Patch CourseEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on course enrolment (required)
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchCourseEnrolmentAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\CourseEnrolmentItem';
        $request = $this->patchCourseEnrolmentRequest($body, $id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'patchCourseEnrolment'
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on course enrolment (required)
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchCourseEnrolmentRequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling patchCourseEnrolment'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchCourseEnrolment'
            );
        }

        $resourcePath = '/course-enrolments/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation replaceCourseEnrolment
     *
     * Replace CourseEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\CourseEnrolment $body Course Enrolment object to update with (required)
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\CourseEnrolmentItem
     */
    public function replaceCourseEnrolment($body, $id)
    {
        list($response) = $this->replaceCourseEnrolmentWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation replaceCourseEnrolmentWithHttpInfo
     *
     * Replace CourseEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\CourseEnrolment $body Course Enrolment object to update with (required)
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\CourseEnrolmentItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceCourseEnrolmentWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\CourseEnrolmentItem';
        $request = $this->replaceCourseEnrolmentRequest($body, $id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phwebs\Wisenet\Model\CourseEnrolmentItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation replaceCourseEnrolmentAsync
     *
     * Replace CourseEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\CourseEnrolment $body Course Enrolment object to update with (required)
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceCourseEnrolmentAsync($body, $id)
    {
        return $this->replaceCourseEnrolmentAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation replaceCourseEnrolmentAsyncWithHttpInfo
     *
     * Replace CourseEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\CourseEnrolment $body Course Enrolment object to update with (required)
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceCourseEnrolmentAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\CourseEnrolmentItem';
        $request = $this->replaceCourseEnrolmentRequest($body, $id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'replaceCourseEnrolment'
     *
     * @param  \Phwebs\Wisenet\Model\CourseEnrolment $body Course Enrolment object to update with (required)
     * @param  int $id Id of the CourseEnrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function replaceCourseEnrolmentRequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling replaceCourseEnrolment'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling replaceCourseEnrolment'
            );
        }

        $resourcePath = '/course-enrolments/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
