<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Service-Level Objective (SLO) describes a level of desired good service. It
 * consists of a service-level indicator (SLI), a performance goal, and a period
 * over which the objective is to be evaluated against that goal. The SLO can
 * use SLIs defined in a number of different manners. Typical SLOs might include
 * "99% of requests in each rolling week have latency below 200 milliseconds" or
 * "99.5% of requests in each calendar month return successfully."
 *
 * Generated from protobuf message <code>google.monitoring.v3.ServiceLevelObjective</code>
 */
class ServiceLevelObjective extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name for this `ServiceLevelObjective`.
     * Of the form
     * `projects/{project_id}/services/{service_id}/serviceLevelObjectives/{slo_name}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Name used for UI elements listing this SLO.
     *
     * Generated from protobuf field <code>string display_name = 11;</code>
     */
    private $display_name = '';
    /**
     * The definition of good service, used to measure and calculate the quality
     * of the `Service`'s performance with respect to a single aspect of service
     * quality.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ServiceLevelIndicator service_level_indicator = 3;</code>
     */
    private $service_level_indicator = null;
    /**
     * The fraction of service that must be good in order for this objective to be
     * met. `0 < goal <= 0.999`.
     *
     * Generated from protobuf field <code>double goal = 4;</code>
     */
    private $goal = 0.0;
    protected $period;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name for this `ServiceLevelObjective`.
     *           Of the form
     *           `projects/{project_id}/services/{service_id}/serviceLevelObjectives/{slo_name}`.
     *     @type string $display_name
     *           Name used for UI elements listing this SLO.
     *     @type \Google\Cloud\Monitoring\V3\ServiceLevelIndicator $service_level_indicator
     *           The definition of good service, used to measure and calculate the quality
     *           of the `Service`'s performance with respect to a single aspect of service
     *           quality.
     *     @type float $goal
     *           The fraction of service that must be good in order for this objective to be
     *           met. `0 < goal <= 0.999`.
     *     @type \Google\Protobuf\Duration $rolling_period
     *           A rolling time period, semantically "in the past `<rolling_period>`".
     *           Must be an integer multiple of 1 day no larger than 30 days.
     *     @type int $calendar_period
     *           A calendar period, semantically "since the start of the current
     *           `<calendar_period>`". At this time, only `DAY`, `WEEK`, `FORTNIGHT`, and
     *           `MONTH` are supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name for this `ServiceLevelObjective`.
     * Of the form
     * `projects/{project_id}/services/{service_id}/serviceLevelObjectives/{slo_name}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name for this `ServiceLevelObjective`.
     * Of the form
     * `projects/{project_id}/services/{service_id}/serviceLevelObjectives/{slo_name}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Name used for UI elements listing this SLO.
     *
     * Generated from protobuf field <code>string display_name = 11;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Name used for UI elements listing this SLO.
     *
     * Generated from protobuf field <code>string display_name = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The definition of good service, used to measure and calculate the quality
     * of the `Service`'s performance with respect to a single aspect of service
     * quality.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ServiceLevelIndicator service_level_indicator = 3;</code>
     * @return \Google\Cloud\Monitoring\V3\ServiceLevelIndicator
     */
    public function getServiceLevelIndicator()
    {
        return $this->service_level_indicator;
    }

    /**
     * The definition of good service, used to measure and calculate the quality
     * of the `Service`'s performance with respect to a single aspect of service
     * quality.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ServiceLevelIndicator service_level_indicator = 3;</code>
     * @param \Google\Cloud\Monitoring\V3\ServiceLevelIndicator $var
     * @return $this
     */
    public function setServiceLevelIndicator($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\ServiceLevelIndicator::class);
        $this->service_level_indicator = $var;

        return $this;
    }

    /**
     * The fraction of service that must be good in order for this objective to be
     * met. `0 < goal <= 0.999`.
     *
     * Generated from protobuf field <code>double goal = 4;</code>
     * @return float
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * The fraction of service that must be good in order for this objective to be
     * met. `0 < goal <= 0.999`.
     *
     * Generated from protobuf field <code>double goal = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setGoal($var)
    {
        GPBUtil::checkDouble($var);
        $this->goal = $var;

        return $this;
    }

    /**
     * A rolling time period, semantically "in the past `<rolling_period>`".
     * Must be an integer multiple of 1 day no larger than 30 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration rolling_period = 5;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getRollingPeriod()
    {
        return $this->readOneof(5);
    }

    /**
     * A rolling time period, semantically "in the past `<rolling_period>`".
     * Must be an integer multiple of 1 day no larger than 30 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration rolling_period = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setRollingPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * A calendar period, semantically "since the start of the current
     * `<calendar_period>`". At this time, only `DAY`, `WEEK`, `FORTNIGHT`, and
     * `MONTH` are supported.
     *
     * Generated from protobuf field <code>.google.type.CalendarPeriod calendar_period = 6;</code>
     * @return int
     */
    public function getCalendarPeriod()
    {
        return $this->readOneof(6);
    }

    /**
     * A calendar period, semantically "since the start of the current
     * `<calendar_period>`". At this time, only `DAY`, `WEEK`, `FORTNIGHT`, and
     * `MONTH` are supported.
     *
     * Generated from protobuf field <code>.google.type.CalendarPeriod calendar_period = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCalendarPeriod($var)
    {
        GPBUtil::checkEnum($var, \Google\Type\CalendarPeriod::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->whichOneof("period");
    }

}
