<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v2/functions.proto

namespace Google\Cloud\Functions\V2;

use UnexpectedValueException;

/**
 * The type of the long running operation.
 *
 * Protobuf type <code>google.cloud.functions.v2.OperationType</code>
 */
class OperationType
{
    /**
     * Unspecified
     *
     * Generated from protobuf enum <code>OPERATIONTYPE_UNSPECIFIED = 0;</code>
     */
    const OPERATIONTYPE_UNSPECIFIED = 0;
    /**
     * CreateFunction
     *
     * Generated from protobuf enum <code>CREATE_FUNCTION = 1;</code>
     */
    const CREATE_FUNCTION = 1;
    /**
     * UpdateFunction
     *
     * Generated from protobuf enum <code>UPDATE_FUNCTION = 2;</code>
     */
    const UPDATE_FUNCTION = 2;
    /**
     * DeleteFunction
     *
     * Generated from protobuf enum <code>DELETE_FUNCTION = 3;</code>
     */
    const DELETE_FUNCTION = 3;

    private static $valueToName = [
        self::OPERATIONTYPE_UNSPECIFIED => 'OPERATIONTYPE_UNSPECIFIED',
        self::CREATE_FUNCTION => 'CREATE_FUNCTION',
        self::UPDATE_FUNCTION => 'UPDATE_FUNCTION',
        self::DELETE_FUNCTION => 'DELETE_FUNCTION',
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

