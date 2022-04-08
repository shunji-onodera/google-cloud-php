<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dataproc cluster config for a cluster that does not directly control the
 * underlying compute resources, such as a [Dataproc-on-GKE
 * cluster](https://cloud.google.com/dataproc/docs/concepts/jobs/dataproc-gke#create-a-dataproc-on-gke-cluster).
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.VirtualClusterConfig</code>
 */
class VirtualClusterConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A Storage bucket used to stage job
     * dependencies, config files, and job driver console output.
     * If you do not specify a staging bucket, Cloud
     * Dataproc will determine a Cloud Storage location (US,
     * ASIA, or EU) for your cluster's staging bucket according to the
     * Compute Engine zone where your cluster is deployed, and then create
     * and manage this project-level, per-location bucket (see
     * [Dataproc staging and temp
     * buckets](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/staging-bucket)).
     * **This field requires a Cloud Storage bucket name, not a `gs://...` URI to
     * a Cloud Storage bucket.**
     *
     * Generated from protobuf field <code>string staging_bucket = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $staging_bucket = '';
    /**
     * Optional. Configuration of auxiliary services used by this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.AuxiliaryServicesConfig auxiliary_services_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $auxiliary_services_config = null;
    protected $infrastructure_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $staging_bucket
     *           Optional. A Storage bucket used to stage job
     *           dependencies, config files, and job driver console output.
     *           If you do not specify a staging bucket, Cloud
     *           Dataproc will determine a Cloud Storage location (US,
     *           ASIA, or EU) for your cluster's staging bucket according to the
     *           Compute Engine zone where your cluster is deployed, and then create
     *           and manage this project-level, per-location bucket (see
     *           [Dataproc staging and temp
     *           buckets](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/staging-bucket)).
     *           **This field requires a Cloud Storage bucket name, not a `gs://...` URI to
     *           a Cloud Storage bucket.**
     *     @type \Google\Cloud\Dataproc\V1\KubernetesClusterConfig $kubernetes_cluster_config
     *           Required. The configuration for running the Dataproc cluster on Kubernetes.
     *     @type \Google\Cloud\Dataproc\V1\AuxiliaryServicesConfig $auxiliary_services_config
     *           Optional. Configuration of auxiliary services used by this cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A Storage bucket used to stage job
     * dependencies, config files, and job driver console output.
     * If you do not specify a staging bucket, Cloud
     * Dataproc will determine a Cloud Storage location (US,
     * ASIA, or EU) for your cluster's staging bucket according to the
     * Compute Engine zone where your cluster is deployed, and then create
     * and manage this project-level, per-location bucket (see
     * [Dataproc staging and temp
     * buckets](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/staging-bucket)).
     * **This field requires a Cloud Storage bucket name, not a `gs://...` URI to
     * a Cloud Storage bucket.**
     *
     * Generated from protobuf field <code>string staging_bucket = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getStagingBucket()
    {
        return $this->staging_bucket;
    }

    /**
     * Optional. A Storage bucket used to stage job
     * dependencies, config files, and job driver console output.
     * If you do not specify a staging bucket, Cloud
     * Dataproc will determine a Cloud Storage location (US,
     * ASIA, or EU) for your cluster's staging bucket according to the
     * Compute Engine zone where your cluster is deployed, and then create
     * and manage this project-level, per-location bucket (see
     * [Dataproc staging and temp
     * buckets](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/staging-bucket)).
     * **This field requires a Cloud Storage bucket name, not a `gs://...` URI to
     * a Cloud Storage bucket.**
     *
     * Generated from protobuf field <code>string staging_bucket = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setStagingBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->staging_bucket = $var;

        return $this;
    }

    /**
     * Required. The configuration for running the Dataproc cluster on Kubernetes.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.KubernetesClusterConfig kubernetes_cluster_config = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1\KubernetesClusterConfig|null
     */
    public function getKubernetesClusterConfig()
    {
        return $this->readOneof(6);
    }

    public function hasKubernetesClusterConfig()
    {
        return $this->hasOneof(6);
    }

    /**
     * Required. The configuration for running the Dataproc cluster on Kubernetes.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.KubernetesClusterConfig kubernetes_cluster_config = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\KubernetesClusterConfig $var
     * @return $this
     */
    public function setKubernetesClusterConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\KubernetesClusterConfig::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Optional. Configuration of auxiliary services used by this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.AuxiliaryServicesConfig auxiliary_services_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\AuxiliaryServicesConfig|null
     */
    public function getAuxiliaryServicesConfig()
    {
        return $this->auxiliary_services_config;
    }

    public function hasAuxiliaryServicesConfig()
    {
        return isset($this->auxiliary_services_config);
    }

    public function clearAuxiliaryServicesConfig()
    {
        unset($this->auxiliary_services_config);
    }

    /**
     * Optional. Configuration of auxiliary services used by this cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.AuxiliaryServicesConfig auxiliary_services_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\AuxiliaryServicesConfig $var
     * @return $this
     */
    public function setAuxiliaryServicesConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\AuxiliaryServicesConfig::class);
        $this->auxiliary_services_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getInfrastructureConfig()
    {
        return $this->whichOneof("infrastructure_config");
    }

}

