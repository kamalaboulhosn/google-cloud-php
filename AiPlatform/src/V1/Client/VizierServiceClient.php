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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/aiplatform/v1/vizier_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AIPlatform\V1\Client;

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
use Google\Cloud\AIPlatform\V1\AddTrialMeasurementRequest;
use Google\Cloud\AIPlatform\V1\CheckTrialEarlyStoppingStateRequest;
use Google\Cloud\AIPlatform\V1\CheckTrialEarlyStoppingStateResponse;
use Google\Cloud\AIPlatform\V1\CompleteTrialRequest;
use Google\Cloud\AIPlatform\V1\CreateStudyRequest;
use Google\Cloud\AIPlatform\V1\CreateTrialRequest;
use Google\Cloud\AIPlatform\V1\DeleteStudyRequest;
use Google\Cloud\AIPlatform\V1\DeleteTrialRequest;
use Google\Cloud\AIPlatform\V1\GetStudyRequest;
use Google\Cloud\AIPlatform\V1\GetTrialRequest;
use Google\Cloud\AIPlatform\V1\ListOptimalTrialsRequest;
use Google\Cloud\AIPlatform\V1\ListOptimalTrialsResponse;
use Google\Cloud\AIPlatform\V1\ListStudiesRequest;
use Google\Cloud\AIPlatform\V1\ListTrialsRequest;
use Google\Cloud\AIPlatform\V1\LookupStudyRequest;
use Google\Cloud\AIPlatform\V1\StopTrialRequest;
use Google\Cloud\AIPlatform\V1\Study;
use Google\Cloud\AIPlatform\V1\SuggestTrialsRequest;
use Google\Cloud\AIPlatform\V1\SuggestTrialsResponse;
use Google\Cloud\AIPlatform\V1\Trial;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Vertex AI Vizier API.
 *
 * Vertex AI Vizier is a service to solve blackbox optimization problems,
 * such as tuning machine learning hyperparameters and searching over deep
 * learning architectures.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<Trial> addTrialMeasurementAsync(AddTrialMeasurementRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> checkTrialEarlyStoppingStateAsync(CheckTrialEarlyStoppingStateRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Trial> completeTrialAsync(CompleteTrialRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Study> createStudyAsync(CreateStudyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Trial> createTrialAsync(CreateTrialRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteStudyAsync(DeleteStudyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteTrialAsync(DeleteTrialRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Study> getStudyAsync(GetStudyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Trial> getTrialAsync(GetTrialRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ListOptimalTrialsResponse> listOptimalTrialsAsync(ListOptimalTrialsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listStudiesAsync(ListStudiesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listTrialsAsync(ListTrialsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Study> lookupStudyAsync(LookupStudyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Trial> stopTrialAsync(StopTrialRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> suggestTrialsAsync(SuggestTrialsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestIamPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
final class VizierServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.aiplatform.v1.VizierService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'aiplatform.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'aiplatform.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/vizier_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/vizier_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/vizier_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/vizier_service_rest_client_config.php',
                ],
            ],
        ];
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
     * Formats a string containing the fully-qualified path to represent a custom_job
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $customJob
     *
     * @return string The formatted custom_job resource.
     */
    public static function customJobName(string $project, string $location, string $customJob): string
    {
        return self::getPathTemplate('customJob')->render([
            'project' => $project,
            'location' => $location,
            'custom_job' => $customJob,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a study
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $study
     *
     * @return string The formatted study resource.
     */
    public static function studyName(string $project, string $location, string $study): string
    {
        return self::getPathTemplate('study')->render([
            'project' => $project,
            'location' => $location,
            'study' => $study,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a trial
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $study
     * @param string $trial
     *
     * @return string The formatted trial resource.
     */
    public static function trialName(string $project, string $location, string $study, string $trial): string
    {
        return self::getPathTemplate('trial')->render([
            'project' => $project,
            'location' => $location,
            'study' => $study,
            'trial' => $trial,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - customJob: projects/{project}/locations/{location}/customJobs/{custom_job}
     * - location: projects/{project}/locations/{location}
     * - study: projects/{project}/locations/{location}/studies/{study}
     * - trial: projects/{project}/locations/{location}/studies/{study}/trials/{trial}
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
     *           as "<uri>:<port>". Default 'aiplatform.googleapis.com:443'.
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
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
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
     * Adds a measurement of the objective metrics to a Trial. This measurement
     * is assumed to have been taken before the Trial is complete.
     *
     * The async variant is {@see VizierServiceClient::addTrialMeasurementAsync()} .
     *
     * @example samples/V1/VizierServiceClient/add_trial_measurement.php
     *
     * @param AddTrialMeasurementRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Trial
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function addTrialMeasurement(AddTrialMeasurementRequest $request, array $callOptions = []): Trial
    {
        return $this->startApiCall('AddTrialMeasurement', $request, $callOptions)->wait();
    }

    /**
     * Checks  whether a Trial should stop or not. Returns a
     * long-running operation. When the operation is successful,
     * it will contain a
     * [CheckTrialEarlyStoppingStateResponse][google.cloud.aiplatform.v1.CheckTrialEarlyStoppingStateResponse].
     *
     * The async variant is
     * {@see VizierServiceClient::checkTrialEarlyStoppingStateAsync()} .
     *
     * @example samples/V1/VizierServiceClient/check_trial_early_stopping_state.php
     *
     * @param CheckTrialEarlyStoppingStateRequest $request     A request to house fields associated with the call.
     * @param array                               $callOptions {
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
    public function checkTrialEarlyStoppingState(
        CheckTrialEarlyStoppingStateRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('CheckTrialEarlyStoppingState', $request, $callOptions)->wait();
    }

    /**
     * Marks a Trial as complete.
     *
     * The async variant is {@see VizierServiceClient::completeTrialAsync()} .
     *
     * @example samples/V1/VizierServiceClient/complete_trial.php
     *
     * @param CompleteTrialRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Trial
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function completeTrial(CompleteTrialRequest $request, array $callOptions = []): Trial
    {
        return $this->startApiCall('CompleteTrial', $request, $callOptions)->wait();
    }

    /**
     * Creates a Study. A resource name will be generated after creation of the
     * Study.
     *
     * The async variant is {@see VizierServiceClient::createStudyAsync()} .
     *
     * @example samples/V1/VizierServiceClient/create_study.php
     *
     * @param CreateStudyRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Study
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createStudy(CreateStudyRequest $request, array $callOptions = []): Study
    {
        return $this->startApiCall('CreateStudy', $request, $callOptions)->wait();
    }

    /**
     * Adds a user provided Trial to a Study.
     *
     * The async variant is {@see VizierServiceClient::createTrialAsync()} .
     *
     * @example samples/V1/VizierServiceClient/create_trial.php
     *
     * @param CreateTrialRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Trial
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createTrial(CreateTrialRequest $request, array $callOptions = []): Trial
    {
        return $this->startApiCall('CreateTrial', $request, $callOptions)->wait();
    }

    /**
     * Deletes a Study.
     *
     * The async variant is {@see VizierServiceClient::deleteStudyAsync()} .
     *
     * @example samples/V1/VizierServiceClient/delete_study.php
     *
     * @param DeleteStudyRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteStudy(DeleteStudyRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteStudy', $request, $callOptions)->wait();
    }

    /**
     * Deletes a Trial.
     *
     * The async variant is {@see VizierServiceClient::deleteTrialAsync()} .
     *
     * @example samples/V1/VizierServiceClient/delete_trial.php
     *
     * @param DeleteTrialRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteTrial(DeleteTrialRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteTrial', $request, $callOptions)->wait();
    }

    /**
     * Gets a Study by name.
     *
     * The async variant is {@see VizierServiceClient::getStudyAsync()} .
     *
     * @example samples/V1/VizierServiceClient/get_study.php
     *
     * @param GetStudyRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Study
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getStudy(GetStudyRequest $request, array $callOptions = []): Study
    {
        return $this->startApiCall('GetStudy', $request, $callOptions)->wait();
    }

    /**
     * Gets a Trial.
     *
     * The async variant is {@see VizierServiceClient::getTrialAsync()} .
     *
     * @example samples/V1/VizierServiceClient/get_trial.php
     *
     * @param GetTrialRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Trial
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTrial(GetTrialRequest $request, array $callOptions = []): Trial
    {
        return $this->startApiCall('GetTrial', $request, $callOptions)->wait();
    }

    /**
     * Lists the pareto-optimal Trials for multi-objective Study or the
     * optimal Trials for single-objective Study. The definition of
     * pareto-optimal can be checked in wiki page.
     * https://en.wikipedia.org/wiki/Pareto_efficiency
     *
     * The async variant is {@see VizierServiceClient::listOptimalTrialsAsync()} .
     *
     * @example samples/V1/VizierServiceClient/list_optimal_trials.php
     *
     * @param ListOptimalTrialsRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ListOptimalTrialsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listOptimalTrials(
        ListOptimalTrialsRequest $request,
        array $callOptions = []
    ): ListOptimalTrialsResponse {
        return $this->startApiCall('ListOptimalTrials', $request, $callOptions)->wait();
    }

    /**
     * Lists all the studies in a region for an associated project.
     *
     * The async variant is {@see VizierServiceClient::listStudiesAsync()} .
     *
     * @example samples/V1/VizierServiceClient/list_studies.php
     *
     * @param ListStudiesRequest $request     A request to house fields associated with the call.
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
    public function listStudies(ListStudiesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListStudies', $request, $callOptions);
    }

    /**
     * Lists the Trials associated with a Study.
     *
     * The async variant is {@see VizierServiceClient::listTrialsAsync()} .
     *
     * @example samples/V1/VizierServiceClient/list_trials.php
     *
     * @param ListTrialsRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
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
    public function listTrials(ListTrialsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTrials', $request, $callOptions);
    }

    /**
     * Looks a study up using the user-defined display_name field instead of the
     * fully qualified resource name.
     *
     * The async variant is {@see VizierServiceClient::lookupStudyAsync()} .
     *
     * @example samples/V1/VizierServiceClient/lookup_study.php
     *
     * @param LookupStudyRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Study
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function lookupStudy(LookupStudyRequest $request, array $callOptions = []): Study
    {
        return $this->startApiCall('LookupStudy', $request, $callOptions)->wait();
    }

    /**
     * Stops a Trial.
     *
     * The async variant is {@see VizierServiceClient::stopTrialAsync()} .
     *
     * @example samples/V1/VizierServiceClient/stop_trial.php
     *
     * @param StopTrialRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Trial
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function stopTrial(StopTrialRequest $request, array $callOptions = []): Trial
    {
        return $this->startApiCall('StopTrial', $request, $callOptions)->wait();
    }

    /**
     * Adds one or more Trials to a Study, with parameter values
     * suggested by Vertex AI Vizier. Returns a long-running
     * operation associated with the generation of Trial suggestions.
     * When this long-running operation succeeds, it will contain
     * a
     * [SuggestTrialsResponse][google.cloud.aiplatform.v1.SuggestTrialsResponse].
     *
     * The async variant is {@see VizierServiceClient::suggestTrialsAsync()} .
     *
     * @example samples/V1/VizierServiceClient/suggest_trials.php
     *
     * @param SuggestTrialsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
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
    public function suggestTrials(SuggestTrialsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SuggestTrials', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see VizierServiceClient::getLocationAsync()} .
     *
     * @example samples/V1/VizierServiceClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see VizierServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1/VizierServiceClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
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
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see VizierServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/VizierServiceClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see VizierServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/VizierServiceClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see VizierServiceClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/VizierServiceClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(
        TestIamPermissionsRequest $request,
        array $callOptions = []
    ): TestIamPermissionsResponse {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
