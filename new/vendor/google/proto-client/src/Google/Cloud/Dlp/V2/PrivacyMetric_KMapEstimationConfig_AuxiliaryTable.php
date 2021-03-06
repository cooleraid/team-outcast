<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An auxiliary table contains statistical information on the relative
 * frequency of different quasi-identifiers values. It has one or several
 * quasi-identifiers columns, and one column that indicates the relative
 * frequency of each quasi-identifier tuple.
 * If a tuple is present in the data but not in the auxiliary table, the
 * corresponding relative frequency is assumed to be zero (and thus, the
 * tuple is highly reidentifiable).
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.PrivacyMetric.KMapEstimationConfig.AuxiliaryTable</code>
 */
class PrivacyMetric_KMapEstimationConfig_AuxiliaryTable extends \Google\Protobuf\Internal\Message
{
    /**
     * Auxiliary table location. [required]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table = 3;</code>
     */
    private $table = null;
    /**
     * Quasi-identifier columns. [required]
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.PrivacyMetric.KMapEstimationConfig.AuxiliaryTable.QuasiIdField quasi_ids = 1;</code>
     */
    private $quasi_ids;
    /**
     * The relative frequency column must contain a floating-point number
     * between 0 and 1 (inclusive). Null values are assumed to be zero.
     * [required]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId relative_frequency = 2;</code>
     */
    private $relative_frequency = null;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Auxiliary table location. [required]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table = 3;</code>
     * @return \Google\Cloud\Dlp\V2\BigQueryTable
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Auxiliary table location. [required]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table = 3;</code>
     * @param \Google\Cloud\Dlp\V2\BigQueryTable $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\BigQueryTable::class);
        $this->table = $var;

        return $this;
    }

    /**
     * Quasi-identifier columns. [required]
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.PrivacyMetric.KMapEstimationConfig.AuxiliaryTable.QuasiIdField quasi_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuasiIds()
    {
        return $this->quasi_ids;
    }

    /**
     * Quasi-identifier columns. [required]
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.PrivacyMetric.KMapEstimationConfig.AuxiliaryTable.QuasiIdField quasi_ids = 1;</code>
     * @param \Google\Cloud\Dlp\V2\PrivacyMetric_KMapEstimationConfig_AuxiliaryTable_QuasiIdField[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuasiIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\PrivacyMetric_KMapEstimationConfig_AuxiliaryTable_QuasiIdField::class);
        $this->quasi_ids = $arr;

        return $this;
    }

    /**
     * The relative frequency column must contain a floating-point number
     * between 0 and 1 (inclusive). Null values are assumed to be zero.
     * [required]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId relative_frequency = 2;</code>
     * @return \Google\Cloud\Dlp\V2\FieldId
     */
    public function getRelativeFrequency()
    {
        return $this->relative_frequency;
    }

    /**
     * The relative frequency column must contain a floating-point number
     * between 0 and 1 (inclusive). Null values are assumed to be zero.
     * [required]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId relative_frequency = 2;</code>
     * @param \Google\Cloud\Dlp\V2\FieldId $var
     * @return $this
     */
    public function setRelativeFrequency($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->relative_frequency = $var;

        return $this;
    }

}

