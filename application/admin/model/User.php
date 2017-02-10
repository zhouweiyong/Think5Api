<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17-2-10
 * Time: 下午5:55
 */

namespace app\admin\model;
use think\Model;

class User extends Model{
    protected $table = "api_user";

    protected $pk = "id";
} 