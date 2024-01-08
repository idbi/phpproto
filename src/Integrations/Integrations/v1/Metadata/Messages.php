<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integrations/integrations/v1/messages.proto

namespace IDBI\PHPProto\Integrations\Integrations\v1\Metadata;

class Messages
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
        \IDBI\PHPProto\Integrations\Entities\v1\Metadata\Integration::initOnce();
        \IDBI\PHPProto\Integrations\Entities\v1\Metadata\Result::initOnce();
        \IDBI\PHPProto\Integrations\Entities\v1\Metadata\Owner::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+integrations/integrations/v1/messages.protointegrations.integrations.v1google/api/field_behavior.protogoogle/protobuf/wrappers.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protovalidate/validate.proto*integrations/entities/v1/integration.proto%integrations/entities/v1/result.proto$integrations/entities/v1/owner.proto"?
GetIntegrationsRequest%
owner_id (	B
�Br�RownerId"�
GetIntegrationsResponse8
result (2 .integrations.entities.v1.ResultRresultI
integrations (2%.integrations.entities.v1.IntegrationRintegrations"d
RegisterIntegrationRequest#
owner_id (	B�Br�RownerId!
type_id (	B�Br�RtypeId"�
RegisterIntegrationResponse8
result (2 .integrations.entities.v1.ResultRresultG
integration (2%.integrations.entities.v1.IntegrationRintegration"�
$RegisterIntegrationPropertiesRequest/
integration_id (	B�Br�RintegrationIdB

properties (2".integrations.entities.v1.PropertyR
properties"a
%RegisterIntegrationPropertiesResponse8
result (2 .integrations.entities.v1.ResultRresult"R
GetIntegrationPropertiesRequest/
integration_id (	B�Br�RintegrationId"�
 GetIntegrationPropertiesResponse8
result (2 .integrations.entities.v1.ResultRresultB

properties (2".integrations.entities.v1.PropertyR
properties"�
"RemoveIntegrationPropertiesRequest/
integration_id (	B�Br�RintegrationId9
property_ids (	B�B�d"r��RpropertyIds"_
#RemoveIntegrationPropertiesResponse8
result (2 .integrations.entities.v1.ResultRresultB�Z7github.com/idbi/goproto/integrations/integrations/v1;v1�*IDBI\\PHPProto\\Integrations\\Integrations\\v1�3IDBI\\PHPProto\\Integrations\\Integrations\\v1\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

