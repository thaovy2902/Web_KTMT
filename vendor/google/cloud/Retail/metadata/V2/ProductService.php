<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/product_service.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class ProductService
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
        \GPBMetadata\Google\Cloud\Retail\V2\ImportConfig::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\Product::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\PurgeConfig::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
?
,google/cloud/retail/v2/product_service.protogoogle.cloud.retail.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto*google/cloud/retail/v2/import_config.proto$google/cloud/retail/v2/product.proto)google/cloud/retail/v2/purge_config.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"?
CreateProductRequest4
parent (	B$?A?A
retail.googleapis.com/Branch5
product (2.google.cloud.retail.v2.ProductB?A

product_id (	B?A"H
GetProductRequest3
name (	B%?A?A
retail.googleapis.com/Product"~
UpdateProductRequest5
product (2.google.cloud.retail.v2.ProductB?A/
update_mask (2.google.protobuf.FieldMask"K
DeleteProductRequest3
name (	B%?A?A
retail.googleapis.com/Product2?
ProductService?
CreateProduct,.google.cloud.retail.v2.CreateProductRequest.google.cloud.retail.v2.Product"o????M"B/v2/{parent=projects/*/locations/*/catalogs/*/branches/*}/products:product?Aparent,product,product_id?

GetProduct).google.cloud.retail.v2.GetProductRequest.google.cloud.retail.v2.Product"R????EC/v2/{name=projects/*/locations/*/catalogs/*/branches/*/products/**}?Aname?
UpdateProduct,.google.cloud.retail.v2.UpdateProductRequest.google.cloud.retail.v2.Product"r????V2K/v2/{product.name=projects/*/locations/*/catalogs/*/branches/*/products/**}:product?Aproduct,update_mask?
DeleteProduct,.google.cloud.retail.v2.DeleteProductRequest.google.protobuf.Empty"R????E*C/v2/{name=projects/*/locations/*/catalogs/*/branches/*/products/**}?Aname?
ImportProducts-.google.cloud.retail.v2.ImportProductsRequest.google.longrunning.Operation"?????N"I/v2/{parent=projects/*/locations/*/catalogs/*/branches/*}/products:import:*?AV
-google.cloud.retail.v2.ImportProductsResponse%google.cloud.retail.v2.ImportMetadataI?Aretail.googleapis.com?A.https://www.googleapis.com/auth/cloud-platformB?
com.google.cloud.retail.v2BProductServiceProtoPZ<google.golang.org/genproto/googleapis/cloud/retail/v2;retail?RETAIL?Google.Cloud.Retail.V2?Google\\Cloud\\Retail\\V2?Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

