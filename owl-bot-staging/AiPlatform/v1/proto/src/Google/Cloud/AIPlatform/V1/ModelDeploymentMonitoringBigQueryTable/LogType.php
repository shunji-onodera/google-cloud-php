<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_deployment_monitoring_job.proto

namespace Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringBigQueryTable;

use UnexpectedValueException;

/**
 * Indicates what type of traffic does the log belong to.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.ModelDeploymentMonitoringBigQueryTable.LogType</code>
 */
class LogType
{
    /**
     * Unspecified type.
     *
     * Generated from protobuf enum <code>LOG_TYPE_UNSPECIFIED = 0;</code>
     */
    const LOG_TYPE_UNSPECIFIED = 0;
    /**
     * Predict logs.
     *
     * Generated from protobuf enum <code>PREDICT = 1;</code>
     */
    const PREDICT = 1;
    /**
     * Explain logs.
     *
     * Generated from protobuf enum <code>EXPLAIN = 2;</code>
     */
    const EXPLAIN = 2;

    private static $valueToName = [
        self::LOG_TYPE_UNSPECIFIED => 'LOG_TYPE_UNSPECIFIED',
        self::PREDICT => 'PREDICT',
        self::EXPLAIN => 'EXPLAIN',
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
class_alias(LogType::class, \Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringBigQueryTable_LogType::class);

