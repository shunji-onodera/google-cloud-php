<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/endpoint.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Models are deployed into it, and afterwards Endpoint is called to obtain
 * predictions and explanations.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Endpoint</code>
 */
class Endpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the Endpoint.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. The display name of the Endpoint.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * The description of the Endpoint.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Output only. The models deployed in this Endpoint.
     * To add or remove DeployedModels use [EndpointService.DeployModel][google.cloud.aiplatform.v1.EndpointService.DeployModel] and
     * [EndpointService.UndeployModel][google.cloud.aiplatform.v1.EndpointService.UndeployModel] respectively.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedModel deployed_models = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $deployed_models;
    /**
     * A map from a DeployedModel's ID to the percentage of this Endpoint's
     * traffic that should be forwarded to that DeployedModel.
     * If a DeployedModel's ID is not listed in this map, then it receives no
     * traffic.
     * The traffic percentage values must add up to 100, or map must be empty if
     * the Endpoint is to not accept any traffic at a moment.
     *
     * Generated from protobuf field <code>map<string, int32> traffic_split = 5;</code>
     */
    private $traffic_split;
    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     */
    protected $etag = '';
    /**
     * The labels with user-defined metadata to organize your Endpoints.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     */
    private $labels;
    /**
     * Output only. Timestamp when this Endpoint was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp when this Endpoint was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Customer-managed encryption key spec for an Endpoint. If set, this
     * Endpoint and all sub-resources of this Endpoint will be secured by
     * this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 10;</code>
     */
    protected $encryption_spec = null;
    /**
     * The full name of the Google Compute Engine
     * [network](https://cloud.google.com//compute/docs/networks-and-firewalls#networks)
     * to which the Endpoint should be peered.
     * Private services access must already be configured for the network. If left
     * unspecified, the Endpoint is not peered with any network.
     * Only one of the fields, [network][google.cloud.aiplatform.v1.Endpoint.network] or
     * [enable_private_service_connect][google.cloud.aiplatform.v1.Endpoint.enable_private_service_connect],
     * can be set.
     * [Format](https://cloud.google.com/compute/docs/reference/rest/v1/networks/insert):
     * `projects/{project}/global/networks/{network}`.
     * Where `{project}` is a project number, as in `12345`, and `{network}` is
     * network name.
     *
     * Generated from protobuf field <code>string network = 13 [(.google.api.resource_reference) = {</code>
     */
    protected $network = '';
    /**
     * Deprecated: If true, expose the Endpoint via private service connect.
     * Only one of the fields, [network][google.cloud.aiplatform.v1.Endpoint.network] or
     * [enable_private_service_connect][google.cloud.aiplatform.v1.Endpoint.enable_private_service_connect],
     * can be set.
     *
     * Generated from protobuf field <code>bool enable_private_service_connect = 17 [deprecated = true];</code>
     * @deprecated
     */
    protected $enable_private_service_connect = false;
    /**
     * Output only. Resource name of the Model Monitoring job associated with this Endpoint
     * if monitoring is enabled by [CreateModelDeploymentMonitoringJob][].
     * Format:
     * `projects/{project}/locations/{location}/modelDeploymentMonitoringJobs/{model_deployment_monitoring_job}`
     *
     * Generated from protobuf field <code>string model_deployment_monitoring_job = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $model_deployment_monitoring_job = '';
    /**
     * Configures the request-response logging for online prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PredictRequestResponseLoggingConfig predict_request_response_logging_config = 18;</code>
     */
    protected $predict_request_response_logging_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the Endpoint.
     *     @type string $display_name
     *           Required. The display name of the Endpoint.
     *           The name can be up to 128 characters long and can be consist of any UTF-8
     *           characters.
     *     @type string $description
     *           The description of the Endpoint.
     *     @type \Google\Cloud\AIPlatform\V1\DeployedModel[]|\Google\Protobuf\Internal\RepeatedField $deployed_models
     *           Output only. The models deployed in this Endpoint.
     *           To add or remove DeployedModels use [EndpointService.DeployModel][google.cloud.aiplatform.v1.EndpointService.DeployModel] and
     *           [EndpointService.UndeployModel][google.cloud.aiplatform.v1.EndpointService.UndeployModel] respectively.
     *     @type array|\Google\Protobuf\Internal\MapField $traffic_split
     *           A map from a DeployedModel's ID to the percentage of this Endpoint's
     *           traffic that should be forwarded to that DeployedModel.
     *           If a DeployedModel's ID is not listed in this map, then it receives no
     *           traffic.
     *           The traffic percentage values must add up to 100, or map must be empty if
     *           the Endpoint is to not accept any traffic at a moment.
     *     @type string $etag
     *           Used to perform consistent read-modify-write updates. If not set, a blind
     *           "overwrite" update happens.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels with user-defined metadata to organize your Endpoints.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           See https://goo.gl/xmQnxf for more information and examples of labels.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this Endpoint was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this Endpoint was last updated.
     *     @type \Google\Cloud\AIPlatform\V1\EncryptionSpec $encryption_spec
     *           Customer-managed encryption key spec for an Endpoint. If set, this
     *           Endpoint and all sub-resources of this Endpoint will be secured by
     *           this key.
     *     @type string $network
     *           The full name of the Google Compute Engine
     *           [network](https://cloud.google.com//compute/docs/networks-and-firewalls#networks)
     *           to which the Endpoint should be peered.
     *           Private services access must already be configured for the network. If left
     *           unspecified, the Endpoint is not peered with any network.
     *           Only one of the fields, [network][google.cloud.aiplatform.v1.Endpoint.network] or
     *           [enable_private_service_connect][google.cloud.aiplatform.v1.Endpoint.enable_private_service_connect],
     *           can be set.
     *           [Format](https://cloud.google.com/compute/docs/reference/rest/v1/networks/insert):
     *           `projects/{project}/global/networks/{network}`.
     *           Where `{project}` is a project number, as in `12345`, and `{network}` is
     *           network name.
     *     @type bool $enable_private_service_connect
     *           Deprecated: If true, expose the Endpoint via private service connect.
     *           Only one of the fields, [network][google.cloud.aiplatform.v1.Endpoint.network] or
     *           [enable_private_service_connect][google.cloud.aiplatform.v1.Endpoint.enable_private_service_connect],
     *           can be set.
     *     @type string $model_deployment_monitoring_job
     *           Output only. Resource name of the Model Monitoring job associated with this Endpoint
     *           if monitoring is enabled by [CreateModelDeploymentMonitoringJob][].
     *           Format:
     *           `projects/{project}/locations/{location}/modelDeploymentMonitoringJobs/{model_deployment_monitoring_job}`
     *     @type \Google\Cloud\AIPlatform\V1\PredictRequestResponseLoggingConfig $predict_request_response_logging_config
     *           Configures the request-response logging for online prediction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Endpoint::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the Endpoint.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the Endpoint.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The display name of the Endpoint.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the Endpoint.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The description of the Endpoint.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the Endpoint.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The models deployed in this Endpoint.
     * To add or remove DeployedModels use [EndpointService.DeployModel][google.cloud.aiplatform.v1.EndpointService.DeployModel] and
     * [EndpointService.UndeployModel][google.cloud.aiplatform.v1.EndpointService.UndeployModel] respectively.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedModel deployed_models = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeployedModels()
    {
        return $this->deployed_models;
    }

    /**
     * Output only. The models deployed in this Endpoint.
     * To add or remove DeployedModels use [EndpointService.DeployModel][google.cloud.aiplatform.v1.EndpointService.DeployModel] and
     * [EndpointService.UndeployModel][google.cloud.aiplatform.v1.EndpointService.UndeployModel] respectively.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedModel deployed_models = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\DeployedModel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeployedModels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\DeployedModel::class);
        $this->deployed_models = $arr;

        return $this;
    }

    /**
     * A map from a DeployedModel's ID to the percentage of this Endpoint's
     * traffic that should be forwarded to that DeployedModel.
     * If a DeployedModel's ID is not listed in this map, then it receives no
     * traffic.
     * The traffic percentage values must add up to 100, or map must be empty if
     * the Endpoint is to not accept any traffic at a moment.
     *
     * Generated from protobuf field <code>map<string, int32> traffic_split = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTrafficSplit()
    {
        return $this->traffic_split;
    }

    /**
     * A map from a DeployedModel's ID to the percentage of this Endpoint's
     * traffic that should be forwarded to that DeployedModel.
     * If a DeployedModel's ID is not listed in this map, then it receives no
     * traffic.
     * The traffic percentage values must add up to 100, or map must be empty if
     * the Endpoint is to not accept any traffic at a moment.
     *
     * Generated from protobuf field <code>map<string, int32> traffic_split = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTrafficSplit($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT32);
        $this->traffic_split = $arr;

        return $this;
    }

    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * The labels with user-defined metadata to organize your Endpoints.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels with user-defined metadata to organize your Endpoints.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. Timestamp when this Endpoint was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp when this Endpoint was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this Endpoint was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp when this Endpoint was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Customer-managed encryption key spec for an Endpoint. If set, this
     * Endpoint and all sub-resources of this Endpoint will be secured by
     * this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 10;</code>
     * @return \Google\Cloud\AIPlatform\V1\EncryptionSpec|null
     */
    public function getEncryptionSpec()
    {
        return $this->encryption_spec;
    }

    public function hasEncryptionSpec()
    {
        return isset($this->encryption_spec);
    }

    public function clearEncryptionSpec()
    {
        unset($this->encryption_spec);
    }

    /**
     * Customer-managed encryption key spec for an Endpoint. If set, this
     * Endpoint and all sub-resources of this Endpoint will be secured by
     * this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 10;</code>
     * @param \Google\Cloud\AIPlatform\V1\EncryptionSpec $var
     * @return $this
     */
    public function setEncryptionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\EncryptionSpec::class);
        $this->encryption_spec = $var;

        return $this;
    }

    /**
     * The full name of the Google Compute Engine
     * [network](https://cloud.google.com//compute/docs/networks-and-firewalls#networks)
     * to which the Endpoint should be peered.
     * Private services access must already be configured for the network. If left
     * unspecified, the Endpoint is not peered with any network.
     * Only one of the fields, [network][google.cloud.aiplatform.v1.Endpoint.network] or
     * [enable_private_service_connect][google.cloud.aiplatform.v1.Endpoint.enable_private_service_connect],
     * can be set.
     * [Format](https://cloud.google.com/compute/docs/reference/rest/v1/networks/insert):
     * `projects/{project}/global/networks/{network}`.
     * Where `{project}` is a project number, as in `12345`, and `{network}` is
     * network name.
     *
     * Generated from protobuf field <code>string network = 13 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * The full name of the Google Compute Engine
     * [network](https://cloud.google.com//compute/docs/networks-and-firewalls#networks)
     * to which the Endpoint should be peered.
     * Private services access must already be configured for the network. If left
     * unspecified, the Endpoint is not peered with any network.
     * Only one of the fields, [network][google.cloud.aiplatform.v1.Endpoint.network] or
     * [enable_private_service_connect][google.cloud.aiplatform.v1.Endpoint.enable_private_service_connect],
     * can be set.
     * [Format](https://cloud.google.com/compute/docs/reference/rest/v1/networks/insert):
     * `projects/{project}/global/networks/{network}`.
     * Where `{project}` is a project number, as in `12345`, and `{network}` is
     * network name.
     *
     * Generated from protobuf field <code>string network = 13 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Deprecated: If true, expose the Endpoint via private service connect.
     * Only one of the fields, [network][google.cloud.aiplatform.v1.Endpoint.network] or
     * [enable_private_service_connect][google.cloud.aiplatform.v1.Endpoint.enable_private_service_connect],
     * can be set.
     *
     * Generated from protobuf field <code>bool enable_private_service_connect = 17 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getEnablePrivateServiceConnect()
    {
        @trigger_error('enable_private_service_connect is deprecated.', E_USER_DEPRECATED);
        return $this->enable_private_service_connect;
    }

    /**
     * Deprecated: If true, expose the Endpoint via private service connect.
     * Only one of the fields, [network][google.cloud.aiplatform.v1.Endpoint.network] or
     * [enable_private_service_connect][google.cloud.aiplatform.v1.Endpoint.enable_private_service_connect],
     * can be set.
     *
     * Generated from protobuf field <code>bool enable_private_service_connect = 17 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setEnablePrivateServiceConnect($var)
    {
        @trigger_error('enable_private_service_connect is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->enable_private_service_connect = $var;

        return $this;
    }

    /**
     * Output only. Resource name of the Model Monitoring job associated with this Endpoint
     * if monitoring is enabled by [CreateModelDeploymentMonitoringJob][].
     * Format:
     * `projects/{project}/locations/{location}/modelDeploymentMonitoringJobs/{model_deployment_monitoring_job}`
     *
     * Generated from protobuf field <code>string model_deployment_monitoring_job = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getModelDeploymentMonitoringJob()
    {
        return $this->model_deployment_monitoring_job;
    }

    /**
     * Output only. Resource name of the Model Monitoring job associated with this Endpoint
     * if monitoring is enabled by [CreateModelDeploymentMonitoringJob][].
     * Format:
     * `projects/{project}/locations/{location}/modelDeploymentMonitoringJobs/{model_deployment_monitoring_job}`
     *
     * Generated from protobuf field <code>string model_deployment_monitoring_job = 14 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setModelDeploymentMonitoringJob($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_deployment_monitoring_job = $var;

        return $this;
    }

    /**
     * Configures the request-response logging for online prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PredictRequestResponseLoggingConfig predict_request_response_logging_config = 18;</code>
     * @return \Google\Cloud\AIPlatform\V1\PredictRequestResponseLoggingConfig|null
     */
    public function getPredictRequestResponseLoggingConfig()
    {
        return $this->predict_request_response_logging_config;
    }

    public function hasPredictRequestResponseLoggingConfig()
    {
        return isset($this->predict_request_response_logging_config);
    }

    public function clearPredictRequestResponseLoggingConfig()
    {
        unset($this->predict_request_response_logging_config);
    }

    /**
     * Configures the request-response logging for online prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PredictRequestResponseLoggingConfig predict_request_response_logging_config = 18;</code>
     * @param \Google\Cloud\AIPlatform\V1\PredictRequestResponseLoggingConfig $var
     * @return $this
     */
    public function setPredictRequestResponseLoggingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\PredictRequestResponseLoggingConfig::class);
        $this->predict_request_response_logging_config = $var;

        return $this;
    }

}

