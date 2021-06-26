<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/agent.proto

namespace Google\Cloud\Dialogflow\V2\Agent;

use UnexpectedValueException;

/**
 * Match mode determines how intents are detected from user queries.
 *
 * Protobuf type <code>google.cloud.dialogflow.v2.Agent.MatchMode</code>
 */
class MatchMode
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>MATCH_MODE_UNSPECIFIED = 0;</code>
     */
    const MATCH_MODE_UNSPECIFIED = 0;
    /**
     * Best for agents with a small number of examples in intents and/or wide
     * use of templates syntax and composite entities.
     *
     * Generated from protobuf enum <code>MATCH_MODE_HYBRID = 1;</code>
     */
    const MATCH_MODE_HYBRID = 1;
    /**
     * Can be used for agents with a large number of examples in intents,
     * especially the ones using &#64;sys.any or very large custom entities.
     *
     * Generated from protobuf enum <code>MATCH_MODE_ML_ONLY = 2;</code>
     */
    const MATCH_MODE_ML_ONLY = 2;

    private static $valueToName = [
        self::MATCH_MODE_UNSPECIFIED => 'MATCH_MODE_UNSPECIFIED',
        self::MATCH_MODE_HYBRID => 'MATCH_MODE_HYBRID',
        self::MATCH_MODE_ML_ONLY => 'MATCH_MODE_ML_ONLY',
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
class_alias(MatchMode::class, \Google\Cloud\Dialogflow\V2\Agent_MatchMode::class);
