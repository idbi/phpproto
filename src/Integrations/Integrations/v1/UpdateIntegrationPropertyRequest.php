<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integrations/integrations/v1/messages.proto

namespace IDBI\PHPProto\Integrations\Integrations\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>integrations.integrations.v1.UpdateIntegrationPropertyRequest</code>
 */
class UpdateIntegrationPropertyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string integration_id = 1 [json_name = "integrationId", (.validate.rules) = {</code>
     */
    protected $integration_id = '';
    /**
     * Generated from protobuf field <code>.integrations.entities.v1.IntegrationProperty property = 2 [json_name = "property"];</code>
     */
    protected $property = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $integration_id
     *     @type \IDBI\PHPProto\Integrations\Entities\v1\IntegrationProperty $property
     * }
     */
    public function __construct($data = NULL) {
        \IDBI\PHPProto\Integrations\Integrations\v1\Metadata\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string integration_id = 1 [json_name = "integrationId", (.validate.rules) = {</code>
     * @return string
     */
    public function getIntegrationId()
    {
        return $this->integration_id;
    }

    /**
     * Generated from protobuf field <code>string integration_id = 1 [json_name = "integrationId", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIntegrationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->integration_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.integrations.entities.v1.IntegrationProperty property = 2 [json_name = "property"];</code>
     * @return \IDBI\PHPProto\Integrations\Entities\v1\IntegrationProperty|null
     */
    public function getProperty()
    {
        return $this->property;
    }

    public function hasProperty()
    {
        return isset($this->property);
    }

    public function clearProperty()
    {
        unset($this->property);
    }

    /**
     * Generated from protobuf field <code>.integrations.entities.v1.IntegrationProperty property = 2 [json_name = "property"];</code>
     * @param \IDBI\PHPProto\Integrations\Entities\v1\IntegrationProperty $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkMessage($var, \IDBI\PHPProto\Integrations\Entities\v1\IntegrationProperty::class);
        $this->property = $var;

        return $this;
    }

}
