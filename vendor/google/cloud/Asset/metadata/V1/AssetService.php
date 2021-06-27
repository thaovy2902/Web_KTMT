<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace GPBMetadata\Google\Cloud\Asset\V1;

class AssetService
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
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Expr::initOnce();
        $pool->internalAddGeneratedFile(
            '
�>
)google/cloud/asset/v1/asset_service.protogoogle.cloud.asset.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"google/cloud/asset/v1/assets.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/type/expr.proto"�
ExportAssetsRequest7
parent (	B\'�A�A!cloudasset.googleapis.com/Asset-
	read_time (2.google.protobuf.Timestamp
asset_types (	8
content_type (2".google.cloud.asset.v1.ContentType?
output_config (2#.google.cloud.asset.v1.OutputConfigB�A"�
ExportAssetsResponse-
	read_time (2.google.protobuf.Timestamp:
output_config (2#.google.cloud.asset.v1.OutputConfig:
output_result (2#.google.cloud.asset.v1.OutputResult"�
BatchGetAssetsHistoryRequest7
parent (	B\'�A�A!cloudasset.googleapis.com/Asset
asset_names (	=
content_type (2".google.cloud.asset.v1.ContentTypeB�A@
read_time_window (2!.google.cloud.asset.v1.TimeWindowB�A"U
BatchGetAssetsHistoryResponse4
assets (2$.google.cloud.asset.v1.TemporalAsset"n
CreateFeedRequest
parent (	B�A
feed_id (	B�A.
feed (2.google.cloud.asset.v1.FeedB�A"F
GetFeedRequest4
name (	B&�A�A 
cloudasset.googleapis.com/Feed"\'
ListFeedsRequest
parent (	B�A"?
ListFeedsResponse*
feeds (2.google.cloud.asset.v1.Feed"y
UpdateFeedRequest.
feed (2.google.cloud.asset.v1.FeedB�A4
update_mask (2.google.protobuf.FieldMaskB�A"I
DeleteFeedRequest4
name (	B&�A�A 
cloudasset.googleapis.com/Feed"�
OutputConfig@
gcs_destination (2%.google.cloud.asset.v1.GcsDestinationH J
bigquery_destination (2*.google.cloud.asset.v1.BigQueryDestinationH B
destination"V
OutputResult<

gcs_result (2&.google.cloud.asset.v1.GcsOutputResultH B
result"
GcsOutputResult
uris (	"C
GcsDestination
uri (	H 

uri_prefix (	H B

object_uri"�
BigQueryDestination
dataset (	B�A
table (	B�A
force (<
partition_spec (2$.google.cloud.asset.v1.PartitionSpec&
separate_tables_per_asset_type ("�
PartitionSpecH
partition_key (21.google.cloud.asset.v1.PartitionSpec.PartitionKey"N
PartitionKey
PARTITION_KEY_UNSPECIFIED 
	READ_TIME
REQUEST_TIME""
PubsubDestination
topic (	"i
FeedOutputConfigF
pubsub_destination (2(.google.cloud.asset.v1.PubsubDestinationH B
destination"�
Feed
name (	B�A
asset_names (	
asset_types (	8
content_type (2".google.cloud.asset.v1.ContentTypeH
feed_output_config (2\'.google.cloud.asset.v1.FeedOutputConfigB�A$
	condition (2.google.type.Expr:��A�
cloudasset.googleapis.com/Feedprojects/{project}/feeds/{feed}folders/{folder}/feeds/{feed})organizations/{organization}/feeds/{feed} "�
SearchAllResourcesRequest
scope (	B�A
query (	B�A
asset_types (	B�A
	page_size (B�A

page_token (	B�A
order_by (	B�A"s
SearchAllResourcesResponse<
results (2+.google.cloud.asset.v1.ResourceSearchResult
next_page_token (	"v
SearchAllIamPoliciesRequest
scope (	B�A
query (	B�A
	page_size (B�A

page_token (	B�A"v
SearchAllIamPoliciesResponse=
results (2,.google.cloud.asset.v1.IamPolicySearchResult
next_page_token (	"�
IamPolicyAnalysisQuery
scope (	B�A^
resource_selector (2>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ResourceSelectorB�A^
identity_selector (2>.google.cloud.asset.v1.IamPolicyAnalysisQuery.IdentitySelectorB�AZ
access_selector (2<.google.cloud.asset.v1.IamPolicyAnalysisQuery.AccessSelectorB�AK
options (25.google.cloud.asset.v1.IamPolicyAnalysisQuery.OptionsB�A3
ResourceSelector
full_resource_name (	B�A)
IdentitySelector
identity (	B�A>
AccessSelector
roles (	B�A
permissions (	B�A�
Options
expand_groups (B�A
expand_roles (B�A
expand_resources (B�A"
output_resource_edges (B�A
output_group_edges (B�A2
%analyze_service_account_impersonation (B�A"�
AnalyzeIamPolicyRequestJ
analysis_query (2-.google.cloud.asset.v1.IamPolicyAnalysisQueryB�A9
execution_timeout (2.google.protobuf.DurationB�A"�
AnalyzeIamPolicyResponseX
main_analysis (2A.google.cloud.asset.v1.AnalyzeIamPolicyResponse.IamPolicyAnalysisq
&service_account_impersonation_analysis (2A.google.cloud.asset.v1.AnalyzeIamPolicyResponse.IamPolicyAnalysis
fully_explored (�
IamPolicyAnalysisE
analysis_query (2-.google.cloud.asset.v1.IamPolicyAnalysisQueryH
analysis_results (2..google.cloud.asset.v1.IamPolicyAnalysisResult
fully_explored (J
non_critical_errors (2-.google.cloud.asset.v1.IamPolicyAnalysisState"�
IamPolicyAnalysisOutputConfig^
gcs_destination (2C.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig.GcsDestinationH h
bigquery_destination (2H.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig.BigQueryDestinationH "
GcsDestination
uri (	B�A�
BigQueryDestination
dataset (	B�A
table_prefix (	B�Al
partition_key (2U.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig.BigQueryDestination.PartitionKey
write_disposition (	B�A"?
PartitionKey
PARTITION_KEY_UNSPECIFIED 
REQUEST_TIMEB
destination"�
"AnalyzeIamPolicyLongrunningRequestJ
analysis_query (2-.google.cloud.asset.v1.IamPolicyAnalysisQueryB�AP
output_config (24.google.cloud.asset.v1.IamPolicyAnalysisOutputConfigB�A"%
#AnalyzeIamPolicyLongrunningResponse*~
ContentType
CONTENT_TYPE_UNSPECIFIED 
RESOURCE

IAM_POLICY

ORG_POLICY
ACCESS_POLICY
OS_INVENTORY2�
AssetService�
ExportAssets*.google.cloud.asset.v1.ExportAssetsRequest.google.longrunning.Operation"����""/v1/{parent=*/*}:exportAssets:*�AW
*google.cloud.asset.v1.ExportAssetsResponse)google.cloud.asset.v1.ExportAssetsRequest�
BatchGetAssetsHistory3.google.cloud.asset.v1.BatchGetAssetsHistoryRequest4.google.cloud.asset.v1.BatchGetAssetsHistoryResponse".���(&/v1/{parent=*/*}:batchGetAssetsHistory

CreateFeed(.google.cloud.asset.v1.CreateFeedRequest.google.cloud.asset.v1.Feed"*���"/v1/{parent=*/*}/feeds:*�Aparentt
GetFeed%.google.cloud.asset.v1.GetFeedRequest.google.cloud.asset.v1.Feed"%���/v1/{name=*/*/feeds/*}�Aname�
	ListFeeds\'.google.cloud.asset.v1.ListFeedsRequest(.google.cloud.asset.v1.ListFeedsResponse"\'���/v1/{parent=*/*}/feeds�Aparent�

UpdateFeed(.google.cloud.asset.v1.UpdateFeedRequest.google.cloud.asset.v1.Feed"-��� 2/v1/{feed.name=*/*/feeds/*}:*�Afeedu

DeleteFeed(.google.cloud.asset.v1.DeleteFeedRequest.google.protobuf.Empty"%���*/v1/{name=*/*/feeds/*}�Aname�
SearchAllResources0.google.cloud.asset.v1.SearchAllResourcesRequest1.google.cloud.asset.v1.SearchAllResourcesResponse"D���$"/v1/{scope=*/*}:searchAllResources�Ascope,query,asset_types�
SearchAllIamPolicies2.google.cloud.asset.v1.SearchAllIamPoliciesRequest3.google.cloud.asset.v1.SearchAllIamPoliciesResponse":���&$/v1/{scope=*/*}:searchAllIamPolicies�Ascope,query�
AnalyzeIamPolicy..google.cloud.asset.v1.AnalyzeIamPolicyRequest/.google.cloud.asset.v1.AnalyzeIamPolicyResponse"7���1//v1/{analysis_query.scope=*/*}:analyzeIamPolicy�
AnalyzeIamPolicyLongrunning9.google.cloud.asset.v1.AnalyzeIamPolicyLongrunningRequest.google.longrunning.Operation"����?":/v1/{analysis_query.scope=*/*}:analyzeIamPolicyLongrunning:*�Au
9google.cloud.asset.v1.AnalyzeIamPolicyLongrunningResponse8google.cloud.asset.v1.AnalyzeIamPolicyLongrunningRequestM�Acloudasset.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.asset.v1BAssetServiceProtoPZ:google.golang.org/genproto/googleapis/cloud/asset/v1;asset�Google.Cloud.Asset.V1�Google\\Cloud\\Asset\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

