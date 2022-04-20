<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\ExternalVpnGateway;

use UnexpectedValueException;

/**
 * Indicates the user-supplied redundancy type of this external VPN gateway.
 *
 * Protobuf type <code>google.cloud.compute.v1.ExternalVpnGateway.RedundancyType</code>
 */
class RedundancyType
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_REDUNDANCY_TYPE = 0;</code>
     */
    const UNDEFINED_REDUNDANCY_TYPE = 0;
    /**
     * The external VPN gateway has four public IP addresses; at the time of writing this API, the AWS virtual private gateway is an example which has four public IP addresses for high availability connections; there should be two VPN connections in the AWS virtual private gateway , each AWS VPN connection has two public IP addresses; please make sure to put two public IP addresses from one AWS VPN connection into interfaces 0 and 1 of this external VPN gateway, and put the other two public IP addresses from another AWS VPN connection into interfaces 2 and 3 of this external VPN gateway. When displaying highly available configuration status for the VPN tunnels connected to FOUR_IPS_REDUNDANCY external VPN gateway, Google will always detect whether interfaces 0 and 1 are connected on one interface of HA Cloud VPN gateway, and detect whether interfaces 2 and 3 are connected to another interface of the HA Cloud VPN gateway.
     *
     * Generated from protobuf enum <code>FOUR_IPS_REDUNDANCY = 520087913;</code>
     */
    const FOUR_IPS_REDUNDANCY = 520087913;
    /**
     * The external VPN gateway has only one public IP address which internally provide redundancy or failover.
     *
     * Generated from protobuf enum <code>SINGLE_IP_INTERNALLY_REDUNDANT = 133914873;</code>
     */
    const SINGLE_IP_INTERNALLY_REDUNDANT = 133914873;
    /**
     * The external VPN gateway has two public IP addresses which are redundant with each other, the following two types of setup on your on-premises side would have this type of redundancy: (1) Two separate on-premises gateways, each with one public IP address, the two on-premises gateways are redundant with each other. (2) A single on-premise gateway with two public IP addresses that are redundant with eatch other.
     *
     * Generated from protobuf enum <code>TWO_IPS_REDUNDANCY = 367049635;</code>
     */
    const TWO_IPS_REDUNDANCY = 367049635;

    private static $valueToName = [
        self::UNDEFINED_REDUNDANCY_TYPE => 'UNDEFINED_REDUNDANCY_TYPE',
        self::FOUR_IPS_REDUNDANCY => 'FOUR_IPS_REDUNDANCY',
        self::SINGLE_IP_INTERNALLY_REDUNDANT => 'SINGLE_IP_INTERNALLY_REDUNDANT',
        self::TWO_IPS_REDUNDANCY => 'TWO_IPS_REDUNDANCY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RedundancyType::class, \Google\Cloud\Compute\V1\ExternalVpnGateway_RedundancyType::class);

