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
 * https://github.com/googleapis/googleapis/blob/master/google/api/cloudquotas/v1/cloudquotas.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\CloudQuotas\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\CloudQuotas\V1\CreateQuotaPreferenceRequest;
use Google\Cloud\CloudQuotas\V1\GetQuotaInfoRequest;
use Google\Cloud\CloudQuotas\V1\GetQuotaPreferenceRequest;
use Google\Cloud\CloudQuotas\V1\ListQuotaInfosRequest;
use Google\Cloud\CloudQuotas\V1\ListQuotaPreferencesRequest;
use Google\Cloud\CloudQuotas\V1\QuotaInfo;
use Google\Cloud\CloudQuotas\V1\QuotaPreference;
use Google\Cloud\CloudQuotas\V1\UpdateQuotaPreferenceRequest;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: The Cloud Quotas API is an infrastructure service for Google Cloud that lets
 * service consumers list and manage their resource usage limits.
 *
 * - List/Get the metadata and current status of the quotas for a service.
 * - Create/Update quota preferencess that declare the preferred quota values.
 * - Check the status of a quota preference request.
 * - List/Get pending and historical quota preference.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<QuotaPreference> createQuotaPreferenceAsync(CreateQuotaPreferenceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<QuotaInfo> getQuotaInfoAsync(GetQuotaInfoRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<QuotaPreference> getQuotaPreferenceAsync(GetQuotaPreferenceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listQuotaInfosAsync(ListQuotaInfosRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listQuotaPreferencesAsync(ListQuotaPreferencesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<QuotaPreference> updateQuotaPreferenceAsync(UpdateQuotaPreferenceRequest $request, array $optionalArgs = [])
 */
final class CloudQuotasClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.api.cloudquotas.v1.CloudQuotas';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'cloudquotas.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'cloudquotas.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/cloud_quotas_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/cloud_quotas_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/cloud_quotas_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/cloud_quotas_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_location resource.
     *
     * @param string $folder
     * @param string $location
     *
     * @return string The formatted folder_location resource.
     */
    public static function folderLocationName(string $folder, string $location): string
    {
        return self::getPathTemplate('folderLocation')->render([
            'folder' => $folder,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_location_quota_preference resource.
     *
     * @param string $folder
     * @param string $location
     * @param string $quotaPreference
     *
     * @return string The formatted folder_location_quota_preference resource.
     */
    public static function folderLocationQuotaPreferenceName(
        string $folder,
        string $location,
        string $quotaPreference
    ): string {
        return self::getPathTemplate('folderLocationQuotaPreference')->render([
            'folder' => $folder,
            'location' => $location,
            'quota_preference' => $quotaPreference,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_location_service resource.
     *
     * @param string $folder
     * @param string $location
     * @param string $service
     *
     * @return string The formatted folder_location_service resource.
     */
    public static function folderLocationServiceName(string $folder, string $location, string $service): string
    {
        return self::getPathTemplate('folderLocationService')->render([
            'folder' => $folder,
            'location' => $location,
            'service' => $service,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_location_service_quota_info resource.
     *
     * @param string $folder
     * @param string $location
     * @param string $service
     * @param string $quotaInfo
     *
     * @return string The formatted folder_location_service_quota_info resource.
     */
    public static function folderLocationServiceQuotaInfoName(
        string $folder,
        string $location,
        string $service,
        string $quotaInfo
    ): string {
        return self::getPathTemplate('folderLocationServiceQuotaInfo')->render([
            'folder' => $folder,
            'location' => $location,
            'service' => $service,
            'quota_info' => $quotaInfo,
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
     * organization_location_quota_preference resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $quotaPreference
     *
     * @return string The formatted organization_location_quota_preference resource.
     */
    public static function organizationLocationQuotaPreferenceName(
        string $organization,
        string $location,
        string $quotaPreference
    ): string {
        return self::getPathTemplate('organizationLocationQuotaPreference')->render([
            'organization' => $organization,
            'location' => $location,
            'quota_preference' => $quotaPreference,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_location_service resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $service
     *
     * @return string The formatted organization_location_service resource.
     */
    public static function organizationLocationServiceName(
        string $organization,
        string $location,
        string $service
    ): string {
        return self::getPathTemplate('organizationLocationService')->render([
            'organization' => $organization,
            'location' => $location,
            'service' => $service,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_location_service_quota_info resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $service
     * @param string $quotaInfo
     *
     * @return string The formatted organization_location_service_quota_info resource.
     */
    public static function organizationLocationServiceQuotaInfoName(
        string $organization,
        string $location,
        string $service,
        string $quotaInfo
    ): string {
        return self::getPathTemplate('organizationLocationServiceQuotaInfo')->render([
            'organization' => $organization,
            'location' => $location,
            'service' => $service,
            'quota_info' => $quotaInfo,
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
     * project_location_quota_preference resource.
     *
     * @param string $project
     * @param string $location
     * @param string $quotaPreference
     *
     * @return string The formatted project_location_quota_preference resource.
     */
    public static function projectLocationQuotaPreferenceName(
        string $project,
        string $location,
        string $quotaPreference
    ): string {
        return self::getPathTemplate('projectLocationQuotaPreference')->render([
            'project' => $project,
            'location' => $location,
            'quota_preference' => $quotaPreference,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_service resource.
     *
     * @param string $project
     * @param string $location
     * @param string $service
     *
     * @return string The formatted project_location_service resource.
     */
    public static function projectLocationServiceName(string $project, string $location, string $service): string
    {
        return self::getPathTemplate('projectLocationService')->render([
            'project' => $project,
            'location' => $location,
            'service' => $service,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_service_quota_info resource.
     *
     * @param string $project
     * @param string $location
     * @param string $service
     * @param string $quotaInfo
     *
     * @return string The formatted project_location_service_quota_info resource.
     */
    public static function projectLocationServiceQuotaInfoName(
        string $project,
        string $location,
        string $service,
        string $quotaInfo
    ): string {
        return self::getPathTemplate('projectLocationServiceQuotaInfo')->render([
            'project' => $project,
            'location' => $location,
            'service' => $service,
            'quota_info' => $quotaInfo,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a quota_info
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $service
     * @param string $quotaInfo
     *
     * @return string The formatted quota_info resource.
     */
    public static function quotaInfoName(string $project, string $location, string $service, string $quotaInfo): string
    {
        return self::getPathTemplate('quotaInfo')->render([
            'project' => $project,
            'location' => $location,
            'service' => $service,
            'quota_info' => $quotaInfo,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * quota_preference resource.
     *
     * @param string $project
     * @param string $location
     * @param string $quotaPreference
     *
     * @return string The formatted quota_preference resource.
     */
    public static function quotaPreferenceName(string $project, string $location, string $quotaPreference): string
    {
        return self::getPathTemplate('quotaPreference')->render([
            'project' => $project,
            'location' => $location,
            'quota_preference' => $quotaPreference,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a service
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $service
     *
     * @return string The formatted service resource.
     */
    public static function serviceName(string $project, string $location, string $service): string
    {
        return self::getPathTemplate('service')->render([
            'project' => $project,
            'location' => $location,
            'service' => $service,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - folderLocation: folders/{folder}/locations/{location}
     * - folderLocationQuotaPreference: folders/{folder}/locations/{location}/quotaPreferences/{quota_preference}
     * - folderLocationService: folders/{folder}/locations/{location}/services/{service}
     * - folderLocationServiceQuotaInfo: folders/{folder}/locations/{location}/services/{service}/quotaInfos/{quota_info}
     * - location: projects/{project}/locations/{location}
     * - organizationLocation: organizations/{organization}/locations/{location}
     * - organizationLocationQuotaPreference: organizations/{organization}/locations/{location}/quotaPreferences/{quota_preference}
     * - organizationLocationService: organizations/{organization}/locations/{location}/services/{service}
     * - organizationLocationServiceQuotaInfo: organizations/{organization}/locations/{location}/services/{service}/quotaInfos/{quota_info}
     * - projectLocation: projects/{project}/locations/{location}
     * - projectLocationQuotaPreference: projects/{project}/locations/{location}/quotaPreferences/{quota_preference}
     * - projectLocationService: projects/{project}/locations/{location}/services/{service}
     * - projectLocationServiceQuotaInfo: projects/{project}/locations/{location}/services/{service}/quotaInfos/{quota_info}
     * - quotaInfo: projects/{project}/locations/{location}/services/{service}/quotaInfos/{quota_info}
     * - quotaPreference: projects/{project}/locations/{location}/quotaPreferences/{quota_preference}
     * - service: projects/{project}/locations/{location}/services/{service}
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
     *           as "<uri>:<port>". Default 'cloudquotas.googleapis.com:443'.
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
     * Creates a new QuotaPreference that declares the desired value for a quota.
     *
     * The async variant is {@see CloudQuotasClient::createQuotaPreferenceAsync()} .
     *
     * @example samples/V1/CloudQuotasClient/create_quota_preference.php
     *
     * @param CreateQuotaPreferenceRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return QuotaPreference
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createQuotaPreference(
        CreateQuotaPreferenceRequest $request,
        array $callOptions = []
    ): QuotaPreference {
        return $this->startApiCall('CreateQuotaPreference', $request, $callOptions)->wait();
    }

    /**
     * Retrieve the QuotaInfo of a quota for a project, folder or organization.
     *
     * The async variant is {@see CloudQuotasClient::getQuotaInfoAsync()} .
     *
     * @example samples/V1/CloudQuotasClient/get_quota_info.php
     *
     * @param GetQuotaInfoRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return QuotaInfo
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getQuotaInfo(GetQuotaInfoRequest $request, array $callOptions = []): QuotaInfo
    {
        return $this->startApiCall('GetQuotaInfo', $request, $callOptions)->wait();
    }

    /**
     * Gets details of a single QuotaPreference.
     *
     * The async variant is {@see CloudQuotasClient::getQuotaPreferenceAsync()} .
     *
     * @example samples/V1/CloudQuotasClient/get_quota_preference.php
     *
     * @param GetQuotaPreferenceRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return QuotaPreference
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getQuotaPreference(GetQuotaPreferenceRequest $request, array $callOptions = []): QuotaPreference
    {
        return $this->startApiCall('GetQuotaPreference', $request, $callOptions)->wait();
    }

    /**
     * Lists QuotaInfos of all quotas for a given project, folder or organization.
     *
     * The async variant is {@see CloudQuotasClient::listQuotaInfosAsync()} .
     *
     * @example samples/V1/CloudQuotasClient/list_quota_infos.php
     *
     * @param ListQuotaInfosRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function listQuotaInfos(ListQuotaInfosRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListQuotaInfos', $request, $callOptions);
    }

    /**
     * Lists QuotaPreferences in a given project, folder or organization.
     *
     * The async variant is {@see CloudQuotasClient::listQuotaPreferencesAsync()} .
     *
     * @example samples/V1/CloudQuotasClient/list_quota_preferences.php
     *
     * @param ListQuotaPreferencesRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
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
    public function listQuotaPreferences(
        ListQuotaPreferencesRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListQuotaPreferences', $request, $callOptions);
    }

    /**
     * Updates the parameters of a single QuotaPreference. It can updates the
     * config in any states, not just the ones pending approval.
     *
     * The async variant is {@see CloudQuotasClient::updateQuotaPreferenceAsync()} .
     *
     * @example samples/V1/CloudQuotasClient/update_quota_preference.php
     *
     * @param UpdateQuotaPreferenceRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return QuotaPreference
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateQuotaPreference(
        UpdateQuotaPreferenceRequest $request,
        array $callOptions = []
    ): QuotaPreference {
        return $this->startApiCall('UpdateQuotaPreference', $request, $callOptions)->wait();
    }
}
