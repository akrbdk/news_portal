<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.02.2017
 * Time: 18:04
 */
class CommentsController
{

    public function actionIndex()
    {

        $string = '10-11-2017';
        $pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
        $result = 'Month $2, Day: $1, Year: $3.';
        echo preg_replace($pattern, $result, $string);
    }

}