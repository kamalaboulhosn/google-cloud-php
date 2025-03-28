<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The type of Google Cloud Vision API detection to perform, and the maximum
 * number of results to return for that type. Multiple `Feature` objects can
 * be specified in the `features` list.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.Feature</code>
 */
class Feature extends \Google\Protobuf\Internal\Message
{
    /**
     * The feature type.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Feature.Type type = 1;</code>
     */
    protected $type = 0;
    /**
     * Maximum number of results of this type. Does not apply to
     * `TEXT_DETECTION`, `DOCUMENT_TEXT_DETECTION`, or `CROP_HINTS`.
     *
     * Generated from protobuf field <code>int32 max_results = 2;</code>
     */
    protected $max_results = 0;
    /**
     * Model to use for the feature.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest". `DOCUMENT_TEXT_DETECTION` and `TEXT_DETECTION` also
     * support "builtin/weekly" for the bleeding edge release updated weekly.
     *
     * Generated from protobuf field <code>string model = 3;</code>
     */
    protected $model = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The feature type.
     *     @type int $max_results
     *           Maximum number of results of this type. Does not apply to
     *           `TEXT_DETECTION`, `DOCUMENT_TEXT_DETECTION`, or `CROP_HINTS`.
     *     @type string $model
     *           Model to use for the feature.
     *           Supported values: "builtin/stable" (the default if unset) and
     *           "builtin/latest". `DOCUMENT_TEXT_DETECTION` and `TEXT_DETECTION` also
     *           support "builtin/weekly" for the bleeding edge release updated weekly.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * The feature type.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Feature.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The feature type.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Feature.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Feature\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Maximum number of results of this type. Does not apply to
     * `TEXT_DETECTION`, `DOCUMENT_TEXT_DETECTION`, or `CROP_HINTS`.
     *
     * Generated from protobuf field <code>int32 max_results = 2;</code>
     * @return int
     */
    public function getMaxResults()
    {
        return $this->max_results;
    }

    /**
     * Maximum number of results of this type. Does not apply to
     * `TEXT_DETECTION`, `DOCUMENT_TEXT_DETECTION`, or `CROP_HINTS`.
     *
     * Generated from protobuf field <code>int32 max_results = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxResults($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_results = $var;

        return $this;
    }

    /**
     * Model to use for the feature.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest". `DOCUMENT_TEXT_DETECTION` and `TEXT_DETECTION` also
     * support "builtin/weekly" for the bleeding edge release updated weekly.
     *
     * Generated from protobuf field <code>string model = 3;</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Model to use for the feature.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest". `DOCUMENT_TEXT_DETECTION` and `TEXT_DETECTION` also
     * support "builtin/weekly" for the bleeding edge release updated weekly.
     *
     * Generated from protobuf field <code>string model = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

}

