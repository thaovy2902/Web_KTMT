<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1beta1/registration_service.proto

namespace Google\Cloud\ServiceDirectory\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [RegistrationService.ListServices][google.cloud.servicedirectory.v1beta1.RegistrationService.ListServices].
 *
 * Generated from protobuf message <code>google.cloud.servicedirectory.v1beta1.ListServicesResponse</code>
 */
class ListServicesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of services.
     *
     * Generated from protobuf field <code>repeated .google.cloud.servicedirectory.v1beta1.Service services = 1;</code>
     */
    private $services;
    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ServiceDirectory\V1beta1\Service[]|\Google\Protobuf\Internal\RepeatedField $services
     *           The list of services.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no
     *           more results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicedirectory\V1Beta1\RegistrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of services.
     *
     * Generated from protobuf field <code>repeated .google.cloud.servicedirectory.v1beta1.Service services = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * The list of services.
     *
     * Generated from protobuf field <code>repeated .google.cloud.servicedirectory.v1beta1.Service services = 1;</code>
     * @param \Google\Cloud\ServiceDirectory\V1beta1\Service[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ServiceDirectory\V1beta1\Service::class);
        $this->services = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

