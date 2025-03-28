<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/session.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The top-level message sent by the client to the
 * [Sessions.StreamingDetectIntent][google.cloud.dialogflow.cx.v3.Sessions.StreamingDetectIntent]
 * method.
 * Multiple request messages should be sent in order:
 * 1.  The first message must contain
 *     [session][google.cloud.dialogflow.cx.v3.StreamingDetectIntentRequest.session],
 *     [query_input][google.cloud.dialogflow.cx.v3.StreamingDetectIntentRequest.query_input]
 *     plus optionally
 *     [query_params][google.cloud.dialogflow.cx.v3.StreamingDetectIntentRequest.query_params].
 *     If the client wants to receive an audio response, it should also contain
 *     [output_audio_config][google.cloud.dialogflow.cx.v3.StreamingDetectIntentRequest.output_audio_config].
 * 2.  If
 * [query_input][google.cloud.dialogflow.cx.v3.StreamingDetectIntentRequest.query_input]
 * was set to
 *     [query_input.audio.config][google.cloud.dialogflow.cx.v3.AudioInput.config],
 *     all subsequent messages must contain
 *     [query_input.audio.audio][google.cloud.dialogflow.cx.v3.AudioInput.audio]
 *     to continue with Speech recognition. If you decide to rather detect an
 *     intent from text input after you already started Speech recognition,
 *     please send a message with
 *     [query_input.text][google.cloud.dialogflow.cx.v3.QueryInput.text].
 *     However, note that:
 *     * Dialogflow will bill you for the audio duration so far.
 *     * Dialogflow discards all Speech recognition results in favor of the
 *       input text.
 *     * Dialogflow will use the language code from the first message.
 * After you sent all input, you must half-close or abort the request stream.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.StreamingDetectIntentRequest</code>
 */
class StreamingDetectIntentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the session this query is sent to.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/sessions/<SessionID>`
     * or
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/sessions/<SessionID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment.
     * It's up to the API caller to choose an appropriate `Session ID`. It can be
     * a random number or some type of session identifiers (preferably hashed).
     * The length of the `Session ID` must not exceed 36 characters.
     * Note: session must be set in the first request.
     * For more information, see the [sessions
     * guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     * Note: Always use agent versions for production traffic.
     * See [Versions and
     * environments](https://cloud.google.com/dialogflow/cx/docs/concept/version).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $session = '';
    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryParameters query_params = 2;</code>
     */
    protected $query_params = null;
    /**
     * Required. The input specification.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query_input = null;
    /**
     * Instructs the speech synthesizer how to generate the output audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.OutputAudioConfig output_audio_config = 4;</code>
     */
    protected $output_audio_config = null;
    /**
     * Enable partial detect intent response. If this flag is not enabled,
     * response stream still contains only one final `DetectIntentResponse` even
     * if some `Fulfillment`s in the agent have been configured to return partial
     * responses.
     *
     * Generated from protobuf field <code>bool enable_partial_response = 5;</code>
     */
    protected $enable_partial_response = false;
    /**
     * If true, `StreamingDetectIntentResponse.debugging_info` will get populated.
     *
     * Generated from protobuf field <code>bool enable_debugging_info = 8;</code>
     */
    protected $enable_debugging_info = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           The name of the session this query is sent to.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/sessions/<SessionID>`
     *           or
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/sessions/<SessionID>`.
     *           If `Environment ID` is not specified, we assume default 'draft'
     *           environment.
     *           It's up to the API caller to choose an appropriate `Session ID`. It can be
     *           a random number or some type of session identifiers (preferably hashed).
     *           The length of the `Session ID` must not exceed 36 characters.
     *           Note: session must be set in the first request.
     *           For more information, see the [sessions
     *           guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     *           Note: Always use agent versions for production traffic.
     *           See [Versions and
     *           environments](https://cloud.google.com/dialogflow/cx/docs/concept/version).
     *     @type \Google\Cloud\Dialogflow\Cx\V3\QueryParameters $query_params
     *           The parameters of this query.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\QueryInput $query_input
     *           Required. The input specification.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\OutputAudioConfig $output_audio_config
     *           Instructs the speech synthesizer how to generate the output audio.
     *     @type bool $enable_partial_response
     *           Enable partial detect intent response. If this flag is not enabled,
     *           response stream still contains only one final `DetectIntentResponse` even
     *           if some `Fulfillment`s in the agent have been configured to return partial
     *           responses.
     *     @type bool $enable_debugging_info
     *           If true, `StreamingDetectIntentResponse.debugging_info` will get populated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the session this query is sent to.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/sessions/<SessionID>`
     * or
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/sessions/<SessionID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment.
     * It's up to the API caller to choose an appropriate `Session ID`. It can be
     * a random number or some type of session identifiers (preferably hashed).
     * The length of the `Session ID` must not exceed 36 characters.
     * Note: session must be set in the first request.
     * For more information, see the [sessions
     * guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     * Note: Always use agent versions for production traffic.
     * See [Versions and
     * environments](https://cloud.google.com/dialogflow/cx/docs/concept/version).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * The name of the session this query is sent to.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/sessions/<SessionID>`
     * or
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/sessions/<SessionID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment.
     * It's up to the API caller to choose an appropriate `Session ID`. It can be
     * a random number or some type of session identifiers (preferably hashed).
     * The length of the `Session ID` must not exceed 36 characters.
     * Note: session must be set in the first request.
     * For more information, see the [sessions
     * guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     * Note: Always use agent versions for production traffic.
     * See [Versions and
     * environments](https://cloud.google.com/dialogflow/cx/docs/concept/version).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryParameters query_params = 2;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\QueryParameters|null
     */
    public function getQueryParams()
    {
        return $this->query_params;
    }

    public function hasQueryParams()
    {
        return isset($this->query_params);
    }

    public function clearQueryParams()
    {
        unset($this->query_params);
    }

    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryParameters query_params = 2;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\QueryParameters $var
     * @return $this
     */
    public function setQueryParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\QueryParameters::class);
        $this->query_params = $var;

        return $this;
    }

    /**
     * Required. The input specification.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\QueryInput|null
     */
    public function getQueryInput()
    {
        return $this->query_input;
    }

    public function hasQueryInput()
    {
        return isset($this->query_input);
    }

    public function clearQueryInput()
    {
        unset($this->query_input);
    }

    /**
     * Required. The input specification.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\QueryInput $var
     * @return $this
     */
    public function setQueryInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\QueryInput::class);
        $this->query_input = $var;

        return $this;
    }

    /**
     * Instructs the speech synthesizer how to generate the output audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.OutputAudioConfig output_audio_config = 4;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\OutputAudioConfig|null
     */
    public function getOutputAudioConfig()
    {
        return $this->output_audio_config;
    }

    public function hasOutputAudioConfig()
    {
        return isset($this->output_audio_config);
    }

    public function clearOutputAudioConfig()
    {
        unset($this->output_audio_config);
    }

    /**
     * Instructs the speech synthesizer how to generate the output audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.OutputAudioConfig output_audio_config = 4;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\OutputAudioConfig $var
     * @return $this
     */
    public function setOutputAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\OutputAudioConfig::class);
        $this->output_audio_config = $var;

        return $this;
    }

    /**
     * Enable partial detect intent response. If this flag is not enabled,
     * response stream still contains only one final `DetectIntentResponse` even
     * if some `Fulfillment`s in the agent have been configured to return partial
     * responses.
     *
     * Generated from protobuf field <code>bool enable_partial_response = 5;</code>
     * @return bool
     */
    public function getEnablePartialResponse()
    {
        return $this->enable_partial_response;
    }

    /**
     * Enable partial detect intent response. If this flag is not enabled,
     * response stream still contains only one final `DetectIntentResponse` even
     * if some `Fulfillment`s in the agent have been configured to return partial
     * responses.
     *
     * Generated from protobuf field <code>bool enable_partial_response = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnablePartialResponse($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_partial_response = $var;

        return $this;
    }

    /**
     * If true, `StreamingDetectIntentResponse.debugging_info` will get populated.
     *
     * Generated from protobuf field <code>bool enable_debugging_info = 8;</code>
     * @return bool
     */
    public function getEnableDebuggingInfo()
    {
        return $this->enable_debugging_info;
    }

    /**
     * If true, `StreamingDetectIntentResponse.debugging_info` will get populated.
     *
     * Generated from protobuf field <code>bool enable_debugging_info = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableDebuggingInfo($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_debugging_info = $var;

        return $this;
    }

}

