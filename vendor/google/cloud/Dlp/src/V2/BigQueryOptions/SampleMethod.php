<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2\BigQueryOptions;

use UnexpectedValueException;

/**
 * How to sample rows if not all rows are scanned. Meaningful only when used
 * in conjunction with either rows_limit or rows_limit_percent. If not
 * specified, rows are scanned in the order BigQuery reads them.
 *
 * Protobuf type <code>google.privacy.dlp.v2.BigQueryOptions.SampleMethod</code>
 */
class SampleMethod
{
    /**
     * Generated from protobuf enum <code>SAMPLE_METHOD_UNSPECIFIED = 0;</code>
     */
    const SAMPLE_METHOD_UNSPECIFIED = 0;
    /**
     * Scan groups of rows in the order BigQuery provides (default). Multiple
     * groups of rows may be scanned in parallel, so results may not appear in
     * the same order the rows are read.
     *
     * Generated from protobuf enum <code>TOP = 1;</code>
     */
    const TOP = 1;
    /**
     * Randomly pick groups of rows to scan.
     *
     * Generated from protobuf enum <code>RANDOM_START = 2;</code>
     */
    const RANDOM_START = 2;

    private static $valueToName = [
        self::SAMPLE_METHOD_UNSPECIFIED => 'SAMPLE_METHOD_UNSPECIFIED',
        self::TOP => 'TOP',
        self::RANDOM_START => 'RANDOM_START',
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
class_alias(SampleMethod::class, \Google\Cloud\Dlp\V2\BigQueryOptions_SampleMethod::class);

