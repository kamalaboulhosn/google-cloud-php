<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/mutation.proto

namespace GPBMetadata\Google\Spanner\V1;

class Mutation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Spanner\V1\Keys::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 google/spanner/v1/mutation.protogoogle.spanner.v1google/protobuf/struct.protogoogle/spanner/v1/keys.proto"�
Mutation3
insert (2!.google.spanner.v1.Mutation.WriteH 3
update (2!.google.spanner.v1.Mutation.WriteH =
insert_or_update (2!.google.spanner.v1.Mutation.WriteH 4
replace (2!.google.spanner.v1.Mutation.WriteH 4
delete (2".google.spanner.v1.Mutation.DeleteH X
Write
table (	B�A
columns (	*
values (2.google.protobuf.ListValueM
Delete
table (	B�A/
key_set (2.google.spanner.v1.KeySetB�AB
	operationB�
com.google.spanner.v1BMutationProtoPZ8google.golang.org/genproto/googleapis/spanner/v1;spanner�Google.Cloud.Spanner.V1�Google\\Cloud\\Spanner\\V1�Google::Cloud::Spanner::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

