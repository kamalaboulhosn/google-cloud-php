<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/audit_log.proto

namespace Google\Cloud\Audit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Authorization information for the operation.
 *
 * Generated from protobuf message <code>google.cloud.audit.AuthorizationInfo</code>
 */
class AuthorizationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource being accessed, as a REST-style or cloud resource string.
     * For example:
     *     bigquery.googleapis.com/projects/PROJECTID/datasets/DATASETID
     * or
     *     projects/PROJECTID/datasets/DATASETID
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     */
    protected $resource = '';
    /**
     * The required IAM permission.
     *
     * Generated from protobuf field <code>string permission = 2;</code>
     */
    protected $permission = '';
    /**
     * Whether or not authorization for `resource` and `permission`
     * was granted.
     *
     * Generated from protobuf field <code>bool granted = 3;</code>
     */
    protected $granted = false;
    /**
     * Resource attributes used in IAM condition evaluation. This field contains
     * resource attributes like resource type and resource name.
     * To get the whole view of the attributes used in IAM
     * condition evaluation, the user must also look into
     * `AuditLog.request_metadata.request_attributes`.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Resource resource_attributes = 5;</code>
     */
    protected $resource_attributes = null;
    /**
     * The type of the permission that was checked. For data access audit logs
     * this corresponds with the permission type that must be enabled in the
     * project/folder/organization IAM policy in order for the log to be written.
     *
     * Generated from protobuf field <code>.google.cloud.audit.AuthorizationInfo.PermissionType permission_type = 7;</code>
     */
    protected $permission_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource
     *           The resource being accessed, as a REST-style or cloud resource string.
     *           For example:
     *               bigquery.googleapis.com/projects/PROJECTID/datasets/DATASETID
     *           or
     *               projects/PROJECTID/datasets/DATASETID
     *     @type string $permission
     *           The required IAM permission.
     *     @type bool $granted
     *           Whether or not authorization for `resource` and `permission`
     *           was granted.
     *     @type \Google\Rpc\Context\AttributeContext\Resource $resource_attributes
     *           Resource attributes used in IAM condition evaluation. This field contains
     *           resource attributes like resource type and resource name.
     *           To get the whole view of the attributes used in IAM
     *           condition evaluation, the user must also look into
     *           `AuditLog.request_metadata.request_attributes`.
     *     @type int $permission_type
     *           The type of the permission that was checked. For data access audit logs
     *           this corresponds with the permission type that must be enabled in the
     *           project/folder/organization IAM policy in order for the log to be written.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\AuditLog::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource being accessed, as a REST-style or cloud resource string.
     * For example:
     *     bigquery.googleapis.com/projects/PROJECTID/datasets/DATASETID
     * or
     *     projects/PROJECTID/datasets/DATASETID
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The resource being accessed, as a REST-style or cloud resource string.
     * For example:
     *     bigquery.googleapis.com/projects/PROJECTID/datasets/DATASETID
     * or
     *     projects/PROJECTID/datasets/DATASETID
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * The required IAM permission.
     *
     * Generated from protobuf field <code>string permission = 2;</code>
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * The required IAM permission.
     *
     * Generated from protobuf field <code>string permission = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPermission($var)
    {
        GPBUtil::checkString($var, True);
        $this->permission = $var;

        return $this;
    }

    /**
     * Whether or not authorization for `resource` and `permission`
     * was granted.
     *
     * Generated from protobuf field <code>bool granted = 3;</code>
     * @return bool
     */
    public function getGranted()
    {
        return $this->granted;
    }

    /**
     * Whether or not authorization for `resource` and `permission`
     * was granted.
     *
     * Generated from protobuf field <code>bool granted = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setGranted($var)
    {
        GPBUtil::checkBool($var);
        $this->granted = $var;

        return $this;
    }

    /**
     * Resource attributes used in IAM condition evaluation. This field contains
     * resource attributes like resource type and resource name.
     * To get the whole view of the attributes used in IAM
     * condition evaluation, the user must also look into
     * `AuditLog.request_metadata.request_attributes`.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Resource resource_attributes = 5;</code>
     * @return \Google\Rpc\Context\AttributeContext\Resource|null
     */
    public function getResourceAttributes()
    {
        return $this->resource_attributes;
    }

    public function hasResourceAttributes()
    {
        return isset($this->resource_attributes);
    }

    public function clearResourceAttributes()
    {
        unset($this->resource_attributes);
    }

    /**
     * Resource attributes used in IAM condition evaluation. This field contains
     * resource attributes like resource type and resource name.
     * To get the whole view of the attributes used in IAM
     * condition evaluation, the user must also look into
     * `AuditLog.request_metadata.request_attributes`.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Resource resource_attributes = 5;</code>
     * @param \Google\Rpc\Context\AttributeContext\Resource $var
     * @return $this
     */
    public function setResourceAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Context\AttributeContext\Resource::class);
        $this->resource_attributes = $var;

        return $this;
    }

    /**
     * The type of the permission that was checked. For data access audit logs
     * this corresponds with the permission type that must be enabled in the
     * project/folder/organization IAM policy in order for the log to be written.
     *
     * Generated from protobuf field <code>.google.cloud.audit.AuthorizationInfo.PermissionType permission_type = 7;</code>
     * @return int
     */
    public function getPermissionType()
    {
        return $this->permission_type;
    }

    /**
     * The type of the permission that was checked. For data access audit logs
     * this corresponds with the permission type that must be enabled in the
     * project/folder/organization IAM policy in order for the log to be written.
     *
     * Generated from protobuf field <code>.google.cloud.audit.AuthorizationInfo.PermissionType permission_type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPermissionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Audit\AuthorizationInfo\PermissionType::class);
        $this->permission_type = $var;

        return $this;
    }

}

