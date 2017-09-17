<?php
namespace app\index\controller;

class IndexController extends BaseController
{
	public function index()
    {
        $this -> isLogin();  //判断用户是否登录
        return $this ->view->fetch();  //渲染首页模板
    }

	public function aboutus(){
		return $this->view->fetch();
	}
}