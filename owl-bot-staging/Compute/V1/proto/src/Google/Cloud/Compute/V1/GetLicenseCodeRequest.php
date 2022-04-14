<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for LicenseCodes.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetLicenseCodeRequest</code>
 */
class GetLicenseCodeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Number corresponding to the License code resource to return.
     *
     * Generated from protobuf field <code>string license_code = 1467179 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $license_code = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $license_code
     *           Number corresponding to the License code resource to return.
     *     @type string $project
     *           Project ID for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Number corresponding to the License code resource to return.
     *
     * Generated from protobuf field <code>string license_code = 1467179 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getLicenseCode()
    {
        return $this->license_code;
    }

    /**
     * Number corresponding to the License code resource to return.
     *
     * Generated from protobuf field <code>string license_code = 1467179 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setLicenseCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->license_code = $var;

        return $this;
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

}

