<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setDiskIds($DiskIds)
 * @method string getDiskIds()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setDiskType($DiskType)
 * @method string getDiskType()
 * @method $this setCategory($Category)
 * @method string getCategory()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setSnapshotId($SnapshotId)
 * @method string getSnapshotId()
 * @method $this setPortable($Portable)
 * @method boolean getPortable()
 * @method $this setDeleteWithInstance($DeleteWithInstance)
 * @method boolean getDeleteWithInstance()
 * @method $this setDeleteAutoSnapshot($DeleteAutoSnapshot)
 * @method boolean getDeleteAutoSnapshot()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setDiskName($DiskName)
 * @method string getDiskName()
 * @method $this setAutoSnapshotPolicyId($AutoSnapshotPolicyId)
 * @method string getAutoSnapshotPolicyId()
 * @method $this setEnableAutoSnapshot($EnableAutoSnapshot)
 * @method boolean getEnableAutoSnapshot()
 * @method $this setEnableAutomatedSnapshotPolicy($EnableAutomatedSnapshotPolicy)
 * @method boolean getEnableAutomatedSnapshotPolicy()
 * @method $this setDiskChargeType($DiskChargeType)
 * @method string getDiskChargeType()
 * @method $this setLockReason($LockReason)
 * @method string getLockReason()
 * @method $this setFilter_1_Key($Filter_1_Key)
 * @method string getFilter_1_Key()
 * @method $this setFilter_2_Key($Filter_2_Key)
 * @method string getFilter_2_Key()
 * @method $this setFilter_1_Value($Filter_1_Value)
 * @method string getFilter_1_Value()
 * @method $this setFilter_2_Value($Filter_2_Value)
 * @method string getFilter_2_Value()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setEnableShared($EnableShared)
 * @method boolean getEnableShared()
 * @method $this setEncrypted($Encrypted)
 * @method boolean getEncrypted()
 * @method $this setAdditionalAttributes($AdditionalAttributes)
 * @method array getAdditionalAttributes()
 * @method $this setDryRun($DryRun)
 * @method boolean getDryRun()
 * @method $this setKMSKeyId($KMSKeyId)
 * @method string getKMSKeyId()
 */
final class DescribeDisks extends EcsCommon
{
    public $action = 'DescribeDisks';
}
