<?php

namespace extend\ThinkSDK;
use think\Exception;
class Yiban{
	//应用的APPID
  	protected $client_id = "";
  	//应用的APPKEY
  	protected $client_secret = "";
  	//成功授权后的回调地址
  	protected $redirect_uri = "http://localhost/tp/public/index/user/callback/type/yiban";
	//获取requestCode的api接口
	protected $GetRequestCodeURL = 'https://oauth.yiban.cn/code/html';
	//获取access_token的api接口
	protected $GetAccessTokenURL = 'https://openapi.yiban.cn/oauth/access_token';
	//获取身份信息的api接口
	protected $GetUserInfoURL = 'https://openapi.yiban.cn/user/me';
	//获取身份真实信息的api接口
	protected $GetUserRealInfoURL = 'https://openapi.yiban.cn/user/verify_me';
	//获取的token
	protected $token='';
	/**
	 * 发送HTTP请求方法，目前只支持CURL发送请求
	 * @param  string $url    请求URL
	 * @param  array  $params 请求参数
	 * @param  string $method 请求方法GET/POST
	 * @return array  $data   响应数据
	 */
	protected function http($url, $params, $method, $header = array(), $multi = false){
		$opts = array(
			CURLOPT_TIMEOUT        => 30,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_HTTPHEADER     => $header
		);

		/* 根据请求类型设置特定参数 */
		switch(strtoupper($method)){
			case 'GET':
				$opts[CURLOPT_URL] = $url . '?' . http_build_query($params);
				break;
			case 'POST':
				//判断是否传输文件
				$params = $multi ? $params : http_build_query($params);
				$opts[CURLOPT_URL] = $url;
				$opts[CURLOPT_POST] = 1;
				$opts[CURLOPT_POSTFIELDS] = $params;
				break;
			default:
				throw new Exception('不支持的请求方式！');
		}
		
		/* 初始化并执行curl请求 */
		$ch = curl_init();
		curl_setopt_array($ch, $opts);
		$data  = curl_exec($ch);
		$error = curl_error($ch);
		curl_close($ch);
		if($error) throw new Exception('请求发生错误：' . $error);
		return  $data;
	}
	/**
	 * 获取Authorization Code
	 * new Qq()->getRequestCodeURL()
	 */
	public function getRequestCodeURL(){
		//生成唯一随机串防CSRF攻击
		// $state = md5(uniqid(rand(), TRUE));
  //       Session::set('state',$state);
		//Oauth 标准参数
		$params = array(
			'client_id'     => $this->client_id,
			'redirect_uri'  => $this->redirect_uri,
		);
		return $this->GetRequestCodeURL . '?' . http_build_query($params);
	}
	/**
	 * 获取access_token
	 * @param string $code 上一步请求到的code
	 * @param return string $token
	 */
	public function getAccessToken($code){
		$params = array(
				'client_id'     => $this->client_id,
				'client_secret' => $this->client_secret,
				'code'          => $code,
				'redirect_uri'  => $this->redirect_uri,
		);

		$data = $this->http($this->GetAccessTokenURL, $params, 'POST');
		$data=json_decode($data, true);
		// $response=array();
		// parse_str($data, $response);
		$this->token=$data['access_token'];
		return $this->token;
	}
	/**
	 * 获取yiban用户信息
	 * @param string $token
	 * @return return array $userInfo
	 */
	public function info(){
		$params = array(
			'access_token' => $this->token,
		);
		
		$data = $this->http($this->GetUserInfoURL, $params, 'GET');
		$data=json_decode($data, true);
		if($data['status']=='success'){
			$userInfo['yb_userid']=$data['info']['yb_userid'];
			$userInfo['username'] = $data['info']['yb_username'];
			$userInfo['head'] = $data['info']['yb_userhead'];
			$userInfo['sex'] = $data['info']['yb_sex'];
			return $userInfo;
		} else {
			throw_exception("获取易班用户信息失败：{$data['info']}");
		}
	}
	/**
	 * 获取yiban真实用户信息
	 * @param string $code 上一步请求到的openid
	 * @return return array $userInfo
	 */
	public function realinfo(){
		$params = array(
			'access_token' => $this->token,
		);
		
		$data = $this->http($this->GetUserInfoURL, $params, 'GET');
		$data=json_decode($data, true);
		if($data['status']=='success'){
			$userInfo['yb_userid']=$data['info']['yb_userid'];
			$userInfo['username'] = $data['info']['yb_username'];
			$userInfo['head'] = $data['info']['yb_userhead'];
			$userInfo['sex'] = $data['info']['yb_sex'];
			$userInfo['name'] = $data['info']['yb_realname'];
			$userInfo['academy'] = $data['info']['yb_collegename'];
			$userInfo['class'] = $data['info']['yb_classname'];
			$userInfo['grade'] = $data['info']['yb_enteryear'];
			$userInfo['studentid'] = $data['info']['yb_studentid'];
			return $userInfo;
		} else {
			throw_exception("获取易班用户信息失败：{$data['info']}");
		}
	}
	// //简单实现json到php数组转换功能
 //    private function simple_json_parser($json){
 //        $json = str_replace("{","",str_replace("}","", $json));
 //        $jsonValue = explode(",", $json);
 //        $arr = array();
 //        foreach($jsonValue as $v){
 //            $jValue = explode(":", $v);
 //            $arr[str_replace('"',"", $jValue[0])] = (str_replace('"', "", $jValue[1]));
 //        }
 //        return $arr;
 //    }
}
