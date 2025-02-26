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

// [START meet_v2beta_generated_SpacesService_ConnectActiveConference_sync]
use Google\ApiCore\ApiException;
use Google\Apps\Meet\V2beta\Client\SpacesServiceClient;
use Google\Apps\Meet\V2beta\ConnectActiveConferenceRequest;
use Google\Apps\Meet\V2beta\ConnectActiveConferenceResponse;

/**
 * [Developer Preview](https://developers.google.com/workspace/preview):
 * Broker a WebRTC connection to the active conference of a space.
 *
 * On success, clients must use the resulting SDP (Session Description
 * Protocol) answer to establish a WebRTC connection. Once connected,
 * additional functionality is available across WebRTC data channels.
 *
 * See [Meet Media API
 * overview](https://developers.google.com/meet/media-api/guides/overview) for
 * more details about this connection.
 *
 * @param string $formattedName Resource name of the space.
 *                              Format: spaces/{spaceId}
 *                              Please see {@see SpacesServiceClient::spaceName()} for help formatting this field.
 * @param string $offer         WebRTC SDP (Session Description Protocol) offer from the client.
 *
 *                              The format is defined by [RFC
 *                              8866](https://www.rfc-editor.org/rfc/rfc8866) with mandatory keys defined
 *                              by [RFC 8829](https://www.rfc-editor.org/rfc/rfc8829). This is the standard
 *                              SDP format generated by a peer connection's createOffer() and
 *                              createAnswer() methods.
 */
function connect_active_conference_sample(string $formattedName, string $offer): void
{
    // Create a client.
    $spacesServiceClient = new SpacesServiceClient();

    // Prepare the request message.
    $request = (new ConnectActiveConferenceRequest())
        ->setName($formattedName)
        ->setOffer($offer);

    // Call the API and handle any network failures.
    try {
        /** @var ConnectActiveConferenceResponse $response */
        $response = $spacesServiceClient->connectActiveConference($request);
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
    $formattedName = SpacesServiceClient::spaceName('[SPACE]');
    $offer = '[OFFER]';

    connect_active_conference_sample($formattedName, $offer);
}
// [END meet_v2beta_generated_SpacesService_ConnectActiveConference_sync]
