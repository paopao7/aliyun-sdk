<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setApiId($ApiId)
 * @method string getApiId()
 * @method $this setApiName($ApiName)
 * @method string getApiName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setVisibility($Visibility)
 * @method string getVisibility()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 * @method $this setRequestConfig($RequestConfig)
 * @method string getRequestConfig()
 * @method $this setServiceConfig($ServiceConfig)
 * @method string getServiceConfig()
 * @method $this setRequestParameters($RequestParameters)
 * @method string getRequestParameters()
 * @method $this setSystemParameters($SystemParameters)
 * @method string getSystemParameters()
 * @method $this setConstantParameters($ConstantParameters)
 * @method string getConstantParameters()
 * @method $this setServiceParameters($ServiceParameters)
 * @method string getServiceParameters()
 * @method $this setServiceParametersMap($ServiceParametersMap)
 * @method string getServiceParametersMap()
 * @method $this setResultType($ResultType)
 * @method string getResultType()
 * @method $this setResultSample($ResultSample)
 * @method string getResultSample()
 * @method $this setFailResultSample($FailResultSample)
 * @method string getFailResultSample()
 * @method $this setErrorCodeSamples($ErrorCodeSamples)
 * @method string getErrorCodeSamples()
 * @method $this setResultDescriptions($ResultDescriptions)
 * @method string getResultDescriptions()
 * @method $this setOpenIdConnectConfig($OpenIdConnectConfig)
 * @method string getOpenIdConnectConfig()
 * @method $this setAllowSignatureMethod($AllowSignatureMethod)
 * @method string getAllowSignatureMethod()
 * @method $this setWebSocketApiType($WebSocketApiType)
 * @method string getWebSocketApiType()
 * @method $this setResultBodyModel($ResultBodyModel)
 * @method string getResultBodyModel()
 * @method $this setForceNonceCheck($ForceNonceCheck)
 * @method boolean getForceNonceCheck()
 * @method $this setDisableInternet($DisableInternet)
 * @method boolean getDisableInternet()
 */
final class ModifyApi extends CloudAPICommon
{
    public $action = 'ModifyApi';
}
