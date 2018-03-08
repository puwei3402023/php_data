<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/7
 * Time: 21:59
 */

namespace WeiApplication;


/**
 * 时间插件
 * Time the plug-in
 * Class Getdate
 * @package frontend\component
 */
class GetDate
{

    /**
     * 给定时间获取当月的开始时间
     * $type 默认反回时间戳,false 格式时间
     *
     * @param $date
     * @param bool $returnFirstDay
     * @param bool $type
     * @return false|int|string
     */
    public static function getMonthRange( $date, $returnFirstDay = true,$type=true ) {
        $timestamp = strtotime( $date );
        if ( $returnFirstDay ) {
            $monthFirstDay = date( 'Y-m-1 00:00:00', $timestamp );
        } else {
            $mdays = date( 't', $timestamp );
            $monthFirstDay = date( 'Y-m-' . $mdays . ' 23:59:59', $timestamp );
        }
        return $type?strtotime($monthFirstDay):$monthFirstDay;
    }

    /**
     * 给定时间返回当天开始时间和结束时间
     * @param $date
     * @param bool $returnFirstDay
     * @param bool $type
     * @return false|int|string
     */
    public static function getDay($date, $returnFirstDay = true,$type=true){

        $timestamp = strtotime( $date );
        if ( $returnFirstDay ) {
            $monthFirstDay = date( 'Y-m-d 00:00:00', $timestamp );
        } else {
            $monthFirstDay = date( 'Y-m-d 23:59:59', $timestamp );
        }
        return $type?strtotime($monthFirstDay):$monthFirstDay;
    }

    /**
     * 给定时间返回当年开始时间和结束时间
     * @param $date
     * @param bool $returnFirstDay
     * @param bool $type
     * @return false|int|string
     */
    public static function getYears($date, $returnFirstDay = true,$type=true){

        $timestamp = strtotime( $date );
        if ( $returnFirstDay ) {
            $monthFirstDay = date( 'Y-1-1 00:00:00', $timestamp );
        } else {
            $monthFirstDay = date( 'Y-12-31 23:59:59', $timestamp );
        }
        return $type?strtotime($monthFirstDay):$monthFirstDay;
    }
    /**
     * 给定时间戳开始时间和结束时间返回天数
     * @param $begin_time
     * @param $end_time
     * @return array
     */
    public static function timeDiffDays( $begin_time, $end_time )
    {
        if ( $begin_time < $end_time ) {
            $starttime = $begin_time;
            $endtime = $end_time;
        } else {
            $starttime = $end_time;
            $endtime = $begin_time;
        }
        $timediff = $endtime - $starttime;
        $days = intval( $timediff / 86400 );
        return $days;
    }


    /**
     * 给定2个时间返回多少个月
     * $end 结束不给就是默认当前时间
     * @param $tart
     * @param string $end
     * @return int
     */
    public static function twoTimeToMonth($tart,$end)
    {

        $begin_time = strtotime($tart); // 自动为00:00:00 时分秒 两个时间之间的年和月份
        $end_time = strtotime($end);
        if ( $begin_time < $end_time ) {
            $starttime = $begin_time;
            $endtime = $end_time;
        } else {
            $starttime = $end_time;
            $endtime = $begin_time;
        }
        $sum=1;
        while( ($starttime= strtotime('+1 month', $starttime)) < $endtime){
            ++$sum;
        }
        return $sum;
    }
}