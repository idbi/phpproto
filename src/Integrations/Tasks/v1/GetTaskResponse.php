<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integrations/tasks/v1/messages.proto

namespace IDBI\PHPProto\Integrations\Tasks\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>integrations.tasks.v1.GetTaskResponse</code>
 */
class GetTaskResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.integrations.entities.v1.Task task = 1 [json_name = "task"];</code>
     */
    protected $task = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \IDBI\PHPProto\Integrations\Entities\v1\Task $task
     * }
     */
    public function __construct($data = NULL) {
        \IDBI\PHPProto\Integrations\Tasks\v1\Metadata\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.integrations.entities.v1.Task task = 1 [json_name = "task"];</code>
     * @return \IDBI\PHPProto\Integrations\Entities\v1\Task|null
     */
    public function getTask()
    {
        return $this->task;
    }

    public function hasTask()
    {
        return isset($this->task);
    }

    public function clearTask()
    {
        unset($this->task);
    }

    /**
     * Generated from protobuf field <code>.integrations.entities.v1.Task task = 1 [json_name = "task"];</code>
     * @param \IDBI\PHPProto\Integrations\Entities\v1\Task $var
     * @return $this
     */
    public function setTask($var)
    {
        GPBUtil::checkMessage($var, \IDBI\PHPProto\Integrations\Entities\v1\Task::class);
        $this->task = $var;

        return $this;
    }

}

