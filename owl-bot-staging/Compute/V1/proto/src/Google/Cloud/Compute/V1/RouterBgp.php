<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterBgp</code>
 */
class RouterBgp extends \Google\Protobuf\Internal\Message
{
    /**
     * User-specified flag to indicate which mode to use for advertisement. The options are DEFAULT or CUSTOM.
     * Check the AdvertiseMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string advertise_mode = 312134331;</code>
     */
    protected $advertise_mode = null;
    /**
     * User-specified list of prefix groups to advertise in custom mode. This field can only be populated if advertise_mode is CUSTOM and is advertised to all peers of the router. These groups will be advertised in addition to any specified prefixes. Leave this field blank to advertise no custom groups.
     * Check the AdvertisedGroups enum for the list of possible values.
     *
     * Generated from protobuf field <code>repeated string advertised_groups = 21065526;</code>
     */
    private $advertised_groups;
    /**
     * User-specified list of individual IP ranges to advertise in custom mode. This field can only be populated if advertise_mode is CUSTOM and is advertised to all peers of the router. These IP ranges will be advertised in addition to any specified groups. Leave this field blank to advertise no custom IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterAdvertisedIpRange advertised_ip_ranges = 35449932;</code>
     */
    private $advertised_ip_ranges;
    /**
     * Local BGP Autonomous System Number (ASN). Must be an RFC6996 private ASN, either 16-bit or 32-bit. The value will be fixed for this router resource. All VPN tunnels that link to this router will have the same local ASN.
     *
     * Generated from protobuf field <code>optional uint32 asn = 96892;</code>
     */
    protected $asn = null;
    /**
     * The interval in seconds between BGP keepalive messages that are sent to the peer. Hold time is three times the interval at which keepalive messages are sent, and the hold time is the maximum number of seconds allowed to elapse between successive keepalive messages that BGP receives from a peer. BGP will use the smaller of either the local hold time value or the peer's hold time value as the hold time for the BGP connection between the two peers. If set, this value must be between 20 and 60. The default is 20.
     *
     * Generated from protobuf field <code>optional uint32 keepalive_interval = 276771516;</code>
     */
    protected $keepalive_interval = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $advertise_mode
     *           User-specified flag to indicate which mode to use for advertisement. The options are DEFAULT or CUSTOM.
     *           Check the AdvertiseMode enum for the list of possible values.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $advertised_groups
     *           User-specified list of prefix groups to advertise in custom mode. This field can only be populated if advertise_mode is CUSTOM and is advertised to all peers of the router. These groups will be advertised in addition to any specified prefixes. Leave this field blank to advertise no custom groups.
     *           Check the AdvertisedGroups enum for the list of possible values.
     *     @type \Google\Cloud\Compute\V1\RouterAdvertisedIpRange[]|\Google\Protobuf\Internal\RepeatedField $advertised_ip_ranges
     *           User-specified list of individual IP ranges to advertise in custom mode. This field can only be populated if advertise_mode is CUSTOM and is advertised to all peers of the router. These IP ranges will be advertised in addition to any specified groups. Leave this field blank to advertise no custom IP ranges.
     *     @type int $asn
     *           Local BGP Autonomous System Number (ASN). Must be an RFC6996 private ASN, either 16-bit or 32-bit. The value will be fixed for this router resource. All VPN tunnels that link to this router will have the same local ASN.
     *     @type int $keepalive_interval
     *           The interval in seconds between BGP keepalive messages that are sent to the peer. Hold time is three times the interval at which keepalive messages are sent, and the hold time is the maximum number of seconds allowed to elapse between successive keepalive messages that BGP receives from a peer. BGP will use the smaller of either the local hold time value or the peer's hold time value as the hold time for the BGP connection between the two peers. If set, this value must be between 20 and 60. The default is 20.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * User-specified flag to indicate which mode to use for advertisement. The options are DEFAULT or CUSTOM.
     * Check the AdvertiseMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string advertise_mode = 312134331;</code>
     * @return string
     */
    public function getAdvertiseMode()
    {
        return isset($this->advertise_mode) ? $this->advertise_mode : '';
    }

    public function hasAdvertiseMode()
    {
        return isset($this->advertise_mode);
    }

    public function clearAdvertiseMode()
    {
        unset($this->advertise_mode);
    }

    /**
     * User-specified flag to indicate which mode to use for advertisement. The options are DEFAULT or CUSTOM.
     * Check the AdvertiseMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string advertise_mode = 312134331;</code>
     * @param string $var
     * @return $this
     */
    public function setAdvertiseMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->advertise_mode = $var;

