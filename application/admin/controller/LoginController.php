<?php
/**
 * Created by PhpStorm.
 * User: horse
 * Date: 16/12/23
 * Time: 下午2:49
 */

namespace app\admin\controller;

use think\Controller;
use think\Request;
class LoginController extends Controller
{
    public function index() {

        return $this->fetch();
    }

    public function login(Request $request) {
        $data = input('post.');
        //TODO 在此检测登录用户名与密码
        $this->redirect(url('/main/index'));
        echo "登录成功";
    }
}