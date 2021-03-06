<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud repository for storing output.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.OutputStorageConfig</code>
 */
class OutputStorageConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Schema used for writing the findings. Columns are derived from the
     * `Finding` object. If appending to an existing table, any columns from the
     * predefined schema that are missing will be added. No columns in the
     * existing table will be deleted.
     * If unspecified, then all available columns will be used for a new table,
     * and no changes will be made to an existing table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.OutputStorageConfig.OutputSchema output_schema = 3;</code>
     */
    private $output_schema = 0;
    protected $type;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Store findings in an existing table or a new table in an existing
     * dataset. Each column in an existing table must have the same name, type,
     * and mode of a field in the `Finding` object. If table_id is not set a new
     * one will be generated for you with the following format:
     * dlp_googleapis_yyyy_mm_dd_[dlp_job_id]. Pacific timezone will be used for
     * generating the date details.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table = 1;</code>
     * @return \Google\Cloud\Dlp\V2\BigQueryTable
     */
    public function getTable()
    {
        return $this->readOneof(1);
    }

    /**
     * Store findings in an existing table or a new table in an existing
     * dataset. Each column in an existing table must have the same name, type,
     * and mode of a field in the `Finding` object. If table_id is not set a new
     * one will be generated for you with the following format:
     * dlp_googleapis_yyyy_mm_dd_[dlp_job_id]. Pacific timezone will be used for
     * generating the date details.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table = 1;</code>
     * @param \Google\Cloud\Dlp\V2\BigQueryTable $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\BigQueryTable::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Schema used for writing the findings. Columns are derived from the
     * `Finding` object. If appending to an existing table, any columns from the
     * predefined schema that are missing will be added. No columns in the
     * existing table will be deleted.
     * If unspecified, then all available columns will be used for a new table,
     * and no changes will be made to an existing table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.OutputStorageConfig.OutputSchema output_schema = 3;</code>
     * @return int
     */
    public function getOutputSchema()
    {
        return $this->output_schema;
    }

    /**
     * Schema used for writing the findings. Columns are derived from the
     * `Finding` object. If appending to an existing table, any columns from the
     * predefined schema that are missing will be added. No columns in the
     * existing table will be deleted.
     * If unspecified, then all available columns will be used for a new table,
     * and no changes will be made to an existing table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.OutputStorageConfig.OutputSchema output_schema = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOutputSchema($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\OutputStorageConfig_OutputSchema::class);
        $this->output_schema = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

