<?php
/**
 * LearnerAuApi
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
 * LearnerAuApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerAuApi
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
     * Operation getLearnerAU
     *
     * Get LearnerAu by Id
     *
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerAuItem
     */
    public function getLearnerAU($id)
    {
        list($response) = $this->getLearnerAUWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getLearnerAUWithHttpInfo
     *
     * Get LearnerAu by Id
     *
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerAuItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLearnerAUWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuItem';
        $request = $this->getLearnerAURequest($id);

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
                        '\Phwebs\Wisenet\Model\LearnerAuItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLearnerAUAsync
     *
     * Get LearnerAu by Id
     *
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerAUAsync($id)
    {
        return $this->getLearnerAUAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLearnerAUAsyncWithHttpInfo
     *
     * Get LearnerAu by Id
     *
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerAUAsyncWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuItem';
        $request = $this->getLearnerAURequest($id);

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
     * Create request for operation 'getLearnerAU'
     *
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLearnerAURequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getLearnerAU'
            );
        }

        $resourcePath = '/learnersAU/{id}';
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
     * Operation getLearnerAUPersonal
     *
     * Get LearnerAuPersonal by Id
     *
     * @param  int $id Id of the LearnerAUPersonal (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerAuPersonalItem
     */
    public function getLearnerAUPersonal($id)
    {
        list($response) = $this->getLearnerAUPersonalWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getLearnerAUPersonalWithHttpInfo
     *
     * Get LearnerAuPersonal by Id
     *
     * @param  int $id Id of the LearnerAUPersonal (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerAuPersonalItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLearnerAUPersonalWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuPersonalItem';
        $request = $this->getLearnerAUPersonalRequest($id);

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
                        '\Phwebs\Wisenet\Model\LearnerAuPersonalItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLearnerAUPersonalAsync
     *
     * Get LearnerAuPersonal by Id
     *
     * @param  int $id Id of the LearnerAUPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerAUPersonalAsync($id)
    {
        return $this->getLearnerAUPersonalAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLearnerAUPersonalAsyncWithHttpInfo
     *
     * Get LearnerAuPersonal by Id
     *
     * @param  int $id Id of the LearnerAUPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerAUPersonalAsyncWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuPersonalItem';
        $request = $this->getLearnerAUPersonalRequest($id);

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
     * Create request for operation 'getLearnerAUPersonal'
     *
     * @param  int $id Id of the LearnerAUPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLearnerAUPersonalRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getLearnerAUPersonal'
            );
        }

        $resourcePath = '/learnersAU/{id}/personal';
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
     * Operation getLearnerAuList
     *
     * Get Basic Learner List
     *
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $learner_username_filter Filter by LearnerUsername (PortalUsername) (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  string $is_active_filter Filter by IsActive (optional)
     * @param  string $usi_requires_validation_filter Filter by Usi validation (optional)
     * @param  string $search This does a string search on the FirstName and LastName (optional)
     * @param  string $unique_student_identifier_filter Filter by UniqueStudentIdentifierFilter (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerBasic[]
     */
    public function getLearnerAuList($learner_number_filter = null, $learner_username_filter = null, $last_modified_time_stamp_filter = null, $sync_to_xero_filter = null, $is_active_filter = null, $usi_requires_validation_filter = null, $search = null, $unique_student_identifier_filter = null, $skip = null, $take = null)
    {
        list($response) = $this->getLearnerAuListWithHttpInfo($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $is_active_filter, $usi_requires_validation_filter, $search, $unique_student_identifier_filter, $skip, $take);
        return $response;
    }

    /**
     * Operation getLearnerAuListWithHttpInfo
     *
     * Get Basic Learner List
     *
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $learner_username_filter Filter by LearnerUsername (PortalUsername) (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  string $is_active_filter Filter by IsActive (optional)
     * @param  string $usi_requires_validation_filter Filter by Usi validation (optional)
     * @param  string $search This does a string search on the FirstName and LastName (optional)
     * @param  string $unique_student_identifier_filter Filter by UniqueStudentIdentifierFilter (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerBasic[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getLearnerAuListWithHttpInfo($learner_number_filter = null, $learner_username_filter = null, $last_modified_time_stamp_filter = null, $sync_to_xero_filter = null, $is_active_filter = null, $usi_requires_validation_filter = null, $search = null, $unique_student_identifier_filter = null, $skip = null, $take = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerBasic[]';
        $request = $this->getLearnerAuListRequest($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $is_active_filter, $usi_requires_validation_filter, $search, $unique_student_identifier_filter, $skip, $take);

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
                        '\Phwebs\Wisenet\Model\LearnerBasic[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLearnerAuListAsync
     *
     * Get Basic Learner List
     *
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $learner_username_filter Filter by LearnerUsername (PortalUsername) (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  string $is_active_filter Filter by IsActive (optional)
     * @param  string $usi_requires_validation_filter Filter by Usi validation (optional)
     * @param  string $search This does a string search on the FirstName and LastName (optional)
     * @param  string $unique_student_identifier_filter Filter by UniqueStudentIdentifierFilter (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerAuListAsync($learner_number_filter = null, $learner_username_filter = null, $last_modified_time_stamp_filter = null, $sync_to_xero_filter = null, $is_active_filter = null, $usi_requires_validation_filter = null, $search = null, $unique_student_identifier_filter = null, $skip = null, $take = null)
    {
        return $this->getLearnerAuListAsyncWithHttpInfo($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $is_active_filter, $usi_requires_validation_filter, $search, $unique_student_identifier_filter, $skip, $take)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLearnerAuListAsyncWithHttpInfo
     *
     * Get Basic Learner List
     *
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $learner_username_filter Filter by LearnerUsername (PortalUsername) (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  string $is_active_filter Filter by IsActive (optional)
     * @param  string $usi_requires_validation_filter Filter by Usi validation (optional)
     * @param  string $search This does a string search on the FirstName and LastName (optional)
     * @param  string $unique_student_identifier_filter Filter by UniqueStudentIdentifierFilter (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerAuListAsyncWithHttpInfo($learner_number_filter = null, $learner_username_filter = null, $last_modified_time_stamp_filter = null, $sync_to_xero_filter = null, $is_active_filter = null, $usi_requires_validation_filter = null, $search = null, $unique_student_identifier_filter = null, $skip = null, $take = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerBasic[]';
        $request = $this->getLearnerAuListRequest($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $is_active_filter, $usi_requires_validation_filter, $search, $unique_student_identifier_filter, $skip, $take);

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
     * Create request for operation 'getLearnerAuList'
     *
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $learner_username_filter Filter by LearnerUsername (PortalUsername) (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  string $is_active_filter Filter by IsActive (optional)
     * @param  string $usi_requires_validation_filter Filter by Usi validation (optional)
     * @param  string $search This does a string search on the FirstName and LastName (optional)
     * @param  string $unique_student_identifier_filter Filter by UniqueStudentIdentifierFilter (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLearnerAuListRequest($learner_number_filter = null, $learner_username_filter = null, $last_modified_time_stamp_filter = null, $sync_to_xero_filter = null, $is_active_filter = null, $usi_requires_validation_filter = null, $search = null, $unique_student_identifier_filter = null, $skip = null, $take = null)
    {

        $resourcePath = '/learnersAU/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($learner_number_filter !== null) {
            $queryParams['learnerNumberFilter'] = ObjectSerializer::toQueryValue($learner_number_filter, null);
        }
        // query params
        if ($learner_username_filter !== null) {
            $queryParams['learnerUsernameFilter'] = ObjectSerializer::toQueryValue($learner_username_filter, null);
        }
        // query params
        if ($last_modified_time_stamp_filter !== null) {
            $queryParams['lastModifiedTimeStampFilter'] = ObjectSerializer::toQueryValue($last_modified_time_stamp_filter, null);
        }
        // query params
        if ($sync_to_xero_filter !== null) {
            $queryParams['syncToXeroFilter'] = ObjectSerializer::toQueryValue($sync_to_xero_filter, null);
        }
        // query params
        if ($is_active_filter !== null) {
            $queryParams['isActiveFilter'] = ObjectSerializer::toQueryValue($is_active_filter, null);
        }
        // query params
        if ($usi_requires_validation_filter !== null) {
            $queryParams['usiRequiresValidationFilter'] = ObjectSerializer::toQueryValue($usi_requires_validation_filter, null);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search, null);
        }
        // query params
        if ($unique_student_identifier_filter !== null) {
            $queryParams['uniqueStudentIdentifierFilter'] = ObjectSerializer::toQueryValue($unique_student_identifier_filter, null);
        }
        // query params
        if ($skip !== null) {
            $queryParams['skip'] = ObjectSerializer::toQueryValue($skip, 'int32');
        }
        // query params
        if ($take !== null) {
            $queryParams['take'] = ObjectSerializer::toQueryValue($take, 'int32');
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
     * Operation getLearnersAU
     *
     * Returns all LearnerAU records.
     *
     * @param  string $search This does a string search on the FirstName and LastName (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $is_active_filter Filter by IsActive (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $email_address_filter Filter by Email Address (optional)
     * @param  string $mobile_filter Filter by Mobile Number (optional)
     * @param  string $learner_alt1_number_filter Filter by Learner Alt 1 Number (optional)
     * @param  string $learner_alt2_number_filter Filter by Learner Alt 2 Number (optional)
     * @param  string $unique_student_identifier_filter Filter by UniqueStudentIdentifierFilter (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerAuItem[]
     */
    public function getLearnersAU($search = null, $last_modified_time_stamp_filter = null, $is_active_filter = null, $sync_to_xero_filter = null, $learner_number_filter = null, $email_address_filter = null, $mobile_filter = null, $learner_alt1_number_filter = null, $learner_alt2_number_filter = null, $unique_student_identifier_filter = null, $skip = null, $take = null)
    {
        list($response) = $this->getLearnersAUWithHttpInfo($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $unique_student_identifier_filter, $skip, $take);
        return $response;
    }

    /**
     * Operation getLearnersAUWithHttpInfo
     *
     * Returns all LearnerAU records.
     *
     * @param  string $search This does a string search on the FirstName and LastName (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $is_active_filter Filter by IsActive (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $email_address_filter Filter by Email Address (optional)
     * @param  string $mobile_filter Filter by Mobile Number (optional)
     * @param  string $learner_alt1_number_filter Filter by Learner Alt 1 Number (optional)
     * @param  string $learner_alt2_number_filter Filter by Learner Alt 2 Number (optional)
     * @param  string $unique_student_identifier_filter Filter by UniqueStudentIdentifierFilter (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerAuItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getLearnersAUWithHttpInfo($search = null, $last_modified_time_stamp_filter = null, $is_active_filter = null, $sync_to_xero_filter = null, $learner_number_filter = null, $email_address_filter = null, $mobile_filter = null, $learner_alt1_number_filter = null, $learner_alt2_number_filter = null, $unique_student_identifier_filter = null, $skip = null, $take = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuItem[]';
        $request = $this->getLearnersAURequest($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $unique_student_identifier_filter, $skip, $take);

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
                        '\Phwebs\Wisenet\Model\LearnerAuItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLearnersAUAsync
     *
     * Returns all LearnerAU records.
     *
     * @param  string $search This does a string search on the FirstName and LastName (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $is_active_filter Filter by IsActive (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $email_address_filter Filter by Email Address (optional)
     * @param  string $mobile_filter Filter by Mobile Number (optional)
     * @param  string $learner_alt1_number_filter Filter by Learner Alt 1 Number (optional)
     * @param  string $learner_alt2_number_filter Filter by Learner Alt 2 Number (optional)
     * @param  string $unique_student_identifier_filter Filter by UniqueStudentIdentifierFilter (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnersAUAsync($search = null, $last_modified_time_stamp_filter = null, $is_active_filter = null, $sync_to_xero_filter = null, $learner_number_filter = null, $email_address_filter = null, $mobile_filter = null, $learner_alt1_number_filter = null, $learner_alt2_number_filter = null, $unique_student_identifier_filter = null, $skip = null, $take = null)
    {
        return $this->getLearnersAUAsyncWithHttpInfo($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $unique_student_identifier_filter, $skip, $take)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLearnersAUAsyncWithHttpInfo
     *
     * Returns all LearnerAU records.
     *
     * @param  string $search This does a string search on the FirstName and LastName (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $is_active_filter Filter by IsActive (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $email_address_filter Filter by Email Address (optional)
     * @param  string $mobile_filter Filter by Mobile Number (optional)
     * @param  string $learner_alt1_number_filter Filter by Learner Alt 1 Number (optional)
     * @param  string $learner_alt2_number_filter Filter by Learner Alt 2 Number (optional)
     * @param  string $unique_student_identifier_filter Filter by UniqueStudentIdentifierFilter (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnersAUAsyncWithHttpInfo($search = null, $last_modified_time_stamp_filter = null, $is_active_filter = null, $sync_to_xero_filter = null, $learner_number_filter = null, $email_address_filter = null, $mobile_filter = null, $learner_alt1_number_filter = null, $learner_alt2_number_filter = null, $unique_student_identifier_filter = null, $skip = null, $take = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuItem[]';
        $request = $this->getLearnersAURequest($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $unique_student_identifier_filter, $skip, $take);

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
     * Create request for operation 'getLearnersAU'
     *
     * @param  string $search This does a string search on the FirstName and LastName (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $is_active_filter Filter by IsActive (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $email_address_filter Filter by Email Address (optional)
     * @param  string $mobile_filter Filter by Mobile Number (optional)
     * @param  string $learner_alt1_number_filter Filter by Learner Alt 1 Number (optional)
     * @param  string $learner_alt2_number_filter Filter by Learner Alt 2 Number (optional)
     * @param  string $unique_student_identifier_filter Filter by UniqueStudentIdentifierFilter (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLearnersAURequest($search = null, $last_modified_time_stamp_filter = null, $is_active_filter = null, $sync_to_xero_filter = null, $learner_number_filter = null, $email_address_filter = null, $mobile_filter = null, $learner_alt1_number_filter = null, $learner_alt2_number_filter = null, $unique_student_identifier_filter = null, $skip = null, $take = null)
    {

        $resourcePath = '/learnersAU';
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
        if ($last_modified_time_stamp_filter !== null) {
            $queryParams['lastModifiedTimeStampFilter'] = ObjectSerializer::toQueryValue($last_modified_time_stamp_filter, null);
        }
        // query params
        if ($is_active_filter !== null) {
            $queryParams['isActiveFilter'] = ObjectSerializer::toQueryValue($is_active_filter, null);
        }
        // query params
        if ($sync_to_xero_filter !== null) {
            $queryParams['syncToXeroFilter'] = ObjectSerializer::toQueryValue($sync_to_xero_filter, null);
        }
        // query params
        if ($learner_number_filter !== null) {
            $queryParams['learnerNumberFilter'] = ObjectSerializer::toQueryValue($learner_number_filter, null);
        }
        // query params
        if ($email_address_filter !== null) {
            $queryParams['emailAddressFilter'] = ObjectSerializer::toQueryValue($email_address_filter, null);
        }
        // query params
        if ($mobile_filter !== null) {
            $queryParams['mobileFilter'] = ObjectSerializer::toQueryValue($mobile_filter, null);
        }
        // query params
        if ($learner_alt1_number_filter !== null) {
            $queryParams['learnerAlt1NumberFilter'] = ObjectSerializer::toQueryValue($learner_alt1_number_filter, null);
        }
        // query params
        if ($learner_alt2_number_filter !== null) {
            $queryParams['learnerAlt2NumberFilter'] = ObjectSerializer::toQueryValue($learner_alt2_number_filter, null);
        }
        // query params
        if ($unique_student_identifier_filter !== null) {
            $queryParams['uniqueStudentIdentifierFilter'] = ObjectSerializer::toQueryValue($unique_student_identifier_filter, null);
        }
        // query params
        if ($skip !== null) {
            $queryParams['skip'] = ObjectSerializer::toQueryValue($skip, 'int32');
        }
        // query params
        if ($take !== null) {
            $queryParams['take'] = ObjectSerializer::toQueryValue($take, 'int32');
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
     * Operation patchLearnerAU
     *
     * Patch LearnerAU
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body Json Patch Document operations to perform on learner (required)
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerAu
     */
    public function patchLearnerAU($body, $id)
    {
        list($response) = $this->patchLearnerAUWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation patchLearnerAUWithHttpInfo
     *
     * Patch LearnerAU
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body Json Patch Document operations to perform on learner (required)
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerAu, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchLearnerAUWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAu';
        $request = $this->patchLearnerAURequest($body, $id);

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
                        '\Phwebs\Wisenet\Model\LearnerAu',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchLearnerAUAsync
     *
     * Patch LearnerAU
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body Json Patch Document operations to perform on learner (required)
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchLearnerAUAsync($body, $id)
    {
        return $this->patchLearnerAUAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchLearnerAUAsyncWithHttpInfo
     *
     * Patch LearnerAU
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body Json Patch Document operations to perform on learner (required)
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchLearnerAUAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAu';
        $request = $this->patchLearnerAURequest($body, $id);

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
     * Create request for operation 'patchLearnerAU'
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body Json Patch Document operations to perform on learner (required)
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchLearnerAURequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling patchLearnerAU'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchLearnerAU'
            );
        }

        $resourcePath = '/learnersAU/{id}';
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
     * Operation postLearnersAU
     *
     * Post LearnersAU
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAu[] $body The learners. (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerAuItem[]
     */
    public function postLearnersAU($body)
    {
        list($response) = $this->postLearnersAUWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation postLearnersAUWithHttpInfo
     *
     * Post LearnersAU
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAu[] $body The learners. (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerAuItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function postLearnersAUWithHttpInfo($body)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuItem[]';
        $request = $this->postLearnersAURequest($body);

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
                        '\Phwebs\Wisenet\Model\LearnerAuItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postLearnersAUAsync
     *
     * Post LearnersAU
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAu[] $body The learners. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postLearnersAUAsync($body)
    {
        return $this->postLearnersAUAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postLearnersAUAsyncWithHttpInfo
     *
     * Post LearnersAU
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAu[] $body The learners. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postLearnersAUAsyncWithHttpInfo($body)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuItem[]';
        $request = $this->postLearnersAURequest($body);

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
     * Create request for operation 'postLearnersAU'
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAu[] $body The learners. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postLearnersAURequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling postLearnersAU'
            );
        }

        $resourcePath = '/learnersAU';
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
     * Operation replaceLearnerAU
     *
     * Replace LearnerAU
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAu $body New learner object to replace learner with (required)
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerAuItem
     */
    public function replaceLearnerAU($body, $id)
    {
        list($response) = $this->replaceLearnerAUWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation replaceLearnerAUWithHttpInfo
     *
     * Replace LearnerAU
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAu $body New learner object to replace learner with (required)
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerAuItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceLearnerAUWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuItem';
        $request = $this->replaceLearnerAURequest($body, $id);

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
                        '\Phwebs\Wisenet\Model\LearnerAuItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation replaceLearnerAUAsync
     *
     * Replace LearnerAU
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAu $body New learner object to replace learner with (required)
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceLearnerAUAsync($body, $id)
    {
        return $this->replaceLearnerAUAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation replaceLearnerAUAsyncWithHttpInfo
     *
     * Replace LearnerAU
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAu $body New learner object to replace learner with (required)
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceLearnerAUAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuItem';
        $request = $this->replaceLearnerAURequest($body, $id);

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
     * Create request for operation 'replaceLearnerAU'
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAu $body New learner object to replace learner with (required)
     * @param  int $id Id of the LearnerAU (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function replaceLearnerAURequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling replaceLearnerAU'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling replaceLearnerAU'
            );
        }

        $resourcePath = '/learnersAU/{id}';
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
     * Operation replaceLearnerAUPersonal
     *
     * Replace LearnerAUPersonal
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAuPersonal $body Source learner personal object to replace target learner&#x27;s personal fields (required)
     * @param  int $id Id of the LearnerAUPersonal (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerAuPersonalItem
     */
    public function replaceLearnerAUPersonal($body, $id)
    {
        list($response) = $this->replaceLearnerAUPersonalWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation replaceLearnerAUPersonalWithHttpInfo
     *
     * Replace LearnerAUPersonal
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAuPersonal $body Source learner personal object to replace target learner&#x27;s personal fields (required)
     * @param  int $id Id of the LearnerAUPersonal (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerAuPersonalItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceLearnerAUPersonalWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuPersonalItem';
        $request = $this->replaceLearnerAUPersonalRequest($body, $id);

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
                        '\Phwebs\Wisenet\Model\LearnerAuPersonalItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation replaceLearnerAUPersonalAsync
     *
     * Replace LearnerAUPersonal
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAuPersonal $body Source learner personal object to replace target learner&#x27;s personal fields (required)
     * @param  int $id Id of the LearnerAUPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceLearnerAUPersonalAsync($body, $id)
    {
        return $this->replaceLearnerAUPersonalAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation replaceLearnerAUPersonalAsyncWithHttpInfo
     *
     * Replace LearnerAUPersonal
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAuPersonal $body Source learner personal object to replace target learner&#x27;s personal fields (required)
     * @param  int $id Id of the LearnerAUPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceLearnerAUPersonalAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerAuPersonalItem';
        $request = $this->replaceLearnerAUPersonalRequest($body, $id);

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
     * Create request for operation 'replaceLearnerAUPersonal'
     *
     * @param  \Phwebs\Wisenet\Model\LearnerAuPersonal $body Source learner personal object to replace target learner&#x27;s personal fields (required)
     * @param  int $id Id of the LearnerAUPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function replaceLearnerAUPersonalRequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling replaceLearnerAUPersonal'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling replaceLearnerAUPersonal'
            );
        }

        $resourcePath = '/learnersAU/{id}/personal';
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
