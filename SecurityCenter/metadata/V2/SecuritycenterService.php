<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V2;

class SecuritycenterService
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
        \GPBMetadata\Google\Cloud\Securitycenter\V2\AttackPath::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\BigqueryExport::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\ExternalSystem::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Finding::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\MuteConfig::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\NotificationConfig::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\ResourceValueConfig::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecurityMarks::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Simulation::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Source::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V2\ValuedResource::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
;google/cloud/securitycenter/v2/securitycenter_service.protogoogle.cloud.securitycenter.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/routing.proto0google/cloud/securitycenter/v2/attack_path.proto4google/cloud/securitycenter/v2/bigquery_export.proto4google/cloud/securitycenter/v2/external_system.proto,google/cloud/securitycenter/v2/finding.proto0google/cloud/securitycenter/v2/mute_config.proto8google/cloud/securitycenter/v2/notification_config.proto-google/cloud/securitycenter/v2/resource.proto:google/cloud/securitycenter/v2/resource_value_config.proto3google/cloud/securitycenter/v2/security_marks.proto/google/cloud/securitycenter/v2/simulation.proto+google/cloud/securitycenter/v2/source.proto4google/cloud/securitycenter/v2/valued_resource.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/struct.proto"�
&BatchCreateResourceValueConfigsRequestI
parent (	B9�A�A31securitycenter.googleapis.com/ResourceValueConfigW
requests (2@.google.cloud.securitycenter.v2.CreateResourceValueConfigRequestB�A"~
\'BatchCreateResourceValueConfigsResponseS
resource_value_configs (23.google.cloud.securitycenter.v2.ResourceValueConfig"�
BulkMuteFindingsRequest
parent (	B	�A�A
*
filter (	Z

mute_state (2A.google.cloud.securitycenter.v2.BulkMuteFindingsRequest.MuteStateB�A"A
	MuteState
MUTE_STATE_UNSPECIFIED 	
MUTED
	UNDEFINED"
BulkMuteFindingsResponse"�
CreateBigQueryExportRequestD
parent (	B4�A�A.,securitycenter.googleapis.com/BigQueryExportM
big_query_export (2..google.cloud.securitycenter.v2.BigQueryExportB�A 
big_query_export_id (	B�A"�
CreateFindingRequest<
parent (	B,�A�A&
$securitycenter.googleapis.com/Source

finding_id (	B�A=
finding (2\'.google.cloud.securitycenter.v2.FindingB�A"�
CreateMuteConfigRequest@
parent (	B0�A�A*(securitycenter.googleapis.com/MuteConfigD
mute_config (2*.google.cloud.securitycenter.v2.MuteConfigB�A
mute_config_id (	B�A"�
CreateNotificationConfigRequestH
parent (	B8�A�A20securitycenter.googleapis.com/NotificationConfig
	config_id (	B�AT
notification_config (22.google.cloud.securitycenter.v2.NotificationConfigB�A"�
 CreateResourceValueConfigRequestI
parent (	B9�A�A31securitycenter.googleapis.com/ResourceValueConfigW
resource_value_config (23.google.cloud.securitycenter.v2.ResourceValueConfigB�A"�
CreateSourceRequestH
parent (	B8�A�A2
0cloudresourcemanager.googleapis.com/Organization;
source (2&.google.cloud.securitycenter.v2.SourceB�A"a
DeleteBigQueryExportRequestB
name (	B4�A�A.
,securitycenter.googleapis.com/BigQueryExport"Y
DeleteMuteConfigRequest>
name (	B0�A�A*
(securitycenter.googleapis.com/MuteConfig"i
DeleteNotificationConfigRequestF
name (	B8�A�A2
0securitycenter.googleapis.com/NotificationConfig"k
 DeleteResourceValueConfigRequestG
name (	B9�A�A3
1securitycenter.googleapis.com/ResourceValueConfig"^
GetBigQueryExportRequestB
name (	B4�A�A.
,securitycenter.googleapis.com/BigQueryExport"V
GetMuteConfigRequest>
name (	B0�A�A*
(securitycenter.googleapis.com/MuteConfig"f
GetNotificationConfigRequestF
name (	B8�A�A2
0securitycenter.googleapis.com/NotificationConfig"h
GetResourceValueConfigRequestG
name (	B9�A�A3
1securitycenter.googleapis.com/ResourceValueConfig"N
GetSourceRequest:
name (	B,�A�A&
$securitycenter.googleapis.com/Source"�
GroupFindingsRequest<
parent (	B,�A�A&
$securitycenter.googleapis.com/Source
filter (	
group_by (	B�A

page_token (	
	page_size ("�
GroupFindingsResponseE
group_by_results (2+.google.cloud.securitycenter.v2.GroupResult
next_page_token (	

total_size ("�
GroupResultO

properties (2;.google.cloud.securitycenter.v2.GroupResult.PropertiesEntry
count (I
PropertiesEntry
key (	%
value (2.google.protobuf.Value:8"�
ListAttackPathsRequest@
parent (	B0�A�A*(securitycenter.googleapis.com/AttackPath
filter (	

page_token (	
	page_size ("t
ListAttackPathsResponse@
attack_paths (2*.google.cloud.securitycenter.v2.AttackPath
next_page_token (	"V
GetSimulationRequest>
name (	B0�A�A*
(securitycenter.googleapis.com/Simulation"^
GetValuedResourceRequestB
name (	B4�A�A.
,securitycenter.googleapis.com/ValuedResource"�
ListBigQueryExportsRequestD
parent (	B4�A�A.,securitycenter.googleapis.com/BigQueryExport
	page_size (

page_token (	"�
ListBigQueryExportsResponseI
big_query_exports (2..google.cloud.securitycenter.v2.BigQueryExport
next_page_token (	"�
ListFindingsRequest<
parent (	B,�A�A&
$securitycenter.googleapis.com/Source
filter (	
order_by (	.

field_mask (2.google.protobuf.FieldMask

page_token (	
	page_size	 ("�
ListFindingsResponsef
list_findings_results (2G.google.cloud.securitycenter.v2.ListFindingsResponse.ListFindingsResult
next_page_token (	

total_size (�
ListFindingsResult8
finding (2\'.google.cloud.securitycenter.v2.Findingg
resource (2P.google.cloud.securitycenter.v2.ListFindingsResponse.ListFindingsResult.ResourceB�A�
Resource
name (	
display_name (	
type (	E
cloud_provider (2-.google.cloud.securitycenter.v2.CloudProvider
service (	
location (	C
gcp_metadata (2+.google.cloud.securitycenter.v2.GcpMetadataH C
aws_metadata (2+.google.cloud.securitycenter.v2.AwsMetadataH G
azure_metadata	 (2-.google.cloud.securitycenter.v2.AzureMetadataH C
resource_path
 (2,.google.cloud.securitycenter.v2.ResourcePath
resource_path_string (	B
cloud_provider_metadata"�
ListMuteConfigsRequest@
parent (	B0�A�A*(securitycenter.googleapis.com/MuteConfig
	page_size (

page_token (	"t
ListMuteConfigsResponse@
mute_configs (2*.google.cloud.securitycenter.v2.MuteConfig
next_page_token (	"�
ListNotificationConfigsRequestH
parent (	B8�A�A20securitycenter.googleapis.com/NotificationConfig

page_token (	
	page_size ("�
ListNotificationConfigsResponseP
notification_configs (22.google.cloud.securitycenter.v2.NotificationConfig
next_page_token (	"�
ListResourceValueConfigsRequestI
parent (	B9�A�A31securitycenter.googleapis.com/ResourceValueConfig
	page_size (

page_token (	"�
 ListResourceValueConfigsResponseS
resource_value_configs (23.google.cloud.securitycenter.v2.ResourceValueConfig
next_page_token (	"y
ListSourcesRequest<
parent (	B,�A�A&$securitycenter.googleapis.com/Source

page_token (	
	page_size ("g
ListSourcesResponse7
sources (2&.google.cloud.securitycenter.v2.Source
next_page_token (	"�
ListValuedResourcesRequestD
parent (	B4�A�A.,securitycenter.googleapis.com/ValuedResource
filter (	

page_token (	
	page_size (
order_by (	B�A"�
ListValuedResourcesResponseH
valued_resources (2..google.cloud.securitycenter.v2.ValuedResource
next_page_token (	

total_size ("�
SetFindingStateRequest;
name (	B-�A�A\'
%securitycenter.googleapis.com/FindingA
state (2-.google.cloud.securitycenter.v2.Finding.StateB�A"�
SetMuteRequest;
name (	B-�A�A\'
%securitycenter.googleapis.com/Finding?
mute (2,.google.cloud.securitycenter.v2.Finding.MuteB�A"�
UpdateBigQueryExportRequestM
big_query_export (2..google.cloud.securitycenter.v2.BigQueryExportB�A/
update_mask (2.google.protobuf.FieldMask"�
UpdateExternalSystemRequestL
external_system (2..google.cloud.securitycenter.v2.ExternalSystemB�A/
update_mask (2.google.protobuf.FieldMask"�
UpdateFindingRequest=
finding (2\'.google.cloud.securitycenter.v2.FindingB�A/
update_mask (2.google.protobuf.FieldMask"�
UpdateMuteConfigRequestD
mute_config (2*.google.cloud.securitycenter.v2.MuteConfigB�A/
update_mask (2.google.protobuf.FieldMask"�
UpdateNotificationConfigRequestT
notification_config (22.google.cloud.securitycenter.v2.NotificationConfigB�A/
update_mask (2.google.protobuf.FieldMask"�
 UpdateResourceValueConfigRequestW
resource_value_config (23.google.cloud.securitycenter.v2.ResourceValueConfigB�A/
update_mask (2.google.protobuf.FieldMask"�
UpdateSecurityMarksRequestJ
security_marks (2-.google.cloud.securitycenter.v2.SecurityMarksB�A/
update_mask (2.google.protobuf.FieldMask"�
UpdateSourceRequest;
source (2&.google.cloud.securitycenter.v2.SourceB�A/
update_mask (2.google.protobuf.FieldMask2�
SecurityCenter�
BatchCreateResourceValueConfigsF.google.cloud.securitycenter.v2.BatchCreateResourceValueConfigsRequestG.google.cloud.securitycenter.v2.BatchCreateResourceValueConfigsResponse"��Aparent,requests����"=/v2/{parent=organizations/*}/resourceValueConfigs:batchCreate:*ZN"I/v2/{parent=organizations/*/locations/*}/resourceValueConfigs:batchCreate:*�
BulkMuteFindings7.google.cloud.securitycenter.v2.BulkMuteFindingsRequest.google.longrunning.Operation"��AP
7google.cloud.securitycenter.v2.BulkMuteFindingsResponsegoogle.protobuf.Empty�Aparent����"./v2/{parent=organizations/*}/findings:bulkMute:*Z?":/v2/{parent=organizations/*/locations/*}/findings:bulkMute:*Z-"(/v2/{parent=folders/*}/findings:bulkMute:*Z9"4/v2/{parent=folders/*/locations/*}/findings:bulkMute:*Z.")/v2/{parent=projects/*}/findings:bulkMute:*Z:"5/v2/{parent=projects/*/locations/*}/findings:bulkMute:*�
CreateBigQueryExport;.google.cloud.securitycenter.v2.CreateBigQueryExportRequest..google.cloud.securitycenter.v2.BigQueryExport"��A+parent,big_query_export,big_query_export_id����"8/v2/{parent=organizations/*/locations/*}/bigQueryExports:big_query_exportZF"2/v2/{parent=folders/*/locations/*}/bigQueryExports:big_query_exportZG"3/v2/{parent=projects/*/locations/*}/bigQueryExports:big_query_export�
CreateFinding4.google.cloud.securitycenter.v2.CreateFindingRequest\'.google.cloud.securitycenter.v2.Finding"��Aparent,finding,finding_id����";/v2/{parent=organizations/*/sources/*/locations/*}/findings:findingZ:"//v2/{parent=organizations/*/sources/*}/findings:finding�
CreateMuteConfig7.google.cloud.securitycenter.v2.CreateMuteConfigRequest*.google.cloud.securitycenter.v2.MuteConfig"��A!parent,mute_config,mute_config_id����"4/v2/{parent=organizations/*/locations/*}/muteConfigs:mute_configZ="./v2/{parent=folders/*/locations/*}/muteConfigs:mute_configZ>"//v2/{parent=projects/*/locations/*}/muteConfigs:mute_configZ7"(/v2/{parent=organizations/*}/muteConfigs:mute_configZ1""/v2/{parent=folders/*}/muteConfigs:mute_configZ2"#/v2/{parent=projects/*}/muteConfigs:mute_config����+
parent!projects/*/locations/{location=*}0
parent&organizations/*/locations/{location=*}*
parent folders/*/locations/{location=*}�
CreateNotificationConfig?.google.cloud.securitycenter.v2.CreateNotificationConfigRequest2.google.cloud.securitycenter.v2.NotificationConfig"��A$parent,notification_config,config_id����"</v2/{parent=organizations/*/locations/*}/notificationConfigs:notification_configZM"6/v2/{parent=folders/*/locations/*}/notificationConfigs:notification_configZN"7/v2/{parent=projects/*/locations/*}/notificationConfigs:notification_config�
CreateSource3.google.cloud.securitycenter.v2.CreateSourceRequest&.google.cloud.securitycenter.v2.Source"D�Aparent,source���."$/v2/{parent=organizations/*}/sources:source�
DeleteBigQueryExport;.google.cloud.securitycenter.v2.DeleteBigQueryExportRequest.google.protobuf.Empty"��Aname����*8/v2/{name=organizations/*/locations/*/bigQueryExports/*}Z4*2/v2/{name=folders/*/locations/*/bigQueryExports/*}Z5*3/v2/{name=projects/*/locations/*/bigQueryExports/*}�
DeleteMuteConfig7.google.cloud.securitycenter.v2.DeleteMuteConfigRequest.google.protobuf.Empty"��Aname����*(/v2/{name=organizations/*/muteConfigs/*}Z6*4/v2/{name=organizations/*/locations/*/muteConfigs/*}Z$*"/v2/{name=folders/*/muteConfigs/*}Z0*./v2/{name=folders/*/locations/*/muteConfigs/*}Z%*#/v2/{name=projects/*/muteConfigs/*}Z1*//v2/{name=projects/*/locations/*/muteConfigs/*}����7
name/projects/*/locations/{location=*}/muteConfigs/*<
name4organizations/*/locations/{location=*}/muteConfigs/*6
name.folders/*/locations/{location=*}/muteConfigs/*�
DeleteNotificationConfig?.google.cloud.securitycenter.v2.DeleteNotificationConfigRequest.google.protobuf.Empty"��Aname����*</v2/{name=organizations/*/locations/*/notificationConfigs/*}Z8*6/v2/{name=folders/*/locations/*/notificationConfigs/*}Z9*7/v2/{name=projects/*/locations/*/notificationConfigs/*}�
DeleteResourceValueConfig@.google.cloud.securitycenter.v2.DeleteResourceValueConfigRequest.google.protobuf.Empty"��Aname���t*1/v2/{name=organizations/*/resourceValueConfigs/*}Z?*=/v2/{name=organizations/*/locations/*/resourceValueConfigs/*}�
GetBigQueryExport8.google.cloud.securitycenter.v2.GetBigQueryExportRequest..google.cloud.securitycenter.v2.BigQueryExport"��Aname����8/v2/{name=organizations/*/locations/*/bigQueryExports/*}Z42/v2/{name=folders/*/locations/*/bigQueryExports/*}Z53/v2/{name=projects/*/locations/*/bigQueryExports/*}�
GetSimulation4.google.cloud.securitycenter.v2.GetSimulationRequest*.google.cloud.securitycenter.v2.Simulation"o�Aname���b(/v2/{name=organizations/*/simulations/*}Z64/v2/{name=organizations/*/locations/*/simulations/*}�
GetValuedResource8.google.cloud.securitycenter.v2.GetValuedResourceRequest..google.cloud.securitycenter.v2.ValuedResource"��Aname����:/v2/{name=organizations/*/simulations/*/valuedResources/*}ZHF/v2/{name=organizations/*/locations/*/simulations/*/valuedResources/*}�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"K�Aresource���:"5/v2/{resource=organizations/*/sources/*}:getIamPolicy:*�
GetMuteConfig4.google.cloud.securitycenter.v2.GetMuteConfigRequest*.google.cloud.securitycenter.v2.MuteConfig"��Aname����(/v2/{name=organizations/*/muteConfigs/*}Z64/v2/{name=organizations/*/locations/*/muteConfigs/*}Z$"/v2/{name=folders/*/muteConfigs/*}Z0./v2/{name=folders/*/locations/*/muteConfigs/*}Z%#/v2/{name=projects/*/muteConfigs/*}Z1//v2/{name=projects/*/locations/*/muteConfigs/*}����7
name/projects/*/locations/{location=*}/muteConfigs/*<
name4organizations/*/locations/{location=*}/muteConfigs/*6
name.folders/*/locations/{location=*}/muteConfigs/*�
GetNotificationConfig<.google.cloud.securitycenter.v2.GetNotificationConfigRequest2.google.cloud.securitycenter.v2.NotificationConfig"��Aname����</v2/{name=organizations/*/locations/*/notificationConfigs/*}Z86/v2/{name=folders/*/locations/*/notificationConfigs/*}Z97/v2/{name=projects/*/locations/*/notificationConfigs/*}�
GetResourceValueConfig=.google.cloud.securitycenter.v2.GetResourceValueConfigRequest3.google.cloud.securitycenter.v2.ResourceValueConfig"��Aname���t1/v2/{name=organizations/*/resourceValueConfigs/*}Z?=/v2/{name=organizations/*/locations/*/resourceValueConfigs/*}�
	GetSource0.google.cloud.securitycenter.v2.GetSourceRequest&.google.cloud.securitycenter.v2.Source"3�Aname���&$/v2/{name=organizations/*/sources/*}�
GroupFindings4.google.cloud.securitycenter.v2.GroupFindingsRequest5.google.cloud.securitycenter.v2.GroupFindingsResponse"��Aparent,group_by����"5/v2/{parent=organizations/*/sources/*}/findings:group:*ZF"A/v2/{parent=organizations/*/sources/*/locations/*}/findings:group:*Z4"//v2/{parent=folders/*/sources/*}/findings:group:*Z@";/v2/{parent=folders/*/sources/*/locations/*}/findings:group:*Z5"0/v2/{parent=projects/*/sources/*}/findings:group:*ZA"</v2/{parent=projects/*/sources/*/locations/*}/findings:group:*�
ListAttackPaths6.google.cloud.securitycenter.v2.ListAttackPathsRequest7.google.cloud.securitycenter.v2.ListAttackPathsResponse"��Aparent����6/v2/{parent=organizations/*/simulations/*}/attackPathsZ*(/v2/{parent=organizations/*}/attackPathsZJH/v2/{parent=organizations/*/simulations/*/valuedResources/*}/attackPathsZVT/v2/{parent=organizations/*/locations/*/simulations/*/valuedResources/*}/attackPathsZPN/v2/{parent=organizations/*/simulations/*/attackExposureResults/*}/attackPathsZ\\Z/v2/{parent=organizations/*/locations/*/simulations/*/attackExposureResults/*}/attackPaths�
ListBigQueryExports:.google.cloud.securitycenter.v2.ListBigQueryExportsRequest;.google.cloud.securitycenter.v2.ListBigQueryExportsResponse"��Aparent����8/v2/{parent=organizations/*/locations/*}/bigQueryExportsZ42/v2/{parent=folders/*/locations/*}/bigQueryExportsZ53/v2/{parent=projects/*/locations/*}/bigQueryExports�
ListFindings3.google.cloud.securitycenter.v2.ListFindingsRequest4.google.cloud.securitycenter.v2.ListFindingsResponse"��Aparent����//v2/{parent=organizations/*/sources/*}/findingsZ=;/v2/{parent=organizations/*/sources/*/locations/*}/findingsZ+)/v2/{parent=folders/*/sources/*}/findingsZ75/v2/{parent=folders/*/sources/*/locations/*}/findingsZ,*/v2/{parent=projects/*/sources/*}/findingsZ86/v2/{parent=projects/*/sources/*/locations/*}/findings�
ListMuteConfigs6.google.cloud.securitycenter.v2.ListMuteConfigsRequest7.google.cloud.securitycenter.v2.ListMuteConfigsResponse"��Aparent����(/v2/{parent=organizations/*}/muteConfigsZ64/v2/{parent=organizations/*/locations/*}/muteConfigsZ$"/v2/{parent=folders/*}/muteConfigsZ0./v2/{parent=folders/*/locations/*}/muteConfigsZ%#/v2/{parent=projects/*}/muteConfigsZ1//v2/{parent=projects/*/locations/*}/muteConfigs����7
parent-projects/*/locations/{location=*}/muteConfigs<
parent2organizations/*/locations/{location=*}/muteConfigs6
parent,folders/*/locations/{location=*}/muteConfigs�
ListNotificationConfigs>.google.cloud.securitycenter.v2.ListNotificationConfigsRequest?.google.cloud.securitycenter.v2.ListNotificationConfigsResponse"��Aparent����</v2/{parent=organizations/*/locations/*}/notificationConfigsZ86/v2/{parent=folders/*/locations/*}/notificationConfigsZ97/v2/{parent=projects/*/locations/*}/notificationConfigs�
ListResourceValueConfigs?.google.cloud.securitycenter.v2.ListResourceValueConfigsRequest@.google.cloud.securitycenter.v2.ListResourceValueConfigsResponse"��Aparent���t1/v2/{parent=organizations/*}/resourceValueConfigsZ?=/v2/{parent=organizations/*/locations/*}/resourceValueConfigs�
ListSources2.google.cloud.securitycenter.v2.ListSourcesRequest3.google.cloud.securitycenter.v2.ListSourcesResponse"z�Aparent���k$/v2/{parent=organizations/*}/sourcesZ /v2/{parent=folders/*}/sourcesZ!/v2/{parent=projects/*}/sources�
ListValuedResources:.google.cloud.securitycenter.v2.ListValuedResourcesRequest;.google.cloud.securitycenter.v2.ListValuedResourcesResponse"��Aparent����:/v2/{parent=organizations/*/simulations/*}/valuedResourcesZTR/v2/{parent=organizations/*/simulations/*/attackExposureResults/*}/valuedResourcesZ.,/v2/{parent=organizations/*}/valuedResources�
SetFindingState6.google.cloud.securitycenter.v2.SetFindingStateRequest\'.google.cloud.securitycenter.v2.Finding"��A
name,state����"8/v2/{name=organizations/*/sources/*/findings/*}:setState:*ZI"D/v2/{name=organizations/*/sources/*/locations/*/findings/*}:setState:*Z7"2/v2/{name=folders/*/sources/*/findings/*}:setState:*ZC">/v2/{name=folders/*/sources/*/locations/*/findings/*}:setState:*Z8"3/v2/{name=projects/*/sources/*/findings/*}:setState:*ZD"?/v2/{name=projects/*/sources/*/locations/*/findings/*}:setState:*�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"R�Aresource,policy���:"5/v2/{resource=organizations/*/sources/*}:setIamPolicy:*�
SetMute..google.cloud.securitycenter.v2.SetMuteRequest\'.google.cloud.securitycenter.v2.Finding"��A	name,mute����"7/v2/{name=organizations/*/sources/*/findings/*}:setMute:*ZH"C/v2/{name=organizations/*/sources/*/locations/*/findings/*}:setMute:*Z6"1/v2/{name=folders/*/sources/*/findings/*}:setMute:*ZB"=/v2/{name=folders/*/sources/*/locations/*/findings/*}:setMute:*Z7"2/v2/{name=projects/*/sources/*/findings/*}:setMute:*ZC">/v2/{name=projects/*/sources/*/locations/*/findings/*}:setMute:*�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"]�Aresource,permissions���@";/v2/{resource=organizations/*/sources/*}:testIamPermissions:*�
UpdateBigQueryExport;.google.cloud.securitycenter.v2.UpdateBigQueryExportRequest..google.cloud.securitycenter.v2.BigQueryExport"��Abig_query_export,update_mask����2I/v2/{big_query_export.name=organizations/*/locations/*/bigQueryExports/*}:big_query_exportZW2C/v2/{big_query_export.name=folders/*/locations/*/bigQueryExports/*}:big_query_exportZX2D/v2/{big_query_export.name=projects/*/locations/*/bigQueryExports/*}:big_query_export�
UpdateExternalSystem;.google.cloud.securitycenter.v2.UpdateExternalSystemRequest..google.cloud.securitycenter.v2.ExternalSystem"��Aexternal_system,update_mask����2Q/v2/{external_system.name=organizations/*/sources/*/findings/*/externalSystems/*}:external_systemZp2]/v2/{external_system.name=organizations/*/sources/*/locations/*/findings/*/externalSystems/*}:external_systemZ^2K/v2/{external_system.name=folders/*/sources/*/findings/*/externalSystems/*}:external_systemZj2W/v2/{external_system.name=folders/*/sources/*/locations/*/findings/*/externalSystems/*}:external_systemZ_2L/v2/{external_system.name=projects/*/sources/*/findings/*/externalSystems/*}:external_systemZk2X/v2/{external_system.name=projects/*/sources/*/locations/*/findings/*/externalSystems/*}:external_system�
UpdateFinding4.google.cloud.securitycenter.v2.UpdateFindingRequest\'.google.cloud.securitycenter.v2.Finding"��Afinding,update_mask����27/v2/{finding.name=organizations/*/sources/*/findings/*}:findingZN2C/v2/{finding.name=organizations/*/sources/*/locations/*/findings/*}:findingZ<21/v2/{finding.name=folders/*/sources/*/findings/*}:findingZH2=/v2/{finding.name=folders/*/sources/*/locations/*/findings/*}:findingZ=22/v2/{finding.name=projects/*/sources/*/findings/*}:findingZI2>/v2/{finding.name=projects/*/sources/*/locations/*/findings/*}:finding�
UpdateMuteConfig7.google.cloud.securitycenter.v2.UpdateMuteConfigRequest*.google.cloud.securitycenter.v2.MuteConfig"��Amute_config,update_mask����24/v2/{mute_config.name=organizations/*/muteConfigs/*}:mute_configZO2@/v2/{mute_config.name=organizations/*/locations/*/muteConfigs/*}:mute_configZ=2./v2/{mute_config.name=folders/*/muteConfigs/*}:mute_configZI2:/v2/{mute_config.name=folders/*/locations/*/muteConfigs/*}:mute_configZ>2//v2/{mute_config.name=projects/*/muteConfigs/*}:mute_configZJ2;/v2/{mute_config.name=projects/*/locations/*/muteConfigs/*}:mute_config����C
mute_config.name/projects/*/locations/{location=*}/muteConfigs/*H
mute_config.name4organizations/*/locations/{location=*}/muteConfigs/*B
mute_config.name.folders/*/locations/{location=*}/muteConfigs/*�
UpdateNotificationConfig?.google.cloud.securitycenter.v2.UpdateNotificationConfigRequest2.google.cloud.securitycenter.v2.NotificationConfig"��Anotification_config,update_mask����2P/v2/{notification_config.name=organizations/*/locations/*/notificationConfigs/*}:notification_configZa2J/v2/{notification_config.name=folders/*/locations/*/notificationConfigs/*}:notification_configZb2K/v2/{notification_config.name=projects/*/locations/*/notificationConfigs/*}:notification_config�
UpdateResourceValueConfig@.google.cloud.securitycenter.v2.UpdateResourceValueConfigRequest3.google.cloud.securitycenter.v2.ResourceValueConfig"��A!resource_value_config,update_mask����2G/v2/{resource_value_config.name=organizations/*/resourceValueConfigs/*}:resource_value_configZl2S/v2/{resource_value_config.name=organizations/*/locations/*/resourceValueConfigs/*}:resource_value_config�
UpdateSecurityMarks:.google.cloud.securitycenter.v2.UpdateSecurityMarksRequest-.google.cloud.securitycenter.v2.SecurityMarks"��Asecurity_marks,update_mask����2L/v2/{security_marks.name=organizations/*/sources/*/findings/*/securityMarks}:security_marksZR2@/v2/{security_marks.name=organizations/*/assets/*/securityMarks}:security_marksZj2X/v2/{security_marks.name=organizations/*/sources/*/locations/*/findings/*/securityMarks}:security_marksZX2F/v2/{security_marks.name=folders/*/sources/*/findings/*/securityMarks}:security_marksZL2:/v2/{security_marks.name=folders/*/assets/*/securityMarks}:security_marksZd2R/v2/{security_marks.name=folders/*/sources/*/locations/*/findings/*/securityMarks}:security_marksZY2G/v2/{security_marks.name=projects/*/sources/*/findings/*/securityMarks}:security_marksZM2;/v2/{security_marks.name=projects/*/assets/*/securityMarks}:security_marksZe2S/v2/{security_marks.name=projects/*/sources/*/locations/*/findings/*/securityMarks}:security_marks�
UpdateSource3.google.cloud.securitycenter.v2.UpdateSourceRequest&.google.cloud.securitycenter.v2.Source"P�Asource,update_mask���52+/v2/{source.name=organizations/*/sources/*}:sourceQ�Asecuritycenter.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
"com.google.cloud.securitycenter.v2BSecuritycenterServiceProtoPZJcloud.google.com/go/securitycenter/apiv2/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V2�Google\\Cloud\\SecurityCenter\\V2�!Google::Cloud::SecurityCenter::V2�Ag
2securitycenter.googleapis.com/OrganizationLocation1organizations/{organization}/locations/{location}�AU
,securitycenter.googleapis.com/FolderLocation%folders/{folder}/locations/{location}�A�
8securitycenter.googleapis.com/OrganizationValuedResourcelorganizations/{organization}/locations/{location}/simulations/{simulation}/valuedResources/{valued_resource}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

