<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/evaluation.proto

namespace Google\Cloud\DataLabeling\V1beta1\ConfusionMatrix;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A row in the confusion matrix. Each entry in this row has the same
 * ground truth label.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.ConfusionMatrix.Row</code>
 */
class Row extends \Google\Protobuf\Internal\Message
{
    /**
     * The annotation spec of the ground truth label for this row.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     */
    protected $annotation_spec = null;
    /**
     * A list of the confusion matrix entries. One entry for each possible
     * predicted label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.ConfusionMatrix.ConfusionMatrixEntry entries = 2;</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec $annotation_spec
     *           The annotation spec of the ground truth label for this row.
     *     @type array<\Google\Cloud\DataLabeling\V1beta1\ConfusionMatrix\ConfusionMatrixEntry>|\Google\Protobuf\Internal\RepeatedField $entries
     *           A list of the confusion matrix entries. One entry for each possible
     *           predicted label.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Evaluation::initOnce();
        parent::__construct($data);
    }

    /**
     * The annotation spec of the ground truth label for this row.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec|null
     */
    public function getAnnotationSpec()
    {
        return $this->annotation_spec;
    }

    public function hasAnnotationSpec()
    {
        return isset($this->annotation_spec);
    }

    public function clearAnnotationSpec()
    {
        unset($this->annotation_spec);
    }

    /**
     * The annotation spec of the ground truth label for this row.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec $var
     * @return $this
     */
    public function setAnnotationSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec::class);
        $this->annotation_spec = $var;

        return $this;
    }

    /**
     * A list of the confusion matrix entries. One entry for each possible
     * predicted label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.ConfusionMatrix.ConfusionMatrixEntry entries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * A list of the confusion matrix entries. One entry for each possible
     * predicted label.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.ConfusionMatrix.ConfusionMatrixEntry entries = 2;</code>
     * @param array<\Google\Cloud\DataLabeling\V1beta1\ConfusionMatrix\ConfusionMatrixEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataLabeling\V1beta1\ConfusionMatrix\ConfusionMatrixEntry::class);
        $this->entries = $arr;

        return $this;
    }

}


