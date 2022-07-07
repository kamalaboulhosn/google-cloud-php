<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1\Certificate;

use UnexpectedValueException;

/**
 * Certificate scope.
 *
 * Protobuf type <code>google.cloud.certificatemanager.v1.Certificate.Scope</code>
 */
class Scope
{
    /**
     * Certificates with default scope are served from core Google data centers.
     * If unsure, choose this option.
     *
     * Generated from protobuf enum <code>DEFAULT = 0;</code>
     */
    const PBDEFAULT = 0;
    /**
     * Certificates with scope EDGE_CACHE are special-purposed certificates,
     * served from non-core Google data centers.
     *
     * Generated from protobuf enum <code>EDGE_CACHE = 1;</code>
     */
    const EDGE_CACHE = 1;

    private static $valueToName = [
        self::PBDEFAULT => 'PBDEFAULT',
        self::EDGE_CACHE => 'EDGE_CACHE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Scope::class, \Google\Cloud\CertificateManager\V1\Certificate_Scope::class);

