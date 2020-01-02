<?php
namespace app\index\controller;
use extend\ThinkSDK\Qq;
use extend\ThinkSDK\Yiban;
use extend\sms\SmsDemo;
use extend\mail\Mail;
use extend\pdf\Pdf;
use think\Session;
use app\index\model\UserBasic;
use app\index\model\StudentInfo;
use app\index\model\UserResume;
use think\Db;
class UserController extends BaseController
{
    public $user;
    public function index(){
        if($this->isLogin()) {
            //先找openid
            $map0 = [
            'openid' =>Session::get('user_id')
            ];
            $user_info=UserBasic::get($map0);
            
            if(empty($user_info['schoolid'])){
                return $this->edit_info();
            }
            else{
            $map = [
            'schoolid' =>$user_info['schoolid']
            ];
            $user_resume = UserResume::get($map);
            $this->view->assign('user_info',$user_info->getData());
            $this->view->assign('head',Session::get('head'));
            //$this->view->assign('username',Session::get('username'));
            $this->view->assign('user_resume',$user_resume->getData());
            return $this->view->fetch();
            }
        }
    }
    //登录，引导授权
    //error:不同方法中调用同一对象
    //     ：变量定义类名
    public function login(){
        $this -> alreadyLogin();
        return $this -> view -> fetch();  //渲染登录模板
    }
    //登录验证
    public function oauthLogin($type){
        empty($type) && $this->error('参数错误');
        //$user  = new Qq();
        switch(ucfirst($type)){
            case 'Qq':
                $this->user  = new Qq();
                break;
            case 'Yiban':
                $this->user  = new Yiban();
                break;
            default:
                throw new Exception('不支持的登录方式！');
        }
        echo("<script> top.location.href='" . $this->user->getRequestCodeURL() . "'</script>");
    }

    /**
     *授权回调，返回用户信息
     */
    public function callback($type,$code = null){

        (empty($type)||empty($code)) && $this->error('参数错误');
        switch(ucfirst($type)){
            case 'Qq':
                $this->user  = new Qq();
                break;
            case 'Yiban':
                $this->user  = new Yiban();
                break;
            default:
                throw new Exception('不支持的登录方式！');
        }
        $token=$this->user->getAccessToken($code);
        if(isset($token)){
            $userInfo = $this->user->info();
            Session::set('user_id',$userInfo['user_id']);//以openid作为判断当前用户的标识，插入数据库           
            Session::set('username',$userInfo['username']);
            Session::set('head',$userInfo['head']);
            Session::set('sex',$userInfo['sex']);
            Session::set('birthyear',$userInfo['birthyear']);
            Session::set('location',$userInfo['province'].$userInfo['city']);

            $this->checkLogin();
            
        }
    }
    /**
     *登录验证
     */
    public function checkLogin(){
        //查询条件
        $map = [
            'openid' =>Session::get('user_id')
            //,'yb_userid' => Session::get('yb_userid')
        ];
        //数据表查询,返回模型对象
        $user = UserBasic::get($map);
        if (null === $user) {
            $user = new UserBasic;
            $user->sex = Session::get('sex');
            $user->location = Session::get('location');
            $user->birthyear = Session::get('birthyear');
            $user->openid = Session::get('user_id');
            $user->create_time = time();
            $user->login_count='1';
            $user->save();
            $this->success('登录成功', 'user/edit_info');
        } else {
            //更新用户登录次数:自增1
            $user -> setInc('login_count');
            $this->success('欢迎回来', 'user/index');
        }
    }

