<?php
/*
 * Copyright 2025 Google LLC
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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START cloudquotas_v1beta_generated_CloudQuotas_ListQuotaPreferences_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\CloudQuotas\V1beta\Client\CloudQuotasClient;
use Google\Cloud\CloudQuotas\V1beta\ListQuotaPreferencesRequest;
use Google\Cloud\CloudQuotas\V1beta\QuotaPreference;

/**
 * Lists QuotaPreferences in a given project, folder or organization.
 *
 * @param string $formattedParent Parent value of QuotaPreference resources.
 *                                Listing across different resource containers (such as 'projects/-') is not
 *                                allowed.
 *
 *                                When the value starts with 'folders' or 'organizations', it lists the
 *                                QuotaPreferences for org quotas in the container. It does not list the
 *                                QuotaPreferences in the descendant projects of the container.
 *
 *                                Example parents:
 *                                `projects/123/locations/global`
 *                                Please see {@see CloudQuotasClient::locationName()} for help formatting this field.
 */
function list_quota_preferences_sample(string $formattedParent): void
{
    // Create a client.
    $cloudQuotasClient = new CloudQuotasClient();

    // Prepare the request message.
    $request = (new ListQuotaPreferencesRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $cloudQuotasClient->listQuotaPreferences($request);

        /** @var QuotaPreference $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = CloudQuotasClient::locationName('[PROJECT]', '[LOCATION]');

    list_quota_preferences_sample($formattedParent);
}
// [END cloudquotas_v1beta_generated_CloudQuotas_ListQuotaPreferences_sync]