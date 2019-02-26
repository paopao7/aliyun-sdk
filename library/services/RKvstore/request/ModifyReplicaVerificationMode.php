<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setReplicaId($ReplicaId)
 * @method string getReplicaId()
 * @method $this setVerificationMode($VerificationMode)
 * @method string getVerificationMode()
 */
final class ModifyReplicaVerificationMode extends RKvstoreCommon
{
    public $action = 'ModifyReplicaVerificationMode';
}
