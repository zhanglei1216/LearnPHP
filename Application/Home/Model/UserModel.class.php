<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 15/9/17
 * Time: 下午4:42
 */

namespace Home\Model;

use Think\Model;

class UserModel extends Model {
    //更改前缀
//    protected $tablePrefix = 'tp_';

    //更改表名
//    protected $tableName = 'fdas';

    //更改前缀加表名
//    protected $trueTableName = 'tp_fads';

    //更改数据库名
//    protected  $dbName = 'mysql';

//映射字段
    protected $_map = array(
        'xiangming'=>'user',
        'youxiang' => 'email'
    );

//查找字段
    protected $_scope = array(
        'sql1'=>array(
            'where'=>array(
                'id'=>1
            )
        ),
        'sql2'=>array(
            'order'=>array(
                'date'=>'DESC'
            ),
            'limit'=>2,
        ),

        'default'=>array(
            'where'=>array(
                'id'=>2
            )
        )
    );

    /**
     * 第一个为字段名
     * 第二个为 验证规则 require（字段必填）、email（邮箱格式）、url（url格式）、currency（货币）、number（正整数）、integer（整数）、double（浮点数）
     * zip（邮政编码）、english（英文）默认采用的规则是正则表达式（regex）
     * 第三个为错误提示
     * 第四个为验证条件 1.self::EXITS_VALIDATE 或 0， 表示字段存在就验证（默认）；
     *                2.self::MUST_VALIDATE 或 1，表示必须验证；
     *                3.self::VALUE_VALIDATE 或 2，表示值不为空得时候验证
     * 第五个为附加规则 regex 正则验证 function 函数验证
     * 第六个为验证时间 1.self::MODEL_INSERT 或 1 新增数据时验证
     *                2.self::MODEL_UPDATE 或 2 编辑数据时验证
     *                3.self::MODEL_BOTH 或 3 全部情况下验证（默认）
     *（后三个可以不写）
     */
//    protected $_validate = array(
////        array('user', 'require', '用户名不得为空！', 0, 'regex', 3),
//        array('email', 'email', '邮箱格式不正确', 0, 'regex', 3),
////        array('user', 'url', 'url格式不合法'),
////        array('user', 'currency', '货币格式不正确！'),
////        array('user', 'zip', '邮政编码必须是六位正整数！'),
////        array('user', 'number', '必须是正整数！'),
////        array('user', 'integer', '必须是整数！'),
////        array('user', 'double', '必须是浮点数'),
////        array('user', 'english', '必须是纯英文！'),
////        array('user', '/^[0-9]{3,6}$/', '必须是3-6位纯数字'),
////        array('user', 'zhanglei', '传递过来的值不相等!', 0, 'equal'),
////        array('user', 'zhanglei', '传递过来的值不能等于zhanglei', 0, 'notequal'),
////        array('user', 'name', '两个值不相等！', 0, 'confirm'),
////        array('user', array(1,3,4), '不在指定范围内！', 0, 'in'),
////        array('user', 'zhangsan,lisi,wangwu', '不允许在制定范围内！', 0, 'notin'),
////        array('user', '3', '不得小于三位!', 0, 'length'),
////        array('user', '3,6', '不得小于三位不得大于六位！', 0, 'length'),
////        array('user', array(3, 5), '必须是3-5之间的数字！', 0, 'between'),
////        array('user', array(3, 5), '不得是3-5之间的数字！', 0, 'notbetween'),
////        array('user', '2015-1-1,2015-10-10', '表单提交不在有效期内！', 0, 'expire'),
////        array('user', '128.0.0.1', '您的ip没有被允许！', 0, 'ip_allow'),
////        array('user', '127.0.0.1', '您的ip被禁止！', 0, 'ip_deny'),
//        array('user', 'checkLength', '用户名长度必须在3-5之间', 0, 'callback'),
////        array('user', 'checkLength', '用户名长度必须在3-5之间', 0, 'function')
//    );

    protected $patchValidate = true;

    public function __construct(){
        parent::__construct();
    }

    public  function checkLength($str, $min, $max){
        //匹配成数组
//        preg_match_all('/./u', $str, $matches);
//        $len = count($matches[0]);
        $len = strlen($str);
        if($len >= 3 && $len <= 5){
            return true;
        }else{
            return false;
        }
    }

//    //在模型中限制字段
//    protected $insertFields = 'user';
//    protected $updateFields = 'user';
} 