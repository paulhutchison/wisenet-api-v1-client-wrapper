<?php
/**
 * UnitEnrolmentApi
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
 * UnitEnrolmentApi Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnitEnrolmentApi
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
     * Operation createUnitEnrolments
     *
     * Create UnitEnrolments
     *
     * @param  \Phwebs\Wisenet\Model\UnitEnrolment[] $body Unit Enrolment objects to add (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\UnitEnrolmentItem[]
     */
    public function createUnitEnrolments($body)
    {
        list($response) = $this->createUnitEnrolmentsWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createUnitEnrolmentsWithHttpInfo
     *
     * Create UnitEnrolments
     *
     * @param  \Phwebs\Wisenet\Model\UnitEnrolment[] $body Unit Enrolment objects to add (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\UnitEnrolmentItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function createUnitEnrolmentsWithHttpInfo($body)
    {
        $returnType = '\Phwebs\Wisenet\Model\UnitEnrolmentItem[]';
        $request = $this->createUnitEnrolmentsRequest($body);

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
                        '\Phwebs\Wisenet\Model\UnitEnrolmentItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createUnitEnrolmentsAsync
     *
     * Create UnitEnrolments
     *
     * @param  \Phwebs\Wisenet\Model\UnitEnrolment[] $body Unit Enrolment objects to add (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUnitEnrolmentsAsync($body)
    {
        return $this->createUnitEnrolmentsAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createUnitEnrolmentsAsyncWithHttpInfo
     *
     * Create UnitEnrolments
     *
     * @param  \Phwebs\Wisenet\Model\UnitEnrolment[] $body Unit Enrolment objects to add (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUnitEnrolmentsAsyncWithHttpInfo($body)
    {
        $returnType = '\Phwebs\Wisenet\Model\UnitEnrolmentItem[]';
        $request = $this->createUnitEnrolmentsRequest($body);

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
     * Create request for operation 'createUnitEnrolments'
     *
     * @param  \Phwebs\Wisenet\Model\UnitEnrolment[] $body Unit Enrolment objects to add (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createUnitEnrolmentsRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createUnitEnrolments'
            );
        }

        $resourcePath = '/unit-enrolments';
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
     * Operation getUnitEnrolment
     *
     * Get UnitEnrolment by Id
     *
     * @param  int $id Id of the Unit Enrolment (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\UnitEnrolmentItem
     */
    public function getUnitEnrolment($id)
    {
        list($response) = $this->getUnitEnrolmentWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getUnitEnrolmentWithHttpInfo
     *
     * Get UnitEnrolment by Id
     *
     * @param  int $id Id of the Unit Enrolment (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\UnitEnrolmentItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUnitEnrolmentWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\UnitEnrolmentItem';
        $request = $this->getUnitEnrolmentRequest($id);

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
                        '\Phwebs\Wisenet\Model\UnitEnrolmentItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUnitEnrolmentAsync
     *
     * Get UnitEnrolment by Id
     *
     * @param  int $id Id of the Unit Enrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUnitEnrolmentAsync($id)
    {
        return $this->getUnitEnrolmentAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUnitEnrolmentAsyncWithHttpInfo
     *
     * Get UnitEnrolment by Id
     *
     * @param  int $id Id of the Unit Enrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUnitEnrolmentAsyncWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\UnitEnrolmentItem';
        $request = $this->getUnitEnrolmentRequest($id);

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
     * Create request for operation 'getUnitEnrolment'
     *
     * @param  int $id Id of the Unit Enrolment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getUnitEnrolmentRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getUnitEnrolment'
            );
        }

        $resourcePath = '/unit-enrolments/{id}';
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
     * Operation getUnitEnrolments
     *
     * Get UnitEnrolments
     *
     * @param  string $course_enrolment_id_filter Filter by CourseEnrolmentId (optional)
     * @param  string $unit_offer_id_filter Filter by UnitOfferId (optional)
     * @param  int $learner_id_filter Filter by LearnerId (optional)
     * @param  \DateTime $last_modified_timestamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $enrolment_status_id_filter Filter by EnrolmentStatusId (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\UnitEnrolmentItem[]
     */
    public function getUnitEnrolments($course_enrolment_id_filter = null, $unit_offer_id_filter = null, $learner_id_filter = null, $last_modified_timestamp_filter = null, $skip = null, $take = null, $enrolment_status_id_filter = null)
    {
        list($response) = $this->getUnitEnrolmentsWithHttpInfo($course_enrolment_id_filter, $unit_offer_id_filter, $learner_id_filter, $last_modified_timestamp_filter, $skip, $take, $enrolment_status_id_filter);
        return $response;
    }

    /**
     * Operation getUnitEnrolmentsWithHttpInfo
     *
     * Get UnitEnrolments
     *
     * @param  string $course_enrolment_id_filter Filter by CourseEnrolmentId (optional)
     * @param  string $unit_offer_id_filter Filter by UnitOfferId (optional)
     * @param  int $learner_id_filter Filter by LearnerId (optional)
     * @param  \DateTime $last_modified_timestamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $enrolment_status_id_filter Filter by EnrolmentStatusId (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\UnitEnrolmentItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getUnitEnrolmentsWithHttpInfo($course_enrolment_id_filter = null, $unit_offer_id_filter = null, $learner_id_filter = null, $last_modified_timestamp_filter = null, $skip = null, $take = null, $enrolment_status_id_filter = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\UnitEnrolmentItem[]';
        $request = $this->getUnitEnrolmentsRequest($course_enrolment_id_filter, $unit_offer_id_filter, $learner_id_filter, $last_modified_timestamp_filter, $skip, $take, $enrolment_status_id_filter);

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
                        '\Phwebs\Wisenet\Model\UnitEnrolmentItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUnitEnrolmentsAsync
     *
     * Get UnitEnrolments
     *
     * @param  string $course_enrolment_id_filter Filter by CourseEnrolmentId (optional)
     * @param  string $unit_offer_id_filter Filter by UnitOfferId (optional)
     * @param  int $learner_id_filter Filter by LearnerId (optional)
     * @param  \DateTime $last_modified_timestamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $enrolment_status_id_filter Filter by EnrolmentStatusId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUnitEnrolmentsAsync($course_enrolment_id_filter = null, $unit_offer_id_filter = null, $learner_id_filter = null, $last_modified_timestamp_filter = null, $skip = null, $take = null, $enrolment_status_id_filter = null)
    {
        return $this->getUnitEnrolmentsAsyncWithHttpInfo($course_enrolment_id_filter, $unit_offer_id_filter, $learner_id_filter, $last_modified_timestamp_filter, $skip, $take, $enrolment_status_id_filter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUnitEnrolmentsAsyncWithHttpInfo
     *
     * Get UnitEnrolments
     *
     * @param  string $course_enrolment_id_filter Filter by CourseEnrolmentId (optional)
     * @param  string $unit_offer_id_filter Filter by UnitOfferId (optional)
     * @param  int $learner_id_filter Filter by LearnerId (optional)
     * @param  \DateTime $last_modified_timestamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $enrolment_status_id_filter Filter by EnrolmentStatusId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUnitEnrolmentsAsyncWithHttpInfo($course_enrolment_id_filter = null, $unit_offer_id_filter = null, $learner_id_filter = null, $last_modified_timestamp_filter = null, $skip = null, $take = null, $enrolment_status_id_filter = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\UnitEnrolmentItem[]';
        $request = $this->getUnitEnrolmentsRequest($course_enrolment_id_filter, $unit_offer_id_filter, $learner_id_filter, $last_modified_timestamp_filter, $skip, $take, $enrolment_status_id_filter);

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
     * Create request for operation 'getUnitEnrolments'
     *
     * @param  string $course_enrolment_id_filter Filter by CourseEnrolmentId (optional)
     * @param  string $unit_offer_id_filter Filter by UnitOfferId (optional)
     * @param  int $learner_id_filter Filter by LearnerId (optional)
     * @param  \DateTime $last_modified_timestamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $enrolment_status_id_filter Filter by EnrolmentStatusId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getUnitEnrolmentsRequest($course_enrolment_id_filter = null, $unit_offer_id_filter = null, $learner_id_filter = null, $last_modified_timestamp_filter = null, $skip = null, $take = null, $enrolment_status_id_filter = null)
    {

        $resourcePath = '/unit-enrolments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($course_enrolment_id_filter !== null) {
            $queryParams['courseEnrolmentIdFilter'] = ObjectSerializer::toQueryValue($course_enrolment_id_filter, null);
        }
        // query params
        if ($unit_offer_id_filter !== null) {
            $queryParams['unitOfferIdFilter'] = ObjectSerializer::toQueryValue($unit_offer_id_filter, null);
        }
        // query params
        if ($learner_id_filter !== null) {
            $queryParams['learnerIdFilter'] = ObjectSerializer::toQueryValue($learner_id_filter, 'int32');
        }
        // query params
        if ($last_modified_timestamp_filter !== null) {
            $queryParams['lastModifiedTimestampFilter'] = ObjectSerializer::toQueryValue($last_modified_timestamp_filter, 'date-time');
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
     * Operation patchUnitEnrolment
     *
     * Patch UnitEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on Unit Enrolment (required)
     * @param  int $id Id of Unit Enrolment to perform patch operations on (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\UnitEnrolmentItem
     */
    public function patchUnitEnrolment($body, $id)
    {
        list($response) = $this->patchUnitEnrolmentWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation patchUnitEnrolmentWithHttpInfo
     *
     * Patch UnitEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on Unit Enrolment (required)
     * @param  int $id Id of Unit Enrolment to perform patch operations on (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\UnitEnrolmentItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchUnitEnrolmentWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\UnitEnrolmentItem';
        $request = $this->patchUnitEnrolmentRequest($body, $id);

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
                        '\Phwebs\Wisenet\Model\UnitEnrolmentItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchUnitEnrolmentAsync
     *
     * Patch UnitEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on Unit Enrolment (required)
     * @param  int $id Id of Unit Enrolment to perform patch operations on (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchUnitEnrolmentAsync($body, $id)
    {
        return $this->patchUnitEnrolmentAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchUnitEnrolmentAsyncWithHttpInfo
     *
     * Patch UnitEnrolment
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on Unit Enrolment (required)
     * @param  int $id Id of Unit Enrolment to perform patch operations on (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchUnitEnrolmentAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\UnitEnrolmentItem';
        $request = $this->patchUnitEnrolmentRequest($body, $id);

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
     * Create request for operation 'patchUnitEnrolment'
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on Unit Enrolment (required)
     * @param  int $id Id of Unit Enrolment to perform patch operations on (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchUnitEnrolmentRequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling patchUnitEnrolment'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchUnitEnrolment'
            );
        }

        $resourcePath = '/unit-enrolments/{id}';
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
