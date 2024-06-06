<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/promotions/v1beta/promotions.proto

namespace Google\Shopping\Merchant\Promotions\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the `ListPromotions` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.promotions.v1beta.ListPromotionsResponse</code>
 */
class ListPromotionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The processed promotions from the specified account.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.promotions.v1beta.Promotion promotions = 1;</code>
     */
    private $promotions;
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
     *     @type array<\Google\Shopping\Merchant\Promotions\V1beta\Promotion>|\Google\Protobuf\Internal\RepeatedField $promotions
     *           The processed promotions from the specified account.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Promotions\V1Beta\Promotions::initOnce();
        parent::__construct($data);
    }

    /**
     * The processed promotions from the specified account.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.promotions.v1beta.Promotion promotions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * The processed promotions from the specified account.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.promotions.v1beta.Promotion promotions = 1;</code>
     * @param array<\Google\Shopping\Merchant\Promotions\V1beta\Promotion>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPromotions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Merchant\Promotions\V1beta\Promotion::class);
        $this->promotions = $arr;

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

