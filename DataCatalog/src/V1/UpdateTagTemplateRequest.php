<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [UpdateTagTemplate][google.cloud.datacatalog.v1.DataCatalog.UpdateTagTemplate].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.UpdateTagTemplateRequest</code>
 */
class UpdateTagTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The template to update. The "name" field must be set.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplate tag_template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $tag_template = null;
    /**
     * The field mask specifies the parts of the template to overwrite.
     * Allowed fields:
     *   * `display_name`
     * If absent or empty, all of the allowed fields above will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\TagTemplate $tag_template
     *           Required. The template to update. The "name" field must be set.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The field mask specifies the parts of the template to overwrite.
     *           Allowed fields:
     *             * `display_name`
     *           If absent or empty, all of the allowed fields above will be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The template to update. The "name" field must be set.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplate tag_template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataCatalog\V1\TagTemplate
     */
    public function getTagTemplate()
    {
        return $this->tag_template;
    }

    /**
     * Required. The template to update. The "name" field must be set.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplate tag_template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataCatalog\V1\TagTemplate $var
     * @return $this
     */
    public function setTagTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\TagTemplate::class);
        $this->tag_template = $var;

        return $this;
    }

    /**
     * The field mask specifies the parts of the template to overwrite.
     * Allowed fields:
     *   * `display_name`
     * If absent or empty, all of the allowed fields above will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * The field mask specifies the parts of the template to overwrite.
     * Allowed fields:
     *   * `display_name`
     * If absent or empty, all of the allowed fields above will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

