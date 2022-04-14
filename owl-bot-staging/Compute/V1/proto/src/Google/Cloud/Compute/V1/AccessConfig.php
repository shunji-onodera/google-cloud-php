<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An access configuration attached to an instance's network interface. Only one access config per instance is supported.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AccessConfig</code>
 */
class AccessConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The first IPv6 address of the external IPv6 range associated with this instance, prefix length is stored in externalIpv6PrefixLength in ipv6AccessConfig. The field is output only, an IPv6 address from a subnetwork associated with the instance will be allocated dynamically.
     *
     * Generated from protobuf field <code>optional string external_ipv6 = 532703707;</code>
     */
    protected $external_ipv6 = null;
    /**
     * The prefix length of the external IPv6 range.
     *
     * Generated from protobuf field <code>optional int32 external_ipv6_prefix_length = 425672143;</code>
     */
    protected $external_ipv6_prefix_length = null;
    /**
     * [Output Only] Type of the resource. Always compute#accessConfig for access configs.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    protected $kind = null;
    /**
     * The name of this access configuration. The default and recommended name is External NAT, but you can use any arbitrary string, such as My external IP or Network Access.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * An external IP address associated with this instance. Specify an unused static external IP address available to the project or leave this field undefined to use an IP from a shared ephemeral IP address pool. If you specify a static external IP address, it must live in the same region as the zone of the instance.
     *
     * Generated from protobuf field <code>optional string nat_i_p = 117634556;</code>
     */
    protected $nat_i_p = null;
    /**
     * This signifies the networking tier used for configuring this access configuration and can only take the following values: PREMIUM, STANDARD. If an AccessConfig is specified without a valid external IP address, an ephemeral IP will be created with this networkTier. If an AccessConfig with a valid external IP address is specified, it must match that of the networkTier associated with the Address resource owning that IP.
     * Check the NetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_tier = 517397843;</code>
     */
    protected $network_tier = null;
    /**
     * The DNS domain name for the public PTR record. You can set this field only if the `setPublicPtr` field is enabled in accessConfig. If this field is unspecified in ipv6AccessConfig, a default PTR record will be createc for first IP in associated external IPv6 range.
     *
     * Generated from protobuf field <code>optional string public_ptr_domain_name = 316599167;</code>
     */
    protected $public_ptr_domain_name = null;
    /**
     * Specifies whether a public DNS 'PTR' record should be created to map the external IP address of the instance to a DNS domain name. This field is not used in ipv6AccessConfig. A default PTR record will be created if the VM has external IPv6 range associated.
     *
     * Generated from protobuf field <code>optional bool set_public_ptr = 523870229;</code>
     */
    protected $set_public_ptr = null;
    /**
     * The type of configuration. The default and only option is ONE_TO_ONE_NAT.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     */
    protected $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $external_ipv6
     *           The first IPv6 address of the external IPv6 range associated with this instance, prefix length is stored in externalIpv6PrefixLength in ipv6AccessConfig. The field is output only, an IPv6 address from a subnetwork associated with the instance will be allocated dynamically.
     *     @type int $external_ipv6_prefix_length
     *           The prefix length of the external IPv6 range.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#accessConfig for access configs.
     *     @type string $name
     *           The name of this access configuration. The default and recommended name is External NAT, but you can use any arbitrary string, such as My external IP or Network Access.
     *     @type string $nat_i_p
     *           An external IP address associated with this instance. Specify an unused static external IP address available to the project or leave this field undefined to use an IP from a shared ephemeral IP address pool. If you specify a static external IP address, it must live in the same region as the zone of the instance.
     *     @type string $network_tier
     *           This signifies the networking tier used for configuring this access configuration and can only take the following values: PREMIUM, STANDARD. If an AccessConfig is specified without a valid external IP address, an ephemeral IP will be created with this networkTier. If an AccessConfig with a valid external IP address is specified, it must match that of the networkTier associated with the Address resource owning that IP.
     *           Check the NetworkTier enum for the list of possible values.
     *     @type string $public_ptr_domain_name
     *           The DNS domain name for the public PTR record. You can set this field only if the `setPublicPtr` field is enabled in accessConfig. If this field is unspecified in ipv6AccessConfig, a default PTR record will be createc for first IP in associated external IPv6 range.
     *     @type bool $set_public_ptr
     *           Specifies whether a public DNS 'PTR' record should be created to map the external IP address of the instance to a DNS domain name. This field is not used in ipv6AccessConfig. A default PTR record will be created if the VM has external IPv6 range associated.
     *     @type string $type
     *           The type of configuration. The default and only option is ONE_TO_ONE_NAT.
     *           Check the Type enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The first IPv6 address of the external IPv6 range associated with this instance, prefix length is stored in externalIpv6PrefixLength in ipv6AccessConfig. The field is output only, an IPv6 address from a subnetwork associated with the instance will be allocated dynamically.
     *
     * Generated from protobuf field <code>optional string external_ipv6 = 532703707;</code>
     * @return string
     */
    public function getExternalIpv6()
    {
        return isset($this->external_ipv6) ? $this->external_ipv6 : '';
    }

    public function hasExternalIpv6()
    {
        return isset($this->external_ipv6);
    }

    public function clearExternalIpv6()
    {
        unset($this->external_ipv6);
    }

    /**
     * The first IPv6 address of the external IPv6 range associated with this instance, prefix length is stored in externalIpv6PrefixLength in ipv6AccessConfig. The field is output only, an IPv6 address from a subnetwork associated with the instance will be allocated dynamically.
     *
     * Generated from protobuf field <code>optional string external_ipv6 = 532703707;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalIpv6($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_ipv6 = $var;

        return $this;
    }

    /**
     * The prefix length of the external IPv6 range.
     *
     * Generated from protobuf field <code>optional int32 external_ipv6_prefix_length = 425672143;</code>
     * @return int
     */
    public function getExternalIpv6PrefixLength()
    {
        return isset($this->external_ipv6_prefix_length) ? $this->external_ipv6_prefix_length : 0;
    }

    public function hasExternalIpv6PrefixLength()
    {
        return isset($this->external_ipv6_prefix_length);
    }

    public function clearExternalIpv6PrefixLength()
    {
        unset($this->external_ipv6_prefix_length);
    }

    /**
     * The prefix length of the external IPv6 range.
     *
     * Generated from protobuf field <code>optional int32 external_ipv6_prefix_length = 425672143;</code>
     * @param int $var
     * @return $this
     */
    public function setExternalIpv6PrefixLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->external_ipv6_prefix_length = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#accessConfig for access configs.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#accessConfig for access configs.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The name of this access configuration. The default and recommended name is External NAT, but you can use any arbitrary string, such as My external IP or Network Access.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of this access configuration. The default and recommended name is External NAT, but you can use any arbitrary string, such as My external IP or Network Access.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * An external IP address associated with this instance. Specify an unused static external IP address available to the project or leave this field undefined to use an IP from a shared ephemeral IP address pool. If you specify a static external IP address, it must live in the same region as the zone of the instance.
     *
     * Generated from protobuf field <code>optional string nat_i_p = 117634556;</code>
     * @return string
     */
    public function getNatIP()
    {
        return isset($this->nat_i_p) ? $this->nat_i_p : '';
    }

    public function hasNatIP()
    {
        return isset($this->nat_i_p);
    }

    public function clearNatIP()
    {
        unset($this->nat_i_p);
    }

    /**
     * An external IP address associated with this instance. Specify an unused static external IP address available to the project or leave this field undefined to use an IP from a shared ephemeral IP address pool. If you specify a static external IP address, it must live in the same region as the zone of the instance.
     *
     * Generated from protobuf field <code>optional string nat_i_p = 117634556;</code>
     * @param string $var
     * @return $this
     */
    public function setNatIP($var)
    {
        GPBUtil::checkString($var, True);
        $this->nat_i_p = $var;

        return $this;
    }

    /**
     * This signifies the networking tier used for configuring this access configuration and can only take the following values: PREMIUM, STANDARD. If an AccessConfig is specified without a valid external IP address, an ephemeral IP will be created with this networkTier. If an AccessConfig with a valid external IP address is specified, it must match that of the networkTier associated with the Address resource owning that IP.
     * Check the NetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_tier = 517397843;</code>
     * @return string
     */
    public function getNetworkTier()
    {
        return isset($this->network_tier) ? $this->network_tier : '';
    }

    public function hasNetworkTier()
    {
        return isset($this->network_tier);
    }

    public function clearNetworkTier()
    {
        unset($this->network_tier);
    }

    /**
     * This signifies the networking tier used for configuring this access configuration and can only take the following values: PREMIUM, STANDARD. If an AccessConfig is specified without a valid external IP address, an ephemeral IP will be created with this networkTier. If an AccessConfig with a valid external IP address is specified, it must match that of the networkTier associated with the Address resource owning that IP.
     * Check the NetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_tier = 517397843;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkTier($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_tier = $var;

        return $this;
    }

    /**
     * The DNS domain name for the public PTR record. You can set this field only if the `setPublicPtr` field is enabled in accessConfig. If this field is unspecified in ipv6AccessConfig, a default PTR record will be createc for first IP in associated external IPv6 range.
     *
     * Generated from protobuf field <code>optional string public_ptr_domain_name = 316599167;</code>
     * @return string
     */
    public function getPublicPtrDomainName()
    {
        return isset($this->public_ptr_domain_name) ? $this->public_ptr_domain_name : '';
    }

    public function hasPublicPtrDomainName()
    {
        return isset($this->public_ptr_domain_name);
    }

    public function clearPublicPtrDomainName()
    {
        unset($this->public_ptr_domain_name);
    }

    /**
     * The DNS domain name for the public PTR record. You can set this field only if the `setPublicPtr` field is enabled in accessConfig. If this field is unspecified in ipv6AccessConfig, a default PTR record will be createc for first IP in associated external IPv6 range.
     *
     * Generated from protobuf field <code>optional string public_ptr_domain_name = 316599167;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicPtrDomainName($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_ptr_domain_name = $var;

        return $this;
    }

    /**
     * Specifies whether a public DNS 'PTR' record should be created to map the external IP address of the instance to a DNS domain name. This field is not used in ipv6AccessConfig. A default PTR record will be created if the VM has external IPv6 range associated.
     *
     * Generated from protobuf field <code>optional bool set_public_ptr = 523870229;</code>
     * @return bool
     */
    public function getSetPublicPtr()
    {
        return isset($this->set_public_ptr) ? $this->set_public_ptr : false;
    }

    public function hasSetPublicPtr()
    {
        return isset($this->set_public_ptr);
    }

    public function clearSetPublicPtr()
    {
        unset($this->set_public_ptr);
    }

    /**
     * Specifies whether a public DNS 'PTR' record should be created to map the external IP address of the instance to a DNS domain name. This field is not used in ipv6AccessConfig. A default PTR record will be created if the VM has external IPv6 range associated.
     *
     * Generated from protobuf field <code>optional bool set_public_ptr = 523870229;</code>
     * @param bool $var
     * @return $this
     */
    public function setSetPublicPtr($var)
    {
        GPBUtil::checkBool($var);
        $this->set_public_ptr = $var;

        return $this;
    }

    /**
     * The type of configuration. The default and only option is ONE_TO_ONE_NAT.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : '';
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * The type of configuration. The default and only option is ONE_TO_ONE_NAT.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

