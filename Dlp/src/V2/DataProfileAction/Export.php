<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DataProfileAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * If set, the detailed data profiles will be persisted to the location
 * of your choice whenever updated.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DataProfileAction.Export</code>
 */
class Export extends \Google\Protobuf\Internal\Message
{
    /**
     * Store all profiles to BigQuery.
     * * The system will create a new dataset and table for you if none are
     *   are provided. The dataset will be named
     *   `sensitive_data_protection_discovery` and table will be named
     *   `discovery_profiles`. This table will be placed in the same project as
     *   the container project running the scan. After the first profile is
     *   generated and the dataset and table are created, the discovery scan
     *   configuration will be updated with the dataset and table names.
     * * See [Analyze data profiles stored in
     * BigQuery](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles).
     * * See [Sample queries for your BigQuery
     * table](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles#sample_sql_queries).
     * *  Data is inserted using [streaming
     *    insert](https://cloud.google.com/blog/products/bigquery/life-of-a-bigquery-streaming-insert)
     *    and so data may be in the buffer for a period of time after the
     *    profile has finished.
     *  * The Pub/Sub notification is sent before the streaming buffer is
     *    guaranteed to be written, so data may not be instantly
     *    visible to queries by the time your topic receives the Pub/Sub
     *    notification.
     *  * The best practice is to use the same table for an entire organization
     *    so that you can take advantage of the [provided Looker
     *    reports](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles#use_a_premade_report).
     *    If you use VPC Service Controls to define security perimeters, then
     *    you must use a separate table for each boundary.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable profile_table = 1;</code>
     */
    protected $profile_table = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\BigQueryTable $profile_table
     *           Store all profiles to BigQuery.
     *           * The system will create a new dataset and table for you if none are
     *             are provided. The dataset will be named
     *             `sensitive_data_protection_discovery` and table will be named
     *             `discovery_profiles`. This table will be placed in the same project as
     *             the container project running the scan. After the first profile is
     *             generated and the dataset and table are created, the discovery scan
     *             configuration will be updated with the dataset and table names.
     *           * See [Analyze data profiles stored in
     *           BigQuery](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles).
     *           * See [Sample queries for your BigQuery
     *           table](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles#sample_sql_queries).
     *           *  Data is inserted using [streaming
     *              insert](https://cloud.google.com/blog/products/bigquery/life-of-a-bigquery-streaming-insert)
     *              and so data may be in the buffer for a period of time after the
     *              profile has finished.
     *            * The Pub/Sub notification is sent before the streaming buffer is
     *              guaranteed to be written, so data may not be instantly
     *              visible to queries by the time your topic receives the Pub/Sub
     *              notification.
     *            * The best practice is to use the same table for an entire organization
     *              so that you can take advantage of the [provided Looker
     *              reports](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles#use_a_premade_report).
     *              If you use VPC Service Controls to define security perimeters, then
     *              you must use a separate table for each boundary.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Store all profiles to BigQuery.
     * * The system will create a new dataset and table for you if none are
     *   are provided. The dataset will be named
     *   `sensitive_data_protection_discovery` and table will be named
     *   `discovery_profiles`. This table will be placed in the same project as
     *   the container project running the scan. After the first profile is
     *   generated and the dataset and table are created, the discovery scan
     *   configuration will be updated with the dataset and table names.
     * * See [Analyze data profiles stored in
     * BigQuery](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles).
     * * See [Sample queries for your BigQuery
     * table](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles#sample_sql_queries).
     * *  Data is inserted using [streaming
     *    insert](https://cloud.google.com/blog/products/bigquery/life-of-a-bigquery-streaming-insert)
     *    and so data may be in the buffer for a period of time after the
     *    profile has finished.
     *  * The Pub/Sub notification is sent before the streaming buffer is
     *    guaranteed to be written, so data may not be instantly
     *    visible to queries by the time your topic receives the Pub/Sub
     *    notification.
     *  * The best practice is to use the same table for an entire organization
     *    so that you can take advantage of the [provided Looker
     *    reports](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles#use_a_premade_report).
     *    If you use VPC Service Controls to define security perimeters, then
     *    you must use a separate table for each boundary.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable profile_table = 1;</code>
     * @return \Google\Cloud\Dlp\V2\BigQueryTable|null
     */
    public function getProfileTable()
    {
        return $this->profile_table;
    }

    public function hasProfileTable()
    {
        return isset($this->profile_table);
    }

    public function clearProfileTable()
    {
        unset($this->profile_table);
    }

    /**
     * Store all profiles to BigQuery.
     * * The system will create a new dataset and table for you if none are
     *   are provided. The dataset will be named
     *   `sensitive_data_protection_discovery` and table will be named
     *   `discovery_profiles`. This table will be placed in the same project as
     *   the container project running the scan. After the first profile is
     *   generated and the dataset and table are created, the discovery scan
     *   configuration will be updated with the dataset and table names.
     * * See [Analyze data profiles stored in
     * BigQuery](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles).
     * * See [Sample queries for your BigQuery
     * table](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles#sample_sql_queries).
     * *  Data is inserted using [streaming
     *    insert](https://cloud.google.com/blog/products/bigquery/life-of-a-bigquery-streaming-insert)
     *    and so data may be in the buffer for a period of time after the
     *    profile has finished.
     *  * The Pub/Sub notification is sent before the streaming buffer is
     *    guaranteed to be written, so data may not be instantly
     *    visible to queries by the time your topic receives the Pub/Sub
     *    notification.
     *  * The best practice is to use the same table for an entire organization
     *    so that you can take advantage of the [provided Looker
     *    reports](https://cloud.google.com/sensitive-data-protection/docs/analyze-data-profiles#use_a_premade_report).
     *    If you use VPC Service Controls to define security perimeters, then
     *    you must use a separate table for each boundary.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable profile_table = 1;</code>
     * @param \Google\Cloud\Dlp\V2\BigQueryTable $var
     * @return $this
     */
    public function setProfileTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\BigQueryTable::class);
        $this->profile_table = $var;

        return $this;
    }

}


