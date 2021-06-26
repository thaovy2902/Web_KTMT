<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CloudChannelService.ProvisionCloudIdentity][google.cloud.channel.v1.CloudChannelService.ProvisionCloudIdentity]
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ProvisionCloudIdentityRequest</code>
 */
class ProvisionCloudIdentityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the customer.
     * Format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string customer = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $customer = '';
    /**
     * CloudIdentity-specific customer information.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo cloud_identity_info = 2;</code>
     */
    private $cloud_identity_info = null;
    /**
     * Admin user information.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.AdminUser user = 3;</code>
     */
    private $user = null;
    /**
     * Validate the request and preview the review, but do not post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     */
    private $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer
     *           Required. Resource name of the customer.
     *           Format: accounts/{account_id}/customers/{customer_id}
     *     @type \Google\Cloud\Channel\V1\CloudIdentityInfo $cloud_identity_info
     *           CloudIdentity-specific customer information.
     *     @type \Google\Cloud\Channel\V1\AdminUser $user
     *           Admin user information.
     *     @type bool $validate_only
     *           Validate the request and preview the review, but do not post it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the customer.
     * Format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string customer = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Required. Resource name of the customer.
     * Format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string customer = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer = $var;

        return $this;
    }

    /**
     * CloudIdentity-specific customer information.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo cloud_identity_info = 2;</code>
     * @return \Google\Cloud\Channel\V1\CloudIdentityInfo|null
     */
    public function getCloudIdentityInfo()
    {
        return isset($this->cloud_identity_info) ? $this->cloud_identity_info : null;
    }

    public function hasCloudIdentityInfo()
    {
        return isset($this->cloud_identity_info);
    }

    public function clearCloudIdentityInfo()
    {
        unset($this->cloud_identity_info);
    }

    /**
     * CloudIdentity-specific customer information.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo cloud_identity_info = 2;</code>
     * @param \Google\Cloud\Channel\V1\CloudIdentityInfo $var
     * @return $this
     */
    public function setCloudIdentityInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\CloudIdentityInfo::class);
        $this->cloud_identity_info = $var;

        return $this;
    }

    /**
     * Admin user information.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.AdminUser user = 3;</code>
     * @return \Google\Cloud\Channel\V1\AdminUser|null
     */
    public function getUser()
    {
        return isset($this->user) ? $this->user : null;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Admin user information.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.AdminUser user = 3;</code>
     * @param \Google\Cloud\Channel\V1\AdminUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\AdminUser::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Validate the request and preview the review, but do not post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Validate the request and preview the review, but do not post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

