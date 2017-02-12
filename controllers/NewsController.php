<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.02.2017
 * Time: 18:05
 */

include_once ROOT . '/models/News.php';

class NewsController
{

    public function actionIndex()
    {
        $news = array();
        $news = News::getAllNews();

        require_once ROOT . '/views/news/index.php';

        return true;
    }

    public function actionView($id)
    {
        if($id){

            $newsItem = News::getNewsItemByID($id);

            require_once ROOT . '/views/news/view.php';

        }

        return true;
    }

}