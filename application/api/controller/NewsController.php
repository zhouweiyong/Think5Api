<?php

namespace app\api\controller;
use think\Request;

/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 2016/10/18
 * Time: 下午10:43
 */
class NewsController
{
    public function newsList(){
//        $params = $request->param();
        dump(getJsonParams());
        return respone(200,"请求成功","");
        $params = input();
        dump($params) ;
    }
}