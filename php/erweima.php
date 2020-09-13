<?php

include_once '../API/phpqrcode/qrlib.php';

$obj = new QRcode();

$content='BEGIN:VCARD'."\n";
$content.='VERSION:2.1'."\n";
$content.='N:史'."\n";
$content.='FN:潇倩'."\n";
$content.='ORG:北京工商管理专修学院'."\n";
//$content.='TEL;WORK;VOICE:18515248559'."\n";
//$content.='TEL;HOME;VOICE:18868881112'."\n";
$content.='TEL;TYPE=cell:15227125856'."\n";
$content.='ADR;HOME:;;南口南大街21号;昌平区;北京市;100000;中国'."\n";
$content.='EMAIL:2411528561@qq.com'."\n";
$content.='URL:http://www.shixiaoqian.com'."\n";
$content.='END:VCARD'."\n";


$obj->png($content,'sxq.jpg',QR_ECLEVEL_L,3,4,true);