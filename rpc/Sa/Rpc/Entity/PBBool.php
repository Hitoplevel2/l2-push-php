<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: entity.proto

namespace Sa\Rpc\Entity;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sa.rpc.entity.Bool</code>
 */
class PBBool extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool value = 1;</code>
     */
    protected $value = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Entity::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool value = 1;</code>
     * @return bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>bool value = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkBool($var);
        $this->value = $var;

        return $this;
    }

}

