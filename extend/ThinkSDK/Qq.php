<?php
//============================================================+
// File name   : Qq.php
// Version     : 0.0.1
// Begin       : 2017-09-1
// Last Update : 2017-09-10
// Authors     : MakerGYT admin@mail.gaoyuting.org
//-------------------------------------------------------------------
// License     : MIT (https://mit-license.org/)
// Copyright (C) 2017 MakerGYT 
//============================================================+
namespace extend\ThinkSDK;
use think\Exception;
class Qq{
	//应用的APPID
  	protected $client_id = "101418733";
  	//应用的APPKEY
  	protected $client_secret = "462ad1db89d8a0e30caef4719ef95dc8";
  	//成功授权后的回调地址
  	protected $redirect_uri = "http://112.74.41.209/dx/public/index/user/callback/type/qq";
	//获取requestCode的api接口
	protected $GetRequestCodeURL = 'https://graph.qq.com/oauth2.0/authorize';
	//获取access_token的api接口
	protected $GetAccessTokenURL = 'https://graph.qq.com/oauth2.0/token';
	//获取身份信息的api接口
	protected $GetUserInfoURL = 'https://graph.qq.com/user/get_user_info';
	//获取openid的接口
	protected $GetOpeidURL = 'https://graph.qq.com/oauth2.0/me';
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
			'response_type' => 'code',
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
				'grant_type'    => 'authorization_code',
				'code'          => $code,
				'redirect_uri'  => $this->redirect_uri,
		);

		$data = $this->http($this->GetAccessTokenURL, $params, 'GET');
		$response=array();
		parse_str($data, $response);
		$this->token=$response['access_token'];
		return $this->token;
	}
	/**
	 * 获取当前授权应用的openid
	 * @param string $code 上一步请求到的token
	 * @return return string $openid
	 */
	public function openid(){

		if($this->token){
			$data = $this->http($this->GetOpeidURL, array('access_token' => $this->token),'GET');
			$data = json_decode(trim(substr($data, 9), " );\n"), true);
			if(isset($data['openid']))
				return $data['openid'];
			else
				throw new Exception("获取用户openid出错：{$data['error_description']}");
		} else {
			throw new Exception('没有获取到openid！');
		}
	}
	/**
	 * 获取腾讯QQ用户信息
	 * @param string $code 上一步请求到的openid
	 * @return return array $userInfo
	 */
	public function info(){
		//import("ORG.ThinkSDK.ThinkOauth");
		$params = array(
			'oauth_consumer_key' => $this->client_id,
			'access_token'       => $this->token,
			'openid'             => $this->openid(),
			'format'             => 'json'
		);
		
		$data = $this->http($this->GetUserInfoURL, $params, 'GET');
		$data=json_decode($data, true);

		if($data['ret'] == 0){
			$userInfo['user_id']=$params['openid'];
			$userInfo['username'] = $data['nickname'];
			$userInfo['head'] = $data['figureurl_qq_1'];
			$userInfo['sex'] = $data['gender'];
			$userInfo['province'] = $data['province'];
			$userInfo['city'] = $data['city'];

			$userInfo['birthyear'] = 2017-(int)$data['year'];
			return $userInfo;
		} else {
			throw_exception("获取腾讯QQ用户信息失败：{$data['msg']}");
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