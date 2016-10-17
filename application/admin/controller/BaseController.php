<?php
/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 2016/10/11
 * Time: 下午11:09
 */

namespace app\admin\controller;


use think\Controller;

class BaseController extends Controller
{
    protected $project;

    protected function _initialize()
    {
        $this->project = config("project.PROJECT");
    }
}