<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/products/v1beta/products_common.proto

namespace Google\Shopping\Merchant\Products\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Conditions to be met for a product to have free shipping.
 *
 * Generated from protobuf message <code>google.shopping.merchant.products.v1beta.FreeShippingThreshold</code>
 */
class FreeShippingThreshold extends \Google\Protobuf\Internal\Message
{
    /**
     * The [CLDR territory
     * code](http://www.unicode.org/repos/cldr/tags/latest/common/main/en.xml)
     * of the country to which an item will ship.
     *
     * Generated from protobuf field <code>optional string country = 1;</code>
     */
    protected $country = null;
    /**
     * The minimum product price for the shipping cost to become free. Represented
     * as a number.
     *
     * Generated from protobuf field <code>optional .google.shopping.type.Price price_threshold = 2;</code>
     */
    protected $price_threshold = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $country
     *           The [CLDR territory
     *           code](http://www.unicode.org/repos/cldr/tags/latest/common/main/en.xml)
     *           of the country to which an item will ship.
     *     @type \Google\Shopping\Type\Price $price_threshold
     *           The minimum product price for the shipping cost to become free. Represented
     *           as a number.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Products\V1Beta\ProductsCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * The [CLDR territory
     * code](http://www.unicode.org/repos/cldr/tags/latest/common/main/en.xml)
     * of the country to which an item will ship.
     *
     * Generated from protobuf field <code>optional string country = 1;</code>
     * @return string
     */
    public function getCountry()
    {
        return isset($this->country) ? $this->country : '';
    }

    public function hasCountry()
    {
        return isset($this->country);
    }

    public function clearCountry()
    {
        unset($this->country);
    }

    /**
     * The [CLDR territory
     * code](http://www.unicode.org/repos/cldr/tags/latest/common/main/en.xml)
     * of the country to which an item will ship.
     *
     * Generated from protobuf field <code>optional string country = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * The minimum product price for the shipping cost to become free. Represented
     * as a number.
     *
     * Generated from protobuf field <code>optional .google.shopping.type.Price price_threshold = 2;</code>
     * @return \Google\Shopping\Type\Price|null
     */
    public function getPriceThreshold()
    {
        return $this->price_threshold;
    }

    public function hasPriceThreshold()
    {
        return isset($this->price_threshold);
    }

    public function clearPriceThreshold()
    {
        unset($this->price_threshold);
    }

    /**
     * The minimum product price for the shipping cost to become free. Represented
     * as a number.
     *
     * Generated from protobuf field <code>optional .google.shopping.type.Price price_threshold = 2;</code>
     * @param \Google\Shopping\Type\Price $var
     * @return $this
     */
    public function setPriceThreshold($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Type\Price::class);
        $this->price_threshold = $var;

        return $this;
    }

}

