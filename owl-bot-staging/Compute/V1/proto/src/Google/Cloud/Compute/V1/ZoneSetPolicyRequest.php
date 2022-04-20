<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ZoneSetPolicyRequest</code>
 */
class ZoneSetPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Flatten Policy to create a backwacd compatible wire-format. Deprecated. Use 'policy' to specify bindings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Binding bindings = 403251854;</code>
     */
    private $bindings;
    /**
     * Flatten Policy to create a backward compatible wire-format. Deprecated. Use 'policy' to specify the etag.
     *
     * Generated from protobuf field <code>optional string etag = 3123477;</code>
     */
    protected $etag = null;
    /**
     * REQUIRED: The complete policy to be applied to the 'resource'. The size of the policy is limited to a few 10s of KB. An empty policy is in general a valid policy but certain services (like Projects) might reject them.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Policy policy = 91071794;</code>
     */
    protected $policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\Binding[]|\Google\Protobuf\Internal\RepeatedField $bindings
     *           Flatten Policy to create a backwacd compatible wire-format. Deprecated. Use 'policy' to specify bindings.
     *     @type string $etag
     *           Flatten Policy to create a backward compatible wire-format. Deprecated. Use 'policy' to specify the etag.
     *     @type \Google\Cloud\Compute\V1\Policy $policy
     *           REQUIRED: The complete policy to be applied to the 'resource'. The size of the policy is limited to a few 10s of KB. An empty policy is in general a valid policy but certain services (like Projects) might reject them.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Flatten Policy to create a backwacd compatible wire-format. Deprecated. Use 'policy' to specify bindings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Binding bindings = 403251854;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBindings()
    {
        return $this->bindings;
    }

    /**
     * Flatten Policy to create a backwacd compatible wire-format. Deprecated. Use 'policy' to specify bindings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Binding bindings = 403251854;</code>
     * @param \Google\Cloud\Compute\V1\Binding[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBindings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Binding::class);
        $this->bindings = $arr;

        return $this;
    }

    /**
     * Flatten Policy to create a backward compatible wire-format. Deprecated. Use 'policy' to specify the etag.
     *
     * Generated from protobuf field <code>optional string etag = 3123477;</code>
     * @return string
     */
    public function getEtag()
    {
        return isset($this->etag) ? $this->etag : '';
    }

    public function hasEtag()
    {
        return isset($this->etag);
    }

    public function clearEtag()
    {
        unset($this->etag);
    }

    /**
     * Flatten Policy to create a backward compatible wire-format. Deprecated. Use 'policy' to specify the etag.
     *
     * Generated from protobuf field <code>optional string etag = 3123477;</code>
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
     * REQUIRED: The complete policy to be applied to the 'resource'. The size of the policy is limited to a few 10s of KB. An empty policy is in general a valid policy but certain services (like Projects) might reject them.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Policy policy = 91071794;</code>
     * @return \Google\Cloud\Compute\V1\Policy|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    public function hasPolicy()
    {
        return isset($this->policy);
    }

    public function clearPolicy()
    {
        unset($this->policy);
    }

    /**
     * REQUIRED: The complete policy to be applied to the 'resource'. The size of the policy is limited to a few 10s of KB. An empty policy is in general a valid policy but certain services (like Projects) might reject them.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Policy policy = 91071794;</code>
     * @param \Google\Cloud\Compute\V1\Policy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Policy::class);
        $this->policy = $var;

        return $this;
    }

}

