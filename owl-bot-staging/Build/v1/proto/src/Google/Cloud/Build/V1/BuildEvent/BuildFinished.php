<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/build_events.proto

namespace Google\Cloud\Build\V1\BuildEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Notification that the build request has finished, and no further
 * invocations will occur.  Note that this applies to the entire Build.
 * Individual invocations trigger InvocationFinished when they finish.
 *
 * Generated from protobuf message <code>google.devtools.build.v1.BuildEvent.BuildFinished</code>
 */
class BuildFinished extends \Google\Protobuf\Internal\Message
{
    /**
     * Final status of the build.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildStatus status = 1;</code>
     */
    protected $status = null;
    /**
     * Additional details about the Build.
     *
     * Generated from protobuf field <code>.google.protobuf.Any details = 2;</code>
     */
    protected $details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Build\V1\BuildStatus $status
     *           Final status of the build.
     *     @type \Google\Protobuf\Any $details
     *           Additional details about the Build.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Build\V1\BuildEvents::initOnce();
        parent::__construct($data);
    }

    /**
     * Final status of the build.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildStatus status = 1;</code>
     * @return \Google\Cloud\Build\V1\BuildStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Final status of the build.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildStatus status = 1;</code>
     * @param \Google\Cloud\Build\V1\BuildStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\BuildStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Additional details about the Build.
     *
     * Generated from protobuf field <code>.google.protobuf.Any details = 2;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Additional details about the Build.
     *
     * Generated from protobuf field <code>.google.protobuf.Any details = 2;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->details = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BuildFinished::class, \Google\Cloud\Build\V1\BuildEvent_BuildFinished::class);

