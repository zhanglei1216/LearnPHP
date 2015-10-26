<?php
return array(
	//'配置项'=>'配置值'
    //禁止模块访问
//    'MODULE_DENY_LIST' => array('Common', 'Runtime'),
    //允许访问模块
//    'MODULE_ALLOW_LIST' => array('Admin', 'Home'),

    //默认加载模块
//    'DEFAULT_MODULE' => 'Admin',
    //是否允许加载多个模块
//    'MULTI_MODULE' => false,
    //设置PATHINFO
//    'URL_PATHINFO_DEPR' => '_',
    //修改键名称
    /*
    'VAR_MODULE' => 'mm',
    'VAR_CONTROLLER' => 'cc',
    'VAR_ACTION' => 'aa'
    */


/* 3.2.3版本以前数据库设置 */
    //mysal数据库配置
    /*
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_USER' => 'root',
    'DB_PWD' => '123456',
    'DB_NAME' => 'thinkphp',
    'DB_PORT' => 3306,
    'DB_PREFIX' => 'think_',
    */

    //PDO专用定义
    /*
    'DB_TYPE' => 'pdo',
    'DB_USER' => 'root',
    'DB_PWD' => '123456',
    'DB_PREFIX' => 'think_',
    'DB_DSN' => 'mysql:host=localhost;dbname=thinkphp;charset=UTF8',
    */

    /* 3.2.3版本数据库设置 */

    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'thinkphp',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'think_',    // 数据库表前缀
    'DB_PARAMS'          =>  array(), // 数据库连接参数
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_LITE'             =>  false,    // 使用数据库Lite模式
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号


    //数据库单独设置

    /*
    'DB_CONFIG1' => array(
        'db_type' => 'mysql',
        'db_host' => 'localhost',
        'db_user' => 'root',
        'db_pwd' => '123456',
        'db_port' => '3306',
        'db_name' => 'thinkphp',
        'db_charset' => 'utf8'
    ),

    'DB_CONFIG2' => 'mysql://root:123456@localhost:3306/thinkphp#utf8',
    */
    //页面调试工具
    'SHOW_PAGE_TRACE' => ture,

    //修改视图目录
    'DEFAULT_V_LAYER' => 'View',

    //修改模板文件的后缀
//    'TMPL_TEMPLATE_SUFFIX' => '.tpl',

    //用下划线修改目录层次
//    'TMPL_FILE_DEPR' => '_',

    //设置外部的模板目录
//    'VIEW_PATH'=>'./Public/',

    //设置默认主题
    'DEFAULT_THEME' => 'Default',

    //设置定界符 （定界符和$符之间不能有空格）
    'TMPL_L_DELIM' => '<{',
    'TMPL_R_DELIM' => '}>',


    //模板布局
//    'LAYOUT_ON' => true,
//    'LAYOUT_NAME' => 'Public/layout',
//    'TMPL_LAYOUT_ITEM' => '{__REPLACE__}',

//    'TMPL_PARSE_STRING' => array(
//        '__PUBLIC_' => '/Common',
//        '__UPLOAD_' => '/Uploads',
//    ),

//    //将外置标签设置为内置标签
//    'TAGLIB_BUILD_IN' => 'cx,html',
    //外置标签预加载
    'TAGLIB_PRE_LOAD' => 'html,test',

    //设置可访问模块
//    'MODULE_ALLOW_LIST' => array('Home', 'Admin'),

    //设置默认模块
//    'DEFAULE_MODULE' => 'Home',

    //启用路由
//    'URL_ROUTER_ON' => true,
//    'URL_ROUTE_RULES' => array(
//        'r' => 'Route/route', //静态路由
//        'r/:id' => 'Route/route',//静态和动态路由
//        'r/:type/:attr/:list' => 'Route/route',//多参数
//        ':r/:type/:attr/:list' => 'Route/route',//全动态路由
//        'r/:id\d' => 'Route/route', //规则路由必须输入的是数字
//        'r/:id\d{2,3}|md5' => 'Route/route', //支持函数 md5加密
//        'r/[:id\d]' => 'Route/route', //可选参数
//        'r/:id\d$' => 'Route/route', //规则路由，后面不可以加东西
//        '/^r\/(\d{2})$/' => 'Route/route?id=:1', //正则路由
//        '/^r\/(\d{2})$/' => 'Route/route?id=:1|md5', //正则路由支持函数

        //闭包支持
//        'r/:id\d' => function($id){
//            echo $id;
//        },

//    ),

    //配置静态路由
//    'URL_MAP_RULES' => array(
//        'R/r' => 'Route/route',
//    ),

    //开启不区分大小写模式
//    'URL_CASE_INSENSITIVE' => true,


    //设置伪静态后缀，默认为html, 如果设置为空’‘那么就可以是任意后缀
//    'URL_HTML_SUFFIX' => 'shtml',

    //重写模式
    'URL_MODEL' => 1,
    'URL_MODEL' => 2,  //去掉U()生成url中的index.php

);