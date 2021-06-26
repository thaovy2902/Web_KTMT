<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an arbitrary window of time that recurs.
 *
 * Generated from protobuf message <code>google.container.v1.RecurringTimeWindow</code>
 */
class RecurringTimeWindow extends \Google\Protobuf\Internal\Message
{
    /**
     * The window of the first recurrence.
     *
     * Generated from protobuf field <code>.google.container.v1.TimeWindow window = 1;</code>
     */
    private $window = null;
    /**
     * An RRULE (https://tools.ietf.org/html/rfc5545#section-3.8.5.3) for how
     * this window reccurs. They go on for the span of time between the start and
     * end time.
     * For example, to have something repeat every weekday, you'd use:
     * `FREQ=WEEKLY;BYDAY=MO,TU,WE,TH,FR`
     * To repeat some window daily (equivalent to the DailyMaintenanceWindow):
     * `FREQ=DAILY`
     * For the first weekend of every month:
     * `FREQ=MONTHLY;BYSETPOS=1;BYDAY=SA,SU`
     * This specifies how frequently the window starts. Eg, if you wanted to have
     * a 9-5 UTC-4 window every weekday, you'd use something like:
     * ```
     * start time = 2019-01-01T09:00:00-0400
     * end time = 2019-01-01T17:00:00-0400
     * recurrence = FREQ=WEEKLY;BYDAY=MO,TU,WE,TH,FR
     * ```
     * Windows can span multiple days. Eg, to make the window encompass every
     * weekend from midnight Saturday till the last minute of Sunday UTC:
     * ```
     * start time = 2019-01-05T00:00:00Z
     * end time = 2019-01-07T23:59:00Z
     * recurrence = FREQ=WEEKLY;BYDAY=SA
     * ```
     * Note the start and end time's specific dates are largely arbitrary except
     * to specify duration of the window and when it first starts.
     * The FREQ values of HOURLY, MINUTELY, and SECONDLY are not supported.
     *
     * Generated from protobuf field <code>string recurrence = 2;</code>
     */
    private $recurrence = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Container\V1\TimeWindow $window
     *           The window of the first recurrence.
     *     @type string $recurrence
     *           An RRULE (https://tools.ietf.org/html/rfc5545#section-3.8.5.3) for how
     *           this window reccurs. They go on for the span of time between the start and
     *           end time.
     *           For example, to have something repeat every weekday, you'd use:
     *           `FREQ=WEEKLY;BYDAY=MO,TU,WE,TH,FR`
     *           To repeat some window daily (equivalent to the DailyMaintenanceWindow):
     *           `FREQ=DAILY`
     *           For the first weekend of every month:
     *           `FREQ=MONTHLY;BYSETPOS=1;BYDAY=SA,SU`
     *           This specifies how frequently the window starts. Eg, if you wanted to have
     *           a 9-5 UTC-4 window every weekday, you'd use something like:
     *           ```
     *           start time = 2019-01-01T09:00:00-0400
     *           end time = 2019-01-01T17:00:00-0400
     *           recurrence = FREQ=WEEKLY;BYDAY=MO,TU,WE,TH,FR
     *           ```
     *           Windows can span multiple days. Eg, to make the window encompass every
     *           weekend from midnight Saturday till the last minute of Sunday UTC:
     *           ```
     *           start time = 2019-01-05T00:00:00Z
     *           end time = 2019-01-07T23:59:00Z
     *           recurrence = FREQ=WEEKLY;BYDAY=SA
     *           ```
     *           Note the start and end time's specific dates are largely arbitrary except
     *           to specify duration of the window and when it first starts.
     *           The FREQ values of HOURLY, MINUTELY, and SECONDLY are not supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The window of the first recurrence.
     *
     * Generated from protobuf field <code>.google.container.v1.TimeWindow window = 1;</code>
     * @return \Google\Cloud\Container\V1\TimeWindow|null
     */
    public function getWindow()
    {
        return isset($this->window) ? $this->window : null;
    }

    public function hasWindow()
    {
        return isset($this->window);
    }

    public function clearWindow()
    {
        unset($this->window);
    }

    /**
     * The window of the first recurrence.
     *
     * Generated from protobuf field <code>.google.container.v1.TimeWindow window = 1;</code>
     * @param \Google\Cloud\Container\V1\TimeWindow $var
     * @return $this
     */
    public function setWindow($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\TimeWindow::class);
        $this->window = $var;

        return $this;
    }

    /**
     * An RRULE (https://tools.ietf.org/html/rfc5545#section-3.8.5.3) for how
     * this window reccurs. They go on for the span of time between the start and
     * end time.
     * For example, to have something repeat every weekday, you'd use:
     * `FREQ=WEEKLY;BYDAY=MO,TU,WE,TH,FR`
     * To repeat some window daily (equivalent to the DailyMaintenanceWindow):
     * `FREQ=DAILY`
     * For the first weekend of every month:
     * `FREQ=MONTHLY;BYSETPOS=1;BYDAY=SA,SU`
     * This specifies how frequently the window starts. Eg, if you wanted to have
     * a 9-5 UTC-4 window every weekday, you'd use something like:
     * ```
     * start time = 2019-01-01T09:00:00-0400
     * end time = 2019-01-01T17:00:00-0400
     * recurrence = FREQ=WEEKLY;BYDAY=MO,TU,WE,TH,FR
     * ```
     * Windows can span multiple days. Eg, to make the window encompass every
     * weekend from midnight Saturday till the last minute of Sunday UTC:
     * ```
     * start time = 2019-01-05T00:00:00Z
     * end time = 2019-01-07T23:59:00Z
     * recurrence = FREQ=WEEKLY;BYDAY=SA
     * ```
     * Note the start and end time's specific dates are largely arbitrary except
     * to specify duration of the window and when it first starts.
     * The FREQ values of HOURLY, MINUTELY, and SECONDLY are not supported.
     *
     * Generated from protobuf field <code>string recurrence = 2;</code>
     * @return string
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }

    /**
     * An RRULE (https://tools.ietf.org/html/rfc5545#section-3.8.5.3) for how
     * this window reccurs. They go on for the span of time between the start and
     * end time.
     * For example, to have something repeat every weekday, you'd use:
     * `FREQ=WEEKLY;BYDAY=MO,TU,WE,TH,FR`
     * To repeat some window daily (equivalent to the DailyMaintenanceWindow):
     * `FREQ=DAILY`
     * For the first weekend of every month:
     * `FREQ=MONTHLY;BYSETPOS=1;BYDAY=SA,SU`
     * This specifies how frequently the window starts. Eg, if you wanted to have
     * a 9-5 UTC-4 window every weekday, you'd use something like:
     * ```
     * start time = 2019-01-01T09:00:00-0400
     * end time = 2019-01-01T17:00:00-0400
     * recurrence = FREQ=WEEKLY;BYDAY=MO,TU,WE,TH,FR
     * ```
     * Windows can span multiple days. Eg, to make the window encompass every
     * weekend from midnight Saturday till the last minute of Sunday UTC:
     * ```
     * start time = 2019-01-05T00:00:00Z
     * end time = 2019-01-07T23:59:00Z
     * recurrence = FREQ=WEEKLY;BYDAY=SA
     * ```
     * Note the start and end time's specific dates are largely arbitrary except
     * to specify duration of the window and when it first starts.
     * The FREQ values of HOURLY, MINUTELY, and SECONDLY are not supported.
     *
     * Generated from protobuf field <code>string recurrence = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRecurrence($var)
    {
        GPBUtil::checkString($var, True);
        $this->recurrence = $var;

        return $this;
    }

}

