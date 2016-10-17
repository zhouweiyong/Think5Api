<?php
/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 2016/10/11
 * Time: 下午11:22
 */

namespace app\admin\controller;


class ProductController extends BaseController
{

    //商品列表
    public function show(){
        $this->project["current_control"]="商品模块";
        $this->project["current_action"]="商品列表";
        $this->project["menu"]["product_control"]["control_status"]="active open";
        $this->project["menu"]["product_control"]["control_sub"]["pro_show"]["sub_status"]="active";
        $this->assign("Config",$this->project);
        return $this->fetch();
    }

    //添加商品
    public function add(){
        $this->project["current_control"]="商品模块";
        $this->project["current_action"]="添加商品";
        $this->project["menu"]["product_control"]["control_status"]="active open";
        $this->project["menu"]["product_control"]["control_sub"]["pro_add"]["sub_status"]="active";
        $this->assign("Config",$this->project);
        return $this->fetch();
    }

}