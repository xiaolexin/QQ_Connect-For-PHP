<?php

require_once './QQ_Connect2.1/qqConnectAPI.php';

$qc = new QC();
//获取access_token
$access_token = $qc->qq_callback();
//获取openid(很重要!!!)---每个QQ用户唯一的区别其他用户的id，不可更改，说到这里应该明白可以干嘛了吧。
$openid = $qc->get_openid();
 echo "<pre>";print_r('您在本站的openid为：'.$openid);
//获取当前登陆QQ用户的信息--如果需要的话
//$qc=new QC($access,$openid);
//$uinfo=$qc->get_user_info();
//echo "<pre>";print_r($uinfo);

