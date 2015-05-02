<?php 
/* 
这是一个测试程序!!! 
*/ 
require("smtp.class.php"); 
########################################## 
$smtpserver = "smtp.163.com";//SMTP服务器 
$smtpserverport = 25;//SMTP服务器端口 
$smtpusermail = "reterry123@163.com";//SMTP服务器的用户邮箱 
$smtpemailto = "m18730261183@163.com";//发送给谁 
$smtpuser = "reterry123";//SMTP服务器的用户帐号 
$smtppass = "014040001";//SMTP服务器的用户密码 
$mailsubject = "中文";//邮件主题 
$mailbody = "<h1>中文</h1>测试下能淤泥新年感";//邮件内容 
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件 
########################################## 
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证. 
$smtp->debug = TRUE;//是否显示发送的调试信息 
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
?>