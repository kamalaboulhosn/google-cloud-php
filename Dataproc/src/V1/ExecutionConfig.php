<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Execution configuration for a workload.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ExecutionConfig</code>
 */
class ExecutionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Service account that used to execute workload.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $service_account = '';
    /**
     * Optional. Tags used for network traffic control.
     *
     * Generated from protobuf field <code>repeated string network_tags = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $network_tags;
    /**
     * Optional. The Cloud KMS key to use for encryption.
     *
     * Generated from protobuf field <code>string kms_key = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $kms_key = '';
    /**
     * Optional. Applies to sessions only. The duration to keep the session alive
     * while it's idling. Exceeding this threshold causes the session to
     * terminate. This field cannot be set on a batch workload. Minimum value is
     * 10 minutes; maximum value is 14 days (see JSON representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     * Defaults to 1 hour if not set.
     * If both `ttl` and `idle_ttl` are specified for an interactive session,
     * the conditions are treated as `OR` conditions: the workload will be
     * terminated when it has been idle for `idle_ttl` or when `ttl` has been
     * exceeded, whichever occurs first.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_ttl = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $idle_ttl = null;
    /**
     * Optional. The duration after which the workload will be terminated,
     * specified as the JSON representation for
     * [Duration](https://protobuf.dev/programming-guides/proto3/#json).
     * When the workload exceeds this duration, it will be unconditionally
     * terminated without waiting for ongoing work to finish. If `ttl` is not
     * specified for a batch workload, the workload will be allowed to run until
     * it exits naturally (or run forever without exiting). If `ttl` is not
     * specified for an interactive session, it defaults to 24 hours. If `ttl` is
     * not specified for a batch that uses 2.1+ runtime version, it defaults to 4
     * hours. Minimum value is 10 minutes; maximum value is 14 days. If both `ttl`
     * and `idle_ttl` are specified (for an interactive session), the conditions
     * are treated as `OR` conditions: the workload will be terminated when it has
     * been idle for `idle_ttl` or when `ttl` has been exceeded, whichever occurs
     * first.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ttl = null;
    /**
     * Optional. A Cloud Storage bucket used to stage workload dependencies,
     * config files, and store workload output and other ephemeral data, such as
     * Spark history files. If you do not specify a staging bucket, Cloud Dataproc
     * will determine a Cloud Storage location according to the region where your
     * workload is running, and then create and manage project-level, per-location
     * staging and temporary buckets.
     * **This field requires a Cloud Storage bucket name, not a `gs://...` URI to
     * a Cloud Storage bucket.**
     *
     * Generated from protobuf field <code>string staging_bucket = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $staging_bucket = '';
    /**
     * Optional. Authentication configuration used to set the default identity for
     * the workload execution. The config specifies the type of identity
     * (service account or user) that will be used by workloads to access
     * resources on the project(s).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.AuthenticationConfig authentication_config = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $authentication_config = null;
    protected $network;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_account
     *           Optional. Service account that used to execute workload.
     *     @type string $network_uri
     *           Optional. Network URI to connect workload to.
     *     @type string $subnetwork_uri
     *           Optional. Subnetwork URI to connect workload to.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $network_tags
     *           Optional. Tags used for network traffic control.
     *     @type string $kms_key
     *           Optional. The Cloud KMS key to use for encryption.
     *     @type \Google\Protobuf\Duration $idle_ttl
     *           Optional. Applies to sessions only. The duration to keep the session alive
     *           while it's idling. Exceeding this threshold causes the session to
     *           terminate. This field cannot be set on a batch workload. Minimum value is
     *           10 minutes; maximum value is 14 days (see JSON representation of
     *           [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *           Defaults to 1 hour if not set.
     *           If both `ttl` and `idle_ttl` are specified for an interactive session,
     *           the conditions are treated as `OR` conditions: the workload will be
     *           terminated when it has been idle for `idle_ttl` or when `ttl` has been
     *           exceeded, whichever occurs first.
     *     @type \Google\Protobuf\Duration $ttl
     *           Optional. The duration after which the workload will be terminated,
     *           specified as the JSON representation for
     *           [Duration](https://protobuf.dev/programming-guides/proto3/#json).
     *           When the workload exceeds this duration, it will be unconditionally
     *           terminated without waiting for ongoing work to finish. If `ttl` is not
     *           specified for a batch workload, the workload will be allowed to run until
     *           it exits naturally (or run forever without exiting). If `ttl` is not
     *           specified for an interactive session, it defaults to 24 hours. If `ttl` is
     *           not specified for a batch that uses 2.1+ runtime version, it defaults to 4
     *           hours. Minimum value is 10 minutes; maximum value is 14 days. If both `ttl`
     *           and `idle_ttl` are specified (for an interactive session), the conditions
     *           are treated as `OR` conditions: the workload will be terminated when it has
     *           been idle for `idle_ttl` or when `ttl` has been exceeded, whichever occurs
     *           first.
     *     @type string $staging_bucket
     *           Optional. A Cloud Storage bucket used to stage workload dependencies,
     *           config files, and store workload output and other ephemeral data, such as
     *           Spark history files. If you do not specify a staging bucket, Cloud Dataproc
     *           will determine a Cloud Storage location according to the region where your
     *           workload is running, and then create and manage project-level, per-location
     *           staging and temporary buckets.
     *           **This field requires a Cloud Storage bucket name, not a `gs://...` URI to
     *           a Cloud Storage bucket.**
     *     @type \Google\Cloud\Dataproc\V1\AuthenticationConfig $authentication_config
     *           Optional. Authentication configuration used to set the default identity for
     *           the workload execution. The config specifies the type of identity
     *           (service account or user) that will be used by workloads to access
     *           resources on the project(s).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Service account that used to execute workload.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Optional. Service account that used to execute workload.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Optional. Network URI to connect workload to.
     *
     * Generated from protobuf field <code>string network_uri = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNetworkUri()
    {
        return $this->readOneof(4);
    }

    public function hasNetworkUri()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. Network URI to connect workload to.
     *
     * Generated from protobuf field <code>string network_uri = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional. Subnetwork URI to connect workload to.
     *
     * Generated from protobuf field <code>string subnetwork_uri = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSubnetworkUri()
    {
        return $this->readOneof(5);
    }

    public function hasSubnetworkUri()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional. Subnetwork URI to connect workload to.
     *
     * Generated from protobuf field <code>string subnetwork_uri = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetworkUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. Tags used for network traffic control.
     *
     * Generated from protobuf field <code>repeated string network_tags = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkTags()
    {
        return $this->network_tags;
    }

    /**
     * Optional. Tags used for network traffic control.
     *
     * Generated from protobuf field <code>repeated string network_tags = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->network_tags = $arr;

        return $this;
    }

    /**
     * Optional. The Cloud KMS key to use for encryption.
     *
     * Generated from protobuf field <code>string kms_key = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKmsKey()
    {
        return $this->kms_key;
    }

    /**
     * Optional. The Cloud KMS key to use for encryption.
     *
     * Generated from protobuf field <code>string kms_key = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key = $var;

        return $this;
    }

    /**
     * Optional. Applies to sessions only. The duration to keep the session alive
     * while it's idling. Exceeding this threshold causes the session to
     * terminate. This field cannot be set on a batch workload. Minimum value is
     * 10 minutes; maximum value is 14 days (see JSON representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     * Defaults to 1 hour if not set.
     * If both `ttl` and `idle_ttl` are specified for an interactive session,
     * the conditions are treated as `OR` conditions: the workload will be
     * terminated when it has been idle for `idle_ttl` or when `ttl` has been
     * exceeded, whichever occurs first.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_ttl = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getIdleTtl()
    {
        return $this->idle_ttl;
    }

    public function hasIdleTtl()
    {
        return isset($this->idle_ttl);
    }

    public function clearIdleTtl()
    {
        unset($this->idle_ttl);
    }

    /**
     * Optional. Applies to sessions only. The duration to keep the session alive
     * while it's idling. Exceeding this threshold causes the session to
     * terminate. This field cannot be set on a batch workload. Minimum value is
     * 10 minutes; maximum value is 14 days (see JSON representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     * Defaults to 1 hour if not set.
     * If both `ttl` and `idle_ttl` are specified for an interactive session,
     * the conditions are treated as `OR` conditions: the workload will be
     * terminated when it has been idle for `idle_ttl` or when `ttl` has been
     * exceeded, whichever occurs first.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_ttl = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setIdleTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->idle_ttl = $var;

        return $this;
    }

    /**
     * Optional. The duration after which the workload will be terminated,
     * specified as the JSON representation for
     * [Duration](https://protobuf.dev/programming-guides/proto3/#json).
     * When the workload exceeds this duration, it will be unconditionally
     * terminated without waiting for ongoing work to finish. If `ttl` is not
     * specified for a batch workload, the workload will be allowed to run until
     * it exits naturally (or run forever without exiting). If `ttl` is not
     * specified for an interactive session, it defaults to 24 hours. If `ttl` is
     * not specified for a batch that uses 2.1+ runtime version, it defaults to 4
     * hours. Minimum value is 10 minutes; maximum value is 14 days. If both `ttl`
     * and `idle_ttl` are specified (for an interactive session), the conditions
     * are treated as `OR` conditions: the workload will be terminated when it has
     * been idle for `idle_ttl` or when `ttl` has been exceeded, whichever occurs
     * first.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    public function hasTtl()
    {
        return isset($this->ttl);
    }

    public function clearTtl()
    {
        unset($this->ttl);
    }

    /**
     * Optional. The duration after which the workload will be terminated,
     * specified as the JSON representation for
     * [Duration](https://protobuf.dev/programming-guides/proto3/#json).
     * When the workload exceeds this duration, it will be unconditionally
     * terminated without waiting for ongoing work to finish. If `ttl` is not
     * specified for a batch workload, the workload will be allowed to run until
     * it exits naturally (or run forever without exiting). If `ttl` is not
     * specified for an interactive session, it defaults to 24 hours. If `ttl` is
     * not specified for a batch that uses 2.1+ runtime version, it defaults to 4
     * hours. Minimum value is 10 minutes; maximum value is 14 days. If both `ttl`
     * and `idle_ttl` are specified (for an interactive session), the conditions
     * are treated as `OR` conditions: the workload will be terminated when it has
     * been idle for `idle_ttl` or when `ttl` has been exceeded, whichever occurs
     * first.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->ttl = $var;

        return $this;
    }

    /**
     * Optional. A Cloud Storage bucket used to stage workload dependencies,
     * config files, and store workload output and other ephemeral data, such as
     * Spark history files. If you do not specify a staging bucket, Cloud Dataproc
     * will determine a Cloud Storage location according to the region where your
     * workload is running, and then create and manage project-level, per-location
     * staging and temporary buckets.
     * **This field requires a Cloud Storage bucket name, not a `gs://...` URI to
     * a Cloud Storage bucket.**
     *
     * Generated from protobuf field <code>string staging_bucket = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getStagingBucket()
    {
        return $this->staging_bucket;
    }

    /**
     * Optional. A Cloud Storage bucket used to stage workload dependencies,
     * config files, and store workload output and other ephemeral data, such as
     * Spark history files. If you do not specify a staging bucket, Cloud Dataproc
     * will determine a Cloud Storage location according to the region where your
     * workload is running, and then create and manage project-level, per-location
     * staging and temporary buckets.
     * **This field requires a Cloud Storage bucket name, not a `gs://...` URI to
     * a Cloud Storage bucket.**
     *
     * Generated from protobuf field <code>string staging_bucket = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setStagingBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->staging_bucket = $var;

        return $this;
    }

    /**
     * Optional. Authentication configuration used to set the default identity for
     * the workload execution. The config specifies the type of identity
     * (service account or user) that will be used by workloads to access
     * resources on the project(s).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.AuthenticationConfig authentication_config = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\AuthenticationConfig|null
     */
    public function getAuthenticationConfig()
    {
        return $this->authentication_config;
    }

    public function hasAuthenticationConfig()
    {
        return isset($this->authentication_config);
    }

    public function clearAuthenticationConfig()
    {
        unset($this->authentication_config);
    }

    /**
     * Optional. Authentication configuration used to set the default identity for
     * the workload execution. The config specifies the type of identity
     * (service account or user) that will be used by workloads to access
     * resources on the project(s).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.AuthenticationConfig authentication_config = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\AuthenticationConfig $var
     * @return $this
     */
    public function setAuthenticationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\AuthenticationConfig::class);
        $this->authentication_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getNetwork()
    {
        return $this->whichOneof("network");
    }

}

