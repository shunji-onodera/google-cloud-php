<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/fulfillment.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Fulfillments.GetFulfillment][google.cloud.dialogflow.v2.Fulfillments.GetFulfillment].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.GetFulfillmentRequest</code>
 */
class GetFulfillmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the fulfillment.
     * Format: `projects/<Project ID>/agent/fulfillment`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the fulfillment.
     *           Format: `projects/<Project ID>/agent/fulfillment`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Fulfillment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the fulfillment.
     * Format: `projects/<Project ID>/agent/fulfillment`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the fulfillment.
     * Format: `projects/<Project ID>/agent/fulfillment`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

