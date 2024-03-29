<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integrations/entities/v1/integration.proto

namespace IDBI\PHPProto\Integrations\Entities\v1\Metadata;

class Integration
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
        \IDBI\PHPProto\Integrations\Entities\v1\Metadata\Owner::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*integrations/entities/v1/integration.protointegrations.entities.v1google/api/field_behavior.protogoogle/protobuf/wrappers.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protovalidate/validate.proto$integrations/entities/v1/owner.proto"�
Integration
id (	B�Br��Rid
name (	B
�Br�Rname,
description (	B
�Br�Rdescription

is_enabled (R	isEnabled!
type_id (	B�Br�RtypeId5
owner (2.integrations.entities.v1.OwnerRowner9

created_at (2.google.protobuf.TimestampR	createdAt"�
IntegrationType
id (	B�Br��Rid
name (	B
�Br�Rname,
description (	B
�Br�Rdescription9

created_at (2.google.protobuf.TimestampR	createdAt"�
IntegrationProperty
id (	B�Br��Rid
name (	B
�Br�Rname
key (	B
�Br�Rkey 
value (	B
�Br�Rvalue
is_editable (R
isEditableB�Z3github.com/idbi/goproto/integrations/entities/v1;v1�&IDBI\\PHPProto\\Integrations\\Entities\\v1�/IDBI\\PHPProto\\Integrations\\Entities\\v1\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

