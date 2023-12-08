<?php
/*
 * Copyright 2023 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/advisorynotifications/v1/service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AdvisoryNotifications\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AdvisoryNotifications\V1\GetNotificationRequest;
use Google\Cloud\AdvisoryNotifications\V1\GetSettingsRequest;
use Google\Cloud\AdvisoryNotifications\V1\ListNotificationsRequest;
use Google\Cloud\AdvisoryNotifications\V1\Notification;
use Google\Cloud\AdvisoryNotifications\V1\Settings;
use Google\Cloud\AdvisoryNotifications\V1\UpdateSettingsRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service to manage Security and Privacy Notifications.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes. See {@see
 * \Google\Cloud\AdvisoryNotifications\V1\AdvisoryNotificationsServiceClient} for
 * the stable implementation
 *
 * @experimental
 *
 * @method PromiseInterface getNotificationAsync(GetNotificationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getSettingsAsync(GetSettingsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listNotificationsAsync(ListNotificationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateSettingsAsync(UpdateSettingsRequest $request, array $optionalArgs = [])
 */
final class AdvisoryNotificationsServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.advisorynotifications.v1.AdvisoryNotificationsService';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'advisorynotifications.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/advisory_notifications_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/advisory_notifications_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/advisory_notifications_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/advisory_notifications_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $organization
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $organization, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'organization' => $organization,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a notification
     * resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $notification
     *
     * @return string The formatted notification resource.
     */
    public static function notificationName(string $organization, string $location, string $notification): string
    {
        return self::getPathTemplate('notification')->render([
            'organization' => $organization,
            'location' => $location,
            'notification' => $notification,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_location resource.
     *
     * @param string $organization
     * @param string $location
     *
     * @return string The formatted organization_location resource.
     */
    public static function organizationLocationName(string $organization, string $location): string
    {
        return self::getPathTemplate('organizationLocation')->render([
            'organization' => $organization,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_location_notification resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $notification
     *
     * @return string The formatted organization_location_notification resource.
     */
    public static function organizationLocationNotificationName(string $organization, string $location, string $notification): string
    {
        return self::getPathTemplate('organizationLocationNotification')->render([
            'organization' => $organization,
            'location' => $location,
            'notification' => $notification,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted project_location resource.
     */
    public static function projectLocationName(string $project, string $location): string
    {
        return self::getPathTemplate('projectLocation')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_notification resource.
     *
     * @param string $project
     * @param string $location
     * @param string $notification
     *
     * @return string The formatted project_location_notification resource.
     */
    public static function projectLocationNotificationName(string $project, string $location, string $notification): string
    {
        return self::getPathTemplate('projectLocationNotification')->render([
            'project' => $project,
            'location' => $location,
            'notification' => $notification,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a settings
     * resource.
     *
     * @param string $organization
     * @param string $location
     *
     * @return string The formatted settings resource.
     */
    public static function settingsName(string $organization, string $location): string
    {
        return self::getPathTemplate('settings')->render([
            'organization' => $organization,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: organizations/{organization}/locations/{location}
     * - notification: organizations/{organization}/locations/{location}/notifications/{notification}
     * - organizationLocation: organizations/{organization}/locations/{location}
     * - organizationLocationNotification: organizations/{organization}/locations/{location}/notifications/{notification}
     * - projectLocation: projects/{project}/locations/{location}
     * - projectLocationNotification: projects/{project}/locations/{location}/notifications/{notification}
     * - settings: organizations/{organization}/locations/{location}/settings
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
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
     *           as "<uri>:<port>". Default 'advisorynotifications.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
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
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
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
     * Gets a notification.
     *
     * The async variant is
     * {@see AdvisoryNotificationsServiceClient::getNotificationAsync()} .
     *
     * @example samples/V1/AdvisoryNotificationsServiceClient/get_notification.php
     *
     * @param GetNotificationRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Notification
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getNotification(GetNotificationRequest $request, array $callOptions = []): Notification
    {
        return $this->startApiCall('GetNotification', $request, $callOptions)->wait();
    }

    /**
     * Get notification settings.
     *
     * The async variant is
     * {@see AdvisoryNotificationsServiceClient::getSettingsAsync()} .
     *
     * @example samples/V1/AdvisoryNotificationsServiceClient/get_settings.php
     *
     * @param GetSettingsRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Settings
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getSettings(GetSettingsRequest $request, array $callOptions = []): Settings
    {
        return $this->startApiCall('GetSettings', $request, $callOptions)->wait();
    }

    /**
     * Lists notifications under a given parent.
     *
     * The async variant is
     * {@see AdvisoryNotificationsServiceClient::listNotificationsAsync()} .
     *
     * @example samples/V1/AdvisoryNotificationsServiceClient/list_notifications.php
     *
     * @param ListNotificationsRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
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
    public function listNotifications(ListNotificationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListNotifications', $request, $callOptions);
    }

    /**
     * Update notification settings.
     *
     * The async variant is
     * {@see AdvisoryNotificationsServiceClient::updateSettingsAsync()} .
     *
     * @example samples/V1/AdvisoryNotificationsServiceClient/update_settings.php
     *
     * @param UpdateSettingsRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Settings
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateSettings(UpdateSettingsRequest $request, array $callOptions = []): Settings
    {
        return $this->startApiCall('UpdateSettings', $request, $callOptions)->wait();
    }
}
