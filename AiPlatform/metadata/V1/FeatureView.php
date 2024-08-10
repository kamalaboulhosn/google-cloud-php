<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_view.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class FeatureView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/cloud/aiplatform/v1/feature_view.protogoogle.cloud.aiplatform.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
FeatureViewW
big_query_source (26.google.cloud.aiplatform.v1.FeatureView.BigQuerySourceB�AH e
feature_registry_source	 (2=.google.cloud.aiplatform.v1.FeatureView.FeatureRegistrySourceB�AH 
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
etag (	B�AH
labels (23.google.cloud.aiplatform.v1.FeatureView.LabelsEntryB�AG
sync_config (22.google.cloud.aiplatform.v1.FeatureView.SyncConfigN
index_config (23.google.cloud.aiplatform.v1.FeatureView.IndexConfigB�A
satisfies_pzs (B�A
satisfies_pzi (B�AB
BigQuerySource
uri (	B�A
entity_id_columns (	B�A

SyncConfig
cron (	�
IndexConfig_
tree_ah_config (2@.google.cloud.aiplatform.v1.FeatureView.IndexConfig.TreeAHConfigB�AH g
brute_force_config (2D.google.cloud.aiplatform.v1.FeatureView.IndexConfig.BruteForceConfigB�AH 
embedding_column (	B�A
filter_columns (	B�A
crowding_column (	B�A%
embedding_dimension (B�AH�k
distance_measure_type (2G.google.cloud.aiplatform.v1.FeatureView.IndexConfig.DistanceMeasureTypeB�A
BruteForceConfigY
TreeAHConfig+
leaf_node_embedding_count (B�AH �B
_leaf_node_embedding_count"�
DistanceMeasureType%
!DISTANCE_MEASURE_TYPE_UNSPECIFIED 
SQUARED_L2_DISTANCE
COSINE_DISTANCE
DOT_PRODUCT_DISTANCEB
algorithm_configB
_embedding_dimension�
FeatureRegistrySourceg
feature_groups (2J.google.cloud.aiplatform.v1.FeatureView.FeatureRegistrySource.FeatureGroupB�A 
project_number (B�AH �G
FeatureGroup
feature_group_id (	B�A
feature_ids (	B�AB
_project_number-
LabelsEntry
key (	
value (	:8:��A�
%aiplatform.googleapis.com/FeatureViewnprojects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}B
sourceB�
com.google.cloud.aiplatform.v1BFeatureViewProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

