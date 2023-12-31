<?php
// GENERATED CODE -- DO NOT EDIT!

namespace IDBI\PHPProto\Integrations\Tasks\v1;

/**
 */
class ServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \IDBI\PHPProto\Integrations\Tasks\v1\CreateTaskRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateTask(\IDBI\PHPProto\Integrations\Tasks\v1\CreateTaskRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.tasks.v1.Service/CreateTask',
        $argument,
        ['\IDBI\PHPProto\Integrations\Tasks\v1\CreateTaskResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IDBI\PHPProto\Integrations\Tasks\v1\GetTaskRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTask(\IDBI\PHPProto\Integrations\Tasks\v1\GetTaskRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.tasks.v1.Service/GetTask',
        $argument,
        ['\IDBI\PHPProto\Integrations\Tasks\v1\GetTaskResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IDBI\PHPProto\Integrations\Tasks\v1\GetTaskStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTaskStatus(\IDBI\PHPProto\Integrations\Tasks\v1\GetTaskStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.tasks.v1.Service/GetTaskStatus',
        $argument,
        ['\IDBI\PHPProto\Integrations\Tasks\v1\GetTaskStatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IDBI\PHPProto\Integrations\Tasks\v1\GetTaskResultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTaskResult(\IDBI\PHPProto\Integrations\Tasks\v1\GetTaskResultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.tasks.v1.Service/GetTaskResult',
        $argument,
        ['\IDBI\PHPProto\Integrations\Tasks\v1\GetTaskResultResponse', 'decode'],
        $metadata, $options);
    }

}
