<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


function getJsonParams(){
    $params= file_get_contents("php://input");
    return json_decode($params);
}


function respone($code,$message="",$data=null){
    if (!is_numeric($code)){
        return jsonResult(404,"服务器错误");
    }
    return jsonResult($code,$message,$data);
}

function jsonResult($code,$message="",$data){
    if (!isset($data)){
        $result = array(
            "code"=>$code,
            "message"=>$message,
        );
    }else{
        $result = array(
            "code"=>$code,
            "message"=>$message,
            "rs"=>$data
        );
    }
    return json($result);
}