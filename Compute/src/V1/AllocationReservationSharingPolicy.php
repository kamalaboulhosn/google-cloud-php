<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AllocationReservationSharingPolicy</code>
 */
class AllocationReservationSharingPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Sharing config for all Google Cloud services.
     * Check the ServiceShareType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string service_share_type = 514508644;</code>
     */
    private $service_share_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_share_type
     *           Sharing config for all Google Cloud services.
     *           Check the ServiceShareType enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Sharing config for all Google Cloud services.
     * Check the ServiceShareType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string service_share_type = 514508644;</code>
     * @return string
     */
    public function getServiceShareType()
    {
        return isset($this->service_share_type) ? $this->service_share_type : '';
    }

    public function hasServiceShareType()
    {
        return isset($this->service_share_type);
    }

    public function clearServiceShareType()
    {
        unset($this->service_share_type);
    }

    /**
     * Sharing config for all Google Cloud services.
     * Check the ServiceShareType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string service_share_type = 514508644;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceShareType($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_share_type = $var;

        return $this;
    }

}

