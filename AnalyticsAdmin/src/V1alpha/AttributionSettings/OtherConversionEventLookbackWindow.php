<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha\AttributionSettings;

use UnexpectedValueException;

/**
 * How far back in time events should be considered for inclusion in a
 * converting path for all conversions other than first app install/first site
 * visit.
 *
 * Protobuf type <code>google.analytics.admin.v1alpha.AttributionSettings.OtherConversionEventLookbackWindow</code>
 */
class OtherConversionEventLookbackWindow
{
    /**
     * Lookback window size unspecified.
     *
     * Generated from protobuf enum <code>OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED = 0;</code>
     */
    const OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED = 0;
    /**
     * 30-day lookback window.
     *
     * Generated from protobuf enum <code>OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_30_DAYS = 1;</code>
     */
    const OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_30_DAYS = 1;
    /**
     * 60-day lookback window.
     *
     * Generated from protobuf enum <code>OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_60_DAYS = 2;</code>
     */
    const OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_60_DAYS = 2;
    /**
     * 90-day lookback window.
     *
     * Generated from protobuf enum <code>OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_90_DAYS = 3;</code>
     */
    const OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_90_DAYS = 3;

    private static $valueToName = [
        self::OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED => 'OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED',
        self::OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_30_DAYS => 'OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_30_DAYS',
        self::OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_60_DAYS => 'OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_60_DAYS',
        self::OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_90_DAYS => 'OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_90_DAYS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


