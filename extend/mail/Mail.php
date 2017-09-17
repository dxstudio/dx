<?php
namespace extend\mail;
require_once dirname(__DIR__) . '/mail/swiftlib/swift_required.php';

//$mysqli=new mysqli("localhost","root","","test");


/**
 * Class SmsDemo
 *
 * @property \Aliyun\Core\DefaultAcsClient acsClient
 */
class Mail
{
    public function sendMail($conn,$email,$act) {
        //$act=$_GET['act'];错误

$username=$_SESSION['username'];

//表名
$table='mail';
//3.得到连接对象

mysqli_query($conn , "set names utf8");
if($act==='reg'){
    $regtime=time();
    //完成注册的功能
    $token=md5($username.$regtime);
    $token_exptime=$regtime+24*3600;//过期时间
    $sql="INSERT INTO $table ".
                "(username,email,token,token_exptime,regtime) ".
                "VALUES ".
                "('$username','$email','$token',$token_exptime,$regtime)";
                $res=mysqli_query($conn, $sql);
    if($res){
        //发送邮件，以QQ邮箱为例
        //配置邮件服务器，得到传输对象
        $transport=Swift_SmtpTransport::newInstance('smtp.qq.com',465,'ssl');
        //设置登陆帐号和密码
        $transport->setUsername('admin@mail.gaoyuting.org');
        $transport->setPassword('enagidesdtqdhhjc');
        //得到发送邮件对象Swift_Mailer对象
        $mailer=Swift_Mailer::newInstance($transport);
        //得到邮件信息对象
        $message=Swift_Message::newInstance();
        //设置管理员的信息
        $message->setFrom(array('admin@mail.gaoyuting.org'=>'MakerGYT'));
        //将邮件发给谁
        $message->setTo(array($email=>$username));
        //设置邮件主题
        $message->setSubject('激活邮件');
        $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?act=active&token={$token}";
        $urlencode=urlencode($url);
        $str=<<<EOF
        <b>亲爱的{$username}您好~！</b>感谢您注册点心网络文化工作室<br/>
        请点击此链接激活帐号即可验证！<br/>
        <a href="{$url}">{$urlencode}</a>
        <br/>
        如果点此链接无反映，可以将其复制到浏览器中来执行，链接的有效时间为24小时。      
EOF;
        $message->setBody("{$str}",'text/html','utf-8');
        try{
            if($mailer->send($message)){
                echo "恭喜您{$username}注册成功，请到邮箱激活之后登陆<br/>";
                echo '3秒钟后跳转到简历页面';
                echo '<meta http-equiv="refresh" content="3;url=../jianli/jianli.php#"/>';
            }else{
                //加删除记录
                echo '注册失败，请重新验证';
                echo '3秒钟后跳转到简历页面';
                echo '<meta http-equiv="refresh" content="3;url=../jianli/jianli.php"/>';
            }
        }catch(Swift_ConnectionException $e){
            echo '邮件发送错误'.$e->getMessage();
        }
    }else{
        echo '用户注册失败,3秒钟后跳转到简历页面';
        echo '<meta http-equiv="refresh" content="3;url=../jianli/jianli.php"/>';
    }
}elseif($act==='active'){
    $token=addslashes($_GET['token']);
    $result1=mysqli_query($conn, "SELECT * FROM $table WHERE token='{$token}' AND status=0 ");
    $row = mysqli_fetch_array($result1);
    
    $now=time();
    if($now>$row['token_exptime']){
        echo '激活时间过期，请重新登陆激活';
    }else{
        $res=mysqli_query($conn, "UPDATE $table 
        SET status=1
        WHERE id={$row['id']} ");
        if($res){
            echo '激活成功,3秒钟后跳转到简历页面';
            echo '<meta http-equiv="refresh" content="3;url=../jianli/jianli.php"/>';
        }else{
            echo '激活失败，请重新激活';
            echo '<meta http-equiv="refresh" content="3;url=../jianli/jianli.php"/>';
        }
    }
    
}
    }

   

}
