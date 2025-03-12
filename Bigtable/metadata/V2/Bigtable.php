<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace GPBMetadata\Google\Bigtable\V2;

class Bigtable
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Routing::initOnce();
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        \GPBMetadata\Google\Bigtable\V2\RequestStats::initOnce();
        \GPBMetadata\Google\Bigtable\V2\Types::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�`
!google/bigtable/v2/bigtable.protogoogle.bigtable.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/routing.protogoogle/bigtable/v2/data.proto&google/bigtable/v2/request_stats.protogoogle/bigtable/v2/types.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/rpc/status.proto"�
ReadRowsRequest>

table_name (	B*�A�A$
"bigtableadmin.googleapis.com/TableQ
authorized_view_name	 (	B3�A�A-
+bigtableadmin.googleapis.com/AuthorizedViewU
materialized_view_name (	B5�A�A/
-bigtableadmin.googleapis.com/MaterializedView
app_profile_id (	(
rows (2.google.bigtable.v2.RowSet-
filter (2.google.bigtable.v2.RowFilter

rows_limit (P
request_stats_view (24.google.bigtable.v2.ReadRowsRequest.RequestStatsView
reversed ("f
RequestStatsView"
REQUEST_STATS_VIEW_UNSPECIFIED 
REQUEST_STATS_NONE
REQUEST_STATS_FULL"�
ReadRowsResponse>
chunks (2..google.bigtable.v2.ReadRowsResponse.CellChunk
last_scanned_row_key (7
request_stats (2 .google.bigtable.v2.RequestStats�
	CellChunk
row_key (1
family_name (2.google.protobuf.StringValue.
	qualifier (2.google.protobuf.BytesValue
timestamp_micros (
labels (	
value (

value_size (
	reset_row (H 

commit_row	 (H B

row_status"�
SampleRowKeysRequest>

table_name (	B*�A�A$
"bigtableadmin.googleapis.com/TableQ
authorized_view_name (	B3�A�A-
+bigtableadmin.googleapis.com/AuthorizedViewU
materialized_view_name (	B5�A�A/
-bigtableadmin.googleapis.com/MaterializedView
app_profile_id (	">
SampleRowKeysResponse
row_key (
offset_bytes ("�
MutateRowRequest>

table_name (	B*�A�A$
"bigtableadmin.googleapis.com/TableQ
authorized_view_name (	B3�A�A-
+bigtableadmin.googleapis.com/AuthorizedView
app_profile_id (	
row_key (B�A4
	mutations (2.google.bigtable.v2.MutationB�A"
MutateRowResponse"�
MutateRowsRequest>

table_name (	B*�A�A$
"bigtableadmin.googleapis.com/TableQ
authorized_view_name (	B3�A�A-
+bigtableadmin.googleapis.com/AuthorizedView
app_profile_id (	A
entries (2+.google.bigtable.v2.MutateRowsRequest.EntryB�AN
Entry
row_key (4
	mutations (2.google.bigtable.v2.MutationB�A"�
MutateRowsResponse=
entries (2,.google.bigtable.v2.MutateRowsResponse.Entry?
rate_limit_info (2!.google.bigtable.v2.RateLimitInfoH �:
Entry
index ("
status (2.google.rpc.StatusB
_rate_limit_info"J
RateLimitInfo)
period (2.google.protobuf.Duration
factor ("�
CheckAndMutateRowRequest>

table_name (	B*�A�A$
"bigtableadmin.googleapis.com/TableQ
authorized_view_name	 (	B3�A�A-
+bigtableadmin.googleapis.com/AuthorizedView
app_profile_id (	
row_key (B�A7
predicate_filter (2.google.bigtable.v2.RowFilter4
true_mutations (2.google.bigtable.v2.Mutation5
false_mutations (2.google.bigtable.v2.Mutation"6
CheckAndMutateRowResponse
predicate_matched ("i
PingAndWarmRequest;
name (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance
app_profile_id (	"
PingAndWarmResponse"�
ReadModifyWriteRowRequest>

table_name (	B*�A�A$
"bigtableadmin.googleapis.com/TableQ
authorized_view_name (	B3�A�A-
+bigtableadmin.googleapis.com/AuthorizedView
app_profile_id (	
row_key (B�A;
rules (2\'.google.bigtable.v2.ReadModifyWriteRuleB�A"B
ReadModifyWriteRowResponse$
row (2.google.bigtable.v2.Row"�
,GenerateInitialChangeStreamPartitionsRequest>

table_name (	B*�A�A$
"bigtableadmin.googleapis.com/Table
app_profile_id (	"g
-GenerateInitialChangeStreamPartitionsResponse6
	partition (2#.google.bigtable.v2.StreamPartition"�
ReadChangeStreamRequest>

table_name (	B*�A�A$
"bigtableadmin.googleapis.com/Table
app_profile_id (	6
	partition (2#.google.bigtable.v2.StreamPartition0

start_time (2.google.protobuf.TimestampH K
continuation_tokens (2,.google.bigtable.v2.StreamContinuationTokensH ,
end_time (2.google.protobuf.Timestamp5
heartbeat_duration (2.google.protobuf.DurationB

start_from"�

ReadChangeStreamResponseN
data_change (27.google.bigtable.v2.ReadChangeStreamResponse.DataChangeH K
	heartbeat (26.google.bigtable.v2.ReadChangeStreamResponse.HeartbeatH P
close_stream (28.google.bigtable.v2.ReadChangeStreamResponse.CloseStreamH �
MutationChunkX

chunk_info (2D.google.bigtable.v2.ReadChangeStreamResponse.MutationChunk.ChunkInfo.
mutation (2.google.bigtable.v2.MutationY
	ChunkInfo
chunked_value_size (
chunked_value_offset (

last_chunk (�

DataChangeJ
type (2<.google.bigtable.v2.ReadChangeStreamResponse.DataChange.Type
source_cluster_id (	
row_key (4
commit_timestamp (2.google.protobuf.Timestamp

tiebreaker (J
chunks (2:.google.bigtable.v2.ReadChangeStreamResponse.MutationChunk
done (
token	 (	;
estimated_low_watermark
 (2.google.protobuf.Timestamp"P
Type
TYPE_UNSPECIFIED 
USER
GARBAGE_COLLECTION
CONTINUATION�
	HeartbeatG
continuation_token (2+.google.bigtable.v2.StreamContinuationToken;
estimated_low_watermark (2.google.protobuf.Timestamp�
CloseStream"
status (2.google.rpc.StatusH
continuation_tokens (2+.google.bigtable.v2.StreamContinuationToken;
new_partitions (2#.google.bigtable.v2.StreamPartitionB
stream_record"�
ExecuteQueryRequestD
instance_name (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance
app_profile_id (	B�A
query (	B�A
prepared_query	 (;
proto_format (2.google.bigtable.v2.ProtoFormatBH 
resume_token (B�AH
params (23.google.bigtable.v2.ExecuteQueryRequest.ParamsEntryB�AH
ParamsEntry
key (	(
value (2.google.bigtable.v2.Value:8B
data_format"�
ExecuteQueryResponse9
metadata (2%.google.bigtable.v2.ResultSetMetadataH 7
results (2$.google.bigtable.v2.PartialResultSetH B

response"�
PrepareQueryRequestD
instance_name (	B-�A�A\'
%bigtableadmin.googleapis.com/Instance
app_profile_id (	B�A
query (	B�A7
proto_format (2.google.bigtable.v2.ProtoFormatH Q
param_types (27.google.bigtable.v2.PrepareQueryRequest.ParamTypesEntryB�AK
ParamTypesEntry
key (	\'
value (2.google.bigtable.v2.Type:8B
data_format"�
PrepareQueryResponse7
metadata (2%.google.bigtable.v2.ResultSetMetadata
prepared_query (/
valid_until (2.google.protobuf.Timestamp2�&
Bigtable�
ReadRows#.google.bigtable.v2.ReadRowsRequest$.google.bigtable.v2.ReadRowsResponse"��A
table_name�Atable_name,app_profile_id����"9/v2/{table_name=projects/*/instances/*/tables/*}:readRows:*ZZ"U/v2/{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}:readRows:*����:

table_name,{table_name=projects/*/instances/*/tables/*}
app_profile_id`
authorized_view_nameH{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}0�
SampleRowKeys(.google.bigtable.v2.SampleRowKeysRequest).google.bigtable.v2.SampleRowKeysResponse"��A
table_name�Atable_name,app_profile_id����>/v2/{table_name=projects/*/instances/*/tables/*}:sampleRowKeysZ\\Z/v2/{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}:sampleRowKeys����:

table_name,{table_name=projects/*/instances/*/tables/*}
app_profile_id`
authorized_view_nameH{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}0�
	MutateRow$.google.bigtable.v2.MutateRowRequest%.google.bigtable.v2.MutateRowResponse"��Atable_name,row_key,mutations�A+table_name,row_key,mutations,app_profile_id����":/v2/{table_name=projects/*/instances/*/tables/*}:mutateRow:*Z["V/v2/{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}:mutateRow:*����:

table_name,{table_name=projects/*/instances/*/tables/*}
app_profile_id`
authorized_view_nameH{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}�

MutateRows%.google.bigtable.v2.MutateRowsRequest&.google.bigtable.v2.MutateRowsResponse"��Atable_name,entries�A!table_name,entries,app_profile_id����";/v2/{table_name=projects/*/instances/*/tables/*}:mutateRows:*Z\\"W/v2/{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}:mutateRows:*����:

table_name,{table_name=projects/*/instances/*/tables/*}
app_profile_id`
authorized_view_nameH{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}0�
CheckAndMutateRow,.google.bigtable.v2.CheckAndMutateRowRequest-.google.bigtable.v2.CheckAndMutateRowResponse"��ABtable_name,row_key,predicate_filter,true_mutations,false_mutations�AQtable_name,row_key,predicate_filter,true_mutations,false_mutations,app_profile_id����"B/v2/{table_name=projects/*/instances/*/tables/*}:checkAndMutateRow:*Zc"^/v2/{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}:checkAndMutateRow:*����:

table_name,{table_name=projects/*/instances/*/tables/*}
app_profile_id`
authorized_view_nameH{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}�
PingAndWarm&.google.bigtable.v2.PingAndWarmRequest\'.google.bigtable.v2.PingAndWarmResponse"��Aname�Aname,app_profile_id���+"&/v2/{name=projects/*/instances/*}:ping:*���9%
name{name=projects/*/instances/*}
app_profile_id�
ReadModifyWriteRow-.google.bigtable.v2.ReadModifyWriteRowRequest..google.bigtable.v2.ReadModifyWriteRowResponse"��Atable_name,row_key,rules�A\'table_name,row_key,rules,app_profile_id����"C/v2/{table_name=projects/*/instances/*/tables/*}:readModifyWriteRow:*Zd"_/v2/{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}:readModifyWriteRow:*����:

table_name,{table_name=projects/*/instances/*/tables/*}
app_profile_id`
authorized_view_nameH{authorized_view_name=projects/*/instances/*/tables/*/authorizedViews/*}�
%GenerateInitialChangeStreamPartitions@.google.bigtable.v2.GenerateInitialChangeStreamPartitionsRequestA.google.bigtable.v2.GenerateInitialChangeStreamPartitionsResponse"��A
table_name�Atable_name,app_profile_id���["V/v2/{table_name=projects/*/instances/*/tables/*}:generateInitialChangeStreamPartitions:*0�
ReadChangeStream+.google.bigtable.v2.ReadChangeStreamRequest,.google.bigtable.v2.ReadChangeStreamResponse"u�A
table_name�Atable_name,app_profile_id���F"A/v2/{table_name=projects/*/instances/*/tables/*}:readChangeStream:*0�
PrepareQuery\'.google.bigtable.v2.PrepareQueryRequest(.google.bigtable.v2.PrepareQueryResponse"��Ainstance_name,query�A"instance_name,query,app_profile_id���<"7/v2/{instance_name=projects/*/instances/*}:prepareQuery:*���B.
instance_name{name=projects/*/instances/*}
app_profile_id�
ExecuteQuery\'.google.bigtable.v2.ExecuteQueryRequest(.google.bigtable.v2.ExecuteQueryResponse"��Ainstance_name,query�A"instance_name,query,app_profile_id���<"7/v2/{instance_name=projects/*/instances/*}:executeQuery:*���B.
instance_name{name=projects/*/instances/*}
app_profile_id0��Abigtable.googleapis.com�A�https://www.googleapis.com/auth/bigtable.data,https://www.googleapis.com/auth/bigtable.data.readonly,https://www.googleapis.com/auth/cloud-bigtable.data,https://www.googleapis.com/auth/cloud-bigtable.data.readonly,https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-onlyB�
com.google.bigtable.v2BBigtableProtoPZ8cloud.google.com/go/bigtable/apiv2/bigtablepb;bigtablepb�Google.Cloud.Bigtable.V2�Google\\Cloud\\Bigtable\\V2�Google::Cloud::Bigtable::V2�AP
%bigtableadmin.googleapis.com/Instance\'projects/{project}/instances/{instance}�A\\
"bigtableadmin.googleapis.com/Table6projects/{project}/instances/{instance}/tables/{table}�A�
+bigtableadmin.googleapis.com/AuthorizedViewXprojects/{project}/instances/{instance}/tables/{table}/authorizedViews/{authorized_view}�A~
-bigtableadmin.googleapis.com/MaterializedViewMprojects/{project}/instances/{instance}/materializedViews/{materialized_view}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

