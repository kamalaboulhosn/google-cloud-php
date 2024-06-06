<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/account_tax.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to account tax list request
 * This method can only be called on a multi-client account, otherwise it'll
 * return an error.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.ListAccountTaxResponse</code>
 */
class ListAccountTaxResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Page of accounttax settings
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.AccountTax account_taxes = 1;</code>
     */
    private $account_taxes;
    /**
     * The token for the retrieval of the next page of account tax settings.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Shopping\Merchant\Accounts\V1beta\AccountTax>|\Google\Protobuf\Internal\RepeatedField $account_taxes
     *           Page of accounttax settings
     *     @type string $next_page_token
     *           The token for the retrieval of the next page of account tax settings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\AccountTax::initOnce();
        parent::__construct($data);
    }

    /**
     * Page of accounttax settings
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.AccountTax account_taxes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccountTaxes()
    {
        return $this->account_taxes;
    }

    /**
     * Page of accounttax settings
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.AccountTax account_taxes = 1;</code>
     * @param array<\Google\Shopping\Merchant\Accounts\V1beta\AccountTax>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccountTaxes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Merchant\Accounts\V1beta\AccountTax::class);
        $this->account_taxes = $arr;

        return $this;
    }

    /**
     * The token for the retrieval of the next page of account tax settings.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The token for the retrieval of the next page of account tax settings.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

