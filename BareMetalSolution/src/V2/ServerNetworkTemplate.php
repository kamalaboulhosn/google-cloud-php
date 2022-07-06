<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/instance.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Network template.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.ServerNetworkTemplate</code>
 */
class ServerNetworkTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Template's unique name. The full resource name follows the pattern:
     * `projects/{project}/locations/{location}/serverNetworkTemplate/{server_network_template}`
     * Generally, the {server_network_template} follows the syntax of
     * "bond<interface_type_index><bond_mode>" or "nic<interface_type_index>".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Instance types this template is applicable to.
     *
     * Generated from protobuf field <code>repeated string applicable_instance_types = 2;</code>
     */
    private $applicable_instance_types;
    /**
     * Logical interfaces.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.ServerNetworkTemplate.LogicalInterface logical_interfaces = 3;</code>
     */
    private $logical_interfaces;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Template's unique name. The full resource name follows the pattern:
     *           `projects/{project}/locations/{location}/serverNetworkTemplate/{server_network_template}`
     *           Generally, the {server_network_template} follows the syntax of
     *           "bond<interface_type_index><bond_mode>" or "nic<interface_type_index>".
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $applicable_instance_types
     *           Instance types this template is applicable to.
     *     @type \Google\Cloud\BareMetalSolution\V2\ServerNetworkTemplate\LogicalInterface[]|\Google\Protobuf\Internal\RepeatedField $logical_interfaces
     *           Logical interfaces.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Template's unique name. The full resource name follows the pattern:
     * `projects/{project}/locations/{location}/serverNetworkTemplate/{server_network_template}`
     * Generally, the {server_network_template} follows the syntax of
     * "bond<interface_type_index><bond_mode>" or "nic<interface_type_index>".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Template's unique name. The full resource name follows the pattern:
     * `projects/{project}/locations/{location}/serverNetworkTemplate/{server_network_template}`
     * Generally, the {server_network_template} follows the syntax of
     * "bond<interface_type_index><bond_mode>" or "nic<interface_type_index>".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Instance types this template is applicable to.
     *
     * Generated from protobuf field <code>repeated string applicable_instance_types = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApplicableInstanceTypes()
    {
        return $this->applicable_instance_types;
    }

    /**
     * Instance types this template is applicable to.
     *
     * Generated from protobuf field <code>repeated string applicable_instance_types = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApplicableInstanceTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->applicable_instance_types = $arr;

        return $this;
    }

    /**
     * Logical interfaces.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.ServerNetworkTemplate.LogicalInterface logical_interfaces = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogicalInterfaces()
    {
        return $this->logical_interfaces;
    }

    /**
     * Logical interfaces.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.ServerNetworkTemplate.LogicalInterface logical_interfaces = 3;</code>
     * @param \Google\Cloud\BareMetalSolution\V2\ServerNetworkTemplate\LogicalInterface[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogicalInterfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BareMetalSolution\V2\ServerNetworkTemplate\LogicalInterface::class);
        $this->logical_interfaces = $arr;

        return $this;
    }

}

