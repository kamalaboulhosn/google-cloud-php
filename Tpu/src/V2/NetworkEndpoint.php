<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace Google\Cloud\Tpu\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A network endpoint over which a TPU worker can be reached.
 *
 * Generated from protobuf message <code>google.cloud.tpu.v2.NetworkEndpoint</code>
 */
class NetworkEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The internal IP address of this network endpoint.
     *
     * Generated from protobuf field <code>string ip_address = 1;</code>
     */
    protected $ip_address = '';
    /**
     * The port of this network endpoint.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     */
    protected $port = 0;
    /**
     * The access config for the TPU worker.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v2.AccessConfig access_config = 5;</code>
     */
    protected $access_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ip_address
     *           The internal IP address of this network endpoint.
     *     @type int $port
     *           The port of this network endpoint.
     *     @type \Google\Cloud\Tpu\V2\AccessConfig $access_config
     *           The access config for the TPU worker.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tpu\V2\CloudTpu::initOnce();
        parent::__construct($data);
    }

    /**
     * The internal IP address of this network endpoint.
     *
     * Generated from protobuf field <code>string ip_address = 1;</code>
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * The internal IP address of this network endpoint.
     *
     * Generated from protobuf field <code>string ip_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * The port of this network endpoint.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * The port of this network endpoint.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * The access config for the TPU worker.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v2.AccessConfig access_config = 5;</code>
     * @return \Google\Cloud\Tpu\V2\AccessConfig|null
     */
    public function getAccessConfig()
    {
        return $this->access_config;
    }

    public function hasAccessConfig()
    {
        return isset($this->access_config);
    }

    public function clearAccessConfig()
    {
        unset($this->access_config);
    }

    /**
     * The access config for the TPU worker.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v2.AccessConfig access_config = 5;</code>
     * @param \Google\Cloud\Tpu\V2\AccessConfig $var
     * @return $this
     */
    public function setAccessConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Tpu\V2\AccessConfig::class);
        $this->access_config = $var;

        return $this;
    }

}

