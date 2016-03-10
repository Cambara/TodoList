<?php
/**
 * Created by PhpStorm.
 * User: cambara
 * Date: 09/03/16
 * Time: 21:18
 */
namespace App\tools;


class Service{
    public static function convertArrayToClass($array,$obj)
    {
        foreach($array as $key => $value){
            $set = 'set'.ucfirst($key);
            if(method_exists($obj,$set)==true){
                $obj->{$set}($value);
            }
        }
        return $obj;
    }
    public static function encryptPassword($s){
        return md5($s);
    }
}