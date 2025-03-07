<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Participants.SuggestKnowledgeAssist][google.cloud.dialogflow.v2.Participants.SuggestKnowledgeAssist].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SuggestKnowledgeAssistRequest</code>
 */
class SuggestKnowledgeAssistRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the participant to fetch suggestions for.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The name of the latest conversation message to compile
     * suggestions for. If empty, it will be the latest message of the
     * conversation. Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string latest_message = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $latest_message = '';
    /**
     * Optional. Max number of messages prior to and including
     * [latest_message][google.cloud.dialogflow.v2.SuggestKnowledgeAssistRequest.latest_message]
     * to use as context when compiling the suggestion. The context size is by
     * default 100 and at most 100.
     *
     * Generated from protobuf field <code>int32 context_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $context_size = 0;
    /**
     * Optional. The previously suggested query for the given conversation. This
     * helps identify whether the next suggestion we generate is reasonably
     * different from the previous one. This is useful to avoid similar
     * suggestions within the conversation.
     *
     * Generated from protobuf field <code>string previous_suggested_query = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $previous_suggested_query = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the participant to fetch suggestions for.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *     @type string $latest_message
     *           Optional. The name of the latest conversation message to compile
     *           suggestions for. If empty, it will be the latest message of the
     *           conversation. Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *     @type int $context_size
     *           Optional. Max number of messages prior to and including
     *           [latest_message][google.cloud.dialogflow.v2.SuggestKnowledgeAssistRequest.latest_message]
     *           to use as context when compiling the suggestion. The context size is by
     *           default 100 and at most 100.
     *     @type string $previous_suggested_query
     *           Optional. The previously suggested query for the given conversation. This
     *           helps identify whether the next suggestion we generate is reasonably
     *           different from the previous one. This is useful to avoid similar
     *           suggestions within the conversation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the participant to fetch suggestions for.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the participant to fetch suggestions for.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The name of the latest conversation message to compile
     * suggestions for. If empty, it will be the latest message of the
     * conversation. Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string latest_message = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLatestMessage()
    {
        return $this->latest_message;
    }

    /**
     * Optional. The name of the latest conversation message to compile
     * suggestions for. If empty, it will be the latest message of the
     * conversation. Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string latest_message = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLatestMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->latest_message = $var;

        return $this;
    }

    /**
     * Optional. Max number of messages prior to and including
     * [latest_message][google.cloud.dialogflow.v2.SuggestKnowledgeAssistRequest.latest_message]
     * to use as context when compiling the suggestion. The context size is by
     * default 100 and at most 100.
     *
     * Generated from protobuf field <code>int32 context_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getContextSize()
    {
        return $this->context_size;
    }

    /**
     * Optional. Max number of messages prior to and including
     * [latest_message][google.cloud.dialogflow.v2.SuggestKnowledgeAssistRequest.latest_message]
     * to use as context when compiling the suggestion. The context size is by
     * default 100 and at most 100.
     *
     * Generated from protobuf field <code>int32 context_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setContextSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->context_size = $var;

        return $this;
    }

    /**
     * Optional. The previously suggested query for the given conversation. This
     * helps identify whether the next suggestion we generate is reasonably
     * different from the previous one. This is useful to avoid similar
     * suggestions within the conversation.
     *
     * Generated from protobuf field <code>string previous_suggested_query = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPreviousSuggestedQuery()
    {
        return $this->previous_suggested_query;
    }

    /**
     * Optional. The previously suggested query for the given conversation. This
     * helps identify whether the next suggestion we generate is reasonably
     * different from the previous one. This is useful to avoid similar
     * suggestions within the conversation.
     *
     * Generated from protobuf field <code>string previous_suggested_query = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPreviousSuggestedQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->previous_suggested_query = $var;

        return $this;
    }

}

