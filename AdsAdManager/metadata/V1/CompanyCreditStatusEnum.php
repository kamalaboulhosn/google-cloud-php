<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/company_credit_status_enum.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class CompanyCreditStatusEnum
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/admanager/v1/company_credit_status_enum.protogoogle.ads.admanager.v1"�
CompanyCreditStatusEnum"z
CompanyCreditStatus%
!COMPANY_CREDIT_STATUS_UNSPECIFIED 

ACTIVE
INACTIVE
ON_HOLD
STOP
BLOCKEDB�
com.google.ads.admanager.v1BCompanyCreditStatusEnumProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1�Google::Ads::AdManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

