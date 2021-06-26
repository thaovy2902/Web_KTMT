<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration that allows for slower scale in so that even if Autoscaler recommends an abrupt scale in of a MIG, it will be throttled as specified by the parameters below.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AutoscalingPolicyScaleInControl</code>
 */
class AutoscalingPolicyScaleInControl extends \Google\Protobuf\Internal\Message
{
    /**
     * Maximum allowed number (or %) of VMs that can be deducted from the peak recommendation during the window autoscaler looks at when computing recommendations. Possibly all these VMs can be deleted at once so user service needs to be prepared to lose that many VMs in one step.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.FixedOrPercent max_scaled_in_replicas = 180710123;</code>
     */
    private $max_scaled_in_replicas = null;
    /**
     * How far back autoscaling looks when computing recommendations to include directives regarding slower scale in, as described above.
     *
     * Generated from protobuf field <code>int32 time_window_sec = 36405300;</code>
     */
    private $time_window_sec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\FixedOrPercent $max_scaled_in_replicas
     *           Maximum allowed number (or %) of VMs that can be deducted from the peak recommendation during the window autoscaler looks at when computing recommendations. Possibly all these VMs can be deleted at once so user service needs to be prepared to lose that many VMs in one step.
     *     @type int $time_window_sec
     *           How far back autoscaling looks when computing recommendations to include directives regarding slower scale in, as described above.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Maximum allowed number (or %) of VMs that can be deducted from the peak recommendation during the window autoscaler looks at when computing recommendations. Possibly all these VMs can be deleted at once so user service needs to be prepared to lose that many VMs in one step.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.FixedOrPercent max_scaled_in_replicas = 180710123;</code>
     * @return \Google\Cloud\Compute\V1\FixedOrPercent|null
     */
    public function getMaxScaledInReplicas()
    {
        return isset($this->max_scaled_in_replicas) ? $this->max_scaled_in_replicas : null;
    }

    public function hasMaxScaledInReplicas()
    {
        return isset($this->max_scaled_in_replicas);
    }

    public function clearMaxScaledInReplicas()
    {
        unset($this->max_scaled_in_replicas);
    }

    /**
     * Maximum allowed number (or %) of VMs that can be deducted from the peak recommendation during the window autoscaler looks at when computing recommendations. Possibly all these VMs can be deleted at once so user service needs to be prepared to lose that many VMs in one step.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.FixedOrPercent max_scaled_in_replicas = 180710123;</code>
     * @param \Google\Cloud\Compute\V1\FixedOrPercent $var
     * @return $this
     */
    public function setMaxScaledInReplicas($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\FixedOrPercent::class);
        $this->max_scaled_in_replicas = $var;

        return $this;
    }

    /**
     * How far back autoscaling looks when computing recommendations to include directives regarding slower scale in, as described above.
     *
     * Generated from protobuf field <code>int32 time_window_sec = 36405300;</code>
     * @return int
     */
    public function getTimeWindowSec()
    {
        return isset($this->time_window_sec) ? $this->time_window_sec : 0;
    }

    public function hasTimeWindowSec()
    {
        return isset($this->time_window_sec);
    }

    public function clearTimeWindowSec()
    {
        unset($this->time_window_sec);
    }

    /**
     * How far back autoscaling looks when computing recommendations to include directives regarding slower scale in, as described above.
     *
     * Generated from protobuf field <code>int32 time_window_sec = 36405300;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeWindowSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->time_window_sec = $var;

        return $this;
    }

}