    /**
     *退出登录
     */
    public function logout(){
        //退出前先更新登录时间字段,下次登录时就知道上次登录时间了
        UserBasic::update(['login_time'=>time()],['openid'=> Session::get('user_id')]);
        Session::clear();
        $this->success('您已退出', 'user/login');
    }
    /**
     *渲染基础信息编辑模板
     */
    public function edit_info(){
        //查询条件
        $map = [
            'openid' =>Session::get('user_id')
            //,'yb_userid' => Session::get('yb_userid')
        ];
        $result = UserBasic::get($map);
        if(is_null($result)) {
            Session::clear();
            $this->isLogin();
            }
        else {
            $this->view->assign('user_info',$result->getData());
            return $this->view->fetch();
        }
    }
    /**
     *编辑基础信息
     */
    public function do_basic(){
        //便于协作resume部分的key
        Session::set('schoolid',$_POST['schoolid']);
        $map = [
                'schoolid' =>$_POST['schoolid']
            ];
        $result = StudentInfo::get($map);
        //匹配学生信息
        if($_POST['method']=='matche'){
            if(empty($result)) {
                $result['class']='查无';
                $result['name']='此人'; 
            }
            echo json_encode($result);  
        }   
        //更新基础信息
        elseif($_POST['method']=='update'){
            $user = new UserBasic;
            // save方法第二个参数为更新条件
            $user->save([
                'schoolid' =>$_POST['schoolid'],
                'phone' =>$_POST['phone'],
                'qq' =>$_POST['qq'],
                'mail' =>$_POST['mail'],
                'class' => $result['class'],
                'name' => $result['name'],
                'major' => $result['major'],
                'academy' => $result['academy'],
                'grade' => $result['grade'],
            ],['openid' => Session::get('user_id')]);
            //关联新增resume
            $user1 = new UserResume([
            'schoolid' =>$_POST['schoolid']
            ]);
            $user1->save();

        }
    }
    public function my_resume(){
        if($this->isLogin()) {
            //先找openid
            $map0 = [
            'openid' =>Session::get('user_id')
            ];
            $user_info=UserBasic::get($map0);
            $map = [
            'schoolid' =>$user_info['schoolid']
            ];
            $user_resume = UserResume::get($map);
            $this->view->assign('user_info',$user_info->getData());
            $this->view->assign('head',Session::get('head'));
            $this->view->assign('user_resume',$user_resume->getData());
            return $this->view->fetch();
        }
        
        
    }
    public function edit_resume(){
        if($this->isLogin()) {
            //先找openid
            $map0 = [
            'openid' =>Session::get('user_id')
            ];
            $user_info=UserBasic::get($map0);
            $map = [
            'schoolid' =>$user_info['schoolid']
            ];
            $user = UserResume::get($map);
            $this->view->assign('user_resume',$user->getData());
            return $this->view->fetch();
        }
    }
     public function do_resume(){
        //先找openid
        $map0 = [
        'schoolid' =>Session::get('schoolid')
        ];
        $user=UserResume::get($map0); 
            $user->position = $_POST['position'];
            $user->edit_time = time();
            // 显式指定当前操作为新增操作
            $user->save();
    }
    // public function do_resume(){
    //     //先找openid
    //     $map0 = [
    //     'schoolid' =>Session::get('schoolid')
    //     ];
    //     $user=UserResume::get($map0); 
    //     //if(empty($user)) {
    //         $user->schoolid = Session::get('schoolid');
    //         $user->position = $_POST['position'];
    //         $user->intership = $_POST['intership'];
    //         $user->contest = $_POST['contest'];
    //         $user->Office = $_POST['Office'];
    //         $user->Ps = $_POST['Ps'];
    //         $user->skills_certificates = $_POST['skills_certificates'];
    //         $user->hobby = $_POST['hobby'];
    //         $user->academic_field = $_POST['academic_field'];
    //         $user->project = $_POST['project'];
    //         $user->reasion = $_POST['reasion'];
    //         $user->deploy = $_POST['deploy'];
    //         $user->reasion = $_POST['reasion'];
    //         $user->edit_time = time();
    //         // 显式指定当前操作为新增操作
    //         $user->save();
    // }

    public function user_list(){
        return $this->view->fetch('user_list');
    }
    
