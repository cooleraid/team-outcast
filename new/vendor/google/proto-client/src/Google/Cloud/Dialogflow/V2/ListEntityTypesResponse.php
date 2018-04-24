<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/entity_type.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [EntityTypes.ListEntityTypes][google.cloud.dialogflow.v2.EntityTypes.ListEntityTypes].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ListEntityTypesResponse</code>
 */
class ListEntityTypesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of agent entity types. There will be a maximum number of items
     * returned based on the page_size field in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType entity_types = 1;</code>
     */
    private $entity_types;
    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\EntityType::initOnce();
        parent::__construct();
    }

    /**
     * The list of agent entity types. There will be a maximum number of items
     * returned based on the page_size field in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType entity_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntityTypes()
    {
        return $this->entity_types;
    }

    /**
     * The list of agent entity types. There will be a maximum number of items
     * returned based on the page_size field in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType entity_types = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2\EntityType[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntityTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\EntityType::class);
        $this->entity_types = $arr;

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

