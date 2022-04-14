<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Attribution that explains a particular prediction output.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Attribution</code>
 */
class Attribution extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Model predicted output if the input instance is constructed from the
     * baselines of all the features defined in [ExplanationMetadata.inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     * The field name of the output is determined by the key in
     * [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     * If the Model's predicted output has multiple dimensions (rank > 1), this is
     * the value in the output located by [output_index][google.cloud.aiplatform.v1.Attribution.output_index].
     * If there are multiple baselines, their output values are averaged.
     *
     * Generated from protobuf field <code>double baseline_output_value = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $baseline_output_value = 0.0;
    /**
     * Output only. Model predicted output on the corresponding [explanation
     * instance][ExplainRequest.instances]. The field name of the output is
     * determined by the key in [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     * If the Model predicted output has multiple dimensions, this is the value in
     * the output located by [output_index][google.cloud.aiplatform.v1.Attribution.output_index].
     *
     * Generated from protobuf field <code>double instance_output_value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $instance_output_value = 0.0;
    /**
     * Output only. Attributions of each explained feature. Features are extracted from
     * the [prediction instances][google.cloud.aiplatform.v1.ExplainRequest.instances] according to
     * [explanation metadata for inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     * The value is a struct, whose keys are the name of the feature. The values
     * are how much the feature in the [instance][google.cloud.aiplatform.v1.ExplainRequest.instances]
     * contributed to the predicted result.
     * The format of the value is determined by the feature's input format:
     *   * If the feature is a scalar value, the attribution value is a
     *     [floating number][google.protobuf.Value.number_value].
     *   * If the feature is an array of scalar values, the attribution value is
     *     an [array][google.protobuf.Value.list_value].
     *   * If the feature is a struct, the attribution value is a
     *     [struct][google.protobuf.Value.struct_value]. The keys in the
     *     attribution value struct are the same as the keys in the feature
     *     struct. The formats of the values in the attribution struct are
     *     determined by the formats of the values in the feature struct.
     * The [ExplanationMetadata.feature_attributions_schema_uri][google.cloud.aiplatform.v1.ExplanationMetadata.feature_attributions_schema_uri] field,
     * pointed to by the [ExplanationSpec][google.cloud.aiplatform.v1.ExplanationSpec] field of the
     * [Endpoint.deployed_models][google.cloud.aiplatform.v1.Endpoint.deployed_models] object, points to the schema file that
     * describes the features and their attribution values (if it is populated).
     *
     * Generated from protobuf field <code>.google.protobuf.Value feature_attributions = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $feature_attributions = null;
    /**
     * Output only. The index that locates the explained prediction output.
     * If the prediction output is a scalar value, output_index is not populated.
     * If the prediction output has multiple dimensions, the length of the
     * output_index list is the same as the number of dimensions of the output.
     * The i-th element in output_index is the element index of the i-th dimension
     * of the output vector. Indices start from 0.
     *
     * Generated from protobuf field <code>repeated int32 output_index = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $output_index;
    /**
     * Output only. The display name of the output identified by [output_index][google.cloud.aiplatform.v1.Attribution.output_index]. For example,
     * the predicted class name by a multi-classification Model.
     * This field is only populated iff the Model predicts display names as a
     * separate field along with the explained output. The predicted display name
     * must has the same shape of the explained output, and can be located using
     * output_index.
     *
     * Generated from protobuf field <code>string output_display_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $output_display_name = '';
    /**
     * Output only. Error of [feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions] caused by approximation used in the
     * explanation method. Lower value means more precise attributions.
     * * For Sampled Shapley
     * [attribution][google.cloud.aiplatform.v1.ExplanationParameters.sampled_shapley_attribution],
     * increasing [path_count][google.cloud.aiplatform.v1.SampledShapleyAttribution.path_count] might reduce
     * the error.
     * * For Integrated Gradients
     * [attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution],
     * increasing [step_count][google.cloud.aiplatform.v1.IntegratedGradientsAttribution.step_count] might
     * reduce the error.
     * * For [XRAI attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution],
     * increasing
     * [step_count][google.cloud.aiplatform.v1.XraiAttribution.step_count] might reduce the error.
     * See [this introduction](/vertex-ai/docs/explainable-ai/overview)
     * for more information.
     *
     * Generated from protobuf field <code>double approximation_error = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $approximation_error = 0.0;
    /**
     * Output only. Name of the explain output. Specified as the key in
     * [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     *
     * Generated from protobuf field <code>string output_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $output_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $baseline_output_value
     *           Output only. Model predicted output if the input instance is constructed from the
     *           baselines of all the features defined in [ExplanationMetadata.inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     *           The field name of the output is determined by the key in
     *           [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     *           If the Model's predicted output has multiple dimensions (rank > 1), this is
     *           the value in the output located by [output_index][google.cloud.aiplatform.v1.Attribution.output_index].
     *           If there are multiple baselines, their output values are averaged.
     *     @type float $instance_output_value
     *           Output only. Model predicted output on the corresponding [explanation
     *           instance][ExplainRequest.instances]. The field name of the output is
     *           determined by the key in [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     *           If the Model predicted output has multiple dimensions, this is the value in
     *           the output located by [output_index][google.cloud.aiplatform.v1.Attribution.output_index].
     *     @type \Google\Protobuf\Value $feature_attributions
     *           Output only. Attributions of each explained feature. Features are extracted from
     *           the [prediction instances][google.cloud.aiplatform.v1.ExplainRequest.instances] according to
     *           [explanation metadata for inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     *           The value is a struct, whose keys are the name of the feature. The values
     *           are how much the feature in the [instance][google.cloud.aiplatform.v1.ExplainRequest.instances]
     *           contributed to the predicted result.
     *           The format of the value is determined by the feature's input format:
     *             * If the feature is a scalar value, the attribution value is a
     *               [floating number][google.protobuf.Value.number_value].
     *             * If the feature is an array of scalar values, the attribution value is
     *               an [array][google.protobuf.Value.list_value].
     *             * If the feature is a struct, the attribution value is a
     *               [struct][google.protobuf.Value.struct_value]. The keys in the
     *               attribution value struct are the same as the keys in the feature
     *               struct. The formats of the values in the attribution struct are
     *               determined by the formats of the values in the feature struct.
     *           The [ExplanationMetadata.feature_attributions_schema_uri][google.cloud.aiplatform.v1.ExplanationMetadata.feature_attributions_schema_uri] field,
     *           pointed to by the [ExplanationSpec][google.cloud.aiplatform.v1.ExplanationSpec] field of the
     *           [Endpoint.deployed_models][google.cloud.aiplatform.v1.Endpoint.deployed_models] object, points to the schema file that
     *           describes the features and their attribution values (if it is populated).
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $output_index
     *           Output only. The index that locates the explained prediction output.
     *           If the prediction output is a scalar value, output_index is not populated.
     *           If the prediction output has multiple dimensions, the length of the
     *           output_index list is the same as the number of dimensions of the output.
     *           The i-th element in output_index is the element index of the i-th dimension
     *           of the output vector. Indices start from 0.
     *     @type string $output_display_name
     *           Output only. The display name of the output identified by [output_index][google.cloud.aiplatform.v1.Attribution.output_index]. For example,
     *           the predicted class name by a multi-classification Model.
     *           This field is only populated iff the Model predicts display names as a
     *           separate field along with the explained output. The predicted display name
     *           must has the same shape of the explained output, and can be located using
     *           output_index.
     *     @type float $approximation_error
     *           Output only. Error of [feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions] caused by approximation used in the
     *           explanation method. Lower value means more precise attributions.
     *           * For Sampled Shapley
     *           [attribution][google.cloud.aiplatform.v1.ExplanationParameters.sampled_shapley_attribution],
     *           increasing [path_count][google.cloud.aiplatform.v1.SampledShapleyAttribution.path_count] might reduce
     *           the error.
     *           * For Integrated Gradients
     *           [attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution],
     *           increasing [step_count][google.cloud.aiplatform.v1.IntegratedGradientsAttribution.step_count] might
     *           reduce the error.
     *           * For [XRAI attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution],
     *           increasing
     *           [step_count][google.cloud.aiplatform.v1.XraiAttribution.step_count] might reduce the error.
     *           See [this introduction](/vertex-ai/docs/explainable-ai/overview)
     *           for more information.
     *     @type string $output_name
     *           Output only. Name of the explain output. Specified as the key in
     *           [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Model predicted output if the input instance is constructed from the
     * baselines of all the features defined in [ExplanationMetadata.inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     * The field name of the output is determined by the key in
     * [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     * If the Model's predicted output has multiple dimensions (rank > 1), this is
     * the value in the output located by [output_index][google.cloud.aiplatform.v1.Attribution.output_index].
     * If there are multiple baselines, their output values are averaged.
     *
     * Generated from protobuf field <code>double baseline_output_value = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getBaselineOutputValue()
    {
        return $this->baseline_output_value;
    }

    /**
     * Output only. Model predicted output if the input instance is constructed from the
     * baselines of all the features defined in [ExplanationMetadata.inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     * The field name of the output is determined by the key in
     * [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     * If the Model's predicted output has multiple dimensions (rank > 1), this is
     * the value in the output located by [output_index][google.cloud.aiplatform.v1.Attribution.output_index].
     * If there are multiple baselines, their output values are averaged.
     *
     * Generated from protobuf field <code>double baseline_output_value = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setBaselineOutputValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->baseline_output_value = $var;

        return $this;
    }

    /**
     * Output only. Model predicted output on the corresponding [explanation
     * instance][ExplainRequest.instances]. The field name of the output is
     * determined by the key in [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     * If the Model predicted output has multiple dimensions, this is the value in
     * the output located by [output_index][google.cloud.aiplatform.v1.Attribution.output_index].
     *
     * Generated from protobuf field <code>double instance_output_value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getInstanceOutputValue()
    {
        return $this->instance_output_value;
    }

    /**
     * Output only. Model predicted output on the corresponding [explanation
     * instance][ExplainRequest.instances]. The field name of the output is
     * determined by the key in [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     * If the Model predicted output has multiple dimensions, this is the value in
     * the output located by [output_index][google.cloud.aiplatform.v1.Attribution.output_index].
     *
     * Generated from protobuf field <code>double instance_output_value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setInstanceOutputValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->instance_output_value = $var;

        return $this;
    }

    /**
     * Output only. Attributions of each explained feature. Features are extracted from
     * the [prediction instances][google.cloud.aiplatform.v1.ExplainRequest.instances] according to
     * [explanation metadata for inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     * The value is a struct, whose keys are the name of the feature. The values
     * are how much the feature in the [instance][google.cloud.aiplatform.v1.ExplainRequest.instances]
     * contributed to the predicted result.
     * The format of the value is determined by the feature's input format:
     *   * If the feature is a scalar value, the attribution value is a
     *     [floating number][google.protobuf.Value.number_value].
     *   * If the feature is an array of scalar values, the attribution value is
     *     an [array][google.protobuf.Value.list_value].
     *   * If the feature is a struct, the attribution value is a
     *     [struct][google.protobuf.Value.struct_value]. The keys in the
     *     attribution value struct are the same as the keys in the feature
     *     struct. The formats of the values in the attribution struct are
     *     determined by the formats of the values in the feature struct.
     * The [ExplanationMetadata.feature_attributions_schema_uri][google.cloud.aiplatform.v1.ExplanationMetadata.feature_attributions_schema_uri] field,
     * pointed to by the [ExplanationSpec][google.cloud.aiplatform.v1.ExplanationSpec] field of the
     * [Endpoint.deployed_models][google.cloud.aiplatform.v1.Endpoint.deployed_models] object, points to the schema file that
     * describes the features and their attribution values (if it is populated).
     *
     * Generated from protobuf field <code>.google.protobuf.Value feature_attributions = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getFeatureAttributions()
    {
        return $this->feature_attributions;
    }

    public function hasFeatureAttributions()
    {
        return isset($this->feature_attributions);
    }

    public function clearFeatureAttributions()
    {
        unset($this->feature_attributions);
    }

    /**
     * Output only. Attributions of each explained feature. Features are extracted from
     * the [prediction instances][google.cloud.aiplatform.v1.ExplainRequest.instances] according to
     * [explanation metadata for inputs][google.cloud.aiplatform.v1.ExplanationMetadata.inputs].
     * The value is a struct, whose keys are the name of the feature. The values
     * are how much the feature in the [instance][google.cloud.aiplatform.v1.ExplainRequest.instances]
     * contributed to the predicted result.
     * The format of the value is determined by the feature's input format:
     *   * If the feature is a scalar value, the attribution value is a
     *     [floating number][google.protobuf.Value.number_value].
     *   * If the feature is an array of scalar values, the attribution value is
     *     an [array][google.protobuf.Value.list_value].
     *   * If the feature is a struct, the attribution value is a
     *     [struct][google.protobuf.Value.struct_value]. The keys in the
     *     attribution value struct are the same as the keys in the feature
     *     struct. The formats of the values in the attribution struct are
     *     determined by the formats of the values in the feature struct.
     * The [ExplanationMetadata.feature_attributions_schema_uri][google.cloud.aiplatform.v1.ExplanationMetadata.feature_attributions_schema_uri] field,
     * pointed to by the [ExplanationSpec][google.cloud.aiplatform.v1.ExplanationSpec] field of the
     * [Endpoint.deployed_models][google.cloud.aiplatform.v1.Endpoint.deployed_models] object, points to the schema file that
     * describes the features and their attribution values (if it is populated).
     *
     * Generated from protobuf field <code>.google.protobuf.Value feature_attributions = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setFeatureAttributions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->feature_attributions = $var;

        return $this;
    }

    /**
     * Output only. The index that locates the explained prediction output.
     * If the prediction output is a scalar value, output_index is not populated.
     * If the prediction output has multiple dimensions, the length of the
     * output_index list is the same as the number of dimensions of the output.
     * The i-th element in output_index is the element index of the i-th dimension
     * of the output vector. Indices start from 0.
     *
     * Generated from protobuf field <code>repeated int32 output_index = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputIndex()
    {
        return $this->output_index;
    }

    /**
     * Output only. The index that locates the explained prediction output.
     * If the prediction output is a scalar value, output_index is not populated.
     * If the prediction output has multiple dimensions, the length of the
     * output_index list is the same as the number of dimensions of the output.
     * The i-th element in output_index is the element index of the i-th dimension
     * of the output vector. Indices start from 0.
     *
     * Generated from protobuf field <code>repeated int32 output_index = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputIndex($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->output_index = $arr;

        return $this;
    }

    /**
     * Output only. The display name of the output identified by [output_index][google.cloud.aiplatform.v1.Attribution.output_index]. For example,
     * the predicted class name by a multi-classification Model.
     * This field is only populated iff the Model predicts display names as a
     * separate field along with the explained output. The predicted display name
     * must has the same shape of the explained output, and can be located using
     * output_index.
     *
     * Generated from protobuf field <code>string output_display_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOutputDisplayName()
    {
        return $this->output_display_name;
    }

    /**
     * Output only. The display name of the output identified by [output_index][google.cloud.aiplatform.v1.Attribution.output_index]. For example,
     * the predicted class name by a multi-classification Model.
     * This field is only populated iff the Model predicts display names as a
     * separate field along with the explained output. The predicted display name
     * must has the same shape of the explained output, and can be located using
     * output_index.
     *
     * Generated from protobuf field <code>string output_display_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOutputDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_display_name = $var;

        return $this;
    }

    /**
     * Output only. Error of [feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions] caused by approximation used in the
     * explanation method. Lower value means more precise attributions.
     * * For Sampled Shapley
     * [attribution][google.cloud.aiplatform.v1.ExplanationParameters.sampled_shapley_attribution],
     * increasing [path_count][google.cloud.aiplatform.v1.SampledShapleyAttribution.path_count] might reduce
     * the error.
     * * For Integrated Gradients
     * [attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution],
     * increasing [step_count][google.cloud.aiplatform.v1.IntegratedGradientsAttribution.step_count] might
     * reduce the error.
     * * For [XRAI attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution],
     * increasing
     * [step_count][google.cloud.aiplatform.v1.XraiAttribution.step_count] might reduce the error.
     * See [this introduction](/vertex-ai/docs/explainable-ai/overview)
     * for more information.
     *
     * Generated from protobuf field <code>double approximation_error = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getApproximationError()
    {
        return $this->approximation_error;
    }

    /**
     * Output only. Error of [feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions] caused by approximation used in the
     * explanation method. Lower value means more precise attributions.
     * * For Sampled Shapley
     * [attribution][google.cloud.aiplatform.v1.ExplanationParameters.sampled_shapley_attribution],
     * increasing [path_count][google.cloud.aiplatform.v1.SampledShapleyAttribution.path_count] might reduce
     * the error.
     * * For Integrated Gradients
     * [attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution],
     * increasing [step_count][google.cloud.aiplatform.v1.IntegratedGradientsAttribution.step_count] might
     * reduce the error.
     * * For [XRAI attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution],
     * increasing
     * [step_count][google.cloud.aiplatform.v1.XraiAttribution.step_count] might reduce the error.
     * See [this introduction](/vertex-ai/docs/explainable-ai/overview)
     * for more information.
     *
     * Generated from protobuf field <code>double approximation_error = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setApproximationError($var)
    {
        GPBUtil::checkDouble($var);
        $this->approximation_error = $var;

        return $this;
    }

    /**
     * Output only. Name of the explain output. Specified as the key in
     * [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     *
     * Generated from protobuf field <code>string output_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOutputName()
    {
        return $this->output_name;
    }

    /**
     * Output only. Name of the explain output. Specified as the key in
     * [ExplanationMetadata.outputs][google.cloud.aiplatform.v1.ExplanationMetadata.outputs].
     *
     * Generated from protobuf field <code>string output_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOutputName($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_name = $var;

        return $this;
    }

}

