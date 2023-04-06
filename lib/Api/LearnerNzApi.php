<?php
/**
 * LearnerNzApi
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
 * LearnerNzApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerNzApi
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
     * Operation getLearnerNZ
     *
     * Get LearnerNz by Id
     *
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerNzItem
     */
    public function getLearnerNZ($id)
    {
        list($response) = $this->getLearnerNZWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getLearnerNZWithHttpInfo
     *
     * Get LearnerNz by Id
     *
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerNzItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLearnerNZWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzItem';
        $request = $this->getLearnerNZRequest($id);

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
                        '\Phwebs\Wisenet\Model\LearnerNzItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLearnerNZAsync
     *
     * Get LearnerNz by Id
     *
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerNZAsync($id)
    {
        return $this->getLearnerNZAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLearnerNZAsyncWithHttpInfo
     *
     * Get LearnerNz by Id
     *
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerNZAsyncWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzItem';
        $request = $this->getLearnerNZRequest($id);

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
     * Create request for operation 'getLearnerNZ'
     *
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLearnerNZRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getLearnerNZ'
            );
        }

        $resourcePath = '/learnersNZ/{id}';
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
     * Operation getLearnerNZPersonal
     *
     * Get LearnerNzPersonal by Id
     *
     * @param  int $id Id of the LearnerNZPersonal (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerNzPersonal
     */
    public function getLearnerNZPersonal($id)
    {
        list($response) = $this->getLearnerNZPersonalWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getLearnerNZPersonalWithHttpInfo
     *
     * Get LearnerNzPersonal by Id
     *
     * @param  int $id Id of the LearnerNZPersonal (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerNzPersonal, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLearnerNZPersonalWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzPersonal';
        $request = $this->getLearnerNZPersonalRequest($id);

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
                        '\Phwebs\Wisenet\Model\LearnerNzPersonal',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLearnerNZPersonalAsync
     *
     * Get LearnerNzPersonal by Id
     *
     * @param  int $id Id of the LearnerNZPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerNZPersonalAsync($id)
    {
        return $this->getLearnerNZPersonalAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLearnerNZPersonalAsyncWithHttpInfo
     *
     * Get LearnerNzPersonal by Id
     *
     * @param  int $id Id of the LearnerNZPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerNZPersonalAsyncWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzPersonal';
        $request = $this->getLearnerNZPersonalRequest($id);

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
     * Create request for operation 'getLearnerNZPersonal'
     *
     * @param  int $id Id of the LearnerNZPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLearnerNZPersonalRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getLearnerNZPersonal'
            );
        }

        $resourcePath = '/learnersNZ/{id}/personal';
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
     * Operation getLearnerNzList
     *
     * Get Basic Learner List
     *
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $learner_username_filter Filter by LearnerUsername (PortalUsername) (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerBasic[]
     */
    public function getLearnerNzList($learner_number_filter = null, $learner_username_filter = null, $last_modified_time_stamp_filter = null, $sync_to_xero_filter = null, $skip = null, $take = null)
    {
        list($response) = $this->getLearnerNzListWithHttpInfo($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $skip, $take);
        return $response;
    }

    /**
     * Operation getLearnerNzListWithHttpInfo
     *
     * Get Basic Learner List
     *
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $learner_username_filter Filter by LearnerUsername (PortalUsername) (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerBasic[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getLearnerNzListWithHttpInfo($learner_number_filter = null, $learner_username_filter = null, $last_modified_time_stamp_filter = null, $sync_to_xero_filter = null, $skip = null, $take = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerBasic[]';
        $request = $this->getLearnerNzListRequest($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $skip, $take);

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
     * Operation getLearnerNzListAsync
     *
     * Get Basic Learner List
     *
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $learner_username_filter Filter by LearnerUsername (PortalUsername) (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerNzListAsync($learner_number_filter = null, $learner_username_filter = null, $last_modified_time_stamp_filter = null, $sync_to_xero_filter = null, $skip = null, $take = null)
    {
        return $this->getLearnerNzListAsyncWithHttpInfo($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $skip, $take)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLearnerNzListAsyncWithHttpInfo
     *
     * Get Basic Learner List
     *
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $learner_username_filter Filter by LearnerUsername (PortalUsername) (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnerNzListAsyncWithHttpInfo($learner_number_filter = null, $learner_username_filter = null, $last_modified_time_stamp_filter = null, $sync_to_xero_filter = null, $skip = null, $take = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerBasic[]';
        $request = $this->getLearnerNzListRequest($learner_number_filter, $learner_username_filter, $last_modified_time_stamp_filter, $sync_to_xero_filter, $skip, $take);

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
     * Create request for operation 'getLearnerNzList'
     *
     * @param  string $learner_number_filter Filter by LearnerNumber (RefInternal) (optional)
     * @param  string $learner_username_filter Filter by LearnerUsername (PortalUsername) (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $sync_to_xero_filter Filter by SyncToXero (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLearnerNzListRequest($learner_number_filter = null, $learner_username_filter = null, $last_modified_time_stamp_filter = null, $sync_to_xero_filter = null, $skip = null, $take = null)
    {

        $resourcePath = '/learnersNZ/list';
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
     * Operation getLearnersNZ
     *
     * Get LearnersNZ
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
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerNzItem[]
     */
    public function getLearnersNZ($search = null, $last_modified_time_stamp_filter = null, $is_active_filter = null, $sync_to_xero_filter = null, $learner_number_filter = null, $email_address_filter = null, $mobile_filter = null, $learner_alt1_number_filter = null, $learner_alt2_number_filter = null, $skip = null, $take = null)
    {
        list($response) = $this->getLearnersNZWithHttpInfo($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $skip, $take);
        return $response;
    }

    /**
     * Operation getLearnersNZWithHttpInfo
     *
     * Get LearnersNZ
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
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerNzItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getLearnersNZWithHttpInfo($search = null, $last_modified_time_stamp_filter = null, $is_active_filter = null, $sync_to_xero_filter = null, $learner_number_filter = null, $email_address_filter = null, $mobile_filter = null, $learner_alt1_number_filter = null, $learner_alt2_number_filter = null, $skip = null, $take = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzItem[]';
        $request = $this->getLearnersNZRequest($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $skip, $take);

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
                        '\Phwebs\Wisenet\Model\LearnerNzItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLearnersNZAsync
     *
     * Get LearnersNZ
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
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnersNZAsync($search = null, $last_modified_time_stamp_filter = null, $is_active_filter = null, $sync_to_xero_filter = null, $learner_number_filter = null, $email_address_filter = null, $mobile_filter = null, $learner_alt1_number_filter = null, $learner_alt2_number_filter = null, $skip = null, $take = null)
    {
        return $this->getLearnersNZAsyncWithHttpInfo($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $skip, $take)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLearnersNZAsyncWithHttpInfo
     *
     * Get LearnersNZ
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
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLearnersNZAsyncWithHttpInfo($search = null, $last_modified_time_stamp_filter = null, $is_active_filter = null, $sync_to_xero_filter = null, $learner_number_filter = null, $email_address_filter = null, $mobile_filter = null, $learner_alt1_number_filter = null, $learner_alt2_number_filter = null, $skip = null, $take = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzItem[]';
        $request = $this->getLearnersNZRequest($search, $last_modified_time_stamp_filter, $is_active_filter, $sync_to_xero_filter, $learner_number_filter, $email_address_filter, $mobile_filter, $learner_alt1_number_filter, $learner_alt2_number_filter, $skip, $take);

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
     * Create request for operation 'getLearnersNZ'
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
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLearnersNZRequest($search = null, $last_modified_time_stamp_filter = null, $is_active_filter = null, $sync_to_xero_filter = null, $learner_number_filter = null, $email_address_filter = null, $mobile_filter = null, $learner_alt1_number_filter = null, $learner_alt2_number_filter = null, $skip = null, $take = null)
    {

        $resourcePath = '/learnersNZ';
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
     * Operation patchLearnerNZ
     *
     * Patch LearnerNZ
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body Json Patch Document operations to perform on learner (required)
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerNzItem
     */
    public function patchLearnerNZ($body, $id)
    {
        list($response) = $this->patchLearnerNZWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation patchLearnerNZWithHttpInfo
     *
     * Patch LearnerNZ
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body Json Patch Document operations to perform on learner (required)
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerNzItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchLearnerNZWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzItem';
        $request = $this->patchLearnerNZRequest($body, $id);

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
                        '\Phwebs\Wisenet\Model\LearnerNzItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchLearnerNZAsync
     *
     * Patch LearnerNZ
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body Json Patch Document operations to perform on learner (required)
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchLearnerNZAsync($body, $id)
    {
        return $this->patchLearnerNZAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchLearnerNZAsyncWithHttpInfo
     *
     * Patch LearnerNZ
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body Json Patch Document operations to perform on learner (required)
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchLearnerNZAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzItem';
        $request = $this->patchLearnerNZRequest($body, $id);

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
     * Create request for operation 'patchLearnerNZ'
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body Json Patch Document operations to perform on learner (required)
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchLearnerNZRequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling patchLearnerNZ'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchLearnerNZ'
            );
        }

        $resourcePath = '/learnersNZ/{id}';
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
     * Operation postLearnersNZ
     *
     * Post LearnersNZ
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNz[] $body The learners. (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerNzItem[]
     */
    public function postLearnersNZ($body)
    {
        list($response) = $this->postLearnersNZWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation postLearnersNZWithHttpInfo
     *
     * Post LearnersNZ
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNz[] $body The learners. (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerNzItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function postLearnersNZWithHttpInfo($body)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzItem[]';
        $request = $this->postLearnersNZRequest($body);

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
                        '\Phwebs\Wisenet\Model\LearnerNzItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postLearnersNZAsync
     *
     * Post LearnersNZ
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNz[] $body The learners. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postLearnersNZAsync($body)
    {
        return $this->postLearnersNZAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postLearnersNZAsyncWithHttpInfo
     *
     * Post LearnersNZ
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNz[] $body The learners. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postLearnersNZAsyncWithHttpInfo($body)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzItem[]';
        $request = $this->postLearnersNZRequest($body);

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
     * Create request for operation 'postLearnersNZ'
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNz[] $body The learners. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postLearnersNZRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling postLearnersNZ'
            );
        }

        $resourcePath = '/learnersNZ';
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
     * Operation replaceLearnerNZ
     *
     * Replace LearnerNZ
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNz $body New learner object to replace learner with (required)
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerNzItem
     */
    public function replaceLearnerNZ($body, $id)
    {
        list($response) = $this->replaceLearnerNZWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation replaceLearnerNZWithHttpInfo
     *
     * Replace LearnerNZ
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNz $body New learner object to replace learner with (required)
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerNzItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceLearnerNZWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzItem';
        $request = $this->replaceLearnerNZRequest($body, $id);

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
                        '\Phwebs\Wisenet\Model\LearnerNzItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation replaceLearnerNZAsync
     *
     * Replace LearnerNZ
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNz $body New learner object to replace learner with (required)
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceLearnerNZAsync($body, $id)
    {
        return $this->replaceLearnerNZAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation replaceLearnerNZAsyncWithHttpInfo
     *
     * Replace LearnerNZ
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNz $body New learner object to replace learner with (required)
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceLearnerNZAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzItem';
        $request = $this->replaceLearnerNZRequest($body, $id);

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
     * Create request for operation 'replaceLearnerNZ'
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNz $body New learner object to replace learner with (required)
     * @param  int $id Id of the LearnerNZ (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function replaceLearnerNZRequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling replaceLearnerNZ'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling replaceLearnerNZ'
            );
        }

        $resourcePath = '/learnersNZ/{id}';
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
     * Operation replaceLearnerNZPersonal
     *
     * Replace LearnerNZPersonal
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNzPersonal $body Source learner personal object to replace target learner&#x27;s personal fields (required)
     * @param  int $id Id of the LearnerNZPersonal (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\LearnerNzPersonalItem
     */
    public function replaceLearnerNZPersonal($body, $id)
    {
        list($response) = $this->replaceLearnerNZPersonalWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation replaceLearnerNZPersonalWithHttpInfo
     *
     * Replace LearnerNZPersonal
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNzPersonal $body Source learner personal object to replace target learner&#x27;s personal fields (required)
     * @param  int $id Id of the LearnerNZPersonal (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\LearnerNzPersonalItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceLearnerNZPersonalWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzPersonalItem';
        $request = $this->replaceLearnerNZPersonalRequest($body, $id);

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
                        '\Phwebs\Wisenet\Model\LearnerNzPersonalItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation replaceLearnerNZPersonalAsync
     *
     * Replace LearnerNZPersonal
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNzPersonal $body Source learner personal object to replace target learner&#x27;s personal fields (required)
     * @param  int $id Id of the LearnerNZPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceLearnerNZPersonalAsync($body, $id)
    {
        return $this->replaceLearnerNZPersonalAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation replaceLearnerNZPersonalAsyncWithHttpInfo
     *
     * Replace LearnerNZPersonal
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNzPersonal $body Source learner personal object to replace target learner&#x27;s personal fields (required)
     * @param  int $id Id of the LearnerNZPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replaceLearnerNZPersonalAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\LearnerNzPersonalItem';
        $request = $this->replaceLearnerNZPersonalRequest($body, $id);

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
     * Create request for operation 'replaceLearnerNZPersonal'
     *
     * @param  \Phwebs\Wisenet\Model\LearnerNzPersonal $body Source learner personal object to replace target learner&#x27;s personal fields (required)
     * @param  int $id Id of the LearnerNZPersonal (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function replaceLearnerNZPersonalRequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling replaceLearnerNZPersonal'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling replaceLearnerNZPersonal'
            );
        }

        $resourcePath = '/learnersNZ/{id}/personal';
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
