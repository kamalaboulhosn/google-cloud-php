<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/vehicle_api.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DeleteVehicle request message.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.DeleteVehicleRequest</code>
 */
class DeleteVehicleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The standard Fleet Engine request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader header = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $header = null;
    /**
     * Required. Must be in the format
     * `providers/{provider}/vehicles/{vehicle}`.
     * The {provider} must be the Project ID (for example, `sample-cloud-project`)
     * of the Google Cloud Project of which the service account making
     * this call is a member.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Must be in the format
     *                     `providers/{provider}/vehicles/{vehicle}`.
     *                     The {provider} must be the Project ID (for example, `sample-cloud-project`)
     *                     of the Google Cloud Project of which the service account making
     *                     this call is a member. Please see
     *                     {@see VehicleServiceClient::vehicleName()} for help formatting this field.
     *
     * @return \Google\Maps\FleetEngine\V1\DeleteVehicleRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Maps\FleetEngine\V1\RequestHeader $header
     *           Optional. The standard Fleet Engine request header.
     *     @type string $name
     *           Required. Must be in the format
     *           `providers/{provider}/vehicles/{vehicle}`.
     *           The {provider} must be the Project ID (for example, `sample-cloud-project`)
     *           of the Google Cloud Project of which the service account making
     *           this call is a member.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\VehicleApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The standard Fleet Engine request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader header = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Maps\FleetEngine\V1\RequestHeader|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Optional. The standard Fleet Engine request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader header = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Maps\FleetEngine\V1\RequestHeader $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\V1\RequestHeader::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Required. Must be in the format
     * `providers/{provider}/vehicles/{vehicle}`.
     * The {provider} must be the Project ID (for example, `sample-cloud-project`)
     * of the Google Cloud Project of which the service account making
     * this call is a member.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Must be in the format
     * `providers/{provider}/vehicles/{vehicle}`.
     * The {provider} must be the Project ID (for example, `sample-cloud-project`)
     * of the Google Cloud Project of which the service account making
     * this call is a member.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

