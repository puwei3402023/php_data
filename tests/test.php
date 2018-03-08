<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/8
 * Time: 15:08
 */
require( '../src/GetDate.php');
//返回当月开始时间 ,时间戳
echo \WeiApplication\GetDate::getMonthRange('201838'),"\r\n";
//字符串
echo \WeiApplication\GetDate::getMonthRange('2018-3-8',false,false),"\r\n";
echo \WeiApplication\GetDate::getMonthRange('2018-3-8',true,false),"\r\n";
//返回今天开始时间
echo \WeiApplication\GetDate::getDay('2018-3-8',true,false),"\r\n";
echo \WeiApplication\GetDate::getDay('2018-3-8',false,false),"\r\n";

echo \WeiApplication\GetDate::getDay('2018-3-8',true),"\r\n";
echo \WeiApplication\GetDate::getDay('2018-3-8',false),"\r\n";

//返回今年开始时间
echo \WeiApplication\GetDate::getYears('2018-3-8',true,false),"\r\n";
echo \WeiApplication\GetDate::getYears('2018-3-8',false,false),"\r\n";

echo \WeiApplication\GetDate::getYears('2018-3-8',true),"\r\n";
echo \WeiApplication\GetDate::getYears('2018-3-8',false),"\r\n";

//给定2个时间返回月数
echo \WeiApplication\GetDate::twoTimeToMonth('2018-5-10','2018-4-9'),"\r\n";



