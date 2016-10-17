<?php
/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 2016/10/11
 * Time: 下午11:34
 */

namespace app\admin\controller;


use app\admin\model\News;

class NewsController extends BaseController
{

    public function add(){
        $this->project["current_control"]="新闻模块";
        $this->project["current_action"]="添加新闻";
        $this->project["menu"]["news_control"]["control_status"]="active open";
        $this->project["menu"]["news_control"]["control_sub"]["news_add"]["sub_status"]="active";
        $this->assign("Config",$this->project);
        return $this->fetch();
    }

    public function addNews(){
        $news = new News();
        $news->createTime = time();
        if ($news->validate(true)->save(input("post."))){
            $this->success("新闻添加成功！");
        }else{
            $this->error($news->getError());
        }

    }

    public function show(){
        $this->project["current_control"]="新闻模块";
        $this->project["current_action"]="新闻列表";
        $this->project["menu"]["news_control"]["control_status"]="active open";
        $this->project["menu"]["news_control"]["control_sub"]["news_show"]["sub_status"]="active";
        $this->assign("Config",$this->project);

        $newsList =  News::all();
        $this->assign("newsList",$newsList);
        return $this->fetch();
    }

}