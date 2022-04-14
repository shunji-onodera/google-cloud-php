<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for ServiceAttachments.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetServiceAttachmentRequest</code>
 */
class GetServiceAttachmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project = '';
    /**
     * Name of the region of this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $region = '';
    /**
     * Name of the ServiceAttachment resource to return.
     *
     * Generated from protobuf field <code>string service_attachment = 338957549 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_attachment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region of this request.
     *     @type string $service_attachment
     *           Name of the ServiceAttachment resource to return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region of this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region of this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Name of the ServiceAttachment resource to return.
     *
     * Generated from protobuf field <code>string service_attachment = 338957549 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceAttachment()
    {
        return $this->service_attachment;
    }

    /**
     * Name of the ServiceAttachment resource to return.
     *
     * Generated from protobuf field <code>string service_attachment = 338957549 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAttachment($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_attachment = $var;

        return $this;
    }

}

