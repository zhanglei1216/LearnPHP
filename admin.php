<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 15/9/17
 * Time: 下午1:32
 */

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

//加载admin模块
$_GET['m'] = 'Admin';

// 定义应用目录
define('APP_PATH','./Application/');

//设置目录生成的文件
define('DIR_SECURE_FILENAME', 'index.html');

////设置目录文件内容
//define('DIR_SECURE_CONTENT', '访问路径错误！');
//
////禁用目录文件
//define('BUILD_DIR_SECURE', false);

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';



// 亲^_^ 后面不需要任何代码了 就是如此简单