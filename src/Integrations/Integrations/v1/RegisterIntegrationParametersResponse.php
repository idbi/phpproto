<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integrations/integrations/v1/messages.proto

namespace IDBI\PHPProto\Integrations\Integrations\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>integrations.integrations.v1.RegisterIntegrationParametersResponse</code>
 */
class RegisterIntegrationParametersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.integrations.entities.v1.Result result = 1 [json_name = "result"];</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \IDBI\PHPProto\Integrations\Entities\v1\Result $result
     * }
     */
    public function __construct($data = NULL) {
        \IDBI\PHPProto\Integrations\Integrations\v1\Metadata\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.integrations.entities.v1.Result result = 1 [json_name = "result"];</code>
     * @return \IDBI\PHPProto\Integrations\Entities\v1\Result|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Generated from protobuf field <code>.integrations.entities.v1.Result result = 1 [json_name = "result"];</code>
     * @param \IDBI\PHPProto\Integrations\Entities\v1\Result $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \IDBI\PHPProto\Integrations\Entities\v1\Result::class);
        $this->result = $var;

        return $this;
    }

}

