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
     * @param \IDBI\PHPProto\Integrations\Integrations\v1\RegisterIntegrationParametersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterIntegrationParameters(\IDBI\PHPProto\Integrations\Integrations\v1\RegisterIntegrationParametersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.integrations.v1.Service/RegisterIntegrationParameters',
        $argument,
        ['\IDBI\PHPProto\Integrations\Integrations\v1\RegisterIntegrationParametersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IDBI\PHPProto\Integrations\Integrations\v1\GetIntegrationParametersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIntegrationParameters(\IDBI\PHPProto\Integrations\Integrations\v1\GetIntegrationParametersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.integrations.v1.Service/GetIntegrationParameters',
        $argument,
        ['\IDBI\PHPProto\Integrations\Integrations\v1\GetIntegrationParametersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \IDBI\PHPProto\Integrations\Integrations\v1\RemoveIntegrationParametersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveIntegrationParameters(\IDBI\PHPProto\Integrations\Integrations\v1\RemoveIntegrationParametersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.integrations.v1.Service/RemoveIntegrationParameters',
        $argument,
        ['\IDBI\PHPProto\Integrations\Integrations\v1\RemoveIntegrationParametersResponse', 'decode'],
        $metadata, $options);
    }

}
