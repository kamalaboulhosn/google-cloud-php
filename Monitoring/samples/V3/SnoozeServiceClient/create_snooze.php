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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START monitoring_v3_generated_SnoozeService_CreateSnooze_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Monitoring\V3\Client\SnoozeServiceClient;
use Google\Cloud\Monitoring\V3\CreateSnoozeRequest;
use Google\Cloud\Monitoring\V3\Snooze;
use Google\Cloud\Monitoring\V3\Snooze\Criteria;
use Google\Cloud\Monitoring\V3\TimeInterval;

/**
 * Creates a `Snooze` that will prevent alerts, which match the provided
 * criteria, from being opened. The `Snooze` applies for a specific time
 * interval.
 *
 * @param string $formattedParent   The
 *                                  [project](https://cloud.google.com/monitoring/api/v3#project_name) in which
 *                                  a `Snooze` should be created. The format is:
 *
 *                                  projects/[PROJECT_ID_OR_NUMBER]
 *                                  Please see {@see SnoozeServiceClient::workspaceName()} for help formatting this field.
 * @param string $snoozeDisplayName A display name for the `Snooze`. This can be, at most, 512
 *                                  unicode characters.
 */
function create_snooze_sample(string $formattedParent, string $snoozeDisplayName): void
{
    // Create a client.
    $snoozeServiceClient = new SnoozeServiceClient();

    // Prepare the request message.
    $snoozeCriteria = new Criteria();
    $snoozeInterval = new TimeInterval();
    $snooze = (new Snooze())
        ->setCriteria($snoozeCriteria)
        ->setInterval($snoozeInterval)
        ->setDisplayName($snoozeDisplayName);
    $request = (new CreateSnoozeRequest())
        ->setParent($formattedParent)
        ->setSnooze($snooze);

    // Call the API and handle any network failures.
    try {
        /** @var Snooze $response */
        $response = $snoozeServiceClient->createSnooze($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $formattedParent = SnoozeServiceClient::workspaceName('[PROJECT]');
    $snoozeDisplayName = '[DISPLAY_NAME]';

    create_snooze_sample($formattedParent, $snoozeDisplayName);
}
// [END monitoring_v3_generated_SnoozeService_CreateSnooze_sync]
