<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integrations/integrations/v1/service.proto

namespace IDBI\PHPProto\Integrations\Integrations\v1\Metadata;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        \IDBI\PHPProto\Integrations\Integrations\v1\Metadata\Messages::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*integrations/integrations/v1/service.protointegrations.integrations.v1google/api/field_behavior.protogoogle/protobuf/wrappers.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protovalidate/validate.proto+integrations/integrations/v1/messages.proto2�
Service�
GetIntegrations4.integrations.integrations.v1.GetIntegrationsRequest5.integrations.integrations.v1.GetIntegrationsResponse"���/v1/integrations�
RegisterIntegration8.integrations.integrations.v1.RegisterIntegrationRequest9.integrations.integrations.v1.RegisterIntegrationResponse"���:*"/v1/integrations�
RegisterIntegrationParametersB.integrations.integrations.v1.RegisterIntegrationParametersRequestC.integrations.integrations.v1.RegisterIntegrationParametersResponse"7���1:*",/v1/integrations/{integration_id}/parameters�
GetIntegrationParameters=.integrations.integrations.v1.GetIntegrationParametersRequest>.integrations.integrations.v1.GetIntegrationParametersResponse"4���.,/v1/integrations/{integration_id}/parameters�
RemoveIntegrationParameters@.integrations.integrations.v1.RemoveIntegrationParametersRequestA.integrations.integrations.v1.RemoveIntegrationParametersResponse"C���=*;/v1/integrations/{integration_id}/parameters/{parameter_id}B�Z7github.com/idbi/goproto/integrations/integrations/v1;v1�*IDBI\\PHPProto\\Integrations\\Integrations\\v1�3IDBI\\PHPProto\\Integrations\\Integrations\\v1\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

