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
use think\Session;

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

    public function getInfo()
    {
        $userInfo = ["userName" => "tom", "age" => "23", "gender" => "man"];
        return json($userInfo);
    }

    public function postInfo()
    {
        $userName = input("userName");
        $age = input("age");
        $gender = input("gender");
        $userInfo = ["userName" => $userName, "age" => $age, "gender" => $gender];
        return json($userInfo);
    }


    public function postString()
    {
        $parameter = file_get_contents("php://input");
        return $parameter;
    }



    public function postFile()
    {
        $userName = input("userName");
        $age = input("age");
        $file = request()->file("upImage");
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if ($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
            echo $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            echo $info->getSaveName();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            echo $info->getFilename();
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }

        return $userName;
    }


    public function setSession(){
        session_start();
        echo session_id();
    }

}