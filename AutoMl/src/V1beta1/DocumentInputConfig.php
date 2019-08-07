<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/io.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input configuration of a [Document][google.cloud.automl.v1beta1.Document].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.DocumentInputConfig</code>
 */
class DocumentInputConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google Cloud Storage location of the document file. Only a single path
     * should be given.
     * Max supported size: 512MB.
     * Supported extensions: .PDF.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.GcsSource gcs_source = 1;</code>
     */
    private $gcs_source = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1beta1\GcsSource $gcs_source
     *           The Google Cloud Storage location of the document file. Only a single path
     *           should be given.
     *           Max supported size: 512MB.
     *           Supported extensions: .PDF.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Io::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Cloud Storage location of the document file. Only a single path
     * should be given.
     * Max supported size: 512MB.
     * Supported extensions: .PDF.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.GcsSource gcs_source = 1;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\GcsSource
     */
    public function getGcsSource()
    {
        return $this->gcs_source;
    }

    /**
     * The Google Cloud Storage location of the document file. Only a single path
     * should be given.
     * Max supported size: 512MB.
     * Supported extensions: .PDF.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.GcsSource gcs_source = 1;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\GcsSource::class);
        $this->gcs_source = $var;

        return $this;
    }

}
