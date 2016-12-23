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

        dump($data);
        dump($request->routeInfo());
        dump($request->param());
        echo "登录成功";
    }
}