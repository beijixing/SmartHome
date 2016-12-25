<?php
/**
 * Created by PhpStorm.
 * User: zgl
 * Date: 16/12/25
 * Time: 下午4:43
 */

namespace app\admin\validate;

use think\Validate;
class BookInfoModel extends Validate
{
    protected $rule = [
        'publishtime' => ['dateFormat:Y/m/d'],
        'name' => ['require'],
        'publisher' => ['require'],
        'price' => ['require'],
    ];
}