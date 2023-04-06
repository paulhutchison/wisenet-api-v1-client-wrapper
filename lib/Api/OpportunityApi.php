<?php
/**
 * OpportunityApi
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
 * OpportunityApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OpportunityApi
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
     * Operation createOpportunities
     *
     * Create Opportunities
     *
     * @param  \Phwebs\Wisenet\Model\Opportunity[] $body Opportunity objects to add (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\OpportunityItem[]
     */
    public function createOpportunities($body)
    {
        list($response) = $this->createOpportunitiesWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createOpportunitiesWithHttpInfo
     *
     * Create Opportunities
     *
     * @param  \Phwebs\Wisenet\Model\Opportunity[] $body Opportunity objects to add (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\OpportunityItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function createOpportunitiesWithHttpInfo($body)
    {
        $returnType = '\Phwebs\Wisenet\Model\OpportunityItem[]';
        $request = $this->createOpportunitiesRequest($body);

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
                        '\Phwebs\Wisenet\Model\OpportunityItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createOpportunitiesAsync
     *
     * Create Opportunities
     *
     * @param  \Phwebs\Wisenet\Model\Opportunity[] $body Opportunity objects to add (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOpportunitiesAsync($body)
    {
        return $this->createOpportunitiesAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createOpportunitiesAsyncWithHttpInfo
     *
     * Create Opportunities
     *
     * @param  \Phwebs\Wisenet\Model\Opportunity[] $body Opportunity objects to add (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOpportunitiesAsyncWithHttpInfo($body)
    {
        $returnType = '\Phwebs\Wisenet\Model\OpportunityItem[]';
        $request = $this->createOpportunitiesRequest($body);

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
     * Create request for operation 'createOpportunities'
     *
     * @param  \Phwebs\Wisenet\Model\Opportunity[] $body Opportunity objects to add (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createOpportunitiesRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createOpportunities'
            );
        }

        $resourcePath = '/opportunities';
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
     * Operation getOpportunities
     *
     * Get Opportunities
     *
     * @param  string $sales_contact_id_filter Filter by SalesContactId (optional)
     * @param  string $search Search Opportunity by Description (optional)
     * @param  string $close_date_filter Filter by CloseDate (allows additional filter operators as per above) (optional)
     * @param  string $opportunity_stage_id_filter Filter by OpportunityStageId (optional)
     * @param  string $owner_id_filter Filter by OwnerId (optional)
     * @param  string $paging_group Group results by this field. Valid values(s) are &#x27;OpportunityStageId&#x27;. Using this parameter means paging will be per pagingGroup. E.g. Take 30 records per OpportunityStageId (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $sort Field name to sort opportunities by.  Supported fields are CloseDate, Amount and LastModifiedTimeStamp. Default sorting is by LastModifiedTimeStamp. (optional)
     * @param  string $order Order in which opportunities are sorted.  Supported orders are asc and desc. Default sorting is by asc. (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $opportunity_stage_win_probability_id_filter Filter by OpportunityStageWinProbabilityId (optional)
     * @param  string $created_on_filter Filter by CreatedOn (optional)
     * @param  string $pipeline_id_filter Filter by PipelineId (optional)
     * @param  string $tag_id_filter Filter by tag ids (optional)
     * @param  string $amount_filter Filter by Amount (optional)
     * @param  string $previous_identifier_filter Filter by PreviousIdentifier (optional)
     * @param  string $opportunity_source_id_filter Filter by OpportunitySourceId (optional)
     * @param  string $opportunity_type_id_filter Filter by OpportunityTypeId (optional)
     * @param  string $close_lost_reason_id_filter Filter by CloseLostReasonId (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\OpportunityItem[]
     */
    public function getOpportunities($sales_contact_id_filter = null, $search = null, $close_date_filter = null, $opportunity_stage_id_filter = null, $owner_id_filter = null, $paging_group = null, $skip = null, $take = null, $sort = null, $order = null, $last_modified_time_stamp_filter = null, $opportunity_stage_win_probability_id_filter = null, $created_on_filter = null, $pipeline_id_filter = null, $tag_id_filter = null, $amount_filter = null, $previous_identifier_filter = null, $opportunity_source_id_filter = null, $opportunity_type_id_filter = null, $close_lost_reason_id_filter = null)
    {
        list($response) = $this->getOpportunitiesWithHttpInfo($sales_contact_id_filter, $search, $close_date_filter, $opportunity_stage_id_filter, $owner_id_filter, $paging_group, $skip, $take, $sort, $order, $last_modified_time_stamp_filter, $opportunity_stage_win_probability_id_filter, $created_on_filter, $pipeline_id_filter, $tag_id_filter, $amount_filter, $previous_identifier_filter, $opportunity_source_id_filter, $opportunity_type_id_filter, $close_lost_reason_id_filter);
        return $response;
    }

    /**
     * Operation getOpportunitiesWithHttpInfo
     *
     * Get Opportunities
     *
     * @param  string $sales_contact_id_filter Filter by SalesContactId (optional)
     * @param  string $search Search Opportunity by Description (optional)
     * @param  string $close_date_filter Filter by CloseDate (allows additional filter operators as per above) (optional)
     * @param  string $opportunity_stage_id_filter Filter by OpportunityStageId (optional)
     * @param  string $owner_id_filter Filter by OwnerId (optional)
     * @param  string $paging_group Group results by this field. Valid values(s) are &#x27;OpportunityStageId&#x27;. Using this parameter means paging will be per pagingGroup. E.g. Take 30 records per OpportunityStageId (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $sort Field name to sort opportunities by.  Supported fields are CloseDate, Amount and LastModifiedTimeStamp. Default sorting is by LastModifiedTimeStamp. (optional)
     * @param  string $order Order in which opportunities are sorted.  Supported orders are asc and desc. Default sorting is by asc. (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $opportunity_stage_win_probability_id_filter Filter by OpportunityStageWinProbabilityId (optional)
     * @param  string $created_on_filter Filter by CreatedOn (optional)
     * @param  string $pipeline_id_filter Filter by PipelineId (optional)
     * @param  string $tag_id_filter Filter by tag ids (optional)
     * @param  string $amount_filter Filter by Amount (optional)
     * @param  string $previous_identifier_filter Filter by PreviousIdentifier (optional)
     * @param  string $opportunity_source_id_filter Filter by OpportunitySourceId (optional)
     * @param  string $opportunity_type_id_filter Filter by OpportunityTypeId (optional)
     * @param  string $close_lost_reason_id_filter Filter by CloseLostReasonId (optional)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\OpportunityItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getOpportunitiesWithHttpInfo($sales_contact_id_filter = null, $search = null, $close_date_filter = null, $opportunity_stage_id_filter = null, $owner_id_filter = null, $paging_group = null, $skip = null, $take = null, $sort = null, $order = null, $last_modified_time_stamp_filter = null, $opportunity_stage_win_probability_id_filter = null, $created_on_filter = null, $pipeline_id_filter = null, $tag_id_filter = null, $amount_filter = null, $previous_identifier_filter = null, $opportunity_source_id_filter = null, $opportunity_type_id_filter = null, $close_lost_reason_id_filter = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\OpportunityItem[]';
        $request = $this->getOpportunitiesRequest($sales_contact_id_filter, $search, $close_date_filter, $opportunity_stage_id_filter, $owner_id_filter, $paging_group, $skip, $take, $sort, $order, $last_modified_time_stamp_filter, $opportunity_stage_win_probability_id_filter, $created_on_filter, $pipeline_id_filter, $tag_id_filter, $amount_filter, $previous_identifier_filter, $opportunity_source_id_filter, $opportunity_type_id_filter, $close_lost_reason_id_filter);

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
                        '\Phwebs\Wisenet\Model\OpportunityItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOpportunitiesAsync
     *
     * Get Opportunities
     *
     * @param  string $sales_contact_id_filter Filter by SalesContactId (optional)
     * @param  string $search Search Opportunity by Description (optional)
     * @param  string $close_date_filter Filter by CloseDate (allows additional filter operators as per above) (optional)
     * @param  string $opportunity_stage_id_filter Filter by OpportunityStageId (optional)
     * @param  string $owner_id_filter Filter by OwnerId (optional)
     * @param  string $paging_group Group results by this field. Valid values(s) are &#x27;OpportunityStageId&#x27;. Using this parameter means paging will be per pagingGroup. E.g. Take 30 records per OpportunityStageId (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $sort Field name to sort opportunities by.  Supported fields are CloseDate, Amount and LastModifiedTimeStamp. Default sorting is by LastModifiedTimeStamp. (optional)
     * @param  string $order Order in which opportunities are sorted.  Supported orders are asc and desc. Default sorting is by asc. (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $opportunity_stage_win_probability_id_filter Filter by OpportunityStageWinProbabilityId (optional)
     * @param  string $created_on_filter Filter by CreatedOn (optional)
     * @param  string $pipeline_id_filter Filter by PipelineId (optional)
     * @param  string $tag_id_filter Filter by tag ids (optional)
     * @param  string $amount_filter Filter by Amount (optional)
     * @param  string $previous_identifier_filter Filter by PreviousIdentifier (optional)
     * @param  string $opportunity_source_id_filter Filter by OpportunitySourceId (optional)
     * @param  string $opportunity_type_id_filter Filter by OpportunityTypeId (optional)
     * @param  string $close_lost_reason_id_filter Filter by CloseLostReasonId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOpportunitiesAsync($sales_contact_id_filter = null, $search = null, $close_date_filter = null, $opportunity_stage_id_filter = null, $owner_id_filter = null, $paging_group = null, $skip = null, $take = null, $sort = null, $order = null, $last_modified_time_stamp_filter = null, $opportunity_stage_win_probability_id_filter = null, $created_on_filter = null, $pipeline_id_filter = null, $tag_id_filter = null, $amount_filter = null, $previous_identifier_filter = null, $opportunity_source_id_filter = null, $opportunity_type_id_filter = null, $close_lost_reason_id_filter = null)
    {
        return $this->getOpportunitiesAsyncWithHttpInfo($sales_contact_id_filter, $search, $close_date_filter, $opportunity_stage_id_filter, $owner_id_filter, $paging_group, $skip, $take, $sort, $order, $last_modified_time_stamp_filter, $opportunity_stage_win_probability_id_filter, $created_on_filter, $pipeline_id_filter, $tag_id_filter, $amount_filter, $previous_identifier_filter, $opportunity_source_id_filter, $opportunity_type_id_filter, $close_lost_reason_id_filter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOpportunitiesAsyncWithHttpInfo
     *
     * Get Opportunities
     *
     * @param  string $sales_contact_id_filter Filter by SalesContactId (optional)
     * @param  string $search Search Opportunity by Description (optional)
     * @param  string $close_date_filter Filter by CloseDate (allows additional filter operators as per above) (optional)
     * @param  string $opportunity_stage_id_filter Filter by OpportunityStageId (optional)
     * @param  string $owner_id_filter Filter by OwnerId (optional)
     * @param  string $paging_group Group results by this field. Valid values(s) are &#x27;OpportunityStageId&#x27;. Using this parameter means paging will be per pagingGroup. E.g. Take 30 records per OpportunityStageId (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $sort Field name to sort opportunities by.  Supported fields are CloseDate, Amount and LastModifiedTimeStamp. Default sorting is by LastModifiedTimeStamp. (optional)
     * @param  string $order Order in which opportunities are sorted.  Supported orders are asc and desc. Default sorting is by asc. (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $opportunity_stage_win_probability_id_filter Filter by OpportunityStageWinProbabilityId (optional)
     * @param  string $created_on_filter Filter by CreatedOn (optional)
     * @param  string $pipeline_id_filter Filter by PipelineId (optional)
     * @param  string $tag_id_filter Filter by tag ids (optional)
     * @param  string $amount_filter Filter by Amount (optional)
     * @param  string $previous_identifier_filter Filter by PreviousIdentifier (optional)
     * @param  string $opportunity_source_id_filter Filter by OpportunitySourceId (optional)
     * @param  string $opportunity_type_id_filter Filter by OpportunityTypeId (optional)
     * @param  string $close_lost_reason_id_filter Filter by CloseLostReasonId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOpportunitiesAsyncWithHttpInfo($sales_contact_id_filter = null, $search = null, $close_date_filter = null, $opportunity_stage_id_filter = null, $owner_id_filter = null, $paging_group = null, $skip = null, $take = null, $sort = null, $order = null, $last_modified_time_stamp_filter = null, $opportunity_stage_win_probability_id_filter = null, $created_on_filter = null, $pipeline_id_filter = null, $tag_id_filter = null, $amount_filter = null, $previous_identifier_filter = null, $opportunity_source_id_filter = null, $opportunity_type_id_filter = null, $close_lost_reason_id_filter = null)
    {
        $returnType = '\Phwebs\Wisenet\Model\OpportunityItem[]';
        $request = $this->getOpportunitiesRequest($sales_contact_id_filter, $search, $close_date_filter, $opportunity_stage_id_filter, $owner_id_filter, $paging_group, $skip, $take, $sort, $order, $last_modified_time_stamp_filter, $opportunity_stage_win_probability_id_filter, $created_on_filter, $pipeline_id_filter, $tag_id_filter, $amount_filter, $previous_identifier_filter, $opportunity_source_id_filter, $opportunity_type_id_filter, $close_lost_reason_id_filter);

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
     * Create request for operation 'getOpportunities'
     *
     * @param  string $sales_contact_id_filter Filter by SalesContactId (optional)
     * @param  string $search Search Opportunity by Description (optional)
     * @param  string $close_date_filter Filter by CloseDate (allows additional filter operators as per above) (optional)
     * @param  string $opportunity_stage_id_filter Filter by OpportunityStageId (optional)
     * @param  string $owner_id_filter Filter by OwnerId (optional)
     * @param  string $paging_group Group results by this field. Valid values(s) are &#x27;OpportunityStageId&#x27;. Using this parameter means paging will be per pagingGroup. E.g. Take 30 records per OpportunityStageId (optional)
     * @param  int $skip Number of records to skip (optional)
     * @param  int $take Number of records to take (optional)
     * @param  string $sort Field name to sort opportunities by.  Supported fields are CloseDate, Amount and LastModifiedTimeStamp. Default sorting is by LastModifiedTimeStamp. (optional)
     * @param  string $order Order in which opportunities are sorted.  Supported orders are asc and desc. Default sorting is by asc. (optional)
     * @param  string $last_modified_time_stamp_filter Filter by LastModifiedTimeStamp (allows additional filter operators as per above) (optional)
     * @param  string $opportunity_stage_win_probability_id_filter Filter by OpportunityStageWinProbabilityId (optional)
     * @param  string $created_on_filter Filter by CreatedOn (optional)
     * @param  string $pipeline_id_filter Filter by PipelineId (optional)
     * @param  string $tag_id_filter Filter by tag ids (optional)
     * @param  string $amount_filter Filter by Amount (optional)
     * @param  string $previous_identifier_filter Filter by PreviousIdentifier (optional)
     * @param  string $opportunity_source_id_filter Filter by OpportunitySourceId (optional)
     * @param  string $opportunity_type_id_filter Filter by OpportunityTypeId (optional)
     * @param  string $close_lost_reason_id_filter Filter by CloseLostReasonId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOpportunitiesRequest($sales_contact_id_filter = null, $search = null, $close_date_filter = null, $opportunity_stage_id_filter = null, $owner_id_filter = null, $paging_group = null, $skip = null, $take = null, $sort = null, $order = null, $last_modified_time_stamp_filter = null, $opportunity_stage_win_probability_id_filter = null, $created_on_filter = null, $pipeline_id_filter = null, $tag_id_filter = null, $amount_filter = null, $previous_identifier_filter = null, $opportunity_source_id_filter = null, $opportunity_type_id_filter = null, $close_lost_reason_id_filter = null)
    {

        $resourcePath = '/opportunities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($sales_contact_id_filter !== null) {
            $queryParams['salesContactIdFilter'] = ObjectSerializer::toQueryValue($sales_contact_id_filter, null);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search, null);
        }
        // query params
        if ($close_date_filter !== null) {
            $queryParams['closeDateFilter'] = ObjectSerializer::toQueryValue($close_date_filter, null);
        }
        // query params
        if ($opportunity_stage_id_filter !== null) {
            $queryParams['opportunityStageIdFilter'] = ObjectSerializer::toQueryValue($opportunity_stage_id_filter, null);
        }
        // query params
        if ($owner_id_filter !== null) {
            $queryParams['ownerIdFilter'] = ObjectSerializer::toQueryValue($owner_id_filter, null);
        }
        // query params
        if ($paging_group !== null) {
            $queryParams['pagingGroup'] = ObjectSerializer::toQueryValue($paging_group, null);
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
        if ($last_modified_time_stamp_filter !== null) {
            $queryParams['lastModifiedTimeStampFilter'] = ObjectSerializer::toQueryValue($last_modified_time_stamp_filter, null);
        }
        // query params
        if ($opportunity_stage_win_probability_id_filter !== null) {
            $queryParams['opportunityStageWinProbabilityIdFilter'] = ObjectSerializer::toQueryValue($opportunity_stage_win_probability_id_filter, null);
        }
        // query params
        if ($created_on_filter !== null) {
            $queryParams['createdOnFilter'] = ObjectSerializer::toQueryValue($created_on_filter, null);
        }
        // query params
        if ($pipeline_id_filter !== null) {
            $queryParams['pipelineIdFilter'] = ObjectSerializer::toQueryValue($pipeline_id_filter, null);
        }
        // query params
        if ($tag_id_filter !== null) {
            $queryParams['tagIdFilter'] = ObjectSerializer::toQueryValue($tag_id_filter, null);
        }
        // query params
        if ($amount_filter !== null) {
            $queryParams['amountFilter'] = ObjectSerializer::toQueryValue($amount_filter, null);
        }
        // query params
        if ($previous_identifier_filter !== null) {
            $queryParams['previousIdentifierFilter'] = ObjectSerializer::toQueryValue($previous_identifier_filter, null);
        }
        // query params
        if ($opportunity_source_id_filter !== null) {
            $queryParams['opportunitySourceIdFilter'] = ObjectSerializer::toQueryValue($opportunity_source_id_filter, null);
        }
        // query params
        if ($opportunity_type_id_filter !== null) {
            $queryParams['opportunityTypeIdFilter'] = ObjectSerializer::toQueryValue($opportunity_type_id_filter, null);
        }
        // query params
        if ($close_lost_reason_id_filter !== null) {
            $queryParams['closeLostReasonIdFilter'] = ObjectSerializer::toQueryValue($close_lost_reason_id_filter, null);
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
     * Operation getOpportunity
     *
     * Get Opportunity by Id
     *
     * @param  int $id Id of the Opportunity (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\OpportunityItem
     */
    public function getOpportunity($id)
    {
        list($response) = $this->getOpportunityWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getOpportunityWithHttpInfo
     *
     * Get Opportunity by Id
     *
     * @param  int $id Id of the Opportunity (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\OpportunityItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOpportunityWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\OpportunityItem';
        $request = $this->getOpportunityRequest($id);

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
                        '\Phwebs\Wisenet\Model\OpportunityItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOpportunityAsync
     *
     * Get Opportunity by Id
     *
     * @param  int $id Id of the Opportunity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOpportunityAsync($id)
    {
        return $this->getOpportunityAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOpportunityAsyncWithHttpInfo
     *
     * Get Opportunity by Id
     *
     * @param  int $id Id of the Opportunity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOpportunityAsyncWithHttpInfo($id)
    {
        $returnType = '\Phwebs\Wisenet\Model\OpportunityItem';
        $request = $this->getOpportunityRequest($id);

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
     * Create request for operation 'getOpportunity'
     *
     * @param  int $id Id of the Opportunity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOpportunityRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getOpportunity'
            );
        }

        $resourcePath = '/opportunities/{id}';
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
     * Operation patchOpportunity
     *
     * Patch Opportunity
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on opportunity (required)
     * @param  int $id Id of the Opportunity (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phwebs\Wisenet\Model\OpportunityItem
     */
    public function patchOpportunity($body, $id)
    {
        list($response) = $this->patchOpportunityWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation patchOpportunityWithHttpInfo
     *
     * Patch Opportunity
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on opportunity (required)
     * @param  int $id Id of the Opportunity (required)
     *
     * @throws \Phwebs\Wisenet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phwebs\Wisenet\Model\OpportunityItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchOpportunityWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\OpportunityItem';
        $request = $this->patchOpportunityRequest($body, $id);

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
                        '\Phwebs\Wisenet\Model\OpportunityItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchOpportunityAsync
     *
     * Patch Opportunity
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on opportunity (required)
     * @param  int $id Id of the Opportunity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchOpportunityAsync($body, $id)
    {
        return $this->patchOpportunityAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchOpportunityAsyncWithHttpInfo
     *
     * Patch Opportunity
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on opportunity (required)
     * @param  int $id Id of the Opportunity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchOpportunityAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Phwebs\Wisenet\Model\OpportunityItem';
        $request = $this->patchOpportunityRequest($body, $id);

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
     * Create request for operation 'patchOpportunity'
     *
     * @param  \Phwebs\Wisenet\Model\PatchDocument[] $body JSON Patch Document operations to perform on opportunity (required)
     * @param  int $id Id of the Opportunity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchOpportunityRequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling patchOpportunity'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchOpportunity'
            );
        }

        $resourcePath = '/opportunities/{id}';
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
