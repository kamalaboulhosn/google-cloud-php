<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DataProfileAction\TagResources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The tag to attach to profiles matching the condition. At most one
 * `TagCondition` can be specified per sensitivity level.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DataProfileAction.TagResources.TagCondition</code>
 */
class TagCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * The tag value to attach to resources.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.TagResources.TagValue tag = 1;</code>
     */
    private $tag = null;
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\DataProfileAction\TagResources\TagValue $tag
     *           The tag value to attach to resources.
     *     @type \Google\Cloud\Dlp\V2\SensitivityScore $sensitivity_score
     *           Conditions attaching the tag to a resource on its profile having this
     *           sensitivity score.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The tag value to attach to resources.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.TagResources.TagValue tag = 1;</code>
     * @return \Google\Cloud\Dlp\V2\DataProfileAction\TagResources\TagValue|null
     */
    public function getTag()
    {
        return $this->tag;
    }

    public function hasTag()
    {
        return isset($this->tag);
    }

    public function clearTag()
    {
        unset($this->tag);
    }

    /**
     * The tag value to attach to resources.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.TagResources.TagValue tag = 1;</code>
     * @param \Google\Cloud\Dlp\V2\DataProfileAction\TagResources\TagValue $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DataProfileAction\TagResources\TagValue::class);
        $this->tag = $var;

        return $this;
    }

    /**
     * Conditions attaching the tag to a resource on its profile having this
     * sensitivity score.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 2;</code>
     * @return \Google\Cloud\Dlp\V2\SensitivityScore|null
     */
    public function getSensitivityScore()
    {
        return $this->readOneof(2);
    }

    public function hasSensitivityScore()
    {
        return $this->hasOneof(2);
    }

    /**
     * Conditions attaching the tag to a resource on its profile having this
     * sensitivity score.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 2;</code>
     * @param \Google\Cloud\Dlp\V2\SensitivityScore $var
     * @return $this
     */
    public function setSensitivityScore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\SensitivityScore::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TagCondition::class, \Google\Cloud\Dlp\V2\DataProfileAction_TagResources_TagCondition::class);

