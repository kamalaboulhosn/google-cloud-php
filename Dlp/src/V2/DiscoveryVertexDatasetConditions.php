<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Requirements that must be true before a dataset is profiled for the
 * first time.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DiscoveryVertexDatasetConditions</code>
 */
class DiscoveryVertexDatasetConditions extends \Google\Protobuf\Internal\Message
{
    /**
     * Vertex AI dataset must have been created after this date. Used to avoid
     * backfilling.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_after = 1;</code>
     */
    protected $created_after = null;
    /**
     * Minimum age a Vertex AI dataset must have. If set, the value must be 1 hour
     * or greater.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_age = 2;</code>
     */
    protected $min_age = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $created_after
     *           Vertex AI dataset must have been created after this date. Used to avoid
     *           backfilling.
     *     @type \Google\Protobuf\Duration $min_age
     *           Minimum age a Vertex AI dataset must have. If set, the value must be 1 hour
     *           or greater.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Vertex AI dataset must have been created after this date. Used to avoid
     * backfilling.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_after = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAfter()
    {
        return $this->created_after;
    }

    public function hasCreatedAfter()
    {
        return isset($this->created_after);
    }

    public function clearCreatedAfter()
    {
        unset($this->created_after);
    }

    /**
     * Vertex AI dataset must have been created after this date. Used to avoid
     * backfilling.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_after = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAfter($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_after = $var;

        return $this;
    }

    /**
     * Minimum age a Vertex AI dataset must have. If set, the value must be 1 hour
     * or greater.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_age = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMinAge()
    {
        return $this->min_age;
    }

    public function hasMinAge()
    {
        return isset($this->min_age);
    }

    public function clearMinAge()
    {
        unset($this->min_age);
    }

    /**
     * Minimum age a Vertex AI dataset must have. If set, the value must be 1 hour
     * or greater.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_age = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMinAge($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->min_age = $var;

        return $this;
    }

}

