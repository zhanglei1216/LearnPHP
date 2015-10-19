<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 15/9/17
 * Time: 下午4:42
 */

namespace Admin\Model;

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


    public function __construct(){
        parent::__construct();
        echo "/Admin";
    }

} 