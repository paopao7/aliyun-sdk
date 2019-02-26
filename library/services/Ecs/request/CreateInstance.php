<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setInstanceName($InstanceName)
 * @method string getInstanceName()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 * @method $this setAutoRenew($AutoRenew)
 * @method boolean getAutoRenew()
 * @method $this setAutoRenewPeriod($AutoRenewPeriod)
 * @method integer getAutoRenewPeriod()
 * @method $this setInternetMaxBandwidthIn($InternetMaxBandwidthIn)
 * @method integer getInternetMaxBandwidthIn()
 * @method $this setInternetMaxBandwidthOut($InternetMaxBandwidthOut)
 * @method integer getInternetMaxBandwidthOut()
 * @method $this setHostName($HostName)
 * @method string getHostName()
 * @method $this setPassword($Password)
 * @method string getPassword()
 * @method $this setPasswordInherit($PasswordInherit)
 * @method boolean getPasswordInherit()
 * @method $this setDeploymentSetId($DeploymentSetId)
 * @method string getDeploymentSetId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setVlanId($VlanId)
 * @method string getVlanId()
 * @method $this setInnerIpAddress($InnerIpAddress)
 * @method string getInnerIpAddress()
 * @method $this setSystemDisk_Size($SystemDisk_Size)
 * @method integer getSystemDisk_Size()
 * @method $this setSystemDisk_Category($SystemDisk_Category)
 * @method string getSystemDisk_Category()
 * @method $this setSystemDisk_DiskName($SystemDisk_DiskName)
 * @method string getSystemDisk_DiskName()
 * @method $this setSystemDisk_Description($SystemDisk_Description)
 * @method string getSystemDisk_Description()
 * @method $this setDataDisk($DataDisk)
 * @method array getDataDisk()
 * @method $this setNodeControllerId($NodeControllerId)
 * @method string getNodeControllerId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($PrivateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setIoOptimized($IoOptimized)
 * @method string getIoOptimized()
 * @method $this setUseAdditionalService($UseAdditionalService)
 * @method boolean getUseAdditionalService()
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setPeriodUnit($PeriodUnit)
 * @method string getPeriodUnit()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 * @method $this setSpotStrategy($SpotStrategy)
 * @method string getSpotStrategy()
 * @method $this setKeyPairName($KeyPairName)
 * @method string getKeyPairName()
 * @method $this setSpotPriceLimit($SpotPriceLimit)
 * @method float getSpotPriceLimit()
 * @method $this setSpotInterruptionBehavior($SpotInterruptionBehavior)
 * @method string getSpotInterruptionBehavior()
 * @method $this setRamRoleName($RamRoleName)
 * @method string getRamRoleName()
 * @method $this setSecurityEnhancementStrategy($SecurityEnhancementStrategy)
 * @method string getSecurityEnhancementStrategy()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setHpcClusterId($HpcClusterId)
 * @method string getHpcClusterId()
 * @method $this setDryRun($DryRun)
 * @method boolean getDryRun()
 * @method $this setDedicatedHostId($DedicatedHostId)
 * @method string getDedicatedHostId()
 * @method $this setCreditSpecification($CreditSpecification)
 * @method string getCreditSpecification()
 * @method $this setDeletionProtection($DeletionProtection)
 * @method boolean getDeletionProtection()
 */
final class CreateInstance extends EcsCommon
{
    public $action = 'CreateInstance';
}
