<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration for running the Dataproc cluster on Kubernetes.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.KubernetesClusterConfig</code>
 */
class KubernetesClusterConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A namespace within the Kubernetes cluster to deploy into. If this namespace
     * does not exist, it is created. If it exists, Dataproc
     * verifies that another Dataproc VirtualCluster is not installed
     * into it. If not specified, the name of the Dataproc Cluster is used.
     *
     * Generated from protobuf field <code>string kubernetes_namespace = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $kubernetes_namespace = '';
    /**
     * Optional. The software configuration for this Dataproc cluster running on Kubernetes.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.KubernetesSoftwareConfig kubernetes_software_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $kubernetes_software_config = null;
    protected $config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kubernetes_namespace
     *           Optional. A namespace within the Kubernetes cluster to deploy into. If this namespace
     *           does not exist, it is created. If it exists, Dataproc
     *           verifies that another Dataproc VirtualCluster is not installed
     *           into it. If not specified, the name of the Dataproc Cluster is used.
     *     @type \Google\Cloud\Dataproc\V1\GkeClusterConfig $gke_cluster_config
     *           Required. The configuration for running the Dataproc cluster on GKE.
     *     @type \Google\Cloud\Dataproc\V1\KubernetesSoftwareConfig $kubernetes_software_config
     *           Optional. The software configuration for this Dataproc cluster running on Kubernetes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A namespace within the Kubernetes cluster to deploy into. If this namespace
     * does not exist, it is created. If it exists, Dataproc
     * verifies that another Dataproc VirtualCluster is not installed
     * into it. If not specified, the name of the Dataproc Cluster is used.
     *
     * Generated from protobuf field <code>string kubernetes_namespace = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKubernetesNamespace()
    {
        return $this->kubernetes_namespace;
    }

    /**
     * Optional. A namespace within the Kubernetes cluster to deploy into. If this namespace
     * does not exist, it is created. If it exists, Dataproc
     * verifies that another Dataproc VirtualCluster is not installed
     * into it. If not specified, the name of the Dataproc Cluster is used.
     *
     * Generated from protobuf field <code>string kubernetes_namespace = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKubernetesNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->kubernetes_namespace = $var;

        return $this;
    }

    /**
     * Required. The configuration for running the Dataproc cluster on GKE.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.GkeClusterConfig gke_cluster_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1\GkeClusterConfig|null
     */
    public function getGkeClusterConfig()
    {
        return $this->readOneof(2);
    }

    public function hasGkeClusterConfig()
    {
        return $this->hasOneof(2);
    }

    /**
     * Required. The configuration for running the Dataproc cluster on GKE.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.GkeClusterConfig gke_cluster_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\GkeClusterConfig $var
     * @return $this
     */
    public function setGkeClusterConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\GkeClusterConfig::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. The software configuration for this Dataproc cluster running on Kubernetes.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.KubernetesSoftwareConfig kubernetes_software_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\KubernetesSoftwareConfig|null
     */
    public function getKubernetesSoftwareConfig()
    {
        return $this->kubernetes_software_config;
    }

    public function hasKubernetesSoftwareConfig()
    {
        return isset($this->kubernetes_software_config);
    }

    public function clearKubernetesSoftwareConfig()
    {
        unset($this->kubernetes_software_config);
    }

    /**
     * Optional. The software configuration for this Dataproc cluster running on Kubernetes.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.KubernetesSoftwareConfig kubernetes_software_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\KubernetesSoftwareConfig $var
     * @return $this
     */
    public function setKubernetesSoftwareConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\KubernetesSoftwareConfig::class);
        $this->kubernetes_software_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfig()
    {
        return $this->whichOneof("config");
    }

}

