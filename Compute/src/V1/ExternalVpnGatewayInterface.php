<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The interface for the external VPN gateway.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ExternalVpnGatewayInterface</code>
 */
class ExternalVpnGatewayInterface extends \Google\Protobuf\Internal\Message
{
    /**
     * The numeric ID of this interface. The allowed input values for this id for different redundancy types of external VPN gateway: - SINGLE_IP_INTERNALLY_REDUNDANT - 0 - TWO_IPS_REDUNDANCY - 0, 1 - FOUR_IPS_REDUNDANCY - 0, 1, 2, 3 
     *
     * Generated from protobuf field <code>optional uint32 id = 3355;</code>
     */
    private $id = null;
    /**
     * IP address of the interface in the external VPN gateway. Only IPv4 is supported. This IP address can be either from your on-premise gateway or another Cloud provider's VPN gateway, it cannot be an IP address from Google Compute Engine.
     *
     * Generated from protobuf field <code>optional string ip_address = 406272220;</code>
     */
    private $ip_address = null;
    /**
     * IPv6 address of the interface in the external VPN gateway. This IPv6 address can be either from your on-premise gateway or another Cloud provider's VPN gateway, it cannot be an IP address from Google Compute Engine. Must specify an IPv6 address (not IPV4-mapped) using any format described in RFC 4291 (e.g. 2001:db8:0:0:2d9:51:0:0). The output format is RFC 5952 format (e.g. 2001:db8::2d9:51:0:0).
     *
     * Generated from protobuf field <code>optional string ipv6_address = 341563804;</code>
     */
    private $ipv6_address = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *           The numeric ID of this interface. The allowed input values for this id for different redundancy types of external VPN gateway: - SINGLE_IP_INTERNALLY_REDUNDANT - 0 - TWO_IPS_REDUNDANCY - 0, 1 - FOUR_IPS_REDUNDANCY - 0, 1, 2, 3 
     *     @type string $ip_address
     *           IP address of the interface in the external VPN gateway. Only IPv4 is supported. This IP address can be either from your on-premise gateway or another Cloud provider's VPN gateway, it cannot be an IP address from Google Compute Engine.
     *     @type string $ipv6_address
     *           IPv6 address of the interface in the external VPN gateway. This IPv6 address can be either from your on-premise gateway or another Cloud provider's VPN gateway, it cannot be an IP address from Google Compute Engine. Must specify an IPv6 address (not IPV4-mapped) using any format described in RFC 4291 (e.g. 2001:db8:0:0:2d9:51:0:0). The output format is RFC 5952 format (e.g. 2001:db8::2d9:51:0:0).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The numeric ID of this interface. The allowed input values for this id for different redundancy types of external VPN gateway: - SINGLE_IP_INTERNALLY_REDUNDANT - 0 - TWO_IPS_REDUNDANCY - 0, 1 - FOUR_IPS_REDUNDANCY - 0, 1, 2, 3 
     *
     * Generated from protobuf field <code>optional uint32 id = 3355;</code>
     * @return int
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * The numeric ID of this interface. The allowed input values for this id for different redundancy types of external VPN gateway: - SINGLE_IP_INTERNALLY_REDUNDANT - 0 - TWO_IPS_REDUNDANCY - 0, 1 - FOUR_IPS_REDUNDANCY - 0, 1, 2, 3 
     *
     * Generated from protobuf field <code>optional uint32 id = 3355;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * IP address of the interface in the external VPN gateway. Only IPv4 is supported. This IP address can be either from your on-premise gateway or another Cloud provider's VPN gateway, it cannot be an IP address from Google Compute Engine.
     *
     * Generated from protobuf field <code>optional string ip_address = 406272220;</code>
     * @return string
     */
    public function getIpAddress()
    {
        return isset($this->ip_address) ? $this->ip_address : '';
    }

    public function hasIpAddress()
    {
        return isset($this->ip_address);
    }

    public function clearIpAddress()
    {
        unset($this->ip_address);
    }

    /**
     * IP address of the interface in the external VPN gateway. Only IPv4 is supported. This IP address can be either from your on-premise gateway or another Cloud provider's VPN gateway, it cannot be an IP address from Google Compute Engine.
     *
     * Generated from protobuf field <code>optional string ip_address = 406272220;</code>
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
     * IPv6 address of the interface in the external VPN gateway. This IPv6 address can be either from your on-premise gateway or another Cloud provider's VPN gateway, it cannot be an IP address from Google Compute Engine. Must specify an IPv6 address (not IPV4-mapped) using any format described in RFC 4291 (e.g. 2001:db8:0:0:2d9:51:0:0). The output format is RFC 5952 format (e.g. 2001:db8::2d9:51:0:0).
     *
     * Generated from protobuf field <code>optional string ipv6_address = 341563804;</code>
     * @return string
     */
    public function getIpv6Address()
    {
        return isset($this->ipv6_address) ? $this->ipv6_address : '';
    }

    public function hasIpv6Address()
    {
        return isset($this->ipv6_address);
    }

    public function clearIpv6Address()
    {
        unset($this->ipv6_address);
    }

    /**
     * IPv6 address of the interface in the external VPN gateway. This IPv6 address can be either from your on-premise gateway or another Cloud provider's VPN gateway, it cannot be an IP address from Google Compute Engine. Must specify an IPv6 address (not IPV4-mapped) using any format described in RFC 4291 (e.g. 2001:db8:0:0:2d9:51:0:0). The output format is RFC 5952 format (e.g. 2001:db8::2d9:51:0:0).
     *
     * Generated from protobuf field <code>optional string ipv6_address = 341563804;</code>
     * @param string $var
     * @return $this
     */
    public function setIpv6Address($var)
    {
        GPBUtil::checkString($var, True);
        $this->ipv6_address = $var;

        return $this;
    }

}

