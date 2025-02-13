<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class PredictionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Httpbody::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Tool::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Types::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�G
3google/cloud/aiplatform/v1/prediction_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/httpbody.protogoogle/api/resource.proto(google/cloud/aiplatform/v1/content.proto,google/cloud/aiplatform/v1/explanation.proto%google/cloud/aiplatform/v1/tool.proto&google/cloud/aiplatform/v1/types.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
PredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint.
	instances (2.google.protobuf.ValueB�A*

parameters (2.google.protobuf.Value"�
PredictResponse+
predictions (2.google.protobuf.Value
deployed_model_id (	6
model (	B\'�A�A!
aiplatform.googleapis.com/Model
model_version_id (	B�A
model_display_name (	B�A-
metadata (2.google.protobuf.ValueB�A"z
RawPredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint\'
	http_body (2.google.api.HttpBody"�
StreamRawPredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint\'
	http_body (2.google.api.HttpBody"�
DirectPredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint2
inputs (2".google.cloud.aiplatform.v1.Tensor6

parameters (2".google.cloud.aiplatform.v1.Tensor"�
DirectPredictResponse3
outputs (2".google.cloud.aiplatform.v1.Tensor6

parameters (2".google.cloud.aiplatform.v1.Tensor"{
DirectRawPredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint
method_name (	
input ("*
DirectRawPredictResponse
output ("�
StreamDirectPredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint7
inputs (2".google.cloud.aiplatform.v1.TensorB�A;

parameters (2".google.cloud.aiplatform.v1.TensorB�A"�
StreamDirectPredictResponse3
outputs (2".google.cloud.aiplatform.v1.Tensor6

parameters (2".google.cloud.aiplatform.v1.Tensor"�
StreamDirectRawPredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint
method_name (	B�A
input (B�A"0
StreamDirectRawPredictResponse
output ("�
StreamingPredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint2
inputs (2".google.cloud.aiplatform.v1.Tensor6

parameters (2".google.cloud.aiplatform.v1.Tensor"�
StreamingPredictResponse3
outputs (2".google.cloud.aiplatform.v1.Tensor6

parameters (2".google.cloud.aiplatform.v1.Tensor"~
StreamingRawPredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint
method_name (	
input ("-
StreamingRawPredictResponse
output ("�
ExplainRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint.
	instances (2.google.protobuf.ValueB�A*

parameters (2.google.protobuf.ValueV
explanation_spec_override (23.google.cloud.aiplatform.v1.ExplanationSpecOverride
deployed_model_id (	"�
ExplainResponse=
explanations (2\'.google.cloud.aiplatform.v1.Explanation
deployed_model_id (	+
predictions (2.google.protobuf.Value"�
CountTokensRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint
model (	B�A.
	instances (2.google.protobuf.ValueB�A:
contents (2#.google.cloud.aiplatform.v1.ContentB�AI
system_instruction (2#.google.cloud.aiplatform.v1.ContentB�AH �4
tools (2 .google.cloud.aiplatform.v1.ToolB�AQ
generation_config (2,.google.cloud.aiplatform.v1.GenerationConfigB�AH�B
_system_instructionB
_generation_config"�
CountTokensResponse
total_tokens (!
total_billable_characters (R
prompt_tokens_details (2..google.cloud.aiplatform.v1.ModalityTokenCountB�A"�
GenerateContentRequest
model (	B�A:
contents (2#.google.cloud.aiplatform.v1.ContentB�AI
system_instruction (2#.google.cloud.aiplatform.v1.ContentB�AH �G
cached_content	 (	B/�A�A)
\'aiplatform.googleapis.com/CachedContent4
tools (2 .google.cloud.aiplatform.v1.ToolB�A@
tool_config (2&.google.cloud.aiplatform.v1.ToolConfigB�AS
labels
 (2>.google.cloud.aiplatform.v1.GenerateContentRequest.LabelsEntryB�AG
safety_settings (2).google.cloud.aiplatform.v1.SafetySettingB�AL
generation_config (2,.google.cloud.aiplatform.v1.GenerationConfigB�A-
LabelsEntry
key (	
value (	:8B
_system_instruction"�
GenerateContentResponse>

candidates (2%.google.cloud.aiplatform.v1.CandidateB�A
model_version (	B�A4
create_time (2.google.protobuf.TimestampB�A
response_id (	B�A`
prompt_feedback (2B.google.cloud.aiplatform.v1.GenerateContentResponse.PromptFeedbackB�AY
usage_metadata (2A.google.cloud.aiplatform.v1.GenerateContentResponse.UsageMetadata�
PromptFeedbackk
block_reason (2P.google.cloud.aiplatform.v1.GenerateContentResponse.PromptFeedback.BlockedReasonB�AE
safety_ratings (2(.google.cloud.aiplatform.v1.SafetyRatingB�A!
block_reason_message (	B�A"m
BlockedReason
BLOCKED_REASON_UNSPECIFIED 

SAFETY	
OTHER
	BLOCKLIST
PROHIBITED_CONTENT�
UsageMetadata
prompt_token_count (
candidates_token_count (
total_token_count (\'
cached_content_token_count (B�AR
prompt_tokens_details	 (2..google.cloud.aiplatform.v1.ModalityTokenCountB�AQ
cache_tokens_details
 (2..google.cloud.aiplatform.v1.ModalityTokenCountB�AV
candidates_tokens_details (2..google.cloud.aiplatform.v1.ModalityTokenCountB�A2�
PredictionService�
Predict*.google.cloud.aiplatform.v1.PredictRequest+.google.cloud.aiplatform.v1.PredictResponse"��Aendpoint,instances,parameters����"9/v1/{endpoint=projects/*/locations/*/endpoints/*}:predict:*ZH"C/v1/{endpoint=projects/*/locations/*/publishers/*/models/*}:predict:*�

RawPredict-.google.cloud.aiplatform.v1.RawPredictRequest.google.api.HttpBody"��Aendpoint,http_body����"</v1/{endpoint=projects/*/locations/*/endpoints/*}:rawPredict:*ZK"F/v1/{endpoint=projects/*/locations/*/publishers/*/models/*}:rawPredict:*�
StreamRawPredict3.google.cloud.aiplatform.v1.StreamRawPredictRequest.google.api.HttpBody"��Aendpoint,http_body����"B/v1/{endpoint=projects/*/locations/*/endpoints/*}:streamRawPredict:*ZQ"L/v1/{endpoint=projects/*/locations/*/publishers/*/models/*}:streamRawPredict:*0�
DirectPredict0.google.cloud.aiplatform.v1.DirectPredictRequest1.google.cloud.aiplatform.v1.DirectPredictResponse"J���D"?/v1/{endpoint=projects/*/locations/*/endpoints/*}:directPredict:*�
DirectRawPredict3.google.cloud.aiplatform.v1.DirectRawPredictRequest4.google.cloud.aiplatform.v1.DirectRawPredictResponse"M���G"B/v1/{endpoint=projects/*/locations/*/endpoints/*}:directRawPredict:*�
StreamDirectPredict6.google.cloud.aiplatform.v1.StreamDirectPredictRequest7.google.cloud.aiplatform.v1.StreamDirectPredictResponse" (0�
StreamDirectRawPredict9.google.cloud.aiplatform.v1.StreamDirectRawPredictRequest:.google.cloud.aiplatform.v1.StreamDirectRawPredictResponse" (0�
StreamingPredict3.google.cloud.aiplatform.v1.StreamingPredictRequest4.google.cloud.aiplatform.v1.StreamingPredictResponse" (0�
ServerStreamingPredict3.google.cloud.aiplatform.v1.StreamingPredictRequest4.google.cloud.aiplatform.v1.StreamingPredictResponse"�����"H/v1/{endpoint=projects/*/locations/*/endpoints/*}:serverStreamingPredict:*ZW"R/v1/{endpoint=projects/*/locations/*/publishers/*/models/*}:serverStreamingPredict:*0�
StreamingRawPredict6.google.cloud.aiplatform.v1.StreamingRawPredictRequest7.google.cloud.aiplatform.v1.StreamingRawPredictResponse" (0�
Explain*.google.cloud.aiplatform.v1.ExplainRequest+.google.cloud.aiplatform.v1.ExplainResponse"v�A/endpoint,instances,parameters,deployed_model_id���>"9/v1/{endpoint=projects/*/locations/*/endpoints/*}:explain:*�
GenerateContent2.google.cloud.aiplatform.v1.GenerateContentRequest3.google.cloud.aiplatform.v1.GenerateContentResponse"��Amodel,contents����">/v1/{model=projects/*/locations/*/endpoints/*}:generateContent:*ZM"H/v1/{model=projects/*/locations/*/publishers/*/models/*}:generateContent:*Z,"\'/v1/{model=endpoints/*}:generateContent:*Z6"1/v1/{model=publishers/*/models/*}:generateContent:*�
StreamGenerateContent2.google.cloud.aiplatform.v1.GenerateContentRequest3.google.cloud.aiplatform.v1.GenerateContentResponse"��Amodel,contents����"D/v1/{model=projects/*/locations/*/endpoints/*}:streamGenerateContent:*ZS"N/v1/{model=projects/*/locations/*/publishers/*/models/*}:streamGenerateContent:*Z2"-/v1/{model=endpoints/*}:streamGenerateContent:*Z<"7/v1/{model=publishers/*/models/*}:streamGenerateContent:*0��Aaiplatform.googleapis.com�Aghttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-onlyB�
com.google.cloud.aiplatform.v1BPredictionServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

