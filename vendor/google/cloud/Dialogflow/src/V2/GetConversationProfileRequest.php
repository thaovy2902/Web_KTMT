<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [ConversationProfiles.GetConversationProfile][google.cloud.dialogflow.v2.ConversationProfiles.GetConversationProfile].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.GetConversationProfileRequest</code>
 */
class GetConversationProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the conversation profile.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversationProfiles/<Conversation Profile ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the conversation profile.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversationProfiles/<Conversation Profile ID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the conversation profile.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversationProfiles/<Conversation Profile ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the conversation profile.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversationProfiles/<Conversation Profile ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

