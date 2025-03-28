<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines notification behavior.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.NotificationConfig</code>
 */
class NotificationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the Pub/Sub topic to publish conversation
     * events like
     * [CONVERSATION_STARTED][google.cloud.dialogflow.v2.ConversationEvent.Type.CONVERSATION_STARTED]
     * as serialized
     * [ConversationEvent][google.cloud.dialogflow.v2.ConversationEvent] protos.
     * For telephony integration to receive notification, make sure either this
     * topic is in the same project as the conversation or you grant
     * `service-<Conversation Project
     * Number>&#64;gcp-sa-dialogflow.iam.gserviceaccount.com` the `Dialogflow Service
     * Agent` role in the topic project.
     * For chat integration to receive notification, make sure API caller has been
     * granted the `Dialogflow Service Agent` role for the topic.
     * Format: `projects/<Project ID>/locations/<Location ID>/topics/<Topic ID>`.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    protected $topic = '';
    /**
     * Format of message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig.MessageFormat message_format = 2;</code>
     */
    protected $message_format = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *           Name of the Pub/Sub topic to publish conversation
     *           events like
     *           [CONVERSATION_STARTED][google.cloud.dialogflow.v2.ConversationEvent.Type.CONVERSATION_STARTED]
     *           as serialized
     *           [ConversationEvent][google.cloud.dialogflow.v2.ConversationEvent] protos.
     *           For telephony integration to receive notification, make sure either this
     *           topic is in the same project as the conversation or you grant
     *           `service-<Conversation Project
     *           Number>&#64;gcp-sa-dialogflow.iam.gserviceaccount.com` the `Dialogflow Service
     *           Agent` role in the topic project.
     *           For chat integration to receive notification, make sure API caller has been
     *           granted the `Dialogflow Service Agent` role for the topic.
     *           Format: `projects/<Project ID>/locations/<Location ID>/topics/<Topic ID>`.
     *     @type int $message_format
     *           Format of message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the Pub/Sub topic to publish conversation
     * events like
     * [CONVERSATION_STARTED][google.cloud.dialogflow.v2.ConversationEvent.Type.CONVERSATION_STARTED]
     * as serialized
     * [ConversationEvent][google.cloud.dialogflow.v2.ConversationEvent] protos.
     * For telephony integration to receive notification, make sure either this
     * topic is in the same project as the conversation or you grant
     * `service-<Conversation Project
     * Number>&#64;gcp-sa-dialogflow.iam.gserviceaccount.com` the `Dialogflow Service
     * Agent` role in the topic project.
     * For chat integration to receive notification, make sure API caller has been
     * granted the `Dialogflow Service Agent` role for the topic.
     * Format: `projects/<Project ID>/locations/<Location ID>/topics/<Topic ID>`.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Name of the Pub/Sub topic to publish conversation
     * events like
     * [CONVERSATION_STARTED][google.cloud.dialogflow.v2.ConversationEvent.Type.CONVERSATION_STARTED]
     * as serialized
     * [ConversationEvent][google.cloud.dialogflow.v2.ConversationEvent] protos.
     * For telephony integration to receive notification, make sure either this
     * topic is in the same project as the conversation or you grant
     * `service-<Conversation Project
     * Number>&#64;gcp-sa-dialogflow.iam.gserviceaccount.com` the `Dialogflow Service
     * Agent` role in the topic project.
     * For chat integration to receive notification, make sure API caller has been
     * granted the `Dialogflow Service Agent` role for the topic.
     * Format: `projects/<Project ID>/locations/<Location ID>/topics/<Topic ID>`.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * Format of message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig.MessageFormat message_format = 2;</code>
     * @return int
     */
    public function getMessageFormat()
    {
        return $this->message_format;
    }

    /**
     * Format of message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig.MessageFormat message_format = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\NotificationConfig\MessageFormat::class);
        $this->message_format = $var;

        return $this;
    }

}

