<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/accounts.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the `ListAccounts` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.ListAccountsResponse</code>
 */
class ListAccountsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The accounts matching the `ListAccountsRequest`.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.Account accounts = 1;</code>
     */
    private $accounts;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
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
     *     @type array<\Google\Shopping\Merchant\Accounts\V1beta\Account>|\Google\Protobuf\Internal\RepeatedField $accounts
     *           The accounts matching the `ListAccountsRequest`.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Accounts::initOnce();
        parent::__construct($data);
    }

    /**
     * The accounts matching the `ListAccountsRequest`.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.Account accounts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * The accounts matching the `ListAccountsRequest`.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.Account accounts = 1;</code>
     * @param array<\Google\Shopping\Merchant\Accounts\V1beta\Account>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Merchant\Accounts\V1beta\Account::class);
        $this->accounts = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
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

