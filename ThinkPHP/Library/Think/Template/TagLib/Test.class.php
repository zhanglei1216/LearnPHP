<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 15/10/26
 * Time: 下午1:44
 */

namespace Think\Template\TagLib;

/**
 * test标签驱动
 */
use Think\Template\TagLib;

class Test extends TagLib{
    protected $tags   =  array(
        // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
        'mytest'    => array('attr'=>'color,border,name','close'=>1),
    );

    public function _mytest($tag,$content){
        return $content.':<input type="text" style="border-color: '.$tag['color'].';border-width: '.$tag['border'].'px" name='.$tag['name'].'/>';
    }
} 