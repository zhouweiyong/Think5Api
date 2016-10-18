<?php
namespace app\api\model;
use think\Model;

/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 2016/10/18
 * Time: 下午11:34
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