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

);