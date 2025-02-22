<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads.proto

namespace GPBMetadata\Google\Cloud\Assuredworkloads\V1Beta1;

class Assuredworkloads
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�3
<google/cloud/assuredworkloads/v1beta1/assuredworkloads.proto%google.cloud.assuredworkloads.v1beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateWorkloadRequest@
parent (	B0�A�A*(assuredworkloads.googleapis.com/WorkloadF
workload (2/.google.cloud.assuredworkloads.v1beta1.WorkloadB�A
external_id (	B�A"�
UpdateWorkloadRequestF
workload (2/.google.cloud.assuredworkloads.v1beta1.WorkloadB�A4
update_mask (2.google.protobuf.FieldMaskB�A"j
DeleteWorkloadRequest>
name (	B0�A�A*
(assuredworkloads.googleapis.com/Workload
etag (	B�A"T
GetWorkloadRequest>
name (	B0�A�A*
(assuredworkloads.googleapis.com/Workload"�
ListWorkloadsRequest@
parent (	B0�A�A*(assuredworkloads.googleapis.com/Workload
	page_size (

page_token (	
filter (	"t
ListWorkloadsResponseB
	workloads (2/.google.cloud.assuredworkloads.v1beta1.Workload
next_page_token (	"�
Workload
name (	B�A
display_name (	B�AT
	resources (2<.google.cloud.assuredworkloads.v1beta1.Workload.ResourceInfoB�Ac
compliance_regime (2@.google.cloud.assuredworkloads.v1beta1.Workload.ComplianceRegimeB�A�A7
create_time (2.google.protobuf.TimestampB�A�A
billing_account (	B�A`
il4_settings (2;.google.cloud.assuredworkloads.v1beta1.Workload.IL4SettingsB�A�A�AH b
cjis_settings (2<.google.cloud.assuredworkloads.v1beta1.Workload.CJISSettingsB�A�A�AH q
fedramp_high_settings (2C.google.cloud.assuredworkloads.v1beta1.Workload.FedrampHighSettingsB�A�A�AH y
fedramp_moderate_settings (2G.google.cloud.assuredworkloads.v1beta1.Workload.FedrampModerateSettingsB�A�A�AH 
etag	 (	B�AP
labels
 (2;.google.cloud.assuredworkloads.v1beta1.Workload.LabelsEntryB�A)
provisioned_resources_parent (	B�AV
kms_settings (2;.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettingsB�A`
resource_settings (2@.google.cloud.assuredworkloads.v1beta1.Workload.ResourceSettingsB�Ae
kaj_enrollment_state (2B.google.cloud.assuredworkloads.v1beta1.Workload.KajEnrollmentStateB�A&
enable_sovereign_controls (B�Ak
saa_enrollment_response (2E.google.cloud.assuredworkloads.v1beta1.Workload.SaaEnrollmentResponseB�A�
ResourceInfo
resource_id (`
resource_type (2I.google.cloud.assuredworkloads.v1beta1.Workload.ResourceInfo.ResourceType"�
ResourceType
RESOURCE_TYPE_UNSPECIFIED 
CONSUMER_PROJECT
CONSUMER_FOLDER
ENCRYPTION_KEYS_PROJECT
KEYRING�
KMSSettingsA
next_rotation_time (2.google.protobuf.TimestampB	�A�A�A=
rotation_period (2.google.protobuf.DurationB	�A�A�Ao
IL4Settings\\
kms_settings (2;.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettingsB	�A�A�A:p
CJISSettings\\
kms_settings (2;.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettingsB	�A�A�A:w
FedrampHighSettings\\
kms_settings (2;.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettingsB	�A�A�A:{
FedrampModerateSettings\\
kms_settings (2;.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettingsB	�A�A�A:�
ResourceSettings
resource_id (	`
resource_type (2I.google.cloud.assuredworkloads.v1beta1.Workload.ResourceInfo.ResourceType
display_name (	�
SaaEnrollmentResponsek
setup_status (2P.google.cloud.assuredworkloads.v1beta1.Workload.SaaEnrollmentResponse.SetupStateH �f
setup_errors (2P.google.cloud.assuredworkloads.v1beta1.Workload.SaaEnrollmentResponse.SetupError"R

SetupState
SETUP_STATE_UNSPECIFIED 
STATUS_PENDING
STATUS_COMPLETE"�

SetupError
SETUP_ERROR_UNSPECIFIED 
ERROR_INVALID_BASE_SETUP&
"ERROR_MISSING_EXTERNAL_SIGNING_KEY#
ERROR_NOT_ALL_SERVICES_ENROLLED
ERROR_SETUP_CHECK_FAILEDB
_setup_status-
LabelsEntry
key (	
value (	:8"�
ComplianceRegime!
COMPLIANCE_REGIME_UNSPECIFIED 
IL4
CJIS
FEDRAMP_HIGH
FEDRAMP_MODERATE
US_REGIONAL_ACCESS	
HIPAA
HITRUST
EU_REGIONS_AND_SUPPORT
CA_REGIONS_AND_SUPPORT	"
KajEnrollmentState$
 KAJ_ENROLLMENT_STATE_UNSPECIFIED  
KAJ_ENROLLMENT_STATE_PENDING!
KAJ_ENROLLMENT_STATE_COMPLETE:u�Ar
(assuredworkloads.googleapis.com/WorkloadForganizations/{organization}/locations/{location}/workloads/{workload}B
compliance_regime_settings"�
CreateWorkloadOperationMetadata4
create_time (2.google.protobuf.TimestampB�A
display_name (	B�A
parent (	B�A`
compliance_regime (2@.google.cloud.assuredworkloads.v1beta1.Workload.ComplianceRegimeB�A`
resource_settings (2@.google.cloud.assuredworkloads.v1beta1.Workload.ResourceSettingsB�A2�	
AssuredWorkloadsService�
CreateWorkload<.google.cloud.assuredworkloads.v1beta1.CreateWorkloadRequest.google.longrunning.Operation"����C"7/v1beta1/{parent=organizations/*/locations/*}/workloads:workload�Aparent,workload�A+
WorkloadCreateWorkloadOperationMetadata�
UpdateWorkload<.google.cloud.assuredworkloads.v1beta1.UpdateWorkloadRequest/.google.cloud.assuredworkloads.v1beta1.Workload"i���L2@/v1beta1/{workload.name=organizations/*/locations/*/workloads/*}:workload�Aworkload,update_mask�
DeleteWorkload<.google.cloud.assuredworkloads.v1beta1.DeleteWorkloadRequest.google.protobuf.Empty"F���9*7/v1beta1/{name=organizations/*/locations/*/workloads/*}�Aname�
GetWorkload9.google.cloud.assuredworkloads.v1beta1.GetWorkloadRequest/.google.cloud.assuredworkloads.v1beta1.Workload"F���97/v1beta1/{name=organizations/*/locations/*/workloads/*}�Aname�
ListWorkloads;.google.cloud.assuredworkloads.v1beta1.ListWorkloadsRequest<.google.cloud.assuredworkloads.v1beta1.ListWorkloadsResponse"H���97/v1beta1/{parent=organizations/*/locations/*}/workloads�AparentS�Aassuredworkloads.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
)com.google.cloud.assuredworkloads.v1beta1BAssuredworkloadsProtoPZUgoogle.golang.org/genproto/googleapis/cloud/assuredworkloads/v1beta1;assuredworkloads�%Google.Cloud.AssuredWorkloads.V1Beta1�%Google\\Cloud\\AssuredWorkloads\\V1beta1�(Google::Cloud::AssuredWorkloads::V1beta1�A]
(assuredworkloads.googleapis.com/Location1organizations/{organization}/locations/{location}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

