<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateSubpropertyEventFilter RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.CreateSubpropertyEventFilterRequest</code>
 */
class CreateSubpropertyEventFilterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ordinary property for which to create a subproperty event
     * filter. Format: properties/property_id Example: properties/123
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The subproperty event filter to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SubpropertyEventFilter subproperty_event_filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $subproperty_event_filter = null;

    /**
     * @param string                                                 $parent                 Required. The ordinary property for which to create a subproperty event
     *                                                                                       filter. Format: properties/property_id Example: properties/123
     *                                                                                       Please see {@see AnalyticsAdminServiceClient::propertyName()} for help formatting this field.
     * @param \Google\Analytics\Admin\V1alpha\SubpropertyEventFilter $subpropertyEventFilter Required. The subproperty event filter to create.
     *
     * @return \Google\Analytics\Admin\V1alpha\CreateSubpropertyEventFilterRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Analytics\Admin\V1alpha\SubpropertyEventFilter $subpropertyEventFilter): self
    {
        return (new self())
            ->setParent($parent)
            ->setSubpropertyEventFilter($subpropertyEventFilter);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The ordinary property for which to create a subproperty event
     *           filter. Format: properties/property_id Example: properties/123
     *     @type \Google\Analytics\Admin\V1alpha\SubpropertyEventFilter $subproperty_event_filter
     *           Required. The subproperty event filter to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ordinary property for which to create a subproperty event
     * filter. Format: properties/property_id Example: properties/123
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The ordinary property for which to create a subproperty event
     * filter. Format: properties/property_id Example: properties/123
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The subproperty event filter to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SubpropertyEventFilter subproperty_event_filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\SubpropertyEventFilter|null
     */
    public function getSubpropertyEventFilter()
    {
        return $this->subproperty_event_filter;
    }

    public function hasSubpropertyEventFilter()
    {
        return isset($this->subproperty_event_filter);
    }

    public function clearSubpropertyEventFilter()
    {
        unset($this->subproperty_event_filter);
    }

    /**
     * Required. The subproperty event filter to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SubpropertyEventFilter subproperty_event_filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\SubpropertyEventFilter $var
     * @return $this
     */
    public function setSubpropertyEventFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\SubpropertyEventFilter::class);
        $this->subproperty_event_filter = $var;

        return $this;
    }

}

