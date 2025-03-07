<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/audit_log.proto

namespace GPBMetadata\Google\Cloud\Audit;

class AuditLog
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Rpc\Context\AttributeContext::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"google/cloud/audit/audit_log.protogoogle.cloud.auditgoogle/protobuf/any.protogoogle/protobuf/struct.proto*google/rpc/context/attribute_context.protogoogle/rpc/status.proto"�
AuditLog
service_name (	
method_name (	
resource_name (	?
resource_location (2$.google.cloud.audit.ResourceLocation8
resource_original_state (2.google.protobuf.Struct
num_response_items ("
status (2.google.rpc.StatusC
authentication_info (2&.google.cloud.audit.AuthenticationInfoA
authorization_info	 (2%.google.cloud.audit.AuthorizationInfoF
policy_violation_info (2\'.google.cloud.audit.PolicyViolationInfo=
request_metadata (2#.google.cloud.audit.RequestMetadata(
request (2.google.protobuf.Struct)
response (2.google.protobuf.Struct)
metadata (2.google.protobuf.Struct.
service_data (2.google.protobuf.AnyB"�
AuthenticationInfo
principal_email (	
authority_selector (	6
third_party_principal (2.google.protobuf.Struct 
service_account_key_name (	Y
service_account_delegation_info (20.google.cloud.audit.ServiceAccountDelegationInfo
principal_subject (	"�
AuthorizationInfo
resource (	

permission (	
granted (J
resource_attributes (2-.google.rpc.context.AttributeContext.ResourceM
permission_type (24.google.cloud.audit.AuthorizationInfo.PermissionType"q
PermissionType
PERMISSION_TYPE_UNSPECIFIED 

ADMIN_READ
ADMIN_WRITE
	DATA_READ

DATA_WRITE"�
RequestMetadata
	caller_ip (	"
caller_supplied_user_agent (	
caller_network (	H
request_attributes (2,.google.rpc.context.AttributeContext.RequestI
destination_attributes (2).google.rpc.context.AttributeContext.Peer"I
ResourceLocation
current_locations (	
original_locations (	"�
ServiceAccountDelegationInfo
principal_subject (	e
first_party_principal (2D.google.cloud.audit.ServiceAccountDelegationInfo.FirstPartyPrincipalH e
third_party_principal (2D.google.cloud.audit.ServiceAccountDelegationInfo.ThirdPartyPrincipalH a
FirstPartyPrincipal
principal_email (	1
service_metadata (2.google.protobuf.StructJ
ThirdPartyPrincipal3
third_party_claims (2.google.protobuf.StructB
	Authority"d
PolicyViolationInfoM
org_policy_violation_info (2*.google.cloud.audit.OrgPolicyViolationInfo"�
OrgPolicyViolationInfo-
payload (2.google.protobuf.StructB�A
resource_type (	B�AX
resource_tags (2<.google.cloud.audit.OrgPolicyViolationInfo.ResourceTagsEntryB�A>
violation_info (2!.google.cloud.audit.ViolationInfoB�A3
ResourceTagsEntry
key (	
value (	:8"�
ViolationInfo

constraint (	B�A
error_message (	B�A
checked_value (	B�AF
policy_type (2,.google.cloud.audit.ViolationInfo.PolicyTypeB�A"m

PolicyType
POLICY_TYPE_UNSPECIFIED 
BOOLEAN_CONSTRAINT
LIST_CONSTRAINT
CUSTOM_CONSTRAINTBe
com.google.cloud.auditBAuditLogProtoPZ7google.golang.org/genproto/googleapis/cloud/audit;audit�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

