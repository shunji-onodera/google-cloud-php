<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1\MetadataOptions;

use UnexpectedValueException;

/**
 * Options for handling temporary holds for Google Cloud Storage objects.
 *
 * Protobuf type <code>google.storagetransfer.v1.MetadataOptions.TemporaryHold</code>
 */
class TemporaryHold
{
    /**
     * Temporary hold behavior is unspecified.
     *
     * Generated from protobuf enum <code>TEMPORARY_HOLD_UNSPECIFIED = 0;</code>
     */
    const TEMPORARY_HOLD_UNSPECIFIED = 0;
    /**
     * Do not set a temporary hold on the destination object.
     *
     * Generated from protobuf enum <code>TEMPORARY_HOLD_SKIP = 1;</code>
     */
    const TEMPORARY_HOLD_SKIP = 1;
    /**
     * Preserve the object's original temporary hold status.
     *
     * Generated from protobuf enum <code>TEMPORARY_HOLD_PRESERVE = 2;</code>
     */
    const TEMPORARY_HOLD_PRESERVE = 2;

    private static $valueToName = [
        self::TEMPORARY_HOLD_UNSPECIFIED => 'TEMPORARY_HOLD_UNSPECIFIED',
        self::TEMPORARY_HOLD_SKIP => 'TEMPORARY_HOLD_SKIP',
        self::TEMPORARY_HOLD_PRESERVE => 'TEMPORARY_HOLD_PRESERVE',
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
class_alias(TemporaryHold::class, \Google\Cloud\StorageTransfer\V1\MetadataOptions_TemporaryHold::class);

