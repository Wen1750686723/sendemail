<?
// if(@mail("wen1750686723@qq.com","邮件标题","邮件内容")){

// 	echo "chenggong";
// }
// else
// {
// 	echo "shibai";
// }
require_once ('email.class.php');
function ss($title="",$body="",$touser="wen1750686723@qq.com",$type="HTML"){


//##########################################
$smtpserver = "smtp.163.com";//SMTP服务器
$smtpserverport =25;//SMTP服务器端口
$smtpusermail = "18730261183@163.com";//SMTP服务器的用户邮箱
$smtpemailto = $touser;//发送给谁
$smtpuser = "18730261183";//SMTP服务器的用户帐号
$smtppass = "mima";//SMTP服务器的用户密码
$mailsubject = $title;//邮件主题
$mailbody = $body;//邮件内容
$mailtype = $type;//邮件格式（HTML/TXT）,TXT为文本邮件
##########################################
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
$smtp->debug = false;//是否显示发送的调试信息
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
}
ss("测试信息","<h1><a href=\"baidu.com\">我用原生的代码编的</a></h1>","18889871413@qq.com");
?>