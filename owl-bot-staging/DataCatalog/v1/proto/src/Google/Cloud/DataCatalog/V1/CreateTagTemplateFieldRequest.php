<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CreateTagTemplateField][google.cloud.datacatalog.v1.DataCatalog.CreateTagTemplateField].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest</code>
 */
class CreateTagTemplateFieldRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project and the template location
     * [region](https://cloud.google.com/data-catalog/docs/concepts/regions).
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ID of the tag template field to create.
     * Note: Adding a required field to an existing template is *not* allowed.
     * Field IDs can contain letters (both uppercase and lowercase), numbers
     * (0-9), underscores (_) and dashes (-). Field IDs must be at least 1
     * character long and at most 128 characters long. Field IDs must also be
     * unique within their template.
     *
     * Generated from protobuf field <code>string tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tag_template_field_id = '';
    /**
     * Required. The tag template field to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tag_template_field = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the project and the template location
     *           [region](https://cloud.google.com/data-catalog/docs/concepts/regions).
     *     @type string $tag_template_field_id
     *           Required. The ID of the tag template field to create.
     *           Note: Adding a required field to an existing template is *not* allowed.
     *           Field IDs can contain letters (both uppercase and lowercase), numbers
     *           (0-9), underscores (_) and dashes (-). Field IDs must be at least 1
     *           character long and at most 128 characters long. Field IDs must also be
     *           unique within their template.
     *     @type \Google\Cloud\DataCatalog\V1\TagTemplateField $tag_template_field
     *           Required. The tag template field to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project and the template location
     * [region](https://cloud.google.com/data-catalog/docs/concepts/regions).
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the project and the template location
     * [region](https://cloud.google.com/data-catalog/docs/concepts/regions).
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
     * Required. The ID of the tag template field to create.
     * Note: Adding a required field to an existing template is *not* allowed.
     * Field IDs can contain letters (both uppercase and lowercase), numbers
     * (0-9), underscores (_) and dashes (-). Field IDs must be at least 1
     * character long and at most 128 characters long. Field IDs must also be
     * unique within their template.
     *
     * Generated from protobuf field <code>string tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTagTemplateFieldId()
    {
        return $this->tag_template_field_id;
    }

    /**
     * Required. The ID of the tag template field to create.
     * Note: Adding a required field to an existing template is *not* allowed.
     * Field IDs can contain letters (both uppercase and lowercase), numbers
     * (0-9), underscores (_) and dashes (-). Field IDs must be at least 1
     * character long and at most 128 characters long. Field IDs must also be
     * unique within their template.
     *
     * Generated from protobuf field <code>string tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTagTemplateFieldId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag_template_field_id = $var;

        return $this;
    }

    /**
     * Required. The tag template field to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataCatalog\V1\TagTemplateField|null
     */
    public function getTagTemplateField()
    {
        return $this->tag_template_field;
    }

    public function hasTagTemplateField()
    {
        return isset($this->tag_template_field);
    }

    public function clearTagTemplateField()
    {
        unset($this->tag_template_field);
    }

    /**
     * Required. The tag template field to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataCatalog\V1\TagTemplateField $var
     * @return $this
     */
    public function setTagTemplateField($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\TagTemplateField::class);
        $this->tag_template_field = $var;

        return $this;
    }

}

