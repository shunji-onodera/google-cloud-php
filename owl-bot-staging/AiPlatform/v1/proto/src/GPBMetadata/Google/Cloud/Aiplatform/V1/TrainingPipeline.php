<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/training_pipeline.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class TrainingPipeline
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EncryptionSpec::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Model::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineState::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/cloud/aiplatform/v1/training_pipeline.protogoogle.cloud.aiplatform.v1google/api/resource.proto0google/cloud/aiplatform/v1/encryption_spec.proto#google/cloud/aiplatform/v1/io.proto&google/cloud/aiplatform/v1/model.proto/google/cloud/aiplatform/v1/pipeline_state.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
TrainingPipeline
name (	B�A
display_name (	B�AF
input_data_config (2+.google.cloud.aiplatform.v1.InputDataConfig%
training_task_definition (	B�A9
training_task_inputs (2.google.protobuf.ValueB�A;
training_task_metadata (2.google.protobuf.ValueB�A:
model_to_upload (2!.google.cloud.aiplatform.v1.Model=
state	 (2).google.cloud.aiplatform.v1.PipelineStateB�A&
error
 (2.google.rpc.StatusB�A4
create_time (2.google.protobuf.TimestampB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AH
labels (28.google.cloud.aiplatform.v1.TrainingPipeline.LabelsEntryC
encryption_spec (2*.google.cloud.aiplatform.v1.EncryptionSpec-
LabelsEntry
key (	
value (	:8:~�A{
*aiplatform.googleapis.com/TrainingPipelineMprojects/{project}/locations/{location}/trainingPipelines/{training_pipeline}"�
InputDataConfigC
fraction_split (2).google.cloud.aiplatform.v1.FractionSplitH ?
filter_split (2\'.google.cloud.aiplatform.v1.FilterSplitH G
predefined_split (2+.google.cloud.aiplatform.v1.PredefinedSplitH E
timestamp_split (2*.google.cloud.aiplatform.v1.TimestampSplitH G
stratified_split (2+.google.cloud.aiplatform.v1.StratifiedSplitH E
gcs_destination (2*.google.cloud.aiplatform.v1.GcsDestinationHO
bigquery_destination
 (2/.google.cloud.aiplatform.v1.BigQueryDestinationH

dataset_id (	B�A
annotations_filter (	
annotation_schema_uri	 (	B
splitB
destination"^
FractionSplit
training_fraction (
validation_fraction (
test_fraction ("e
FilterSplit
training_filter (	B�A
validation_filter (	B�A
test_filter (	B�A"#
PredefinedSplit
key (	B�A"q
TimestampSplit
training_fraction (
validation_fraction (
test_fraction (
key (	B�A"r
StratifiedSplit
training_fraction (
validation_fraction (
test_fraction (
key (	B�AB�
com.google.cloud.aiplatform.v1BTrainingPipelineProtoPZDgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1;aiplatform�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

