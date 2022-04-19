<?php

namespace App\Http\Controllers\Wap\Service;

use TencentCloud\Common\Credential;
// 导入对应产品模块的client
use TencentCloud\Sms\V20210111\Models\SendSmsRequest;
use TencentCloud\Sms\V20210111\SmsClient;
// 导入可选配置类
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

trait SmsService {
    public function sendSms($mobile, $params) {
        $secret_id = config("sms.secret_id", "");
        $secret_key = config("sms.secret_key", "");
        $app_id = config("sms.app_id", "");
        $sign_name = config("sms.sign_name", "");
        $template_id = config("sms.temp_id", "");

        if (count($params) == 4) {
            $template_id = config("sms.temp_goods_id", "");
        }


        try {
            $cred = new Credential($secret_id, $secret_key);

            // 实例化一个http选项，可选的，没有特殊需求可以跳过
            $httpProfile = new HttpProfile();
            // 配置代理（无需要直接忽略）
            // $httpProfile->setProxy("https://ip:port");
            $httpProfile->setReqMethod("GET");  // post请求(默认为post请求)
            $httpProfile->setReqTimeout(30);    // 请求超时时间，单位为秒(默认60秒)
            $httpProfile->setEndpoint("sms.tencentcloudapi.com");  // 指定接入地域域名(默认就近接入)

            // 实例化一个client选项，可选的，没有特殊需求可以跳过
            $clientProfile = new ClientProfile();
            $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // 指定签名算法(默认为HmacSHA256)
            $clientProfile->setHttpProfile($httpProfile);

            // 实例化要请求产品(以sms为例)的client对象,clientProfile是可选的
            // 第二个参数是地域信息，可以直接填写字符串ap-guangzhou，支持的地域列表参考 https://cloud.tencent.com/document/api/382/52071#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8
            $client = new SmsClient($cred, "ap-guangzhou", $clientProfile);

            // 实例化一个 sms 发送短信请求对象,每个接口都会对应一个request对象。
            $req = new SendSmsRequest();

            $req->SmsSdkAppId = $app_id;
            $req->SignName = $sign_name;
            $req->TemplateId = $template_id;
            /* 模板参数: 模板参数的个数需要与 TemplateId 对应模板的变量个数保持一致，若无模板参数，则设置为空*/
            $req->TemplateParamSet = $params;
            /* 下发手机号码，采用 E.164 标准，+[国家或地区码][手机号]
             * 示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号，最多不要超过200个手机号*/
            $req->PhoneNumberSet = array("+86" . $mobile);
            /* 用户的 session 内容（无需要可忽略）: 可以携带用户侧 ID 等上下文信息，server 会原样返回 */
            $req->SessionContext = "";
            /* 短信码号扩展号（无需要可忽略）: 默认未开通，如需开通请联系 [腾讯云短信小助手] */
            $req->ExtendCode = "";
            /* 国际/港澳台短信 SenderId（无需要可忽略）: 国内短信填空，默认未开通，如需开通请联系 [腾讯云短信小助手] */
            $req->SenderId = "";

            // 通过client对象调用SendSms方法发起请求。注意请求方法名与请求对象是对应的
            // 返回的resp是一个SendSmsResponse类的实例，与请求对象对应
            $resp = $client->SendSms($req);

            // 输出json格式的字符串回包
            $data = json_decode($resp->toJsonString(), true);
            if (isset($data["RequestId"])) {
                return true;
            }

            // 也可以取出单个值。
            // 您可以通过官网接口文档或跳转到response对象的定义处查看返回字段的定义
            // print_r($resp->TotalCount);

            /* 当出现以下错误码时，快速解决方案参考
             * [FailedOperation.SignatureIncorrectOrUnapproved](https://cloud.tencent.com/document/product/382/9558#.E7.9F.AD.E4.BF.A1.E5.8F.91.E9.80.81.E6.8F.90.E7.A4.BA.EF.BC.9Afailedoperation.signatureincorrectorunapproved-.E5.A6.82.E4.BD.95.E5.A4.84.E7.90.86.EF.BC.9F)
             * [FailedOperation.TemplateIncorrectOrUnapproved](https://cloud.tencent.com/document/product/382/9558#.E7.9F.AD.E4.BF.A1.E5.8F.91.E9.80.81.E6.8F.90.E7.A4.BA.EF.BC.9Afailedoperation.templateincorrectorunapproved-.E5.A6.82.E4.BD.95.E5.A4.84.E7.90.86.EF.BC.9F)
             * [UnauthorizedOperation.SmsSdkAppIdVerifyFail](https://cloud.tencent.com/document/product/382/9558#.E7.9F.AD.E4.BF.A1.E5.8F.91.E9.80.81.E6.8F.90.E7.A4.BA.EF.BC.9Aunauthorizedoperation.smssdkappidverifyfail-.E5.A6.82.E4.BD.95.E5.A4.84.E7.90.86.EF.BC.9F)
             * [UnsupportedOperation.ContainDomesticAndInternationalPhoneNumber](https://cloud.tencent.com/document/product/382/9558#.E7.9F.AD.E4.BF.A1.E5.8F.91.E9.80.81.E6.8F.90.E7.A4.BA.EF.BC.9Aunsupportedoperation.containdomesticandinternationalphonenumber-.E5.A6.82.E4.BD.95.E5.A4.84.E7.90.86.EF.BC.9F)
             * 更多错误，可咨询[腾讯云助手](https://tccc.qcloud.com/web/im/index.html#/chat?webAppId=8fa15978f85cb41f7e2ea36920cb3ae1&title=Sms)
             */
        } catch(TencentCloudSDKException $e) {
            return false;
        }
        return false;
    }
}
