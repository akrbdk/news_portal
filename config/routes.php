<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.02.2017
 * Time: 15:54
 */

return array(
    '' => 'news/index',

    'news/create/new' => 'news/create/new',                  // Сoздание новой новости

    'news/delete/([0-9]+)' => 'news/delete/$1',      // Удаление новой новости

    'news/view/([0-9]+)' => 'news/view/$1',          //просмотр одной новости
    'news/index' => 'news/index',                     //роут для главной страницы




);