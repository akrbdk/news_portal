<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.02.2017
 * Time: 15:54
 */

return array(
    '' => 'news/index',                                 //если запрос пуст - переходим на главную страницу
    'news/view/([0-9]+)' => 'news/view/$1',          //просмотр одной новости
    'news' => 'news/index',                     //роут для главной страницы

);