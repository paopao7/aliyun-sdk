<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setBillingCycle($BillingCycle)
 * @method string getBillingCycle()
 * @method $this setProductCode($ProductCode)
 * @method string getProductCode()
 * @method $this setProductType($ProductType)
 * @method string getProductType()
 * @method $this setSubscriptionType($SubscriptionType)
 * @method string getSubscriptionType()
 */
final class QueryBillOverview extends BssOpenApiCommon
{
    public $action = 'QueryBillOverview';
}
