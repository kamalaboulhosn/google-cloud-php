<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/generator.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Suggestion generated using free form generator.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.FreeFormSuggestion</code>
 */
class FreeFormSuggestion extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Free form suggestion.
     *
     * Generated from protobuf field <code>string response = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $response = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $response
     *           Required. Free form suggestion.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Generator::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Free form suggestion.
     *
     * Generated from protobuf field <code>string response = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Required. Free form suggestion.
     *
     * Generated from protobuf field <code>string response = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkString($var, True);
        $this->response = $var;

        return $this;
    }

}

