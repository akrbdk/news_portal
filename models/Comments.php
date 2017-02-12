<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2017
 * Time: 18:14
 */
class Comments
{

//    Получаем список комментариев к выбранной новости

    public static function getCommentsList($id)
    {

        $db = Db::getConnection();  //соединение с бд

        // текст запроса к бд

        $sql = 'SELECT id, comment_text, author, date FROM comments WHERE post_id = :id ORDER BY id ASC';

        //используем подготовленный запрос

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        //выполняем команду
        $result->execute();

        $i = 0;
        $comments = array();
        while($row = $result->fetch()){
            $comments[$i]['id'] = $row['id'];
            $comments[$i]['comment_text'] = $row['comment_text'];
            $comments[$i]['author'] = $row['author'];
            $comments[$i]['date'] = $row['date'];
            $i++;
        }

        return $comments;

    }

}