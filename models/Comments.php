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

    /**
     * @param $options
     * @param $id
     * @return int|string
     */
    public static function createComment($options, $id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql =    'INSERT INTO comments'
                . '(post_id, comment_text, author, author_mail, author_website)'
                . 'VALUES'
                . '(:post_id, :comment_text, :author, :author_mail, :author_website)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':post_id', $id, PDO::PARAM_INT);
        $result->bindParam(':comment_text', $options['comment_text'], PDO::PARAM_STR);
        $result->bindParam(':author', $options['author'], PDO::PARAM_STR);
        $result->bindParam(':author_mail', $options['author_mail'], PDO::PARAM_STR);
        $result->bindParam(':author_website', $options['author_website'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

}