<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents dependency parse tree information for a token. (For more
 * information on dependency labels, see
 * http://www.aclweb.org/anthology/P13-2017
 *
 * Generated from protobuf message <code>google.cloud.language.v1.DependencyEdge</code>
 */
class DependencyEdge extends \Google\Protobuf\Internal\Message
{
    /**
     * Represents the head of this token in the dependency tree.
     * This is the index of the token which has an arc going to this token.
     * The index is the position of the token in the array of tokens returned
     * by the API method. If this token is a root token, then the
     * `head_token_index` is its own index.
     *
     * Generated from protobuf field <code>int32 head_token_index = 1;</code>
     */
    protected $head_token_index = 0;
    /**
     * The parse label for the token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.DependencyEdge.Label label = 2;</code>
     */
    protected $label = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $head_token_index
     *           Represents the head of this token in the dependency tree.
     *           This is the index of the token which has an arc going to this token.
     *           The index is the position of the token in the array of tokens returned
     *           by the API method. If this token is a root token, then the
     *           `head_token_index` is its own index.
     *     @type int $label
     *           The parse label for the token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents the head of this token in the dependency tree.
     * This is the index of the token which has an arc going to this token.
     * The index is the position of the token in the array of tokens returned
     * by the API method. If this token is a root token, then the
     * `head_token_index` is its own index.
     *
     * Generated from protobuf field <code>int32 head_token_index = 1;</code>
     * @return int
     */
    public function getHeadTokenIndex()
    {
        return $this->head_token_index;
    }

    /**
     * Represents the head of this token in the dependency tree.
     * This is the index of the token which has an arc going to this token.
     * The index is the position of the token in the array of tokens returned
     * by the API method. If this token is a root token, then the
     * `head_token_index` is its own index.
     *
     * Generated from protobuf field <code>int32 head_token_index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setHeadTokenIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->head_token_index = $var;

        return $this;
    }

    /**
     * The parse label for the token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.DependencyEdge.Label label = 2;</code>
     * @return int
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * The parse label for the token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.DependencyEdge.Label label = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1\DependencyEdge\Label::class);
        $this->label = $var;

        return $this;
    }

}

