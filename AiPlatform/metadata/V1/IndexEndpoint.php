<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_endpoint.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class IndexEndpoint
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MachineResources::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/aiplatform/v1/index_endpoint.protogoogle.cloud.aiplatform.v1google/api/resource.proto2google/cloud/aiplatform/v1/machine_resources.protogoogle/protobuf/timestamp.proto"�
IndexEndpoint
name (	B�A
display_name (	B�A
description (	H
deployed_indexes (2).google.cloud.aiplatform.v1.DeployedIndexB�A
etag (	E
labels (25.google.cloud.aiplatform.v1.IndexEndpoint.LabelsEntry4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
network	 (	B�A+
enable_private_service_connect
 (B�A-
LabelsEntry
key (	
value (	:8:u�Ar
\'aiplatform.googleapis.com/IndexEndpointGprojects/{project}/locations/{location}/indexEndpoints/{index_endpoint}"�
DeployedIndex
id (	B�A6
index (	B\'�A�A!
aiplatform.googleapis.com/Index
display_name (	4
create_time (2.google.protobuf.TimestampB�AQ
private_endpoints (21.google.cloud.aiplatform.v1.IndexPrivateEndpointsB�A8
index_sync_time (2.google.protobuf.TimestampB�AP
automatic_resources (2..google.cloud.aiplatform.v1.AutomaticResourcesB�AP
dedicated_resources (2..google.cloud.aiplatform.v1.DedicatedResourcesB�A"
enable_access_logging (B�A\\
deployed_index_auth_config	 (23.google.cloud.aiplatform.v1.DeployedIndexAuthConfigB�A
reserved_ip_ranges
 (	B�A
deployment_group (	B�A"�
DeployedIndexAuthConfigW
auth_provider (2@.google.cloud.aiplatform.v1.DeployedIndexAuthConfig.AuthProvider:
AuthProvider
	audiences (	
allowed_issuers (	"Y
IndexPrivateEndpoints
match_grpc_address (	B�A
service_attachment (	B�AB�
com.google.cloud.aiplatform.v1BIndexEndpointProtoPZDgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1;aiplatform�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

