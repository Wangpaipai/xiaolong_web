<?php
namespace App\Http\Controllers\Admin\Service;
use Qiniu\Auth;//鉴权类
use Qiniu\Storage\UploadManager;//上传类

require_once  __DIR__ . '/qiniu/autoload.php';
class Qiniu
{
    public function __construct()
    {
        $this->accessKey = 'kK23ACK1T2KL5ndcVUzZSEZLkA-SWPTajlOx5Wdi';
        $this->secretKey = 'BMqW-A1_B1ngyDTS1VEkACkij1AZxicmGmtHBnta';
        $this->bucket = 'jiaju';//存储名称
        $this->auth = new Auth($this->accessKey, $this->secretKey);//鉴权类
        $this->uploadManager = new UploadManager();
    }

    /**
     * token/上传凭证获取
     */
    public function token(){
        $returnBody = array(
            'fname'=>'$(fname)',
            'key'=>'$(key)',
            'hash'=>'$(etag)'
        );
        $policy = array(
//            'callbackUrl' => 'http://www.toutiao.com/index/index/qiniu',//回调地址
            'returnBody' => json_encode($returnBody),//无回调   接收参数  "name":"$(x:name)"客户端自定义参数   如上传者的账号id
//            'callbackBody'=> json_encode($returnBody),//有回调
//            'callbackBodyType' => 'application/json'//回调参数格式设置
        );
//        $key = time().rand(1000,9999);
        $token = $this->auth->uploadToken($this->bucket,null,3600,$policy,true);
//	    session('key',$key);
	    $result = array(
		    'uptoken'=> $token
	    );
        return $result;
    }

    /**
     * @param $text 要存的字节
     * @return array 返回接收的参数
     */
    public function textUpload($text){
        $token = cache('TextToken');
        if(!cache('TextToken')){
            $token = $this->auth->uploadToken($this->bucket);
            cache(["TextToken" => $token], 3000);
        }
        $list = $this->uploadManager->put($token, null,$text);
        return $list;
    }
}
