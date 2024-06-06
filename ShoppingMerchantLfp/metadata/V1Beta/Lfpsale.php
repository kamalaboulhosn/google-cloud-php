<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/lfp/v1beta/lfpsale.proto

namespace GPBMetadata\Google\Shopping\Merchant\Lfp\V1Beta;

class Lfpsale
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
        \GPBMetadata\Google\Api\FieldInfo::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Shopping\Type\Types::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

1google/shopping/merchant/lfp/v1beta/lfpsale.proto#google.shopping.merchant.lfp.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/field_info.protogoogle/api/resource.protogoogle/protobuf/timestamp.proto google/shopping/type/types.proto"�
LfpSale
name (	B�A�A
target_account (B�A

store_code (	B�A
offer_id (	B�A
region_code (	B�A
content_language (	B�A
gtin (	B�A/
price (2.google.shopping.type.PriceB�A
quantity	 (B�A2
	sale_time
 (2.google.protobuf.TimestampB�A
uid (	B�A���H �

feed_label (	B�AH�:^�A[
"merchantapi.googleapis.com/LfpSale"accounts/{account}/lfpSales/{sale}*lfpSales2lfpSaleB
_uidB
_feed_label"p
InsertLfpSaleRequest
parent (	B�AC
lfp_sale (2,.google.shopping.merchant.lfp.v1beta.LfpSaleB�A2�
LfpSaleService�
InsertLfpSale9.google.shopping.merchant.lfp.v1beta.InsertLfpSaleRequest,.google.shopping.merchant.lfp.v1beta.LfpSale"A���;"//lfp/v1beta/{parent=accounts/*}/lfpSales:insert:lfp_saleG�Amerchantapi.googleapis.com�A\'https://www.googleapis.com/auth/contentBz
\'com.google.shopping.merchant.lfp.v1betaBLfpSaleProtoPZ?cloud.google.com/go/shopping/merchant/lfp/apiv1beta/lfppb;lfppbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

