<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A quotas entry.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Quota</code>
 */
class Quota extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Quota limit for this metric.
     *
     * Generated from protobuf field <code>optional double limit = 102976443;</code>
     */
    protected $limit = null;
    /**
     * [Output Only] Name of the quota metric.
     * Check the Metric enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string metric = 533067184;</code>
     */
    protected $metric = null;
    /**
     * [Output Only] Owning resource. This is the resource on which this quota is applied.
     *
     * Generated from protobuf field <code>optional string owner = 106164915;</code>
     */
    protected $owner = null;
    /**
     * [Output Only] Current usage of this metric.
     *
     * Generated from protobuf field <code>optional double usage = 111574433;</code>
     */
    protected $usage = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $limit
     *           [Output Only] Quota limit for this metric.
     *     @type string $metric
     *           [Output Only] Name of the quota metric.
     *           Check the Metric enum for the list of possible values.
     *     @type string $owner
     *           [Output Only] Owning resource. This is the resource on which this quota is applied.
     *     @type float $usage
     *           [Output Only] Current usage of this metric.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Quota limit for this metric.
     *
     * Generated from protobuf field <code>optional double limit = 102976443;</code>
     * @return float
     */
    public function getLimit()
    {
        return isset($this->limit) ? $this->limit : 0.0;
    }

    public function hasLimit()
    {
        return isset($this->limit);
    }

    public function clearLimit()
    {
        unset($this->limit);
    }

    /**
     * [Output Only] Quota limit for this metric.
     *
     * Generated from protobuf field <code>optional double limit = 102976443;</code>
     * @param float $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkDouble($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * [Output Only] Name of the quota metric.
     * Check the Metric enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string metric = 533067184;</code>
     * @return string
     */
    public function getMetric()
    {
        return isset($this->metric) ? $this->metric : '';
    }

    public function hasMetric()
    {
        return isset($this->metric);
    }

    public function clearMetric()
    {
        unset($this->metric);
    }

    /**
     * [Output Only] Name of the quota metric.
     * Check the Metric enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string metric = 533067184;</code>
     * @param string $var
     * @return $this
     */
    public function setMetric($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric = $var;

        return $this;
    }

    /**
     * [Output Only] Owning resource. This is the resource on which this quota is applied.
     *
     * Generated from protobuf field <code>optional string owner = 106164915;</code>
     * @return string
     */
    public function getOwner()
    {
        return isset($this->owner) ? $this->owner : '';
    }

    public function hasOwner()
    {
        return isset($this->owner);
    }

    public function clearOwner()
    {
        unset($this->owner);
    }

    /**
     * [Output Only] Owning resource. This is the resource on which this quota is applied.
     *
     * Generated from protobuf field <code>optional string owner = 106164915;</code>
     * @param string $var
     * @return $this
     */
    public function setOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner = $var;

        return $this;
    }

    /**
     * [Output Only] Current usage of this metric.
     *
     * Generated from protobuf field <code>optional double usage = 111574433;</code>
     * @return float
     */
    public function getUsage()
    {
        return isset($this->usage) ? $this->usage : 0.0;
    }

    public function hasUsage()
    {
        return isset($this->usage);
    }

    public function clearUsage()
    {
        unset($this->usage);
    }

    /**
     * [Output Only] Current usage of this metric.
     *
     * Generated from protobuf field <code>optional double usage = 111574433;</code>
     * @param float $var
     * @return $this
     */
    public function setUsage($var)
    {
        GPBUtil::checkDouble($var);
        $this->usage = $var;

        return $this;
    }

}

