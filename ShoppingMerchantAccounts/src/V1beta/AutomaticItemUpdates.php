<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/automaticimprovements.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Turning on [item
 * updates](https://support.google.com/merchants/answer/3246284) allows
 * Google to automatically update items for you. When item updates are on,
 * Google uses the structured data markup on the website and advanced data
 * extractors to update the price and availability of the items. When the item
 * updates are off, items with mismatched data aren't shown.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.AutomaticItemUpdates</code>
 */
class AutomaticItemUpdates extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Determines which attributes of the items should be automatically
     * updated. If this field is not present and provided in the update mask, then
     * the settings will be deleted. If there are no settings for subaccount, they
     * are inherited from aggregator.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.AutomaticItemUpdates.ItemUpdatesAccountLevelSettings account_item_updates_settings = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $account_item_updates_settings = null;
    /**
     * Output only. The effective value of allow_price_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_price_updates = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $effective_allow_price_updates = false;
    /**
     * Output only. The effective value of allow_availability_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_availability_updates = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $effective_allow_availability_updates = false;
    /**
     * Output only. The effective value of
     * allow_strict_availability_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_strict_availability_updates = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $effective_allow_strict_availability_updates = false;
    /**
     * Output only. The effective value of allow_condition_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_condition_updates = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $effective_allow_condition_updates = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Shopping\Merchant\Accounts\V1beta\AutomaticItemUpdates\ItemUpdatesAccountLevelSettings $account_item_updates_settings
     *           Optional. Determines which attributes of the items should be automatically
     *           updated. If this field is not present and provided in the update mask, then
     *           the settings will be deleted. If there are no settings for subaccount, they
     *           are inherited from aggregator.
     *     @type bool $effective_allow_price_updates
     *           Output only. The effective value of allow_price_updates.
     *           If account_item_updates_settings is present, then this value is the same.
     *           Otherwise, it represents the inherited value of the parent account.
     *           The default value is true if no settings are present.
     *           Read-only.
     *     @type bool $effective_allow_availability_updates
     *           Output only. The effective value of allow_availability_updates.
     *           If account_item_updates_settings is present, then this value is the same.
     *           Otherwise, it represents the inherited value of the parent account.
     *           The default value is true if no settings are present.
     *           Read-only.
     *     @type bool $effective_allow_strict_availability_updates
     *           Output only. The effective value of
     *           allow_strict_availability_updates.
     *           If account_item_updates_settings is present, then this value is the same.
     *           Otherwise, it represents the inherited value of the parent account.
     *           The default value is true if no settings are present.
     *           Read-only.
     *     @type bool $effective_allow_condition_updates
     *           Output only. The effective value of allow_condition_updates.
     *           If account_item_updates_settings is present, then this value is the same.
     *           Otherwise, it represents the inherited value of the parent account.
     *           The default value is true if no settings are present.
     *           Read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Automaticimprovements::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Determines which attributes of the items should be automatically
     * updated. If this field is not present and provided in the update mask, then
     * the settings will be deleted. If there are no settings for subaccount, they
     * are inherited from aggregator.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.AutomaticItemUpdates.ItemUpdatesAccountLevelSettings account_item_updates_settings = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Shopping\Merchant\Accounts\V1beta\AutomaticItemUpdates\ItemUpdatesAccountLevelSettings|null
     */
    public function getAccountItemUpdatesSettings()
    {
        return $this->account_item_updates_settings;
    }

    public function hasAccountItemUpdatesSettings()
    {
        return isset($this->account_item_updates_settings);
    }

    public function clearAccountItemUpdatesSettings()
    {
        unset($this->account_item_updates_settings);
    }

    /**
     * Optional. Determines which attributes of the items should be automatically
     * updated. If this field is not present and provided in the update mask, then
     * the settings will be deleted. If there are no settings for subaccount, they
     * are inherited from aggregator.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.AutomaticItemUpdates.ItemUpdatesAccountLevelSettings account_item_updates_settings = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Shopping\Merchant\Accounts\V1beta\AutomaticItemUpdates\ItemUpdatesAccountLevelSettings $var
     * @return $this
     */
    public function setAccountItemUpdatesSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Accounts\V1beta\AutomaticItemUpdates\ItemUpdatesAccountLevelSettings::class);
        $this->account_item_updates_settings = $var;

        return $this;
    }

    /**
     * Output only. The effective value of allow_price_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_price_updates = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getEffectiveAllowPriceUpdates()
    {
        return $this->effective_allow_price_updates;
    }

    /**
     * Output only. The effective value of allow_price_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_price_updates = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setEffectiveAllowPriceUpdates($var)
    {
        GPBUtil::checkBool($var);
        $this->effective_allow_price_updates = $var;

        return $this;
    }

    /**
     * Output only. The effective value of allow_availability_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_availability_updates = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getEffectiveAllowAvailabilityUpdates()
    {
        return $this->effective_allow_availability_updates;
    }

    /**
     * Output only. The effective value of allow_availability_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_availability_updates = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setEffectiveAllowAvailabilityUpdates($var)
    {
        GPBUtil::checkBool($var);
        $this->effective_allow_availability_updates = $var;

        return $this;
    }

    /**
     * Output only. The effective value of
     * allow_strict_availability_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_strict_availability_updates = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getEffectiveAllowStrictAvailabilityUpdates()
    {
        return $this->effective_allow_strict_availability_updates;
    }

    /**
     * Output only. The effective value of
     * allow_strict_availability_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_strict_availability_updates = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setEffectiveAllowStrictAvailabilityUpdates($var)
    {
        GPBUtil::checkBool($var);
        $this->effective_allow_strict_availability_updates = $var;

        return $this;
    }

    /**
     * Output only. The effective value of allow_condition_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_condition_updates = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getEffectiveAllowConditionUpdates()
    {
        return $this->effective_allow_condition_updates;
    }

    /**
     * Output only. The effective value of allow_condition_updates.
     * If account_item_updates_settings is present, then this value is the same.
     * Otherwise, it represents the inherited value of the parent account.
     * The default value is true if no settings are present.
     * Read-only.
     *
     * Generated from protobuf field <code>bool effective_allow_condition_updates = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setEffectiveAllowConditionUpdates($var)
    {
        GPBUtil::checkBool($var);
        $this->effective_allow_condition_updates = $var;

        return $this;
    }

}

