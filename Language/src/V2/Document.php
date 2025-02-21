<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v2/language_service.proto

namespace Google\Cloud\Language\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the input to API methods.
 *
 * Generated from protobuf message <code>google.cloud.language.v2.Document</code>
 */
class Document extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. If the type is not set or is `TYPE_UNSPECIFIED`,
     * returns an `INVALID_ARGUMENT` error.
     *
     * Generated from protobuf field <code>.google.cloud.language.v2.Document.Type type = 1;</code>
     */
    protected $type = 0;
    /**
     * Optional. The language of the document (if not specified, the language is
     * automatically detected). Both ISO and BCP-47 language codes are
     * accepted.<br>
     * [Language
     * Support](https://cloud.google.com/natural-language/docs/languages) lists
     * currently supported languages for each API method. If the language (either
     * specified by the caller or automatically detected) is not supported by the
     * called API method, an `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $language_code = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Required. If the type is not set or is `TYPE_UNSPECIFIED`,
     *           returns an `INVALID_ARGUMENT` error.
     *     @type string $content
     *           The content of the input in string format.
     *           Cloud audit logging exempt since it is based on user data.
     *     @type string $gcs_content_uri
     *           The Google Cloud Storage URI where the file content is located.
     *           This URI must be of the form: gs://bucket_name/object_name. For more
     *           details, see https://cloud.google.com/storage/docs/reference-uris.
     *           NOTE: Cloud Storage object versioning is not supported.
     *     @type string $language_code
     *           Optional. The language of the document (if not specified, the language is
     *           automatically detected). Both ISO and BCP-47 language codes are
     *           accepted.<br>
     *           [Language
     *           Support](https://cloud.google.com/natural-language/docs/languages) lists
     *           currently supported languages for each API method. If the language (either
     *           specified by the caller or automatically detected) is not supported by the
     *           called API method, an `INVALID_ARGUMENT` error is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. If the type is not set or is `TYPE_UNSPECIFIED`,
     * returns an `INVALID_ARGUMENT` error.
     *
     * Generated from protobuf field <code>.google.cloud.language.v2.Document.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. If the type is not set or is `TYPE_UNSPECIFIED`,
     * returns an `INVALID_ARGUMENT` error.
     *
     * Generated from protobuf field <code>.google.cloud.language.v2.Document.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V2\Document\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The content of the input in string format.
     * Cloud audit logging exempt since it is based on user data.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->readOneof(2);
    }

    public function hasContent()
    {
        return $this->hasOneof(2);
    }

    /**
     * The content of the input in string format.
     * Cloud audit logging exempt since it is based on user data.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The Google Cloud Storage URI where the file content is located.
     * This URI must be of the form: gs://bucket_name/object_name. For more
     * details, see https://cloud.google.com/storage/docs/reference-uris.
     * NOTE: Cloud Storage object versioning is not supported.
     *
     * Generated from protobuf field <code>string gcs_content_uri = 3;</code>
     * @return string
     */
    public function getGcsContentUri()
    {
        return $this->readOneof(3);
    }

    public function hasGcsContentUri()
    {
        return $this->hasOneof(3);
    }

    /**
     * The Google Cloud Storage URI where the file content is located.
     * This URI must be of the form: gs://bucket_name/object_name. For more
     * details, see https://cloud.google.com/storage/docs/reference-uris.
     * NOTE: Cloud Storage object versioning is not supported.
     *
     * Generated from protobuf field <code>string gcs_content_uri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsContentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. The language of the document (if not specified, the language is
     * automatically detected). Both ISO and BCP-47 language codes are
     * accepted.<br>
     * [Language
     * Support](https://cloud.google.com/natural-language/docs/languages) lists
     * currently supported languages for each API method. If the language (either
     * specified by the caller or automatically detected) is not supported by the
     * called API method, an `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The language of the document (if not specified, the language is
     * automatically detected). Both ISO and BCP-47 language codes are
     * accepted.<br>
     * [Language
     * Support](https://cloud.google.com/natural-language/docs/languages) lists
     * currently supported languages for each API method. If the language (either
     * specified by the caller or automatically detected) is not supported by the
     * called API method, an `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

