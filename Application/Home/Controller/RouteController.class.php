<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 15/10/26
 * Time: 下午2:40
 */

namespace Home\Controller;


use Think\Controller;

class RouteController extends Controller {
    public function route(){
        //生成URL
        echo U();
        //生成其他控制器url
//        echo U('Member/add');
        //支持参数
//        echo U('Member/add?id=5');
//        echo U('Member/add/id/5'); //PATHINFO 写法不支持生成url
        //传多个参数
//        echo U('Member/add', array('id' => 5, 'type' => 6), 'xml');
//        echo U('Member/add?id=5&type=6');
        //和路由规则混合使用
//        echo U('/m/5');
//        echo U('/m_5');
        //支持域名和锚点
//        echo U('Member/add@www.baidu.com?id=5');
//        echo U('Member/add#comment?id=5');
        $this->display();
    }
} 