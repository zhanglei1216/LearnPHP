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


    /*数据读取*/
    public function select(){
        $user = M('User');
//        var_dump($user->select());
        //获取第一条所有数据
//        var_dump($user->find());
        //获取第一条user字段值
//        var_dump($user->getField('user'));
        //获取所有user
//        var_dump($user->getField('user', true));
        //传递多个字段获取所有 重复的会被去掉 第一个字段当key
//        var_dump($user->getField('user,email'));
        //传递多个字段获取所有
//        var_dump($user->getField('id,user,email'));
        //输出字符创格式的数组字符串中不同的字段值用制定的分隔符隔开
//        var_dump($user->getField('id,user,email', ':'));


    }
    /**
     * 数据更新
     */
    public function save(){
        $user = M('User');
        //连贯操作update
//        $data['user'] = '樱桃大丸子';
//        $data['email'] = '随便输入';
//        $map['id'] = 1;
//        $user->where($map)->save($data);

        //非连贯操作update
//        $data['user'] = '樱桃';
//        $data['email'] = '326023094@qq.com';
//        $data['id'] = 1;
//        $user->save($data);

        //自动获取表单update
//        $user->create();
//        $user->save();

        //更改一个字段
//        $map['id'] = 1;
//        $user->where($map)->setField('user', '新新');

        //字段累加累减
//        $map['id'] = 1;
//        echo $user->where($map)->setInc('cout', 2);
//        echo $user->where($map)->setDec('cout', 1);
    }
    public function delete(){
        $user = M('User');

        //直接删除参数为主键
//        $user->delete(2);

        //连贯操作按住键删除
//        $map['id'] = 1;
//        $user->where($map)->delete();

        //批量删除
//        $user->delete('2,4,5');


        $map['cout'] = 0;
        $user->where($map)->order(array('date'=>'DESC'))->limit(2)->delete();

    }

    public function ar(){
        $user = M('user');

//        $user->user = '添加';
//        $user->email = '添加email';
//        $user->cout = '5';
//        $user->date = date('Y-m-d H:i:s');
//        $user->add();

        //按住键查找
//        var_dump($user->find(2));

        //按user值查找
//        $user->getByUser('新新');
//        echo $user->email;

        //直接按多个主键查找
//        var_dump( $user->select('1,2,3'));

        //修改当前找到的数据
//        $user->find(1);
//        $user->user = 'userss';
//        $user->save();


        //删除当前找到的数据
//        $user->find(3);
//        $user->delete();

        //按一个或多个主键删除
//        $user->delete(2);
    }

    public function model(){
        //字段映射将 protected $_map = array('xiangming'=>'user', 'youxiang' => 'email');
        $user = D('User');
//        $user->scope()->sql1()->select();
//        var_dump($user->scope()->sql2()->select());
//        var_dump($user->scope()->select());
//        var_dump($user->scope('sql1')->select());


    }



    public function valid(){
        header('Content-Type:text/html; charset=utf-8');
//        header("Content-type:text/html;charset=utf-8");

        /*静态验证*/
//        $user = D('user');
//        $data['user'] = 'zx'] = 'lisi';
//        if($user->create($data)){
//            echo '验证通过';
//        }else{
//            $this->ajaxReturn($user->getError(),'JSON');
//        }


       /*动态验证*/


        $rule = array(
//        array('user', 'require', '用户名不得为空！', 0, 'regex', 3),
            array('email', 'email', '邮箱格式不正确', 0, 'regex', 3),
//        array('user', 'url', 'url格式不合法'),
//        array('user', 'currency', '货币格式不正确！'),
//        array('user', 'zip', '邮政编码必须是六位正整数！'),
//        array('user', 'number', '必须是正整数！'),
//        array('user', 'integer', '必须是整数！'),
//        array('user', 'double', '必须是浮点数'),
//        array('user', 'english', '必须是纯英文！'),
//        array('user', '/^[0-9]{3,6}$/', '必须是3-6位纯数字'),
//        array('user', 'zhanglei', '传递过来的值不相等!', 0, 'equal'),
//        array('user', 'zhanglei', '传递过来的值不能等于zhanglei', 0, 'notequal'),
//        array('user', 'name', '两个值不相等！', 0, 'confirm'),
//        array('user', array(1,3,4), '不在指定范围内！', 0, 'in'),
//        array('user', 'zhangsan,lisi,wangwu', '不允许在制定范围内！', 0, 'notin'),
//        array('user', '3', '不得小于三位!', 0, 'length'),
//        array('user', '3,6', '不得小于三位不得大于六位！', 0, 'length'),
//        array('user', array(3, 5), '必须是3-5之间的数字！', 0, 'between'),
//        array('user', array(3, 5), '不得是3-5之间的数字！', 0, 'notbetween'),
//        array('user', '2015-1-1,2015-10-10', '表单提交不在有效期内！', 0, 'expire'),
//        array('user', '128.0.0.1', '您的ip没有被允许！', 0, 'ip_allow'),
//        array('user', '127.0.0.1', '您的ip被禁止！', 0, 'ip_deny'),
        array('user', 'checkLength', '用户名长度必须在3-5之间', 0, 'callback'),
//            array('user', 'checkLength', '用户名长度必须在3-5之间', 0, 'function')
        );

        $user = D('User');
        $data['user']  = 'lisi';
        $data['email'] = 'fdsa';

        if($user->validate($rule)->create($data)){
            echo '验证通过';
        }else{
            print_r($user->getError());
        }
    }

} 