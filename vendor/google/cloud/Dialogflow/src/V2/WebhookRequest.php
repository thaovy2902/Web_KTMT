<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/webhook.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for a webhook call.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.WebhookRequest</code>
 */
class WebhookRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of detectIntent request session.
     * Can be used to identify end-user inside webhook implementation.
     * Format: `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`.
     *
     * Generated from protobuf field <code>string session = 4;</code>
     */
    private $session = '';
    /**
     * The unique identifier of the response. Contains the same value as
     * `[Streaming]DetectIntentResponse.response_id`.
     *
     * Generated from protobuf field <code>string response_id = 1;</code>
     */
    private $response_id = '';
    /**
     * The result of the conversational query or event processing. Contains the
     * same value as `[Streaming]DetectIntentResponse.query_result`.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryResult query_result = 2;</code>
     */
    private $query_result = null;
    /**
     * Optional. The contents of the original request that was passed to
     * `[Streaming]DetectIntent` call.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OriginalDetectIntentRequest original_detect_intent_request = 3;</code>
     */
    private $original_detect_intent_request = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           The unique identifier of detectIntent request session.
     *           Can be used to identify end-user inside webhook implementation.
     *           Format: `projects/<Project ID>/agent/sessions/<Session ID>`, or
     *           `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     *           ID>/sessions/<Session ID>`.
     *     @type string $response_id
     *           The unique identifier of the response. Contains the same value as
     *           `[Streaming]DetectIntentResponse.response_id`.
     *     @type \Google\Cloud\Dialogflow\V2\QueryResult $query_result
     *           The result of the conversational query or event processing. Contains the
     *           same value as `[Streaming]DetectIntentResponse.query_result`.
     *     @type \Google\Cloud\Dialogflow\V2\OriginalDetectIntentRequest $original_detect_intent_request
     *           Optional. The contents of the original request that was passed to
     *           `[Streaming]DetectIntent` call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Webhook::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of detectIntent request session.
     * Can be used to identify end-user inside webhook implementation.
     * Format: `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`.
     *
     * Generated from protobuf field <code>string session = 4;</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * The unique identifier of detectIntent request session.
     * Can be used to identify end-user inside webhook implementation.
     * Format: `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`.
     *
     * Generated from protobuf field <code>string session = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * The unique identifier of the response. Contains the same value as
     * `[Streaming]DetectIntentResponse.response_id`.
     *
     * Generated from protobuf field <code>string response_id = 1;</code>
     * @return string
     */
    public function getResponseId()
    {
        return $this->response_id;
    }

    /**
     * The unique identifier of the response. Contains the same value as
     * `[Streaming]DetectIntentResponse.response_id`.
     *
     * Generated from protobuf field <code>string response_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResponseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->response_id = $var;

        return $this;
    }

    /**
     * The result of the conversational query or event processing. Contains the
     * same value as `[Streaming]DetectIntentResponse.query_result`.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryResult query_result = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2\QueryResult|null
     */
    public function getQueryResult()
    {
        return isset($this->query_result) ? $this->query_result : null;
    }

    public function hasQueryResult()
    {
        return isset($this->query_result);
    }

    public function clearQueryResult()
    {
        unset($this->query_result);
    }

    /**
     * The result of the conversational query or event processing. Contains the
     * same value as `[Streaming]DetectIntentResponse.query_result`.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryResult query_result = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\QueryResult $var
     * @return $this
     */
    public function setQueryResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\QueryResult::class);
        $this->query_result = $var;

        return $this;
    }

    /**
     * Optional. The contents of the original request that was passed to
     * `[Streaming]DetectIntent` call.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OriginalDetectIntentRequest original_detect_intent_request = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2\OriginalDetectIntentRequest|null
     */
    public function getOriginalDetectIntentRequest()
    {
        return isset($this->original_detect_intent_request) ? $this->original_detect_intent_request : null;
    }

    public function hasOriginalDetectIntentRequest()
    {
        return isset($this->original_detect_intent_request);
    }

    public function clearOriginalDetectIntentRequest()
    {
        unset($this->original_detect_intent_request);
    }

    /**
     * Optional. The contents of the original request that was passed to
     * `[Streaming]DetectIntent` call.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OriginalDetectIntentRequest original_detect_intent_request = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2\OriginalDetectIntentRequest $var
     * @return $this
     */
    public function setOriginalDetectIntentRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\OriginalDetectIntentRequest::class);
        $this->original_detect_intent_request = $var;

        return $this;
    }

}

