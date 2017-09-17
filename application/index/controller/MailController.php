<?php
namespace app\index\controller;
use  think\Controller;   
use  phpmailer\phpmailer;
class Mail extends Base
{
    function __construct(){
        parent::__construct();
    }
    //qq
    public function index(){
            $sendmail = ''; //发件人邮箱
            $sendmailpswd = ""; //客户端授权密码,而不是邮箱的登录密码！
            $send_name = '';// 设置发件人信息，如邮件格式说明中的发件人，
            $toemail = '';//定义收件人的邮箱
            $to_name = '';//设置收件人信息，如邮件格式说明中的收件人
            $mail = new PHPMailer();
            $mail->isSMTP();// 使用SMTP服务  
            $mail->CharSet = "utf8";// 编码格式为utf8，不设置编码的话，中文会出现乱码  
            $mail->Host = "smtp.qq.com";// 发送方的SMTP服务器地址  
            $mail->SMTPAuth = true;// 是否使用身份验证  
            $mail->Username = $sendmail;//// 发送方的
            $mail->Password = $sendmailpswd;//客户端授权密码,而不是邮箱的登录密码！
            $mail->SMTPSecure = "ssl";// 使用ssl协议方式 
            $mail->Port = 465;//  qq端口465或587）
            $mail->setFrom($sendmail,$send_name);// 设置发件人信息，如邮件格式说明中的发件人，
            $mail->addAddress($toemail,$to_name);// 设置收件人信息，如邮件格式说明中的收件人，  
            $mail->addReplyTo($sendmail,$send_name);// 设置回复人信息，指的是收件人收到邮件后，如果要回复，回复邮件将发送到的邮箱地址  
            //$mail->addCC("xxx@qq.com");// 设置邮件抄送人，可以只写地址，上述的设置也可以只写地址(这个人也能收到邮件)  
            //$mail->addBCC("xxx@qq.com");// 设置秘密抄送人(这个人也能收到邮件)  
            //$mail->addAttachment("bug0.jpg");// 添加附件  
            $mail->Subject = "这是一个测试邮件";// 邮件标题  
            $mail->Body = "邮件内容是 <b>您的验证码是：123456</b>，哈哈哈！";// 邮件正文  
            //$mail->AltBody = "This is the plain text纯文本";// 这个是设置纯文本方式显示的正文内容，如果不支持Html方式，就会用到这个，基本无用  
            if(!$mail->send()){// 发送邮件  
                echo "Message could not be sent.";
                echo "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息  
            }else{
                echo '发送成功';
            }
    }
}