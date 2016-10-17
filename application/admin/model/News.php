<?php

namespace app\admin\model;
use think\Model;

/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 2016/10/13
 * Time: 下午11:36
 */
class News extends Model
{
    protected $table = "api_news";

    protected $pk = "id";

    protected $field=[
        "id"=>"int",
        "newsTitle"=>"varchar",
        "author"=>"varchar",
        "newsContent"=>"text",
        "createTime"=>"int"
    ];
}