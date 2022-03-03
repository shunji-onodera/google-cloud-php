<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CloudChannelService.CreateChannelPartnerLink][google.cloud.channel.v1.CloudChannelService.CreateChannelPartnerLink]
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.CreateChannelPartnerLinkRequest</code>
 */
class CreateChannelPartnerLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Create a channel partner link for the provided reseller account's
     * resource name.
     * Parent uses the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. The channel partner link to create.
     * Either channel_partner_link.reseller_cloud_identity_id or domain can be
     * used to create a link.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ChannelPartnerLink channel_partner_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $channel_partner_link = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Create a channel partner link for the provided reseller account's
     *           resource name.
     *           Parent uses the format: accounts/{account_id}
     *     @type \Google\Cloud\Channel\V1\ChannelPartnerLink $channel_partner_link
     *           Required. The channel partner link to create.
     *           Either channel_partner_link.reseller_cloud_identity_id or domain can be
     *           used to create a link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Create a channel partner link for the provided reseller account's
     * resource name.
     * Parent uses the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Create a channel partner link for the provided reseller account's
     * resource name.
     * Parent uses the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The channel partner link to create.
     * Either channel_partner_link.reseller_cloud_identity_id or domain can be
     * used to create a link.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ChannelPartnerLink channel_partner_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Channel\V1\ChannelPartnerLink|null
     */
    public function getChannelPartnerLink()
    {
        return $this->channel_partner_link;
    }

    public function hasChannelPartnerLink()
    {
        return isset($this->channel_partner_link);
    }

    public function clearChannelPartnerLink()
    {
        unset($this->channel_partner_link);
    }

    /**
     * Required. The channel partner link to create.
     * Either channel_partner_link.reseller_cloud_identity_id or domain can be
     * used to create a link.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ChannelPartnerLink channel_partner_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Channel\V1\ChannelPartnerLink $var
     * @return $this
     */
    public function setChannelPartnerLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\ChannelPartnerLink::class);
        $this->channel_partner_link = $var;

        return $this;
    }

}

