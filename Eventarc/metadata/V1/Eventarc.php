<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/eventarc.proto

namespace GPBMetadata\Google\Cloud\Eventarc\V1;

class Eventarc
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
        \GPBMetadata\Google\Cloud\Eventarc\V1\Channel::initOnce();
        \GPBMetadata\Google\Cloud\Eventarc\V1\ChannelConnection::initOnce();
        \GPBMetadata\Google\Cloud\Eventarc\V1\Discovery::initOnce();
        \GPBMetadata\Google\Cloud\Eventarc\V1\GoogleChannelConfig::initOnce();
        \GPBMetadata\Google\Cloud\Eventarc\V1\Trigger::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�<
\'google/cloud/eventarc/v1/eventarc.protogoogle.cloud.eventarc.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto&google/cloud/eventarc/v1/channel.proto1google/cloud/eventarc/v1/channel_connection.proto(google/cloud/eventarc/v1/discovery.proto4google/cloud/eventarc/v1/google_channel_config.proto&google/cloud/eventarc/v1/trigger.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"J
GetTriggerRequest5
name (	B\'�A�A!
eventarc.googleapis.com/Trigger"�
ListTriggersRequest7
parent (	B\'�A�A!eventarc.googleapis.com/Trigger
	page_size (

page_token (	
order_by (	
filter (	"y
ListTriggersResponse3
triggers (2!.google.cloud.eventarc.v1.Trigger
next_page_token (	
unreachable (	"�
CreateTriggerRequest7
parent (	B\'�A�A!eventarc.googleapis.com/Trigger7
trigger (2!.google.cloud.eventarc.v1.TriggerB�A

trigger_id (	B�A
validate_only (B�A"�
UpdateTriggerRequest2
trigger (2!.google.cloud.eventarc.v1.Trigger/
update_mask (2.google.protobuf.FieldMask
allow_missing (
validate_only (B�A"�
DeleteTriggerRequest5
name (	B\'�A�A!
eventarc.googleapis.com/Trigger
etag (	
allow_missing (
validate_only (B�A"J
GetChannelRequest5
name (	B\'�A�A!
eventarc.googleapis.com/Channel"�
ListChannelsRequest7
parent (	B\'�A�A!eventarc.googleapis.com/Channel
	page_size (

page_token (	
order_by (	"y
ListChannelsResponse3
channels (2!.google.cloud.eventarc.v1.Channel
next_page_token (	
unreachable (	"�
CreateChannelRequest7
parent (	B\'�A�A!eventarc.googleapis.com/Channel7
channel (2!.google.cloud.eventarc.v1.ChannelB�A

channel_id (	B�A
validate_only (B�A"�
UpdateChannelRequest2
channel (2!.google.cloud.eventarc.v1.Channel/
update_mask (2.google.protobuf.FieldMask
validate_only (B�A"i
DeleteChannelRequest5
name (	B\'�A�A!
eventarc.googleapis.com/Channel
validate_only (B�A"L
GetProviderRequest6
name (	B(�A�A"
 eventarc.googleapis.com/Provider"�
ListProvidersRequest8
parent (	B(�A�A" eventarc.googleapis.com/Provider
	page_size (

page_token (	
order_by (	
filter (	"|
ListProvidersResponse5
	providers (2".google.cloud.eventarc.v1.Provider
next_page_token (	
unreachable (	"^
GetChannelConnectionRequest?
name (	B1�A�A+
)eventarc.googleapis.com/ChannelConnection"�
ListChannelConnectionsRequestA
parent (	B1�A�A+)eventarc.googleapis.com/ChannelConnection
	page_size (

page_token (	"�
ListChannelConnectionsResponseH
channel_connections (2+.google.cloud.eventarc.v1.ChannelConnection
next_page_token (	
unreachable (	"�
CreateChannelConnectionRequestA
parent (	B1�A�A+)eventarc.googleapis.com/ChannelConnectionL
channel_connection (2+.google.cloud.eventarc.v1.ChannelConnectionB�A"
channel_connection_id (	B�A"a
DeleteChannelConnectionRequest?
name (	B1�A�A+
)eventarc.googleapis.com/ChannelConnection"�
 UpdateGoogleChannelConfigRequestQ
google_channel_config (2-.google.cloud.eventarc.v1.GoogleChannelConfigB�A/
update_mask (2.google.protobuf.FieldMask"b
GetGoogleChannelConfigRequestA
name (	B3�A�A-
+eventarc.googleapis.com/GoogleChannelConfig"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A2�
Eventarc�

GetTrigger+.google.cloud.eventarc.v1.GetTriggerRequest!.google.cloud.eventarc.v1.Trigger";�Aname���.,/v1/{name=projects/*/locations/*/triggers/*}�
ListTriggers-.google.cloud.eventarc.v1.ListTriggersRequest..google.cloud.eventarc.v1.ListTriggersResponse"=�Aparent���.,/v1/{parent=projects/*/locations/*}/triggers�
CreateTrigger..google.cloud.eventarc.v1.CreateTriggerRequest.google.longrunning.Operation"x�A
TriggerOperationMetadata�Aparent,trigger,trigger_id���7",/v1/{parent=projects/*/locations/*}/triggers:trigger�
UpdateTrigger..google.cloud.eventarc.v1.UpdateTriggerRequest.google.longrunning.Operation"��A
TriggerOperationMetadata�A!trigger,update_mask,allow_missing���?24/v1/{trigger.name=projects/*/locations/*/triggers/*}:trigger�
DeleteTrigger..google.cloud.eventarc.v1.DeleteTriggerRequest.google.longrunning.Operation"h�A
TriggerOperationMetadata�Aname,allow_missing���.*,/v1/{name=projects/*/locations/*/triggers/*}�

GetChannel+.google.cloud.eventarc.v1.GetChannelRequest!.google.cloud.eventarc.v1.Channel";�Aname���.,/v1/{name=projects/*/locations/*/channels/*}�
ListChannels-.google.cloud.eventarc.v1.ListChannelsRequest..google.cloud.eventarc.v1.ListChannelsResponse"=�Aparent���.,/v1/{parent=projects/*/locations/*}/channels�
CreateChannel..google.cloud.eventarc.v1.CreateChannelRequest.google.longrunning.Operation"x�A
ChannelOperationMetadata�Aparent,channel,channel_id���7",/v1/{parent=projects/*/locations/*}/channels:channel�
UpdateChannel..google.cloud.eventarc.v1.UpdateChannelRequest.google.longrunning.Operation"z�A
ChannelOperationMetadata�Achannel,update_mask���?24/v1/{channel.name=projects/*/locations/*/channels/*}:channel�
DeleteChannel..google.cloud.eventarc.v1.DeleteChannelRequest.google.longrunning.Operation"Z�A
ChannelOperationMetadata�Aname���.*,/v1/{name=projects/*/locations/*/channels/*}�
GetProvider,.google.cloud.eventarc.v1.GetProviderRequest".google.cloud.eventarc.v1.Provider"<�Aname���/-/v1/{name=projects/*/locations/*/providers/*}�
ListProviders..google.cloud.eventarc.v1.ListProvidersRequest/.google.cloud.eventarc.v1.ListProvidersResponse">�Aparent���/-/v1/{parent=projects/*/locations/*}/providers�
GetChannelConnection5.google.cloud.eventarc.v1.GetChannelConnectionRequest+.google.cloud.eventarc.v1.ChannelConnection"E�Aname���86/v1/{name=projects/*/locations/*/channelConnections/*}�
ListChannelConnections7.google.cloud.eventarc.v1.ListChannelConnectionsRequest8.google.cloud.eventarc.v1.ListChannelConnectionsResponse"G�Aparent���86/v1/{parent=projects/*/locations/*}/channelConnections�
CreateChannelConnection8.google.cloud.eventarc.v1.CreateChannelConnectionRequest.google.longrunning.Operation"��A&
ChannelConnectionOperationMetadata�A/parent,channel_connection,channel_connection_id���L"6/v1/{parent=projects/*/locations/*}/channelConnections:channel_connection�
DeleteChannelConnection8.google.cloud.eventarc.v1.DeleteChannelConnectionRequest.google.longrunning.Operation"n�A&
ChannelConnectionOperationMetadata�Aname���8*6/v1/{name=projects/*/locations/*/channelConnections/*}�
GetGoogleChannelConfig7.google.cloud.eventarc.v1.GetGoogleChannelConfigRequest-.google.cloud.eventarc.v1.GoogleChannelConfig"D�Aname���75/v1/{name=projects/*/locations/*/googleChannelConfig}�
UpdateGoogleChannelConfig:.google.cloud.eventarc.v1.UpdateGoogleChannelConfigRequest-.google.cloud.eventarc.v1.GoogleChannelConfig"��A!google_channel_config,update_mask���d2K/v1/{google_channel_config.name=projects/*/locations/*/googleChannelConfig}:google_channel_configK�Aeventarc.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.eventarc.v1BEventarcProtoPZ8cloud.google.com/go/eventarc/apiv1/eventarcpb;eventarcpb�Google.Cloud.Eventarc.V1�Google\\Cloud\\Eventarc\\V1�Google::Cloud::Eventarc::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

