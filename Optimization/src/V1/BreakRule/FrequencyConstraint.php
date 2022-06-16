<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\BreakRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One may further constrain the frequency and duration of the breaks
 * specified above, by enforcing a minimum break frequency, such as
 * "There must be a break of at least 1 hour every 12 hours". Assuming that
 * this can be interpreted as "Within any sliding time window of 12h, there
 * must be at least one break of at least one hour", that example would
 * translate to the following `FrequencyConstraint`:
 * ```
 * {
 *    min_break_duration { seconds: 3600 }         # 1 hour.
 *    max_inter_break_duration { seconds: 39600 }  # 11 hours (12 - 1 = 11).
 * }
 * ```
 * The timing and duration of the breaks in the solution will respect all
 * such constraints, in addition to the time windows and minimum durations
 * already specified in the `BreakRequest`.
 * A `FrequencyConstraint` may in practice apply to non-consecutive breaks.
 * For example, the following schedule honors the "1h every 12h" example:
 * ```
 *   04:00 vehicle start
 *    .. performing travel and visits ..
 *   09:00 1 hour break
 *   10:00 end of the break
 *    .. performing travel and visits ..
 *   12:00 20-min lunch break
 *   12:20 end of the break
 *    .. performing travel and visits ..
 *   21:00 1 hour break
 *   22:00 end of the break
 *    .. performing travel and visits ..
 *   23:59 vehicle end
 * ```
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.BreakRule.FrequencyConstraint</code>
 */
class FrequencyConstraint extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Minimum break duration for this constraint. Nonnegative.
     * See description of `FrequencyConstraint`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_break_duration = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $min_break_duration = null;
    /**
     * Required. Maximum allowed span of any interval of time in the route that does not
     * include at least partially a break of `duration >=
     * min_break_duration`. Must be positive.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_inter_break_duration = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $max_inter_break_duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $min_break_duration
     *           Required. Minimum break duration for this constraint. Nonnegative.
     *           See description of `FrequencyConstraint`.
     *     @type \Google\Protobuf\Duration $max_inter_break_duration
     *           Required. Maximum allowed span of any interval of time in the route that does not
     *           include at least partially a break of `duration >=
     *           min_break_duration`. Must be positive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Minimum break duration for this constraint. Nonnegative.
     * See description of `FrequencyConstraint`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_break_duration = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMinBreakDuration()
    {
        return $this->min_break_duration;
    }

    public function hasMinBreakDuration()
    {
        return isset($this->min_break_duration);
    }

    public function clearMinBreakDuration()
    {
        unset($this->min_break_duration);
    }

    /**
     * Required. Minimum break duration for this constraint. Nonnegative.
     * See description of `FrequencyConstraint`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_break_duration = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMinBreakDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->min_break_duration = $var;

        return $this;
    }

    /**
     * Required. Maximum allowed span of any interval of time in the route that does not
     * include at least partially a break of `duration >=
     * min_break_duration`. Must be positive.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_inter_break_duration = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaxInterBreakDuration()
    {
        return $this->max_inter_break_duration;
    }

    public function hasMaxInterBreakDuration()
    {
        return isset($this->max_inter_break_duration);
    }

    public function clearMaxInterBreakDuration()
    {
        unset($this->max_inter_break_duration);
    }

    /**
     * Required. Maximum allowed span of any interval of time in the route that does not
     * include at least partially a break of `duration >=
     * min_break_duration`. Must be positive.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_inter_break_duration = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaxInterBreakDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->max_inter_break_duration = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FrequencyConstraint::class, \Google\Cloud\Optimization\V1\BreakRule_FrequencyConstraint::class);