    public function send_sms(){
        $mobile=$_POST['phone'];
        $code = ""; 
            for ($i = 0; $i <6; $i++) { 
                $code.= rand(0, 9); 
            } 
        Session::set('code',$code);
        $demo = new SmsDemo(
            "",
            ""
        );
        $response = $demo->sendSms(
            "点心网络文化工作室", // 短信签名
            "", // 短信模板编号
            $mobile, // 短信接收者
            Array(  // 短信模板中字段的值
                "number"=>$code,
            )
        );
    }
    public function check_code(){
        if(Session::get('code')==$_POST["inputVertiCode"]){   
          // $list=array("result"=>"validate!","code"=>Session::get('code'));  测试用
             $list=array("result"=>"validate!");
        }  
        else{  
          $list=array("result"=>"notValidate!");  
        }                   
        echo json_encode($list);  
    }
    public function send_mail(){
        if(empty($_POST['mail'])){
            $mailaddress=null;
        }else{
            $mailaddress=$_POST['mail'];
        }
        $conn=new Db();
        $mail = new Mail();
        $mail->sendMail($conn,$mailaddress,'reg
            ');
    }
    public function db_empty(){

        $alltable=array("user_basic","user_resume");
        $arrlength=count($alltable);
        for($table=0;$table<$arrlength;$table++){
            Db::query("truncate table $alltable[$table]");
            //mysqli_query($conn,"truncate table $alltable[$table]"); 
        
        //echo "<script>alert('empty success');location='login';</script>";
    }   
    $this->logout();
}
    public function download_resume(){
        if($this->isLogin()) {
            //先找openid
//             $map0 = [
//             'openid' =>Session::get('user_id')
//             ];
//             $user_info=UserBasic::get($map0);
//             $map = [
//             'schoolid' =>$user_info['schoolid']
//             ];
//             $user_resume = UserResume::get($map);
            
//             $html=<<<EOD
// <head>
// <style>

//   table,h1{
//     text-align:center;
//     }

// </style>
// </head>
// <body>
// <h1 >点心网络文化工作室应聘表(ID:{$user_resume['id']})</h1>
// <table border="1" cellpadding="8">
//   <tr>
//     <th>姓名</th>
//     <th>{$user_info['name']}</th>
//     <th>性别</th>
//     <th>{$user_info['sex']}</th>
//     <th>民族</th>
//     <th>汉族</th>
//   </tr>
//    <tr>
//     <td>学院专业</td>
//     <td colspan="5">{$user_info['academy']}&nbsp;&nbsp;{$user_info['major']}&nbsp;{$user_info['class']}</td>
//   </tr>
//   <tr>
//     <td>学号</td>
//     <td colspan="2">{$user_info['schoolid']}</td>
//     <td>爱好</td>
//     <td colspan="2">{$user_resume['hobby']}</td>
//   </tr>
//    <tr>
//     <td>邮箱</td>
//     <td colspan="2">{$user_info['mail']}</td>
//     <td>技术特长</td>
//     <td colspan="2">{$user_resume['skills_certificates']}</td>
//   </tr>
//    <tr>
//     <td>QQ</td>
//     <td colspan="2">{$user_info['qq']}</td>
//     <td>联系电话</td>
//     <td colspan="2">{$user_info['phone']}</td>
//   </tr>
//   <tr>
//     <td>应聘职务</td>
//     <td colspan="3">{$user_resume['position']}</td>
//     <td colspan="2">{$user_resume['deploy']}</td>
//   </tr>
//   <tr>
//     <td rowspan="4">自<br>我<br>简<br>介</td>
//     <td rowspan="4" colspan="5" >
//         {$user_resume['academic_field']}<br>
//         {$user_resume['project']}<br>
//         {$user_resume['reasion']}
        
//     </td>

//   </tr>

//   <tr>
//     <td colspan="3">录取意见1</td>
//     <td colspan="3">录取意见2</td>
//   </tr>
//   <tr>
//     <td colspan="3" rowspan="5"></td>
//     <td colspan="3" rowspan="5"></td>
//   </tr>
//   <tr>
//     <td></td>
//   </tr>
//    <tr>
//     <td></td>
//   </tr>
//    <tr>
//     <td></td>
//   </tr>
//    <tr>
//     <td></td>
//   </tr>
// </table>
// <h5>应聘须知：</h5>
// <ol>
// <li>面试时请自行打印并携带</li>
// <li>XXX</li>
// </ol>
// </body>
// EOD;
//         }



//         $pdf=new Pdf();
//         $pdf->download($html,$user_resume['id']);

//     }
            
        }
    }

}
