<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableInstanceAdmin.DeleteLogicalView.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.DeleteLogicalViewRequest</code>
 */
class DeleteLogicalViewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the logical view to be deleted.
     * Format:
     * `projects/{project}/instances/{instance}/logicalViews/{logical_view}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The current etag of the logical view.
     * If an etag is provided and does not match the current etag of the
     * logical view, deletion will be blocked and an ABORTED error will be
     * returned.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';

    /**
     * @param string $name Required. The unique name of the logical view to be deleted.
     *                     Format:
     *                     `projects/{project}/instances/{instance}/logicalViews/{logical_view}`. Please see
     *                     {@see BigtableInstanceAdminClient::logicalViewName()} for help formatting this field.
     *
     * @return \Google\Cloud\Bigtable\Admin\V2\DeleteLogicalViewRequest
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
     *     @type string $name
     *           Required. The unique name of the logical view to be deleted.
     *           Format:
     *           `projects/{project}/instances/{instance}/logicalViews/{logical_view}`.
     *     @type string $etag
     *           Optional. The current etag of the logical view.
     *           If an etag is provided and does not match the current etag of the
     *           logical view, deletion will be blocked and an ABORTED error will be
     *           returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the logical view to be deleted.
     * Format:
     * `projects/{project}/instances/{instance}/logicalViews/{logical_view}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique name of the logical view to be deleted.
     * Format:
     * `projects/{project}/instances/{instance}/logicalViews/{logical_view}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. The current etag of the logical view.
     * If an etag is provided and does not match the current etag of the
     * logical view, deletion will be blocked and an ABORTED error will be
     * returned.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. The current etag of the logical view.
     * If an etag is provided and does not match the current etag of the
     * logical view, deletion will be blocked and an ABORTED error will be
     * returned.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

