<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setImageName($ImageName)
 * @method string getImageName()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setCpu($Cpu)
 * @method integer getCpu()
 * @method $this setMemory($Memory)
 * @method integer getMemory()
 * @method $this setDeploymentSetId($DeploymentSetId)
 * @method string getDeploymentSetId()
 * @method $this setInstanceTypes($InstanceTypes)
 * @method array getInstanceTypes()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setIoOptimized($IoOptimized)
 * @method string getIoOptimized()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 * @method $this setInternetMaxBandwidthIn($InternetMaxBandwidthIn)
 * @method integer getInternetMaxBandwidthIn()
 * @method $this setInternetMaxBandwidthOut($InternetMaxBandwidthOut)
 * @method integer getInternetMaxBandwidthOut()
 * @method $this setSystemDisk_Category($SystemDisk_Category)
 * @method string getSystemDisk_Category()
 * @method $this setSystemDisk_Size($SystemDisk_Size)
 * @method integer getSystemDisk_Size()
 * @method $this setScalingConfigurationName($ScalingConfigurationName)
 * @method string getScalingConfigurationName()
 * @method $this setDataDisk($DataDisk)
 * @method array getDataDisk()
 * @method $this setLoadBalancerWeight($LoadBalancerWeight)
 * @method integer getLoadBalancerWeight()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 * @method $this setKeyPairName($KeyPairName)
 * @method string getKeyPairName()
 * @method $this setRamRoleName($RamRoleName)
 * @method string getRamRoleName()
 * @method $this setSecurityEnhancementStrategy($SecurityEnhancementStrategy)
 * @method string getSecurityEnhancementStrategy()
 * @method $this setInstanceName($InstanceName)
 * @method string getInstanceName()
 * @method $this setHostName($HostName)
 * @method string getHostName()
 * @method $this setSpotStrategy($SpotStrategy)
 * @method string getSpotStrategy()
 * @method $this setPasswordInherit($PasswordInherit)
 * @method boolean getPasswordInherit()
 * @method $this setSpotPriceLimit($SpotPriceLimit)
 * @method array getSpotPriceLimit()
 * @method $this setPassword($Password)
 * @method string getPassword()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class CreateScalingConfiguration extends EssCommon
{
    public $action = 'CreateScalingConfiguration';
}
