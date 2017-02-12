<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.02.2017
 * Time: 22:53
 */

class News
{

//    Этот метод возвращает одну новость по ее id

    public static function getNewsItemByID($id)
    {
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM news WHERE id=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }

    }

//    Этот метод возвращает все новости

    public static function getAllNews()
    {

        $db = Db::getConnection();
        $allNews = array();

        $result = $db->query('SELECT id, title, date, author_name, short_content FROM news ORDER BY id ASC LIMIT 10');

        $i = 0;
        while($row = $result->fetch()){

            $allNews[$i]['id'] = $row['id'];
            $allNews[$i]['title'] = $row['title'];
            $allNews[$i]['date'] = $row['date'];
            $allNews[$i]['author_name'] = $row['author_name'];
            $allNews[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return$allNews;

    }
}