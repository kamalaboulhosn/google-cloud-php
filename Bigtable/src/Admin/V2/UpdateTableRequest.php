<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [UpdateTable][google.bigtable.admin.v2.BigtableTableAdmin.UpdateTable].
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.UpdateTableRequest</code>
 */
class UpdateTableRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The table to update.
     * The table's `name` field is used to identify the table to update.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table table = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $table = null;
    /**
     * Required. The list of fields to update.
     * A mask specifying which fields (e.g. `change_stream_config`) in the `table`
     * field should be updated. This mask is relative to the `table` field, not to
     * the request message. The wildcard (*) path is currently not supported.
     * Currently UpdateTable is only supported for the following fields:
     * * `change_stream_config`
     * * `change_stream_config.retention_period`
     * * `deletion_protection`
     * * `row_key_schema`
     * If `column_families` is set in `update_mask`, it will return an
     * UNIMPLEMENTED error.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
    /**
     * Optional. If true, ignore safety checks when updating the table.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ignore_warnings = false;

    /**
     * @param \Google\Cloud\Bigtable\Admin\V2\Table $table      Required. The table to update.
     *                                                          The table's `name` field is used to identify the table to update.
     * @param \Google\Protobuf\FieldMask            $updateMask Required. The list of fields to update.
     *                                                          A mask specifying which fields (e.g. `change_stream_config`) in the `table`
     *                                                          field should be updated. This mask is relative to the `table` field, not to
     *                                                          the request message. The wildcard (*) path is currently not supported.
     *                                                          Currently UpdateTable is only supported for the following fields:
     *
     *                                                          * `change_stream_config`
     *                                                          * `change_stream_config.retention_period`
     *                                                          * `deletion_protection`
     *                                                          * `row_key_schema`
     *
     *                                                          If `column_families` is set in `update_mask`, it will return an
     *                                                          UNIMPLEMENTED error.
     *
     * @return \Google\Cloud\Bigtable\Admin\V2\UpdateTableRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Bigtable\Admin\V2\Table $table, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setTable($table)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\Admin\V2\Table $table
     *           Required. The table to update.
     *           The table's `name` field is used to identify the table to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to update.
     *           A mask specifying which fields (e.g. `change_stream_config`) in the `table`
     *           field should be updated. This mask is relative to the `table` field, not to
     *           the request message. The wildcard (*) path is currently not supported.
     *           Currently UpdateTable is only supported for the following fields:
     *           * `change_stream_config`
     *           * `change_stream_config.retention_period`
     *           * `deletion_protection`
     *           * `row_key_schema`
     *           If `column_families` is set in `update_mask`, it will return an
     *           UNIMPLEMENTED error.
     *     @type bool $ignore_warnings
     *           Optional. If true, ignore safety checks when updating the table.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The table to update.
     * The table's `name` field is used to identify the table to update.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table table = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Table|null
     */
    public function getTable()
    {
        return $this->table;
    }

    public function hasTable()
    {
        return isset($this->table);
    }

    public function clearTable()
    {
        unset($this->table);
    }

    /**
     * Required. The table to update.
     * The table's `name` field is used to identify the table to update.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table table = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Table $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Table::class);
        $this->table = $var;

        return $this;
    }

    /**
     * Required. The list of fields to update.
     * A mask specifying which fields (e.g. `change_stream_config`) in the `table`
     * field should be updated. This mask is relative to the `table` field, not to
     * the request message. The wildcard (*) path is currently not supported.
     * Currently UpdateTable is only supported for the following fields:
     * * `change_stream_config`
     * * `change_stream_config.retention_period`
     * * `deletion_protection`
     * * `row_key_schema`
     * If `column_families` is set in `update_mask`, it will return an
     * UNIMPLEMENTED error.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to update.
     * A mask specifying which fields (e.g. `change_stream_config`) in the `table`
     * field should be updated. This mask is relative to the `table` field, not to
     * the request message. The wildcard (*) path is currently not supported.
     * Currently UpdateTable is only supported for the following fields:
     * * `change_stream_config`
     * * `change_stream_config.retention_period`
     * * `deletion_protection`
     * * `row_key_schema`
     * If `column_families` is set in `update_mask`, it will return an
     * UNIMPLEMENTED error.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Optional. If true, ignore safety checks when updating the table.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getIgnoreWarnings()
    {
        return $this->ignore_warnings;
    }

    /**
     * Optional. If true, ignore safety checks when updating the table.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreWarnings($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_warnings = $var;

        return $this;
    }

}

