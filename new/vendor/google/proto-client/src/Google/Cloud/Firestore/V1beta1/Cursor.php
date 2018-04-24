<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/query.proto

namespace Google\Cloud\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A position in a query result set.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.Cursor</code>
 */
class Cursor extends \Google\Protobuf\Internal\Message
{
    /**
     * The values that represent a position, in the order they appear in
     * the order by clause of a query.
     * Can contain fewer values than specified in the order by clause.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.Value values = 1;</code>
     */
    private $values;
    /**
     * If the position is just before or just after the given values, relative
     * to the sort order defined by the query.
     *
     * Generated from protobuf field <code>bool before = 2;</code>
     */
    private $before = false;

    public function __construct() {
        \GPBMetadata\Google\Firestore\V1Beta1\Query::initOnce();
        parent::__construct();
    }

    /**
     * The values that represent a position, in the order they appear in
     * the order by clause of a query.
     * Can contain fewer values than specified in the order by clause.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.Value values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * The values that represent a position, in the order they appear in
     * the order by clause of a query.
     * Can contain fewer values than specified in the order by clause.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.Value values = 1;</code>
     * @param \Google\Cloud\Firestore\V1beta1\Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\V1beta1\Value::class);
        $this->values = $arr;

        return $this;
    }

    /**
     * If the position is just before or just after the given values, relative
     * to the sort order defined by the query.
     *
     * Generated from protobuf field <code>bool before = 2;</code>
     * @return bool
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * If the position is just before or just after the given values, relative
     * to the sort order defined by the query.
     *
     * Generated from protobuf field <code>bool before = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkBool($var);
        $this->before = $var;

        return $this;
    }

}
