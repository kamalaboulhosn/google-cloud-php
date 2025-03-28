<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/catalog.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CatalogItem captures all metadata information of items to be recommended.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.CatalogItem</code>
 */
class CatalogItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Catalog item identifier. UTF-8 encoded string with a length limit
     * of 128 bytes.
     * This id must be unique among all catalog items within the same catalog. It
     * should also be used when logging user events in order for the user events
     * to be joined with the Catalog.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $id = '';
    /**
     * Required. Catalog item categories. This field is repeated for supporting
     * one catalog item belonging to several parallel category hierarchies.
     * For example, if a shoes product belongs to both
     * ["Shoes & Accessories" -> "Shoes"] and
     * ["Sports & Fitness" -> "Athletic Clothing" -> "Shoes"], it could be
     * represented as:
     *      "categoryHierarchies": [
     *        { "categories": ["Shoes & Accessories", "Shoes"]},
     *        { "categories": ["Sports & Fitness", "Athletic Clothing", "Shoes"] }
     *      ]
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.CatalogItem.CategoryHierarchy category_hierarchies = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $category_hierarchies;
    /**
     * Required. Catalog item title. UTF-8 encoded string with a length limit of 1
     * KiB.
     *
     * Generated from protobuf field <code>string title = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $title = '';
    /**
     * Optional. Catalog item description. UTF-8 encoded string with a length
     * limit of 5 KiB.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. Highly encouraged. Extra catalog item attributes to be
     * included in the recommendation model. For example, for retail products,
     * this could include the store name, vendor, style, color, etc. These are
     * very strong signals for recommendation model, thus we highly recommend
     * providing the item attributes here.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.FeatureMap item_attributes = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $item_attributes = null;
    /**
     * Optional. Language of the title/description/item_attributes. Use language
     * tags defined by BCP 47. https://www.rfc-editor.org/rfc/bcp/bcp47.txt. Our
     * supported language codes include 'en', 'es', 'fr', 'de', 'ar', 'fa', 'zh',
     * 'ja', 'ko', 'sv', 'ro', 'nl'. For other languages, contact
     * your Google account manager.
     *
     * Generated from protobuf field <code>string language_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $language_code = '';
    /**
     * Optional. Filtering tags associated with the catalog item. Each tag should
     * be a UTF-8 encoded string with a length limit of 1 KiB.
     * This tag can be used for filtering recommendation results by passing the
     * tag as part of the predict request filter.
     *
     * Generated from protobuf field <code>repeated string tags = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $tags;
    /**
     * Optional. Variant group identifier for prediction results. UTF-8 encoded
     * string with a length limit of 128 bytes.
     * This field must be enabled before it can be used. [Learn
     * more](/recommendations-ai/docs/catalog#item-group-id).
     *
     * Generated from protobuf field <code>string item_group_id = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $item_group_id = '';
    protected $recommendation_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Required. Catalog item identifier. UTF-8 encoded string with a length limit
     *           of 128 bytes.
     *           This id must be unique among all catalog items within the same catalog. It
     *           should also be used when logging user events in order for the user events
     *           to be joined with the Catalog.
     *     @type array<\Google\Cloud\RecommendationEngine\V1beta1\CatalogItem\CategoryHierarchy>|\Google\Protobuf\Internal\RepeatedField $category_hierarchies
     *           Required. Catalog item categories. This field is repeated for supporting
     *           one catalog item belonging to several parallel category hierarchies.
     *           For example, if a shoes product belongs to both
     *           ["Shoes & Accessories" -> "Shoes"] and
     *           ["Sports & Fitness" -> "Athletic Clothing" -> "Shoes"], it could be
     *           represented as:
     *                "categoryHierarchies": [
     *                  { "categories": ["Shoes & Accessories", "Shoes"]},
     *                  { "categories": ["Sports & Fitness", "Athletic Clothing", "Shoes"] }
     *                ]
     *     @type string $title
     *           Required. Catalog item title. UTF-8 encoded string with a length limit of 1
     *           KiB.
     *     @type string $description
     *           Optional. Catalog item description. UTF-8 encoded string with a length
     *           limit of 5 KiB.
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\FeatureMap $item_attributes
     *           Optional. Highly encouraged. Extra catalog item attributes to be
     *           included in the recommendation model. For example, for retail products,
     *           this could include the store name, vendor, style, color, etc. These are
     *           very strong signals for recommendation model, thus we highly recommend
     *           providing the item attributes here.
     *     @type string $language_code
     *           Optional. Language of the title/description/item_attributes. Use language
     *           tags defined by BCP 47. https://www.rfc-editor.org/rfc/bcp/bcp47.txt. Our
     *           supported language codes include 'en', 'es', 'fr', 'de', 'ar', 'fa', 'zh',
     *           'ja', 'ko', 'sv', 'ro', 'nl'. For other languages, contact
     *           your Google account manager.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tags
     *           Optional. Filtering tags associated with the catalog item. Each tag should
     *           be a UTF-8 encoded string with a length limit of 1 KiB.
     *           This tag can be used for filtering recommendation results by passing the
     *           tag as part of the predict request filter.
     *     @type string $item_group_id
     *           Optional. Variant group identifier for prediction results. UTF-8 encoded
     *           string with a length limit of 128 bytes.
     *           This field must be enabled before it can be used. [Learn
     *           more](/recommendations-ai/docs/catalog#item-group-id).
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem $product_metadata
     *           Optional. Metadata specific to retail products.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Catalog item identifier. UTF-8 encoded string with a length limit
     * of 128 bytes.
     * This id must be unique among all catalog items within the same catalog. It
     * should also be used when logging user events in order for the user events
     * to be joined with the Catalog.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Required. Catalog item identifier. UTF-8 encoded string with a length limit
     * of 128 bytes.
     * This id must be unique among all catalog items within the same catalog. It
     * should also be used when logging user events in order for the user events
     * to be joined with the Catalog.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Required. Catalog item categories. This field is repeated for supporting
     * one catalog item belonging to several parallel category hierarchies.
     * For example, if a shoes product belongs to both
     * ["Shoes & Accessories" -> "Shoes"] and
     * ["Sports & Fitness" -> "Athletic Clothing" -> "Shoes"], it could be
     * represented as:
     *      "categoryHierarchies": [
     *        { "categories": ["Shoes & Accessories", "Shoes"]},
     *        { "categories": ["Sports & Fitness", "Athletic Clothing", "Shoes"] }
     *      ]
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.CatalogItem.CategoryHierarchy category_hierarchies = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategoryHierarchies()
    {
        return $this->category_hierarchies;
    }

    /**
     * Required. Catalog item categories. This field is repeated for supporting
     * one catalog item belonging to several parallel category hierarchies.
     * For example, if a shoes product belongs to both
     * ["Shoes & Accessories" -> "Shoes"] and
     * ["Sports & Fitness" -> "Athletic Clothing" -> "Shoes"], it could be
     * represented as:
     *      "categoryHierarchies": [
     *        { "categories": ["Shoes & Accessories", "Shoes"]},
     *        { "categories": ["Sports & Fitness", "Athletic Clothing", "Shoes"] }
     *      ]
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.CatalogItem.CategoryHierarchy category_hierarchies = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\RecommendationEngine\V1beta1\CatalogItem\CategoryHierarchy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategoryHierarchies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecommendationEngine\V1beta1\CatalogItem\CategoryHierarchy::class);
        $this->category_hierarchies = $arr;

        return $this;
    }

    /**
     * Required. Catalog item title. UTF-8 encoded string with a length limit of 1
     * KiB.
     *
     * Generated from protobuf field <code>string title = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Required. Catalog item title. UTF-8 encoded string with a length limit of 1
     * KiB.
     *
     * Generated from protobuf field <code>string title = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Optional. Catalog item description. UTF-8 encoded string with a length
     * limit of 5 KiB.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Catalog item description. UTF-8 encoded string with a length
     * limit of 5 KiB.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. Highly encouraged. Extra catalog item attributes to be
     * included in the recommendation model. For example, for retail products,
     * this could include the store name, vendor, style, color, etc. These are
     * very strong signals for recommendation model, thus we highly recommend
     * providing the item attributes here.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.FeatureMap item_attributes = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\RecommendationEngine\V1beta1\FeatureMap|null
     */
    public function getItemAttributes()
    {
        return $this->item_attributes;
    }

    public function hasItemAttributes()
    {
        return isset($this->item_attributes);
    }

    public function clearItemAttributes()
    {
        unset($this->item_attributes);
    }

    /**
     * Optional. Highly encouraged. Extra catalog item attributes to be
     * included in the recommendation model. For example, for retail products,
     * this could include the store name, vendor, style, color, etc. These are
     * very strong signals for recommendation model, thus we highly recommend
     * providing the item attributes here.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.FeatureMap item_attributes = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\FeatureMap $var
     * @return $this
     */
    public function setItemAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecommendationEngine\V1beta1\FeatureMap::class);
        $this->item_attributes = $var;

        return $this;
    }

    /**
     * Optional. Language of the title/description/item_attributes. Use language
     * tags defined by BCP 47. https://www.rfc-editor.org/rfc/bcp/bcp47.txt. Our
     * supported language codes include 'en', 'es', 'fr', 'de', 'ar', 'fa', 'zh',
     * 'ja', 'ko', 'sv', 'ro', 'nl'. For other languages, contact
     * your Google account manager.
     *
     * Generated from protobuf field <code>string language_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. Language of the title/description/item_attributes. Use language
     * tags defined by BCP 47. https://www.rfc-editor.org/rfc/bcp/bcp47.txt. Our
     * supported language codes include 'en', 'es', 'fr', 'de', 'ar', 'fa', 'zh',
     * 'ja', 'ko', 'sv', 'ro', 'nl'. For other languages, contact
     * your Google account manager.
     *
     * Generated from protobuf field <code>string language_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Optional. Filtering tags associated with the catalog item. Each tag should
     * be a UTF-8 encoded string with a length limit of 1 KiB.
     * This tag can be used for filtering recommendation results by passing the
     * tag as part of the predict request filter.
     *
     * Generated from protobuf field <code>repeated string tags = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Optional. Filtering tags associated with the catalog item. Each tag should
     * be a UTF-8 encoded string with a length limit of 1 KiB.
     * This tag can be used for filtering recommendation results by passing the
     * tag as part of the predict request filter.
     *
     * Generated from protobuf field <code>repeated string tags = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Optional. Variant group identifier for prediction results. UTF-8 encoded
     * string with a length limit of 128 bytes.
     * This field must be enabled before it can be used. [Learn
     * more](/recommendations-ai/docs/catalog#item-group-id).
     *
     * Generated from protobuf field <code>string item_group_id = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getItemGroupId()
    {
        return $this->item_group_id;
    }

    /**
     * Optional. Variant group identifier for prediction results. UTF-8 encoded
     * string with a length limit of 128 bytes.
     * This field must be enabled before it can be used. [Learn
     * more](/recommendations-ai/docs/catalog#item-group-id).
     *
     * Generated from protobuf field <code>string item_group_id = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setItemGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->item_group_id = $var;

        return $this;
    }

    /**
     * Optional. Metadata specific to retail products.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.ProductCatalogItem product_metadata = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem|null
     */
    public function getProductMetadata()
    {
        return $this->readOneof(10);
    }

    public function hasProductMetadata()
    {
        return $this->hasOneof(10);
    }

    /**
     * Optional. Metadata specific to retail products.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.ProductCatalogItem product_metadata = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem $var
     * @return $this
     */
    public function setProductMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRecommendationType()
    {
        return $this->whichOneof("recommendation_type");
    }

}

