<?php

include_once '../API/class.phpmailer.php';
include_once '../API/class.smtp.php';

$email=new PHPMailer();  // 定义一个很多对象的邮件变量函数                   new 实例化$eamil类，这个类里面有很多方法   PHPMailer是一个用于发送电子邮件的PHP函数包。

//var_dump($email);
//exit();

$code = mt_rand(100000, 999999);
session_start();
$_SESSION['code'] = $code;
$email->SMTPDebug=false;           //  是否显示发送过程中的信息                     false 是不用返回值 不输出值     TRUE  是会输出文档信息
$email->IsSMTP();                  //
$email->SMTPAuth=true;
$email->Host='smtp.163.com';              //需要发送邮件的主机       通常是smtp.xx.com  xx代表qq，163,126；
$email->Username='shixiaoqiandeyx@163.com';                      //发送邮箱的账号
$email->Password='19980428sxq';                    // 授权码 在邮箱里面设置  密码
$email->From='shixiaoqiandeyx@163.com';                         //从哪里发送
$email->CharSet='utf-8';
$email->AddAddress('suntongtong_201708@163.com');                //接收邮件的地址
$email->Subject='sxq博客验证码';                     //邮件标题
$email->Body="您的验证码为:{$code}";                        //邮件内容
$bool = $email->send();   //发送邮件  返回值为 bool 成功为true
if($bool){
    echo "邮件发送成功";
}
echo $_SESSION['code'];