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

use app\admin\model\BookInfoModel;
class MainController extends Controller
{
    public function index() {

        return $this->fetch();
    }

    public function addBook(Request $request) {
        $bookModel = new BookInfoModel();
        if (false != $bookModel->allowField(true)->validate(true)->save($request->param())){
            return $this->modal("新增成功!", true);
        }else{
            return $this->modal($bookModel->getError(), false);
        }
    }

    public function modal($msg, $clear){
        $this->assign('msg', $msg);
        $this->assign('clear', $clear);
        return $this->fetch('modal');
    }}