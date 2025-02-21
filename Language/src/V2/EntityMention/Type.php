<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v2/language_service.proto

namespace Google\Cloud\Language\V2\EntityMention;

use UnexpectedValueException;

/**
 * The supported types of mentions.
 *
 * Protobuf type <code>google.cloud.language.v2.EntityMention.Type</code>
 */
class Type
{
    /**
     * Unknown
     *
     * Generated from protobuf enum <code>TYPE_UNKNOWN = 0;</code>
     */
    const TYPE_UNKNOWN = 0;
    /**
     * Proper name
     *
     * Generated from protobuf enum <code>PROPER = 1;</code>
     */
    const PROPER = 1;
    /**
     * Common noun (or noun compound)
     *
     * Generated from protobuf enum <code>COMMON = 2;</code>
     */
    const COMMON = 2;

    private static $valueToName = [
        self::TYPE_UNKNOWN => 'TYPE_UNKNOWN',
        self::PROPER => 'PROPER',
        self::COMMON => 'COMMON',
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


