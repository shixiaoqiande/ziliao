<?php

define('SQLSRC','127.0.0.1');
define('USERNAME','root');
define('USERWORD','12345678');
define('SQLNAME','bokes');
define('SQLNUM',3306);

function conn(){
    $link = @mysqli_connect(SQLSRC, USERNAME, USERWORD, SQLNAME, SQLNUM);
    if(!$link){
        return false;
    }else{
        return $link;
    }
}

