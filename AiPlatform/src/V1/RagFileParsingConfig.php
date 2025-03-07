<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_data.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the parsing config for RagFiles.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.RagFileParsingConfig</code>
 */
class RagFileParsingConfig extends \Google\Protobuf\Internal\Message
{
    protected $parser;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\RagFileParsingConfig\LayoutParser $layout_parser
     *           The Layout Parser to use for RagFiles.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagData::initOnce();
        parent::__construct($data);
    }

    /**
     * The Layout Parser to use for RagFiles.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.RagFileParsingConfig.LayoutParser layout_parser = 4;</code>
     * @return \Google\Cloud\AIPlatform\V1\RagFileParsingConfig\LayoutParser|null
     */
    public function getLayoutParser()
    {
        return $this->readOneof(4);
    }

    public function hasLayoutParser()
    {
        return $this->hasOneof(4);
    }

    /**
     * The Layout Parser to use for RagFiles.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.RagFileParsingConfig.LayoutParser layout_parser = 4;</code>
     * @param \Google\Cloud\AIPlatform\V1\RagFileParsingConfig\LayoutParser $var
     * @return $this
     */
    public function setLayoutParser($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\RagFileParsingConfig\LayoutParser::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getParser()
    {
        return $this->whichOneof("parser");
    }

}

