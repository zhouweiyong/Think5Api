<?php
/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 16/10/8
 * Time: 下午11:22
 */

namespace app\admin\controller;


use think\Config;
use think\Controller;

class IndexController extends BaseController{

    public function index(){
       // dump(Config::get("project.PROJECT"));
//        $project = Config::get("project.PROJECT");
        $this->project["current_control"]="控制台";
        $this->project["current_action"]="查看";
        $this->project["menu"]["index_control"]["control_status"]="active";
        $this->assign("Config",$this->project);
        return $this->fetch();
    }
}