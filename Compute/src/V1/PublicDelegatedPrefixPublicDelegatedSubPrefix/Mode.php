<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\PublicDelegatedPrefixPublicDelegatedSubPrefix;

use UnexpectedValueException;

/**
 * The PublicDelegatedSubPrefix mode for IPv6 only.
 *
 * Protobuf type <code>google.cloud.compute.v1.PublicDelegatedPrefixPublicDelegatedSubPrefix.Mode</code>
 */
class Mode
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_MODE = 0;</code>
     */
    const UNDEFINED_MODE = 0;
    /**
     * The public delegated prefix is used for further sub-delegation only. Such prefixes cannot set allocatablePrefixLength.
     *
     * Generated from protobuf enum <code>DELEGATION = 264149288;</code>
     */
    const DELEGATION = 264149288;
    /**
     * The public delegated prefix is used for creating forwarding rules only. Such prefixes cannot set publicDelegatedSubPrefixes.
     *
     * Generated from protobuf enum <code>EXTERNAL_IPV6_FORWARDING_RULE_CREATION = 398684356;</code>
     */
    const EXTERNAL_IPV6_FORWARDING_RULE_CREATION = 398684356;
    /**
     * The public delegated prefix is used for creating dual-mode subnetworks only. Such prefixes cannot set publicDelegatedSubPrefixes.
     *
     * Generated from protobuf enum <code>EXTERNAL_IPV6_SUBNETWORK_CREATION = 61198284;</code>
     */
    const EXTERNAL_IPV6_SUBNETWORK_CREATION = 61198284;

    private static $valueToName = [
        self::UNDEFINED_MODE => 'UNDEFINED_MODE',
        self::DELEGATION => 'DELEGATION',
        self::EXTERNAL_IPV6_FORWARDING_RULE_CREATION => 'EXTERNAL_IPV6_FORWARDING_RULE_CREATION',
        self::EXTERNAL_IPV6_SUBNETWORK_CREATION => 'EXTERNAL_IPV6_SUBNETWORK_CREATION',
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


