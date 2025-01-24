<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/ads/admanager/v1/report_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Ads\AdManager\V1\Client;

use Google\Ads\AdManager\V1\CreateReportRequest;
use Google\Ads\AdManager\V1\FetchReportResultRowsRequest;
use Google\Ads\AdManager\V1\FetchReportResultRowsResponse;
use Google\Ads\AdManager\V1\GetReportRequest;
use Google\Ads\AdManager\V1\ListReportsRequest;
use Google\Ads\AdManager\V1\Report;
use Google\Ads\AdManager\V1\RunReportRequest;
use Google\Ads\AdManager\V1\RunReportResponse;
use Google\Ads\AdManager\V1\UpdateReportRequest;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Provides methods for interacting with reports.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<Report> createReportAsync(CreateReportRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<FetchReportResultRowsResponse> fetchReportResultRowsAsync(FetchReportResultRowsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Report> getReportAsync(GetReportRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listReportsAsync(ListReportsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> runReportAsync(RunReportRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Report> updateReportAsync(UpdateReportRequest $request, array $optionalArgs = [])
 */
final class ReportServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.ads.admanager.v1.ReportService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'admanager.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'admanager.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/report_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/report_service_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/report_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /** Implements GapicClientTrait::defaultTransport. */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /** Implements ClientOptionsTrait::supportedTransports. */
    private static function supportedTransports()
    {
        return ['rest'];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Create the default operation client for the service.
     *
     * @param array $options ClientOptions for the client.
     *
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        // Unset client-specific configuration options
        unset($options['serviceName'], $options['clientConfig'], $options['descriptorsConfigPath']);

        if (isset($options['operationsClient'])) {
            return $options['operationsClient'];
        }

        return new OperationsClient($options);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a network
     * resource.
     *
     * @param string $networkCode
     *
     * @return string The formatted network resource.
     */
    public static function networkName(string $networkCode): string
    {
        return self::getPathTemplate('network')->render([
            'network_code' => $networkCode,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a report
     * resource.
     *
     * @param string $networkCode
     * @param string $report
     *
     * @return string The formatted report resource.
     */
    public static function reportName(string $networkCode, string $report): string
    {
        return self::getPathTemplate('report')->render([
            'network_code' => $networkCode,
            'report' => $report,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - network: networks/{network_code}
     * - report: networks/{network_code}/reports/{report}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string  $formattedName The formatted name string
     * @param ?string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, ?string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'admanager.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *           *Important*: If you accept a credential configuration (credential
     *           JSON/File/Stream) from an external source for authentication to Google Cloud
     *           Platform, you must validate it before providing it to any Google API or library.
     *           Providing an unvalidated credential configuration to Google APIs can compromise
     *           the security of your systems and data. For more information {@see
     *           https://cloud.google.com/docs/authentication/external/externally-sourced-credentials}
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * API to create a `Report` object.
     *
     * The async variant is {@see ReportServiceClient::createReportAsync()} .
     *
     * @example samples/V1/ReportServiceClient/create_report.php
     *
     * @param CreateReportRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Report
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createReport(CreateReportRequest $request, array $callOptions = []): Report
    {
        return $this->startApiCall('CreateReport', $request, $callOptions)->wait();
    }

    /**
     * Returns the result rows from a completed report.
     * The caller must have previously called `RunReport` and waited for that
     * operation to complete. The rows will be returned according to the order
     * specified by the `sorts` member of the report definition.
     *
     * The async variant is {@see ReportServiceClient::fetchReportResultRowsAsync()} .
     *
     * @example samples/V1/ReportServiceClient/fetch_report_result_rows.php
     *
     * @param FetchReportResultRowsRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return FetchReportResultRowsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function fetchReportResultRows(
        FetchReportResultRowsRequest $request,
        array $callOptions = []
    ): FetchReportResultRowsResponse {
        return $this->startApiCall('FetchReportResultRows', $request, $callOptions)->wait();
    }

    /**
     * API to retrieve a `Report` object.
     *
     * The async variant is {@see ReportServiceClient::getReportAsync()} .
     *
     * @example samples/V1/ReportServiceClient/get_report.php
     *
     * @param GetReportRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Report
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getReport(GetReportRequest $request, array $callOptions = []): Report
    {
        return $this->startApiCall('GetReport', $request, $callOptions)->wait();
    }

    /**
     * API to retrieve a list of `Report` objects.
     *
     * The async variant is {@see ReportServiceClient::listReportsAsync()} .
     *
     * @example samples/V1/ReportServiceClient/list_reports.php
     *
     * @param ListReportsRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listReports(ListReportsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListReports', $request, $callOptions);
    }

    /**
     * Initiates the execution of an existing report asynchronously. Users can
     * get the report by polling this operation via
     * `OperationsService.GetOperation`.
     * Poll every 5 seconds initially, with an exponential
     * backoff. Once a report is complete, the operation will contain a
     * `RunReportResponse` in its response field containing a report_result that
     * can be passed to the `FetchReportResultRows` method to retrieve the report
     * data.
     *
     * The async variant is {@see ReportServiceClient::runReportAsync()} .
     *
     * @example samples/V1/ReportServiceClient/run_report.php
     *
     * @param RunReportRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function runReport(RunReportRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RunReport', $request, $callOptions)->wait();
    }

    /**
     * API to update a `Report` object.
     *
     * The async variant is {@see ReportServiceClient::updateReportAsync()} .
     *
     * @example samples/V1/ReportServiceClient/update_report.php
     *
     * @param UpdateReportRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Report
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateReport(UpdateReportRequest $request, array $callOptions = []): Report
    {
        return $this->startApiCall('UpdateReport', $request, $callOptions)->wait();
    }
}
