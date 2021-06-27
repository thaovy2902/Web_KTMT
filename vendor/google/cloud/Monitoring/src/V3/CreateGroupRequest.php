<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `CreateGroup` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.CreateGroupRequest</code>
 */
class CreateGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project in which to create the group. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. A group definition. It is an error to define the `name` field because
     * the system assigns the name.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Group group = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $group = null;
    /**
     * If true, validate this request but do not create the group.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    private $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The project in which to create the group. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]
     *     @type \Google\Cloud\Monitoring\V3\Group $group
     *           Required. A group definition. It is an error to define the `name` field because
     *           the system assigns the name.
     *     @type bool $validate_only
     *           If true, validate this request but do not create the group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\GroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project in which to create the group. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The project in which to create the group. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. A group definition. It is an error to define the `name` field because
     * the system assigns the name.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Group group = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Monitoring\V3\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Required. A group definition. It is an error to define the `name` field because
     * the system assigns the name.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Group group = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Monitoring\V3\Group $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\Group::class);
        $this->group = $var;

        return $this;
    }

    /**
     * If true, validate this request but do not create the group.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, validate this request but do not create the group.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
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

