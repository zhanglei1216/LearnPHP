<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 15/10/20
 * Time: 下午5:39
 */
function checkLength($str, $min, $max){
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