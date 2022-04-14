<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [FeaturestoreService.ImportFeatureValues][google.cloud.aiplatform.v1.FeaturestoreService.ImportFeatureValues].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ImportFeatureValuesRequest</code>
 */
class ImportFeatureValuesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the EntityType grouping the Features for which values
     * are being imported. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $entity_type = '';
    /**
     * Source column that holds entity IDs. If not provided, entity IDs are
     * extracted from the column named `entity_id`.
     *
     * Generated from protobuf field <code>string entity_id_field = 5;</code>
     */
    protected $entity_id_field = '';
    /**
     * Required. Specifications defining which Feature values to import from the entity. The
     * request fails if no feature_specs are provided, and having multiple
     * feature_specs for one Feature is not allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ImportFeatureValuesRequest.FeatureSpec feature_specs = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $feature_specs;
    /**
     * If set, data will not be imported for online serving. This
     * is typically used for backfilling, where Feature generation timestamps are
     * not in the timestamp range needed for online serving.
     *
     * Generated from protobuf field <code>bool disable_online_serving = 9;</code>
     */
    protected $disable_online_serving = false;
    /**
     * Specifies the number of workers that are used to write data to the
     * Featurestore. Consider the online serving capacity that you require to
     * achieve the desired import throughput without interfering with online
     * serving. The value must be positive, and less than or equal to 100.
     * If not set, defaults to using 1 worker. The low count ensures minimal
     * impact on online serving performance.
     *
     * Generated from protobuf field <code>int32 worker_count = 11;</code>
     */
    protected $worker_count = 0;
    /**
     * If true, API doesn't start ingestion analysis pipeline.
     *
     * Generated from protobuf field <code>bool disable_ingestion_analysis = 12;</code>
     */
    protected $disable_ingestion_analysis = false;
    protected $source;
    protected $feature_time_source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\AvroSource $avro_source
     *     @type \Google\Cloud\AIPlatform\V1\BigQuerySource $bigquery_source
     *     @type \Google\Cloud\AIPlatform\V1\CsvSource $csv_source
     *     @type string $feature_time_field
     *           Source column that holds the Feature timestamp for all Feature
     *           values in each entity.
     *     @type \Google\Protobuf\Timestamp $feature_time
     *           Single Feature timestamp for all entities being imported. The
     *           timestamp must not have higher than millisecond precision.
     *     @type string $entity_type
     *           Required. The resource name of the EntityType grouping the Features for which values
     *           are being imported. Format:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`
     *     @type string $entity_id_field
     *           Source column that holds entity IDs. If not provided, entity IDs are
     *           extracted from the column named `entity_id`.
     *     @type \Google\Cloud\AIPlatform\V1\ImportFeatureValuesRequest\FeatureSpec[]|\Google\Protobuf\Internal\RepeatedField $feature_specs
     *           Required. Specifications defining which Feature values to import from the entity. The
     *           request fails if no feature_specs are provided, and having multiple
     *           feature_specs for one Feature is not allowed.
     *     @type bool $disable_online_serving
     *           If set, data will not be imported for online serving. This
     *           is typically used for backfilling, where Feature generation timestamps are
     *           not in the timestamp range needed for online serving.
     *     @type int $worker_count
     *           Specifies the number of workers that are used to write data to the
     *           Featurestore. Consider the online serving capacity that you require to
     *           achieve the desired import throughput without interfering with online
     *           serving. The value must be positive, and less than or equal to 100.
     *           If not set, defaults to using 1 worker. The low count ensures minimal
     *           impact on online serving performance.
     *     @type bool $disable_ingestion_analysis
     *           If true, API doesn't start ingestion analysis pipeline.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AvroSource avro_source = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\AvroSource|null
     */
    public function getAvroSource()
    {
        return $this->readOneof(2);
    }

    public function hasAvroSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AvroSource avro_source = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\AvroSource $var
     * @return $this
     */
    public function setAvroSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\AvroSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BigQuerySource bigquery_source = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\BigQuerySource|null
     */
    public function getBigquerySource()
    {
        return $this->readOneof(3);
    }

    public function hasBigquerySource()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BigQuerySource bigquery_source = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\BigQuerySource $var
     * @return $this
     */
    public function setBigquerySource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\BigQuerySource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CsvSource csv_source = 4;</code>
     * @return \Google\Cloud\AIPlatform\V1\CsvSource|null
     */
    public function getCsvSource()
    {
        return $this->readOneof(4);
    }

    public function hasCsvSource()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CsvSource csv_source = 4;</code>
     * @param \Google\Cloud\AIPlatform\V1\CsvSource $var
     * @return $this
     */
    public function setCsvSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\CsvSource::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Source column that holds the Feature timestamp for all Feature
     * values in each entity.
     *
     * Generated from protobuf field <code>string feature_time_field = 6;</code>
     * @return string
     */
    public function getFeatureTimeField()
    {
        return $this->readOneof(6);
    }

    public function hasFeatureTimeField()
    {
        return $this->hasOneof(6);
    }

    /**
     * Source column that holds the Feature timestamp for all Feature
     * values in each entity.
     *
     * Generated from protobuf field <code>string feature_time_field = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setFeatureTimeField($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Single Feature timestamp for all entities being imported. The
     * timestamp must not have higher than millisecond precision.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp feature_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFeatureTime()
    {
        return $this->readOneof(7);
    }

    public function hasFeatureTime()
    {
        return $this->hasOneof(7);
    }

    /**
     * Single Feature timestamp for all entities being imported. The
     * timestamp must not have higher than millisecond precision.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp feature_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFeatureTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Required. The resource name of the EntityType grouping the Features for which values
     * are being imported. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * Required. The resource name of the EntityType grouping the Features for which values
     * are being imported. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * Source column that holds entity IDs. If not provided, entity IDs are
     * extracted from the column named `entity_id`.
     *
     * Generated from protobuf field <code>string entity_id_field = 5;</code>
     * @return string
     */
    public function getEntityIdField()
    {
        return $this->entity_id_field;
    }

    /**
     * Source column that holds entity IDs. If not provided, entity IDs are
     * extracted from the column named `entity_id`.
     *
     * Generated from protobuf field <code>string entity_id_field = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityIdField($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_id_field = $var;

        return $this;
    }

    /**
     * Required. Specifications defining which Feature values to import from the entity. The
     * request fails if no feature_specs are provided, and having multiple
     * feature_specs for one Feature is not allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ImportFeatureValuesRequest.FeatureSpec feature_specs = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatureSpecs()
    {
        return $this->feature_specs;
    }

    /**
     * Required. Specifications defining which Feature values to import from the entity. The
     * request fails if no feature_specs are provided, and having multiple
     * feature_specs for one Feature is not allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ImportFeatureValuesRequest.FeatureSpec feature_specs = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\ImportFeatureValuesRequest\FeatureSpec[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatureSpecs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ImportFeatureValuesRequest\FeatureSpec::class);
        $this->feature_specs = $arr;

        return $this;
    }

    /**
     * If set, data will not be imported for online serving. This
     * is typically used for backfilling, where Feature generation timestamps are
     * not in the timestamp range needed for online serving.
     *
     * Generated from protobuf field <code>bool disable_online_serving = 9;</code>
     * @return bool
     */
    public function getDisableOnlineServing()
    {
        return $this->disable_online_serving;
    }

    /**
     * If set, data will not be imported for online serving. This
     * is typically used for backfilling, where Feature generation timestamps are
     * not in the timestamp range needed for online serving.
     *
     * Generated from protobuf field <code>bool disable_online_serving = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableOnlineServing($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_online_serving = $var;

        return $this;
    }

    /**
     * Specifies the number of workers that are used to write data to the
     * Featurestore. Consider the online serving capacity that you require to
     * achieve the desired import throughput without interfering with online
     * serving. The value must be positive, and less than or equal to 100.
     * If not set, defaults to using 1 worker. The low count ensures minimal
     * impact on online serving performance.
     *
     * Generated from protobuf field <code>int32 worker_count = 11;</code>
     * @return int
     */
    public function getWorkerCount()
    {
        return $this->worker_count;
    }

    /**
     * Specifies the number of workers that are used to write data to the
     * Featurestore. Consider the online serving capacity that you require to
     * achieve the desired import throughput without interfering with online
     * serving. The value must be positive, and less than or equal to 100.
     * If not set, defaults to using 1 worker. The low count ensures minimal
     * impact on online serving performance.
     *
     * Generated from protobuf field <code>int32 worker_count = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setWorkerCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->worker_count = $var;

        return $this;
    }

    /**
     * If true, API doesn't start ingestion analysis pipeline.
     *
     * Generated from protobuf field <code>bool disable_ingestion_analysis = 12;</code>
     * @return bool
     */
    public function getDisableIngestionAnalysis()
    {
        return $this->disable_ingestion_analysis;
    }

    /**
     * If true, API doesn't start ingestion analysis pipeline.
     *
     * Generated from protobuf field <code>bool disable_ingestion_analysis = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableIngestionAnalysis($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_ingestion_analysis = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

    /**
     * @return string
     */
    public function getFeatureTimeSource()
    {
        return $this->whichOneof("feature_time_source");
    }

}

