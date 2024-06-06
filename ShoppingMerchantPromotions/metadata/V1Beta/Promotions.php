<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/promotions/v1beta/promotions.proto

namespace GPBMetadata\Google\Shopping\Merchant\Promotions\V1Beta;

class Promotions
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
        \GPBMetadata\Google\Shopping\Merchant\Promotions\V1Beta\PromotionsCommon::initOnce();
        \GPBMetadata\Google\Shopping\Type\Types::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
;google/shopping/merchant/promotions/v1beta/promotions.proto*google.shopping.merchant.promotions.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protoBgoogle/shopping/merchant/promotions/v1beta/promotions_common.proto google/shopping/type/types.proto"�
	Promotion
name (	B�A
promotion_id (	B�A
content_language (	B�A
target_country (	B�A^
redemption_channel (2=.google.shopping.merchant.promotions.v1beta.RedemptionChannelB�A
data_source (	B�AO

attributes (26.google.shopping.merchant.promotions.v1beta.AttributesB�AE
custom_attributes (2%.google.shopping.type.CustomAttributeB�AZ
promotion_status	 (2;.google.shopping.merchant.promotions.v1beta.PromotionStatusB�A 
version_number
 (B�AH �:k�Ah
$merchantapi.googleapis.com/Promotion)accounts/{account}/promotions/{promotion}*
promotions2	promotionB
_version_number"�
InsertPromotionRequest
parent (	B�AM
	promotion (25.google.shopping.merchant.promotions.v1beta.PromotionB�A
data_source (	B�A"Q
GetPromotionRequest:
name (	B,�A�A&
$merchantapi.googleapis.com/Promotion"]
ListPromotionsRequest
parent (	B�A
	page_size (B�A

page_token (	B�A"|
ListPromotionsResponseI

promotions (25.google.shopping.merchant.promotions.v1beta.Promotion
next_page_token (	2�
PromotionsService�
InsertPromotionB.google.shopping.merchant.promotions.v1beta.InsertPromotionRequest5.google.shopping.merchant.promotions.v1beta.Promotion"C���="8/promotions/v1beta/{parent=accounts/*}/promotions:insert:*�
GetPromotion?.google.shopping.merchant.promotions.v1beta.GetPromotionRequest5.google.shopping.merchant.promotions.v1beta.Promotion"@�Aname���31/promotions/v1beta/{name=accounts/*/promotions/*}�
ListPromotionsA.google.shopping.merchant.promotions.v1beta.ListPromotionsRequestB.google.shopping.merchant.promotions.v1beta.ListPromotionsResponse"B�Aparent���31/promotions/v1beta/{parent=accounts/*}/promotionsG�Amerchantapi.googleapis.com�A\'https://www.googleapis.com/auth/contentB�
.com.google.shopping.merchant.promotions.v1betaBPromotionsProtoPZTcloud.google.com/go/shopping/merchant/promotions/apiv1beta/promotionspb;promotionspb�A8
"merchantapi.googleapis.com/Accountaccounts/{account}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

