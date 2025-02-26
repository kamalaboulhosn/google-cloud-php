<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The profile for a file store.
 * * Cloud Storage: maps 1:1 with a bucket.
 * * Amazon S3: maps 1:1 with a bucket.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.FileStoreDataProfile</code>
 */
class FileStoreDataProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the profile.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The resource type that was profiled.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataSourceType data_source_type = 2;</code>
     */
    protected $data_source_type = null;
    /**
     * The resource name of the project data profile for this file store.
     *
     * Generated from protobuf field <code>string project_data_profile = 3;</code>
     */
    protected $project_data_profile = '';
    /**
     * The Google Cloud project ID that owns the resource.
     * For Amazon S3 buckets, this is the AWS Account Id.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     */
    protected $project_id = '';
    /**
     * The location of the file store.
     * * Cloud Storage:
     * https://cloud.google.com/storage/docs/locations#available-locations
     * * Amazon S3:
     * https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints
     *
     * Generated from protobuf field <code>string file_store_location = 5;</code>
     */
    protected $file_store_location = '';
    /**
     * For resources that have multiple storage locations, these are those
     * regions. For Cloud Storage this is the list of regions chosen for
     * dual-region storage. `file_store_location` will normally be the
     * corresponding multi-region for the list of individual locations. The first
     * region is always picked as the processing and storage location for the data
     * profile.
     *
     * Generated from protobuf field <code>repeated string data_storage_locations = 19;</code>
     */
    private $data_storage_locations;
    /**
     * The location type of the file store (region, dual-region, multi-region,
     * etc). If dual-region, expect data_storage_locations to be populated.
     *
     * Generated from protobuf field <code>string location_type = 20;</code>
     */
    protected $location_type = '';
    /**
     * The file store path.
     * * Cloud Storage: `gs://{bucket}`
     * * Amazon S3: `s3://{bucket}`
     * * Vertex AI dataset:
     * `projects/{project_number}/locations/{location}/datasets/{dataset_id}`
     *
     * Generated from protobuf field <code>string file_store_path = 6;</code>
     */
    protected $file_store_path = '';
    /**
     * The resource name of the resource profiled.
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     * Example format of an S3 bucket full resource name:
     * `//cloudasset.googleapis.com/organizations/{org_id}/otherCloudConnections/aws/arn:aws:s3:::{bucket_name}`
     *
     * Generated from protobuf field <code>string full_resource = 24;</code>
     */
    protected $full_resource = '';
    /**
     * The snapshot of the configurations used to generate the profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileConfigSnapshot config_snapshot = 7;</code>
     */
    protected $config_snapshot = null;
    /**
     * Success or error status from the most recent profile generation attempt.
     * May be empty if the profile is still being generated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ProfileStatus profile_status = 8;</code>
     */
    protected $profile_status = null;
    /**
     * State of a profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FileStoreDataProfile.State state = 9;</code>
     */
    protected $state = 0;
    /**
     * The last time the profile was generated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp profile_last_generated = 10;</code>
     */
    protected $profile_last_generated = null;
    /**
     * How broadly a resource has been shared.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ResourceVisibility resource_visibility = 11;</code>
     */
    protected $resource_visibility = 0;
    /**
     * The sensitivity score of this resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 12;</code>
     */
    protected $sensitivity_score = null;
    /**
     * The data risk level of this resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel data_risk_level = 13;</code>
     */
    protected $data_risk_level = null;
    /**
     * The time the file store was first created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 14;</code>
     */
    protected $create_time = null;
    /**
     * The time the file store was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_time = 15;</code>
     */
    protected $last_modified_time = null;
    /**
     * FileClusterSummary per each cluster.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileClusterSummary file_cluster_summaries = 16;</code>
     */
    private $file_cluster_summaries;
    /**
     * Attributes of the resource being profiled.
     * Currently used attributes:
     * * customer_managed_encryption: boolean
     *     - true: the resource is encrypted with a customer-managed key.
     *     - false: the resource is encrypted with a provider-managed key.
     *
     * Generated from protobuf field <code>map<string, .google.privacy.dlp.v2.Value> resource_attributes = 17;</code>
     */
    private $resource_attributes;
    /**
     * The labels applied to the resource at the time the profile was generated.
     *
     * Generated from protobuf field <code>map<string, string> resource_labels = 18;</code>
     */
    private $resource_labels;
    /**
     * InfoTypes detected in this file store.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileStoreInfoTypeSummary file_store_info_type_summaries = 21;</code>
     */
    private $file_store_info_type_summaries;
    /**
     * The file store does not have any files.
     *
     * Generated from protobuf field <code>bool file_store_is_empty = 23;</code>
     */
    protected $file_store_is_empty = false;
    /**
     * Resources related to this profile.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.RelatedResource related_resources = 26;</code>
     */
    private $related_resources;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the profile.
     *     @type \Google\Cloud\Dlp\V2\DataSourceType $data_source_type
     *           The resource type that was profiled.
     *     @type string $project_data_profile
     *           The resource name of the project data profile for this file store.
     *     @type string $project_id
     *           The Google Cloud project ID that owns the resource.
     *           For Amazon S3 buckets, this is the AWS Account Id.
     *     @type string $file_store_location
     *           The location of the file store.
     *           * Cloud Storage:
     *           https://cloud.google.com/storage/docs/locations#available-locations
     *           * Amazon S3:
     *           https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $data_storage_locations
     *           For resources that have multiple storage locations, these are those
     *           regions. For Cloud Storage this is the list of regions chosen for
     *           dual-region storage. `file_store_location` will normally be the
     *           corresponding multi-region for the list of individual locations. The first
     *           region is always picked as the processing and storage location for the data
     *           profile.
     *     @type string $location_type
     *           The location type of the file store (region, dual-region, multi-region,
     *           etc). If dual-region, expect data_storage_locations to be populated.
     *     @type string $file_store_path
     *           The file store path.
     *           * Cloud Storage: `gs://{bucket}`
     *           * Amazon S3: `s3://{bucket}`
     *           * Vertex AI dataset:
     *           `projects/{project_number}/locations/{location}/datasets/{dataset_id}`
     *     @type string $full_resource
     *           The resource name of the resource profiled.
     *           https://cloud.google.com/apis/design/resource_names#full_resource_name
     *           Example format of an S3 bucket full resource name:
     *           `//cloudasset.googleapis.com/organizations/{org_id}/otherCloudConnections/aws/arn:aws:s3:::{bucket_name}`
     *     @type \Google\Cloud\Dlp\V2\DataProfileConfigSnapshot $config_snapshot
     *           The snapshot of the configurations used to generate the profile.
     *     @type \Google\Cloud\Dlp\V2\ProfileStatus $profile_status
     *           Success or error status from the most recent profile generation attempt.
     *           May be empty if the profile is still being generated.
     *     @type int $state
     *           State of a profile.
     *     @type \Google\Protobuf\Timestamp $profile_last_generated
     *           The last time the profile was generated.
     *     @type int $resource_visibility
     *           How broadly a resource has been shared.
     *     @type \Google\Cloud\Dlp\V2\SensitivityScore $sensitivity_score
     *           The sensitivity score of this resource.
     *     @type \Google\Cloud\Dlp\V2\DataRiskLevel $data_risk_level
     *           The data risk level of this resource.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time the file store was first created.
     *     @type \Google\Protobuf\Timestamp $last_modified_time
     *           The time the file store was last modified.
     *     @type array<\Google\Cloud\Dlp\V2\FileClusterSummary>|\Google\Protobuf\Internal\RepeatedField $file_cluster_summaries
     *           FileClusterSummary per each cluster.
     *     @type array|\Google\Protobuf\Internal\MapField $resource_attributes
     *           Attributes of the resource being profiled.
     *           Currently used attributes:
     *           * customer_managed_encryption: boolean
     *               - true: the resource is encrypted with a customer-managed key.
     *               - false: the resource is encrypted with a provider-managed key.
     *     @type array|\Google\Protobuf\Internal\MapField $resource_labels
     *           The labels applied to the resource at the time the profile was generated.
     *     @type array<\Google\Cloud\Dlp\V2\FileStoreInfoTypeSummary>|\Google\Protobuf\Internal\RepeatedField $file_store_info_type_summaries
     *           InfoTypes detected in this file store.
     *     @type bool $file_store_is_empty
     *           The file store does not have any files.
     *     @type array<\Google\Cloud\Dlp\V2\RelatedResource>|\Google\Protobuf\Internal\RepeatedField $related_resources
     *           Resources related to this profile.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the profile.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the profile.
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
     * The resource type that was profiled.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataSourceType data_source_type = 2;</code>
     * @return \Google\Cloud\Dlp\V2\DataSourceType|null
     */
    public function getDataSourceType()
    {
        return $this->data_source_type;
    }

    public function hasDataSourceType()
    {
        return isset($this->data_source_type);
    }

    public function clearDataSourceType()
    {
        unset($this->data_source_type);
    }

    /**
     * The resource type that was profiled.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataSourceType data_source_type = 2;</code>
     * @param \Google\Cloud\Dlp\V2\DataSourceType $var
     * @return $this
     */
    public function setDataSourceType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DataSourceType::class);
        $this->data_source_type = $var;

        return $this;
    }

    /**
     * The resource name of the project data profile for this file store.
     *
     * Generated from protobuf field <code>string project_data_profile = 3;</code>
     * @return string
     */
    public function getProjectDataProfile()
    {
        return $this->project_data_profile;
    }

    /**
     * The resource name of the project data profile for this file store.
     *
     * Generated from protobuf field <code>string project_data_profile = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectDataProfile($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_data_profile = $var;

        return $this;
    }

    /**
     * The Google Cloud project ID that owns the resource.
     * For Amazon S3 buckets, this is the AWS Account Id.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The Google Cloud project ID that owns the resource.
     * For Amazon S3 buckets, this is the AWS Account Id.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The location of the file store.
     * * Cloud Storage:
     * https://cloud.google.com/storage/docs/locations#available-locations
     * * Amazon S3:
     * https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints
     *
     * Generated from protobuf field <code>string file_store_location = 5;</code>
     * @return string
     */
    public function getFileStoreLocation()
    {
        return $this->file_store_location;
    }

    /**
     * The location of the file store.
     * * Cloud Storage:
     * https://cloud.google.com/storage/docs/locations#available-locations
     * * Amazon S3:
     * https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints
     *
     * Generated from protobuf field <code>string file_store_location = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFileStoreLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_store_location = $var;

        return $this;
    }

    /**
     * For resources that have multiple storage locations, these are those
     * regions. For Cloud Storage this is the list of regions chosen for
     * dual-region storage. `file_store_location` will normally be the
     * corresponding multi-region for the list of individual locations. The first
     * region is always picked as the processing and storage location for the data
     * profile.
     *
     * Generated from protobuf field <code>repeated string data_storage_locations = 19;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataStorageLocations()
    {
        return $this->data_storage_locations;
    }

    /**
     * For resources that have multiple storage locations, these are those
     * regions. For Cloud Storage this is the list of regions chosen for
     * dual-region storage. `file_store_location` will normally be the
     * corresponding multi-region for the list of individual locations. The first
     * region is always picked as the processing and storage location for the data
     * profile.
     *
     * Generated from protobuf field <code>repeated string data_storage_locations = 19;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataStorageLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->data_storage_locations = $arr;

        return $this;
    }

    /**
     * The location type of the file store (region, dual-region, multi-region,
     * etc). If dual-region, expect data_storage_locations to be populated.
     *
     * Generated from protobuf field <code>string location_type = 20;</code>
     * @return string
     */
    public function getLocationType()
    {
        return $this->location_type;
    }

    /**
     * The location type of the file store (region, dual-region, multi-region,
     * etc). If dual-region, expect data_storage_locations to be populated.
     *
     * Generated from protobuf field <code>string location_type = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationType($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_type = $var;

        return $this;
    }

    /**
     * The file store path.
     * * Cloud Storage: `gs://{bucket}`
     * * Amazon S3: `s3://{bucket}`
     * * Vertex AI dataset:
     * `projects/{project_number}/locations/{location}/datasets/{dataset_id}`
     *
     * Generated from protobuf field <code>string file_store_path = 6;</code>
     * @return string
     */
    public function getFileStorePath()
    {
        return $this->file_store_path;
    }

    /**
     * The file store path.
     * * Cloud Storage: `gs://{bucket}`
     * * Amazon S3: `s3://{bucket}`
     * * Vertex AI dataset:
     * `projects/{project_number}/locations/{location}/datasets/{dataset_id}`
     *
     * Generated from protobuf field <code>string file_store_path = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setFileStorePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_store_path = $var;

        return $this;
    }

    /**
     * The resource name of the resource profiled.
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     * Example format of an S3 bucket full resource name:
     * `//cloudasset.googleapis.com/organizations/{org_id}/otherCloudConnections/aws/arn:aws:s3:::{bucket_name}`
     *
     * Generated from protobuf field <code>string full_resource = 24;</code>
     * @return string
     */
    public function getFullResource()
    {
        return $this->full_resource;
    }

    /**
     * The resource name of the resource profiled.
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     * Example format of an S3 bucket full resource name:
     * `//cloudasset.googleapis.com/organizations/{org_id}/otherCloudConnections/aws/arn:aws:s3:::{bucket_name}`
     *
     * Generated from protobuf field <code>string full_resource = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setFullResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_resource = $var;

        return $this;
    }

    /**
     * The snapshot of the configurations used to generate the profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileConfigSnapshot config_snapshot = 7;</code>
     * @return \Google\Cloud\Dlp\V2\DataProfileConfigSnapshot|null
     */
    public function getConfigSnapshot()
    {
        return $this->config_snapshot;
    }

    public function hasConfigSnapshot()
    {
        return isset($this->config_snapshot);
    }

    public function clearConfigSnapshot()
    {
        unset($this->config_snapshot);
    }

    /**
     * The snapshot of the configurations used to generate the profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileConfigSnapshot config_snapshot = 7;</code>
     * @param \Google\Cloud\Dlp\V2\DataProfileConfigSnapshot $var
     * @return $this
     */
    public function setConfigSnapshot($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DataProfileConfigSnapshot::class);
        $this->config_snapshot = $var;

        return $this;
    }

    /**
     * Success or error status from the most recent profile generation attempt.
     * May be empty if the profile is still being generated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ProfileStatus profile_status = 8;</code>
     * @return \Google\Cloud\Dlp\V2\ProfileStatus|null
     */
    public function getProfileStatus()
    {
        return $this->profile_status;
    }

    public function hasProfileStatus()
    {
        return isset($this->profile_status);
    }

    public function clearProfileStatus()
    {
        unset($this->profile_status);
    }

    /**
     * Success or error status from the most recent profile generation attempt.
     * May be empty if the profile is still being generated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ProfileStatus profile_status = 8;</code>
     * @param \Google\Cloud\Dlp\V2\ProfileStatus $var
     * @return $this
     */
    public function setProfileStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ProfileStatus::class);
        $this->profile_status = $var;

        return $this;
    }

    /**
     * State of a profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FileStoreDataProfile.State state = 9;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * State of a profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FileStoreDataProfile.State state = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\FileStoreDataProfile\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The last time the profile was generated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp profile_last_generated = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getProfileLastGenerated()
    {
        return $this->profile_last_generated;
    }

    public function hasProfileLastGenerated()
    {
        return isset($this->profile_last_generated);
    }

    public function clearProfileLastGenerated()
    {
        unset($this->profile_last_generated);
    }

    /**
     * The last time the profile was generated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp profile_last_generated = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setProfileLastGenerated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->profile_last_generated = $var;

        return $this;
    }

    /**
     * How broadly a resource has been shared.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ResourceVisibility resource_visibility = 11;</code>
     * @return int
     */
    public function getResourceVisibility()
    {
        return $this->resource_visibility;
    }

    /**
     * How broadly a resource has been shared.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ResourceVisibility resource_visibility = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceVisibility($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\ResourceVisibility::class);
        $this->resource_visibility = $var;

        return $this;
    }

    /**
     * The sensitivity score of this resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 12;</code>
     * @return \Google\Cloud\Dlp\V2\SensitivityScore|null
     */
    public function getSensitivityScore()
    {
        return $this->sensitivity_score;
    }

    public function hasSensitivityScore()
    {
        return isset($this->sensitivity_score);
    }

    public function clearSensitivityScore()
    {
        unset($this->sensitivity_score);
    }

    /**
     * The sensitivity score of this resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 12;</code>
     * @param \Google\Cloud\Dlp\V2\SensitivityScore $var
     * @return $this
     */
    public function setSensitivityScore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\SensitivityScore::class);
        $this->sensitivity_score = $var;

        return $this;
    }

    /**
     * The data risk level of this resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel data_risk_level = 13;</code>
     * @return \Google\Cloud\Dlp\V2\DataRiskLevel|null
     */
    public function getDataRiskLevel()
    {
        return $this->data_risk_level;
    }

    public function hasDataRiskLevel()
    {
        return isset($this->data_risk_level);
    }

    public function clearDataRiskLevel()
    {
        unset($this->data_risk_level);
    }

    /**
     * The data risk level of this resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel data_risk_level = 13;</code>
     * @param \Google\Cloud\Dlp\V2\DataRiskLevel $var
     * @return $this
     */
    public function setDataRiskLevel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DataRiskLevel::class);
        $this->data_risk_level = $var;

        return $this;
    }

    /**
     * The time the file store was first created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 14;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The time the file store was first created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 14;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The time the file store was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_time = 15;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastModifiedTime()
    {
        return $this->last_modified_time;
    }

    public function hasLastModifiedTime()
    {
        return isset($this->last_modified_time);
    }

    public function clearLastModifiedTime()
    {
        unset($this->last_modified_time);
    }

    /**
     * The time the file store was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_time = 15;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastModifiedTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_modified_time = $var;

        return $this;
    }

    /**
     * FileClusterSummary per each cluster.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileClusterSummary file_cluster_summaries = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileClusterSummaries()
    {
        return $this->file_cluster_summaries;
    }

    /**
     * FileClusterSummary per each cluster.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileClusterSummary file_cluster_summaries = 16;</code>
     * @param array<\Google\Cloud\Dlp\V2\FileClusterSummary>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileClusterSummaries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\FileClusterSummary::class);
        $this->file_cluster_summaries = $arr;

        return $this;
    }

    /**
     * Attributes of the resource being profiled.
     * Currently used attributes:
     * * customer_managed_encryption: boolean
     *     - true: the resource is encrypted with a customer-managed key.
     *     - false: the resource is encrypted with a provider-managed key.
     *
     * Generated from protobuf field <code>map<string, .google.privacy.dlp.v2.Value> resource_attributes = 17;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResourceAttributes()
    {
        return $this->resource_attributes;
    }

    /**
     * Attributes of the resource being profiled.
     * Currently used attributes:
     * * customer_managed_encryption: boolean
     *     - true: the resource is encrypted with a customer-managed key.
     *     - false: the resource is encrypted with a provider-managed key.
     *
     * Generated from protobuf field <code>map<string, .google.privacy.dlp.v2.Value> resource_attributes = 17;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setResourceAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\Value::class);
        $this->resource_attributes = $arr;

        return $this;
    }

    /**
     * The labels applied to the resource at the time the profile was generated.
     *
     * Generated from protobuf field <code>map<string, string> resource_labels = 18;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResourceLabels()
    {
        return $this->resource_labels;
    }

    /**
     * The labels applied to the resource at the time the profile was generated.
     *
     * Generated from protobuf field <code>map<string, string> resource_labels = 18;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setResourceLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_labels = $arr;

        return $this;
    }

    /**
     * InfoTypes detected in this file store.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileStoreInfoTypeSummary file_store_info_type_summaries = 21;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileStoreInfoTypeSummaries()
    {
        return $this->file_store_info_type_summaries;
    }

    /**
     * InfoTypes detected in this file store.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileStoreInfoTypeSummary file_store_info_type_summaries = 21;</code>
     * @param array<\Google\Cloud\Dlp\V2\FileStoreInfoTypeSummary>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileStoreInfoTypeSummaries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\FileStoreInfoTypeSummary::class);
        $this->file_store_info_type_summaries = $arr;

        return $this;
    }

    /**
     * The file store does not have any files.
     *
     * Generated from protobuf field <code>bool file_store_is_empty = 23;</code>
     * @return bool
     */
    public function getFileStoreIsEmpty()
    {
        return $this->file_store_is_empty;
    }

    /**
     * The file store does not have any files.
     *
     * Generated from protobuf field <code>bool file_store_is_empty = 23;</code>
     * @param bool $var
     * @return $this
     */
    public function setFileStoreIsEmpty($var)
    {
        GPBUtil::checkBool($var);
        $this->file_store_is_empty = $var;

        return $this;
    }

    /**
     * Resources related to this profile.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.RelatedResource related_resources = 26;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRelatedResources()
    {
        return $this->related_resources;
    }

    /**
     * Resources related to this profile.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.RelatedResource related_resources = 26;</code>
     * @param array<\Google\Cloud\Dlp\V2\RelatedResource>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRelatedResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\RelatedResource::class);
        $this->related_resources = $arr;

        return $this;
    }

}

