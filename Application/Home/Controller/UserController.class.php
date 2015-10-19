<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 15/10/17
 * Time: 下午1:55
 */

namespace Home\Controller;
use Think\Controller;
use Think\Model;

class UserController extends Controller {
    public  function  create(){
//       $user = M('User');
//        var_dump($user->create($_POST, Model::MODEL_INSERT));
//        var_dump($user->create($_POST, Model::MODEL_UPDATE));
//        var_dump($user->field('user')->create($_POST, Model::MODEL_INSERT));


        //在MODEL中限制字段
        $user = D('User');
        var_dump($user->create($_POST, Model::MODEL_INSERT));

    }

    public function  add(){
        $user = M('User');
//        $data = $user->create();
//        $data['date'] = date('Y-m-d H:i:s');

//        $data = new \stdClass();
//        $data->user = $_POST['user'];
//        $data->email = $_POST['email'];
//        $data->date = date('Y-m-d H:i:s');

//        $data['user'] = 'donghu';
//        $data['email'] = 'dfadsfads@qq.com';
//        $data['date'] = date('Y-m-d H:i:s');


        $data = 'user=形式&email=jfidsajiofs@djfia&date='.date('Y-m-d H:i:s');

        var_dump($user->data($data)->add());

//        var_dump($user->add($data));
    }
    public function select(){
        $user = M('User');
//        var_dump($user->select());r
        //获取第一条所有数据
//        var_dump($user->find());
        //获取第一条user字段值
//        var_dump($user->getField('user'));
        //获取所有user
//        var_dump($user->getField('user', true));
        //传递多个字段获取所有 重复的会被去掉 第一个字段当key
        var_dump($user->getField('user,email'));
        //传递多个字段获取所有
//        var_dump($user->getField('id,user,email'));
        //输出字符创格式的数组字符串中不同的字段值用制定的分隔符隔开
//        var_dump($user->getField('id,user,email', ':'));

    }


} 