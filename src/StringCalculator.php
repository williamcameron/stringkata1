<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/8/2017
 * Time: 10:24 PM
 */
class StringCalculator
{
    public function add($string)
    {
        $numbers = $this->convertToArray($string);
        $this->checkForNegativeNumbers($numbers);
        return array_sum($numbers);
    }

    private function convertToArray(String $string) : array {
        $delimiters = ["\n"];
        if(substr($string, 0, 2) == "//"){
            $delimiters[] = substr($string, 2, 1);
            $string = substr($string, 4);
        }

        foreach($delimiters as $delimiter){
            $string = str_replace($delimiter,",",$string);
        }
        return explode(",", $string);
    }

    private function checkForNegativeNumbers($numbers) {
        foreach($numbers as $number){
            if($number<0){
                throw new \Exception("negatives not allowed");
            }
        }
    }

}