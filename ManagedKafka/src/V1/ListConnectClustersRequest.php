<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/v1/managed_kafka_connect.proto

namespace Google\Cloud\ManagedKafka\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for ListConnectClusters.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.v1.ListConnectClustersRequest</code>
 */
class ListConnectClustersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent project/location whose Connect clusters are to be
     * listed. Structured like `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of Connect clusters to return. The service may
     * return fewer than this value. If unspecified, server will pick an
     * appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A page token, received from a previous `ListConnectClusters`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListConnectClusters`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Filter expression for the result.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. Order by fields for the result.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The parent project/location whose Connect clusters are to be
     *                       listed. Structured like `projects/{project}/locations/{location}`. Please see
     *                       {@see ManagedKafkaConnectClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\ManagedKafka\V1\ListConnectClustersRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent project/location whose Connect clusters are to be
     *           listed. Structured like `projects/{project}/locations/{location}`.
     *     @type int $page_size
     *           Optional. The maximum number of Connect clusters to return. The service may
     *           return fewer than this value. If unspecified, server will pick an
     *           appropriate default.
     *     @type string $page_token
     *           Optional. A page token, received from a previous `ListConnectClusters`
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListConnectClusters`
     *           must match the call that provided the page token.
     *     @type string $filter
     *           Optional. Filter expression for the result.
     *     @type string $order_by
     *           Optional. Order by fields for the result.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\V1\ManagedKafkaConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent project/location whose Connect clusters are to be
     * listed. Structured like `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent project/location whose Connect clusters are to be
     * listed. Structured like `projects/{project}/locations/{location}`.
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
     * Optional. The maximum number of Connect clusters to return. The service may
     * return fewer than this value. If unspecified, server will pick an
     * appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of Connect clusters to return. The service may
     * return fewer than this value. If unspecified, server will pick an
     * appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A page token, received from a previous `ListConnectClusters`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListConnectClusters`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous `ListConnectClusters`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListConnectClusters`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Filter expression for the result.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Filter expression for the result.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. Order by fields for the result.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. Order by fields for the result.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

