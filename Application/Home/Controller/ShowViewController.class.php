<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 15/10/21
 * Time: 下午1:41
 */

namespace Home\Controller;


use Think\Controller;

class ShowViewController extends Controller {
    public function showView(){
//        header('Content-Type:application/json; charset=utf-8');

//        $this->assign('user', '我是Default');
//        $this->theme('Blue')->display();
//        $this->display('Bule/BB/add');
//        $this->display('Admin@bb/dd');
//        $this->display('./Template/Public/View/index.html');
//        echo T();
//        echo T('Admin@Bbb/add');
//        $this->display(T());
        //先获取


//        $user = M('User');
//       $data = $user->find();
//
////        $user = 'jfiodsajoifj';
//        $data = time();
//        $this->assign('data', $data);
//        layout('Public/layout');
        $this->display();


    }

    public function label(){
        $user = M('User');
        $data = $user->select();
        $this->assign('data', $data);
        $this->assign('empty','<strong style="color: red">没有数据</strong>');
        $this->display();
    }


} 