        return $this;
    }

    /**
     * User-specified list of prefix groups to advertise in custom mode. This field can only be populated if advertise_mode is CUSTOM and is advertised to all peers of the router. These groups will be advertised in addition to any specified prefixes. Leave this field blank to advertise no custom groups.
     * Check the AdvertisedGroups enum for the list of possible values.
     *
     * Generated from protobuf field <code>repeated string advertised_groups = 21065526;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdvertisedGroups()
    {
        return $this->advertised_groups;
    }

    /**
     * User-specified list of prefix groups to advertise in custom mode. This field can only be populated if advertise_mode is CUSTOM and is advertised to all peers of the router. These groups will be advertised in addition to any specified prefixes. Leave this field blank to advertise no custom groups.
     * Check the AdvertisedGroups enum for the list of possible values.
     *
     * Generated from protobuf field <code>repeated string advertised_groups = 21065526;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdvertisedGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->advertised_groups = $arr;

        return $this;
    }

    /**
     * User-specified list of individual IP ranges to advertise in custom mode. This field can only be populated if advertise_mode is CUSTOM and is advertised to all peers of the router. These IP ranges will be advertised in addition to any specified groups. Leave this field blank to advertise no custom IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterAdvertisedIpRange advertised_ip_ranges = 35449932;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdvertisedIpRanges()
    {
        return $this->advertised_ip_ranges;
    }

    /**
     * User-specified list of individual IP ranges to advertise in custom mode. This field can only be populated if advertise_mode is CUSTOM and is advertised to all peers of the router. These IP ranges will be advertised in addition to any specified groups. Leave this field blank to advertise no custom IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterAdvertisedIpRange advertised_ip_ranges = 35449932;</code>
     * @param \Google\Cloud\Compute\V1\RouterAdvertisedIpRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdvertisedIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\RouterAdvertisedIpRange::class);
        $this->advertised_ip_ranges = $arr;

        return $this;
    }

    /**
     * Local BGP Autonomous System Number (ASN). Must be an RFC6996 private ASN, either 16-bit or 32-bit. The value will be fixed for this router resource. All VPN tunnels that link to this router will have the same local ASN.
     *
     * Generated from protobuf field <code>optional uint32 asn = 96892;</code>
     * @return int
     */
    public function getAsn()
    {
        return isset($this->asn) ? $this->asn : 0;
    }

    public function hasAsn()
    {
        return isset($this->asn);
    }

    public function clearAsn()
    {
        unset($this->asn);
    }

    /**
     * Local BGP Autonomous System Number (ASN). Must be an RFC6996 private ASN, either 16-bit or 32-bit. The value will be fixed for this router resource. All VPN tunnels that link to this router will have the same local ASN.
     *
     * Generated from protobuf field <code>optional uint32 asn = 96892;</code>
     * @param int $var
     * @return $this
     */
    public function setAsn($var)
    {
        GPBUtil::checkUint32($var);
        $this->asn = $var;

        return $this;
    }

    /**
     * The interval in seconds between BGP keepalive messages that are sent to the peer. Hold time is three times the interval at which keepalive messages are sent, and the hold time is the maximum number of seconds allowed to elapse between successive keepalive messages that BGP receives from a peer. BGP will use the smaller of either the local hold time value or the peer's hold time value as the hold time for the BGP connection between the two peers. If set, this value must be between 20 and 60. The default is 20.
     *
     * Generated from protobuf field <code>optional uint32 keepalive_interval = 276771516;</code>
     * @return int
     */
    public function getKeepaliveInterval()
    {
        return isset($this->keepalive_interval) ? $this->keepalive_interval : 0;
    }

    public function hasKeepaliveInterval()
    {
        return isset($this->keepalive_interval);
    }

    public function clearKeepaliveInterval()
    {
        unset($this->keepalive_interval);
    }

    /**
     * The interval in seconds between BGP keepalive messages that are sent to the peer. Hold time is three times the interval at which keepalive messages are sent, and the hold time is the maximum number of seconds allowed to elapse between successive keepalive messages that BGP receives from a peer. BGP will use the smaller of either the local hold time value or the peer's hold time value as the hold time for the BGP connection between the two peers. If set, this value must be between 20 and 60. The default is 20.
     *
     * Generated from protobuf field <code>optional uint32 keepalive_interval = 276771516;</code>
     * @param int $var
     * @return $this
     */
    public function setKeepaliveInterval($var)
    {
        GPBUtil::checkUint32($var);
        $this->keepalive_interval = $var;

        return $this;
    }

}

