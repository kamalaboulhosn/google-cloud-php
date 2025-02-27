<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/delivery/v1/delivery_api.proto

namespace Google\Maps\FleetEngine\Delivery\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `CreateTask` request message.
 *
 * Generated from protobuf message <code>maps.fleetengine.delivery.v1.CreateTaskRequest</code>
 */
class CreateTaskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The standard Delivery API request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryRequestHeader header = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $header = null;
    /**
     * Required. Must be in the format `providers/{provider}`. The `provider` must
     * be the Google Cloud Project ID. For example, `sample-cloud-project`.
     *
     * Generated from protobuf field <code>string parent = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. The Task ID must be unique, but it should be not a shipment
     * tracking ID. To store a shipment tracking ID, use the `tracking_id` field.
     * Note that multiple tasks can have the same `tracking_id`. Task IDs are
     * subject to the following restrictions:
     * * Must be a valid Unicode string.
     * * Limited to a maximum length of 64 characters.
     * * Normalized according to [Unicode Normalization Form C]
     * (http://www.unicode.org/reports/tr15/).
     * * May not contain any of the following ASCII characters: '/', ':', '?',
     * ',', or '#'.
     *
     * Generated from protobuf field <code>string task_id = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $task_id = '';
    /**
     * Required. The Task entity to create.
     * When creating a Task, the following fields are required:
     * * `type`
     * * `state` (must be set to `OPEN`)
     * * `tracking_id` (must not be set for `UNAVAILABLE` or `SCHEDULED_STOP`
     * tasks, but required for all other task types)
     * * `planned_location` (optional for `UNAVAILABLE` tasks)
     * * `task_duration`
     * The following fields can be optionally set:
     * * `target_time_window`
     * * `task_tracking_view_config`
     * * `attributes`
     * Note: The Task's `name` field is ignored. All other Task fields must not be
     * set; otherwise, an error is returned.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.Task task = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $task = null;

    /**
     * @param string                                    $parent Required. Must be in the format `providers/{provider}`. The `provider` must
     *                                                          be the Google Cloud Project ID. For example, `sample-cloud-project`.
     * @param \Google\Maps\FleetEngine\Delivery\V1\Task $task   Required. The Task entity to create.
     *                                                          When creating a Task, the following fields are required:
     *
     *                                                          * `type`
     *                                                          * `state` (must be set to `OPEN`)
     *                                                          * `tracking_id` (must not be set for `UNAVAILABLE` or `SCHEDULED_STOP`
     *                                                          tasks, but required for all other task types)
     *                                                          * `planned_location` (optional for `UNAVAILABLE` tasks)
     *                                                          * `task_duration`
     *
     *                                                          The following fields can be optionally set:
     *
     *                                                          * `target_time_window`
     *                                                          * `task_tracking_view_config`
     *                                                          * `attributes`
     *
     *                                                          Note: The Task's `name` field is ignored. All other Task fields must not be
     *                                                          set; otherwise, an error is returned.
     * @param string                                    $taskId Required. The Task ID must be unique, but it should be not a shipment
     *                                                          tracking ID. To store a shipment tracking ID, use the `tracking_id` field.
     *                                                          Note that multiple tasks can have the same `tracking_id`. Task IDs are
     *                                                          subject to the following restrictions:
     *
     *                                                          * Must be a valid Unicode string.
     *                                                          * Limited to a maximum length of 64 characters.
     *                                                          * Normalized according to [Unicode Normalization Form C]
     *                                                          (http://www.unicode.org/reports/tr15/).
     *                                                          * May not contain any of the following ASCII characters: '/', ':', '?',
     *                                                          ',', or '#'.
     *
     * @return \Google\Maps\FleetEngine\Delivery\V1\CreateTaskRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Maps\FleetEngine\Delivery\V1\Task $task, string $taskId): self
    {
        return (new self())
            ->setParent($parent)
            ->setTask($task)
            ->setTaskId($taskId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Maps\FleetEngine\Delivery\V1\DeliveryRequestHeader $header
     *           Optional. The standard Delivery API request header.
     *     @type string $parent
     *           Required. Must be in the format `providers/{provider}`. The `provider` must
     *           be the Google Cloud Project ID. For example, `sample-cloud-project`.
     *     @type string $task_id
     *           Required. The Task ID must be unique, but it should be not a shipment
     *           tracking ID. To store a shipment tracking ID, use the `tracking_id` field.
     *           Note that multiple tasks can have the same `tracking_id`. Task IDs are
     *           subject to the following restrictions:
     *           * Must be a valid Unicode string.
     *           * Limited to a maximum length of 64 characters.
     *           * Normalized according to [Unicode Normalization Form C]
     *           (http://www.unicode.org/reports/tr15/).
     *           * May not contain any of the following ASCII characters: '/', ':', '?',
     *           ',', or '#'.
     *     @type \Google\Maps\FleetEngine\Delivery\V1\Task $task
     *           Required. The Task entity to create.
     *           When creating a Task, the following fields are required:
     *           * `type`
     *           * `state` (must be set to `OPEN`)
     *           * `tracking_id` (must not be set for `UNAVAILABLE` or `SCHEDULED_STOP`
     *           tasks, but required for all other task types)
     *           * `planned_location` (optional for `UNAVAILABLE` tasks)
     *           * `task_duration`
     *           The following fields can be optionally set:
     *           * `target_time_window`
     *           * `task_tracking_view_config`
     *           * `attributes`
     *           Note: The Task's `name` field is ignored. All other Task fields must not be
     *           set; otherwise, an error is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\DeliveryApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The standard Delivery API request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryRequestHeader header = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\DeliveryRequestHeader|null
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
     * Optional. The standard Delivery API request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryRequestHeader header = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\DeliveryRequestHeader $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\DeliveryRequestHeader::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Required. Must be in the format `providers/{provider}`. The `provider` must
     * be the Google Cloud Project ID. For example, `sample-cloud-project`.
     *
     * Generated from protobuf field <code>string parent = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Must be in the format `providers/{provider}`. The `provider` must
     * be the Google Cloud Project ID. For example, `sample-cloud-project`.
     *
     * Generated from protobuf field <code>string parent = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The Task ID must be unique, but it should be not a shipment
     * tracking ID. To store a shipment tracking ID, use the `tracking_id` field.
     * Note that multiple tasks can have the same `tracking_id`. Task IDs are
     * subject to the following restrictions:
     * * Must be a valid Unicode string.
     * * Limited to a maximum length of 64 characters.
     * * Normalized according to [Unicode Normalization Form C]
     * (http://www.unicode.org/reports/tr15/).
     * * May not contain any of the following ASCII characters: '/', ':', '?',
     * ',', or '#'.
     *
     * Generated from protobuf field <code>string task_id = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * Required. The Task ID must be unique, but it should be not a shipment
     * tracking ID. To store a shipment tracking ID, use the `tracking_id` field.
     * Note that multiple tasks can have the same `tracking_id`. Task IDs are
     * subject to the following restrictions:
     * * Must be a valid Unicode string.
     * * Limited to a maximum length of 64 characters.
     * * Normalized according to [Unicode Normalization Form C]
     * (http://www.unicode.org/reports/tr15/).
     * * May not contain any of the following ASCII characters: '/', ':', '?',
     * ',', or '#'.
     *
     * Generated from protobuf field <code>string task_id = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTaskId($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_id = $var;

        return $this;
    }

    /**
     * Required. The Task entity to create.
     * When creating a Task, the following fields are required:
     * * `type`
     * * `state` (must be set to `OPEN`)
     * * `tracking_id` (must not be set for `UNAVAILABLE` or `SCHEDULED_STOP`
     * tasks, but required for all other task types)
     * * `planned_location` (optional for `UNAVAILABLE` tasks)
     * * `task_duration`
     * The following fields can be optionally set:
     * * `target_time_window`
     * * `task_tracking_view_config`
     * * `attributes`
     * Note: The Task's `name` field is ignored. All other Task fields must not be
     * set; otherwise, an error is returned.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.Task task = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\Task|null
     */
    public function getTask()
    {
        return $this->task;
    }

    public function hasTask()
    {
        return isset($this->task);
    }

    public function clearTask()
    {
        unset($this->task);
    }

    /**
     * Required. The Task entity to create.
     * When creating a Task, the following fields are required:
     * * `type`
     * * `state` (must be set to `OPEN`)
     * * `tracking_id` (must not be set for `UNAVAILABLE` or `SCHEDULED_STOP`
     * tasks, but required for all other task types)
     * * `planned_location` (optional for `UNAVAILABLE` tasks)
     * * `task_duration`
     * The following fields can be optionally set:
     * * `target_time_window`
     * * `task_tracking_view_config`
     * * `attributes`
     * Note: The Task's `name` field is ignored. All other Task fields must not be
     * set; otherwise, an error is returned.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.Task task = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\Task $var
     * @return $this
     */
    public function setTask($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\Task::class);
        $this->task = $var;

        return $this;
    }

}

