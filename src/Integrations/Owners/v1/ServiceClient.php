<?php
// GENERATED CODE -- DO NOT EDIT!

namespace IDBI\PHPProto\Integrations\Owners\v1;

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
     * @param \IDBI\PHPProto\Integrations\Owners\v1\CreateOwnerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateOwner(\IDBI\PHPProto\Integrations\Owners\v1\CreateOwnerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/integrations.owners.v1.Service/CreateOwner',
        $argument,
        ['\IDBI\PHPProto\Integrations\Owners\v1\CreateOwnerResponse', 'decode'],
        $metadata, $options);
    }

}
