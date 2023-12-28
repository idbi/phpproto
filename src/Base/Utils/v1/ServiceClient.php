<?php
// GENERATED CODE -- DO NOT EDIT!

namespace IDBI\PHPProto\Base\Utils\v1;

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
     * @param \IDBI\PHPProto\Base\Utils\v1\GetVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetVersion(\IDBI\PHPProto\Base\Utils\v1\GetVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/base.utils.v1.Service/GetVersion',
        $argument,
        ['\IDBI\PHPProto\Base\Utils\v1\GetVersionResponse', 'decode'],
        $metadata, $options);
    }

}
