<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <!--<script type="text/javascript" src="/Public/js/index.js"></script>-->
    <!--<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />-->

    <title></title>
    <!--<script type="text/javascript" src="/Public/js/index.js"></script>-->
    <!--<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />-->
    <!--<script type="text/javascript" src="/Public/js/index.js"></script>-->
    <!--<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />-->
    <!--<script type="text/javascript" src="/Public/js/index.js"></script>-->
    <!--<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />-->
</head>
<body>
<!--<?php if($user == '蜡笔小新'): ?>-->
    <!--小新-->
<!--<?php elseif($user == '黑崎一护'): ?>-->
    <!--一户-->
<!--<?php else: ?>-->
    <!--错误-->
<!--<?php endif; ?>-->


<!--<?php if(($user) == "蜡笔小新"): ?>小新<?php endif; ?>-->
<!--<?php if(in_array(($id), explode(',',"1,4,3"))): ?>-->
    <!--id in value-->
<!--<?php else: ?>-->
    <!--id not invalue-->
<!--<?php endif; ?>-->
<!--<?php $_RANGE_VAR_=explode(',',"1,3");if($id>= $_RANGE_VAR_[0] && $id<= $_RANGE_VAR_[1]):?>id between value<?php endif; ?>-->

<!--<?php $_RANGE_VAR_=explode(',',"1,3");if($id<$_RANGE_VAR_[0] || $id>$_RANGE_VAR_[1]):?>id not between value<?php endif; ?>-->

<!--<?php if(in_array(($id), explode(',',"1,2,3"))): ?>id in value<?php endif; ?>-->
<!--<?php $_RANGE_VAR_=explode(',',"1,2");if($id>= $_RANGE_VAR_[0] && $id<= $_RANGE_VAR_[1]):?>id between value<?php endif; ?>-->
<!--<?php $_RANGE_VAR_=explode(',',"1,1");if($id<$_RANGE_VAR_[0] || $id>$_RANGE_VAR_[1]):?>id not between value<?php endif; ?>-->

<!--<?php if(in_array(($_GET['id']), is_array($_GET['arr'])?$_GET['arr']:explode(',',$_GET['arr']))): ?>id in value<?php endif; ?>-->

<!--<?php if(isset($_GET['user'])): ?>-->
    <!--user 已存在-->
<!--<?php else: ?>-->
    <!--user 不存在-->
<!--<?php endif; ?>-->

<!--<?php if(empty($_GET['user'])): ?>-->
    <!--user 为空-->
    <!--<?php else: ?>-->
    <!--user 不为空-->
<!--<?php endif; ?>-->

<!--<?php if(defined("APP_PATH")): ?>-->
    <!--长量已定义-->
<!--<?php else: ?>-->
    <!--长亮未定义-->
<!--<?php endif; ?>-->

<!--<ul>-->
    <!--<?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?>-->
        <!--<li>-->
            <!--<?php echo ($arr["id"]); ?>---<?php echo ($arr["user"]); ?>---<?php echo ($arr["email"]); ?>---<?php echo ($arr["date"]); ?>-->
        <!--</li>-->
    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
<!--</ul>-->

<!--<ul>-->
    <!--<?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($k % 2 );++$k;?>-->
        <!--<?php if(($mod) == "1"): ?>-->
        <!--<li>-->
            <!--<?php echo ($k); ?>--<?php echo ($arr["id"]); ?>---<?php echo ($arr["user"]); ?>---<?php echo ($arr["email"]); ?>---<?php echo ($arr["date"]); ?>-->
        <!--</li>-->
        <!--<?php endif; ?>>-->
    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->

<!--<ul>-->
    <!--<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?>-->
        <!--<li>-->
            <!--<?php echo ($key); ?>--<?php echo ($arr["id"]); ?>---<?php echo ($arr["user"]); ?>---<?php echo ($arr["email"]); ?>---<?php echo ($arr["date"]); ?>-->
        <!--</li>-->
    <!--<?php endforeach; endif; else: echo "$empty" ;endif; ?>-->
<!--</ul>-->

<!--<ul>-->
    <!--<?php if(is_array($data)): foreach($data as $key=>$arr): ?>-->
        <!--<li>-->
            <!--<?php echo ($key); ?>--<?php echo ($arr["id"]); ?>---<?php echo ($arr["user"]); ?>---<?php echo ($arr["email"]); ?>---<?php echo ($arr["date"]); ?>-->
        <!--</li>-->
    <!--<?php endforeach; endif; ?>-->
<!--</ul>-->
<!--<?php $__FOR_START_1820577410__=0;$__FOR_END_1820577410__=100;for($i=$__FOR_START_1820577410__;$i < $__FOR_END_1820577410__;$i+=2){ ?>-->
    <!--<?php echo ($i); ?><br/>-->
<!--<?php } ?>-->

<!--<?php $var = '123'; ?>-->



<!--<?php echo ($var); ?>-->



<!--<?php define('MY_NAME', '345'); ?>-->
<!--<?php echo (MY_NAME); ?>-->

<!-- 编辑器调用开始 --><script type="text/javascript" src="/Public/Js/FCKeditor/fckeditor.js"></script><textarea id="editor" name="remark">{$vo.remark}</textarea><script type="text/javascript"> var oFCKeditor = new FCKeditor( "editor","100%","320px" ) ; oFCKeditor.BasePath = "/Public/Js/FCKeditor/" ; oFCKeditor.ReplaceTextarea() ;function resetEditor(){setContents("editor",document.getElementById("editor").value)}; function saveEditor(){document.getElementById("editor").value = getContents("editor");} function InsertHTML(html){ var oEditor = FCKeditorAPI.GetInstance("editor") ;if (oEditor.EditMode == FCK_EDITMODE_WYSIWYG ){oEditor.InsertHtml(html) ;}else	alert( "FCK必须处于WYSIWYG模式!" ) ;}</script> <!-- 编辑器调用结束 -->
用户名:<input type="text" style="border-color: red;border-width: 2px" name=user/>
<img src="/Public/images/logo.png" />
</body>
</html>