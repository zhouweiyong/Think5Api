<?php
/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 2016/10/14
 * Time: 上午12:38
 */

namespace app\admin\validate;


use think\Validate;

class News extends Validate
{
    protected $rule=[
        "newsTitle"=>"require",
        "author"=>"require",
        "newsContent"=>"require",
    ];

    protected $message=[
        "newsTitle.require"=>"请输入标题",
        "author.require"=>"请输入作者名",
        "newsContent.require"=>"请输入新闻内容",
    ];
}