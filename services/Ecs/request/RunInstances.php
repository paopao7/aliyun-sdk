<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setInstanceName($InstanceName)
 * @method string getInstanceName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setInternetMaxBandwidthIn($InternetMaxBandwidthIn)
 * @method integer getInternetMaxBandwidthIn()
 * @method $this setInternetMaxBandwidthOut($InternetMaxBandwidthOut)
 * @method integer getInternetMaxBandwidthOut()
 * @method $this setHostName($HostName)
 * @method string getHostName()
 * @method $this setUniqueSuffix($UniqueSuffix)
 * @method boolean getUniqueSuffix()
 * @method $this setPassword($Password)
 * @method string getPassword()
 * @method $this setPasswordInherit($PasswordInherit)
 * @method boolean getPasswordInherit()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 * @method $this setSystemDisk_Size($SystemDisk_Size)
 * @method string getSystemDisk_Size()
 * @method $this setSystemDisk_Category($SystemDisk_Category)
 * @method string getSystemDisk_Category()
 * @method $this setSystemDisk_DiskName($SystemDisk_DiskName)
 * @method string getSystemDisk_DiskName()
 * @method $this setSystemDisk_Description($SystemDisk_Description)
 * @method string getSystemDisk_Description()
 * @method $this setDataDisk($DataDisk)
 * @method array getDataDisk()
 * @method $this setIoOptimized($IoOptimized)
 * @method string getIoOptimized()
 * @method $this setNetworkInterface($NetworkInterface)
 * @method array getNetworkInterface()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 * @method $this setKeyPairName($KeyPairName)
 * @method string getKeyPairName()
 * @method $this setRamRoleName($RamRoleName)
 * @method string getRamRoleName()
 * @method $this setAmount($Amount)
 * @method integer getAmount()
 * @method $this setMinAmount($MinAmount)
 * @method integer getMinAmount()
 * @method $this setAutoReleaseTime($AutoReleaseTime)
 * @method string getAutoReleaseTime()
 * @method $this setSpotStrategy($SpotStrategy)
 * @method string getSpotStrategy()
 * @method $this setSpotPriceLimit($SpotPriceLimit)
 * @method float getSpotPriceLimit()
 * @method $this setSpotInterruptionBehavior($SpotInterruptionBehavior)
 * @method string getSpotInterruptionBehavior()
 * @method $this setSecurityEnhancementStrategy($SecurityEnhancementStrategy)
 * @method string getSecurityEnhancementStrategy()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setHpcClusterId($HpcClusterId)
 * @method string getHpcClusterId()
 * @method $this setDryRun($DryRun)
 * @method boolean getDryRun()
 * @method $this setDedicatedHostId($DedicatedHostId)
 * @method string getDedicatedHostId()
 * @method $this setLaunchTemplateId($LaunchTemplateId)
 * @method string getLaunchTemplateId()
 * @method $this setLaunchTemplateName($LaunchTemplateName)
 * @method string getLaunchTemplateName()
 * @method $this setLaunchTemplateVersion($LaunchTemplateVersion)
 * @method integer getLaunchTemplateVersion()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setPeriodUnit($PeriodUnit)
 * @method string getPeriodUnit()
 * @method $this setAutoRenew($AutoRenew)
 * @method boolean getAutoRenew()
 * @method $this setAutoRenewPeriod($AutoRenewPeriod)
 * @method integer getAutoRenewPeriod()
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setDeploymentSetId($DeploymentSetId)
 * @method string getDeploymentSetId()
 * @method $this setPrivateIpAddress($PrivateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setCreditSpecification($CreditSpecification)
 * @method string getCreditSpecification()
 * @method $this setIpv6Address($Ipv6Address)
 * @method array getIpv6Address()
 * @method $this setIpv6AddressCount($Ipv6AddressCount)
 * @method integer getIpv6AddressCount()
 * @method $this setDeletionProtection($DeletionProtection)
 * @method boolean getDeletionProtection()
 * @method $this setHibernationConfigured($HibernationConfigured)
 * @method boolean getHibernationConfigured()
 * @method $this setCapacityReservationId($CapacityReservationId)
 * @method string getCapacityReservationId()
 * @method $this setCapacityReservationPreference($CapacityReservationPreference)
 * @method string getCapacityReservationPreference()
 */
final class RunInstances extends EcsCommon
{
    public $action = 'RunInstances';
}
