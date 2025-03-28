<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search_service.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the `ListProductSets` method.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.ListProductSetsResponse</code>
 */
class ListProductSetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of ProductSets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSet product_sets = 1;</code>
     */
    private $product_sets;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
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
     *     @type array<\Google\Cloud\Vision\V1\ProductSet>|\Google\Protobuf\Internal\RepeatedField $product_sets
     *           List of ProductSets.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of ProductSets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSet product_sets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProductSets()
    {
        return $this->product_sets;
    }

    /**
     * List of ProductSets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSet product_sets = 1;</code>
     * @param array<\Google\Cloud\Vision\V1\ProductSet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProductSets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\ProductSet::class);
        $this->product_sets = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
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

