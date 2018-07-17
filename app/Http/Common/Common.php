<?php
/**
 * Created by PhpStorm.
 * User: chhaichivon
 * Date: 12/7/17
 * Time: 7:34 PM
 */

class Common {


    function randomString() {
        $length = 6;
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

}