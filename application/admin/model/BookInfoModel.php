<?php
/**
 * Created by PhpStorm.
 * User: zgl
 * Date: 16/12/25
 * Time: 下午4:16
 */

namespace app\admin\model;

use think\Model;
class BookInfoModel extends Model
{
    protected $table = "book_info";

//    protected function getPublishtimeAttr($value, $data){
//        return date('Y/m/d', $data['publishtime']);
//    }
//
//    protected function setPublishTimeAttr($value) {
//        return strtotime($value);
//    }


    protected $type = [
        'publishtime' => 'timestamp:Y/m/d',
    ];

}