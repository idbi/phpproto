<?php
// GENERATED CODE -- DO NOT EDIT!

namespace IDBI\PHPProto\Integrations\Integrations\v1;

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
     * @param \IDBI\PHPProto\Integrations\Integrations\v1\GetIntegrationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIntegrations(\IDBI\PHPProto\Integrations\Integrations\v1\GetIntegrationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.integrations.v1.Service/GetIntegrations',
        $argument,
        ['\IDBI\PHPProto\Integrations\Integrations\v1\GetIntegrationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IDBI\PHPProto\Integrations\Integrations\v1\RegisterIntegrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterIntegration(\IDBI\PHPProto\Integrations\Integrations\v1\RegisterIntegrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.integrations.v1.Service/RegisterIntegration',
        $argument,
        ['\IDBI\PHPProto\Integrations\Integrations\v1\RegisterIntegrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IDBI\PHPProto\Integrations\Integrations\v1\RegisterIntegrationPropertiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterIntegrationProperties(\IDBI\PHPProto\Integrations\Integrations\v1\RegisterIntegrationPropertiesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.integrations.v1.Service/RegisterIntegrationProperties',
        $argument,
        ['\IDBI\PHPProto\Integrations\Integrations\v1\RegisterIntegrationPropertiesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IDBI\PHPProto\Integrations\Integrations\v1\GetIntegrationPropertiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIntegrationProperties(\IDBI\PHPProto\Integrations\Integrations\v1\GetIntegrationPropertiesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.integrations.v1.Service/GetIntegrationProperties',
        $argument,
        ['\IDBI\PHPProto\Integrations\Integrations\v1\GetIntegrationPropertiesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IDBI\PHPProto\Integrations\Integrations\v1\UpdateIntegrationPropertyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateIntegrationProperty(\IDBI\PHPProto\Integrations\Integrations\v1\UpdateIntegrationPropertyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.integrations.v1.Service/UpdateIntegrationProperty',
        $argument,
        ['\IDBI\PHPProto\Integrations\Integrations\v1\UpdateIntegrationPropertyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IDBI\PHPProto\Integrations\Integrations\v1\RemoveIntegrationPropertyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveIntegrationProperty(\IDBI\PHPProto\Integrations\Integrations\v1\RemoveIntegrationPropertyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.integrations.v1.Service/RemoveIntegrationProperty',
        $argument,
        ['\IDBI\PHPProto\Integrations\Integrations\v1\RemoveIntegrationPropertyResponse', 'decode'],
        $metadata, $options);
    }

}
