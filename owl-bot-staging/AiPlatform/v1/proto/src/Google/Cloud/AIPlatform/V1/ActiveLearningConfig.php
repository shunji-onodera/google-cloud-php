<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/data_labeling_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters that configure the active learning pipeline. Active learning will
 *  label the data incrementally by several iterations. For every iteration, it
 *  will select a batch of data based on the sampling strategy.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ActiveLearningConfig</code>
 */
class ActiveLearningConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Active learning data sampling config. For every active learning labeling
     * iteration, it will select a batch of data based on the sampling strategy.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SampleConfig sample_config = 3;</code>
     */
    protected $sample_config = null;
    /**
     * CMLE training config. For every active learning labeling iteration, system
     * will train a machine learning model on CMLE. The trained model will be used
     * by data sampling algorithm to select DataItems.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TrainingConfig training_config = 4;</code>
     */
    protected $training_config = null;
    protected $human_labeling_budget;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $max_data_item_count
     *           Max number of human labeled DataItems.
     *     @type int $max_data_item_percentage
     *           Max percent of total DataItems for human labeling.
     *     @type \Google\Cloud\AIPlatform\V1\SampleConfig $sample_config
     *           Active learning data sampling config. For every active learning labeling
     *           iteration, it will select a batch of data based on the sampling strategy.
     *     @type \Google\Cloud\AIPlatform\V1\TrainingConfig $training_config
     *           CMLE training config. For every active learning labeling iteration, system
     *           will train a machine learning model on CMLE. The trained model will be used
     *           by data sampling algorithm to select DataItems.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DataLabelingJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Max number of human labeled DataItems.
     *
     * Generated from protobuf field <code>int64 max_data_item_count = 1;</code>
     * @return int|string
     */
    public function getMaxDataItemCount()
    {
        return $this->readOneof(1);
    }

    public function hasMaxDataItemCount()
    {
        return $this->hasOneof(1);
    }

    /**
     * Max number of human labeled DataItems.
     *
     * Generated from protobuf field <code>int64 max_data_item_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxDataItemCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Max percent of total DataItems for human labeling.
     *
     * Generated from protobuf field <code>int32 max_data_item_percentage = 2;</code>
     * @return int
     */
    public function getMaxDataItemPercentage()
    {
        return $this->readOneof(2);
    }

    public function hasMaxDataItemPercentage()
    {
        return $this->hasOneof(2);
    }

    /**
     * Max percent of total DataItems for human labeling.
     *
     * Generated from protobuf field <code>int32 max_data_item_percentage = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxDataItemPercentage($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Active learning data sampling config. For every active learning labeling
     * iteration, it will select a batch of data based on the sampling strategy.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SampleConfig sample_config = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\SampleConfig|null
     */
    public function getSampleConfig()
    {
        return $this->sample_config;
    }

    public function hasSampleConfig()
    {
        return isset($this->sample_config);
    }

    public function clearSampleConfig()
    {
        unset($this->sample_config);
    }

    /**
     * Active learning data sampling config. For every active learning labeling
     * iteration, it will select a batch of data based on the sampling strategy.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SampleConfig sample_config = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\SampleConfig $var
     * @return $this
     */
    public function setSampleConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\SampleConfig::class);
        $this->sample_config = $var;

        return $this;
    }

    /**
     * CMLE training config. For every active learning labeling iteration, system
     * will train a machine learning model on CMLE. The trained model will be used
     * by data sampling algorithm to select DataItems.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TrainingConfig training_config = 4;</code>
     * @return \Google\Cloud\AIPlatform\V1\TrainingConfig|null
     */
    public function getTrainingConfig()
    {
        return $this->training_config;
    }

    public function hasTrainingConfig()
    {
        return isset($this->training_config);
    }

    public function clearTrainingConfig()
    {
        unset($this->training_config);
    }

    /**
     * CMLE training config. For every active learning labeling iteration, system
     * will train a machine learning model on CMLE. The trained model will be used
     * by data sampling algorithm to select DataItems.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TrainingConfig training_config = 4;</code>
     * @param \Google\Cloud\AIPlatform\V1\TrainingConfig $var
     * @return $this
     */
    public function setTrainingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\TrainingConfig::class);
        $this->training_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getHumanLabelingBudget()
    {
        return $this->whichOneof("human_labeling_budget");
    }

}

