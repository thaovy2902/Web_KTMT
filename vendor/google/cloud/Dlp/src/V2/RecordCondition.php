<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A condition for determining whether a transformation should be applied to
 * a field.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.RecordCondition</code>
 */
class RecordCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * An expression.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RecordCondition.Expressions expressions = 3;</code>
     */
    private $expressions = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\RecordCondition\Expressions $expressions
     *           An expression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * An expression.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RecordCondition.Expressions expressions = 3;</code>
     * @return \Google\Cloud\Dlp\V2\RecordCondition\Expressions|null
     */
    public function getExpressions()
    {
        return isset($this->expressions) ? $this->expressions : null;
    }

    public function hasExpressions()
    {
        return isset($this->expressions);
    }

    public function clearExpressions()
    {
        unset($this->expressions);
    }

    /**
     * An expression.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RecordCondition.Expressions expressions = 3;</code>
     * @param \Google\Cloud\Dlp\V2\RecordCondition\Expressions $var
     * @return $this
     */
    public function setExpressions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\RecordCondition\Expressions::class);
        $this->expressions = $var;

        return $this;
    }

}

