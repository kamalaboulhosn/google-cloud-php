<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_tiers.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Google Cloud SQL service tier resource.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.Tier</code>
 */
class Tier extends \Google\Protobuf\Internal\Message
{
    /**
     * An identifier for the machine type, for example, `db-custom-1-3840`. For
     * related information, see [Pricing](/sql/pricing).
     *
     * Generated from protobuf field <code>string tier = 1;</code>
     */
    protected $tier = '';
    /**
     * The maximum RAM usage of this tier in bytes.
     *
     * Generated from protobuf field <code>int64 RAM = 2 [json_name = "RAM"];</code>
     */
    protected $RAM = 0;
    /**
     * This is always `sql#tier`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     */
    protected $kind = '';
    /**
     * The maximum disk size of this tier in bytes.
     *
     * Generated from protobuf field <code>int64 Disk_Quota = 4 [json_name = "DiskQuota"];</code>
     */
    protected $Disk_Quota = 0;
    /**
     * The applicable regions for this tier.
     *
     * Generated from protobuf field <code>repeated string region = 5;</code>
     */
    private $region;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tier
     *           An identifier for the machine type, for example, `db-custom-1-3840`. For
     *           related information, see [Pricing](/sql/pricing).
     *     @type int|string $RAM
     *           The maximum RAM usage of this tier in bytes.
     *     @type string $kind
     *           This is always `sql#tier`.
     *     @type int|string $Disk_Quota
     *           The maximum disk size of this tier in bytes.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $region
     *           The applicable regions for this tier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlTiers::initOnce();
        parent::__construct($data);
    }

    /**
     * An identifier for the machine type, for example, `db-custom-1-3840`. For
     * related information, see [Pricing](/sql/pricing).
     *
     * Generated from protobuf field <code>string tier = 1;</code>
     * @return string
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * An identifier for the machine type, for example, `db-custom-1-3840`. For
     * related information, see [Pricing](/sql/pricing).
     *
     * Generated from protobuf field <code>string tier = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTier($var)
    {
        GPBUtil::checkString($var, True);
        $this->tier = $var;

        return $this;
    }

    /**
     * The maximum RAM usage of this tier in bytes.
     *
     * Generated from protobuf field <code>int64 RAM = 2 [json_name = "RAM"];</code>
     * @return int|string
     */
    public function getRAM()
    {
        return $this->RAM;
    }

    /**
     * The maximum RAM usage of this tier in bytes.
     *
     * Generated from protobuf field <code>int64 RAM = 2 [json_name = "RAM"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRAM($var)
    {
        GPBUtil::checkInt64($var);
        $this->RAM = $var;

        return $this;
    }

    /**
     * This is always `sql#tier`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#tier`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The maximum disk size of this tier in bytes.
     *
     * Generated from protobuf field <code>int64 Disk_Quota = 4 [json_name = "DiskQuota"];</code>
     * @return int|string
     */
    public function getDiskQuota()
    {
        return $this->Disk_Quota;
    }

    /**
     * The maximum disk size of this tier in bytes.
     *
     * Generated from protobuf field <code>int64 Disk_Quota = 4 [json_name = "DiskQuota"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDiskQuota($var)
    {
        GPBUtil::checkInt64($var);
        $this->Disk_Quota = $var;

        return $this;
    }

    /**
     * The applicable regions for this tier.
     *
     * Generated from protobuf field <code>repeated string region = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * The applicable regions for this tier.
     *
     * Generated from protobuf field <code>repeated string region = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegion($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->region = $arr;

        return $this;
    }

}

