<?php
/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 2016/10/11
 * Time: 下午10:57
 */

namespace app\admin\controller;


use app\admin\model\User;
use think\Controller;

class AccountController extends BaseController
{


    public function add()
    {
        $this->project["current_control"] = "用户模块";
        $this->project["current_action"] = "添加";
        $this->project["menu"]["user_control"]["control_status"] = "active open";
        $this->project["menu"]["user_control"]["control_sub"]["user_add"]["sub_status"] = "active";
        $this->assign("Config", $this->project);
        return $this->fetch();
    }

    public function addAction()
    {
        $user = new User();
        if ($user->save(input("post."))) {
            $this->success("用户添加成功");
        } else {
            $this->error($user->getError());
        }
    }

    public function loginAction()
    {

        $userName = input("userName");
        $passWord = input("passWord");
        $list = User::all(["userName" => $userName, "passWord" => $passWord]);
        if (sizeof($list)) {
            return json(["message" => "登录成功"]);
        } else {
            return json(["message" => "登录失败"]);
        }

    }

    public function show()
    {
        $this->project["current_control"] = "用户模块";
        $this->project["current_action"] = "查看";
        $this->project["menu"]["user_control"]["control_status"] = "active open";
        $this->project["menu"]["user_control"]["control_sub"]["user_show"]["sub_status"] = "active";
        $this->assign("Config", $this->project);
        return $this->fetch();
    }
}