<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integrations/utils/v1/messages.proto

namespace IDBI\PHPProto\Integrations\Utils\v1\Metadata;

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
        $pool->internalAddGeneratedFile(
            '
�
$integrations/utils/v1/messages.protointegrations.utils.v1google/api/field_behavior.protogoogle/protobuf/wrappers.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protovalidate/validate.proto"
GetVersionRequest".
GetVersionResponse
version (	RversionB�Z0github.com/idbi/goproto/integrations/utils/v1;v1�#IDBI\\PHPProto\\Integrations\\Utils\\v1�,IDBI\\PHPProto\\Integrations\\Utils\\v1\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

