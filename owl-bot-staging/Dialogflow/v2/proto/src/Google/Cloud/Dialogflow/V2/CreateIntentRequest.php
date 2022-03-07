<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Intents.CreateIntent][google.cloud.dialogflow.v2.Intents.CreateIntent].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.CreateIntentRequest</code>
 */
class CreateIntentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent to create a intent for.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The intent to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent intent = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $intent = null;
    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $language_code = '';
    /**
     * Optional. The resource view to apply to the returned intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.IntentView intent_view = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $intent_view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The agent to create a intent for.
     *           Format: `projects/<Project ID>/agent`.
     *     @type \Google\Cloud\Dialogflow\V2\Intent $intent
     *           Required. The intent to create.
     *     @type string $language_code
     *           Optional. The language used to access language-specific data.
     *           If not specified, the agent's default language is used.
     *           For more information, see
     *           [Multilingual intent and entity
     *           data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *     @type int $intent_view
     *           Optional. The resource view to apply to the returned intent.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent to create a intent for.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The agent to create a intent for.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The intent to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent intent = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent|null
     */
    public function getIntent()
    {
        return $this->intent;
    }

    public function hasIntent()
    {
        return isset($this->intent);
    }

    public function clearIntent()
    {
        unset($this->intent);
    }

    /**
     * Required. The intent to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent intent = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent $var
     * @return $this
     */
    public function setIntent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent::class);
        $this->intent = $var;

        return $this;
    }

    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Optional. The resource view to apply to the returned intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.IntentView intent_view = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getIntentView()
    {
        return $this->intent_view;
    }

    /**
     * Optional. The resource view to apply to the returned intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.IntentView intent_view = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setIntentView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\IntentView::class);
        $this->intent_view = $var;

        return $this;
    }

}

