<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/run_asset_discovery_response.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1;

class RunAssetDiscoveryResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Hgoogle/cloud/securitycenter/v1p1beta1/run_asset_discovery_response.proto%google.cloud.securitycenter.v1p1beta1google/api/annotations.proto"�
RunAssetDiscoveryResponseU
state (2F.google.cloud.securitycenter.v1p1beta1.RunAssetDiscoveryResponse.State+
duration (2.google.protobuf.Duration"M
State
STATE_UNSPECIFIED 
	COMPLETED

SUPERSEDED

TERMINATEDB�
)com.google.cloud.securitycenter.v1p1beta1PZSgoogle.golang.org/genproto/googleapis/cloud/securitycenter/v1p1beta1;securitycenter�%Google.Cloud.SecurityCenter.V1P1Beta1�%Google\\Cloud\\SecurityCenter\\V1p1beta1�(Google::Cloud::SecurityCenter::V1p1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

