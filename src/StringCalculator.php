<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/8/2017
 * Time: 10:24 PM
 */
class StringCalculator
{

    /**
     * StringCalculator constructor.
     */
    public function __construct()
    {
    }

    public function add($string)
    {
        $string = str_replace("\n",",",$string);
        return array_sum(explode(",", $string));
    }
}