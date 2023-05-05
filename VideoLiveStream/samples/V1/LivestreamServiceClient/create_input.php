<?php
/*
 * Copyright 2022 Google LLC
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

// [START livestream_v1_generated_LivestreamService_CreateInput_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Video\LiveStream\V1\Input;
use Google\Cloud\Video\LiveStream\V1\LivestreamServiceClient;
use Google\Rpc\Status;

/**
 * Creates an input with the provided unique ID in the specified region.
 *
 * @param string $formattedParent The parent location for the resource, in the form of:
 *                                `projects/{project}/locations/{location}`. Please see
 *                                {@see LivestreamServiceClient::locationName()} for help formatting this field.
 * @param string $inputId         The ID of the input resource to be created.
 *                                This value must be 1-63 characters, begin and end with `[a-z0-9]`,
 *                                could contain dashes (-) in between.
 */
function create_input_sample(string $formattedParent, string $inputId): void
{
    // Create a client.
    $livestreamServiceClient = new LivestreamServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $input = new Input();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $livestreamServiceClient->createInput($formattedParent, $input, $inputId);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Input $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
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
    $formattedParent = LivestreamServiceClient::locationName('[PROJECT]', '[LOCATION]');
    $inputId = '[INPUT_ID]';

    create_input_sample($formattedParent, $inputId);
}
// [END livestream_v1_generated_LivestreamService_CreateInput_sync]
