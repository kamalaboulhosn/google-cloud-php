<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The entity-level sentiment analysis request message.
 *
 * Generated from protobuf message <code>google.cloud.language.v1.AnalyzeEntitySentimentRequest</code>
 */
class AnalyzeEntitySentimentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $document = null;
    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 2;</code>
     */
    protected $encoding_type = 0;

    /**
     * @param \Google\Cloud\Language\V1\Document $document     Required. Input document.
     * @param int                                $encodingType The encoding type used by the API to calculate offsets.
     *                                                         For allowed values, use constants defined on {@see \Google\Cloud\Language\V1\EncodingType}
     *
     * @return \Google\Cloud\Language\V1\AnalyzeEntitySentimentRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Language\V1\Document $document, int $encodingType): self
    {
        return (new self())
            ->setDocument($document)
            ->setEncodingType($encodingType);
    }

    /**
     * @param \Google\Cloud\Language\V1\Document $document Required. Input document.
     *
     * @return \Google\Cloud\Language\V1\AnalyzeEntitySentimentRequest
     *
     * @experimental
     */
    public static function buildFromDocument(\Google\Cloud\Language\V1\Document $document): self
    {
        return (new self())
            ->setDocument($document);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Language\V1\Document $document
     *           Required. Input document.
     *     @type int $encoding_type
     *           The encoding type used by the API to calculate offsets.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Language\V1\Document|null
     */
    public function getDocument()
    {
        return $this->document;
    }

    public function hasDocument()
    {
        return isset($this->document);
    }

    public function clearDocument()
    {
        unset($this->document);
    }

    /**
     * Required. Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Language\V1\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 2;</code>
     * @return int
     */
    public function getEncodingType()
    {
        return $this->encoding_type;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEncodingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1\EncodingType::class);
        $this->encoding_type = $var;

        return $this;
    }

}

