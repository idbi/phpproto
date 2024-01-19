<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integrations/tasks/v1/messages.proto

namespace IDBI\PHPProto\Integrations\Tasks\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>integrations.tasks.v1.GetTasksRequest</code>
 */
class GetTasksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string integration_id = 1 [json_name = "integrationId", (.validate.rules) = {</code>
     */
    protected $integration_id = '';
    /**
     * Generated from protobuf field <code>uint32 page_size = 2 [json_name = "pageSize", (.validate.rules) = {</code>
     */
    protected $page_size = 0;
    /**
     * Generated from protobuf field <code>string page_token = 3 [json_name = "pageToken", (.validate.rules) = {</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $integration_id
     *     @type int $page_size
     *     @type string $page_token
     * }
     */
    public function __construct($data = NULL) {
        \IDBI\PHPProto\Integrations\Tasks\v1\Metadata\Messages::initOnce();
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
     * Generated from protobuf field <code>uint32 page_size = 2 [json_name = "pageSize", (.validate.rules) = {</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Generated from protobuf field <code>uint32 page_size = 2 [json_name = "pageSize", (.validate.rules) = {</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string page_token = 3 [json_name = "pageToken", (.validate.rules) = {</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Generated from protobuf field <code>string page_token = 3 [json_name = "pageToken", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

