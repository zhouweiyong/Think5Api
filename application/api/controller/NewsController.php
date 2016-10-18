<?php

namespace app\api\controller;
use app\api\model\News;
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
        $params = getJsonParams();
        $author = $params->author;
        $news = News::all(["author"=>$author]);
        
        return respone(200,"请求成功",$news);
    }
}