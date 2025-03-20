<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/v1/workflows.proto

namespace Google\Cloud\Workflows\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the
 * [ListWorkflowRevisions][google.cloud.workflows.v1.Workflows.ListWorkflowRevisions]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.workflows.v1.ListWorkflowRevisionsRequest</code>
 */
class ListWorkflowRevisionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Workflow for which the revisions should be listed.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The maximum number of revisions to return per page. If a value is not
     * specified, a default value of 20 is used. The maximum permitted value is
     * 100. Values greater than 100 are coerced down to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The page token, received from a previous ListWorkflowRevisions call.
     * Provide this to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Workflow for which the revisions should be listed.
     *           Format: projects/{project}/locations/{location}/workflows/{workflow}
     *     @type int $page_size
     *           The maximum number of revisions to return per page. If a value is not
     *           specified, a default value of 20 is used. The maximum permitted value is
     *           100. Values greater than 100 are coerced down to 100.
     *     @type string $page_token
     *           The page token, received from a previous ListWorkflowRevisions call.
     *           Provide this to retrieve the subsequent page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Workflows\V1\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Workflow for which the revisions should be listed.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Workflow for which the revisions should be listed.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
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
     * The maximum number of revisions to return per page. If a value is not
     * specified, a default value of 20 is used. The maximum permitted value is
     * 100. Values greater than 100 are coerced down to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of revisions to return per page. If a value is not
     * specified, a default value of 20 is used. The maximum permitted value is
     * 100. Values greater than 100 are coerced down to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
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
     * The page token, received from a previous ListWorkflowRevisions call.
     * Provide this to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The page token, received from a previous ListWorkflowRevisions call.
     * Provide this to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

