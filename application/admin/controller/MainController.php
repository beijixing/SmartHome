<?php
/**
 * Created by PhpStorm.
 * User: horse
 * Date: 16/12/23
 * Time: 下午5:02
 */

namespace app\admin\controller;

use think\Controller;
use think\Request;
class MainController extends Controller
{
    public function index() {

        return $this->fetch();
    }
}